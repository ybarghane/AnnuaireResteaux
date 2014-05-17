<?php

/* AnnuaireRestoBundle:Resto:add.html.twig */
class __TwigTemplate_e5500f65eda212a5c470ad63c1b45e89fe3c904552bed0793425771caa1e59e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AnnuaireRestoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnnuaireRestoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Add Resto
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t\t       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t   ";
        $this->env->loadTemplate("AnnuaireRestoBundle:Resto:form.html.twig")->display($context);
        // line 13
        echo "\t\t\t\t<p> 
\t\t\t\t\t <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" class=\"btn\"> 
\t\t\t\t\t\t  <i class=\"icon-chevron-left\"></i>Home
\t\t\t\t\t </a>
\t\t\t   </p>
";
    }

    public function getTemplateName()
    {
        return "AnnuaireRestoBundle:Resto:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  57 => 13,  54 => 12,  51 => 11,  43 => 7,  40 => 6,  33 => 4,  30 => 3,);
    }
}
