<?php

/* entries/_titlefield */
class __TwigTemplate_72687ef39b25e77b94f95defb3d379552adf58fa90926deff5febc2c2501572b extends Craft\BaseTemplate
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
        $context["__internal_7532f38b512aa81ee727b6c0859b42e093306a4ea91a99b6de27f0ea80bdf012"] = $this->loadTemplate("_includes/forms", "entries/_titlefield", 1);
        // line 2
        $context["static"] = (((isset($context["static"]) || array_key_exists("static", $context))) ? (($context["static"] ?? $this->getContext($context, "static"))) : (false));
        // line 3
        $context["entryType"] = $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getType", array(), "method");
        // line 4
        echo "
";
        // line 5
        echo $context["__internal_7532f38b512aa81ee727b6c0859b42e093306a4ea91a99b6de27f0ea80bdf012"]->gettextField(array("label" => ((twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute(        // line 6
($context["entryType"] ?? $this->getContext($context, "entryType")), "titleLabel", array())))) ? (twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute(($context["entryType"] ?? $this->getContext($context, "entryType")), "titleLabel", array())))) : (\Craft\Craft::t("Title"))), "locale" => (($this->getAttribute(        // line 7
($context["entryType"] ?? $this->getContext($context, "entryType")), "hasTitleField", array())) ? ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "locale", array())) : ("")), "id" => "title", "name" => "title", "value" => $this->getAttribute(        // line 10
($context["entry"] ?? $this->getContext($context, "entry")), "title", array()), "errors" => (( !        // line 11
($context["static"] ?? $this->getContext($context, "static"))) ? ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getErrors", array(0 => "title"), "method")) : ("")), "first" => true, "autofocus" => true, "required" => ( !        // line 14
($context["static"] ?? $this->getContext($context, "static")) && $this->getAttribute(($context["entryType"] ?? $this->getContext($context, "entryType")), "hasTitleField", array())), "disabled" => (        // line 15
($context["static"] ?? $this->getContext($context, "static")) ||  !$this->getAttribute(($context["entryType"] ?? $this->getContext($context, "entryType")), "hasTitleField", array())), "maxlength" => 255));
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries/_titlefield";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 17,  34 => 15,  33 => 14,  32 => 11,  31 => 10,  30 => 7,  29 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from \"_includes/forms\" import textField %}
{% set static = static is defined ? static : false %}
{% set entryType = entry.getType() %}

{{ textField({
\tlabel: entryType.titleLabel|t|e ?: 'Title'|t,
\tlocale: entryType.hasTitleField ? entry.locale,
\tid: 'title',
\tname: 'title',
\tvalue: entry.title,
\terrors: (not static ? entry.getErrors('title')),
\tfirst: true,
\tautofocus: true,
\trequired: not static and entryType.hasTitleField,
\tdisabled: static or not entryType.hasTitleField,
\tmaxlength: 255
}) }}
", "entries/_titlefield", "");
    }
}
