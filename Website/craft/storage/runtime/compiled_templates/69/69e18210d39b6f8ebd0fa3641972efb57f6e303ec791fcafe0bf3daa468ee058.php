<?php

/* _layouts/cp */
class __TwigTemplate_56295f5bc47337500a72a2bd9732a4648be889c7800580b18216ffc58f79ce12 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "_layouts/cp", 1);
        $this->blocks = array(
            'saveButton' => array($this, 'block_saveButton'),
            'containerAttributes' => array($this, 'block_containerAttributes'),
            'body' => array($this, 'block_body'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $_js = "css/cp.css";
        \Craft\craft()->templates->includecssresource($_js, true);
        // line 4
        \Craft\craft()->templates->includeTranslations(
        	"(blank)",
        	"1 update available",
        	"Actions",
        	"Apply this to the {number} remaining conflicts?",
        	"An unknown error occurred.",
        	"Any changes will be lost if you leave this page.",
        	"Are you sure you want to delete “{name}”?",
        	"Are you sure you want to transfer your license to this domain?",
        	"Buy {name}",
        	"Cancel",
        	"Choose a user",
        	"Choose which table columns should be visible for this source, and in which order.",
        	"Close",
        	"Close Live Preview",
        	"Continue",
        	"Couldn’t delete “{name}”.",
        	"Couldn’t save new order.",
        	"Create",
        	"day",
        	"days",
        	"Delete folder",
        	"Delete heading",
        	"Delete it",
        	"Delete user",
        	"Delete users",
        	"Delete",
        	"Display as thumbnails",
        	"Display in a table",
        	"Done",
        	"Enter the name of the folder",
        	"Enter your password to continue.",
        	"Enter your password to log back in.",
        	"Failed task",
        	"Failed",
        	"Handle",
        	"Heading",
        	"Hide sidebar",
        	"hour",
        	"hours",
        	"Incorrect password.",
        	"Instructions",
        	"Keep me logged in",
        	"License transferred.",
        	"Log out now",
        	"Login",
        	"minute",
        	"minutes",
        	"More",
        	"Move",
        	"Name",
        	"New category",
        	"New child",
        	"New entry",
        	"New heading",
        	"New order saved.",
        	"New position saved.",
        	"New subfolder",
        	"New {group} category",
        	"New {section} entry",
        	"Options",
        	"Password",
        	"Pay {price}",
        	"Pending",
        	"Really delete folder “{folder}”?",
        	"Remove",
        	"Rename folder",
        	"Reorder",
        	"Save",
        	"Score",
        	"Search in subfolders",
        	"second",
        	"seconds",
        	"Select transform",
        	"Select",
        	"Settings",
        	"Show sidebar",
        	"Show/hide children",
        	"Sort by {attribute}",
        	"Source settings saved",
        	"Structure",
        	"Submit",
        	"Table Columns",
        	"This can be left blank if you just want an unlabeled separator.",
        	"Transfer it to:",
        	"Try again",
        	"Upload failed for {filename}",
        	"Upload files",
        	"week",
        	"weeks",
        	"What do you want to do with their content?",
        	"What do you want to do?",
        	"Your session has ended.",
        	"Your session will expire in {time}.",
        	"{ctrl}C to copy.",
        	"{num} updates available",
        	"“{name}” deleted."
        );
        // line 104
        $_js = (("Craft.cp.setTaskInfo(" . $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "tasks", array()), "getTaskInfo", array(), "method"))) . ", false);");
        \Craft\craft()->templates->includejs($_js);
        // line 105
        if ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "tasks", array()), "isTaskRunning", array(), "method")) {
            // line 106
            $_js = "Craft.cp.trackTaskProgress(true);";
            \Craft\craft()->templates->includejs($_js);
        } elseif ($this->getAttribute($this->getAttribute(        // line 107
($context["craft"] ?? $this->getContext($context, "craft")), "tasks", array()), "areTasksPending", array(), "method")) {
            // line 108
            $_js = "Craft.cp.runPendingTasks();";
            \Craft\craft()->templates->includejs($_js);
        }
        // line 112
        $context["forceConfirmUnload"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "session", array()), "hasFlash", array(0 => "error"), "method");
        // line 113
        $context["fullPageForm"] = ((isset($context["fullPageForm"]) || array_key_exists("fullPageForm", $context)) && ($context["fullPageForm"] ?? $this->getContext($context, "fullPageForm")));
        // line 115
        if ((($context["fullPageForm"] ?? $this->getContext($context, "fullPageForm")) &&  !(isset($context["extraPageHeaderHtml"]) || array_key_exists("extraPageHeaderHtml", $context)))) {
            // line 116
            ob_start();
            // line 117
            ob_start();
            // line 118
            echo "\t\t\t";
            $this->displayBlock('saveButton', $context, $blocks);
            // line 121
            echo "\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 125
        ob_start();
        // line 126
        $this->displayBlock('containerAttributes', $context, $blocks);
        $context["containerAttributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 118
    public function block_saveButton($context, array $blocks = array())
    {
        // line 119
        echo "\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t\t";
    }

    // line 126
    public function block_containerAttributes($context, array $blocks = array())
    {
        // line 127
        echo "id=\"container\" ";
        if (($context["fullPageForm"] ?? $this->getContext($context, "fullPageForm"))) {
            // line 128
            echo "method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut";
            if ((isset($context["saveShortcutRedirect"]) || array_key_exists("saveShortcutRedirect", $context))) {
                echo " data-saveshortcut-redirect=\"";
                echo twig_escape_filter($this->env, ($context["saveShortcutRedirect"] ?? $this->getContext($context, "saveShortcutRedirect")), "html", null, true);
                echo "\"";
            }
            echo " data-confirm-unload";
        }
    }

    // line 134
    public function block_body($context, array $blocks = array())
    {
        // line 135
        echo "\t<header id=\"global-sidebar\">

\t\t";
        // line 137
        if (($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "admin", array()) && $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "devMode", array()))) {
            // line 138
            echo "\t\t\t<div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Craft CMS is running in Dev Mode."), "html", null, true);
            echo "\"></div>
\t\t";
        }
        // line 140
        echo "
\t\t<div class=\"topbar\">

\t\t\t<a class=\"site-name";
        // line 143
        if (((($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition")) >= ($context["CraftClient"] ?? $this->getContext($context, "CraftClient"))) && $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "rebrand", array()), "isIconUploaded", array()))) {
            echo " has-icon";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Site Homepage"), "html", null, true);
        echo "\" target=\"_blank\">

\t\t\t\t";
        // line 145
        if ((($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition")) >= ($context["CraftClient"] ?? $this->getContext($context, "CraftClient")))) {
            // line 146
            echo "\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "rebrand", array()), "isIconUploaded", array())) {
                // line 147
                echo "\t\t\t\t\t\t<div id=\"site-icon\" class=\"photo-container\">
\t\t\t\t\t\t\t<img src=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "rebrand", array()), "icon", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 151
            echo "\t\t\t\t";
        }
        // line 152
        echo "
\t\t\t\t<h2>";
        // line 153
        echo twig_escape_filter($this->env, \Craft\Craft::t(($context["siteName"] ?? $this->getContext($context, "siteName"))), "html", null, true);
        echo "</h2>
\t\t\t</a>

\t\t\t";
        // line 156
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "performUpdates"), "method")) {
            // line 157
            echo "\t\t\t\t";
            if ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "isUpdateInfoCached", array(), "method")) {
                // line 158
                echo "\t\t\t\t\t";
                $context["totalUpdates"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "getTotalAvailableUpdates", array(), "method");
                // line 159
                echo "\t\t\t\t\t";
                if (($context["totalUpdates"] ?? $this->getContext($context, "totalUpdates"))) {
                    // line 160
                    echo "\t\t\t\t\t\t";
                    if ((($context["totalUpdates"] ?? $this->getContext($context, "totalUpdates")) == 1)) {
                        // line 161
                        echo "\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("1 update available");
                        // line 162
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 163
                        echo "\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("{num} updates available", array("num" => ($context["totalUpdates"] ?? $this->getContext($context, "totalUpdates"))));
                        // line 164
                        echo "\t\t\t\t\t\t";
                    }
                    // line 165
                    echo "\t\t\t\t\t\t<a class=\"updates";
                    if ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "isCriticalUpdateAvailable", array(), "method")) {
                        echo " critical";
                    }
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, ($context["updateText"] ?? $this->getContext($context, "updateText")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<span data-icon=\"newstamp\">
\t\t\t\t\t\t\t\t<span>";
                    // line 167
                    echo twig_escape_filter($this->env, ($context["totalUpdates"] ?? $this->getContext($context, "totalUpdates")), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t";
            } else {
                // line 172
                echo "\t\t\t\t\t";
                $_js = "Craft.cp.checkForUpdates();";
                \Craft\craft()->templates->includejs($_js);
                // line 173
                echo "\t\t\t\t";
            }
            // line 174
            echo "\t\t\t";
        }
        // line 175
        echo "\t\t</div>

\t\t<nav>
\t\t\t<ul id=\"nav\">

\t\t\t\t";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "cp", array()), "nav", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
            // line 181
            echo "
\t\t\t\t\t";
            // line 182
            $context["hasSubnav"] = ((isset($context["subnav"]) || array_key_exists("subnav", $context)) && ($context["subnav"] ?? $this->getContext($context, "subnav")));
            // line 183
            echo "
\t\t\t\t\t<li id=\"nav-";
            // line 184
            echo twig_escape_filter($this->env, $context["handle"], "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["item"], "sel", array()) && ($context["hasSubnav"] ?? $this->getContext($context, "hasSubnav")))) {
                echo " class=\"has-subnav\"";
            }
            echo ">
\t\t\t\t\t\t<a";
            // line 185
            if ($this->getAttribute($context["item"], "sel", array())) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<span class=\"icon\">";
            // line 187
            if ($this->getAttribute($context["item"], "icon", array(), "any", true, true)) {
                // line 188
                echo "<span data-icon=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                echo "\"></span>";
            } elseif (($this->getAttribute(            // line 189
$context["item"], "iconSvg", array(), "any", true, true) && $this->getAttribute($context["item"], "iconSvg", array()))) {
                // line 190
                echo $this->getAttribute($context["item"], "iconSvg", array());
            } else {
                // line 192
                $this->loadTemplate("_includes/defaulticon.svg", "_layouts/cp", 192)->display(array_merge($context, array("label" => $this->getAttribute($context["item"], "label", array()))));
            }
            // line 194
            echo "</span>

\t\t\t\t\t\t\t<span class=\"label\">";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            // line 198
            echo "</span>";
            // line 200
            if (($this->getAttribute($context["item"], "badge", array(), "any", true, true) && $this->getAttribute($context["item"], "badge", array()))) {
                // line 201
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "badge", array()), "html", null, true);
                echo "</span>";
            }
            // line 203
            echo "</a>

\t\t\t\t\t\t";
            // line 205
            if (($this->getAttribute($context["item"], "sel", array()) && ($context["hasSubnav"] ?? $this->getContext($context, "hasSubnav")))) {
                // line 206
                echo "\t\t\t\t            <ul class=\"subnav\">
\t\t\t\t                ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["subnav"] ?? $this->getContext($context, "subnav")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["itemId"] => $context["item"]) {
                    // line 208
                    echo "\t\t\t\t                    ";
                    $context["itemIsSelected"] = ((                    // line 209
(isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context)) && (($context["selectedSubnavItem"] ?? $this->getContext($context, "selectedSubnavItem")) == $context["itemId"])) || ( !                    // line 210
(isset($context["selectedSubnavItem"]) || array_key_exists("selectedSubnavItem", $context)) && $this->getAttribute($context["loop"], "first", array())));
                    // line 213
                    echo "<li>
\t\t\t\t                    \t<a href=\"";
                    // line 214
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl($this->getAttribute($context["item"], "url", array())), "html", null, true);
                    echo "\"";
                    if (($context["itemIsSelected"] ?? $this->getContext($context, "itemIsSelected"))) {
                        echo " class=\"sel\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</a>
\t\t\t\t                    </li>

\t\t\t\t                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['itemId'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "\t\t\t\t            </ul>
\t\t\t\t\t\t";
            }
            // line 220
            echo "
\t\t\t\t\t</li>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t</ul>
\t\t</nav>

\t\t<div class=\"bottombar\">
\t\t\t<a id=\"account-info\" class=\"menubtn\" title=\"";
        // line 227
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "\" role=\"button\" data-menu-anchor=\"#account-menu-anchor\">
\t\t\t\t<div id=\"user-photo\" class=\"photo-container\">
\t\t\t\t\t<img width=\"32\" sizes=\"32px\" srcset=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "getThumbUrl", array(0 => 32), "method"), "html", null, true);
        echo " 32w, ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "getThumbUrl", array(0 => 64), "method"), "html", null, true);
        echo " 64w\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "getName", array(), "method"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"username\">
\t\t\t\t\t";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "name", array()), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 233
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "admin", array())) {
            echo "<div class=\"light\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("admin"), "html", null, true);
            echo "</div>";
        }
        // line 234
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"account-menu-anchor\"></div>
\t\t\t</a>
\t\t\t<div class=\"menu\" data-align=\"left\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 239
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t";
        // line 240
        if (((($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition")) == ($context["CraftClient"] ?? $this->getContext($context, "CraftClient"))) && $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "admin", array()))) {
            // line 241
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("clientaccount"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Client’s Account"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 243
        echo "\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, ($context["logoutUrl"] ?? $this->getContext($context, "logoutUrl")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Sign out"), "html", null, true);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t</header>

\t";
        // line 250
        if (($context["fullPageForm"] ?? $this->getContext($context, "fullPageForm"))) {
            // line 251
            echo "\t\t<form ";
            echo twig_escape_filter($this->env, ($context["containerAttributes"] ?? $this->getContext($context, "containerAttributes")), "html", null, true);
            echo ">
\t\t\t";
            // line 252
            echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->getCsrfInputFunction(), "html", null, true);
            echo "
\t";
        } else {
            // line 254
            echo "\t\t<div ";
            echo twig_escape_filter($this->env, ($context["containerAttributes"] ?? $this->getContext($context, "containerAttributes")), "html", null, true);
            echo ">
\t";
        }
        // line 256
        echo "
\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "notice", 1 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 260
            echo "\t\t\t\t\t";
            $context["message"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "session", array()), "getFlash", array(0 => $context["type"]), "method");
            // line 261
            echo "\t\t\t\t\t";
            if (($context["message"] ?? $this->getContext($context, "message"))) {
                // line 262
                echo "\t\t\t\t\t\t<div class=\"notification ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 264
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 268
        if ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "cp", array()), "areAlertsCached", array(), "method")) {
            // line 269
            echo "\t\t\t";
            $context["alerts"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "cp", array()), "getAlerts", array(), "method");
            // line 270
            echo "\t\t\t";
            if (($context["alerts"] ?? $this->getContext($context, "alerts"))) {
                // line 271
                echo "\t\t\t\t<ul id=\"alerts\">
\t\t\t\t\t";
                // line 272
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "cp", array()), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 273
                    echo "\t\t\t\t\t\t<li>";
                    echo $context["alert"];
                    echo "</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 275
                echo "\t\t\t\t</ul>
\t\t\t";
            }
            // line 277
            echo "\t\t";
        } else {
            // line 278
            echo "\t\t\t";
            $_js = "Craft.cp.fetchAlerts();";
            \Craft\craft()->templates->includejs($_js);
            // line 279
            echo "\t\t";
        }
        // line 280
        echo "
\t\t<div class=\"topbar\">";
        // line 282
        ob_start();
        // line 283
        echo "\t\t\t\t";
        if (((isset($context["crumbs"]) || array_key_exists("crumbs", $context)) && ($context["crumbs"] ?? $this->getContext($context, "crumbs")))) {
            // line 284
            echo "\t\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? $this->getContext($context, "crumbs")));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 287
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "label", array()), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 292
        echo "\t\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 293
        echo "</div>


\t\t<header id=\"page-header\">
\t\t\t";
        // line 297
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 314
        echo "\t\t</header>

\t\t";
        // line 317
        echo "\t\t";
        $context["main"] = twig_trim_filter(        $this->renderBlock("main", $context, $blocks));
        // line 318
        echo "\t\t";
        $context["hasCustomLayout"] =  !twig_test_empty(($context["main"] ?? $this->getContext($context, "main")));
        // line 319
        echo "
\t\t<main id=\"main\" role=\"main\"";
        // line 320
        if ( !($context["hasCustomLayout"] ?? $this->getContext($context, "hasCustomLayout"))) {
            echo " class=\"single-pane\"";
        }
        echo ">
\t\t\t<div class=\"padded\">
\t\t\t\t";
        // line 322
        if (($context["hasCustomLayout"] ?? $this->getContext($context, "hasCustomLayout"))) {
            // line 323
            echo "\t\t\t\t\t";
            echo ($context["main"] ?? $this->getContext($context, "main"));
            echo "
\t\t\t\t";
        } else {
            // line 325
            echo "\t\t\t\t\t";
            $context["sidebar"] = (((isset($context["sidebar"]) || array_key_exists("sidebar", $context))) ? (($context["sidebar"] ?? $this->getContext($context, "sidebar"))) : (twig_trim_filter(            $this->renderBlock("sidebar", $context, $blocks))));
            // line 326
            echo "\t\t\t\t\t";
            $context["hasSidebar"] =  !twig_test_empty(($context["sidebar"] ?? $this->getContext($context, "sidebar")));
            // line 327
            echo "
\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t";
            // line 329
            if (((isset($context["tabs"]) || array_key_exists("tabs", $context)) && ($context["tabs"] ?? $this->getContext($context, "tabs")))) {
                // line 330
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("_includes/tabs", "_layouts/cp", 330)->display($context);
                // line 331
                echo "\t\t\t\t\t\t";
            }
            // line 332
            echo "
\t\t\t\t\t\t<div id=\"content\" class=\"content";
            // line 333
            if (($context["hasSidebar"] ?? $this->getContext($context, "hasSidebar"))) {
                echo " has-sidebar";
            }
            echo "\">
\t\t\t\t\t\t\t";
            // line 334
            if (($context["hasSidebar"] ?? $this->getContext($context, "hasSidebar"))) {
                // line 335
                echo "\t\t\t\t\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t";
                // line 336
                echo ($context["sidebar"] ?? $this->getContext($context, "sidebar"));
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 339
            echo "
\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t";
            // line 341
            $this->displayBlock('content', $context, $blocks);
            // line 344
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 348
        echo "\t\t\t</div>
\t\t</main>

\t\t";
        // line 351
        if (((isset($context["docsUrl"]) || array_key_exists("docsUrl", $context)) &&  !twig_test_empty(($context["docsUrl"] ?? $this->getContext($context, "docsUrl"))))) {
            // line 352
            echo "\t\t\t<div id=\"help-footer\">
\t\t\t\t<a id=\"help\" class=\"help\" title=\"";
            // line 353
            echo twig_escape_filter($this->env, \Craft\Craft::t("Help"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["docsUrl"] ?? $this->getContext($context, "docsUrl")), "html", null, true);
            echo "\" target=\"_blank\"></a>
\t\t\t</div>
\t\t";
        }
        // line 356
        echo "
\t\t<div id=\"footer\">";
        // line 359
        ob_start();
        // line 360
        echo "\t\t\t\t";
        $context["canUpgradeEdition"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "canUpgradeEdition", array(), "method");
        // line 361
        echo "\t\t\t\t";
        $context["licensedEdition"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "getLicensedEdition", array(), "method");
        // line 362
        echo "\t\t\t\t";
        $context["isTrial"] = ( !(($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")) === null) &&  !(($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")) === ($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition"))));
        // line 363
        echo "
\t\t\t\t<div id=\"edition\" ";
        // line 364
        if (($context["canUpgradeEdition"] ?? $this->getContext($context, "canUpgradeEdition"))) {
            echo "class=\"hot\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Manage your Craft CMS edition"), "html", null, true);
            echo "\"";
        } else {
            echo "class=\"edition\"";
        }
        echo ">
\t\t\t\t\t<div id=\"edition-logo\">
\t\t\t\t\t\t<div class=\"edition-name\">";
        // line 366
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "getEditionName", array(), "method"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t";
        // line 367
        if (($context["isTrial"] ?? $this->getContext($context, "isTrial"))) {
            // line 368
            echo "\t\t\t\t\t\t\t<div class=\"edition-trial\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Trial"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 370
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 371
        if (($context["canUpgradeEdition"] ?? $this->getContext($context, "canUpgradeEdition"))) {
            // line 372
            echo "\t\t\t\t\t\t<div class=\"icon settings\"></div>
\t\t\t\t\t";
        }
        // line 374
        echo "\t\t\t\t</div>
\t\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 377
        echo "<ul>
\t\t\t\t<li>Craft CMS ";
        // line 378
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "getVersion", array(), "method"), "html", null, true);
        echo "</li>
\t\t\t\t<li>© Pixel &amp; Tonic</li>
\t\t\t\t";
        // line 380
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => "performUpdates"), "method")) {
            // line 381
            echo "\t\t\t\t\t<li><a id=\"footer-updates\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "isUpdateInfoCached", array(), "method") && (isset($context["totalUpdates"]) || array_key_exists("totalUpdates", $context))) && ($context["totalUpdates"] ?? $this->getContext($context, "totalUpdates")))) ? (($context["updateText"] ?? $this->getContext($context, "updateText"))) : (\Craft\Craft::t("Check for updates"))), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 383
        echo "\t\t\t\t";
        if ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "admin", array())) {
            // line 384
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("utils/serverinfo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Server Info"), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 386
        echo "\t\t\t</ul>
\t\t</div>

\t";
        // line 389
        if (($context["fullPageForm"] ?? $this->getContext($context, "fullPageForm"))) {
            // line 390
            echo "\t\t</form>
\t";
        } else {
            // line 392
            echo "\t\t</div>
\t";
        }
    }

    // line 297
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 298
        echo "
\t\t\t\t<div id=\"page-title\">
\t\t\t\t\t";
        // line 300
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 305
        echo "\t\t\t\t</div>

\t\t\t\t";
        // line 307
        if ((isset($context["extraPageHeaderHtml"]) || array_key_exists("extraPageHeaderHtml", $context))) {
            // line 308
            echo "\t\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t\t";
            // line 309
            echo ($context["extraPageHeaderHtml"] ?? $this->getContext($context, "extraPageHeaderHtml"));
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 312
        echo "
\t\t\t";
    }

    // line 300
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 301
        echo "\t\t\t\t\t\t";
        if (((isset($context["title"]) || array_key_exists("title", $context)) && ($context["title"] ?? $this->getContext($context, "title")))) {
            // line 302
            echo "\t\t\t\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t";
        }
        // line 304
        echo "\t\t\t\t\t";
    }

    // line 341
    public function block_content($context, array $blocks = array())
    {
        // line 342
        echo "\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, (((isset($context["content"]) || array_key_exists("content", $context))) ? (($context["content"] ?? $this->getContext($context, "content"))) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  913 => 342,  910 => 341,  906 => 304,  900 => 302,  897 => 301,  894 => 300,  889 => 312,  883 => 309,  880 => 308,  878 => 307,  874 => 305,  872 => 300,  868 => 298,  865 => 297,  859 => 392,  855 => 390,  853 => 389,  848 => 386,  840 => 384,  837 => 383,  829 => 381,  827 => 380,  822 => 378,  819 => 377,  815 => 374,  811 => 372,  809 => 371,  806 => 370,  800 => 368,  798 => 367,  794 => 366,  783 => 364,  780 => 363,  777 => 362,  774 => 361,  771 => 360,  769 => 359,  766 => 356,  758 => 353,  755 => 352,  753 => 351,  748 => 348,  742 => 344,  740 => 341,  736 => 339,  730 => 336,  727 => 335,  725 => 334,  719 => 333,  716 => 332,  713 => 331,  710 => 330,  708 => 329,  704 => 327,  701 => 326,  698 => 325,  692 => 323,  690 => 322,  683 => 320,  680 => 319,  677 => 318,  674 => 317,  670 => 314,  668 => 297,  662 => 293,  659 => 292,  654 => 289,  643 => 287,  639 => 286,  635 => 284,  632 => 283,  630 => 282,  627 => 280,  624 => 279,  620 => 278,  617 => 277,  613 => 275,  604 => 273,  600 => 272,  597 => 271,  594 => 270,  591 => 269,  589 => 268,  584 => 265,  578 => 264,  570 => 262,  567 => 261,  564 => 260,  560 => 259,  555 => 256,  549 => 254,  544 => 252,  539 => 251,  537 => 250,  524 => 243,  516 => 241,  514 => 240,  508 => 239,  501 => 234,  495 => 233,  491 => 232,  481 => 229,  476 => 227,  470 => 223,  454 => 220,  450 => 218,  426 => 214,  423 => 213,  421 => 210,  420 => 209,  418 => 208,  401 => 207,  398 => 206,  396 => 205,  392 => 203,  387 => 201,  385 => 200,  383 => 198,  381 => 197,  377 => 194,  374 => 192,  371 => 190,  369 => 189,  365 => 188,  363 => 187,  355 => 185,  347 => 184,  344 => 183,  342 => 182,  339 => 181,  322 => 180,  315 => 175,  312 => 174,  309 => 173,  305 => 172,  302 => 171,  295 => 167,  283 => 165,  280 => 164,  277 => 163,  274 => 162,  271 => 161,  268 => 160,  265 => 159,  262 => 158,  259 => 157,  257 => 156,  251 => 153,  248 => 152,  245 => 151,  239 => 148,  236 => 147,  233 => 146,  231 => 145,  220 => 143,  215 => 140,  209 => 138,  207 => 137,  203 => 135,  200 => 134,  189 => 128,  186 => 127,  183 => 126,  176 => 119,  173 => 118,  169 => 1,  166 => 126,  164 => 125,  159 => 121,  156 => 118,  154 => 117,  152 => 116,  150 => 115,  148 => 113,  146 => 112,  142 => 108,  140 => 107,  137 => 106,  135 => 105,  132 => 104,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/basecp\" %}

{% includecssresource \"css/cp.css\" first %}
{% includeTranslations
\t\"(blank)\",
\t\"1 update available\",
\t\"Actions\",
\t\"Apply this to the {number} remaining conflicts?\",
\t\"An unknown error occurred.\",
\t\"Any changes will be lost if you leave this page.\",
\t\"Are you sure you want to delete “{name}”?\",
\t\"Are you sure you want to transfer your license to this domain?\",
\t\"Buy {name}\",
\t\"Cancel\",
\t\"Choose a user\",
\t\"Choose which table columns should be visible for this source, and in which order.\",
\t\"Close\",
\t\"Close Live Preview\",
\t\"Continue\",
\t\"Couldn’t delete “{name}”.\",
\t\"Couldn’t save new order.\",
\t\"Create\",
\t\"day\",
\t\"days\",
\t\"Delete folder\",
\t\"Delete heading\",
\t\"Delete it\",
\t\"Delete user\",
\t\"Delete users\",
\t\"Delete\",
\t\"Display as thumbnails\",
\t\"Display in a table\",
\t\"Done\",
\t\"Enter the name of the folder\",
\t\"Enter your password to continue.\",
\t\"Enter your password to log back in.\",
\t\"Failed task\",
\t\"Failed\",
\t\"Handle\",
\t\"Heading\",
\t\"Hide sidebar\",
\t\"hour\",
\t\"hours\",
\t\"Incorrect password.\",
\t\"Instructions\",
\t\"Keep me logged in\",
\t\"License transferred.\",
\t\"Log out now\",
\t\"Login\",
\t\"minute\",
\t\"minutes\",
\t\"More\",
\t\"Move\",
\t\"Name\",
\t\"New category\",
\t\"New child\",
\t\"New entry\",
\t\"New heading\",
\t\"New order saved.\",
\t\"New position saved.\",
\t\"New subfolder\",
\t\"New {group} category\",
\t\"New {section} entry\",
\t\"Options\",
\t\"Password\",
\t\"Pay {price}\",
\t\"Pending\",
\t\"Really delete folder “{folder}”?\",
\t\"Remove\",
\t\"Rename folder\",
\t\"Reorder\",
\t\"Save\",
\t\"Score\",
\t\"Search in subfolders\",
\t\"second\",
\t\"seconds\",
\t\"Select transform\",
\t\"Select\",
\t\"Settings\",
\t\"Show sidebar\",
\t\"Show/hide children\",
\t\"Sort by {attribute}\",
\t\"Source settings saved\",
\t\"Structure\",
\t\"Submit\",
\t\"Table Columns\",
\t\"This can be left blank if you just want an unlabeled separator.\",
\t\"Transfer it to:\",
\t\"Try again\",
\t\"Upload failed for {filename}\",
\t\"Upload files\",
\t\"week\",
\t\"weeks\",
\t\"What do you want to do with their content?\",
\t\"What do you want to do?\",
\t\"Your session has ended.\",
\t\"Your session will expire in {time}.\",
\t\"{ctrl}C to copy.\",
\t\"{num} updates available\",
\t\"“{name}” deleted.\"
%}


{% includejs 'Craft.cp.setTaskInfo('~craft.tasks.getTaskInfo()|json_encode|raw~', false);' %}
{% if craft.tasks.isTaskRunning() %}
\t{% includejs 'Craft.cp.trackTaskProgress(true);' %}
{% elseif craft.tasks.areTasksPending() %}
\t{% includejs 'Craft.cp.runPendingTasks();' %}
{% endif %}


{% set forceConfirmUnload = craft.session.hasFlash('error') %}
{% set fullPageForm = (fullPageForm is defined and fullPageForm) %}

{% if fullPageForm and extraPageHeaderHtml is not defined %}
\t{% set extraPageHeaderHtml %}
\t\t{%- spaceless %}
\t\t\t{% block saveButton %}
\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t }}\">
\t\t\t{% endblock %}
\t\t{% endspaceless -%}
\t{% endset %}
{% endif %}

{% set containerAttributes %}
    {%- block containerAttributes -%}
\t\tid=\"container\" {% if fullPageForm -%}
\t\t\tmethod=\"post\" accept-charset=\"UTF-8\" data-saveshortcut{% if saveShortcutRedirect is defined %} data-saveshortcut-redirect=\"{{ saveShortcutRedirect }}\"{% endif %} data-confirm-unload
\t\t{%- endif %}
    {%- endblock -%}
{% endset %}


{% block body %}
\t<header id=\"global-sidebar\">

\t\t{% if currentUser.admin and craft.config.devMode %}
\t\t\t<div id=\"devmode\" title=\"{{ 'Craft CMS is running in Dev Mode.'|t }}\"></div>
\t\t{% endif %}

\t\t<div class=\"topbar\">

\t\t\t<a class=\"site-name{% if CraftEdition >= CraftClient and craft.rebrand.isIconUploaded %} has-icon{% endif %}\" href=\"{{ siteUrl }}\" title=\"{{ 'Site Homepage'|t }}\" target=\"_blank\">

\t\t\t\t{% if CraftEdition >= CraftClient %}
\t\t\t\t\t{% if craft.rebrand.isIconUploaded %}
\t\t\t\t\t\t<div id=\"site-icon\" class=\"photo-container\">
\t\t\t\t\t\t\t<img src=\"{{ craft.rebrand.icon.url }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}

\t\t\t\t<h2>{{ siteName|t }}</h2>
\t\t\t</a>

\t\t\t{% if currentUser.can('performUpdates') %}
\t\t\t\t{% if craft.app.isUpdateInfoCached() %}
\t\t\t\t\t{% set totalUpdates = craft.app.getTotalAvailableUpdates() %}
\t\t\t\t\t{% if totalUpdates %}
\t\t\t\t\t\t{% if totalUpdates == 1 %}
\t\t\t\t\t\t\t{% set updateText = \"1 update available\"|t %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% set updateText = \"{num} updates available\"|t({ num: totalUpdates }) %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<a class=\"updates{% if craft.app.isCriticalUpdateAvailable() %} critical{% endif %}\" href=\"{{ url('updates') }}\" title=\"{{ updateText }}\">
\t\t\t\t\t\t\t<span data-icon=\"newstamp\">
\t\t\t\t\t\t\t\t<span>{{ totalUpdates }}</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% else %}
\t\t\t\t\t{% includejs 'Craft.cp.checkForUpdates();' %}
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t</div>

\t\t<nav>
\t\t\t<ul id=\"nav\">

\t\t\t\t{% for handle, item in craft.cp.nav() %}

\t\t\t\t\t{% set hasSubnav = (subnav is defined and subnav) %}

\t\t\t\t\t<li id=\"nav-{{ handle }}\"{% if item.sel and hasSubnav %} class=\"has-subnav\"{% endif %}>
\t\t\t\t\t\t<a{% if item.sel %} class=\"sel\"{% endif %} href=\"{{ item.url }}\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t{%- if item.icon is defined -%}
\t\t\t\t\t\t\t\t\t<span data-icon=\"{{ item.icon }}\"></span>
\t\t\t\t\t\t\t\t{%- elseif item.iconSvg is defined and item.iconSvg -%}
\t\t\t\t\t\t\t\t\t{{ item.iconSvg|raw }}
\t\t\t\t\t\t\t\t{%- else -%}
\t\t\t\t\t\t\t\t\t{% include \"_includes/defaulticon.svg\" with { label: item.label } %}
\t\t\t\t\t\t\t\t{%- endif -%}
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<span class=\"label\">
\t\t\t\t\t\t\t\t{{- item.label -}}
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t{%- if item.badge is defined and item.badge -%}
\t\t\t\t\t\t\t\t<span class=\"badge\">{{ item.badge }}</span>
\t\t\t\t\t\t\t{%- endif -%}
\t\t\t\t\t\t</a>

\t\t\t\t\t\t{% if item.sel and hasSubnav  %}
\t\t\t\t            <ul class=\"subnav\">
\t\t\t\t                {% for itemId, item in subnav %}
\t\t\t\t                    {% set itemIsSelected = (
\t\t\t\t                        (selectedSubnavItem is defined and selectedSubnavItem == itemId) or
\t\t\t\t                        (selectedSubnavItem is not defined and loop.first)
\t\t\t\t                    ) -%}

\t\t\t\t                    <li>
\t\t\t\t                    \t<a href=\"{{ url(item.url) }}\"{% if itemIsSelected %} class=\"sel\"{% endif %}>{{ item.label }}</a>
\t\t\t\t                    </li>

\t\t\t\t                {% endfor %}
\t\t\t\t            </ul>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</nav>

\t\t<div class=\"bottombar\">
\t\t\t<a id=\"account-info\" class=\"menubtn\" title=\"{{ 'My Account'|t }}\" role=\"button\" data-menu-anchor=\"#account-menu-anchor\">
\t\t\t\t<div id=\"user-photo\" class=\"photo-container\">
\t\t\t\t\t<img width=\"32\" sizes=\"32px\" srcset=\"{{ currentUser.getThumbUrl(32) }} 32w, {{ currentUser.getThumbUrl(64) }} 64w\" alt=\"{{ currentUser.getName() }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"username\">
\t\t\t\t\t{{ currentUser.name }}
\t\t\t\t\t{% if currentUser.admin %}<div class=\"light\">{{ 'admin'|t }}</div>{% endif %}
\t\t\t\t</div>
\t\t\t\t<div id=\"account-menu-anchor\"></div>
\t\t\t</a>
\t\t\t<div class=\"menu\" data-align=\"left\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{ url('myaccount') }}\">{{ \"My Account\"|t }}</a></li>
\t\t\t\t\t{% if CraftEdition == CraftClient and currentUser.admin %}
\t\t\t\t\t\t<li><a href=\"{{ url('clientaccount') }}\">{{ \"Client’s Account\"|t }}</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li><a href=\"{{ logoutUrl }}\">{{ \"Sign out\"|t }}</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t</header>

\t{% if fullPageForm %}
\t\t<form {{ containerAttributes }}>
\t\t\t{{ getCsrfInput() }}
\t{% else %}
\t\t<div {{ containerAttributes }}>
\t{% endif %}

\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t{% for type in ['notice', 'error'] %}
\t\t\t\t\t{% set message = craft.session.getFlash(type) %}
\t\t\t\t\t{% if message %}
\t\t\t\t\t\t<div class=\"notification {{ type }}\">{{ message }}</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>

\t\t{% if craft.cp.areAlertsCached() %}
\t\t\t{% set alerts = craft.cp.getAlerts() %}
\t\t\t{% if alerts %}
\t\t\t\t<ul id=\"alerts\">
\t\t\t\t\t{% for alert in craft.cp.getAlerts() %}
\t\t\t\t\t\t<li>{{ alert|raw }}</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t{% endif %}
\t\t{% else %}
\t\t\t{% includejs 'Craft.cp.fetchAlerts();' %}
\t\t{% endif %}

\t\t<div class=\"topbar\">
\t\t\t{%- spaceless %}
\t\t\t\t{% if crumbs is defined and crumbs %}
\t\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for crumb in crumbs %}
\t\t\t\t\t\t\t\t<li><a href=\"{{ crumb.url }}\">{{ crumb.label }}</a></li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t{% endif %}
\t\t\t{% endspaceless -%}
\t\t</div>


\t\t<header id=\"page-header\">
\t\t\t{% block pageHeader %}

\t\t\t\t<div id=\"page-title\">
\t\t\t\t\t{% block pageTitle %}
\t\t\t\t\t\t{% if title is defined and title %}
\t\t\t\t\t\t\t<h1>{{ title }}</h1>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>

\t\t\t\t{% if extraPageHeaderHtml is defined %}
\t\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t\t{{ extraPageHeaderHtml|raw }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t{% endblock %}
\t\t</header>

\t\t{# Is the template defining its own layout? #}
\t\t{% set main = block('main')|trim %}
\t\t{% set hasCustomLayout = (main is not empty) %}

\t\t<main id=\"main\" role=\"main\"{% if not hasCustomLayout %} class=\"single-pane\"{% endif %}>
\t\t\t<div class=\"padded\">
\t\t\t\t{% if hasCustomLayout %}
\t\t\t\t\t{{ main|raw }}
\t\t\t\t{% else %}
\t\t\t\t\t{% set sidebar = sidebar is defined ? sidebar : block('sidebar')|trim %}
\t\t\t\t\t{% set hasSidebar = (sidebar is not empty) %}

\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t{% if tabs is defined and tabs %}
\t\t\t\t\t\t\t{% include \"_includes/tabs\" %}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<div id=\"content\" class=\"content{% if hasSidebar %} has-sidebar{% endif %}\">
\t\t\t\t\t\t\t{% if hasSidebar %}
\t\t\t\t\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t{{ sidebar|raw }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t{% block content %}
\t\t\t\t\t\t\t\t\t{{ content is defined ? content }}
\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</main>

\t\t{% if docsUrl is defined and docsUrl is not empty %}
\t\t\t<div id=\"help-footer\">
\t\t\t\t<a id=\"help\" class=\"help\" title=\"{{ 'Help'|t }}\" href=\"{{ docsUrl }}\" target=\"_blank\"></a>
\t\t\t</div>
\t\t{% endif %}

\t\t<div id=\"footer\">

\t\t\t{%- spaceless %}
\t\t\t\t{% set canUpgradeEdition = craft.app.canUpgradeEdition() %}
\t\t\t\t{% set licensedEdition = craft.app.getLicensedEdition() %}
\t\t\t\t{% set isTrial = licensedEdition is not sameas(null) and licensedEdition is not sameas(CraftEdition) %}

\t\t\t\t<div id=\"edition\" {% if canUpgradeEdition %}class=\"hot\" title=\"{{ 'Manage your Craft CMS edition'|t }}\"{% else %}class=\"edition\"{% endif %}>
\t\t\t\t\t<div id=\"edition-logo\">
\t\t\t\t\t\t<div class=\"edition-name\">{{ craft.app.getEditionName() }}</div>
\t\t\t\t\t\t{% if isTrial %}
\t\t\t\t\t\t\t<div class=\"edition-trial\">{{ \"Trial\"|t }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t{% if canUpgradeEdition %}
\t\t\t\t\t\t<div class=\"icon settings\"></div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endspaceless -%}

\t\t\t<ul>
\t\t\t\t<li>Craft CMS {{ craft.app.getVersion() }}</li>
\t\t\t\t<li>© Pixel &amp; Tonic</li>
\t\t\t\t{% if currentUser.can('performUpdates') %}
\t\t\t\t\t<li><a id=\"footer-updates\" href=\"{{ url('updates') }}\">{{ craft.app.isUpdateInfoCached() and totalUpdates is defined and totalUpdates ? updateText : \"Check for updates\"|t }}</a></li>
\t\t\t\t{% endif %}
\t\t\t\t{% if currentUser.admin %}
\t\t\t\t\t<li><a href=\"{{ url('utils/serverinfo') }}\">{{ \"Server Info\"|t }}</a></li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>

\t{% if fullPageForm %}
\t\t</form>
\t{% else %}
\t\t</div>
\t{% endif %}
{% endblock %}
", "_layouts/cp", "");
    }
}
