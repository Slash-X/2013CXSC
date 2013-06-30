<?php

/* SlashxAdminBundle:Article:edit.html.twig */
class __TwigTemplate_5a9d64161dccc9f3c52eece9c5d3f75b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SlashxAdminBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_sub_main($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Article : Modification</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
                 <div class=\"element\">
\t        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre"), 'label', array("label" => "Titre"));
        echo "
\t        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre"), 'errors');
        echo "
\t        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t       <div class=\"element\">
\t        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contenu"), 'label', array("label" => "Corps de l'article"));
        echo "
\t        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contenu"), 'errors');
        echo "
 \t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contenu"), 'widget', array("attr" => array("class" => "TinyMCE")));
        echo "
\t    </div> 





";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
       <p class=\"record_actions\">
            <button type=\"submit\" class=\"add\">Enregistrer</button>
            <a class=\"button cancel\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article"), "html", null, true);
        echo "\">
            Retourner à la liste des articles
        </a>
        </p>
        </form>
        <form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>

";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  89 => 31,  81 => 26,  75 => 23,  65 => 16,  61 => 15,  57 => 14,  51 => 11,  47 => 10,  43 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
