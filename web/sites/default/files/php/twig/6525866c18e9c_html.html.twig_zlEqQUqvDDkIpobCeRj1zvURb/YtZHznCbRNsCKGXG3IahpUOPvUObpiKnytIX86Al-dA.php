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

/* themes/basic/templates/html.html.twig */
class __TwigTemplate_56329f9d21528a2a298da2888b4738de18bde6442ba229f07879f3bc55e4b4e9 extends \Twig\Template
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
        $tags = array("if" => 34, "set" => 51, "for" => 52);
        $filters = array("escape" => 35, "safe_join" => 47, "merge" => 53, "clean_class" => 53, "render" => 56, "t" => 68);
        $functions = array("attach_library" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'safe_join', 'merge', 'clean_class', 'render', 't'],
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
        // line 33
        echo "<!DOCTYPE html>
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["ie_enabled_versions"] ?? null), "ie8", [], "any", false, false, true, 34)) {
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("basic/ie8"), "html", null, true);
            echo "
";
        }
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["ie_enabled_versions"] ?? null), "ie9", [], "any", false, false, true, 37) || twig_get_attribute($this->env, $this->source, ($context["ie_enabled_versions"] ?? null), "ie8", [], "any", false, false, true, 37))) {
            // line 38
            echo "  <!--[if lt IE 7]>     <html";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", [0 => "no-js", 1 => "lt-ie9", 2 => "lt-ie8", 3 => "lt-ie7"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "><![endif]-->
  <!--[if IE 7]>        <html";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "removeClass", [0 => "lt-ie7"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "><![endif]-->
  <!--[if IE 8]>        <html";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "removeClass", [0 => "lt-ie8"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "><![endif]-->
  <!--[if gt IE 8]><!--><html";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "removeClass", [0 => "lt-ie9"], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "><!--<![endif]-->
";
        } else {
            // line 43
            echo "<html";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 43, $this->source), "html", null, true);
            echo ">
";
        }
        // line 45
        echo "  <head>
    <head-placeholder token=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 46, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 47, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 48, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 49, $this->source), "html", null, true);
        echo "\">
  </head>
  ";
        // line 51
        $context["classes"] = [];
        // line 52
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, true, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 53
            echo "    ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 53, $this->source), [0 => ("role--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["role"], 53, $this->source)))]);
            // line 54
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
  ";
        // line 56
        $context["sidebar_first"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 56), 56, $this->source));
        // line 57
        echo "  ";
        $context["sidebar_second"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 57), 57, $this->source));
        // line 58
        echo "  <body";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => (( !        // line 59
($context["is_front"] ?? null)) ? ("with-subnav") : ("")), 2 => ((        // line 60
($context["sidebar_first"] ?? null)) ? ("sidebar-first") : ("")), 3 => ((        // line 61
($context["sidebar_second"] ?? null)) ? ("sidebar-second") : ("")), 4 => ((((        // line 62
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null)) || (($context["sidebar_second"] ?? null) &&  !($context["sidebar_first"] ?? null)))) ? ("one-sidebar") : ("")), 5 => (((        // line 63
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("two-sidebars") : ("")), 6 => ((( !        // line 64
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("no-sidebar") : (""))], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        // line 65
        echo ">
    <div id=\"skip\">
      <a href=\"#main-menu\" class=\"visually-hidden focusable skip-link\">
        ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main navigation"));
        echo "
      </a>
    </div>
    ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 71, $this->source), "html", null, true);
        echo "
    ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 72, $this->source), "html", null, true);
        echo "
    ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 73, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 74, $this->source), "html", null, true);
        echo "\">
    ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["browser_sync"] ?? null), "enabled", [], "any", false, false, true, 75)) {
            // line 76
            echo "      <script id=\"__bs_script__\">
      document.write(\"<script async src='http://";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["browser_sync"] ?? null), "host", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo ":";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["browser_sync"] ?? null), "port", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "/browser-sync/browser-sync-client.js'><\\/script>\".replace(\"HOST\", location.hostname));
      </script>
    ";
        }
        // line 80
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 80,  183 => 77,  180 => 76,  178 => 75,  174 => 74,  170 => 73,  166 => 72,  162 => 71,  156 => 68,  151 => 65,  149 => 64,  148 => 63,  147 => 62,  146 => 61,  145 => 60,  144 => 59,  142 => 58,  139 => 57,  137 => 56,  134 => 55,  128 => 54,  125 => 53,  120 => 52,  118 => 51,  113 => 49,  109 => 48,  105 => 47,  101 => 46,  98 => 45,  92 => 43,  87 => 41,  83 => 40,  79 => 39,  74 => 38,  72 => 37,  67 => 35,  65 => 34,  62 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/basic/templates/html.html.twig", "/home/cabox/workspace/my-project/web/themes/basic/templates/html.html.twig");
    }
}
