<?php

/* _layouts/site */
class __TwigTemplate_45549bd6a060b8cd5796867917e1593eb74639f2018f3bf0d8041a7080ad5132 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/base", "_layouts/site", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["baseUrl"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "environmentVariables", array()), "baseUrl", array());
        // line 4
        $context["systemEmail"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "systemSettings", array()), "email", array()), "emailAddress", array());
        // line 5
        $context["settings"] = $this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t<div id=\"preloader\">
\t    <div class=\"spinner spinner-round\"></div>
\t</div>

\t";
        // line 13
        $this->loadTemplate("_includes/header", "_layouts/site", 13)->display($context);
        // line 14
        echo "
\t<main role=\"main\">
\t\t";
        // line 16
        $this->displayBlock('main', $context, $blocks);
        // line 17
        echo "\t</main>

\t";
        // line 19
        $this->loadTemplate("_includes/footer", "_layouts/site", 19)->display($context);
        // line 20
        echo "
";
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
    }

    // line 23
    public function block_foot($context, array $blocks = array())
    {
        // line 24
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? $this->getContext($context, "siteUrl")), "html", null, true);
        echo "public/js/main.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/site";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  71 => 23,  66 => 16,  61 => 20,  59 => 19,  55 => 17,  53 => 16,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  33 => 1,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/base\" %}

{% set baseUrl = craft.config.environmentVariables.baseUrl %}
{% set systemEmail = craft.systemSettings.email.emailAddress %}
{% set settings = craft.config %}

{% block body %}

\t<div id=\"preloader\">
\t    <div class=\"spinner spinner-round\"></div>
\t</div>

\t{% include '_includes/header' %}

\t<main role=\"main\">
\t\t{% block main %}{% endblock %}
\t</main>

\t{% include '_includes/footer' %}

{% endblock %}

{% block foot %}
\t<script src=\"{{ siteUrl }}public/js/main.min.js\"></script>
{% endblock %}", "_layouts/site", "");
    }
}
