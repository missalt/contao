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

/* @ContaoInstallation/layout.html.twig */
class __TwigTemplate_c5fa767f3da8dabf8284ae682249665d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 3
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["language"] ?? null), "contao_html", null, true);
        yield "\">
<head>

  <meta charset=\"utf-8\">
  <title>";
        // line 7
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("install_tool", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield " | ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["host"] ?? null), "contao_html", null, true);
        yield "</title>
  <meta name=\"generator\" content=\"Contao Open Source CMS\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,shrink-to-fit=no\">
  <meta name=\"robots\" content=\"noindex,nofollow\">

  <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/fonts.min.css"), "contao_html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/basic.min.css"), "contao_html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/install.min.css"), "contao_html", null, true);
        yield "\">

  <script>var Contao={theme:'flexible',path:'";
        // line 16
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["path"] ?? null), "contao_html", null, true);
        yield "'}</script>
  <script src=\"";
        // line 17
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mootools/js/mootools.min.js"), "contao_html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 18
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/contaocore/mootao.min.js"), "contao_html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 19
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/contaocore/core.min.js"), "contao_html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 20
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("system/themes/flexible/hover.min.js"), "contao_html", null, true);
        yield "\"></script>

</head>
<body class=\"";
        // line 23
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["ua"] ?? null), "contao_html", null, true);
        yield "\">

  <header id=\"header\">
    <h1>";
        // line 26
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("install_tool", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</h1>
  </header>

  <div id=\"container\">
    <main id=\"main\">
      ";
        // line 31
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 32
        yield "    </main>
  </div>

</body>
</html>
";
        return; yield '';
    }

    // line 31
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoInstallation/layout.html.twig";
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
        return array (  120 => 31,  110 => 32,  108 => 31,  100 => 26,  94 => 23,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  67 => 14,  63 => 13,  59 => 12,  49 => 7,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/layout.html.twig", "/var/www/html/vendor/contao/installation-bundle/src/Resources/views/layout.html.twig");
    }
}
