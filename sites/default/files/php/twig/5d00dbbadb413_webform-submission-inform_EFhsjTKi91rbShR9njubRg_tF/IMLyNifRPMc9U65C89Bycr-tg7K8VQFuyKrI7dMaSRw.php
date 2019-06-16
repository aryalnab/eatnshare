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

/* modules/contrib/webform/templates/webform-submission-information.html.twig */
class __TwigTemplate_7b8f8443cfae6094cb64ffe9238107de05291d5639bcc8dfefb37fa2ba583e01 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 33];
        $filters = ["t" => 34, "escape" => 34];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
        // line 33
        if (($context["submissions_view"] ?? null)) {
            // line 34
            echo "  <div><b>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["serial"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission ID"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sid"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission UUID"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uuid"] ?? null)), "html", null, true);
            echo "</div>
  ";
            // line 37
            if (($context["uri"] ?? null)) {
                // line 38
                echo "    <div><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission URI"));
                echo ":</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uri"] ?? null)), "html", null, true);
                echo "</div>
  ";
            }
            // line 40
            echo "  ";
            if (($context["token_update"] ?? null)) {
                // line 41
                echo "    <div><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Update"));
                echo ":</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token_update"] ?? null)), "html", null, true);
                echo "</div>
  ";
            }
            // line 43
            echo "  <br />
  <div><b>";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Completed"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["completed"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Changed"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["changed"] ?? null)), "html", null, true);
            echo "</div>
  <br />
  <div><b>";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Remote IP address"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remote_addr"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted by"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_by"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Language"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language"] ?? null)), "html", null, true);
            echo "</div>
  <br />
  <div><b>";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Is draft"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_draft"] ?? null)), "html", null, true);
            echo "</div>
  ";
            // line 53
            if (($context["current_page"] ?? null)) {
                // line 54
                echo "    <div><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Current page"));
                echo ":</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_page"] ?? null)), "html", null, true);
                echo "</div>
  ";
            }
            // line 56
            echo "  <div><b>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Webform"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform"] ?? null)), "html", null, true);
            echo "</div>
  ";
            // line 57
            if (($context["submitted_to"] ?? null)) {
                // line 58
                echo "    <div><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted to"));
                echo ":</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_to"] ?? null)), "html", null, true);
                echo "</div>
  ";
            }
            // line 60
            echo "  ";
            if (((($context["sticky"] ?? null) || ($context["locked"] ?? null)) || ($context["notes"] ?? null))) {
                // line 61
                echo "    <br />
    ";
                // line 62
                if (($context["sticky"] ?? null)) {
                    // line 63
                    echo "      <div><b>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Flagged"));
                    echo ":</b> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky"] ?? null)), "html", null, true);
                    echo "</div>
    ";
                }
                // line 65
                echo "    ";
                if (($context["locked"] ?? null)) {
                    // line 66
                    echo "      <div><b>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Locked"));
                    echo ":</b> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["locked"] ?? null)), "html", null, true);
                    echo "</div>
    ";
                }
                // line 68
                echo "    ";
                if (($context["notes"] ?? null)) {
                    // line 69
                    echo "      <div><b>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Notes"));
                    echo ":</b><br/>
      <pre>";
                    // line 70
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["notes"] ?? null)), "html", null, true);
                    echo "</pre>
      </div>
    ";
                }
                // line 73
                echo "  ";
            }
            // line 74
            echo "
";
        } else {
            // line 76
            echo "  <div><b>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["serial"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
            echo "</div>
";
        }
        // line 79
        echo "
";
        // line 80
        if (($context["delete"] ?? null)) {
            // line 81
            echo "  <br/>
  <div>";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["delete"] ?? null)), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 82,  238 => 81,  236 => 80,  233 => 79,  226 => 77,  219 => 76,  215 => 74,  212 => 73,  206 => 70,  201 => 69,  198 => 68,  190 => 66,  187 => 65,  179 => 63,  177 => 62,  174 => 61,  171 => 60,  163 => 58,  161 => 57,  154 => 56,  146 => 54,  144 => 53,  138 => 52,  131 => 50,  125 => 49,  119 => 48,  112 => 46,  106 => 45,  100 => 44,  97 => 43,  89 => 41,  86 => 40,  78 => 38,  76 => 37,  70 => 36,  64 => 35,  57 => 34,  55 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-submission-information.html.twig", "/var/www/html/eatnshare/modules/contrib/webform/templates/webform-submission-information.html.twig");
    }
}
