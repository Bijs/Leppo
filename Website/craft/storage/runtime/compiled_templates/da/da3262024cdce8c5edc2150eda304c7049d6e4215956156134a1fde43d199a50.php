<?php

/* commerce/orders/_index */
class __TwigTemplate_5479056e75be24a0b118e42dccaa068415919f6e035757b54d3a513daeca1023 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "commerce/orders/_index", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo \Craft\craft()->templates->invokeHook("commerce.prepCpTemplate", $context);

        // line 4
        $context["title"] = \Craft\Craft::t("Orders");
        // line 5
        $context["docTitle"] = ((($context["title"] ?? $this->getContext($context, "title")) . " - ") . "Commerce");
        // line 6
        $context["elementType"] = "Commerce_Order";
        // line 7
        $context["selectedTab"] = "orders";
        // line 8
        $context["selectedSubnavItem"] = "orders";
        // line 9
        $context["bodyClass"] = ((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? ((($context["bodyClass"] ?? $this->getContext($context, "bodyClass")) . " ")) : ("")) . "commerceorders commerceordersindex");
        // line 11
        \Craft\craft()->templates->includeTranslations(
        	"Total Revenue",
        	"Last 7 days",
        	"Last 30 days",
        	"Last Week",
        	"Last Month",
        	"Custom Range",
        	"Apply"
        );
        // line 21
        $_js = "commerce/charts-explorer.css";
        \Craft\craft()->templates->includecssresource($_js);
        // line 23
        $_js = "commerce/js/CommerceOrderIndex.js";
        \Craft\craft()->templates->includeJsResource($_js);
        // line 24
        $_js = "commerce/js/CommerceOrderTableView.js";
        \Craft\craft()->templates->includeJsResource($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "commerce/orders/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 1,  55 => 24,  52 => 23,  49 => 21,  39 => 11,  37 => 9,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  24 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/elementindex\" %}
{% hook 'commerce.prepCpTemplate' %}

{% set title = \"Orders\"|t %}
{% set docTitle = title~' - '~'Commerce' %}
{% set elementType = 'Commerce_Order' %}
{% set selectedTab = 'orders' %}
{% set selectedSubnavItem = \"orders\" %}
{% set bodyClass = (bodyClass is defined ? bodyClass~' ' : '') ~ \"commerceorders commerceordersindex\" %}

{% includeTranslations
\t\"Total Revenue\",
\t\"Last 7 days\",
\t\"Last 30 days\",
\t\"Last Week\",
\t\"Last Month\",
\t\"Custom Range\",
\t\"Apply\"
%}

{% includecssresource \"commerce/charts-explorer.css\" %}

{% includeJsResource 'commerce/js/CommerceOrderIndex.js' %}
{% includeJsResource 'commerce/js/CommerceOrderTableView.js' %}", "commerce/orders/_index", "");
    }
}
