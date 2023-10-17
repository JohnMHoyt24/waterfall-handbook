<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @vani/template-parts/header.html.twig */
class __TwigTemplate_b3c77f0f3a0f6784e5c821f77f64cede65a8af8a70d1e173c37e54014de1d9e2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("include" => 1, "if" => 10);
        $filters = array("escape" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@vani/template-parts/header-top-blocks.html.twig", "@vani/template-parts/header.html.twig", 1)->display($context);
        // line 2
        echo "<header class=\"header\">
  <div class=\"header-cicle header-cicle1\"></div>
  <div class=\"header-cicle header-cicle3\"></div>
  <div class=\"header-cicle header-cicle4\"></div>
  <div class=\"header-cicle header-cicle6\"></div>
  <div class=\"header-cicle header-cicle7\"></div>
  <div class=\"header-cicle header-cicle8\"></div>
  <div class=\"header-cicle header-cicle10\"></div>
  ";
        // line 10
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 11
            echo "  <div class=\"header-cicle header-cicle2\"></div>
  <div class=\"header-cicle header-cicle5\"></div>
  <div class=\"header-cicle header-cicle9\"></div>
  ";
        }
        // line 15
        echo "  <div class=\"container\">
  <div class=\"header-main\">
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 17)) {
            // line 18
            echo "      <div class=\"site-brand\">
        ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
      </div> <!--/.site-branding -->
    ";
        }
        // line 22
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 22) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 22))) {
            // line 23
            echo "      <div class=\"header-main-right\">
        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 24)) {
                // line 25
                echo "          <div class=\"mobile-menu\"><i class=\"icon-menu\"></i></div> ";
                // line 26
                echo "          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->
        ";
            }
            // line 33
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 33)) {
                // line 34
                echo "          ";
                $this->loadTemplate("@vani/template-parts/search.html.twig", "@vani/template-parts/header.html.twig", 34)->display($context);
                // line 35
                echo "        ";
            }
            // line 36
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 38
        echo "  </div><!-- /header-main -->
  </div><!-- /container -->
  ";
        // line 40
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 41
            echo "    ";
            $this->loadTemplate("@vani/template-parts/slider.html.twig", "@vani/template-parts/header.html.twig", 41)->display($context);
            // line 42
            echo "  ";
        } elseif ( !($context["is_front"] ?? null)) {
            // line 43
            echo "    ";
            $this->loadTemplate("@vani/template-parts/page_header.html.twig", "@vani/template-parts/header.html.twig", 43)->display($context);
            // line 44
            echo "  ";
        }
        // line 45
        echo "</header>
";
        // line 46
        $this->loadTemplate("@vani/template-parts/highlighted.html.twig", "@vani/template-parts/header.html.twig", 46)->display($context);
    }

    public function getTemplateName()
    {
        return "@vani/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 46,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  138 => 41,  136 => 40,  132 => 38,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  112 => 29,  107 => 26,  105 => 25,  103 => 24,  100 => 23,  97 => 22,  91 => 19,  88 => 18,  86 => 17,  82 => 15,  76 => 11,  74 => 10,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vani/template-parts/header.html.twig", "/home/cabox/workspace/my-project/web/themes/vani/templates/template-parts/header.html.twig");
    }
}
