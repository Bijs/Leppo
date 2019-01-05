<?php

/* commerce/settings/producttypes/_edit */
class __TwigTemplate_2b722a7f471511fc93a513c71e24036e1eecefe933ec736b827ac3b58000c312 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("commerce/_layouts/settingscp", "commerce/settings/producttypes/_edit", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "commerce/_layouts/settingscp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = (($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "id", array())) ? ($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "name", array())) : (\Craft\Craft::t("Create a new product type")));
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Commerce Settings"), "url" => \Craft\UrlHelper::getUrl("commerce/settings")), 1 => array("label" => \Craft\Craft::t("Product Types"), "url" => \Craft\UrlHelper::getUrl("commerce/settings/producttypes")));
        // line 9
        $context["tabs"] = array("productTypeSettings" => array("label" => \Craft\Craft::t("Settings"), "url" => "#product-type-settings"), "productFields" => array("label" => \Craft\Craft::t("Product Fields"), "url" => "#product-fields"), "variantFields" => array("label" => \Craft\Craft::t("Variant Fields"), "url" => "#variant-fields", "class" => (( !$this->getAttribute(        // line 12
($context["productType"] ?? $this->getContext($context, "productType")), "hasVariants", array())) ? ("hidden") : (""))));
        // line 15
        $context["fullPageForm"] = true;
        // line 18
        $context["selectedTab"] = "settings";
        // line 19
        $context["forms"] = $this->loadTemplate("_includes/forms", "commerce/settings/producttypes/_edit", 19);
        // line 267
        ob_start();
        // line 268
        echo "    ";
        if ( !$this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "handle", array())) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 269
        echo "
    ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 271
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute(($context["productType"] ?? null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true) ||  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "urlFormat", array()))) {
                // line 272
                echo "            new Craft.EntryUrlFormatGenerator('#name', '#urlFormat-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "', { suffix: '/{slug}' });
        ";
            }
            // line 274
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "
\t\$('#hasVariants').on('change', function () {
\t\tif (\$(this).prop('checked')) {
\t\t\t\$('#tab-variantFields').removeClass('hidden');
\t\t} else {
\t\t\t\$('#tab-variantFields').addClass('hidden');
\t\t}
\t});

\twindow.productTypeShippingCategories = JSON.parse('";
        // line 284
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter(twig_get_array_keys_filter($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "shippingCategories", array())));
        echo "');
\twindow.shippingCategories = \$.map(JSON.parse('";
        // line 285
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "commerce", array()), "shippingCategories", array()), twig_constant("JSON_HEX_APOS"));
        echo "'), function(value, index) { return [value] });

\t\$.each(window.shippingCategories, function (key, shippingCategory) {
\t\tif (shippingCategory.default == 1) {
\t\t\twindow.defaultShippingCategory = shippingCategory;
\t\t}
\t});

\t\$(function () {
\t\tvar \$shippingCategories = \$('#shippingCategories').selectize({
\t\t\toptions: window.shippingCategories,
\t\t\titems: window.productTypeShippingCategories,
\t\t\tvalueField: 'id',
\t\t\tlabelField: 'name',
\t\t\tplugins: ['remove_button'],
\t\t\tcreate: false,
\t\t\tdropdownParent: 'body',
\t\t\tonItemRemove: function () {
\t\t\t\tif (!\$shippingCategories[0].selectize.items.length) {
\t\t\t\t\t\$shippingCategories[0].selectize.addItem(window.defaultShippingCategory.id);
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\twindow.productTypeTaxCategories = JSON.parse('";
        // line 310
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter(twig_get_array_keys_filter($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "taxCategories", array())));
        echo "');
\twindow.taxCategories = \$.map(JSON.parse('";
        // line 311
        echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "commerce", array()), "taxCategories", array()), twig_constant("JSON_HEX_APOS"));
        echo "'), function(value, index) { return [value] });

\t\$.each(window.taxCategories, function (key, taxCategory) {
\t\tif (taxCategory.default == 1) {
\t\t\twindow.defaultTaxCategory = taxCategory;
\t\t}
\t});

\t\$(function () {
\t\tvar \$taxCategories = \$('#taxCategories').selectize({
\t\t\toptions: window.taxCategories,
\t\t\titems: window.productTypeTaxCategories,
\t\t\tvalueField: 'id',
\t\t\tlabelField: 'name',
\t\t\tplugins: ['remove_button'],
\t\t\tcreate: false,
\t\t\tdropdownParent: 'body',
\t\t\tonItemRemove: function () {
\t\t\t\tif (!\$taxCategories[0].selectize.items.length) {
\t\t\t\t\t\$taxCategories[0].selectize.addItem(window.defaultTaxCategory.id);
\t\t\t\t}
\t\t\t}
\t\t});
\t});

";
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "    <input type=\"hidden\" name=\"action\" value=\"commerce/productTypes/saveProductType\">
    <input type=\"hidden\" name=\"redirect\" value=\"commerce/settings/producttypes\">
    ";
        // line 24
        if ($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "id", array())) {
            echo "<input type=\"hidden\" name=\"productTypeId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 25
        echo "
    <div id=\"product-type-settings\">
    ";
        // line 27
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this product type will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute(        // line 33
($context["productType"] ?? $this->getContext($context, "productType")), "name", array()), "errors" => $this->getAttribute(        // line 34
($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 38
        echo "

    ";
        // line 40
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this product type in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute(        // line 46
($context["productType"] ?? $this->getContext($context, "productType")), "handle", array()), "errors" => $this->getAttribute(        // line 47
($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 49
        echo "

    ";
        // line 51
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Automatic SKU Format"), "instructions" => \Craft\Craft::t("What the unique auto-generated SKUs should look like, when a SKU field is submitted without a value. You can include tags that output properties, such as {ex1} or {ex2}", array("ex1" => "<code>{product.slug}</code>", "ex2" => "<code>{myVariantCustomField}</code>")), "id" => "skuFormat", "class" => "code ltr", "name" => "skuFormat", "value" => $this->getAttribute(        // line 57
($context["productType"] ?? $this->getContext($context, "productType")), "skuFormat", array()), "errors" => $this->getAttribute(        // line 58
($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => "skuFormat"), "method")));
        // line 59
        echo "


     ";
        // line 62
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Order Description Format"), "instructions" => \Craft\Craft::t("How this product will be described on a line item in an order. You can include tags that output properties, such as {ex1} or {ex2}", array("ex1" => "<code>{product.title}</code>", "ex2" => "<code>{myVariantCustomField}</code>")), "id" => "descriptionFormat", "class" => "code ltr", "name" => "descriptionFormat", "value" => $this->getAttribute(        // line 68
($context["productType"] ?? $this->getContext($context, "productType")), "descriptionFormat", array()), "errors" => $this->getAttribute(        // line 69
($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => "descriptionFormat"), "method")));
        // line 70
        echo "

    ";
        // line 72
        echo $context["forms"]->getmultiSelectField(array("label" => \Craft\Craft::t("Available Tax Categories"), "instructions" => \Craft\Craft::t("Choose the tax categories products of this type can belong to. Minimum of one required."), "id" => "taxCategories", "name" => "taxCategories", "required" => true, "errors" => $this->getAttribute(        // line 78
($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => "taxCategories"), "method"), "class" => "selectize fullwidth"));
        // line 80
        echo "

    ";
        // line 82
        echo $context["forms"]->getmultiSelectField(array("label" => \Craft\Craft::t("Available Shipping Categories"), "instructions" => \Craft\Craft::t("Choose the shipping categories products of this type can belong to. Minimum of one required."), "id" => "shippingCategories", "name" => "shippingCategories", "required" => true, "errors" => $this->getAttribute(        // line 88
($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => "shippingCategories"), "method"), "class" => "selectize fullwidth"));
        // line 90
        echo "

    ";
        // line 92
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Show the Dimensions and Weight fields for products of this type"), "id" => "hasDimensions", "name" => "hasDimensions", "checked" => $this->getAttribute(        // line 96
($context["productType"] ?? $this->getContext($context, "productType")), "hasDimensions", array())));
        // line 97
        echo "

    ";
        // line 119
        echo "
    ";
        // line 131
        echo "

    ";
        // line 146
        echo "
    ";
        // line 173
        echo "

    ";
        // line 175
        $context["__internal_01fb7b87e51f7f44ea4e03f6e5c8d77dc7b3f19a67c27821aae1c68274030829"] = $this;
        // line 176
        echo "
    <hr>
    ";
        // line 178
        echo $context["__internal_01fb7b87e51f7f44ea4e03f6e5c8d77dc7b3f19a67c27821aae1c68274030829"]->gethasVariantsField(($context["productType"] ?? $this->getContext($context, "productType")));
        echo "

    ";
        // line 180
        echo $context["__internal_01fb7b87e51f7f44ea4e03f6e5c8d77dc7b3f19a67c27821aae1c68274030829"]->gettitleFormatField(($context["productType"] ?? $this->getContext($context, "productType")));
        echo "
    <hr>

    ";
        // line 183
        echo $context["__internal_01fb7b87e51f7f44ea4e03f6e5c8d77dc7b3f19a67c27821aae1c68274030829"]->gethasUrlsField(($context["productType"] ?? $this->getContext($context, "productType")));
        echo "


    <div id=\"url-settings\" class=\"nested-fields";
        // line 186
        if ( !$this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "hasUrls", array())) {
            echo " hidden";
        }
        echo "\">

        ";
        // line 204
        echo "
        ";
        // line 205
        ob_start();
        // line 206
        echo "            ";
        if ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
            // line 207
            echo "                <table class=\"data fullwidth\">
                    <tbody>
                    ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 210
                echo "                        <tr>
                            ";
                // line 211
                if ($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "isLocalized", array(), "method")) {
                    // line 212
                    echo "                                <th class=\"thin nowrap\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                    echo "</th>
                            ";
                }
                // line 214
                echo "                            <td class=\"topalign\">
                                ";
                // line 215
                $context["value"] = (($this->getAttribute($this->getAttribute(($context["productType"] ?? null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "urlFormat", array())) : (null));
                // line 216
                echo "                                ";
                echo $this->getAttribute($this, "urlFormatText", array(0 => $context["locale"], 1 => ($context["productType"] ?? $this->getContext($context, "productType")), 2 => "urlFormat", 3 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
                echo "
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                    </tbody>
                </table>
            ";
        } else {
            // line 223
            echo "                ";
            $context["locale"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "i18n", array()), "getPrimarySiteLocale", array(), "method");
            // line 224
            echo "                ";
            $context["value"] = (($this->getAttribute($this->getAttribute(($context["productType"] ?? null), "locales", array(), "any", false, true), $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array()), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "locales", array()), $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array()), array(), "array"), "urlFormat", array())) : (null));
            // line 225
            echo "                ";
            echo $this->getAttribute($this, "urlFormatText", array(0 => ($context["locale"] ?? $this->getContext($context, "locale")), 1 => ($context["productType"] ?? $this->getContext($context, "productType")), 2 => "urlFormat", 3 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
            echo "
            ";
        }
        // line 227
        echo "        ";
        $context["urlFormatInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 228
        echo "
        ";
        // line 229
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Product URL Format"), "instructions" => \Craft\Craft::t("What the product URLs should look like. You can include tags that output product properties, such as {ex1} or {ex2}.", array("ex1" => "<code>{slug}</code>", "ex2" => "<code>{publishDate|date(\"Y\")}</code>"))),         // line 232
($context["urlFormatInput"] ?? $this->getContext($context, "urlFormatInput")));
        echo "

        ";
        // line 234
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Product Template"), "instructions" => \Craft\Craft::t("The template to use when a product’s URL is requested."), "id" => "template", "class" => "ltr", "name" => "template", "value" => $this->getAttribute(        // line 240
($context["productType"] ?? $this->getContext($context, "productType")), "template", array()), "errors" => $this->getAttribute(        // line 241
($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => "template"), "method")));
        // line 242
        echo "
    </div>

    </div>

    <div id=\"product-fields\" class=\"hidden\">

    ";
        // line 249
        $this->loadTemplate("_includes/fieldlayoutdesigner", "commerce/settings/producttypes/_edit", 249)->display(array("fieldLayout" => $this->getAttribute($this->getAttribute(        // line 250
($context["productType"] ?? $this->getContext($context, "productType")), "asa", array(0 => "productFieldLayout"), "method"), "getFieldLayout", array(), "method")));
        // line 252
        echo "
    </div>

    <div id=\"variant-fields\" class=\"hidden\">

    ";
        // line 257
        $_namespace = "variant-layout";
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 258
                echo "    ";
                $this->loadTemplate("_includes/fieldlayoutdesigner", "commerce/settings/producttypes/_edit", 258)->display(array("fieldLayout" => $this->getAttribute($this->getAttribute(                // line 259
($context["productType"] ?? $this->getContext($context, "productType")), "asa", array(0 => "variantFieldLayout"), "method"), "getFieldLayout", array(), "method"), "customizableTabs" => false));
                // line 262
                echo "    ";
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 258
            echo "    ";
            $this->loadTemplate("_includes/fieldlayoutdesigner", "commerce/settings/producttypes/_edit", 258)->display(array("fieldLayout" => $this->getAttribute($this->getAttribute(            // line 259
($context["productType"] ?? $this->getContext($context, "productType")), "asa", array(0 => "variantFieldLayout"), "method"), "getFieldLayout", array(), "method"), "customizableTabs" => false));
            // line 262
            echo "    ";
        }
        unset($_originalNamespace, $_namespace);
        // line 263
        echo "
    </div>
";
    }

    // line 99
    public function gethasVariantsField($__productType__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "productType" => $__productType__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "        ";
            $context["__internal_7ccd0d8732d48612a45f0cd01acd50c8f38e8fe9c2fbedadf4d08b64f7227cb8"] = $this->loadTemplate("_includes/forms", "commerce/settings/producttypes/_edit", 100);
            // line 101
            echo "
        ";
            // line 102
            ob_start();
            // line 103
            ob_start();
            // line 104
            echo "                ";
            if (($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "id", array()) && $this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "hasVariants", array()))) {
                // line 105
                echo "                    <span class=\"error\">";
                echo "Careful—your existing variant data will be deleted if you change this.";
                echo "</span>
                ";
            }
            // line 107
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            $context["hasVariantsInstructions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 109
            echo "
        ";
            // line 110
            echo $context["__internal_7ccd0d8732d48612a45f0cd01acd50c8f38e8fe9c2fbedadf4d08b64f7227cb8"]->getcheckboxField(array("label" => \Craft\Craft::t("Products of this type have multiple variants"), "instructions" =>             // line 112
($context["hasVariantsInstructions"] ?? $this->getContext($context, "hasVariantsInstructions")), "id" => "hasVariants", "name" => "hasVariants", "checked" => $this->getAttribute(            // line 115
($context["productType"] ?? $this->getContext($context, "productType")), "hasVariants", array()), "toggle" => "#variant-settings"));
            // line 117
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

    // line 120
    public function gethasUrlsField($__productType__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "productType" => $__productType__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 121
            echo "        ";
            $context["__internal_63e3500f161d39163fe93b60c7593c38638cc88838df40a28d725ebfd823af71"] = $this->loadTemplate("_includes/forms", "commerce/settings/producttypes/_edit", 121);
            // line 122
            echo "
        ";
            // line 123
            echo $context["__internal_63e3500f161d39163fe93b60c7593c38638cc88838df40a28d725ebfd823af71"]->getcheckboxField(array("label" => \Craft\Craft::t("Products of this type have their own URLs"), "id" => "hasUrls", "name" => "hasUrls", "checked" => $this->getAttribute(            // line 127
($context["productType"] ?? $this->getContext($context, "productType")), "hasUrls", array()), "toggle" => "url-settings"));
            // line 129
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

    // line 133
    public function gettemplateField($__productType__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "productType" => $__productType__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "        ";
            $context["__internal_ca319111388fe379a7611443baf15a8a7d1572bebccd03255ce7ef8e5d6ac608"] = $this->loadTemplate("_includes/forms", "commerce/settings/producttypes/_edit", 134);
            // line 135
            echo "
        ";
            // line 136
            echo $context["__internal_ca319111388fe379a7611443baf15a8a7d1572bebccd03255ce7ef8e5d6ac608"]->gettextField(array("label" => \Craft\Craft::t("Product Template"), "instructions" => \Craft\Craft::t("The template to use when a product’s URL is requested."), "id" => "template", "class" => "ltr", "name" => "template", "value" => $this->getAttribute(            // line 142
($context["productType"] ?? $this->getContext($context, "productType")), "template", array()), "errors" => $this->getAttribute(            // line 143
($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => "template"), "method")));
            // line 144
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

    // line 147
    public function gettitleFormatField($__productType__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "productType" => $__productType__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 148
            echo "        ";
            $context["__internal_676d6b9ebc20082f241e759622ca2e0c62b2b07dae30f3de424804f5bc309120"] = $this->loadTemplate("_includes/forms", "commerce/settings/producttypes/_edit", 148);
            // line 149
            echo "
        <div id=\"variant-settings\"";
            // line 150
            if ( !$this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "hasVariants", array())) {
                echo " class=\"hidden\"";
            }
            echo ">

            ";
            // line 152
            echo $context["__internal_676d6b9ebc20082f241e759622ca2e0c62b2b07dae30f3de424804f5bc309120"]->getcheckboxField(array("label" => \Craft\Craft::t("Show the Title field for variants"), "name" => "hasVariantTitleField", "reverseToggle" => "titleFormat-container", "checked" => $this->getAttribute(            // line 156
($context["productType"] ?? $this->getContext($context, "productType")), "hasVariantTitleField", array())));
            // line 157
            echo "

            <div id=\"titleFormat-container\"";
            // line 159
            if ($this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "hasVariantTitleField", array())) {
                echo " class=\"hidden\"";
            }
            echo ">
                ";
            // line 160
            echo $context["__internal_676d6b9ebc20082f241e759622ca2e0c62b2b07dae30f3de424804f5bc309120"]->gettextField(array("label" => \Craft\Craft::t("Variant Title Format"), "instructions" => \Craft\Craft::t("What the auto-generated variant titles should look like. You can include tags that output variant properties, such as {ex1} or {ex2}. All custom fields used must be set to required.", array("ex1" => "<code>{sku}</code>", "ex2" => "<code>{myVariantsCustomField}</code>")), "id" => "titleFormat", "class" => "code ltr", "name" => "titleFormat", "value" => $this->getAttribute(            // line 166
($context["productType"] ?? $this->getContext($context, "productType")), "titleFormat", array()), "errors" => $this->getAttribute(            // line 167
($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => "titleFormat"), "method")));
            // line 168
            echo "
            </div>

        </div>
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

    // line 188
    public function geturlFormatText($__locale__ = null, $__productType__ = null, $__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "locale" => $__locale__,
            "productType" => $__productType__,
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 189
            echo "            ";
            $context["__internal_3c2305d899befecad59c63cb4ab269c4f335b965463413f782f4c6d47ed6e9b5"] = $this->loadTemplate("_includes/forms", "commerce/settings/producttypes/_edit", 189);
            // line 190
            echo "            ";
            $context["errors"] = $this->getAttribute(($context["productType"] ?? $this->getContext($context, "productType")), "getErrors", array(0 => ((($context["name"] ?? $this->getContext($context, "name")) . "-") . $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array()))), "method");
            // line 191
            echo "
            <div class=\"input";
            // line 192
            if (($context["errors"] ?? $this->getContext($context, "errors"))) {
                echo " errors";
            }
            echo "\">
                ";
            // line 193
            echo $context["__internal_3c2305d899befecad59c63cb4ab269c4f335b965463413f782f4c6d47ed6e9b5"]->gettext(array("id" => ((            // line 194
($context["name"] ?? $this->getContext($context, "name")) . "-") . $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array())), "class" => "code ltr", "name" => (((            // line 196
($context["name"] ?? $this->getContext($context, "name")) . "[") . $this->getAttribute(($context["locale"] ?? $this->getContext($context, "locale")), "id", array())) . "]"), "value" => (((            // line 197
($context["value"] ?? $this->getContext($context, "value")) != "__home__")) ? (($context["value"] ?? $this->getContext($context, "value"))) : (null)), "errors" =>             // line 198
($context["errors"] ?? $this->getContext($context, "errors"))));
            // line 199
            echo "
            </div>

            ";
            // line 202
            echo $context["__internal_3c2305d899befecad59c63cb4ab269c4f335b965463413f782f4c6d47ed6e9b5"]->geterrorList(($context["errors"] ?? $this->getContext($context, "errors")));
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
        return "commerce/settings/producttypes/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 202,  623 => 199,  621 => 198,  620 => 197,  619 => 196,  618 => 194,  617 => 193,  611 => 192,  608 => 191,  605 => 190,  602 => 189,  587 => 188,  568 => 168,  566 => 167,  565 => 166,  564 => 160,  558 => 159,  554 => 157,  552 => 156,  551 => 152,  544 => 150,  541 => 149,  538 => 148,  526 => 147,  510 => 144,  508 => 143,  507 => 142,  506 => 136,  503 => 135,  500 => 134,  488 => 133,  472 => 129,  470 => 127,  469 => 123,  466 => 122,  463 => 121,  451 => 120,  435 => 117,  433 => 115,  432 => 112,  431 => 110,  428 => 109,  424 => 107,  418 => 105,  415 => 104,  413 => 103,  411 => 102,  408 => 101,  405 => 100,  393 => 99,  387 => 263,  383 => 262,  381 => 259,  379 => 258,  369 => 262,  367 => 259,  365 => 258,  358 => 257,  351 => 252,  349 => 250,  348 => 249,  339 => 242,  337 => 241,  336 => 240,  335 => 234,  330 => 232,  329 => 229,  326 => 228,  323 => 227,  317 => 225,  314 => 224,  311 => 223,  306 => 220,  295 => 216,  293 => 215,  290 => 214,  284 => 212,  282 => 211,  279 => 210,  275 => 209,  271 => 207,  268 => 206,  266 => 205,  263 => 204,  256 => 186,  250 => 183,  244 => 180,  239 => 178,  235 => 176,  233 => 175,  229 => 173,  226 => 146,  222 => 131,  219 => 119,  215 => 97,  213 => 96,  212 => 92,  208 => 90,  206 => 88,  205 => 82,  201 => 80,  199 => 78,  198 => 72,  194 => 70,  192 => 69,  191 => 68,  190 => 62,  185 => 59,  183 => 58,  182 => 57,  181 => 51,  177 => 49,  175 => 47,  174 => 46,  173 => 40,  169 => 38,  167 => 34,  166 => 33,  165 => 27,  161 => 25,  155 => 24,  151 => 22,  148 => 21,  144 => 1,  114 => 311,  110 => 310,  82 => 285,  78 => 284,  67 => 275,  61 => 274,  55 => 272,  52 => 271,  48 => 270,  45 => 269,  40 => 268,  38 => 267,  36 => 19,  34 => 18,  32 => 15,  30 => 12,  29 => 9,  27 => 4,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"commerce/_layouts/settingscp\" %}
{% set title = productType.id ? productType.name : 'Create a new product type'|t %}

{% set crumbs = [
{ label: \"Commerce Settings\"|t, url: url('commerce/settings') },
{ label: \"Product Types\"|t, url: url('commerce/settings/producttypes') },
] %}

{% set tabs = {
    productTypeSettings: { label: \"Settings\"|t, url: '#product-type-settings' },
    productFields:       { label: \"Product Fields\"|t, url: '#product-fields' },
    variantFields:       { label: \"Variant Fields\"|t, url: '#variant-fields', class: (not productType.hasVariants ? 'hidden') }
} %}

{% set fullPageForm = true %}


{% set selectedTab = 'settings' %}
{% import \"_includes/forms\" as forms %}

{% block content %}
    <input type=\"hidden\" name=\"action\" value=\"commerce/productTypes/saveProductType\">
    <input type=\"hidden\" name=\"redirect\" value=\"commerce/settings/producttypes\">
    {% if productType.id %}<input type=\"hidden\" name=\"productTypeId\" value=\"{{ productType.id }}\">{% endif %}

    <div id=\"product-type-settings\">
    {{ forms.textField({
        first: true,
        label: \"Name\"|t,
        instructions: \"What this product type will be called in the CP.\"|t,
        id: 'name',
        name: 'name',
        value: productType.name,
        errors: productType.getErrors('name'),
        autofocus: true,
        required: true,
        translatable: true
    }) }}

    {{ forms.textField({
        label: \"Handle\"|t,
        instructions: \"How you’ll refer to this product type in the templates.\"|t,
        id: 'handle',
        class: 'code',
        name: 'handle',
        value: productType.handle,
        errors: productType.getErrors('handle'),
        required: true
    }) }}

    {{ forms.textField({
        label: \"Automatic SKU Format\"|t,
        instructions: \"What the unique auto-generated SKUs should look like, when a SKU field is submitted without a value. You can include tags that output properties, such as {ex1} or {ex2}\"|t({ ex1: '<code>{product.slug}</code>', ex2: '<code>{myVariantCustomField}</code>' }),
        id: 'skuFormat',
        class: 'code ltr',
        name: 'skuFormat',
        value: productType.skuFormat,
        errors: productType.getErrors('skuFormat')
    }) }}


     {{ forms.textField({
        label: \"Order Description Format\"|t,
        instructions: \"How this product will be described on a line item in an order. You can include tags that output properties, such as {ex1} or {ex2}\"|t({ ex1: '<code>{product.title}</code>', ex2: '<code>{myVariantCustomField}</code>' }),
        id: 'descriptionFormat',
        class: 'code ltr',
        name: 'descriptionFormat',
        value: productType.descriptionFormat,
        errors: productType.getErrors('descriptionFormat')
    }) }}

    {{ forms.multiSelectField({
        label: 'Available Tax Categories'|t,
        instructions: 'Choose the tax categories products of this type can belong to. Minimum of one required.'|t,
        id: 'taxCategories',
        name: 'taxCategories',
\t\trequired: true,
        errors: productType.getErrors('taxCategories'),
        class: 'selectize fullwidth',
    }) }}

    {{ forms.multiSelectField({
        label: 'Available Shipping Categories'|t,
        instructions: 'Choose the shipping categories products of this type can belong to. Minimum of one required.'|t,
        id: 'shippingCategories',
        name: 'shippingCategories',
\t\trequired: true,
        errors: productType.getErrors('shippingCategories'),
        class: 'selectize fullwidth',
    }) }}

    {{ forms.checkboxField({
        label: \"Show the Dimensions and Weight fields for products of this type\"|t,
        id: 'hasDimensions',
        name: 'hasDimensions',
        checked: productType.hasDimensions,
    }) }}

    {% macro hasVariantsField(productType) %}
        {% from \"_includes/forms\" import checkboxField %}

        {% set hasVariantsInstructions %}
            {%- spaceless %}
                {% if productType.id and productType.hasVariants %}
                    <span class=\"error\">{{ \"Careful—your existing variant data will be deleted if you change this.\" }}</span>
                {% endif %}
            {% endspaceless -%}
        {% endset %}

        {{ checkboxField({
            label: \"Products of this type have multiple variants\"|t,
            instructions: hasVariantsInstructions,
            id: 'hasVariants',
            name: 'hasVariants',
            checked: productType.hasVariants,
            toggle: '#variant-settings'
        }) }}
    {% endmacro %}

    {% macro hasUrlsField(productType) %}
        {% from \"_includes/forms\" import checkboxField %}

        {{ checkboxField({
            label: \"Products of this type have their own URLs\"|t,
            id: 'hasUrls',
            name: 'hasUrls',
            checked: productType.hasUrls,
            toggle: 'url-settings'
        }) }}
    {% endmacro %}


    {% macro templateField(productType) %}
        {% from \"_includes/forms\" import textField %}

        {{ textField({
            label: \"Product Template\"|t,
            instructions: \"The template to use when a product’s URL is requested.\"|t,
            id: 'template',
            class: 'ltr',
            name: 'template',
            value: productType.template,
            errors: productType.getErrors('template')
        }) }}
    {% endmacro %}

    {% macro titleFormatField(productType) %}
        {% from \"_includes/forms\" import textField, checkboxField %}

        <div id=\"variant-settings\"{% if not productType.hasVariants %} class=\"hidden\"{% endif %}>

            {{ checkboxField({
                label: \"Show the Title field for variants\"|t,
                name: 'hasVariantTitleField',
                reverseToggle: 'titleFormat-container',
                checked: productType.hasVariantTitleField
            }) }}

            <div id=\"titleFormat-container\"{% if productType.hasVariantTitleField %} class=\"hidden\"{% endif %}>
                {{ textField({
                    label: \"Variant Title Format\"|t,
                    instructions: \"What the auto-generated variant titles should look like. You can include tags that output variant properties, such as {ex1} or {ex2}. All custom fields used must be set to required.\"|t({ ex1: '<code>{sku}</code>', ex2: '<code>{myVariantsCustomField}</code>' }),
                    id: 'titleFormat',
                    class: 'code ltr',
                    name: 'titleFormat',
                    value: productType.titleFormat,
                    errors: productType.getErrors('titleFormat')
                }) }}
            </div>

        </div>
    {% endmacro %}


    {% from _self import hasUrlsField, templateField, hasVariantsField, titleFormatField  %}

    <hr>
    {{ hasVariantsField(productType) }}

    {{ titleFormatField(productType) }}
    <hr>

    {{ hasUrlsField(productType) }}


    <div id=\"url-settings\" class=\"nested-fields{% if not productType.hasUrls %} hidden{% endif %}\">

        {% macro urlFormatText(locale, productType, name, value) %}
            {% from \"_includes/forms\" import text, errorList %}
            {% set errors = productType.getErrors(name~'-'~locale.id) %}

            <div class=\"input{% if errors %} errors{% endif %}\">
                {{ text({
                    id: name~'-'~locale.id,
                    class: 'code ltr',
                    name: name~'['~locale.id~']',
                    value: (value != '__home__' ? value : null),
                    errors: errors
                }) }}
            </div>

            {{ errorList(errors) }}
        {% endmacro %}

        {% set urlFormatInput %}
            {% if craft.isLocalized() %}
                <table class=\"data fullwidth\">
                    <tbody>
                    {% for locale in craft.i18n.getSiteLocales() %}
                        <tr>
                            {% if craft.isLocalized() %}
                                <th class=\"thin nowrap\">{{ locale.id }}</th>
                            {% endif %}
                            <td class=\"topalign\">
                                {% set value = (productType.locales[locale.id] is defined ? productType.locales[locale.id].urlFormat : null) %}
                                {{ _self.urlFormatText(locale, productType, 'urlFormat', value) }}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% else %}
                {% set locale = craft.i18n.getPrimarySiteLocale() %}
                {% set value = (productType.locales[locale.id] is defined ? productType.locales[locale.id].urlFormat : null) %}
                {{ _self.urlFormatText(locale, productType, 'urlFormat', value) }}
            {% endif %}
        {% endset %}

        {{ forms.field({
            label: \"Product URL Format\"|t,
            instructions: \"What the product URLs should look like. You can include tags that output product properties, such as {ex1} or {ex2}.\"|t({ ex1: '<code>{slug}</code>', ex2: '<code>{publishDate|date(\\\"Y\\\")}</code>' }),
        }, urlFormatInput) }}

        {{ forms.textField({
            label: \"Product Template\"|t,
            instructions: \"The template to use when a product’s URL is requested.\"|t,
            id: 'template',
            class: 'ltr',
            name: 'template',
            value: productType.template,
            errors: productType.getErrors('template')
        }) }}
    </div>

    </div>

    <div id=\"product-fields\" class=\"hidden\">

    {% include \"_includes/fieldlayoutdesigner\" with {
    fieldLayout: productType.asa('productFieldLayout').getFieldLayout(),
    } only %}

    </div>

    <div id=\"variant-fields\" class=\"hidden\">

    {% namespace \"variant-layout\" %}
    {% include \"_includes/fieldlayoutdesigner\" with {
        fieldLayout: productType.asa('variantFieldLayout').getFieldLayout(),
        customizableTabs: false
    } only %}
    {% endnamespace %}

    </div>
{% endblock %}

{% includejs %}
    {% if not productType.handle %}new Craft.HandleGenerator('#name', '#handle');{% endif %}

    {% for locale in craft.i18n.getSiteLocales() %}
        {% if productType.locales[locale.id] is not defined or not productType.locales[locale.id].urlFormat %}
            new Craft.EntryUrlFormatGenerator('#name', '#urlFormat-{{ locale.id }}', { suffix: '/{slug}' });
        {% endif %}
    {% endfor %}

\t\$('#hasVariants').on('change', function () {
\t\tif (\$(this).prop('checked')) {
\t\t\t\$('#tab-variantFields').removeClass('hidden');
\t\t} else {
\t\t\t\$('#tab-variantFields').addClass('hidden');
\t\t}
\t});

\twindow.productTypeShippingCategories = JSON.parse('{{ productType.shippingCategories|keys|json_encode|raw }}');
\twindow.shippingCategories = \$.map(JSON.parse('{{ craft.commerce.shippingCategories|json_encode(constant('JSON_HEX_APOS'))|raw }}'), function(value, index) { return [value] });

\t\$.each(window.shippingCategories, function (key, shippingCategory) {
\t\tif (shippingCategory.default == 1) {
\t\t\twindow.defaultShippingCategory = shippingCategory;
\t\t}
\t});

\t\$(function () {
\t\tvar \$shippingCategories = \$('#shippingCategories').selectize({
\t\t\toptions: window.shippingCategories,
\t\t\titems: window.productTypeShippingCategories,
\t\t\tvalueField: 'id',
\t\t\tlabelField: 'name',
\t\t\tplugins: ['remove_button'],
\t\t\tcreate: false,
\t\t\tdropdownParent: 'body',
\t\t\tonItemRemove: function () {
\t\t\t\tif (!\$shippingCategories[0].selectize.items.length) {
\t\t\t\t\t\$shippingCategories[0].selectize.addItem(window.defaultShippingCategory.id);
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\twindow.productTypeTaxCategories = JSON.parse('{{ productType.taxCategories|keys|json_encode|raw }}');
\twindow.taxCategories = \$.map(JSON.parse('{{ craft.commerce.taxCategories|json_encode(constant('JSON_HEX_APOS'))|raw }}'), function(value, index) { return [value] });

\t\$.each(window.taxCategories, function (key, taxCategory) {
\t\tif (taxCategory.default == 1) {
\t\t\twindow.defaultTaxCategory = taxCategory;
\t\t}
\t});

\t\$(function () {
\t\tvar \$taxCategories = \$('#taxCategories').selectize({
\t\t\toptions: window.taxCategories,
\t\t\titems: window.productTypeTaxCategories,
\t\t\tvalueField: 'id',
\t\t\tlabelField: 'name',
\t\t\tplugins: ['remove_button'],
\t\t\tcreate: false,
\t\t\tdropdownParent: 'body',
\t\t\tonItemRemove: function () {
\t\t\t\tif (!\$taxCategories[0].selectize.items.length) {
\t\t\t\t\t\$taxCategories[0].selectize.addItem(window.defaultTaxCategory.id);
\t\t\t\t}
\t\t\t}
\t\t});
\t});

{% endincludejs %}
", "commerce/settings/producttypes/_edit", "");
    }
}
