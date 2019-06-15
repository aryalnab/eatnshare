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

/* @material_admin/misc/description.html.twig */
class __TwigTemplate_827959a75da9466c3693fe2c07cf23eac8944e6c39e86dd0ed099af8ce1d2eb3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 14, "if" => 20];
        $filters = ["escape" => 30, "e" => 31];
        $functions = ["create_attribute" => 24, "render_var" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'e'],
                ['create_attribute', 'render_var']
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
        echo "
";
        // line 14
        $context["description_classes"] = [0 => "description", 1 => (((        // line 16
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 19
        echo "
";
        // line 20
        if ( !twig_test_iterable(($context["description"] ?? null))) {
            // line 21
            echo "  ";
            // line 22
            $context["description"] = ["content" =>             // line 23
($context["description"] ?? null), "attributes" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute([])];
        }
        // line 28
        echo "
";
        // line 29
        if ( !twig_test_empty($this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 30
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">
    <a class=\"tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-html=\"true\" data-tooltip=\"";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", []))), "html_attr");
            echo "\"> <i class=\"material-icons\" aria-hidden=\"true\">help_outline</i> Info </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@material_admin/misc/description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  77 => 30,  75 => 29,  72 => 28,  69 => 23,  68 => 22,  66 => 21,  64 => 20,  61 => 19,  59 => 16,  58 => 14,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@material_admin/misc/description.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/misc/description.html.twig");
    }
}
