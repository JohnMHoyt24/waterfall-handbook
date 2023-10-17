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

/* themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig */
class __TwigTemplate_53987f16496edb0887855891fece378fe1b2068486b76fa2c49177804407d8ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 18, "if" => 25, "block" => 29, "include" => 31);
        $filters = array("escape" => 23, "t" => 30);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['escape', 't'],
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
        // line 18
        $context["classes"] = [0 => "block", 1 => "block-search"];
        // line 23
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ">
  ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 24, $this->source), "html", null, true);
        echo "
  ";
        // line 25
        if (($context["label"] ?? null)) {
            // line 26
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 26, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 26, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 28
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 28, $this->source), "html", null, true);
        echo "
  ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "</div>
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <button class=\"header-nav__search-button\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle Search Form"));
        echo "\">
      ";
        // line 31
        $this->loadTemplate("@olivero/../images/search.svg", "themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig", 31)->display($context);
        // line 32
        echo "      <div class=\"header-nav__search-button__close\"></div>
    </button>

    <div";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "search-wide__wrapper"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">
      <div class=\"search-wide__container\">
        <div class=\"search-wide__grid\">
          ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 38, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  112 => 35,  107 => 32,  105 => 31,  100 => 30,  96 => 29,  91 => 43,  89 => 29,  84 => 28,  76 => 26,  74 => 25,  70 => 24,  65 => 23,  63 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig", "/home/cabox/workspace/my-project/web/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig");
    }
}
