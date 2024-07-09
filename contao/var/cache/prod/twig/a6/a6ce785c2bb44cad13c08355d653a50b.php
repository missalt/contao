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

/* @ContaoCore/Backend/be_filesync_report.html.twig */
class __TwigTemplate_1a05cf39cbeac1e38788cbc24b134cbb extends Template
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
        yield "
";
        // line 4
        yield "<div class=\"tl_message\">
    <p class=\"tl_confirm\">";
        // line 5
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncComplete", [], "contao_tl_files"), "contao_html", null, true);
        yield "</p>
</div>
<div id=\"tl_buttons\">
    <a href=\"";
        // line 8
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["referer"] ?? null), "contao_html", null, true);
        yield "\" class=\"header_back\" title=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.backBTTitle", [], "contao_default"), "contao_html", null, true);
        yield "\" accesskey=\"b\" onclick=\"Backend.getScrollOffset()\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.backBT", [], "contao_default"), "contao_html", null, true);
        yield "</a>
</div>

";
        // line 12
        yield "<div id=\"result-list\">
    ";
        // line 13
        $context["modified"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToUpdate", [], "any", false, false, false, 13), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "updatesHash", [], "any", false, false, false, 13); });
        // line 14
        yield "    ";
        $context["moved"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToUpdate", [], "any", false, false, false, 14), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "updatesPath", [], "any", false, false, false, 14); });
        // line 15
        yield "
    <p>";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncResult", [Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToCreate", [], "any", false, false, false, 16)), Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["modified"] ?? null)), "-", Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["moved"] ?? null)), Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToDelete", [], "any", false, false, false, 16))], "contao_tl_files");
        yield "</p>

    ";
        // line 19
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToCreate", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            yield "        <p class=\"tl_new\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncAdded", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 20)], "contao_tl_files"), "contao_html", null, true);
            yield "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
    ";
        // line 24
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["modified"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            yield "        <p class=\"tl_info\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncChanged", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "existingPath", [], "any", false, false, false, 25)], "contao_tl_files"), "contao_html", null, true);
            yield "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
    ";
        // line 29
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["moved"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            yield "        <p class=\"tl_info\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncMoved", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "existingPath", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "newPath", [], "any", false, false, false, 30)], "contao_tl_files"), "contao_html", null, true);
            yield "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
    ";
        // line 34
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["change_set"] ?? null), "itemsToDelete", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            yield "        <p class=\"tl_error\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_files.syncDeleted", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 35)], "contao_tl_files"), "contao_html", null, true);
            yield "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "</div>

";
        // line 40
        yield "<div class=\"tl_formbody_submit\">
    <div class=\"tl_submit_container\">
        <a href=\"";
        // line 42
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["referer"] ?? null), "contao_html", null, true);
        yield "\" class=\"tl_submit\" style=\"display:inline-block\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.continue", [], "contao_default"), "contao_html", null, true);
        yield "</a>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_filesync_report.html.twig";
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
        return array (  149 => 42,  145 => 40,  141 => 37,  132 => 35,  127 => 34,  124 => 32,  115 => 30,  110 => 29,  107 => 27,  98 => 25,  93 => 24,  90 => 22,  81 => 20,  76 => 19,  71 => 16,  68 => 15,  65 => 14,  63 => 13,  60 => 12,  50 => 8,  44 => 5,  41 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_filesync_report.html.twig", "/var/www/html/vendor/contao/core-bundle/src/Resources/views/Backend/be_filesync_report.html.twig");
    }
}
