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

/* themes/material_admin/templates/buttons/input--submit.html.twig */
class __TwigTemplate_5accd861a683f28e0a25a340c4d98b843efdfab91482ae6c6673a7aedfeeddf7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 14, "if" => 19];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
        // line 13
        echo "
";
        // line 14
        $context["nowrap"] = [0 => ((preg_match("/^edit-options-expose-button.*\$/", $this->getAttribute(        // line 15
($context["attributes"] ?? null), "id", []))) ? ("no-wrap") : (""))];
        // line 18
        echo "
";
        // line 19
        if (($this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "visually-hidden"], "method") || $this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "js-hide"], "method"))) {
            // line 20
            echo "  <input";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "js-hide"], "method")), "html", null, true);
            echo " />";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 22
            echo "  ";
            // line 23
            echo "  ";
            if ( !($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["nowrap"] ?? null)], "method"), "hasClass", [0 => "no-wrap"], "method") || $this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "add-display"], "method"))) {
                // line 24
                echo "    <i class=\"waves-effect waves-light waves-input-wrapper button btn\">
      <input";
                // line 25
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "waves-button-input"], "method")), "html", null, true);
                echo " />";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
                echo "
    </i>
  ";
            } else {
                // line 28
                echo "    <input";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
                echo " />";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/buttons/input--submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  82 => 25,  79 => 24,  76 => 23,  74 => 22,  66 => 20,  64 => 19,  61 => 18,  59 => 15,  58 => 14,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/buttons/input--submit.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/buttons/input--submit.html.twig");
    }
}
