<?php

/* contactform/_settings */
class __TwigTemplate_c8fd9af10f07a78fc7560801321b6c5515edcc7bec29fb18d3e2d5795a83b2d1 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "contactform/_settings", 1);
        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $context["__internal_b4dd93daa4761fdd5366864a61ba65b26d7a0369954a0794356045d170cb5567"] = $this;
        // line 10
        echo "
";
        // line 11
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("To Email"), "required" => true, "id" => "toEmail", "name" => "toEmail", "instructions" => \Craft\Craft::t("The email address(es) that the contact form will send to. Separate multiple email addresses with commas."), "value" => $this->getAttribute(        // line 18
($context["settings"] ?? $this->getContext($context, "settings")), "toEmail", array()), "autofocus" => true, "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 20
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "toEmail", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 21
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "toEmail", 1 => "contactform"), "method") === null)) ? ($context["__internal_b4dd93daa4761fdd5366864a61ba65b26d7a0369954a0794356045d170cb5567"]->getconfigWarning("toEmail")) : ("")), "errors" => $this->getAttribute(        // line 22
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "toEmail"), "method")));
        // line 23
        echo "

";
        // line 25
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Sender Text"), "id" => "prependSender", "name" => "prependSender", "instructions" => \Craft\Craft::t("Text that will be prepended to the email’s From Name to inform who the Contact Form actually was sent by."), "value" => (($this->getAttribute(        // line 30
($context["settings"] ?? $this->getContext($context, "settings")), "prependSender", array())) ? ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "prependSender", array())) : ("")), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 31
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "prependSender", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 32
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "prependSender", 1 => "contactform"), "method") === null)) ? ($context["__internal_b4dd93daa4761fdd5366864a61ba65b26d7a0369954a0794356045d170cb5567"]->getconfigWarning("prependSender")) : ("")), "errors" => $this->getAttribute(        // line 33
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "prependSender"), "method")));
        // line 34
        echo "

";
        // line 36
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Subject Text"), "id" => "prependSubject", "name" => "prependSubject", "instructions" => \Craft\Craft::t("Text that will be prepended to the email’s Subject to flag that it comes from the Contact Form."), "value" => (($this->getAttribute(        // line 41
($context["settings"] ?? $this->getContext($context, "settings")), "prependSubject", array())) ? ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "prependSubject", array())) : ("")), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 42
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "prependSubject", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 43
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "prependSubject", 1 => "contactform"), "method") === null)) ? ($context["__internal_b4dd93daa4761fdd5366864a61ba65b26d7a0369954a0794356045d170cb5567"]->getconfigWarning("prependSubject")) : ("")), "errors" => $this->getAttribute(        // line 44
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "prependSubject"), "method")));
        // line 45
        echo "

";
        // line 47
        echo $context["forms"]->getlightswitchField(array("label" => \Craft\Craft::t("Allow attachments?"), "id" => "allowAttachments", "name" => "allowAttachments", "on" => $this->getAttribute(        // line 51
($context["settings"] ?? $this->getContext($context, "settings")), "allowAttachments", array()), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 52
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "allowAttachments", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 53
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "allowAttachments", 1 => "contactform"), "method") === null)) ? ($context["__internal_b4dd93daa4761fdd5366864a61ba65b26d7a0369954a0794356045d170cb5567"]->getconfigWarning("allowAttachments")) : ("")), "errors" => $this->getAttribute(        // line 54
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "allowAttachments"), "method")));
        // line 55
        echo "

";
        // line 57
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Honeypot Field"), "id" => "honeypotField", "name" => "honeypotField", "instructions" => \Craft\Craft::t("The name of the 'honeypot' field in your Contact Form."), "value" => $this->getAttribute(        // line 62
($context["settings"] ?? $this->getContext($context, "settings")), "honeypotField", array()), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 63
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "honeypotField", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 64
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "honeypotField", 1 => "contactform"), "method") === null)) ? ($context["__internal_b4dd93daa4761fdd5366864a61ba65b26d7a0369954a0794356045d170cb5567"]->getconfigWarning("honeypotField")) : ("")), "errors" => $this->getAttribute(        // line 65
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "honeypotField"), "method")));
        // line 66
        echo "

";
        // line 68
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Success Flash Message"), "id" => "successFlashMessage", "name" => "successFlashMessage", "instructions" => \Craft\Craft::t("The flash message displayed after successfully sending a message."), "value" => $this->getAttribute(        // line 73
($context["settings"] ?? $this->getContext($context, "settings")), "successFlashMessage", array()), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 74
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "successFlashMessage", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 75
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "get", array(0 => "successFlashMessage", 1 => "contactform"), "method") === null)) ? ($context["__internal_b4dd93daa4761fdd5366864a61ba65b26d7a0369954a0794356045d170cb5567"]->getconfigWarning("successFlashMessage")) : ("")), "errors" => $this->getAttribute(        // line 76
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "successFlashMessage"), "method")));
        // line 77
        echo "
";
    }

    // line 3
    public function getconfigWarning($__setting__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "setting" => $__setting__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo \Craft\Craft::t("This is being overridden by the {setting} config setting in your contactform.php config file.", array("setting" =>             // line 5
($context["setting"] ?? $this->getContext($context, "setting"))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "contactform/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 5,  105 => 4,  93 => 3,  88 => 77,  86 => 76,  85 => 75,  84 => 74,  83 => 73,  82 => 68,  78 => 66,  76 => 65,  75 => 64,  74 => 63,  73 => 62,  72 => 57,  68 => 55,  66 => 54,  65 => 53,  64 => 52,  63 => 51,  62 => 47,  58 => 45,  56 => 44,  55 => 43,  54 => 42,  53 => 41,  52 => 36,  48 => 34,  46 => 33,  45 => 32,  44 => 31,  43 => 30,  42 => 25,  38 => 23,  36 => 22,  35 => 21,  34 => 20,  33 => 18,  32 => 11,  29 => 10,  27 => 9,  24 => 8,  21 => 2,  19 => 1,);
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

{% macro configWarning(setting) -%}
\t{{ \"This is being overridden by the {setting} config setting in your contactform.php config file.\"|t({
\t\tsetting: setting
\t})|raw }}
{%- endmacro %}

{% from _self import configWarning %}

{{ forms.textField({
\tfirst:        true,
\tlabel:        \"To Email\"|t,
\trequired:     true,
\tid:           'toEmail',
\tname:         'toEmail',
\tinstructions: \"The email address(es) that the contact form will send to. Separate multiple email addresses with commas.\"|t,
\tvalue:        settings.toEmail,
\tautofocus:    true,
\tdisabled:     (craft.config.get('toEmail', 'contactform') is not sameas(null)),
\twarning:      (craft.config.get('toEmail', 'contactform') is not sameas(null)) ? configWarning('toEmail'),
\terrors:       settings.getErrors('toEmail')
}) }}

{{ forms.textField({
\tlabel:        \"Sender Text\"|t,
\tid:           'prependSender',
\tname:         'prependSender',
\tinstructions: \"Text that will be prepended to the email’s From Name to inform who the Contact Form actually was sent by.\"|t,
\tvalue:        (settings.prependSender ? settings.prependSender : \"\"),
\tdisabled:     (craft.config.get('prependSender', 'contactform') is not sameas(null)),
\twarning:      (craft.config.get('prependSender', 'contactform') is not sameas(null)) ? configWarning('prependSender'),
\terrors:       settings.getErrors('prependSender')
}) }}

{{ forms.textField({
\tlabel:        \"Subject Text\"|t,
\tid:           'prependSubject',
\tname:         'prependSubject',
\tinstructions: \"Text that will be prepended to the email’s Subject to flag that it comes from the Contact Form.\"|t,
\tvalue:        (settings.prependSubject ? settings.prependSubject : \"\"),
\tdisabled:     (craft.config.get('prependSubject', 'contactform') is not sameas(null)),
\twarning:      (craft.config.get('prependSubject', 'contactform') is not sameas(null)) ? configWarning('prependSubject'),
\terrors:       settings.getErrors('prependSubject')
}) }}

{{ forms.lightswitchField({
\tlabel:        \"Allow attachments?\"|t,
\tid:           'allowAttachments',
\tname:         'allowAttachments',
\ton:           settings.allowAttachments,
\tdisabled:     (craft.config.get('allowAttachments', 'contactform') is not sameas(null)),
\twarning:      (craft.config.get('allowAttachments', 'contactform') is not sameas(null)) ? configWarning('allowAttachments'),
\terrors:       settings.getErrors('allowAttachments')
}) }}

{{ forms.textField({
\tlabel:        \"Honeypot Field\"|t,
\tid:           'honeypotField',
\tname:         'honeypotField',
\tinstructions: \"The name of the 'honeypot' field in your Contact Form.\"|t,
\tvalue:        settings.honeypotField,
\tdisabled:     (craft.config.get('honeypotField', 'contactform') is not sameas(null)),
\twarning:      (craft.config.get('honeypotField', 'contactform') is not sameas(null)) ? configWarning('honeypotField'),
\terrors:       settings.getErrors('honeypotField')
}) }}

{{ forms.textField({
\tlabel:        \"Success Flash Message\"|t,
\tid:           \"successFlashMessage\",
\tname:         \"successFlashMessage\",
\tinstructions: \"The flash message displayed after successfully sending a message.\"|t,
\tvalue:        settings.successFlashMessage,
\tdisabled:     (craft.config.get('successFlashMessage', 'contactform') is not sameas(null)),
\twarning:      (craft.config.get('successFlashMessage', 'contactform') is not sameas(null)) ? configWarning('successFlashMessage'),
\terrors:       settings.getErrors('successFlashMessage')
}) }}
", "contactform/_settings", "");
    }
}
