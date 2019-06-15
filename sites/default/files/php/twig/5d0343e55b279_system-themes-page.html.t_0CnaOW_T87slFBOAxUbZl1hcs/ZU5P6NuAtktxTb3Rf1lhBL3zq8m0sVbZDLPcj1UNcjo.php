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

/* themes/material_admin/templates/admin/system-themes-page.html.twig */
class __TwigTemplate_02b6c109939b19f384eacea554155e785fb397e218ccc0abcb95cf634d79bfae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 32, "set" => 34, "if" => 58];
        $filters = ["escape" => 31, "safe_join" => 59];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join'],
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
        // line 31
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 33
            echo "    ";
            // line 34
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 36
$context["theme_group"], "state", []))), 2 => "clearfix"];
            // line 40
            echo "   <div class=\"row\"><h2 class=\"small-header col s12\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "title", [])), "html", null, true);
            echo "</h2></div>
    <div";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme_group"], "attributes", []), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 44
                echo "        ";
                // line 45
                $context["theme_classes"] = [0 => (($this->getAttribute(                // line 46
$context["theme"], "is_default", [])) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 47
$context["theme"], "is_admin", [])) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "col", 4 => "s12", 5 => "m6", 6 => "l4", 7 => "xl3"];
                // line 56
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme"], "attributes", []), "addClass", [0 => ($context["theme_classes"] ?? null)], "method")), "html", null, true);
                echo ">
          <div class=\"card large sticky-action\">
                         ";
                // line 58
                if (($this->getAttribute($context["theme"], "notes", []) && $this->getAttribute($context["theme"], "is_admin", []))) {
                    // line 59
                    echo "                 <span class=\"theme-status-indicator\"> <i class=\"material-icons\">edit</i> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "notes", [])), ", "));
                    echo "</span>
                ";
                }
                // line 61
                echo "              ";
                if (($this->getAttribute($context["theme"], "notes", []) && $this->getAttribute($context["theme"], "is_default", []))) {
                    // line 62
                    echo "                 <span class=\"theme-status-indicator\"><i class=\"material-icons\">star</i> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "notes", [])), ", "));
                    echo "</span>";
                }
                // line 64
                echo "<div class=\"card-image waves-effect waves-block waves-light\">
              ";
                // line 65
                if ($this->getAttribute($context["theme"], "screenshot", [])) {
                    echo " <span class=\"activator\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "screenshot", [])), "html", null, true);
                    echo "</span> ";
                }
                // line 66
                echo "            </div>
            <div class=\"card-content theme-info\">
              <span class=\"card-title activator grey-text text-darken-4\"><span class=\"theme-name\">";
                // line 68
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "name", [])), "html", null, true);
                echo "</span><i class=\"material-icons right\" aria-hidden=\"true\">more_vert</i></span>
            </div>
            <div class=\"card-reveal\">
              <span class=\"card-title grey-text text-darken-4\">";
                // line 71
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "name", [])), "html", null, true);
                echo "<i class=\"material-icons right\" aria-hidden=\"true\">close</i></span>
              <p>";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "description", [])), "html", null, true);
                echo "</p>
              <p> ";
                // line 73
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "version", [])), "html", null, true);
                echo "</p>
            </div>
            <div class=\"card-action\">
              ";
                // line 76
                echo " 
              ";
                // line 77
                if ($this->getAttribute($context["theme"], "incompatible", [])) {
                    // line 78
                    echo "              <div class=\"incompatible\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "incompatible", [])), "html", null, true);
                    echo "</div>
              ";
                } else {
                    // line 79
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "operations", [])), "html", null, true);
                    echo " ";
                }
                // line 80
                echo "            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/admin/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 86,  169 => 84,  160 => 80,  155 => 79,  149 => 78,  147 => 77,  144 => 76,  138 => 73,  134 => 72,  130 => 71,  124 => 68,  120 => 66,  114 => 65,  111 => 64,  106 => 62,  103 => 61,  97 => 59,  95 => 58,  89 => 56,  87 => 47,  86 => 46,  85 => 45,  83 => 44,  79 => 43,  74 => 41,  69 => 40,  67 => 36,  66 => 34,  64 => 33,  60 => 32,  55 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/admin/system-themes-page.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/admin/system-themes-page.html.twig");
    }
}
