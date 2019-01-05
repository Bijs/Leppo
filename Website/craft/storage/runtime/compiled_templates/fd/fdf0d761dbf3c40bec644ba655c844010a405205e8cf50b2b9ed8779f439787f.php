<?php

/* _includes/forms/text */
class __TwigTemplate_8a35e1b1f0798aedd1f2bebcc30a117b311f2b8aa268a70351ff3e2c2fe69410 extends Craft\BaseTemplate
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
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (($context["type"] ?? $this->getContext($context, "type"))) : ("text"));
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((        // line 5
(isset($context["class"]) || array_key_exists("class", $context)) && ($context["class"] ?? $this->getContext($context, "class")))) ? (($context["class"] ?? $this->getContext($context, "class"))) : (null)), 2 => (((        // line 6
(isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? $this->getContext($context, "type")) == "password"))) ? ("password") : (null)), 3 => (((        // line 7
(isset($context["disabled"]) || array_key_exists("disabled", $context)) && ($context["disabled"] ?? $this->getContext($context, "disabled")))) ? ("disabled") : (null)), 4 => (((        // line 8
(isset($context["size"]) || array_key_exists("size", $context)) && ($context["size"] ?? $this->getContext($context, "size")))) ? (null) : ("fullwidth")))), " ");
        // line 11
        if (((((isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context)) && ($context["showCharsLeft"] ?? $this->getContext($context, "showCharsLeft"))) && (isset($context["maxlength"]) || array_key_exists("maxlength", $context))) && ($context["maxlength"] ?? $this->getContext($context, "maxlength")))) {
            // line 12
            $context["style"] = (((("padding-" . ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getLocaleData", array(), "method"), "getOrientation", array(), "method") == "ltr")) ? ("right") : ("left"))) . ": ") . ((7.2 * twig_length_filter($this->env, ($context["maxlength"] ?? $this->getContext($context, "maxlength")))) + 14)) . "px;");
        }
        // line 15
        if ((($context["type"] ?? $this->getContext($context, "type")) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 16
        echo "<input class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\"";
        // line 17
        if ((isset($context["style"]) || array_key_exists("style", $context))) {
            echo " style=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? $this->getContext($context, "style")), "html", null, true);
            echo "\"";
        }
        // line 18
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 19
        if ((isset($context["size"]) || array_key_exists("size", $context))) {
            echo " size=\"";
            echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
            echo "\"";
        }
        // line 20
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 21
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        // line 22
        if (((isset($context["maxlength"]) || array_key_exists("maxlength", $context)) && ($context["maxlength"] ?? $this->getContext($context, "maxlength")))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, ($context["maxlength"] ?? $this->getContext($context, "maxlength")), "html", null, true);
            echo "\"";
        }
        // line 23
        if (((isset($context["showCharsLeft"]) || array_key_exists("showCharsLeft", $context)) && ($context["showCharsLeft"] ?? $this->getContext($context, "showCharsLeft")))) {
            echo " data-show-chars-left";
        }
        // line 24
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && ($context["autofocus"] ?? $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 25
        if (( !(isset($context["autocomplete"]) || array_key_exists("autocomplete", $context)) ||  !($context["autocomplete"] ?? $this->getContext($context, "autocomplete")))) {
            echo " autocomplete=\"off\"";
        }
        // line 26
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && ($context["disabled"] ?? $this->getContext($context, "disabled")))) {
            echo " disabled ";
        }
        // line 27
        if (((isset($context["readonly"]) || array_key_exists("readonly", $context)) && ($context["readonly"] ?? $this->getContext($context, "readonly")))) {
            echo " readonly ";
        }
        // line 28
        if ((isset($context["title"]) || array_key_exists("title", $context))) {
            echo " title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "\"";
        }
        // line 29
        if ((isset($context["placeholder"]) || array_key_exists("placeholder", $context))) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 30
        if ((($context["type"] ?? $this->getContext($context, "type")) == "password")) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  104 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  72 => 22,  66 => 21,  60 => 20,  54 => 19,  48 => 18,  42 => 17,  36 => 16,  32 => 15,  29 => 12,  27 => 11,  25 => 8,  24 => 7,  23 => 6,  22 => 5,  21 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set type = (type is defined ? type : 'text') %}

{%- set class = [
\t'text',
\t(class is defined and class ? class : null),
\t(type is defined and type == 'password' ? 'password' : null),
\t(disabled is defined and disabled ? 'disabled' : null),
\t(size is defined and size ? null : 'fullwidth')
]|filter|join(' ') %}

{%- if showCharsLeft is defined and showCharsLeft and maxlength is defined and maxlength %}
\t{%- set style = 'padding-'~(craft.i18n.getLocaleData().getOrientation() == 'ltr' ? 'right' : 'left')~': '~(7.2*maxlength|length+14)~'px;' %}
{%- endif %}

{%- if type == 'password' %}<div class=\"passwordwrapper\">{% endif -%}
<input class=\"{{ class }}\" type=\"{{ type }}\"
\t{%- if style is defined %} style=\"{{ style }}\"{% endif %}
\t{%- if id is defined %} id=\"{{ id }}\"{% endif %}
\t{%- if size is defined %} size=\"{{ size }}\"{% endif %}
\t{%- if name is defined %} name=\"{{ name }}\"{% endif %}
\t{%- if value is defined %} value=\"{{ value }}\"{% endif %}
\t{%- if maxlength is defined and maxlength %} maxlength=\"{{ maxlength }}\"{% endif %}
\t{%- if showCharsLeft is defined and showCharsLeft %} data-show-chars-left{% endif %}
\t{%- if autofocus is defined and autofocus and not craft.request.isMobileBrowser(true) %} autofocus{% endif %}
\t{%- if autocomplete is not defined or not autocomplete %} autocomplete=\"off\"{% endif %}
\t{%- if disabled is defined and disabled %} disabled {% endif %}
\t{%- if readonly is defined and readonly %} readonly {% endif %}
\t{%- if title is defined %} title=\"{{ title }}\"{% endif %}
\t{%- if placeholder is defined %} placeholder=\"{{ placeholder }}\"{% endif %}>
{%- if type == 'password' %}</div>{% endif %}
", "_includes/forms/text", "");
    }
}
