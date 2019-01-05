<?php

/* dashboard/_index */
class __TwigTemplate_0d7c60682d0bbadf3d8db82d710e104c4dbcb06d294fa6795847de57c2717ede extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "dashboard/_index", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Dashboard");
        // line 3
        $_js = "js/Dashboard.js";
        \Craft\craft()->templates->includejsresource($_js);
        // line 4
        $_js = "css/dashboard.css";
        \Craft\craft()->templates->includecssresource($_js);
        // line 6
        ob_start();
        // line 7
        echo "    <div class=\"buttons secondary-buttons right\">
        <div class=\"newwidget btngroup\">
            <div id=\"newwidgetmenubtn\" class=\"btn submit menubtn add icon\">";
        // line 9
        echo twig_escape_filter($this->env, \Craft\Craft::t("New widget"), "html", null, true);
        echo "</div>
            <div class=\"menu newwidgetmenu\">
                <ul>
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["widgetTypes"] ?? $this->getContext($context, "widgetTypes")));
        foreach ($context['_seq'] as $context["type"] => $context["info"]) {
            if ($this->getAttribute($context["info"], "selectable", array())) {
                // line 13
                echo "                        <li>
                            <a data-type=\"";
                // line 14
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "name", array()), "html", null, true);
                echo "\">
                                <span class=\"icon\">";
                // line 15
                echo $this->getAttribute($context["info"], "iconSvg", array());
                echo "</span>
                                ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "name", array()), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                </ul>
            </div>
        </div>

        <div id=\"widgetManagerBtn\" class=\"btn settings icon submit\" title=\"";
        // line 24
        echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
        echo "\"></div>
    </div>
";
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_main($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if (($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "admin", array()) && $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "deprecator", array()), "getTotalLogs", array(), "method"))) {
            // line 31
            echo "        <div class=\"pane\">
            <p id=\"deprecationnotice\" data-icon=\"alert\">";
            // line 32
            echo \Craft\Craft::t("New deprecation errors have been logged. Please take a minute to <a class=\"go\" href=\"{url}\">review them</a>", array("url" => \Craft\UrlHelper::getUrl("utils/deprecationerrors")));
            echo "</p>
        </div>
    ";
        }
        // line 35
        echo "
    <div class=\"grid\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["widgets"] ?? $this->getContext($context, "widgets")));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 38
            echo "            <div class=\"item\" data-colspan=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "colspan", array()), "html", null, true);
            echo "\">
                <div id=\"widget";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "id", array()), "html", null, true);
            echo "\" class=\"widget ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["widget"], "type", array())), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "id", array()), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "type", array()), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", array()), "html", null, true);
            echo "\">
                    <div class=\"front\">
                        <div class=\"pane\">
                            <div class=\"spinner body-loading\"></div>
                            <div class=\"settings icon hidden\"></div>
                            <h2>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", array()), "html", null, true);
            echo "</h2>
                            <div class=\"body\">
                                ";
            // line 46
            echo $this->getAttribute($context["widget"], "bodyHtml", array());
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"back\">
                        <form class=\"pane\">
                            <input type=\"hidden\" name=\"widgetId\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "id", array()), "html", null, true);
            echo "\">
                            <h2>";
            // line 53
            echo twig_escape_filter($this->env, \Craft\Craft::t("{type} Settings", array("type" => $this->getAttribute($context["widget"], "name", array()))), "html", null, true);
            echo "</h2>
                            <div class=\"settings\"></div>
                            <hr>
                            <div class=\"buttons clearafter\">
                                <input type=\"submit\" class=\"btn submit\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">
                                <div class=\"btn\" role=\"button\">";
            // line 58
            echo twig_escape_filter($this->env, \Craft\Craft::t("Cancel"), "html", null, true);
            echo "</div>
                                <div class=\"spinner hidden\"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 66,  163 => 58,  159 => 57,  152 => 53,  148 => 52,  139 => 46,  134 => 44,  118 => 39,  113 => 38,  109 => 37,  105 => 35,  99 => 32,  96 => 31,  93 => 30,  90 => 29,  86 => 1,  80 => 24,  74 => 20,  63 => 16,  59 => 15,  53 => 14,  50 => 13,  45 => 12,  39 => 9,  35 => 7,  33 => 6,  30 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/cp\" %}
{% set title = \"Dashboard\"|t %}
{% includejsresource 'js/Dashboard.js' %}
{% includecssresource \"css/dashboard.css\" %}

{% set extraPageHeaderHtml %}
    <div class=\"buttons secondary-buttons right\">
        <div class=\"newwidget btngroup\">
            <div id=\"newwidgetmenubtn\" class=\"btn submit menubtn add icon\">{{ 'New widget'|t }}</div>
            <div class=\"menu newwidgetmenu\">
                <ul>
                    {% for type, info in widgetTypes if info.selectable %}
                        <li>
                            <a data-type=\"{{ type }}\" data-name=\"{{ info.name }}\">
                                <span class=\"icon\">{{ info.iconSvg|raw }}</span>
                                {{ info.name }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>

        <div id=\"widgetManagerBtn\" class=\"btn settings icon submit\" title=\"{{ 'Settings'|t }}\"></div>
    </div>
{% endset %}


{% block main %}
    {% if currentUser.admin and craft.deprecator.getTotalLogs() %}
        <div class=\"pane\">
            <p id=\"deprecationnotice\" data-icon=\"alert\">{{ 'New deprecation errors have been logged. Please take a minute to <a class=\"go\" href=\"{url}\">review them</a>'|t({ url: url('utils/deprecationerrors') })|raw }}</p>
        </div>
    {% endif %}

    <div class=\"grid\">
        {% for widget in widgets %}
            <div class=\"item\" data-colspan=\"{{ widget.colspan }}\">
                <div id=\"widget{{ widget.id }}\" class=\"widget {{ widget.type|lower }}\" data-id=\"{{ widget.id }}\" data-type=\"{{ widget.type }}\" data-title=\"{{ widget.title }}\">
                    <div class=\"front\">
                        <div class=\"pane\">
                            <div class=\"spinner body-loading\"></div>
                            <div class=\"settings icon hidden\"></div>
                            <h2>{{ widget.title }}</h2>
                            <div class=\"body\">
                                {{ widget.bodyHtml|raw }}
                            </div>
                        </div>
                    </div>
                    <div class=\"back\">
                        <form class=\"pane\">
                            <input type=\"hidden\" name=\"widgetId\" value=\"{{ widget.id }}\">
                            <h2>{{ \"{type} Settings\"|t({ type: widget.name }) }}</h2>
                            <div class=\"settings\"></div>
                            <hr>
                            <div class=\"buttons clearafter\">
                                <input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t }}\">
                                <div class=\"btn\" role=\"button\">{{ 'Cancel'|t }}</div>
                                <div class=\"spinner hidden\"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "dashboard/_index", "");
    }
}
