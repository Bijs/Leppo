<?php

/* _components/widgets/RecentEntries/body */
class __TwigTemplate_02e32b1f340cc2ca623b432cf008ff43c0b28b6abc29eac68fbc82f95cfc162e extends Craft\BaseTemplate
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
        echo "<div class=\"recententries-container\">
\t";
        // line 2
        if (twig_length_filter($this->env, ($context["entries"] ?? $this->getContext($context, "entries")))) {
            // line 3
            echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? $this->getContext($context, "entries")));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 5
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t<span class=\"light\">
\t\t\t\t\t\t\t";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "dateCreated", array()), "uiTimestamp", array(), "method"), "html", null, true);
                // line 10
                if (((($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition")) >= ($context["CraftClient"] ?? $this->getContext($context, "CraftClient"))) && $this->getAttribute($context["entry"], "author", array()))) {
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "author", array()), "username", array()), "html", null, true);
                }
                // line 11
                echo "</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t</table>
\t";
        } else {
            // line 17
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No entries exist yet."), "html", null, true);
            echo "</p>
\t";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  62 => 17,  58 => 15,  49 => 11,  44 => 10,  42 => 9,  35 => 7,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"recententries-container\">
\t{% if entries|length %}
\t\t<table class=\"data fullwidth\">
\t\t\t{% for entry in entries %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ entry.getCpEditUrl() }}\">{{ entry.title }}</a>
\t\t\t\t\t\t<span class=\"light\">
\t\t\t\t\t\t\t{{ entry.dateCreated.uiTimestamp() }}
\t\t\t\t\t\t\t{%- if CraftEdition >= CraftClient and entry.author %}, {{ entry.author.username }}{% endif -%}
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</table>
\t{% else %}
\t\t<p>{{ \"No entries exist yet.\"|t }}</p>
\t{% endif %}
</div>
", "_components/widgets/RecentEntries/body", "");
    }
}
