<?php

/* _includes/forms/checkboxSelect */
class __TwigTemplate_fe08523a44b96232e295dc55400bec1b62ed660488b41a823448e3e0dcd58007 extends Craft\BaseTemplate
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
        $context["options"] = (((isset($context["options"]) || array_key_exists("options", $context))) ? (($context["options"] ?? $this->getContext($context, "options"))) : (array()));
        // line 2
        $context["values"] = (((isset($context["values"]) || array_key_exists("values", $context))) ? (($context["values"] ?? $this->getContext($context, "values"))) : (array()));
        // line 4
        $context["showAllOption"] = (((isset($context["showAllOption"]) || array_key_exists("showAllOption", $context))) ? (($context["showAllOption"] ?? $this->getContext($context, "showAllOption"))) : (true));
        // line 5
        if (($context["showAllOption"] ?? $this->getContext($context, "showAllOption"))) {
            // line 6
            $context["allLabel"] = (((isset($context["allLabel"]) || array_key_exists("allLabel", $context))) ? (($context["allLabel"] ?? $this->getContext($context, "allLabel"))) : (\Craft\Craft::t("All")));
            // line 7
            $context["allValue"] = (((isset($context["allValue"]) || array_key_exists("allValue", $context))) ? (($context["allValue"] ?? $this->getContext($context, "allValue"))) : ("*"));
            // line 8
            $context["allChecked"] = (twig_test_empty(($context["values"] ?? $this->getContext($context, "values"))) || (($context["values"] ?? $this->getContext($context, "values")) == ($context["allValue"] ?? $this->getContext($context, "allValue"))));
        }
        // line 10
        echo "
<div class=\"checkbox-select";
        // line 11
        if ((isset($context["class"]) || array_key_exists("class", $context))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        }
        echo "\">";
        // line 12
        if (($context["showAllOption"] ?? $this->getContext($context, "showAllOption"))) {
            // line 13
            echo "\t\t<div>
\t\t\t";
            // line 14
            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/checkboxSelect", 14)->display(array("id" => ((            // line 15
(isset($context["id"]) || array_key_exists("id", $context))) ? (($context["id"] ?? $this->getContext($context, "id"))) : (null)), "class" => "all", "label" => (("<b>" .             // line 17
($context["allLabel"] ?? $this->getContext($context, "allLabel"))) . "</b>"), "name" => ((            // line 18
(isset($context["name"]) || array_key_exists("name", $context))) ? (($context["name"] ?? $this->getContext($context, "name"))) : (null)), "value" =>             // line 19
($context["allValue"] ?? $this->getContext($context, "allValue")), "checked" =>             // line 20
($context["allChecked"] ?? $this->getContext($context, "allChecked")), "autofocus" => ((            // line 21
(isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && ($context["autofocus"] ?? $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))));
            // line 23
            echo "\t\t</div>";
        }
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 26
            $context["optionLabel"] = (($this->getAttribute($context["option"], "label", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "label", array())) : ($context["option"]));
            // line 27
            $context["optionValue"] = ((($this->getAttribute($context["option"], "value", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "value", array())) : ($context["key"])) . "");
            // line 28
            if (( !($context["showAllOption"] ?? $this->getContext($context, "showAllOption")) || (($context["optionValue"] ?? $this->getContext($context, "optionValue")) != ($context["allValue"] ?? $this->getContext($context, "allValue"))))) {
                // line 29
                echo "\t\t\t<div>
\t\t\t\t";
                // line 30
                $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/checkboxSelect", 30)->display(array("label" =>                 // line 31
($context["optionLabel"] ?? $this->getContext($context, "optionLabel")), "name" => ((                // line 32
(isset($context["name"]) || array_key_exists("name", $context))) ? ((($context["name"] ?? $this->getContext($context, "name")) . "[]")) : (null)), "value" =>                 // line 33
($context["optionValue"] ?? $this->getContext($context, "optionValue")), "checked" => ((                // line 34
($context["showAllOption"] ?? $this->getContext($context, "showAllOption")) && ($context["allChecked"] ?? $this->getContext($context, "allChecked"))) || twig_in_filter(($context["optionValue"] ?? $this->getContext($context, "optionValue")), ($context["values"] ?? $this->getContext($context, "values")))), "disabled" => (                // line 35
($context["showAllOption"] ?? $this->getContext($context, "showAllOption")) && ($context["allChecked"] ?? $this->getContext($context, "allChecked")))));
                // line 37
                echo "\t\t\t</div>
\t\t";
            }
            // line 39
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkboxSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  83 => 39,  79 => 37,  77 => 35,  76 => 34,  75 => 33,  74 => 32,  73 => 31,  72 => 30,  69 => 29,  67 => 28,  65 => 27,  63 => 26,  59 => 25,  56 => 23,  54 => 21,  53 => 20,  52 => 19,  51 => 18,  50 => 17,  49 => 15,  48 => 14,  45 => 13,  43 => 12,  37 => 11,  34 => 10,  31 => 8,  29 => 7,  27 => 6,  25 => 5,  23 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set options = (options is defined ? options : []) %}
{%- set values = (values is defined ? values : []) -%}

{%- set showAllOption  = (showAllOption is defined ? showAllOption : true) %}
{%- if showAllOption %}
\t{%- set allLabel = (allLabel is defined ? allLabel : \"All\"|t) %}
\t{%- set allValue = (allValue is defined ? allValue : '*') %}
\t{%- set allChecked = (values is empty or values == allValue) %}
{%- endif %}

<div class=\"checkbox-select{% if class is defined %} {{ class }}{% endif %}\">
\t{%- if showAllOption %}
\t\t<div>
\t\t\t{% include \"_includes/forms/checkbox\" with {
\t\t\t\tid:        (id is defined ? id : null),
\t\t\t\tclass:     'all',
\t\t\t\tlabel:     '<b>' ~ allLabel ~ '</b>',
\t\t\t\tname:      (name is defined ? name : null),
\t\t\t\tvalue:     allValue,
\t\t\t\tchecked:   allChecked,
\t\t\t\tautofocus: (autofocus is defined and autofocus and not craft.request.isMobileBrowser(true))
\t\t\t} only %}
\t\t</div>
\t{%- endif %}
\t{%- for key, option in options %}
\t\t{%- set optionLabel = (option.label is defined ? option.label : option) %}
\t\t{%- set optionValue = (option.value is defined ? option.value : key)~'' -%}
\t\t{% if not showAllOption or optionValue != allValue %}
\t\t\t<div>
\t\t\t\t{% include \"_includes/forms/checkbox\" with {
\t\t\t\t\tlabel:    optionLabel,
\t\t\t\t\tname:     (name is defined ? name~'[]' : null),
\t\t\t\t\tvalue:    optionValue,
\t\t\t\t\tchecked:  ((showAllOption and allChecked) or optionValue in values),
\t\t\t\t\tdisabled: (showAllOption and allChecked)
\t\t\t\t} only %}
\t\t\t</div>
\t\t{% endif %}
\t{% endfor %}
</div>
", "_includes/forms/checkboxSelect", "");
    }
}
