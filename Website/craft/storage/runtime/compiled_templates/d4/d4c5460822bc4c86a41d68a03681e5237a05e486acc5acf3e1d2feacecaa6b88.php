<?php

/* _includes/field */
class __TwigTemplate_44e3d8198257ec3296fd1916a2c4d38ef20e1cf4429a13ec4031a7048e093c1f extends Craft\BaseTemplate
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
        $context["static"] = (((isset($context["static"]) || array_key_exists("static", $context))) ? (($context["static"] ?? $this->getContext($context, "static"))) : (false));
        // line 2
        $context["element"] = (((isset($context["element"]) || array_key_exists("element", $context))) ? (($context["element"] ?? $this->getContext($context, "element"))) : (null));
        // line 3
        echo "
";
        // line 4
        $context["value"] = ((($context["element"] ?? $this->getContext($context, "element"))) ? ($this->getAttribute(($context["element"] ?? $this->getContext($context, "element")), "getFieldValue", array(0 => $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "handle", array())), "method")) : (null));
        // line 5
        $context["errors"] = (((($context["element"] ?? $this->getContext($context, "element")) &&  !($context["static"] ?? $this->getContext($context, "static")))) ? ($this->getAttribute(($context["element"] ?? $this->getContext($context, "element")), "getErrors", array(0 => $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "handle", array())), "method")) : (null));
        // line 6
        $context["fieldtype"] = $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "getFieldType", array(), "method");
        // line 7
        $context["instructions"] = ((( !($context["static"] ?? $this->getContext($context, "static")) && $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "instructions", array()))) ? (\Craft\Craft::t($this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "instructions", array()))) : (null));
        // line 8
        echo "
";
        // line 9
        if (($context["fieldtype"] ?? $this->getContext($context, "fieldtype"))) {
            // line 10
            echo "\t";
            if (($context["element"] ?? $this->getContext($context, "element"))) {
                // line 11
                echo "\t\t";
                $this->getAttribute(($context["fieldtype"] ?? $this->getContext($context, "fieldtype")), "setElement", array(0 => ($context["element"] ?? $this->getContext($context, "element"))), "method");
                // line 12
                echo "\t";
            }
            // line 13
            echo "\t";
            if ( !($context["static"] ?? $this->getContext($context, "static"))) {
                // line 14
                echo "\t\t";
                $context["input"] = $this->getAttribute(($context["fieldtype"] ?? $this->getContext($context, "fieldtype")), "getInputHtml", array(0 => $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "handle", array()), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
                // line 15
                echo "\t";
            } else {
                // line 16
                echo "\t\t";
                $context["input"] = $this->getAttribute(($context["fieldtype"] ?? $this->getContext($context, "fieldtype")), "getStaticHtml", array(0 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
                // line 17
                echo "\t";
            }
        } else {
            // line 19
            echo "\t";
            $context["input"] = (("<p class=\"error\">" . \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute(($context["field"] ?? $this->getContext($context, "field")), "type", array())))) . "</p>");
        }
        // line 21
        echo "
";
        // line 22
        if ((($context["instructions"] ?? $this->getContext($context, "instructions")) || ($context["input"] ?? $this->getContext($context, "input")))) {
            // line 23
            echo "\t";
            $this->loadTemplate("_includes/forms/field", "_includes/field", 23)->display(array("label" => twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute(            // line 24
($context["field"] ?? $this->getContext($context, "field")), "name", array()))), "locale" => (($this->getAttribute(            // line 25
($context["field"] ?? $this->getContext($context, "field")), "translatable", array())) ? ((((isset($context["locale"]) || array_key_exists("locale", $context))) ? (($context["locale"] ?? $this->getContext($context, "locale"))) : (((($context["element"] ?? $this->getContext($context, "element"))) ? ($this->getAttribute(($context["element"] ?? $this->getContext($context, "element")), "locale", array())) : ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "locale", array())))))) : ("")), "required" => (( !            // line 26
($context["static"] ?? $this->getContext($context, "static"))) ? (($context["required"] ?? $this->getContext($context, "required"))) : (false)), "instructions" => twig_escape_filter($this->env,             // line 27
($context["instructions"] ?? $this->getContext($context, "instructions"))), "id" => $this->getAttribute(            // line 28
($context["field"] ?? $this->getContext($context, "field")), "handle", array()), "errors" =>             // line 29
($context["errors"] ?? $this->getContext($context, "errors")), "input" =>             // line 30
($context["input"] ?? $this->getContext($context, "input"))));
        }
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  80 => 29,  79 => 28,  78 => 27,  77 => 26,  76 => 25,  75 => 24,  73 => 23,  71 => 22,  68 => 21,  64 => 19,  60 => 17,  57 => 16,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  37 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set static = static is defined ? static : false %}
{% set element = element is defined ? element : null %}

{% set value = (element ? element.getFieldValue(field.handle) : null) %}
{% set errors = (element and not static ? element.getErrors(field.handle) : null) %}
{% set fieldtype = field.getFieldType() %}
{% set instructions = (not static and field.instructions ? field.instructions|t : null) %}

{% if fieldtype %}
\t{% if element %}
\t\t{% do fieldtype.setElement(element) %}
\t{% endif %}
\t{% if not static %}
\t\t{% set input = fieldtype.getInputHtml(field.handle, value) %}
\t{% else %}
\t\t{% set input = fieldtype.getStaticHtml(value) %}
\t{% endif %}
{% else %}
\t{% set input = '<p class=\"error\">' ~ \"The fieldtype class “{class}” could not be found.\"|t({ class: field.type }) ~ '</p>' %}
{% endif %}

{% if instructions or input %}
\t{% include \"_includes/forms/field\" with {
\t\tlabel: field.name|t|e,
\t\tlocale: field.translatable ? (locale is defined ? locale : (element ? element.locale : craft.locale)),
\t\trequired: (not static ? required : false),
\t\tinstructions: instructions|e,
\t\tid: field.handle,
\t\terrors: errors,
\t\tinput: input
\t} only %}
{% endif %}
", "_includes/field", "");
    }
}
