<?php

/* themes/bootstrapblog/templates/page.html.twig */
class __TwigTemplate_cd65a1c623294e105d0e4b5180fbab7165f44196c207d4a108ae6b8d8b9d25ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67, "t" => 79);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 101
        echo "
";
        // line 103
        $this->displayBlock('main', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 189
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 70
        echo "    <div class=\"blog-masthead\">
      ";
        // line 71
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => "container"), "method")) {
            // line 72
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 74
        echo "      <div class=\"navbar-header\">
        ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 77
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 78
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 85
        echo "      </div>

      ";
        // line 88
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 89
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          <nav role=\"navigation\" class=\"blog-nav\">
          ";
            // line 91
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
          </nav>
        </div>
      ";
        }
        // line 95
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => "container"), "method")) {
            // line 96
            echo "        </div>
      ";
        }
        // line 98
        echo "    </div>
  ";
    }

    // line 103
    public function block_main($context, array $blocks = array())
    {
        // line 104
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 108
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 109
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 111
            echo "      ";
        }
        // line 112
        echo "      <div class=\"blog-header\" role=\"heading\">
        ";
        // line 113
        if (($context["site_name"] ?? null)) {
            // line 114
            echo "          <h1 class=\"blog-title\"><a class=\"home-page\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
            echo "</a></h1>
        ";
        }
        // line 116
        echo "        ";
        if (($context["site_slogan"] ?? null)) {
            // line 117
            echo "          <p class=\"lead blog-description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "</p>
        ";
        }
        // line 119
        echo "      </div>

      ";
        // line 122
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 123
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 128
            echo "      ";
        }
        // line 129
        echo "
      ";
        // line 131
        echo "      ";
        // line 132
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 133
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-8 blog-main") : ("")), 2 => ((($this->getAttribute(        // line 135
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-8 blog-main") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 136
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 139
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 142
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 143
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 146
            echo "        ";
        }
        // line 147
        echo "
        ";
        // line 149
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 150
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 153
            echo "        ";
        }
        // line 154
        echo "
        ";
        // line 156
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 157
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 160
            echo "        ";
        }
        // line 161
        echo "
        ";
        // line 163
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 164
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 167
            echo "        ";
        }
        // line 168
        echo "
        ";
        // line 170
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 174
        echo "      </section>

      ";
        // line 177
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 178
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 183
            echo "      ";
        }
        // line 184
        echo "    </div>
  </div>
";
    }

    // line 109
    public function block_header($context, array $blocks = array())
    {
        // line 110
        echo "        ";
    }

    // line 123
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 124
        echo "          <aside class=\"col-sm-3 blog-sidebar\" role=\"complementary\">
            ";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 143
    public function block_highlighted($context, array $blocks = array())
    {
        // line 144
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 150
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 151
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
          ";
    }

    // line 157
    public function block_action_links($context, array $blocks = array())
    {
        // line 158
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 164
    public function block_help($context, array $blocks = array())
    {
        // line 165
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 170
    public function block_content($context, array $blocks = array())
    {
        // line 171
        echo "          <a id=\"main-content\"></a>
          ";
        // line 172
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 178
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 179
        echo "          <aside class=\"col-sm-3 col-sm-offset-1 blog-sidebar\" role=\"complementary\">
            ";
        // line 180
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 189
    public function block_footer($context, array $blocks = array())
    {
        // line 190
        echo "    <footer class=\"footer blog-footer\" role=\"contentinfo\">
      ";
        // line 191
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrapblog/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 191,  379 => 190,  376 => 189,  369 => 180,  366 => 179,  363 => 178,  357 => 172,  354 => 171,  351 => 170,  344 => 165,  341 => 164,  334 => 158,  331 => 157,  324 => 151,  321 => 150,  314 => 144,  311 => 143,  304 => 125,  301 => 124,  298 => 123,  294 => 110,  291 => 109,  285 => 184,  282 => 183,  279 => 178,  276 => 177,  272 => 174,  269 => 170,  266 => 168,  263 => 167,  260 => 164,  257 => 163,  254 => 161,  251 => 160,  248 => 157,  245 => 156,  242 => 154,  239 => 153,  236 => 150,  233 => 149,  230 => 147,  227 => 146,  224 => 143,  221 => 142,  215 => 139,  213 => 136,  212 => 135,  211 => 134,  210 => 133,  209 => 132,  207 => 131,  204 => 129,  201 => 128,  198 => 123,  195 => 122,  191 => 119,  185 => 117,  182 => 116,  174 => 114,  172 => 113,  169 => 112,  166 => 111,  163 => 109,  160 => 108,  153 => 104,  150 => 103,  145 => 98,  141 => 96,  138 => 95,  131 => 91,  127 => 89,  124 => 88,  120 => 85,  111 => 79,  108 => 78,  105 => 77,  101 => 75,  98 => 74,  92 => 72,  90 => 71,  87 => 70,  85 => 67,  84 => 66,  83 => 64,  81 => 63,  78 => 62,  72 => 189,  70 => 188,  67 => 187,  65 => 103,  62 => 101,  58 => 62,  56 => 61,  54 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrapblog/templates/page.html.twig", "/work/d/code/drupal/themes/bootstrapblog/templates/page.html.twig");
    }
}
