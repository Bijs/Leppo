<?php

/* _elements/tableview/elements */
class __TwigTemplate_50b9e111f6d078f664fc1ead8c946d4b6293dfd0a7a8ecd69c2b205980a2449f extends Craft\BaseTemplate
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
        ob_start();
        // line 2
        echo "
";
        // line 3
        $context["structure"] = (((isset($context["structure"]) || array_key_exists("structure", $context))) ? (($context["structure"] ?? $this->getContext($context, "structure"))) : (null));
        // line 4
        $context["structureEditable"] = (((isset($context["structureEditable"]) || array_key_exists("structureEditable", $context))) ? (($context["structureEditable"] ?? $this->getContext($context, "structureEditable"))) : (false));
        // line 6
        if (($context["structure"] ?? $this->getContext($context, "structure"))) {
            // line 7
            $context["basePadding"] = (((($context["context"] ?? $this->getContext($context, "context")) == "index")) ? (((20 + ((($context["showCheckboxes"] ?? $this->getContext($context, "showCheckboxes"))) ? (7) : (0))) + ((($context["structureEditable"] ?? $this->getContext($context, "structureEditable"))) ? (14) : (0)))) : (7));
            // line 8
            echo "\t";
            $context["padding"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getLocaleData", array(), "method"), "getOrientation", array(), "method") == "ltr")) ? ("left") : ("right"));
        }
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 12
            echo "\t<tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", array()), "html", null, true);
            echo "\"";
            if (($context["structure"] ?? $this->getContext($context, "structure"))) {
                echo " data-level=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "level", array()), "html", null, true);
                echo "\" data-descendants=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "getTotalDescendants", array(), "method"), "html", null, true);
                echo "\"";
            }
            if (twig_in_filter($this->getAttribute($context["element"], "id", array()), ($context["disabledElementIds"] ?? $this->getContext($context, "disabledElementIds")))) {
                echo " class=\"disabled\"";
            }
            echo ">
\t\t";
            // line 13
            if (($context["showCheckboxes"] ?? $this->getContext($context, "showCheckboxes"))) {
                // line 14
                echo "\t\t\t<td class=\"thin checkbox-cell\"><div class=\"checkbox\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Select"), "html", null, true);
                echo "\"></div></td>
\t\t";
            }
            // line 16
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 17
                echo "\t\t\t";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 18
                    echo "\t\t\t\t<td data-title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attribute"], 1, array(), "array"), "label", array()), "html", null, true);
                    echo "\"";
                    if (($context["structure"] ?? $this->getContext($context, "structure"))) {
                        echo " style=\"padding-";
                        echo twig_escape_filter($this->env, ($context["padding"] ?? $this->getContext($context, "padding")), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, (($context["basePadding"] ?? $this->getContext($context, "basePadding")) + (($this->getAttribute($context["element"], "level", array()) - 1) * 44)), "html", null, true);
                        echo "px;\"";
                    }
                    echo " data-titlecell=\"\">";
                    // line 19
                    if (($context["structureEditable"] ?? $this->getContext($context, "structureEditable"))) {
                        echo "<a class=\"move icon\" title=\"";
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                        echo "\" role=\"button\">&nbsp;</a>";
                    }
                    // line 20
                    if ((($context["structure"] ?? $this->getContext($context, "structure")) && $this->getAttribute($context["element"], "hasDescendants", array(), "method"))) {
                        echo "<span class=\"toggle";
                        if (!twig_in_filter($this->getAttribute($context["element"], "id", array()), ($context["collapsedElementIds"] ?? $this->getContext($context, "collapsedElementIds")))) {
                            echo " expanded";
                        }
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Show/hide children"), "html", null, true);
                        echo "\"></span>";
                    }
                    // line 21
                    $this->loadTemplate("_elements/element", "_elements/tableview/elements", 21)->display($context);
                    // line 22
                    echo "</td>
\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t<td data-title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attribute"], 1, array(), "array"), "label", array()), "html", null, true);
                    echo "\" data-attr=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], 0, array(), "array"), "html", null, true);
                    echo "\">";
                    // line 25
                    echo $this->getAttribute(($context["elementType"] ?? $this->getContext($context, "elementType")), "getTableAttributeHtml", array(0 => $context["element"], 1 => $this->getAttribute($context["attribute"], 0, array(), "array")), "method");
                    // line 26
                    echo "</td>
\t\t\t";
                }
                // line 28
                echo "\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t</tr>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "_elements/tableview/elements";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 31,  158 => 29,  144 => 28,  140 => 26,  138 => 25,  132 => 24,  128 => 22,  126 => 21,  116 => 20,  110 => 19,  98 => 18,  95 => 17,  77 => 16,  71 => 14,  69 => 13,  53 => 12,  36 => 11,  32 => 8,  30 => 7,  28 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}

{% set structure = structure is defined ? structure : null -%}
{% set structureEditable = structureEditable is defined ? structureEditable : false -%}

{% if structure -%}
\t{% set basePadding = (context == 'index' ? 20 + (showCheckboxes ? 7 : 0) + (structureEditable ? 14 : 0) : 7) %}
\t{% set padding = craft.i18n.getLocaleData().getOrientation() == 'ltr' ? 'left' : 'right' -%}
{% endif -%}

{% for element in elements %}
\t<tr data-id=\"{{ element.id }}\"{% if structure %} data-level=\"{{ element.level }}\" data-descendants=\"{{ element.getTotalDescendants() }}\"{% endif %}{% if element.id in disabledElementIds %} class=\"disabled\"{% endif %}>
\t\t{% if showCheckboxes %}
\t\t\t<td class=\"thin checkbox-cell\"><div class=\"checkbox\" title=\"{{ 'Select'|t }}\"></div></td>
\t\t{% endif %}
\t\t{% for attribute in attributes %}
\t\t\t{% if loop.first %}
\t\t\t\t<td data-title=\"{{ attribute[1].label }}\"{% if structure %} style=\"padding-{{ padding }}: {{ basePadding + (element.level - 1) * 44 }}px;\"{% endif %} data-titlecell=\"\">
\t\t\t\t\t{%- if structureEditable %}<a class=\"move icon\" title=\"{{ 'Reorder'|t }}\" role=\"button\">&nbsp;</a>{% endif %}
\t\t\t\t\t{%- if structure and element.hasDescendants() %}<span class=\"toggle{% if element.id not in collapsedElementIds %} expanded{% endif %}\" title=\"{{ 'Show/hide children'|t }}\"></span>{% endif %}
\t\t\t\t\t{%- include \"_elements/element\" -%}
\t\t\t\t</td>
\t\t\t{% else %}
\t\t\t\t<td data-title=\"{{ attribute[1].label }}\" data-attr=\"{{ attribute[0] }}\">
\t\t\t\t\t{{- elementType.getTableAttributeHtml(element, attribute[0])|raw -}}
\t\t\t\t</td>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</tr>
{% endfor %}

{% endspaceless -%}
", "_elements/tableview/elements", "");
    }
}
