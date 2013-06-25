<?php

/* SlashxAdminBundle:Typage:index.html.twig */
class __TwigTemplate_e89b365c973013ad6f54bb81aec7691f extends Twig_Template
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
        echo "GESTION DES TYPES
";
    }

    // line 7
    public function block_sub_main($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Nom du papillon : \" ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["papillon"]) ? $context["papillon"] : $this->getContext($context, "papillon")), "nom"), "html", null, true);
        echo " \"</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Lieu de conservation</th>
                <th>Localite</th>
                <th>Categorie</th>
                <th>Sexe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lieuConservation"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "localite"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sexe"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typage_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
            <a class=\"button add\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typage_new", array("id" => $this->getAttribute((isset($context["papillon"]) ? $context["papillon"] : $this->getContext($context, "papillon")), "id"))), "html", null, true);
        echo "\" >
                Ajouter un nouveau type
            </a>
            <a class='button cancel' href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("papillon", array("id" => $this->getAttribute((isset($context["papillon"]) ? $context["papillon"] : $this->getContext($context, "papillon")), "id"))), "html", null, true);
        echo "\">
\t           Retourner à la liste des papillons
\t        </a>
            </p>
       
     \t<p>&nbsp;</p>
    ";
    }

    public function getTemplateName()
    {
        return "SlashxAdminBundle:Typage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  101 => 40,  95 => 36,  83 => 30,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  61 => 22,  57 => 21,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
