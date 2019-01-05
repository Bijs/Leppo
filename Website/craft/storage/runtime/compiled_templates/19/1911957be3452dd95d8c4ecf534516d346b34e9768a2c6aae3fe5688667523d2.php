<?php

/* commerce/_components/widgets/Revenue/settings */
class __TwigTemplate_f068ef48026f23e9a1c346ef7dbb60bc687c85ee5202ec87c7a646b7e033cc28 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/_components/widgets/Revenue/settings", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Date Range"), "id" => "dateRange", "name" => "dateRange", "value" => $this->getAttribute(        // line 7
($context["settings"] ?? $this->getContext($context, "settings")), "dateRange", array()), "options" =>         // line 8
($context["dateRangeOptions"] ?? $this->getContext($context, "dateRangeOptions")), "errors" => $this->getAttribute(        // line 9
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "dateRange"), "method")));
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "commerce/_components/widgets/Revenue/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  27 => 9,  26 => 8,  25 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"_includes/forms\" as forms %}

{{ forms.selectField({
    label: \"Date Range\"|t,
    id: 'dateRange',
    name: 'dateRange',
    value: settings.dateRange,
    options: dateRangeOptions,
    errors: settings.getErrors('dateRange')
}) }}
", "commerce/_components/widgets/Revenue/settings", "");
    }
}
