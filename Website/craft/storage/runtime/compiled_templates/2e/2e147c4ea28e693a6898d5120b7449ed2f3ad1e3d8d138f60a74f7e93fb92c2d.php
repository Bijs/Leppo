<?php

/* 403 */
class __TwigTemplate_ea28bbee27e157a5d052d1a40363265e530f601b9b422d4ea9e3018a0e422807 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/message", "403", 1);
        $this->blocks = array(
            'message' => array($this, 'block_message'),
            '__internal_4640836c2ab08ec3b63b667ed997a77232253c200ee843d754395b5ec78f03d3' => array($this, 'block___internal_4640836c2ab08ec3b63b667ed997a77232253c200ee843d754395b5ec78f03d3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Unauthorized");
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->markdownFilter(            $this->renderBlock("__internal_4640836c2ab08ec3b63b667ed997a77232253c200ee843d754395b5ec78f03d3", $context, $blocks)), "html", null, true);
            // line 9
            echo "\t";
        } else {
            // line 10
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("You don’t have the proper credentials to access this page."), "html", null, true);
            echo "</p>
\t";
        }
    }

    // line 8
    public function block___internal_4640836c2ab08ec3b63b667ed997a77232253c200ee843d754395b5ec78f03d3($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "403";
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
{% set title = \"Unauthorized\"|t %}

{% block message %}
\t<h2>{{ title }}</h2>

\t{% if message %}
\t\t{% filter md %}{{ message }}{% endfilter %}
\t{% else %}
\t\t<p>{{ \"You don’t have the proper credentials to access this page.\"|t }}</p>
\t{% endif %}
{% endblock %}
", "403", "");
    }
}
