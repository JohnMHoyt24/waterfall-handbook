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

/* core/themes/claro/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_607d66877cb2e730325b1daa58eb91d549be4f5ce501e65dc61875a1b24234c8 extends \Twig\Template
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
        $tags = array("if" => 20, "include" => 22);
        $filters = array("escape" => 18, "t" => 21);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
        echo "<li";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "tabs__tab", 1 => "js-tab", 2 => ((($context["is_active"] ?? null)) ? ("is-active") : ("")), 3 => ((($context["is_active"] ?? null)) ? ("js-active-tab") : (""))], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 19, $this->source), "html", null, true);
        echo "
  ";
        // line 20
        if ((($context["is_active"] ?? null) && (($context["level"] ?? null) == "primary"))) {
            // line 21
            echo "    <button class=\"reset-appearance tabs__trigger\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tabs display toggle"));
            echo "\" data-drupal-nav-tabs-trigger>
      ";
            // line 22
            $this->loadTemplate("@claro/../images/src/hamburger-menu.svg", "core/themes/claro/templates/navigation/menu-local-task.html.twig", 22)->display($context);
            // line 23
            echo "    </button>
  ";
        }
        // line 25
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/navigation/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  80 => 23,  78 => 22,  73 => 21,  71 => 20,  67 => 19,  62 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a local task link.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper element.
 * - is_active: Whether the task item is an active tab.
 * - link: A rendered link element.
 * - level: The menu level where the tab is rendered.
 *
 * Note: This template renders the content for each task item in
 * menu-local-tasks.html.twig.
 *
 * @see template_preprocess_menu_local_task()
 */
#}
<li{{ attributes.addClass('tabs__tab', 'js-tab', is_active ? 'is-active', is_active ? 'js-active-tab') }}>
  {{ link }}
  {% if is_active and level == 'primary' %}
    <button class=\"reset-appearance tabs__trigger\" aria-label=\"{{ 'Tabs display toggle'|t }}\" data-drupal-nav-tabs-trigger>
      {% include \"@claro/../images/src/hamburger-menu.svg\" %}
    </button>
  {% endif %}
</li>
", "core/themes/claro/templates/navigation/menu-local-task.html.twig", "/home/cabox/workspace/my-project/web/core/themes/claro/templates/navigation/menu-local-task.html.twig");
    }
}
