<?php

/* _googleTagManager */
class __TwigTemplate_22227845df7836aa310928d9e1146b15c58b3c09daef210a470a95934a44a76f extends Craft\BaseTemplate
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
        if ($this->getAttribute(($context["seomaticHelper"] ?? $this->getContext($context, "seomaticHelper")), "ownerGoogleTagManagerID", array())) {
            // line 2
            echo "<script>
  ";
            // line 3
            echo twig_escape_filter($this->env, ($context["gtmDataLayerVariableName"] ?? $this->getContext($context, "gtmDataLayerVariableName")), "html", null, true);
            echo " = [";
            if (((isset($context["dataLayer"]) || array_key_exists("dataLayer", $context)) && ($context["dataLayer"] ?? $this->getContext($context, "dataLayer")))) {
                echo $this->env->getExtension('Craft\CraftTwigExtension')->jsonEncodeFilter(($context["dataLayer"] ?? $this->getContext($context, "dataLayer")));
            }
            echo "];
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','";
            // line 8
            echo twig_escape_filter($this->env, ($context["gtmDataLayerVariableName"] ?? $this->getContext($context, "gtmDataLayerVariableName")), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["seomaticHelper"] ?? $this->getContext($context, "seomaticHelper")), "ownerGoogleTagManagerID", array()), "html", null, true);
            echo "');
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "_googleTagManager";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if seomaticHelper.ownerGoogleTagManagerID %}
<script>
  {{ gtmDataLayerVariableName }} = [{% if dataLayer is defined and dataLayer %}{{ dataLayer |json_encode() |raw }}{% endif %}];
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','{{ gtmDataLayerVariableName }}','{{ seomaticHelper.ownerGoogleTagManagerID }}');
</script>
{% endif %}", "_googleTagManager", "");
    }
}
