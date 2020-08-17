<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/aaom/templates/views/views-view-unformatted--content-view--block-1.html.twig */
class __TwigTemplate_843a0694db0ba78637d1dd170324c5345df0ee14ebd1777e336f1f0186e79a48 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 20, "for" => 23, "set" => 25];
        $filters = ["escape" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 18
        echo "<div id=\"homeSlider\" class=\"carousel slide homeslider\" data-ride=\"carousel\">
\t<div class=\"carousel-inner\">
\t\t";
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "\t\t\t<h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
\t\t";
        }
        // line 23
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "\t\t\t";
            // line 25
            $context["row_classes"] = [0 => ((            // line 26
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 29
            echo "\t\t\t";
            if ($this->getAttribute($context["loop"], "first", [])) {
                // line 30
                echo "\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method")), "html", null, true);
            echo ">
\t\t\t\t\t\t";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</div>
\t<a class=\"carousel-control-prev\" href=\"#homeSlider\" role=\"button\" data-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t</a>
\t<a class=\"carousel-control-next\" href=\"#homeSlider\" role=\"button\" data-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/aaom/templates/views/views-view-unformatted--content-view--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  106 => 35,  101 => 34,  97 => 32,  93 => 30,  90 => 29,  88 => 26,  87 => 25,  85 => 24,  67 => 23,  61 => 21,  59 => 20,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}
<div id=\"homeSlider\" class=\"carousel slide homeslider\" data-ride=\"carousel\">
\t<div class=\"carousel-inner\">
\t\t{% if title %}
\t\t\t<h3>{{ title }}</h3>
\t\t{% endif %}
\t\t{% for row in rows %}
\t\t\t{%
    \t\tset row_classes = [
      \tdefault_row_class ? 'views-row',
    \t]
  \t\t%}
\t\t\t{% if loop.first %}
\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div{{row.attributes.addClass(row_classes)}}>
\t\t\t\t\t\t{{ row.content }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t{% endfor %}
\t</div>
\t<a class=\"carousel-control-prev\" href=\"#homeSlider\" role=\"button\" data-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t</a>
\t<a class=\"carousel-control-next\" href=\"#homeSlider\" role=\"button\" data-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t</a>
</div>
", "themes/custom/aaom/templates/views/views-view-unformatted--content-view--block-1.html.twig", "/home/arjun/Downloads/aaomdev/themes/custom/aaom/templates/views/views-view-unformatted--content-view--block-1.html.twig");
    }
}
