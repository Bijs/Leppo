<?php

/* _components/widgets/Feed/settings */
class __TwigTemplate_481830886e25e8c3b01a4fc3a71ccd17a08925c0c6cddae5b2b1d11f22690509 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/Feed/settings", 1);
        // line 2
        echo "

";
        // line 4
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("URL"), "id" => "url", "name" => "url", "value" => $this->getAttribute(        // line 8
($context["settings"] ?? $this->getContext($context, "settings")), "url", array()), "required" => true, "errors" => $this->getAttribute(        // line 10
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "url"), "method")));
        // line 11
        echo "


";
        // line 14
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Title"), "id" => "title", "name" => "title", "value" => $this->getAttribute(        // line 18
($context["settings"] ?? $this->getContext($context, "settings")), "title", array()), "required" => true, "errors" => $this->getAttribute(        // line 20
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "title"), "method")));
        // line 21
        echo "


";
        // line 24
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "id" => "limit", "name" => "limit", "value" => $this->getAttribute(        // line 28
($context["settings"] ?? $this->getContext($context, "settings")), "limit", array()), "size" => 2, "errors" => $this->getAttribute(        // line 30
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "limit"), "method")));
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/Feed/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 31,  45 => 30,  44 => 28,  43 => 24,  38 => 21,  36 => 20,  35 => 18,  34 => 14,  29 => 11,  27 => 10,  26 => 8,  25 => 4,  21 => 2,  19 => 1,);
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


{{ forms.textField({
\tlabel: \"URL\"|t,
\tid: 'url',
\tname: 'url',
\tvalue: settings.url,
\trequired: true,
\terrors: settings.getErrors('url')
}) }}


{{ forms.textField({
\tlabel: \"Title\"|t,
\tid: 'title',
\tname: 'title',
\tvalue: settings.title,
\trequired: true,
\terrors: settings.getErrors('title')
}) }}


{{ forms.textField({
\tlabel: \"Limit\"|t,
\tid: 'limit',
\tname: 'limit',
\tvalue: settings.limit,
\tsize: 2,
\terrors: settings.getErrors('limit')
}) }}
", "_components/widgets/Feed/settings", "");
    }
}
