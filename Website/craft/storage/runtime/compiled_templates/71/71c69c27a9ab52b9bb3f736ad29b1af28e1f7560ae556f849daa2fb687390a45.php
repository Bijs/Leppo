<?php

/* _components/widgets/CraftSupport/body */
class __TwigTemplate_98b1495ab7f823c256af8a5f5d1273308cb4db528ccfceaa385d30eedd8f2551 extends Craft\BaseTemplate
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
        // line 75
        echo "
";
        // line 76
        $context["__internal_645629e711442e6e30d06585357874ddca0ee8fab43f5ec3b78a1da0498b234a"] = $this;
        // line 77
        echo "

<div class=\"cs-screen cs-screen-home\">
    <div class=\"cs-opt\" data-screen=\"help\">
        <div class=\"cs-opt-icon\">";
        // line 81
        echo ($context["buoeyIcon"] ?? $this->getContext($context, "buoeyIcon"));
        echo "</div>
        <h2>";
        // line 82
        echo twig_escape_filter($this->env, \Craft\Craft::t("Get help"), "html", null, true);
        echo "</h2>
        <p>";
        // line 83
        echo twig_escape_filter($this->env, \Craft\Craft::t("How-to’s and other questions"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"cs-opt\" data-screen=\"feedback\">
        <div class=\"cs-opt-icon\">";
        // line 86
        echo ($context["bullhornIcon"] ?? $this->getContext($context, "bullhornIcon"));
        echo "</div>
        <h2>";
        // line 87
        echo twig_escape_filter($this->env, \Craft\Craft::t("Give feedback"), "html", null, true);
        echo "</h2>
        <p>";
        // line 88
        echo twig_escape_filter($this->env, \Craft\Craft::t("Bug reports and feature requests"), "html", null, true);
        echo "</p>
    </div>
</div>

";
        // line 92
        echo $context["__internal_645629e711442e6e30d06585357874ddca0ee8fab43f5ec3b78a1da0498b234a"]->getscreen(($context["widgetId"] ?? $this->getContext($context, "widgetId")), "help", \Craft\Craft::t("Briefly describe your question."), ($context["seIcon"] ?? $this->getContext($context, "seIcon")), \Craft\Craft::t("Similar questions on Stack Exchange"), "https://craftcms.stackexchange.com/questions/ask", \Craft\Craft::t("Ask on Stack Exchange"));
        echo "

";
        // line 94
        echo $context["__internal_645629e711442e6e30d06585357874ddca0ee8fab43f5ec3b78a1da0498b234a"]->getscreen(($context["widgetId"] ?? $this->getContext($context, "widgetId")), "feedback", \Craft\Craft::t("Briefly describe your issue or idea."), ($context["ghIcon"] ?? $this->getContext($context, "ghIcon")), \Craft\Craft::t("Similar issues on GitHub"), "https://github.com/craftcms/cms/issues/new", \Craft\Craft::t("Post on GitHub"));
        echo "
";
    }

    // line 1
    public function getscreen($__widgetId__ = null, $__screen__ = null, $__placeholder__ = null, $__resultsIcon__ = null, $__resultsHeading__ = null, $__formAction__ = null, $__submitText__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widgetId" => $__widgetId__,
            "screen" => $__screen__,
            "placeholder" => $__placeholder__,
            "resultsIcon" => $__resultsIcon__,
            "resultsHeading" => $__resultsHeading__,
            "formAction" => $__formAction__,
            "submitText" => $__submitText__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/CraftSupport/body", 2);
            // line 3
            echo "    ";
            $context["idPrefix"] = (("cs-" . ($context["screen"] ?? $this->getContext($context, "screen"))) . twig_random($this->env));
            // line 4
            echo "
    <div class=\"cs-screen cs-screen-2 cs-screen-";
            // line 5
            echo twig_escape_filter($this->env, ($context["screen"] ?? $this->getContext($context, "screen")), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, ($context["formAction"] ?? $this->getContext($context, "formAction")), "html", null, true);
            echo "\" method=\"get\" target=\"_blank\">
        ";
            // line 6
            echo $context["forms"]->gettextareaField(array("first" => true, "class" => "cs-body-text", "placeholder" => \Craft\Craft::t(            // line 9
($context["placeholder"] ?? $this->getContext($context, "placeholder"))), "rows" => 5));
            // line 11
            echo "
        <div class=\"cs-search-results-container hidden\">
            <div class=\"cs-search-icon\">";
            // line 13
            echo ($context["resultsIcon"] ?? $this->getContext($context, "resultsIcon"));
            echo "</div>
            <h2>";
            // line 14
            echo twig_escape_filter($this->env, ($context["resultsHeading"] ?? $this->getContext($context, "resultsHeading")), "html", null, true);
            echo "</h2>
            <ul class=\"cs-search-results\"></ul>
        </div>
        <div class=\"cs-forms\">
            <form class=\"cs-search-form\" action=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["formAction"] ?? $this->getContext($context, "formAction")), "html", null, true);
            echo "\" method=\"get\" target=\"_blank\">
                <div class=\"cs-search-params\"></div>
                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["submitText"] ?? $this->getContext($context, "submitText")), "html", null, true);
            echo "\">
                <p>";
            // line 21
            echo \Craft\Craft::t("or <a>send to Craft Support</a>");
            echo "</p>
            </form>
            <form class=\"cs-support-form hidden\" action=\"";
            // line 23
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getActionUrl("dashboard/sendSupportRequest"), "html", null, true);
            echo "\" method=\"post\" target=\"";
            echo twig_escape_filter($this->env, ($context["idPrefix"] ?? $this->getContext($context, "idPrefix")), "html", null, true);
            echo "-iframe\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->getCsrfInputFunction(), "html", null, true);
            echo "
                <input type=\"hidden\" name=\"widgetId\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["widgetId"] ?? $this->getContext($context, "widgetId")), "html", null, true);
            echo "\">
                <input class=\"cs-support-message\" type=\"hidden\" name=\"message\" value=\"\">

                ";
            // line 28
            $context["email"] = $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "email", array());
            // line 29
            echo "                ";
            if (twig_in_filter(($context["email"] ?? $this->getContext($context, "email")), array(0 => "support@pixelandtonic.com", 1 => "support@craftcms.com"))) {
                // line 30
                echo "                    ";
                $context["email"] = "";
                // line 31
                echo "                ";
            }
            // line 32
            echo "
                ";
            // line 33
            echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Your Email"), "name" => "fromEmail", "value" =>             // line 37
($context["email"] ?? $this->getContext($context, "email"))));
            // line 38
            echo "

                <a class=\"fieldtoggle\" data-target=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["idPrefix"] ?? $this->getContext($context, "idPrefix")), "html", null, true);
            echo "-support-more\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("More"), "html", null, true);
            echo "</a>

                <div id=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["idPrefix"] ?? $this->getContext($context, "idPrefix")), "html", null, true);
            echo "-support-more\" class=\"cs-support-more hidden\">
                    ";
            // line 43
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Attach error logs?"), "name" => "attachLogs", "checked" => true));
            // line 47
            echo "

                    ";
            // line 49
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Attach a database backup?"), "name" => "attachDbBackup", "checked" => $this->getAttribute($this->getAttribute(            // line 52
($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "backupDbOnUpdate", array())));
            // line 53
            echo "

                    ";
            // line 55
            echo $context["forms"]->getcheckboxField(array("name" => "attachTemplates", "checked" => true, "label" => \Craft\Craft::t("Include your template files?")));
            // line 59
            echo "

                    ";
            // line 61
            echo $context["forms"]->getfileField(array("label" => \Craft\Craft::t("Attach an additional file?"), "class" => "cs-support-attachment", "name" => "attachAdditionalFile"));
            // line 65
            echo "
                </div>

                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, \Craft\Craft::t("Send"), "html", null, true);
            echo "\">
                <div class=\"spinner hidden\"></div>
            </form>
        </div>
        <iframe id=\"";
            // line 72
            echo twig_escape_filter($this->env, ($context["idPrefix"] ?? $this->getContext($context, "idPrefix")), "html", null, true);
            echo "-iframe\" name=\"";
            echo twig_escape_filter($this->env, ($context["idPrefix"] ?? $this->getContext($context, "idPrefix")), "html", null, true);
            echo "-iframe\" class=\"hidden\"></iframe>
    </div>
";
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
        return "_components/widgets/CraftSupport/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 72,  209 => 68,  204 => 65,  202 => 61,  198 => 59,  196 => 55,  192 => 53,  190 => 52,  189 => 49,  185 => 47,  183 => 43,  179 => 42,  172 => 40,  168 => 38,  166 => 37,  165 => 33,  162 => 32,  159 => 31,  156 => 30,  153 => 29,  151 => 28,  145 => 25,  141 => 24,  135 => 23,  130 => 21,  126 => 20,  121 => 18,  114 => 14,  110 => 13,  106 => 11,  104 => 9,  103 => 6,  97 => 5,  94 => 4,  91 => 3,  88 => 2,  70 => 1,  64 => 94,  59 => 92,  52 => 88,  48 => 87,  44 => 86,  38 => 83,  34 => 82,  30 => 81,  24 => 77,  22 => 76,  19 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro screen(widgetId, screen, placeholder, resultsIcon, resultsHeading, formAction, submitText) %}
    {% import \"_includes/forms\" as forms %}
    {% set idPrefix = 'cs-'~screen~random() %}

    <div class=\"cs-screen cs-screen-2 cs-screen-{{ screen }}\" action=\"{{ formAction }}\" method=\"get\" target=\"_blank\">
        {{ forms.textareaField({
            first: true,
            class: 'cs-body-text',
            placeholder: placeholder|t,
            rows: 5
        }) }}
        <div class=\"cs-search-results-container hidden\">
            <div class=\"cs-search-icon\">{{ resultsIcon|raw }}</div>
            <h2>{{ resultsHeading }}</h2>
            <ul class=\"cs-search-results\"></ul>
        </div>
        <div class=\"cs-forms\">
            <form class=\"cs-search-form\" action=\"{{ formAction }}\" method=\"get\" target=\"_blank\">
                <div class=\"cs-search-params\"></div>
                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"{{ submitText }}\">
                <p>{{ \"or <a>send to Craft Support</a>\"|t|raw }}</p>
            </form>
            <form class=\"cs-support-form hidden\" action=\"{{ actionUrl('dashboard/sendSupportRequest') }}\" method=\"post\" target=\"{{ idPrefix }}-iframe\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
                {{ getCsrfInput() }}
                <input type=\"hidden\" name=\"widgetId\" value=\"{{ widgetId }}\">
                <input class=\"cs-support-message\" type=\"hidden\" name=\"message\" value=\"\">

                {% set email = currentUser.email %}
                {% if email in ['support@pixelandtonic.com', 'support@craftcms.com'] %}
                    {% set email = '' %}
                {% endif %}

                {{ forms.textField({
                    first: true,
                    label: \"Your Email\"|t,
                    name: 'fromEmail',
                    value: email
                }) }}

                <a class=\"fieldtoggle\" data-target=\"{{ idPrefix }}-support-more\">{{ \"More\"|t }}</a>

                <div id=\"{{ idPrefix }}-support-more\" class=\"cs-support-more hidden\">
                    {{ forms.checkboxField({
                        label: \"Attach error logs?\"|t,
                        name: 'attachLogs',
                        checked: true
                    }) }}

                    {{ forms.checkboxField({
                        label: \"Attach a database backup?\"|t,
                        name: 'attachDbBackup',
                        checked: craft.config.backupDbOnUpdate,
                    }) }}

                    {{ forms.checkboxField({
                        name: 'attachTemplates',
                        checked: true,
                        label: \"Include your template files?\"|t,
                    }) }}

                    {{ forms.fileField({
                        label: \"Attach an additional file?\"|t,
                        class: 'cs-support-attachment',
                        name: 'attachAdditionalFile',
                    }) }}
                </div>

                <input type=\"submit\" class=\"btn submit fullwidth disabled\" value=\"{{ 'Send'|t }}\">
                <div class=\"spinner hidden\"></div>
            </form>
        </div>
        <iframe id=\"{{ idPrefix }}-iframe\" name=\"{{ idPrefix }}-iframe\" class=\"hidden\"></iframe>
    </div>
{% endmacro %}

{% from _self import screen %}


<div class=\"cs-screen cs-screen-home\">
    <div class=\"cs-opt\" data-screen=\"help\">
        <div class=\"cs-opt-icon\">{{ buoeyIcon|raw }}</div>
        <h2>{{ \"Get help\"|t }}</h2>
        <p>{{ \"How-to’s and other questions\"|t }}</p>
    </div>
    <div class=\"cs-opt\" data-screen=\"feedback\">
        <div class=\"cs-opt-icon\">{{ bullhornIcon|raw }}</div>
        <h2>{{ \"Give feedback\"|t }}</h2>
        <p>{{ \"Bug reports and feature requests\"|t }}</p>
    </div>
</div>

{{ screen(widgetId, 'help', \"Briefly describe your question.\"|t, seIcon, \"Similar questions on Stack Exchange\"|t, 'https://craftcms.stackexchange.com/questions/ask', \"Ask on Stack Exchange\"|t) }}

{{ screen(widgetId, 'feedback', \"Briefly describe your issue or idea.\"|t, ghIcon, \"Similar issues on GitHub\"|t, 'https://github.com/craftcms/cms/issues/new', \"Post on GitHub\"|t) }}
", "_components/widgets/CraftSupport/body", "");
    }
}
