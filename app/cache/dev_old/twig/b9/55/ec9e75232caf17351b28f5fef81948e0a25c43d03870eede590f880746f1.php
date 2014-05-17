<?php

/* AnnuaireRestoBundle:Resto:index.html.twig */
class __TwigTemplate_b955ec9e75232caf17351b28f5fef81948e0a25c43d03870eede590f880746f1 extends Twig_Template
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

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t   <h1 align=\"center\">Les restaurants les plus populaires</h1>
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restos"]) ? $context["restos"] : $this->getContext($context, "restos")));
        foreach ($context['_seq'] as $context["_key"] => $context["resto"]) {
            // line 15
            echo "\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"pull-left\" href=\"#\">
\t\t\t\t\t\t  ";
            // line 17
            if ((!(null === $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "image")))) {
                // line 18
                echo "\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/img/") . $this->getAttribute($this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "image"), "url")), "html", null, true);
                echo "\" alt=\"facebook\" width=120px height=90px>
\t\t\t\t\t\t\t";
            } else {
                // line 20
                echo "\t\t\t\t\t\t\t\t\t<img class=\"media-object\"  alt=\"facebook\" width=120px height=90px>
\t\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<h4 class=\"media-heading\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "nom"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t  <strong>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "ville"), "html", null, true);
            echo "</strong><br>
\t\t\t\t\t\t  ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "article"), "html", null, true);
            echo "
\t\t\t\t\t\t  <br>
\t\t\t\t\t\t</address>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"pull-left\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/6.JPG"), "html", null, true);
        echo "\" alt=\"facebook\" width=120px height=90px>
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<h4 class=\"media-heading\">PARADIS PLAGE RESORT</h4>
\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t  <strong>Agadir</strong><br>
\t\t\t\t\t\t  Imi Ouaddar, km 26, route d'Essaouira - Cuisine méditerranéenne
\t\t\t\t\t\t<br>
\t\t\t\t\t\t</address>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"pull-left\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/9.JPG"), "html", null, true);
        echo "\" alt=\"facebook\" width=120px height=90px>
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<h4 class=\"media-heading\">AL FASSIA</h4>
\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t  <strong>Marrakech</strong><br>
\t\t\t\t\t\t55, boulevard Zerktouni - Résidence Tayeb 1er - Marrakech
\t\t\t\t\t\tCuisine marocaine traditionnelle<br>
\t\t\t\t\t\t</address>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"pull-left\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/2.JPG"), "html", null, true);
        echo "\" alt=\"facebook\" width=120px height=90px>
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<h4 class=\"media-heading\">L'ANNEXE</h4>
\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t  <strong>Marrakech</strong><br>
\t\t\t\t\t\t14, rue Moulay Ali - Marrakech
\t\t\t\t\t\tCuisine française<br>
\t\t\t\t\t\t</address>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>



\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"pull-left\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/3.JPG"), "html", null, true);
        echo "\" alt=\"facebook\" width=120px height=90px>
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<h4 class=\"media-heading\">ARABESQUE</h4>
\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t  <strong>Casablanca</strong><br>
\t\t\t\t\t\tRue Sidi Belyout - Casablanca
\t\t\t\t\t\tBistrot<br>
\t\t\t\t\t\t</address>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t  <a class=\"pull-left\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/8.JPG"), "html", null, true);
        echo "\" alt=\"facebook\" width=120px height=90px>
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t<h4 class=\"media-heading\">ASIA GARDEN</h4>
\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t  <strong>Casablanca</strong><br>
\t\t\t\t\t\t26, rue Ahmed El Mokri - Casablanca
\t\t\t\t\t\tCuisine asiatique<br>
\t\t\t\t\t\t</address>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "AnnuaireRestoBundle:Resto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 99,  164 => 84,  144 => 67,  126 => 52,  108 => 37,  103 => 34,  90 => 27,  86 => 26,  81 => 24,  77 => 22,  73 => 20,  67 => 18,  65 => 17,  61 => 15,  57 => 14,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 5,  30 => 4,);
    }
}
