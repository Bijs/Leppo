<?php

/* _includes/forms/multiselect */
class __TwigTemplate_8c2f99ad8b0963c9d4c3d316770b092f7926ded1b7722bc0b425b04c722b8012 extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "multiselect", 1 => ((        // line 3
(isset($context["class"]) || array_key_exists("class", $context))) ? (($context["class"] ?? $this->getContext($context, "class"))) : (null)))), " ");
        // line 6
        $context["options"] = (((isset($context["options"]) || array_key_exists("options", $context))) ? (($context["options"] ?? $this->getContext($context, "options"))) : (array()));
        // line 7
        $context["values"] = (((isset($context["values"]) || array_key_exists("values", $context))) ? (($context["values"] ?? $this->getContext($context, "values"))) : (array()));
        // line 8
        $context["hasOptgroups"] = false;
        // line 10
        if (((isset($context["name"]) || array_key_exists("name", $context)) && ($context["name"] ?? $this->getContext($context, "name")))) {
            // line 11
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 14
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "\">
\t<select multiple";
        // line 16
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 17
        if (((isset($context["name"]) || array_key_exists("name", $context)) && ($context["name"] ?? $this->getContext($context, "name")))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "[]\"";
        }
        // line 18
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && ($context["autofocus"] ?? $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 19
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && ($context["disabled"] ?? $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        // line 20
        if ((isset($context["size"]) || array_key_exists("size", $context))) {
            echo " size=\"";
            echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 22
            echo "\t\t\t";
            if ($this->getAttribute($context["option"], "optgroup", array(), "any", true, true)) {
                // line 23
                echo "\t\t\t\t";
                if (($context["hasOptgroups"] ?? $this->getContext($context, "hasOptgroups"))) {
                    // line 24
                    echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t\t";
                    $context["hasOptgroups"] = true;
                    // line 27
                    echo "\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "optgroup", array()), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t";
                $context["optionLabel"] = (($this->getAttribute($context["option"], "label", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "label", array())) : ($context["option"]));
                // line 31
                echo "\t\t\t\t";
                $context["optionValue"] = (($this->getAttribute($context["option"], "value", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "value", array())) : ($context["key"]));
                // line 32
                echo "\t\t\t\t";
                $context["optionDisabled"] = (($this->getAttribute($context["option"], "disabled", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "disabled", array())) : (false));
                // line 33
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, ($context["optionValue"] ?? $this->getContext($context, "optionValue")), "html", null, true);
                echo "\"";
                if (twig_in_filter(($context["optionValue"] ?? $this->getContext($context, "optionValue")), ($context["values"] ?? $this->getContext($context, "values")))) {
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</select>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/multiselect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 36,  103 => 33,  100 => 32,  97 => 31,  94 => 30,  88 => 28,  85 => 27,  82 => 26,  78 => 24,  75 => 23,  72 => 22,  68 => 21,  61 => 20,  57 => 19,  53 => 18,  47 => 17,  41 => 16,  36 => 14,  30 => 11,  28 => 10,  26 => 8,  24 => 7,  22 => 6,  20 => 3,  19 => 1,);
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
\t'multiselect',
\t(class is defined ? class : null)
]|filter|join(' ') %}

{%- set options = (options is defined ? options : []) %}
{%- set values = (values is defined ? values : []) -%}
{%- set hasOptgroups = false -%}

{% if name is defined and name %}
\t<input type=\"hidden\" name=\"{{ name }}\" value=\"\">
{% endif -%}

<div class=\"{{ class }}\">
\t<select multiple
\t\t{%- if id is defined %} id=\"{{ id }}\"{% endif %}
\t\t{%- if name is defined and name %} name=\"{{ name }}[]\"{% endif %}
\t\t{%- if autofocus is defined and autofocus and not craft.request.isMobileBrowser(true) %} autofocus{% endif %}
\t\t{%- if disabled is defined and disabled %} disabled{% endif %}
\t\t{%- if size is defined %} size=\"{{ size }}\"{% endif %}>
\t\t{%- for key, option in options %}
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
\t\t\t\t<option value=\"{{ optionValue }}\"{% if optionValue in values %} selected{% endif %}{% if optionDisabled %} disabled{% endif %}>{{ optionLabel }}</option>
\t\t\t{% endif %}
\t\t{%- endfor %}
\t</select>
</div>
", "_includes/forms/multiselect", "");
    }
}
