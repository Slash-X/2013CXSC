<?php

/* SlashxAdminBundle::layout.html.twig */
class __TwigTemplate_a019819d2251ff732bcc701d9b5756d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'navigation_hz' => array($this, 'block_navigation_hz'),
            'main' => array($this, 'block_main'),
            'block_title' => array($this, 'block_block_title'),
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
\t\t\t\t<li class=\"upp\"><a href=\"#\">Articles</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Visit site</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Reports</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Add new page</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Site config</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"upp\"><a href=\"#\">Systématique</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>&#8250; <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("papillon"), "html", null, true);
        echo "\">Show all pages</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Add new page</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Add new gallery</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Categories</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"upp\"><a href=\"#\">Album</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Show all uses</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Add new user</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Lock users</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"upp\"><a href=\"#\">A propos</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Show all uses</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Add new user</a></li>
\t\t\t\t\t\t<li>&#8250; <a href=\"\">Lock users</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t";
    }

    // line 42
    public function block_main($context, array $blocks = array())
    {
        // line 43
        echo "\t    <div class=\"full_w\">
\t\t\t<div class=\"h_title\">";
        // line 44
        $this->displayBlock('block_title', $context, $blocks);
        echo "</div>
\t\t\t\t\t";
        // line 45
        $this->displayBlock('sub_main', $context, $blocks);
        // line 47
        echo "\t\t\t\t
\t\t</div>
\t\t";
    }

    // line 44
    public function block_block_title($context, array $blocks = array())
    {
        echo "block_title";
    }

    // line 45
    public function block_sub_main($context, array $blocks = array())
    {
        // line 46
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
        return array (  102 => 46,  99 => 45,  93 => 44,  87 => 47,  85 => 45,  81 => 44,  78 => 43,  75 => 42,  48 => 17,  34 => 5,  31 => 4,  101 => 40,  95 => 36,  83 => 30,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  61 => 22,  57 => 21,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
