<?php

/* sitemap/_settings */
class __TwigTemplate_68115fd301f9a56397525ddb1d10a25195be847e0d7da8c95ae5869eb03e2a99 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "sitemap/_settings", 1);
        // line 2
        echo "
";
        // line 3
        $context["frequencyOptions"] = array("always" => "always", "hourly" => "hourly", "daily" => "daily", "weekly" => "weekly", "monthly" => "monthly", "yearly" => "yearly", "never" => "never");
        // line 12
        echo "
";
        // line 13
        $context["priorityOptions"] = array("1.0" => "1.0", "0.9" => "0.9", "0.8" => "0.8", "0.7" => "0.7", "0.6" => "0.6", "0.5" => "0.5", "0.4" => "0.4", "0.3" => "0.3", "0.2" => "0.2", "0.1" => "0.1", "0.0" => "0.0");
        // line 26
        echo "
<table class=\"data fullwidth\">
  <thead>
    <th>";
        // line 29
        echo twig_escape_filter($this->env, \Craft\Craft::t("Enabled"), "html", null, true);
        echo "</th>
    <th>";
        // line 30
        echo twig_escape_filter($this->env, \Craft\Craft::t("Section"), "html", null, true);
        echo " </th>
    <th>";
        // line 31
        echo twig_escape_filter($this->env, \Craft\Craft::t("URL Format"), "html", null, true);
        echo "</th>
    <th>";
        // line 32
        echo twig_escape_filter($this->env, \Craft\Craft::t("Entries"), "html", null, true);
        echo "</th>
    <th>";
        // line 33
        echo twig_escape_filter($this->env, \Craft\Craft::t("Change Frequency"), "html", null, true);
        echo "</th>
    <th>";
        // line 34
        echo twig_escape_filter($this->env, \Craft\Craft::t("Priority"), "html", null, true);
        echo "</th>
  </thead>
  <tbody>
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 38
            echo "      <tr>
        <td>";
            // line 40
            echo $context["forms"]->getcheckbox(array("name" => (("enabled[" . $this->getAttribute(            // line 41
$context["section"], "id", array())) . "]"), "value" => true, "checked" => $this->getAttribute($this->getAttribute(            // line 43
($context["settings"] ?? null), "sections", array(), "any", false, true), $this->getAttribute($context["section"], "id", array()), array(), "array", true, true)));
            // line 45
            echo "</td>
        <td>";
            // line 47
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            // line 48
            echo "</td>
        <td dir=\"ltr\">";
            // line 50
            if ($this->getAttribute($context["section"], "isHomepage", array(), "method")) {
                // line 51
                echo "<div data-icon=\"home\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Homepage"), "html", null, true);
                echo "\"></div>";
            } else {
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "urlFormat", array()), "html", null, true);
            }
            // line 55
            echo "</td>
        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "entries", array()), "section", array(0 => $context["section"]), "method"), "total", array(), "method"), "html", null, true);
            // line 58
            echo "</td>
        <td>";
            // line 60
            echo $context["forms"]->getselectField(array("name" => (("changefreq[" . $this->getAttribute(            // line 61
$context["section"], "id", array())) . "]"), "options" =>             // line 62
($context["frequencyOptions"] ?? $this->getContext($context, "frequencyOptions")), "value" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
($context["settings"] ?? null), "sections", array(), "any", false, true), $this->getAttribute($context["section"], "id", array()), array(), "array", false, true), "changefreq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sections", array(), "any", false, true), $this->getAttribute($context["section"], "id", array()), array(), "array", false, true), "changefreq", array()), "weekly")) : ("weekly"))));
            // line 65
            echo "</td>
        <td>";
            // line 67
            echo $context["forms"]->getselectField(array("name" => (("priority[" . $this->getAttribute(            // line 68
$context["section"], "id", array())) . "]"), "options" =>             // line 69
($context["priorityOptions"] ?? $this->getContext($context, "priorityOptions")), "value" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 70
($context["settings"] ?? null), "sections", array(), "any", false, true), $this->getAttribute($context["section"], "id", array()), array(), "array", false, true), "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sections", array(), "any", false, true), $this->getAttribute($context["section"], "id", array()), array(), "array", false, true), "priority", array()), (($this->getAttribute($context["section"], "isHomepage", array(), "method")) ? ("1.0") : ("0.5")))) : ((($this->getAttribute($context["section"], "isHomepage", array(), "method")) ? ("1.0") : ("0.5"))))));
            // line 72
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "sitemap/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 75,  112 => 72,  110 => 70,  109 => 69,  108 => 68,  107 => 67,  104 => 65,  102 => 63,  101 => 62,  100 => 61,  99 => 60,  96 => 58,  94 => 57,  91 => 55,  88 => 53,  83 => 51,  81 => 50,  78 => 48,  76 => 47,  73 => 45,  71 => 43,  70 => 41,  69 => 40,  66 => 38,  62 => 37,  56 => 34,  52 => 33,  48 => 32,  44 => 31,  40 => 30,  36 => 29,  31 => 26,  29 => 13,  26 => 12,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '_includes/forms' as forms %}

{% set frequencyOptions = {
  'always': 'always',
  'hourly': 'hourly',
  'daily': 'daily',
  'weekly': 'weekly',
  'monthly': 'monthly',
  'yearly': 'yearly',
  'never': 'never',
} %}

{% set priorityOptions = {
  '1.0': '1.0',
  '0.9': '0.9',
  '0.8': '0.8',
  '0.7': '0.7',
  '0.6': '0.6',
  '0.5': '0.5',
  '0.4': '0.4',
  '0.3': '0.3',
  '0.2': '0.2',
  '0.1': '0.1',
  '0.0': '0.0',
} %}

<table class=\"data fullwidth\">
  <thead>
    <th>{{ 'Enabled'|t }}</th>
    <th>{{ 'Section'|t }} </th>
    <th>{{ 'URL Format'|t }}</th>
    <th>{{ 'Entries'|t }}</th>
    <th>{{ 'Change Frequency'|t }}</th>
    <th>{{ 'Priority'|t }}</th>
  </thead>
  <tbody>
    {% for section in sections %}
      <tr>
        <td>
          {{- forms.checkbox({
            name: \"enabled[#{section.id}]\",
            value: true,
            checked: settings.sections[section.id] is defined
          }) -}}
        </td>
        <td>
          {{- section -}}
        </td>
        <td dir=\"ltr\">
          {%- if section.isHomepage() -%}
            <div data-icon=\"home\" title=\"{{ 'Homepage'|t }}\"></div>
          {%- else -%}
            {{ section.urlFormat }}
          {%- endif -%}
        </td>
        <td>
          {{- craft.entries.section(section).total() -}}
        </td>
        <td>
          {{- forms.selectField({
            name: \"changefreq[#{section.id}]\",
            options: frequencyOptions,
            value: settings.sections[section.id].changefreq|default('weekly')
          }) -}}
        </td>
        <td>
          {{- forms.selectField({
            name: \"priority[#{section.id}]\",
            options: priorityOptions,
            value: settings.sections[section.id].priority|default(section.isHomepage() ? '1.0' : '0.5')
          }) -}}
        </td>
      </tr>
    {% endfor %}
  </tbody>
</table>
", "sitemap/_settings", "");
    }
}
