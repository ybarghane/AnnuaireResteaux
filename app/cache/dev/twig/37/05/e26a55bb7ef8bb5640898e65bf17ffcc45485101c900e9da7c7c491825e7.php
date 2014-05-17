<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_3705e26a55bb7ef8bb5640898e65bf17ffcc45485101c900e9da7c7c491825e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "history"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  786 => 238,  780 => 235,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  756 => 229,  753 => 228,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  661 => 205,  658 => 204,  652 => 200,  648 => 198,  646 => 197,  641 => 196,  624 => 194,  607 => 193,  603 => 192,  598 => 191,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 186,  581 => 185,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  561 => 175,  558 => 174,  554 => 153,  548 => 151,  542 => 149,  539 => 148,  536 => 147,  529 => 169,  523 => 167,  521 => 166,  518 => 165,  512 => 162,  509 => 161,  507 => 160,  504 => 159,  501 => 158,  483 => 156,  481 => 155,  478 => 154,  476 => 147,  467 => 146,  462 => 143,  456 => 140,  453 => 139,  450 => 138,  447 => 137,  441 => 136,  437 => 135,  430 => 134,  428 => 133,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  413 => 128,  410 => 127,  407 => 126,  404 => 125,  401 => 124,  398 => 123,  388 => 117,  385 => 116,  382 => 115,  376 => 113,  374 => 112,  369 => 111,  366 => 110,  363 => 109,  359 => 107,  356 => 105,  353 => 103,  351 => 102,  348 => 101,  346 => 100,  338 => 99,  335 => 98,  332 => 97,  329 => 96,  325 => 94,  308 => 89,  299 => 86,  294 => 85,  291 => 84,  289 => 83,  267 => 74,  255 => 71,  250 => 69,  245 => 66,  208 => 57,  204 => 55,  198 => 53,  195 => 51,  193 => 50,  177 => 49,  172 => 46,  169 => 44,  166 => 42,  164 => 41,  159 => 39,  143 => 38,  135 => 35,  130 => 33,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  115 => 28,  107 => 25,  101 => 23,  89 => 18,  83 => 16,  66 => 217,  64 => 204,  61 => 203,  56 => 184,  49 => 123,  44 => 82,  39 => 69,  34 => 61,  31 => 60,  29 => 12,  318 => 145,  286 => 82,  274 => 129,  268 => 127,  265 => 126,  263 => 125,  260 => 72,  248 => 116,  242 => 113,  236 => 109,  230 => 106,  224 => 103,  219 => 101,  216 => 100,  203 => 93,  197 => 90,  192 => 88,  187 => 87,  185 => 86,  182 => 85,  176 => 82,  170 => 79,  165 => 77,  158 => 75,  153 => 72,  147 => 69,  144 => 68,  141 => 37,  138 => 36,  136 => 60,  132 => 34,  128 => 58,  123 => 57,  120 => 56,  80 => 41,  75 => 39,  72 => 37,  70 => 33,  67 => 32,  35 => 16,  330 => 103,  327 => 102,  321 => 100,  315 => 91,  312 => 90,  306 => 88,  303 => 87,  300 => 139,  292 => 135,  290 => 90,  287 => 89,  280 => 78,  275 => 86,  273 => 85,  270 => 75,  264 => 73,  262 => 81,  256 => 121,  253 => 70,  247 => 75,  243 => 73,  240 => 65,  237 => 71,  231 => 69,  225 => 64,  222 => 66,  220 => 63,  217 => 62,  214 => 61,  209 => 96,  206 => 57,  202 => 55,  194 => 52,  190 => 49,  184 => 48,  178 => 46,  175 => 45,  171 => 44,  168 => 43,  162 => 41,  160 => 76,  156 => 38,  150 => 34,  142 => 30,  137 => 29,  134 => 28,  129 => 25,  126 => 24,  119 => 108,  112 => 27,  105 => 61,  102 => 60,  100 => 57,  97 => 56,  95 => 20,  92 => 19,  87 => 23,  76 => 13,  73 => 12,  69 => 218,  62 => 29,  59 => 185,  55 => 12,  52 => 11,  46 => 122,  43 => 20,  41 => 81,  38 => 17,  36 => 68,  30 => 15,  24 => 13,  116 => 107,  113 => 39,  110 => 26,  104 => 24,  98 => 21,  94 => 30,  90 => 24,  86 => 17,  81 => 15,  78 => 14,  71 => 23,  68 => 22,  60 => 18,  54 => 174,  51 => 173,  48 => 14,  12 => 36,);
    }
}
