<?php

/* _components/widgets/RecentEntries/settings */
class __TwigTemplate_6123b8eff83c88f6c4bb13d96749b2f6de360786a7eb36d3e1dd066f7f9382ab extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/RecentEntries/settings", 1);
        // line 2
        echo "

";
        // line 4
        ob_start();
        // line 5
        echo "\t<div class=\"select\">
\t\t<select id=\"section\" name=\"section\">
\t\t\t<option value=\"*\">";
        // line 7
        echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
        echo "</option>
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "sections", array()), "getAllSections", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 9
            echo "\t\t\t\t";
            if (($this->getAttribute($context["section"], "type", array()) != "single")) {
                // line 10
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                echo "\"";
                if (($this->getAttribute($context["section"], "id", array()) == $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "section", array()))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["section"], "name", array())), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            // line 12
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</select>
\t</div>
";
        $context["sectionInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
";
        // line 17
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Section"), "instructions" => \Craft\Craft::t("Which section do you want to pull recent entries from?"), "id" => "section"),         // line 21
($context["sectionInput"] ?? $this->getContext($context, "sectionInput")));
        echo "

";
        // line 23
        if ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            // line 24
            echo "\t";
            $context["editableLocales"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getEditableLocales", array(), "method");
            // line 25
            echo "
\t";
            // line 26
            if ((twig_length_filter($this->env, ($context["editableLocales"] ?? $this->getContext($context, "editableLocales"))) > 1)) {
                // line 27
                echo "\t\t";
                ob_start();
                // line 28
                echo "\t\t\t<div class=\"select\">
\t\t\t\t<select id=\"locale\" name=\"locale\">
\t\t\t\t\t";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["editableLocales"] ?? $this->getContext($context, "editableLocales")));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 31
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                    echo "\"";
                    if (($this->getAttribute($context["locale"], "id", array()) == $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "locale", array()))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "getName", array(), "method"), "html", null, true);
                    echo "</option>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t</select>
\t\t\t</div>
\t\t";
                $context["localeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 36
                echo "
\t\t";
                // line 37
                echo $context["forms"]->getfield(array("id" => "locale", "label" => \Craft\Craft::t("Locale")),                 // line 40
($context["localeInput"] ?? $this->getContext($context, "localeInput")));
                echo "
\t";
            }
        }
        // line 43
        echo "

";
        // line 45
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "id" => "limit", "name" => "limit", "value" => $this->getAttribute(        // line 49
($context["settings"] ?? $this->getContext($context, "settings")), "limit", array()), "size" => 2, "errors" => $this->getAttribute(        // line 51
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "limit"), "method")));
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  131 => 51,  130 => 49,  129 => 45,  125 => 43,  119 => 40,  118 => 37,  115 => 36,  110 => 33,  95 => 31,  91 => 30,  87 => 28,  84 => 27,  82 => 26,  79 => 25,  76 => 24,  74 => 23,  69 => 21,  68 => 17,  65 => 16,  60 => 13,  54 => 12,  42 => 10,  39 => 9,  35 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}


{% set sectionInput %}
\t<div class=\"select\">
\t\t<select id=\"section\" name=\"section\">
\t\t\t<option value=\"*\">{{ \"All\"|t }}</option>
\t\t\t{% for section in craft.sections.getAllSections() %}
\t\t\t\t{% if section.type != 'single' %}
\t\t\t\t\t<option value=\"{{ section.id }}\"{% if section.id == settings.section %} selected{% endif %}>{{ section.name|t }}</option>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</select>
\t</div>
{% endset %}

{{ forms.field({
\tlabel: \"Section\"|t,
\tinstructions: \"Which section do you want to pull recent entries from?\"|t,
\tid: 'section',
}, sectionInput) }}

{% if craft.isLocalized() %}
\t{% set editableLocales = craft.i18n.getEditableLocales() %}

\t{% if editableLocales|length > 1 %}
\t\t{% set localeInput %}
\t\t\t<div class=\"select\">
\t\t\t\t<select id=\"locale\" name=\"locale\">
\t\t\t\t\t{% for locale in editableLocales %}
\t\t\t\t\t\t<option value=\"{{ locale.id }}\"{% if locale.id == settings.locale %} selected{% endif %}>{{ locale.getName() }}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t{% endset %}

\t\t{{ forms.field({
\t\t\tid: 'locale',
\t\t\tlabel: \"Locale\"|t
\t\t}, localeInput) }}
\t{% endif %}
{% endif %}


{{ forms.textField({
\tlabel: \"Limit\"|t,
\tid: 'limit',
\tname: 'limit',
\tvalue: settings.limit,
\tsize: 2,
\terrors: settings.getErrors('limit')
}) }}
", "_components/widgets/RecentEntries/settings", "");
    }
}
