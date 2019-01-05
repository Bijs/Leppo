<?php

/* settings/fields */
class __TwigTemplate_9ad7a3485a0a206cf8d24a5007ac13ba68e029b7954a0449b424ccc916fc29a9 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/fields", 3);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->userSession->requireAdmin();
        // line 4
        $context["title"] = \Craft\Craft::t("Fields");
        // line 6
        $context["docsUrl"] = "http://craftcms.com/docs/fields";
        // line 8
        $_js = "js/fields.js";
        \Craft\craft()->templates->includejsresource($_js);
        // line 10
        \Craft\craft()->templates->includeTranslations(
        	"What do you want to name your group?",
        	"Could not create the group:",
        	"Could not create the group:",
        	"Are you sure you want to delete this group and all its fields?",
        	"Could not delete the group.",
        	"Group renamed."
        );
        // line 19
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 24
        $context["groups"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "fields", array()), "getAllGroups", array(0 => "id"), "method");
        // line 26
        if ((isset($context["groupId"]) || array_key_exists("groupId", $context))) {
            // line 27
            if ( !$this->getAttribute(($context["groups"] ?? null), ($context["groupId"] ?? $this->getContext($context, "groupId")), array(), "array", true, true)) {
                // line 28
                throw new \Craft\HttpException(404);
            }
            // line 31
            $context["fields"] = $this->getAttribute($this->getAttribute(($context["groups"] ?? $this->getContext($context, "groups")), ($context["groupId"] ?? $this->getContext($context, "groupId")), array(), "array"), "getFields", array(), "method");
        } else {
            // line 33
            $context["fields"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "fields", array()), "getAllFields", array(), "method");
        }
        // line 37
        ob_start();
        // line 38
        echo "\t";
        if (($context["groups"] ?? $this->getContext($context, "groups"))) {
            // line 39
            echo "\t\t<div class=\"buttons right\">
\t\t\t";
            // line 40
            $context["newFieldUrl"] = \Craft\UrlHelper::getUrl("settings/fields/new", (((isset($context["groupId"]) || array_key_exists("groupId", $context))) ? (array("groupId" => ($context["groupId"] ?? $this->getContext($context, "groupId")))) : (null)));
            // line 41
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, ($context["newFieldUrl"] ?? $this->getContext($context, "newFieldUrl")), "html", null, true);
            echo "\" class=\"submit btn add icon\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New field"), "html", null, true);
            echo "</a>
\t\t</div>
\t";
        }
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 116
        ob_start();
        // line 117
        echo "\tnew Craft.AdminTable({
\t\ttableSelector: '#fields',
\t\tnoObjectsSelector: '#nofields',
\t\tdeleteAction: 'fields/deleteField'
\t});
";
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_sidebar($context, array $blocks = array())
    {
        // line 48
        echo "\t<nav>
\t\t<ul id=\"groups\">
\t\t\t<li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/fields"), "html", null, true);
        echo "\"";
        if ( !(isset($context["groupId"]) || array_key_exists("groupId", $context))) {
            echo " class=\"sel\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All Fields"), "html", null, true);
        echo "</a></li>
\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 52
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/" . $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\"";
            if (((isset($context["groupId"]) || array_key_exists("groupId", $context)) && ($this->getAttribute($context["group"], "id", array()) == ($context["groupId"] ?? $this->getContext($context, "groupId"))))) {
                echo " class=\"sel\"";
            }
            echo " data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["group"], "name", array())), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t</ul>
\t</nav>

\t<div class=\"buttons\">
\t\t<div id=\"newgroupbtn\" class=\"btn add icon\">";
        // line 58
        echo twig_escape_filter($this->env, \Craft\Craft::t("New group"), "html", null, true);
        echo "</div>

\t\t";
        // line 60
        if ((isset($context["groupId"]) || array_key_exists("groupId", $context))) {
            // line 61
            echo "\t\t\t<div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"";
            echo "Settings";
            echo "\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a data-action=\"rename\" role=\"button\">";
            // line 64
            echo twig_escape_filter($this->env, \Craft\Craft::t("Rename selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t<li><a data-action=\"delete\" role=\"button\">";
            // line 65
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 69
        echo "\t</div>
";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        // line 74
        echo "\t<p id=\"nofields\"";
        if (($context["fields"] ?? $this->getContext($context, "fields"))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 75
        if ((isset($context["groupId"]) || array_key_exists("groupId", $context))) {
            // line 76
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("This group doesn’t have any fields yet."), "html", null, true);
            echo "
\t\t";
        } else {
            // line 78
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No fields exist yet."), "html", null, true);
            echo "
\t\t";
        }
        // line 80
        echo "\t</p>

\t";
        // line 82
        if (($context["fields"] ?? $this->getContext($context, "fields"))) {
            // line 83
            echo "\t\t<table id=\"fields\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 85
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 86
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 87
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "</th>
\t\t\t\t";
            // line 88
            if ( !(isset($context["groupId"]) || array_key_exists("groupId", $context))) {
                echo "<th scope=\"col\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                echo "</th>";
            }
            // line 89
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 93
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["field"], "name", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 94
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/edit/" . $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["field"], "name", array())), "html", null, true);
                echo "</a>";
                // line 95
                if ($this->getAttribute($context["field"], "required", array())) {
                    echo " <span class=\"required\"></span>";
                }
                // line 96
                echo "</th>
\t\t\t\t\t\t<td data-title=\"";
                // line 97
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "handle", array()), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td data-title=\"";
                // line 98
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 99
                $context["fieldType"] = $this->getAttribute($context["field"], "getFieldType", array(), "method");
                // line 100
                echo "\t\t\t\t\t\t\t";
                if (($context["fieldType"] ?? $this->getContext($context, "fieldType"))) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["fieldType"] ?? $this->getContext($context, "fieldType")), "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t<span class=\"error\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 106
                if ( !(isset($context["groupId"]) || array_key_exists("groupId", $context))) {
                    echo "<td data-title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($this->getAttribute($context["field"], "group", array()), "name", array())), "html", null, true);
                    echo "</td>";
                }
                // line 107
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
    }

    public function getTemplateName()
    {
        return "settings/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 110,  290 => 107,  282 => 106,  279 => 105,  273 => 103,  267 => 101,  264 => 100,  262 => 99,  258 => 98,  252 => 97,  249 => 96,  245 => 95,  238 => 94,  231 => 93,  227 => 92,  222 => 89,  216 => 88,  212 => 87,  208 => 86,  204 => 85,  200 => 83,  198 => 82,  194 => 80,  188 => 78,  182 => 76,  180 => 75,  173 => 74,  170 => 73,  165 => 69,  158 => 65,  154 => 64,  147 => 61,  145 => 60,  140 => 58,  134 => 54,  117 => 52,  113 => 51,  103 => 50,  99 => 48,  96 => 47,  92 => 3,  83 => 117,  81 => 116,  71 => 41,  69 => 40,  66 => 39,  63 => 38,  61 => 37,  58 => 33,  55 => 31,  52 => 28,  50 => 27,  48 => 26,  46 => 24,  44 => 19,  35 => 10,  32 => 8,  30 => 6,  28 => 4,  26 => 1,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% requireAdmin %}

{% extends \"_layouts/cp\" %}
{% set title = \"Fields\"|t %}

{% set docsUrl = 'http://craftcms.com/docs/fields' %}

{% includejsresource \"js/fields.js\" %}

{% includeTranslations
\t\"What do you want to name your group?\",
\t\"Could not create the group:\",
\t\"Could not create the group:\",
\t\"Are you sure you want to delete this group and all its fields?\",
\t\"Could not delete the group.\",
\t\"Group renamed.\"
%}

{% set crumbs = [
\t{ label: \"Settings\"|t, url: url('settings') }
] %}


{% set groups = craft.fields.getAllGroups('id') %}

{% if groupId is defined %}
\t{% if groups[groupId] is not defined %}
\t\t{% exit 404 %}
\t{% endif %}

\t{% set fields = groups[groupId].getFields() %}
{% else %}
\t{% set fields = craft.fields.getAllFields() %}
{% endif %}


{% set extraPageHeaderHtml %}
\t{% if groups %}
\t\t<div class=\"buttons right\">
\t\t\t{% set newFieldUrl = url('settings/fields/new', (groupId is defined ? { groupId: groupId } : null)) %}
\t\t\t<a href=\"{{ newFieldUrl }}\" class=\"submit btn add icon\">{{ \"New field\"|t }}</a>
\t\t</div>
\t{% endif %}
{% endset %}


{% block sidebar %}
\t<nav>
\t\t<ul id=\"groups\">
\t\t\t<li><a href=\"{{ url('settings/fields') }}\"{% if groupId is not defined %} class=\"sel\"{% endif %}>{{ \"All Fields\"|t }}</a></li>
\t\t\t{% for group in groups %}
\t\t\t\t<li><a href=\"{{ url('settings/fields/'~group.id) }}\"{% if groupId is defined and group.id == groupId %} class=\"sel\"{% endif %} data-id=\"{{ group.id }}\">{{ group.name|t }}</a></li>
\t\t\t{% endfor %}
\t\t</ul>
\t</nav>

\t<div class=\"buttons\">
\t\t<div id=\"newgroupbtn\" class=\"btn add icon\">{{ \"New group\"|t }}</div>

\t\t{% if groupId is defined %}
\t\t\t<div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"{{ 'Settings' }}\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a data-action=\"rename\" role=\"button\">{{ \"Rename selected group\"|t }}</a></li>
\t\t\t\t\t<li><a data-action=\"delete\" role=\"button\">{{ \"Delete selected group\"|t }}</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t{% endif %}
\t</div>
{% endblock %}


{% block content %}
\t<p id=\"nofields\"{% if fields %} class=\"hidden\"{% endif %}>
\t\t{% if groupId is defined %}
\t\t\t{{ \"This group doesn’t have any fields yet.\"|t }}
\t\t{% else %}
\t\t\t{{ \"No fields exist yet.\"|t }}
\t\t{% endif %}
\t</p>

\t{% if fields %}
\t\t<table id=\"fields\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">{{ \"Name\"|t }}</th>
\t\t\t\t<th scope=\"col\">{{ \"Handle\"|t }}</th>
\t\t\t\t<th scope=\"col\">{{ \"Type\"|t }}</th>
\t\t\t\t{% if groupId is not defined %}<th scope=\"col\">{{ \"Group\"|t }}</th>{% endif %}
\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for field in fields %}
\t\t\t\t\t<tr data-id=\"{{ field.id }}\" data-name=\"{{ field.name|t }}\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"{{ 'Name'|t }}\"><a href=\"{{ url('settings/fields/edit/' ~ field.id) }}\">{{ field.name|t }}</a>
\t\t\t\t\t\t\t{%- if field.required %} <span class=\"required\"></span>{% endif -%}
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<td data-title=\"{{ 'Handle'|t }}\"><code>{{ field.handle }}</code></td>
\t\t\t\t\t\t<td data-title=\"{{ 'Type'|t }}\">
\t\t\t\t\t\t\t{% set fieldType = field.getFieldType() %}
\t\t\t\t\t\t\t{% if fieldType %}
\t\t\t\t\t\t\t\t{{ fieldType.name }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"error\">{{ field.type }}</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% if groupId is not defined %}<td data-title=\"{{ 'Group'|t }}\">{{ field.group.name|t }}</td>{% endif %}
\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"{{ 'Delete'|t }}\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t{% endif %}
{% endblock %}


{% includejs %}
\tnew Craft.AdminTable({
\t\ttableSelector: '#fields',
\t\tnoObjectsSelector: '#nofields',
\t\tdeleteAction: 'fields/deleteField'
\t});
{% endincludejs %}

", "settings/fields", "");
    }
}
