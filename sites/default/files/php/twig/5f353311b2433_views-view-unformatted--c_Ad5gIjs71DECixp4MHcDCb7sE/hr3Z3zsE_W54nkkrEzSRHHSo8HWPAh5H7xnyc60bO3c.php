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

/* themes/custom/aaom/templates/views/views-view-unformatted--content-view--block-3.html.twig */
class __TwigTemplate_d91b4804ea8d3624f5a19a6cb8c8cea6774de506c8b56f319579e9fcb8e64619 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 21, "for" => 24, "set" => 26];
        $filters = ["escape" => 22];
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
        echo "<div class=\"mt-3 mb-3\">
\t<aside class=\"sidebar\">
\t\t<div class=\"news-widget mb-4\">
\t\t\t";
        // line 21
        if (($context["title"] ?? null)) {
            // line 22
            echo "\t\t\t\t<h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
\t\t\t";
        }
        // line 24
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "\t\t\t\t";
            // line 26
            $context["row_classes"] = [0 => ((            // line 27
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 30
            echo "\t\t\t<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method"), "removeClass", [0 => "row"], "method")), "html", null, true);
            echo ">
\t\t\t\t";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t</div>
\t</aside>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/aaom/templates/views/views-view-unformatted--content-view--block-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  83 => 31,  78 => 30,  76 => 27,  75 => 26,  73 => 25,  68 => 24,  62 => 22,  60 => 21,  55 => 18,);
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
<div class=\"mt-3 mb-3\">
\t<aside class=\"sidebar\">
\t\t<div class=\"news-widget mb-4\">
\t\t\t{% if title %}
\t\t\t\t<h3>{{ title }}</h3>
\t\t\t{% endif %}
\t\t\t{% for row in rows %}
\t\t\t\t{%
\t\t\t\tset row_classes = [
\t\t\t\tdefault_row_class ? 'views-row',
\t\t\t]
\t\t\t%}
\t\t\t<div{{row.attributes.addClass(row_classes).removeClass('row')}}>
\t\t\t\t{{ row.content }}
\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</aside>
</div>
", "themes/custom/aaom/templates/views/views-view-unformatted--content-view--block-3.html.twig", "/home/arjun/Project/cynaweb/aaomnewcivicrm/aaom/themes/custom/aaom/templates/views/views-view-unformatted--content-view--block-3.html.twig");
    }
}
