<?php

/* _includes/forms/elementSelect */
class __TwigTemplate_7b716cd7b0e8f31132f36fba18af333303cea837ad081795c4a29d14d48c9f2c extends Craft\BaseTemplate
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
        $context["elements"] = ((((isset($context["elements"]) || array_key_exists("elements", $context)) && ($context["elements"] ?? $this->getContext($context, "elements")))) ? (($context["elements"] ?? $this->getContext($context, "elements"))) : (array()));
        // line 6
        $context["jsClass"] = ((((isset($context["jsClass"]) || array_key_exists("jsClass", $context)) && ($context["jsClass"] ?? $this->getContext($context, "jsClass")))) ? (($context["jsClass"] ?? $this->getContext($context, "jsClass"))) : ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = ((((isset($context["sources"]) || array_key_exists("sources", $context)) && ($context["sources"] ?? $this->getContext($context, "sources")))) ? (($context["sources"] ?? $this->getContext($context, "sources"))) : (null));
        // line 8
        $context["criteria"] = ((((isset($context["criteria"]) || array_key_exists("criteria", $context)) && ($context["criteria"] ?? $this->getContext($context, "criteria")))) ? (($context["criteria"] ?? $this->getContext($context, "criteria"))) : (null));
        // line 9
        $context["sourceElementId"] = ((((isset($context["sourceElementId"]) || array_key_exists("sourceElementId", $context)) && ($context["sourceElementId"] ?? $this->getContext($context, "sourceElementId")))) ? (($context["sourceElementId"] ?? $this->getContext($context, "sourceElementId"))) : (null));
        // line 10
        $context["storageKey"] = ((((isset($context["storageKey"]) || array_key_exists("storageKey", $context)) && ($context["storageKey"] ?? $this->getContext($context, "storageKey")))) ? (($context["storageKey"] ?? $this->getContext($context, "storageKey"))) : (null));
        // line 11
        $context["viewMode"] = (((isset($context["viewMode"]) || array_key_exists("viewMode", $context))) ? (($context["viewMode"] ?? $this->getContext($context, "viewMode"))) : ("list"));
        // line 12
        echo "
<div id=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t";
        // line 15
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
            // line 16
            echo "\t\t\t";
            $this->loadTemplate("_elements/element", "_includes/forms/elementSelect", 16)->display(array_merge($context, array("context" => "field", "size" => (((            // line 18
($context["viewMode"] ?? $this->getContext($context, "viewMode")) == "large")) ? ("large") : ("small")))));
            // line 20
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
        // line 21
        echo "\t</div>

\t<div class=\"btn add icon dashed\">";
        // line 23
        echo twig_escape_filter($this->env, (((isset($context["selectionLabel"]) || array_key_exists("selectionLabel", $context))) ? (($context["selectionLabel"] ?? $this->getContext($context, "selectionLabel"))) : ((((isset($context["addButtonLabel"]) || array_key_exists("addButtonLabel", $context))) ? (($context["addButtonLabel"] ?? $this->getContext($context, "addButtonLabel"))) : (\Craft\Craft::t("Choose"))))), "html", null, true);
        echo "</div>
</div>

";
        // line 26
        $context["jsSettings"] = array("id" => \Craft\craft()->templates->namespaceInputId(        // line 27
($context["id"] ?? $this->getContext($context, "id"))), "name" => \Craft\craft()->templates->namespaceInputName(        // line 28
($context["name"] ?? $this->getContext($context, "name"))), "elementType" => $this->getAttribute(        // line 29
($context["elementType"] ?? $this->getContext($context, "elementType")), "getClassHandle", array(), "method"), "sources" =>         // line 30
($context["sources"] ?? $this->getContext($context, "sources")), "criteria" =>         // line 31
($context["criteria"] ?? $this->getContext($context, "criteria")), "sourceElementId" =>         // line 32
($context["sourceElementId"] ?? $this->getContext($context, "sourceElementId")), "viewMode" =>         // line 33
($context["viewMode"] ?? $this->getContext($context, "viewMode")), "limit" =>         // line 34
($context["limit"] ?? $this->getContext($context, "limit")), "modalStorageKey" =>         // line 35
($context["storageKey"] ?? $this->getContext($context, "storageKey")));
        // line 37
        echo "
";
        // line 38
        ob_start();
        // line 39
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
        return "_includes/forms/elementSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  108 => 38,  105 => 37,  103 => 35,  102 => 34,  101 => 33,  100 => 32,  99 => 31,  98 => 30,  97 => 29,  96 => 28,  95 => 27,  94 => 26,  88 => 23,  84 => 21,  70 => 20,  68 => 18,  66 => 16,  49 => 15,  44 => 13,  41 => 12,  39 => 11,  37 => 10,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  21 => 2,  19 => 1,);
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

{% set elements = (elements is defined and elements ? elements : []) -%}
{% set jsClass = (jsClass is defined and jsClass ? jsClass : 'Craft.BaseElementSelectInput') -%}
{% set sources = (sources is defined and sources ? sources : null) -%}
{% set criteria = (criteria is defined and criteria ? criteria : null) -%}
{% set sourceElementId = (sourceElementId is defined and sourceElementId ? sourceElementId : null) -%}
{% set storageKey = (storageKey is defined and storageKey ? storageKey : null) -%}
{% set viewMode = (viewMode is defined ? viewMode : 'list') %}

<div id=\"{{ id }}\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t{% for element in elements %}
\t\t\t{% include \"_elements/element\" with {
\t\t\t\tcontext: 'field',
\t\t\t\tsize: (viewMode == 'large' ? 'large' : 'small')
\t\t\t} %}
\t\t{% endfor %}
\t</div>

\t<div class=\"btn add icon dashed\">{{ selectionLabel is defined ? selectionLabel : (addButtonLabel is defined ? addButtonLabel : \"Choose\"|t) }}</div>
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
\tmodalStorageKey: storageKey
} %}

{% includejs %}
\tnew {{ jsClass }}({{ jsSettings|json_encode|raw }});
{% endincludejs %}
", "_includes/forms/elementSelect", "");
    }
}
