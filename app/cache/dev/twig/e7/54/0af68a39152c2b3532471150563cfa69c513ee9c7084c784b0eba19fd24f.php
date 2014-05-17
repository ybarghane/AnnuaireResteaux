<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_e7540af68a39152c2b3532471150563cfa69c513ee9c7084c784b0eba19fd24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["itemsPerColumn"] = $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["columnsCount"] = twig_round((twig_length_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups")) / (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))));
        // line 4
        echo "

    <ul class=\"dropdown-menu";
        // line 6
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo " multi-column";
        }
        echo " dropdown-add\"
        ";
        // line 7
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo "            >
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 11
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                    // line 12
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                    // line 13
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
            ";
            // line 16
            echo "            ";
            $context["item_count"] = 0;
            // line 17
            echo "            ";
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 18
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                        // line 19
                        echo "                    ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 20
                            echo "                        ";
                            $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                            // line 21
                            echo "                    ";
                        }
                        // line 22
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "
            ";
            // line 25
            if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                // line 26
                echo "                ";
                if ((((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 27
                    echo "                    ";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                        // line 28
                        echo "                        <div class=\"row\">
                    ";
                    }
                    // line 30
                    echo "                    <div class=\"col-md-";
                    echo twig_escape_filter($this->env, twig_round((12 / (isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")))), "html", null, true);
                    echo "\">
                    <ul class=\"dropdown-menu\">
                ";
                }
                // line 33
                echo "
                <li role=\"presentation\" class=\"dropdown-header\">";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                echo "</li>
                ";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 36
                    echo "                    ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 37
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "
                ";
                // line 43
                if (((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) != 0))) {
                    // line 44
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 46
                echo "
            ";
                // line 47
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 48
                    echo "                </ul>
                </div>
            ";
                }
                // line 51
                echo "                ";
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    // line 52
                    echo "                    </div>
                ";
                }
                // line 54
                echo "            ";
            }
            // line 55
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 52,  193 => 51,  179 => 44,  154 => 36,  150 => 35,  143 => 33,  132 => 28,  124 => 25,  121 => 24,  118 => 23,  111 => 22,  102 => 19,  96 => 18,  20 => 1,  68 => 10,  54 => 26,  50 => 25,  33 => 16,  238 => 84,  233 => 82,  227 => 80,  217 => 56,  214 => 75,  187 => 69,  184 => 68,  177 => 43,  168 => 41,  162 => 60,  157 => 37,  153 => 55,  151 => 54,  146 => 34,  140 => 52,  125 => 46,  109 => 45,  89 => 39,  86 => 38,  64 => 30,  99 => 30,  52 => 17,  35 => 19,  27 => 14,  25 => 12,  56 => 28,  48 => 8,  38 => 18,  32 => 4,  30 => 17,  24 => 13,  21 => 11,  36 => 6,  34 => 16,  31 => 15,  29 => 3,  26 => 2,  22 => 12,  19 => 11,  952 => 271,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  897 => 285,  894 => 284,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  849 => 261,  844 => 258,  836 => 253,  830 => 249,  828 => 248,  824 => 246,  818 => 244,  816 => 243,  812 => 241,  806 => 238,  803 => 237,  801 => 236,  798 => 235,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  769 => 264,  767 => 232,  764 => 231,  761 => 230,  756 => 222,  753 => 221,  749 => 220,  745 => 218,  739 => 217,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  696 => 207,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  680 => 202,  673 => 199,  669 => 198,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 189,  632 => 187,  629 => 186,  626 => 184,  619 => 183,  616 => 182,  610 => 181,  603 => 179,  600 => 178,  597 => 177,  588 => 175,  584 => 173,  570 => 164,  564 => 162,  561 => 161,  558 => 160,  554 => 224,  548 => 176,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  525 => 157,  522 => 156,  515 => 305,  513 => 230,  509 => 228,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 125,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 116,  418 => 112,  408 => 109,  405 => 108,  402 => 107,  384 => 106,  373 => 102,  370 => 101,  366 => 150,  362 => 148,  360 => 128,  356 => 126,  343 => 92,  337 => 90,  332 => 88,  311 => 83,  309 => 82,  304 => 81,  301 => 80,  296 => 151,  293 => 90,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  221 => 38,  216 => 35,  203 => 55,  200 => 54,  197 => 72,  191 => 26,  188 => 48,  182 => 23,  176 => 309,  174 => 42,  171 => 63,  165 => 61,  161 => 75,  158 => 74,  155 => 73,  141 => 72,  136 => 30,  133 => 69,  123 => 65,  106 => 64,  94 => 60,  92 => 59,  87 => 14,  83 => 37,  81 => 26,  78 => 37,  76 => 35,  73 => 24,  71 => 11,  66 => 23,  63 => 22,  61 => 29,  59 => 20,  57 => 27,  53 => 27,  51 => 9,  47 => 14,  45 => 23,  43 => 21,  41 => 11,  635 => 188,  624 => 224,  620 => 223,  612 => 220,  607 => 180,  601 => 216,  599 => 215,  594 => 176,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  555 => 200,  551 => 221,  545 => 198,  536 => 194,  532 => 192,  529 => 159,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  507 => 156,  504 => 155,  501 => 154,  497 => 156,  493 => 143,  490 => 142,  485 => 124,  474 => 122,  470 => 121,  463 => 117,  459 => 116,  455 => 115,  450 => 114,  447 => 113,  424 => 114,  421 => 90,  415 => 127,  412 => 126,  410 => 110,  406 => 111,  404 => 90,  401 => 89,  398 => 88,  393 => 168,  391 => 163,  385 => 159,  381 => 105,  379 => 104,  376 => 103,  369 => 148,  359 => 144,  354 => 101,  351 => 141,  347 => 140,  340 => 91,  335 => 133,  333 => 132,  329 => 130,  326 => 86,  323 => 85,  320 => 84,  318 => 86,  313 => 84,  310 => 83,  307 => 82,  302 => 79,  287 => 77,  284 => 76,  281 => 75,  264 => 74,  261 => 50,  258 => 72,  252 => 68,  246 => 67,  243 => 66,  239 => 64,  235 => 63,  230 => 81,  224 => 79,  212 => 74,  210 => 59,  207 => 33,  204 => 57,  201 => 56,  198 => 55,  195 => 54,  192 => 53,  189 => 70,  186 => 47,  183 => 46,  180 => 66,  178 => 48,  175 => 47,  173 => 46,  169 => 78,  163 => 40,  160 => 38,  156 => 38,  152 => 36,  149 => 35,  144 => 26,  134 => 49,  131 => 181,  129 => 27,  126 => 26,  120 => 176,  117 => 175,  114 => 174,  110 => 172,  108 => 21,  105 => 20,  103 => 43,  100 => 42,  98 => 72,  95 => 41,  93 => 17,  90 => 16,  85 => 32,  80 => 13,  77 => 12,  74 => 34,  72 => 28,  69 => 27,  67 => 32,  62 => 24,  58 => 28,  55 => 18,  49 => 15,  42 => 7,  39 => 12,);
    }
}
