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

/* themes/basic/templates/page.html.twig */
class __TwigTemplate_59af00e747d832bb1d1e6ec2512d6fc9531f7d693c67d3fe3f2ad0f43492da67 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 11);
        $filters = array("render" => 1, "escape" => 3);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape'],
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
        $context["main_menu"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 1), 1, $this->source));
        // line 2
        $context["secondary_menu"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 2), 2, $this->source));
        // line 3
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "layout-container", 1 => (((        // line 5
($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) ? ("with-navigation") : ("")), 2 => ((        // line 6
($context["secondary_menu"] ?? null)) ? ("with-subnav") : (""))], "method", false, false, true, 3), 3, $this->source), "html", null, true);
        // line 7
        echo ">

  <!-- ______________________ HEADER _______________________ -->

  ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 11)) {
            // line 12
            echo "    <header id=\"header\">
      <div class=\"container\">
        <div id=\"header-region\">
          ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </header><!-- /#header -->
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 22
            echo "    <nav id=\"navigation\" class=\"menu";
            if (($context["main_menu"] ?? null)) {
                echo " with-primary";
            }
            if (($context["secondary_menu"] ?? null)) {
                echo " with-secondary";
            }
            echo "\">
      <div class=\"container\">
        ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null), 24, $this->source), "html", null, true);
            echo "
        ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null), 25, $this->source), "html", null, true);
            echo "
      </div>
    </nav><!-- /#navigation -->
  ";
        }
        // line 29
        echo "
  <!-- ______________________ MAIN _______________________ -->

  <div id=\"main\">
    <div class=\"container\">
      <div id=\"content-wrapper\">
        <section id=\"content\">

          <div id=\"content-header\">

            ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "

            ";
        // line 41
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 41))) {
            // line 42
            echo "              <div id=\"highlighted\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</div>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        echo "

            ";
        // line 47
        if (($context["title"] ?? null)) {
            // line 48
            echo "              <h1 class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 48, $this->source), "html", null, true);
            echo "</h1>
            ";
        }
        // line 50
        echo "
            ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 51, $this->source), "html", null, true);
        echo "
            ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "

            ";
        // line 54
        if (($context["tabs"] ?? null)) {
            // line 55
            echo "              <div class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 55, $this->source), "html", null, true);
            echo "</div>
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        if (($context["action_links"] ?? null)) {
            // line 59
            echo "              <ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 59, $this->source), "html", null, true);
            echo "</ul>
            ";
        }
        // line 61
        echo "
          </div><!-- /#content-header -->

          <div id=\"content-area\">
            ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
          </div>

        </section><!-- /#content -->

        ";
        // line 70
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 70))) {
            // line 71
            echo "          <aside id=\"sidebar-first\" class=\"column sidebar first\">
            ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
          </aside><!-- /#sidebar-first -->
        ";
        }
        // line 75
        echo "
        ";
        // line 76
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 76))) {
            // line 77
            echo "          <aside id=\"sidebar-second\" class=\"column sidebar second\">
            ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
          </aside><!-- /#sidebar-second -->
        ";
        }
        // line 81
        echo "
      </div><!-- /#content-wrapper -->
    </div><!-- /.container -->
  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

  ";
        // line 88
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 88))) {
            // line 89
            echo "    <footer id=\"footer\">
      <div class=\"container\">
        <div id=\"footer-region\">
          ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </footer><!-- /#footer -->
  ";
        }
        // line 97
        echo "
</div><!-- /.layout-container -->
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 97,  246 => 92,  241 => 89,  239 => 88,  230 => 81,  224 => 78,  221 => 77,  219 => 76,  216 => 75,  210 => 72,  207 => 71,  205 => 70,  197 => 65,  191 => 61,  185 => 59,  183 => 58,  180 => 57,  174 => 55,  172 => 54,  167 => 52,  163 => 51,  160 => 50,  154 => 48,  152 => 47,  147 => 45,  144 => 44,  138 => 42,  136 => 41,  131 => 39,  119 => 29,  112 => 25,  108 => 24,  97 => 22,  95 => 21,  92 => 20,  84 => 15,  79 => 12,  77 => 11,  71 => 7,  69 => 6,  68 => 5,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/basic/templates/page.html.twig", "/home/cabox/workspace/my-project/web/themes/basic/templates/page.html.twig");
    }
}
