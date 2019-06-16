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

/* themes/material_admin/templates/navigation/links--dropbutton.html.twig */
class __TwigTemplate_92893ba7e0ff438c6fc231d52c032b722b24fa37218b670eb251c0b96161ba7b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 35, "if" => 37, "trans" => 54, "for" => 59];
        $filters = ["escape" => 47, "length" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
                ['escape', 'length'],
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
        // line 34
        echo "
";
        // line 35
        $context["manage_btn_classses"] = "dropdown-button btn grey lighten-3 grey-text text-darken-2";
        // line 36
        echo "  
";
        // line 37
        if (($this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "views-ui-settings-bucket-operations"], "method") || ($this->getAttribute(($context["attributes"] ?? null), "id", []) == "views-display-extra-actions"))) {
            // line 38
            echo "  ";
            $context["btn_classses"] = "dropdown-button ellipsis-icon btn btn-flat darken-3 text-darken-2";
        } elseif ($this->getAttribute(        // line 39
($context["attributes"] ?? null), "hasClass", [0 => "views-bulk-form-dropdown"], "method")) {
            // line 40
            echo "  ";
            $context["btn_classses"] = "dropdown-button btn btn-floating pulse";
        } else {
            // line 42
            echo "  ";
            $context["btn_classses"] = "dropdown-button ellipsis-icon btn grey lighten-3 grey-text text-darken-2";
        }
        // line 44
        if (($context["links"] ?? null)) {
            // line 45
            if (($context["heading"] ?? null)) {
                // line 46
                if ($this->getAttribute(($context["heading"] ?? null), "level", [])) {
                    // line 47
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "level", [])), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "attributes", [])), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "text", [])), "html", null, true);
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "level", [])), "html", null, true);
                    echo ">";
                } else {
                    // line 49
                    echo "<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "attributes", [])), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "text", [])), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 52
            if ((twig_length_filter($this->env, ($context["links"] ?? null)) > 1)) {
                // line 53
                if ($this->getAttribute(($context["links"] ?? null), "publish", [])) {
                    // line 54
                    echo "<a class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["manage_btn_classses"] ?? null)), "html", null, true);
                    echo "\" href=\"#\" data-constrainWidth=\"0\">";
                    echo t("MANAGE", array());
                    echo "</a>";
                } else {
                    // line 56
                    echo "<a class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_classses"] ?? null)), "html", null, true);
                    echo "\" href=\"#\" data-constrainWidth=\"0\"><i class=\"material-icons\" aria-hidden=\"true\">more_vert</i></a>";
                }
                // line 58
                echo "<ul";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "dropdown-content"], "method")), "html", null, true);
                echo ">";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 60
                    echo "<li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                    echo ">";
                    // line 61
                    if ($this->getAttribute($context["item"], "link", [])) {
                        // line 62
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "link", [])), "html", null, true);
                    } elseif ($this->getAttribute(                    // line 63
$context["item"], "text_attributes", [])) {
                        // line 64
                        echo "<span";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text_attributes", [])), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                        echo "</span>";
                    } else {
                        // line 66
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    }
                    // line 68
                    echo "</li>
      <li class=\"divider\"></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "</ul>";
            } else {
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 74
                    echo "<li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "single-btn-wrapper"], "method")), "html", null, true);
                    echo ">";
                    // line 75
                    if ($this->getAttribute($context["item"], "link", [])) {
                        // line 76
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "link", [])), "html", null, true);
                    } elseif ($this->getAttribute(                    // line 77
$context["item"], "text_attributes", [])) {
                        // line 78
                        echo "<span";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text_attributes", [])), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                        echo "</span>";
                    } else {
                        // line 80
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    }
                    // line 82
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/navigation/links--dropbutton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 82,  177 => 80,  170 => 78,  168 => 77,  166 => 76,  164 => 75,  160 => 74,  156 => 73,  153 => 71,  146 => 68,  143 => 66,  136 => 64,  134 => 63,  132 => 62,  130 => 61,  126 => 60,  122 => 59,  118 => 58,  113 => 56,  106 => 54,  104 => 53,  102 => 52,  94 => 49,  84 => 47,  82 => 46,  80 => 45,  78 => 44,  74 => 42,  70 => 40,  68 => 39,  65 => 38,  63 => 37,  60 => 36,  58 => 35,  55 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/navigation/links--dropbutton.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/navigation/links--dropbutton.html.twig");
    }
}
