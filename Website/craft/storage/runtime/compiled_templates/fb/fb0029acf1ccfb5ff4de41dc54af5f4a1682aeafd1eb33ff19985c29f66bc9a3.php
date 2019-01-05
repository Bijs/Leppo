<?php

/* _includes/previewbtns */
class __TwigTemplate_c2d0ec5fca6fca4e82cee6660feb6ec04f4ebc95e9a0b24844425e2ef6d83619 extends Craft\BaseTemplate
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
        if ((isset($context["shareUrl"]) || array_key_exists("shareUrl", $context))) {
            // line 2
            echo "\t<div class=\"btngroup big previewbtns\">
";
        }
        // line 4
        echo "
<div class=\"btn big livepreviewbtn\">
\t";
        // line 6
        echo twig_escape_filter($this->env, \Craft\Craft::t("Live Preview"), "html", null, true);
        echo "
\t<div class=\"spinner hidden\"></div>
</div>

";
        // line 10
        if ((isset($context["shareUrl"]) || array_key_exists("shareUrl", $context))) {
            // line 11
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, ($context["shareUrl"] ?? $this->getContext($context, "shareUrl")), "html", null, true);
            echo "\" class=\"btn big sharebtn\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Share"), "html", null, true);
            echo "\" target=\"_blank\"></a>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_includes/previewbtns";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  36 => 10,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if shareUrl is defined %}
\t<div class=\"btngroup big previewbtns\">
{% endif %}

<div class=\"btn big livepreviewbtn\">
\t{{ \"Live Preview\"|t }}
\t<div class=\"spinner hidden\"></div>
</div>

{% if shareUrl is defined %}
\t\t<a href=\"{{ shareUrl }}\" class=\"btn big sharebtn\" title=\"{{ 'Share'|t }}\" target=\"_blank\"></a>
\t</div>
{% endif %}
", "_includes/previewbtns", "");
    }
}
