<?php

/* SlashxAdminBundle:Papillon:edit.html.twig */
class __TwigTemplate_7f089a4ade9b69d761ae264b9b240726 extends Twig_Template
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
        echo "GESTION DES TYPAGES 
";
    }

    // line 7
    public function block_sub_main($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Papillon edit</h1>

    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("papillon_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
       <fieldset class='title'>
    <legend>Titre</legend>
\t<div class=\"left_area\">
     \t<div class=\"element\">
\t        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "famille"), 'label');
        echo "
\t        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "famille"), 'errors');
        echo "
\t        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "famille"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t     <div class=\"element\">
\t        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sousEspece"), 'label', array("label" => "Sous-espece"));
        echo "
\t        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sousEspece"), 'errors');
        echo "
\t        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sousEspece"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t        
     \t    <div class=\"element\">
\t        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "auteur"), 'label', array("label" => "Auteur"));
        echo "
\t        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "auteur"), 'errors');
        echo "
\t        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "auteur"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t 
\t   
\t    
\t </div>
\t    
\t<div class=\"right_area\">
\t   
   
\t    <div class=\"element\">
\t        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "espece"), 'label', array("label" => "Espece"));
        echo "
\t        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "espece"), 'errors');
        echo "
\t        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "espece"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t    <div class=\"element\">
\t        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "forme"), 'label');
        echo "
\t        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "forme"), 'errors');
        echo "
\t        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "forme"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t 
\t    
\t    <div class=\"element\">
\t        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "date"), 'label', array("label" => "Sous-espece"));
        echo "
\t        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "date"), 'errors');
        echo "
\t        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "date"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t
\t    
\t  </div>
\t</fieldset>

\t<div class=\"clear_area\">
\t
\t<fieldset class='title'>
    <legend>Sous-Titre</legend>
     <div class=\"left_area\">
      <div class=\"element\">
\t        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'label');
        echo "
\t        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'errors');
        echo "
\t        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t    </div>
\t    
\t    <div class=\"right_area\">
\t   
\t     <div class=\"element\">
\t        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "statut"), 'label');
        echo "
\t        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "statut"), 'errors');
        echo "
\t        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "statut"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    
\t    </div>
\t    
    </fieldset>
\t\t
\t<div class=\"clear_area\">
\t
\t<fieldset class='title'>
    <legend>Autres</legend>
     \t<div class=\"left_area\">
      
\t      \t<div class=\"element\">
\t\t        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "distributions"), 'label');
        echo "
\t\t        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "distributions"), 'errors');
        echo "
\t\t        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "distributions"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t\t    </div>
\t\t    
\t\t    \t<div class=\"element\">
\t\t        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plantes"), 'label');
        echo "
\t\t        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plantes"), 'errors');
        echo "
\t\t        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plantes"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t\t    </div>
\t    
\t    </div>
\t    
\t    <div class=\"right_area\">
\t   
\t\t     <div class=\"element\">
\t\t        ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "habitats"), 'label');
        echo "
\t\t        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "habitats"), 'errors');
        echo "
\t\t        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "habitats"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t\t    </div>
\t\t    
\t\t    <div class=\"element\">
\t\t        ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "premiersEtats"), 'label', array("label" => "Premiers-Etats"));
        echo "
\t\t        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "premiersEtats"), 'errors');
        echo "
\t\t        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "premiersEtats"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t\t    </div>
\t\t    
\t\t    
\t    
\t    </div>
\t    
    </fieldset>
\t
\t  <div class=\"element\">
\t\t        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "couleur"), 'label');
        echo "
\t\t        ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "couleur"), 'errors');
        echo "
\t\t        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "couleur"), 'widget');
        echo "
\t\t    </div>
\t\t    
\t\t    
        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <p class=\"record_actions\">
\t    \t<button type=\"submit\" class=\"add\">Enregistrer</button>
\t\t   <a class=\"cancel button\" href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("papillon"), "html", null, true);
        echo "\">
\t\t            Retourner à la liste des papillons
\t\t        </a>
        </p>
        
    </form>

        <form action=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("papillon_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
   
";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Papillon:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 148,  308 => 146,  298 => 139,  292 => 136,  285 => 132,  281 => 131,  277 => 130,  264 => 120,  260 => 119,  256 => 118,  249 => 114,  245 => 113,  241 => 112,  230 => 104,  226 => 103,  222 => 102,  215 => 98,  211 => 97,  207 => 96,  190 => 82,  186 => 81,  182 => 80,  171 => 72,  167 => 71,  163 => 70,  146 => 56,  142 => 55,  138 => 54,  130 => 49,  126 => 48,  122 => 47,  115 => 43,  111 => 42,  107 => 41,  93 => 30,  89 => 29,  85 => 28,  78 => 24,  74 => 23,  70 => 22,  63 => 18,  59 => 17,  55 => 16,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
