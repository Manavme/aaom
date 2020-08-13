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

/* themes/custom/aaom/templates/layout/page.html.twig */
class __TwigTemplate_dd70bd03a431cbef46c530f00f8aa44102c85495752c27baf82edabc7c8f6635 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 73, "if" => 122];
        $filters = ["escape" => 126, "t" => 74];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape', 't'],
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
        // line 70
        echo "<div id=\"page-wrapper\">
\t<div id=\"page\">

\t\t";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 121
        echo "
\t\t";
        // line 122
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 123
            echo "\t\t\t";
            if (($context["is_front"] ?? null)) {
                // line 124
                echo "\t\t\t\t<section class=\"donation-block pt-3 pb-3\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
                // line 126
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t";
            } else {
                // line 130
                echo "\t\t\t\t<div class=\"breadcrumb-nav\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
                // line 132
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 136
            echo "\t\t";
        }
        // line 137
        echo "
\t\t";
        // line 138
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 139
            echo "\t\t\t<div class=\"highlighted\">
\t\t\t\t<aside class=\"";
            // line 140
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
\t\t\t\t\t";
            // line 141
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
\t\t\t\t</aside>
\t\t\t</div>
\t\t";
        }
        // line 145
        echo "\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 146
            echo "\t\t\t";
            $this->displayBlock('featured', $context, $blocks);
            // line 153
            echo "\t\t";
        }
        // line 154
        echo "
\t\t<div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
\t\t\t";
        // line 156
        $this->displayBlock('content', $context, $blocks);
        // line 183
        echo "\t\t</div>
\t\t";
        // line 184
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])) {
            // line 185
            echo "\t\t\t<div class=\"featured-bottom president-adrs\">
\t\t\t\t<aside class=\"";
            // line 186
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " clearfix\" role=\"complementary\">
\t\t\t\t\t";
            // line 187
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
\t\t\t\t</aside>
\t\t\t</div>
\t\t";
        }
        // line 191
        echo "\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) {
            // line 192
            echo "\t\t\t<div class=\"featured-bottom news-sec\">
\t\t\t\t<aside class=\"";
            // line 193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " clearfix\" role=\"complementary\">
\t\t\t\t\t";
            // line 194
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])), "html", null, true);
            echo "
\t\t\t\t</aside>
\t\t\t</div>
\t\t";
        }
        // line 198
        echo "
\t\t";
        // line 199
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])) {
            // line 200
            echo "\t\t\t<section class=\"membership-section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-md-4 mt-3 mb-3\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope-open-text mr-2\"></i>
\t\t\t\t\t\t\t\tSubscribe</h2>
\t\t\t\t\t\t\t<p>Subscribe to our news and Stay Informed !</p>
\t\t\t\t\t\t\t<form class=\"d-flex\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Enter your email\" class=\"form-control\">
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"subscribe\" value=\"Subscribe\" class=\"btn\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t\t\t<div class=\"col-md-7 mt-3 mb-3\">
\t\t\t\t\t\t\t";
            // line 216
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t<a href=\"#\">Sign Up Now!</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t";
        }
        // line 223
        echo "\t\t<footer>
\t\t\t";
        // line 224
        $this->displayBlock('footer', $context, $blocks);
        // line 241
        echo "\t\t</footer>
\t</div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        // line 74
        echo "\t\t\t<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
\t\t\t\t";
        // line 75
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", []) || $this->getAttribute(($context["page"] ?? null), "top_header", [])) || $this->getAttribute(($context["page"] ?? null), "top_header_form", []))) {
            // line 76
            echo "\t\t\t\t\t<nav";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_top_attributes"] ?? null), "addClass", [0 => "head-top"], "method")), "html", null, true);
            echo ">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t<div class=\"brand\">
\t\t\t\t\t\t\t\t";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 82
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", [])) {
                // line 83
                echo "\t\t\t\t\t\t\t\t<div class=\"form-inline navbar-form ml-auto right-panel\">
\t\t\t\t\t\t\t\t\t";
                // line 84
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_form", [])), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 90
        echo "\t\t\t</header>
\t\t\t<nav";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => "navbar-dark main-Nav"], "method"), "removeAttribute", [0 => "id"], "method")), "html", null, true);
        echo ">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 93
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 94
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 97
            echo "\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
\t\t\t\t\t\t\t";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 105
            echo "\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t</div>
\t\t\t</nav>
\t\t\t";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "header_form", [])) {
            // line 110
            echo "\t\t\t\t";
            if (($context["is_front"] ?? null)) {
                // line 111
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_form", [])), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 113
                echo "\t\t\t\t\t<section class=\"banner\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t";
                // line 115
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_form", [])), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t";
            }
            // line 119
            echo "\t\t\t";
        }
        // line 120
        echo "\t\t";
    }

    // line 146
    public function block_featured($context, array $blocks = [])
    {
        // line 147
        echo "\t\t\t\t<div class=\"featured-top\">
\t\t\t\t\t<aside class=\"featured-top__inner section ";
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " clearfix\" role=\"complementary\">
\t\t\t\t\t\t";
        // line 149
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
        echo "
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t";
    }

    // line 156
    public function block_content($context, array $blocks = [])
    {
        // line 157
        echo "\t\t\t\t<div id=\"main\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">

\t\t\t\t\t<div class=\"row row-offcanvas row-offcanvas-left clearfix\">
\t\t\t\t\t\t<main";
        // line 160
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t\t\t\t\t\t";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</main>
\t\t\t\t\t\t";
        // line 166
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 167
            echo "\t\t\t\t\t\t\t<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null)), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t";
            // line 169
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 173
        echo "\t\t\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 174
            echo "\t\t\t\t\t\t\t<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["sidebar_second_attributes"] ?? null), "addClass", [0 => "sidebar"], "method")), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t";
            // line 176
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 224
    public function block_footer($context, array $blocks = [])
    {
        // line 225
        echo "\t\t\t\t<div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 226
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 227
            echo "\t\t\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t\t\t";
            // line 228
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 229
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 230
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 231
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 234
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 235
            echo "\t\t\t\t\t\t<div class=\"site-footer__bottom\">
\t\t\t\t\t\t\t";
            // line 236
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 239
        echo "\t\t\t\t</div>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/aaom/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 239,  441 => 236,  438 => 235,  435 => 234,  429 => 231,  425 => 230,  421 => 229,  417 => 228,  414 => 227,  412 => 226,  407 => 225,  404 => 224,  398 => 180,  391 => 176,  385 => 174,  382 => 173,  375 => 169,  369 => 167,  367 => 166,  361 => 163,  355 => 160,  348 => 157,  345 => 156,  337 => 149,  333 => 148,  330 => 147,  327 => 146,  323 => 120,  320 => 119,  313 => 115,  309 => 113,  303 => 111,  300 => 110,  298 => 109,  294 => 107,  290 => 105,  287 => 104,  281 => 101,  275 => 97,  272 => 96,  266 => 94,  264 => 93,  259 => 91,  256 => 90,  251 => 87,  245 => 84,  242 => 83,  240 => 82,  235 => 80,  230 => 78,  224 => 76,  222 => 75,  217 => 74,  214 => 73,  207 => 241,  205 => 224,  202 => 223,  192 => 216,  174 => 200,  172 => 199,  169 => 198,  162 => 194,  158 => 193,  155 => 192,  152 => 191,  145 => 187,  141 => 186,  138 => 185,  136 => 184,  133 => 183,  131 => 156,  127 => 154,  124 => 153,  121 => 146,  118 => 145,  111 => 141,  107 => 140,  104 => 139,  102 => 138,  99 => 137,  96 => 136,  89 => 132,  85 => 130,  78 => 126,  74 => 124,  71 => 123,  69 => 122,  66 => 121,  64 => 73,  59 => 70,);
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
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 * - sidebar_collapse: If the sidebar_first will collapse.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\">
\t<div id=\"page\">

\t\t{% block head %}
\t\t\t<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t}}\">
\t\t\t\t{% if page.secondary_menu or page.top_header or page.top_header_form %}
\t\t\t\t\t<nav{{navbar_top_attributes.addClass('head-top')}}>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t{{ page.secondary_menu }}
\t\t\t\t\t\t\t<div class=\"brand\">
\t\t\t\t\t\t\t\t{{ page.top_header }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if page.top_header_form %}
\t\t\t\t\t\t\t\t<div class=\"form-inline navbar-form ml-auto right-panel\">
\t\t\t\t\t\t\t\t\t{{ page.top_header_form }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t{% endif %}
\t\t\t</header>
\t\t\t<nav{{navbar_attributes.addClass('navbar-dark main-Nav').removeAttribute('id')}}>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t{% if page.header %}
\t\t\t\t\t\t{{ page.header }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if page.primary_menu %}
\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
\t\t\t\t\t\t\t{{ page.primary_menu }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if sidebar_collapse %}
\t\t\t\t\t\t<button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t{% if page.header_form %}
\t\t\t\t{% if is_front %}
\t\t\t\t\t{{ page.header_form }}
\t\t\t\t{% else %}
\t\t\t\t\t<section class=\"banner\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t{{ page.header_form }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t{% endblock %}

\t\t{% if page.breadcrumb %}
\t\t\t{% if is_front %}
\t\t\t\t<section class=\"donation-block pt-3 pb-3\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t{{ page.breadcrumb }}
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t{% else %}
\t\t\t\t<div class=\"breadcrumb-nav\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t{{ page.breadcrumb }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endif %}

\t\t{% if page.highlighted %}
\t\t\t<div class=\"highlighted\">
\t\t\t\t<aside class=\"{{ container }} section clearfix\" role=\"complementary\">
\t\t\t\t\t{{ page.highlighted }}
\t\t\t\t</aside>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if page.featured_top %}
\t\t\t{% block featured %}
\t\t\t\t<div class=\"featured-top\">
\t\t\t\t\t<aside class=\"featured-top__inner section {{ container }} clearfix\" role=\"complementary\">
\t\t\t\t\t\t{{ page.featured_top }}
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t{% endif %}

\t\t<div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
\t\t\t{% block content %}
\t\t\t\t<div id=\"main\" class=\"{{ container }}\">

\t\t\t\t\t<div class=\"row row-offcanvas row-offcanvas-left clearfix\">
\t\t\t\t\t\t<main{{content_attributes}}>
\t\t\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</main>
\t\t\t\t\t\t{% if page.sidebar_first %}
\t\t\t\t\t\t\t<div{{sidebar_first_attributes}}>
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t{{ page.sidebar_first }}
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if page.sidebar_second %}
\t\t\t\t\t\t\t<div{{sidebar_second_attributes.addClass('sidebar')}}>
\t\t\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t\t\t{{ page.sidebar_second }}
\t\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>
\t\t{% if page.featured_bottom_first %}
\t\t\t<div class=\"featured-bottom president-adrs\">
\t\t\t\t<aside class=\"{{ container }} clearfix\" role=\"complementary\">
\t\t\t\t\t{{ page.featured_bottom_first }}
\t\t\t\t</aside>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if page.featured_bottom_second %}
\t\t\t<div class=\"featured-bottom news-sec\">
\t\t\t\t<aside class=\"{{ container }} clearfix\" role=\"complementary\">
\t\t\t\t\t{{ page.featured_bottom_second }}
\t\t\t\t</aside>
\t\t\t</div>
\t\t{% endif %}

\t\t{% if page.featured_bottom_third %}
\t\t\t<section class=\"membership-section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-md-4 mt-3 mb-3\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope-open-text mr-2\"></i>
\t\t\t\t\t\t\t\tSubscribe</h2>
\t\t\t\t\t\t\t<p>Subscribe to our news and Stay Informed !</p>
\t\t\t\t\t\t\t<form class=\"d-flex\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Enter your email\" class=\"form-control\">
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"subscribe\" value=\"Subscribe\" class=\"btn\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t\t\t<div class=\"col-md-7 mt-3 mb-3\">
\t\t\t\t\t\t\t{{ page.featured_bottom_third }}
\t\t\t\t\t\t\t<a href=\"#\">Sign Up Now!</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t{% endif %}
\t\t<footer>
\t\t\t{% block footer %}
\t\t\t\t<div class=\"{{ container }}\">
\t\t\t\t\t{% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
\t\t\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t\t\t{{ page.footer_first }}
\t\t\t\t\t\t\t{{ page.footer_second }}
\t\t\t\t\t\t\t{{ page.footer_third }}
\t\t\t\t\t\t\t{{ page.footer_fourth }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if page.footer_fifth %}
\t\t\t\t\t\t<div class=\"site-footer__bottom\">
\t\t\t\t\t\t\t{{ page.footer_fifth }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</footer>
\t</div>
</div>
", "themes/custom/aaom/templates/layout/page.html.twig", "/home/arjun/Project/cynaweb/aaomnewcivicrm/aaom/themes/custom/aaom/templates/layout/page.html.twig");
    }
}
