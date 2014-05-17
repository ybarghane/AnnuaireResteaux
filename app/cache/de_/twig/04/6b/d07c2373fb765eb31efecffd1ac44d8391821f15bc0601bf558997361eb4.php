<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_046bd07c2373fb765eb31efecffd1ac44d8391821f15bc0601bf558997361eb4 extends Twig_Template
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
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"));
            // line 15
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-";
            echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 39
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"))) {
            // line 40
            echo "        ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"));
            // line 41
            echo "        <span class=\"count\">
            <span>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 45
        echo "</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Logs</h2>

    ";
        // line 51
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 52
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 62
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY", "-100" => "DEPRECATION only"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 63
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 74
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs")) {
            // line 75
            echo "        <ul class=\"alt\">
            ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (((((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) >= 0) && ($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) || (((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) < 0) && ((($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))))) {
                    // line 77
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                    if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 78
                    echo $context["logger"]->getdisplay_message($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), (isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")));
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 81
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </ul>
    ";
        } else {
            // line 85
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 92
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 94
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 95
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : $this->getContext($context, "log_index")));
                // line 96
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) > 1)) {
                        // line 101
                        echo "            ";
                        if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == 2)) {
                            // line 102
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 104
                        echo "            ";
                        if ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "class", array(), "any", true, true)) {
                            // line 105
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function")));
                            // line 106
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function", array(), "any", true, true)) {
                            // line 107
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function"));
                            // line 108
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true)) {
                            // line 109
                            echo "                ";
                            $context["from"] = $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file");
                            // line 110
                            echo "            ";
                        } else {
                            // line 111
                            echo "                ";
                            $context["from"] = "-";
                            // line 112
                            echo "            ";
                        }
                        // line 113
                        echo "
            <li>Called from ";
                        // line 114
                        echo ((($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file"), $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "line"), (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) : ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 116
                        echo ((((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack")) - 1))) ? ("</ul>") : (""));
                        echo "
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "    ";
            } else {
                // line 119
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 120
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"))))) {
                    // line 121
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 126
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 123,  324 => 113,  297 => 104,  449 => 198,  446 => 197,  431 => 189,  394 => 168,  380 => 160,  226 => 84,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  836 => 253,  824 => 246,  818 => 244,  816 => 243,  806 => 238,  803 => 237,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  761 => 230,  745 => 218,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  673 => 199,  665 => 196,  660 => 194,  657 => 193,  650 => 192,  644 => 190,  632 => 187,  629 => 186,  626 => 184,  616 => 182,  610 => 181,  600 => 178,  597 => 177,  588 => 175,  570 => 164,  546 => 175,  543 => 174,  540 => 160,  522 => 156,  482 => 136,  471 => 129,  468 => 128,  460 => 123,  454 => 121,  451 => 120,  434 => 118,  418 => 112,  373 => 156,  370 => 101,  244 => 43,  620 => 223,  612 => 220,  601 => 216,  594 => 176,  580 => 207,  574 => 205,  559 => 201,  551 => 221,  545 => 198,  532 => 192,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  412 => 126,  406 => 111,  340 => 91,  333 => 132,  320 => 127,  307 => 82,  261 => 50,  330 => 103,  287 => 77,  231 => 83,  190 => 76,  178 => 64,  12 => 36,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 198,  664 => 206,  661 => 205,  652 => 200,  648 => 198,  646 => 197,  641 => 189,  624 => 224,  607 => 180,  603 => 179,  595 => 190,  589 => 188,  586 => 187,  584 => 173,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 161,  558 => 160,  554 => 224,  539 => 148,  536 => 194,  523 => 189,  521 => 166,  507 => 156,  476 => 147,  447 => 113,  441 => 196,  425 => 132,  419 => 130,  416 => 129,  410 => 110,  404 => 90,  401 => 172,  382 => 115,  376 => 103,  369 => 148,  359 => 144,  356 => 126,  353 => 121,  329 => 131,  195 => 54,  118 => 49,  306 => 107,  303 => 106,  300 => 105,  286 => 112,  280 => 87,  274 => 97,  236 => 42,  216 => 79,  70 => 19,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 271,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 285,  894 => 284,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 261,  846 => 205,  844 => 258,  841 => 203,  833 => 199,  830 => 249,  828 => 248,  825 => 196,  817 => 192,  814 => 191,  812 => 241,  809 => 189,  801 => 236,  798 => 235,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 264,  767 => 232,  764 => 231,  756 => 222,  753 => 221,  751 => 163,  749 => 220,  746 => 161,  739 => 217,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 207,  695 => 139,  689 => 137,  683 => 135,  675 => 132,  666 => 126,  662 => 125,  649 => 122,  640 => 119,  638 => 118,  635 => 188,  619 => 183,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 162,  555 => 200,  547 => 93,  529 => 159,  527 => 91,  524 => 90,  515 => 305,  512 => 162,  503 => 81,  501 => 154,  493 => 143,  490 => 142,  478 => 154,  470 => 121,  467 => 146,  464 => 125,  459 => 116,  450 => 114,  442 => 62,  433 => 60,  428 => 116,  426 => 58,  405 => 108,  400 => 47,  390 => 43,  385 => 159,  377 => 37,  371 => 35,  363 => 126,  350 => 26,  344 => 119,  332 => 116,  311 => 83,  290 => 90,  276 => 381,  266 => 366,  263 => 95,  245 => 66,  200 => 72,  553 => 186,  548 => 176,  541 => 180,  537 => 159,  525 => 157,  520 => 170,  516 => 169,  513 => 230,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 135,  475 => 152,  462 => 202,  448 => 119,  421 => 90,  414 => 52,  408 => 176,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 101,  348 => 140,  342 => 137,  325 => 129,  313 => 84,  310 => 83,  308 => 89,  302 => 79,  296 => 151,  292 => 91,  255 => 93,  184 => 48,  155 => 73,  146 => 34,  124 => 51,  76 => 25,  194 => 70,  181 => 65,  161 => 63,  318 => 111,  316 => 16,  288 => 101,  284 => 76,  279 => 77,  275 => 105,  256 => 96,  250 => 44,  237 => 71,  222 => 66,  153 => 69,  150 => 55,  110 => 45,  694 => 138,  685 => 406,  680 => 202,  678 => 133,  668 => 395,  663 => 195,  658 => 204,  654 => 123,  647 => 191,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  609 => 362,  599 => 215,  592 => 189,  585 => 209,  581 => 185,  579 => 342,  577 => 206,  571 => 338,  567 => 337,  557 => 96,  550 => 94,  542 => 149,  538 => 319,  531 => 225,  526 => 190,  518 => 180,  514 => 167,  509 => 228,  504 => 155,  492 => 295,  486 => 292,  481 => 155,  466 => 280,  456 => 140,  452 => 272,  445 => 267,  443 => 137,  439 => 195,  429 => 188,  424 => 114,  422 => 184,  420 => 249,  415 => 180,  396 => 234,  383 => 224,  366 => 150,  361 => 146,  346 => 100,  335 => 134,  331 => 187,  326 => 86,  321 => 112,  304 => 81,  291 => 102,  272 => 158,  267 => 101,  242 => 113,  232 => 84,  186 => 51,  152 => 36,  114 => 50,  104 => 32,  358 => 139,  351 => 120,  347 => 140,  343 => 92,  338 => 135,  327 => 114,  323 => 128,  319 => 92,  315 => 110,  301 => 80,  299 => 86,  293 => 90,  289 => 113,  281 => 75,  277 => 78,  271 => 374,  265 => 96,  262 => 98,  260 => 72,  257 => 149,  251 => 101,  248 => 94,  239 => 64,  228 => 41,  225 => 67,  213 => 78,  211 => 81,  197 => 71,  148 => 49,  134 => 54,  127 => 52,  270 => 102,  253 => 78,  233 => 87,  212 => 78,  206 => 57,  198 => 55,  192 => 53,  185 => 74,  180 => 49,  175 => 47,  172 => 62,  167 => 71,  165 => 60,  160 => 39,  137 => 29,  113 => 48,  129 => 67,  84 => 24,  23 => 13,  20 => 1,  126 => 66,  90 => 27,  81 => 23,  77 => 22,  53 => 12,  218 => 128,  215 => 280,  210 => 59,  207 => 75,  202 => 77,  191 => 77,  188 => 76,  174 => 65,  170 => 79,  100 => 62,  97 => 41,  65 => 17,  58 => 14,  34 => 5,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 135,  435 => 258,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 107,  398 => 88,  393 => 168,  387 => 164,  384 => 106,  381 => 105,  379 => 104,  374 => 112,  368 => 34,  365 => 141,  362 => 148,  360 => 128,  355 => 143,  341 => 118,  337 => 90,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 87,  298 => 120,  294 => 85,  285 => 78,  283 => 100,  278 => 98,  268 => 127,  264 => 74,  258 => 94,  252 => 68,  247 => 75,  241 => 90,  229 => 85,  220 => 81,  214 => 63,  177 => 43,  169 => 78,  140 => 51,  132 => 57,  128 => 47,  107 => 44,  61 => 15,  273 => 85,  269 => 100,  254 => 46,  243 => 92,  240 => 72,  238 => 312,  235 => 85,  230 => 62,  227 => 301,  224 => 81,  221 => 38,  219 => 101,  217 => 64,  208 => 57,  204 => 78,  179 => 44,  159 => 39,  143 => 51,  135 => 35,  119 => 40,  102 => 41,  71 => 19,  67 => 20,  63 => 18,  59 => 14,  38 => 7,  94 => 60,  89 => 34,  85 => 24,  75 => 19,  68 => 30,  56 => 25,  87 => 34,  21 => 11,  26 => 14,  93 => 39,  88 => 25,  78 => 37,  46 => 10,  27 => 3,  44 => 9,  31 => 4,  28 => 3,  201 => 56,  196 => 52,  183 => 50,  171 => 73,  166 => 42,  163 => 40,  158 => 74,  156 => 62,  151 => 188,  142 => 30,  138 => 56,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 28,  49 => 11,  24 => 3,  25 => 12,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 14,  40 => 7,  37 => 16,  22 => 11,  246 => 93,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 46,  115 => 47,  111 => 47,  108 => 45,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 29,  66 => 23,  55 => 13,  52 => 12,  50 => 21,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 8,  209 => 58,  203 => 73,  199 => 265,  193 => 51,  189 => 52,  187 => 75,  182 => 23,  176 => 63,  173 => 46,  168 => 61,  164 => 70,  162 => 59,  154 => 36,  149 => 35,  147 => 54,  144 => 26,  141 => 51,  133 => 69,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 64,  103 => 38,  99 => 31,  95 => 41,  92 => 27,  86 => 33,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 26,  57 => 19,  54 => 12,  51 => 16,  48 => 22,  45 => 9,  42 => 13,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
