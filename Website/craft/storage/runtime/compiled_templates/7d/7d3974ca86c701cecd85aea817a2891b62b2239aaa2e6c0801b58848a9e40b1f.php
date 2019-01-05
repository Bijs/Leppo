<?php

/* json-ld/_json-ld_core */
class __TwigTemplate_212a9b70c7edd4cb3689358ebea22b08112e4d9c0d1a890c7aa409c04719d3f2 extends Craft\BaseTemplate
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
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 2
            if (twig_test_iterable($context["value"])) {
                if ((twig_first($this->env, twig_get_array_keys_filter($context["value"])) == "0")) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["level"] ?? $this->getContext($context, "level"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo "    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"";
                    echo $context["key"];
                    echo "\": [";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["subValue"]) {
                        if (twig_test_iterable($context["subValue"])) {
                            // line 3
                            echo "
";
                            // line 4
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, (($context["level"] ?? $this->getContext($context, "level")) + 1)));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                echo "    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo "{
";
                            // line 5
                            $this->loadTemplate("json-ld/_json-ld_core", "json-ld/_json-ld_core", 5)->display(array("object" => $context["subValue"], "level" => (($context["level"] ?? $this->getContext($context, "level")) + 2)));
                            // line 6
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, (($context["level"] ?? $this->getContext($context, "level")) + 1)));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                echo "    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo "}";
                            if ( !$this->getAttribute($context["loop"], "last", array())) {
                                echo ",";
                            } else {
                                // line 7
                                echo "
";
                                // line 8
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(range(0, ($context["level"] ?? $this->getContext($context, "level"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                    echo "    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                            }
                        } else {
                            // line 9
                            echo "\"";
                            echo $context["subValue"];
                            echo "\"";
                            if ( !$this->getAttribute($context["loop"], "last", array())) {
                                echo ",";
                            }
                        }
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "]";
                } else {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["level"] ?? $this->getContext($context, "level"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo "    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"";
                    echo $context["key"];
                    echo "\": {
";
                    // line 10
                    $this->loadTemplate("json-ld/_json-ld_core", "json-ld/_json-ld_core", 10)->display(array("object" => $context["value"], "level" => (($context["level"] ?? $this->getContext($context, "level")) + 1)));
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($context["level"] ?? $this->getContext($context, "level"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo "    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "}";
                }
            } else {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ($context["level"] ?? $this->getContext($context, "level"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"";
                if (($context["key"] == "type")) {
                    echo "@";
                }
                echo $context["key"];
                echo "\": \"";
                echo $context["value"];
                echo "\"";
            }
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",
";
            } else {
                // line 11
                echo " 
";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "json-ld/_json-ld_core";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 11,  144 => 10,  110 => 9,  99 => 8,  96 => 7,  83 => 6,  81 => 5,  70 => 4,  67 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for key,value in object %}
{% if value is iterable %}{% if value|keys|first==\"0\" %}{%for i in 0..level %}    {% endfor %}\"{{ key |raw }}\": [{% for subValue in value %}{% if subValue is iterable %}

{%for i in 0..level+1 %}    {% endfor %}{
{% include 'json-ld/_json-ld_core' with {'object': subValue, 'level': (level + 2) } only %}
{%for i in 0..level+1 %}    {% endfor %}}{% if not loop.last%},{% else %}

{%for i in 0..level %}    {% endfor %}
{% endif %}{% else %}\"{{ subValue |raw }}\"{% if not loop.last%},{% endif %}{% endif %}{% endfor %}]{% else %}{%for i in 0..level %}    {% endfor %}\"{{ key |raw }}\": {
{% include 'json-ld/_json-ld_core' with {'object': value, 'level': (level + 1) } only %}{%for i in 0..level %}    {% endfor %}}{% endif %}{% else %}{%for i in 0..level %}    {% endfor %}\"{% if key == \"type\" %}@{% endif %}{{ key |raw }}\": \"{{ value |raw }}\"{% endif %}{% if not loop.last %},
{% else %} 
{% endif %}
{% endfor %}", "json-ld/_json-ld_core", "");
    }
}
