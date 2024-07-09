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

/* @ContaoCore/Backend/be_page.html.twig */
class __TwigTemplate_4e318c17db033d1a67453b289a4ec927 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\LegacyTemplateFunctionsRuntime')->renderContaoBackendTemplate(["main" =>         $this->unwrap()->renderBlock("main", $context, $blocks), "error" =>         $this->unwrap()->renderBlock("error", $context, $blocks), "headline" =>         $this->unwrap()->renderBlock("headline", $context, $blocks)]);
        // line 5
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_page.html.twig";
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
        return array (  40 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_page.html.twig", "/var/www/html/vendor/contao/core-bundle/src/Resources/views/Backend/be_page.html.twig");
    }
}
