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

/* themes/custom/wallet/templates/field--block-content--field-links--social-links.html.twig */
class __TwigTemplate_130d5ea391ec9b01cbbe31bb8f225df7 extends Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/wallet/templates/field--block-content--field-links--social-links.html.twig"));

        // line 41
        $context["classes"] = ["list-unstyled list-inline mb-0 social-icons"];
        // line 46
        $context["title_classes"] = ["field__label", (((        // line 48
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 51
        echo "
<ul";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
        echo ">
  ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "    <li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 54), "addClass", ["list-inline-item me-3"], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo ">
      ";
            // line 55
            $context["url"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 55)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), "toString", [], "any", false, false, true, 55);
            // line 56
            echo "      <a class=\"text-black\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 56, $this->source), "html", null, true);
            echo "\">
        ";
            // line 57
            if (twig_in_filter("facebook", ($context["url"] ?? null))) {
                // line 58
                echo "          <i class=\"fab fa-facebook-f\"></i>
        ";
            } elseif (twig_in_filter("instagram",             // line 59
($context["url"] ?? null))) {
                // line 60
                echo "          <i class=\"fab fa-instagram\"></i>
        ";
            } elseif (twig_in_filter("twitter",             // line 61
($context["url"] ?? null))) {
                // line 62
                echo "          <i class=\"fab fa-twitter\"></i>
        ";
            } else {
                // line 64
                echo "          <i class=\"fa fa-box\"></i>
        ";
            }
            // line 66
            echo "      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</ul>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label_display", "attributes", "items"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/wallet/templates/field--block-content--field-links--social-links.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  98 => 69,  90 => 66,  86 => 64,  82 => 62,  80 => 61,  77 => 60,  75 => 59,  72 => 58,  70 => 57,  65 => 56,  63 => 55,  58 => 54,  54 => 53,  50 => 52,  47 => 51,  45 => 48,  44 => 46,  42 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/wallet/templates/field--block-content--field-links--social-links.html.twig", "/var/www/html/web/themes/custom/wallet/templates/field--block-content--field-links--social-links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "for" => 53, "if" => 57);
        static $filters = array("escape" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
}
