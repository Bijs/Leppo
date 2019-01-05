<?php

/* _includes/tabs */
class __TwigTemplate_6eab85c0b443821252086fdeb0f8a53c4d94f6d13e20fba969fc3b91e1139fd2 extends Craft\BaseTemplate
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
        echo "<nav id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? $this->getContext($context, "tabs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["tabId"] => $context["tab"]) {
            // line 4
            echo "\t\t\t";
            if ($context["tab"]) {
                // line 5
                echo "\t\t\t\t";
                $context["tabIsSelected"] = (( !(isset($context["selectedTab"]) || array_key_exists("selectedTab", $context)) && $this->getAttribute($context["loop"], "first", array())) || ((isset($context["selectedTab"]) || array_key_exists("selectedTab", $context)) && (($context["selectedTab"] ?? $this->getContext($context, "selectedTab")) == $context["tabId"])));
                // line 6
                echo "<li><a id=\"tab-";
                echo twig_escape_filter($this->env, $context["tabId"], "html", null, true);
                echo "\" class=\"tab";
                if (($context["tabIsSelected"] ?? $this->getContext($context, "tabIsSelected"))) {
                    echo " sel";
                }
                if ($this->getAttribute($context["tab"], "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "class", array()), "html", null, true);
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "label", array()), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            // line 8
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tabId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  64 => 8,  46 => 6,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t{% for tabId, tab in tabs %}
\t\t\t{% if tab %}
\t\t\t\t{% set tabIsSelected = ((selectedTab is not defined and loop.first) or (selectedTab is defined and selectedTab == tabId)) -%}
\t\t\t\t<li><a id=\"tab-{{ tabId }}\" class=\"tab{% if tabIsSelected %} sel{% endif %}{% if tab.class is defined %} {{ tab.class }}{% endif %}\" href=\"{{ tab.url }}\">{{ tab.label }}</a></li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</ul>
</nav>
", "_includes/tabs", "");
    }
}
