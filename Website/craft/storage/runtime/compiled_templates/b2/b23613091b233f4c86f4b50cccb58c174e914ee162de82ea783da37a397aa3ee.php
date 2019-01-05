<?php

/* commerce/settings/general */
class __TwigTemplate_f8a4d6ee87d58a21788effc4f5b7961621cb2f17d31accd19705edaf7a118ed4 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("commerce/_layouts/settings", "commerce/settings/general", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "commerce/_layouts/settings";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["selectedTab"] = "settings";
        // line 5
        $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/settings/general", 5);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h2>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("General Settings"), "html", null, true);
        echo "</h2>

    <form action=\"\" method=\"post\" accept-charset=\"UTF-8\">
        <input type=\"hidden\" name=\"action\" value=\"commerce/settings/saveSettings\">
        <input type=\"hidden\" name=\"redirect\" value=\"commerce/settings\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->getCsrfInputFunction(), "html", null, true);
        echo "

        ";
        // line 15
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Status Email Address"), "instructions" => \Craft\Craft::t("The email address that order status emails are sent from. Leave blank to use the System Email Address defined in Craft’s General Settings."), "id" => "emailSenderAddress", "name" => "settings[emailSenderAddress]", "placeholder" => $this->getAttribute(        // line 20
($context["settings"] ?? $this->getContext($context, "settings")), "emailSenderAddressPlaceholder", array()), "value" => $this->getAttribute(        // line 21
($context["settings"] ?? $this->getContext($context, "settings")), "emailSenderAddress", array()), "errors" => $this->getAttribute(        // line 22
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "emailSenderAddress"), "method")));
        // line 23
        echo "

        ";
        // line 25
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("From Name"), "instructions" => \Craft\Craft::t("The \"From\" name that will be used when sending order status emails. Leave blank to use the Sender Name defined in Craft’s General Settings."), "id" => "emailSenderName", "name" => "settings[emailSenderName]", "placeholder" => $this->getAttribute(        // line 30
($context["settings"] ?? $this->getContext($context, "settings")), "emailSenderNamePlaceholder", array()), "value" => $this->getAttribute(        // line 31
($context["settings"] ?? $this->getContext($context, "settings")), "emailSenderName", array()), "errors" => $this->getAttribute(        // line 32
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "emailSenderName"), "method")));
        // line 33
        echo "

        ";
        // line 35
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Weight Unit"), "instructions" => \Craft\Craft::t("The unit of measurement that should be used when specifying product weights."), "name" => "settings[weightUnits]", "value" => $this->getAttribute(        // line 39
($context["settings"] ?? $this->getContext($context, "settings")), "weightUnits", array()), "options" => $this->getAttribute(        // line 40
($context["settings"] ?? $this->getContext($context, "settings")), "getWeightUnitsOptions", array(), "method"), "errors" => $this->getAttribute(        // line 41
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "weightUnits"), "method"), "required" => true));
        // line 43
        echo "

        ";
        // line 45
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Dimension Unit"), "instructions" => \Craft\Craft::t("The unit of measurement that should be used when specifying product dimensions."), "name" => "settings[dimensionUnits]", "value" => $this->getAttribute(        // line 49
($context["settings"] ?? $this->getContext($context, "settings")), "dimensionUnits", array()), "options" => $this->getAttribute(        // line 50
($context["settings"] ?? $this->getContext($context, "settings")), "getDimensionUnits", array(), "method"), "errors" => $this->getAttribute(        // line 51
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "dimensionUnits"), "method"), "required" => true));
        // line 53
        echo "

        ";
        // line 55
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Order PDF Template"), "instructions" => \Craft\Craft::t("The path to the template used for generating order PDFs."), "id" => "orderPdfPath", "name" => "settings[orderPdfPath]", "value" => $this->getAttribute(        // line 60
($context["settings"] ?? $this->getContext($context, "settings")), "orderPdfPath", array()), "errors" => $this->getAttribute(        // line 61
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "orderPdfPath"), "method"), "required" => true));
        // line 63
        echo "

        ";
        // line 65
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Order PDF Filename Format"), "instructions" => \Craft\Craft::t("What the order PDF filenames should look like (sans extension). You can include tags that output order properties, such as {ex1} or {ex2}.", array("ex1" => "<code>{number}</code>", "ex2" => "<code>{myOrderCustomField}</code>")), "id" => "orderPdfFilenameFormat", "name" => "settings[orderPdfFilenameFormat]", "value" => $this->getAttribute(        // line 73
($context["settings"] ?? $this->getContext($context, "settings")), "orderPdfFilenameFormat", array()), "class" => "code ltr", "errors" => $this->getAttribute(        // line 75
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "orderPdfFilenameFormat"), "method"), "required" => true));
        // line 77
        echo "

        <input type=\"submit\" class=\"btn submit\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "commerce/settings/general";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 79,  98 => 77,  96 => 75,  95 => 73,  94 => 65,  90 => 63,  88 => 61,  87 => 60,  86 => 55,  82 => 53,  80 => 51,  79 => 50,  78 => 49,  77 => 45,  73 => 43,  71 => 41,  70 => 40,  69 => 39,  68 => 35,  64 => 33,  62 => 32,  61 => 31,  60 => 30,  59 => 25,  55 => 23,  53 => 22,  52 => 21,  51 => 20,  50 => 15,  45 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"commerce/_layouts/settings\" %}

{% set selectedTab = 'settings' %}

{% import \"_includes/forms\" as forms %}

{% block content %}
    <h2>{{ \"General Settings\"|t }}</h2>

    <form action=\"\" method=\"post\" accept-charset=\"UTF-8\">
        <input type=\"hidden\" name=\"action\" value=\"commerce/settings/saveSettings\">
        <input type=\"hidden\" name=\"redirect\" value=\"commerce/settings\">
        {{ getCsrfInput() }}

        {{ forms.textField({
            label: 'Status Email Address'|t,
            instructions: \"The email address that order status emails are sent from. Leave blank to use the System Email Address defined in Craft’s General Settings.\"|t,
            id: 'emailSenderAddress',
            name: 'settings[emailSenderAddress]',
            placeholder: settings.emailSenderAddressPlaceholder,
            value: settings.emailSenderAddress,
            errors: settings.getErrors('emailSenderAddress'),
        }) }}

        {{ forms.textField({
            label: 'From Name'|t,
            instructions: 'The \"From\" name that will be used when sending order status emails. Leave blank to use the Sender Name defined in Craft’s General Settings.'|t,
            id: 'emailSenderName',
            name: 'settings[emailSenderName]',
            placeholder: settings.emailSenderNamePlaceholder,
            value: settings.emailSenderName,
            errors: settings.getErrors('emailSenderName'),
        }) }}

        {{ forms.selectField({
            label: \"Weight Unit\"|t,
            instructions: \"The unit of measurement that should be used when specifying product weights.\"|t,
            name: 'settings[weightUnits]',
            value: settings.weightUnits,
            options: settings.getWeightUnitsOptions(),
            errors: settings.getErrors('weightUnits'),
            required: true,
        }) }}

        {{ forms.selectField({
            label: \"Dimension Unit\"|t,
            instructions: \"The unit of measurement that should be used when specifying product dimensions.\"|t,
            name: 'settings[dimensionUnits]',
            value: settings.dimensionUnits,
            options: settings.getDimensionUnits(),
            errors: settings.getErrors('dimensionUnits'),
            required: true,
        }) }}

        {{ forms.textField({
            label: \"Order PDF Template\"|t,
            instructions: \"The path to the template used for generating order PDFs.\"|t,
            id: 'orderPdfPath',
            name: 'settings[orderPdfPath]',
            value: settings.orderPdfPath,
            errors: settings.getErrors('orderPdfPath'),
            required: true,
        }) }}

        {{ forms.textField({
            label: \"Order PDF Filename Format\"|t,
            instructions: \"What the order PDF filenames should look like (sans extension). You can include tags that output order properties, such as {ex1} or {ex2}.\"|t({
                ex1: '<code>{number}</code>',
                ex2: '<code>{myOrderCustomField}</code>'
            }),
            id: 'orderPdfFilenameFormat',
            name: 'settings[orderPdfFilenameFormat]',
            value: settings.orderPdfFilenameFormat,
            class: 'code ltr',
            errors: settings.getErrors('orderPdfFilenameFormat'),
            required: true,
        }) }}

        <input type=\"submit\" class=\"btn submit\" value=\"{{ \"Save\"|t }}\">
    </form>

{% endblock %}
", "commerce/settings/general", "");
    }
}
