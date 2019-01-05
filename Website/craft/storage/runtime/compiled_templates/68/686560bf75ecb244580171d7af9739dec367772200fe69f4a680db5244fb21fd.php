<?php

/* _elements/tableview/container */
class __TwigTemplate_5129a7e5b266c8ae6210429e1f0acfc72527abdb1b203e10197916064f4bd241 extends Craft\BaseTemplate
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
        echo "<div class=\"tableview\">
\t<table class=\"data fullwidth\"";
        // line 2
        if (((isset($context["structureEditable"]) || array_key_exists("structureEditable", $context)) && ($context["structureEditable"] ?? $this->getContext($context, "structureEditable")))) {
            echo " data-structure-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "id", array()), "html", null, true);
            echo "\" data-max-levels=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "maxLevels", array()), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($context["showCheckboxes"] ?? $this->getContext($context, "showCheckboxes"))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"thin checkbox-cell\"></td>
\t\t\t\t";
        }
        // line 8
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 9
            echo "\t\t\t\t\t";
            $context["icon"] = (($this->getAttribute($this->getAttribute($context["attribute"], 1, array(), "array", false, true), "icon", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["attribute"], 1, array(), "array"), "icon", array())) : (null));
            // line 10
            echo "\t\t\t\t\t<th scope=\"col\" data-attribute=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], 0, array(), "array"), "html", null, true);
            echo "\"";
            // line 11
            if (($context["icon"] ?? $this->getContext($context, "icon"))) {
                echo " data-icon=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attribute"], 1, array(), "array"), "label", array()), "html", null, true);
                echo "\"";
            }
            // line 12
            echo "\t\t\t\t\t>";
            // line 13
            if ( !($context["icon"] ?? $this->getContext($context, "icon"))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attribute"], 1, array(), "array"), "label", array()), "html", null, true);
            }
            // line 14
            echo "</th>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 19
        $this->loadTemplate("_elements/tableview/elements", "_elements/tableview/container", 19)->display($context);
        // line 20
        echo "\t\t</tbody>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/tableview/container";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  78 => 19,  73 => 16,  66 => 14,  62 => 13,  60 => 12,  52 => 11,  48 => 10,  45 => 9,  40 => 8,  36 => 6,  34 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tableview\">
\t<table class=\"data fullwidth\"{% if structureEditable is defined and structureEditable %} data-structure-id=\"{{ structure.id }}\" data-max-levels=\"{{ structure.maxLevels }}\"{% endif %}>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t{% if showCheckboxes %}
\t\t\t\t\t<td class=\"thin checkbox-cell\"></td>
\t\t\t\t{% endif %}
\t\t\t\t{% for attribute in attributes %}
\t\t\t\t\t{% set icon = (attribute[1].icon is defined ? attribute[1].icon : null) %}
\t\t\t\t\t<th scope=\"col\" data-attribute=\"{{ attribute[0] }}\"
\t\t\t\t\t\t{%- if icon %} data-icon=\"{{ icon }}\" title=\"{{ attribute[1].label }}\"{% endif %}
\t\t\t\t\t>
\t\t\t\t\t\t{%- if not icon %}{{ attribute[1].label }}{% endif -%}
\t\t\t\t\t</th>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% include \"_elements/tableview/elements\" %}
\t\t</tbody>
\t</table>
</div>
", "_elements/tableview/container", "");
    }
}
