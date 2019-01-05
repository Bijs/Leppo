<?php

/* _includes/forms/field */
class __TwigTemplate_25465565bdec74ad8e1c534a97fdc15a66b891dec8be78b920657eb562450dd1 extends Craft\BaseTemplate
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
        $context["labelId"] = (((isset($context["labelId"]) || array_key_exists("labelId", $context))) ? (($context["labelId"] ?? $this->getContext($context, "labelId"))) : ((((isset($context["id"]) || array_key_exists("id", $context))) ? ((($context["id"] ?? $this->getContext($context, "id")) . "-label")) : (null))));
        // line 2
        $context["fieldId"] = (((isset($context["fieldId"]) || array_key_exists("fieldId", $context))) ? (($context["fieldId"] ?? $this->getContext($context, "fieldId"))) : ((((isset($context["id"]) || array_key_exists("id", $context))) ? ((($context["id"] ?? $this->getContext($context, "id")) . "-field")) : (null))));
        // line 3
        $context["label"] = ((((isset($context["label"]) || array_key_exists("label", $context)) && (($context["label"] ?? $this->getContext($context, "label")) != "__blank__"))) ? (($context["label"] ?? $this->getContext($context, "label"))) : (null));
        // line 4
        $context["locale"] = ((($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method") && (isset($context["locale"]) || array_key_exists("locale", $context)))) ? (($context["locale"] ?? $this->getContext($context, "locale"))) : (null));
        // line 5
        $context["instructions"] = (((isset($context["instructions"]) || array_key_exists("instructions", $context))) ? (($context["instructions"] ?? $this->getContext($context, "instructions"))) : (null));
        // line 6
        $context["warning"] = (((isset($context["warning"]) || array_key_exists("warning", $context))) ? (($context["warning"] ?? $this->getContext($context, "warning"))) : (null));
        // line 7
        $context["orientation"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getLocaleData", array(0 => ((($context["locale"] ?? $this->getContext($context, "locale"))) ? (($context["locale"] ?? $this->getContext($context, "locale"))) : ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "locale", array())))), "method"), "getOrientation", array(), "method");
        // line 8
        $context["errors"] = (((isset($context["errors"]) || array_key_exists("errors", $context))) ? (($context["errors"] ?? $this->getContext($context, "errors"))) : (null));
        // line 9
        $context["fieldClass"] = twig_join_filter(array_filter(array(0 => "field", 1 => (((        // line 11
(isset($context["first"]) || array_key_exists("first", $context)) && ($context["first"] ?? $this->getContext($context, "first")))) ? ("first") : (null)), 2 => ((        // line 12
($context["errors"] ?? $this->getContext($context, "errors"))) ? ("has-errors") : (null)), 3 => (((        // line 13
(isset($context["fieldClass"]) || array_key_exists("fieldClass", $context)) && ($context["fieldClass"] ?? $this->getContext($context, "fieldClass")))) ? (($context["fieldClass"] ?? $this->getContext($context, "fieldClass"))) : (null)))), " ");
        // line 16
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["fieldClass"] ?? $this->getContext($context, "fieldClass")), "html", null, true);
        echo "\"";
        if (($context["fieldId"] ?? $this->getContext($context, "fieldId"))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["fieldId"] ?? $this->getContext($context, "fieldId")), "html", null, true);
            echo "\"";
        }
        echo ">
\t";
        // line 17
        if ((($context["label"] ?? $this->getContext($context, "label")) || ($context["instructions"] ?? $this->getContext($context, "instructions")))) {
            // line 18
            echo "\t\t<div class=\"heading\">
\t\t\t";
            // line 19
            if (($context["label"] ?? $this->getContext($context, "label"))) {
                // line 20
                echo "\t\t\t\t<label ";
                if (($context["labelId"] ?? $this->getContext($context, "labelId"))) {
                    echo " id=\"";
                    echo twig_escape_filter($this->env, ($context["labelId"] ?? $this->getContext($context, "labelId")), "html", null, true);
                    echo "\"";
                }
                if (((isset($context["required"]) || array_key_exists("required", $context)) && ($context["required"] ?? $this->getContext($context, "required")))) {
                    echo " class=\"required\"";
                }
                if (((isset($context["id"]) || array_key_exists("id", $context)) && ($context["id"] ?? $this->getContext($context, "id")))) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 21
                echo ($context["label"] ?? $this->getContext($context, "label"));
                // line 22
                if (($context["locale"] ?? $this->getContext($context, "locale"))) {
                    // line 23
                    echo "<span class=\"locale\">";
                    echo twig_escape_filter($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), "html", null, true);
                    echo "</span>";
                }
                // line 25
                echo "</label>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if (($context["instructions"] ?? $this->getContext($context, "instructions"))) {
                // line 28
                echo "\t\t\t\t<div class=\"instructions\">";
                echo $this->env->getExtension('Craft\CraftTwigExtension')->replaceFilter($this->env->getExtension('Craft\CraftTwigExtension')->markdownFilter(($context["instructions"] ?? $this->getContext($context, "instructions"))), "/&amp;(\\w+);/", "&\$1;");
                echo "</div>
\t\t\t";
            }
            // line 30
            echo "\t\t</div>
\t";
        }
        // line 32
        echo "\t<div class=\"input ";
        echo twig_escape_filter($this->env, ($context["orientation"] ?? $this->getContext($context, "orientation")), "html", null, true);
        if (($context["errors"] ?? $this->getContext($context, "errors"))) {
            echo " errors";
        }
        echo "\">
\t\t";
        // line 33
        echo ($context["input"] ?? $this->getContext($context, "input"));
        echo "
\t</div>
\t";
        // line 35
        if (($context["warning"] ?? $this->getContext($context, "warning"))) {
            // line 36
            echo "\t\t<p class=\"warning\">";
            echo twig_escape_filter($this->env, ($context["warning"] ?? $this->getContext($context, "warning")), "html", null, true);
            echo "</p>
\t";
        }
        // line 38
        echo "\t";
        $this->loadTemplate("_includes/forms/errorList", "_includes/forms/field", 38)->display(array_merge($context, array("errors" => ($context["errors"] ?? $this->getContext($context, "errors")))));
        // line 39
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  121 => 38,  115 => 36,  113 => 35,  108 => 33,  100 => 32,  96 => 30,  90 => 28,  87 => 27,  83 => 25,  78 => 23,  76 => 22,  74 => 21,  58 => 20,  56 => 19,  53 => 18,  51 => 17,  40 => 16,  38 => 13,  37 => 12,  36 => 11,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set labelId = (labelId is defined ? labelId : (id is defined ? id~'-label' : null)) %}
{%- set fieldId = (fieldId is defined ? fieldId : (id is defined ? id~'-field' : null)) %}
{%- set label = (label is defined and label != '__blank__' ? label : null) %}
{%- set locale = ((craft.isLocalized() and locale is defined) ? locale : null) %}
{%- set instructions = (instructions is defined ? instructions : null) %}
{%- set warning = (warning is defined ? warning : null) %}
{%- set orientation = craft.i18n.getLocaleData(locale ?: craft.locale).getOrientation() %}
{%- set errors = (errors is defined ? errors : null) -%}
{%- set fieldClass = [
\t'field',
\t(first is defined and first ? 'first' : null),
\t(errors ? 'has-errors' : null),
\t(fieldClass is defined and fieldClass ? fieldClass : null)
]|filter|join(' ') -%}

<div class=\"{{ fieldClass }}\"{% if fieldId %} id=\"{{ fieldId }}\"{% endif %}>
\t{% if label or instructions %}
\t\t<div class=\"heading\">
\t\t\t{% if label %}
\t\t\t\t<label {% if labelId %} id=\"{{ labelId }}\"{% endif %}{% if required is defined and required %} class=\"required\"{% endif %}{% if id is defined and id %} for=\"{{ id }}\"{% endif %}>
\t\t\t\t\t{{- label|raw -}}
\t\t\t\t\t{%- if locale -%}
\t\t\t\t\t\t<span class=\"locale\">{{ locale }}</span>
\t\t\t\t\t{%- endif -%}
\t\t\t\t</label>
\t\t\t{% endif %}
\t\t\t{% if instructions %}
\t\t\t\t<div class=\"instructions\">{{ instructions|md|replace('/&amp;(\\\\w+);/', '&\$1;')|raw }}</div>
\t\t\t{% endif %}
\t\t</div>
\t{% endif %}
\t<div class=\"input {{ orientation }}{% if errors %} errors{% endif %}\">
\t\t{{ input|raw }}
\t</div>
\t{% if warning %}
\t\t<p class=\"warning\">{{ warning }}</p>
\t{% endif %}
\t{% include \"_includes/forms/errorList\" with { errors: errors } %}
</div>
", "_includes/forms/field", "");
    }
}
