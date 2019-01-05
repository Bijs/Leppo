<?php

/* entries/_revisions */
class __TwigTemplate_51f31ddd00ed001674d34efef0c4ea4499234cc4e89d8d8586e8ad234ad132d7 extends Craft\BaseTemplate
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
        $context["drafts"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "entryRevisions", array()), "getEditableDraftsByEntryId", array(0 => $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "id", array()), 1 => $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "locale", array())), "method");
        // line 2
        $context["baseUrl"] = ((((("entries/" . $this->getAttribute($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getSection", array(), "method"), "handle", array())) . "/") . $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "id", array())) . (($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "slug", array())) ? (("-" . $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "slug", array()))) : (""))) . "/");
        // line 3
        echo "
<div id=\"revision-btn\" class=\"btn menubtn\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["revisionLabel"] ?? $this->getContext($context, "revisionLabel")), "html", null, true);
        echo "</div>

<div class=\"menu\">
\t<ul class=\"padded\">
\t\t";
        // line 8
        $context["currentVersionEditTime"] = (($context["currentVersionEditTime"]) ?? ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "dateUpdated", array())));
        // line 9
        echo "\t\t<li><a";
        if (($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getClassHandle", array(), "method") == "Entry")) {
            echo " class=\"sel\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getCpEditUrl", array(), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Current"), "html", null, true);
        echo "
\t\t\t<span class=\"light\">
\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentVersionEditTime"] ?? $this->getContext($context, "currentVersionEditTime")), "uiTimestamp", array(), "method"), "html", null, true);
        // line 12
        if ((isset($context["currentVersionCreator"]) || array_key_exists("currentVersionCreator", $context))) {
            echo ", ";
            echo twig_escape_filter($this->env, ($context["currentVersionCreator"] ?? $this->getContext($context, "currentVersionCreator")), "html", null, true);
        }
        // line 13
        echo "\t\t\t</span>
\t\t</a></li>
\t</ul>

\t";
        // line 17
        if (($context["drafts"] ?? $this->getContext($context, "drafts"))) {
            // line 18
            echo "\t\t<h6>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Drafts"), "html", null, true);
            echo "</h6>
\t\t<ul class=\"padded\">
\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["drafts"] ?? $this->getContext($context, "drafts")));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 21
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getClassHandle", array(), "method") == "EntryDraft") && ($this->getAttribute($context["draft"], "draftId", array()) == ($context["draftId"] ?? $this->getContext($context, "draftId"))))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(((($context["baseUrl"] ?? $this->getContext($context, "baseUrl")) . "drafts/") . $this->getAttribute($context["draft"], "draftId", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 22
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["draft"], "name", array())), "html", null, true);
                echo "
\t\t\t\t\t<span class=\"light\">";
                // line 23
                echo twig_escape_filter($this->env, \Craft\Craft::t("by {creator}", array("creator" => $this->getAttribute($context["draft"], "creator", array()))), "html", null, true);
                echo "</span>
\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t</ul>
\t";
        }
        // line 28
        echo "
\t";
        // line 29
        if ($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "enableVersioning", array())) {
            // line 30
            echo "\t\t";
            $context["versions"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "entryRevisions", array()), "getVersionsByEntryId", array(0 => $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "id", array()), 1 => $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "locale", array())), "method");
            // line 31
            echo "\t\t";
            if (($context["versions"] ?? $this->getContext($context, "versions"))) {
                // line 32
                echo "\t\t\t<h6>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Recent Versions"), "html", null, true);
                echo "</h6>
\t\t\t<ul class=\"padded\">
\t\t\t\t";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["versions"] ?? $this->getContext($context, "versions")));
                foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                    // line 35
                    echo "\t\t\t\t\t<li><a";
                    if ((($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getClassHandle", array(), "method") == "EntryVersion") && ($this->getAttribute($context["version"], "versionId", array()) == ($context["versionId"] ?? $this->getContext($context, "versionId"))))) {
                        echo " class=\"sel\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(((($context["baseUrl"] ?? $this->getContext($context, "baseUrl")) . "versions/") . $this->getAttribute($context["version"], "versionId", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 36
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Version {num}", array("num" => $this->getAttribute($context["version"], "num", array()))), "html", null, true);
                    echo "
\t\t\t\t\t\t<span class=\"light\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["version"], "dateCreated", array()), "uiTimestamp", array(), "method"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "creator", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t</a></li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t\t\t</ul>
\t\t";
            }
            // line 42
            echo "\t";
        }
        // line 43
        echo "</div>

";
        // line 45
        if (($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getClassHandle", array(), "method") == "EntryDraft")) {
            // line 46
            echo "\t<a id=\"editdraft-btn\" class=\"btn edit icon\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Edit Draft Settings"), "html", null, true);
            echo "\"></a>
\t";
            // line 47
            $_js = "js/EntryDraftEditor.js";
            \Craft\craft()->templates->includejsresource($_js);
            // line 48
            echo "\t";
            $_js = (((((("new Craft.EntryDraftEditor(" . $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "draftId", array())) . ", \"") . twig_escape_filter($this->env, ($context["revisionLabel"] ?? $this->getContext($context, "revisionLabel")), "js")) . "\", \"") . twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "revisionNotes", array()), "js")) . "\");");
            \Craft\craft()->templates->includejs($_js);
            // line 49
            echo "\t";
            \Craft\craft()->templates->includeTranslations(
            	"Draft Name",
            	"Notes"
            );
        }
    }

    public function getTemplateName()
    {
        return "entries/_revisions";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 49,  164 => 48,  161 => 47,  156 => 46,  154 => 45,  150 => 43,  147 => 42,  143 => 40,  132 => 37,  128 => 36,  119 => 35,  115 => 34,  109 => 32,  106 => 31,  103 => 30,  101 => 29,  98 => 28,  94 => 26,  85 => 23,  81 => 22,  72 => 21,  68 => 20,  62 => 18,  60 => 17,  54 => 13,  49 => 12,  47 => 11,  35 => 9,  33 => 8,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set drafts = craft.entryRevisions.getEditableDraftsByEntryId(entry.id, entry.locale) %}
{% set baseUrl = 'entries/'~entry.getSection().handle~'/'~entry.id~(entry.slug ? '-'~entry.slug)~'/' %}

<div id=\"revision-btn\" class=\"btn menubtn\">{{ revisionLabel }}</div>

<div class=\"menu\">
\t<ul class=\"padded\">
\t\t{% set currentVersionEditTime = currentVersionEditTime ?? entry.dateUpdated %}
\t\t<li><a{% if entry.getClassHandle() == 'Entry' %} class=\"sel\"{% endif %} href=\"{{ entry.getCpEditUrl() }}\">{{ \"Current\"|t }}
\t\t\t<span class=\"light\">
\t\t\t\t{{ currentVersionEditTime.uiTimestamp() }}
\t\t\t\t{%- if currentVersionCreator is defined %}, {{ currentVersionCreator }}{% endif %}
\t\t\t</span>
\t\t</a></li>
\t</ul>

\t{% if drafts %}
\t\t<h6>{{ \"Drafts\"|t }}</h6>
\t\t<ul class=\"padded\">
\t\t\t{% for draft in drafts %}
\t\t\t\t<li><a{% if entry.getClassHandle() == 'EntryDraft' and draft.draftId == draftId %} class=\"sel\"{% endif %} href=\"{{ url(baseUrl~'drafts/'~draft.draftId) }}\">
\t\t\t\t\t{{ draft.name|t }}
\t\t\t\t\t<span class=\"light\">{{ \"by {creator}\"|t({ creator: draft.creator }) }}</span>
\t\t\t\t</a></li>
\t\t\t{% endfor %}
\t\t</ul>
\t{% endif %}

\t{% if section.enableVersioning %}
\t\t{% set versions = craft.entryRevisions.getVersionsByEntryId(entry.id, entry.locale) %}
\t\t{% if versions %}
\t\t\t<h6>{{ \"Recent Versions\"|t }}</h6>
\t\t\t<ul class=\"padded\">
\t\t\t\t{% for version in versions %}
\t\t\t\t\t<li><a{% if entry.getClassHandle() == 'EntryVersion' and version.versionId == versionId %} class=\"sel\"{% endif %} href=\"{{ url(baseUrl~'versions/'~version.versionId) }}\">
\t\t\t\t\t\t{{ \"Version {num}\"|t({ num: version.num }) }}
\t\t\t\t\t\t<span class=\"light\">{{ version.dateCreated.uiTimestamp() }}, {{ version.creator }}</span>
\t\t\t\t\t</a></li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t{% endif %}
\t{% endif %}
</div>

{% if entry.getClassHandle() == 'EntryDraft' %}
\t<a id=\"editdraft-btn\" class=\"btn edit icon\" title=\"{{ 'Edit Draft Settings'|t }}\"></a>
\t{% includejsresource 'js/EntryDraftEditor.js' %}
\t{% includejs 'new Craft.EntryDraftEditor('~entry.draftId~', \"'~revisionLabel|e('js')~'\", \"'~entry.revisionNotes|e('js')~'\");' %}
\t{% includeTranslations \"Draft Name\", \"Notes\" %}
{% endif %}
", "entries/_revisions", "");
    }
}
