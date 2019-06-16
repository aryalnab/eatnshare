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

/* @material_admin/misc/notification-drawer.html.twig */
class __TwigTemplate_e8faaa1948e4084a178e0696e6e612ffb653bc347dfe33c88bdd8e3ed8e2b1be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 10, "if" => 16];
        $filters = ["escape" => 11];
        $functions = ["url" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if'],
                ['escape'],
                ['url']
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
        // line 8
        echo "<div id=\"messageContainer\" class=\"modal bottom-sheet\">
  <div class=\"modal-content\">
    <h4 class=\"notification-title\">";
        // line 10
        echo t("Message Notifications", array());
        echo "</h4>
    <div class=\"allmessages\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "status", [])), "html", null, true);
        echo "
    </div>
  </div>
  <div class=\"modal-footer\">
    <a data-href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">";
        // line 15
        echo t("Close", array());
        echo "</a>
   ";
        // line 16
        if (($context["dblog_link"] ?? null)) {
            echo " <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("dblog.overview"));
            echo "\" class=\"modal-action modal-close waves-effect btn-flat\">";
            echo t("View DB Log", array());
            echo "</a> ";
        }
        // line 17
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@material_admin/misc/notification-drawer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  74 => 16,  70 => 15,  63 => 11,  59 => 10,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@material_admin/misc/notification-drawer.html.twig", "/var/www/html/eatnshare/themes/material_admin/templates/misc/notification-drawer.html.twig");
    }
}
