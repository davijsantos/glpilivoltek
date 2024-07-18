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

/* @fields/forms/container_display_condition.html.twig */
class __TwigTemplate_babdeeef5ef6631e3fa58bed06b8c69c extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/forms/container_display_condition.html.twig", 29)->unwrap();
        // line 30
        $context["rand"] = twig_random($this->env);
        // line 31
        echo "
<form name=\"asset_form\" method=\"post\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("PluginFieldsContainerDisplayCondition"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" data-submit-once>
   <input type=\"hidden\" name=\"plugin_fields_containers_id\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["container_id"] ?? null), "html", null, true);
        echo "\" />
   <div class=\"card-body pe-1 d-flex flex-wrap\">
      <div class=\"col-10 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 39
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["itemtype", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["container_display_condition"] ?? null), "fields", [], "any", false, true, false, 39), "itemtype", [], "array", true, true, false, 39)) ? (_twig_default_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["container_display_condition"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), null)) : (null)), ($context["container_itemtypes"] ?? null), __("Item type"), ["rand" => ($context["rand"] ?? null), "display_emptychoice" => true]], 39, $context, $this->getSourceContext());
        echo "
                  ";
        // line 40
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_itemtype" .         // line 42
($context["rand"] ?? null)), "results_fields", ($this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginWebDir("fields") . "/ajax/container_display_condition.php"), ["itemtype" => "__VALUE__", "action" => "get_itemtype_so"]]);
        // line 51
        echo "                  <div id='results_fields' class='form-field row col-12 col-sm-6  mb-2'>
                     ";
        // line 52
        if ( !twig_get_attribute($this->env, $this->source, ($context["container_display_condition"] ?? null), "isNewItem", [], "method", false, false, false, 52)) {
            // line 53
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["search_option", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["container_display_condition"] ?? null), "fields", [], "any", false, true, false, 53), "search_option", [], "array", true, true, false, 53)) ? (_twig_default_filter((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["container_display_condition"] ?? null), "fields", [], "any", false, true, false, 53)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["search_option"] ?? null) : null), null)) : (null)), ($context["search_options"] ?? null), "", ["no_label" => true, "rand" => ($context["rand"] ?? null), "display_emptychoice" => false]], 53, $context, $this->getSourceContext());
            echo "
                        ";
            // line 54
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_search_option" .             // line 56
($context["rand"] ?? null)), "results_condition", ($this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginWebDir("fields") . "/ajax/container_display_condition.php"), ["search_option_id" => "__VALUE__", "itemtype" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,             // line 61
($context["container_display_condition"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["itemtype"] ?? null) : null), "action" => "get_condition_switch_so"]]);
            // line 66
            echo "                     ";
        }
        // line 67
        echo "                  </div>

                  <div id='results_condition' class='row flex-row'>
                     ";
        // line 70
        if ( !twig_get_attribute($this->env, $this->source, ($context["container_display_condition"] ?? null), "isNewItem", [], "method", false, false, false, 70)) {
            // line 71
            echo "                        ";
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsContainerDisplayCondition::showSearchOptionCondition", [(($__internal_compile_3 = twig_get_attribute($this->env, $this->source,             // line 74
($context["container_display_condition"] ?? null), "fields", [], "any", false, false, false, 74)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["search_option"] ?? null) : null), (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 75
($context["container_display_condition"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null), (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 76
($context["container_display_condition"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["condition"] ?? null) : null), (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 77
($context["container_display_condition"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["value"] ?? null) : null)]);
            // line 79
            echo "
                     ";
        }
        // line 81
        echo "                  </div>

               </div> ";
        // line 84
        echo "               <div class=\"mx-n2 d-flex flex-row-reverse align-items-start\">
                  ";
        // line 85
        if ( !twig_get_attribute($this->env, $this->source, ($context["container_display_condition"] ?? null), "isNewItem", [], "method", false, false, false, 85)) {
            // line 86
            echo "                     <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["container_display_condition"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null), "html", null, true);
            echo "\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                        <i class=\"far fa-save\"></i>
                        <span>";
            // line 89
            echo twig_escape_filter($this->env, _x("button", "Update"), "html", null, true);
            echo "</span>
                     </button>
                  ";
        } else {
            // line 92
            echo "                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\" value=\"1\">
                        <i class=\"far fa-plus\"></i>
                        <span>";
            // line 94
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "</span>
                     </button>
                  ";
        }
        // line 97
        echo "                  <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
               </div>
            </div> ";
        // line 100
        echo "         </div> ";
        // line 101
        echo "      </div>
   </div> ";
        // line 103
        echo "</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@fields/forms/container_display_condition.html.twig";
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
        return array (  145 => 103,  142 => 101,  140 => 100,  134 => 97,  128 => 94,  124 => 92,  118 => 89,  111 => 86,  109 => 85,  106 => 84,  102 => 81,  98 => 79,  96 => 77,  95 => 76,  94 => 75,  93 => 74,  91 => 71,  89 => 70,  84 => 67,  81 => 66,  79 => 61,  78 => 56,  77 => 54,  72 => 53,  70 => 52,  67 => 51,  65 => 42,  64 => 40,  60 => 39,  51 => 33,  47 => 32,  44 => 31,  42 => 30,  40 => 29,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@fields/forms/container_display_condition.html.twig", "/var/www/glpi/plugins/fields/templates/forms/container_display_condition.html.twig");
    }
}
