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

/* @SchebTwoFactor/Authentication/form.html.twig */
class __TwigTemplate_f39c7d295eb943ec21acb94eda4fe348 extends Template
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
        // line 5
        yield "
";
        // line 7
        if (($context["authenticationError"] ?? null)) {
            // line 8
            yield "<p>";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["authenticationError"] ?? null), ($context["authenticationErrorData"] ?? null), "SchebTwoFactorBundle"), "html", null, true);
            yield "</p>
";
        }
        // line 10
        yield "
";
        // line 12
        yield "<p>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("choose_provider", [], "SchebTwoFactorBundle"), "html", null, true);
        yield ":
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["availableTwoFactorProviders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 14
            yield "        <a href=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("2fa_login", ["preferProvider" => $context["provider"]]), "html", null, true);
            yield "\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $context["provider"], "html", null, true);
            yield "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "</p>

";
        // line 19
        yield "<p class=\"label\"><label for=\"_auth_code\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("auth_code", [], "SchebTwoFactorBundle"), "html", null, true);
        yield " ";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["twoFactorProvider"] ?? null), "html", null, true);
        yield ":</label></p>

<form class=\"form\" action=\"";
        // line 21
        ((($context["checkPathUrl"] ?? null)) ? (yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["checkPathUrl"] ?? null), "html", null, true)) : (yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["checkPathRoute"] ?? null))));
        yield "\" method=\"post\">
    <p class=\"widget\">
        <input
            id=\"_auth_code\"
            type=\"text\"
            name=\"";
        // line 26
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["authCodeParameterName"] ?? null), "html", null, true);
        yield "\"
            autocomplete=\"one-time-code\"
            autofocus
            ";
        // line 35
        yield "        />
    </p>

    ";
        // line 38
        if (($context["displayTrustedOption"] ?? null)) {
            // line 39
            yield "        <p class=\"widget\"><label for=\"_trusted\"><input id=\"_trusted\" type=\"checkbox\" name=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["trustedParameterName"] ?? null), "html", null, true);
            yield "\" /> ";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("trusted", [], "SchebTwoFactorBundle"), "html", null, true);
            yield "</label></p>
    ";
        }
        // line 41
        yield "    ";
        if (($context["isCsrfProtectionEnabled"] ?? null)) {
            // line 42
            yield "        <input type=\"hidden\" name=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["csrfParameterName"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken(($context["csrfTokenId"] ?? null)), "html", null, true);
            yield "\">
    ";
        }
        // line 44
        yield "    <p class=\"submit\"><input type=\"submit\" value=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login", [], "SchebTwoFactorBundle"), "html", null, true);
        yield "\" /></p>
</form>

";
        // line 48
        yield "<p class=\"cancel\"><a href=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["logoutPath"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel", [], "SchebTwoFactorBundle"), "html", null, true);
        yield "</a></p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SchebTwoFactor/Authentication/form.html.twig";
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
        return array (  131 => 48,  124 => 44,  116 => 42,  113 => 41,  105 => 39,  103 => 38,  98 => 35,  92 => 26,  84 => 21,  76 => 19,  72 => 16,  61 => 14,  57 => 13,  52 => 12,  49 => 10,  43 => 8,  41 => 7,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SchebTwoFactor/Authentication/form.html.twig", "/var/www/html/vendor/scheb/2fa-bundle/Resources/views/Authentication/form.html.twig");
    }
}
