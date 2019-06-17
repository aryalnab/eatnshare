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

/* themes/material_admin/templates/form/form-element.html.twig */
class __TwigTemplate_028fcabd2ebbaa4e303f93edb5a6a5899680c266f4761e46c59fb858d5d2ed7b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 48, "if" => 70, "include" => 94];
        $filters = ["clean_class" => 51, "escape" => 69];
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
        // line 48
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 51
($context["type"] ?? null)))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["type"] ?? null)))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["name"] ?? null)))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null)))), 6 => (((        // line 55
($context["label_display"] ?? null) == "none")) ? ("form-no-label") : ("")), 7 => ((twig_in_filter(        // line 56
($context["label_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-has-label") : ("")), 8 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 9 => ((twig_in_filter(        // line 58
($context["type"] ?? null), [0 => "textfield", 1 => "select", 2 => "password", 3 => "email", 4 => "number", 5 => "tel", 6 => "search", 7 => "url", 8 => "path", 9 => "entity_autocomplete", 10 => "file", 11 => "managed_file", 12 => "upload"])) ? ("input-field") : ("")), 10 => ((twig_in_filter(        // line 59
($context["type"] ?? null), [0 => "file", 1 => "managed_file", 2 => "upload"])) ? ("file-field") : ("")), 11 => (((        // line 60
($context["prefix"] ?? null) &&  !($context["suffix"] ?? null))) ? ("has-prefix") : ("")), 12 => (((        // line 61
($context["suffix"] ?? null) &&  !($context["prefix"] ?? null))) ? ("has-suffix") : ("")), 13 => (((        // line 62
($context["prefix"] ?? null) && ($context["suffix"] ?? null))) ? ("has-prefix-and-suffix") : ("")), 14 => ((        // line 63
($context["errors"] ?? null)) ? ("form-item--error") : ("")), 15 => ((preg_match("/value=\"[^\"]+\"/",         // line 64
($context["children"] ?? null))) ? ("has-initial-content") : ("")), 16 => ((preg_match("/placeholder=\"[^\"]+\"/",         // line 65
($context["children"] ?? null))) ? ("has-placeholder") : ("")), 17 => (((        // line 66
($context["description_display"] ?? null) == "after")) ? ("has-description-after") : (""))];
        // line 69
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 70
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 71
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 73
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 74
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 76
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 77
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "attributes", [])), "html", null, true);
            echo ">
      ";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 81
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
  ";
        // line 82
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 83
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 85
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 86
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 88
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 89
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "</strong>
    </div>
  ";
        }
        // line 93
        echo "  ";
        if (twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"])) {
            // line 94
            echo "    ";
            $this->loadTemplate("@material_admin/misc/description.html.twig", "themes/material_admin/templates/form/form-element.html.twig", 94)->display($context);
            // line 95
            echo "  ";
        }
        // line 96
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 96,  149 => 95,  146 => 94,  143 => 93,  137 => 90,  134 => 89,  131 => 88,  125 => 86,  122 => 85,  116 => 83,  114 => 82,  109 => 81,  103 => 78,  98 => 77,  95 => 76,  89 => 74,  86 => 73,  80 => 71,  78 => 70,  73 => 69,  71 => 66,  70 => 65,  69 => 64,  68 => 63,  67 => 62,  66 => 61,  65 => 60,  64 => 59,  63 => 58,  62 => 57,  61 => 56,  60 => 55,  59 => 54,  58 => 53,  57 => 52,  56 => 51,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/form/form-element.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/form/form-element.html.twig");
    }
}
