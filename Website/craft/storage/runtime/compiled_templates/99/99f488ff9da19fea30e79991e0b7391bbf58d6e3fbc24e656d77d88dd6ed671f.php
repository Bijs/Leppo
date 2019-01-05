<?php

/* settings/_index */
class __TwigTemplate_9ce1ddf93f2b87443ff4f9e2d0203ecbc3f7957d1a9fecc68aaca46c8744f42a extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/_index", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Settings");
        // line 4
        $_js = "css/settings.css";
        \Craft\craft()->templates->includecssresource($_js);
        // line 5
        $_js = "js/settings.js";
        \Craft\craft()->templates->includejsresource($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "cp", array()), "settings", array(0 => 80), "method"));
        foreach ($context['_seq'] as $context["category"] => $context["items"]) {
            // line 9
            echo "\t\t<h2>";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h2>

\t\t<ul class=\"icons\">
\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                // line 13
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 14
                if ($this->getAttribute($context["item"], "url", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl($this->getAttribute($context["item"], "url", array())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . $context["handle"])), "html", null, true);
                }
                echo "\" ";
                if ($this->getAttribute($context["item"], "icon", array(), "any", true, true)) {
                    echo "data-icon=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                    echo "\"";
                }
                echo ">

\t\t\t\t\t\t";
                // line 16
                if ($this->getAttribute($context["item"], "iconUrl", array(), "any", true, true)) {
                    // line 17
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "iconUrl", array()), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t";
                }
                // line 19
                echo "
\t\t\t\t\t\t";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t</ul>

\t\t<hr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
\t<h2>";
        // line 29
        echo twig_escape_filter($this->env, \Craft\Craft::t("Tools"), "html", null, true);
        echo "</h2>

\t<ul class=\"icons\">
\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? $this->getContext($context, "tools")));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 33
            echo "\t\t\t<li><a id=\"tool-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getClassHandle", array(), "method"), "html", null, true);
            echo "\" data-icon=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getIconValue", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
\t\t\t";
            // line 34
            $_js = (((((("new Craft.Tool(\"" . $this->getAttribute($context["tool"], "getClassHandle", array(), "method")) . "\", ") . $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter($this->getAttribute($context["tool"], "getOptionsHtml", array(), "method"))) . ", \"") . $this->getAttribute($context["tool"], "getButtonLabel", array(), "method")) . "\");");
            \Craft\craft()->templates->includejs($_js);
            // line 35
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "settings/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  129 => 35,  126 => 34,  117 => 33,  113 => 32,  107 => 29,  104 => 28,  95 => 24,  85 => 20,  82 => 19,  76 => 17,  74 => 16,  59 => 14,  56 => 13,  52 => 12,  45 => 9,  40 => 8,  37 => 7,  33 => 1,  30 => 5,  27 => 4,  25 => 2,  11 => 1,);
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
{% set title = \"Settings\"|t %}

{% includecssresource 'css/settings.css' %}
{% includejsresource 'js/settings.js' %}

{% block content %}
\t{% for category, items in craft.cp.settings(80) %}
\t\t<h2>{{ category }}</h2>

\t\t<ul class=\"icons\">
\t\t\t{% for handle, item in items %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{% if item.url is defined %}{{ url(item.url) }}{% else %}{{ url('settings/'~handle) }}{% endif %}\" {% if item.icon is defined %}data-icon=\"{{ item.icon }}\"{% endif %}>

\t\t\t\t\t\t{% if item.iconUrl is defined %}
\t\t\t\t\t\t\t<img src=\"{{ item.iconUrl }}\" />
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{{ item.label }}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>

\t\t<hr>
\t{% endfor %}

\t<h2>{{ \"Tools\"|t }}</h2>

\t<ul class=\"icons\">
\t\t{% for tool in tools %}
\t\t\t<li><a id=\"tool-{{ tool.getClassHandle() }}\" data-icon=\"{{ tool.getIconValue() }}\">{{ tool.getName() }}</a></li>
\t\t\t{% includejs 'new Craft.Tool(\"'~tool.getClassHandle()~'\", '~tool.getOptionsHtml()|json_encode~', \"'~tool.getButtonLabel()~'\");' %}
\t\t{% endfor %}
\t</ul>
{% endblock %}
", "settings/_index", "");
    }
}
