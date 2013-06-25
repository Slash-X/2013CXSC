<?php

/* SlashxAdminBundle:Typage:new.html.twig */
class __TwigTemplate_5883b13af4821f24c5a1a40df1f6b634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SlashxAdminBundle::layout.html.twig");

        $this->blocks = array(
            'block_title' => array($this, 'block_block_title'),
            'sub_main' => array($this, 'block_sub_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SlashxAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block_title($context, array $blocks = array())
    {
        // line 4
        echo "GESTION DES TYPES 
";
    }

    // line 7
    public function block_sub_main($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Creation de Type</h1> 

    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typage_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
       
        
        
      <div class=\"element\">
\t        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lieuConservation"), 'label', array("label" => "Lieu de conservation"));
        echo "
\t        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lieuConservation"), 'errors');
        echo "
\t        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lieuConservation"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t    <div class=\"element\">
\t        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "localite"), 'label');
        echo "
\t        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "localite"), 'errors');
        echo "
\t        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "localite"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>

\t    <div class=\"element\">
\t        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "categorie"), 'label');
        echo "
\t        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "categorie"), 'errors');
        echo "
\t        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "categorie"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t    \t    <div class=\"element\">
\t        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'label');
        echo "
\t        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'errors');
        echo "
\t        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t    <div class=\"element\" style='display: none'>
\t        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "papillon"), 'label');
        echo "
\t        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "papillon"), 'errors');
        echo "
\t        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "papillon"), 'widget');
        echo "
\t    </div>
\t    
\t   \t<div class=\"element\">
\t        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'label');
        echo "
\t        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'errors');
        echo "
\t        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'widget');
        echo "
\t    </div>
\t    <div class=\"element\">
\t     ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t    </div>
\t    
\t    <p class=\"record_actions\">
\t    \t<button type=\"submit\" class=\"add\">Enregistrer</button>
\t    \t<a  class=\"button cancel\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typage", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\">
            \tRetourner à la liste des types
        \t</a>
\t    </p>
\t       
    </form>

      
";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Typage:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 55,  143 => 50,  137 => 47,  133 => 46,  129 => 45,  122 => 41,  118 => 40,  114 => 39,  107 => 35,  103 => 34,  99 => 33,  92 => 29,  88 => 28,  84 => 27,  77 => 23,  73 => 22,  69 => 21,  62 => 17,  58 => 16,  54 => 15,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
