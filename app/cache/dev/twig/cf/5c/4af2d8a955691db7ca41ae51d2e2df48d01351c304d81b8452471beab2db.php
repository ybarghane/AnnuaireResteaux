<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_cf5c4af2d8a955691db7ca41ae51d2e2df48d01351c304d81b8452471beab2db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"form-control per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "html", null, true);
        echo "_per_page\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (((isset($context["per_page"]) ? $context["per_page"] : $this->getContext($context, "per_page")) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "values"), array("_page" => 1, "_per_page" => (isset($context["per_page"]) ? $context["per_page"] : $this->getContext($context, "per_page")))))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["per_page"]) ? $context["per_page"] : $this->getContext($context, "per_page")), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  52 => 17,  35 => 22,  27 => 16,  25 => 12,  56 => 28,  48 => 25,  38 => 21,  32 => 21,  30 => 17,  24 => 12,  21 => 11,  36 => 20,  34 => 16,  31 => 15,  29 => 15,  26 => 14,  22 => 11,  19 => 11,  952 => 271,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  897 => 285,  894 => 284,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  849 => 261,  844 => 258,  836 => 253,  830 => 249,  828 => 248,  824 => 246,  818 => 244,  816 => 243,  812 => 241,  806 => 238,  803 => 237,  801 => 236,  798 => 235,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  769 => 264,  767 => 232,  764 => 231,  761 => 230,  756 => 222,  753 => 221,  749 => 220,  745 => 218,  739 => 217,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  696 => 207,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  680 => 202,  673 => 199,  669 => 198,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 189,  632 => 187,  629 => 186,  626 => 184,  619 => 183,  616 => 182,  610 => 181,  603 => 179,  600 => 178,  597 => 177,  588 => 175,  584 => 173,  570 => 164,  564 => 162,  561 => 161,  558 => 160,  554 => 224,  548 => 176,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  525 => 157,  522 => 156,  515 => 305,  513 => 230,  509 => 228,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 125,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 116,  418 => 112,  408 => 109,  405 => 108,  402 => 107,  384 => 106,  373 => 102,  370 => 101,  366 => 150,  362 => 148,  360 => 128,  356 => 126,  343 => 92,  337 => 90,  332 => 88,  311 => 83,  309 => 82,  304 => 81,  301 => 80,  296 => 151,  293 => 90,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  221 => 38,  216 => 35,  203 => 32,  200 => 31,  197 => 30,  191 => 26,  188 => 25,  182 => 23,  176 => 309,  174 => 154,  171 => 153,  165 => 77,  161 => 75,  158 => 74,  155 => 73,  141 => 72,  136 => 70,  133 => 69,  123 => 65,  106 => 64,  94 => 60,  92 => 59,  87 => 28,  83 => 55,  81 => 26,  78 => 37,  76 => 35,  73 => 24,  71 => 25,  66 => 23,  63 => 22,  61 => 29,  59 => 20,  57 => 19,  53 => 27,  51 => 26,  47 => 14,  45 => 24,  43 => 12,  41 => 11,  635 => 188,  624 => 224,  620 => 223,  612 => 220,  607 => 180,  601 => 216,  599 => 215,  594 => 176,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  555 => 200,  551 => 221,  545 => 198,  536 => 194,  532 => 192,  529 => 159,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  507 => 156,  504 => 155,  501 => 154,  497 => 156,  493 => 143,  490 => 142,  485 => 124,  474 => 122,  470 => 121,  463 => 117,  459 => 116,  455 => 115,  450 => 114,  447 => 113,  424 => 114,  421 => 90,  415 => 127,  412 => 126,  410 => 110,  406 => 111,  404 => 90,  401 => 89,  398 => 88,  393 => 168,  391 => 163,  385 => 159,  381 => 105,  379 => 104,  376 => 103,  369 => 148,  359 => 144,  354 => 101,  351 => 141,  347 => 140,  340 => 91,  335 => 133,  333 => 132,  329 => 130,  326 => 86,  323 => 85,  320 => 84,  318 => 86,  313 => 84,  310 => 83,  307 => 82,  302 => 79,  287 => 77,  284 => 76,  281 => 75,  264 => 74,  261 => 50,  258 => 72,  252 => 68,  246 => 67,  243 => 66,  239 => 64,  235 => 63,  230 => 62,  224 => 39,  212 => 60,  210 => 59,  207 => 33,  204 => 57,  201 => 56,  198 => 55,  195 => 54,  192 => 53,  189 => 52,  186 => 51,  183 => 50,  180 => 49,  178 => 48,  175 => 47,  173 => 46,  169 => 78,  163 => 40,  160 => 39,  156 => 38,  152 => 36,  149 => 35,  144 => 26,  134 => 182,  131 => 181,  129 => 67,  126 => 66,  120 => 176,  117 => 175,  114 => 174,  110 => 172,  108 => 171,  105 => 170,  103 => 63,  100 => 62,  98 => 72,  95 => 71,  93 => 35,  90 => 27,  85 => 32,  80 => 31,  77 => 25,  74 => 29,  72 => 28,  69 => 27,  67 => 32,  62 => 24,  58 => 19,  55 => 18,  49 => 15,  42 => 13,  39 => 12,);
    }
}
