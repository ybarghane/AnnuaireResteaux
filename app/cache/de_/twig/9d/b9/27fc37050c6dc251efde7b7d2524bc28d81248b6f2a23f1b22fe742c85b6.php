<?php

/* WebProfilerBundle:Collector:config.html.twig */
class __TwigTemplate_9db927fc37050c6dc251efde7b7d2524bc28d81248b6f2a23f1b22fe742c85b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"http://symfony.com/\">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\" />
            <span>
                ";
        // line 9
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname")) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion"), "html", null, true);
            echo "
                ";
        } else {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
            echo "
                ";
        }
        // line 14
        echo "            </span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname")) {
            // line 19
            echo "            <div class=\"sf-toolbar-info-piece\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname"), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion"), "html", null, true);
            echo "</b>
            </div>
        ";
        }
        // line 23
        echo "        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"http://symfony.com/doc/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
        echo "/index.html\" rel=\"help\">Symfony Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">
            <img width=\"26\" height=\"28\" alt=\"PHP\" src=\"data:image/png;base64,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\" />
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        ob_start();
        // line 39
        echo "        ";
        ob_start();
        // line 40
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 46
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug")) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 47
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator")) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sapiName"), "html", null, true);
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 54
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 56
        echo "
    ";
        // line 58
        echo "    ";
        ob_start();
        echo "sf-toolbar-status sf-toolbar-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug")) ? ("green") : ("red"));
        $context["debug_status_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "    ";
        ob_start();
        // line 60
        echo "        <img width=\"21\" height=\"28\" alt=\"Environment\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-info-piece-additional-detail ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
        echo "\"> </span>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "</span>
        ";
        // line 63
        if ((("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname")) || ("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env")))) {
            // line 64
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-info-with-delimiter\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"), "html", null, true);
            echo "</span>
                <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 69
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        ";
        ob_start();
        // line 72
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"))) {
            // line 73
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Name</b>
                    <span>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 78
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"))) {
            // line 79
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 84
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug"))) {
            // line 85
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug")) ? ("en") : ("dis"));
            echo "abled</span>
                </div>
            ";
        }
        // line 90
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    ";
        // line 93
        if ((isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))) {
            // line 94
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token"), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 96
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token"), "html", null, true);
            echo "
                    ";
        }
        // line 98
        echo "                </span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 101
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 102
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 105
    public function block_menu($context, array $blocks = array())
    {
        // line 106
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\" alt=\"Configuration\"></span>
    <strong>Config</strong>
</span>
";
    }

    // line 112
    public function block_panel($context, array $blocks = array())
    {
        // line 113
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            ";
        // line 120
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname")) {
            // line 121
            echo "                <th>Application</th>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion"), "html", null, true);
            echo " (on Symfony ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
            echo ")</td>
            ";
        } else {
            // line 124
            echo "                <th>Symfony version</th>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
            echo "</td>
            ";
        }
        // line 127
        echo "        </tr>
        ";
        // line 128
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"))) {
            // line 129
            echo "            <tr>
                <th>Application name</th>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 134
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"))) {
            // line 135
            echo "            <tr>
                <th>Environment</th>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 140
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug"))) {
            // line 141
            echo "            <tr>
                <th>Debug</th>
                <td>";
            // line 143
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug")) ? ("enabled") : ("disabled"));
            echo "</td>
            </tr>
        ";
        }
        // line 146
        echo "    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 160
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 164
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 168
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 172
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasapc")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>";
        // line 176
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haszendopcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 180
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haseaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 188
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles")) {
            // line 189
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 195
            $context["bundles"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles");
            // line 196
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 197
                echo "            <tr>
                <th>";
                // line 198
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "</th>
                <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 198,  446 => 197,  431 => 189,  394 => 168,  380 => 160,  226 => 84,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  836 => 253,  824 => 246,  818 => 244,  816 => 243,  806 => 238,  803 => 237,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  761 => 230,  745 => 218,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  673 => 199,  665 => 196,  660 => 194,  657 => 193,  650 => 192,  644 => 190,  632 => 187,  629 => 186,  626 => 184,  616 => 182,  610 => 181,  600 => 178,  597 => 177,  588 => 175,  570 => 164,  546 => 175,  543 => 174,  540 => 160,  522 => 156,  482 => 136,  471 => 129,  468 => 128,  460 => 123,  454 => 121,  451 => 120,  434 => 118,  418 => 112,  373 => 156,  370 => 101,  244 => 43,  620 => 223,  612 => 220,  601 => 216,  594 => 176,  580 => 207,  574 => 205,  559 => 201,  551 => 221,  545 => 198,  532 => 192,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  412 => 126,  406 => 111,  340 => 91,  333 => 132,  320 => 127,  307 => 82,  261 => 50,  330 => 103,  287 => 77,  231 => 69,  190 => 49,  178 => 64,  12 => 36,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 198,  664 => 206,  661 => 205,  652 => 200,  648 => 198,  646 => 197,  641 => 189,  624 => 224,  607 => 180,  603 => 179,  595 => 190,  589 => 188,  586 => 187,  584 => 173,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 161,  558 => 160,  554 => 224,  539 => 148,  536 => 194,  523 => 189,  521 => 166,  507 => 156,  476 => 147,  447 => 113,  441 => 196,  425 => 132,  419 => 130,  416 => 129,  410 => 110,  404 => 90,  401 => 172,  382 => 115,  376 => 103,  369 => 148,  359 => 144,  356 => 126,  353 => 103,  329 => 131,  195 => 54,  118 => 49,  306 => 95,  303 => 122,  300 => 121,  286 => 112,  280 => 87,  274 => 53,  236 => 42,  216 => 79,  70 => 19,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 271,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 285,  894 => 284,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 261,  846 => 205,  844 => 258,  841 => 203,  833 => 199,  830 => 249,  828 => 248,  825 => 196,  817 => 192,  814 => 191,  812 => 241,  809 => 189,  801 => 236,  798 => 235,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 264,  767 => 232,  764 => 231,  756 => 222,  753 => 221,  751 => 163,  749 => 220,  746 => 161,  739 => 217,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 207,  695 => 139,  689 => 137,  683 => 135,  675 => 132,  666 => 126,  662 => 125,  649 => 122,  640 => 119,  638 => 118,  635 => 188,  619 => 183,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 162,  555 => 200,  547 => 93,  529 => 159,  527 => 91,  524 => 90,  515 => 305,  512 => 162,  503 => 81,  501 => 154,  493 => 143,  490 => 142,  478 => 154,  470 => 121,  467 => 146,  464 => 125,  459 => 116,  450 => 114,  442 => 62,  433 => 60,  428 => 116,  426 => 58,  405 => 108,  400 => 47,  390 => 43,  385 => 159,  377 => 37,  371 => 35,  363 => 109,  350 => 26,  344 => 24,  332 => 88,  311 => 83,  290 => 90,  276 => 381,  266 => 366,  263 => 125,  245 => 66,  200 => 72,  553 => 186,  548 => 176,  541 => 180,  537 => 159,  525 => 157,  520 => 170,  516 => 169,  513 => 230,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 135,  475 => 152,  462 => 202,  448 => 119,  421 => 90,  414 => 52,  408 => 176,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 101,  348 => 140,  342 => 137,  325 => 129,  313 => 84,  310 => 83,  308 => 89,  302 => 79,  296 => 151,  292 => 91,  255 => 71,  184 => 48,  155 => 73,  146 => 34,  124 => 51,  76 => 30,  194 => 70,  181 => 65,  161 => 75,  318 => 86,  316 => 16,  288 => 79,  284 => 76,  279 => 77,  275 => 105,  256 => 96,  250 => 44,  237 => 71,  222 => 66,  153 => 56,  150 => 55,  110 => 45,  694 => 138,  685 => 406,  680 => 202,  678 => 133,  668 => 395,  663 => 195,  658 => 204,  654 => 123,  647 => 191,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  609 => 362,  599 => 215,  592 => 189,  585 => 209,  581 => 185,  579 => 342,  577 => 206,  571 => 338,  567 => 337,  557 => 96,  550 => 94,  542 => 149,  538 => 319,  531 => 225,  526 => 190,  518 => 180,  514 => 167,  509 => 228,  504 => 155,  492 => 295,  486 => 292,  481 => 155,  466 => 280,  456 => 140,  452 => 272,  445 => 267,  443 => 137,  439 => 195,  429 => 188,  424 => 114,  422 => 184,  420 => 249,  415 => 180,  396 => 234,  383 => 224,  366 => 150,  361 => 146,  346 => 100,  335 => 134,  331 => 187,  326 => 86,  321 => 100,  304 => 81,  291 => 80,  272 => 158,  267 => 101,  242 => 113,  232 => 84,  186 => 51,  152 => 36,  114 => 50,  104 => 43,  358 => 139,  351 => 141,  347 => 140,  343 => 92,  338 => 135,  327 => 102,  323 => 128,  319 => 92,  315 => 125,  301 => 80,  299 => 86,  293 => 90,  289 => 113,  281 => 75,  277 => 78,  271 => 374,  265 => 51,  262 => 98,  260 => 72,  257 => 149,  251 => 101,  248 => 94,  239 => 64,  228 => 41,  225 => 67,  213 => 78,  211 => 81,  197 => 71,  148 => 49,  134 => 47,  127 => 52,  270 => 102,  253 => 78,  233 => 87,  212 => 60,  206 => 57,  198 => 55,  192 => 53,  185 => 66,  180 => 49,  175 => 47,  172 => 62,  167 => 56,  165 => 60,  160 => 39,  137 => 29,  113 => 38,  129 => 67,  84 => 24,  23 => 13,  20 => 1,  126 => 66,  90 => 27,  81 => 23,  77 => 22,  53 => 12,  218 => 128,  215 => 280,  210 => 59,  207 => 75,  202 => 55,  191 => 69,  188 => 25,  174 => 154,  170 => 79,  100 => 62,  97 => 41,  65 => 17,  58 => 13,  34 => 5,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 135,  435 => 258,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 107,  398 => 88,  393 => 168,  387 => 164,  384 => 106,  381 => 105,  379 => 104,  374 => 112,  368 => 34,  365 => 141,  362 => 148,  360 => 128,  355 => 143,  341 => 131,  337 => 90,  322 => 101,  314 => 99,  312 => 124,  309 => 82,  305 => 87,  298 => 120,  294 => 85,  285 => 78,  283 => 166,  278 => 106,  268 => 127,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 90,  229 => 85,  220 => 81,  214 => 63,  177 => 43,  169 => 78,  140 => 51,  132 => 57,  128 => 47,  107 => 44,  61 => 21,  273 => 85,  269 => 100,  254 => 46,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  221 => 38,  219 => 101,  217 => 64,  208 => 57,  204 => 57,  179 => 44,  159 => 39,  143 => 33,  135 => 35,  119 => 40,  102 => 33,  71 => 19,  67 => 18,  63 => 16,  59 => 14,  38 => 6,  94 => 60,  89 => 34,  85 => 32,  75 => 32,  68 => 30,  56 => 25,  87 => 57,  21 => 11,  26 => 14,  93 => 39,  88 => 33,  78 => 37,  46 => 19,  27 => 16,  44 => 8,  31 => 4,  28 => 3,  201 => 56,  196 => 52,  183 => 50,  171 => 153,  166 => 42,  163 => 40,  158 => 74,  156 => 58,  151 => 188,  142 => 30,  138 => 49,  136 => 70,  121 => 51,  117 => 45,  105 => 34,  91 => 39,  62 => 28,  49 => 10,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 31,  69 => 19,  47 => 14,  40 => 7,  37 => 16,  22 => 11,  246 => 93,  157 => 56,  145 => 53,  139 => 51,  131 => 48,  123 => 42,  120 => 46,  115 => 47,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 30,  83 => 55,  74 => 29,  66 => 23,  55 => 18,  52 => 17,  50 => 21,  43 => 9,  41 => 9,  35 => 5,  32 => 21,  29 => 8,  209 => 58,  203 => 73,  199 => 265,  193 => 51,  189 => 52,  187 => 87,  182 => 23,  176 => 63,  173 => 46,  168 => 61,  164 => 55,  162 => 59,  154 => 36,  149 => 35,  147 => 54,  144 => 26,  141 => 51,  133 => 69,  130 => 46,  125 => 46,  122 => 45,  116 => 39,  112 => 105,  109 => 46,  106 => 64,  103 => 38,  99 => 31,  95 => 41,  92 => 59,  86 => 33,  82 => 33,  80 => 31,  73 => 20,  64 => 17,  60 => 26,  57 => 19,  54 => 12,  51 => 16,  48 => 22,  45 => 10,  42 => 13,  39 => 12,  36 => 17,  33 => 4,  30 => 3,);
    }
}
