<?php

/* ::base.html.twig */
class __TwigTemplate_7618e5c4a69baa1438acafe821b613b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'navigation_hz' => array($this, 'block_navigation_hz'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl\" xml:lang=\"pl\">
<head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<meta name=\"author\" content=\"Paweł 'kilab' Balicki - kilab.pl\" />

<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "        
<script type=\"text/javascript\">
\$(function(){
\t\$(\".box .h_title\").not(this).next(\"ul\").hide(\"normal\");
\t\$(\".box .h_title\").not(this).next(\"#home\").show(\"normal\");
\t\$(\".box\").children(\".h_title\").click( function() { \$(this).next(\"ul\").slideToggle(); });
});
</script>

</head>
<body>
<div class=\"wrap\">
\t<div id=\"header\">
\t\t<div id=\"top\">
\t\t\t<div class=\"left\">
<h1>CHARAXES.BE : ADMINISTRATION</h1>
\t\t\t</div>
\t\t\t<div class=\"right\">
\t\t\t\t<div class=\"align-right\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t";
        // line 50
        $this->displayBlock('navigation_hz', $context, $blocks);
        // line 52
        echo "\t</div>
\t
\t<div id=\"content\">
\t
\t\t
\t\t<div id=\"main\">
\t\t<div class=\"clear\"></div>

\t\t";
        // line 60
        $this->displayBlock('main', $context, $blocks);
        // line 63
        echo "\t\t
\t\t</div>

</div>

</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Mon titre";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/slashxadmin/css/styleCustom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/slashxadmin/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/slashxadmin/css/navi.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "        \t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/slashxadmin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"//tinymce.cachefly.net/4.0/tinymce.min.js\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t
\t\t\ttinymce.init({
\t\t\t    selector: \"textarea.TinyMCE\",
\t\t\t    height : 350
\t\t\t });
</script>
        ";
    }

    // line 50
    public function block_navigation_hz($context, array $blocks = array())
    {
        // line 51
        echo "\t\t";
    }

    // line 60
    public function block_main($context, array $blocks = array())
    {
        echo "\t

\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 60,  140 => 51,  137 => 50,  122 => 16,  119 => 15,  113 => 12,  109 => 11,  104 => 10,  101 => 9,  95 => 7,  84 => 63,  82 => 60,  72 => 52,  70 => 50,  44 => 26,  42 => 15,  39 => 14,  37 => 9,  32 => 7,  24 => 1,);
    }
}
