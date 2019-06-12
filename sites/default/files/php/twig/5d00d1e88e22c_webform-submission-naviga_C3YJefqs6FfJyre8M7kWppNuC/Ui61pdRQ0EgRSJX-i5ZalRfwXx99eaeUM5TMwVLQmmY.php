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

/* modules/contrib/webform/templates/webform-submission-navigation.html.twig */
class __TwigTemplate_3bca9b9e3a2b6553f3b047f6764d47f31090c293d1d9c9ad7cdd2841d0367200 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17];
        $filters = ["escape" => 18, "t" => 23];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        // line 17
        if ((($context["prev_url"] ?? null) || ($context["next_url"] ?? null))) {
            // line 18
            echo "  <nav id=\"webform-submission-navigation-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_id"] ?? null)), "html", null, true);
            echo "\" class=\"webform-submission-navigation\" role=\"navigation\" aria-labelledby=\"webform-submission-label-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_id"] ?? null)), "html", null, true);
            echo "\">
    <h2 class=\"visually-hidden\" id=\"webform-submission-label-";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_id"] ?? null)), "html", null, true);
            echo "\">Submission navigation links for ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_title"] ?? null)), "html", null, true);
            echo "</h2>
    <ul class=\"webform-submission-pager\">
      ";
            // line 21
            if (($context["prev_url"] ?? null)) {
                // line 22
                echo "        <li class=\"webform-submission-pager__item webform-submission-pager__item--previous\">
          <a href=\"";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_url"] ?? null)), "html", null, true);
                echo "\" rel=\"prev\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\"><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("‹"));
                echo "</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous submission"));
                echo "</a>
        </li>
      ";
            }
            // line 26
            echo "      ";
            if (($context["next_url"] ?? null)) {
                // line 27
                echo "        <li class=\"webform-submission-pager__item webform-submission-pager__item--next\">
          <a href=\"";
                // line 28
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_url"] ?? null)), "html", null, true);
                echo "\" rel=\"next\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next submission"));
                echo " <b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("›"));
                echo "</b></a>
        </li>
      ";
            }
            // line 31
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  94 => 28,  91 => 27,  88 => 26,  76 => 23,  73 => 22,  71 => 21,  64 => 19,  57 => 18,  55 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-submission-navigation.html.twig", "/var/www/html/eatnshare/modules/contrib/webform/templates/webform-submission-navigation.html.twig");
    }
}
