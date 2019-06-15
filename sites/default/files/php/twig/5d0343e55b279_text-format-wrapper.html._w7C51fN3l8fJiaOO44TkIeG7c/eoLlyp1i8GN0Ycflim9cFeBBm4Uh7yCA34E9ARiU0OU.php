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

/* themes/material_admin/templates/content-edit/text-format-wrapper.html.twig */
class __TwigTemplate_7116d424771b51e3d2754bdf2847a113e1fee802e07b9ec8f588dd26a8d45f62 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 20, "set" => 22, "include" => 26];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
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
        // line 16
        echo "
<div class=\"js-text-format-wrapper text-format-wrapper js-form-item\">
 \t";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
 
  ";
        // line 20
        if (($context["description"] ?? null)) {
            // line 21
            echo "    ";
            // line 22
            $context["classes"] = [0 => ((            // line 23
($context["aria_description"] ?? null)) ? ("description") : (""))];
            // line 26
            echo "    ";
            $this->loadTemplate("@material_admin/misc/description.html.twig", "themes/material_admin/templates/content-edit/text-format-wrapper.html.twig", 26)->display($context);
            // line 27
            echo "  ";
        }
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/content-edit/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  74 => 27,  71 => 26,  69 => 23,  68 => 22,  66 => 21,  64 => 20,  59 => 18,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/content-edit/text-format-wrapper.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/content-edit/text-format-wrapper.html.twig");
    }
}
