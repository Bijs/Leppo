<?php

/* _includes/forms/time */
class __TwigTemplate_02bbfb516038735568cc79040f656cedb936dcf31b2ac5f47449edf37350ee41 extends Craft\BaseTemplate
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
        $context["id"] = (($context["id"] ?? $this->getContext($context, "id")) . "-time");
        // line 7
        if (((isset($context["name"]) || array_key_exists("name", $context)) && ($context["name"] ?? $this->getContext($context, "name")))) {
            // line 8
            $context["name"] = (($context["name"] ?? $this->getContext($context, "name")) . "[time]");
        }
        // line 11
        $_js = (("lib/jquery.timepicker/jquery.timepicker" . (($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "useCompressedJs", array())) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js);
        // line 13
        if ( !(isset($context["value"]) || array_key_exists("value", $context))) {
            // line 14
            $context["value"] = null;
        }
        // line 17
        echo "<div class=\"timewrapper\">";
        // line 18
        $this->loadTemplate("_includes/forms/text", "_includes/forms/time", 18)->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => (((($context["value"] ?? $this->getContext($context, "value")) && $this->getAttribute(($context["value"] ?? null), "localeTime", array(), "any", true, true))) ? ($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "localeTime", array(), "method")) : (($context["value"] ?? $this->getContext($context, "value")))))));
        // line 19
        echo "</div>";
        // line 21
        $context["localeData"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getLocaleData", array(), "method");
        // line 23
        ob_start();
        // line 24
        echo "\tvar \$timePicker = \$('#";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId(($context["id"] ?? $this->getContext($context, "id"))), "js"), "html", null, true);
        echo "');
\t\$timePicker.timepicker({
\t\ttimeFormat: '";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "timepickerJsFormat", array()), "html", null, true);
        echo "',
\t\tcloseOnWindowScroll: false,
\t\torientation: '";
        // line 28
        echo ((($this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getOrientation", array(), "method") == "ltr")) ? ("l") : ("r"));
        echo "',
\t\t";
        // line 29
        if ((isset($context["minuteIncrement"]) || array_key_exists("minuteIncrement", $context))) {
            echo "step: '";
            echo twig_escape_filter($this->env, ($context["minuteIncrement"] ?? $this->getContext($context, "minuteIncrement")), "html", null, true);
            echo "',";
        }
        // line 30
        echo "\t\tlang: {
\t\t\tam: '";
        // line 31
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getAMName", array(), "method")), "html", null, true);
        echo "',
\t\t\tAM: '";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tpm: '";
        // line 33
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getPMName", array(), "method")), "html", null, true);
        echo "',
\t\t\tPM: '";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getPMName", array(), "method"), "html", null, true);
        echo "'
\t\t}
\t});

\t";
        // line 38
        if ((($context["value"] ?? $this->getContext($context, "value")) && $this->getAttribute(($context["value"] ?? null), "format", array(), "any", true, true))) {
            // line 39
            echo "\t\t\$timePicker.timepicker('setTime', ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->dateFilter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "G"), "html", null, true);
            echo "*3600 + ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->dateFilter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "i"), "html", null, true);
            echo "*60 + ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->dateFilter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "s"), "html", null, true);
            echo ");
\t";
        }
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  92 => 38,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  70 => 30,  64 => 29,  60 => 28,  55 => 26,  49 => 24,  47 => 23,  45 => 21,  43 => 19,  41 => 18,  39 => 17,  36 => 14,  34 => 13,  31 => 11,  28 => 8,  26 => 7,  24 => 5,  21 => 2,  19 => 1,);
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

{% set id = id ~ '-time' -%}

{% if name is defined and name -%}
\t{% set name = name ~ '[time]' -%}
{% endif -%}

{% includejsresource 'lib/jquery.timepicker/jquery.timepicker'~(craft.config.useCompressedJs ? '.min' : '')~'.js' -%}

{% if value is not defined -%}
\t{% set value = null -%}
{% endif -%}

<div class=\"timewrapper\">
\t{%- include \"_includes/forms/text\" with { autocomplete: false, size: 10, value: (value and value.localeTime is defined ? value.localeTime() : value) } -%}
</div>

{%-\tset localeData = craft.i18n.getLocaleData() %}

{%- includejs %}
\tvar \$timePicker = \$('#{{ id|namespaceInputId|e('js') }}');
\t\$timePicker.timepicker({
\t\ttimeFormat: '{{ craft.i18n.timepickerJsFormat }}',
\t\tcloseOnWindowScroll: false,
\t\torientation: '{{ localeData.getOrientation() == 'ltr' ? 'l' : 'r' }}',
\t\t{% if minuteIncrement is defined %}step: '{{ minuteIncrement }}',{% endif %}
\t\tlang: {
\t\t\tam: '{{ localeData.getAMName()|lower }}',
\t\t\tAM: '{{ localeData.getAMName() }}',
\t\t\tpm: '{{ localeData.getPMName()|lower }}',
\t\t\tPM: '{{ localeData.getPMName() }}'
\t\t}
\t});

\t{% if value and value.format is defined %}
\t\t\$timePicker.timepicker('setTime', {{ value|date('G') }}*3600 + {{ value|date('i') }}*60 + {{ value|date('s') }});
\t{% endif %}

{%- endincludejs %}
", "_includes/forms/time", "");
    }
}
