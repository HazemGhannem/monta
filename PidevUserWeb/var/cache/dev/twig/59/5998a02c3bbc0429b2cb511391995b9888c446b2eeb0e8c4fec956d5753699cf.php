<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* reserve_vol/listres.html.twig */
class __TwigTemplate_1a9de957c0c2d9b59dac2961c366cb2b658a58c746075bb2842620fc28e5ef84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve_vol/listres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve_vol/listres.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "reserve_vol/listres.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "     <h1> Liste des Reservations </h1>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "     <table border=\"1\">
         <tr>
             <th scope=\"row\">ID</th>
             <th scope=\"row\">Prenom</th>
             <th scope=\"row\">Nom</th>
             <th scope=\"row\">Ville Depart</th>
             <th scope=\"row\">Ville Arrivé</th>
             <th scope=\"row\">Date</th>
             <th scope=\"row\">Prix</th>

         </tr>
         <div style=\"margin-left:50px;\"> <a class=\"btn-dark\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newreservation");
        echo "\"> Ajouter une nouvelle Reservation </a>
         </div>

         <tr>

             ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["resvol"]);
        foreach ($context['_seq'] as $context["_key"] => $context["resvol"]) {
            // line 24
            echo "
             <td>
                 ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "
             </td>
             <td>
                 ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "prenom", [], "any", false, false, false, 29), "html", null, true);
            echo "
             </td>
             <td>
                 ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "
             </td>
             <td>
                 ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "villedep", [], "any", false, false, false, 35), "html", null, true);
            echo "
             </td>
             <td>
                 ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "villearr", [], "any", false, false, false, 38), "html", null, true);
            echo "
             </td>
             <td>
                 ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "getDatevoll", [], "method", false, false, false, 41), "d-m-Y H:i:s"), "html", null, true);
            echo "
             </td>

             <td>
                 ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "prixvol", [], "any", false, false, false, 45), "html", null, true);
            echo "
             </td>


             <td>
                 <a class=\"btn-primary\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletereservation", ["id" => twig_get_attribute($this->env, $this->source, $context["resvol"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"> supprimer </a>
                 <a class=\" btn-info\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatereservation", ["id" => twig_get_attribute($this->env, $this->source, $context["resvol"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"> modifier </a>

             </td>
         </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resvol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "     </table>
     <a class=\"btn-light\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf2");
        echo "\"> Create PDF </a>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reserve_vol/listres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 57,  179 => 56,  168 => 51,  164 => 50,  156 => 45,  149 => 41,  143 => 38,  137 => 35,  131 => 32,  125 => 29,  119 => 26,  115 => 24,  111 => 23,  103 => 18,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
 {% block title %}
     <h1> Liste des Reservations </h1>
 {% endblock %}

 {% block body %}
     <table border=\"1\">
         <tr>
             <th scope=\"row\">ID</th>
             <th scope=\"row\">Prenom</th>
             <th scope=\"row\">Nom</th>
             <th scope=\"row\">Ville Depart</th>
             <th scope=\"row\">Ville Arrivé</th>
             <th scope=\"row\">Date</th>
             <th scope=\"row\">Prix</th>

         </tr>
         <div style=\"margin-left:50px;\"> <a class=\"btn-dark\" href=\"{{path('newreservation')}}\"> Ajouter une nouvelle Reservation </a>
         </div>

         <tr>

             {% for resvol in resvol %}

             <td>
                 {{ resvol.id }}
             </td>
             <td>
                 {{ resvol.prenom }}
             </td>
             <td>
                 {{ resvol.nom }}
             </td>
             <td>
                 {{ resvol.villedep }}
             </td>
             <td>
                 {{ resvol.villearr }}
             </td>
             <td>
                 {{ resvol.getDatevoll()|date('d-m-Y H:i:s') }}
             </td>

             <td>
                 {{ resvol.prixvol }}
             </td>


             <td>
                 <a class=\"btn-primary\" href=\"{{ path('deletereservation', {'id': resvol.id }) }}\"> supprimer </a>
                 <a class=\" btn-info\" href=\"{{ path('updatereservation', {'id': resvol.id    }) }}\"> modifier </a>

             </td>
         </tr>
         {% endfor %}
     </table>
     <a class=\"btn-light\" href=\"{{path('pdf2')}}\"> Create PDF </a>
 {% endblock %}", "reserve_vol/listres.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\reserve_vol\\listres.html.twig");
    }
}
