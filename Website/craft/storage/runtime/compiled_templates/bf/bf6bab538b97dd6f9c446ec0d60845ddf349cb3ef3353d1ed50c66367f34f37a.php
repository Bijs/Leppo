<?php

/* commerce/_layouts/settings */
class __TwigTemplate_ac507854a7829297dded239b59068bb10644d5256b2c31db321be359151d31e6 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("commerce/_layouts/settingscp", "commerce/_layouts/settings", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "commerce/_layouts/settingscp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = \Craft\Craft::t("Commerce Settings");
        // line 5
        $context["navItems"] = array();
        // line 7
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "commerce-manageTaxes"), "method")) {
            // line 8
            $context["navItems"] = twig_array_merge(array("taxes-heading" => array("heading" => \Craft\Craft::t("Taxes")), "taxcategories" => array("title" => \Craft\Craft::t("Tax Categories")), "taxzones" => array("title" => \Craft\Craft::t("Tax Zones")), "taxrates" => array("title" => \Craft\Craft::t("Tax Rates"))),             // line 13
($context["navItems"] ?? $this->getContext($context, "navItems")));
        }
        // line 16
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "commerce-manageShipping"), "method")) {
            // line 17
            $context["navItems"] = twig_array_merge(array("shipping-heading" => array("heading" => \Craft\Craft::t("Shipping")), "shippingcategories" => array("title" => \Craft\Craft::t("Shipping Categories")), "shippingzones" => array("title" => \Craft\Craft::t("Shipping Zones")), "shippingmethods" => array("title" => \Craft\Craft::t("Shipping Methods"))),             // line 22
($context["navItems"] ?? $this->getContext($context, "navItems")));
        }
        // line 25
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "admin", array())) {
            // line 26
            $context["navItems"] = twig_array_merge(array("registration" => array("title" => \Craft\Craft::t("Registration")), "general" => array("title" => \Craft\Craft::t("General Settings")), "orders-heading" => array("heading" => \Craft\Craft::t("Orders")), "ordersettings" => array("title" => \Craft\Craft::t("Order Fields")), "orderstatuses" => array("title" => \Craft\Craft::t("Order Statuses")), "emails" => array("title" => \Craft\Craft::t("Emails")), "paymentmethods" => array("title" => \Craft\Craft::t("Payment Methods")), "paymentcurrencies" => array("title" => \Craft\Craft::t("Payment Currencies")), "products-heading" => array("heading" => \Craft\Craft::t("Products")), "producttypes" => array("title" => \Craft\Craft::t("Product Types")), "regions-heading" => array("heading" => \Craft\Craft::t("Regions")), "countries" => array("title" => \Craft\Craft::t("Countries")), "states" => array("title" => \Craft\Craft::t("States"))),             // line 40
($context["navItems"] ?? $this->getContext($context, "navItems")));
        }
        // line 43
        $context["selectedItem"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getSegment", array(0 => 3), "method");
        // line 44
        $context["docTitle"] = (($this->getAttribute($this->getAttribute(($context["navItems"] ?? $this->getContext($context, "navItems")), ($context["selectedItem"] ?? $this->getContext($context, "selectedItem")), array(), "array"), "title", array()) . " - ") . ($context["title"] ?? $this->getContext($context, "title")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_sidebar($context, array $blocks = array())
    {
        // line 47
        echo "    <nav>
        <ul>
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navItems"] ?? $this->getContext($context, "navItems")));
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 50
            echo "                ";
            if ($this->getAttribute($context["item"], "heading", array(), "any", true, true)) {
                // line 51
                echo "                    <li class=\"heading\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "heading", array()), "html", null, true);
                echo "</span></li>
                ";
            } else {
                // line 53
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("commerce/settings/" . $context["id"])), "html", null, true);
                echo "\"";
                if (($context["id"] == ($context["selectedItem"] ?? $this->getContext($context, "selectedItem")))) {
                    echo " class=\"sel\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 55
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </ul>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "commerce/_layouts/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 56,  87 => 55,  75 => 53,  69 => 51,  66 => 50,  62 => 49,  58 => 47,  55 => 46,  51 => 1,  49 => 44,  47 => 43,  44 => 40,  43 => 26,  41 => 25,  38 => 22,  37 => 17,  35 => 16,  32 => 13,  31 => 8,  29 => 7,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"commerce/_layouts/settingscp\" %}

{% set title = \"Commerce Settings\"|t %}

{% set navItems = {} %}

{% if currentUser.can('commerce-manageTaxes') %}
    {% set navItems = {
        'taxes-heading': { heading: \"Taxes\"|t },
        'taxcategories': { title: \"Tax Categories\"|t },
        'taxzones': { title: \"Tax Zones\"|t },
        'taxrates': { title: \"Tax Rates\"|t },
    }|merge(navItems) %}
{% endif %}

{% if currentUser.can('commerce-manageShipping') %}
    {% set navItems = {
        'shipping-heading': { heading: \"Shipping\"|t },
        'shippingcategories': { title: \"Shipping Categories\"|t },
        'shippingzones': { title: \"Shipping Zones\"|t },
        'shippingmethods': { title: \"Shipping Methods\"|t },
    }|merge(navItems) %}
{% endif %}

{% if currentUser.admin %}
    {% set navItems = {
        'registration': { title: \"Registration\"|t },
        'general': { title: \"General Settings\"|t },
        'orders-heading': { heading: \"Orders\"|t },
        'ordersettings': { title: \"Order Fields\"|t },
        'orderstatuses': { title: \"Order Statuses\"|t },
        'emails': { title: \"Emails\"|t },
        'paymentmethods': { title: \"Payment Methods\"|t },
        'paymentcurrencies': { title: \"Payment Currencies\"|t },
        'products-heading': { heading: \"Products\"|t },
        'producttypes': { title: \"Product Types\"|t },
        'regions-heading': { heading: \"Regions\"|t },
        'countries': { title: \"Countries\"|t },
        'states': { title: \"States\"|t },
    }|merge(navItems) %}
{% endif %}

{% set selectedItem = craft.request.getSegment(3) %}
{% set docTitle = navItems[selectedItem].title~' - '~title %}

{% block sidebar %}
    <nav>
        <ul>
            {% for id, item in navItems %}
                {% if item.heading is defined %}
                    <li class=\"heading\"><span>{{ item.heading }}</span></li>
                {% else %}
                    <li><a href=\"{{ url('commerce/settings/'~id) }}\"{% if id == selectedItem %} class=\"sel\"{% endif %}>{{ item.title }}</a></li>
                {% endif %}
            {% endfor %}
        </ul>
    </nav>
{% endblock %}
", "commerce/_layouts/settings", "");
    }
}
