<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_66fc08250775ecb12f7138bab72aab10d0c07b90149a6b094619b5826f6df823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_4c3c7282cd0c22a0a33c80eb82b69d9aa26686bdc1d4c2939a5afe58616397cb"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\"></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            echo $context["__internal_4c3c7282cd0c22a0a33c80eb82b69d9aa26686bdc1d4c2939a5afe58616397cb"]->getdisplay_listener((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    <h2>Not Called Listeners</h2>

    ";
        // line 41
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners")) {
            // line 42
            echo "        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            $context["listeners"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners");
            // line 48
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                echo $context["__internal_4c3c7282cd0c22a0a33c80eb82b69d9aa26686bdc1d4c2939a5afe58616397cb"]->getdisplay_listener($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        } else {
            // line 56
            echo "        <p>
            <strong>No uncalled listeners</strong>.
        </p>
        <p>

            All listeners were called for this request or an error occurred
            when trying to collect uncalled listeners (in which case check the
            logs to get more information).

        </p>
    ";
        }
    }

    // line 69
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    ";
            if (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Closure")) {
                // line 71
                echo "        Closure
    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Function")) {
                // line 73
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 74
                echo "        ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                }
                // line 75
                echo "    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Method")) {
                // line 76
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 77
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "class"));
                echo "::";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                }
                // line 78
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
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 198,  446 => 197,  431 => 189,  394 => 168,  380 => 160,  226 => 84,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  836 => 253,  824 => 246,  818 => 244,  816 => 243,  806 => 238,  803 => 237,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  761 => 230,  745 => 218,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  673 => 199,  665 => 196,  660 => 194,  657 => 193,  650 => 192,  644 => 190,  632 => 187,  629 => 186,  626 => 184,  616 => 182,  610 => 181,  600 => 178,  597 => 177,  588 => 175,  570 => 164,  546 => 175,  543 => 174,  540 => 160,  522 => 156,  482 => 136,  471 => 129,  468 => 128,  460 => 123,  454 => 121,  451 => 120,  434 => 118,  418 => 112,  373 => 156,  370 => 101,  244 => 43,  620 => 223,  612 => 220,  601 => 216,  594 => 176,  580 => 207,  574 => 205,  559 => 201,  551 => 221,  545 => 198,  532 => 192,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  412 => 126,  406 => 111,  340 => 91,  333 => 132,  320 => 127,  307 => 82,  261 => 50,  330 => 103,  287 => 77,  231 => 69,  190 => 49,  178 => 64,  12 => 36,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 198,  664 => 206,  661 => 205,  652 => 200,  648 => 198,  646 => 197,  641 => 189,  624 => 224,  607 => 180,  603 => 179,  595 => 190,  589 => 188,  586 => 187,  584 => 173,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 161,  558 => 160,  554 => 224,  539 => 148,  536 => 194,  523 => 189,  521 => 166,  507 => 156,  476 => 147,  447 => 113,  441 => 196,  425 => 132,  419 => 130,  416 => 129,  410 => 110,  404 => 90,  401 => 172,  382 => 115,  376 => 103,  369 => 148,  359 => 144,  356 => 126,  353 => 103,  329 => 131,  195 => 54,  118 => 49,  306 => 95,  303 => 122,  300 => 121,  286 => 112,  280 => 87,  274 => 53,  236 => 42,  216 => 79,  70 => 19,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 271,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 285,  894 => 284,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 261,  846 => 205,  844 => 258,  841 => 203,  833 => 199,  830 => 249,  828 => 248,  825 => 196,  817 => 192,  814 => 191,  812 => 241,  809 => 189,  801 => 236,  798 => 235,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 264,  767 => 232,  764 => 231,  756 => 222,  753 => 221,  751 => 163,  749 => 220,  746 => 161,  739 => 217,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 207,  695 => 139,  689 => 137,  683 => 135,  675 => 132,  666 => 126,  662 => 125,  649 => 122,  640 => 119,  638 => 118,  635 => 188,  619 => 183,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 162,  555 => 200,  547 => 93,  529 => 159,  527 => 91,  524 => 90,  515 => 305,  512 => 162,  503 => 81,  501 => 154,  493 => 143,  490 => 142,  478 => 154,  470 => 121,  467 => 146,  464 => 125,  459 => 116,  450 => 114,  442 => 62,  433 => 60,  428 => 116,  426 => 58,  405 => 108,  400 => 47,  390 => 43,  385 => 159,  377 => 37,  371 => 35,  363 => 109,  350 => 26,  344 => 24,  332 => 88,  311 => 83,  290 => 90,  276 => 381,  266 => 366,  263 => 125,  245 => 66,  200 => 72,  553 => 186,  548 => 176,  541 => 180,  537 => 159,  525 => 157,  520 => 170,  516 => 169,  513 => 230,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 135,  475 => 152,  462 => 202,  448 => 119,  421 => 90,  414 => 52,  408 => 176,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 101,  348 => 140,  342 => 137,  325 => 129,  313 => 84,  310 => 83,  308 => 89,  302 => 79,  296 => 151,  292 => 91,  255 => 71,  184 => 48,  155 => 73,  146 => 34,  124 => 51,  76 => 31,  194 => 70,  181 => 65,  161 => 75,  318 => 86,  316 => 16,  288 => 79,  284 => 76,  279 => 77,  275 => 105,  256 => 96,  250 => 44,  237 => 71,  222 => 66,  153 => 69,  150 => 55,  110 => 45,  694 => 138,  685 => 406,  680 => 202,  678 => 133,  668 => 395,  663 => 195,  658 => 204,  654 => 123,  647 => 191,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  609 => 362,  599 => 215,  592 => 189,  585 => 209,  581 => 185,  579 => 342,  577 => 206,  571 => 338,  567 => 337,  557 => 96,  550 => 94,  542 => 149,  538 => 319,  531 => 225,  526 => 190,  518 => 180,  514 => 167,  509 => 228,  504 => 155,  492 => 295,  486 => 292,  481 => 155,  466 => 280,  456 => 140,  452 => 272,  445 => 267,  443 => 137,  439 => 195,  429 => 188,  424 => 114,  422 => 184,  420 => 249,  415 => 180,  396 => 234,  383 => 224,  366 => 150,  361 => 146,  346 => 100,  335 => 134,  331 => 187,  326 => 86,  321 => 100,  304 => 81,  291 => 80,  272 => 158,  267 => 101,  242 => 113,  232 => 84,  186 => 51,  152 => 36,  114 => 50,  104 => 42,  358 => 139,  351 => 141,  347 => 140,  343 => 92,  338 => 135,  327 => 102,  323 => 128,  319 => 92,  315 => 125,  301 => 80,  299 => 86,  293 => 90,  289 => 113,  281 => 75,  277 => 78,  271 => 374,  265 => 51,  262 => 98,  260 => 72,  257 => 149,  251 => 101,  248 => 94,  239 => 64,  228 => 41,  225 => 67,  213 => 78,  211 => 81,  197 => 71,  148 => 49,  134 => 54,  127 => 52,  270 => 102,  253 => 78,  233 => 87,  212 => 60,  206 => 57,  198 => 55,  192 => 53,  185 => 75,  180 => 49,  175 => 47,  172 => 62,  167 => 71,  165 => 60,  160 => 39,  137 => 29,  113 => 48,  129 => 67,  84 => 24,  23 => 13,  20 => 1,  126 => 66,  90 => 27,  81 => 23,  77 => 22,  53 => 12,  218 => 128,  215 => 280,  210 => 59,  207 => 75,  202 => 55,  191 => 77,  188 => 76,  174 => 74,  170 => 79,  100 => 62,  97 => 41,  65 => 17,  58 => 13,  34 => 5,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 135,  435 => 258,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 107,  398 => 88,  393 => 168,  387 => 164,  384 => 106,  381 => 105,  379 => 104,  374 => 112,  368 => 34,  365 => 141,  362 => 148,  360 => 128,  355 => 143,  341 => 131,  337 => 90,  322 => 101,  314 => 99,  312 => 124,  309 => 82,  305 => 87,  298 => 120,  294 => 85,  285 => 78,  283 => 166,  278 => 106,  268 => 127,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 90,  229 => 85,  220 => 81,  214 => 63,  177 => 43,  169 => 78,  140 => 51,  132 => 57,  128 => 47,  107 => 44,  61 => 21,  273 => 85,  269 => 100,  254 => 46,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  221 => 38,  219 => 101,  217 => 64,  208 => 57,  204 => 78,  179 => 44,  159 => 39,  143 => 33,  135 => 35,  119 => 40,  102 => 41,  71 => 19,  67 => 24,  63 => 16,  59 => 14,  38 => 6,  94 => 60,  89 => 34,  85 => 32,  75 => 32,  68 => 30,  56 => 25,  87 => 34,  21 => 11,  26 => 14,  93 => 39,  88 => 33,  78 => 37,  46 => 13,  27 => 3,  44 => 8,  31 => 4,  28 => 3,  201 => 56,  196 => 52,  183 => 50,  171 => 73,  166 => 42,  163 => 40,  158 => 74,  156 => 58,  151 => 188,  142 => 30,  138 => 56,  136 => 70,  121 => 50,  117 => 45,  105 => 34,  91 => 39,  62 => 28,  49 => 14,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 31,  69 => 19,  47 => 14,  40 => 7,  37 => 16,  22 => 11,  246 => 93,  157 => 56,  145 => 53,  139 => 51,  131 => 48,  123 => 42,  120 => 46,  115 => 47,  111 => 47,  108 => 45,  101 => 37,  98 => 36,  96 => 37,  83 => 33,  74 => 29,  66 => 23,  55 => 16,  52 => 17,  50 => 21,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 8,  209 => 58,  203 => 73,  199 => 265,  193 => 51,  189 => 52,  187 => 87,  182 => 23,  176 => 63,  173 => 46,  168 => 61,  164 => 70,  162 => 59,  154 => 36,  149 => 35,  147 => 54,  144 => 26,  141 => 51,  133 => 69,  130 => 46,  125 => 51,  122 => 45,  116 => 39,  112 => 105,  109 => 46,  106 => 64,  103 => 38,  99 => 31,  95 => 41,  92 => 59,  86 => 33,  82 => 33,  80 => 32,  73 => 20,  64 => 23,  60 => 26,  57 => 19,  54 => 12,  51 => 16,  48 => 22,  45 => 10,  42 => 13,  39 => 12,  36 => 17,  33 => 4,  30 => 3,);
    }
}
