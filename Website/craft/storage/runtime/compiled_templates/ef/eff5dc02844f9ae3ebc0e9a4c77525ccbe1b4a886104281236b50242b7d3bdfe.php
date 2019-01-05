<?php

/* _layouts/basecp */
class __TwigTemplate_8b18079e9cef97775a218740516e3c9b4840ee4a88a2f3a427439e8321639d33 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/base", "_layouts/basecp", 1);
        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isMobileBrowser", array(0 => true), "method")) {
            // line 5
            $context["bodyClass"] = (((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context)) && ($context["bodyClass"] ?? $this->getContext($context, "bodyClass")))) ? ((($context["bodyClass"] ?? $this->getContext($context, "bodyClass")) . " ")) : ("")) . "mobile");
        }
        // line 8
        $context["localeData"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getLocaleData", array(), "method");
        // line 11
        switch ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "locale", array())) {
            case "en_gb":
            {
                // line 13
                $context["datepickerLocale"] = "en-GB";
                break;
            }
            case "fr_ca":
            {
                // line 15
                $context["datepickerLocale"] = "fr-CA";
                break;
            }
            default:
            {
                // line 17
                $context["language"] = $this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getLanguageID", array(0 => $this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "locale", array())), "method");
                // line 18
                if (twig_in_filter(($context["language"] ?? $this->getContext($context, "language")), array(0 => "ar", 1 => "cs", 2 => "da", 3 => "de", 4 => "fr", 5 => "he", 6 => "hu", 7 => "it", 8 => "ja", 9 => "ko", 10 => "nb", 11 => "nl", 12 => "nn", 13 => "no", 14 => "pl", 15 => "pt", 16 => "ru", 17 => "sk", 18 => "sv", 19 => "tr", 20 => "zh"))) {
                    // line 19
                    $context["datepickerLocale"] = ($context["language"] ?? $this->getContext($context, "language"));
                }
            }
        }
        // line 25
        if ((isset($context["datepickerLocale"]) || array_key_exists("datepickerLocale", $context))) {
            // line 26
            $_js = (("lib/datepicker-i18n/datepicker-" . ($context["datepickerLocale"] ?? $this->getContext($context, "datepickerLocale"))) . ".js");
            \Craft\craft()->templates->includejsresource($_js, true);
        }
        // line 32
        $context["d3Locales"] = array("ca_es" => "ca-ES", "de_ch" => "de-CH", "de" => "de-DE", "en_ca" => "en-CA", "en_gb" => "en-GB", "en" => "en-US", "es" => "es-ES", "fi" => "fi-FI", "fr_ca" => "fr-CA", "fr" => "fr-FR", "he" => "he-IL", "hu" => "hu-HU", "it" => "it-IT", "ja" => "ja-JP", "ko" => "ko-KR", "nl" => "nl-NL", "pl" => "pl-PL", "pt" => "pt-BR", "ru" => "ru-RU", "sv" => "sv-SE", "zh" => "zh-CN");
        // line 56
        if ($this->getAttribute(($context["d3Locales"] ?? null), $this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "locale", array()), array(), "array", true, true)) {
            // line 57
            $context["d3Locale"] = $this->getAttribute(($context["d3Locales"] ?? $this->getContext($context, "d3Locales")), $this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "locale", array()), array(), "array");
        } elseif ($this->getAttribute(        // line 58
($context["d3Locales"] ?? null), ($context["language"] ?? $this->getContext($context, "language")), array(), "array", true, true)) {
            // line 59
            $context["d3Locale"] = $this->getAttribute(($context["d3Locales"] ?? $this->getContext($context, "d3Locales")), ($context["language"] ?? $this->getContext($context, "language")), array(), "array");
        } else {
            // line 61
            $context["d3Locale"] = "en-US";
        }
        // line 65
        $_js = (("lib/d3-i18n/" . ($context["d3Locale"] ?? $this->getContext($context, "d3Locale"))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 67
        $context["useCompressedJs"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "useCompressedJs", array());
        // line 68
        $_js = "js/cp.js";
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 69
        $_js = "js/craft.js";
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 70
        $_js = (("lib/garnish" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 71
        $_js = (("lib/element-resize-detector" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 72
        $_js = (("lib/picturefill" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 73
        $_js = "lib/fileupload/jquery.fileupload.js";
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 74
        $_js = (("lib/jquery.mobile-events" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 75
        $_js = (("lib/selectize/selectize" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 76
        $_js = "lib/selectize/selectize.css";
        \Craft\craft()->templates->includecssresource($_js);
        // line 77
        $_js = (("lib/velocity" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 78
        $_js = "lib/xregexp-all.js";
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 79
        $_js = (("lib/d3/d3" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 80
        $_js = (("lib/jquery-ui" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 81
        $_js = (("lib/jquery-migrate-3.0.1" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 82
        $_js = (("lib/jquery-3.3.1" . ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includejsresource($_js, true);
        // line 84
        \Craft\craft()->templates->includeTranslations(
        	"Show",
        	"Hide"
        );
        // line 86
        $context["orientation"] = $this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getOrientation", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 88
    public function block_foot($context, array $blocks = array())
    {
        // line 89
        echo "
\t<noscript>
\t\t<div class=\"message-container no-access\">
\t\t\t<div class=\"pane notice\">
\t\t\t\t<p>";
        // line 93
        echo twig_escape_filter($this->env, \Craft\Craft::t("JavaScript must be enabled to access the Craft control panel."), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</noscript>

\t<script type=\"text/javascript\">
\t\t// Create the Craft object
\t\twindow.Craft = {
\t\t\tsiteUid:               \"";
        // line 101
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "getSiteUid", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tbaseUrl:               \"";
        // line 102
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseCpUrl:             \"";
        // line 103
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getCpUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseSiteUrl:           \"";
        // line 104
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getSiteUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tactionUrl:             \"";
        // line 105
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getActionUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tresourceUrl:           \"";
        // line 106
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tscriptName:            \"";
        // line 107
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getScriptName", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tomitScriptNameInUrls:  ";
        // line 108
        echo (($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "omitScriptNameInUrls", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tusePathInfo:           ";
        // line 109
        echo (($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "usePathInfo", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tuseCompressedJs:       ";
        // line 110
        echo ((($context["useCompressedJs"] ?? $this->getContext($context, "useCompressedJs"))) ? ("true") : ("false"));
        echo ",
\t\t\tresourceTrigger:       \"";
        // line 111
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "getResourceTrigger", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tactionTrigger:         \"";
        // line 112
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "actionTrigger", array()), "js"), "html", null, true);
        echo "\",
\t\t\tpath:                  \"";
        // line 113
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getPath", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tlocale:                \"";
        // line 114
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "locale", array()), "js"), "html", null, true);
        echo "\",
\t\t\torientation:           \"";
        // line 115
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["orientation"] ?? $this->getContext($context, "orientation")), "js"), "html", null, true);
        echo "\",
\t\t\tleft:                  \"";
        // line 116
        echo (((($context["orientation"] ?? $this->getContext($context, "orientation")) == "ltr")) ? ("left") : ("right"));
        echo "\",
\t\t\tright:                 \"";
        // line 117
        echo (((($context["orientation"] ?? $this->getContext($context, "orientation")) == "ltr")) ? ("right") : ("left"));
        echo "\",
\t\t\tusername:              ";
        // line 118
        echo ((((isset($context["currentUser"]) || array_key_exists("currentUser", $context)) && ($context["currentUser"] ?? $this->getContext($context, "currentUser")))) ? ((("\"" . twig_escape_filter($this->env, $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "username", array()), "js")) . "\"")) : ("null"));
        echo ",
\t\t\tauthTimeout:           ";
        // line 119
        echo twig_escape_filter($this->env, ((!twig_in_filter($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getFirstSegment", array(), "method"), array(0 => "updates", 1 => "manualupdate"))) ? ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "session", array()), "getAuthTimeout", array(), "method")) : (0)), "html", null, true);
        echo ",
\t\t\tPersonal:              ";
        // line 120
        echo twig_escape_filter($this->env, ($context["CraftPersonal"] ?? $this->getContext($context, "CraftPersonal")), "html", null, true);
        echo ",
\t\t\tClient:                ";
        // line 121
        echo twig_escape_filter($this->env, ($context["CraftClient"] ?? $this->getContext($context, "CraftClient")), "html", null, true);
        echo ",
\t\t\tPro:                   ";
        // line 122
        echo twig_escape_filter($this->env, ($context["CraftPro"] ?? $this->getContext($context, "CraftPro")), "html", null, true);
        echo ",
\t\t\tedition:               ";
        // line 123
        echo twig_escape_filter($this->env, ($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition")), "html", null, true);
        echo ",
\t\t\tisLocalized:           ";
        // line 124
        echo (($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\ttranslations:          ";
        // line 125
        echo \Craft\craft()->templates->getTranslations();
        echo ",
\t\t\tmaxUploadSize:         ";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "getMaxUploadSize", array(), "method"), "html", null, true);
        echo ",
\t\t\tforceConfirmUnload:    ";
        // line 127
        echo ((((isset($context["forceConfirmUnload"]) || array_key_exists("forceConfirmUnload", $context)) && ($context["forceConfirmUnload"] ?? $this->getContext($context, "forceConfirmUnload")))) ? ("true") : ("false"));
        echo ",
\t\t\tdefaultIndexCriteria:  { localeEnabled: null },
\t\t\t";
        // line 129
        if ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "enableCsrfProtection", array())) {
            // line 130
            echo "\t\t\t\tcsrfTokenValue:        \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getCsrfToken", array(), "method"), "js"), "html", null, true);
            echo "\",
\t\t\t\tcsrfTokenName:         \"";
            // line 131
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "csrfTokenName", array()), "js"), "html", null, true);
            echo "\",
\t\t\t";
        }
        // line 133
        echo "\t\t\trunTasksAutomatically: ";
        echo (($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "runTasksAutomatically", array())) ? ("true") : ("false"));
        echo ",
\t\t\tslugWordSeparator:     \"";
        // line 134
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "slugWordSeparator", array()), "js"), "html", null, true);
        echo "\",
\t\t\tlimitAutoSlugsToAscii: ";
        // line 135
        echo (($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "limitAutoSlugsToAscii", array())) ? ("true") : ("false"));
        echo ",
\t\t\tfileKinds:             ";
        // line 136
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "getFileKinds", array(), "method"));
        echo ",
\t\t\tdatepickerOptions: {
\t\t\t\tconstrainInput: false,
\t\t\t\tdateFormat: \"";
        // line 139
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getDatepickerJsFormat", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\t\tprevText: '";
        // line 140
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\Craft::t("Prev"), "js"), "html", null, true);
        echo "',
\t\t\t\tnextText: '";
        // line 141
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\Craft::t("Next"), "js"), "html", null, true);
        echo "',
\t\t\t\tfirstDay: ";
        // line 142
        echo twig_escape_filter($this->env, ((((isset($context["currentUser"]) || array_key_exists("currentUser", $context)) && ($context["currentUser"] ?? $this->getContext($context, "currentUser")))) ? ($this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "weekStartDay", array())) : ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "defaultWeekStartDay", array()))), "html", null, true);
        echo ",
\t\t\t\tdayNames: ";
        // line 143
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter($this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getWeekDayNames", array(0 => "wide", 1 => true), "method"));
        echo ",
\t\t\t\tdayNamesShort: ";
        // line 144
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter($this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getWeekDayNames", array(0 => "abbreviated", 1 => true), "method"));
        echo ",
\t\t\t\tdayNamesMin: ";
        // line 145
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter($this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getWeekDayNames", array(0 => "narrow", 1 => true), "method"));
        echo ",
\t\t\t\tmonthNames: ";
        // line 146
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter(array_values($this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getMonthNames", array(0 => "wide", 1 => true), "method")));
        echo ",
\t\t\t\tmonthNamesShort: ";
        // line 147
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter(array_values($this->getAttribute(($context["localeData"] ?? $this->getContext($context, "localeData")), "getMonthNames", array(0 => "abbreviated", 1 => true), "method")));
        echo "
\t\t\t},
\t\t\tpublishableSections: [
\t\t\t\t";
        // line 150
        if (((($context["isInstalled"] ?? $this->getContext($context, "isInstalled")) && (isset($context["currentUser"]) || array_key_exists("currentUser", $context))) && ($context["currentUser"] ?? $this->getContext($context, "currentUser")))) {
            // line 151
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "sections", array()), "getEditableSections", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 152
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["section"], "type", array()) != "single") && $this->getAttribute(($context["currentUser"] ?? $this->getContext($context, "currentUser")), "can", array(0 => ("createEntries:" . $this->getAttribute($context["section"], "id", array()))), "method"))) {
                    // line 153
                    echo "\t\t\t\t\t\t\t{id: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                    echo ", name: \"";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["section"], "name", array())), "js"), "html", null, true);
                    echo "\", handle: \"";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["section"], "handle", array()), "js"), "html", null, true);
                    echo "\", type: \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "type", array()), "html", null, true);
                    echo "\"}";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                    // line 154
                    echo "\t\t\t\t\t\t";
                }
                // line 155
                echo "\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "\t\t\t\t";
        }
        // line 157
        echo "\t\t\t],
\t\t\teditableCategoryGroups: [
\t\t\t\t";
        // line 159
        if (($context["isInstalled"] ?? $this->getContext($context, "isInstalled"))) {
            // line 160
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "categoryGroups", array()), "getEditableGroups", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 161
                echo "\t\t\t\t\t\t{id: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo ", name: \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["group"], "name", array())), "js"), "html", null, true);
                echo "\", handle: \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["group"], "handle", array()), "js"), "html", null, true);
                echo "\"}";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                // line 162
                echo "\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "\t\t\t\t";
        }
        // line 164
        echo "\t\t\t]
\t\t};

\t\t// Picture element HTML5 shiv
\t\tdocument.createElement('picture');
\t</script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 164,  441 => 163,  427 => 162,  416 => 161,  398 => 160,  396 => 159,  392 => 157,  389 => 156,  375 => 155,  372 => 154,  359 => 153,  356 => 152,  338 => 151,  336 => 150,  330 => 147,  326 => 146,  322 => 145,  318 => 144,  314 => 143,  310 => 142,  306 => 141,  302 => 140,  298 => 139,  292 => 136,  288 => 135,  284 => 134,  279 => 133,  274 => 131,  269 => 130,  267 => 129,  262 => 127,  258 => 126,  254 => 125,  250 => 124,  246 => 123,  242 => 122,  238 => 121,  234 => 120,  230 => 119,  226 => 118,  222 => 117,  218 => 116,  214 => 115,  210 => 114,  206 => 113,  202 => 112,  198 => 111,  194 => 110,  190 => 109,  186 => 108,  182 => 107,  178 => 106,  174 => 105,  170 => 104,  166 => 103,  162 => 102,  158 => 101,  147 => 93,  141 => 89,  138 => 88,  134 => 1,  132 => 86,  127 => 84,  124 => 82,  121 => 81,  118 => 80,  115 => 79,  112 => 78,  109 => 77,  106 => 76,  103 => 75,  100 => 74,  97 => 73,  94 => 72,  91 => 71,  88 => 70,  85 => 69,  82 => 68,  80 => 67,  77 => 65,  74 => 61,  71 => 59,  69 => 58,  67 => 57,  65 => 56,  63 => 32,  59 => 26,  57 => 25,  52 => 19,  50 => 18,  48 => 17,  42 => 15,  36 => 13,  32 => 11,  30 => 8,  27 => 5,  25 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_layouts/base\" %}

{# Give the body a .mobile class for mobile devices #}
{% if craft.request.isMobileBrowser(true) %}
\t{% set bodyClass = (bodyClass is defined and bodyClass ? bodyClass~' ' : '') ~ 'mobile' %}
{% endif %}

{% set localeData = craft.i18n.getLocaleData() %}

{# Figure out which Datepicker i18n script to load #}
{%- switch craft.locale %}
\t{%- case 'en_gb' %}
\t\t{%- set datepickerLocale = 'en-GB' %}
\t{%- case 'fr_ca' %}
\t\t{%- set datepickerLocale = 'fr-CA' %}
\t{%- default %}
\t\t{%- set language = localeData.getLanguageID(craft.locale) %}
\t\t{%- if language in ['ar', 'cs', 'da', 'de', 'fr', 'he', 'hu', 'it', 'ja', 'ko', 'nb', 'nl', 'nn', 'no', 'pl', 'pt', 'ru', 'sk', 'sv', 'tr', 'zh'] %}
\t\t\t{%- set datepickerLocale = language %}
\t\t{%- endif %}
{%- endswitch %}

{# Load scripts in reverse order #}

{%- if datepickerLocale is defined %}
\t{%- includejsresource 'lib/datepicker-i18n/datepicker-'~datepickerLocale~'.js' first %}
{%- endif %}


{# Figure out which D3 i18n script to load #}

{%- set d3Locales = {
\t'ca_es': 'ca-ES',
\t'de_ch': 'de-CH',
\t'de': 'de-DE',
\t'en_ca': 'en-CA',
\t'en_gb': 'en-GB',
\t'en': 'en-US',
\t'es': 'es-ES',
\t'fi': 'fi-FI',
\t'fr_ca': 'fr-CA',
\t'fr': 'fr-FR',
\t'he': 'he-IL',
\t'hu': 'hu-HU',
\t'it': 'it-IT',
\t'ja': 'ja-JP',
\t'ko': 'ko-KR',
\t'nl': 'nl-NL',
\t'pl': 'pl-PL',
\t'pt': 'pt-BR',
\t'ru': 'ru-RU',
\t'sv': 'sv-SE',
\t'zh': 'zh-CN',
} %}

{%- if d3Locales[craft.locale] is defined %}
\t{% set d3Locale = d3Locales[craft.locale] %}
{%- elseif d3Locales[language] is defined %}
\t{% set d3Locale = d3Locales[language] %}
{%- else %}
\t{% set d3Locale = 'en-US' %}
{%- endif %}


{%- includejsresource 'lib/d3-i18n/'~d3Locale~'.js' first %}

{%- set useCompressedJs = craft.config.useCompressedJs %}
{%- includejsresource \"js/cp.js\" first -%}
{%- includejsresource \"js/craft.js\" first -%}
{%- includejsresource 'lib/garnish'~(useCompressedJs ? '.min')~'.js' first %}
{%- includejsresource 'lib/element-resize-detector'~(useCompressedJs ? '.min')~'.js' first %}
{%- includejsresource 'lib/picturefill'~(useCompressedJs ? '.min')~'.js' first %}
{%- includejsresource 'lib/fileupload/jquery.fileupload.js' first %}
{%- includejsresource 'lib/jquery.mobile-events'~(useCompressedJs ? '.min')~'.js' first %}
{%- includejsresource 'lib/selectize/selectize'~(useCompressedJs ? '.min')~'.js' first %}
{%- includecssresource 'lib/selectize/selectize.css' %}
{%- includejsresource 'lib/velocity'~(useCompressedJs ? '.min')~'.js' first %}
{%- includejsresource 'lib/xregexp-all.js' first %}
{%- includeJsResource 'lib/d3/d3'~(useCompressedJs ? '.min')~'.js' first %}
{%- includejsresource 'lib/jquery-ui'~(useCompressedJs ? '.min')~'.js' first %}
{%- includejsresource 'lib/jquery-migrate-3.0.1'~(useCompressedJs ? '.min')~'.js' first %}
{%- includejsresource 'lib/jquery-3.3.1'~(useCompressedJs ? '.min')~'.js' first %}

{%- includeTranslations \"Show\", \"Hide\" %}

{% set orientation = localeData.getOrientation() %}

{% block foot %}

\t<noscript>
\t\t<div class=\"message-container no-access\">
\t\t\t<div class=\"pane notice\">
\t\t\t\t<p>{{ \"JavaScript must be enabled to access the Craft control panel.\"|t }}</p>
\t\t\t</div>
\t\t</div>
\t</noscript>

\t<script type=\"text/javascript\">
\t\t// Create the Craft object
\t\twindow.Craft = {
\t\t\tsiteUid:               \"{{ craft.app.getSiteUid()|e('js') }}\",
\t\t\tbaseUrl:               \"{{ url()|e('js') }}\",
\t\t\tbaseCpUrl:             \"{{ cpUrl()|e('js') }}\",
\t\t\tbaseSiteUrl:           \"{{ siteUrl()|e('js') }}\",
\t\t\tactionUrl:             \"{{ actionUrl()|e('js') }}\",
\t\t\tresourceUrl:           \"{{ resourceUrl()|e('js') }}\",
\t\t\tscriptName:            \"{{ craft.request.getScriptName()|e('js') }}\",
\t\t\tomitScriptNameInUrls:  {{ craft.config.omitScriptNameInUrls() ? 'true' : 'false' }},
\t\t\tusePathInfo:           {{ craft.config.usePathInfo() ? 'true' : 'false' }},
\t\t\tuseCompressedJs:       {{ useCompressedJs ? 'true' : 'false' }},
\t\t\tresourceTrigger:       \"{{ craft.config.getResourceTrigger()|e('js') }}\",
\t\t\tactionTrigger:         \"{{ craft.config.actionTrigger|e('js') }}\",
\t\t\tpath:                  \"{{ craft.request.getPath()|e('js') }}\",
\t\t\tlocale:                \"{{ craft.locale|e('js') }}\",
\t\t\torientation:           \"{{ orientation|e('js') }}\",
\t\t\tleft:                  \"{{ orientation == 'ltr' ? 'left' : 'right' }}\",
\t\t\tright:                 \"{{ orientation == 'ltr' ? 'right' : 'left' }}\",
\t\t\tusername:              {{ currentUser is defined and currentUser ? ('\"'~currentUser.username|e('js')~'\"')|raw : 'null' }},
\t\t\tauthTimeout:           {{ craft.request.getFirstSegment() not in ['updates', 'manualupdate'] ? craft.session.getAuthTimeout() : 0 }},
\t\t\tPersonal:              {{ CraftPersonal }},
\t\t\tClient:                {{ CraftClient }},
\t\t\tPro:                   {{ CraftPro }},
\t\t\tedition:               {{ CraftEdition }},
\t\t\tisLocalized:           {{ craft.isLocalized() ? 'true' : 'false' }},
\t\t\ttranslations:          {{ getTranslations()|raw }},
\t\t\tmaxUploadSize:         {{ craft.app.getMaxUploadSize() }},
\t\t\tforceConfirmUnload:    {{ forceConfirmUnload is defined and forceConfirmUnload ? 'true' : 'false' }},
\t\t\tdefaultIndexCriteria:  { localeEnabled: null },
\t\t\t{% if craft.config.enableCsrfProtection %}
\t\t\t\tcsrfTokenValue:        \"{{ craft.request.getCsrfToken()|e('js') }}\",
\t\t\t\tcsrfTokenName:         \"{{ craft.config.csrfTokenName|e('js') }}\",
\t\t\t{% endif %}
\t\t\trunTasksAutomatically: {{ craft.config.runTasksAutomatically ? 'true' : 'false' }},
\t\t\tslugWordSeparator:     \"{{ craft.config.slugWordSeparator|e('js') }}\",
\t\t\tlimitAutoSlugsToAscii: {{ craft.config.limitAutoSlugsToAscii ? 'true' : 'false' }},
\t\t\tfileKinds:             {{ craft.app.getFileKinds()|json_encode|raw }},
\t\t\tdatepickerOptions: {
\t\t\t\tconstrainInput: false,
\t\t\t\tdateFormat: \"{{ craft.i18n.getDatepickerJsFormat()|e('js') }}\",
\t\t\t\tprevText: '{{ \"Prev\"|t|e('js') }}',
\t\t\t\tnextText: '{{ \"Next\"|t|e('js') }}',
\t\t\t\tfirstDay: {{ currentUser is defined and currentUser ? currentUser.weekStartDay : craft.config.defaultWeekStartDay }},
\t\t\t\tdayNames: {{ localeData.getWeekDayNames('wide', true)|json_encode|raw }},
\t\t\t\tdayNamesShort: {{ localeData.getWeekDayNames('abbreviated', true)|json_encode|raw }},
\t\t\t\tdayNamesMin: {{ localeData.getWeekDayNames('narrow', true)|json_encode|raw }},
\t\t\t\tmonthNames: {{ localeData.getMonthNames('wide', true)|values|json_encode|raw }},
\t\t\t\tmonthNamesShort: {{ localeData.getMonthNames('abbreviated', true)|values|json_encode|raw }}
\t\t\t},
\t\t\tpublishableSections: [
\t\t\t\t{% if isInstalled and currentUser is defined and currentUser %}
\t\t\t\t\t{% for section in craft.sections.getEditableSections() %}
\t\t\t\t\t\t{% if section.type != 'single' and currentUser.can('createEntries:'~section.id) %}
\t\t\t\t\t\t\t{id: {{ section.id }}, name: \"{{ section.name|t|e('js') }}\", handle: \"{{ section.handle|e('js') }}\", type: \"{{ section.type }}\"}{% if not loop.last %},{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t],
\t\t\teditableCategoryGroups: [
\t\t\t\t{% if isInstalled %}
\t\t\t\t\t{% for group in craft.categoryGroups.getEditableGroups() %}
\t\t\t\t\t\t{id: {{ group.id }}, name: \"{{ group.name|t|e('js') }}\", handle: \"{{ group.handle|e('js') }}\"}{% if not loop.last %},{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t]
\t\t};

\t\t// Picture element HTML5 shiv
\t\tdocument.createElement('picture');
\t</script>
{% endblock %}
", "_layouts/basecp", "");
    }
}
