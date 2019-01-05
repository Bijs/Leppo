<?php

/* entries */
class __TwigTemplate_cd6e7285d884ac148fae605aa6e465ff8956439806a701dc4d805d51ec92861e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "entries", 1);
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
        $context["title"] = \Craft\Craft::t("Entries");
        // line 3
        $context["elementType"] = "Entry";
        // line 6
        if ((isset($context["sectionHandle"]) || array_key_exists("sectionHandle", $context))) {
            // line 7
            $_js = (("window.defaultSectionHandle = \"" . ($context["sectionHandle"] ?? $this->getContext($context, "sectionHandle"))) . "\";");
            \Craft\craft()->templates->includejs($_js);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "entries";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,  30 => 7,  28 => 6,  26 => 3,  24 => 2,  11 => 1,);
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
{% set title = \"Entries\"|t %}
{% set elementType = 'Entry' %}


{% if sectionHandle is defined %}
\t{% includejs 'window.defaultSectionHandle = \"'~sectionHandle~'\";' %}
{% endif %}
", "entries", "");
    }
}
