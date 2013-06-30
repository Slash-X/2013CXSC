<?php

/* SlashxAdminBundle:Album:new.html.twig */
class __TwigTemplate_e3f08abcd829cb31b235395ee3519044 extends Twig_Template
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
        echo "GESTION DES ALBUMS
";
    }

    // line 7
    public function block_sub_main($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Album creation</h1>

    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        
      <div class=\"element\">
\t        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label', array("label" => "Titre"));
        echo "
\t        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'errors');
        echo "
\t        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t          <div class=\"element\">
\t        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'label', array("label" => "Catégorie"));
        echo "
\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'errors');
        echo "
\t        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t            <div class=\"element\">
\t        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sousCategorie"), 'label', array("label" => "Sous-Catégorie"));
        echo "
\t        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sousCategorie"), 'errors');
        echo "
\t        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sousCategorie"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
      
        
        <p class=\"record_actions\">
\t    \t<button type=\"submit\" class=\"add\">Enregistrer</button>
\t    \t<a  class=\"button cancel\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album"), "html", null, true);
        echo "\">
            \tRetourner à la liste des albums
        \t</a>
\t    </p>
\t    
\t    
    </form>
\t
";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Album:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  97 => 31,  90 => 27,  86 => 26,  82 => 25,  75 => 21,  71 => 20,  67 => 19,  60 => 15,  56 => 14,  52 => 13,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
