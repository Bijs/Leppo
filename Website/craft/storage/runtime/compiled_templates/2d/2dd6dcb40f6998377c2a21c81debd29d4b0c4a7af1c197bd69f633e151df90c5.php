<?php

/* _includes/forms */
class __TwigTemplate_3c1864088c4984957bed9855401d556dd630ce18fe6f7d66672ec84ae650bf58 extends Craft\BaseTemplate
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
        // line 4
        echo "

";
        // line 7
        echo "

";
        // line 12
        echo "

";
        // line 17
        echo "

";
        // line 22
        echo "

";
        // line 27
        echo "

";
        // line 32
        echo "

";
        // line 37
        echo "

";
        // line 42
        echo "

";
        // line 47
        echo "

";
        // line 52
        echo "

";
        // line 57
        echo "

";
        // line 62
        echo "

";
        // line 67
        echo "

";
        // line 72
        echo "

";
        // line 77
        echo "

";
        // line 82
        echo "

";
        // line 87
        echo "

";
        // line 92
        echo "

";
        // line 97
        echo "

";
        // line 100
        echo "

";
        // line 105
        echo "

";
        // line 120
        echo "

";
        // line 125
        echo "

";
        // line 130
        echo "

";
        // line 135
        echo "

";
        // line 140
        echo "

";
        // line 151
        echo "

";
        // line 156
        echo "

";
        // line 161
        echo "

";
        // line 166
        echo "

";
        // line 185
        echo "

";
        // line 190
        echo "

";
        // line 195
        echo "

";
        // line 200
        echo "

";
        // line 208
        echo "

";
        // line 214
        echo "

";
        // line 219
        echo "

";
        // line 222
        echo "

";
    }

    // line 1
    public function geterrorList($__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            $this->loadTemplate("_includes/forms/errorList", "_includes/forms", 2)->display($context);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function gethidden($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            $this->loadTemplate("_includes/forms/hidden", "_includes/forms", 10)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function gettext($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "\t";
            $this->loadTemplate("_includes/forms/text", "_includes/forms", 15)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getpassword($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "\t";
            $this->loadTemplate("_includes/forms/text", "_includes/forms", 20)->display(twig_array_merge(($context["config"] ?? $this->getContext($context, "config")), array("type" => "password")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getdate($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "\t";
            $this->loadTemplate("_includes/forms/date", "_includes/forms", 25)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function gettime($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "\t";
            $this->loadTemplate("_includes/forms/time", "_includes/forms", 30)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 34
    public function getcolor($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "\t";
            $this->loadTemplate("_includes/forms/color", "_includes/forms", 35)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function gettextarea($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "\t";
            $this->loadTemplate("_includes/forms/textarea", "_includes/forms", 40)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function getselect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "\t";
            $this->loadTemplate("_includes/forms/select", "_includes/forms", 45)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getmultiselect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            echo "\t";
            $this->loadTemplate("_includes/forms/multiselect", "_includes/forms", 50)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function getcheckbox($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            echo "\t";
            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms", 55)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getcheckboxGroup($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "\t";
            $this->loadTemplate("_includes/forms/checkboxGroup", "_includes/forms", 60)->display(($context["config"] ?? $this->getContext($context, "config")));
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
    public function getcheckboxSelect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "\t";
            $this->loadTemplate("_includes/forms/checkboxSelect", "_includes/forms", 65)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getradio($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "\t";
            $this->loadTemplate("_includes/forms/radio", "_includes/forms", 70)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function getradioGroup($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            echo "\t";
            $this->loadTemplate("_includes/forms/radioGroup", "_includes/forms", 75)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function getfile($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 80
            echo "\t";
            $this->loadTemplate("_includes/forms/file", "_includes/forms", 80)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 84
    public function getlightswitch($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 85
            echo "\t";
            $this->loadTemplate("_includes/forms/lightswitch", "_includes/forms", 85)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function geteditableTable($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "\t";
            $this->loadTemplate("_includes/forms/editableTable", "_includes/forms", 90)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 94
    public function getelementSelect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 95
            echo "\t";
            $this->loadTemplate("_includes/forms/elementSelect", "_includes/forms", 95)->display(($context["config"] ?? $this->getContext($context, "config")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 102
    public function getfield($__config__ = null, $__input__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "input" => $__input__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 103
            echo "\t";
            $this->loadTemplate("_includes/forms/field", "_includes/forms", 103)->display(twig_array_merge(($context["config"] ?? $this->getContext($context, "config")), array("input" => ($context["input"] ?? $this->getContext($context, "input")))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 107
    public function gettextField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "\t";
            if ($this->getAttribute(($context["config"] ?? null), "unit", array(), "any", true, true)) {
                // line 109
                echo "\t\t";
                ob_start();
                // line 110
                echo "\t\t\t<div class=\"flex\">
\t\t\t\t<div class=\"textwrapper\">";
                // line 111
                echo $this->getAttribute($this, "text", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method");
                echo "</div>
\t\t\t\t<div class=\"label light\">";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "unit", array()), "html", null, true);
                echo "</div>
\t\t\t</div>
\t\t";
                $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 115
                echo "\t";
            } else {
                // line 116
                echo "\t\t";
                $context["input"] = $this->getAttribute($this, "text", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method");
                // line 117
                echo "\t";
            }
            // line 118
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => ($context["input"] ?? $this->getContext($context, "input"))), "method");
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

    // line 122
    public function getpasswordField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 123
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "password", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 127
    public function getdateField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "date", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 132
    public function gettimeField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 133
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "time", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 137
    public function getcolorField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 138
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "color", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 142
    public function getdateTimeField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 143
            echo "\t";
            ob_start();
            // line 144
            echo "\t\t<div class=\"datetimewrapper\">
\t\t\t";
            // line 145
            echo $this->getAttribute($this, "date", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method");
            echo "
\t\t\t";
            // line 146
            echo $this->getAttribute($this, "time", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method");
            echo "
\t\t</div>
\t";
            $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 149
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => ($context["input"] ?? $this->getContext($context, "input"))), "method");
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

    // line 153
    public function gettextareaField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 154
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "textarea", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 158
    public function getselectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 159
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "select", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 163
    public function getmultiselectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 164
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "multiselect", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 168
    public function getcheckboxField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 169
            echo "\t";
            if ($this->getAttribute(($context["config"] ?? null), "fieldLabel", array(), "any", true, true)) {
                // line 170
                echo "\t\t";
                echo $this->getAttribute($this, "field", array(0 => twig_array_merge(($context["config"] ?? $this->getContext($context, "config")), array("label" => $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "fieldLabel", array()))), 1 => $this->getAttribute($this, "checkbox", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
                echo "
\t";
            } else {
                // line 172
                echo "\t\t";
                $context["instructions"] = ((($this->getAttribute(($context["config"] ?? null), "instructions", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["config"] ?? null), "instructions", array())))) ? ($this->getAttribute(($context["config"] ?? null), "instructions", array())) : (null));
                // line 173
                $context["warning"] = ((($this->getAttribute(($context["config"] ?? null), "warning", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["config"] ?? null), "warning", array())))) ? ($this->getAttribute(($context["config"] ?? null), "warning", array())) : (null));
                // line 174
                echo "<div class=\"field checkboxfield";
                if (($this->getAttribute(($context["config"] ?? null), "first", array(), "any", true, true) && $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "first", array()))) {
                    echo " first";
                }
                if (($context["instructions"] ?? $this->getContext($context, "instructions"))) {
                    echo " has-instructions";
                }
                echo "\"";
                if (($this->getAttribute(($context["config"] ?? null), "id", array(), "any", true, true) && $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "id", array()))) {
                    echo " id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "id", array()), "html", null, true);
                    echo "-field\"";
                }
                echo ">
\t\t\t";
                // line 175
                echo $this->getAttribute($this, "checkbox", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method");
                echo "
\t\t\t";
                // line 176
                if (($context["instructions"] ?? $this->getContext($context, "instructions"))) {
                    // line 177
                    echo "\t\t\t\t<div class=\"instructions\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->markdownFilter(($context["instructions"] ?? $this->getContext($context, "instructions"))), "html", null, true);
                    echo "</div>
\t\t\t";
                }
                // line 179
                echo "\t\t\t";
                if (($context["warning"] ?? $this->getContext($context, "warning"))) {
                    // line 180
                    echo "\t\t\t\t<p class=\"warning\">";
                    echo twig_escape_filter($this->env, ($context["warning"] ?? $this->getContext($context, "warning")), "html", null, true);
                    echo "</p>
\t\t\t";
                }
                // line 182
                echo "\t\t</div>
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

    // line 187
    public function getcheckboxSelectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 188
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "checkboxSelect", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 192
    public function getradioGroupField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 193
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "radioGroup", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 197
    public function getfileField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 198
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "file", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 202
    public function getlightswitchField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 203
            echo "\t";
            if (( !$this->getAttribute(($context["config"] ?? null), "labelId", array(), "any", true, true) ||  !$this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "labelId", array()))) {
                // line 204
                echo "\t\t";
                $context["config"] = twig_array_merge(($context["config"] ?? $this->getContext($context, "config")), array("labelId" => ("label" . twig_random($this->env))));
                // line 205
                echo "\t";
            }
            // line 206
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "lightswitch", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 210
    public function geteditableTableField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 211
            echo "\t";
            ob_start();
            $this->loadTemplate("_includes/forms/editableTable", "_includes/forms", 211)->display(($context["config"] ?? $this->getContext($context, "config")));
            $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 212
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => ($context["input"] ?? $this->getContext($context, "input"))), "method");
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

    // line 216
    public function getelementSelectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 217
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => ($context["config"] ?? $this->getContext($context, "config")), 1 => $this->getAttribute($this, "elementSelect", array(0 => ($context["config"] ?? $this->getContext($context, "config"))), "method")), "method");
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

    // line 224
    public function getoptionShortcutLabel($__key__ = null, $__shift__ = null, $__alt__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "shift" => $__shift__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 225
            ob_start();
            // line 226
            echo "\t\t";
            switch ($this->getAttribute($this->getAttribute(($context["craft"] ?? $this->getContext($context, "craft")), "request", array()), "getClientOs", array(), "method")) {
                case "Mac":
                {
                    // line 228
                    echo "\t\t\t\t<span class=\"shortcut\">";
                    echo twig_escape_filter($this->env, (((((($context["alt"] ?? $this->getContext($context, "alt"))) ? ("⌥") : ("")) . ((($context["shift"] ?? $this->getContext($context, "shift"))) ? ("⇧") : (""))) . "⌘") . ($context["key"] ?? $this->getContext($context, "key"))), "html", null, true);
                    echo "</span>
\t\t\t";
                    break;
                }
                default:
                {
                    // line 230
                    echo "\t\t\t\t<span class=\"shortcut\">";
                    echo twig_escape_filter($this->env, ((("Ctrl+" . ((($context["alt"] ?? $this->getContext($context, "alt"))) ? ("Alt+") : (""))) . ((($context["shift"] ?? $this->getContext($context, "shift"))) ? ("Shift+") : (""))) . ($context["key"] ?? $this->getContext($context, "key"))), "html", null, true);
                    echo "</span>
\t\t";
                }
            }
            // line 232
            echo "\t";
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
        return "_includes/forms";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1362 => 232,  1355 => 230,  1346 => 228,  1341 => 226,  1339 => 225,  1325 => 224,  1307 => 217,  1295 => 216,  1277 => 212,  1272 => 211,  1260 => 210,  1242 => 206,  1239 => 205,  1236 => 204,  1233 => 203,  1221 => 202,  1203 => 198,  1191 => 197,  1173 => 193,  1161 => 192,  1143 => 188,  1131 => 187,  1114 => 182,  1108 => 180,  1105 => 179,  1099 => 177,  1097 => 176,  1093 => 175,  1077 => 174,  1075 => 173,  1072 => 172,  1066 => 170,  1063 => 169,  1051 => 168,  1033 => 164,  1021 => 163,  1003 => 159,  991 => 158,  973 => 154,  961 => 153,  943 => 149,  937 => 146,  933 => 145,  930 => 144,  927 => 143,  915 => 142,  897 => 138,  885 => 137,  867 => 133,  855 => 132,  837 => 128,  825 => 127,  807 => 123,  795 => 122,  777 => 118,  774 => 117,  771 => 116,  768 => 115,  762 => 112,  758 => 111,  755 => 110,  752 => 109,  749 => 108,  737 => 107,  721 => 103,  708 => 102,  692 => 95,  680 => 94,  664 => 90,  652 => 89,  636 => 85,  624 => 84,  608 => 80,  596 => 79,  580 => 75,  568 => 74,  552 => 70,  540 => 69,  524 => 65,  512 => 64,  496 => 60,  484 => 59,  468 => 55,  456 => 54,  440 => 50,  428 => 49,  412 => 45,  400 => 44,  384 => 40,  372 => 39,  356 => 35,  344 => 34,  328 => 30,  316 => 29,  300 => 25,  288 => 24,  272 => 20,  260 => 19,  244 => 15,  232 => 14,  217 => 10,  205 => 9,  189 => 2,  177 => 1,  171 => 222,  167 => 219,  163 => 214,  159 => 208,  155 => 200,  151 => 195,  147 => 190,  143 => 185,  139 => 166,  135 => 161,  131 => 156,  127 => 151,  123 => 140,  119 => 135,  115 => 130,  111 => 125,  107 => 120,  103 => 105,  99 => 100,  95 => 97,  91 => 92,  87 => 87,  83 => 82,  79 => 77,  75 => 72,  71 => 67,  67 => 62,  63 => 57,  59 => 52,  55 => 47,  51 => 42,  47 => 37,  43 => 32,  39 => 27,  35 => 22,  31 => 17,  27 => 12,  23 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro errorList(errors) %}
\t{% include \"_includes/forms/errorList\" %}
{% endmacro %}


{# Inputs #}


{% macro hidden(config) -%}
\t{% include \"_includes/forms/hidden\" with config only %}
{%- endmacro %}


{% macro text(config) %}
\t{% include \"_includes/forms/text\" with config only %}
{% endmacro %}


{% macro password(config) %}
\t{% include \"_includes/forms/text\" with config|merge({ type: 'password' }) only %}
{% endmacro %}


{% macro date(config) %}
\t{% include \"_includes/forms/date\" with config only %}
{% endmacro %}


{% macro time(config) %}
\t{% include \"_includes/forms/time\" with config only %}
{% endmacro %}


{% macro color(config) %}
\t{% include \"_includes/forms/color\" with config only %}
{% endmacro %}


{% macro textarea(config) %}
\t{% include \"_includes/forms/textarea\" with config only %}
{% endmacro %}


{% macro select(config) %}
\t{% include \"_includes/forms/select\" with config only %}
{% endmacro %}


{% macro multiselect(config) %}
\t{% include \"_includes/forms/multiselect\" with config only %}
{% endmacro %}


{% macro checkbox(config) %}
\t{% include \"_includes/forms/checkbox\" with config only %}
{% endmacro %}


{% macro checkboxGroup(config) %}
\t{% include \"_includes/forms/checkboxGroup\" with config only %}
{% endmacro %}


{% macro checkboxSelect(config) %}
\t{% include \"_includes/forms/checkboxSelect\" with config only %}
{% endmacro %}


{% macro radio(config) %}
\t{% include \"_includes/forms/radio\" with config only %}
{% endmacro %}


{% macro radioGroup(config) %}
\t{% include \"_includes/forms/radioGroup\" with config only %}
{% endmacro %}


{% macro file(config) %}
\t{% include \"_includes/forms/file\" with config only %}
{% endmacro %}


{% macro lightswitch(config) %}
\t{% include \"_includes/forms/lightswitch\" with config only %}
{% endmacro %}


{% macro editableTable(config) %}
\t{% include \"_includes/forms/editableTable\" with config only %}
{% endmacro %}


{% macro elementSelect(config) %}
\t{% include \"_includes/forms/elementSelect\" with config only %}
{% endmacro %}


{# Fields #}


{% macro field(config, input) %}
\t{% include \"_includes/forms/field\" with config|merge({ input: input }) only %}
{% endmacro %}


{% macro textField(config) %}
\t{% if config.unit is defined %}
\t\t{% set input %}
\t\t\t<div class=\"flex\">
\t\t\t\t<div class=\"textwrapper\">{{ _self.text(config) }}</div>
\t\t\t\t<div class=\"label light\">{{ config.unit }}</div>
\t\t\t</div>
\t\t{% endset %}
\t{% else %}
\t\t{% set input = _self.text(config) %}
\t{% endif %}
\t{{ _self.field(config, input) }}
{% endmacro %}


{% macro passwordField(config) %}
\t{{ _self.field(config, _self.password(config)) }}
{% endmacro %}


{% macro dateField(config) %}
\t{{ _self.field(config, _self.date(config)) }}
{% endmacro %}


{% macro timeField(config) %}
\t{{ _self.field(config, _self.time(config)) }}
{% endmacro %}


{% macro colorField(config) %}
\t{{ _self.field(config, _self.color(config)) }}
{% endmacro %}


{% macro dateTimeField(config) %}
\t{% set input %}
\t\t<div class=\"datetimewrapper\">
\t\t\t{{ _self.date(config) }}
\t\t\t{{ _self.time(config) }}
\t\t</div>
\t{% endset %}
\t{{ _self.field(config, input) }}
{% endmacro %}


{% macro textareaField(config) %}
\t{{ _self.field(config, _self.textarea(config)) }}
{% endmacro %}


{% macro selectField(config) %}
\t{{ _self.field(config, _self.select(config)) }}
{% endmacro %}


{% macro multiselectField(config) %}
\t{{ _self.field(config, _self.multiselect(config)) }}
{% endmacro %}


{% macro checkboxField(config) %}
\t{% if config.fieldLabel is defined %}
\t\t{{ _self.field(config|merge({label: config.fieldLabel}), _self.checkbox(config)) }}
\t{% else %}
\t\t{% set instructions = config.instructions ?? null -%}
\t\t{% set warning = config.warning ?? null -%}
\t\t<div class=\"field checkboxfield{% if config.first is defined and config.first %} first{% endif %}{% if instructions %} has-instructions{% endif %}\"{% if config.id is defined and config.id %} id=\"{{ config.id }}-field\"{% endif %}>
\t\t\t{{ _self.checkbox(config) }}
\t\t\t{% if instructions %}
\t\t\t\t<div class=\"instructions\">{{ instructions|md }}</div>
\t\t\t{% endif %}
\t\t\t{% if warning %}
\t\t\t\t<p class=\"warning\">{{ warning }}</p>
\t\t\t{% endif %}
\t\t</div>
\t{% endif %}
{% endmacro %}


{% macro checkboxSelectField(config) %}
\t{{ _self.field(config, _self.checkboxSelect(config)) }}
{% endmacro %}


{% macro radioGroupField(config) %}
\t{{ _self.field(config, _self.radioGroup(config)) }}
{% endmacro %}


{% macro fileField(config) %}
\t{{ _self.field(config, _self.file(config)) }}
{% endmacro %}


{% macro lightswitchField(config) %}
\t{% if config.labelId is not defined or not config.labelId %}
\t\t{% set config = config|merge({ labelId: 'label'~random() }) %}
\t{% endif %}
\t{{ _self.field(config, _self.lightswitch(config)) }}
{% endmacro %}


{% macro editableTableField(config) %}
\t{% set input %}{% include \"_includes/forms/editableTable\" with config only %}{% endset %}
\t{{ _self.field(config, input) }}
{% endmacro %}


{% macro elementSelectField(config) %}
\t{{ _self.field(config, _self.elementSelect(config)) }}
{% endmacro %}


{# Other #}


{% macro optionShortcutLabel(key, shift, alt) %}
\t{%- spaceless %}
\t\t{% switch craft.request.getClientOs() %}
\t\t\t{% case 'Mac' %}
\t\t\t\t<span class=\"shortcut\">{{ (alt ? '⌥') ~ (shift ? '⇧') ~ '⌘' ~ key }}</span>
\t\t\t{% default %}
\t\t\t\t<span class=\"shortcut\">{{ 'Ctrl+' ~ (alt ? 'Alt+') ~ (shift ? 'Shift+') ~ key }}</span>
\t\t{% endswitch %}
\t{% endspaceless -%}
{% endmacro %}
", "_includes/forms", "");
    }
}
