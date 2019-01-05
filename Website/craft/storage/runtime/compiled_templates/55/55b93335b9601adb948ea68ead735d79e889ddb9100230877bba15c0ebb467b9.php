<?php

/* expandedsingles/settings */
class __TwigTemplate_136c7edbbe08340aa22f9520c253536368635ee420668cf5d7728b528ef1fd70 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "expandedsingles/settings", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["forms"]->getlightswitchField(array("id" => "expandSingles", "name" => "expandSingles", "label" => \Craft\Craft::t("Expand Singles"), "on" => $this->getAttribute(        // line 7
($context["settings"] ?? $this->getContext($context, "settings")), "expandSingles", array()), "instructions" => \Craft\Craft::t("Expands the Singles link on the Entries page to list them like Channels and Structures.")));
        // line 9
        echo "

";
        // line 11
        echo $context["forms"]->getlightswitchField(array("id" => "redirectToEntry", "name" => "redirectToEntry", "label" => \Craft\Craft::t("Redirect to Entry"), "on" => $this->getAttribute(        // line 15
($context["settings"] ?? $this->getContext($context, "settings")), "redirectToEntry", array()), "instructions" => \Craft\Craft::t("Automatically redirects to edit the Single Entry when clicking on the item in the sidebar.")));
        // line 17
        echo "

<hr />

";
    }

    public function getTemplateName()
    {
        return "expandedsingles/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 17,  32 => 15,  31 => 11,  27 => 9,  25 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '_includes/forms' as forms %}

{{ forms.lightswitchField({
    id: 'expandSingles',
    name: 'expandSingles',
    label: 'Expand Singles'|t,
    on: settings.expandSingles,
    instructions: 'Expands the Singles link on the Entries page to list them like Channels and Structures.'|t
}) }}

{{ forms.lightswitchField({
    id: 'redirectToEntry',
    name: 'redirectToEntry',
    label: 'Redirect to Entry'|t,
    on: settings.redirectToEntry,
    instructions: 'Automatically redirects to edit the Single Entry when clicking on the item in the sidebar.'|t
}) }}

<hr />

", "expandedsingles/settings", "");
    }
}
