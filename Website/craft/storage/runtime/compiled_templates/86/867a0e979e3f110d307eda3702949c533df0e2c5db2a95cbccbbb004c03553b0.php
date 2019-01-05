<?php

/* _includes/forms/date */
class __TwigTemplate_20a8639f0f4c997076889c982cfd6fe2e3502477f67f3429712aa27dcd309da2 extends Craft\BaseTemplate
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
        if ( !(isset($context["value"]) || array_key_exists("value", $context))) {
            // line 2
            $context["value"] = null;
        }
        // line 5
        $context["id"] = (($context["id"] ?? $this->getContext($context, "id")) . "-date");
        // line 7
        if (((isset($context["name"]) || array_key_exists("name", $context)) && ($context["name"] ?? $this->getContext($context, "name")))) {
            // line 8
            $context["name"] = (($context["name"] ?? $this->getContext($context, "name")) . "[date]");
        }
        // line 11
        echo "<div class=\"datewrapper\">";
        // line 12
        $this->loadTemplate("_includes/forms/text", "_includes/forms/date", 12)->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => ((($context["value"] ?? $this->getContext($context, "value"))) ? ($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "localeDate", array(), "method")) : ("")))));
        // line 13
        echo "</div>";
        // line 15
        ob_start();
        // line 16
        echo "\t\$('#";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId(($context["id"] ?? $this->getContext($context, "id"))), "js"), "html", null, true);
        echo "').datepicker(\$.extend({
\t\tdefaultDate: new Date(";
        // line 17
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "year", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "month", array()) - 1), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "day", array()), "html", null, true);
        }
        echo ")
\t}, Craft.datepickerOptions));";
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
    }

    public function getTemplateName()
    {
        return "_includes/forms/date";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  39 => 16,  37 => 15,  35 => 13,  33 => 12,  31 => 11,  28 => 8,  26 => 7,  24 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if value is not defined -%}
\t{% set value = null -%}
{% endif -%}

{% set id = id ~ '-date' -%}

{% if name is defined and name -%}
\t{% set name = name ~ '[date]' -%}
{% endif -%}

<div class=\"datewrapper\">
\t{%- include \"_includes/forms/text\" with { autocomplete: false, size: 10, value: (value ? value.localeDate() : '') } -%}
</div>

{%- includejs %}
\t\$('#{{ id|namespaceInputId|e('js') }}').datepicker(\$.extend({
\t\tdefaultDate: new Date({% if value %}{{ value.year }}, {{ value.month-1 }}, {{ value.day }}{% endif %})
\t}, Craft.datepickerOptions));
{%- endincludejs %}
", "_includes/forms/date", "");
    }
}
