<?php

/* entries/_edit */
class __TwigTemplate_d9d36054c05ce48848c9ca9b1871ccdf38d7abc98928bf1aa231a81794b7a78d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "entries/_edit", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'saveButton' => array($this, 'block_saveButton'),
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "entries/_edit", 2);
        // line 11
        $context["sectionHandle"] = $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "handle", array());
        // line 12
        $context["isSingle"] = ($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) == "single");
        // line 13
        $context["isVersion"] = ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getClassHandle", array(), "method") == "EntryVersion");
        // line 14
        $context["isDraft"] = ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "id", array()) && ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getClassHandle", array(), "method") == "EntryDraft"));
        // line 16
        $context["canPublish"] = $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => ("publishEntries" . ($context["permissionSuffix"] ?? $this->getContext($context, "permissionSuffix")))), "method");
        // line 17
        $context["canSave"] = ((($this->getAttribute(        // line 18
($context["entry"] ?? $this->getContext($context, "entry")), "id", array()) || $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => ("createEntries" . ($context["permissionSuffix"] ?? $this->getContext($context, "permissionSuffix")))), "method")) && (( !$this->getAttribute(        // line 19
($context["entry"] ?? $this->getContext($context, "entry")), "id", array()) ||  !$this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "enabled", array())) || ($context["canPublish"] ?? $this->getContext($context, "canPublish")))) && ((        // line 20
($context["isSingle"] ?? $this->getContext($context, "isSingle")) || ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "authorId", array()) == $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "id", array()))) || $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => ("publishPeerEntries" . ($context["permissionSuffix"] ?? $this->getContext($context, "permissionSuffix")))), "method")));
        // line 24
        echo \Craft\craft()->templates->invokeHook("cp.entries.edit", $context);

        // line 337
        if ( !$this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "slug", array())) {
            // line 338
            $_js = "window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');";
            \Craft\craft()->templates->includejs($_js);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("pageTitle", $context, $blocks);
        echo "
\t";
        // line 6
        if ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "id", array())) {
            // line 7
            echo "\t\t";
            $this->loadTemplate("entries/_revisions", "entries/_edit", 7)->display($context);
            // line 8
            echo "\t";
        }
    }

    // line 27
    public function block_saveButton($context, array $blocks = array())
    {
        // line 28
        echo "\t";
        if (($context["isDraft"] ?? $this->getContext($context, "isDraft"))) {
            // line 29
            echo "
\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["baseCpEditUrl"] ?? $this->getContext($context, "baseCpEditUrl")), "html", null, true);
            echo "/drafts/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "draftId", array()), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" name=\"draftId\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "draftId", array()), "html", null, true);
            echo "\">

\t\t<div class=\"btngroup\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save draft"), "html", null, true);
            echo "\">

\t\t\t";
            // line 38
            echo "\t\t\t";
            $context["canPublishDraft"] = ((            // line 39
($context["canPublish"] ?? $this->getContext($context, "canPublish")) && ((            // line 40
($context["isSingle"] ?? $this->getContext($context, "isSingle")) || ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "authorId", array()) == $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "id", array()))) || $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => ("publishPeerEntries" . ($context["permissionSuffix"] ?? $this->getContext($context, "permissionSuffix")))), "method"))) && (($this->getAttribute(            // line 41
($context["entry"] ?? $this->getContext($context, "entry")), "creatorId", array()) == $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "id", array())) || $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => ("publishPeerEntryDrafts" . ($context["permissionSuffix"] ?? $this->getContext($context, "permissionSuffix")))), "method")));
            // line 43
            echo "
\t\t\t";
            // line 45
            echo "\t\t\t";
            $context["canDeleteDraft"] = (($this->getAttribute(            // line 46
($context["entry"] ?? $this->getContext($context, "entry")), "creatorId", array()) == $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "id", array())) || $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => ("deletePeerEntryDrafts" . ($context["permissionSuffix"] ?? $this->getContext($context, "permissionSuffix")))), "method"));
            // line 48
            echo "
\t\t\t";
            // line 49
            if ((($context["canPublishDraft"] ?? $this->getContext($context, "canPublishDraft")) || ($context["canDeleteDraft"] ?? $this->getContext($context, "canDeleteDraft")))) {
                // line 50
                echo "\t\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t";
                // line 52
                if (($context["canPublishDraft"] ?? $this->getContext($context, "canPublishDraft"))) {
                    // line 53
                    echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a class=\"formsubmit\"
\t\t\t\t\t\t\t       data-action=\"entryRevisions/publishDraft\"
\t\t\t\t\t\t\t       data-redirect=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getCpEditUrl", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 57
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Publish draft"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                // line 61
                echo "
\t\t\t\t\t";
                // line 62
                if ((($context["canPublishDraft"] ?? $this->getContext($context, "canPublishDraft")) && ($context["canDeleteDraft"] ?? $this->getContext($context, "canDeleteDraft")))) {
                    // line 63
                    echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t";
                }
                // line 65
                echo "
\t\t\t\t\t";
                // line 66
                if (($context["canDeleteDraft"] ?? $this->getContext($context, "canDeleteDraft"))) {
                    // line 67
                    echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a class=\"formsubmit\"
\t\t\t\t\t\t\t       data-action=\"entryRevisions/deleteDraft\"
\t\t\t\t\t\t\t       data-confirm=\"";
                    // line 70
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this draft?"), "html", null, true);
                    echo "\"
\t\t\t\t   \t\t\t       data-redirect=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getCpEditUrl", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 72
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete draft"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 78
            echo "\t\t</div>

\t";
        } elseif (        // line 80
($context["isVersion"] ?? $this->getContext($context, "isVersion"))) {
            // line 81
            echo "
\t\t";
            // line 83
            echo "\t\t";
            if ((            // line 84
($context["canPublish"] ?? $this->getContext($context, "canPublish")) && ((            // line 85
($context["isSingle"] ?? $this->getContext($context, "isSingle")) || ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "authorId", array()) == $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "id", array()))) || $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => ("publishPeerEntries" . ($context["permissionSuffix"] ?? $this->getContext($context, "permissionSuffix")))), "method")))) {
                // line 87
                echo "
\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/revertEntryToVersion\">
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "versionId", array()), "html", null, true);
                echo "\">

\t\t\t<div class=\"secondary-buttons\">
\t\t\t\t<input type=\"button\" class=\"btn submit formsubmit\" value=\"";
                // line 93
                echo twig_escape_filter($this->env, \Craft\Craft::t("Revert entry to this version"), "html", null, true);
                echo "\">
\t\t\t</div>
\t\t";
            }
            // line 96
            echo "
\t";
        } elseif (        // line 97
($context["canSave"] ?? $this->getContext($context, "canSave"))) {
            // line 98
            echo "
\t\t<input type=\"hidden\" name=\"action\" value=\"entries/saveEntry\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"entries/";
            // line 100
            echo twig_escape_filter($this->env, ($context["sectionHandle"] ?? $this->getContext($context, "sectionHandle")), "html", null, true);
            echo "\">

\t\t<div class=\"btngroup\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">

\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"";
            // line 108
            echo twig_escape_filter($this->env, ($context["continueEditingUrl"] ?? $this->getContext($context, "continueEditingUrl")), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 109
            echo $context["forms"]->getoptionShortcutLabel("S");
            echo "
\t\t\t\t\t\t";
            // line 110
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
            echo "
\t\t\t\t\t</a></li>

\t\t\t\t\t";
            // line 113
            $context["nextEntryParams"] = array();
            // line 114
            echo "\t\t\t\t\t";
            if (($context["showEntryTypes"] ?? $this->getContext($context, "showEntryTypes"))) {
                // line 115
                echo "\t\t\t\t\t\t";
                $context["nextEntryParams"] = twig_array_merge(($context["nextEntryParams"] ?? $this->getContext($context, "nextEntryParams")), array(0 => "typeId={type.id}"));
                // line 116
                echo "\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t\t";
            if (($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) == "structure")) {
                // line 118
                echo "\t\t\t\t\t\t";
                $context["nextEntryParams"] = twig_array_merge(($context["nextEntryParams"] ?? $this->getContext($context, "nextEntryParams")), array(0 => "parentId={parent.id}"));
                // line 119
                echo "\t\t\t\t\t";
            }
            // line 120
            echo "
\t\t\t\t\t";
            // line 121
            if ( !($context["isSingle"] ?? $this->getContext($context, "isSingle"))) {
                // line 122
                echo "\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"entries/";
                echo twig_escape_filter($this->env, ($context["sectionHandle"] ?? $this->getContext($context, "sectionHandle")), "html", null, true);
                echo "/new";
                if (($context["nextEntryParams"] ?? $this->getContext($context, "nextEntryParams"))) {
                    echo "?";
                    echo twig_escape_filter($this->env, twig_join_filter(($context["nextEntryParams"] ?? $this->getContext($context, "nextEntryParams")), "&"), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 124
            echo "
\t\t\t\t\t<li><a class=\"formsubmit\" data-action=\"entryRevisions/saveDraft\" data-redirect=\"";
            // line 125
            echo twig_escape_filter($this->env, ($context["baseCpEditUrl"] ?? $this->getContext($context, "baseCpEditUrl")), "html", null, true);
            echo "/drafts/{draftId}\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
            echo "</a></li>

\t\t\t\t\t";
            // line 127
            if (( !($context["isSingle"] ?? $this->getContext($context, "isSingle")) && $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "id", array()))) {
                // line 128
                echo "\t\t\t\t\t\t<li><a class=\"formsubmit\" data-param=\"entryId\" data-value=\"\" data-redirect=\"";
                echo twig_escape_filter($this->env, ($context["continueEditingUrl"] ?? $this->getContext($context, "continueEditingUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a new entry"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 135
            echo "
\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 137
            echo twig_escape_filter($this->env, ($context["baseCpEditUrl"] ?? $this->getContext($context, "baseCpEditUrl")), "html", null, true);
            echo "/drafts/{draftId}\">

\t\t<input type=\"submit\" class=\"btn submit first\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
            echo "\">

\t";
        }
    }

    // line 145
    public function block_main($context, array $blocks = array())
    {
        // line 146
        echo "\t\t";
        if ( !($context["isVersion"] ?? $this->getContext($context, "isVersion"))) {
            // line 147
            echo "\t\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "id", array()), "html", null, true);
            echo "\">
\t\t\t";
            // line 148
            if ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "id", array())) {
                echo "<input type=\"hidden\" name=\"entryId\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "id", array()), "html", null, true);
                echo "\">";
            }
            // line 149
            echo "\t\t\t";
            if ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
                echo "<input type=\"hidden\" name=\"locale\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "locale", array()), "html", null, true);
                echo "\">";
            }
            // line 150
            echo "\t\t";
        } else {
            // line 151
            echo "\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "versionId", array()), "html", null, true);
            echo "\">
\t\t";
        }
        // line 153
        echo "
\t\t<div class=\"grid first\" data-max-cols=\"3\">
\t\t\t<div class=\"item\" data-position=\"left\" data-colspan=\"2\">
\t\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t\t";
        // line 157
        $this->loadTemplate("_includes/tabs", "entries/_edit", 157)->display($context);
        // line 158
        echo "\t\t\t\t\t";
        $this->loadTemplate("entries/_fields", "entries/_edit", 158)->display(array_merge($context, array("static" =>         // line 159
($context["isVersion"] ?? $this->getContext($context, "isVersion")))));
        // line 161
        echo "\t\t\t\t</div>
\t\t\t</div><!--/item-->

\t\t\t<div class=\"item\" data-position=\"right\">

\t\t\t\t";
        // line 166
        if (($context["showPreviewBtn"] ?? $this->getContext($context, "showPreviewBtn"))) {
            // line 167
            echo "\t\t\t\t\t";
            $this->loadTemplate("_includes/previewbtns", "entries/_edit", 167)->display($context);
            // line 168
            echo "\t\t\t\t";
        }
        // line 169
        echo "
\t\t\t\t";
        // line 170
        if (($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method") && (twig_length_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "getLocales", array(), "method")) > 1))) {
            // line 171
            echo "\t\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t\t";
            // line 172
            $context["parentIdParam"] = (($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getParam", array(0 => "parentId.0"), "method")) ? ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getParam", array(0 => "parentId.0"), "method")) : ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getParam", array(0 => "parentId"), "method")));
            // line 173
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["localeIds"] ?? $this->getContext($context, "localeIds")));
            foreach ($context['_seq'] as $context["_key"] => $context["localeId"]) {
                // line 174
                echo "\t\t\t\t\t\t\t";
                $context["localeName"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getLocaleById", array(0 => $context["localeId"]), "method"), "name", array());
                // line 175
                echo "\t\t\t\t\t\t\t<li";
                if (($context["localeId"] == $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "locale", array()))) {
                    echo " class=\"sel\"";
                }
                echo ">";
                // line 176
                if (($context["localeId"] == $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "locale", array()))) {
                    // line 177
                    echo twig_escape_filter($this->env, ($context["localeName"] ?? $this->getContext($context, "localeName")), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 178
                    echo $context["forms"]->getlightswitch(array("name" => "localeEnabled", "on" => $this->getAttribute(                    // line 180
($context["entry"] ?? $this->getContext($context, "entry")), "localeEnabled", array()), "small" => true, "disabled" =>                     // line 182
($context["isVersion"] ?? $this->getContext($context, "isVersion"))));
                } else {
                    // line 185
                    $context["localeUrl"] = \Craft\UrlHelper::getUrl(((((("entries/" .                     // line 186
($context["sectionHandle"] ?? $this->getContext($context, "sectionHandle"))) . "/") . $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getSegment", array(0 => 3), "method")) . "/") . $context["localeId"]), ((                    // line 187
($context["parentIdParam"] ?? $this->getContext($context, "parentIdParam"))) ? (array("parentId" => ($context["parentIdParam"] ?? $this->getContext($context, "parentIdParam")))) : ("")));
                    // line 189
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["localeUrl"] ?? $this->getContext($context, "localeUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($context["localeName"] ?? $this->getContext($context, "localeName")), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<div class=\"status ";
                    // line 190
                    echo ((twig_in_filter($context["localeId"], ($context["enabledLocales"] ?? $this->getContext($context, "enabledLocales")))) ? ("enabled") : ("disabled"));
                    echo "\"></div>";
                }
                // line 192
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 196
        echo "
\t\t\t\t";
        // line 197
        if (( !($context["isSingle"] ?? $this->getContext($context, "isSingle")) || ($context["canPublish"] ?? $this->getContext($context, "canPublish")))) {
            // line 198
            echo "\t\t\t\t\t<div id=\"settings\" class=\"pane meta\">

\t\t\t\t\t\t";
            // line 200
            if ( !($context["isSingle"] ?? $this->getContext($context, "isSingle"))) {
                // line 201
                echo "\t\t\t\t\t\t\t";
                if (($context["showEntryTypes"] ?? $this->getContext($context, "showEntryTypes"))) {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "id" => "entryType", "name" => "typeId", "value" => $this->getAttribute(                    // line 206
($context["entryType"] ?? $this->getContext($context, "entryType")), "id", array()), "options" =>                     // line 207
($context["entryTypeOptions"] ?? $this->getContext($context, "entryTypeOptions"))));
                    // line 208
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 210
                echo "
\t\t\t\t\t\t\t";
                // line 211
                echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Slug"), "locale" => $this->getAttribute(                // line 213
($context["entry"] ?? $this->getContext($context, "entry")), "locale", array()), "id" => "slug", "name" => "slug", "value" => $this->getAttribute(                // line 216
($context["entry"] ?? $this->getContext($context, "entry")), "slug", array()), "placeholder" => \Craft\Craft::t("Enter slug"), "errors" => (( !                // line 218
($context["isVersion"] ?? $this->getContext($context, "isVersion"))) ? (twig_array_merge($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getErrors", array(0 => "slug"), "method"), $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "getErrors", array(0 => "uri"), "method"))) : ("")), "disabled" =>                 // line 219
($context["isVersion"] ?? $this->getContext($context, "isVersion"))));
                // line 220
                echo "

\t\t\t\t\t\t\t";
                // line 222
                if ((isset($context["parentOptionCriteria"]) || array_key_exists("parentOptionCriteria", $context))) {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getelementSelectField(array("label" => \Craft\Craft::t("Parent"), "id" => "parentId", "name" => "parentId", "elementType" =>                     // line 227
($context["elementType"] ?? $this->getContext($context, "elementType")), "selectionLabel" => \Craft\Craft::t("Choose"), "sources" => array(0 => ("section:" . $this->getAttribute(                    // line 229
($context["section"] ?? $this->getContext($context, "section")), "id", array()))), "criteria" =>                     // line 230
($context["parentOptionCriteria"] ?? $this->getContext($context, "parentOptionCriteria")), "limit" => 1, "elements" => (((                    // line 232
(isset($context["parent"]) || array_key_exists("parent", $context)) && ($context["parent"] ?? $this->getContext($context, "parent")))) ? (array(0 => ($context["parent"] ?? $this->getContext($context, "parent")))) : ("")), "errors" => $this->getAttribute(                    // line 233
($context["entry"] ?? $this->getContext($context, "entry")), "getErrors", array(0 => "parent"), "method")));
                    // line 234
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 236
                echo "
\t\t\t\t\t\t\t";
                // line 237
                if (((($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition")) == ($context["CraftPro"] ?? $this->getContext($context, "CraftPro"))) && $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => ("editPeerEntries" . ($context["permissionSuffix"] ?? $this->getContext($context, "permissionSuffix")))), "method"))) {
                    // line 238
                    echo "\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getelementSelectField(array("label" => \Craft\Craft::t("Author"), "id" => "author", "name" => "author", "elementType" =>                     // line 242
($context["userElementType"] ?? $this->getContext($context, "userElementType")), "selectionLabel" => \Craft\Craft::t("Choose"), "criteria" =>                     // line 244
($context["authorOptionCriteria"] ?? $this->getContext($context, "authorOptionCriteria")), "limit" => 1, "elements" => (((                    // line 246
(isset($context["author"]) || array_key_exists("author", $context)) && ($context["author"] ?? $this->getContext($context, "author")))) ? (array(0 => ($context["author"] ?? $this->getContext($context, "author")))) : (""))));
                    // line 247
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 249
                echo "
\t\t\t\t\t\t\t";
                // line 250
                echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Post Date"), "id" => "postDate", "name" => "postDate", "value" => (($this->getAttribute(                // line 254
($context["entry"] ?? $this->getContext($context, "entry")), "postDate", array())) ? ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "postDate", array())) : (null)), "errors" => $this->getAttribute(                // line 255
($context["entry"] ?? $this->getContext($context, "entry")), "getErrors", array(0 => "postDate"), "method"), "disabled" =>                 // line 256
($context["isVersion"] ?? $this->getContext($context, "isVersion"))));
                // line 257
                echo "

\t\t\t\t\t\t\t";
                // line 259
                echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Expiry Date"), "id" => "expiryDate", "name" => "expiryDate", "value" => (($this->getAttribute(                // line 263
($context["entry"] ?? $this->getContext($context, "entry")), "expiryDate", array())) ? ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "expiryDate", array())) : (null)), "errors" => $this->getAttribute(                // line 264
($context["entry"] ?? $this->getContext($context, "entry")), "getErrors", array(0 => "expiryDate"), "method"), "disabled" =>                 // line 265
($context["isVersion"] ?? $this->getContext($context, "isVersion"))));
                // line 266
                echo "
\t\t\t\t\t\t";
            }
            // line 268
            echo "
\t\t\t\t\t\t";
            // line 269
            if ((($context["canPublish"] ?? $this->getContext($context, "canPublish")) || ( !($context["isVersion"] ?? $this->getContext($context, "isVersion")) && ($context["canDeleteEntry"] ?? $this->getContext($context, "canDeleteEntry"))))) {
                // line 270
                echo "
\t\t\t\t\t\t\t";
                // line 271
                ob_start();
                // line 272
                echo "\t\t\t\t\t\t\t\t";
                if (($context["canPublish"] ?? $this->getContext($context, "canPublish"))) {
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 274
                    echo $context["forms"]->getlightswitch(array("id" => "enabled", "name" => "enabled", "on" => $this->getAttribute(                    // line 277
($context["entry"] ?? $this->getContext($context, "entry")), "enabled", array()), "disabled" =>                     // line 278
($context["isVersion"] ?? $this->getContext($context, "isVersion"))));
                    // line 279
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 282
                echo "
\t\t\t\t\t\t\t\t";
                // line 283
                if ((( !($context["isSingle"] ?? $this->getContext($context, "isSingle")) &&  !($context["isVersion"] ?? $this->getContext($context, "isVersion"))) && ($context["canDeleteEntry"] ?? $this->getContext($context, "canDeleteEntry")))) {
                    // line 284
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    // line 285
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                    echo "\" data-action=\"entries/deleteEntry\"
\t\t\t\t\t\t\t\t\t\t\tdata-confirm=\"";
                    // line 286
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this entry?"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-redirect=\"entries\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 290
                echo "\t\t\t\t\t\t\t";
                $context["statusInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 291
                echo "
\t\t\t\t\t\t\t";
                // line 292
                echo $context["forms"]->getfield(array("label" => ((                // line 293
($context["canPublish"] ?? $this->getContext($context, "canPublish"))) ? (\Craft\Craft::t("Enabled")) : ("")), "id" => "enabled"),                 // line 295
($context["statusInput"] ?? $this->getContext($context, "statusInput")));
                echo "
\t\t\t\t\t\t";
            }
            // line 297
            echo "
\t\t\t\t\t</div><!--/pane-->

\t\t\t\t\t";
            // line 300
            if ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "id", array())) {
                // line 301
                echo "\t\t\t\t\t\t<div class=\"pane lightpane meta\">
\t\t\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t\t\t<h5 class=\"heading\">";
                // line 303
                echo twig_escape_filter($this->env, \Craft\Craft::t("Date Created"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t<div class=\"value\">";
                // line 304
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "dateCreated", array()), "localeDate", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "dateCreated", array()), "localeTime", array(), "method"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t\t\t<h5 class=\"heading\">";
                // line 307
                echo twig_escape_filter($this->env, \Craft\Craft::t("Date Updated"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t<div class=\"value\">";
                // line 308
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "dateUpdated", array()), "localeDate", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "dateUpdated", array()), "localeTime", array(), "method"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 310
                if ($this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "revisionNotes", array())) {
                    // line 311
                    echo "\t\t\t\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t\t\t\t<h5 class=\"heading\">";
                    // line 312
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Version Notes"), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t<div class=\"value\">";
                    // line 313
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["entry"] ?? $this->getContext($context, "entry")), "revisionNotes", array()), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 316
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 318
            echo "
\t\t\t\t";
        }
        // line 320
        echo "
\t\t\t\t";
        // line 322
        echo "\t\t\t\t";
        echo \Craft\craft()->templates->invokeHook("cp.entries.edit.right-pane", $context);

        // line 323
        echo "
\t\t\t\t";
        // line 324
        if (((( !        // line 325
($context["isDraft"] ?? $this->getContext($context, "isDraft")) &&  !($context["isVersion"] ?? $this->getContext($context, "isVersion"))) && ($context["canSave"] ?? $this->getContext($context, "canSave"))) && $this->getAttribute(        // line 326
($context["section"] ?? $this->getContext($context, "section")), "enableVersioning", array()))) {
            // line 328
            echo "\t\t\t\t\t<hr>
\t\t\t\t\t<input type=\"text\" name=\"revisionNotes\" class=\"fullwidth textline\" placeholder=\"";
            // line 329
            echo twig_escape_filter($this->env, \Craft\Craft::t("Notes about your changes"), "html", null, true);
            echo "\" autocomplete=\"off\">
\t\t\t\t";
        }
        // line 331
        echo "
\t\t\t</div><!--/item-->
\t\t</div><!--/grid-->
";
    }

    public function getTemplateName()
    {
        return "entries/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 331,  671 => 329,  668 => 328,  666 => 326,  665 => 325,  664 => 324,  661 => 323,  657 => 322,  654 => 320,  650 => 318,  646 => 316,  640 => 313,  636 => 312,  633 => 311,  631 => 310,  624 => 308,  620 => 307,  612 => 304,  608 => 303,  604 => 301,  602 => 300,  597 => 297,  592 => 295,  591 => 293,  590 => 292,  587 => 291,  584 => 290,  577 => 286,  573 => 285,  570 => 284,  568 => 283,  565 => 282,  560 => 279,  558 => 278,  557 => 277,  556 => 274,  553 => 273,  550 => 272,  548 => 271,  545 => 270,  543 => 269,  540 => 268,  536 => 266,  534 => 265,  533 => 264,  532 => 263,  531 => 259,  527 => 257,  525 => 256,  524 => 255,  523 => 254,  522 => 250,  519 => 249,  515 => 247,  513 => 246,  512 => 244,  511 => 242,  509 => 238,  507 => 237,  504 => 236,  500 => 234,  498 => 233,  497 => 232,  496 => 230,  495 => 229,  494 => 227,  492 => 223,  490 => 222,  486 => 220,  484 => 219,  483 => 218,  482 => 216,  481 => 213,  480 => 211,  477 => 210,  473 => 208,  471 => 207,  470 => 206,  468 => 202,  465 => 201,  463 => 200,  459 => 198,  457 => 197,  454 => 196,  450 => 194,  443 => 192,  439 => 190,  432 => 189,  430 => 187,  429 => 186,  428 => 185,  425 => 182,  424 => 180,  423 => 178,  419 => 177,  417 => 176,  411 => 175,  408 => 174,  403 => 173,  401 => 172,  398 => 171,  396 => 170,  393 => 169,  390 => 168,  387 => 167,  385 => 166,  378 => 161,  376 => 159,  374 => 158,  372 => 157,  366 => 153,  360 => 151,  357 => 150,  350 => 149,  344 => 148,  339 => 147,  336 => 146,  333 => 145,  325 => 139,  320 => 137,  316 => 135,  309 => 130,  301 => 128,  299 => 127,  292 => 125,  289 => 124,  276 => 122,  274 => 121,  271 => 120,  268 => 119,  265 => 118,  262 => 117,  259 => 116,  256 => 115,  253 => 114,  251 => 113,  245 => 110,  241 => 109,  237 => 108,  229 => 103,  223 => 100,  219 => 98,  217 => 97,  214 => 96,  208 => 93,  202 => 90,  198 => 89,  194 => 87,  192 => 85,  191 => 84,  189 => 83,  186 => 81,  184 => 80,  180 => 78,  176 => 76,  169 => 72,  165 => 71,  161 => 70,  156 => 67,  154 => 66,  151 => 65,  147 => 63,  145 => 62,  142 => 61,  135 => 57,  131 => 56,  126 => 53,  124 => 52,  120 => 50,  118 => 49,  115 => 48,  113 => 46,  111 => 45,  108 => 43,  106 => 41,  105 => 40,  104 => 39,  102 => 38,  97 => 35,  91 => 32,  85 => 31,  81 => 29,  78 => 28,  75 => 27,  70 => 8,  67 => 7,  65 => 6,  60 => 5,  57 => 4,  53 => 1,  49 => 338,  47 => 337,  44 => 24,  42 => 20,  41 => 19,  40 => 18,  39 => 17,  37 => 16,  35 => 14,  33 => 13,  31 => 12,  29 => 11,  27 => 2,  11 => 1,);
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
{% import \"_includes/forms\" as forms %}

{% block pageTitle %}
\t{{ parent() }}
\t{% if entry.id %}
\t\t{% include \"entries/_revisions\" %}
\t{% endif %}
{% endblock %}

{% set sectionHandle = section.handle %}
{% set isSingle = section.type == 'single' %}
{% set isVersion = entry.getClassHandle() == 'EntryVersion' %}
{% set isDraft = entry.id and entry.getClassHandle() == 'EntryDraft' %}

{% set canPublish = currentUser.can('publishEntries'~permissionSuffix) %}
{% set canSave = (
\t(entry.id or currentUser.can('createEntries'~permissionSuffix)) and
\t(not entry.id or not entry.enabled or canPublish) and
\t(isSingle or entry.authorId == currentUser.id or currentUser.can('publishPeerEntries'~permissionSuffix))
) %}


{% hook \"cp.entries.edit\" %}


{% block saveButton %}
\t{% if isDraft %}

\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"{{ baseCpEditUrl }}/drafts/{{ entry.draftId }}\">
\t\t<input type=\"hidden\" name=\"draftId\" value=\"{{ entry.draftId }}\">

\t\t<div class=\"btngroup\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save draft'|t }}\">

\t\t\t{# Are they allowed to publish this draft? #}
\t\t\t{% set canPublishDraft = (
\t\t\t\tcanPublish and
\t\t\t\t(isSingle or entry.authorId == currentUser.id or currentUser.can('publishPeerEntries'~permissionSuffix)) and
\t\t\t\t(entry.creatorId == currentUser.id or currentUser.can('publishPeerEntryDrafts'~permissionSuffix))
\t\t\t) %}

\t\t\t{# Are they allowed to delete this draft? #}
\t\t\t{% set canDeleteDraft = (
\t\t\t\tentry.creatorId == currentUser.id or currentUser.can('deletePeerEntryDrafts'~permissionSuffix)
\t\t\t) %}

\t\t\t{% if canPublishDraft or canDeleteDraft %}
\t\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t{% if canPublishDraft %}
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a class=\"formsubmit\"
\t\t\t\t\t\t\t       data-action=\"entryRevisions/publishDraft\"
\t\t\t\t\t\t\t       data-redirect=\"{{ entry.getCpEditUrl() }}\">
\t\t\t\t\t\t\t\t{{ \"Publish draft\"|t }}
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if canPublishDraft and canDeleteDraft %}
\t\t\t\t\t\t<hr>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if canDeleteDraft %}
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a class=\"formsubmit\"
\t\t\t\t\t\t\t       data-action=\"entryRevisions/deleteDraft\"
\t\t\t\t\t\t\t       data-confirm=\"{{ 'Are you sure you want to delete this draft?'|t }}\"
\t\t\t\t   \t\t\t       data-redirect=\"{{ entry.getCpEditUrl() }}\">
\t\t\t\t\t\t\t\t{{ 'Delete draft'|t }}
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>

\t{% elseif isVersion %}

\t\t{# Are they allowed to publish changes? #}
\t\t{% if
\t\t\tcanPublish and
\t\t\t(isSingle or entry.authorId == currentUser.id or currentUser.can('publishPeerEntries'~permissionSuffix))
\t\t%}

\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/revertEntryToVersion\">
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"{{ entry.getCpEditUrl() }}\">
\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"{{ entry.versionId }}\">

\t\t\t<div class=\"secondary-buttons\">
\t\t\t\t<input type=\"button\" class=\"btn submit formsubmit\" value=\"{{ 'Revert entry to this version'|t }}\">
\t\t\t</div>
\t\t{% endif %}

\t{% elseif canSave %}

\t\t<input type=\"hidden\" name=\"action\" value=\"entries/saveEntry\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"entries/{{ sectionHandle }}\">

\t\t<div class=\"btngroup\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t }}\">

\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"{{ continueEditingUrl }}\">
\t\t\t\t\t\t{{ forms.optionShortcutLabel('S') }}
\t\t\t\t\t\t{{ \"Save and continue editing\"|t }}
\t\t\t\t\t</a></li>

\t\t\t\t\t{% set nextEntryParams = [] %}
\t\t\t\t\t{% if showEntryTypes %}
\t\t\t\t\t\t{% set nextEntryParams = nextEntryParams|merge(['typeId={type.id}']) %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if section.type == 'structure' %}
\t\t\t\t\t\t{% set nextEntryParams = nextEntryParams|merge(['parentId={parent.id}']) %}
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if not isSingle %}
\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"entries/{{ sectionHandle }}/new{% if nextEntryParams %}?{{ nextEntryParams|join('&') }}{% endif %}\">{{ \"Save and add another\"|t }}</a></li>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<li><a class=\"formsubmit\" data-action=\"entryRevisions/saveDraft\" data-redirect=\"{{ baseCpEditUrl }}/drafts/{draftId}\">{{ 'Save as a draft'|t }}</a></li>

\t\t\t\t\t{% if not isSingle and entry.id %}
\t\t\t\t\t\t<li><a class=\"formsubmit\" data-param=\"entryId\" data-value=\"\" data-redirect=\"{{ continueEditingUrl }}\">{{ \"Save as a new entry\"|t }}</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t{% else %}

\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"{{ baseCpEditUrl }}/drafts/{draftId}\">

\t\t<input type=\"submit\" class=\"btn submit first\" value=\"{{ 'Save as a draft'|t }}\">

\t{% endif %}
{% endblock %}


{% block main %}
\t\t{% if not isVersion %}
\t\t\t<input type=\"hidden\" name=\"sectionId\" value=\"{{ section.id }}\">
\t\t\t{% if entry.id %}<input type=\"hidden\" name=\"entryId\" value=\"{{ entry.id }}\">{% endif %}
\t\t\t{% if craft.isLocalized() %}<input type=\"hidden\" name=\"locale\" value=\"{{ entry.locale }}\">{% endif %}
\t\t{% else %}
\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"{{ entry.versionId }}\">
\t\t{% endif %}

\t\t<div class=\"grid first\" data-max-cols=\"3\">
\t\t\t<div class=\"item\" data-position=\"left\" data-colspan=\"2\">
\t\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t\t{% include \"_includes/tabs\" %}
\t\t\t\t\t{% include \"entries/_fields\" with {
\t\t\t\t\t\tstatic: isVersion
\t\t\t\t\t} %}
\t\t\t\t</div>
\t\t\t</div><!--/item-->

\t\t\t<div class=\"item\" data-position=\"right\">

\t\t\t\t{% if showPreviewBtn %}
\t\t\t\t\t{% include \"_includes/previewbtns\" %}
\t\t\t\t{% endif %}

\t\t\t\t{% if craft.isLocalized() and section.getLocales() | length > 1 %}
\t\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t\t{% set parentIdParam = craft.request.getParam('parentId.0') ?: craft.request.getParam('parentId') %}
\t\t\t\t\t\t{% for localeId in localeIds %}
\t\t\t\t\t\t\t{% set localeName = craft.i18n.getLocaleById(localeId).name %}
\t\t\t\t\t\t\t<li{% if localeId == entry.locale %} class=\"sel\"{% endif %}>
\t\t\t\t\t\t\t\t{%- if localeId == entry.locale -%}
\t\t\t\t\t\t\t\t\t{{ localeName }}
\t\t\t\t\t\t\t\t\t{{ forms.lightswitch({
\t\t\t\t\t\t\t\t\t\tname: 'localeEnabled',
\t\t\t\t\t\t\t\t\t\ton:   entry.localeEnabled,
\t\t\t\t\t\t\t\t\t\tsmall: true,
\t\t\t\t\t\t\t\t\t\tdisabled: isVersion
\t\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t\t{%- else -%}
\t\t\t\t\t\t\t\t\t{% set localeUrl = url(
\t\t\t\t\t\t\t\t\t\t'entries/'~sectionHandle~'/'~craft.request.getSegment(3)~'/'~localeId,
\t\t\t\t\t\t\t\t\t\t(parentIdParam ? { parentId: parentIdParam })
\t\t\t\t\t\t\t\t\t) -%}
\t\t\t\t\t\t\t\t\t<a href=\"{{ localeUrl }}\">{{ localeName }}</a>
\t\t\t\t\t\t\t\t\t<div class=\"status {{ localeId in enabledLocales ? 'enabled' : 'disabled' }}\"></div>
\t\t\t\t\t\t\t\t{%- endif -%}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t{% endif %}

\t\t\t\t{% if not isSingle or canPublish %}
\t\t\t\t\t<div id=\"settings\" class=\"pane meta\">

\t\t\t\t\t\t{% if not isSingle %}
\t\t\t\t\t\t\t{% if showEntryTypes %}
\t\t\t\t\t\t\t\t{{ forms.selectField({
\t\t\t\t\t\t\t\t\tlabel: \"Entry Type\"|t,
\t\t\t\t\t\t\t\t\tid: 'entryType',
\t\t\t\t\t\t\t\t\tname: 'typeId',
\t\t\t\t\t\t\t\t\tvalue: entryType.id,
\t\t\t\t\t\t\t\t\toptions: entryTypeOptions
\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{{ forms.textField({
\t\t\t\t\t\t\t\tlabel: \"Slug\"|t,
\t\t\t\t\t\t\t\tlocale: entry.locale,
\t\t\t\t\t\t\t\tid: 'slug',
\t\t\t\t\t\t\t\tname: 'slug',
\t\t\t\t\t\t\t\tvalue: entry.slug,
\t\t\t\t\t\t\t\tplaceholder: \"Enter slug\"|t,
\t\t\t\t\t\t\t\terrors: (not isVersion ? entry.getErrors('slug')|merge(entry.getErrors('uri'))),
\t\t\t\t\t\t\t\tdisabled: isVersion
\t\t\t\t\t\t\t}) }}

\t\t\t\t\t\t\t{% if parentOptionCriteria is defined %}
\t\t\t\t\t\t\t\t{{ forms.elementSelectField({
\t\t\t\t\t\t\t\t\tlabel: \"Parent\"|t,
\t\t\t\t\t\t\t\t\tid: 'parentId',
\t\t\t\t\t\t\t\t\tname: 'parentId',
\t\t\t\t\t\t\t\t\telementType: elementType,
\t\t\t\t\t\t\t\t\tselectionLabel: \"Choose\"|t,
\t\t\t\t\t\t\t\t\tsources: ['section:'~section.id],
\t\t\t\t\t\t\t\t\tcriteria: parentOptionCriteria,
\t\t\t\t\t\t\t\t\tlimit: 1,
\t\t\t\t\t\t\t\t\telements: (parent is defined and parent ? [parent]),
\t\t\t\t\t\t\t\t\terrors: entry.getErrors('parent')
\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if CraftEdition == CraftPro and currentUser.can('editPeerEntries'~permissionSuffix) %}
\t\t\t\t\t\t\t\t{{ forms.elementSelectField({
\t\t\t\t\t\t\t\t\tlabel: \"Author\"|t,
\t\t\t\t\t\t\t\t\tid: 'author',
\t\t\t\t\t\t\t\t\tname: 'author',
\t\t\t\t\t\t\t\t\telementType: userElementType,
\t\t\t\t\t\t\t\t\tselectionLabel: \"Choose\"|t,
\t\t\t\t\t\t\t\t\tcriteria: authorOptionCriteria,
\t\t\t\t\t\t\t\t\tlimit: 1,
\t\t\t\t\t\t\t\t\telements: (author is defined and author ? [author])
\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{{ forms.dateTimeField({
\t\t\t\t\t\t\t\tlabel: \"Post Date\"|t,
\t\t\t\t\t\t\t\tid: 'postDate',
\t\t\t\t\t\t\t\tname: 'postDate',
\t\t\t\t\t\t\t\tvalue: (entry.postDate ? entry.postDate : null),
\t\t\t\t\t\t\t\terrors: entry.getErrors('postDate'),
\t\t\t\t\t\t\t\tdisabled: isVersion
\t\t\t\t\t\t\t}) }}

\t\t\t\t\t\t\t{{ forms.dateTimeField({
\t\t\t\t\t\t\t\tlabel: \"Expiry Date\"|t,
\t\t\t\t\t\t\t\tid: 'expiryDate',
\t\t\t\t\t\t\t\tname: 'expiryDate',
\t\t\t\t\t\t\t\tvalue: (entry.expiryDate ? entry.expiryDate : null),
\t\t\t\t\t\t\t\terrors: entry.getErrors('expiryDate'),
\t\t\t\t\t\t\t\tdisabled: isVersion
\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if canPublish or (not isVersion and canDeleteEntry) %}

\t\t\t\t\t\t\t{% set statusInput %}
\t\t\t\t\t\t\t\t{% if canPublish %}
\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t{{ forms.lightswitch({
\t\t\t\t\t\t\t\t\t\t\tid: 'enabled',
\t\t\t\t\t\t\t\t\t\t\tname: 'enabled',
\t\t\t\t\t\t\t\t\t\t\ton: entry.enabled,
\t\t\t\t\t\t\t\t\t\t\tdisabled: isVersion
\t\t\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if not isSingle and not isVersion and canDeleteEntry %}
\t\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"{{ 'Delete'|t }}\" data-action=\"entries/deleteEntry\"
\t\t\t\t\t\t\t\t\t\t\tdata-confirm=\"{{ 'Are you sure you want to delete this entry?'|t }}\"
\t\t\t\t\t\t\t\t\t\t\tdata-redirect=\"entries\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endset %}

\t\t\t\t\t\t\t{{ forms.field({
\t\t\t\t\t\t\t\tlabel: (canPublish ? \"Enabled\"|t),
\t\t\t\t\t\t\t\tid: 'enabled'
\t\t\t\t\t\t\t}, statusInput) }}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</div><!--/pane-->

\t\t\t\t\t{% if entry.id %}
\t\t\t\t\t\t<div class=\"pane lightpane meta\">
\t\t\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t\t\t<h5 class=\"heading\">{{ \"Date Created\"|t }}</h5>
\t\t\t\t\t\t\t\t<div class=\"value\">{{ entry.dateCreated.localeDate() }} {{ entry.dateCreated.localeTime() }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t\t\t<h5 class=\"heading\">{{ \"Date Updated\"|t }}</h5>
\t\t\t\t\t\t\t\t<div class=\"value\">{{ entry.dateUpdated.localeDate() }} {{ entry.dateUpdated.localeTime() }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if entry.revisionNotes %}
\t\t\t\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t\t\t\t<h5 class=\"heading\">{{ \"Version Notes\"|t }}</h5>
\t\t\t\t\t\t\t\t\t<div class=\"value\">{{ entry.revisionNotes }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t{% endif %}

\t\t\t\t{# Give plugins a chance to add other panes here #}
\t\t\t\t{% hook \"cp.entries.edit.right-pane\" %}

\t\t\t\t{% if (
\t\t\t\t\tnot isDraft and not isVersion and canSave and
\t\t\t\t\tsection.enableVersioning
\t\t\t\t) %}
\t\t\t\t\t<hr>
\t\t\t\t\t<input type=\"text\" name=\"revisionNotes\" class=\"fullwidth textline\" placeholder=\"{{ 'Notes about your changes'|t }}\" autocomplete=\"off\">
\t\t\t\t{% endif %}

\t\t\t</div><!--/item-->
\t\t</div><!--/grid-->
{% endblock %}


{% if not entry.slug %}
\t{% includejs \"window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');\" %}
{% endif %}
", "entries/_edit", "");
    }
}
