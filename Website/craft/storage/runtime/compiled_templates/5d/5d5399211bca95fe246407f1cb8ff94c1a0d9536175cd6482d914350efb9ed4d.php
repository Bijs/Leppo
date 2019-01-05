<?php

/* _upgrademodal */
class __TwigTemplate_a476a11804c8ceee94283a9ac359b58a49f68c83039b15e42e61479f77d4ba24 extends Craft\BaseTemplate
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
        // line 12
        echo "
";
        // line 24
        echo "
";
        // line 45
        echo "
";
        // line 46
        $context["__internal_9bb0bb0758307ef13986863d66f6fcbde0e6350f5a695108817accf40585288e"] = $this;
        // line 47
        $context["forms"] = $this->loadTemplate("_includes/forms", "_upgrademodal", 47);
        // line 48
        echo "

<div id=\"upgrademodal-compare\" class=\"body\">
\t<table class=\"data fullwidth\">
\t\t<thead>
\t\t\t<tr class=\"logos\">
\t\t\t\t<td></td>
\t\t\t\t<th scope=\"col\">
\t\t\t\t\t<h1 class=\"logo\">Solo</h1>
\t\t\t\t\t<p>";
        // line 57
        echo twig_escape_filter($this->env, \Craft\Craft::t("For when you’re building a website for yourself or a friend.", "app"), "html", null, true);
        echo "</p>
\t\t\t\t</th>
\t\t\t\t<th scope=\"col\">
\t\t\t\t\t<h1 class=\"logo\">Pro</h1>
\t\t\t\t\t<p>";
        // line 61
        echo twig_escape_filter($this->env, \Craft\Craft::t("For when you’re building something professionally for a client or team."), "html", null, true);
        echo "</p>
\t\t\t\t</th>
\t\t\t</tr>
\t\t\t<tr class=\"license-statuses\">
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 66
        echo $context["__internal_9bb0bb0758307ef13986863d66f6fcbde0e6350f5a695108817accf40585288e"]->getstatusBadge(($context["CraftPersonal"] ?? $this->getContext($context, "CraftPersonal")), ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")));
        echo "</td>
\t\t\t\t<td>";
        // line 67
        echo $context["__internal_9bb0bb0758307ef13986863d66f6fcbde0e6350f5a695108817accf40585288e"]->getstatusBadge(($context["CraftPro"] ?? $this->getContext($context, "CraftPro")), ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr class=\"price\">
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 71
        echo twig_escape_filter($this->env, \Craft\Craft::t("Free", "app"), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 72
        echo $context["__internal_9bb0bb0758307ef13986863d66f6fcbde0e6350f5a695108817accf40585288e"]->getprice(($context["CraftPro"] ?? $this->getContext($context, "CraftPro")), $this->getAttribute(($context["editions"] ?? $this->getContext($context, "editions")), ($context["CraftPro"] ?? $this->getContext($context, "CraftPro")), array(), "array"));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr class=\"buybtns\">
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 76
        echo $context["__internal_9bb0bb0758307ef13986863d66f6fcbde0e6350f5a695108817accf40585288e"]->getbuybtn(($context["CraftPersonal"] ?? $this->getContext($context, "CraftPersonal")), $this->getAttribute(($context["editions"] ?? $this->getContext($context, "editions")), ($context["CraftPersonal"] ?? $this->getContext($context, "CraftPersonal")), array(), "array"), ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")), ($context["canTestEditions"] ?? $this->getContext($context, "canTestEditions")));
        echo "</td>
\t\t\t\t<td>";
        // line 77
        echo $context["__internal_9bb0bb0758307ef13986863d66f6fcbde0e6350f5a695108817accf40585288e"]->getbuybtn(($context["CraftPro"] ?? $this->getContext($context, "CraftPro")), $this->getAttribute(($context["editions"] ?? $this->getContext($context, "editions")), ($context["CraftPro"] ?? $this->getContext($context, "CraftPro")), array(), "array"), ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")), ($context["canTestEditions"] ?? $this->getContext($context, "canTestEditions")));
        echo "</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"users\">";
        // line 82
        echo twig_escape_filter($this->env, \Craft\Craft::t("User Accounts"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 85
        echo twig_escape_filter($this->env, \Craft\Craft::t("Additional user accounts"), "html", null, true);
        echo "</th>
\t\t\t\t<td>";
        // line 86
        echo twig_escape_filter($this->env, \Craft\Craft::t("One Admin account", "app"), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 87
        echo twig_escape_filter($this->env, \Craft\Craft::t("Unlimited"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 90
        echo twig_escape_filter($this->env, \Craft\Craft::t("User groups"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 95
        echo twig_escape_filter($this->env, \Craft\Craft::t("User permissions"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 100
        echo twig_escape_filter($this->env, \Craft\Craft::t("Public user registration"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"brush\">";
        // line 106
        echo twig_escape_filter($this->env, \Craft\Craft::t("System Branding"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 109
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom login screen logo"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 114
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom HTML email template"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 119
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom email message wording"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"assets\">";
        // line 125
        echo twig_escape_filter($this->env, \Craft\Craft::t("Assets"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 128
        echo twig_escape_filter($this->env, \Craft\Craft::t("Amazon S3 support"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 133
        echo twig_escape_filter($this->env, \Craft\Craft::t("Rackspace Cloud Files support"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 138
        echo twig_escape_filter($this->env, \Craft\Craft::t("Google Cloud Storage support"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"language\">";
        // line 144
        echo twig_escape_filter($this->env, \Craft\Craft::t("Localization and Translation"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 147
        echo twig_escape_filter($this->env, \Craft\Craft::t("Section and entry locale targeting"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 152
        echo twig_escape_filter($this->env, \Craft\Craft::t("Content translations"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 157
        echo twig_escape_filter($this->env, \Craft\Craft::t("Locale-specific user permissions"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr class=\"buybtns\">
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 164
        echo $context["__internal_9bb0bb0758307ef13986863d66f6fcbde0e6350f5a695108817accf40585288e"]->getbuybtn(($context["CraftPro"] ?? $this->getContext($context, "CraftPro")), $this->getAttribute(($context["editions"] ?? $this->getContext($context, "editions")), ($context["CraftPro"] ?? $this->getContext($context, "CraftPro")), array(), "array"), ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")), ($context["canTestEditions"] ?? $this->getContext($context, "canTestEditions")));
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>


<div id=\"upgrademodal-checkout\" class=\"body hidden\">
\t<div class=\"logowrapper\">
\t\t<h1 class=\"logo\"></h1>
\t</div>

\t<form class=\"pane\">
\t\t";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 179
        echo $context["forms"]->gettextField(array("first" => true, "placeholder" => \Craft\Craft::t("Name"), "id" => "customer-name"));
        // line 183
        echo "

\t\t";
        // line 185
        echo $context["forms"]->gettextField(array("placeholder" => \Craft\Craft::t("Email"), "id" => "customer-email", "value" => $this->getAttribute(        // line 188
($context["currentUser"] ?? $this->getContext($context, "currentUser")), "email", array())));
        // line 189
        echo "

\t\t";
        // line 191
        ob_start();
        // line 192
        echo "\t\t\t<div class=\"multitext\">
\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t";
        // line 194
        echo $context["forms"]->gettext(array("id" => "cc-num", "type" => "tel", "placeholder" => \Craft\Craft::t("Card number"), "autocomplete" => false));
        // line 199
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t";
        // line 202
        echo $context["forms"]->gettext(array("id" => "cc-exp", "type" => "tel", "placeholder" => ((\Craft\Craft::t("MM") . " / ") . \Craft\Craft::t("YY"))));
        // line 206
        echo "
\t\t\t\t\t";
        // line 207
        echo $context["forms"]->gettext(array("id" => "cc-cvc", "type" => "tel", "placeholder" => \Craft\Craft::t("CVC")));
        // line 211
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        $context["ccInputs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 215
        echo "
\t\t";
        // line 216
        echo $context["forms"]->getfield(array("fieldId" => "cc-inputs"),         // line 218
($context["ccInputs"] ?? $this->getContext($context, "ccInputs")));
        echo "

\t\t<a class=\"fieldtoggle\" data-target=\"upgrademodal-checkout-more\">";
        // line 220
        echo twig_escape_filter($this->env, \Craft\Craft::t("Show additional fields for invoice"), "html", null, true);
        echo "</a>

\t\t<div id=\"upgrademodal-checkout-more\" class=\"hidden\">
\t\t\t";
        // line 223
        ob_start();
        // line 224
        echo "\t\t\t\t<div class=\"multitext\">
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t";
        // line 226
        echo $context["forms"]->gettext(array("id" => "business-name", "placeholder" => \Craft\Craft::t("Business name")));
        // line 229
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t";
        // line 232
        echo $context["forms"]->gettext(array("id" => "business-taxid", "placeholder" => \Craft\Craft::t("Business tax ID")));
        // line 235
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        $context["bizInputs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 239
        echo "
\t\t\t";
        // line 240
        echo $context["forms"]->getfield(array("fieldId" => "business-inputs"),         // line 242
($context["bizInputs"] ?? $this->getContext($context, "bizInputs")));
        echo "

\t\t\t";
        // line 244
        ob_start();
        // line 245
        echo "\t\t\t\t<div class=\"multitext\">
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t";
        // line 247
        echo $context["forms"]->gettext(array("id" => "business-address1", "placeholder" => \Craft\Craft::t("Address line 1")));
        // line 250
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t";
        // line 253
        echo $context["forms"]->gettext(array("id" => "business-address2", "placeholder" => \Craft\Craft::t("Address line 2")));
        // line 256
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t<div class=\"text selectize-text\">
\t\t\t\t\t\t\t<select id=\"business-country\" placeholder=\"";
        // line 260
        echo twig_escape_filter($this->env, \Craft\Craft::t("Country"), "html", null, true);
        echo "\"><option value=\"\"></option></select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text selectize-text\">
\t\t\t\t\t\t\t<select id=\"business-state\" placeholder=\"";
        // line 263
        echo twig_escape_filter($this->env, \Craft\Craft::t("State/province"), "html", null, true);
        echo "\"></select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t";
        // line 267
        echo $context["forms"]->gettext(array("id" => "business-city", "placeholder" => \Craft\Craft::t("City/town")));
        // line 270
        echo "
\t\t\t\t\t\t";
        // line 271
        echo $context["forms"]->gettext(array("id" => "business-zip", "placeholder" => \Craft\Craft::t("Zip/postal")));
        // line 274
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        $context["addressInputs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 278
        echo "
\t\t\t";
        // line 279
        echo $context["forms"]->getfield(array("fieldId" => "address-inputs"),         // line 281
($context["addressInputs"] ?? $this->getContext($context, "addressInputs")));
        echo "

\t\t\t";
        // line 283
        echo $context["forms"]->gettextareaField(array("id" => "purchase-notes", "placeholder" => \Craft\Craft::t("Notes"), "rows" => 2));
        // line 287
        echo "
\t\t</div>

\t\t<div class=\"buttons\">
\t\t\t<div class=\"left\">
\t\t\t\t<input id=\"pay-button\" type=\"submit\" class=\"btn submit\" value=\"Pay\">
\t\t\t\t<div id=\"pay-spinner\" class=\"spinner hidden\"></div>
\t\t\t</div>

\t\t\t<div class=\"right\">
\t\t\t\t";
        // line 297
        echo $context["forms"]->gettext(array("id" => "coupon-input", "class" => "code", "placeholder" => \Craft\Craft::t("COUPON"), "size" => 12));
        // line 302
        echo "
\t\t\t\t<div id=\"coupon-spinner\" class=\"spinner hidden\"></div>
\t\t\t</div>
\t\t</div>

\t\t<p class=\"secure icon light\">";
        // line 307
        echo \Craft\Craft::t("Your payment is safe and secure with {stripe}.", array("stripe" => "<a href=\"https://stripe.com/\" target=\"_blank\">Stripe</a>"));
        echo "
\t</form>
</div>

<div id=\"upgrademodal-success\" class=\"body hidden\">
\t<div class=\"message\">
\t\t<p>";
        // line 313
        echo "Craft has been upgraded successfully!";
        echo "</p>
\t\t<div class=\"btn\">";
        // line 314
        echo twig_escape_filter($this->env, \Craft\Craft::t("Reload"), "html", null, true);
        echo "</div>
\t</div>
</div>
";
    }

    // line 1
    public function getstatusBadge($__edition__ = null, $__licensedEdition__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "edition" => $__edition__,
            "licensedEdition" => $__licensedEdition__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            if ((($context["edition"] ?? $this->getContext($context, "edition")) == ($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition")))) {
                // line 3
                echo "\t\t";
                if ((($context["edition"] ?? $this->getContext($context, "edition")) <= ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")))) {
                    // line 4
                    echo "\t\t\t<div class=\"license-status installed\" data-icon=\"check\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Installed"), "html", null, true);
                    echo "</div>
\t\t";
                } else {
                    // line 6
                    echo "\t\t\t<div class=\"license-status installed\" data-icon=\"check\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Installed as a trial"), "html", null, true);
                    echo "</div>
\t\t";
                }
                // line 8
                echo "\t";
            } elseif ((($context["edition"] ?? $this->getContext($context, "edition")) == ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")))) {
                // line 9
                echo "\t\t<div class=\"license-status licensed\" data-icon=\"check\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Licensed"), "html", null, true);
                echo "</div>
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

    // line 13
    public function getprice($__edition__ = null, $__info__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "edition" => $__edition__,
            "info" => $__info__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "\t";
            if ($this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "salePrice", array())) {
                // line 15
                echo "\t\t";
                ob_start();
                echo "<span class=\"listedprice\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "formattedPrice", array()), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "formattedSalePrice", array()), "html", null, true);
                $context["price"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 16
                echo "\t";
            } else {
                // line 17
                echo "\t\t";
                $context["price"] = $this->getAttribute(($context["info"] ?? $this->getContext($context, "info")), "formattedPrice", array());
                // line 18
                echo "\t";
            }
            // line 19
            echo "\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("{price} plus {renewalPrice}/year for updates", array("price" =>             // line 20
($context["price"] ?? $this->getContext($context, "price")), "renewalPrice" => $this->getAttribute(            // line 21
($context["info"] ?? $this->getContext($context, "info")), "formattedRenewalPrice", array()))), "html", null, true);
            // line 22
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
    public function getbuybtn($__edition__ = null, $__info__ = null, $__licensedEdition__ = null, $__canTestEditions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "edition" => $__edition__,
            "info" => $__info__,
            "licensedEdition" => $__licensedEdition__,
            "canTestEditions" => $__canTestEditions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            ob_start();
            // line 27
            echo "\t\t<div class=\"btngroup\">
\t\t\t";
            // line 29
            echo "\t\t\t";
            if ((($context["edition"] ?? $this->getContext($context, "edition")) > ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition")))) {
                // line 30
                echo "\t\t\t\t<div class=\"btn buybtn submit\" data-edition=\"";
                echo twig_escape_filter($this->env, ($context["edition"] ?? $this->getContext($context, "edition")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Buy now"), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 32
            echo "
\t\t\t";
            // line 34
            echo "\t\t\t";
            if (((($context["canTestEditions"] ?? $this->getContext($context, "canTestEditions")) && (($context["edition"] ?? $this->getContext($context, "edition")) != ($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition")))) && (($context["edition"] ?? $this->getContext($context, "edition")) > ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition"))))) {
                // line 35
                echo "\t\t\t\t<div class=\"btn test\" data-edition=\"";
                echo twig_escape_filter($this->env, ($context["edition"] ?? $this->getContext($context, "edition")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Try for free"), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 37
            echo "
\t\t\t";
            // line 39
            echo "\t\t\t";
            if (((($context["edition"] ?? $this->getContext($context, "edition")) == ($context["licensedEdition"] ?? $this->getContext($context, "licensedEdition"))) && (($context["edition"] ?? $this->getContext($context, "edition")) != ($context["CraftEdition"] ?? $this->getContext($context, "CraftEdition"))))) {
                // line 40
                echo "\t\t\t\t<div class=\"btn test\" data-edition=\"";
                echo twig_escape_filter($this->env, ($context["edition"] ?? $this->getContext($context, "edition")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reactivate"), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 42
            echo "\t\t</div>
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return "_upgrademodal";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 42,  594 => 40,  591 => 39,  588 => 37,  580 => 35,  577 => 34,  574 => 32,  566 => 30,  563 => 29,  560 => 27,  558 => 26,  543 => 25,  527 => 22,  525 => 21,  524 => 20,  522 => 19,  519 => 18,  516 => 17,  513 => 16,  505 => 15,  502 => 14,  489 => 13,  470 => 9,  467 => 8,  461 => 6,  455 => 4,  452 => 3,  449 => 2,  436 => 1,  428 => 314,  424 => 313,  415 => 307,  408 => 302,  406 => 297,  394 => 287,  392 => 283,  387 => 281,  386 => 279,  383 => 278,  377 => 274,  375 => 271,  372 => 270,  370 => 267,  363 => 263,  357 => 260,  351 => 256,  349 => 253,  344 => 250,  342 => 247,  338 => 245,  336 => 244,  331 => 242,  330 => 240,  327 => 239,  321 => 235,  319 => 232,  314 => 229,  312 => 226,  308 => 224,  306 => 223,  300 => 220,  295 => 218,  294 => 216,  291 => 215,  285 => 211,  283 => 207,  280 => 206,  278 => 202,  273 => 199,  271 => 194,  267 => 192,  265 => 191,  261 => 189,  259 => 188,  258 => 185,  254 => 183,  252 => 179,  247 => 177,  231 => 164,  221 => 157,  213 => 152,  205 => 147,  199 => 144,  190 => 138,  182 => 133,  174 => 128,  168 => 125,  159 => 119,  151 => 114,  143 => 109,  137 => 106,  128 => 100,  120 => 95,  112 => 90,  106 => 87,  102 => 86,  98 => 85,  92 => 82,  84 => 77,  80 => 76,  73 => 72,  69 => 71,  62 => 67,  58 => 66,  50 => 61,  43 => 57,  32 => 48,  30 => 47,  28 => 46,  25 => 45,  22 => 24,  19 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro statusBadge(edition, licensedEdition) %}
\t{% if edition == CraftEdition %}
\t\t{% if edition <= licensedEdition %}
\t\t\t<div class=\"license-status installed\" data-icon=\"check\">{{ \"Installed\"|t }}</div>
\t\t{% else %}
\t\t\t<div class=\"license-status installed\" data-icon=\"check\">{{ \"Installed as a trial\"|t }}</div>
\t\t{% endif %}
\t{% elseif edition == licensedEdition %}
\t\t<div class=\"license-status licensed\" data-icon=\"check\">{{ \"Licensed\"|t }}</div>
\t{% endif %}
{% endmacro %}

{% macro price(edition, info) %}
\t{% if info.salePrice %}
\t\t{% set price %}<span class=\"listedprice\">{{ info.formattedPrice }}</span> {{ info.formattedSalePrice }}{% endset %}
\t{% else %}
\t\t{% set price = info.formattedPrice %}
\t{% endif %}
\t{{ \"{price} plus {renewalPrice}/year for updates\"|t({
\t\tprice: price,
\t\trenewalPrice: info.formattedRenewalPrice
\t}) }}
{% endmacro %}

{% macro buybtn(edition, info, licensedEdition, canTestEditions) %}
\t{%- spaceless %}
\t\t<div class=\"btngroup\">
\t\t\t{# Show the \"Buy\" button if this edition is greater than the licensed edition #}
\t\t\t{% if edition > licensedEdition %}
\t\t\t\t<div class=\"btn buybtn submit\" data-edition=\"{{ edition }}\">{{ \"Buy now\"|t }}</div>
\t\t\t{% endif %}

\t\t\t{# Show the \"Try\" button if they're on a testable domain, this is not the current edition, and is greater than the licensed edition #}
\t\t\t{% if canTestEditions and edition != CraftEdition and edition > licensedEdition %}
\t\t\t\t<div class=\"btn test\" data-edition=\"{{ edition }}\">{{ \"Try for free\"|t }}</div>
\t\t\t{% endif %}

\t\t\t{# Show the \"Reactivate\" button if they’re licensed to use this edition but not currently on it #}
\t\t\t{% if edition == licensedEdition and edition != CraftEdition %}
\t\t\t\t<div class=\"btn test\" data-edition=\"{{ edition }}\">{{ \"Reactivate\"|t }}</div>
\t\t\t{% endif %}
\t\t</div>
\t{% endspaceless -%}
{% endmacro %}

{% from _self import statusBadge, price, buybtn %}
{% import \"_includes/forms\" as forms %}


<div id=\"upgrademodal-compare\" class=\"body\">
\t<table class=\"data fullwidth\">
\t\t<thead>
\t\t\t<tr class=\"logos\">
\t\t\t\t<td></td>
\t\t\t\t<th scope=\"col\">
\t\t\t\t\t<h1 class=\"logo\">Solo</h1>
\t\t\t\t\t<p>{{ \"For when you’re building a website for yourself or a friend.\"|t('app') }}</p>
\t\t\t\t</th>
\t\t\t\t<th scope=\"col\">
\t\t\t\t\t<h1 class=\"logo\">Pro</h1>
\t\t\t\t\t<p>{{ \"For when you’re building something professionally for a client or team.\"|t }}</p>
\t\t\t\t</th>
\t\t\t</tr>
\t\t\t<tr class=\"license-statuses\">
\t\t\t\t<td></td>
\t\t\t\t<td>{{ statusBadge(CraftPersonal, licensedEdition) }}</td>
\t\t\t\t<td>{{ statusBadge(CraftPro, licensedEdition) }}</td>
\t\t\t</tr>
\t\t\t<tr class=\"price\">
\t\t\t\t<td></td>
\t\t\t\t<td>{{ \"Free\"|t('app') }}</td>
\t\t\t\t<td>{{ price(CraftPro, editions[CraftPro]) }}</td>
\t\t\t</tr>
\t\t\t<tr class=\"buybtns\">
\t\t\t\t<td></td>
\t\t\t\t<td>{{ buybtn(CraftPersonal, editions[CraftPersonal], licensedEdition, canTestEditions) }}</td>
\t\t\t\t<td>{{ buybtn(CraftPro, editions[CraftPro], licensedEdition, canTestEditions) }}</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"users\">{{ \"User Accounts\"|t }}</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Additional user accounts\"|t }}</th>
\t\t\t\t<td>{{ \"One Admin account\"|t('app') }}</td>
\t\t\t\t<td>{{ \"Unlimited\"|t }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"User groups\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"User permissions\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Public user registration\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"brush\">{{ \"System Branding\"|t }}</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Custom login screen logo\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Custom HTML email template\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Custom email message wording\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"assets\">{{ \"Assets\"|t }}</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Amazon S3 support\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Rackspace Cloud Files support\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Google Cloud Storage support\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"language\">{{ \"Localization and Translation\"|t }}</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Section and entry locale targeting\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Content translations\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">{{ \"Locale-specific user permissions\"|t }}</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr class=\"buybtns\">
\t\t\t\t<td></td>
\t\t\t\t<td></td>
\t\t\t\t<td>{{ buybtn(CraftPro, editions[CraftPro], licensedEdition, canTestEditions) }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>


<div id=\"upgrademodal-checkout\" class=\"body hidden\">
\t<div class=\"logowrapper\">
\t\t<h1 class=\"logo\"></h1>
\t</div>

\t<form class=\"pane\">
\t\t{{ getCsrfInput() }}

\t\t{{ forms.textField({
\t\t\tfirst: true,
\t\t\tplaceholder: \"Name\"|t,
\t\t\tid: 'customer-name'
\t\t}) }}

\t\t{{ forms.textField({
\t\t\tplaceholder: \"Email\"|t,
\t\t\tid: 'customer-email',
\t\t\tvalue: currentUser.email
\t\t}) }}

\t\t{% set ccInputs %}
\t\t\t<div class=\"multitext\">
\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t{{ forms.text({
\t\t\t\t\t\tid: 'cc-num',
\t\t\t\t\t\ttype: 'tel',
\t\t\t\t\t\tplaceholder: \"Card number\"|t,
\t\t\t\t\t\tautocomplete: false
\t\t\t\t\t}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t{{ forms.text({
\t\t\t\t\t\tid: 'cc-exp',
\t\t\t\t\t\ttype: 'tel',
\t\t\t\t\t\tplaceholder: \"MM\"|t~' / '~\"YY\"|t
\t\t\t\t\t}) }}
\t\t\t\t\t{{ forms.text({
\t\t\t\t\t\tid: 'cc-cvc',
\t\t\t\t\t\ttype: 'tel',
\t\t\t\t\t\tplaceholder: \"CVC\"|t
\t\t\t\t\t}) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endset %}

\t\t{{ forms.field({
\t\t\tfieldId: 'cc-inputs'
\t\t}, ccInputs) }}

\t\t<a class=\"fieldtoggle\" data-target=\"upgrademodal-checkout-more\">{{ \"Show additional fields for invoice\"|t }}</a>

\t\t<div id=\"upgrademodal-checkout-more\" class=\"hidden\">
\t\t\t{% set bizInputs %}
\t\t\t\t<div class=\"multitext\">
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t{{ forms.text({
\t\t\t\t\t\t\tid: 'business-name',
\t\t\t\t\t\t\tplaceholder: \"Business name\"|t
\t\t\t\t\t\t}) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t{{ forms.text({
\t\t\t\t\t\t\tid: 'business-taxid',
\t\t\t\t\t\t\tplaceholder: \"Business tax ID\"|t
\t\t\t\t\t\t}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endset %}

\t\t\t{{ forms.field({
\t\t\t\tfieldId: 'business-inputs'
\t\t\t}, bizInputs) }}

\t\t\t{% set addressInputs %}
\t\t\t\t<div class=\"multitext\">
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t{{ forms.text({
\t\t\t\t\t\t\tid: 'business-address1',
\t\t\t\t\t\t\tplaceholder: \"Address line 1\"|t
\t\t\t\t\t\t}) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t{{ forms.text({
\t\t\t\t\t\t\tid: 'business-address2',
\t\t\t\t\t\t\tplaceholder: \"Address line 2\"|t
\t\t\t\t\t\t}) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t<div class=\"text selectize-text\">
\t\t\t\t\t\t\t<select id=\"business-country\" placeholder=\"{{ 'Country'|t }}\"><option value=\"\"></option></select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text selectize-text\">
\t\t\t\t\t\t\t<select id=\"business-state\" placeholder=\"{{ 'State/province'|t }}\"></select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"multitextrow\">
\t\t\t\t\t\t{{ forms.text({
\t\t\t\t\t\t\tid: 'business-city',
\t\t\t\t\t\t\tplaceholder: \"City/town\"|t
\t\t\t\t\t\t}) }}
\t\t\t\t\t\t{{ forms.text({
\t\t\t\t\t\t\tid: 'business-zip',
\t\t\t\t\t\t\tplaceholder: \"Zip/postal\"|t
\t\t\t\t\t\t}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endset %}

\t\t\t{{ forms.field({
\t\t\t\tfieldId: 'address-inputs'
\t\t\t}, addressInputs) }}

\t\t\t{{ forms.textareaField({
\t\t\t\tid: 'purchase-notes',
\t\t\t\tplaceholder: \"Notes\"|t,
\t\t\t\trows: 2
\t\t\t}) }}
\t\t</div>

\t\t<div class=\"buttons\">
\t\t\t<div class=\"left\">
\t\t\t\t<input id=\"pay-button\" type=\"submit\" class=\"btn submit\" value=\"Pay\">
\t\t\t\t<div id=\"pay-spinner\" class=\"spinner hidden\"></div>
\t\t\t</div>

\t\t\t<div class=\"right\">
\t\t\t\t{{ forms.text({
\t\t\t\t\tid: 'coupon-input',
\t\t\t\t\tclass: 'code',
\t\t\t\t\tplaceholder: \"COUPON\"|t,
\t\t\t\t\tsize: 12
\t\t\t\t}) }}
\t\t\t\t<div id=\"coupon-spinner\" class=\"spinner hidden\"></div>
\t\t\t</div>
\t\t</div>

\t\t<p class=\"secure icon light\">{{ \"Your payment is safe and secure with {stripe}.\"|t({ stripe: '<a href=\"https://stripe.com/\" target=\"_blank\">Stripe</a>' })|raw }}
\t</form>
</div>

<div id=\"upgrademodal-success\" class=\"body hidden\">
\t<div class=\"message\">
\t\t<p>{{ \"Craft has been upgraded successfully!\" }}</p>
\t\t<div class=\"btn\">{{ \"Reload\"|t }}</div>
\t</div>
</div>
", "_upgrademodal", "");
    }
}
