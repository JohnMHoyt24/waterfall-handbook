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

/* themes/olivero/templates/field/field--comment.html.twig */
class __TwigTemplate_52a82da506e5092ccb8acf6c5a8d7998db050cf19b292ea0a21cb56e02c248d7 extends \Twig\Template
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
        $tags = array("if" => 34);
        $filters = array("escape" => 31);
        $functions = array("attach_library" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 30
        echo "
";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/comments"), "html", null, true);
        echo "
<section";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "comments"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
        echo ">

  ";
        // line 34
        if ((($context["comments"] ?? null) &&  !($context["label_hidden"] ?? null))) {
            // line 35
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 35, $this->source), "html", null, true);
            echo "
    <h2";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "comments__title"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 36, $this->source), "html", null, true);
            echo " <span class=\"comments__count\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 36, $this->source), "html", null, true);
            echo "</span></h2>
    ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 37, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if (($context["comment_form"] ?? null)) {
            // line 41
            echo "    <div class=\"add-comment\">
      ";
            // line 42
            if (($context["user_picture"] ?? null)) {
                // line 43
                echo "      <div class=\"add-comment__picture-wrapper comment-picture\">
        <div class=\"add-comment__picture comment-picture__image\">
          ";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 45, $this->source), "html", null, true);
                echo "
        </div>
      </div>
      ";
            }
            // line 49
            echo "      <div class=\"add-comment__form\">
        ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null), 50, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 54
        echo "
  ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null), 55, $this->source), "html", null, true);
        echo "

</section>
";
    }

    public function getTemplateName()
    {
        return "themes/olivero/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 55,  125 => 54,  118 => 50,  115 => 49,  108 => 45,  104 => 43,  102 => 42,  99 => 41,  97 => 40,  94 => 39,  89 => 37,  81 => 36,  76 => 35,  74 => 34,  69 => 32,  65 => 31,  62 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/olivero/templates/field/field--comment.html.twig", "/home/cabox/workspace/my-project/web/themes/olivero/templates/field/field--comment.html.twig");
    }
}
