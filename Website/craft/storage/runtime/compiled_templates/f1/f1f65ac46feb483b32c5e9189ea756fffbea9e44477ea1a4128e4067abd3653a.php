<?php

/* commerce/products/_index */
class __TwigTemplate_54075b2d0451df3217c2e5841b1ff571e01f9b4d33a26fb2fca686bc5b96a053 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "commerce/products/_index", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        $context["title"] = \Craft\Craft::t("Products");
        // line 5
        $context["docTitle"] = ((($context["title"] ?? $this->getContext($context, "title")) . " - ") . "Commerce");
        // line 6
        $context["elementType"] = "Commerce_Product";
        // line 7
        $context["selectedTab"] = "products";
        // line 8
        $context["selectedSubnavItem"] = "products";
        // line 9
        $context["bodyClass"] = ((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? ((($context["bodyClass"] ?? $this->getContext($context, "bodyClass")) . " ")) : ("")) . "commerceproducts commerceproductsindex");
        // line 20
        if ((isset($context["productTypeHandle"]) || array_key_exists("productTypeHandle", $context))) {
            // line 21
            $_js = (("window.defaultProductTypeHandle = \"" . ($context["productTypeHandle"] ?? $this->getContext($context, "productTypeHandle"))) . "\";");
            \Craft\craft()->templates->includejs($_js);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (( !twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "commerce", array()), "getProductTypes", array(), "method")) > 0)) {
            // line 13
            echo "        <p class=\"error\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No product types exist yet."), "html", null, true);
            echo " <a class=\"go\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("commerce/settings/producttypes/new"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Create one"), "html", null, true);
            echo "</a></p>
    ";
        } else {
            // line 15
            echo "        ";
            $this->displayParentBlock("content", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "commerce/products/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  56 => 13,  53 => 12,  50 => 11,  46 => 1,  42 => 21,  40 => 20,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  25 => 2,  11 => 1,);
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

{% set title = \"Products\"|t %}
{% set docTitle = title~' - '~'Commerce' %}
{% set elementType = 'Commerce_Product' %}
{% set selectedTab = 'products' %}
{% set selectedSubnavItem = \"products\" %}
{% set bodyClass = (bodyClass is defined ? bodyClass~' ' : '') ~ \"commerceproducts commerceproductsindex\" %}

{% block content %}
    {% if not craft.commerce.getProductTypes()|length > 0 %}
        <p class=\"error\">{{ 'No product types exist yet.'|t }} <a class=\"go\" href=\"{{ url('commerce/settings/producttypes/new') }}\">{{ 'Create one'|t }}</a></p>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}


{% if productTypeHandle is defined %}
    {% includejs 'window.defaultProductTypeHandle = \"'~productTypeHandle~'\";' %}
{% endif %}
", "commerce/products/_index", "");
    }
}
