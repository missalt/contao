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

/* @ContaoInstallation/configuration_error.html.twig */
class __TwigTemplate_165b98f2ef94c483b85ee62d60328fa8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ContaoInstallation/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "@ContaoInstallation/configuration_error.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "  <fieldset class=\"tl_tbox nolegend\">
    <h3>";
        // line 6
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("an_error_occurred", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</h3>
    ";
        // line 7
        if ((($context["errorCode"] ?? null) == 1)) {
            // line 8
            yield "      <p class=\"tl_error\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_version", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
      <p>";
            // line 9
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_version_explain", [($context["version"] ?? null)], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
    ";
        } elseif ((        // line 10
($context["errorCode"] ?? null) == 2)) {
            // line 11
            yield "      <p class=\"tl_error\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_collation", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
      <p>";
            // line 12
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_collation_explain", [($context["collation"] ?? null)], "ContaoInstallationBundle");
            yield "</p>
      <div id=\"sql_wrapper\">
        <pre>doctrine:
    dbal:
        connections:
            default:
                default_table_options:
                    charset: utf8
                    collation: utf8_unicode_ci</pre>
      </div>
    ";
        } elseif ((        // line 22
($context["errorCode"] ?? null) == 3)) {
            // line 23
            yield "      <p class=\"tl_error\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_engine", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
      <p>";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("unsupported_engine_explain", [($context["engine"] ?? null)], "ContaoInstallationBundle");
            yield "</p>
      <div id=\"sql_wrapper\">
        <pre>doctrine:
    dbal:
        connections:
            default:
                default_table_options:
                    engine: MyISAM
                    row_format: ~</pre>
      </div>
    ";
        } elseif ((        // line 34
($context["errorCode"] ?? null) == 4)) {
            // line 35
            yield "      <p class=\"tl_error\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("engine_mismatch", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
      <p>";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("engine_mismatch_explain", [($context["engine"] ?? null)], "ContaoInstallationBundle");
            yield "</p>
      <div id=\"sql_wrapper\">
        <pre>doctrine:
    dbal:
        connections:
            default:
                default_table_options:
                    charset: utf8
                    collation: utf8_unicode_ci</pre>
      </div>
    ";
        } elseif ((        // line 46
($context["errorCode"] ?? null) == 5)) {
            // line 47
            yield "      <p class=\"tl_error\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("innodb_large_prefix", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
      <p>";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("innodb_large_prefix_explain", [], "ContaoInstallationBundle");
            yield "</p>
      <div id=\"sql_wrapper\">
        <pre>doctrine:
    dbal:
        connections:
            default:
                default_table_options:
                    charset: utf8
                    collation: utf8_unicode_ci</pre>
      </div>
    ";
        } elseif ((        // line 58
($context["errorCode"] ?? null) == 6)) {
            // line 59
            yield "      <p class=\"tl_error\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("innodb_additional", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
      <p>";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("innodb_additional_explain", [], "ContaoInstallationBundle");
            yield "</p>
      <div id=\"sql_wrapper\">
        <pre>innodb_large_prefix = 1
innodb_file_format = Barracuda
innodb_file_per_table = 1</pre>
      </div>
    ";
        }
        // line 67
        yield "  </fieldset>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoInstallation/configuration_error.html.twig";
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
        return array (  166 => 67,  156 => 60,  151 => 59,  149 => 58,  136 => 48,  131 => 47,  129 => 46,  116 => 36,  111 => 35,  109 => 34,  96 => 24,  91 => 23,  89 => 22,  76 => 12,  71 => 11,  69 => 10,  65 => 9,  60 => 8,  58 => 7,  54 => 6,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/configuration_error.html.twig", "/var/www/html/vendor/contao/installation-bundle/src/Resources/views/configuration_error.html.twig");
    }
}
