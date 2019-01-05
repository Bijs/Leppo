<?php

/* settings/sections/_edit */
class __TwigTemplate_6db2284cc4d2d8960dd29603690df6faff2b6e8864ad298859b7a7e0145337bd extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_edit", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["docsUrl"] = "http://craftcms.com/docs/sections-and-entries#sections";
        // line 5
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit", 5);
        // line 6
        $context["fullPageForm"] = true;
        // line 90
        $context["__internal_4d74136ac038d19333e2fc823134c7527eed28f6977121012ee6d2655b380a79"] = $this;
        // line 266
        ob_start();
        // line 267
        echo "\t";
        if ( !$this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "handle", array())) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 268
        echo "
\t";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 270
            echo "\t\t";
            if (( !$this->getAttribute($this->getAttribute(($context["section"] ?? null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true) ||  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "urlFormat", array()))) {
                // line 271
                echo "\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-urlFormat-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "');
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-urlFormat-";
                // line 272
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "',   { suffix: '/{slug}' });
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-urlFormat-";
                // line 273
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "', { suffix: '/{slug}' });
\t\t";
            }
            // line 275
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "
\t";
        // line 277
        if (($context["brandNewSection"] ?? $this->getContext($context, "brandNewSection"))) {
            // line 278
            echo "\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-template');
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-template',   { suffix: '/_entry' });
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-template', { suffix: '/_entry' });
\t";
        }
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 92
    public function block_content($context, array $blocks = array())
    {
        // line 93
        echo "\t<input type=\"hidden\" name=\"action\" value=\"sections/saveSection\">
\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">

\t";
        // line 96
        if ($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "id", array())) {
            echo "<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 97
        echo "
\t";
        // line 98
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this section will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute(        // line 104
($context["section"] ?? $this->getContext($context, "section")), "name", array()), "errors" => $this->getAttribute(        // line 105
($context["section"] ?? $this->getContext($context, "section")), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 109
        echo "

\t";
        // line 111
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this section in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute(        // line 117
($context["section"] ?? $this->getContext($context, "section")), "handle", array()), "errors" => $this->getAttribute(        // line 118
($context["section"] ?? $this->getContext($context, "section")), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 120
        echo "

\t";
        // line 122
        if ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            // line 123
            echo "\t\t";
            ob_start();
            // line 124
            echo "\t\t\t<table class=\"data\" style=\"width: auto;\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<th scope=\"col\">";
            // line 128
            echo twig_escape_filter($this->env, \Craft\Craft::t("Locale"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th scope=\"col\">";
            // line 129
            echo twig_escape_filter($this->env, \Craft\Craft::t("Default Entry Status"), "html", null, true);
            echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 134
                echo "\t\t\t\t\t\t";
                $context["localeSelected"] = (($context["brandNewSection"] ?? $this->getContext($context, "brandNewSection")) || $this->getAttribute($this->getAttribute(($context["section"] ?? null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true));
                // line 135
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 137
                echo $context["forms"]->getcheckbox(array("id" => ("locale-" . $this->getAttribute(                // line 138
$context["locale"], "id", array())), "name" => "locales[]", "value" => $this->getAttribute(                // line 140
$context["locale"], "id", array()), "checked" =>                 // line 141
($context["localeSelected"] ?? $this->getContext($context, "localeSelected")), "toggle" => (".for-locale-" . $this->getAttribute(                // line 142
$context["locale"], "id", array()))));
                // line 143
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><label for=\"locale-";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo ")</label></td>
\t\t\t\t\t\t\t<td class=\"centeralign\">
\t\t\t\t\t\t\t\t<div class=\"for-locale-";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                if ( !($context["localeSelected"] ?? $this->getContext($context, "localeSelected"))) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 148
                echo $context["forms"]->getlightswitch(array("name" => (("defaultLocaleStatuses[" . $this->getAttribute(                // line 149
$context["locale"], "id", array())) . "]"), "on" => ((                // line 150
($context["brandNewSection"] ?? $this->getContext($context, "brandNewSection")) ||  !$this->getAttribute($this->getAttribute(($context["section"] ?? null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true)) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "enabledByDefault", array())), "small" => true));
                // line 152
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
            $context["localesInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 160
            echo "
\t\t";
            // line 161
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Which locales should entries in this section target?"), "errors" => $this->getAttribute(            // line 163
($context["section"] ?? $this->getContext($context, "section")), "getErrors", array(0 => "localeErrors"), "method")),             // line 164
($context["localesInput"] ?? $this->getContext($context, "localesInput")));
            echo "
\t";
        }
        // line 166
        echo "
\t";
        // line 167
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Section Type"), "instructions" => (\Craft\Craft::t("What type of section is this?") . (($this->getAttribute(        // line 169
($context["section"] ?? $this->getContext($context, "section")), "id", array())) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" =>         // line 172
($context["typeOptions"] ?? $this->getContext($context, "typeOptions")), "value" => $this->getAttribute(        // line 173
($context["section"] ?? $this->getContext($context, "section")), "type", array()), "toggle" => true, "targetPrefix" => ".type-", "errors" => $this->getAttribute(        // line 176
($context["section"] ?? $this->getContext($context, "section")), "getErrors", array(0 => "type"), "method")));
        // line 177
        echo "

\t<hr>

\t<div class=\"type-single ";
        // line 181
        if (($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) != "single")) {
            echo "hidden";
        }
        echo "\">
\t\t";
        // line 182
        if (($context["canBeHomepage"] ?? $this->getContext($context, "canBeHomepage"))) {
            // line 183
            echo "\t\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This is for the homepage"), "id" => "single-homepage", "name" => "types[single][homepage]", "checked" => $this->getAttribute(            // line 187
($context["section"] ?? $this->getContext($context, "section")), "isHomepage", array(), "method"), "reverseToggle" => "single-uri-container"));
            // line 189
            echo "
\t\t";
        }
        // line 191
        echo "
\t\t<div id=\"single-uri-container\"";
        // line 192
        if ($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "isHomepage", array(), "method")) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t\t";
        // line 193
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("URI"), "instructions" => \Craft\Craft::t("What the entry URI should be."), "required" => true, "errors" => $this->getAttribute(        // line 197
($context["section"] ?? $this->getContext($context, "section")), "getErrors", array(0 => "urlFormat"), "method")), $context["__internal_4d74136ac038d19333e2fc823134c7527eed28f6977121012ee6d2655b380a79"]->geturlFormatInput("single",         // line 198
($context["brandNewSection"] ?? $this->getContext($context, "brandNewSection")), ($context["section"] ?? $this->getContext($context, "section"))));
        echo "
\t\t</div>

\t\t";
        // line 201
        echo $context["__internal_4d74136ac038d19333e2fc823134c7527eed28f6977121012ee6d2655b380a79"]->gettemplateField("single", ($context["section"] ?? $this->getContext($context, "section")));
        echo "
\t</div>

\t";
        // line 204
        $context["urlFormatParams"] = array("label" => \Craft\Craft::t("Entry URL Format"), "instructions" => \Craft\Craft::t("What the entry URLs should look like. You can include tags that output entry properties, such as {ex1} or {ex2}.", array("ex1" => "<code>{slug}</code>", "ex2" => "<code>{postDate|date(\"Y\")}</code>")), "required" => true, "errors" => $this->getAttribute(        // line 208
($context["section"] ?? $this->getContext($context, "section")), "getErrors", array(0 => "urlFormat"), "method"));
        // line 210
        echo "
\t<div class=\"type-channel ";
        // line 211
        if (($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) != "channel")) {
            echo "hidden";
        }
        echo "\">
\t\t";
        // line 212
        echo $context["__internal_4d74136ac038d19333e2fc823134c7527eed28f6977121012ee6d2655b380a79"]->gethasUrlsField("channel", ($context["section"] ?? $this->getContext($context, "section")));
        echo "

\t\t<div id=\"channel-url-settings\" class=\"nested-fields";
        // line 214
        if ( !$this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "hasUrls", array())) {
            echo " hidden";
        }
        echo "\">
\t\t\t";
        // line 215
        echo $context["forms"]->getfield(($context["urlFormatParams"] ?? $this->getContext($context, "urlFormatParams")), $context["__internal_4d74136ac038d19333e2fc823134c7527eed28f6977121012ee6d2655b380a79"]->geturlFormatInput("channel", ($context["brandNewSection"] ?? $this->getContext($context, "brandNewSection")), ($context["section"] ?? $this->getContext($context, "section"))));
        echo "

\t\t\t";
        // line 217
        echo $context["__internal_4d74136ac038d19333e2fc823134c7527eed28f6977121012ee6d2655b380a79"]->gettemplateField("channel", ($context["section"] ?? $this->getContext($context, "section")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"type-structure ";
        // line 221
        if (($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) != "structure")) {
            echo "hidden";
        }
        echo "\">
\t\t";
        // line 222
        echo $context["__internal_4d74136ac038d19333e2fc823134c7527eed28f6977121012ee6d2655b380a79"]->gethasUrlsField("structure", ($context["section"] ?? $this->getContext($context, "section")));
        echo "

\t\t<div id=\"structure-url-settings\" class=\"nested-fields";
        // line 224
        if ( !$this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "hasUrls", array())) {
            echo " hidden";
        }
        echo "\">
\t\t\t";
        // line 225
        echo $context["forms"]->getfield(($context["urlFormatParams"] ?? $this->getContext($context, "urlFormatParams")), $context["__internal_4d74136ac038d19333e2fc823134c7527eed28f6977121012ee6d2655b380a79"]->geturlFormatInput("structure", ($context["brandNewSection"] ?? $this->getContext($context, "brandNewSection")), ($context["section"] ?? $this->getContext($context, "section"))));
        echo "

\t\t\t";
        // line 227
        echo $context["__internal_4d74136ac038d19333e2fc823134c7527eed28f6977121012ee6d2655b380a79"]->gettemplateField("structure", ($context["section"] ?? $this->getContext($context, "section")));
        echo "
\t\t</div>

\t\t";
        // line 230
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Levels"), "instructions" => \Craft\Craft::t("The maximum number of levels this section can have. Leave blank if you don’t care."), "id" => "structure-maxLevels", "name" => "types[structure][maxLevels]", "value" => $this->getAttribute(        // line 235
($context["section"] ?? $this->getContext($context, "section")), "maxLevels", array()), "size" => 5, "errors" => $this->getAttribute(        // line 237
($context["section"] ?? $this->getContext($context, "section")), "getErrors", array(0 => "maxLevels"), "method")));
        // line 238
        echo "
\t</div>

\t<hr>

\t";
        // line 243
        if ( !$this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            // line 244
            echo "\t\t<div class=\"type-channel type-structure ";
            if (($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) == "single")) {
                echo "hidden";
            }
            echo "\">
\t\t\t";
            // line 245
            $context["locale"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getPrimarySiteLocale", array(), "method");
            // line 246
            echo "\t\t\t";
            $context["value"] = (((($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) != "single") && $this->getAttribute($this->getAttribute(($context["section"] ?? null), "locales", array(), "any", false, true), $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "locales", array()), $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array()), array(), "array"), "enabledByDefault", array())) : (true));
            // line 247
            echo "
\t\t\t";
            // line 248
            echo $context["forms"]->getlightswitchField(array("label" => \Craft\Craft::t("Default Entry Status"), "id" => "defaultEntryStatus", "name" => (("defaultLocaleStatuses[" . $this->getAttribute(            // line 251
($context["locale"] ?? $this->getContext($context, "locale")), "id", array())) . "]"), "on" =>             // line 252
($context["value"] ?? $this->getContext($context, "value"))));
            // line 253
            echo "
\t\t</div>
\t";
        }
        // line 256
        echo "
\t";
        // line 257
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Enable versioning for entries in this section?"), "id" => "enableVersioning", "name" => "enableVersioning", "checked" => $this->getAttribute(        // line 261
($context["section"] ?? $this->getContext($context, "section")), "enableVersioning", array())));
        // line 262
        echo "
";
    }

    // line 8
    public function geturlFormatText($__sectionType__ = null, $__locale__ = null, $__section__ = null, $__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "locale" => $__locale__,
            "section" => $__section__,
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "\t";
            $context["__internal_1352076520dce205821cae9bd56d3dc11c1ff3d3ed0182392b1d6c03c1892d22"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit", 9);
            // line 10
            echo "\t";
            $context["errors"] = $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "getErrors", array(0 => ((($context["name"] ?? $this->getContext($context, "name")) . "-") . $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array()))), "method");
            // line 11
            echo "
\t<div class=\"input";
            // line 12
            if (($context["errors"] ?? $this->getContext($context, "errors"))) {
                echo " errors";
            }
            echo "\">
\t\t";
            // line 13
            echo $context["__internal_1352076520dce205821cae9bd56d3dc11c1ff3d3ed0182392b1d6c03c1892d22"]->gettext(array("id" => ((((            // line 14
($context["sectionType"] ?? $this->getContext($context, "sectionType")) . "-") . ($context["name"] ?? $this->getContext($context, "name"))) . "-") . $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array())), "class" => "code ltr", "name" => (((((("types[" .             // line 16
($context["sectionType"] ?? $this->getContext($context, "sectionType"))) . "][") . ($context["name"] ?? $this->getContext($context, "name"))) . "][") . $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array())) . "]"), "value" => (((            // line 17
($context["value"] ?? $this->getContext($context, "value")) != "__home__")) ? (($context["value"] ?? $this->getContext($context, "value"))) : (null)), "errors" =>             // line 18
($context["errors"] ?? $this->getContext($context, "errors"))));
            // line 19
            echo "
\t</div>

\t";
            // line 22
            echo $context["__internal_1352076520dce205821cae9bd56d3dc11c1ff3d3ed0182392b1d6c03c1892d22"]->geterrorList(($context["errors"] ?? $this->getContext($context, "errors")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function geturlFormatInput($__sectionType__ = null, $__brandNewSection__ = null, $__section__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "brandNewSection" => $__brandNewSection__,
            "section" => $__section__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "\t";
            if (($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method") || (($context["sectionType"] ?? $this->getContext($context, "sectionType")) == "structure"))) {
                // line 27
                echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
                // line 28
                if ((($context["sectionType"] ?? $this->getContext($context, "sectionType")) == "structure")) {
                    // line 29
                    echo "\t\t\t\t<thead>
\t\t\t\t\t";
                    // line 30
                    if ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
                        // line 31
                        echo "\t\t\t\t\t\t<th></th>
\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t\t<th scope=\"col\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Top-Level Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th scope=\"col\">";
                    // line 34
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Nested Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t</thead>
\t\t\t";
                }
                // line 37
                echo "\t\t\t<tbody>
\t\t\t\t";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getSiteLocales", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 39
                    echo "\t\t\t\t\t<tr class=\"for-locale-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                    if ((($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method") &&  !($context["brandNewSection"] ?? $this->getContext($context, "brandNewSection"))) &&  !$this->getAttribute($this->getAttribute(($context["section"] ?? null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true))) {
                        echo " hidden";
                    }
                    echo "\">
\t\t\t\t\t\t";
                    // line 40
                    if ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
                        // line 41
                        echo "\t\t\t\t\t\t\t<th class=\"thin nowrap\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                        echo "</th>
\t\t\t\t\t\t";
                    }
                    // line 43
                    echo "\t\t\t\t\t\t<td class=\"topalign\">
\t\t\t\t\t\t\t";
                    // line 44
                    $context["value"] = ((((($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) == ($context["sectionType"] ?? $this->getContext($context, "sectionType"))) || (($context["sectionType"] ?? $this->getContext($context, "sectionType")) != "single")) && $this->getAttribute($this->getAttribute(($context["section"] ?? null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "urlFormat", array())) : (null));
                    // line 45
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($this, "urlFormatText", array(0 => ($context["sectionType"] ?? $this->getContext($context, "sectionType")), 1 => $context["locale"], 2 => ($context["section"] ?? $this->getContext($context, "section")), 3 => "urlFormat", 4 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
                    echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    // line 47
                    if ((($context["sectionType"] ?? $this->getContext($context, "sectionType")) == "structure")) {
                        // line 48
                        echo "\t\t\t\t\t\t\t<td class=\"topalign\">
\t\t\t\t\t\t\t\t";
                        // line 49
                        $context["value"] = (((($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) == "structure") && $this->getAttribute($this->getAttribute(($context["section"] ?? null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "nestedUrlFormat", array())) : ("{parent.uri}/{slug}"));
                        // line 50
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($this, "urlFormatText", array(0 => ($context["sectionType"] ?? $this->getContext($context, "sectionType")), 1 => $context["locale"], 2 => ($context["section"] ?? $this->getContext($context, "section")), 3 => "nestedUrlFormat", 4 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
                        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    }
                    // line 53
                    echo "\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 58
                echo "\t\t";
                $context["locale"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getPrimarySiteLocale", array(), "method");
                // line 59
                echo "\t\t";
                $context["value"] = ((((($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "type", array()) == ($context["sectionType"] ?? $this->getContext($context, "sectionType"))) || (($context["sectionType"] ?? $this->getContext($context, "sectionType")) != "single")) && $this->getAttribute($this->getAttribute(($context["section"] ?? null), "locales", array(), "any", false, true), $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "locales", array()), $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array()), array(), "array"), "urlFormat", array())) : (null));
                // line 60
                echo "\t\t";
                echo $this->getAttribute($this, "urlFormatText", array(0 => ($context["sectionType"] ?? $this->getContext($context, "sectionType")), 1 => ($context["locale"] ?? $this->getContext($context, "locale")), 2 => ($context["section"] ?? $this->getContext($context, "section")), 3 => "urlFormat", 4 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
                echo "
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function gethasUrlsField($__sectionType__ = null, $__section__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "section" => $__section__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "\t";
            $context["__internal_42912762f65b93edeac67307b00454fc65119a2efe40188f5bb26c846d462f43"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit", 65);
            // line 66
            echo "
\t";
            // line 67
            echo $context["__internal_42912762f65b93edeac67307b00454fc65119a2efe40188f5bb26c846d462f43"]->getcheckboxField(array("label" => \Craft\Craft::t("Entries in this section have their own URLs"), "id" => (            // line 69
($context["sectionType"] ?? $this->getContext($context, "sectionType")) . "-hasUrls"), "name" => (("types[" .             // line 70
($context["sectionType"] ?? $this->getContext($context, "sectionType"))) . "][hasUrls]"), "checked" => $this->getAttribute(            // line 71
($context["section"] ?? $this->getContext($context, "section")), "hasUrls", array()), "toggle" => (            // line 72
($context["sectionType"] ?? $this->getContext($context, "sectionType")) . "-url-settings")));
            // line 73
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 76
    public function gettemplateField($__sectionType__ = null, $__section__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "section" => $__section__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 77
            echo "\t";
            $context["__internal_d6a10849aa2471d952bd0c2b42f2830eb6d45abe80e6f719e1781d9b12efaed2"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit", 77);
            // line 78
            echo "
\t";
            // line 79
            echo $context["__internal_d6a10849aa2471d952bd0c2b42f2830eb6d45abe80e6f719e1781d9b12efaed2"]->gettextField(array("label" => \Craft\Craft::t("Entry Template"), "instructions" => (((            // line 81
($context["sectionType"] ?? $this->getContext($context, "sectionType")) == "single")) ? (\Craft\Craft::t("The template to use when the entry’s URL is requested.")) : (\Craft\Craft::t("The template to use when an entry’s URL is requested."))), "id" => (            // line 82
($context["sectionType"] ?? $this->getContext($context, "sectionType")) . "-template"), "class" => "ltr", "name" => (("types[" .             // line 84
($context["sectionType"] ?? $this->getContext($context, "sectionType"))) . "][template]"), "value" => $this->getAttribute(            // line 85
($context["section"] ?? $this->getContext($context, "section")), "template", array()), "errors" => $this->getAttribute(            // line 86
($context["section"] ?? $this->getContext($context, "section")), "getErrors", array(0 => "template"), "method")));
            // line 87
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "settings/sections/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 87,  624 => 86,  623 => 85,  622 => 84,  621 => 82,  620 => 81,  619 => 79,  616 => 78,  613 => 77,  600 => 76,  584 => 73,  582 => 72,  581 => 71,  580 => 70,  579 => 69,  578 => 67,  575 => 66,  572 => 65,  559 => 64,  540 => 60,  537 => 59,  534 => 58,  529 => 55,  522 => 53,  515 => 50,  513 => 49,  510 => 48,  508 => 47,  502 => 45,  500 => 44,  497 => 43,  491 => 41,  489 => 40,  481 => 39,  477 => 38,  474 => 37,  468 => 34,  463 => 33,  459 => 31,  457 => 30,  454 => 29,  452 => 28,  449 => 27,  446 => 26,  432 => 25,  415 => 22,  410 => 19,  408 => 18,  407 => 17,  406 => 16,  405 => 14,  404 => 13,  398 => 12,  395 => 11,  392 => 10,  389 => 9,  373 => 8,  368 => 262,  366 => 261,  365 => 257,  362 => 256,  357 => 253,  355 => 252,  354 => 251,  353 => 248,  350 => 247,  347 => 246,  345 => 245,  338 => 244,  336 => 243,  329 => 238,  327 => 237,  326 => 235,  325 => 230,  319 => 227,  314 => 225,  308 => 224,  303 => 222,  297 => 221,  290 => 217,  285 => 215,  279 => 214,  274 => 212,  268 => 211,  265 => 210,  263 => 208,  262 => 204,  256 => 201,  250 => 198,  249 => 197,  248 => 193,  242 => 192,  239 => 191,  235 => 189,  233 => 187,  231 => 183,  229 => 182,  223 => 181,  217 => 177,  215 => 176,  214 => 173,  213 => 172,  212 => 169,  211 => 167,  208 => 166,  203 => 164,  202 => 163,  201 => 161,  198 => 160,  193 => 157,  183 => 152,  181 => 150,  180 => 149,  179 => 148,  172 => 147,  163 => 145,  159 => 143,  157 => 142,  156 => 141,  155 => 140,  154 => 138,  153 => 137,  149 => 135,  146 => 134,  142 => 133,  135 => 129,  131 => 128,  125 => 124,  122 => 123,  120 => 122,  116 => 120,  114 => 118,  113 => 117,  112 => 111,  108 => 109,  106 => 105,  105 => 104,  104 => 98,  101 => 97,  95 => 96,  90 => 93,  87 => 92,  83 => 1,  75 => 278,  73 => 277,  70 => 276,  64 => 275,  59 => 273,  55 => 272,  50 => 271,  47 => 270,  43 => 269,  40 => 268,  35 => 267,  33 => 266,  31 => 90,  29 => 6,  27 => 5,  25 => 3,  11 => 1,);
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

{% set docsUrl = 'http://craftcms.com/docs/sections-and-entries#sections' %}

{% import \"_includes/forms\" as forms %}
{% set fullPageForm = true %}

{% macro urlFormatText(sectionType, locale, section, name, value) %}
\t{% from \"_includes/forms\" import text, errorList %}
\t{% set errors = section.getErrors(name~'-'~locale.id) %}

\t<div class=\"input{% if errors %} errors{% endif %}\">
\t\t{{ text({
\t\t\tid: sectionType~'-'~name~'-'~locale.id,
\t\t\tclass: 'code ltr',
\t\t\tname: 'types['~sectionType~']['~name~']['~locale.id~']',
\t\t\tvalue: (value != '__home__' ? value : null),
\t\t\terrors: errors
\t\t}) }}
\t</div>

\t{{ errorList(errors) }}
{% endmacro %}

{% macro urlFormatInput(sectionType, brandNewSection, section) %}
\t{% if craft.isLocalized() or sectionType == 'structure' %}
\t\t<table class=\"data fullwidth\">
\t\t\t{% if sectionType == 'structure' %}
\t\t\t\t<thead>
\t\t\t\t\t{% if craft.isLocalized() %}
\t\t\t\t\t\t<th></th>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<th scope=\"col\">{{ \"Top-Level Entries\"|t }}</th>
\t\t\t\t\t<th scope=\"col\">{{ \"Nested Entries\"|t }}</th>
\t\t\t\t</thead>
\t\t\t{% endif %}
\t\t\t<tbody>
\t\t\t\t{% for locale in craft.i18n.getSiteLocales() %}
\t\t\t\t\t<tr class=\"for-locale-{{ locale.id }}{% if craft.isLocalized() and not brandNewSection and section.locales[locale.id] is not defined %} hidden{% endif %}\">
\t\t\t\t\t\t{% if craft.isLocalized() %}
\t\t\t\t\t\t\t<th class=\"thin nowrap\">{{ locale.id }}</th>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<td class=\"topalign\">
\t\t\t\t\t\t\t{% set value = ((section.type == sectionType or sectionType != 'single') and section.locales[locale.id] is defined ? section.locales[locale.id].urlFormat : null) %}
\t\t\t\t\t\t\t{{ _self.urlFormatText(sectionType, locale, section, 'urlFormat', value) }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% if sectionType == 'structure' %}
\t\t\t\t\t\t\t<td class=\"topalign\">
\t\t\t\t\t\t\t\t{% set value = ((section.type == 'structure') and section.locales[locale.id] is defined ? section.locales[locale.id].nestedUrlFormat : '{parent.uri}/{slug}') %}
\t\t\t\t\t\t\t\t{{ _self.urlFormatText(sectionType, locale, section, 'nestedUrlFormat', value) }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t{% else %}
\t\t{% set locale = craft.i18n.getPrimarySiteLocale() %}
\t\t{% set value = ((section.type == sectionType or sectionType != 'single') and section.locales[locale.id] is defined ? section.locales[locale.id].urlFormat : null) %}
\t\t{{ _self.urlFormatText(sectionType, locale, section, 'urlFormat', value) }}
\t{% endif %}
{% endmacro %}

{% macro hasUrlsField(sectionType, section) %}
\t{% from \"_includes/forms\" import checkboxField %}

\t{{ checkboxField({
\t\tlabel: \"Entries in this section have their own URLs\"|t,
\t\tid: sectionType~'-hasUrls',
\t\tname: 'types['~sectionType~'][hasUrls]',
\t\tchecked: section.hasUrls,
\t\ttoggle: sectionType~'-url-settings'
\t}) }}
{% endmacro %}

{% macro templateField(sectionType, section) %}
\t{% from \"_includes/forms\" import textField %}

\t{{ textField({
\t\tlabel: \"Entry Template\"|t,
\t\tinstructions: (sectionType == 'single' ? \"The template to use when the entry’s URL is requested.\"|t : \"The template to use when an entry’s URL is requested.\"|t),
\t\tid: sectionType~'-template',
\t\tclass: 'ltr',
\t\tname: 'types['~sectionType~'][template]',
\t\tvalue: section.template,
\t\terrors: section.getErrors('template')
\t}) }}
{% endmacro %}

{% from _self import urlFormatInput, hasUrlsField, templateField %}

{% block content %}
\t<input type=\"hidden\" name=\"action\" value=\"sections/saveSection\">
\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">

\t{% if section.id %}<input type=\"hidden\" name=\"sectionId\" value=\"{{ section.id }}\">{% endif %}

\t{{ forms.textField({
\t\tfirst: true,
\t\tlabel: \"Name\"|t,
\t\tinstructions: \"What this section will be called in the CP.\"|t,
\t\tid: 'name',
\t\tname: 'name',
\t\tvalue: section.name,
\t\terrors: section.getErrors('name'),
\t\tautofocus: true,
\t\trequired: true,
\t\ttranslatable: true
\t}) }}

\t{{ forms.textField({
\t\tlabel: \"Handle\"|t,
\t\tinstructions: \"How you’ll refer to this section in the templates.\"|t,
\t\tid: 'handle',
\t\tclass: 'code',
\t\tname: 'handle',
\t\tvalue: section.handle,
\t\terrors: section.getErrors('handle'),
\t\trequired: true
\t}) }}

\t{% if craft.isLocalized() %}
\t\t{% set localesInput %}
\t\t\t<table class=\"data\" style=\"width: auto;\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t<th scope=\"col\">{{ \"Locale\"|t }}</th>
\t\t\t\t\t\t<th scope=\"col\">{{ \"Default Entry Status\"|t }}</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for locale in craft.i18n.getSiteLocales() %}
\t\t\t\t\t\t{% set localeSelected = (brandNewSection or section.locales[locale.id] is defined) %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{{ forms.checkbox({
\t\t\t\t\t\t\t\t\tid: 'locale-'~locale.id,
\t\t\t\t\t\t\t\t\tname: 'locales[]',
\t\t\t\t\t\t\t\t\tvalue: locale.id,
\t\t\t\t\t\t\t\t\tchecked: localeSelected,
\t\t\t\t\t\t\t\t\ttoggle: '.for-locale-'~locale.id
\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><label for=\"locale-{{ locale.id }}\">{{ locale.name }} ({{ locale.id }})</label></td>
\t\t\t\t\t\t\t<td class=\"centeralign\">
\t\t\t\t\t\t\t\t<div class=\"for-locale-{{ locale.id }}{% if not localeSelected %} hidden{% endif %}\">
\t\t\t\t\t\t\t\t\t{{ forms.lightswitch({
\t\t\t\t\t\t\t\t\t\tname: 'defaultLocaleStatuses['~locale.id~']',
\t\t\t\t\t\t\t\t\t\ton:   (brandNewSection or not section.locales[locale.id] is defined or section.locales[locale.id].enabledByDefault),
\t\t\t\t\t\t\t\t\t\tsmall: true
\t\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t{% endset %}

\t\t{{ forms.field({
\t\t\tlabel: \"Which locales should entries in this section target?\"|t,
\t\t\terrors: section.getErrors('localeErrors'),
\t\t}, localesInput) }}
\t{% endif %}

\t{{ forms.selectField({
\t\tlabel: \"Section Type\"|t,
\t\tinstructions: \"What type of section is this?\"|t ~ (section.id ? '<br><span class=\"error\">'~\"Careful—changing this may result in data loss.\"|t~'</span>' : ''),
\t\tid: 'type',
\t\tname: 'type',
\t\toptions: typeOptions,
\t\tvalue: section.type,
\t\ttoggle: true,
\t\ttargetPrefix: '.type-',
\t\terrors: section.getErrors('type')
\t}) }}

\t<hr>

\t<div class=\"type-single {% if section.type != 'single' %}hidden{% endif %}\">
\t\t{% if canBeHomepage %}
\t\t\t{{ forms.checkboxField({
\t\t\t\tlabel: \"This is for the homepage\"|t,
\t\t\t\tid: 'single-homepage',
\t\t\t\tname: 'types[single][homepage]',
\t\t\t\tchecked: section.isHomepage(),
\t\t\t\treverseToggle: 'single-uri-container'
\t\t\t}) }}
\t\t{% endif %}

\t\t<div id=\"single-uri-container\"{% if section.isHomepage() %} class=\"hidden\"{% endif %}>
\t\t\t{{ forms.field({
\t\t\t\tlabel: \"URI\"|t,
\t\t\t\tinstructions: \"What the entry URI should be.\"|t,
\t\t\t\trequired: true,
\t\t\t\terrors: section.getErrors('urlFormat')
\t\t\t}, urlFormatInput('single', brandNewSection, section)) }}
\t\t</div>

\t\t{{ templateField('single', section) }}
\t</div>

\t{% set urlFormatParams = {
\t\tlabel: \"Entry URL Format\"|t,
\t\tinstructions: \"What the entry URLs should look like. You can include tags that output entry properties, such as {ex1} or {ex2}.\"|t({ ex1: '<code>{slug}</code>', ex2: '<code>{postDate|date(\"Y\")}</code>' }),
\t\trequired: true,
\t\terrors: section.getErrors('urlFormat')
\t} %}

\t<div class=\"type-channel {% if section.type != 'channel' %}hidden{% endif %}\">
\t\t{{ hasUrlsField('channel', section) }}

\t\t<div id=\"channel-url-settings\" class=\"nested-fields{% if not section.hasUrls %} hidden{% endif %}\">
\t\t\t{{ forms.field(urlFormatParams, urlFormatInput('channel', brandNewSection, section)) }}

\t\t\t{{ templateField('channel', section) }}
\t\t</div>
\t</div>

\t<div class=\"type-structure {% if section.type != 'structure' %}hidden{% endif %}\">
\t\t{{ hasUrlsField('structure', section) }}

\t\t<div id=\"structure-url-settings\" class=\"nested-fields{% if not section.hasUrls %} hidden{% endif %}\">
\t\t\t{{ forms.field(urlFormatParams, urlFormatInput('structure', brandNewSection, section)) }}

\t\t\t{{ templateField('structure', section) }}
\t\t</div>

\t\t{{ forms.textField({
\t\t\tlabel: \"Max Levels\"|t,
\t\t\tinstructions: \"The maximum number of levels this section can have. Leave blank if you don’t care.\"|t,
\t\t\tid: 'structure-maxLevels',
\t\t\tname: 'types[structure][maxLevels]',
\t\t\tvalue: section.maxLevels,
\t\t\tsize: 5,
\t\t\terrors: section.getErrors('maxLevels')
\t\t}) }}
\t</div>

\t<hr>

\t{% if not craft.isLocalized() %}
\t\t<div class=\"type-channel type-structure {% if section.type == 'single' %}hidden{% endif %}\">
\t\t\t{% set locale = craft.i18n.getPrimarySiteLocale() %}
\t\t\t{% set value = (section.type != 'single' and section.locales[locale.id] is defined ? section.locales[locale.id].enabledByDefault : true) %}

\t\t\t{{ forms.lightswitchField({
\t\t\t\tlabel: \"Default Entry Status\"|t,
\t\t\t\tid: 'defaultEntryStatus',
\t\t\t\tname: 'defaultLocaleStatuses['~locale.id~']',
\t\t\t\ton: value
\t\t\t}) }}
\t\t</div>
\t{% endif %}

\t{{ forms.checkboxField({
\t\tlabel: \"Enable versioning for entries in this section?\"|t,
\t\tid: 'enableVersioning',
\t\tname: 'enableVersioning',
\t\tchecked: section.enableVersioning
\t}) }}
{% endblock %}


{% includejs %}
\t{% if not section.handle %}new Craft.HandleGenerator('#name', '#handle');{% endif %}

\t{% for locale in craft.i18n.getSiteLocales() %}
\t\t{% if section.locales[locale.id] is not defined or not section.locales[locale.id].urlFormat %}
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-urlFormat-{{ locale.id }}');
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-urlFormat-{{ locale.id }}',   { suffix: '/{slug}' });
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-urlFormat-{{ locale.id }}', { suffix: '/{slug}' });
\t\t{% endif %}
\t{% endfor %}

\t{% if brandNewSection %}
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-template');
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-template',   { suffix: '/_entry' });
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-template', { suffix: '/_entry' });
\t{% endif %}
{% endincludejs %}
", "settings/sections/_edit", "");
    }
}
