<?php

/* themes/gol/templates/page.html.twig */
class __TwigTemplate_00f7bf7461d003934d709eca3275120a308b7cb8bb5e5874eebda7d4c3f15813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'scrolling_texts' => array($this, 'block_scrolling_texts'),
            'header' => array($this, 'block_header'),
            'slide_show' => array($this, 'block_slide_show'),
            'the_administration' => array($this, 'block_the_administration'),
            'the_featured' => array($this, 'block_the_featured'),
            'above_highlight_primary' => array($this, 'block_above_highlight_primary'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content_above' => array($this, 'block_content_above'),
            'content' => array($this, 'block_content'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer_above' => array($this, 'block_footer_above'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 62, "if" => 68, "block" => 125);
        $filters = array("clean_class" => 130, "t" => 145);
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
        echo "


";
        // line 62
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 63
        echo "
<!-- #header-government -->
        <div id=\"header-government\" class=\" ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " clearfix\">
            <div class=\"row\">
                <div class=\"col-md-5 hidden-sm hidden-xs\">
                    ";
        // line 68
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "government", array())) {
            // line 69
            echo "                    <div class=\"government-left\">
                    ";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "government", array()), "html", null, true));
            echo "
                    </div>
                    ";
        }
        // line 73
        echo "                </div>

                <div class=\"col-md-7 hidden-sm hidden-xs\">
                    ";
        // line 76
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "email_login", array())) {
            // line 77
            echo "
                    <div class=\"government-right pull-right\">
                    ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "email_login", array()), "html", null, true));
            echo "
                    </div>
                    ";
        }
        // line 82
        echo "                </div>
            </div>
        </div>
        <!-- EOF: #pre-header-inside -->




<!-- #pre-header-inside -->
        <div id=\"pre-header-inside\" class=\" ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " clearfix\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    ";
        // line 94
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "logo_holder", array())) {
            // line 95
            echo "                    <div class=\"pre-header-area\">
                    ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "logo_holder", array()), "html", null, true));
            echo "
                    </div>
                    ";
        }
        // line 99
        echo "                </div>

                <div class=\"col-md-3 hidden-sm hidden-xs\">
                    ";
        // line 102
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_bar", array())) {
            // line 103
            echo "
                    <div class=\"search-bar\">
                    ";
            // line 105
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search_bar", array()), "html", null, true));
            echo "
                    </div>
                    ";
        }
        // line 108
        echo "                </div>
            </div>
        </div>
        <!-- EOF: #pre-header-inside -->











";
        // line 124
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 125
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 172
        echo "
";
        // line 174
        $this->displayBlock('main', $context, $blocks);
        // line 339
        echo "

 
















";
        // line 358
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 359
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 125
    public function block_navbar($context, array $blocks = array())
    {
        // line 126
        echo "    ";
        // line 127
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 129
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 130
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 133
        echo "


    <header";
        // line 136
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 137
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 138
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 140
        echo "      <div class=\"navbar-header\">
        ";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 143
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 144
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 145
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
            // line 156
            echo "
        ";
        }
        // line 158
        echo "      </div>

      ";
        // line 161
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 162
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 163
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 166
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 167
            echo "        </div>
      ";
        }
        // line 169
        echo "    </header>
  ";
    }

    // line 174
    public function block_main($context, array $blocks = array())
    {
        // line 175
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

    ";
        // line 179
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scrolling_texts", array())) {
            // line 180
            echo "        ";
            $this->displayBlock('scrolling_texts', $context, $blocks);
            // line 185
            echo "      ";
        }
        // line 186
        echo "

      ";
        // line 189
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 190
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 195
            echo "      ";
        }
        // line 196
        echo "
      ";
        // line 198
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slide_show", array())) {
            // line 199
            echo "        ";
            $this->displayBlock('slide_show', $context, $blocks);
            // line 204
            echo "      ";
        }
        // line 205
        echo "
      
 ";
        // line 208
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "the_administration", array())) {
            // line 209
            echo "        ";
            $this->displayBlock('the_administration', $context, $blocks);
            // line 214
            echo "      ";
        }
        // line 215
        echo "
      ";
        // line 217
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "the_featured", array())) {
            // line 218
            echo "        ";
            $this->displayBlock('the_featured', $context, $blocks);
            // line 223
            echo "      ";
        }
        // line 224
        echo "
     
       ";
        // line 227
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "above_highlight_primary", array())) {
            // line 228
            echo "        ";
            $this->displayBlock('above_highlight_primary', $context, $blocks);
            // line 233
            echo "      ";
        }
        // line 234
        echo "







      ";
        // line 243
        echo "      ";
        // line 244
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 245
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 246
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 247
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 248
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 251
        echo "
      <section";
        // line 252
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 255
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 256
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 259
            echo "        ";
        }
        // line 260
        echo "
        ";
        // line 262
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 263
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 266
            echo "        ";
        }
        // line 267
        echo "
        ";
        // line 269
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 270
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 273
            echo "        ";
        }
        // line 274
        echo "
        ";
        // line 276
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 277
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 280
            echo "        ";
        }
        // line 281
        echo "
        ";
        // line 283
        echo "        ";
        $this->displayBlock('content_above', $context, $blocks);
        // line 287
        echo "
        ";
        // line 289
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 293
        echo "
      </section>



 ";
        // line 299
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 300
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 305
            echo "      ";
        }
        // line 306
        echo "







      ";
        // line 315
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 316
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 321
            echo "      ";
        }
        // line 322
        echo "
      ";
        // line 324
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_above", array())) {
            // line 325
            echo "        ";
            $this->displayBlock('footer_above', $context, $blocks);
            // line 330
            echo "      ";
        }
        // line 331
        echo "

    </div>
  </div>



";
    }

    // line 180
    public function block_scrolling_texts($context, array $blocks = array())
    {
        // line 181
        echo "          <div class=\"col-sm-12\">
            ";
        // line 182
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scrolling_texts", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 190
    public function block_header($context, array $blocks = array())
    {
        // line 191
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 192
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 199
    public function block_slide_show($context, array $blocks = array())
    {
        // line 200
        echo "          <div class=\"col-sm-12\">
            ";
        // line 201
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slide_show", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 209
    public function block_the_administration($context, array $blocks = array())
    {
        // line 210
        echo "          <div class=\"col-sm-12 the_administration\">
            ";
        // line 211
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "the_administration", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 218
    public function block_the_featured($context, array $blocks = array())
    {
        // line 219
        echo "          <div class=\"col-sm-12 the_featured\">
            ";
        // line 220
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "the_featured", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 228
    public function block_above_highlight_primary($context, array $blocks = array())
    {
        // line 229
        echo "          <aside class=\"col-sm-9 pull-left\">
            ";
        // line 230
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "above_highlight_primary", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 256
    public function block_highlighted($context, array $blocks = array())
    {
        // line 257
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 263
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 264
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 270
    public function block_action_links($context, array $blocks = array())
    {
        // line 271
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 277
    public function block_help($context, array $blocks = array())
    {
        // line 278
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 283
    public function block_content_above($context, array $blocks = array())
    {
        // line 284
        echo "          <a id=\"main-content-above\"></a>
          ";
        // line 285
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_above", array()), "html", null, true));
        echo "
        ";
    }

    // line 289
    public function block_content($context, array $blocks = array())
    {
        // line 290
        echo "          <a id=\"main-content\"></a>
          ";
        // line 291
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 300
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 301
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 302
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 316
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 317
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 318
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 325
    public function block_footer_above($context, array $blocks = array())
    {
        // line 326
        echo "          <div class=\"col-sm-12 footer-above\">
            ";
        // line 327
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_above", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 359
    public function block_footer($context, array $blocks = array())
    {
        // line 360
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      
      <div class=\"row\"> 

          <div class=\"col-sm-12\">

            <div class=\"row fholder\"> 

                <div class=\"col-sm-1 footer-privacy\">
                      ";
        // line 369
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
                </div>

                <div class=\"col-sm-5 footer-privacy\">
                      ";
        // line 373
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_name", array()), "html", null, true));
        echo "
                </div>

                <div class=\"col-sm-6 footer-logo\">
                      ";
        // line 377
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_logo", array()), "html", null, true));
        echo "
                </div>   

            </div>

          </div>

      </div>

    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/gol/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  721 => 377,  714 => 373,  707 => 369,  694 => 360,  691 => 359,  684 => 327,  681 => 326,  678 => 325,  671 => 318,  668 => 317,  665 => 316,  658 => 302,  655 => 301,  652 => 300,  646 => 291,  643 => 290,  640 => 289,  634 => 285,  631 => 284,  628 => 283,  621 => 278,  618 => 277,  611 => 271,  608 => 270,  601 => 264,  598 => 263,  591 => 257,  588 => 256,  581 => 230,  578 => 229,  575 => 228,  568 => 220,  565 => 219,  562 => 218,  555 => 211,  552 => 210,  549 => 209,  542 => 201,  539 => 200,  536 => 199,  529 => 192,  526 => 191,  523 => 190,  516 => 182,  513 => 181,  510 => 180,  499 => 331,  496 => 330,  493 => 325,  490 => 324,  487 => 322,  484 => 321,  481 => 316,  478 => 315,  468 => 306,  465 => 305,  462 => 300,  459 => 299,  452 => 293,  449 => 289,  446 => 287,  443 => 283,  440 => 281,  437 => 280,  434 => 277,  431 => 276,  428 => 274,  425 => 273,  422 => 270,  419 => 269,  416 => 267,  413 => 266,  410 => 263,  407 => 262,  404 => 260,  401 => 259,  398 => 256,  395 => 255,  390 => 252,  387 => 251,  385 => 248,  384 => 247,  383 => 246,  382 => 245,  381 => 244,  379 => 243,  369 => 234,  366 => 233,  363 => 228,  360 => 227,  356 => 224,  353 => 223,  350 => 218,  347 => 217,  344 => 215,  341 => 214,  338 => 209,  335 => 208,  331 => 205,  328 => 204,  325 => 199,  322 => 198,  319 => 196,  316 => 195,  313 => 190,  310 => 189,  306 => 186,  303 => 185,  300 => 180,  297 => 179,  290 => 175,  287 => 174,  282 => 169,  278 => 167,  275 => 166,  269 => 163,  266 => 162,  263 => 161,  259 => 158,  255 => 156,  247 => 145,  244 => 144,  241 => 143,  237 => 141,  234 => 140,  228 => 138,  226 => 137,  222 => 136,  217 => 133,  215 => 130,  214 => 129,  213 => 127,  211 => 126,  208 => 125,  202 => 359,  200 => 358,  179 => 339,  177 => 174,  174 => 172,  170 => 125,  168 => 124,  151 => 108,  145 => 105,  141 => 103,  139 => 102,  134 => 99,  128 => 96,  125 => 95,  123 => 94,  117 => 91,  106 => 82,  100 => 79,  96 => 77,  94 => 76,  89 => 73,  83 => 70,  80 => 69,  78 => 68,  72 => 65,  68 => 63,  66 => 62,  61 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gol/templates/page.html.twig", "C:\\xampp\\htdocs\\c\\themes\\gol\\templates\\page.html.twig");
    }
}
