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

/* themes/vani/templates/views/views-view.html.twig */
class __TwigTemplate_efde61c53b0ad5d7478507840e266df83400de3d9b1aeb74f6b33c9ae118e223 extends \Twig\Template
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
        $tags = array("set" => 34, "if" => 44);
        $filters = array("clean_class" => 36, "escape" => 39);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
        // line 34
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source)))];
        // line 39
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
  ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 40, $this->source), "html", null, true);
        echo "
  ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 41, $this->source), "html", null, true);
        echo "
  ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 42, $this->source), "html", null, true);
        echo "

  ";
        // line 44
        if (($context["header"] ?? null)) {
            // line 45
            echo "    <div class=\"view-header\">
      ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 46, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if (($context["exposed"] ?? null)) {
            // line 51
            echo "    <div class=\"view-filters\">
      ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 52, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 55
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 56
            echo "    <div class=\"view-attachment view-attachment-before\">
      ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 57, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if (($context["rows"] ?? null)) {
            // line 62
            echo "    <div class=\"view-content\">
      ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 63, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 65
($context["empty"] ?? null)) {
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 66, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if (($context["pager"] ?? null)) {
            // line 70
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 70, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 72
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 73
            echo "    <div class=\"view-attachment view-attachment-after\">
      ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 74, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 77
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 78
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 78, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 80
        echo "
  ";
        // line 81
        if (($context["footer"] ?? null)) {
            // line 82
            echo "    <div class=\"view-footer\">
      ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 83, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 86
        echo "
  ";
        // line 87
        if (($context["feed_icons"] ?? null)) {
            // line 88
            echo "    <div class=\"feed-icons\">
      ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 89, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 92
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/vani/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 92,  194 => 89,  191 => 88,  189 => 87,  186 => 86,  180 => 83,  177 => 82,  175 => 81,  172 => 80,  166 => 78,  163 => 77,  157 => 74,  154 => 73,  151 => 72,  145 => 70,  143 => 69,  140 => 68,  135 => 66,  133 => 65,  128 => 63,  125 => 62,  123 => 61,  120 => 60,  114 => 57,  111 => 56,  108 => 55,  102 => 52,  99 => 51,  97 => 50,  94 => 49,  88 => 46,  85 => 45,  83 => 44,  78 => 42,  74 => 41,  70 => 40,  65 => 39,  63 => 36,  62 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/vani/templates/views/views-view.html.twig", "/home/cabox/workspace/my-project/web/themes/vani/templates/views/views-view.html.twig");
    }
}
