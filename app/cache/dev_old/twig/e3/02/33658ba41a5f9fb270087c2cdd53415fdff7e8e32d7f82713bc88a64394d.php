<?php

/* AnnuaireRestoBundle::layout.html.twig */
class __TwigTemplate_e30233658ba41a5f9fb270087c2cdd53415fdff7e8e32d7f82713bc88a64394d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
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
        echo "
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t\t        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />

";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t\t\t\t ";
        $this->env->loadTemplate("AnnuaireRestoBundle:Security:login.html.twig")->display($context);
        // line 12
        echo "\t\t\t\t";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t   
";
    }

    public function getTemplateName()
    {
        return "AnnuaireRestoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  58 => 12,  55 => 11,  52 => 10,  44 => 7,  41 => 6,  34 => 4,  31 => 3,  182 => 99,  164 => 84,  144 => 67,  126 => 52,  108 => 37,  103 => 34,  90 => 27,  86 => 26,  81 => 24,  77 => 22,  73 => 20,  67 => 18,  65 => 15,  61 => 15,  57 => 14,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 5,  30 => 4,);
    }
}
