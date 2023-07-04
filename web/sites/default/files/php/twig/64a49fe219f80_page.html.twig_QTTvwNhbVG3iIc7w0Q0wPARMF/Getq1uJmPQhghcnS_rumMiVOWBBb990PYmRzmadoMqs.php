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

/* core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig */
class __TwigTemplate_fbf217258d93236e781bf70b22f8494135f5cc5d04dc347448ec60dbd9b2ca43 extends \Twig\Template
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
        // line 45
        echo "
<div class=\"layout-container\">

  ";
        // line 48
        if (( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 48))))) ||  !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source,         // line 49
($context["page"] ?? null), "header", [], "any", false, false, true, 49))))))) {
            // line 50
            echo "    <header class=\"layout-header\" role=\"banner\">
      <div class=\"container\">
        ";
            // line 52
            if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 52)))))) {
                // line 53
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 55
            echo "        ";
            if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 55)))))) {
                // line 56
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 58
            echo "      </div>
    </header>
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 62)) {
            // line 63
            echo "    <div class=\"layout-highlighted\">
      <div class=\"container\">
        ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 69
        echo "
  ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 70)) {
            // line 71
            echo "  <div class=\"layout-tabs\">
    <div class=\"container\">
      ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 78)))))) {
            // line 79
            echo "    <div class=\"layout-banner-top\">
      ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 83
        echo "
  ";
        // line 84
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 84)))))) {
            // line 85
            echo "  <div class=\"layout-breadcrumbs\">
    <div class=\"container\">
      ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        if ( !($context["node"] ?? null)) {
            // line 93
            echo "    ";
            if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 93)))))) {
                // line 94
                echo "      <div class=\"layout-page-title\">
        ";
                // line 95
                if (($context["is_front"] ?? null)) {
                    // line 96
                    echo "          <div class=\"is-front container\">
            ";
                    // line 97
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                    echo "
          </div>
          ";
                } else {
                    // line 100
                    echo "          <div class=\"container\">
            ";
                    // line 101
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                    echo "
          </div>
        ";
                }
                // line 104
                echo "      </div>
    ";
            }
            // line 106
            echo "  ";
        }
        // line 107
        echo "
  <main role=\"main\" class=\"main container\">

    <div class=\"layout-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 112
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
    </div>";
        // line 114
        echo "
    ";
        // line 115
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 115)))))) {
            // line 116
            echo "      <aside class=\"layout-sidebar\" role=\"complementary\">
        ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 120
        echo "
  </main>

  ";
        // line 123
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 123)))))) {
            // line 124
            echo "    <div class=\"layout-content-bottom\">
      ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 128
        echo "  
  <div style=\"background: red; height: 100px; width: 100px\"></div>
  
  ";
        // line 131
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 131)))))) {
            // line 132
            echo "  <div class=\"layout-footer\">
    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  </div>
  ";
        }
        // line 140
        echo "
  ";
        // line 141
        if ( !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 141)))))) {
            // line 142
            echo "    <div class=\"layout-bottom\">
      <div class=\"container\">
        ";
            // line 144
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 148
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 148,  243 => 144,  239 => 142,  237 => 141,  234 => 140,  226 => 135,  221 => 132,  219 => 131,  214 => 128,  208 => 125,  205 => 124,  203 => 123,  198 => 120,  192 => 117,  189 => 116,  187 => 115,  184 => 114,  179 => 112,  173 => 107,  170 => 106,  166 => 104,  160 => 101,  157 => 100,  151 => 97,  148 => 96,  146 => 95,  143 => 94,  140 => 93,  138 => 92,  135 => 91,  128 => 87,  124 => 85,  122 => 84,  119 => 83,  113 => 80,  110 => 79,  108 => 78,  105 => 77,  98 => 73,  94 => 71,  92 => 70,  89 => 69,  82 => 65,  78 => 63,  76 => 62,  73 => 61,  68 => 58,  62 => 56,  59 => 55,  53 => 53,  51 => 52,  47 => 50,  45 => 49,  44 => 48,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig", "/opt/drupal/web/core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 48);
        static $filters = array("trim" => 48, "striptags" => 48, "render" => 48, "escape" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['trim', 'striptags', 'render', 'escape'],
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
