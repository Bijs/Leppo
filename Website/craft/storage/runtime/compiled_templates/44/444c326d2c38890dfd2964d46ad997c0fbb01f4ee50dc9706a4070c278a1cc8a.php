<?php

/* _components/elementactions/SetStatus/trigger */
class __TwigTemplate_6e39d2564f7d38fac999b1b2e4762d82a6d0d9e605db3e49629c561824cf9b6a extends Craft\BaseTemplate
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
        echo "<div class=\"btn menubtn\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Set status"), "html", null, true);
        echo "</div>
<div class=\"menu\">
\t<ul>
\t\t<li><a class=\"formsubmit\" data-param=\"status\" data-value=\"enabled\"><span class=\"status enabled\"></span> ";
        // line 4
        echo twig_escape_filter($this->env, \Craft\Craft::t("Enabled"), "html", null, true);
        echo "</a></li>
\t\t<li><a class=\"formsubmit\" data-param=\"status\" data-value=\"disabled\"><span class=\"status disabled\"></span> ";
        // line 5
        echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
        echo "</a></li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/elementactions/SetStatus/trigger";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"btn menubtn\">{{ \"Set status\"|t }}</div>
<div class=\"menu\">
\t<ul>
\t\t<li><a class=\"formsubmit\" data-param=\"status\" data-value=\"enabled\"><span class=\"status enabled\"></span> {{ \"Enabled\"|t }}</a></li>
\t\t<li><a class=\"formsubmit\" data-param=\"status\" data-value=\"disabled\"><span class=\"status disabled\"></span> {{ \"Disabled\"|t }}</a></li>
\t</ul>
</div>
", "_components/elementactions/SetStatus/trigger", "");
    }
}
