<?php

/* commerce/products/_edit */
class __TwigTemplate_66c0005759c3202e353fc4adb0bf4e2434ad16ad461bd055bd49ef6e213c8cf4 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("commerce/_layouts/cp", "commerce/products/_edit", 1);
        $this->blocks = array(
            'saveButton' => array($this, 'block_saveButton'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "commerce/_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["selectedSubnavItem"] = "products";
        // line 4
        $context["bodyClass"] = ((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? ((($context["bodyClass"] ?? $this->getContext($context, "bodyClass")) . " ")) : ("")) . "commerceproducts commerceproductsedit");
        // line 6
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Products"), "url" => \Craft\UrlHelper::getUrl("commerce/products")), 1 => array("label" => \Craft\Craft::t($this->getAttribute(        // line 8
($context["productType"] ?? $this->getContext($context, "productType")), "name", array())), "url" => \Craft\UrlHelper::getUrl(("commerce/products/" . $this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "handle", array())))));
        // line 11
        $context["fullPageForm"] = true;
        // line 12
        $context["saveShortcutRedirect"] = ($context["continueEditingUrl"] ?? $this->getContext($context, "continueEditingUrl"));
        // line 14
        echo \Craft\craft()->templates->invokeHook("cp.commerce.product.edit", $context);

        // line 16
        $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/products/_edit", 16);
        // line 17
        $context["productFields"] = $this->loadTemplate("commerce/products/_fields", "commerce/products/_edit", 17);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_saveButton($context, array $blocks = array())
    {
        // line 21
        echo "\t<div class=\"btngroup\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t<div class=\"btn submit menubtn\"></div>
\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t<li><a class=\"formsubmit\"
\t\t\t\t\t   data-redirect=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["continueEditingUrl"] ?? $this->getContext($context, "continueEditingUrl")), "html", null, true);
        echo "\">
\t\t\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 29
        echo $context["forms"]->getoptionShortcutLabel("S");
        echo "
\t\t\t\t\t</a></li>
\t\t\t\t";
        // line 31
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array())) {
            // line 32
            echo "\t\t\t\t\t<li><a class=\"formsubmit\" data-param=\"productId\"
\t\t\t\t\t\t   data-value=\"\"
\t\t\t\t\t\t   data-redirect=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["continueEditingUrl"] ?? $this->getContext($context, "continueEditingUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a new product"), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
    }

    // line 43
    public function block_main($context, array $blocks = array())
    {
        // line 44
        echo "\t<input type=\"hidden\" name=\"action\" value=\"commerce/products/saveProduct\">
\t<input type=\"hidden\" name=\"redirect\" value=\"commerce/products\">
\t<input type=\"hidden\" name=\"typeId\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "id", array()), "html", null, true);
        echo "\">
\t";
        // line 47
        if ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            echo "<input type=\"hidden\" name=\"locale\"
\t\t\t\t\t\t\t\t\t   value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "locale", array()), "html", null, true);
            echo "\">";
        }
        // line 49
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->getCsrfInputFunction(), "html", null, true);
        echo "
\t";
        // line 50
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array())) {
            echo "<input type=\"hidden\" name=\"productId\"
\t\t\t\t\t\t\t  value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 52
        echo "

\t<div class=\"grid first\" data-max-cols=\"3\">
\t\t<div class=\"item\" data-position=\"left\" data-colspan=\"2\">

\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t";
        // line 58
        $this->loadTemplate("_includes/tabs", "commerce/products/_edit", 58)->display($context);
        // line 59
        echo "
\t\t\t\t";
        // line 60
        echo $context["productFields"]->gettitleField(($context["product"] ?? $this->getContext($context, "product")));
        echo "

\t\t\t\t<div>
\t\t\t\t\t";
        // line 63
        $context["allProductTab"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "asa", array(0 => "productFieldLayout"), "method"), "getFieldLayout", array(), "method"), "getTabs", array(), "method");
        // line 64
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allProductTab"] ?? $this->getContext($context, "allProductTab")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 65
            echo "\t\t\t\t\t\t<div id=\"tab";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" ";
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                echo " class=\"hidden\" ";
            }
            echo ">
\t\t\t\t\t\t\t";
            // line 66
            $this->loadTemplate("_includes/fields", "commerce/products/_edit", 66)->display(array("fields" => $this->getAttribute(            // line 67
$context["tab"], "getFields", array(), "method"), "element" =>             // line 68
($context["product"] ?? $this->getContext($context, "product"))));
            // line 70
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 75
        if ($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "hasVariants", array())) {
            // line 76
            echo "\t\t\t\t<div id=\"variants-pane\" class=\"pane\">
\t\t\t\t\t";
            // line 77
            $this->loadTemplate("_includes/tabs", "commerce/products/_edit", 77)->display(array_merge($context, array("tabs" => array("variantsTab" => array("label" => \Craft\Craft::t("Variants"), "url" => "#variantsTab")))));
            // line 82
            echo "
\t\t\t\t\t";
            // line 83
            echo ($context["variantMatrixHtml"] ?? $this->getContext($context, "variantMatrixHtml"));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 86
        echo "\t\t</div>

\t\t<div id=\"meta-pane\" class=\"item\" data-position=\"right\">

\t\t\t";
        // line 90
        if (($context["showPreviewBtn"] ?? $this->getContext($context, "showPreviewBtn"))) {
            // line 91
            echo "\t\t\t\t";
            $this->loadTemplate("_includes/previewbtns", "commerce/products/_edit", 91)->display($context);
            // line 92
            echo "\t\t\t";
        }
        // line 93
        echo "
\t\t\t";
        // line 94
        if ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            // line 95
            echo "\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["localeIds"] ?? $this->getContext($context, "localeIds")));
            foreach ($context['_seq'] as $context["_key"] => $context["localeId"]) {
                // line 97
                echo "\t\t\t\t\t\t";
                $context["localeName"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getLocaleById", array(0 => $context["localeId"]), "method"), "name", array());
                // line 98
                echo "\t\t\t\t\t\t<li";
                if (($context["localeId"] == $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "locale", array()))) {
                    echo " class=\"sel\"";
                }
                echo ">";
                // line 99
                if (($context["localeId"] == $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "locale", array()))) {
                    // line 100
                    echo twig_escape_filter($this->env, ($context["localeName"] ?? $this->getContext($context, "localeName")), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 101
                    echo $context["forms"]->getlightswitch(array("name" => "localeEnabled", "on" => $this->getAttribute(                    // line 103
($context["product"] ?? $this->getContext($context, "product")), "localeEnabled", array()), "small" => true));
                } else {
                    // line 107
                    $context["localeUrl"] = \Craft\UrlHelper::getUrl(((((("commerce/products/" . $this->getAttribute(                    // line 108
($context["productType"] ?? $this->getContext($context, "productType")), "handle", array())) . "/") . $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getSegment", array(0 => 4), "method")) . "/") . $context["localeId"]));
                    // line 110
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["localeUrl"] ?? $this->getContext($context, "localeUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($context["localeName"] ?? $this->getContext($context, "localeName")), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t<div class=\"status ";
                    // line 111
                    echo ((twig_in_filter($context["localeId"], ($context["enabledLocales"] ?? $this->getContext($context, "enabledLocales")))) ? ("enabled") : ("disabled"));
                    echo "\"></div>";
                }
                // line 113
                echo "</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t\t\t</ul>
\t\t\t";
        }
        // line 117
        echo "
\t\t\t<div class=\"pane meta\">
\t\t\t\t";
        // line 119
        echo $context["productFields"]->getgeneralMetaFields(($context["product"] ?? $this->getContext($context, "product")));
        echo "

\t\t\t\t";
        // line 121
        ob_start();
        // line 122
        echo "\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t";
        // line 123
        echo $context["forms"]->getlightswitch(array("id" => "enabled", "name" => "enabled", "on" => $this->getAttribute(        // line 126
($context["product"] ?? $this->getContext($context, "product")), "enabled", array()), "disabled" => false));
        // line 128
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 131
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array())) {
            // line 132
            echo "\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t<input type=\"button\"
\t\t\t\t\t\t\t\t   class=\"btn small formsubmit\"
\t\t\t\t\t\t\t\t   value=\"";
            // line 135
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t   data-action=\"commerce/products/deleteProduct\"
\t\t\t\t\t\t\t\t   data-confirm=\"";
            // line 137
            echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this product?"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t   data-redirect=\"commerce/products\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 141
        echo "\t\t\t\t";
        $context["statusInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 142
        echo "
\t\t\t\t";
        // line 143
        echo $context["forms"]->getfield(array("id" => "enabled", "label" => \Craft\Craft::t("Enabled?")),         // line 146
($context["statusInput"] ?? $this->getContext($context, "statusInput")));
        echo "
\t\t\t</div>

\t\t\t<div class=\"pane meta\">
\t\t\t\t";
        // line 150
        echo $context["productFields"]->getbehavioralMetaFields(($context["product"] ?? $this->getContext($context, "product")));
        echo "
\t\t\t</div>

\t\t\t";
        // line 153
        if ( !$this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "hasVariants", array())) {
            // line 154
            echo "\t\t\t\t";
            $_namespace = (("variants[" . (($this->getAttribute(($context["primaryVariant"] ?? $this->getContext($context, "primaryVariant")), "id", array())) ? ($this->getAttribute(($context["primaryVariant"] ?? $this->getContext($context, "primaryVariant")), "id", array())) : ("new1"))) . "]");
            if ($_namespace) {
                $_originalNamespace = \Craft\craft()->templates->getNamespace();
                \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 155
                    echo "\t\t\t\t<div class=\"pane meta\">
\t\t\t\t\t";
                    // line 156
                    echo $context["productFields"]->getgeneralVariantFields(($context["primaryVariant"] ?? $this->getContext($context, "primaryVariant")));
                    echo "
\t\t\t\t</div>
\t\t\t\t";
                    // line 158
                    if ($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "hasDimensions", array())) {
                        // line 159
                        echo "\t\t\t\t\t<div class=\"pane meta\">
\t\t\t\t\t\t";
                        // line 160
                        echo $context["productFields"]->getdimensionVariantFields(($context["primaryVariant"] ?? $this->getContext($context, "primaryVariant")));
                        echo "
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 163
                    echo "\t\t\t\t";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                \Craft\craft()->templates->setNamespace($_originalNamespace);
            } else {
                // line 155
                echo "\t\t\t\t<div class=\"pane meta\">
\t\t\t\t\t";
                // line 156
                echo $context["productFields"]->getgeneralVariantFields(($context["primaryVariant"] ?? $this->getContext($context, "primaryVariant")));
                echo "
\t\t\t\t</div>
\t\t\t\t";
                // line 158
                if ($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "hasDimensions", array())) {
                    // line 159
                    echo "\t\t\t\t\t<div class=\"pane meta\">
\t\t\t\t\t\t";
                    // line 160
                    echo $context["productFields"]->getdimensionVariantFields(($context["primaryVariant"] ?? $this->getContext($context, "primaryVariant")));
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t";
            }
            unset($_originalNamespace, $_namespace);
            // line 164
            echo "\t\t\t";
        }
        // line 165
        echo "
\t\t\t";
        // line 166
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array())) {
            // line 167
            echo "\t\t\t\t<div class=\"pane lightpane meta\">
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<h5 class=\"heading\">";
            // line 169
            echo twig_escape_filter($this->env, \Craft\Craft::t("Date Created"), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<div class=\"value\">";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "dateCreated", array()), "localeDate", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "dateCreated", array()), "localeTime", array(), "method"), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<h5 class=\"heading\">";
            // line 173
            echo twig_escape_filter($this->env, \Craft\Craft::t("Date Updated"), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<div class=\"value\">";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "dateUpdated", array()), "localeDate", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "dateUpdated", array()), "localeTime", array(), "method"), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 176
            if (twig_length_filter($this->env, $this->getAttribute(($context["promotions"] ?? $this->getContext($context, "promotions")), "sales", array()))) {
                // line 177
                echo "\t\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t\t<h5 class=\"heading\">";
                // line 178
                echo twig_escape_filter($this->env, \Craft\Craft::t("Associated Sales"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t<ul class=\"commerce-sales\">
\t\t\t\t\t\t\t\t\t";
                // line 181
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["promotions"] ?? $this->getContext($context, "promotions")), "sales", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                    // line 182
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["promotion"], "getCpEditUrl", array(), "method"), "html", null, true);
                    echo "\"><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["promotion"], "name", array()), "html", null, true);
                    echo "</span></a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 188
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 190
        echo "
\t\t\t";
        // line 191
        echo \Craft\craft()->templates->invokeHook("cp.commerce.product.edit.right-pane", $context);

        // line 192
        echo "
\t\t</div>
\t</div>

\t";
        // line 196
        if ( !$this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "slug", array())) {
            // line 197
            echo "\t\t";
            ob_start();
            // line 198
            echo "\t\twindow.slugGenerator = new Craft.SlugGenerator('#title', '#slug');
\t\t";
            $_js = ob_get_clean();
            \Craft\craft()->templates->includejs($_js);
            // line 200
            echo "\t";
        }
        // line 201
        echo "
";
    }

    public function getTemplateName()
    {
        return "commerce/products/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 201,  502 => 200,  497 => 198,  494 => 197,  492 => 196,  486 => 192,  483 => 191,  480 => 190,  476 => 188,  470 => 184,  459 => 182,  455 => 181,  449 => 178,  446 => 177,  444 => 176,  437 => 174,  433 => 173,  425 => 170,  421 => 169,  417 => 167,  415 => 166,  412 => 165,  409 => 164,  405 => 163,  399 => 160,  396 => 159,  394 => 158,  389 => 156,  386 => 155,  376 => 163,  370 => 160,  367 => 159,  365 => 158,  360 => 156,  357 => 155,  349 => 154,  347 => 153,  341 => 150,  334 => 146,  333 => 143,  330 => 142,  327 => 141,  320 => 137,  315 => 135,  310 => 132,  308 => 131,  303 => 128,  301 => 126,  300 => 123,  297 => 122,  295 => 121,  290 => 119,  286 => 117,  282 => 115,  275 => 113,  271 => 111,  264 => 110,  262 => 108,  261 => 107,  258 => 103,  257 => 101,  253 => 100,  251 => 99,  245 => 98,  242 => 97,  238 => 96,  235 => 95,  233 => 94,  230 => 93,  227 => 92,  224 => 91,  222 => 90,  216 => 86,  210 => 83,  207 => 82,  205 => 77,  202 => 76,  200 => 75,  195 => 72,  180 => 70,  178 => 68,  177 => 67,  176 => 66,  167 => 65,  149 => 64,  147 => 63,  141 => 60,  138 => 59,  136 => 58,  128 => 52,  124 => 51,  120 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 44,  96 => 43,  89 => 37,  81 => 34,  77 => 32,  75 => 31,  70 => 29,  66 => 28,  62 => 27,  54 => 22,  51 => 21,  48 => 20,  44 => 1,  42 => 17,  40 => 16,  37 => 14,  35 => 12,  33 => 11,  31 => 8,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"commerce/_layouts/cp\" %}

{% set selectedSubnavItem = \"products\" %}
{% set bodyClass = (bodyClass is defined ? bodyClass~' ' : '') ~ \"commerceproducts commerceproductsedit\" %}

{% set crumbs = [
{ label: \"Products\"|t, url: url('commerce/products') },
{ label: productType.name|t, url: url('commerce/products/'~productType.handle) }
] %}

{% set fullPageForm = true %}
{% set saveShortcutRedirect = continueEditingUrl %}

{% hook \"cp.commerce.product.edit\" %}

{% import \"_includes/forms\" as forms %}
{% import \"commerce/products/_fields\" as productFields %}


{% block saveButton %}
\t<div class=\"btngroup\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"{{ 'Save'|t }}\">
\t\t<div class=\"btn submit menubtn\"></div>
\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t<li><a class=\"formsubmit\"
\t\t\t\t\t   data-redirect=\"{{ continueEditingUrl }}\">
\t\t\t\t\t\t{{ \"Save and continue editing\"|t }}
\t\t\t\t\t\t{{ forms.optionShortcutLabel('S') }}
\t\t\t\t\t</a></li>
\t\t\t\t{% if product.id %}
\t\t\t\t\t<li><a class=\"formsubmit\" data-param=\"productId\"
\t\t\t\t\t\t   data-value=\"\"
\t\t\t\t\t\t   data-redirect=\"{{ continueEditingUrl }}\">{{ \"Save as a new product\"|t }}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</div>
{% endblock %}


{% block main %}
\t<input type=\"hidden\" name=\"action\" value=\"commerce/products/saveProduct\">
\t<input type=\"hidden\" name=\"redirect\" value=\"commerce/products\">
\t<input type=\"hidden\" name=\"typeId\" value=\"{{ productType.id }}\">
\t{% if craft.isLocalized() %}<input type=\"hidden\" name=\"locale\"
\t\t\t\t\t\t\t\t\t   value=\"{{ product.locale }}\">{% endif %}
\t{{ getCsrfInput() }}
\t{% if product.id %}<input type=\"hidden\" name=\"productId\"
\t\t\t\t\t\t\t  value=\"{{ product.id }}\">{% endif %}


\t<div class=\"grid first\" data-max-cols=\"3\">
\t\t<div class=\"item\" data-position=\"left\" data-colspan=\"2\">

\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t{% include \"_includes/tabs\" %}

\t\t\t\t{{ productFields.titleField(product) }}

\t\t\t\t<div>
\t\t\t\t\t{% set allProductTab = productType.asa('productFieldLayout').getFieldLayout().getTabs() %}
\t\t\t\t\t{% for tab in allProductTab %}
\t\t\t\t\t\t<div id=\"tab{{ loop.index }}\" {% if not loop.first %} class=\"hidden\" {% endif %}>
\t\t\t\t\t\t\t{% include \"_includes/fields\" with {
\t\t\t\t\t\t\tfields: tab.getFields(),
\t\t\t\t\t\t\telement: product,
\t\t\t\t\t\t\t} only %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% if productType.hasVariants %}
\t\t\t\t<div id=\"variants-pane\" class=\"pane\">
\t\t\t\t\t{% include \"_includes/tabs\" with {
\t\t\t\t\ttabs: {
\t\t\t\t\tvariantsTab: { label: 'Variants'|t, url: '#variantsTab' }
\t\t\t\t\t}
\t\t\t\t\t} %}

\t\t\t\t\t{{ variantMatrixHtml|raw }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>

\t\t<div id=\"meta-pane\" class=\"item\" data-position=\"right\">

\t\t\t{% if showPreviewBtn %}
\t\t\t\t{% include \"_includes/previewbtns\" %}
\t\t\t{% endif %}

\t\t\t{% if craft.isLocalized() %}
\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t{% for localeId in localeIds %}
\t\t\t\t\t\t{% set localeName = craft.i18n.getLocaleById(localeId).name %}
\t\t\t\t\t\t<li{% if localeId == product.locale %} class=\"sel\"{% endif %}>
\t\t\t\t\t\t\t{%- if localeId == product.locale -%}
\t\t\t\t\t\t\t\t{{ localeName }}
\t\t\t\t\t\t\t\t{{ forms.lightswitch({
\t\t\t\t\t\t\t\t\tname: 'localeEnabled',
\t\t\t\t\t\t\t\t\ton:   product.localeEnabled,
\t\t\t\t\t\t\t\t\tsmall: true
\t\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t\t{%- else -%}
\t\t\t\t\t\t\t\t{% set localeUrl = url(
\t\t\t\t\t\t\t\t'commerce/products/'~productType.handle~'/'~craft.request.getSegment(4)~'/'~localeId
\t\t\t\t\t\t\t\t) -%}
\t\t\t\t\t\t\t\t<a href=\"{{ localeUrl }}\">{{ localeName }}</a>
\t\t\t\t\t\t\t\t<div class=\"status {{ localeId in enabledLocales ? 'enabled' : 'disabled' }}\"></div>
\t\t\t\t\t\t\t{%- endif -%}
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t{% endif %}

\t\t\t<div class=\"pane meta\">
\t\t\t\t{{ productFields.generalMetaFields(product) }}

\t\t\t\t{% set statusInput %}
\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t{{ forms.lightswitch({
\t\t\t\t\t\t\tid: 'enabled',
\t\t\t\t\t\t\tname: 'enabled',
\t\t\t\t\t\t\ton: product.enabled,
\t\t\t\t\t\t\tdisabled: false
\t\t\t\t\t\t}) }}
\t\t\t\t\t</div>

\t\t\t\t\t{% if product.id %}
\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t<input type=\"button\"
\t\t\t\t\t\t\t\t   class=\"btn small formsubmit\"
\t\t\t\t\t\t\t\t   value=\"{{ 'Delete'|t }}\"
\t\t\t\t\t\t\t\t   data-action=\"commerce/products/deleteProduct\"
\t\t\t\t\t\t\t\t   data-confirm=\"{{ 'Are you sure you want to delete this product?'|t }}\"
\t\t\t\t\t\t\t\t   data-redirect=\"commerce/products\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endset %}

\t\t\t\t{{ forms.field({
\t\t\t\t\tid: 'enabled',
\t\t\t\t\tlabel: 'Enabled?'|t
\t\t\t\t}, statusInput) }}
\t\t\t</div>

\t\t\t<div class=\"pane meta\">
\t\t\t\t{{ productFields.behavioralMetaFields(product) }}
\t\t\t</div>

\t\t\t{% if not productType.hasVariants %}
\t\t\t\t{% namespace 'variants['~(primaryVariant.id ?: 'new1')~']' %}
\t\t\t\t<div class=\"pane meta\">
\t\t\t\t\t{{ productFields.generalVariantFields(primaryVariant) }}
\t\t\t\t</div>
\t\t\t\t{% if productType.hasDimensions %}
\t\t\t\t\t<div class=\"pane meta\">
\t\t\t\t\t\t{{ productFields.dimensionVariantFields(primaryVariant) }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% endnamespace %}
\t\t\t{% endif %}

\t\t\t{% if product.id %}
\t\t\t\t<div class=\"pane lightpane meta\">
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<h5 class=\"heading\">{{ \"Date Created\"|t }}</h5>
\t\t\t\t\t\t<div class=\"value\">{{ product.dateCreated.localeDate() }} {{ product.dateCreated.localeTime() }}</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<h5 class=\"heading\">{{ \"Date Updated\"|t }}</h5>
\t\t\t\t\t\t<div class=\"value\">{{ product.dateUpdated.localeDate() }} {{ product.dateUpdated.localeTime() }}</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if promotions.sales|length %}
\t\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t\t<h5 class=\"heading\">{{ \"Associated Sales\"|t }}</h5>
\t\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t\t<ul class=\"commerce-sales\">
\t\t\t\t\t\t\t\t\t{% for promotion in promotions.sales %}
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ promotion.getCpEditUrl() }}\"><span>{{ promotion.name }}</span></a></li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% hook \"cp.commerce.product.edit.right-pane\" %}

\t\t</div>
\t</div>

\t{% if not product.slug %}
\t\t{% includejs %}
\t\twindow.slugGenerator = new Craft.SlugGenerator('#title', '#slug');
\t\t{% endincludejs %}
\t{% endif %}

{% endblock %}
", "commerce/products/_edit", "");
    }
}
