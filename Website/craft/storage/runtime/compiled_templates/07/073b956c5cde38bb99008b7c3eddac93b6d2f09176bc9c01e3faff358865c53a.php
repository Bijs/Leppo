<?php

/* _layouts/elementindex */
class __TwigTemplate_fc6f1075bf1f75ab1961943e085e0ec3c76f9f1526a837bd81779c2e52679458 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "_layouts/elementindex", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'initJs' => array($this, 'block_initJs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["elementTypeClass"] = ($context["elementType"] ?? $this->getContext($context, "elementType"));
        // line 4
        $context["elementType"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "elements", array()), "getElementType", array(0 => ($context["elementTypeClass"] ?? $this->getContext($context, "elementTypeClass"))), "method");
        // line 5
        $context["context"] = "index";
        // line 7
        if ( !($context["elementType"] ?? $this->getContext($context, "elementType"))) {
            // line 8
            throw new \Craft\HttpException(404);
        }
        // line 11
        $context["sources"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "elementIndexes", array()), "getSources", array(0 => ($context["elementTypeClass"] ?? $this->getContext($context, "elementTypeClass")), 1 => "index"), "method");
        // line 12
        $context["customizableSources"] = (( !twig_test_empty(($context["sources"] ?? $this->getContext($context, "sources"))) && (($context["context"] ?? $this->getContext($context, "context")) == "index")) && $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "admin", array()));
        // line 43
        $_js =         $this->renderBlock("initJs", $context, $blocks);
        \Craft\craft()->templates->includejs($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        if ( !twig_test_empty(($context["sources"] ?? $this->getContext($context, "sources")))) {
            // line 16
            echo "\t\t<nav>
\t\t\t";
            // line 17
            $this->loadTemplate("_elements/sources", "_layouts/elementindex", 17)->display($context);
            // line 18
            echo "\t\t</nav>

\t\t";
            // line 20
            if (($context["customizableSources"] ?? $this->getContext($context, "customizableSources"))) {
                // line 21
                echo "\t\t\t<div class=\"heading\"><span></span></div>
\t\t\t<a class=\"customize-sources settings icon\" title=\"";
                // line 22
                echo twig_escape_filter($this->env, \Craft\Craft::t("Customize sources"), "html", null, true);
                echo "\"></a>
\t\t";
            }
            // line 24
            echo "\t";
        }
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "\t<div class=\"elementindex\">
\t\t";
        // line 30
        $this->loadTemplate("_elements/indexcontainer", "_layouts/elementindex", 30)->display($context);
        // line 31
        echo "\t</div>
";
    }

    // line 35
    public function block_initJs($context, array $blocks = array())
    {
        // line 36
        echo "\tCraft.elementIndex = Craft.createElementIndex('";
        echo twig_escape_filter($this->env, ($context["elementTypeClass"] ?? $this->getContext($context, "elementTypeClass")), "html", null, true);
        echo "', \$('#main'), {
\t\tcontext:        '";
        // line 37
        echo twig_escape_filter($this->env, ($context["context"] ?? $this->getContext($context, "context")), "html", null, true);
        echo "',
\t\tstorageKey:     'elementindex.";
        // line 38
        echo twig_escape_filter($this->env, ($context["elementTypeClass"] ?? $this->getContext($context, "elementTypeClass")), "html", null, true);
        echo "',
\t\tcriteria:       Craft.defaultIndexCriteria
\t});
";
    }

    public function getTemplateName()
    {
        return "_layouts/elementindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  100 => 37,  95 => 36,  92 => 35,  87 => 31,  85 => 30,  82 => 29,  79 => 28,  74 => 24,  69 => 22,  66 => 21,  64 => 20,  60 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  45 => 1,  42 => 43,  40 => 12,  38 => 11,  35 => 8,  33 => 7,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}

{% set elementTypeClass = elementType %}
{% set elementType = craft.elements.getElementType(elementTypeClass) %}
{% set context = 'index' %}

{% if not elementType %}
\t{% exit 404 %}
{% endif %}

{% set sources = craft.elementIndexes.getSources(elementTypeClass, 'index') %}
{% set customizableSources = (sources is not empty and context == 'index' and currentUser.admin) %}

{% block sidebar %}
\t{% if sources is not empty %}
\t\t<nav>
\t\t\t{% include \"_elements/sources\" %}
\t\t</nav>

\t\t{% if customizableSources %}
\t\t\t<div class=\"heading\"><span></span></div>
\t\t\t<a class=\"customize-sources settings icon\" title=\"{{ 'Customize sources'|t }}\"></a>
\t\t{% endif %}
\t{% endif %}
{% endblock %}


{% block content %}
\t<div class=\"elementindex\">
\t\t{% include \"_elements/indexcontainer\" %}
\t</div>
{% endblock %}


{% block initJs %}
\tCraft.elementIndex = Craft.createElementIndex('{{ elementTypeClass }}', \$('#main'), {
\t\tcontext:        '{{ context }}',
\t\tstorageKey:     'elementindex.{{ elementTypeClass }}',
\t\tcriteria:       Craft.defaultIndexCriteria
\t});
{% endblock %}

{% includejs block('initJs') %}
", "_layouts/elementindex", "");
    }
}
