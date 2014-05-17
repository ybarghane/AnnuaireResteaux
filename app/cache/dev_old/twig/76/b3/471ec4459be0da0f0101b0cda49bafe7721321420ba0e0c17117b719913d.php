<?php

/* AnnuaireRestoBundle:Resto:show.html.twig */
class __TwigTemplate_76b3471ec4459be0da0f0101b0cda49bafe7721321420ba0e0c17117b719913d extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Home
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t\t       ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t   <h1 class=\"btn-primary\"> Show Resto ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " :) </h1>
";
    }

    public function getTemplateName()
    {
        return "AnnuaireRestoBundle:Resto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  51 => 12,  43 => 8,  40 => 7,  33 => 5,  30 => 4,);
    }
}
