<?php

/* SlashxAdminBundle:Publication:new.html.twig */
class __TwigTemplate_65ac923bd7bf54fefefb44d2f8344d77 extends Twig_Template
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
        echo "AJOUTER UNE PUBLICATION 
";
    }

    // line 7
    public function block_sub_main($context, array $blocks = array())
    {
        // line 8
        echo "\t<h2>Ajouter une publication</h2>
   \t<p>Veuillez utiliser le formulaire ci-dessous pour ajouter une publication.</p>

    <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">

\t    <div class=\"element\">
\t        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label');
        echo "
\t        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "
\t        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t    <div class=\"element\">
\t        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "auteur"), 'label');
        echo "
\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "auteur"), 'errors');
        echo "
\t        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "auteur"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>\t    
\t   \t<div class=\"element\">
\t        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'label');
        echo "
\t        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'errors');
        echo "
\t        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget');
        echo "
\t    </div>
\t   \t<div class=\"element\">
\t        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reference"), 'label');
        echo "
\t        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reference"), 'errors');
        echo "
\t        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reference"), 'widget', array("attr" => array("class" => "TinyMCE")));
        echo "
\t        
\t    </div>
\t    <div class=\"element\"> 
\t     ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t    </div>
\t  

        <p class='element'>
            <button type=\"submit\" class=\"add\">Enregistrer</button>  
\t        <a class='button cancel' href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\">
\t           Retourner à la liste des publications
\t        </a>
    \t</p>
    </form>

";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Publication:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  110 => 35,  103 => 31,  99 => 30,  95 => 29,  89 => 26,  85 => 25,  81 => 24,  75 => 21,  71 => 20,  67 => 19,  61 => 16,  57 => 15,  53 => 14,  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
