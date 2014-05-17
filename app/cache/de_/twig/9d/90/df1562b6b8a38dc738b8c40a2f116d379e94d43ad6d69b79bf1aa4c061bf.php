<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_9d90df1562b6b8a38dc738b8c40a2f116d379e94d43ad6d69b79bf1aa4c061bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
        <title>
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 59
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))))) {
            // line 60
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 62
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 63
                echo "                    -
                    ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 65
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                        // line 66
                        echo "                            ";
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 2)) {
                            // line 67
                            echo "                                &gt;
                            ";
                        }
                        // line 69
                        echo "
                            ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 72
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                ";
            }
            // line 74
            echo "            ";
        }
        // line 75
        echo "        </title>
    </head>
    <body ";
        // line 77
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 78
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 153
        echo "
        ";
        // line 154
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 309
        echo "    </body>
</html>
";
    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 26
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 33
            echo "                <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["stylesheet"]) ? $context["stylesheet"] : $this->getContext($context, "stylesheet"))), "html", null, true);
            echo "\"  />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 51
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["javascript"]) ? $context["javascript"] : $this->getContext($context, "javascript"))), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
    }

    // line 77
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 78
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 79
        echo "            <header class=\"header\">
                ";
        // line 80
        $this->displayBlock('logo', $context, $blocks);
        // line 90
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 151
        echo "            </header>
        ";
    }

    // line 80
    public function block_logo($context, array $blocks = array())
    {
        // line 81
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 82
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 83
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
            echo "\">";
            if (("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method"))) {
                echo "&nbsp;";
            }
            // line 84
            echo "                        ";
        }
        // line 85
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 86
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
            echo "
                        ";
        }
        // line 88
        echo "                    </a>
                ";
    }

    // line 90
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 91
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 92
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 101
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 126
            echo "                            </div>

                            ";
            // line 128
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 148
            echo "                        </nav>
                    ";
        }
        // line 150
        echo "                ";
    }

    // line 101
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 102
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 103
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 104
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 105
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 106
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 107
                        echo "                                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 108
                            echo "                                                            <li>
                                                                ";
                            // line 109
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 110
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label");
                                echo "</a>
                                                                ";
                            } else {
                                // line 112
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 114
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 116
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 118
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                                                ";
                }
                // line 120
                echo "                                            ";
            } else {
                // line 121
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 123
            echo "                                        </ol>
                                    ";
        }
        // line 125
        echo "                                ";
    }

    // line 128
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 129
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 135
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 136
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 142
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 143
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
    }

    // line 154
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 155
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 156
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 228
        echo "
                <aside class=\"right-side\">
                    ";
        // line 230
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 305
        echo "                </aside>

            </div>
        ";
    }

    // line 156
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 157
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 159
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 225
        echo "                        </section>
                    </aside>
                ";
    }

    // line 159
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 160
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 174
        echo "
                                ";
        // line 175
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 176
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 221
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 224
        echo "                            ";
    }

    // line 160
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 161
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 162
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 173
        echo "                                ";
    }

    // line 175
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 176
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 177
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 178
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 179
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 180
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 181
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 182
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 183
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "
                                                ";
                // line 186
                echo "                                                ";
                $context["item_count"] = 0;
                // line 187
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 188
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 189
                            echo "                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 190
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 191
                                echo "                                                        ";
                            }
                            // line 192
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "                                                ";
                }
                // line 194
                echo "
                                                ";
                // line 195
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 196
                    echo "                                                    <li class=\"treeview\">
                                                        <a href=\"#\">
                                                            ";
                    // line 198
                    if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon"))) : (""))) {
                        echo $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "icon");
                    }
                    // line 199
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        ";
                    // line 202
                    $context["active"] = false;
                    // line 203
                    echo "                                                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 204
                        echo "                                                            ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code")))) {
                            // line 205
                            echo "                                                                ";
                            $context["active"] = true;
                            // line 206
                            echo "                                                            ";
                        }
                        // line 207
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "                                                        <ul class=\"treeview-menu";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 209
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 210
                        echo "                                                                ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 211
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 213
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 217
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                                        </ul>
                                    ";
        }
        // line 220
        echo "                                ";
    }

    // line 221
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 222
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                ";
    }

    // line 230
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 231
        echo "                        <section class=\"content-header\">
                            ";
        // line 232
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 264
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 267
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 303
        echo "                        </section>
                    ";
    }

    // line 232
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 233
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 262
        echo "
                            ";
    }

    // line 233
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 234
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) || (!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))))) {
            // line 235
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 236
            if ((!twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"))))) {
                // line 237
                echo "                                                <div class=\"navbar-header\">
                                                    <span class=\"navbar-brand\">";
                // line 238
                echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
                echo "</span>
                                                </div>
                                            ";
            }
            // line 241
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 243
            if ((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))))) {
                // line 244
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 246
            echo "                                                </div>

                                                ";
            // line 248
            if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
                // line 249
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 253
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 258
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 261
        echo "                                ";
    }

    // line 267
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 268
        echo "
                                ";
        // line 269
        $this->displayBlock('notice', $context, $blocks);
        // line 272
        echo "
                                ";
        // line 273
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 274
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 276
        echo "
                                ";
        // line 277
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 278
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 280
        echo "
                                ";
        // line 281
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 282
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 284
        echo "
                                ";
        // line 285
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 286
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 288
        echo "
                                ";
        // line 289
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 290
            echo "                                    <div class=\"row\">
                                        <div class=\"sonata-ba-list ";
            // line 291
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 292
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                        </div>

                                        ";
            // line 295
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 296
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 297
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                            </div>
                                        ";
            }
            // line 300
            echo "                                    </div>
                                ";
        }
        // line 302
        echo "                            ";
    }

    // line 269
    public function block_notice($context, array $blocks = array())
    {
        // line 270
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 271
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  836 => 253,  824 => 246,  818 => 244,  816 => 243,  806 => 238,  803 => 237,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  761 => 230,  745 => 218,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  673 => 199,  665 => 196,  660 => 194,  657 => 193,  650 => 192,  644 => 190,  632 => 187,  629 => 186,  626 => 184,  616 => 182,  610 => 181,  600 => 178,  597 => 177,  588 => 175,  570 => 164,  546 => 175,  543 => 174,  540 => 160,  522 => 156,  482 => 136,  471 => 129,  468 => 128,  460 => 123,  454 => 121,  451 => 120,  434 => 118,  418 => 112,  373 => 102,  370 => 101,  244 => 43,  620 => 223,  612 => 220,  601 => 216,  594 => 176,  580 => 207,  574 => 205,  559 => 201,  551 => 221,  545 => 198,  532 => 192,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  412 => 126,  406 => 111,  340 => 91,  333 => 132,  320 => 84,  307 => 82,  261 => 50,  330 => 103,  287 => 77,  231 => 69,  190 => 49,  178 => 48,  12 => 36,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 198,  664 => 206,  661 => 205,  652 => 200,  648 => 198,  646 => 197,  641 => 189,  624 => 224,  607 => 180,  603 => 179,  595 => 190,  589 => 188,  586 => 187,  584 => 173,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 161,  558 => 160,  554 => 224,  539 => 148,  536 => 194,  523 => 189,  521 => 166,  507 => 156,  476 => 147,  447 => 113,  441 => 136,  425 => 132,  419 => 130,  416 => 129,  410 => 110,  404 => 90,  401 => 89,  382 => 115,  376 => 103,  369 => 148,  359 => 144,  356 => 126,  353 => 103,  329 => 130,  195 => 54,  118 => 49,  306 => 95,  303 => 94,  300 => 93,  286 => 82,  280 => 87,  274 => 53,  236 => 42,  216 => 35,  70 => 29,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 271,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 285,  894 => 284,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 261,  846 => 205,  844 => 258,  841 => 203,  833 => 199,  830 => 249,  828 => 248,  825 => 196,  817 => 192,  814 => 191,  812 => 241,  809 => 189,  801 => 236,  798 => 235,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 264,  767 => 232,  764 => 231,  756 => 222,  753 => 221,  751 => 163,  749 => 220,  746 => 161,  739 => 217,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 207,  695 => 139,  689 => 137,  683 => 135,  675 => 132,  666 => 126,  662 => 125,  649 => 122,  640 => 119,  638 => 118,  635 => 188,  619 => 183,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 162,  555 => 200,  547 => 93,  529 => 159,  527 => 91,  524 => 90,  515 => 305,  512 => 162,  503 => 81,  501 => 154,  493 => 143,  490 => 142,  478 => 154,  470 => 121,  467 => 146,  464 => 125,  459 => 116,  450 => 114,  442 => 62,  433 => 60,  428 => 116,  426 => 58,  405 => 108,  400 => 47,  390 => 43,  385 => 159,  377 => 37,  371 => 35,  363 => 109,  350 => 26,  344 => 24,  332 => 88,  311 => 83,  290 => 90,  276 => 381,  266 => 366,  263 => 125,  245 => 66,  200 => 31,  553 => 186,  548 => 176,  541 => 180,  537 => 159,  525 => 157,  520 => 170,  516 => 169,  513 => 230,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 135,  475 => 152,  462 => 143,  448 => 119,  421 => 90,  414 => 52,  408 => 109,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 101,  348 => 101,  342 => 23,  325 => 94,  313 => 84,  310 => 83,  308 => 89,  302 => 79,  296 => 151,  292 => 91,  255 => 71,  184 => 48,  155 => 73,  146 => 34,  124 => 51,  76 => 30,  194 => 52,  181 => 232,  161 => 75,  318 => 86,  316 => 16,  288 => 79,  284 => 76,  279 => 77,  275 => 86,  256 => 79,  250 => 44,  237 => 71,  222 => 66,  153 => 72,  150 => 34,  110 => 45,  694 => 138,  685 => 406,  680 => 202,  678 => 133,  668 => 395,  663 => 195,  658 => 204,  654 => 123,  647 => 191,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  609 => 362,  599 => 215,  592 => 189,  585 => 209,  581 => 185,  579 => 342,  577 => 206,  571 => 338,  567 => 337,  557 => 96,  550 => 94,  542 => 149,  538 => 319,  531 => 225,  526 => 190,  518 => 180,  514 => 167,  509 => 228,  504 => 155,  492 => 295,  486 => 292,  481 => 155,  466 => 280,  456 => 140,  452 => 272,  445 => 267,  443 => 137,  439 => 260,  429 => 255,  424 => 114,  422 => 131,  420 => 249,  415 => 127,  396 => 234,  383 => 224,  366 => 150,  361 => 208,  346 => 100,  335 => 133,  331 => 187,  326 => 86,  321 => 100,  304 => 81,  291 => 80,  272 => 158,  267 => 74,  242 => 113,  232 => 84,  186 => 51,  152 => 36,  114 => 50,  104 => 43,  358 => 139,  351 => 141,  347 => 140,  343 => 92,  338 => 99,  327 => 102,  323 => 85,  319 => 92,  315 => 98,  301 => 80,  299 => 86,  293 => 90,  289 => 83,  281 => 75,  277 => 78,  271 => 374,  265 => 51,  262 => 81,  260 => 72,  257 => 149,  251 => 101,  248 => 116,  239 => 64,  228 => 41,  225 => 67,  213 => 126,  211 => 81,  197 => 30,  148 => 49,  134 => 182,  127 => 52,  270 => 84,  253 => 78,  233 => 304,  212 => 60,  206 => 57,  198 => 55,  192 => 53,  185 => 61,  180 => 49,  175 => 47,  172 => 46,  167 => 56,  165 => 77,  160 => 39,  137 => 29,  113 => 46,  129 => 67,  84 => 34,  23 => 11,  20 => 11,  126 => 66,  90 => 38,  81 => 38,  77 => 30,  53 => 17,  218 => 128,  215 => 280,  210 => 59,  207 => 33,  202 => 55,  191 => 26,  188 => 25,  174 => 154,  170 => 79,  100 => 62,  97 => 41,  65 => 29,  58 => 25,  34 => 14,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 149,  440 => 148,  437 => 135,  435 => 258,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 107,  398 => 88,  393 => 168,  387 => 122,  384 => 106,  381 => 105,  379 => 104,  374 => 112,  368 => 34,  365 => 141,  362 => 148,  360 => 128,  355 => 27,  341 => 131,  337 => 90,  322 => 101,  314 => 99,  312 => 97,  309 => 82,  305 => 87,  298 => 173,  294 => 85,  285 => 78,  283 => 166,  278 => 387,  268 => 127,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 78,  140 => 51,  132 => 57,  128 => 47,  107 => 44,  61 => 21,  273 => 85,  269 => 100,  254 => 46,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  221 => 38,  219 => 101,  217 => 64,  208 => 57,  204 => 57,  179 => 44,  159 => 39,  143 => 33,  135 => 35,  119 => 44,  102 => 43,  71 => 25,  67 => 19,  63 => 22,  59 => 20,  38 => 18,  94 => 60,  89 => 34,  85 => 36,  75 => 32,  68 => 30,  56 => 25,  87 => 57,  21 => 11,  26 => 14,  93 => 39,  88 => 37,  78 => 37,  46 => 19,  27 => 14,  44 => 16,  31 => 15,  28 => 14,  201 => 56,  196 => 52,  183 => 50,  171 => 153,  166 => 42,  163 => 40,  158 => 74,  156 => 38,  151 => 188,  142 => 30,  138 => 49,  136 => 70,  121 => 51,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 15,  24 => 13,  25 => 13,  19 => 11,  79 => 34,  72 => 31,  69 => 33,  47 => 14,  40 => 19,  37 => 16,  22 => 12,  246 => 67,  157 => 56,  145 => 53,  139 => 51,  131 => 48,  123 => 65,  120 => 46,  115 => 47,  111 => 43,  108 => 45,  101 => 42,  98 => 36,  96 => 40,  83 => 55,  74 => 29,  66 => 23,  55 => 18,  52 => 23,  50 => 21,  43 => 12,  41 => 11,  35 => 20,  32 => 14,  29 => 15,  209 => 58,  203 => 32,  199 => 265,  193 => 51,  189 => 52,  187 => 87,  182 => 23,  176 => 309,  173 => 46,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 52,  144 => 26,  141 => 72,  133 => 69,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 105,  109 => 46,  106 => 64,  103 => 63,  99 => 41,  95 => 41,  92 => 59,  86 => 33,  82 => 33,  80 => 31,  73 => 29,  64 => 27,  60 => 24,  57 => 19,  54 => 19,  51 => 16,  48 => 22,  45 => 13,  42 => 18,  39 => 15,  36 => 17,  33 => 16,  30 => 13,);
    }
}
