<?php

/* commerce/_layouts/settingscp */
class __TwigTemplate_bcfbe4103c1024480047cd1a1aaf33f09ac130c8863babab020ae1ae818fb7f2 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("commerce/_layouts/cp", "commerce/_layouts/settingscp", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "commerce/_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["selectedSubnavItem"] = "settings";
        // line 3
        $context["bodyClass"] = ((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? ((($context["bodyClass"] ?? $this->getContext($context, "bodyClass")) . " ")) : ("")) . "commercesettings");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "commerce/_layouts/settingscp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,  26 => 3,  24 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"commerce/_layouts/cp\" %}
{% set selectedSubnavItem = 'settings' %}
{% set bodyClass = (bodyClass is defined ? bodyClass~' ' : '') ~ \"commercesettings\" %}
", "commerce/_layouts/settingscp", "");
    }
}
