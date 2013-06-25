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
\t\t\t\t<p>Welcome, <strong>Paweł B.</strong> [ <a href=\"\">logout</a> ]</p>
\t\t\t</div>
\t\t\t<div class=\"right\">
\t\t\t\t<div class=\"align-right\">
\t\t\t\t\t<p>Last login: <strong>23-04-2012 23:12</strong></p>
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
\t\t<div id=\"sidebar\">
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"h_title\">&#8250; Main control</div>
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"b1\"><a class=\"icon view_page\" href=\"\">Visit site</a></li>
\t\t\t\t\t<li class=\"b2\"><a class=\"icon report\" href=\"\">Reports</a></li>
\t\t\t\t\t<li class=\"b1\"><a class=\"icon add_page\" href=\"\">Add new page</a></li>
\t\t\t\t\t<li class=\"b2\"><a class=\"icon config\" href=\"\">Site config</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t\t<div id=\"main\">
\t\t<div class=\"clear\"></div>

\t\t";
        // line 71
        $this->displayBlock('main', $context, $blocks);
        // line 74
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
\t\t\t    height : 150
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

    // line 71
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
        return array (  155 => 71,  151 => 51,  148 => 50,  133 => 16,  130 => 15,  124 => 12,  120 => 11,  115 => 10,  112 => 9,  106 => 7,  95 => 74,  72 => 52,  70 => 50,  44 => 26,  42 => 15,  39 => 14,  24 => 1,  102 => 46,  99 => 45,  93 => 71,  87 => 47,  85 => 45,  81 => 44,  78 => 43,  75 => 42,  48 => 17,  34 => 5,  31 => 4,  114 => 46,  108 => 42,  96 => 36,  90 => 33,  84 => 30,  77 => 26,  73 => 25,  69 => 24,  65 => 23,  61 => 22,  58 => 21,  54 => 20,  40 => 8,  37 => 9,  32 => 7,  29 => 3,);
    }
}
