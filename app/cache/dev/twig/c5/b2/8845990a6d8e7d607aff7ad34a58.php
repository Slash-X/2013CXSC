<?php

/* SlashxAdminBundle:Photographie:new.html.twig */
class __TwigTemplate_c5b28845990a6d8e7d607aff7ad34a58 extends Twig_Template
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
        echo "GESTION PHOTOGRAPHIE 
";
    }

    // line 7
    public function block_sub_main($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Photographie creation</h1>

    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("photographie_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        
   <div class=\"element\" style='display: none'>
\t        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "album"), 'label');
        echo "
\t        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "album"), 'errors');
        echo "
\t        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "album"), 'widget');
        echo "
\t    </div>
\t    
\t       
\t    
\t   
\t    \t <div class=\"element\" >
\t\t        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'label', array("label" => "Photo"));
        echo "
\t\t        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'errors');
        echo "
\t\t        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    \t</div>
\t    \t
\t    \t <div class=\"element\" >
\t\t        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'label', array("label" => "commentaire"));
        echo "
\t\t        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'errors');
        echo "
\t\t        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'widget', array("attr" => array("class" => "TinyMCE")));
        echo "
\t    \t</div>

\t    \t<div class=\"element\" >
\t\t        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ordre"), 'label', array("label" => "Ordre"));
        echo "
\t\t        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ordre"), 'errors');
        echo "
\t\t        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ordre"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    \t</div>
\t    
\t    
";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "

       <p class=\"record_actions\">
            <button type=\"submit\" class=\"add\">Enregistrer</button>
            <a class=\"button cancel\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("photographie", array("id" => $this->getContext($context, "id_album"))), "html", null, true);
        echo "\">
            Retourner à la liste des photographies
        </a>
        </p>
    </form>

";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Photographie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  115 => 40,  108 => 36,  104 => 35,  100 => 34,  93 => 30,  89 => 29,  85 => 28,  78 => 24,  74 => 23,  70 => 22,  60 => 15,  56 => 14,  52 => 13,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
