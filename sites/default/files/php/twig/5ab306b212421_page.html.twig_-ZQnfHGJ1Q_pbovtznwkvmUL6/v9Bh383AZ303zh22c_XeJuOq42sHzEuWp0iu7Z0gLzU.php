<?php

/* modules/writer/page.html.twig */
class __TwigTemplate_50bf987004a839dbbef72cde00330dbfe8288324a89882d20684418e8bf66375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 91);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 80
        echo "<div id=\"wrapper\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_header", array()), "html", null, true));
        echo "
  <header role=\"banner\" id=\"site-header\">
  \t<div class=\"head-wrap clearfix\">
      ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
      ";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
        echo "
\t  </div>
  </header>

  ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "post_header", array()), "html", null, true));
        echo "

  ";
        // line 91
        if (($context["messages"] ?? null)) {
            // line 92
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 94
        echo "
  <main role=\"main\" class=\"main-content\">
  \t<a id=\"main-content\"></a>";
        // line 97
        echo "
    ";
        // line 98
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 99
            echo "      <div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 101
        echo "
    ";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 103
        if (($context["title"] ?? null)) {
            // line 104
            echo "      <h1 class=\"title\" id=\"page-title\">
        ";
            // line 105
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
      </h1>
    ";
        }
        // line 108
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

    ";
        // line 110
        if (($context["tabs"] ?? null)) {
            // line 111
            echo "      <nav class=\"tabs\" role=\"navigation\">
        ";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tabs"] ?? null), "html", null, true));
            echo "
      </nav>
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

    ";
        // line 118
        if (($context["action_links"] ?? null)) {
            // line 119
            echo "      <nav class=\"action-links\">
        ";
            // line 120
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "
      </nav>
    ";
        }
        // line 123
        echo "
    ";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
  </main>

  <footer class=\"page-footer\">
  \t";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top", array()), "html", null, true));
        echo "
  \t";
        // line 129
        if (($this->getAttribute(($context["page"] ?? null), "footer_left", array()) || $this->getAttribute(($context["page"] ?? null), "footer_right", array()))) {
            // line 130
            echo "  \t  <div class=\"foot-mid-wrap clearfix\">
\t\t    ";
            // line 131
            if ($this->getAttribute(($context["page"] ?? null), "footer_left", array())) {
                // line 132
                echo "\t\t      <aside role=\"complementary\" id=\"footer_left\">
\t\t        ";
                // line 133
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_left", array()), "html", null, true));
                echo "
\t\t      </aside>
\t\t    ";
            }
            // line 136
            echo "\t\t    ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_right", array())) {
                // line 137
                echo "\t\t\t    <aside role=\"complementary\" id=\"footer_right\">
\t\t\t      ";
                // line 138
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_right", array()), "html", null, true));
                echo "
\t\t\t    </aside>
\t\t    ";
            }
            // line 141
            echo "  \t\t</div>
  \t";
        }
        // line 143
        echo "  \t";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
        echo "
  \t<div class=\"foot-wrap clearfix\">
      ";
        // line 145
        if ($this->getAttribute(($context["page"] ?? null), "footer_message", array())) {
            // line 146
            echo "        <div class=\"foot-links\">
          ";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 150
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_message", array())) {
            // line 151
            echo "        <div class=\"footer-msg\">
          ";
            // line 152
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_message", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 155
        echo "    </div>
  </footer>
</div> <!-- end wrapper -->
";
    }

    public function getTemplateName()
    {
        return "modules/writer/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 155,  216 => 152,  213 => 151,  210 => 150,  204 => 147,  201 => 146,  199 => 145,  193 => 143,  189 => 141,  183 => 138,  180 => 137,  177 => 136,  171 => 133,  168 => 132,  166 => 131,  163 => 130,  161 => 129,  157 => 128,  150 => 124,  147 => 123,  141 => 120,  138 => 119,  136 => 118,  131 => 116,  128 => 115,  122 => 112,  119 => 111,  117 => 110,  111 => 108,  105 => 105,  102 => 104,  100 => 103,  96 => 102,  93 => 101,  87 => 99,  85 => 98,  82 => 97,  78 => 94,  72 => 92,  70 => 91,  65 => 89,  58 => 85,  54 => 84,  48 => 81,  43 => 80,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/writer/page.html.twig", "/work/d/code/drupal/modules/writer/page.html.twig");
    }
}
