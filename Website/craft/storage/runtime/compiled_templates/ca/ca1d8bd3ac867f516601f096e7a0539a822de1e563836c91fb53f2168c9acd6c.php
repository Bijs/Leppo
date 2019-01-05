<?php

/* _components/widgets/NewUsers/settings */
class __TwigTemplate_33452d522db42a547e3cb068792454a936f1f78a2fb8b549e6bfb0ebcb04be78 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/widgets/NewUsers/settings", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Date Range"), "id" => "dateRange", "name" => "dateRange", "value" => $this->getAttribute(        // line 7
($context["settings"] ?? $this->getContext($context, "settings")), "dateRange", array()), "options" => array(0 => array("label" => "Last 7 days", "value" => "d7"), 1 => array("label" => "Last 30 days", "value" => "d30"), 2 => array("label" => "Last Week", "value" => "lastweek"), 3 => array("label" => "Last Month", "value" => "lastmonth")), "errors" => $this->getAttribute(        // line 26
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "dateRange"), "method")));
        // line 27
        echo "

";
        // line 29
        $context["userGroups"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "userGroups", array()), "getAllGroups", array(), "method");
        // line 30
        echo "
";
        // line 31
        if ((twig_length_filter($this->env, ($context["userGroups"] ?? $this->getContext($context, "userGroups"))) > 0)) {
            // line 32
            echo "
    ";
            // line 33
            $context["userGroupsOptions"] = array(0 => array("label" => \Craft\Craft::t("All"), "value" => ""));
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["userGroups"] ?? $this->getContext($context, "userGroups")));
            foreach ($context['_seq'] as $context["_key"] => $context["userGroup"]) {
                // line 35
                echo "        ";
                $context["userGroupsOptions"] = twig_array_merge(($context["userGroupsOptions"] ?? $this->getContext($context, "userGroupsOptions")), array(0 => array("label" => \Craft\Craft::t($this->getAttribute($context["userGroup"], "name", array())), "value" => $this->getAttribute($context["userGroup"], "id", array()))));
                // line 36
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
    ";
            // line 38
            echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("User Group"), "id" => "userGroupId", "name" => "userGroupId", "value" => $this->getAttribute(            // line 42
($context["settings"] ?? $this->getContext($context, "settings")), "userGroupId", array()), "options" =>             // line 43
($context["userGroupsOptions"] ?? $this->getContext($context, "userGroupsOptions")), "errors" => $this->getAttribute(            // line 44
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "userGroupId"), "method")));
            // line 45
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/NewUsers/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 45,  64 => 44,  63 => 43,  62 => 42,  61 => 38,  58 => 37,  52 => 36,  49 => 35,  44 => 34,  42 => 33,  39 => 32,  37 => 31,  34 => 30,  32 => 29,  28 => 27,  26 => 26,  25 => 7,  24 => 3,  21 => 2,  19 => 1,);
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
    options: [
        {
            label: 'Last 7 days',
            value: 'd7'
        },
        {
            label: 'Last 30 days',
            value: 'd30'
        },
        {
            label: 'Last Week',
            value: 'lastweek',
        },
        {
            label: 'Last Month',
            value: 'lastmonth',
        },
    ],
    errors: settings.getErrors('dateRange')
}) }}

{% set userGroups = craft.userGroups.getAllGroups() %}

{% if userGroups|length > 0 %}

    {% set userGroupsOptions = [{ label: 'All'|t, value: '' }] %}
    {% for userGroup in userGroups %}
        {% set userGroupsOptions = userGroupsOptions|merge([{ label: userGroup.name|t, value: userGroup.id }]) %}
    {% endfor %}

    {{ forms.selectField({
        label: \"User Group\"|t,
        id: 'userGroupId',
        name: 'userGroupId',
        value: settings.userGroupId,
        options: userGroupsOptions,
        errors: settings.getErrors('userGroupId')
    }) }}

{% endif %}", "_components/widgets/NewUsers/settings", "");
    }
}
