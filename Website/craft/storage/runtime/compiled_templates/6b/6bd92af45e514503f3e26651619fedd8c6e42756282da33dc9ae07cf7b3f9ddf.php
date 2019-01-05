<?php

/* _includes/forms/textarea */
class __TwigTemplate_673c3b499184c9ec88af04c7639682ca72c7dd34289d206fed0707c242d5cb1b extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((        // line 3
(isset($context["class"]) || array_key_exists("class", $context)) && ($context["class"] ?? $this->getContext($context, "class")))) ? (($context["class"] ?? $this->getContext($context, "class"))) : (null)), 2 => (((        // line 4
(isset($context["placeholder"]) || array_key_exists("placeholder", $context)) && ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) ? ("nicetext") : (null)), 3 => (((        // line 5
(isset($context["size"]) || array_key_exists("size", $context)) && ($context["size"] ?? $this->getContext($context, "size")))) ? (null) : ("fullwidth")))), " ");
        // line 8
        $context["rows"] = (((isset($context["rows"]) || array_key_exists("rows", $context))) ? (($context["rows"] ?? $this->getContext($context, "rows"))) : (2));
        // line 9
        $context["cols"] = (((isset($context["cols"]) || array_key_exists("cols", $context))) ? (($context["cols"] ?? $this->getContext($context, "cols"))) : (50));
        // line 11
        echo "<textarea class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, ($context["rows"] ?? $this->getContext($context, "rows")), "html", null, true);
        echo "\" cols=\"";
        echo twig_escape_filter($this->env, ($context["cols"] ?? $this->getContext($context, "cols")), "html", null, true);
        echo "\"";
        // line 12
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 13
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 14
        if (((isset($context["maxlength"]) || array_key_exists("maxlength", $context)) && ($context["maxlength"] ?? $this->getContext($context, "maxlength")))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, ($context["maxlength"] ?? $this->getContext($context, "maxlength")), "html", null, true);
            echo "\"";
        }
        // line 15
        if (((isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context)) && ($context["showCharsLeft"] ?? $this->getContext($context, "showCharsLeft")))) {
            echo " data-show-chars-left";
        }
        // line 16
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && ($context["autofocus"] ?? $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 17
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && ($context["disabled"] ?? $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        // line 18
        if ((isset($context["placeholder"]) || array_key_exists("placeholder", $context))) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, (((isset($context["value"]) || array_key_exists("value", $context))) ? (($context["value"] ?? $this->getContext($context, "value"))) : (null)), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/textarea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  62 => 17,  58 => 16,  54 => 15,  48 => 14,  42 => 13,  36 => 12,  28 => 11,  26 => 9,  24 => 8,  22 => 5,  21 => 4,  20 => 3,  19 => 1,);
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
\t'text',
\t(class is defined and class ? class : null),
\t(placeholder is defined and placeholder ? 'nicetext' : null),
\t(size is defined and size ? null : 'fullwidth')
]|filter|join(' ') %}

{%- set rows = (rows is defined ? rows : 2) %}
{%- set cols = (cols is defined ? cols : 50) -%}

<textarea class=\"{{ class }}\" rows=\"{{ rows }}\" cols=\"{{ cols }}\"
\t{%- if id is defined %} id=\"{{ id }}\"{% endif %}
\t{%- if name is defined %} name=\"{{ name }}\"{% endif %}
\t{%- if maxlength is defined and maxlength %} maxlength=\"{{ maxlength }}\"{% endif %}
\t{%- if showCharsLeft is defined and showCharsLeft %} data-show-chars-left{% endif %}
\t{%- if autofocus is defined and autofocus and not craft.request.isMobileBrowser(true) %} autofocus{% endif %}
\t{%- if disabled is defined and disabled %} disabled{% endif %}
\t{%- if placeholder is defined %} placeholder=\"{{ placeholder }}\"{% endif %}>{{ value is defined ? value : null }}</textarea>
", "_includes/forms/textarea", "");
    }
}
