<?php

/* settings/locales */
class __TwigTemplate_3dded380e1450e92e3e4b503ff06d7667a2df6fb44a257526330c8525b39cda7 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/locales", 4);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (\Craft\craft()->getEdition() < ($context["CraftPro"] ?? $this->getContext($context, "CraftPro")))
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        \Craft\craft()->userSession->requireAdmin();
        // line 5
        $context["title"] = \Craft\Craft::t("Content Locales");
        // line 7
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/locales", 7);
        // line 9
        $_js = "js/locales.js";
        \Craft\craft()->templates->includejsresource($_js);
        // line 10
        $_js = "css/locales.css";
        \Craft\craft()->templates->includecssresource($_js);
        // line 12
        \Craft\craft()->templates->includeTranslations(
        	"Are you sure you want to delete “{name}” and all its associated content?",
        	"Name",
        	"Locale ID",
        	"Reorder",
        	"Delete",
        	"New locale added.",
        	"Unable to add the new locale.",
        	"What do you want to do with any content that is only available in {language}?",
        	"Transfer it to:",
        	"Delete it",
        	"Delete {language}"
        );
        // line 26
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 67
        ob_start();
        // line 68
        echo "\tnew Craft.Locales(
\t{";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getAllLocales", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 71
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                echo ",";
            }
            // line 72
            echo "'";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
            echo "': '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
            echo "'";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "}, [";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getSiteLocales", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 78
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                echo ",";
            }
            // line 79
            echo "'";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
            echo "'";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "]);
";
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
        // line 4
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\">
\t\t<input type=\"hidden\" name=\"action\" value=\"languageSettings/save\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings\">
\t\t";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t<h2>";
        // line 37
        echo twig_escape_filter($this->env, \Craft\Craft::t("Which locales does your content target?"), "html", null, true);
        echo "</h2>

\t\t<div class=\"field\">
\t\t\t<table id=\"locales\" class=\"data fullwidth collapsible\">
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 43
            echo "\t\t\t\t\t\t<tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
            // line 44
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "\" width=\"40%\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<td data-title=\"";
            // line 45
            echo "Locale ID";
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"thin\"><a class=\"move icon\" title=\"";
            // line 46
            echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
            echo "\" role=\"button\"></a></td>
\t\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
            // line 47
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
            echo "\" role=\"button\"></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t\t<div id=\"addlocale\" class=\"field\">
\t\t\t<div class=\"texticon add icon\">
\t\t\t\t";
        // line 56
        echo $context["forms"]->gettext(array("placeholder" => \Craft\Craft::t("Add a new locale…"), "id" => "addlocaleinput", "autocomplete" => false));
        // line 60
        echo "
\t\t\t\t<div class=\"spinner hidden\"></div>
\t\t\t</div>
\t\t</div>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "settings/locales";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 60,  215 => 56,  207 => 50,  198 => 47,  194 => 46,  188 => 45,  182 => 44,  175 => 43,  171 => 42,  163 => 37,  158 => 35,  153 => 32,  150 => 31,  146 => 4,  141 => 82,  125 => 79,  121 => 78,  104 => 77,  102 => 75,  84 => 72,  80 => 71,  63 => 70,  60 => 68,  58 => 67,  56 => 26,  42 => 12,  39 => 10,  36 => 9,  34 => 7,  32 => 5,  30 => 2,  25 => 1,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% requireEdition CraftPro %}
{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Content Locales\"|t %}

{% import \"_includes/forms\" as forms %}

{% includejsresource \"js/locales.js\" %}
{% includecssresource \"css/locales.css\" %}

{% includeTranslations
\t\"Are you sure you want to delete “{name}” and all its associated content?\",
\t\"Name\",
\t\"Locale ID\",
\t\"Reorder\",
\t\"Delete\",
\t\"New locale added.\",
\t\"Unable to add the new locale.\",
\t\"What do you want to do with any content that is only available in {language}?\",
\t\"Transfer it to:\",
\t\"Delete it\",
\t\"Delete {language}\"
%}

{% set crumbs = [
\t{ label: \"Settings\"|t, url: url('settings') }
] %}


{% block content %}
\t<form method=\"post\" accept-charset=\"UTF-8\">
\t\t<input type=\"hidden\" name=\"action\" value=\"languageSettings/save\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings\">
\t\t{{ getCsrfInput() }}

\t\t<h2>{{ \"Which locales does your content target?\"|t }}</h2>

\t\t<div class=\"field\">
\t\t\t<table id=\"locales\" class=\"data fullwidth collapsible\">
\t\t\t\t<tbody>
\t\t\t\t\t{% for locale in craft.i18n.getSiteLocales() %}
\t\t\t\t\t\t<tr data-id=\"{{ locale.id }}\" data-name=\"{{ locale.name }}\">
\t\t\t\t\t\t\t<th scope=\"row\" data-title=\"{{ 'Name'|t }}\" width=\"40%\">{{ locale.name }}</th>
\t\t\t\t\t\t\t<td data-title=\"{{ 'Locale ID' }}\">{{ locale.id }}</td>
\t\t\t\t\t\t\t<td class=\"thin\"><a class=\"move icon\" title=\"{{ 'Reorder'|t }}\" role=\"button\"></a></td>
\t\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"{{ 'Delete'|t }}\" role=\"button\"></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t\t<div id=\"addlocale\" class=\"field\">
\t\t\t<div class=\"texticon add icon\">
\t\t\t\t{{ forms.text({
\t                placeholder: \"Add a new locale…\"|t,
\t\t\t\t\tid: 'addlocaleinput',
\t\t\t\t\tautocomplete: false
\t\t\t\t}) }}
\t\t\t\t<div class=\"spinner hidden\"></div>
\t\t\t</div>
\t\t</div>
\t</form>
{% endblock %}

{% includejs %}
\tnew Craft.Locales(
\t{
\t\t{%- for locale in craft.i18n.getAllLocales() %}
\t\t\t{%- if not loop.first %},{% endif -%}
\t\t\t'{{ locale.id }}': '{{ locale.name }}'
\t\t{%- endfor -%}

\t}, [

\t\t{%- for locale in craft.i18n.getSiteLocales() %}
\t\t\t{%- if not loop.first %},{% endif -%}
\t\t\t'{{ locale.id }}'
\t\t{%- endfor -%}

\t]);
{% endincludejs %}
", "settings/locales", "");
    }
}
