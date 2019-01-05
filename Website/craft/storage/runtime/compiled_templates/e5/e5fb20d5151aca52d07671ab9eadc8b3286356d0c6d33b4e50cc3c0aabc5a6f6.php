<?php

/* _seo_meta */
class __TwigTemplate_18e36395f2277d84316d86d3d1a1a941f9a6a61cd546e80bee4fe4eabb77baec extends Craft\BaseTemplate
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
        echo "<!-- BEGIN SEOmatic rendered SEO Meta -->

<title>";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "devMode", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteDevModeTitle", array()), "html", null, true);
            echo " ";
        }
        if (($this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteSeoTitlePlacement", array()) == "before")) {
            echo $this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteSeoName", array());
            if ($this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoTitle", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteSeoTitleSeparator", array()), "html", null, true);
                echo " ";
            }
        }
        echo $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoTitle", array());
        if (($this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteSeoTitlePlacement", array()) == "after")) {
            if ($this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoTitle", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteSeoTitleSeparator", array()), "html", null, true);
                echo " ";
            }
            echo $this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteSeoName", array());
        }
        echo "</title>

<!-- Standard SEO -->

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"referrer\" content=\"no-referrer-when-downgrade\" />
";
        // line 9
        if (($this->getAttribute(($context["seomaticMeta"] ?? null), "robots", array(), "any", true, true) && $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "robots", array()))) {
            // line 10
            echo "<meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "robots", array());
            echo "\" />
";
        }
        // line 12
        if (($this->getAttribute(($context["seomaticMeta"] ?? null), "seoKeywords", array(), "any", true, true) && $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoKeywords", array()))) {
            // line 13
            echo "<meta name=\"keywords\" content=\"";
            echo $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoKeywords", array());
            echo "\" />
";
        }
        // line 15
        if (($this->getAttribute(($context["seomaticMeta"] ?? null), "seoDescription", array(), "any", true, true) && $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoDescription", array()))) {
            // line 16
            echo "<meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoDescription", array());
            echo "\" />
";
        }
        // line 18
        echo "<meta name=\"generator\" content=\"SEOmatic\" />
";
        // line 19
        if (twig_length_filter($this->env, $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "canonicalUrl", array()))) {
            // line 20
            echo "<link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "canonicalUrl", array()), "html", null, true);
            echo "\" />
";
        }
        // line 22
        $context["localizedUrls"] = $this->env->getExtension('Craft\SeomaticTwigExtension')->getLocalizedUrls();
        // line 23
        if ((twig_length_filter($this->env, ($context["localizedUrls"] ?? $this->getContext($context, "localizedUrls"))) > 0)) {
            // line 24
            echo "<link rel=\"alternate\" href=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, ($context["localizedUrls"] ?? $this->getContext($context, "localizedUrls"))), "html", null, true);
            echo "\" hreflang=\"x-default\" />
";
        } else {
            // line 26
            echo "<link rel=\"alternate\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "canonicalUrl", array()), "html", null, true);
            echo "\" hreflang=\"x-default\" />
";
        }
        // line 28
        if ((twig_length_filter($this->env, ($context["localizedUrls"] ?? $this->getContext($context, "localizedUrls"))) > 1)) {
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["localizedUrls"] ?? $this->getContext($context, "localizedUrls")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 30
                echo "<link rel=\"alternate\" hreflang=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->replaceFilter(twig_lower_filter($this->env, $context["key"]), "_", "-"), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" />
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 33
        if (($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? null), "address", array(), "any", false, true), "addressRegion", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "address", array()), "addressRegion", array()))) {
            // line 34
            echo "<meta name=\"geo.region\" content=\"";
            echo $this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "address", array()), "addressRegion", array());
            echo "\" />
";
        }
        // line 36
        if (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? null), "location", array(), "any", false, true), "geo", array(), "any", false, true), "latitude", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "location", array()), "geo", array()), "latitude", array())) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? null), "location", array(), "any", false, true), "geo", array(), "any", false, true), "latitude", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "location", array()), "geo", array()), "latitude", array()))) {
            // line 37
            echo "<meta name=\"geo.position\" content=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "location", array()), "geo", array()), "latitude", array());
            echo ",";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "location", array()), "geo", array()), "longitude", array());
            echo "\" />
<meta name=\"ICBM\" content=\"";
            // line 38
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "location", array()), "geo", array()), "latitude", array());
            echo ",";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "location", array()), "geo", array()), "longitude", array());
            echo "\" />
";
        }
        // line 40
        if (($this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? null), "location", array(), "any", false, true), "name", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "location", array()), "name", array()))) {
            // line 41
            echo "<meta name=\"geo.placename\" content=\"";
            echo $this->getAttribute($this->getAttribute(($context["seomaticIdentity"] ?? $this->getContext($context, "seomaticIdentity")), "location", array()), "name", array());
            echo "\" />
";
        }
        // line 43
        echo "
<!-- Dublin Core basic info -->

<meta name=\"dcterms.Identifier\" content=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "canonicalUrl", array()), "html", null, true);
        echo "\" />
<meta name=\"dcterms.Format\" content=\"text/html\" />
<meta name=\"dcterms.Relation\" content=\"";
        // line 48
        echo $this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteSeoName", array());
        echo "\" />
<meta name=\"dcterms.Language\" content=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "locale", array()), 0, 2), "html", null, true);
        echo "\" />
<meta name=\"dcterms.Publisher\" content=\"";
        // line 50
        echo $this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteSeoName", array());
        echo "\" />
<meta name=\"dcterms.Type\" content=\"text/html\" />
<meta name=\"dcterms.Coverage\" content=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? $this->getContext($context, "siteUrl")), "html", null, true);
        echo "\" />
<meta name=\"dcterms.Rights\" content=\"";
        // line 53
        echo $this->getAttribute(($context["seomaticHelper"] ?? $this->getContext($context, "seomaticHelper")), "ownerCopyrightNotice", array());
        echo "\" />
<meta name=\"dcterms.Title\" content=\"";
        // line 54
        echo $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoTitle", array());
        echo "\" />
";
        // line 55
        if (($this->getAttribute(($context["seomaticCreator"] ?? null), "name", array(), "any", true, true) && $this->getAttribute(($context["seomaticCreator"] ?? $this->getContext($context, "seomaticCreator")), "name", array()))) {
            // line 56
            echo "<meta name=\"dcterms.Creator\" content=\"";
            echo $this->getAttribute(($context["seomaticCreator"] ?? $this->getContext($context, "seomaticCreator")), "name", array());
            echo "\" />
";
        }
        // line 58
        echo "<meta name=\"dcterms.Subject\" content=\"";
        echo $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoKeywords", array());
        echo "\" />
<meta name=\"dcterms.Contributor\" content=\"";
        // line 59
        echo $this->getAttribute(($context["seomaticSiteMeta"] ?? $this->getContext($context, "seomaticSiteMeta")), "siteSeoName", array());
        echo "\" />
<meta name=\"dcterms.Date\" content=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->dateFilter($this->env, ($context["now"] ?? $this->getContext($context, "now")), "Y-m-d"), "html", null, true);
        echo "\" />
<meta name=\"dcterms.Description\" content=\"";
        // line 61
        echo $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "seoDescription", array());
        echo "\" />

";
        // line 63
        if (($this->getAttribute(($context["seomaticMeta"] ?? null), "og", array(), "any", true, true) && $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "og", array()))) {
            // line 64
            echo "<!-- Facebook OpenGraph -->

";
            // line 66
            if ($this->getAttribute(($context["seomaticSocial"] ?? $this->getContext($context, "seomaticSocial")), "facebookProfileId", array())) {
                // line 67
                echo "<meta property=\"fb:profile_id\" content=\"";
                echo $this->getAttribute(($context["seomaticSocial"] ?? $this->getContext($context, "seomaticSocial")), "facebookProfileId", array());
                echo "\" />
";
            }
            // line 69
            if ($this->getAttribute(($context["seomaticSocial"] ?? $this->getContext($context, "seomaticSocial")), "facebookAppId", array())) {
                // line 70
                echo "<meta property=\"fb:app_id\" content=\"";
                echo $this->getAttribute(($context["seomaticSocial"] ?? $this->getContext($context, "seomaticSocial")), "facebookAppId", array());
                echo "\" />
";
            }
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "og", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 73
                if ($context["value"]) {
                    // line 74
                    if (twig_test_iterable($context["value"])) {
                        // line 75
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["subvalue"]) {
                            // line 76
                            echo "<meta property=\"og:";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "\" content=\"";
                            echo $context["subvalue"];
                            echo "\" />
";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subvalue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    } else {
                        // line 79
                        echo "<meta property=\"og:";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" content=\"";
                        echo $context["value"];
                        echo "\" />
";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            if (($this->getAttribute(($context["seomaticMeta"] ?? null), "article", array(), "any", true, true) && $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "article", array()))) {
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "article", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 85
                    if ($context["value"]) {
                        // line 86
                        if (twig_test_iterable($context["value"])) {
                            // line 87
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["value"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["subvalue"]) {
                                // line 88
                                echo "<meta property=\"article:";
                                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                echo "\" content=\"";
                                echo $context["subvalue"];
                                echo "\" />
";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subvalue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                        } else {
                            // line 91
                            echo "<meta property=\"article:";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "\" content=\"";
                            echo $context["value"];
                            echo "\" />
";
                        }
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        // line 97
        echo "
";
        // line 98
        if (($this->getAttribute(($context["seomaticMeta"] ?? null), "twitter", array(), "any", true, true) && $this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "twitter", array()))) {
            // line 99
            echo "<!-- Twitter Card -->

";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["seomaticMeta"] ?? $this->getContext($context, "seomaticMeta")), "twitter", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 102
                if ($context["value"]) {
                    // line 103
                    echo "<meta name=\"twitter:";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" content=\"";
                    echo $context["value"];
                    echo "\" />
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "
";
        }
        // line 108
        if ($this->getAttribute(($context["seomaticSocial"] ?? $this->getContext($context, "seomaticSocial")), "googlePlusHandle", array())) {
            // line 109
            echo "<!-- Google Publisher -->

<link rel=\"publisher\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute(($context["seomaticHelper"] ?? $this->getContext($context, "seomaticHelper")), "googlePlusUrl", array()), "html", null, true);
            echo "\" />
";
        }
        // line 113
        echo "
<!-- Humans.txt authorship http://humanstxt.org -->

<link type=\"text/plain\" rel=\"author\" href=\"/humans.txt\" />

<!-- Domain verification -->

";
        // line 120
        if ($this->getAttribute(($context["seomaticHelper"] ?? $this->getContext($context, "seomaticHelper")), "ownerGoogleSiteVerification", array())) {
            // line 121
            echo "<meta name=\"google-site-verification\" content=\"";
            echo $this->getAttribute(($context["seomaticHelper"] ?? $this->getContext($context, "seomaticHelper")), "ownerGoogleSiteVerification", array());
            echo "\" />
";
        }
        // line 123
        if ($this->getAttribute(($context["seomaticHelper"] ?? $this->getContext($context, "seomaticHelper")), "ownerBingSiteVerification", array())) {
            // line 124
            echo "<meta name=\"msvalidate.01\" content=\"";
            echo $this->getAttribute(($context["seomaticHelper"] ?? $this->getContext($context, "seomaticHelper")), "ownerBingSiteVerification", array());
            echo "\" />
";
        }
        // line 126
        echo "
<!-- Identity -->

";
        // line 129
        echo $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "seomatic", array()), "renderIdentity", array(), "method");
        echo "

<!-- WebSite -->

";
        // line 133
        echo $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "seomatic", array()), "renderWebsite", array(), "method");
        echo "

<!-- Place -->

";
        // line 137
        echo $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "seomatic", array()), "renderPlace", array(), "method");
        echo "

<!-- Main Entity of Page -->

";
        // line 141
        echo $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "seomatic", array()), "renderMainEntityOfPage", array(), "method");
        echo "

<!-- Breadcrumbs -->

";
        // line 145
        echo $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "seomatic", array()), "renderBreadcrumbs", array(), "method");
        echo "

<!-- Google Tag Manager -->

";
        // line 149
        if ( !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isLivePreview", array())) {
            echo $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "seomatic", array()), "renderGoogleTagManager", array(), "method");
        } else {
            echo "<!-- Google Tag Manager script is NOT included in LivePreview -->";
        }
        // line 150
        echo "
<!-- Google Analytics -->

";
        // line 153
        if (( !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "config", array()), "devMode", array()) &&  !$this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "isLivePreview", array()))) {
            echo $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "seomatic", array()), "renderGoogleAnalytics", array(), "method");
        } else {
            echo "<!-- Google Analytics script is NOT included in LivePreview or if devMode is on -->";
        }
        // line 154
        echo "
<!-- END SEOmatic rendered SEO Meta -->
";
    }

    public function getTemplateName()
    {
        return "_seo_meta";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 154,  432 => 153,  427 => 150,  421 => 149,  414 => 145,  407 => 141,  400 => 137,  393 => 133,  386 => 129,  381 => 126,  375 => 124,  373 => 123,  367 => 121,  365 => 120,  356 => 113,  351 => 111,  347 => 109,  345 => 108,  341 => 106,  329 => 103,  327 => 102,  323 => 101,  319 => 99,  317 => 98,  314 => 97,  299 => 91,  287 => 88,  283 => 87,  281 => 86,  279 => 85,  275 => 84,  273 => 83,  260 => 79,  248 => 76,  244 => 75,  242 => 74,  240 => 73,  236 => 72,  230 => 70,  228 => 69,  222 => 67,  220 => 66,  216 => 64,  214 => 63,  209 => 61,  205 => 60,  201 => 59,  196 => 58,  190 => 56,  188 => 55,  184 => 54,  180 => 53,  176 => 52,  171 => 50,  167 => 49,  163 => 48,  158 => 46,  153 => 43,  147 => 41,  145 => 40,  138 => 38,  131 => 37,  129 => 36,  123 => 34,  121 => 33,  109 => 30,  105 => 29,  103 => 28,  97 => 26,  91 => 24,  89 => 23,  87 => 22,  81 => 20,  79 => 19,  76 => 18,  70 => 16,  68 => 15,  62 => 13,  60 => 12,  54 => 10,  52 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- BEGIN SEOmatic rendered SEO Meta -->

<title>{% if craft.config.devMode %}{{ seomaticSiteMeta.siteDevModeTitle }} {% endif %}{% if seomaticSiteMeta.siteSeoTitlePlacement == \"before\" %}{{ seomaticSiteMeta.siteSeoName |raw }}{% if seomaticMeta.seoTitle %} {{ seomaticSiteMeta.siteSeoTitleSeparator }} {% endif %}{% endif %}{{ seomaticMeta.seoTitle |raw }}{% if seomaticSiteMeta.siteSeoTitlePlacement == \"after\" %}{% if seomaticMeta.seoTitle %} {{ seomaticSiteMeta.siteSeoTitleSeparator }} {% endif %}{{ seomaticSiteMeta.siteSeoName |raw }}{% endif %}</title>

<!-- Standard SEO -->

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"referrer\" content=\"no-referrer-when-downgrade\" />
{% if seomaticMeta.robots is defined and seomaticMeta.robots %}
<meta name=\"robots\" content=\"{{ seomaticMeta.robots |raw }}\" />
{% endif %}
{% if seomaticMeta.seoKeywords is defined and seomaticMeta.seoKeywords %}
<meta name=\"keywords\" content=\"{{ seomaticMeta.seoKeywords |raw }}\" />
{% endif %}
{% if seomaticMeta.seoDescription is defined and seomaticMeta.seoDescription %}
<meta name=\"description\" content=\"{{ seomaticMeta.seoDescription |raw }}\" />
{% endif %}
<meta name=\"generator\" content=\"SEOmatic\" />
{% if seomaticMeta.canonicalUrl |length %}
<link rel=\"canonical\" href=\"{{ seomaticMeta.canonicalUrl }}\" />
{% endif %}
{% set localizedUrls = getLocalizedUrls() %}
{% if localizedUrls |length > 0 %}
<link rel=\"alternate\" href=\"{{ localizedUrls |first }}\" hreflang=\"x-default\" />
{% else %}
<link rel=\"alternate\" href=\"{{ seomaticMeta.canonicalUrl }}\" hreflang=\"x-default\" />
{% endif %}
{% if localizedUrls |length > 1 %}
{% for key, value in localizedUrls %}
<link rel=\"alternate\" hreflang=\"{{ key |lower |replace ('_', '-') }}\" href=\"{{ value }}\" />
{% endfor %}
{% endif %}
{% if seomaticIdentity.address.addressRegion is defined and seomaticIdentity.address.addressRegion %}
<meta name=\"geo.region\" content=\"{{ seomaticIdentity.address.addressRegion |raw }}\" />
{% endif %}
{% if seomaticIdentity.location.geo.latitude is defined and seomaticIdentity.location.geo.latitude and seomaticIdentity.location.geo.latitude is defined and seomaticIdentity.location.geo.latitude %}
<meta name=\"geo.position\" content=\"{{ seomaticIdentity.location.geo.latitude |raw }},{{ seomaticIdentity.location.geo.longitude |raw }}\" />
<meta name=\"ICBM\" content=\"{{ seomaticIdentity.location.geo.latitude |raw }},{{ seomaticIdentity.location.geo.longitude |raw }}\" />
{% endif %}
{% if seomaticIdentity.location.name is defined and seomaticIdentity.location.name %}
<meta name=\"geo.placename\" content=\"{{ seomaticIdentity.location.name |raw }}\" />
{% endif %}

<!-- Dublin Core basic info -->

<meta name=\"dcterms.Identifier\" content=\"{{ seomaticMeta.canonicalUrl }}\" />
<meta name=\"dcterms.Format\" content=\"text/html\" />
<meta name=\"dcterms.Relation\" content=\"{{ seomaticSiteMeta.siteSeoName |raw }}\" />
<meta name=\"dcterms.Language\" content=\"{{ craft.locale | slice (0,2) }}\" />
<meta name=\"dcterms.Publisher\" content=\"{{ seomaticSiteMeta.siteSeoName |raw }}\" />
<meta name=\"dcterms.Type\" content=\"text/html\" />
<meta name=\"dcterms.Coverage\" content=\"{{ siteUrl }}\" />
<meta name=\"dcterms.Rights\" content=\"{{ seomaticHelper.ownerCopyrightNotice |raw }}\" />
<meta name=\"dcterms.Title\" content=\"{{ seomaticMeta.seoTitle |raw }}\" />
{% if seomaticCreator.name is defined and seomaticCreator.name %}
<meta name=\"dcterms.Creator\" content=\"{{ seomaticCreator.name |raw }}\" />
{% endif %}
<meta name=\"dcterms.Subject\" content=\"{{ seomaticMeta.seoKeywords |raw }}\" />
<meta name=\"dcterms.Contributor\" content=\"{{ seomaticSiteMeta.siteSeoName |raw }}\" />
<meta name=\"dcterms.Date\" content=\"{{ now | date('Y-m-d') }}\" />
<meta name=\"dcterms.Description\" content=\"{{ seomaticMeta.seoDescription |raw }}\" />

{% if seomaticMeta.og is defined and seomaticMeta.og %}
<!-- Facebook OpenGraph -->

{% if seomaticSocial.facebookProfileId %}
<meta property=\"fb:profile_id\" content=\"{{ seomaticSocial.facebookProfileId |raw }}\" />
{% endif %}
{% if seomaticSocial.facebookAppId %}
<meta property=\"fb:app_id\" content=\"{{ seomaticSocial.facebookAppId |raw }}\" />
{% endif %}
{% for key, value in seomaticMeta.og %}
{% if value %}
{% if value is iterable %}
{% for subvalue in value %}
<meta property=\"og:{{ key }}\" content=\"{{ subvalue |raw }}\" />
{% endfor %}
{% else %}
<meta property=\"og:{{ key }}\" content=\"{{ value |raw }}\" />
{% endif %}
{% endif %}
{% endfor %}
{% if seomaticMeta.article is defined and seomaticMeta.article %}
{% for key, value in seomaticMeta.article %}
{% if value %}
{% if value is iterable %}
{% for subvalue in value %}
<meta property=\"article:{{ key }}\" content=\"{{ subvalue |raw }}\" />
{% endfor %}
{% else %}
<meta property=\"article:{{ key }}\" content=\"{{ value |raw }}\" />
{% endif %}
{% endif %}
{% endfor %}
{% endif %}
{% endif %}

{% if seomaticMeta.twitter is defined and seomaticMeta.twitter %}
<!-- Twitter Card -->

{% for key, value in seomaticMeta.twitter %}
{% if value %}
<meta name=\"twitter:{{ key }}\" content=\"{{ value |raw }}\" />
{% endif %}
{% endfor %}

{% endif %}
{% if seomaticSocial.googlePlusHandle %}
<!-- Google Publisher -->

<link rel=\"publisher\" href=\"{{ seomaticHelper.googlePlusUrl }}\" />
{% endif %}

<!-- Humans.txt authorship http://humanstxt.org -->

<link type=\"text/plain\" rel=\"author\" href=\"/humans.txt\" />

<!-- Domain verification -->

{% if seomaticHelper.ownerGoogleSiteVerification %}
<meta name=\"google-site-verification\" content=\"{{ seomaticHelper.ownerGoogleSiteVerification |raw }}\" />
{% endif %}
{% if seomaticHelper.ownerBingSiteVerification %}
<meta name=\"msvalidate.01\" content=\"{{ seomaticHelper.ownerBingSiteVerification |raw }}\" />
{% endif %}

<!-- Identity -->

{{ craft.seomatic.renderIdentity() |raw }}

<!-- WebSite -->

{{ craft.seomatic.renderWebsite() |raw }}

<!-- Place -->

{{ craft.seomatic.renderPlace() |raw }}

<!-- Main Entity of Page -->

{{ craft.seomatic.renderMainEntityOfPage() |raw }}

<!-- Breadcrumbs -->

{{ craft.seomatic.renderBreadcrumbs() |raw }}

<!-- Google Tag Manager -->

{% if not craft.request.isLivePreview %}{{ craft.seomatic.renderGoogleTagManager() |raw }}{% else %}<!-- Google Tag Manager script is NOT included in LivePreview -->{% endif %}

<!-- Google Analytics -->

{% if not craft.config.devMode and not craft.request.isLivePreview %}{{ craft.seomatic.renderGoogleAnalytics() |raw }}{% else %}<!-- Google Analytics script is NOT included in LivePreview or if devMode is on -->{% endif %}

<!-- END SEOmatic rendered SEO Meta -->
", "_seo_meta", "");
    }
}
