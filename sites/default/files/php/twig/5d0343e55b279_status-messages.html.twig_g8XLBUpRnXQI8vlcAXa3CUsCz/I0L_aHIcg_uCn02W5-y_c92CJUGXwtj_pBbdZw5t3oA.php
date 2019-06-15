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

/* themes/material_admin/templates/misc/status-messages.html.twig */
class __TwigTemplate_2f51e0fbfb5438090dc658be8bc5a2528e4337d449d162ea642c600156618b8d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 25, "for" => 26, "set" => 28, "if" => 35];
        $filters = ["escape" => 24, "without" => 34, "length" => 38, "first" => 59];
        $functions = ["attach_library" => 24];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
                ['attach_library']
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
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("material_admin/notifications"), "html", null, true);
        echo "
";
        // line 25
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = [])
    {
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  ";
            // line 28
            $context["classes"] = [0 => "messages", 1 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 30
$context["type"])), 2 => "ma-status-messages"];
            // line 34
            echo "<div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label"), "html", null, true);
            echo ">
  ";
            // line 35
            if (($context["type"] == "error")) {
                // line 36
                echo "  <div role=\"alert\">
    ";
            }
            // line 37
            echo " ";
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 38
                echo "    <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</h2> ";
            }
            echo " ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 39
                echo "    <div class=\"row\">
      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-content\">
            <div class=\"message-header\"> <span class=\"card-title\"><span class=\"message-number\">";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "</span>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "s</span></div>
            <ol class=\"messages__list message-content\">
              ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 46
                    echo "              <li class=\"messages__item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "            </ol>
          </div>
        </div>
      </div>
    </div>
    ";
            } else {
                // line 54
                echo "    <div class=\"row\">
      <div class=\"col s12\">
        <div class=\"card\">
          <div class=\"card-content\">
            <div class=\"message-header\"><span class=\"card-title\">";
                // line 58
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</span></div>
            <div class=\"message-content\">";
                // line 59
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "</div>
          </div>
        </div>
      </div>
    </div>
    ";
            }
            // line 64
            echo " ";
            if (($context["type"] == "error")) {
                // line 65
                echo "  </div>
  ";
            }
            // line 67
            echo "</div>
  ";
            // line 69
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 69,  158 => 67,  154 => 65,  151 => 64,  142 => 59,  138 => 58,  132 => 54,  124 => 48,  115 => 46,  111 => 45,  104 => 43,  98 => 39,  91 => 38,  88 => 37,  84 => 36,  82 => 35,  75 => 34,  73 => 30,  72 => 28,  70 => 27,  66 => 26,  60 => 25,  56 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/misc/status-messages.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/misc/status-messages.html.twig");
    }
}
