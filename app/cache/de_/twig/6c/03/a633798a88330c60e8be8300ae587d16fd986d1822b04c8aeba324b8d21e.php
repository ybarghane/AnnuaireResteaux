<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_6c03a633798a88330c60e8be8300ae587d16fd986d1822b04c8aeba324b8d21e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                    // line 18
                    echo "            ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                    // line 19
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 22
                echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                echo "</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                                ";
                    if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 31
                        echo "                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                        echo "
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        ";
                        // line 37
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 38
                            echo "                                                            ";
                            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                                // line 39
                                echo "                                                                <a class=\"btn btn-link btn-flat\" href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                                echo "\">
                                                                    <i class=\"fa fa-plus-circle\"></i>
                                                                    ";
                                // line 41
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 42
                                echo "                                                                </a>
                                                            ";
                            } else {
                                // line 44
                                echo "                                                                <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                                    <i class=\"fa fa-plus-circle\"></i>
                                                                    ";
                                // line 46
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 47
                                echo "                                                                    <span class=\"caret\"></span>
                                                                </a>
                                                                <ul class=\"dropdown-menu\">
                                                                    ";
                                // line 50
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 51
                                    echo "                                                                        <li>
                                                                            <a href=\"";
                                    // line 52
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), "html", null, true);
                                    echo "</a>
                                                                        </li>
                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 55
                                echo "                                                                </ul>
                                                            ";
                            }
                            // line 57
                            echo "                                                        ";
                        }
                        // line 58
                        echo "                                                        ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 59
                            echo "                                                            <a class=\"btn btn-link btn-flat\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">
                                                                <i class=\"glyphicon glyphicon-list\"></i>
                                                                ";
                            // line 61
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 62
                            echo "</a>
                                                        ";
                        }
                        // line 64
                        echo "                                                    </div>
                                                </td>
                                            </tr>
                                ";
                    }
                    // line 68
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
            }
            // line 74
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  661 => 205,  652 => 200,  648 => 198,  646 => 197,  641 => 196,  624 => 194,  607 => 193,  603 => 192,  595 => 190,  589 => 188,  586 => 187,  584 => 186,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  561 => 175,  558 => 174,  554 => 153,  539 => 148,  536 => 147,  523 => 167,  521 => 166,  507 => 160,  476 => 147,  447 => 137,  441 => 136,  425 => 132,  419 => 130,  416 => 129,  410 => 127,  404 => 125,  401 => 124,  382 => 115,  376 => 113,  369 => 111,  359 => 107,  356 => 105,  353 => 103,  329 => 96,  195 => 51,  118 => 29,  306 => 88,  303 => 87,  300 => 139,  286 => 82,  280 => 78,  274 => 129,  236 => 109,  216 => 100,  70 => 29,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 229,  753 => 228,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  675 => 132,  666 => 126,  662 => 125,  649 => 122,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  529 => 169,  527 => 91,  524 => 90,  515 => 85,  512 => 162,  503 => 81,  501 => 158,  493 => 78,  490 => 77,  478 => 154,  470 => 73,  467 => 146,  464 => 71,  459 => 69,  450 => 138,  442 => 62,  433 => 60,  428 => 133,  426 => 58,  405 => 49,  400 => 47,  390 => 43,  385 => 116,  377 => 37,  371 => 35,  363 => 109,  350 => 26,  344 => 24,  332 => 97,  311 => 14,  290 => 5,  276 => 381,  266 => 366,  263 => 125,  245 => 66,  200 => 73,  553 => 186,  548 => 151,  541 => 180,  537 => 178,  525 => 172,  520 => 170,  516 => 169,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 153,  475 => 152,  462 => 143,  448 => 139,  421 => 126,  414 => 52,  408 => 50,  403 => 48,  399 => 116,  391 => 113,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 101,  342 => 23,  325 => 94,  313 => 15,  310 => 89,  308 => 89,  302 => 84,  296 => 82,  292 => 135,  255 => 71,  184 => 233,  155 => 53,  146 => 181,  124 => 31,  76 => 27,  194 => 248,  181 => 232,  161 => 202,  318 => 145,  316 => 16,  288 => 4,  284 => 106,  279 => 104,  275 => 103,  256 => 121,  250 => 69,  237 => 70,  222 => 297,  153 => 72,  150 => 61,  110 => 26,  694 => 138,  685 => 406,  680 => 134,  678 => 133,  668 => 395,  663 => 393,  658 => 204,  654 => 123,  647 => 382,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  609 => 362,  599 => 355,  592 => 189,  585 => 347,  581 => 185,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 96,  550 => 94,  542 => 149,  538 => 319,  531 => 175,  526 => 310,  518 => 165,  514 => 306,  509 => 161,  504 => 159,  492 => 295,  486 => 292,  481 => 155,  466 => 280,  456 => 140,  452 => 272,  445 => 267,  443 => 137,  439 => 260,  429 => 255,  424 => 128,  422 => 131,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 110,  361 => 208,  346 => 100,  335 => 98,  331 => 187,  326 => 185,  321 => 123,  304 => 174,  291 => 84,  272 => 158,  267 => 74,  242 => 113,  232 => 84,  186 => 239,  152 => 62,  114 => 111,  104 => 18,  358 => 139,  351 => 102,  347 => 134,  343 => 132,  338 => 99,  327 => 126,  323 => 125,  319 => 92,  315 => 91,  301 => 117,  299 => 86,  293 => 6,  289 => 83,  281 => 388,  277 => 78,  271 => 374,  265 => 126,  262 => 105,  260 => 72,  257 => 149,  251 => 101,  248 => 116,  239 => 97,  228 => 68,  225 => 64,  213 => 126,  211 => 81,  197 => 90,  148 => 64,  134 => 55,  127 => 32,  270 => 75,  253 => 70,  233 => 304,  212 => 279,  206 => 71,  198 => 53,  192 => 88,  185 => 86,  180 => 66,  175 => 74,  172 => 46,  167 => 48,  165 => 77,  160 => 76,  137 => 46,  113 => 41,  129 => 148,  84 => 41,  23 => 18,  20 => 11,  126 => 147,  90 => 38,  81 => 33,  77 => 31,  53 => 20,  218 => 128,  215 => 280,  210 => 270,  207 => 269,  202 => 266,  191 => 246,  188 => 15,  174 => 217,  170 => 79,  100 => 42,  97 => 63,  65 => 30,  58 => 22,  34 => 16,  480 => 75,  474 => 285,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 149,  440 => 148,  437 => 135,  435 => 258,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 130,  398 => 123,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 112,  368 => 34,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 99,  312 => 90,  309 => 117,  305 => 87,  298 => 173,  294 => 85,  285 => 3,  283 => 166,  278 => 387,  268 => 127,  264 => 73,  258 => 354,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 63,  214 => 61,  177 => 49,  169 => 44,  140 => 52,  132 => 34,  128 => 58,  107 => 25,  61 => 23,  273 => 380,  269 => 100,  254 => 102,  243 => 327,  240 => 65,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  221 => 67,  219 => 101,  217 => 62,  208 => 57,  204 => 55,  179 => 224,  159 => 39,  143 => 38,  135 => 35,  119 => 117,  102 => 38,  71 => 19,  67 => 32,  63 => 24,  59 => 185,  38 => 17,  94 => 16,  89 => 33,  85 => 31,  75 => 39,  68 => 31,  56 => 21,  87 => 33,  21 => 11,  26 => 14,  93 => 39,  88 => 37,  78 => 14,  46 => 19,  27 => 12,  44 => 17,  31 => 60,  28 => 14,  201 => 65,  196 => 65,  183 => 82,  171 => 216,  166 => 42,  163 => 45,  158 => 75,  156 => 64,  151 => 188,  142 => 61,  138 => 57,  136 => 60,  121 => 30,  117 => 51,  105 => 44,  91 => 56,  62 => 24,  49 => 123,  24 => 11,  25 => 12,  19 => 11,  79 => 28,  72 => 37,  69 => 24,  47 => 18,  40 => 13,  37 => 17,  22 => 12,  246 => 99,  157 => 57,  145 => 52,  139 => 169,  131 => 160,  123 => 52,  120 => 51,  115 => 28,  111 => 47,  108 => 48,  101 => 42,  98 => 21,  96 => 67,  83 => 16,  74 => 30,  66 => 217,  55 => 21,  52 => 20,  50 => 19,  43 => 18,  41 => 81,  35 => 16,  32 => 18,  29 => 15,  209 => 96,  203 => 93,  199 => 265,  193 => 50,  189 => 240,  187 => 87,  182 => 85,  176 => 82,  173 => 65,  168 => 69,  164 => 41,  162 => 68,  154 => 189,  149 => 182,  147 => 69,  144 => 59,  141 => 58,  133 => 55,  130 => 33,  125 => 46,  122 => 44,  116 => 50,  112 => 27,  109 => 46,  106 => 104,  103 => 43,  99 => 41,  95 => 20,  92 => 19,  86 => 17,  82 => 33,  80 => 41,  73 => 12,  64 => 204,  60 => 22,  57 => 20,  54 => 174,  51 => 173,  48 => 24,  45 => 23,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  30 => 15,);
    }
}
