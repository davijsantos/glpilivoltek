<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @fields/fields.html.twig */
class __TwigTemplate_6e92e37dff25590c73977a99cabe16e2 extends Template
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
        // line 28
        echo "
";
        // line 29
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/fields.html.twig", 29)->unwrap();
        // line 30
        echo "
";
        // line 31
        $context["already_wrapped"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonITILObject") && ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) == "dom"));
        // line 32
        echo "
";
        // line 33
        if ( !($context["already_wrapped"] ?? null)) {
            // line 34
            echo "    <div class=\"card-body d-flex flex-wrap\">
        <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
";
        }
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 42
            echo "
    ";
            // line 43
            $context["type"] = (($__internal_compile_1 = $context["field"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null);
            // line 44
            echo "    ";
            $context["name"] = (($__internal_compile_2 = $context["field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
            // line 45
            echo "    ";
            $context["label"] = (($__internal_compile_3 = $context["field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["label"] ?? null) : null);
            // line 46
            echo "    ";
            $context["value"] = (((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 46)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["name"] ?? null)] ?? null) : null)) ?: ((($__internal_compile_5 = $context["field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["value"] ?? null) : null)));
            // line 47
            echo "    ";
            $context["readonly"] = (($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_readonly"] ?? null) : null);
            // line 48
            echo "    ";
            $context["rand"] = twig_random($this->env);
            // line 49
            echo "
    ";
            // line 50
            $context["field_options"] = twig_array_merge(($context["field_options"] ?? null), ["readonly" => (            // line 51
($context["readonly"] ?? null) ||  !($context["canedit"] ?? null)), "required" => (($__internal_compile_7 =             // line 52
$context["field"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["mandatory"] ?? null) : null), "full_width" =>             // line 53
($context["already_wrapped"] ?? null)]);
            // line 55
            echo "
    ";
            // line 56
            if ((($context["type"] ?? null) == "header")) {
                // line 57
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_largeTitle", [($context["label"] ?? null)], 57, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 59
($context["type"] ?? null) == "text")) {
                // line 60
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 60, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 62
($context["type"] ?? null) == "number")) {
                // line 63
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_numberField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["step" => "any", "min" => ""])], 63, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 65
($context["type"] ?? null) == "url")) {
                // line 66
                echo "            ";
                ob_start(function () { return ''; });
                // line 67
                echo "            ";
                if (twig_length_filter($this->env, ($context["value"] ?? null))) {
                    // line 68
                    echo "                <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                    echo "\">
                    <i class=\"ti ti-external-link\"></i>
                    ";
                    // line 70
                    echo twig_escape_filter($this->env, __("show", "fields"), "html", null, true);
                    echo "
                </a>
            ";
                }
                // line 73
                echo "            ";
                $context["ext_link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 74
                echo "            ";
                echo twig_call_macro($macros["macros"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["type" => "url", "add_field_html" =>                 // line 76
($context["ext_link"] ?? null)])], 74, $context, $this->getSourceContext());
                // line 77
                echo "

    ";
            } elseif ((            // line 79
($context["type"] ?? null) == "textarea")) {
                // line 80
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_textareaField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 80, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 82
($context["type"] ?? null) == "richtext")) {
                // line 83
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_textareaField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["enable_richtext" => true, "field_class" => "col-12", "label_class" => "", "input_class" => "", "align_label_right" => false, "mb" => "m-2"])], 83, $context, $this->getSourceContext());
                // line 90
                echo "

    ";
            } elseif ((            // line 92
($context["type"] ?? null) == "yesno")) {
                // line 93
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_dropdownYesNo", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 93, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 95
($context["type"] ?? null) == "date")) {
                // line 96
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_dateField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 96, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 98
($context["type"] ?? null) == "datetime")) {
                // line 99
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_datetimeField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 99, $context, $this->getSourceContext());
                echo "

    ";
            } elseif ((            // line 101
($context["type"] ?? null) == "dropdown")) {
                // line 102
                echo "        ";
                $context["dropdown_options"] = ["entity" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 102)];
                // line 103
                echo "        ";
                if ((($__internal_compile_8 = $context["field"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["multiple"] ?? null) : null)) {
                    // line 104
                    echo "            ";
                    $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["multiple" => true]);
                    // line 105
                    echo "        ";
                }
                // line 106
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 106)) {
                    // line 107
                    echo "            ";
                    $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["entity_sons" => true]);
                    // line 108
                    echo "        ";
                }
                // line 109
                echo "        ";
                if (twig_in_filter("dropdowns_id", ($context["name"] ?? null))) {
                    // line 110
                    echo "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [($context["name"] ?? null)]);
                    // line 111
                    echo "        ";
                } else {
                    // line 112
                    echo "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsDropdown::getClassname", [($context["name"] ?? null)]);
                    // line 113
                    echo "        ";
                }
                // line 114
                echo "        ";
                $context["name_fk"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getForeignKeyFieldForItemType", [($context["dropdown_itemtype"] ?? null)]);
                // line 115
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_dropdownField", [($context["dropdown_itemtype"] ?? null), ($context["name_fk"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ($context["dropdown_options"] ?? null))], 115, $context, $this->getSourceContext());
                echo "

    ";
            } elseif (twig_matches("/^dropdown-.+/i",             // line 117
($context["type"] ?? null))) {
                // line 118
                echo "        ";
                if ( !($context["massiveaction"] ?? null)) {
                    // line 119
                    echo "            ";
                    $context["dropdown_options"] = ["condition" => (($__internal_compile_9 = $context["field"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["dropdown_condition"] ?? null) : null), "entity" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 119)];
                    // line 120
                    echo "            ";
                    if (((($__internal_compile_10 = $context["field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["dropdown_class"] ?? null) : null) == "User")) {
                        // line 121
                        echo "                ";
                        $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["entity" =>  -1, "right" => "all"]);
                        // line 122
                        echo "            ";
                    } elseif ((((($__internal_compile_11 = $context["field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["dropdown_class"] ?? null) : null) == "Entity") || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 122))) {
                        // line 123
                        echo "                ";
                        $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["entity_sons" => true]);
                        // line 124
                        echo "            ";
                    }
                    // line 125
                    echo "            ";
                    if ((($__internal_compile_12 = $context["field"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["multiple"] ?? null) : null)) {
                        // line 126
                        echo "                ";
                        $context["dropdown_options"] = twig_array_merge(($context["dropdown_options"] ?? null), ["multiple" => true]);
                        // line 127
                        echo "            ";
                    }
                    // line 128
                    echo "            ";
                    echo twig_call_macro($macros["macros"], "macro_dropdownField", [(($__internal_compile_13 = $context["field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["dropdown_class"] ?? null) : null), ($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ($context["dropdown_options"] ?? null))], 128, $context, $this->getSourceContext());
                    echo "
        ";
                }
                // line 130
                echo "
    ";
            } elseif ((            // line 131
($context["type"] ?? null) == "glpi_item")) {
                // line 132
                echo "        ";
                if ( !($context["massiveaction"] ?? null)) {
                    // line 133
                    echo "            ";
                    $context["itemtype_prefix"] = "itemtype_";
                    // line 134
                    echo "            ";
                    $context["items_id_prefix"] = "items_id_";
                    // line 135
                    echo "
            ";
                    // line 136
                    if (((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 136)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null) == "tab")) {
                        // line 137
                        echo "                ";
                        // line 138
                        echo "                <div class=\"w-100\"></div>
            ";
                    }
                    // line 140
                    echo "
            ";
                    // line 141
                    echo twig_call_macro($macros["macros"], "macro_dropdownArrayField", [(($context["itemtype_prefix"] ?? null) . ($context["name"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 141), (($__internal_compile_15 = $context["field"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["allowed_values"] ?? null) : null), ($context["label"] ?? null), twig_array_merge(($context["field_options"] ?? null), ["rand" =>                     // line 142
($context["rand"] ?? null), "display_emptychoice" => true])], 141, $context, $this->getSourceContext());
                    // line 144
                    echo "
            <div class='form-field row col-12 ";
                    // line 145
                    echo ((((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 145)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["type"] ?? null) : null) == "tab")) ? ("col-sm-6") : (""));
                    echo " mb-2'>
                ";
                    // line 146
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [((("dropdown_" .                     // line 148
($context["itemtype_prefix"] ?? null)) . ($context["name"] ?? null)) . ($context["rand"] ?? null)), ("results_items_id" .                     // line 149
($context["rand"] ?? null)), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dropdownAllItems.php"), ["idtable" => "__VALUE__", "name" => (                    // line 153
($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), "entity_restrict" => twig_get_attribute($this->env, $this->source,                     // line 154
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 154), "dom_name" => (                    // line 155
($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), "display_emptychoice" => false, "action" => "get_items_from_itemtype", "dom_rand" =>                     // line 158
($context["rand"] ?? null), "width" => "100%"]]);
                    // line 162
                    echo "
                ";
                    // line 164
                    echo "                <label class=\"col-form-label col-xxl-4 text-xxl-end\" for=\"dropdown_items_id_testfield";
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\">
                </label>

                <div class=\"col-xxl-8 field-container\">
                    <span id='results_items_id";
                    // line 168
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "' class='col-lg-14'>
                        ";
                    // line 169
                    if ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 169) != "")) {
                        // line 170
                        echo "                            ";
                        echo twig_call_macro($macros["macros"], "macro_dropdownField", [twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 170), (($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "items_id", [], "any", false, false, false, 170), " ", twig_array_merge(($context["field_options"] ?? null), ["entity" => (((twig_get_attribute($this->env, $this->source,                         // line 171
($context["value"] ?? null), "itemtype", [], "any", false, false, false, 171) == "User")) ? ( -1) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 171))), "rand" =>                         // line 172
($context["rand"] ?? null), "right" => "all", "displaywith" => ["otherserial", "serial"], "display_emptychoice" => false, "no_label" => true])], 170, $context, $this->getSourceContext());
                        // line 177
                        echo "
                        ";
                    }
                    // line 179
                    echo "                    </span>
                </div>
            </div>
        ";
                }
                // line 183
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "
";
        // line 186
        if ( !($context["already_wrapped"] ?? null)) {
            // line 187
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@fields/fields.html.twig";
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
        return array (  369 => 187,  367 => 186,  364 => 185,  357 => 183,  351 => 179,  347 => 177,  345 => 172,  344 => 171,  342 => 170,  340 => 169,  336 => 168,  328 => 164,  325 => 162,  323 => 158,  322 => 155,  321 => 154,  320 => 153,  319 => 149,  318 => 148,  317 => 146,  313 => 145,  310 => 144,  308 => 142,  307 => 141,  304 => 140,  300 => 138,  298 => 137,  296 => 136,  293 => 135,  290 => 134,  287 => 133,  284 => 132,  282 => 131,  279 => 130,  273 => 128,  270 => 127,  267 => 126,  264 => 125,  261 => 124,  258 => 123,  255 => 122,  252 => 121,  249 => 120,  246 => 119,  243 => 118,  241 => 117,  235 => 115,  232 => 114,  229 => 113,  226 => 112,  223 => 111,  220 => 110,  217 => 109,  214 => 108,  211 => 107,  208 => 106,  205 => 105,  202 => 104,  199 => 103,  196 => 102,  194 => 101,  188 => 99,  186 => 98,  180 => 96,  178 => 95,  172 => 93,  170 => 92,  166 => 90,  163 => 83,  161 => 82,  155 => 80,  153 => 79,  149 => 77,  147 => 76,  145 => 74,  142 => 73,  136 => 70,  130 => 68,  127 => 67,  124 => 66,  122 => 65,  116 => 63,  114 => 62,  108 => 60,  106 => 59,  100 => 57,  98 => 56,  95 => 55,  93 => 53,  92 => 52,  91 => 51,  90 => 50,  87 => 49,  84 => 48,  81 => 47,  78 => 46,  75 => 45,  72 => 44,  70 => 43,  67 => 42,  63 => 41,  60 => 40,  52 => 34,  50 => 33,  47 => 32,  45 => 31,  42 => 30,  40 => 29,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@fields/fields.html.twig", "/var/www/glpi/plugins/fields/templates/fields.html.twig");
    }
}
