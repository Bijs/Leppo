<?php

/* _components/widgets/QuickPost/settings */
class __TwigTemplate_6e06cd8a6601d60b4e204b6a8f150ff1aabb572150bf54f99480b1212aecc3d0 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/QuickPost/settings", 1);
        // line 2
        echo "
";
        // line 3
        if (($context["sections"] ?? $this->getContext($context, "sections"))) {
            // line 4
            echo "\t";
            $context["sectionOptions"] = array();
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 6
                echo "\t\t";
                $context["sectionOptions"] = twig_array_merge(($context["sectionOptions"] ?? $this->getContext($context, "sectionOptions")), array(0 => array("label" => \Craft\Craft::t($this->getAttribute($context["section"], "name", array())), "value" => $this->getAttribute($context["section"], "id", array()))));
                // line 7
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t";
            echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Section"), "instructions" => \Craft\Craft::t("Which section do you want to publish entries to?"), "id" => "section", "name" => "section", "options" =>             // line 13
($context["sectionOptions"] ?? $this->getContext($context, "sectionOptions")), "value" => $this->getAttribute(            // line 14
($context["settings"] ?? $this->getContext($context, "settings")), "section", array()), "toggle" => true, "targetPrefix" => "section"));
            // line 17
            echo "

\t";
            // line 19
            $context["selectedSectionId"] = $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "section", array());
            // line 20
            echo "
\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 22
                echo "\t\t";
                $context["showSection"] = (( !($context["selectedSectionId"] ?? $this->getContext($context, "selectedSectionId")) && $this->getAttribute($context["loop"], "first", array())) || (($context["selectedSectionId"] ?? $this->getContext($context, "selectedSectionId")) == $this->getAttribute($context["section"], "id", array())));
                // line 23
                echo "\t\t<div id=\"section";
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                echo "\"";
                if ( !($context["showSection"] ?? $this->getContext($context, "showSection"))) {
                    echo " class=\"hidden\"";
                }
                echo ">

\t\t\t";
                // line 25
                $context["entryTypeOptions"] = array();
                // line 26
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "getEntryTypes", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 27
                    echo "\t\t\t\t";
                    $context["entryTypeOptions"] = twig_array_merge(($context["entryTypeOptions"] ?? $this->getContext($context, "entryTypeOptions")), array(0 => array("label" => \Craft\Craft::t($this->getAttribute($context["entryType"], "name", array())), "value" => $this->getAttribute($context["entryType"], "id", array()))));
                    // line 28
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "
\t\t\t";
                // line 30
                if ((twig_length_filter($this->env, ($context["entryTypeOptions"] ?? $this->getContext($context, "entryTypeOptions"))) == 1)) {
                    // line 31
                    echo "\t\t\t\t<input type=\"hidden\" name=\"sections[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                    echo "][entryType]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "entryType", array()), "html", null, true);
                    echo "\" />
\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t\t";
                    echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "instructions" => \Craft\Craft::t("Which type of entries do you want to publish?"), "id" => "entryType", "name" => (("sections[" . $this->getAttribute(                    // line 37
$context["section"], "id", array())) . "][entryType]"), "options" =>                     // line 38
($context["entryTypeOptions"] ?? $this->getContext($context, "entryTypeOptions")), "value" => $this->getAttribute(                    // line 39
($context["settings"] ?? $this->getContext($context, "settings")), "entryType", array()), "toggle" => true, "targetPrefix" => (("section" . $this->getAttribute(                    // line 41
$context["section"], "id", array())) . "-type")));
                    // line 42
                    echo "
\t\t\t";
                }
                // line 44
                echo "
\t\t\t";
                // line 45
                ob_start();
                // line 46
                echo "\t\t\t\t";
                $context["entryTypes"] = $this->getAttribute($context["section"], "getEntryTypes", array(), "method");
                // line 47
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["entryTypes"] ?? $this->getContext($context, "entryTypes")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                    // line 48
                    echo "\t\t\t\t\t";
                    $context["showEntryType"] = (((( !($context["showSection"] ?? $this->getContext($context, "showSection")) ||  !$this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "entryType", array())) && $this->getAttribute($context["loop"], "first", array())) || ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "entryType", array()) == $this->getAttribute($context["entryType"], "id", array()))) || (twig_length_filter($this->env, ($context["entryTypes"] ?? $this->getContext($context, "entryTypes"))) == 1));
                    // line 49
                    echo "\t\t\t\t\t<div id=\"section";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                    echo "-type";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entryType"], "id", array()), "html", null, true);
                    echo "\"";
                    if ( !($context["showEntryType"] ?? $this->getContext($context, "showEntryType"))) {
                        echo " class=\"hidden\"";
                    }
                    echo ">
\t\t\t\t\t\t";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["entryType"], "getFieldLayout", array(), "method"), "getFields", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 51
                        echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                        // line 52
                        echo $context["forms"]->getcheckbox(array("label" => ($this->getAttribute($this->getAttribute(                        // line 53
$context["field"], "getField", array(), "method"), "name", array()) . (($this->getAttribute($context["field"], "required", array())) ? (" <span class=\"required\"></span>") : (""))), "name" => (("sections[" . $this->getAttribute(                        // line 54
$context["section"], "id", array())) . "][fields][]"), "value" => $this->getAttribute(                        // line 55
$context["field"], "fieldId", array()), "checked" => ($this->getAttribute(                        // line 56
$context["field"], "required", array()) || twig_in_filter($this->getAttribute($context["field"], "fieldId", array()), $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "fields", array()))), "disabled" => $this->getAttribute(                        // line 57
$context["field"], "required", array())));
                        // line 58
                        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t";
                $context["fieldsInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 64
                echo "
\t\t\t";
                // line 65
                echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Fields"), "instructions" => \Craft\Craft::t("Which fields should be visible in the widget?")),                 // line 68
($context["fieldsInput"] ?? $this->getContext($context, "fieldsInput")));
                echo "
\t\t</div>
\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
";
        } else {
            // line 73
            echo "
\t<p>";
            // line 74
            echo twig_escape_filter($this->env, \Craft\Craft::t("No sections are available."), "html", null, true);
            echo "</p>

";
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/QuickPost/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 74,  232 => 73,  228 => 71,  211 => 68,  210 => 65,  207 => 64,  204 => 63,  189 => 61,  181 => 58,  179 => 57,  178 => 56,  177 => 55,  176 => 54,  175 => 53,  174 => 52,  171 => 51,  167 => 50,  156 => 49,  153 => 48,  135 => 47,  132 => 46,  130 => 45,  127 => 44,  123 => 42,  121 => 41,  120 => 39,  119 => 38,  118 => 37,  116 => 33,  108 => 31,  106 => 30,  103 => 29,  97 => 28,  94 => 27,  89 => 26,  87 => 25,  77 => 23,  74 => 22,  57 => 21,  54 => 20,  52 => 19,  48 => 17,  46 => 14,  45 => 13,  43 => 8,  37 => 7,  34 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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

{% if sections %}
\t{% set sectionOptions = [] %}
\t{% for section in sections %}
\t\t{% set sectionOptions = sectionOptions|merge([{ label: section.name|t, value: section.id }]) %}
\t{% endfor %}
\t{{ forms.selectField({
\t\tlabel: \"Section\"|t,
\t\tinstructions: \"Which section do you want to publish entries to?\"|t,
\t\tid: 'section',
\t\tname: 'section',
\t\toptions: sectionOptions,
\t\tvalue: settings.section,
\t\ttoggle: true,
\t\ttargetPrefix: 'section'
\t}) }}

\t{% set selectedSectionId = settings.section %}

\t{% for section in sections %}
\t\t{% set showSection = ((not selectedSectionId and loop.first) or selectedSectionId == section.id) %}
\t\t<div id=\"section{{ section.id }}\"{% if not showSection %} class=\"hidden\"{% endif %}>

\t\t\t{% set entryTypeOptions = [] %}
\t\t\t{% for entryType in section.getEntryTypes() %}
\t\t\t\t{% set entryTypeOptions = entryTypeOptions|merge([{ label: entryType.name|t, value: entryType.id }]) %}
\t\t\t{% endfor %}

\t\t\t{% if entryTypeOptions|length == 1 %}
\t\t\t\t<input type=\"hidden\" name=\"sections[{{ section.id }}][entryType]\" value=\"{{ settings.entryType }}\" />
\t\t\t{% else %}
\t\t\t\t{{ forms.selectField({
\t\t\t\t\tlabel: \"Entry Type\"|t,
\t\t\t\t\tinstructions: \"Which type of entries do you want to publish?\"|t,
\t\t\t\t\tid: 'entryType',
\t\t\t\t\tname: 'sections['~section.id~'][entryType]',
\t\t\t\t\toptions: entryTypeOptions,
\t\t\t\t\tvalue: settings.entryType,
\t\t\t\t\ttoggle: true,
\t\t\t\t\ttargetPrefix: 'section'~section.id~'-type'
\t\t\t\t}) }}
\t\t\t{% endif %}

\t\t\t{% set fieldsInput %}
\t\t\t\t{% set entryTypes = section.getEntryTypes() %}
\t\t\t\t{% for entryType in entryTypes %}
\t\t\t\t\t{% set showEntryType = (((not showSection or not settings.entryType) and loop.first) or settings.entryType == entryType.id or entryTypes|length == 1) %}
\t\t\t\t\t<div id=\"section{{ section.id }}-type{{ entryType.id }}\"{% if not showEntryType %} class=\"hidden\"{% endif %}>
\t\t\t\t\t\t{% for field in entryType.getFieldLayout().getFields() %}
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{ forms.checkbox({
\t\t\t\t\t\t\t\t\tlabel: field.getField().name~(field.required ? ' <span class=\"required\"></span>' : ''),
\t\t\t\t\t\t\t\t\tname: 'sections['~section.id~'][fields][]',
\t\t\t\t\t\t\t\t\tvalue: field.fieldId,
\t\t\t\t\t\t\t\t\tchecked: (field.required or field.fieldId in settings.fields),
\t\t\t\t\t\t\t\t\tdisabled: field.required
\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{% endset %}

\t\t\t{{ forms.field({
\t\t\t\tlabel: \"Fields\"|t,
\t\t\t\tinstructions: \"Which fields should be visible in the widget?\"|t
\t\t\t}, fieldsInput) }}
\t\t</div>
\t{% endfor %}

{% else %}

\t<p>{{ \"No sections are available.\"|t }}</p>

{% endif %}
", "_components/widgets/QuickPost/settings", "");
    }
}
