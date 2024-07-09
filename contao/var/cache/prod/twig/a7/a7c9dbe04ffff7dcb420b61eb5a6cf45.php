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

/* knp_menu.html.twig */
class __TwigTemplate_166df66130f6f0f750087e20d829be3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'compressed_root' => [$this, 'block_compressed_root'],
            'root' => [$this, 'block_root'],
            'list' => [$this, 'block_list'],
            'children' => [$this, 'block_children'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield from             $this->unwrap()->yieldBlock("root", $context, $blocks);
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_2_);
        return; yield '';
    }

    // line 17
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["listAttributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", [], "any", false, false, false, 18);
        // line 19
        yield from         $this->unwrap()->yieldBlock("list", $context, $blocks);
        return; yield '';
    }

    // line 22
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 23) &&  !(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 23) === 0)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 23))) {
            // line 24
            yield "    ";
            $macros["knp_menu"] = $this;
            // line 25
            yield "    <ul";
            yield CoreExtension::callMacro($macros["knp_menu"], "macro_attributes", [($context["listAttributes"] ?? null)], 25, $context, $this->getSourceContext());
            yield ">
        ";
            // line 26
            yield from             $this->unwrap()->yieldBlock("children", $context, $blocks);
            yield "
    </ul>
";
        }
        return; yield '';
    }

    // line 31
    public function block_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $context["currentOptions"] = ($context["options"] ?? null);
        // line 34
        $context["currentItem"] = ($context["item"] ?? null);
        // line 36
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 36))) {
            // line 37
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["depth" => (CoreExtension::getAttribute($this->env, $this->source, ($context["currentOptions"] ?? null), "depth", [], "any", false, false, false, 37) - 1)]);
        }
        // line 40
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [], "any", false, false, false, 40)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [], "any", false, false, false, 40) > 0))) {
            // line 41
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["matchingDepth" => (CoreExtension::getAttribute($this->env, $this->source, ($context["currentOptions"] ?? null), "matchingDepth", [], "any", false, false, false, 41) - 1)]);
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentItem"] ?? null), "children", [], "any", false, false, false, 43));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("item", $context, $blocks);
            yield "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? null);
        // line 48
        $context["options"] = ($context["currentOptions"] ?? null);
        return; yield '';
    }

    // line 51
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "displayed", [], "any", false, false, false, 52)) {
            // line 54
            $context["classes"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "attribute", ["class"], "method", false, false, false, 54))) ? ([CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "attribute", ["class"], "method", false, false, false, 54)]) : ([]));
            // line 55
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [($context["item"] ?? null)], "method", false, false, false, 55)) {
                // line 56
                $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", [], "any", false, false, false, 56)]);
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 57
($context["matcher"] ?? null), "isAncestor", [($context["item"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [], "any", false, false, false, 57)], "method", false, false, false, 57)) {
                // line 58
                $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", [], "any", false, false, false, 58)]);
            }
            // line 60
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", [], "any", false, false, false, 60)) {
                // line 61
                $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", [], "any", false, false, false, 61)]);
            }
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", [], "any", false, false, false, 63)) {
                // line 64
                $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", [], "any", false, false, false, 64)]);
            }
            // line 66
            yield "
    ";
            // line 68
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 68) &&  !(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 68) === 0))) {
                // line 69
                yield "        ";
                if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", [], "any", false, false, false, 69)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 69))) {
                    // line 70
                    $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", [], "any", false, false, false, 70)]);
                    // line 71
                    yield "        ";
                }
                // line 72
                yield "    ";
            } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", [], "any", false, false, false, 72))) {
                // line 73
                $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", [], "any", false, false, false, 73)]);
            }
            // line 76
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, false, 76);
            // line 77
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["classes"] ?? null))) {
                // line 78
                $context["attributes"] = Twig\Extension\CoreExtension::merge(($context["attributes"] ?? null), ["class" => Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " ")]);
            }
            // line 81
            yield "    ";
            $macros["knp_menu"] = $this;
            // line 82
            yield "    <li";
            yield CoreExtension::callMacro($macros["knp_menu"], "macro_attributes", [($context["attributes"] ?? null)], 82, $context, $this->getSourceContext());
            yield ">";
            // line 83
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 83)) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [($context["item"] ?? null)], "method", false, false, false, 83) || CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "currentAsLink", [], "any", false, false, false, 83)))) {
                // line 84
                yield "        ";
                yield from                 $this->unwrap()->yieldBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                yield "        ";
                yield from                 $this->unwrap()->yieldBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", ["class"], "method", false, false, false, 89))) ? ([CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", ["class"], "method", false, false, false, 89)]) : ([]));
            // line 90
            $context["childrenClasses"] = Twig\Extension\CoreExtension::merge(($context["childrenClasses"] ?? null), [("menu_level_" . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 90))]);
            // line 91
            $context["listAttributes"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", [], "any", false, false, false, 91), ["class" => Twig\Extension\CoreExtension::join(($context["childrenClasses"] ?? null), " ")]);
            // line 92
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("list", $context, $blocks);
            yield "
    </li>
";
        }
        return; yield '';
    }

    // line 97
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $macros["knp_menu"] = $this;
        yield "<a href=\"";
        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 97), "html", null, true);
        yield "\"";
        yield CoreExtension::callMacro($macros["knp_menu"], "macro_attributes", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", [], "any", false, false, false, 97)], 97, $context, $this->getSourceContext());
        yield ">";
        yield from         $this->unwrap()->yieldBlock("label", $context, $blocks);
        yield "</a>";
        return; yield '';
    }

    // line 99
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $macros["knp_menu"] = $this;
        yield "<span";
        yield CoreExtension::callMacro($macros["knp_menu"], "macro_attributes", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", [], "any", false, false, false, 99)], 99, $context, $this->getSourceContext());
        yield ">";
        yield from         $this->unwrap()->yieldBlock("label", $context, $blocks);
        yield "</span>";
        return; yield '';
    }

    // line 101
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", [], "any", false, false, false, 101) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getExtra", ["safe_label", false], "method", false, false, false, 101))) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 101);
        } else {
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 101), "html", null, true);
        }
        return; yield '';
    }

    // line 3
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    yield Twig\Extension\CoreExtension::sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? ($this->env->getFilter('e')->getCallable()($this->env, $context["name"])) : ($this->env->getFilter('e')->getCallable()($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "knp_menu.html.twig";
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
        return array (  309 => 6,  307 => 5,  303 => 4,  291 => 3,  279 => 101,  266 => 99,  251 => 97,  241 => 92,  239 => 91,  237 => 90,  235 => 89,  231 => 86,  227 => 84,  225 => 83,  221 => 82,  218 => 81,  215 => 78,  213 => 77,  211 => 76,  208 => 73,  205 => 72,  202 => 71,  200 => 70,  197 => 69,  194 => 68,  191 => 66,  188 => 64,  186 => 63,  183 => 61,  181 => 60,  178 => 58,  176 => 57,  174 => 56,  172 => 55,  170 => 54,  168 => 52,  164 => 51,  159 => 48,  157 => 47,  140 => 44,  123 => 43,  120 => 41,  118 => 40,  115 => 37,  113 => 36,  111 => 34,  109 => 33,  105 => 31,  96 => 26,  91 => 25,  88 => 24,  86 => 23,  82 => 22,  77 => 19,  75 => 18,  71 => 17,  66 => 12,  60 => 13,  58 => 12,  54 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "knp_menu.html.twig", "/var/www/html/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
