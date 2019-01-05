<?php

/* _includes/fields */
class __TwigTemplate_478c17ad3a85e6e0333c2ec9bf20e0e11d2cffdeb026fed983e717888317cde1 extends Craft\BaseTemplate
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
        if ( !(isset($context["element"]) || array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 2
        if ( !(isset($context["namespace"]) || array_key_exists("namespace", $context))) {
            $context["namespace"] = "fields";
        }
        // line 3
        echo "
";
        // line 4
        $_namespace = ($context["namespace"] ?? $this->getContext($context, "namespace"));
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 5
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 6
                    echo "\t\t";
                    $this->loadTemplate("_includes/field", "_includes/fields", 6)->display(array("field" => $this->getAttribute(                    // line 7
$context["field"], "getField", array(), "method"), "required" => $this->getAttribute(                    // line 8
$context["field"], "required", array()), "element" =>                     // line 9
($context["element"] ?? $this->getContext($context, "element")), "static" => ((                    // line 10
(isset($context["static"]) || array_key_exists("static", $context))) ? (($context["static"] ?? $this->getContext($context, "static"))) : (null))));
                    // line 12
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "\t\t";
                $this->loadTemplate("_includes/field", "_includes/fields", 6)->display(array("field" => $this->getAttribute(                // line 7
$context["field"], "getField", array(), "method"), "required" => $this->getAttribute(                // line 8
$context["field"], "required", array()), "element" =>                 // line 9
($context["element"] ?? $this->getContext($context, "element")), "static" => ((                // line 10
(isset($context["static"]) || array_key_exists("static", $context))) ? (($context["static"] ?? $this->getContext($context, "static"))) : (null))));
                // line 12
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        unset($_originalNamespace, $_namespace);
    }

    public function getTemplateName()
    {
        return "_includes/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  73 => 10,  72 => 9,  71 => 8,  70 => 7,  68 => 6,  63 => 5,  49 => 12,  47 => 10,  46 => 9,  45 => 8,  44 => 7,  42 => 6,  37 => 5,  30 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if element is not defined %}{% set element = null %}{% endif %}
{% if namespace is not defined %}{% set namespace = 'fields' %}{% endif %}

{% namespace namespace %}
\t{% for field in fields %}
\t\t{% include \"_includes/field\" with {
\t\t\tfield:    field.getField(),
\t\t\trequired: field.required,
\t\t\telement:  element,
\t\t\tstatic:   (static is defined ? static : null)
\t\t} only %}
\t{% endfor %}
{% endnamespace %}
", "_includes/fields", "");
    }
}
