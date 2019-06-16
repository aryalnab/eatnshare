<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/material_admin/templates/form/form-element--select.html.twig */
class __TwigTemplate_3c7c6c404afda80d82aaa17e92b63bbd68056f870d555a65760ff97885e36116 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 12, "if" => 34, "include" => 58];
        $filters = ["clean_class" => 15, "escape" => 33];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 15
($context["type"] ?? null)))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 16
($context["type"] ?? null)))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 17
($context["name"] ?? null)))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["name"] ?? null)))), 6 => (((        // line 19
($context["select_default"] ?? null) == "false")) ? ("input-field") : ("")), 7 => ((        // line 20
($context["select_default"] ?? null)) ? ("input-field-browser-default") : ("")), 8 => (((        // line 21
($context["label_display"] ?? null) == "none")) ? ("form-no-label") : ("")), 9 => ((twig_in_filter(        // line 22
($context["label_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-has-label") : ("")), 10 => (((        // line 23
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 11 => (((        // line 24
($context["prefix"] ?? null) &&  !($context["suffix"] ?? null))) ? ("has-prefix") : ("")), 12 => (((        // line 25
($context["suffix"] ?? null) &&  !($context["prefix"] ?? null))) ? ("has-suffix") : ("")), 13 => (((        // line 26
($context["prefix"] ?? null) && ($context["suffix"] ?? null))) ? ("has-prefix-and-suffix") : ("")), 14 => ((        // line 27
($context["errors"] ?? null)) ? ("form-item--error") : ("")), 15 => ((preg_match("/value=\"[^\"]+\"/",         // line 28
($context["children"] ?? null))) ? ("has-initial-content") : ("")), 16 => ((preg_match("/placeholder=\"[^\"]+\"/",         // line 29
($context["children"] ?? null))) ? ("has-placeholder") : ("")), 17 => (((        // line 30
($context["description_display"] ?? null) == "after")) ? ("has-description-after") : (""))];
        // line 33
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 34
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 35
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 37
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 38
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "attributes", [])), "html", null, true);
            echo ">
      ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 42
        echo "  ";
        if ((($context["label_display"] ?? null) && ($context["select_default"] ?? null))) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 45
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
  ";
        // line 46
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 47
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 49
        echo "  ";
        if ((($context["label_display"] ?? null) &&  !($context["select_default"] ?? null))) {
            // line 50
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 52
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 53
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "</strong>
    </div>
  ";
        }
        // line 57
        echo "  ";
        if (twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"])) {
            // line 58
            echo "    ";
            $this->loadTemplate("@material_admin/misc/description.html.twig", "themes/material_admin/templates/form/form-element--select.html.twig", 58)->display($context);
            // line 59
            echo "  ";
        }
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/form/form-element--select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 60,  149 => 59,  146 => 58,  143 => 57,  137 => 54,  134 => 53,  131 => 52,  125 => 50,  122 => 49,  116 => 47,  114 => 46,  109 => 45,  103 => 43,  100 => 42,  94 => 39,  89 => 38,  86 => 37,  80 => 35,  78 => 34,  73 => 33,  71 => 30,  70 => 29,  69 => 28,  68 => 27,  67 => 26,  66 => 25,  65 => 24,  64 => 23,  63 => 22,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  58 => 17,  57 => 16,  56 => 15,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/form/form-element--select.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/form/form-element--select.html.twig");
    }
}
