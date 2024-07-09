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

/* @ContaoInstallation/main.html.twig */
class __TwigTemplate_ba2799a1018088051c22914059f59f49 extends Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "@ContaoInstallation/main.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "  ";
        if (array_key_exists("optionKey", $context)) {
            // line 6
            yield "    <fieldset class=\"tl_tbox nolegend\">
        <p class=\"tl_error\">";
            // line 7
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("strict_sql_mode", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
        <p>";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("strict_sql_mode_explain", [], "ContaoInstallationBundle");
            yield "</p>
        <div id=\"sql_wrapper\">
        <pre>doctrine:
    dbal:
        connections:
            default:
                options:
                    ";
            // line 15
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["optionKey"] ?? null), "contao_html", null, true);
            yield ": \"SET SESSION sql_mode=(SELECT CONCAT(@@sql_mode, ',TRADITIONAL'))\"</pre>
        </div>
    </fieldset>
  ";
        }
        // line 19
        yield "  <fieldset class=\"tl_tbox";
        if ((Twig\Extension\CoreExtension::testEmpty(($context["sql_form"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(($context["sql_message"] ?? null)))) {
            yield " collapsed";
        }
        yield "\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
        // line 20
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</legend>
    <div>
      <h3>";
        // line 22
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</h3>
      ";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty(($context["sql_form"] ?? null))) {
            // line 24
            yield "        <p class=\"tl_confirm\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables_confirm", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
      ";
        }
        // line 26
        yield "      <p>";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_tables_explain", [], "ContaoInstallationBundle");
        yield "</p>
      ";
        // line 27
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["sql_message"] ?? null))) {
            // line 28
            yield "        <div id=\"sql_message\">";
            yield ($context["sql_message"] ?? null);
            yield "</div>
      ";
        }
        // line 30
        yield "      ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["sql_form"] ?? null))) {
            // line 31
            yield "        <form method=\"post\">
          <div class=\"tl_formbody\">
            <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_database_update\">
            <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
            // line 34
            yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["request_token"] ?? null), "contao_html", null, true);
            yield "\">
            <div id=\"sql_wrapper\">
              <table id=\"sql_table\">
              ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sql_form"] ?? null));
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
            foreach ($context['_seq'] as $context["category"] => $context["commands"]) {
                // line 38
                yield "                ";
                if ( !Twig\Extension\CoreExtension::testEmpty($context["commands"])) {
                    // line 39
                    yield "                  <tr>
                    <td colspan=\"2\" class=\"tl_col_0\">";
                    // line 40
                    yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["category"], [], "ContaoInstallationBundle"), "contao_html", null, true);
                    yield "</td>
                  </tr>
                  <tr>
                    <td class=\"tl_col_1\"><input type=\"checkbox\" id=\"check_all_";
                    // line 43
                    yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "contao_html", null, true);
                    yield "\" class=\"tl_checkbox\" onclick=\"Backend.toggleCheckboxElements(this, '";
                    yield $this->env->getFilter('escape')->getCallable()($this->env, $context["category"], "contao_html", null, true);
                    yield "')\"";
                    if ((!CoreExtension::inFilter("DROP", $context["category"]) || CoreExtension::inFilter("DROP INDEX", $context["category"]))) {
                        yield " checked";
                    }
                    yield "></td>
                    <td class=\"tl_col_2\"><label for=\"check_all_";
                    // line 44
                    yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44), "contao_html", null, true);
                    yield "\" style=\"color:#a6a6a6\"><em>";
                    yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select_all", [], "ContaoInstallationBundle"), "contao_html", null, true);
                    yield "</em></label></td>
                  </tr>
                  ";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["commands"]);
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
                    foreach ($context['_seq'] as $context["md5"] => $context["command"]) {
                        // line 47
                        yield "                    <tr>
                      <td class=\"tl_col_1\"><input type=\"checkbox\" name=\"sql[]\" id=\"sql_";
                        // line 48
                        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 48), "loop", [], "any", false, false, false, 48), "index", [], "any", false, false, false, 48), "contao_html", null, true);
                        yield "_";
                        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), "contao_html", null, true);
                        yield "\" class=\"tl_checkbox ";
                        yield $this->env->getFilter('escape')->getCallable()($this->env, $context["category"], "contao_html", null, true);
                        yield "\" value=\"";
                        yield $this->env->getFilter('escape')->getCallable()($this->env, $context["md5"], "contao_html", null, true);
                        yield "\"";
                        if ((!CoreExtension::inFilter("DROP", $context["command"]) || CoreExtension::inFilter("DROP INDEX", $context["command"]))) {
                            yield " checked";
                        }
                        yield "></td>
                      <td class=\"tl_col_2\"><pre><label for=\"sql_";
                        // line 49
                        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 49), "loop", [], "any", false, false, false, 49), "index", [], "any", false, false, false, 49), "contao_html", null, true);
                        yield "_";
                        yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49), "contao_html", null, true);
                        yield "\">";
                        if (CoreExtension::inFilter("CREATE", $context["command"])) {
                            yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery($context["command"]);
                        } else {
                            yield $this->env->getFilter('escape')->getCallable()($this->env, $context["command"], "contao_html", null, true);
                        }
                        yield "</label></pre></td>
                    </tr>
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
                    unset($context['_seq'], $context['_iterated'], $context['md5'], $context['command'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    yield "                ";
                }
                // line 53
                yield "              ";
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
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['commands'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "              </table>
            </div>
          </div>
          <div class=\"tl_formbody_submit\">
            <div class=\"tl_submit_container\">
              <button type=\"submit\" class=\"tl_submit\">";
            // line 59
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_save", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</button>
            </div>
          </div>
        </form>
      ";
        }
        // line 64
        yield "    </div>
  </fieldset>
  <fieldset class=\"tl_box";
        // line 66
        if (($context["has_admin"] ?? null)) {
            yield " collapsed";
        }
        yield "\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
        // line 67
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_import", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</legend>
    <div>
      <h3>";
        // line 69
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_import", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</h3>
      ";
        // line 70
        if (array_key_exists("import_error", $context)) {
            // line 71
            yield "        <p class=\"tl_error\">";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getFilter('escape')->getCallable()($this->env, ($context["import_error"] ?? null), "contao_html", null, true));
            yield "</p>
      ";
        } elseif (        // line 72
array_key_exists("import_date", $context)) {
            // line 73
            yield "        <p class=\"tl_confirm\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("imported_on", [($context["import_date"] ?? null)], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
      ";
        } else {
            // line 75
            yield "        <p class=\"tl_info\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("import_data_will_be_deleted", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
      ";
        }
        // line 77
        yield "      <p>";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_import_explain", [], "ContaoInstallationBundle");
        yield "</p>
      <form method=\"post\">
        <div class=\"tl_formbody_submit\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_template_import\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 81
        yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["request_token"] ?? null), "contao_html", null, true);
        yield "\">
          <h4><label for=\"template\">";
        // line 82
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("templates", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</label></h4>
          <select name=\"template\" id=\"template\" class=\"tl_select\" required>
            <option value=\"\">-</option>
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 86
            yield "              <option value=\"";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $context["template"], "contao_html", null, true);
            yield "\">";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $context["template"], "contao_html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "          </select>
          <div class=\"tl_checkbox_container\" style=\"margin-top:3px\">
            <input type=\"checkbox\" name=\"preserve\" id=\"ctrl_preserve\" class=\"tl_checkbox\" value=\"1\"> <label for=\"ctrl_preserve\">";
        // line 90
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("do_not_truncate", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</label>
          </div>
        </div>
        <div class=\"tl_formbody_submit\">
          <div class=\"tl_submit_container\">
            <button type=\"submit\" class=\"tl_submit\" onclick=\"if(!confirm('";
        // line 95
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("import_confirm", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "'))return false;Backend.getScrollOffset()\">";
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("template_save", [], "ContaoInstallationBundle"), "contao_html", null, true);
        yield "</button>
          </div>
        </div>
      </form>
    </div>
  </fieldset>
  ";
        // line 101
        if ( !($context["hide_admin"] ?? null)) {
            // line 102
            yield "    <fieldset class=\"tl_box";
            if (($context["has_admin"] ?? null)) {
                yield " collapsed";
            }
            yield "\">
      <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
            // line 103
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_create", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</legend>
      <div>
        <h3>";
            // line 105
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_create", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</h3>
        ";
            // line 106
            if (array_key_exists("admin_error", $context)) {
                // line 107
                yield "          <p class=\"tl_error\">";
                yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["admin_error"] ?? null), "contao_html", null, true);
                yield "</p>
        ";
            } elseif (            // line 108
($context["has_admin"] ?? null)) {
                // line 109
                yield "          <p class=\"tl_confirm\">";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_confirm", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</p>
        ";
            }
            // line 111
            yield "        <p>";
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_create_explain", [], "ContaoInstallationBundle"), "contao_html", null, true);
            yield "</p>
        ";
            // line 112
            if ( !($context["has_admin"] ?? null)) {
                // line 113
                yield "          <form method=\"post\">
            <div class=\"tl_formbody\">
              <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_admin\">
              <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
                // line 116
                yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["request_token"] ?? null), "contao_html", null, true);
                yield "\">
              <h4><label for=\"username\">";
                // line 117
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_username", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</label></h4>
              ";
                // line 118
                if (array_key_exists("admin_username_error", $context)) {
                    // line 119
                    yield "                <p class=\"tl_error\">";
                    yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["admin_username_error"] ?? null), "contao_html", null, true);
                    yield "</p>
              ";
                }
                // line 121
                yield "              <input type=\"text\" name=\"username\" id=\"username\" class=\"tl_text\" value=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, ((array_key_exists("admin_username_value", $context)) ? (Twig\Extension\CoreExtension::default(($context["admin_username_value"] ?? null))) : ("")), "contao_html", null, true);
                yield "\" required>
              <h4><label for=\"name\">";
                // line 122
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_name", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</label></h4>
              <input type=\"text\" name=\"name\" id=\"name\" class=\"tl_text\" value=\"";
                // line 123
                yield $this->env->getFilter('escape')->getCallable()($this->env, ((array_key_exists("admin_name_value", $context)) ? (Twig\Extension\CoreExtension::default(($context["admin_name_value"] ?? null))) : ("")), "contao_html", null, true);
                yield "\" required>
              <h4><label for=\"email\">";
                // line 124
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_email", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</label></h4>
              ";
                // line 125
                if (array_key_exists("admin_email_error", $context)) {
                    // line 126
                    yield "                <p class=\"tl_error\">";
                    yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["admin_email_error"] ?? null), "contao_html", null, true);
                    yield "</p>
              ";
                }
                // line 128
                yield "              <input type=\"email\" name=\"email\" id=\"email\" class=\"tl_text\" value=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, ((array_key_exists("admin_email_value", $context)) ? (Twig\Extension\CoreExtension::default(($context["admin_email_value"] ?? null))) : ("")), "contao_html", null, true);
                yield "\" required>
              <h4><label for=\"password\">";
                // line 129
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("password", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</label></h4>
              ";
                // line 130
                if (array_key_exists("admin_password_error", $context)) {
                    // line 131
                    yield "                <p class=\"tl_error\">";
                    yield $this->env->getFilter('escape')->getCallable()($this->env, ($context["admin_password_error"] ?? null), "contao_html", null, true);
                    yield "</p>
              ";
                }
                // line 133
                yield "              <input type=\"password\" name=\"password\" id=\"password\" class=\"tl_text\" value=\"";
                yield $this->env->getFilter('escape')->getCallable()($this->env, ((array_key_exists("admin_password_value", $context)) ? (Twig\Extension\CoreExtension::default(($context["admin_password_value"] ?? null))) : ("")), "contao_html", null, true);
                yield "\" required>
            </div>
            <div class=\"tl_formbody_submit\">
              <div class=\"tl_submit_container\">
                <button type=\"submit\" class=\"tl_submit\">";
                // line 137
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_save", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</button>
              </div>
            </div>
          </form>
        ";
            }
            // line 142
            yield "      </div>
    </fieldset>
    ";
            // line 144
            if (($context["has_admin"] ?? null)) {
                // line 145
                yield "      <fieldset class=\"tl_box last\">
        <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
                // line 146
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("installation_complete", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</legend>
        <div>
          <h3>";
                // line 148
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("congratulations", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</h3>
          <p class=\"tl_confirm\">";
                // line 149
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("congratulations_explain", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</p>
          <p>";
                // line 150
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("installation_complete_explain", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield "</p>
        </div>
      </fieldset>
      <p id=\"back_end\"><a href=\"";
                // line 153
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contao_backend", [], true);
                yield "\">";
                yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back_end", [], "ContaoInstallationBundle"), "contao_html", null, true);
                yield " ›</a></p>
    ";
            }
            // line 155
            yield "  ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoInstallation/main.html.twig";
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
        return array (  516 => 155,  509 => 153,  503 => 150,  499 => 149,  495 => 148,  490 => 146,  487 => 145,  485 => 144,  481 => 142,  473 => 137,  465 => 133,  459 => 131,  457 => 130,  453 => 129,  448 => 128,  442 => 126,  440 => 125,  436 => 124,  432 => 123,  428 => 122,  423 => 121,  417 => 119,  415 => 118,  411 => 117,  407 => 116,  402 => 113,  400 => 112,  395 => 111,  389 => 109,  387 => 108,  382 => 107,  380 => 106,  376 => 105,  371 => 103,  364 => 102,  362 => 101,  351 => 95,  343 => 90,  339 => 88,  328 => 86,  324 => 85,  318 => 82,  314 => 81,  306 => 77,  300 => 75,  294 => 73,  292 => 72,  287 => 71,  285 => 70,  281 => 69,  276 => 67,  270 => 66,  266 => 64,  258 => 59,  251 => 54,  237 => 53,  234 => 52,  209 => 49,  195 => 48,  192 => 47,  175 => 46,  168 => 44,  158 => 43,  152 => 40,  149 => 39,  146 => 38,  129 => 37,  123 => 34,  118 => 31,  115 => 30,  109 => 28,  107 => 27,  102 => 26,  96 => 24,  94 => 23,  90 => 22,  85 => 20,  78 => 19,  71 => 15,  61 => 8,  57 => 7,  54 => 6,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoInstallation/main.html.twig", "/var/www/html/vendor/contao/installation-bundle/src/Resources/views/main.html.twig");
    }
}
