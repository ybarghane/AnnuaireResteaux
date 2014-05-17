<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_6c4d72d6a18cb8e9cb6b1fafb6a82aac637cd8a419467dfd90d4f1f975876b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
    <div class=\"col-md-5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 35
            echo "                    <tr>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 103,  287 => 89,  231 => 69,  190 => 49,  178 => 46,  12 => 36,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  661 => 205,  652 => 200,  648 => 198,  646 => 197,  641 => 196,  624 => 194,  607 => 193,  603 => 192,  595 => 190,  589 => 188,  586 => 187,  584 => 186,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  561 => 175,  558 => 174,  554 => 153,  539 => 148,  536 => 147,  523 => 167,  521 => 166,  507 => 160,  476 => 147,  447 => 137,  441 => 136,  425 => 132,  419 => 130,  416 => 129,  410 => 127,  404 => 125,  401 => 124,  382 => 115,  376 => 113,  369 => 111,  359 => 107,  356 => 105,  353 => 103,  329 => 96,  195 => 51,  118 => 46,  306 => 95,  303 => 94,  300 => 93,  286 => 82,  280 => 87,  274 => 129,  236 => 109,  216 => 100,  70 => 27,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 229,  753 => 228,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  675 => 132,  666 => 126,  662 => 125,  649 => 122,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  529 => 169,  527 => 91,  524 => 90,  515 => 85,  512 => 162,  503 => 81,  501 => 158,  493 => 78,  490 => 77,  478 => 154,  470 => 73,  467 => 146,  464 => 71,  459 => 69,  450 => 138,  442 => 62,  433 => 60,  428 => 133,  426 => 58,  405 => 49,  400 => 47,  390 => 43,  385 => 116,  377 => 37,  371 => 35,  363 => 109,  350 => 26,  344 => 24,  332 => 97,  311 => 14,  290 => 90,  276 => 381,  266 => 366,  263 => 125,  245 => 66,  200 => 54,  553 => 186,  548 => 151,  541 => 180,  537 => 178,  525 => 172,  520 => 170,  516 => 169,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 153,  475 => 152,  462 => 143,  448 => 139,  421 => 126,  414 => 52,  408 => 50,  403 => 48,  399 => 116,  391 => 113,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 101,  342 => 23,  325 => 94,  313 => 15,  310 => 89,  308 => 89,  302 => 84,  296 => 82,  292 => 91,  255 => 71,  184 => 48,  155 => 53,  146 => 34,  124 => 47,  76 => 18,  194 => 52,  181 => 232,  161 => 202,  318 => 145,  316 => 16,  288 => 4,  284 => 106,  279 => 104,  275 => 86,  256 => 79,  250 => 69,  237 => 71,  222 => 66,  153 => 72,  150 => 34,  110 => 63,  694 => 138,  685 => 406,  680 => 134,  678 => 133,  668 => 395,  663 => 393,  658 => 204,  654 => 123,  647 => 382,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  609 => 362,  599 => 355,  592 => 189,  585 => 347,  581 => 185,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 96,  550 => 94,  542 => 149,  538 => 319,  531 => 175,  526 => 310,  518 => 165,  514 => 306,  509 => 161,  504 => 159,  492 => 295,  486 => 292,  481 => 155,  466 => 280,  456 => 140,  452 => 272,  445 => 267,  443 => 137,  439 => 260,  429 => 255,  424 => 128,  422 => 131,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 110,  361 => 208,  346 => 100,  335 => 98,  331 => 187,  326 => 185,  321 => 100,  304 => 174,  291 => 84,  272 => 158,  267 => 74,  242 => 113,  232 => 84,  186 => 47,  152 => 61,  114 => 111,  104 => 34,  358 => 139,  351 => 102,  347 => 134,  343 => 132,  338 => 99,  327 => 102,  323 => 125,  319 => 92,  315 => 98,  301 => 117,  299 => 86,  293 => 6,  289 => 83,  281 => 388,  277 => 78,  271 => 374,  265 => 126,  262 => 81,  260 => 72,  257 => 149,  251 => 101,  248 => 116,  239 => 97,  228 => 68,  225 => 67,  213 => 126,  211 => 81,  197 => 90,  148 => 49,  134 => 28,  127 => 32,  270 => 84,  253 => 78,  233 => 304,  212 => 279,  206 => 57,  198 => 53,  192 => 88,  185 => 61,  180 => 66,  175 => 45,  172 => 46,  167 => 56,  165 => 77,  160 => 40,  137 => 29,  113 => 39,  129 => 25,  84 => 41,  23 => 18,  20 => 1,  126 => 24,  90 => 24,  81 => 20,  77 => 29,  53 => 22,  218 => 128,  215 => 280,  210 => 270,  207 => 269,  202 => 55,  191 => 246,  188 => 48,  174 => 42,  170 => 79,  100 => 57,  97 => 56,  65 => 30,  58 => 24,  34 => 15,  480 => 75,  474 => 285,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 149,  440 => 148,  437 => 135,  435 => 258,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 130,  398 => 123,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 112,  368 => 34,  365 => 141,  362 => 110,  360 => 109,  355 => 27,  341 => 131,  337 => 22,  322 => 101,  314 => 99,  312 => 97,  309 => 117,  305 => 87,  298 => 173,  294 => 85,  285 => 3,  283 => 166,  278 => 387,  268 => 127,  264 => 82,  258 => 354,  252 => 80,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 44,  140 => 51,  132 => 42,  128 => 47,  107 => 38,  61 => 28,  273 => 85,  269 => 100,  254 => 102,  243 => 73,  240 => 72,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  221 => 67,  219 => 101,  217 => 64,  208 => 57,  204 => 55,  179 => 44,  159 => 39,  143 => 33,  135 => 35,  119 => 108,  102 => 37,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  38 => 5,  94 => 30,  89 => 33,  85 => 31,  75 => 29,  68 => 24,  56 => 25,  87 => 23,  21 => 11,  26 => 14,  93 => 17,  88 => 37,  78 => 34,  46 => 8,  27 => 14,  44 => 18,  31 => 23,  28 => 22,  201 => 65,  196 => 52,  183 => 46,  171 => 44,  166 => 42,  163 => 58,  158 => 75,  156 => 38,  151 => 188,  142 => 30,  138 => 49,  136 => 58,  121 => 24,  117 => 51,  105 => 61,  91 => 37,  62 => 14,  49 => 21,  24 => 1,  25 => 12,  19 => 11,  79 => 35,  72 => 28,  69 => 16,  47 => 22,  40 => 17,  37 => 24,  22 => 12,  246 => 99,  157 => 56,  145 => 54,  139 => 59,  131 => 160,  123 => 48,  120 => 46,  115 => 45,  111 => 39,  108 => 42,  101 => 40,  98 => 36,  96 => 18,  83 => 32,  74 => 30,  66 => 30,  55 => 12,  52 => 22,  50 => 21,  43 => 18,  41 => 6,  35 => 16,  32 => 4,  29 => 3,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 63,  187 => 87,  182 => 85,  176 => 58,  173 => 65,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 62,  147 => 52,  144 => 48,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 107,  112 => 105,  109 => 43,  106 => 104,  103 => 41,  99 => 41,  95 => 35,  92 => 27,  86 => 28,  82 => 36,  80 => 13,  73 => 17,  64 => 24,  60 => 18,  57 => 18,  54 => 16,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 17,  36 => 4,  33 => 16,  30 => 15,);
    }
}
