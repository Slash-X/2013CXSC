<?php

/* ::base.html.twig */
class __TwigTemplate_bf2449af0d6828df12605b2f7dd1d266 extends Twig_Template
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
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
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
        // line 40
        $this->displayBlock('navigation_hz', $context, $blocks);
        // line 42
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
        // line 61
        $this->displayBlock('main', $context, $blocks);
        // line 64
        echo "\t\t
\t\t</div>

</div>

</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Mon titre";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/slashxadmin/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/slashxadmin/css/navi.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        \t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/slashxadmin/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 40
    public function block_navigation_hz($context, array $blocks = array())
    {
        // line 41
        echo "\t\t";
    }

    // line 61
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
        return array (  142 => 61,  138 => 41,  135 => 40,  128 => 14,  125 => 13,  114 => 9,  105 => 6,  94 => 64,  92 => 61,  71 => 42,  43 => 16,  41 => 13,  38 => 12,  36 => 8,  24 => 1,  151 => 60,  144 => 55,  132 => 49,  126 => 46,  119 => 10,  115 => 41,  111 => 8,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 40,  63 => 29,  60 => 28,  56 => 27,  31 => 6,  28 => 3,);
    }
}
