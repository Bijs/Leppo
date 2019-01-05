<?php

/* commerce/_layouts/cp */
class __TwigTemplate_4f5a85ab7852812f8960b36a28aeba9f93ace21f08e186d8c4fd05e580d279fb extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "commerce/_layouts/cp", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo \Craft\craft()->templates->invokeHook("commerce.prepCpTemplate", $context);

        // line 3
        $context["bodyClass"] = ((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? ((($context["bodyClass"] ?? $this->getContext($context, "bodyClass")) . " ")) : ("")) . "commerce");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "commerce/_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,  27 => 3,  24 => 2,  11 => 1,);
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
{% hook 'commerce.prepCpTemplate' %}
{% set bodyClass = (bodyClass is defined ? bodyClass~' ' : '') ~ \"commerce\" %}
", "commerce/_layouts/cp", "");
    }
}
