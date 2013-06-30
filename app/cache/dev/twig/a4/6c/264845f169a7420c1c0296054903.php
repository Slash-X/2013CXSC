<?php

/* SlashxAdminBundle::layout.html.twig */
class __TwigTemplate_a46c264845f169a7420c1c0296054903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'navigation_hz' => array($this, 'block_navigation_hz'),
            'main' => array($this, 'block_main'),
            'block_title' => array($this, 'block_block_title'),
            'block_description' => array($this, 'block_block_description'),
            'sub_main' => array($this, 'block_sub_main'),
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

    // line 4
    public function block_navigation_hz($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<div id=\"nav\">
\t\t\t<ul>
\t\t\t<li class=\"upp\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article"), "html", null, true);
        echo "\">Articles</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"upp\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("papillon"), "html", null, true);
        echo "\">Systématique</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"upp\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album"), "html", null, true);
        echo "\">Album</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"upp\"><a href=\"#\">Articles</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Visit site</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Reports</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Add new page</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Site config</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t";
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "\t    <div class=\"full_w\">
\t\t\t<div class=\"h_title\">";
        // line 30
        $this->displayBlock('block_title', $context, $blocks);
        echo "</div>
\t\t\t<div class=\"h_descripion\">";
        // line 31
        $this->displayBlock('block_description', $context, $blocks);
        echo "</div>
\t\t\t\t\t";
        // line 32
        $this->displayBlock('sub_main', $context, $blocks);
        // line 34
        echo "\t\t\t\t
\t\t</div>
\t\t";
    }

    // line 30
    public function block_block_title($context, array $blocks = array())
    {
        echo "block_title";
    }

    // line 31
    public function block_block_description($context, array $blocks = array())
    {
        echo "block_description";
    }

    // line 32
    public function block_sub_main($context, array $blocks = array())
    {
        // line 33
        echo "\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  102 => 32,  96 => 31,  90 => 30,  84 => 34,  82 => 32,  78 => 31,  74 => 30,  71 => 29,  68 => 28,  50 => 12,  45 => 10,  39 => 7,  35 => 5,  32 => 4,);
    }
}
