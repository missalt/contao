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

/* @ContaoCore/Image/Studio/_macros.html.twig */
class __TwigTemplate_fe15dd811a7dfb19f03fbbc57be7f92e extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 42
        yield "

";
        // line 102
        yield "
";
        return; yield '';
    }

    // line 50
    public function macro_figure($__figure__ = null, $__options__ = [], $__addSchemaOrg__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "figure" => $__figure__,
            "options" => $__options__,
            "addSchemaOrg" => $__addSchemaOrg__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 51
            $context["figure_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 51), "attr", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 51), "attr", [], "any", false, false, false, 51), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", false, false, false, 51), [])) : ([])));
            // line 52
            $context["link_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 52), "link_attr", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 52), "link_attr", [], "any", false, false, false, 52), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link_attr", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "link_attr", [], "any", false, false, false, 52), [])) : ([])));
            yield "
    <figure";
            // line 53
            yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [($context["figure_attributes"] ?? null)], 53, $context, $this->getSourceContext());
            yield ">
        ";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "linkHref", [], "any", false, false, false, 54)) {
                // line 55
                $context["base_attributes"] = Twig\Extension\CoreExtension::merge(["href" => CoreExtension::getAttribute($this->env, $this->source,                 // line 56
($context["figure"] ?? null), "linkHref", [], "any", false, false, false, 56), "title" => (((CoreExtension::getAttribute($this->env, $this->source,                 // line 57
($context["figure"] ?? null), "hasLightbox", [], "any", false, false, false, 57) && CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 57))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57)) : (null))], CoreExtension::getAttribute($this->env, $this->source,                 // line 58
($context["figure"] ?? null), "linkAttributes", [], "any", false, false, false, 58));
                // line 59
                yield "<a";
                yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [Twig\Extension\CoreExtension::merge(($context["base_attributes"] ?? null), ($context["link_attributes"] ?? null))], 59, $context, $this->getSourceContext());
                yield ">
";
                // line 60
                yield CoreExtension::callMacro($macros["_self"], "macro_picture", [($context["figure"] ?? null), ($context["options"] ?? null)], 60, $context, $this->getSourceContext());
                yield "
            </a>";
            } else {
                // line 63
                yield CoreExtension::callMacro($macros["_self"], "macro_picture", [($context["figure"] ?? null), ($context["options"] ?? null)], 63, $context, $this->getSourceContext());
            }
            // line 65
            yield "        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_caption", [($context["figure"] ?? null), ($context["options"] ?? null)], 65, $context, $this->getSourceContext());
            yield "
    </figure>
    ";
            // line 67
            if (($context["addSchemaOrg"] ?? null)) {
                // line 68
                $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\SchemaOrgRuntime')->add(CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "schemaOrgData", [], "any", false, false, false, 68));
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 77
    public function macro_picture($__figure__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "figure" => $__figure__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 78
            $context["picture_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 78), "picture_attr", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 78), "picture_attr", [], "any", false, false, false, 78), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "picture_attr", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "picture_attr", [], "any", false, false, false, 78), [])) : ([])));
            // line 79
            $context["source_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 79), "source_attr", [], "any", true, true, false, 79)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 79), "source_attr", [], "any", false, false, false, 79), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "source_attr", [], "any", true, true, false, 79)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "source_attr", [], "any", false, false, false, 79), [])) : ([])));
            // line 81
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 81), "sources", [], "any", false, false, false, 81)) {
                // line 82
                yield "<picture";
                yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [($context["picture_attributes"] ?? null)], 82, $context, $this->getSourceContext());
                yield ">
            ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 83), "sources", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                    // line 84
                    $context["defineProportions"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["source"], "width", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "width", [], "any", false, false, false, 84), false)) : (false)) && ((CoreExtension::getAttribute($this->env, $this->source, $context["source"], "height", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "height", [], "any", false, false, false, 84), false)) : (false)));
                    // line 85
                    $context["base_attributes"] = ["srcset" => CoreExtension::getAttribute($this->env, $this->source,                     // line 86
$context["source"], "srcset", [], "any", false, false, false, 86), "sizes" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 87
$context["source"], "sizes", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "sizes", [], "any", false, false, false, 87), null)) : (null)), "media" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 88
$context["source"], "media", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "media", [], "any", false, false, false, 88), null)) : (null)), "type" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 89
$context["source"], "type", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "type", [], "any", false, false, false, 89), null)) : (null)), "width" => ((                    // line 90
($context["defineProportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["source"], "width", [], "any", false, false, false, 90)) : (null)), "height" => ((                    // line 91
($context["defineProportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["source"], "height", [], "any", false, false, false, 91)) : (null))];
                    // line 93
                    yield "<source";
                    yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [Twig\Extension\CoreExtension::merge(($context["base_attributes"] ?? null), ($context["source_attributes"] ?? null))], 93, $context, $this->getSourceContext());
                    yield ">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                yield "
            ";
                // line 96
                yield CoreExtension::callMacro($macros["_self"], "macro_img", [($context["figure"] ?? null), ($context["options"] ?? null)], 96, $context, $this->getSourceContext());
                yield "
        </picture>";
            } else {
                // line 99
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_img", [($context["figure"] ?? null), ($context["options"] ?? null)], 99, $context, $this->getSourceContext());
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 106
    public function macro_img($__figure__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "figure" => $__figure__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 107
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 108
                yield "        ";
                $context["img_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 108), "img_attr", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 108), "img_attr", [], "any", false, false, false, 108), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "img_attr", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "img_attr", [], "any", false, false, false, 108), [])) : ([])));
                // line 109
                yield "
        ";
                // line 110
                $context["img"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 110), "img", [], "any", false, false, false, 110);
                // line 111
                yield "        ";
                $context["defineProportions"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", false, false, false, 111), false)) : (false)) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", false, false, false, 111), false)) : (false)));
                // line 112
                yield "
        ";
                // line 113
                $context["base_attributes"] = ["src" => CoreExtension::getAttribute($this->env, $this->source,                 // line 114
($context["img"] ?? null), "src", [], "any", false, false, false, 114), "alt" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 115
($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 115)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 115), "alt", [], "any", false, false, false, 115)) : ("")), "title" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 116
($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 116)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 116), "title", [], "any", false, false, false, 116)) ?: (null))) : (null)), "srcset" => (((CoreExtension::getAttribute($this->env, $this->source,                 // line 117
($context["img"] ?? null), "srcset", [], "any", true, true, false, 117) && (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "srcset", [], "any", false, false, false, 117) != CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "src", [], "any", false, false, false, 117)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "srcset", [], "any", false, false, false, 117)) : (null)), "sizes" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 118
($context["img"] ?? null), "sizes", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "sizes", [], "any", false, false, false, 118), null)) : (null)), "width" => ((                // line 119
($context["defineProportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", false, false, false, 119)) : (null)), "height" => ((                // line 120
($context["defineProportions"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", false, false, false, 120)) : (null)), "loading" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 121
($context["img"] ?? null), "loading", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "loading", [], "any", false, false, false, 121), null)) : (null)), "class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 122
($context["img"] ?? null), "class", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "class", [], "any", false, false, false, 122), null)) : (null))];
                // line 124
                yield "        <img";
                yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [Twig\Extension\CoreExtension::merge(($context["base_attributes"] ?? null), ($context["img_attributes"] ?? null))], 124, $context, $this->getSourceContext());
                yield ">
    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function macro_caption($__figure__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "figure" => $__figure__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 134
            $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 135
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 135) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 135), "caption", [], "any", false, false, false, 135))) {
                    // line 136
                    yield "            ";
                    $context["caption_attributes"] = Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 136), "caption_attr", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 136), "caption_attr", [], "any", false, false, false, 136), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "caption_attr", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "caption_attr", [], "any", false, false, false, 136), [])) : ([])));
                    // line 137
                    yield "            <figcaption";
                    yield CoreExtension::callMacro($macros["_self"], "macro_html_attributes", [($context["caption_attributes"] ?? null)], 137, $context, $this->getSourceContext());
                    yield ">";
                    // line 138
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 138), "caption", [], "any", false, false, false, 138);
                    // line 139
                    yield "</figcaption>
        ";
                }
                // line 141
                yield "    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 134
            yield Twig\Extension\CoreExtension::spaceless($___internal_parse_1_);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 154
    public function macro_html_attributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["attributes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === ($context["v"] ?? null)); }));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 156
                yield $this->env->getFilter('escape')->getCallable()($this->env, (" " . $context["attr"]), "contao_html", null, true);
                if ($context["value"]) {
                    yield "=\"";
                    yield $this->env->getFilter('escape')->getCallable()($this->env, $context["value"], "contao_html", null, true);
                    yield "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoCore/Image/Studio/_macros.html.twig";
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
        return array (  283 => 156,  279 => 155,  267 => 154,  261 => 134,  257 => 141,  253 => 139,  251 => 138,  247 => 137,  244 => 136,  241 => 135,  239 => 134,  226 => 133,  220 => 107,  213 => 124,  211 => 122,  210 => 121,  209 => 120,  208 => 119,  207 => 118,  206 => 117,  205 => 116,  204 => 115,  203 => 114,  202 => 113,  199 => 112,  196 => 111,  194 => 110,  191 => 109,  188 => 108,  186 => 107,  173 => 106,  165 => 99,  160 => 96,  157 => 95,  149 => 93,  147 => 91,  146 => 90,  145 => 89,  144 => 88,  143 => 87,  142 => 86,  141 => 85,  139 => 84,  135 => 83,  130 => 82,  128 => 81,  126 => 79,  124 => 78,  111 => 77,  104 => 68,  102 => 67,  96 => 65,  93 => 63,  88 => 60,  83 => 59,  81 => 58,  80 => 57,  79 => 56,  78 => 55,  76 => 54,  72 => 53,  68 => 52,  66 => 51,  52 => 50,  46 => 102,  42 => 42,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Image/Studio/_macros.html.twig", "/var/www/html/vendor/contao/core-bundle/src/Resources/views/Image/Studio/_macros.html.twig");
    }
}
