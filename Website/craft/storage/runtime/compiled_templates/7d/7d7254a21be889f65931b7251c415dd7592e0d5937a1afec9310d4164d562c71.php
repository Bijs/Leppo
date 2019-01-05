<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_6e937fff37fc50cf5ba72e2a727d25ecc6d503c11c75bf65852026af828dea18 extends Craft\BaseTemplate
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
        $context["on"] = (((isset($context["on"]) || array_key_exists("on", $context))) ? (($context["on"] ?? $this->getContext($context, "on"))) : (false));
        // line 2
        $context["small"] = (((isset($context["small"]) || array_key_exists("small", $context))) ? (($context["small"] ?? $this->getContext($context, "small"))) : (false));
        // line 3
        $context["toggle"] = (((isset($context["toggle"]) || array_key_exists("toggle", $context))) ? (($context["toggle"] ?? $this->getContext($context, "toggle"))) : (false));
        // line 4
        $context["reverseToggle"] = (((isset($context["reverseToggle"]) || array_key_exists("reverseToggle", $context))) ? (($context["reverseToggle"] ?? $this->getContext($context, "reverseToggle"))) : (false));
        // line 5
        $context["disabled"] = (((isset($context["disabled"]) || array_key_exists("disabled", $context))) ? (($context["disabled"] ?? $this->getContext($context, "disabled"))) : (false));
        // line 6
        echo "
<div class=\"lightswitch";
        // line 7
        if (($context["on"] ?? $this->getContext($context, "on"))) {
            echo " on";
        }
        if (($context["small"] ?? $this->getContext($context, "small"))) {
            echo " small";
        }
        if ((($context["toggle"] ?? $this->getContext($context, "toggle")) || ($context["reverseToggle"] ?? $this->getContext($context, "reverseToggle")))) {
            echo " fieldtoggle";
        }
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled";
        }
        echo "\" tabindex=\"0\"";
        // line 8
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 9
        if ((isset($context["labelId"]) || array_key_exists("labelId", $context))) {
            echo " aria-labelledby=\"";
            echo twig_escape_filter($this->env, ($context["labelId"] ?? $this->getContext($context, "labelId")), "html", null, true);
            echo "\"";
        }
        // line 10
        if (($context["toggle"] ?? $this->getContext($context, "toggle"))) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, ($context["toggle"] ?? $this->getContext($context, "toggle")), "html", null, true);
            echo "\"";
        }
        // line 11
        if (($context["reverseToggle"] ?? $this->getContext($context, "reverseToggle"))) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, ($context["reverseToggle"] ?? $this->getContext($context, "reverseToggle")), "html", null, true);
            echo "\"";
        }
        echo ">
\t<div class=\"lightswitch-container\">
\t\t<div class=\"label on\"></div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\"></div>
\t</div>
\t";
        // line 17
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            // line 18
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"";
            echo ((($context["on"] ?? $this->getContext($context, "on"))) ? ("1") : (""));
            echo "\"";
            if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
                echo " disabled";
            }
            echo ">";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  79 => 18,  77 => 17,  64 => 11,  58 => 10,  52 => 9,  46 => 8,  32 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set on = (on is defined ? on : false) %}
{%- set small = (small is defined ? small : false) %}
{%- set toggle = (toggle is defined ? toggle : false) %}
{%- set reverseToggle = (reverseToggle is defined ? reverseToggle : false) %}
{%- set disabled = (disabled is defined ? disabled : false) %}

<div class=\"lightswitch{% if on %} on{% endif %}{% if small %} small{% endif %}{% if toggle or reverseToggle %} fieldtoggle{% endif %}{% if disabled %} disabled{% endif %}\" tabindex=\"0\"
\t{%- if id is defined %} id=\"{{ id }}\"{% endif %}
\t{%- if labelId is defined %} aria-labelledby=\"{{ labelId }}\"{% endif %}
\t{%- if toggle %} data-target=\"{{ toggle }}\"{% endif %}
\t{%- if reverseToggle %} data-reverse-target=\"{{ reverseToggle }}\"{% endif %}>
\t<div class=\"lightswitch-container\">
\t\t<div class=\"label on\"></div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\"></div>
\t</div>
\t{% if name is defined -%}
\t\t<input type=\"hidden\" name=\"{{ name }}\" value=\"{{ on ? '1' }}\"{% if disabled %} disabled{% endif %}>
\t{%- endif %}
</div>
", "_includes/forms/lightswitch", "");
    }
}
