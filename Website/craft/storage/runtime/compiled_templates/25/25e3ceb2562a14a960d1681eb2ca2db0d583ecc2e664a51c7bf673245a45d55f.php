<?php

/* producten/{{object.slug|raw}} */
class __TwigTemplate_7111526d7cc1323eb22f03a5844615d53f21378532c7242e548c70405b6fdaf1 extends Craft\BaseTemplate
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
        echo "producten/";
        echo $this->getAttribute(($context["object"] ?? $this->getContext($context, "object")), "slug", array());
    }

    public function getTemplateName()
    {
        return "producten/{{object.slug|raw}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("producten/{{object.slug|raw}}", "producten/{{object.slug|raw}}", "");
    }
}
