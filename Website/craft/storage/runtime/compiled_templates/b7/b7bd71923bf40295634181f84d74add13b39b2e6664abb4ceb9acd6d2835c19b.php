<?php

/* json-ld/_json-ld */
class __TwigTemplate_3c0f66bc53fe32d7e6b679ccd7e88605ee529287ab96803709e9324942ff2fc3 extends Craft\BaseTemplate
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
        // line 4
        $context["level"] = 0;
        // line 5
        echo "<script type=\"application/ld+json\">
";
        // line 6
        if ((twig_first($this->env, twig_get_array_keys_filter(($context["object"] ?? $this->getContext($context, "object")))) == "0")) {
            // line 7
            echo "[
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["object"] ?? $this->getContext($context, "object")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subObject"]) {
                // line 9
                $context["level"] = 0;
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ($context["level"] ?? $this->getContext($context, "level"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "{
";
                // line 11
                $context["level"] = 1;
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ($context["level"] ?? $this->getContext($context, "level"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"@context\": \"http://schema.org\",
";
                // line 13
                $this->loadTemplate("json-ld/_json-ld_core", "json-ld/_json-ld", 13)->display(array("object" => $context["subObject"], "level" => ($context["level"] ?? $this->getContext($context, "level"))));
                // line 14
                $context["level"] = 0;
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ($context["level"] ?? $this->getContext($context, "level"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "}";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                // line 16
                echo "
";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subObject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "]
";
        } else {
            // line 20
            echo "{
";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["level"] ?? $this->getContext($context, "level"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"@context\": \"http://schema.org\",
";
            // line 22
            $this->loadTemplate("json-ld/_json-ld_core", "json-ld/_json-ld", 22)->display(array("object" => ($context["object"] ?? $this->getContext($context, "object")), "level" => ($context["level"] ?? $this->getContext($context, "level"))));
            // line 23
            echo "}
";
        }
        // line 25
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "json-ld/_json-ld";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 25,  124 => 23,  122 => 22,  111 => 21,  108 => 20,  104 => 18,  89 => 16,  76 => 15,  74 => 14,  72 => 13,  61 => 12,  59 => 11,  48 => 10,  46 => 9,  29 => 8,  26 => 7,  24 => 6,  21 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# --------------------------------------------------------------------------------
This is rendered via 
-------------------------------------------------------------------------------- #}
{% set level = 0 %}
<script type=\"application/ld+json\">
{% if object|keys|first==\"0\" %}
[
{% for subObject in object %}
{% set level = 0 %}
{%for i in 0..level %}    {% endfor %}{
{% set level = 1 %}
{%for i in 0..level %}    {% endfor %}\"@context\": \"http://schema.org\",
{% include 'json-ld/_json-ld_core' with {'object': subObject, 'level': level } only %}
{% set level = 0 %}
{%for i in 0..level %}    {% endfor %}}{% if not loop.last%},{% endif %}

{% endfor %}
]
{% else %}
{
{%for i in 0..level %}    {% endfor %}\"@context\": \"http://schema.org\",
{% include 'json-ld/_json-ld_core' with {'object': object, 'level': level } only %}
}
{% endif %}
</script>", "json-ld/_json-ld", "");
    }
}
