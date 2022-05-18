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

/* chambre/afficherchambre.html.twig */
class __TwigTemplate_c94f25778a783c77b33dabe4d9b91aaef4191cf5496d87ff4933c36d23856907 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/afficherchambre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/afficherchambre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre/afficherchambre.html.twig", 1);
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
        echo "
    <button class=\"btn btn-success btn-icon-split\" ><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterchambre");
        echo "\"><span class=\"text\" style=\"color: white\">Ajouter </span></a></button>
    <br><br>
    <table class=\"table table-bordered\" id=\"t\"  width=\"100%\" cellspacing=\"0\">
        <thead>
        <tr>

            <!-- <th>id </th> -->
            <th>Nombre de lits</th>
            <th>Etage</th>
            <th>Prix</th>
            <th>Vue</th>
            <th> hotél </th>
            <th>  </th>
            <th>  </th>
        </tr>
        </thead>

        <tbody>


        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tablehotels"]) || array_key_exists("tablehotels", $context) ? $context["tablehotels"] : (function () { throw new RuntimeError('Variable "tablehotels" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 27
            echo "            <tr>







              <!--  <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td> -->

                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nbLits", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "etage", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>

                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prix", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "vue", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>

                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "hotel", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>

                <td>  <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierchambre", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"  class=\"btn btn-info btn-icon-split\">
                                            <span class=\"icon text-white-50\">
                        <i class=\"fas fa-info-circle\"></i>

                    </span>
                        <span class=\"text\">Modifier</span>

                    </a></td>

                <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerchambre", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><img src=\"https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/452/external-delete-multimedia-kiranshastry-gradient-kiranshastry.png\" style=\"width:50px;height:50px;\"/></a></td>



            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "

        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>











";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "chambre/afficherchambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 61,  148 => 54,  136 => 45,  131 => 43,  126 => 41,  122 => 40,  117 => 38,  113 => 37,  108 => 35,  98 => 27,  94 => 26,  71 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

    <button class=\"btn btn-success btn-icon-split\" ><a href=\"{{ path('ajouterchambre')  }}\"><span class=\"text\" style=\"color: white\">Ajouter </span></a></button>
    <br><br>
    <table class=\"table table-bordered\" id=\"t\"  width=\"100%\" cellspacing=\"0\">
        <thead>
        <tr>

            <!-- <th>id </th> -->
            <th>Nombre de lits</th>
            <th>Etage</th>
            <th>Prix</th>
            <th>Vue</th>
            <th> hotél </th>
            <th>  </th>
            <th>  </th>
        </tr>
        </thead>

        <tbody>


        {% for i in tablehotels %}
            <tr>







              <!--  <td>{{ i.id  }}</td> -->

                <td>{{ i.nbLits }}</td>
                <td>{{ i.etage  }}</td>

                <td>{{ i.prix }}</td>
                <td>{{ i.vue  }}</td>

                <td>{{ i.hotel }}</td>

                <td>  <a href=\"{{ path('modifierchambre',{'id': i.id}) }}\"  class=\"btn btn-info btn-icon-split\">
                                            <span class=\"icon text-white-50\">
                        <i class=\"fas fa-info-circle\"></i>

                    </span>
                        <span class=\"text\">Modifier</span>

                    </a></td>

                <td><a href=\"{{ path('supprimerchambre',{'id': i.id}) }}\"><img src=\"https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/452/external-delete-multimedia-kiranshastry-gradient-kiranshastry.png\" style=\"width:50px;height:50px;\"/></a></td>



            </tr>

        {% endfor %}


        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>











{% endblock %}", "chambre/afficherchambre.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\chambre\\afficherchambre.html.twig");
    }
}
