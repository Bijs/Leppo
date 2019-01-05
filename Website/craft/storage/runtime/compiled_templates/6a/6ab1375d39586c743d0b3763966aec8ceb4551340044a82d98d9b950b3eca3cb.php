<?php

/* _includes/forms/file */
class __TwigTemplate_ad83c95b6cc1767758a92b51bdf6446e499a643de3c047de462d3c2aca194095 extends Craft\BaseTemplate
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
        echo "<input type=\"file\"";
        // line 2
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 3
        if ((isset($context["class"]) || array_key_exists("class", $context))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
            echo "\"";
        }
        // line 4
        if ((isset($context["name"]) || array_key_exists("name", $context))) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 5
        if ((((isset($context["autofocus"]) || array_key_exists("autofocus", $context)) && ($context["autofocus"] ?? $this->getContext($context, "autofocus"))) &&  !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 6
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && ($context["disabled"] ?? $this->getContext($context, "disabled")))) {
            echo " disabled";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/file";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  39 => 5,  33 => 4,  27 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"file\"
\t{%- if id is defined %} id=\"{{ id }}\"{% endif %}
\t{%- if class is defined %} class=\"{{ class }}\"{% endif %}
\t{%- if name is defined %} name=\"{{ name }}\"{% endif %}
\t{%- if autofocus is defined and autofocus and not craft.request.isMobileBrowser(true) %} autofocus{% endif %}
\t{%- if disabled is defined and disabled %} disabled{% endif %}>
", "_includes/forms/file", "");
    }
}
