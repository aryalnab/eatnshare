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

/* themes/material_admin/templates/layout/page.html.twig */
class __TwigTemplate_8ab4b4699a80a714295b4244ac5df589b31b16767d0b01361d295094333f3bef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 46, "include" => 53, "if" => 59];
        $filters = ["escape" => 58];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
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
        // line 45
        echo "
 ";
        // line 46
        $context["breadcrumb_nav_classes"] = [0 => ((        // line 47
($context["has_breadcrumbs"] ?? null)) ? ("breadcrumb-section-wrapper") : ("")), 1 => (( !        // line 48
($context["has_breadcrumbs"] ?? null)) ? ("breadcrumb-section-wrapper-empty") : (""))];
        // line 51
        echo "
<div class=\"layout-container\">
  ";
        // line 53
        $this->loadTemplate("@material_admin/misc/notification-drawer.html.twig", "themes/material_admin/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        echo "  <header class=\"header-wrapper z-depth-2\" role=\"banner\">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      ";
        // line 57
        $this->loadTemplate("@material_admin/misc/notification-trigger.html.twig", "themes/material_admin/templates/layout/page.html.twig", 57)->display($context);
        // line 58
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo " 
      ";
        // line 59
        if ($this->getAttribute(($context["page"] ?? null), "status", [])) {
            // line 60
            echo "        </div>
      ";
        }
        // line 62
        echo "    </div>
  </header>
  <section";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["breadcrumb_nav_classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
        ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
    </div>
    </div>
  </section>
  <section class=\"highlighted-wrapper\">
      ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
  </section>
  <main role=\"main-wrapper\">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 78
        echo "      <div class=\"layout-content\">
        ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </div>";
        // line 80
        echo " ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 81
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
      ";
        }
        // line 84
        echo " ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 85
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
      ";
        }
        // line 89
        echo "    </div>
    </div>
  </main>
  ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 93
            echo "  <footer role=\"contentinfo\">
    <div clas=\"row material-container\">
      ";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </div>
  </footer>
  ";
        }
        // line 99
        echo "</div>";
        // line 100
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 100,  161 => 99,  154 => 95,  150 => 93,  148 => 92,  143 => 89,  137 => 86,  134 => 85,  131 => 84,  125 => 82,  122 => 81,  119 => 80,  115 => 79,  112 => 78,  104 => 72,  96 => 67,  90 => 64,  86 => 62,  82 => 60,  80 => 59,  75 => 58,  73 => 57,  68 => 54,  66 => 53,  62 => 51,  60 => 48,  59 => 47,  58 => 46,  55 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/layout/page.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/layout/page.html.twig");
    }
}
