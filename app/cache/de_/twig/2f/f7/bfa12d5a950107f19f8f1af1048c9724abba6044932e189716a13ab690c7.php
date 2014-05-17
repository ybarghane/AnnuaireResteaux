<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2ff7bfa12d5a950107f19f8f1af1048c9724abba6044932e189716a13ab690c7 extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  20 => 1,  126 => 52,  90 => 27,  81 => 24,  77 => 22,  53 => 12,  218 => 128,  215 => 127,  210 => 123,  207 => 122,  202 => 74,  191 => 16,  188 => 15,  174 => 127,  170 => 125,  100 => 27,  97 => 65,  65 => 17,  58 => 18,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 20,  63 => 19,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 15,  87 => 25,  21 => 2,  26 => 6,  93 => 29,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 77,  117 => 76,  105 => 40,  91 => 27,  62 => 19,  49 => 13,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 21,  69 => 22,  47 => 9,  40 => 11,  37 => 9,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 73,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 11,  52 => 10,  50 => 11,  43 => 6,  41 => 13,  35 => 10,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 73,  193 => 73,  189 => 71,  187 => 84,  182 => 99,  176 => 131,  173 => 65,  168 => 122,  164 => 84,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 67,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 72,  109 => 34,  106 => 69,  103 => 28,  99 => 31,  95 => 64,  92 => 21,  86 => 26,  82 => 22,  80 => 19,  73 => 20,  64 => 17,  60 => 14,  57 => 14,  54 => 16,  51 => 10,  48 => 19,  45 => 17,  42 => 11,  39 => 9,  36 => 10,  33 => 6,  30 => 1,);
    }
}
