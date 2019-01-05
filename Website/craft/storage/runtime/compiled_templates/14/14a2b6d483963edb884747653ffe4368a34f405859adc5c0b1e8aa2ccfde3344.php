<?php

/* _layouts/base */
class __TwigTemplate_2e4c90e05d6f431f495c68137d2d9a08a49b1e51d2cd81ff15886416343f84dd extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "
</head>

<body>
\t";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "\t";
        $this->displayBlock('foot', $context, $blocks);
        // line 21
        echo "</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

\t\t<link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? $this->getContext($context, "siteUrl")), "html", null, true);
        echo "public/images/favicon.ico\" type=\"image/x-icon\" />
\t\t<link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? $this->getContext($context, "siteUrl")), "html", null, true);
        echo "public/images/favicon.ico\" type=\"image/x-icon\" />

\t\t";
        // line 11
        echo \Craft\craft()->templates->invokeHook("seomaticRender", $context);

        // line 12
        echo "
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? $this->getContext($context, "siteUrl")), "html", null, true);
        echo "public/css/main.min.css\" rel=\"stylesheet\" />
\t";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 20
    public function block_foot($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  74 => 19,  68 => 13,  65 => 12,  62 => 11,  57 => 9,  53 => 8,  48 => 5,  45 => 4,  40 => 21,  37 => 20,  35 => 19,  29 => 15,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t{% block head %}
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

\t\t<link rel=\"shortcut icon\" href=\"{{ siteUrl }}public/images/favicon.ico\" type=\"image/x-icon\" />
\t\t<link rel=\"icon\" href=\"{{ siteUrl }}public/images/favicon.ico\" type=\"image/x-icon\" />

\t\t{% hook 'seomaticRender' %}

\t\t<link href=\"{{ siteUrl }}public/css/main.min.css\" rel=\"stylesheet\" />
\t{% endblock %}

</head>

<body>
\t{% block body %}{% endblock %}
\t{% block foot %}{% endblock %}
</body>
</html>", "_layouts/base", "");
    }
}
