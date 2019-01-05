<?php

/* commerce/products/_fields */
class __TwigTemplate_e94aee2ca663a85524a13b90df2b3776b0224b3c4cbc7b5d69fb5d0eff279483 extends Craft\BaseTemplate
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
        // line 18
        echo "

";
        // line 49
        echo "

";
        // line 98
        echo "

";
        // line 199
        echo "

";
    }

    // line 1
    public function gettitleField($__product__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "product" => $__product__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/products/_fields", 2);
            // line 4
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Title"), "locale" => $this->getAttribute(            // line 6
($context["product"] ?? $this->getContext($context, "product")), "locale", array()), "id" => "title", "name" => "title", "value" => $this->getAttribute(            // line 9
($context["product"] ?? $this->getContext($context, "product")), "title", array()), "placeholder" => \Craft\Craft::t("Enter title"), "errors" => $this->getAttribute(            // line 11
($context["product"] ?? $this->getContext($context, "product")), "getErrors", array(0 => "title"), "method"), "first" => true, "autofocus" => true, "required" => true, "maxlength" => 255));
            // line 16
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

    // line 20
    public function getgeneralMetaFields($__product__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "product" => $__product__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/products/_fields", 21);
            // line 23
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Slug"), "locale" => $this->getAttribute(            // line 25
($context["product"] ?? $this->getContext($context, "product")), "locale", array()), "id" => "slug", "name" => "slug", "value" => $this->getAttribute(            // line 28
($context["product"] ?? $this->getContext($context, "product")), "slug", array()), "placeholder" => \Craft\Craft::t("Enter slug"), "errors" => twig_array_merge($this->getAttribute(            // line 30
($context["product"] ?? $this->getContext($context, "product")), "getErrors", array(0 => "slug"), "method"), $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getErrors", array(0 => "uri"), "method"))));
            // line 31
            echo "

\t";
            // line 33
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Post Date"), "id" => "postDate", "name" => "postDate", "value" => $this->getAttribute(            // line 37
($context["product"] ?? $this->getContext($context, "product")), "postDate", array()), "errors" => $this->getAttribute(            // line 38
($context["product"] ?? $this->getContext($context, "product")), "getErrors", array(0 => "postDate"), "method")));
            // line 39
            echo "

\t";
            // line 41
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Expiry Date"), "id" => "expiryDate", "name" => "expiryDate", "value" => $this->getAttribute(            // line 45
($context["product"] ?? $this->getContext($context, "product")), "expiryDate", array()), "errors" => $this->getAttribute(            // line 46
($context["product"] ?? $this->getContext($context, "product")), "getErrors", array(0 => "expiryDate"), "method")));
            // line 47
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

    // line 51
    public function getbehavioralMetaFields($__product__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "product" => $__product__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 52
            $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/products/_fields", 52);
            // line 54
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "type", array()), "taxCategories", array())) > 1)) {
                // line 55
                echo "\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Tax Category"), "name" => "taxCategoryId", "value" => $this->getAttribute(                // line 58
($context["product"] ?? $this->getContext($context, "product")), "taxCategoryId", array()), "required" => true, "options" => $this->getAttribute($this->getAttribute(                // line 60
($context["product"] ?? $this->getContext($context, "product")), "type", array()), "getTaxCategories", array(0 => true), "method")));
                // line 61
                echo "
\t";
            } else {
                // line 63
                echo "\t\t";
                echo $context["forms"]->gethidden(array("name" => "taxCategoryId", "value" => $this->getAttribute(                // line 65
($context["product"] ?? $this->getContext($context, "product")), "taxCategoryId", array())));
                // line 66
                echo "
\t";
            }
            // line 68
            echo "
\t";
            // line 69
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "type", array()), "shippingCategories", array())) > 1)) {
                // line 70
                echo "\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Shipping Category"), "name" => "shippingCategoryId", "value" => $this->getAttribute(                // line 73
($context["product"] ?? $this->getContext($context, "product")), "shippingCategoryId", array()), "required" => true, "options" => $this->getAttribute($this->getAttribute(                // line 75
($context["product"] ?? $this->getContext($context, "product")), "type", array()), "getShippingCategories", array(0 => true), "method")));
                // line 76
                echo "
\t";
            } else {
                // line 78
                echo "\t\t";
                echo $context["forms"]->gethidden(array("name" => "shippingCategoryId", "value" => $this->getAttribute(                // line 80
($context["product"] ?? $this->getContext($context, "product")), "shippingCategoryId", array())));
                // line 81
                echo "
\t";
            }
            // line 83
            echo "
\t";
            // line 84
            echo $context["forms"]->getcheckboxField(array("id" => "free-shipping", "fieldLabel" => \Craft\Craft::t("Free Shipping"), "name" => "freeShipping", "checked" => $this->getAttribute(            // line 88
($context["product"] ?? $this->getContext($context, "product")), "freeShipping", array())));
            // line 89
            echo "

\t";
            // line 91
            echo $context["forms"]->getcheckboxField(array("id" => "promotable", "fieldLabel" => \Craft\Craft::t("Promotable"), "name" => "promotable", "checked" => $this->getAttribute(            // line 95
($context["product"] ?? $this->getContext($context, "product")), "promotable", array())));
            // line 96
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

    // line 100
    public function getgeneralVariantFields($__variant__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variant" => $__variant__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 101
            $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/products/_fields", 101);
            // line 103
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "product", array()), "type", array()), "hasVariantTitleField", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "product", array()), "type", array()), "hasVariants", array()))) {
                // line 104
                echo "\t\t";
                echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Title"), "locale" => $this->getAttribute(                // line 106
($context["variant"] ?? $this->getContext($context, "variant")), "locale", array()), "id" => "title", "name" => "title", "value" => $this->getAttribute(                // line 109
($context["variant"] ?? $this->getContext($context, "variant")), "title", array()), "placeholder" => \Craft\Craft::t("Enter title"), "errors" => $this->getAttribute(                // line 111
($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "title"), "method"), "first" => true, "required" => true, "maxlength" => 255));
                // line 115
                echo "
\t";
            }
            // line 117
            echo "
\t";
            // line 118
            echo $context["forms"]->gettextField(array("id" => "sku", "label" => \Craft\Craft::t("SKU"), "required" => true, "name" => "sku", "value" => $this->getAttribute(            // line 123
($context["variant"] ?? $this->getContext($context, "variant")), "sku", array()), "placeholder" => \Craft\Craft::t("Enter SKU"), "errors" => $this->getAttribute(            // line 125
($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "sku"), "method")));
            // line 126
            echo "

\t";
            // line 128
            echo $context["forms"]->gettextField(array("id" => "price", "label" => \Craft\Craft::t("Price"), "name" => "price", "value" => ((($this->getAttribute(            // line 132
($context["variant"] ?? $this->getContext($context, "variant")), "price", array()) == "0")) ? (\Craft\craft()->numberFormatter->formatDecimal("0")) : ((($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "price", array())) ? (((\Craft\craft()->numberFormatter->formatDecimal($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "price", array()))) ? (\Craft\craft()->numberFormatter->formatDecimal($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "price", array()))) : (""))) : ("")))), "placeholder" => \Craft\Craft::t("Enter price"), "unit" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 134
($context["craft"] ?? $this->getContext($context, "craft")), "commerce", array()), "primaryPaymentCurrency", array()), "iso", array()), "required" => true, "errors" => $this->getAttribute(            // line 136
($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "price"), "method")));
            // line 137
            echo "

\t";
            // line 139
            ob_start();
            // line 140
            echo "\t\t<div class=\"flex\">
\t\t\t<div class=\"textwrapper\">
\t\t\t\t";
            // line 142
            echo $context["forms"]->gettext(array("id" => "stock", "name" => "stock", "value" => (($this->getAttribute(            // line 145
($context["variant"] ?? $this->getContext($context, "variant")), "unlimitedStock", array())) ? ("") : (((($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "stock", array()) == "0")) ? ("0") : ((($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "stock", array())) ? ($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "stock", array())) : ("")))))), "placeholder" => \Craft\Craft::t("Enter stock"), "disabled" => $this->getAttribute(            // line 147
($context["variant"] ?? $this->getContext($context, "variant")), "unlimitedStock", array())));
            // line 148
            echo "
\t\t\t</div>
\t\t\t<div class=\"nowrap\">
\t\t\t\t";
            // line 151
            echo $context["forms"]->getcheckbox(array("id" => "unlimited-stock", "class" => "unlimited-stock", "label" => \Craft\Craft::t("Unlimited"), "name" => "unlimitedStock", "checked" => $this->getAttribute(            // line 156
($context["variant"] ?? $this->getContext($context, "variant")), "unlimitedStock", array())));
            // line 157
            echo "
\t\t\t</div>
\t\t</div>
\t";
            $context["stockInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 161
            echo "
\t";
            // line 162
            echo $context["forms"]->getfield(array("id" => "stock", "label" => \Craft\Craft::t("Stock"), "required" => true, "errors" => twig_array_merge($this->getAttribute(            // line 166
($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "unlimitedStock"), "method"), $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "stock"), "method"))),             // line 167
($context["stockInput"] ?? $this->getContext($context, "stockInput")));
            echo "

\t";
            // line 169
            ob_start();
            // line 170
            echo "\t\t<div class=\"flex\">
\t\t\t<div class=\"textwrapper\">
\t\t\t\t";
            // line 172
            echo $context["forms"]->gettext(array("id" => "minQty", "name" => "minQty", "value" => $this->getAttribute(            // line 175
($context["variant"] ?? $this->getContext($context, "variant")), "minQty", array()), "placeholder" => \Craft\Craft::t("Any"), "title" => \Craft\Craft::t("Minimum allowed quantity")));
            // line 178
            echo "
\t\t\t</div>
\t\t\t<div class=\"label light\">";
            // line 180
            echo twig_escape_filter($this->env, \Craft\Craft::t("to"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"textwrapper\">
\t\t\t\t";
            // line 182
            echo $context["forms"]->gettext(array("id" => "maxQty", "name" => "maxQty", "value" => $this->getAttribute(            // line 185
($context["variant"] ?? $this->getContext($context, "variant")), "maxQty", array()), "placeholder" => \Craft\Craft::t("Any"), "title" => \Craft\Craft::t("Maximum allowed quantity")));
            // line 188
            echo "
\t\t\t</div>
\t\t</div>
\t";
            $context["quantityRangeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 192
            echo "
\t";
            // line 193
            echo $context["forms"]->getfield(array("id" => "minQty", "label" => \Craft\Craft::t("Allowed Qty"), "errors" => twig_array_merge($this->getAttribute(            // line 196
($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "minQty"), "method"), $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "maxQty"), "method"))),             // line 197
($context["quantityRangeInput"] ?? $this->getContext($context, "quantityRangeInput")));
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

    // line 201
    public function getdimensionVariantFields($__variant__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variant" => $__variant__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 202
            $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/products/_fields", 202);
            // line 204
            ob_start();
            // line 205
            echo "\t\t<div class=\"flex\">
\t\t\t<div class=\"textwrapper\">
\t\t\t\t";
            // line 207
            echo $context["forms"]->gettext(array("id" => "length", "name" => "length", "value" => (($this->getAttribute(            // line 210
($context["variant"] ?? $this->getContext($context, "variant")), "length", array())) ? (\Craft\craft()->numberFormatter->formatDecimal($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "length", array()))) : ("")), "placeholder" => twig_slice($this->env, twig_upper_filter($this->env, \Craft\Craft::t("Length")), 0, 1), "title" => \Craft\Craft::t("Length"), "unit" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 213
($context["craft"] ?? $this->getContext($context, "craft")), "commerce", array()), "settings", array()), "dimensionUnits", array()), "errors" => $this->getAttribute(            // line 214
($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "length"), "method")));
            // line 215
            echo "
\t\t\t</div>
\t\t\t<div class=\"label light\">/</div>
\t\t\t<div class=\"textwrapper\">
\t\t\t\t";
            // line 219
            echo $context["forms"]->gettext(array("id" => "width", "name" => "width", "value" => (($this->getAttribute(            // line 222
($context["variant"] ?? $this->getContext($context, "variant")), "width", array())) ? (\Craft\craft()->numberFormatter->formatDecimal($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "width", array()))) : ("")), "placeholder" => twig_slice($this->env, twig_upper_filter($this->env, \Craft\Craft::t("Width")), 0, 1), "title" => \Craft\Craft::t("Width"), "unit" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 225
($context["craft"] ?? $this->getContext($context, "craft")), "commerce", array()), "settings", array()), "dimensionUnits", array()), "errors" => $this->getAttribute(            // line 226
($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "width"), "method")));
            // line 227
            echo "
\t\t\t</div>
\t\t\t<div class=\"label light\">/</div>
\t\t\t<div class=\"textwrapper\">
\t\t\t\t";
            // line 231
            echo $context["forms"]->gettext(array("id" => "height", "name" => "height", "value" => (($this->getAttribute(            // line 234
($context["variant"] ?? $this->getContext($context, "variant")), "height", array())) ? (\Craft\craft()->numberFormatter->formatDecimal($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "height", array()))) : ("")), "placeholder" => twig_slice($this->env, twig_upper_filter($this->env, \Craft\Craft::t("Height")), 0, 1), "title" => \Craft\Craft::t("Height"), "unit" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 237
($context["craft"] ?? $this->getContext($context, "craft")), "commerce", array()), "settings", array()), "dimensionUnits", array()), "errors" => $this->getAttribute(            // line 238
($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "height"), "method")));
            // line 239
            echo "
\t\t\t</div>
\t\t\t<div class=\"label light\">";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "commerce", array()), "settings", array()), "dimensionUnits", array()), "html", null, true);
            echo "</div>
\t\t</div>
\t";
            $context["dimensionsInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 244
            echo "
\t";
            // line 245
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Dimensions"), "id" => "width"),             // line 248
($context["dimensionsInput"] ?? $this->getContext($context, "dimensionsInput")));
            echo "

\t";
            // line 250
            echo $context["forms"]->gettextField(array("id" => "weight", "label" => \Craft\Craft::t("Weight"), "name" => "weight", "value" => (($this->getAttribute(            // line 254
($context["variant"] ?? $this->getContext($context, "variant")), "weight", array())) ? (\Craft\craft()->numberFormatter->formatDecimal($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "weight", array()))) : ("")), "placeholder" => \Craft\Craft::t("Enter weight"), "unit" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 256
($context["craft"] ?? $this->getContext($context, "craft")), "commerce", array()), "settings", array()), "weightUnits", array()), "errors" => $this->getAttribute(            // line 257
($context["variant"] ?? $this->getContext($context, "variant")), "getErrors", array(0 => "weight"), "method")));
            // line 258
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
        return "commerce/products/_fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 258,  405 => 257,  404 => 256,  403 => 254,  402 => 250,  397 => 248,  396 => 245,  393 => 244,  387 => 241,  383 => 239,  381 => 238,  380 => 237,  379 => 234,  378 => 231,  372 => 227,  370 => 226,  369 => 225,  368 => 222,  367 => 219,  361 => 215,  359 => 214,  358 => 213,  357 => 210,  356 => 207,  352 => 205,  350 => 204,  348 => 202,  336 => 201,  319 => 197,  318 => 196,  317 => 193,  314 => 192,  308 => 188,  306 => 185,  305 => 182,  300 => 180,  296 => 178,  294 => 175,  293 => 172,  289 => 170,  287 => 169,  282 => 167,  281 => 166,  280 => 162,  277 => 161,  271 => 157,  269 => 156,  268 => 151,  263 => 148,  261 => 147,  260 => 145,  259 => 142,  255 => 140,  253 => 139,  249 => 137,  247 => 136,  246 => 134,  245 => 132,  244 => 128,  240 => 126,  238 => 125,  237 => 123,  236 => 118,  233 => 117,  229 => 115,  227 => 111,  226 => 109,  225 => 106,  223 => 104,  221 => 103,  219 => 101,  207 => 100,  191 => 96,  189 => 95,  188 => 91,  184 => 89,  182 => 88,  181 => 84,  178 => 83,  174 => 81,  172 => 80,  170 => 78,  166 => 76,  164 => 75,  163 => 73,  161 => 70,  159 => 69,  156 => 68,  152 => 66,  150 => 65,  148 => 63,  144 => 61,  142 => 60,  141 => 58,  139 => 55,  137 => 54,  135 => 52,  123 => 51,  107 => 47,  105 => 46,  104 => 45,  103 => 41,  99 => 39,  97 => 38,  96 => 37,  95 => 33,  91 => 31,  89 => 30,  88 => 28,  87 => 25,  86 => 23,  84 => 21,  72 => 20,  56 => 16,  54 => 11,  53 => 9,  52 => 6,  51 => 4,  49 => 2,  37 => 1,  31 => 199,  27 => 98,  23 => 49,  19 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro titleField(product) %}
\t{%- import \"_includes/forms\" as forms -%}

\t{{ forms.textField({
\t\tlabel: \"Title\"|t,
\t\tlocale: product.locale,
\t\tid: 'title',
\t\tname: 'title',
\t\tvalue: product.title,
\t\tplaceholder: 'Enter title'|t,
\t\terrors: product.getErrors('title'),
\t\tfirst: true,
\t\tautofocus: true,
\t\trequired: true,
\t\tmaxlength: 255
\t}) }}
{% endmacro %}


{% macro generalMetaFields(product) %}
\t{%- import \"_includes/forms\" as forms -%}

\t{{ forms.textField({
\t\tlabel: \"Slug\"|t,
\t\tlocale: product.locale,
\t\tid: 'slug',
\t\tname: 'slug',
\t\tvalue: product.slug,
\t\tplaceholder: 'Enter slug'|t,
\t\terrors: product.getErrors('slug')|merge(product.getErrors('uri'))
\t}) }}

\t{{ forms.dateTimeField({
\t\tlabel: 'Post Date'|t,
\t\tid: 'postDate',
\t\tname: 'postDate',
\t\tvalue: product.postDate,
\t\terrors: product.getErrors('postDate')
\t}) }}

\t{{ forms.dateTimeField({
\t\tlabel: 'Expiry Date'|t,
\t\tid: 'expiryDate',
\t\tname: 'expiryDate',
\t\tvalue: product.expiryDate,
\t\terrors: product.getErrors('expiryDate')
\t}) }}
{% endmacro %}


{% macro behavioralMetaFields(product) %}
\t{%- import \"_includes/forms\" as forms -%}

\t{% if product.type.taxCategories|length > 1 %}
\t{{ forms.selectField({
\t\tlabel: 'Tax Category'|t,
\t\tname: 'taxCategoryId',
\t\tvalue: product.taxCategoryId,
\t\trequired: true,
\t\toptions: product.type.getTaxCategories(true)
\t}) }}
\t{% else %}
\t\t{{ forms.hidden({
\t\t\tname: \"taxCategoryId\",
\t\t\tvalue: product.taxCategoryId
\t\t}) }}
\t{% endif %}

\t{% if product.type.shippingCategories|length > 1 %}
\t{{ forms.selectField({
\t\tlabel: 'Shipping Category'|t,
\t\tname: 'shippingCategoryId',
\t\tvalue: product.shippingCategoryId,
\t\trequired: true,
\t\toptions: product.type.getShippingCategories(true)
\t}) }}
\t{% else %}
\t\t{{ forms.hidden({
\t\t\tname: \"shippingCategoryId\",
\t\t\tvalue: product.shippingCategoryId
\t\t}) }}
\t{% endif %}

\t{{ forms.checkboxField({
\t\tid: 'free-shipping',
\t\tfieldLabel: 'Free Shipping'|t,
\t\tname: 'freeShipping',
\t\tchecked: product.freeShipping,
\t}) }}

\t{{ forms.checkboxField({
\t\tid: 'promotable',
\t\tfieldLabel: 'Promotable'|t,
\t\tname: 'promotable',
\t\tchecked: product.promotable,
\t}) }}
{% endmacro %}


{% macro generalVariantFields(variant) %}
\t{%- import \"_includes/forms\" as forms -%}

\t{%  if variant.product.type.hasVariantTitleField and variant.product.type.hasVariants %}
\t\t{{ forms.textField({
\t\t\tlabel: \"Title\"|t,
\t\t\tlocale: variant.locale,
\t\t\tid: 'title',
\t\t\tname: 'title',
\t\t\tvalue: variant.title,
\t\t\tplaceholder: 'Enter title'|t,
\t\t\terrors: variant.getErrors('title'),
\t\t\tfirst: true,
\t\t\trequired: true,
\t\t\tmaxlength: 255
\t\t}) }}
\t{% endif %}

\t{{ forms.textField({
\t\tid: 'sku',
\t\tlabel: 'SKU'|t,
\t\trequired: true,
\t\tname: 'sku',
\t\tvalue: variant.sku,
\t\tplaceholder: 'Enter SKU'|t,
\t\terrors: variant.getErrors('sku')
\t}) }}

\t{{ forms.textField({
\t\tid: 'price',
\t\tlabel: 'Price'|t,
\t\tname: 'price',
\t\tvalue: (variant.price == '0' ? '0'|number : (variant.price ? variant.price|number ?: '')),
\t\tplaceholder: 'Enter price'|t,
\t\tunit: craft.commerce.primaryPaymentCurrency.iso,
\t\trequired: true,
\t\terrors: variant.getErrors('price')
\t}) }}

\t{% set stockInput %}
\t\t<div class=\"flex\">
\t\t\t<div class=\"textwrapper\">
\t\t\t\t{{ forms.text({
\t\t\t\t\tid: 'stock',
\t\t\t\t\tname: 'stock',
\t\t\t\t\tvalue: (variant.unlimitedStock ? '' : (variant.stock == '0' ? '0': (variant.stock ? variant.stock : ''))),
\t\t\t\t\tplaceholder: 'Enter stock'|t,
\t\t\t\t\tdisabled: variant.unlimitedStock
\t\t\t\t}) }}
\t\t\t</div>
\t\t\t<div class=\"nowrap\">
\t\t\t\t{{ forms.checkbox({
\t\t\t\t\tid: 'unlimited-stock',
\t\t\t\t\tclass: 'unlimited-stock',
\t\t\t\t\tlabel: 'Unlimited'|t,
\t\t\t\t\tname: 'unlimitedStock',
\t\t\t\t\tchecked: variant.unlimitedStock,
\t\t\t\t}) }}
\t\t\t</div>
\t\t</div>
\t{% endset %}

\t{{ forms.field({
\t\tid: 'stock',
\t\tlabel: 'Stock'|t,
\t\trequired: true,
\t\terrors: variant.getErrors('unlimitedStock')|merge(variant.getErrors('stock')),
\t}, stockInput) }}

\t{% set quantityRangeInput %}
\t\t<div class=\"flex\">
\t\t\t<div class=\"textwrapper\">
\t\t\t\t{{ forms.text({
\t\t\t\t\tid: 'minQty',
\t\t\t\t\tname: 'minQty',
\t\t\t\t\tvalue: variant.minQty,
\t\t\t\t\tplaceholder: 'Any'|t,
\t\t\t\t\ttitle: 'Minimum allowed quantity'|t
\t\t\t\t}) }}
\t\t\t</div>
\t\t\t<div class=\"label light\">{{ 'to'|t }}</div>
\t\t\t<div class=\"textwrapper\">
\t\t\t\t{{ forms.text({
\t\t\t\t\tid: 'maxQty',
\t\t\t\t\tname: 'maxQty',
\t\t\t\t\tvalue: variant.maxQty,
\t\t\t\t\tplaceholder: 'Any'|t,
\t\t\t\t\ttitle: 'Maximum allowed quantity'|t
\t\t\t\t}) }}
\t\t\t</div>
\t\t</div>
\t{% endset %}

\t{{ forms.field({
\t\tid: 'minQty',
\t\tlabel: 'Allowed Qty'|t,
\t\terrors: variant.getErrors('minQty')|merge(variant.getErrors('maxQty'))
\t}, quantityRangeInput) }}
{% endmacro %}


{% macro dimensionVariantFields(variant) %}
\t{%- import \"_includes/forms\" as forms -%}

\t{% set dimensionsInput %}
\t\t<div class=\"flex\">
\t\t\t<div class=\"textwrapper\">
\t\t\t\t{{ forms.text({
\t\t\t\t\tid: 'length',
\t\t\t\t\tname: 'length',
\t\t\t\t\tvalue: (variant.length ? variant.length|number : ''),
\t\t\t\t\tplaceholder: 'Length'|t|upper[0:1],
\t\t\t\t\ttitle: 'Length'|t,
\t\t\t\t\tunit: craft.commerce.settings.dimensionUnits,
\t\t\t\t\terrors: variant.getErrors('length')
\t\t\t\t}) }}
\t\t\t</div>
\t\t\t<div class=\"label light\">/</div>
\t\t\t<div class=\"textwrapper\">
\t\t\t\t{{ forms.text({
\t\t\t\t\tid: 'width',
\t\t\t\t\tname: 'width',
\t\t\t\t\tvalue: (variant.width ? variant.width|number : ''),
\t\t\t\t\tplaceholder: 'Width'|t|upper[0:1],
\t\t\t\t\ttitle: 'Width'|t,
\t\t\t\t\tunit: craft.commerce.settings.dimensionUnits,
\t\t\t\t\terrors: variant.getErrors('width')
\t\t\t\t}) }}
\t\t\t</div>
\t\t\t<div class=\"label light\">/</div>
\t\t\t<div class=\"textwrapper\">
\t\t\t\t{{ forms.text({
\t\t\t\t\tid: 'height',
\t\t\t\t\tname: 'height',
\t\t\t\t\tvalue: (variant.height ? variant.height|number : ''),
\t\t\t\t\tplaceholder: 'Height'|t|upper[0:1],
\t\t\t\t\ttitle: 'Height'|t,
\t\t\t\t\tunit: craft.commerce.settings.dimensionUnits,
\t\t\t\t\terrors: variant.getErrors('height')
\t\t\t\t}) }}
\t\t\t</div>
\t\t\t<div class=\"label light\">{{ craft.commerce.settings.dimensionUnits }}</div>
\t\t</div>
\t{% endset %}

\t{{ forms.field({
\t\tlabel: 'Dimensions'|t,
\t\tid: 'width'
\t}, dimensionsInput) }}

\t{{ forms.textField({
\t\tid: 'weight',
\t\tlabel: 'Weight'|t,
\t\tname: 'weight',
\t\tvalue: (variant.weight ? variant.weight|number : ''),
\t\tplaceholder: 'Enter weight'|t,
\t\tunit: craft.commerce.settings.weightUnits,
\t\terrors: variant.getErrors('weight')
\t}) }}
{% endmacro %}
", "commerce/products/_fields", "");
    }
}
