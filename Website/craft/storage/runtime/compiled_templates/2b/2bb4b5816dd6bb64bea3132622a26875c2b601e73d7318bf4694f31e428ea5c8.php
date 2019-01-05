<?php

/* 404 */
class __TwigTemplate_f4aba429879ce3fe68cf54d9df00bb54ab22b70d6ad518e13039813d1486550b extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/message", "404", 1);
        $this->blocks = array(
            'message' => array($this, 'block_message'),
            '__internal_2440947cd42e089d240b5bdbcb0caaeae47f22bdd9a662ba30256d57a24f882a' => array($this, 'block___internal_2440947cd42e089d240b5bdbcb0caaeae47f22bdd9a662ba30256d57a24f882a'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Page Not Found");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_message($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h2>

\t";
        // line 7
        if (($context["message"] ?? $this->getContext($context, "message"))) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->markdownFilter(            $this->renderBlock("__internal_2440947cd42e089d240b5bdbcb0caaeae47f22bdd9a662ba30256d57a24f882a", $context, $blocks)), "html", null, true);
            // line 9
            echo "\t";
        } else {
            // line 10
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("The requested URL was not found on this server."), "html", null, true);
            echo "</p>
\t";
        }
    }

    // line 8
    public function block___internal_2440947cd42e089d240b5bdbcb0caaeae47f22bdd9a662ba30256d57a24f882a($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "404";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  49 => 10,  46 => 9,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/message\" %}
{% set title = \"Page Not Found\"|t %}

{% block message %}
\t<h2>{{ title }}</h2>

\t{% if message %}
\t\t{% filter md %}{{ message }}{% endfilter %}
\t{% else %}
\t\t<p>{{ \"The requested URL was not found on this server.\"|t }}</p>
\t{% endif %}
{% endblock %}
", "404", "");
    }
}
