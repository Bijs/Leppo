<?php

/* index */
class __TwigTemplate_40af98e832ea41102e2072ee001fc5d5d5524cbfff8fa8c44413981e01a95721 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/site", "index", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/site";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"jumbotron jumbotron--hero mb-0\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "img", array()), "first", array()), "url", array()), "html", null, true);
        echo ")\">
\t\t<div class=\"container mt-2 pt-5 pb-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-8\">
\t\t\t\t\t<h1 class=\"text-primary text-uppercase\"><b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "heroTitle", array()), "html", null, true);
        echo "</b></h1>
\t\t\t\t\t<h2 class=\"text-white h3 font-weight-light\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "heroSubtitle", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary pl-3 pr-3 pt-2 pb-2 mr-3 lees-link text-white\">Bekijk producten</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary pl-3 pr-3 pt-2 pb-2 lees-link text-white\">Bekijk hoe het werkt</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container-fluid mt-3 mb-5 rating--border\">
\t    <div class=\"row\">
\t        <div class=\"col-md-12 p-0\">
\t            <p class=\"text-center rating--color\">
\t                Gebruikers geven ons een 4.5 van de 5
\t    \t\t\t<span class=\"text-warning mr-1\">
\t    \t\t\t\t<i class=\"ml-1 fa fa-star\"></i>
\t\t\t\t\t    <i class=\"fa fa-star\"></i>
\t\t\t\t\t    <i class=\"fa fa-star\"></i>
\t\t\t\t\t    <i class=\"fa fa-star\"></i>
\t        \t\t\t<i class=\"fa fa-star-half-full\"></i>
\t        \t\t</span>
\t\t\t\t\t(2605)
\t\t\t\t</p>
\t        </div>
\t    </div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"text-black text-center font-weight-bold\">Hoe het werkt</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mt-4\">
\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img src=\"https://placehold.it/400x200\" class=\"img-fluid\" alt=\"\" />

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<p class=\"h3 font-weight-bold mt-3\">Titel</p>
\t\t\t\t\t\t<p>Lorem ipsum doler simat lorem ipsum doler simat</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 55,  87 => 46,  83 => 45,  45 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '_layouts/site' %}

{% block main %}

\t<div class=\"jumbotron jumbotron--hero mb-0\" style=\"background-image: url({{ entry.img.first.url }})\">
\t\t<div class=\"container mt-2 pt-5 pb-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-8\">
\t\t\t\t\t<h1 class=\"text-primary text-uppercase\"><b>{{ entry.heroTitle}}</b></h1>
\t\t\t\t\t<h2 class=\"text-white h3 font-weight-light\">{{ entry.heroSubtitle }}</h2>
\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary pl-3 pr-3 pt-2 pb-2 mr-3 lees-link text-white\">Bekijk producten</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-secondary pl-3 pr-3 pt-2 pb-2 lees-link text-white\">Bekijk hoe het werkt</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container-fluid mt-3 mb-5 rating--border\">
\t    <div class=\"row\">
\t        <div class=\"col-md-12 p-0\">
\t            <p class=\"text-center rating--color\">
\t                Gebruikers geven ons een 4.5 van de 5
\t    \t\t\t<span class=\"text-warning mr-1\">
\t    \t\t\t\t<i class=\"ml-1 fa fa-star\"></i>
\t\t\t\t\t    <i class=\"fa fa-star\"></i>
\t\t\t\t\t    <i class=\"fa fa-star\"></i>
\t\t\t\t\t    <i class=\"fa fa-star\"></i>
\t        \t\t\t<i class=\"fa fa-star-half-full\"></i>
\t        \t\t</span>
\t\t\t\t\t(2605)
\t\t\t\t</p>
\t        </div>
\t    </div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"text-black text-center font-weight-bold\">Hoe het werkt</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mt-4\">
\t\t\t{% for i in 1..3 %}
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img src=\"https://placehold.it/400x200\" class=\"img-fluid\" alt=\"\" />

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<p class=\"h3 font-weight-bold mt-3\">Titel</p>
\t\t\t\t\t\t<p>Lorem ipsum doler simat lorem ipsum doler simat</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>

{% endblock %}", "index", "");
    }
}
