<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @ContaoCore/Error/invalid_request_token.html.twig */
class __TwigTemplate_e756f6b2fca967d3fb99fd11f18850a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'matter' => [$this, 'block_matter'],
            'howToFix' => [$this, 'block_howToFix'],
            'explain' => [$this, 'block_explain'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "@ContaoCore/Error/invalid_request_token.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.requestToken", [], "contao_exception"), "contao_html", null, true);
        yield "
";
        return; yield '';
    }

    // line 6
    public function block_matter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "    <p>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.invalidToken", [], "contao_exception"), "contao_html", null, true);
        yield "</p>
";
        return; yield '';
    }

    // line 9
    public function block_howToFix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "    <p>";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenRetry", [], "contao_exception");
        yield "</p>
";
        return; yield '';
    }

    // line 12
    public function block_explain($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        yield "    <p>";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenExplainOne", [], "contao_exception");
        yield "</p>
    <p>";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("XPT.tokenExplainTwo", ["https://to.contao.org/support"], "contao_exception");
        yield "</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoCore/Error/invalid_request_token.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  95 => 14,  90 => 13,  86 => 12,  78 => 10,  74 => 9,  66 => 7,  62 => 6,  54 => 4,  50 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Error/invalid_request_token.html.twig", "/var/www/html/vendor/contao/core-bundle/src/Resources/views/Error/invalid_request_token.html.twig");
    }
}
