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

/* @ContaoCore/Frontend/preview_toolbar_base.html.twig */
class __TwigTemplate_2b62ac94f3e0de041f641b57329b4bd6 extends Template
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
        // line 2
        yield "<div class=\"cto-toolbar__open\">
    <a href=\"#\" title=\"";
        // line 3
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.openToolbar", [], "contao_default"), "contao_html", null, true);
        yield "\">";
        yield $this->env->getFunction('include')->getCallable()($this->env, $context, "@ContaoCore/Collector/contao.svg");
        yield "</a>
</div>
<div
    class=\"cto-toolbar__inside\"
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 8
            yield "        data-";
            yield $this->env->getFilter('e')->getCallable()($this->env, $context["key"], "contao_html_attr", null, true);
            yield "=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $context["value"], "contao_html", null, true);
            yield "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield ">
    <form action=\"";
        // line 11
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["action"] ?? null), "contao_html", null, true);
        yield "\" method=\"post\" autocomplete=\"off\">
        <div class=\"formbody\">
            ";
        // line 13
        if (($context["badgeTitle"] ?? null)) {
            // line 14
            yield "                <span class=\"badge-title\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["badgeTitle"] ?? null), "contao_html", null, true);
            yield "</span>
            ";
        }
        // line 16
        yield "            <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_switch\">
            <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 17
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["request_token"] ?? null), "contao_html", null, true);
        yield "\">
            <div>
                <button type=\"button\" id=\"copyPublishedPath\" class=\"tl_submit\">";
        // line 19
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.copyURL", [], "contao_default"), "contao_html", null, true);
        yield "</button>
                ";
        // line 20
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["share"] ?? null))) {
            // line 21
            yield "                    <a href=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["share"] ?? null), "contao_html", null, true);
            yield "\" target=\"_blank\" class=\"tl_submit\" onclick=\"window.open(this.href+'&amp;url='+location.href);return false\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.shareURL", [], "contao_default"), "contao_html", null, true);
            yield "</a>
                ";
        }
        // line 23
        yield "            </div>
            ";
        // line 24
        if (($context["canSwitchUser"] ?? null)) {
            // line 25
            yield "                <div>
                    <label for=\"ctrl_user\">";
            // line 26
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.feUser", [], "contao_default"), "contao_html", null, true);
            yield ":</label>
                    <input type=\"text\" name=\"user\" id=\"ctrl_user\" list=\"userlist\" class=\"tl_text user\" placeholder=\"";
            // line 27
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.username", [], "contao_default"), "contao_html", null, true);
            yield "\" value=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["user"] ?? null), "contao_html", null, true);
            yield "\">
                    <datalist id=\"userlist\"></datalist>
                </div>
            ";
        }
        // line 31
        yield "            <div>
                <label for=\"ctrl_unpublished\">";
        // line 32
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.hiddenElements", [], "contao_default"), "contao_html", null, true);
        yield ":</label>
                <select name=\"unpublished\" id=\"ctrl_unpublished\" class=\"tl_select\">
                    <option value=\"hide\">";
        // line 34
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.hiddenHide", [], "contao_default"), "contao_html", null, true);
        yield "</option>
                    <option value=\"show\"";
        // line 35
        if (($context["show"] ?? null)) {
            yield " selected";
        }
        yield ">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.hiddenShow", [], "contao_default"), "contao_html", null, true);
        yield "</option>
                </select>
                <button type=\"submit\" class=\"tl_submit\">";
        // line 37
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.apply", [], "contao_default"), "contao_html", null, true);
        yield "</button>
            </div>
        </div>
    </form>
    <div class=\"cto-toolbar__close\"><a href=\"#\" title=\"";
        // line 41
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.closeToolbar", [], "contao_default"), "contao_html", null, true);
        yield "\">&times;</a></div>
</div>
<div class=\"cto-toolbar__clear\"></div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoCore/Frontend/preview_toolbar_base.html.twig";
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
        return array (  152 => 41,  145 => 37,  136 => 35,  132 => 34,  127 => 32,  124 => 31,  115 => 27,  111 => 26,  108 => 25,  106 => 24,  103 => 23,  95 => 21,  93 => 20,  89 => 19,  84 => 17,  81 => 16,  75 => 14,  73 => 13,  68 => 11,  65 => 10,  54 => 8,  50 => 7,  41 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Frontend/preview_toolbar_base.html.twig", "/var/www/html/vendor/contao/core-bundle/src/Resources/views/Frontend/preview_toolbar_base.html.twig");
    }
}
