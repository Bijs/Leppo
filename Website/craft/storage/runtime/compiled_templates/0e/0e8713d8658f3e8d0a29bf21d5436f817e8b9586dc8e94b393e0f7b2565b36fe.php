<?php

/* _components/fieldtypes/Assets/input */
class __TwigTemplate_811765479d7092807ab5e5f87a79e78b3b8e364c9a88cac5e545658e0b9dda05 extends Craft\BaseTemplate
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
        if (((isset($context["name"]) || array_key_exists("name", $context)) && ($context["name"] ?? $this->getContext($context, "name")))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["elements"] = (((isset($context["elements"]) || array_key_exists("elements", $context))) ? (($context["elements"] ?? $this->getContext($context, "elements"))) : (array()));
        // line 6
        $context["jsClass"] = ((((isset($context["jsClass"]) || array_key_exists("jsClass", $context)) && ($context["jsClass"] ?? $this->getContext($context, "jsClass")))) ? (($context["jsClass"] ?? $this->getContext($context, "jsClass"))) : ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = ((((isset($context["sources"]) || array_key_exists("sources", $context)) && ($context["sources"] ?? $this->getContext($context, "sources")))) ? (($context["sources"] ?? $this->getContext($context, "sources"))) : (null));
        // line 8
        $context["criteria"] = ((((isset($context["criteria"]) || array_key_exists("criteria", $context)) && ($context["criteria"] ?? $this->getContext($context, "criteria")))) ? (($context["criteria"] ?? $this->getContext($context, "criteria"))) : (null));
        // line 9
        $context["storageKey"] = ((((isset($context["storageKey"]) || array_key_exists("storageKey", $context)) && ($context["storageKey"] ?? $this->getContext($context, "storageKey")))) ? (($context["storageKey"] ?? $this->getContext($context, "storageKey"))) : (null));
        // line 11
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t";
        // line 13
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
            // line 14
            echo "\t\t\t";
            $this->loadTemplate("_elements/element", "_components/fieldtypes/Assets/input", 14)->display(array_merge($context, array("context" => "field", "size" => (((            // line 16
($context["viewMode"] ?? $this->getContext($context, "viewMode")) == "large")) ? ("large") : ("small")))));
            // line 18
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</div>

\t<div class=\"btn add icon dashed\">";
        // line 21
        echo twig_escape_filter($this->env, ($context["selectionLabel"] ?? $this->getContext($context, "selectionLabel")), "html", null, true);
        echo "</div>
</div>

";
        // line 24
        $context["jsSettings"] = array("id" => \Craft\craft()->templates->namespaceInputId(        // line 25
($context["id"] ?? $this->getContext($context, "id"))), "name" => \Craft\craft()->templates->namespaceInputName(        // line 26
($context["name"] ?? $this->getContext($context, "name"))), "elementType" => $this->getAttribute(        // line 27
($context["elementType"] ?? $this->getContext($context, "elementType")), "getClassHandle", array(), "method"), "sources" =>         // line 28
($context["sources"] ?? $this->getContext($context, "sources")), "criteria" =>         // line 29
($context["criteria"] ?? $this->getContext($context, "criteria")), "sourceElementId" =>         // line 30
($context["sourceElementId"] ?? $this->getContext($context, "sourceElementId")), "viewMode" =>         // line 31
($context["viewMode"] ?? $this->getContext($context, "viewMode")), "limit" =>         // line 32
($context["limit"] ?? $this->getContext($context, "limit")), "modalStorageKey" =>         // line 33
($context["storageKey"] ?? $this->getContext($context, "storageKey")), "fieldId" =>         // line 34
($context["fieldId"] ?? $this->getContext($context, "fieldId")));
        // line 36
        echo "
";
        // line 37
        ob_start();
        // line 38
        echo "\tnew ";
        echo twig_escape_filter($this->env, ($context["jsClass"] ?? $this->getContext($context, "jsClass")), "html", null, true);
        echo "(";
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter(($context["jsSettings"] ?? $this->getContext($context, "jsSettings")));
        echo ");
";
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  103 => 37,  100 => 36,  98 => 34,  97 => 33,  96 => 32,  95 => 31,  94 => 30,  93 => 29,  92 => 28,  91 => 27,  90 => 26,  89 => 25,  88 => 24,  82 => 21,  78 => 19,  64 => 18,  62 => 16,  60 => 14,  43 => 13,  37 => 11,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if name is defined and name %}
\t<input type=\"hidden\" name=\"{{ name }}\" value=\"\">
{% endif -%}

{% set elements = (elements is defined ? elements : []) -%}
{% set jsClass = (jsClass is defined and jsClass ? jsClass : 'Craft.BaseElementSelectInput') -%}
{% set sources = (sources is defined and sources ? sources : null) -%}
{% set criteria = (criteria is defined and criteria ? criteria : null) -%}
{% set storageKey = (storageKey is defined and storageKey ? storageKey : null) -%}

<div id=\"{{ id }}\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t{% for element in elements %}
\t\t\t{% include \"_elements/element\" with {
\t\t\t\tcontext: 'field',
\t\t\t\tsize: (viewMode == 'large' ? 'large' : 'small')
\t\t\t} %}
\t\t{% endfor %}
\t</div>

\t<div class=\"btn add icon dashed\">{{ selectionLabel }}</div>
</div>

{% set jsSettings = {
\tid: id|namespaceInputId,
\tname: name|namespaceInputName,
\telementType: elementType.getClassHandle(),
\tsources: sources,
\tcriteria: criteria,
\tsourceElementId: sourceElementId,
\tviewMode: viewMode,
\tlimit: limit,
\tmodalStorageKey: storageKey,
\tfieldId: fieldId
} %}

{% includejs %}
\tnew {{ jsClass }}({{ jsSettings|json_encode|raw }});
{% endincludejs %}
", "_components/fieldtypes/Assets/input", "");
    }
}
