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
        return array (  218 => 128,  215 => 127,  210 => 123,  207 => 122,  202 => 74,  199 => 73,  191 => 16,  188 => 15,  176 => 131,  174 => 127,  170 => 125,  168 => 122,  121 => 77,  117 => 76,  115 => 73,  112 => 72,  106 => 69,  100 => 66,  97 => 65,  95 => 64,  48 => 19,  46 => 15,  37 => 11,  35 => 10,  24 => 1,  62 => 14,  58 => 12,  55 => 11,  52 => 10,  44 => 7,  41 => 13,  34 => 4,  31 => 3,  182 => 10,  164 => 84,  144 => 67,  126 => 52,  108 => 37,  103 => 34,  90 => 27,  86 => 26,  81 => 24,  77 => 22,  73 => 20,  67 => 18,  65 => 15,  61 => 15,  57 => 14,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 5,  30 => 4,);
    }
}
