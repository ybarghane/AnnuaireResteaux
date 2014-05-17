<?php

/* ::base.html.twig */
class __TwigTemplate_299384c0490c47b31cc0e4cf79d4f7c52c02825f2edf5002ab65f84eb3727bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t <!-- Mobile Specific Meta -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <title>
\t\t
\t\t\t\t\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t
\t\t</title>
\t\t\t\t\t\t       <!-- <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->

\t\t\t\t";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
\t
\t\t


<nav class=\"navbar navbar-inverse\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Acceuil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li ><a href=\"#\">Articles</a></li>
        <li><a href=\"#\">Villes</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Restaurants <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"\">Ajouter</a></li>
            <li><a href=\"#\">Modifier</a></li>
           
          </ul>
        </li>

      </ul>
      <form class=\"navbar-form navbar-left\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">

       
            <li>
\t\t\t    <section class=\"navbar-form navbar-left\">\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 64
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 65
            echo "\t\t\t\t\t\t\t    <div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t   <div class=\"btn btn-info\" > Login As : ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "\t</div>\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t        <div class=\"form-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a title=\"logout\" href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary btn-flat\">Deconnexion</a>
\t\t\t\t\t\t\t       </div>
\t\t\t\t\t\t    ";
        } else {
            // line 72
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t ";
            // line 73
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 76
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t
\t\t\t\t</section>
\t\t\t</li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

&nbsp; &nbsp;
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class=\"btn-group\">
  <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"dropdown\">
    Ville<span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\">
    <li><a href=\"#\">AGADIR</a></li>
        <li><a href=\"#\">MARRAKECH</a></li>
                <li><a href=\"#\">CASABLANCA</a></li>

  </ul>
</div>
&nbsp;&nbsp;


<div class=\"container\">
  <div class=\"row\">
        <div class=\"col-md-3\" id=\"leftCol\">
                
        <div class=\"well\"> 
                <ul class=\"nav nav-stacked\" id=\"sidebar\">
                  <li><a href=\"#sec1\">AGADIR</a></li>
                  <li><a href=\"#sec2\">CASABLANCA</a></li>
                  <li><a href=\"#sec3\">MARRAKECH</a></li>
                  <li><a href=\"#sec4\">TANGER</a></li>
                  <li><a href=\"#sec2\">ESSAOUIRA</a></li>
                  <li><a href=\"#sec3\">FES</a></li>
                </ul>
          </div>

          </div>  
\t\t&nbsp;&nbsp;
\t\t
\t\t\t";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "\t\t\t\t <script src=\"asset('js/jquery-1.10.2.min.js')\"></script>
\t\t\t\t<script src=\"asset('js/bootstrap.min.js')\"></script>
\t\t\t";
        // line 127
        $this->displayBlock('javascripts', $context, $blocks);
        // line 131
        echo "    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t\t        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />

\t\t\t\t";
    }

    // line 73
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 74
        echo "\t\t\t\t
\t\t\t\t             ";
    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        // line 123
        echo "\t\t\t
\t\t\t";
    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        // line 128
        echo "\t\t\t\t\t\t

\t\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 128,  215 => 127,  210 => 123,  207 => 122,  202 => 74,  191 => 16,  188 => 15,  174 => 127,  170 => 125,  100 => 66,  97 => 65,  65 => 15,  58 => 12,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 15,  27 => 4,  44 => 7,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 77,  117 => 76,  105 => 40,  91 => 27,  62 => 14,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 73,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 11,  52 => 10,  50 => 10,  43 => 8,  41 => 13,  35 => 10,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 73,  193 => 73,  189 => 71,  187 => 84,  182 => 10,  176 => 131,  173 => 65,  168 => 122,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 72,  109 => 34,  106 => 69,  103 => 32,  99 => 31,  95 => 64,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 19,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
