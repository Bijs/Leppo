<?php

/* _includes/fieldlayoutdesigner */
class __TwigTemplate_a753be0757ece776c6b67f67ad1180c3d3e25cca800264eaf50aa434c675b27a extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !(isset($context["customizableTabs"]) || array_key_exists("customizableTabs", $context))) {
            $context["customizableTabs"] = true;
        }
        // line 2
        if (( !($context["customizableTabs"] ?? $this->getContext($context, "customizableTabs")) &&  !(isset($context["pretendTabName"]) || array_key_exists("pretendTabName", $context)))) {
            // line 3
            echo "\t";
            $context["pretendTabName"] = \Craft\Craft::t("Content");
        }
        // line 5
        echo "
";
        // line 6
        $context["groups"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "fields", array()), "getAllGroups", array(0 => "id"), "method");
        // line 7
        $context["fields"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "fields", array()), "getAllFields", array(0 => "id"), "method");
        // line 8
        echo "
";
        // line 9
        \Craft\craft()->templates->includeTranslations(
        	"Rename",
        	"Delete",
        	"Make required",
        	"Make not required",
        	"Remove",
        	"Give your tab a name."
        );
        // line 17
        echo "
";
        // line 40
        echo "


<div id=\"fieldlayoutform\" class=\"fieldlayoutform\">

\t<h2>";
        // line 45
        echo twig_escape_filter($this->env, \Craft\Craft::t("Design your field layout"), "html", null, true);
        echo "</h2>

\t";
        // line 47
        if ((isset($context["instructions"]) || array_key_exists("instructions", $context))) {
            // line 48
            echo "\t\t<div class=\"instructions\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->markdownFilter(($context["instructions"] ?? $this->getContext($context, "instructions"))), "html", null, true);
            echo "</div>
\t";
        }
        // line 50
        echo "
\t<div class=\"fld-tabs\">
\t\t";
        // line 52
        if (($context["fieldLayout"] ?? $this->getContext($context, "fieldLayout"))) {
            // line 53
            echo "\t\t\t";
            $context["macros"] = $this;
            // line 54
            echo "
\t\t\t";
            // line 55
            if (($context["customizableTabs"] ?? $this->getContext($context, "customizableTabs"))) {
                // line 56
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["fieldLayout"] ?? $this->getContext($context, "fieldLayout")), "getTabs", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 57
                    echo "\t\t\t\t\t";
                    echo $context["macros"]->gettab(($context["customizableTabs"] ?? $this->getContext($context, "customizableTabs")), $this->getAttribute($context["tab"], "name", array()), $this->getAttribute($context["tab"], "getFields", array(), "method"));
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t\t";
            } else {
                // line 60
                echo "\t\t\t\t";
                echo $context["macros"]->gettab(($context["customizableTabs"] ?? $this->getContext($context, "customizableTabs")), ($context["pretendTabName"] ?? $this->getContext($context, "pretendTabName")), $this->getAttribute(($context["fieldLayout"] ?? $this->getContext($context, "fieldLayout")), "getFields", array(), "method"));
                echo "
\t\t\t";
            }
            // line 62
            echo "\t\t";
        }
        // line 63
        echo "\t</div>

\t";
        // line 65
        if (($context["customizableTabs"] ?? $this->getContext($context, "customizableTabs"))) {
            // line 66
            echo "\t\t<div class=\"newtabbtn-container\">
\t\t\t<div class=\"btn add icon\">";
            // line 67
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Tab"), "html", null, true);
            echo "</div>
\t\t\t<h3>";
            // line 68
            echo twig_escape_filter($this->env, \Craft\Craft::t("…Or use one of your field groups as a starting point:"), "html", null, true);
            echo "</h3>
\t\t</div>
\t";
        }
        // line 71
        echo "
\t<div class=\"unusedfields\">
\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 74
            echo "\t\t\t";
            $context["totalUnselected"] = 0;
            // line 75
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 76
                echo "\t\t\t\t";
                if (( !($context["fieldLayout"] ?? $this->getContext($context, "fieldLayout")) || !twig_in_filter($this->getAttribute($context["field"], "id", array()), $this->getAttribute(($context["fieldLayout"] ?? $this->getContext($context, "fieldLayout")), "getFieldIds", array(), "method")))) {
                    // line 77
                    echo "\t\t\t\t\t";
                    $context["totalUnselected"] = (($context["totalUnselected"] ?? $this->getContext($context, "totalUnselected")) + 1);
                    // line 78
                    echo "\t\t\t\t";
                }
                // line 79
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "
\t\t\t<div class=\"fld-tab unused";
            // line 81
            if ((($context["totalUnselected"] ?? $this->getContext($context, "totalUnselected")) == 0)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<div class=\"tab sel\"><span>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"fld-tabcontent\">
\t\t\t\t\t";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 87
                echo "\t\t\t\t\t\t";
                $context["selected"] = (($context["fieldLayout"] ?? $this->getContext($context, "fieldLayout")) && twig_in_filter($this->getAttribute($context["field"], "id", array()), $this->getAttribute(($context["fieldLayout"] ?? $this->getContext($context, "fieldLayout")), "getFieldIds", array(), "method")));
                // line 88
                echo "\t\t\t\t\t\t<div class=\"fld-field unused";
                if (($context["selected"] ?? $this->getContext($context, "selected"))) {
                    echo " hidden";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<span title=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "handle", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["field"], "name", array())), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t</div>

</div>

";
        // line 99
        ob_start();
        // line 100
        echo "\tvar initFLD = function() {
\t\tnew Craft.FieldLayoutDesigner('#";
        // line 101
        echo twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId("fieldlayoutform"), "html", null, true);
        echo "', {
\t\t\tcustomizableTabs: ";
        // line 102
        echo ((($context["customizableTabs"] ?? $this->getContext($context, "customizableTabs"))) ? ("true") : ("false"));
        echo ",
\t\t\tfieldInputName: '";
        // line 103
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName("fieldLayout[__TAB_NAME__][]"), "js"), "html", null, true);
        echo "',
\t\t\trequiredFieldInputName: '";
        // line 104
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName("requiredFields[]"), "js"), "html", null, true);
        echo "'
\t\t});
\t};

\t";
        // line 108
        if ((isset($context["tab"]) || array_key_exists("tab", $context))) {
            // line 109
            echo "
\t\tvar \$fldTab = \$('#";
            // line 110
            echo twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId(("tab-" . ($context["tab"] ?? $this->getContext($context, "tab")))), "html", null, true);
            echo "');

\t\tif (\$fldTab.hasClass('sel'))
\t\t{
\t\t\tinitFLD();
\t\t}
\t\telse
\t\t{
\t\t\t\$fldTab.on('activate.fld', function() {
\t\t\t\tinitFLD();
\t\t\t\t\$fldTab.off('activate.fld');
\t\t\t});
\t\t}

\t";
        } else {
            // line 125
            echo "
\t\tinitFLD();

\t";
        }
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
    }

    // line 18
    public function gettab($__customizableTabs__ = null, $__tabName__ = null, $__tabFields__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "customizableTabs" => $__customizableTabs__,
            "tabName" => $__tabName__,
            "tabFields" => $__tabFields__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "\t<div class=\"fld-tab\">
\t\t<div class=\"tabs\">
\t\t\t<div class=\"tab sel";
            // line 21
            if (($context["customizableTabs"] ?? $this->getContext($context, "customizableTabs"))) {
                echo " draggable";
            }
            echo "\">
\t\t\t\t<span>";
            // line 22
            echo twig_escape_filter($this->env, ($context["tabName"] ?? $this->getContext($context, "tabName")), "html", null, true);
            echo "</span>
\t\t\t\t";
            // line 23
            if (($context["customizableTabs"] ?? $this->getContext($context, "customizableTabs"))) {
                // line 24
                echo "\t\t\t\t\t<a class=\"settings icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t";
            }
            // line 26
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"fld-tabcontent\">
\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabFields"] ?? $this->getContext($context, "tabFields")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 30
                echo "\t\t\t\t<div class=\"fld-field";
                if ($this->getAttribute($context["field"], "required", array())) {
                    echo " fld-required";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldId", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<a class=\"settings icon\" title=\"";
                // line 31
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t<span title=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "getField", array(), "method"), "handle", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($this->getAttribute($context["field"], "getField", array(), "method"), "name", array())), "html", null, true);
                echo "</span>
\t\t\t\t\t<input class=\"id-input\" type=\"hidden\" name=\"fieldLayout[";
                // line 33
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["tabName"] ?? $this->getContext($context, "tabName")), "url"), "html", null, true);
                echo "][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldId", array()), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 34
                if ($this->getAttribute($context["field"], "required", array())) {
                    echo "<input class=\"required-input\" type=\"hidden\" name=\"requiredFields[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldId", array()), "html", null, true);
                    echo "\">";
                }
                // line 35
                echo "\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_includes/fieldlayoutdesigner";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 37,  351 => 35,  345 => 34,  339 => 33,  333 => 32,  329 => 31,  320 => 30,  316 => 29,  311 => 26,  305 => 24,  303 => 23,  299 => 22,  293 => 21,  289 => 19,  275 => 18,  265 => 125,  247 => 110,  244 => 109,  242 => 108,  235 => 104,  231 => 103,  227 => 102,  223 => 101,  220 => 100,  218 => 99,  212 => 95,  204 => 92,  193 => 89,  184 => 88,  181 => 87,  177 => 86,  171 => 83,  164 => 81,  161 => 80,  155 => 79,  152 => 78,  149 => 77,  146 => 76,  141 => 75,  138 => 74,  134 => 73,  130 => 71,  124 => 68,  120 => 67,  117 => 66,  115 => 65,  111 => 63,  108 => 62,  102 => 60,  99 => 59,  90 => 57,  85 => 56,  83 => 55,  80 => 54,  77 => 53,  75 => 52,  71 => 50,  65 => 48,  63 => 47,  58 => 45,  51 => 40,  48 => 17,  39 => 9,  36 => 8,  34 => 7,  32 => 6,  29 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if customizableTabs is not defined %}{% set customizableTabs = true %}{% endif %}
{% if not customizableTabs and pretendTabName is not defined %}
\t{% set pretendTabName = \"Content\"|t %}
{% endif %}

{% set groups = craft.fields.getAllGroups('id') %}
{% set fields = craft.fields.getAllFields('id') %}

{% includeTranslations
\t\"Rename\",
\t\"Delete\",
\t\"Make required\",
\t\"Make not required\",
\t\"Remove\",
\t\"Give your tab a name.\"
%}

{% macro tab(customizableTabs, tabName, tabFields) %}
\t<div class=\"fld-tab\">
\t\t<div class=\"tabs\">
\t\t\t<div class=\"tab sel{% if customizableTabs %} draggable{% endif %}\">
\t\t\t\t<span>{{ tabName }}</span>
\t\t\t\t{% if customizableTabs %}
\t\t\t\t\t<a class=\"settings icon\" title=\"{{ 'Edit'|t }}\"></a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"fld-tabcontent\">
\t\t\t{% for field in tabFields %}
\t\t\t\t<div class=\"fld-field{% if field.required %} fld-required{% endif %}\" data-id=\"{{ field.fieldId }}\">
\t\t\t\t\t<a class=\"settings icon\" title=\"{{ 'Edit'|t }}\"></a>
\t\t\t\t\t<span title=\"{{ field.getField().handle }}\">{{ field.getField().name|t }}</span>
\t\t\t\t\t<input class=\"id-input\" type=\"hidden\" name=\"fieldLayout[{{ tabName|e('url') }}][]\" value=\"{{ field.fieldId }}\">
\t\t\t\t\t{% if field.required %}<input class=\"required-input\" type=\"hidden\" name=\"requiredFields[]\" value=\"{{ field.fieldId }}\">{% endif %}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endmacro %}



<div id=\"fieldlayoutform\" class=\"fieldlayoutform\">

\t<h2>{{ \"Design your field layout\"|t }}</h2>

\t{% if instructions is defined %}
\t\t<div class=\"instructions\">{{ instructions|md }}</div>
\t{% endif %}

\t<div class=\"fld-tabs\">
\t\t{% if fieldLayout %}
\t\t\t{% import _self as macros %}

\t\t\t{% if customizableTabs %}
\t\t\t\t{% for tab in fieldLayout.getTabs() %}
\t\t\t\t\t{{ macros.tab(customizableTabs, tab.name, tab.getFields()) }}
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t{{ macros.tab(customizableTabs, pretendTabName, fieldLayout.getFields()) }}
\t\t\t{% endif %}
\t\t{% endif %}
\t</div>

\t{% if customizableTabs %}
\t\t<div class=\"newtabbtn-container\">
\t\t\t<div class=\"btn add icon\">{{ \"New Tab\"|t }}</div>
\t\t\t<h3>{{ \"…Or use one of your field groups as a starting point:\"|t }}</h3>
\t\t</div>
\t{% endif %}

\t<div class=\"unusedfields\">
\t\t{% for group in groups %}
\t\t\t{% set totalUnselected = 0 %}
\t\t\t{% for field in group.fields %}
\t\t\t\t{% if not fieldLayout or field.id not in fieldLayout.getFieldIds() %}
\t\t\t\t\t{% set totalUnselected = totalUnselected + 1 %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t\t<div class=\"fld-tab unused{% if totalUnselected == 0 %} hidden{% endif %}\">
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<div class=\"tab sel\"><span>{{ group.name }}</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"fld-tabcontent\">
\t\t\t\t\t{% for field in group.fields %}
\t\t\t\t\t\t{% set selected = fieldLayout and field.id in fieldLayout.getFieldIds() %}
\t\t\t\t\t\t<div class=\"fld-field unused{% if selected %} hidden{% endif %}\" data-id=\"{{ field.id }}\">
\t\t\t\t\t\t\t<span title=\"{{ field.handle }}\">{{ field.name|t }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>

</div>

{% includejs %}
\tvar initFLD = function() {
\t\tnew Craft.FieldLayoutDesigner('#{{ \"fieldlayoutform\"|namespaceInputId }}', {
\t\t\tcustomizableTabs: {{ customizableTabs ? 'true' : 'false' }},
\t\t\tfieldInputName: '{{ \"fieldLayout[__TAB_NAME__][]\"|namespaceInputName|e(\"js\") }}',
\t\t\trequiredFieldInputName: '{{ \"requiredFields[]\"|namespaceInputName|e(\"js\") }}'
\t\t});
\t};

\t{% if tab is defined %}

\t\tvar \$fldTab = \$('#{{ (\"tab-\"~tab)|namespaceInputId }}');

\t\tif (\$fldTab.hasClass('sel'))
\t\t{
\t\t\tinitFLD();
\t\t}
\t\telse
\t\t{
\t\t\t\$fldTab.on('activate.fld', function() {
\t\t\t\tinitFLD();
\t\t\t\t\$fldTab.off('activate.fld');
\t\t\t});
\t\t}

\t{% else %}

\t\tinitFLD();

\t{% endif %}
{% endincludejs %}
", "_includes/fieldlayoutdesigner", "");
    }
}
