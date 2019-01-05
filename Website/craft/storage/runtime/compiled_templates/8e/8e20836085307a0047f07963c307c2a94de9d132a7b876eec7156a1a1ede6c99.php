<?php

/* _elements/indexcontainer */
class __TwigTemplate_a422d94098ac45a524a8ecae84e49cf5c69874e29098335fe5d624936711e23e extends Craft\BaseTemplate
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
        $context["__internal_25dc12d59f8c2d18b620e4f5d530194cc35bc2ad934e76dd9552a28f7cb581b0"] = $this->loadTemplate("_includes/forms", "_elements/indexcontainer", 1);
        // line 3
        \Craft\craft()->templates->includeTranslations(
        	"Sort by {attribute}",
        	"Score",
        	"Structure",
        	"Display in a table",
        	"Display hierarchically",
        	"Display as thumbnails"
        );
        // line 11
        echo "
";
        // line 12
        $context["context"] = (((isset($context["context"]) || array_key_exists("context", $context))) ? (($context["context"] ?? $this->getContext($context, "context"))) : ("index"));
        // line 13
        $context["showStatusMenu"] = ((((isset($context["showStatusMenu"]) || array_key_exists("showStatusMenu", $context)) && (($context["showStatusMenu"] ?? $this->getContext($context, "showStatusMenu")) != "auto"))) ? (($context["showStatusMenu"] ?? $this->getContext($context, "showStatusMenu"))) : ($this->getAttribute(($context["elementType"] ?? $this->getContext($context, "elementType")), "hasStatuses", array(), "method")));
        // line 14
        $context["showLocaleMenu"] = (($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) ? ((($context["showLocaleMenu"]) ?? ("auto"))) : (false));
        // line 15
        if ((($context["showLocaleMenu"] ?? $this->getContext($context, "showLocaleMenu")) == "auto")) {
            // line 16
            echo "\t";
            $context["showLocaleMenu"] = $this->getAttribute(($context["elementType"] ?? $this->getContext($context, "elementType")), "isLocalized", array(), "method");
        }
        // line 18
        $context["sortableAttributes"] = $this->getAttribute(($context["elementType"] ?? $this->getContext($context, "elementType")), "defineSortableAttributes", array(), "method");
        // line 19
        echo "
<div class=\"main\">
\t<div class=\"toolbar\">
\t\t<table class=\"inputs fullwidth collapsible\">
\t\t\t<tr>
\t\t\t\t";
        // line 24
        if (($context["showStatusMenu"] ?? $this->getContext($context, "showStatusMenu"))) {
            // line 25
            echo "\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn statusmenubtn\"><span class=\"status\"></span>";
            // line 26
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t<li><a data-status=\"\" class=\"sel\"><span class=\"status\"></span>";
            // line 29
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["elementType"] ?? $this->getContext($context, "elementType")), "getStatuses", array(), "method"));
            foreach ($context['_seq'] as $context["status"] => $context["label"]) {
                // line 31
                echo "\t\t\t\t\t\t\t\t\t<li><a data-status=\"";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "\"><span class=\"status ";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "\"></span>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t";
        if (($context["showLocaleMenu"] ?? $this->getContext($context, "showLocaleMenu"))) {
            // line 38
            echo "\t\t\t\t\t";
            $context["editableLocaleIds"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getEditableLocaleIds", array(), "method");
            // line 39
            echo "\t\t\t\t\t";
            if (twig_length_filter($this->env, ($context["editableLocaleIds"] ?? $this->getContext($context, "editableLocaleIds")))) {
                // line 40
                echo "\t\t\t\t\t\t";
                if (twig_in_filter($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "locale", array()), ($context["editableLocaleIds"] ?? $this->getContext($context, "editableLocaleIds")))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t";
                    $context["initialLocale"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getCurrentLocale", array(), "method");
                    // line 42
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 43
                    echo "\t\t\t\t\t\t\t";
                    $context["initialLocale"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getLocaleById", array(0 => twig_first($this->env, ($context["editableLocaleIds"] ?? $this->getContext($context, "editableLocaleIds")))), "method");
                    // line 44
                    echo "\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t<div class=\"btn menubtn localemenubtn\">";
                // line 46
                echo twig_escape_filter($this->env, ((($context["initialLocale"] ?? $this->getContext($context, "initialLocale"))) ? ($this->getAttribute(($context["initialLocale"] ?? $this->getContext($context, "initialLocale")), "getName", array(), "method")) : ("")), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t\t";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getEditableLocales", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a";
                    if ((($context["initialLocale"] ?? $this->getContext($context, "initialLocale")) && ($this->getAttribute($context["locale"], "getId", array(), "method") == $this->getAttribute(($context["initialLocale"] ?? $this->getContext($context, "initialLocale")), "getId", array(), "method")))) {
                        echo " class=\"sel\"";
                    }
                    echo " data-locale=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "getId", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "getName", array(), "method"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t<td>
\t\t\t\t\t<div class=\"texticon search icon clearable\">
\t\t\t\t\t\t";
        // line 59
        echo $context["__internal_25dc12d59f8c2d18b620e4f5d530194cc35bc2ad934e76dd9552a28f7cb581b0"]->gettext(array("placeholder" => \Craft\Craft::t("Search")));
        // line 61
        echo "
\t\t\t\t\t\t<div class=\"clear hidden\" title=\"";
        // line 62
        echo twig_escape_filter($this->env, \Craft\Craft::t("Clear"), "html", null, true);
        echo "\"></div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"thin\">
\t\t\t\t\t<div class=\"btn menubtn sortmenubtn\"";
        // line 66
        if (($context["sortableAttributes"] ?? $this->getContext($context, "sortableAttributes"))) {
            echo " title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Sort by {attribute}", array("attribute" => twig_first($this->env, ($context["sortableAttributes"] ?? $this->getContext($context, "sortableAttributes"))))), "html", null, true);
            echo "\"";
        }
        echo " data-icon=\"asc\">";
        echo twig_escape_filter($this->env, ((($context["sortableAttributes"] ?? $this->getContext($context, "sortableAttributes"))) ? (twig_first($this->env, ($context["sortableAttributes"] ?? $this->getContext($context, "sortableAttributes")))) : ("")), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t<ul class=\"padded sort-attributes\">
\t\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sortableAttributes"] ?? $this->getContext($context, "sortableAttributes")));
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
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t<li><a";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " class=\"sel\"";
            }
            echo " data-attr=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul class=\"padded sort-directions\">
\t\t\t\t\t\t\t<li><a data-dir=\"asc\" class=\"sel\">";
        // line 75
        echo twig_escape_filter($this->env, \Craft\Craft::t("Ascending"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a data-dir=\"desc\">";
        // line 76
        echo twig_escape_filter($this->env, \Craft\Craft::t("Descending"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"thin viewbtns hidden\"></td>
\t\t\t</tr>
\t\t</table>
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t<div class=\"elements\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/indexcontainer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 76,  226 => 75,  221 => 72,  198 => 70,  181 => 69,  169 => 66,  162 => 62,  159 => 61,  157 => 59,  153 => 57,  150 => 56,  144 => 52,  129 => 50,  125 => 49,  119 => 46,  116 => 45,  113 => 44,  110 => 43,  107 => 42,  104 => 41,  101 => 40,  98 => 39,  95 => 38,  92 => 37,  86 => 33,  73 => 31,  69 => 30,  65 => 29,  59 => 26,  56 => 25,  54 => 24,  47 => 19,  45 => 18,  41 => 16,  39 => 15,  37 => 14,  35 => 13,  33 => 12,  30 => 11,  21 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from \"_includes/forms\" import text -%}

{% includeTranslations
\t\"Sort by {attribute}\",
\t\"Score\",
\t\"Structure\",
\t\"Display in a table\",
\t\"Display hierarchically\",
\t\"Display as thumbnails\"
%}

{% set context = context is defined ? context : 'index' %}
{% set showStatusMenu = (showStatusMenu is defined and showStatusMenu != 'auto' ? showStatusMenu : elementType.hasStatuses()) %}
{% set showLocaleMenu = (craft.isLocalized() ? (showLocaleMenu ?? 'auto') : false) %}
{% if showLocaleMenu == 'auto' %}
\t{% set showLocaleMenu = elementType.isLocalized() %}
{% endif %}
{% set sortableAttributes = elementType.defineSortableAttributes() %}

<div class=\"main\">
\t<div class=\"toolbar\">
\t\t<table class=\"inputs fullwidth collapsible\">
\t\t\t<tr>
\t\t\t\t{% if showStatusMenu %}
\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn statusmenubtn\"><span class=\"status\"></span>{{ \"All\"|t }}</div>
\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t<li><a data-status=\"\" class=\"sel\"><span class=\"status\"></span>{{ \"All\"|t }}</a></li>
\t\t\t\t\t\t\t\t{% for status, label in elementType.getStatuses() %}
\t\t\t\t\t\t\t\t\t<li><a data-status=\"{{ status }}\"><span class=\"status {{ status }}\"></span>{{ label }}</a></li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t{% endif %}
\t\t\t\t{% if showLocaleMenu %}
\t\t\t\t\t{% set editableLocaleIds = craft.i18n.getEditableLocaleIds() %}
\t\t\t\t\t{% if editableLocaleIds|length %}
\t\t\t\t\t\t{% if craft.locale in editableLocaleIds %}
\t\t\t\t\t\t\t{% set initialLocale = craft.i18n.getCurrentLocale() %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% set initialLocale = craft.i18n.getLocaleById(editableLocaleIds|first) %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t<div class=\"btn menubtn localemenubtn\">{{ initialLocale ? initialLocale.getName() }}</div>
\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t\t{% for locale in craft.i18n.getEditableLocales() %}
\t\t\t\t\t\t\t\t\t\t<li><a{% if initialLocale and locale.getId() == initialLocale.getId() %} class=\"sel\"{% endif %} data-locale=\"{{ locale.getId() }}\">{{ locale.getName() }}</a></li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t\t<td>
\t\t\t\t\t<div class=\"texticon search icon clearable\">
\t\t\t\t\t\t{{ text({
\t\t\t\t\t\t\tplaceholder: \"Search\"|t
\t\t\t\t\t\t}) }}
\t\t\t\t\t\t<div class=\"clear hidden\" title=\"{{ 'Clear'|t }}\"></div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"thin\">
\t\t\t\t\t<div class=\"btn menubtn sortmenubtn\"{% if sortableAttributes %} title=\"{{ 'Sort by {attribute}'|t({ attribute: sortableAttributes|first }) }}\"{% endif %} data-icon=\"asc\">{{ sortableAttributes ? sortableAttributes|first }}</div>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t<ul class=\"padded sort-attributes\">
\t\t\t\t\t\t\t{% for key, label in sortableAttributes %}
\t\t\t\t\t\t\t\t<li><a{% if loop.first %} class=\"sel\"{% endif %} data-attr=\"{{ key }}\">{{ label }}</a></li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul class=\"padded sort-directions\">
\t\t\t\t\t\t\t<li><a data-dir=\"asc\" class=\"sel\">{{ \"Ascending\"|t }}</a></li>
\t\t\t\t\t\t\t<li><a data-dir=\"desc\">{{ \"Descending\"|t }}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"thin viewbtns hidden\"></td>
\t\t\t</tr>
\t\t</table>
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t<div class=\"elements\"></div>
</div>
", "_elements/indexcontainer", "");
    }
}
