<?php

/* SlashxAdminBundle:Publication:index.html.twig */
class __TwigTemplate_279ec7a67ce10aa254965243901b46c8 extends Twig_Template
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
        echo "GESTION DES PUBLICATIONS
";
    }

    // line 7
    public function block_sub_main($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Nom du papillon : \" ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "papillon"), "nom"), "html", null, true);
        echo " \"</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Auteur</th>
                <th>Date</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "auteur"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($this->getContext($context, "entity"), "date")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        // line 36
        echo "        </tbody>
    </table>

       <p class=\"records_list\">
            <a class=\"button add\" class=\"button\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_new", array("id" => $this->getAttribute($this->getContext($context, "papillon"), "id"))), "html", null, true);
        echo "\">
                Ajouter une nouvelle publication
            </a>
               <a class='button cancel' href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("papillon", array("id" => $this->getAttribute($this->getContext($context, "papillon"), "id"))), "html", null, true);
        echo "\">
\t           Retourner à la liste des papillons
\t        </a>
        </p>
   
     \t<p>&nbsp;</p>
    ";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Publication:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  100 => 40,  94 => 36,  82 => 30,  72 => 25,  68 => 24,  64 => 23,  61 => 22,  57 => 21,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
