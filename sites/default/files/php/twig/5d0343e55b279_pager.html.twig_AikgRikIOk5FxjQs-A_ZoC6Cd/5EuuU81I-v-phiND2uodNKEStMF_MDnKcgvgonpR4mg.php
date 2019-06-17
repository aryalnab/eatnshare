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

/* themes/material_admin/templates/navigation/pager.html.twig */
class __TwigTemplate_2e5a77d8f07fc86d0212033c96f30ddbbca14901202e53b5f2ba1b5b75b51ec4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 32, "for" => 60, "set" => 63];
        $filters = ["t" => 34, "escape" => 39, "without" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'escape', 'without'],
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
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items pagination\">
      ";
            // line 37
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 38
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", [])), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\"><i class=\"material-icons\">first_page</i></span>

          </a>
        </li>
      ";
            }
            // line 46
            echo "      ";
            // line 47
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 48
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 49
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 50
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\"><i class=\"material-icons\">keyboard_arrow_left</i></span>
          </a>
        </li>
      ";
            }
            // line 55
            echo "      ";
            // line 56
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "previous", [])) {
                // line 57
                echo "        <li class=\"pager__item pager__item--ellipsis waves-effect\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 59
            echo "      ";
            // line 60
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 61
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" active") : ("")));
                echo " waves-effect\">
          ";
                // line 62
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 63
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 64
                    echo "          ";
                } else {
                    // line 65
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 66
                    echo "          ";
                }
                // line 67
                echo "          <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 69
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 71
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                // line 72
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "      ";
            // line 76
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "next", [])) {
                // line 77
                echo "        <li class=\"pager__item pager__item--ellipsis waves-effect\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 79
            echo "      ";
            // line 80
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 81
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 82
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 83
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\"><i class=\"material-icons\">keyboard_arrow_right</i></span>
          </a>
        </li>
      ";
            }
            // line 88
            echo "      ";
            // line 89
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 90
                echo "        <li class=\"pager__item pager__item--last\">
          <a href=\"";
                // line 91
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", [])), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 92
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page"));
                echo "</span>
            <span aria-hidden=\"true\"><i class=\"material-icons\">last_page</i></span>
          </a>
        </li>
      ";
            }
            // line 97
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 97,  220 => 92,  212 => 91,  209 => 90,  206 => 89,  204 => 88,  196 => 83,  188 => 82,  185 => 81,  182 => 80,  180 => 79,  176 => 77,  173 => 76,  171 => 75,  163 => 72,  161 => 71,  157 => 69,  147 => 67,  144 => 66,  141 => 65,  138 => 64,  135 => 63,  133 => 62,  128 => 61,  123 => 60,  121 => 59,  117 => 57,  114 => 56,  112 => 55,  104 => 50,  96 => 49,  93 => 48,  90 => 47,  88 => 46,  79 => 40,  71 => 39,  68 => 38,  65 => 37,  60 => 34,  57 => 33,  55 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/navigation/pager.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/navigation/pager.html.twig");
    }
}
