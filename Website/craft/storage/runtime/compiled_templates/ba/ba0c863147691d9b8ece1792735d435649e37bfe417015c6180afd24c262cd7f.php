<?php

/* _includes/header */
class __TwigTemplate_f9cefab964b88e9e0c21738a85a80bdeb90a9414be52b15057f0aba07e0233af extends Craft\BaseTemplate
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
        $this->loadTemplate("_includes/cp-edit-link", "_includes/header", 1)->display($context);
        // line 2
        echo "
<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm\">
\t<h5 class=\"my-0 mr-md-auto font-weight-normal\">Company name</h5>
\t<nav class=\"my-2 my-md-0 mr-md-3\">
\t\t<a class=\"p-2 text-dark\" href=\"#\">Features</a>
\t\t<a class=\"p-2 text-dark\" href=\"#\">Enterprise</a>
\t\t<a class=\"p-2 text-dark\" href=\"#\">Support</a>
\t\t<a class=\"p-2 text-dark\" href=\"#\">Pricing</a>
\t</nav>
\t<a class=\"btn btn-outline-primary\" href=\"#\">Sign up</a>
</div>";
    }

    public function getTemplateName()
    {
        return "_includes/header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '_includes/cp-edit-link' %}

<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm\">
\t<h5 class=\"my-0 mr-md-auto font-weight-normal\">Company name</h5>
\t<nav class=\"my-2 my-md-0 mr-md-3\">
\t\t<a class=\"p-2 text-dark\" href=\"#\">Features</a>
\t\t<a class=\"p-2 text-dark\" href=\"#\">Enterprise</a>
\t\t<a class=\"p-2 text-dark\" href=\"#\">Support</a>
\t\t<a class=\"p-2 text-dark\" href=\"#\">Pricing</a>
\t</nav>
\t<a class=\"btn btn-outline-primary\" href=\"#\">Sign up</a>
</div>", "_includes/header", "");
    }
}
