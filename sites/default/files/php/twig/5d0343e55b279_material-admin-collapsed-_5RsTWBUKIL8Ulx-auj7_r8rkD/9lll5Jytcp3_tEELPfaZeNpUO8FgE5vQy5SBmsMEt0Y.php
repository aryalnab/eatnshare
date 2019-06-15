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

/* material-admin-collapsed-form.html.twig */
class __TwigTemplate_dddbc0b083f813578df5103b40a4aff7f7aac59009da34f952c4ecf8594d8342 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 8, "t" => 14];
        $functions = ["attach_library" => 8];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
        // line 7
        echo "
";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("material_admin/collapsed-form"), "html", null, true);
        echo "

<ul class=\"collapsible exposed-form-collapsible\" data-collapsible=\"accordion\">
  <li>
    <div class=\"collapsible-header\">
      <a class=\"btn btn-floating\">
        <i class=\"material-icons\" aria-hidden=\"true\" title=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Filter"));
        echo "\">filter_list</i>
      </a>
      <div class=\"exposed-form-chips\"></div>
    </div>
    <div class=\"collapsible-body\">
      <div class=\"form--inline clearfix\">
        ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
      </div>
    </div>
  </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "material-admin-collapsed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  67 => 14,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "material-admin-collapsed-form.html.twig", "themes/material_admin/templates/form/material-admin-collapsed-form.html.twig");
    }
}
