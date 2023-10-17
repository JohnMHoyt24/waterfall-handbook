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

/* themes/vani/templates/layout/page--front.html.twig */
class __TwigTemplate_de3c86e634eea00eca51f83bad5b085774eb93a7383c47c5baee2aadcfa8056e extends \Twig\Template
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
        $tags = array("include" => 11, "if" => 15);
        $filters = array("escape" => 21);
        $functions = array("attach_library" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library']
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
        // line 11
        $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/vani/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  ";
        // line 13
        $this->loadTemplate("@vani/template-parts/content_home.html.twig", "themes/vani/templates/layout/page--front.html.twig", 13)->display($context);
        // line 14
        echo "  <div class=\"container\">
    ";
        // line 15
        if (($context["front_sidebar"] ?? null)) {
            // line 16
            echo "      <div class=\"main-container\">
    ";
        }
        // line 18
        echo "    <main id=\"main\" class=\"page-content home-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 20
        echo "      ";
        $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/vani/templates/layout/page--front.html.twig", 20)->display($context);
        // line 21
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
      ";
        // line 22
        $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/vani/templates/layout/page--front.html.twig", 22)->display($context);
        // line 23
        echo "    </main>
    ";
        // line 24
        if (($context["front_sidebar"] ?? null)) {
            // line 25
            echo "      ";
            $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/vani/templates/layout/page--front.html.twig", 25)->display($context);
            // line 26
            echo "      ";
            $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/vani/templates/layout/page--front.html.twig", 26)->display($context);
            // line 27
            echo "      </div> ";
            // line 28
            echo "    ";
        }
        // line 29
        echo "  </div> ";
        // line 30
        echo "</div>";
        // line 31
        $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/vani/templates/layout/page--front.html.twig", 31)->display($context);
        // line 32
        if (($context["slider_show"] ?? null)) {
            // line 33
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/slider"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/vani/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  113 => 32,  111 => 31,  109 => 30,  107 => 29,  104 => 28,  102 => 27,  99 => 26,  96 => 25,  94 => 24,  91 => 23,  89 => 22,  84 => 21,  81 => 20,  78 => 18,  74 => 16,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  62 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/vani/templates/layout/page--front.html.twig", "/home/cabox/workspace/my-project/web/themes/vani/templates/layout/page--front.html.twig");
    }
}
