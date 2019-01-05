<?php

/* _includes/forms/checkbox */
class __TwigTemplate_933c452e8f691f18fc9a9c510e4145f142bff17c8c6705ab0f1a7c24819126e2 extends Craft\BaseTemplate
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
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => ((        // line 4
(isset($context["class"]) || array_key_exists("class", $context))) ? (($context["class"] ?? $this->getContext($context, "class"))) : (null)), 1 => ((((        // line 5
(isset($context["toggle"]) || array_key_exists("toggle", $context)) &&  !twig_test_empty(($context["toggle"] ?? $this->getContext($context, "toggle")))) || ((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context)) &&  !twig_test_empty(($context["reverseToggle"] ?? $this->getContext($context, "reverseToggle")))))) ? ("fieldtoggle") : (null)), 2 => "checkbox")), " ");
        // line 8
        echo "
";
        // line 9
        $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context))) ? (($context["value"] ?? $this->getContext($context, "value"))) : (1));
        // line 10
        $context["id"] = ((((isset($context["id"]) || array_key_exists("id", $context)) && ($context["id"] ?? $this->getContext($context, "id")))) ? (($context["id"] ?? $this->getContext($context, "id"))) : (("checkbox" . twig_random($this->env))));
        // line 11
        $context["label"] = (((isset($context["label"]) || array_key_exists("label", $context))) ? (($context["label"] ?? $this->getContext($context, "label"))) : (""));
        // line 12
        echo "
";
        // line 13
        if (((isset($context["name"]) || array_key_exists("name", $context)) && ((twig_length_filter($this->env, ($context["name"] ?? $this->getContext($context, "name"))) < 3) || (twig_slice($this->env, ($context["name"] ?? $this->getContext($context, "name")),  -2) != "[]")))) {
            // line 14
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 16
        echo "
<input type=\"checkbox\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\"";
        // line 18
        if (($context["id"] ?? $this->getContext($context, "id"))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "\tclass=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "\"";
        // line 20
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 21
        if (((isset($context["checked"]) || array_key_exists("checked", $context)) && ($context["checked"] ?? $this->getContext($context, "checked")))) {
            echo " checked";
        }
        // line 22
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && ($context["autofocus"] ?? $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 23
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && ($context["disabled"] ?? $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        // line 24
        if ((isset($context["toggle"]) || array_key_exists("toggle", $context))) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, ($context["toggle"] ?? $this->getContext($context, "toggle")), "html", null, true);
            echo "\"";
        }
        // line 25
        if ((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context))) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, ($context["reverseToggle"] ?? $this->getContext($context, "reverseToggle")), "html", null, true);
            echo "\"";
        }
        echo ">

<label for=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo ($context["label"] ?? $this->getContext($context, "label"));
        echo "</label>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  88 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  64 => 20,  60 => 19,  54 => 18,  51 => 17,  48 => 16,  42 => 14,  40 => 13,  37 => 12,  35 => 11,  33 => 10,  31 => 9,  28 => 8,  26 => 5,  25 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- spaceless %}

{% set class = [
\t(class is defined ? class : null),
\t((toggle is defined and toggle is not empty) or (reverseToggle is defined and reverseToggle is not empty) ? 'fieldtoggle' : null),
\t'checkbox'
]|filter|join(' ') %}

{% set value = (value is defined ? value : 1) %}
{% set id = (id is defined and id ? id : 'checkbox'~random()) %}
{% set label = (label is defined ? label) %}

{% if name is defined and (name|length < 3 or name|slice(-2) != '[]') %}
\t<input type=\"hidden\" name=\"{{ name }}\" value=\"\">
{% endif %}

<input type=\"checkbox\" value=\"{{ value }}\"
\t{%- if id %} id=\"{{ id }}\"{% endif %}
\tclass=\"{{ class }}\"
\t{%- if name is defined %} name=\"{{ name }}\"{% endif %}
\t{%- if checked is defined and checked %} checked{% endif %}
\t{%- if autofocus is defined and autofocus and not craft.request.isMobileBrowser(true) %} autofocus{% endif %}
\t{%- if disabled is defined and disabled %} disabled{% endif %}
\t{%- if toggle is defined %} data-target=\"{{ toggle }}\"{% endif %}
\t{%- if reverseToggle is defined %} data-reverse-target=\"{{ reverseToggle }}\"{% endif %}>

<label for=\"{{ id }}\">{{ label|raw }}</label>

{% endspaceless -%}
", "_includes/forms/checkbox", "");
    }
}
