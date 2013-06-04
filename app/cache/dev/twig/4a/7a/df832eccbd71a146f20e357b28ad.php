<?php

/* SlashxAdminBundle:Page:index.html.twig */
class __TwigTemplate_4a7adf832eccbd71a146f20e357b28ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SlashxAdminBundle::layout.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
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

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"full_w\">
\t\t<div class=\"h_title\">Administration</div>
\t\t\t\t
\t\t<h1>Administration de charaxe.be</h1>\t
\t\t<p>Veuillez utiliser les différents menu pour administrer votre site</p>\t\t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
