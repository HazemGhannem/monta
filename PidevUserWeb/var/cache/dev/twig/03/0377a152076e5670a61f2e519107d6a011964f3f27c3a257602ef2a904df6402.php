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

/* hotel/afficherhotel.html.twig */
class __TwigTemplate_f5729dd0a0b061118d8a8de3c99ab89032ec7a3d12e6a00fe724ce2e1075b11f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/afficherhotel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/afficherhotel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/afficherhotel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <button class=\"btn btn-success btn-icon-split\" ><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterhotel");
        echo "\"><span class=\"text\" style=\"color: white\">Ajouter </span></a></button>
    <br><br>
<div>
    <p style=\"100px\" > <input  id=\"myInput\"  type=\"text\" placeholder=\"search\">
        <img src=\"https://img.icons8.com/nolan/344/google-web-search.png\" style=\"width:50px;height:50px;\"/></a>

                    </div>

    <table class=\"table table-bordered\" id=\"t\"  width=\"100%\" cellspacing=\"0\">
        <thead>
        <tr>
        <!--  <th> id </th> -->
            <th> nom </th>
            <th>ville </th>
            <th>nombres chambre</th>
            <th>image hotel</th>
            <th></th>
            <th></th>

        </tr>
        </thead>

        <tbody>
    <tbody id=\"myTable\">

        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tablehotels"]) || array_key_exists("tablehotels", $context) ? $context["tablehotels"] : (function () { throw new RuntimeError('Variable "tablehotels" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "            <tr>




                <!--    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td> -->

                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ville", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>

                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nbChambre", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>

                <td><img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/back/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "imghotel", [], "any", false, false, false, 43), "html", null, true);
            echo "\" width=\"100\"  /></td>
                <td>  <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierhotel", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"  class=\"btn btn-info btn-icon-split\">
                                            <span class=\"icon text-white-50\">
                        <i class=\"fas fa-info-circle\"></i>

                    </span>
                        <span class=\"text\">Modifier</span>

                    </a></td>
                <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerhotel", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"><img src=\"https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/452/external-delete-multimedia-kiranshastry-gradient-kiranshastry.png\" style=\"width:50px;height:50px;\"/></a></td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        </tbody>
        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>

";
        // line 65
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["tablehotels"]) || array_key_exists("tablehotels", $context) ? $context["tablehotels"] : (function () { throw new RuntimeError('Variable "tablehotels" does not exist.', 65, $this->source); })()));
        echo "

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/afficherhotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 65,  154 => 57,  143 => 52,  132 => 44,  127 => 43,  122 => 41,  117 => 39,  113 => 38,  108 => 36,  101 => 31,  97 => 30,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <button class=\"btn btn-success btn-icon-split\" ><a href=\"{{ path('ajouterhotel')  }}\"><span class=\"text\" style=\"color: white\">Ajouter </span></a></button>
    <br><br>
<div>
    <p style=\"100px\" > <input  id=\"myInput\"  type=\"text\" placeholder=\"search\">
        <img src=\"https://img.icons8.com/nolan/344/google-web-search.png\" style=\"width:50px;height:50px;\"/></a>

                    </div>

    <table class=\"table table-bordered\" id=\"t\"  width=\"100%\" cellspacing=\"0\">
        <thead>
        <tr>
        <!--  <th> id </th> -->
            <th> nom </th>
            <th>ville </th>
            <th>nombres chambre</th>
            <th>image hotel</th>
            <th></th>
            <th></th>

        </tr>
        </thead>

        <tbody>
    <tbody id=\"myTable\">

        {% for i in tablehotels %}
            <tr>




                <!--    <td>{{ i.id  }}</td> -->

                <td>{{ i.nom }}</td>
                <td>{{ i.ville  }}</td>

                <td>{{ i.nbChambre }}</td>

                <td><img src=\"{{ asset('/back/img/')}}{{ i.imghotel }}\" width=\"100\"  /></td>
                <td>  <a href=\"{{ path('modifierhotel',{'id': i.id}) }}\"  class=\"btn btn-info btn-icon-split\">
                                            <span class=\"icon text-white-50\">
                        <i class=\"fas fa-info-circle\"></i>

                    </span>
                        <span class=\"text\">Modifier</span>

                    </a></td>
                <td><a href=\"{{ path('supprimerhotel',{'id': i.id}) }}\"><img src=\"https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/452/external-delete-multimedia-kiranshastry-gradient-kiranshastry.png\" style=\"width:50px;height:50px;\"/></a></td>


            </tr>
        {% endfor %}

        </tbody>
        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>

{{ knp_pagination_render(tablehotels) }}

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>







{% endblock %}", "hotel/afficherhotel.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\hotel\\afficherhotel.html.twig");
    }
}
