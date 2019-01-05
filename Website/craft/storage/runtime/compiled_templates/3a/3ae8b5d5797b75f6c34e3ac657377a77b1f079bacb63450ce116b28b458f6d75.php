<?php

/* commerce/_components/widgets/Orders/settings */
class __TwigTemplate_ffade14c011c4b59f880f0f4bfe630b0974e3a987c3f6c9dbd90368b698797d7 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/_components/widgets/Orders/settings", 1);
        // line 2
        echo "
<div id=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">

    <div class=\"field\">
        <div class=\"heading\">
            <label>";
        // line 7
        echo twig_escape_filter($this->env, \Craft\Craft::t("Order Status"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"input ltr\">

            <input type=\"hidden\" class=\"status-input\" name=\"orderStatusId\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "orderStatusId", array()), "html", null, true);
        echo "\" />

            <a class=\"btn menubtn\"><span class=\"status\"></span> ";
        // line 13
        echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
        echo "</a>

            <div class=\"menu\">
                <ul class=\"padded\">
                    <li><a><span class=\"commerceStatusLabel\"><span class=\"status\"></span> ";
        // line 17
        echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
        echo "</span></a></li>

                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orderStatuses"] ?? $this->getContext($context, "orderStatuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 20
            echo "                        <li><a data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute($context["status"], "htmlLabel", array(), "method");
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </ul>
            </div>

        </div>
    </div>

    ";
        // line 28
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "name" => "limit", "value" => $this->getAttribute(        // line 31
($context["settings"] ?? $this->getContext($context, "settings")), "limit", array()), "size" => 2, "errors" => $this->getAttribute(        // line 33
($context["settings"] ?? $this->getContext($context, "settings")), "getErrors", array(0 => "limit"), "method")));
        // line 34
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "commerce/_components/widgets/Orders/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 34,  80 => 33,  79 => 31,  78 => 28,  70 => 22,  59 => 20,  55 => 19,  50 => 17,  43 => 13,  38 => 11,  31 => 7,  24 => 3,  21 => 2,  19 => 1,);
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

<div id=\"{{ id }}\">

    <div class=\"field\">
        <div class=\"heading\">
            <label>{{ \"Order Status\"|t }}</label>
        </div>
        <div class=\"input ltr\">

            <input type=\"hidden\" class=\"status-input\" name=\"orderStatusId\" value=\"{{ settings.orderStatusId }}\" />

            <a class=\"btn menubtn\"><span class=\"status\"></span> {{ \"All\"|t }}</a>

            <div class=\"menu\">
                <ul class=\"padded\">
                    <li><a><span class=\"commerceStatusLabel\"><span class=\"status\"></span> {{ \"All\"|t }}</span></a></li>

                    {% for status in orderStatuses %}
                        <li><a data-id=\"{{ status.id }}\">{{ status.htmlLabel()|raw }}</a></li>
                    {% endfor %}
                </ul>
            </div>

        </div>
    </div>

    {{ forms.textField({
        label: \"Limit\"|t,
        name: 'limit',
        value: settings.limit,
        size: 2,
        errors: settings.getErrors('limit')
    }) }}

</div>", "commerce/_components/widgets/Orders/settings", "");
    }
}
