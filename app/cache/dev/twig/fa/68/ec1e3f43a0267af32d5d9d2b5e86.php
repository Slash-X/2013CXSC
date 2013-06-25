<?php

/* SlashxAdminBundle:Photographie:edit.html.twig */
class __TwigTemplate_fa68ec1e3f43a0267af32d5d9d2b5e86 extends Twig_Template
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
        echo "    <h1>Photographie edit</h1>

    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("photographie_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
          
   <div class=\"element\" style='display: none'>
\t        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "album"), 'label');
        echo "
\t        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "album"), 'errors');
        echo "
\t        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "album"), 'widget');
        echo "
\t    </div>
\t    
\t       
\t     <div class='left_area'>
\t    \t <div class=\"element\" >
\t\t        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'label', array("label" => "Photo"));
        echo "
\t\t        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'errors');
        echo "
\t\t        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "file"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    \t</div>
\t    </div>
\t    
\t    <div class='right_area'>
\t    \t<div class=\"element\">
\t\t       \t";
        // line 30
        if ($this->getAttribute($this->getContext($context, "entity"), "photo")) {
            // line 31
            echo "\t    \t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "entity"), "getWebPath", array(), "method")), "html", null, true);
            echo "\" width=\"60px\"/>
\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t    Pas d'image !
\t\t\t\t";
        }
        // line 35
        echo "\t    \t</div>
\t    </div>
\t    
\t   <div class='clear_area'></div>
\t   
\t    \t
\t    \t
\t    \t <div class=\"element\" >
\t\t        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "commentaire"), 'label', array("label" => "commentaire"));
        echo "
\t\t        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "commentaire"), 'errors');
        echo "
\t\t        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "commentaire"), 'widget', array("attr" => array("class" => "TinyMCE")));
        echo "
\t    \t</div>

\t    \t<div class=\"element\" >
\t\t        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "ordre"), 'label', array("label" => "Ordre"));
        echo "
\t\t        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "ordre"), 'errors');
        echo "
\t\t        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "ordre"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    \t</div>
\t    
\t    
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'widget');
        echo "

       <p class=\"record_actions\">
            <button type=\"submit\" class=\"add\">Enregistrer</button>
            <a class=\"button cancel\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("photographie", array("id" => $this->getContext($context, "id_album"))), "html", null, true);
        echo "\">
            Retourner à la liste des photographies
        </a>
        </p>
    </form>

        <form action=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("photographie_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    
";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Photographie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 67,  155 => 65,  146 => 59,  139 => 55,  132 => 51,  128 => 50,  124 => 49,  117 => 45,  113 => 44,  109 => 43,  99 => 35,  95 => 33,  89 => 31,  87 => 30,  78 => 24,  74 => 23,  70 => 22,  61 => 16,  57 => 15,  53 => 14,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
