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

/* @ContaoInstallation/database.html.twig */
class __TwigTemplate_e91029adc3f552cb16bbe3f4f0d7a90a extends Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "@ContaoInstallation/database.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "  <fieldset class=\"tl_tbox nolegend\">
    <div>
      <h3>";
        // line 7
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_connection", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</h3>
      ";
        // line 8
        if (array_key_exists("database_error", $context)) {
            // line 9
            yield "        <p class=\"tl_error\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["database_error"] ?? null), "contao_html", null, true);
            yield "</p>
      ";
        }
        // line 11
        yield "      <p>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_connection_explain", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</p>
      <form method=\"post\">
        <div class=\"tl_formbody\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_database_login\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 15
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["request_token"] ?? null), "contao_html", null, true);
        yield "\">
          <h4><label for=\"dbHost\">";
        // line 16
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_host", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</label></h4>
          <input type=\"text\" name=\"dbHost\" id=\"dbHost\" class=\"tl_text\" value=\"";
        // line 17
        yield $this->env->getFilter('escape')->getCallable()($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_host", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_host", [], "any", false, false, false, 17), "localhost")) : ("localhost")), "contao_html", null, true);
        yield "\">
          <h4><label for=\"dbPort\">";
        // line 18
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_port", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</label></h4>
          <input type=\"text\" name=\"dbPort\" id=\"dbPort\" class=\"tl_text\" value=\"";
        // line 19
        yield $this->env->getFilter('escape')->getCallable()($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_port", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_port", [], "any", false, false, false, 19), 3306)) : (3306)), "contao_html", null, true);
        yield "\">
          <h4><label for=\"dbUser\">";
        // line 20
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_user", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</label></h4>
          <input type=\"text\" name=\"dbUser\" id=\"dbUser\" class=\"tl_text\" value=\"";
        // line 21
        yield $this->env->getFilter('escape')->getCallable()($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_user", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_user", [], "any", false, false, false, 21), "")) : ("")), "contao_html", null, true);
        yield "\">
          <h4><label for=\"dbPassword\">";
        // line 22
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_password", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</label></h4>
          <input type=\"password\" name=\"dbPassword\" id=\"dbPassword\" class=\"tl_text\" value=\"";
        // line 23
        yield $this->env->getFilter('escape')->getCallable()($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_password", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_password", [], "any", false, false, false, 23), "")) : ("")), "contao_html", null, true);
        yield "\">
          <h4><label for=\"dbName\">";
        // line 24
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("database_name", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</label></h4>
          <input type=\"text\" name=\"dbName\" id=\"dbName\" class=\"tl_text\" value=\"";
        // line 25
        yield $this->env->getFilter('escape')->getCallable()($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_name", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "database_name", [], "any", false, false, false, 25), "")) : ("")), "contao_html", null, true);
        yield "\">
        </div>
        <div class=\"tl_formbody_submit\">
          <div class=\"tl_submit_container\">
            <button type=\"submit\" class=\"tl_submit\">";
        // line 29
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("save_settings", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</button>
          </div>
        </div>
      </form>
    </div>
  </fieldset>
  <script>
    \$('dbHost').focus();
  </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoInstallation/database.html.twig";
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
        return array (  122 => 29,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  67 => 11,  61 => 9,  59 => 8,  55 => 7,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/database.html.twig", "/var/www/html/vendor/contao/installation-bundle/src/Resources/views/database.html.twig");
    }
}
