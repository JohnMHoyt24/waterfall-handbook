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

/* core/themes/claro/templates/form/input.html.twig */
class __TwigTemplate_0a99e424d0f79050819779a3945827bc48656bc151e45287cb75e7efb05f1d04 extends \Twig\Template
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
        $tags = array("apply" => 14, "if" => 15);
        $filters = array("escape" => 17, "spaceless" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if'],
                ['escape', 'spaceless'],
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
        // line 14
        ob_start();
        // line 15
        if (($context["autocomplete_message"] ?? null)) {
            // line 16
            echo "  <div class=\"claro-autocomplete\">
    <input";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 17, $this->source), "html", null, true);
            echo "/>
    <div hidden class=\"claro-autocomplete__message\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["autocomplete_message"] ?? null), 18, $this->source), "html", null, true);
            echo "</div>
  </div>
  ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 20, $this->source), "html", null, true);
            echo "
";
        } else {
            // line 22
            echo "  <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 22, $this->source), "html", null, true);
            echo "/>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 22, $this->source), "html", null, true);
            echo "
";
        }
        $___internal_d7a339db95e7ca32b30fa0edc9119ced4dd926a7a5e7a398288516ecaeaf27de_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_d7a339db95e7ca32b30fa0edc9119ced4dd926a7a5e7a398288516ecaeaf27de_));
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  83 => 22,  78 => 20,  73 => 18,  69 => 17,  66 => 16,  64 => 15,  62 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 *
 * @see template_preprocess_input()
 * @see claro_preprocess_input()
 */
#}
{% apply spaceless %}
{% if autocomplete_message %}
  <div class=\"claro-autocomplete\">
    <input{{ attributes }}/>
    <div hidden class=\"claro-autocomplete__message\">{{autocomplete_message}}</div>
  </div>
  {{ children }}
{% else %}
  <input{{ attributes }}/>{{ children }}
{% endif %}
{% endapply %}
", "core/themes/claro/templates/form/input.html.twig", "/home/cabox/workspace/my-project/web/core/themes/claro/templates/form/input.html.twig");
    }
}
