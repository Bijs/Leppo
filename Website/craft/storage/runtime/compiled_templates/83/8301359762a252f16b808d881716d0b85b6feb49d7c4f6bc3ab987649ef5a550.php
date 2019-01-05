<?php

/* commerce/settings/producttypes/index */
class __TwigTemplate_24d48df55f6f025b874c64b32e40b8d576d8014ee42195199ea143a5f590b236 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("commerce/_layouts/settings", "commerce/settings/producttypes/index", 1);
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
        // line 42
        ob_start();
        // line 43
        echo "var adminTable = new Craft.AdminTable({
tableSelector: '#producttypes',
noObjectsSelector: '#noproducttypes',
newObjectBtnSelector: '#newproductTypecontainer',
deleteAction: 'commerce/productTypes/deleteProductType',
confirmDeleteMessage: '";
        // line 48
        echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete “{name}” and all its products? Please make sure you have a backup of your database before performing this destructive action."), "html", null, true);
        echo "'
});
";
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Product Types"), "html", null, true);
        echo "</h2>

    <div id=\"no-product-types\"";
        // line 6
        if (twig_length_filter($this->env, ($context["productTypes"] ?? $this->getContext($context, "productTypes")))) {
            echo " class=\"hidden\"";
        }
        echo ">
        <p>";
        // line 7
        echo twig_escape_filter($this->env, \Craft\Craft::t("No product types exist yet."), "html", null, true);
        echo "</p>
    </div>

    ";
        // line 10
        if (twig_length_filter($this->env, ($context["productTypes"] ?? $this->getContext($context, "productTypes")))) {
            // line 11
            echo "    <table id=\"producttypes\" class=\"data fullwidth collapsible\">
        <thead>
        <tr>
            <th scope=\"col\">";
            // line 14
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
            <th scope=\"col\">";
            // line 15
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
            <th scope=\"col\">";
            // line 16
            echo twig_escape_filter($this->env, \Craft\Craft::t("Has Variants?"), "html", null, true);
            echo "</th>
            <td class=\"thin\"></td>
        </tr>
        </thead>
        <tbody>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productTypes"] ?? $this->getContext($context, "productTypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["productType"]) {
                // line 22
                echo "            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productType"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productType"], "name", array()), "html", null, true);
                echo "\">
                <th scope=\"row\" data-title=\"";
                // line 23
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a
                            href=\"";
                // line 24
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("commerce/settings/producttypes/" . $this->getAttribute($context["productType"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productType"], "name", array()), "html", null, true);
                echo "</a>
                </th>
                <td data-title=\"";
                // line 26
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\" class=\"code\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productType"], "handle", array()), "html", null, true);
                echo "</td>
                <td data-title=\"";
                // line 27
                echo twig_escape_filter($this->env, \Craft\Craft::t("Has Variants?"), "html", null, true);
                echo "\">";
                if ($this->getAttribute($context["productType"], "hasVariants", array())) {
                    echo "<span data-icon=\"check\" title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Yes"), "html", null, true);
                    echo "\"></span>";
                }
                echo "</td>
                <td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 28
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
        </tbody>
    </table>
    ";
        }
        // line 35
        echo "
    <div class=\"buttons\">
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("commerce/settings/producttypes/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New product type"), "html", null, true);
        echo "</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "commerce/settings/producttypes/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  142 => 35,  136 => 31,  127 => 28,  117 => 27,  111 => 26,  104 => 24,  100 => 23,  93 => 22,  89 => 21,  81 => 16,  77 => 15,  73 => 14,  68 => 11,  66 => 10,  60 => 7,  54 => 6,  48 => 4,  45 => 3,  41 => 1,  34 => 48,  27 => 43,  25 => 42,  11 => 1,);
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

{% block content %}
    <h2>{{ \"Product Types\"|t }}</h2>

    <div id=\"no-product-types\"{% if productTypes|length %} class=\"hidden\"{% endif %}>
        <p>{{ \"No product types exist yet.\"|t }}</p>
    </div>

    {% if productTypes|length %}
    <table id=\"producttypes\" class=\"data fullwidth collapsible\">
        <thead>
        <tr>
            <th scope=\"col\">{{ \"Name\"|t }}</th>
            <th scope=\"col\">{{ \"Handle\"|t }}</th>
            <th scope=\"col\">{{ \"Has Variants?\"|t }}</th>
            <td class=\"thin\"></td>
        </tr>
        </thead>
        <tbody>
        {% for productType in productTypes %}
            <tr data-id=\"{{ productType.id }}\" data-name=\"{{ productType.name }}\">
                <th scope=\"row\" data-title=\"{{ 'Name'|t }}\"><a
                            href=\"{{ url('commerce/settings/producttypes/'~productType.id) }}\">{{ productType.name }}</a>
                </th>
                <td data-title=\"{{ 'Handle'|t }}\" class=\"code\">{{ productType.handle }}</td>
                <td data-title=\"{{ 'Has Variants?'|t }}\">{% if productType.hasVariants %}<span data-icon=\"check\" title=\"{{ 'Yes'|t }}\"></span>{% endif %}</td>
                <td class=\"thin\"><a class=\"delete icon\" title=\"{{ 'Delete'|t }}\" role=\"button\"></a></td>
            </tr>
        {% endfor %}

        </tbody>
    </table>
    {% endif %}

    <div class=\"buttons\">
        <a href=\"{{ url('commerce/settings/producttypes/new') }}\" class=\"btn submit add icon\">{{ 'New product type'|t }}</a>
    </div>
{% endblock %}


{% includejs %}
var adminTable = new Craft.AdminTable({
tableSelector: '#producttypes',
noObjectsSelector: '#noproducttypes',
newObjectBtnSelector: '#newproductTypecontainer',
deleteAction: 'commerce/productTypes/deleteProductType',
confirmDeleteMessage: '{{ \"Are you sure you want to delete “{name}” and all its products? Please make sure you have a backup of your database before performing this destructive action.\"|t }}'
});
{% endincludejs %}
", "commerce/settings/producttypes/index", "");
    }
}
