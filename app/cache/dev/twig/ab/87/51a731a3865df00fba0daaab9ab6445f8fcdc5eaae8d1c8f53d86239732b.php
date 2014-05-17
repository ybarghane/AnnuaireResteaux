<?php

/* AnnuaireRestoBundle:Security:login.html.twig */
class __TwigTemplate_ab8751a731a3865df00fba0daaab9ab6445f8fcdc5eaae8d1c8f53d86239732b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "



\t\t\t\t\t\t             \t";
    }

    // line 1
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 2
        echo "
\t\t
\t\t
\t\t\t<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  class=\"navbar-form navbar-left\">
\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"_username\" id=\"username\" type=\"text\" placeholder=\"Votre Nom\" required=\"\" autofocus=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"_password\" id=\"password\" type=\"password\" placeholder=\"Votre Mot de Passe\" required=\"true\">
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Connexion</button>
            </form>
\t\t
\t\t
\t\t
";
    }

    public function getTemplateName()
    {
        return "AnnuaireRestoBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  22 => 18,  20 => 1,  218 => 128,  215 => 127,  210 => 123,  207 => 122,  202 => 74,  199 => 73,  191 => 16,  188 => 15,  176 => 131,  174 => 127,  170 => 125,  168 => 122,  121 => 77,  117 => 76,  115 => 73,  112 => 72,  106 => 69,  100 => 66,  97 => 65,  95 => 64,  48 => 19,  46 => 15,  37 => 11,  35 => 10,  24 => 1,  62 => 14,  58 => 12,  55 => 11,  52 => 10,  44 => 7,  41 => 13,  34 => 4,  31 => 3,  182 => 10,  164 => 84,  144 => 67,  126 => 52,  108 => 37,  103 => 34,  90 => 27,  86 => 26,  81 => 24,  77 => 22,  73 => 20,  67 => 18,  65 => 15,  61 => 15,  57 => 14,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 2,  30 => 1,);
    }
}
