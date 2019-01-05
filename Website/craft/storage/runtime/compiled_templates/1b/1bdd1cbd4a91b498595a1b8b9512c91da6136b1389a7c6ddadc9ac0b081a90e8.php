<?php

/* _elements/sources */
class __TwigTemplate_ddbbbb1e1b0fefc63d1a76e6faa4ed455d4579a49e8183a0575e9913a87242eb extends Craft\BaseTemplate
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
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sources"] ?? $this->getContext($context, "sources")));
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
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 3
            echo "\t\t";
            if ($this->getAttribute($context["source"], "heading", array(), "any", true, true)) {
                // line 4
                echo "\t\t\t<li class=\"heading\"><span>";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["source"], "heading", array())), "html", null, true);
                echo "</span></li>
\t\t";
            } else {
                // line 6
                echo "\t\t\t<li>
\t\t\t\t<a data-key=\"";
                // line 7
                echo twig_escape_filter($this->env, (($this->getAttribute($context["source"], "key", array(), "any", true, true)) ? ($this->getAttribute($context["source"], "key", array())) : ($context["key"])), "html", null, true);
                echo "\"";
                // line 8
                if (($this->getAttribute($context["source"], "hasThumbs", array(), "any", true, true) && $this->getAttribute($context["source"], "hasThumbs", array()))) {
                    echo " data-has-thumbs";
                }
                // line 9
                if (($this->getAttribute($context["source"], "structureId", array(), "any", true, true) && $this->getAttribute($context["source"], "structureId", array()))) {
                    echo " data-has-structure";
                }
                // line 10
                if ($this->getAttribute($context["source"], "defaultSort", array(), "any", true, true)) {
                    $context["defaultSort"] = $this->getAttribute($context["source"], "defaultSort", array());
                    echo " data-default-sort=\"";
                    echo twig_escape_filter($this->env, ((twig_test_iterable(($context["defaultSort"] ?? $this->getContext($context, "defaultSort")))) ? (twig_join_filter(($context["defaultSort"] ?? $this->getContext($context, "defaultSort")), ":")) : (($context["defaultSort"] ?? $this->getContext($context, "defaultSort")))), "html", null, true);
                    echo "\"";
                }
                // line 11
                if ($this->getAttribute($context["source"], "data", array(), "any", true, true)) {
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["source"], "data", array()));
                    foreach ($context['_seq'] as $context["dataKey"] => $context["dataVal"]) {
                        echo " data-";
                        echo twig_escape_filter($this->env, $context["dataKey"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["dataVal"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataVal'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 13
                echo ">";
                // line 14
                if (($this->getAttribute($context["source"], "status", array(), "any", true, true) && $this->getAttribute($context["source"], "status", array()))) {
                    // line 15
                    echo "<span class=\"status ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "status", array()), "html", null, true);
                    echo "\"></span>";
                }
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "label", array()), "html", null, true);
                // line 18
                echo "</a>
\t\t\t\t";
                // line 19
                if (($this->getAttribute($context["source"], "nested", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["source"], "nested", array())))) {
                    // line 20
                    echo "\t\t\t\t\t<div class=\"toggle\"></div>
\t\t\t\t\t";
                    // line 21
                    $this->loadTemplate("_elements/sources", "_elements/sources", 21)->display(array_merge($context, array("sources" => $this->getAttribute(                    // line 22
$context["source"], "nested", array()))));
                    // line 24
                    echo "\t\t\t\t";
                }
                // line 25
                echo "\t\t\t</li>
\t\t";
            }
            // line 27
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_elements/sources";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  114 => 27,  110 => 25,  107 => 24,  105 => 22,  104 => 21,  101 => 20,  99 => 19,  96 => 18,  94 => 17,  89 => 15,  87 => 14,  85 => 13,  71 => 12,  69 => 11,  62 => 10,  58 => 9,  54 => 8,  51 => 7,  48 => 6,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
\t{% for key, source in sources %}
\t\t{% if source.heading is defined %}
\t\t\t<li class=\"heading\"><span>{{ source.heading|t }}</span></li>
\t\t{% else %}
\t\t\t<li>
\t\t\t\t<a data-key=\"{{ source.key is defined ? source.key : key }}\"
\t\t\t\t\t{%- if source.hasThumbs is defined and source.hasThumbs %} data-has-thumbs{% endif %}
\t\t\t\t\t{%- if source.structureId is defined and source.structureId %} data-has-structure{% endif %}
\t\t\t\t\t{%- if source.defaultSort is defined %}{% set defaultSort = source.defaultSort %} data-default-sort=\"{{ defaultSort is iterable ? defaultSort|join(':') : defaultSort }}\"{% endif %}
\t\t\t\t\t{%- if source.data is defined -%}
\t\t\t\t\t\t{% for dataKey, dataVal in source.data %} data-{{ dataKey }}=\"{{ dataVal }}\"{% endfor %}
\t\t\t\t\t{%- endif %}>
\t\t\t\t\t\t{%- if source.status is defined and source.status -%}
\t\t\t\t\t\t\t<span class=\"status {{ source.status }}\"></span>
\t\t\t\t\t\t{%- endif -%}
\t\t\t\t\t\t{{- source.label -}}
\t\t\t\t</a>
\t\t\t\t{% if source.nested is defined and source.nested is not empty %}
\t\t\t\t\t<div class=\"toggle\"></div>
\t\t\t\t\t{% include \"_elements/sources\" with {
\t\t\t\t\t\tsources: source.nested
\t\t\t\t\t} %}
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t{% endif %}
\t{% endfor %}
</ul>
", "_elements/sources", "");
    }
}
