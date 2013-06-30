<?php

/* SlashxAdminBundle:Article:new.html.twig */
class __TwigTemplate_e091cf0a14dc05a4816bdc59d9fc8b3a extends Twig_Template
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
        echo "<h1>Article creation</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
         <div class=\"element\">
\t        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label', array("label" => "Titre"));
        echo "
\t        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'errors');
        echo "
\t        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget', array("attr" => array("class" => "text")));
        echo "
\t    </div>
\t       <div class=\"element\">
\t        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'label', array("label" => "Corps de l'article"));
        echo "
\t        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'errors');
        echo "
 \t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'widget', array("attr" => array("class" => "TinyMCE")));
        echo "
\t    </div> 



";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

  <p class=\"record_actions\">
            <button type=\"submit\" class=\"add\">Enregistrer</button>
            <a class=\"button cancel\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article"), "html", null, true);
        echo "\">
            Retourner à la liste des articles
        </a>
        </p>
";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Article:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  72 => 20,  64 => 15,  60 => 14,  56 => 13,  50 => 10,  46 => 9,  42 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
