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

/* core/themes/claro/templates/form-element.html.twig */
class __TwigTemplate_3adda25d91f0cd5458459f66a045be84e6f266b37ab965e9d7d2106d1661059b extends \Twig\Template
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
        $tags = array("set" => 16, "if" => 36);
        $filters = array("clean_class" => 19, "escape" => 35);
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
        // line 16
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 19
($context["type"] ?? null), 19, $this->source))), 3 => ("form-type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 20
($context["type"] ?? null), 20, $this->source))), 4 => ((twig_in_filter(        // line 21
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? ("form-type--boolean") : ("")), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 22
($context["name"] ?? null), 22, $this->source))), 6 => ("form-item--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 23
($context["name"] ?? null), 23, $this->source))), 7 => ((!twig_in_filter(        // line 24
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-item--no-label") : ("")), 8 => (((        // line 25
($context["disabled"] ?? null) == "disabled")) ? ("form-item--disabled") : ("")), 9 => ((        // line 26
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 30
        $context["description_classes"] = [0 => "form-item__description", 1 => (((        // line 32
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 35
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">
  ";
        // line 36
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 37
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 37, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 39
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 40
            echo "    <span class=\"form-item__prefix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["disabled"] ?? null) == "disabled")) ? (" is-disabled") : ("")));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 40, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 42
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 42))) {
            // line 43
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 43), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
            echo ">
      ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 47
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 47, $this->source), "html", null, true);
        echo "
  ";
        // line 48
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 49
            echo "    <span class=\"form-item__suffix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["disabled"] ?? null) == "disabled")) ? (" is-disabled") : ("")));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 49, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 51
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 52
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 52, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 54
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 55
            echo "    <div class=\"form-item__error-message\">
      ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 56, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 59
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 59))) {
            // line 60
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 60), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
            echo ">
      ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 64
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 64,  157 => 61,  152 => 60,  149 => 59,  143 => 56,  140 => 55,  137 => 54,  131 => 52,  128 => 51,  120 => 49,  118 => 48,  113 => 47,  107 => 44,  102 => 43,  99 => 42,  91 => 40,  88 => 39,  82 => 37,  80 => 36,  75 => 35,  73 => 32,  72 => 30,  70 => 26,  69 => 25,  68 => 24,  67 => 23,  66 => 22,  65 => 21,  64 => 20,  63 => 19,  62 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a form element.
 *
 * @todo Remove when https://www.drupal.org/node/3010558 is fixed.
 *
 * @see template_preprocess_form_element()
 */
#}
{#
  Most of core-provided js assumes that the CSS class pattern js-form-item-[something] or
  js-form-type-[something] exists on form items. We have to keep them.
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-type-' ~ type|clean_class,
    'form-type--' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? 'form-type--boolean',
    'js-form-item-' ~ name|clean_class,
    'form-item--' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-item--no-label',
    disabled == 'disabled' ? 'form-item--disabled',
    errors ? 'form-item--error',
  ]
%}
{%
  set description_classes = [
    'form-item__description',
    description_display == 'invisible' ? 'visually-hidden',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {% if label_display in ['before', 'invisible'] %}
    {{ label }}
  {% endif %}
  {% if prefix is not empty %}
    <span class=\"form-item__prefix{{disabled == 'disabled' ? ' is-disabled'}}\">{{ prefix }}</span>
  {% endif %}
  {% if description_display == 'before' and description.content %}
    <div{{ description.attributes.addClass(description_classes) }}>
      {{ description.content }}
    </div>
  {% endif %}
  {{ children }}
  {% if suffix is not empty %}
    <span class=\"form-item__suffix{{disabled == 'disabled' ? ' is-disabled'}}\">{{ suffix }}</span>
  {% endif %}
  {% if label_display == 'after' %}
    {{ label }}
  {% endif %}
  {% if errors %}
    <div class=\"form-item__error-message\">
      {{ errors }}
    </div>
  {% endif %}
  {% if description_display in ['after', 'invisible'] and description.content %}
    <div{{ description.attributes.addClass(description_classes) }}>
      {{ description.content }}
    </div>
  {% endif %}
</div>
", "core/themes/claro/templates/form-element.html.twig", "/home/cabox/workspace/my-project/web/core/themes/claro/templates/form-element.html.twig");
    }
}