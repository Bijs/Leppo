<?php

/* _includes/forms/select */
class __TwigTemplate_50c61b94bcfc3d57b739ac47e182a38c6415c7c53953373100b5fa1abd3f32a4 extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "select", 1 => ((        // line 3
(isset($context["class"]) || array_key_exists("class", $context))) ? (($context["class"] ?? $this->getContext($context, "class"))) : (null)))), " ");
        // line 6
        $context["options"] = (((isset($context["options"]) || array_key_exists("options", $context))) ? (($context["options"] ?? $this->getContext($context, "options"))) : (array()));
        // line 7
        $context["value"] = (((isset($context["value"]) || array_key_exists("value", $context))) ? (($context["value"] ?? $this->getContext($context, "value"))) : (null));
        // line 8
        $context["hasOptgroups"] = false;
        // line 10
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "\">
\t<select";
        // line 12
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 13
        if (((isset($context["toggle"]) || array_key_exists("toggle", $context)) && ($context["toggle"] ?? $this->getContext($context, "toggle")))) {
            echo " class=\"fieldtoggle\"";
        }
        // line 14
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 15
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && ($context["autofocus"] ?? $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 16
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && ($context["disabled"] ?? $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        // line 17
        if ((isset($context["targetPrefix"]) || array_key_exists("targetPrefix", $context))) {
            echo " data-target-prefix=\"";
            echo twig_escape_filter($this->env, ($context["targetPrefix"] ?? $this->getContext($context, "targetPrefix")), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 19
            echo "\t\t\t";
            if ($this->getAttribute($context["option"], "optgroup", array(), "any", true, true)) {
                // line 20
                echo "\t\t\t\t";
                if (($context["hasOptgroups"] ?? $this->getContext($context, "hasOptgroups"))) {
                    // line 21
                    echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t";
                    $context["hasOptgroups"] = true;
                    // line 24
                    echo "\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "optgroup", array()), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t";
                $context["optionLabel"] = (($this->getAttribute($context["option"], "label", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "label", array())) : ($context["option"]));
                // line 28
                echo "\t\t\t\t";
                $context["optionValue"] = (($this->getAttribute($context["option"], "value", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "value", array())) : ($context["key"]));
                // line 29
                echo "\t\t\t\t";
                $context["optionDisabled"] = (($this->getAttribute($context["option"], "disabled", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "disabled", array())) : (false));
                // line 30
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, ($context["optionValue"] ?? $this->getContext($context, "optionValue")), "html", null, true);
                echo "\"";
                if (((($context["optionValue"] ?? $this->getContext($context, "optionValue")) . "") === (($context["value"] ?? $this->getContext($context, "value")) . ""))) {
                    echo " selected";
                }
                if (($context["optionDisabled"] ?? $this->getContext($context, "optionDisabled"))) {
                    echo " disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, ($context["optionLabel"] ?? $this->getContext($context, "optionLabel")), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 32
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t";
        if (($context["hasOptgroups"] ?? $this->getContext($context, "hasOptgroups"))) {
            // line 34
            echo "\t\t\t</optgroup>
\t\t";
        }
        // line 36
        echo "\t</select>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/select";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  124 => 34,  121 => 33,  115 => 32,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  85 => 25,  82 => 24,  79 => 23,  75 => 21,  72 => 20,  69 => 19,  65 => 18,  57 => 17,  53 => 16,  49 => 15,  43 => 14,  39 => 13,  33 => 12,  28 => 10,  26 => 8,  24 => 7,  22 => 6,  20 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set class = [
\t'select',
\t(class is defined ? class : null)
]|filter|join(' ') %}

{%- set options = (options is defined ? options : []) %}
{%- set value = (value is defined ? value : null) %}
{%- set hasOptgroups = false -%}

<div class=\"{{ class }}\">
\t<select
\t\t{%- if id is defined %} id=\"{{ id }}\"{% endif %}
\t\t{%- if toggle is defined and toggle %} class=\"fieldtoggle\"{% endif %}
\t\t{%- if name is defined %} name=\"{{ name }}\"{% endif %}
\t\t{%- if autofocus is defined and autofocus and not craft.request.isMobileBrowser(true) %} autofocus{% endif %}
\t\t{%- if disabled is defined and disabled %} disabled{% endif %}
\t\t{%- if targetPrefix is defined %} data-target-prefix=\"{{ targetPrefix }}\"{% endif %}>
\t\t{% for key, option in options %}
\t\t\t{% if option.optgroup is defined %}
\t\t\t\t{% if hasOptgroups %}
\t\t\t\t\t</optgroup>
\t\t\t\t{% else %}
\t\t\t\t\t{% set hasOptgroups = true %}
\t\t\t\t{% endif %}
\t\t\t\t<optgroup label=\"{{ option.optgroup }}\">
\t\t\t{% else %}
\t\t\t\t{% set optionLabel = (option.label is defined ? option.label : option) %}
\t\t\t\t{% set optionValue = (option.value is defined ? option.value : key) %}
\t\t\t\t{% set optionDisabled = (option.disabled is defined ? option.disabled : false) %}
\t\t\t\t<option value=\"{{ optionValue }}\"{% if (optionValue~'') is same as(value~'') %} selected{% endif %}{% if optionDisabled %} disabled{% endif %}>{{ optionLabel }}</option>
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t{% if hasOptgroups %}
\t\t\t</optgroup>
\t\t{% endif %}
\t</select>
</div>
", "_includes/forms/select", "");
    }
}
