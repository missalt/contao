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

/* @ContaoCore/Backend/be_undo_label.html.twig */
class __TwigTemplate_94cc6354cd1122a6f8181ddaa6550aaf extends Template
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
        yield "<div class=\"tl_undo_header\">
    <div class=\"tstamp\">
        <span class=\"date\">";
        // line 4
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "tstamp", [], "any", false, false, false, 4), ($context["dateFormat"] ?? null)), "contao_html", null, true);
        yield "</span>
        <span class=\"time\">";
        // line 5
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "tstamp", [], "any", false, false, false, 5), ($context["timeFormat"] ?? null)), "contao_html", null, true);
        yield "</span>
    </div>
    <div>
        ";
        // line 8
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_undo.pid.0", [], "contao_tl_undo"), "contao_html", null, true);
        yield ": <strong>";
        if (($context["user"] ?? null)) {
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 8), "contao_html", null, true);
        } else {
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "pid", [], "any", false, false, false, 8), "contao_html", null, true);
        }
        yield "</strong>
    </div>
    <div class=\"source\">
        ";
        // line 11
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_undo.fromTable.0", [], "contao_tl_undo"), "contao_html", null, true);
        yield ": <strong>";
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["fromTable"] ?? null), "contao_html", null, true);
        yield ".";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["originalRow"] ?? null), "id", [], "any", false, false, false, 11), "contao_html", null, true);
        yield "</strong>
    </div>
    ";
        // line 13
        if (($context["parent"] ?? null)) {
            // line 14
            yield "        <div>
            ";
            // line 15
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.parent", [], "contao_default"), "contao_html", null, true);
            yield ": <strong>";
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "table", [], "any", false, false, false, 15), "contao_html", null, true);
            yield ".";
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "id", [], "any", false, false, false, 15), "contao_html", null, true);
            yield "</strong>
        </div>
    ";
        }
        // line 18
        yield "</div>

<div class=\"tl_undo_preview\">
    ";
        // line 21
        if ( !is_iterable(($context["preview"] ?? null))) {
            // line 22
            yield "        ";
            yield ($context["preview"] ?? null);
            yield "
    ";
        } else {
            // line 24
            yield "        <table>
            <tr>
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["preview"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 27
                yield "                    <td>";
                yield $context["value"];
                yield "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "            </tr>
        </table>
    ";
        }
        // line 32
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_undo_label.html.twig";
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
        return array (  123 => 32,  118 => 29,  109 => 27,  105 => 26,  101 => 24,  95 => 22,  93 => 21,  88 => 18,  78 => 15,  75 => 14,  73 => 13,  64 => 11,  52 => 8,  46 => 5,  42 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_undo_label.html.twig", "/var/www/html/vendor/contao/core-bundle/src/Resources/views/Backend/be_undo_label.html.twig");
    }
}
