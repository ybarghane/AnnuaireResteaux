<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_3a0d1db624e0f4944da7fbe67ea63e7a11a44e90ba4edf92de99ffee70d1d490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
            // line 24
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"));
            // line 25
            echo "
        ";
            // line 26
            if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
                // line 27
                echo "            ";
                $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")));
                // line 28
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 29
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 32
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "</td>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
    }

    // line 28
    public function block_field_span_attributes($context, array $blocks = array())
    {
        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label"), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain")), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 223,  612 => 220,  601 => 216,  594 => 212,  580 => 207,  574 => 205,  559 => 201,  551 => 199,  545 => 198,  532 => 192,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  412 => 126,  406 => 111,  340 => 136,  333 => 132,  320 => 87,  307 => 82,  261 => 73,  330 => 103,  287 => 77,  231 => 69,  190 => 49,  178 => 48,  12 => 36,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  661 => 205,  652 => 200,  648 => 198,  646 => 197,  641 => 196,  624 => 224,  607 => 218,  603 => 192,  595 => 190,  589 => 188,  586 => 187,  584 => 186,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 175,  558 => 174,  554 => 153,  539 => 148,  536 => 194,  523 => 189,  521 => 166,  507 => 165,  476 => 147,  447 => 113,  441 => 136,  425 => 132,  419 => 130,  416 => 129,  410 => 113,  404 => 90,  401 => 89,  382 => 115,  376 => 153,  369 => 148,  359 => 144,  356 => 105,  353 => 103,  329 => 130,  195 => 54,  118 => 46,  306 => 95,  303 => 94,  300 => 93,  286 => 82,  280 => 87,  274 => 129,  236 => 109,  216 => 100,  70 => 27,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 229,  753 => 228,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  675 => 132,  666 => 126,  662 => 125,  649 => 122,  640 => 119,  638 => 118,  635 => 226,  619 => 113,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  555 => 200,  547 => 93,  529 => 191,  527 => 91,  524 => 90,  515 => 85,  512 => 162,  503 => 81,  501 => 163,  493 => 155,  490 => 154,  478 => 154,  470 => 121,  467 => 146,  464 => 71,  459 => 116,  450 => 114,  442 => 62,  433 => 60,  428 => 133,  426 => 58,  405 => 49,  400 => 47,  390 => 43,  385 => 159,  377 => 37,  371 => 35,  363 => 109,  350 => 26,  344 => 24,  332 => 97,  311 => 14,  290 => 90,  276 => 381,  266 => 366,  263 => 125,  245 => 66,  200 => 54,  553 => 186,  548 => 151,  541 => 180,  537 => 178,  525 => 172,  520 => 170,  516 => 169,  513 => 168,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 153,  475 => 152,  462 => 143,  448 => 139,  421 => 90,  414 => 52,  408 => 50,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 142,  348 => 101,  342 => 23,  325 => 94,  313 => 84,  310 => 83,  308 => 89,  302 => 79,  296 => 82,  292 => 91,  255 => 71,  184 => 48,  155 => 53,  146 => 34,  124 => 47,  76 => 35,  194 => 52,  181 => 232,  161 => 202,  318 => 86,  316 => 16,  288 => 4,  284 => 76,  279 => 104,  275 => 86,  256 => 79,  250 => 69,  237 => 71,  222 => 66,  153 => 72,  150 => 34,  110 => 172,  694 => 138,  685 => 406,  680 => 134,  678 => 133,  668 => 395,  663 => 393,  658 => 204,  654 => 123,  647 => 382,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  609 => 362,  599 => 215,  592 => 189,  585 => 209,  581 => 185,  579 => 342,  577 => 206,  571 => 338,  567 => 337,  557 => 96,  550 => 94,  542 => 149,  538 => 319,  531 => 175,  526 => 190,  518 => 180,  514 => 167,  509 => 161,  504 => 164,  492 => 295,  486 => 292,  481 => 155,  466 => 280,  456 => 140,  452 => 272,  445 => 267,  443 => 137,  439 => 260,  429 => 255,  424 => 91,  422 => 131,  420 => 249,  415 => 127,  396 => 234,  383 => 224,  366 => 110,  361 => 208,  346 => 100,  335 => 133,  331 => 187,  326 => 129,  321 => 100,  304 => 174,  291 => 84,  272 => 158,  267 => 74,  242 => 113,  232 => 84,  186 => 51,  152 => 36,  114 => 174,  104 => 34,  358 => 139,  351 => 141,  347 => 140,  343 => 132,  338 => 99,  327 => 102,  323 => 88,  319 => 92,  315 => 98,  301 => 117,  299 => 86,  293 => 6,  289 => 83,  281 => 75,  277 => 78,  271 => 374,  265 => 126,  262 => 81,  260 => 72,  257 => 149,  251 => 101,  248 => 116,  239 => 64,  228 => 68,  225 => 67,  213 => 126,  211 => 81,  197 => 90,  148 => 49,  134 => 182,  127 => 32,  270 => 84,  253 => 78,  233 => 304,  212 => 60,  206 => 57,  198 => 55,  192 => 53,  185 => 61,  180 => 49,  175 => 47,  172 => 46,  167 => 56,  165 => 77,  160 => 39,  137 => 29,  113 => 39,  129 => 180,  84 => 41,  23 => 18,  20 => 1,  126 => 179,  90 => 34,  81 => 20,  77 => 30,  53 => 27,  218 => 128,  215 => 280,  210 => 59,  207 => 58,  202 => 55,  191 => 246,  188 => 48,  174 => 42,  170 => 79,  100 => 81,  97 => 56,  65 => 30,  58 => 22,  34 => 15,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 149,  440 => 148,  437 => 135,  435 => 258,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 130,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 112,  368 => 34,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 99,  312 => 97,  309 => 117,  305 => 87,  298 => 173,  294 => 85,  285 => 3,  283 => 166,  278 => 387,  268 => 127,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 44,  140 => 51,  132 => 42,  128 => 47,  107 => 38,  61 => 29,  273 => 85,  269 => 100,  254 => 102,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 61,  221 => 67,  219 => 101,  217 => 64,  208 => 57,  204 => 57,  179 => 44,  159 => 39,  143 => 33,  135 => 35,  119 => 108,  102 => 37,  71 => 30,  67 => 32,  63 => 16,  59 => 27,  38 => 21,  94 => 30,  89 => 33,  85 => 32,  75 => 29,  68 => 24,  56 => 28,  87 => 28,  21 => 11,  26 => 14,  93 => 35,  88 => 37,  78 => 21,  46 => 8,  27 => 14,  44 => 18,  31 => 23,  28 => 22,  201 => 56,  196 => 52,  183 => 50,  171 => 44,  166 => 42,  163 => 40,  158 => 75,  156 => 38,  151 => 188,  142 => 30,  138 => 49,  136 => 58,  121 => 24,  117 => 175,  105 => 170,  91 => 37,  62 => 24,  49 => 18,  24 => 12,  25 => 12,  19 => 11,  79 => 35,  72 => 28,  69 => 27,  47 => 22,  40 => 24,  37 => 24,  22 => 11,  246 => 67,  157 => 56,  145 => 54,  139 => 59,  131 => 181,  123 => 48,  120 => 176,  115 => 45,  111 => 39,  108 => 171,  101 => 40,  98 => 72,  96 => 18,  83 => 32,  74 => 29,  66 => 17,  55 => 21,  52 => 22,  50 => 21,  43 => 25,  41 => 6,  35 => 16,  32 => 19,  29 => 3,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 52,  187 => 87,  182 => 85,  176 => 58,  173 => 46,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 52,  144 => 26,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 107,  112 => 105,  109 => 43,  106 => 104,  103 => 82,  99 => 41,  95 => 71,  92 => 28,  86 => 25,  82 => 23,  80 => 31,  73 => 34,  64 => 24,  60 => 15,  57 => 14,  54 => 16,  51 => 26,  48 => 25,  45 => 24,  42 => 23,  39 => 14,  36 => 20,  33 => 16,  30 => 13,);
    }
}
