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

/* @fields/status_overrides.html.twig */
class __TwigTemplate_bb5656a2cfb25e2ad41f2598ec4ffd80 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/status_overrides.html.twig", 29)->unwrap();
        // line 30
        $context["rand"] = twig_random($this->env);
        // line 31
        echo "
<div id=\"container";
        // line 32
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"asset ";
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">

   <div class='alert alert-primary d-flex align-items-center' role='alert'>
      <i class='fas fa-info-circle fa-xl'></i>
      <span class='ms-2'>
         ";
        // line 37
        echo twig_escape_filter($this->env, __("Here you can redefine the following options :"), "html", null, true);
        echo "
         <ul>
            <li><i> ";
        // line 39
        echo twig_escape_filter($this->env, __("Mandatory"), "html", null, true);
        echo " </i></li>
            <li><i>";
        // line 40
        echo twig_escape_filter($this->env, __("Read-only"), "html", null, true);
        echo " </i></li>
         </ul>
         ";
        // line 42
        echo twig_escape_filter($this->env, __("for each field, depending on the states of the element attached to the container."), "html", null, true);
        echo "
      </span>
   </div>

   ";
        // line 46
        if (($context["has_fields"] ?? null)) {
            // line 47
            echo "      <div class=\"d-flex align-items-start mb-3\">
         <button class=\"btn btn-primary me-2\"
                 type=\"button\"
                 name=\"switch_add\"
                 data-container-id=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["container_id"] ?? null), "html", null, true);
            echo "\">
            <i class=\"far fa-plus\"></i>
            <span>";
            // line 53
            echo twig_escape_filter($this->env, __("Add new status override", "fields"), "html", null, true);
            echo "</span>
         </button>
      </div>
   ";
        }
        // line 57
        echo "
   ";
        // line 58
        echo twig_call_macro($macros["fields"], "macro_largeTitle", [__("Status overrides", "fields"), "", false], 58, $context, $this->getSourceContext());
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  <table class=\"table\">
                     <thead>
                        <tr>
                           <th>";
        // line 67
        echo twig_escape_filter($this->env, __("Item type"), "html", null, true);
        echo "</th>
                           <th>";
        // line 68
        echo twig_escape_filter($this->env, __("Field"), "html", null, true);
        echo "</th>
                           <th>";
        // line 69
        echo twig_escape_filter($this->env, __("Status"), "html", null, true);
        echo "</th>
                           <th>";
        // line 70
        echo twig_escape_filter($this->env, __("Mandatory"), "html", null, true);
        echo "</th>
                           <th>";
        // line 71
        echo twig_escape_filter($this->env, __("Read only"), "html", null, true);
        echo "</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        ";
        // line 76
        if ((twig_length_filter($this->env, ($context["overrides"] ?? null)) > 0)) {
            // line 77
            echo "                           ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["overrides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["override"]) {
                // line 78
                echo "                              <tr>
                                 <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["override"], "itemtype", [], "any", false, false, false, 79), "html", null, true);
                echo "</td>
                                 <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["override"], "field_name", [], "any", false, false, false, 80), "html", null, true);
                echo "</td>
                                 <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["override"], "status_names", [], "any", false, false, false, 81), ", "), "html", null, true);
                echo "</td>
                                 <td>";
                // line 82
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["override"], "mandatory", [], "any", false, false, false, 82)) ? (__("Yes")) : (__("No"))), "html", null, true);
                echo "</td>
                                 <td>";
                // line 83
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["override"], "is_readonly", [], "any", false, false, false, 83)) ? (__("Yes")) : (__("No"))), "html", null, true);
                echo "</td>
                                 <td>
                                    <form class=\"d-inline\" method=\"post\" action=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("PluginFieldsStatusOverride"), "html", null, true);
                echo "\">
                                       <input type=\"hidden\" name=\"id\" value=\"";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["override"], "id", [], "any", false, false, false, 86), "html", null, true);
                echo "\" />
                                       <input type=\"hidden\" name=\"container_id\" value=\"";
                // line 87
                echo twig_escape_filter($this->env, ($context["container_id"] ?? null), "html", null, true);
                echo "\" />
                                       <button type=\"button\" class=\"btn btn-sm btn-primary\" name=\"edit\"
                                               title=\"";
                // line 89
                echo twig_escape_filter($this->env, _x("button", "Edit"), "html", null, true);
                echo "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-pencil\"></i>
                                       </button>
                                       <button type=\"submit\" class=\"btn btn-sm btn-danger\" name=\"delete\"
                                               title=\"";
                // line 94
                echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                echo "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-trash\"></i>
                                       </button>
                                       <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 98
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
                                    </form>
                                 </td>
                              </tr>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['override'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                        ";
        } else {
            // line 104
            echo "                           <tr>
                              <td colspan=\"6\">";
            // line 105
            echo twig_escape_filter($this->env, __("No item found", "fields"), "html", null, true);
            echo "</td>
                           </tr>
                        ";
        }
        // line 108
        echo "                     </tbody>
                  </table>
               </div> ";
        // line 111
        echo "            </div> ";
        // line 112
        echo "         </div> ";
        // line 113
        echo "      </div>
   </div> ";
        // line 115
        echo "   <script>
      \$(document).ready(() => {
         \$('#container";
        // line 117
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', 'button[name=\"edit\"]', (e) => {
            const button = \$(e.currentTarget);
            const row = button.closest('tr');
            const id = row.find('input[name=\"id\"]').val();
            const container_id = row.find('input[name=\"container_id\"]').val();

            glpi_ajax_dialog(
               {
                  title: __('Edit status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_edit_form',
                     id: id,
                     container_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });

         \$('#container";
        // line 138
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', 'button[name=\"switch_add\"]', (e) => {
            const button = \$(e.currentTarget);
            const container_id = button.attr('data-container-id');

            glpi_ajax_dialog(
               {
                  title: __('Add new status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_add_form',
                     container_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });
      });
   </script>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@fields/status_overrides.html.twig";
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
        return array (  258 => 138,  234 => 117,  230 => 115,  227 => 113,  225 => 112,  223 => 111,  219 => 108,  213 => 105,  210 => 104,  207 => 103,  196 => 98,  189 => 94,  181 => 89,  176 => 87,  172 => 86,  168 => 85,  163 => 83,  159 => 82,  155 => 81,  151 => 80,  147 => 79,  144 => 78,  139 => 77,  137 => 76,  129 => 71,  125 => 70,  121 => 69,  117 => 68,  113 => 67,  101 => 58,  98 => 57,  91 => 53,  86 => 51,  80 => 47,  78 => 46,  71 => 42,  66 => 40,  62 => 39,  57 => 37,  47 => 32,  44 => 31,  42 => 30,  40 => 29,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@fields/status_overrides.html.twig", "/var/www/glpi/plugins/fields/templates/status_overrides.html.twig");
    }
}
