<?php

/* _includes/cp-edit-link */
class __TwigTemplate_616e1c03abb01a68b6fed3d7657d98084fa5e29b18e6b1556604bb7c8c697385 extends Craft\BaseTemplate
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
        if ( !(null === ($context["currentUser"] ?? $this->getContext($context, "currentUser")))) {
            // line 2
            echo "\t";
            if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "accessCp"), "method")) {
                // line 3
                echo "\t\t";
                if ((isset($context["entry"]) || array_key_exists("entry", $context))) {
                    // line 4
                    echo "\t\t\t";
                    $context["cpEditUrl"] = $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getCpEditUrl", array(), "method");
                    // line 5
                    echo "\t\t\t
\t\t\t";
                    // line 11
                    echo "\t\t";
                }
                // line 12
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "_includes/cp-edit-link";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  33 => 11,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if currentUser is not null %}
\t{% if currentUser.can('accessCp') %}
\t\t{% if entry is defined %}
\t\t\t{% set cpEditUrl = entry.getCpEditUrl() %}
\t\t\t
\t\t\t{# <a href=\"{{ cpEditUrl }}\" target=\"_blank\">
\t\t\t\t<div class=\"cp-edit-url\">
\t\t\t\t\t<i class=\"fa fa-edit\"></i> &nbsp;bewerken
\t\t\t\t</div>
\t\t\t</a> #}
\t\t{% endif %}
\t{% endif %}
{% endif %}", "_includes/cp-edit-link", "");
    }
}
