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

/* themes/material_admin/templates/node/node-add-list.html.twig */
class __TwigTemplate_8f78444fc79a8882553a0d5d542e757139042364dd57b06b8adcc8373a11e0db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 18, "trans" => 20, "for" => 21, "set" => 28];
        $filters = ["escape" => 22];
        $functions = ["path" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'for', 'set'],
                ['escape'],
                ['path']
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
        // line 18
        if ( !twig_test_empty(($context["types"] ?? null))) {
            // line 19
            echo "  <div class=\"collection with-header\">
    <div class=\"collection-item row\"><h4 class=\"collection-item-title col s12\">";
            // line 20
            echo t("Add New Content", array());
            echo "</h4></div>
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
            foreach ($context['_seq'] as $context["type_id"] => $context["type"]) {
                // line 22
                echo "      <a class=\"collection-item row\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("node.add", ["node_type" => $context["type_id"]]), "html", null, true);
                echo "\">
       <span class=\"collection-item-title col s12\" >";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "label", [])), "html", null, true);
                echo "</span> <span class=\"collection-item-description col s12\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["type"], "description", [])), "html", null, true);
                echo "</span></a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type_id'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</div>
";
        } else {
            // line 27
            echo "  <p>
    ";
            // line 28
            $context["create_content"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("node.type_add");
            // line 29
            echo "    ";
            echo t("You have not created any content types yet. Go to the <a href=\"@create_content\" class=\"btn\">content type creation page</a> to add a new content type.", array("@create_content" =>             // line 30
($context["create_content"] ?? null), ));
            // line 32
            echo "  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/material_admin/templates/node/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  94 => 30,  92 => 29,  90 => 28,  87 => 27,  83 => 25,  73 => 23,  68 => 22,  64 => 21,  60 => 20,  57 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/material_admin/templates/node/node-add-list.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/node/node-add-list.html.twig");
    }
}
