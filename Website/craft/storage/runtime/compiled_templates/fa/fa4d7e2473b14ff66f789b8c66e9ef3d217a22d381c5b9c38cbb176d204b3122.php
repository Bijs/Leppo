<?php

/* commerce */
class __TwigTemplate_21e006eb1b6e58bbb72bf595e45d0c9df377d3e2156ecc692a1d618f1aae4c5f extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 21
        $this->parent = $this->loadTemplate("403", "commerce", 21);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "403";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "commerce-manageOrders"), "method")) {
            // line 2
            \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl("commerce/orders"), true, 302);
        }
        // line 5
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "commerce-manageProducts"), "method")) {
            // line 6
            \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl("commerce/products"), true, 302);
        }
        // line 9
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "commerce-managePromotions"), "method")) {
            // line 10
            \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl("commerce/promotions"), true, 302);
        }
        // line 13
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "commerce-manageTaxes"), "method")) {
            // line 14
            \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl("commerce/settings/taxrates"), true, 302);
        }
        // line 17
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "commerce-manageShipping"), "method")) {
            // line 18
            \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl("commerce/settings/shippingmethods"), true, 302);
        }
        // line 22
        $context["message"] = \Craft\Craft::t("You don’t have permission to access to any of the Commerce sub-sections. Please contact an admin.");
        // line 21
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "commerce";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 21,  49 => 22,  46 => 18,  44 => 17,  41 => 14,  39 => 13,  36 => 10,  34 => 9,  31 => 6,  29 => 5,  26 => 2,  24 => 1,  11 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if currentUser.can('commerce-manageOrders') %}
    {% redirect 'commerce/orders' %}
{% endif %}

{% if currentUser.can('commerce-manageProducts') %}
    {% redirect 'commerce/products' %}
{% endif %}

{% if currentUser.can('commerce-managePromotions') %}
    {% redirect 'commerce/promotions' %}
{% endif %}

{% if currentUser.can('commerce-manageTaxes') %}
    {% redirect 'commerce/settings/taxrates' %}
{% endif %}

{% if currentUser.can('commerce-manageShipping') %}
    {% redirect 'commerce/settings/shippingmethods' %}
{% endif %}

{% extends \"403\" %}
{% set message = \"You don’t have permission to access to any of the Commerce sub-sections. Please contact an admin.\"|t %}
", "commerce", "");
    }
}
