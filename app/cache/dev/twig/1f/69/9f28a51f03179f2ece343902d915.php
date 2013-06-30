<?php

/* SlashxAdminBundle:Article:index.html.twig */
class __TwigTemplate_1f699f28a51f03179f2ece343902d915 extends Twig_Template
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
        echo "GESTION DES ARTICLES
";
    }

    // line 7
    public function block_sub_main($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Article list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</td>
                
                <td>
                <ul>
               
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "        </tbody>
    </table>

         <p class=\"records_list\">
        
            <a class='button add'  href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_new"), "html", null, true);
        echo "\">
         Ajouter un article
            </a>
            </p>
      
    ";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 40,  88 => 35,  76 => 29,  67 => 23,  61 => 22,  58 => 21,  54 => 20,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
