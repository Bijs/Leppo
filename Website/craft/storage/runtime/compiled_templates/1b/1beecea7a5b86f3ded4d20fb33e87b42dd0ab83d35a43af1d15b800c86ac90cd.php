<?php

/* seomatic/seometrics */
class __TwigTemplate_25d19a98927095b7ddaa0c2ee1890605c4688dcfb286adb3bb225dbbd83897c1 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "seomatic/seometrics", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["forms"] = $this->loadTemplate("_includes/forms", "seomatic/seometrics", 1);
        // line 4
        $context["forms"] = $this->loadTemplate("_includes/forms", "seomatic/seometrics", 4);
        // line 6
        $context["title"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "seomatic", array()), "getPluginName", array(), "method");
        // line 8
        $context["docsUrl"] = "https://github.com/nystudio107/seomatic/wiki";
        // line 10
        $context["seomaticSections"] = array("seometrics" => array("label" => \Craft\Craft::t("SEOmetrics"), "url" => \Craft\UrlHelper::getUrl("seomatic/seometrics")), "meta" => array("label" => \Craft\Craft::t("Template Meta"), "url" => \Craft\UrlHelper::getUrl("seomatic/meta")), "site" => array("label" => \Craft\Craft::t("Site Meta"), "url" => \Craft\UrlHelper::getUrl("seomatic/site")), "identity" => array("label" => \Craft\Craft::t("Site Identity"), "url" => \Craft\UrlHelper::getUrl("seomatic/identity")), "social" => array("label" => \Craft\Craft::t("Social Media"), "url" => \Craft\UrlHelper::getUrl("seomatic/social")), "creator" => array("label" => \Craft\Craft::t("Site Creator"), "url" => \Craft\UrlHelper::getUrl("seomatic/creator")), "settings" => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("seomatic/settings")));
        // line 20
        $context["crumbs"] = array(0 => array("label" => $this->getAttribute($this->getAttribute(        // line 21
($context["craft"] ?? $this->getContext($context, "craft")), "seomatic", array()), "getPluginName", array(), "method"), "url" => \Craft\UrlHelper::getUrl("seomatic")), 1 => array("label" => \Craft\Craft::t("SEOmetrics"), "url" => \Craft\UrlHelper::getUrl("seomatic/seometrics")));
        // line 25
        if (($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "app", array()), "version", array()) < 2.5)) {
            // line 26
            $context["tabs"] = ($context["seomaticSections"] ?? $this->getContext($context, "seomaticSections"));
            // line 27
            $context["selectedTab"] = "seometrics";
        } else {
            // line 29
            $context["subnav"] = ($context["seomaticSections"] ?? $this->getContext($context, "seomaticSections"));
            // line 30
            $context["selectedSubnavItem"] = "seometrics";
        }
        // line 33
        ob_start();
        // line 34
        echo "
<style>

div.seometrics-spinner-wrapper {
    margin: 0 auto;
    padding: 50px;
    display: block;
}

div#fields-seomatic-metrics-content,
div#seomatic-metrics-content {
    padding: 0px;
    border: none;
    width: 100%;
    display: block;
    background-color: #FFF;
}

iframe.seomatic-metrics-iframe {
    width: 100%;
    min-height: 45vw;
}

div#fields-seomatic-metrics-content-inner,
div#seomatic-metrics-content-inner {
    width: 100%;
    height: 100%;
}

div#fields-seomatic-metrics-content object ,
div#seomatic-metrics-content object {
    width: 100%;
    height: 100%;
}

input[type=\"text\"].seomatic-metrics-input {
    color: #222;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-style: normal;
    font-variant-caps: normal;
    font-weight: normal;
    border: 1px solid rgba(0, 0, 0, .5);
    padding: 6px;
    margin-right: 8px;
    width: 50%;
    display: inline-block;
}

label.seomatic-metrics-label {
    color: #222;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-style: normal;
    font-variant-caps: normal;
    font-weight: normal;
    padding: 8px;
    display: inline-block;
}

a.seomatic-metrics-button {
    position: relative;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-style: normal;
    font-variant-caps: normal;
    font-weight: normal;
    line-height: 18px;
    padding: 4px 10px;
    margin: 0;
    text-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    background: none;
    border: 2px solid rgba(0, 0, 0, .5);
    color: rgba(0, 0, 0, .8);
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

a.seomatic-metrics-button:hover {
    border-color: rgba(0, 0, 0, .8);
    color: rgba(0, 0, 0, 1.0);
}

div.seomatic-metrics-header {
    border-bottom: 1px dashed #d5d8dd;
    padding-bottom: 10px;
}

div.seomatic-metrics-header:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: \" \";
    clear: both;
    height: 0;
}

</style>

";
        // line 138
        $context["urlToAnalyze"] = ($context["siteUrl"] ?? $this->getContext($context, "siteUrl"));
        // line 139
        echo "
\t<div id=\"preview-seometrics-popup\">
\t\t<div class=\"preview-modal\">
\t\t\t<div class=\"preview-modal-inner\">
\t\t\t\t<div class=\"displaypreview-container\">

\t\t\t\t\t<div class=\"preview-column\">
\t\t\t\t\t\t<h1>";
        // line 146
        echo twig_escape_filter($this->env, \Craft\Craft::t("SEOmetrics Content Analysis"), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t<p>";
        // line 147
        echo \Craft\Craft::t("SEOmetrics Content Analysis will run a variety of tests on your web page, and offer you analysis with helpful tips on how to correct any problems it finds.  For Craft Entries/Sections, you can access SEOmetrics for specific pages via Live Preview by clicking on the SEOmetrics badge:");
        echo "</p>
                        <p><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("seomatic/images/seometrics_badge.png"), "html", null, true);
        echo "\" width=\"auto\" height=\"auto\" /></p>
\t\t\t\t\t\t<p>";
        // line 149
        echo \Craft\Craft::t("Enter any URL below to analyze.  You can enter Focus Keyworks, comma separated, for an additional analysis of how well optimized your page is for those specific SEO keywords.");
        echo "</p>

\t\t\t\t\t\t<div id =\"seomatic-metrics-content\">
\t\t\t\t\t\t    <div class=\"seomatic-metrics-header\">
                                <div style=\"float: left; width: 95%; padding-left: 6px;\">
                                    <label class=\"seomatic-metrics-label\">URL to Analyze:</label><input id=\"seomatic-metrics-url\" type=\"text\" class=\"seomatic-metrics-input\" placeholder=\"https://nystudio107.com/\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, ($context["urlToAnalyze"] ?? $this->getContext($context, "urlToAnalyze")), "html", null, true);
        echo "\">
                                </div>
                                <div style=\"float: left; width: 95%;\">
                                    <label class=\"seomatic-metrics-label\">Focus Keywords:</label><input id=\"seomatic-metrics-keywords\" type=\"text\" class=\"seomatic-metrics-input\" placeholder=\"comma separated keywords\"> <a id=\"seomatic-metrics-analyze\" class=\"seomatic-metrics-button\" href=\"#\" onclick=\"load_metrics(); return false;\">Analyze</a>
                                </div>
\t\t\t\t\t\t    </div>
                            <div id=\"seometrics-spinner\" style=\"display: none;\">
                                <div class=\"spinner big seometrics-spinner-wrapper\">
                                </div>
                            </div>
\t\t\t\t\t\t    <div id=\"seomatic-metrics-content-inner\">
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 177
        $context["js"] = ('' === $tmp = "// load_metrics();

document.getElementById(\"seomatic-metrics-keywords\")
    .addEventListener(\"keyup\", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById(\"seomatic-metrics-analyze\").click();
    }
});
document.getElementById(\"seomatic-metrics-url\")
    .addEventListener(\"keyup\", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById(\"seomatic-metrics-analyze\").click();
    }
});

    function load_metrics()
    {
        var floaterDiv = document.getElementById('seomatic-metrics-content');
        var whichUrl = document.getElementById('seomatic-metrics-url').value;
        var whichKeywords = document.getElementById('seomatic-metrics-keywords').value;
        var dataUrl = Craft.getActionUrl('seomatic/renderMetrics', {url: whichUrl, keywords: whichKeywords});

        document.getElementById(\"seomatic-metrics-content-inner\").innerHTML='<iframe id=\"iFrame1\" class=\"seomatic-metrics-iframe\" src=\"' + dataUrl + '\" ></iframe>';
        \$('#seometrics-spinner').show();
        \$('#iFrame1').load(function(){
            var iFrame = document.getElementById( 'iFrame1' );
            resizeIFrameToFitContent(iFrame);
            \$('#seometrics-spinner').hide();
        });
   }

function resizeIFrameToFitContent( iFrame ) {
    iFrame.width  = iFrame.contentWindow.document.body.scrollWidth;
    iFrame.height = iFrame.contentWindow.document.body.scrollHeight;
}

\$( window ).resize(function() {
    var iFrame = document.getElementById( 'iFrame1' );
    resizeIFrameToFitContent(iFrame);
});

") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 222
        $_js = ($context["js"] ?? $this->getContext($context, "js"));
        \Craft\craft()->templates->includeJs($_js);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "seomatic/seometrics";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 3,  256 => 222,  211 => 177,  188 => 154,  180 => 149,  176 => 148,  172 => 147,  168 => 146,  159 => 139,  157 => 138,  51 => 34,  49 => 33,  46 => 30,  44 => 29,  41 => 27,  39 => 26,  37 => 25,  35 => 21,  34 => 20,  32 => 10,  30 => 8,  28 => 6,  26 => 4,  24 => 1,  11 => 3,);
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

{% extends \"_layouts/cp\" %}
{% import '_includes/forms' as forms %}

{% set title = craft.seomatic.getPluginName() %}

{% set docsUrl = \"https://github.com/nystudio107/seomatic/wiki\" %}

{% set seomaticSections = {
    seometrics: { label: \"SEOmetrics\"|t, url: url('seomatic/seometrics') },
    meta:       { label: \"Template Meta\"|t, url: url('seomatic/meta') },
    site:       { label: \"Site Meta\"|t, url: url('seomatic/site') },
    identity:   { label: \"Site Identity\"|t, url: url('seomatic/identity') },
    social:     { label: \"Social Media\"|t, url: url('seomatic/social') },
    creator:    { label: \"Site Creator\"|t, url: url('seomatic/creator') },
    settings:   { label: \"Settings\"|t, url: url('seomatic/settings') },
} %}

{% set crumbs = [
    { label: craft.seomatic.getPluginName(), url: url('seomatic') },
    { label: \"SEOmetrics\"|t, url: url('seomatic/seometrics') },
] %}

{% if craft.app.version < 2.5 %}
    {% set tabs = seomaticSections %}
    {% set selectedTab = 'seometrics' %}
{% else %}
    {% set subnav = seomaticSections %}
    {% set selectedSubnavItem = 'seometrics' %}
{% endif %}

{% set content %}

<style>

div.seometrics-spinner-wrapper {
    margin: 0 auto;
    padding: 50px;
    display: block;
}

div#fields-seomatic-metrics-content,
div#seomatic-metrics-content {
    padding: 0px;
    border: none;
    width: 100%;
    display: block;
    background-color: #FFF;
}

iframe.seomatic-metrics-iframe {
    width: 100%;
    min-height: 45vw;
}

div#fields-seomatic-metrics-content-inner,
div#seomatic-metrics-content-inner {
    width: 100%;
    height: 100%;
}

div#fields-seomatic-metrics-content object ,
div#seomatic-metrics-content object {
    width: 100%;
    height: 100%;
}

input[type=\"text\"].seomatic-metrics-input {
    color: #222;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-style: normal;
    font-variant-caps: normal;
    font-weight: normal;
    border: 1px solid rgba(0, 0, 0, .5);
    padding: 6px;
    margin-right: 8px;
    width: 50%;
    display: inline-block;
}

label.seomatic-metrics-label {
    color: #222;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-style: normal;
    font-variant-caps: normal;
    font-weight: normal;
    padding: 8px;
    display: inline-block;
}

a.seomatic-metrics-button {
    position: relative;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-style: normal;
    font-variant-caps: normal;
    font-weight: normal;
    line-height: 18px;
    padding: 4px 10px;
    margin: 0;
    text-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    background: none;
    border: 2px solid rgba(0, 0, 0, .5);
    color: rgba(0, 0, 0, .8);
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

a.seomatic-metrics-button:hover {
    border-color: rgba(0, 0, 0, .8);
    color: rgba(0, 0, 0, 1.0);
}

div.seomatic-metrics-header {
    border-bottom: 1px dashed #d5d8dd;
    padding-bottom: 10px;
}

div.seomatic-metrics-header:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: \" \";
    clear: both;
    height: 0;
}

</style>

{% set urlToAnalyze = siteUrl %}

\t<div id=\"preview-seometrics-popup\">
\t\t<div class=\"preview-modal\">
\t\t\t<div class=\"preview-modal-inner\">
\t\t\t\t<div class=\"displaypreview-container\">

\t\t\t\t\t<div class=\"preview-column\">
\t\t\t\t\t\t<h1>{{ \"SEOmetrics Content Analysis\" |t }}</h1>
\t\t\t\t\t\t<p>{{ (\"SEOmetrics Content Analysis will run a variety of tests on your web page, and offer you analysis with helpful tips on how to correct any problems it finds.  For Craft Entries/Sections, you can access SEOmetrics for specific pages via Live Preview by clicking on the SEOmetrics badge:\") |t |raw }}</p>
                        <p><img src=\"{{ resourceUrl('seomatic/images/seometrics_badge.png') }}\" width=\"auto\" height=\"auto\" /></p>
\t\t\t\t\t\t<p>{{ \"Enter any URL below to analyze.  You can enter Focus Keyworks, comma separated, for an additional analysis of how well optimized your page is for those specific SEO keywords.\" |t |raw }}</p>

\t\t\t\t\t\t<div id =\"seomatic-metrics-content\">
\t\t\t\t\t\t    <div class=\"seomatic-metrics-header\">
                                <div style=\"float: left; width: 95%; padding-left: 6px;\">
                                    <label class=\"seomatic-metrics-label\">URL to Analyze:</label><input id=\"seomatic-metrics-url\" type=\"text\" class=\"seomatic-metrics-input\" placeholder=\"https://nystudio107.com/\" value=\"{{ urlToAnalyze }}\">
                                </div>
                                <div style=\"float: left; width: 95%;\">
                                    <label class=\"seomatic-metrics-label\">Focus Keywords:</label><input id=\"seomatic-metrics-keywords\" type=\"text\" class=\"seomatic-metrics-input\" placeholder=\"comma separated keywords\"> <a id=\"seomatic-metrics-analyze\" class=\"seomatic-metrics-button\" href=\"#\" onclick=\"load_metrics(); return false;\">Analyze</a>
                                </div>
\t\t\t\t\t\t    </div>
                            <div id=\"seometrics-spinner\" style=\"display: none;\">
                                <div class=\"spinner big seometrics-spinner-wrapper\">
                                </div>
                            </div>
\t\t\t\t\t\t    <div id=\"seomatic-metrics-content-inner\">
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endset %}



{% set js %}
// load_metrics();

document.getElementById(\"seomatic-metrics-keywords\")
    .addEventListener(\"keyup\", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById(\"seomatic-metrics-analyze\").click();
    }
});
document.getElementById(\"seomatic-metrics-url\")
    .addEventListener(\"keyup\", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById(\"seomatic-metrics-analyze\").click();
    }
});

    function load_metrics()
    {
        var floaterDiv = document.getElementById('seomatic-metrics-content');
        var whichUrl = document.getElementById('seomatic-metrics-url').value;
        var whichKeywords = document.getElementById('seomatic-metrics-keywords').value;
        var dataUrl = Craft.getActionUrl('seomatic/renderMetrics', {url: whichUrl, keywords: whichKeywords});

        document.getElementById(\"seomatic-metrics-content-inner\").innerHTML='<iframe id=\"iFrame1\" class=\"seomatic-metrics-iframe\" src=\"' + dataUrl + '\" ></iframe>';
        \$('#seometrics-spinner').show();
        \$('#iFrame1').load(function(){
            var iFrame = document.getElementById( 'iFrame1' );
            resizeIFrameToFitContent(iFrame);
            \$('#seometrics-spinner').hide();
        });
   }

function resizeIFrameToFitContent( iFrame ) {
    iFrame.width  = iFrame.contentWindow.document.body.scrollWidth;
    iFrame.height = iFrame.contentWindow.document.body.scrollHeight;
}

\$( window ).resize(function() {
    var iFrame = document.getElementById( 'iFrame1' );
    resizeIFrameToFitContent(iFrame);
});

{% endset %}
{% includeJs js %}", "seomatic/seometrics", "");
    }
}
