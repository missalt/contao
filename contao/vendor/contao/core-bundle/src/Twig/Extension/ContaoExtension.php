<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Twig\Extension;

use Contao\BackendTemplateTrait;
use Contao\CoreBundle\InsertTag\ChunkedText;
use Contao\CoreBundle\Twig\Inheritance\DynamicExtendsTokenParser;
use Contao\CoreBundle\Twig\Inheritance\DynamicIncludeTokenParser;
use Contao\CoreBundle\Twig\Interop\ContaoEscaper;
use Contao\CoreBundle\Twig\Interop\ContaoEscaperNodeVisitor;
use Contao\CoreBundle\Twig\Interop\PhpTemplateProxyNode;
use Contao\CoreBundle\Twig\Interop\PhpTemplateProxyNodeVisitor;
use Contao\CoreBundle\Twig\Loader\ContaoFilesystemLoader;
use Contao\CoreBundle\Twig\Runtime\FigureRendererRuntime;
use Contao\CoreBundle\Twig\Runtime\InsertTagRuntime;
use Contao\CoreBundle\Twig\Runtime\LegacyTemplateFunctionsRuntime;
use Contao\CoreBundle\Twig\Runtime\PictureConfigurationRuntime;
use Contao\CoreBundle\Twig\Runtime\SchemaOrgRuntime;
use Contao\FrontendTemplateTrait;
use Contao\Template;
use Symfony\Component\Filesystem\Path;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\Extension\CoreExtension;
use Twig\Extension\EscaperExtension;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * @experimental
 */
final class ContaoExtension extends AbstractExtension
{
    private Environment $environment;
    private ContaoFilesystemLoader $filesystemLoader;
    private array $contaoEscaperFilterRules = [];

    public function __construct(Environment $environment, ContaoFilesystemLoader $filesystemLoader)
    {
        $this->environment = $environment;
        $this->filesystemLoader = $filesystemLoader;

        $contaoEscaper = new ContaoEscaper();

        /** @var EscaperExtension $escaperExtension */
        $escaperExtension = $environment->getExtension(EscaperExtension::class);

        // Forward compatibility with twig/twig >=3.10.0
        if (method_exists($escaperExtension, 'setEnvironment')) {
            $escaperExtension->setEnvironment($environment);
        }

        $escaperExtension->setEscaper('contao_html', [$contaoEscaper, 'escapeHtml']);
        $escaperExtension->setEscaper('contao_html_attr', [$contaoEscaper, 'escapeHtmlAttr']);

        // Use our escaper on all templates in the "@Contao" and "@Contao_*"
        // namespaces, as well as the existing bundle templates we're already
        // shipping.
        $this->addContaoEscaperRule('%^@Contao(_[a-zA-Z0-9_-]*)?/%');
        $this->addContaoEscaperRule('%^@Contao(Core|Installation)/%');
    }

    /**
     * Adds a Contao escaper rule.
     *
     * If a template name matches any of the defined rules, it will be processed
     * with the "contao_html" escaper strategy. Make sure your rule will only
     * match templates with input encoded contexts!
     */
    public function addContaoEscaperRule(string $regularExpression): void
    {
        if (\in_array($regularExpression, $this->contaoEscaperFilterRules, true)) {
            return;
        }

        $this->contaoEscaperFilterRules[] = $regularExpression;
    }

    public function getNodeVisitors(): array
    {
        return [
            // Enables the "contao_twig" escaper for Contao templates with
            // input encoding
            new ContaoEscaperNodeVisitor(
                fn () => $this->contaoEscaperFilterRules
            ),
            // Allows rendering PHP templates with the legacy framework by
            // installing proxy nodes
            new PhpTemplateProxyNodeVisitor(self::class),
            // Triggers PHP deprecations if deprecated constructs are found in
            // the parsed templates.
            new DeprecationsNodeVisitor(),
        ];
    }

    public function getTokenParsers(): array
    {
        return [
            // Overwrite the parsers for the "extends" and "include" tags to
            // additionally support the Contao template hierarchy
            new DynamicExtendsTokenParser($this->filesystemLoader),
            new DynamicIncludeTokenParser($this->filesystemLoader),
        ];
    }

    public function getFunctions(): array
    {
        $includeFunctionCallable = $this->getTwigIncludeFunction()->getCallable();

        return [
            // Overwrite the "include" function to additionally support the
            // Contao template hierarchy
            new TwigFunction(
                'include',
                function (Environment $env, $context, $template, $variables = [], $withContext = true, $ignoreMissing = false, $sandboxed = false /* we need named arguments here */) use ($includeFunctionCallable) {
                    $args = \func_get_args();
                    $args[2] = DynamicIncludeTokenParser::adjustTemplateName($template, $this->filesystemLoader);

                    return $includeFunctionCallable(...$args);
                },
                ['needs_environment' => true, 'needs_context' => true, 'is_safe' => ['all']]
            ),
            new TwigFunction(
                'contao_figure',
                [FigureRendererRuntime::class, 'render'],
                ['is_safe' => ['html']]
            ),
            new TwigFunction(
                'picture_config',
                [PictureConfigurationRuntime::class, 'fromArray']
            ),
            new TwigFunction(
                'insert_tag',
                [InsertTagRuntime::class, 'renderInsertTag'],
            ),
            new TwigFunction(
                'add_schema_org',
                [SchemaOrgRuntime::class, 'add']
            ),
            new TwigFunction(
                'contao_sections',
                [LegacyTemplateFunctionsRuntime::class, 'renderLayoutSections'],
                ['needs_context' => true, 'is_safe' => ['html']]
            ),
            new TwigFunction(
                'contao_section',
                [LegacyTemplateFunctionsRuntime::class, 'renderLayoutSection'],
                ['needs_context' => true, 'is_safe' => ['html']]
            ),
            new TwigFunction(
                'render_contao_backend_template',
                [LegacyTemplateFunctionsRuntime::class, 'renderContaoBackendTemplate'],
                ['is_safe' => ['html']]
            ),
        ];
    }

    public function getFilters(): array
    {
        $escaperFilter = static function (Environment $env, $string, $strategy = 'html', $charset = null, $autoescape = false) {
            if ($string instanceof ChunkedText) {
                $parts = [];

                foreach ($string as [$type, $chunk]) {
                    if (ChunkedText::TYPE_RAW === $type) {
                        $parts[] = $chunk;
                    } else {
                        $parts[] = twig_escape_filter($env, $chunk, $strategy, $charset);
                    }
                }

                return implode('', $parts);
            }

            return twig_escape_filter($env, $string, $strategy, $charset, $autoescape);
        };

        $twigEscaperFilterIsSafe = static function (Node $filterArgs): array {
            $expression = iterator_to_array($filterArgs)[0] ?? null;

            if ($expression instanceof ConstantExpression) {
                $value = $expression->getAttribute('value');

                // Our escaper strategy variants that tolerate input encoding are
                // also safe in the original context (e.g. for the filter argument
                // 'contao_html' we will return ['contao_html', 'html']).
                if (\in_array($value, ['contao_html', 'contao_html_attr'], true)) {
                    return [$value, substr($value, 7)];
                }
            }

            return twig_escape_filter_is_safe($filterArgs);
        };

        return [
            // Overwrite the "escape" filter to additionally support chunked
            // text and our escaper strategies
            new TwigFilter(
                'escape',
                $escaperFilter,
                ['needs_environment' => true, 'is_safe_callback' => $twigEscaperFilterIsSafe],
            ),
            new TwigFilter(
                'e',
                $escaperFilter,
                ['needs_environment' => true, 'is_safe_callback' => $twigEscaperFilterIsSafe],
            ),
            new TwigFilter(
                'insert_tag',
                [InsertTagRuntime::class, 'replaceInsertTags']
            ),
            new TwigFilter(
                'insert_tag_raw',
                [InsertTagRuntime::class, 'replaceInsertTagsChunkedRaw']
            ),
        ];
    }

    /**
     * @see PhpTemplateProxyNode
     * @see PhpTemplateProxyNodeVisitor
     *
     * @internal
     */
    public function renderLegacyTemplate(string $name, array $blocks, array $context): string
    {
        $template = Path::getFilenameWithoutExtension($name);

        $partialTemplate = new class($template) extends Template {
            use BackendTemplateTrait;
            use FrontendTemplateTrait;

            public function setBlocks(array $blocks): void
            {
                $this->arrBlocks = array_map(static fn ($block) => \is_array($block) ? $block : [$block], $blocks);
            }

            public function parse(): string
            {
                return $this->inherit();
            }

            protected function renderTwigSurrogateIfExists(): ?string
            {
                return null;
            }
        };

        $partialTemplate->setData($context);
        $partialTemplate->setBlocks($blocks);

        return $partialTemplate->parse();
    }

    private function getTwigIncludeFunction(): TwigFunction
    {
        foreach ($this->environment->getExtension(CoreExtension::class)->getFunctions() as $function) {
            if ('include' === $function->getName()) {
                return $function;
            }
        }

        throw new \RuntimeException(sprintf('The %s class was expected to register the "include" Twig function but did not.', CoreExtension::class));
    }
}
