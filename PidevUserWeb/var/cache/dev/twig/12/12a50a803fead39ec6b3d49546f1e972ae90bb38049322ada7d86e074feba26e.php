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

/* admin/administrations.html.twig */
class __TwigTemplate_ce07a94f9291f548843d9e27c11d74b6fa7b058b0aba1ce0d801e09fb1581f0e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/administrations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/administrations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/administrations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"main-panel\">
            <h1 style=\"color:cornflowerblue \">&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;Liste Des Users</h1>
            <br>
            <br>
            <h4>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class=\"-align-center\" style=\"color: #0b3251\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ajoutuser"), "html", null, true);
        echo "\">Ajouter Un Nouveau
                    User
                </a></h4>
            <br>
            <p style=\"100px\" > <input  id=\"myInput\"  type=\"text\" placeholder=\"search\">
            <table id=\"t\"  class=\"table table-secondary\" style=\"color: steelblue\" border=\"2\">
                <tr>
                    <td>ID</td>
                    <td>nom</td>
                    <td>Prénom</td>
                    <td>Cin</td>
                    <td>Email</td>
                    <td>Sexe</td>
                    <td>Role</td>
                    <td>Statut</td>
                    <td>Actions</td>
                </tr>
                <tbody>
                <tbody id=\"myTable\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 47
            echo "                    <tr>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "sexe", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 55
                echo "                                ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "/
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "</td>
                        <td> ";
            // line 57
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 57), 1))) {
                echo " Actif
                            ";
            } else {
                // line 58
                echo "Bloquer ";
            }
            echo "</td>
                        <td>
                            <a href=\"modifuser/";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\">
                                <input class=\"btn btn-primary \" type=\"submit\" value=\"Modifier\"/>
                            </a>
                            <a href=\"suppuser/";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
                                <input class=\"btn btn-danger \" type=\"submit\" value=\"Supprimer\"/>
                            </a>
                            ";
            // line 66
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 66), 1))) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactiver-user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\" class=\"btn btn-dark text-white\" href=\"#\">Bloquer</a>
                            ";
            } else {
                // line 67
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activer-user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\" class=\"btn btn-success text-white\" href=\"#\">Débloquer</a> ";
            }
            // line 68
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </tbody>
                </tbody>
                <tbody id=\"search\">
                </tbody>
            </table>
        </nav>
    </div>

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
        return "admin/administrations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 71,  197 => 68,  192 => 67,  185 => 66,  179 => 63,  173 => 60,  167 => 58,  162 => 57,  159 => 56,  150 => 55,  146 => 54,  142 => 53,  138 => 52,  134 => 51,  130 => 50,  126 => 49,  122 => 48,  119 => 47,  115 => 46,  93 => 27,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"main-panel\">
            <h1 style=\"color:cornflowerblue \">&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;Liste Des Users</h1>
            <br>
            <br>
            <h4>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class=\"-align-center\" style=\"color: #0b3251\" href=\"{{ asset('ajoutuser') }}\">Ajouter Un Nouveau
                    User
                </a></h4>
            <br>
            <p style=\"100px\" > <input  id=\"myInput\"  type=\"text\" placeholder=\"search\">
            <table id=\"t\"  class=\"table table-secondary\" style=\"color: steelblue\" border=\"2\">
                <tr>
                    <td>ID</td>
                    <td>nom</td>
                    <td>Prénom</td>
                    <td>Cin</td>
                    <td>Email</td>
                    <td>Sexe</td>
                    <td>Role</td>
                    <td>Statut</td>
                    <td>Actions</td>
                </tr>
                <tbody>
                <tbody id=\"myTable\">
                {% for user in users %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.cin }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.sexe }}</td>
                        <td>{% for role in user.roles %}
                                {{ role }}/
                            {% endfor %}</td>
                        <td> {% if user.enabled == 1 %} Actif
                            {% else %}Bloquer {% endif %}</td>
                        <td>
                            <a href=\"modifuser/{{ user.id }}\">
                                <input class=\"btn btn-primary \" type=\"submit\" value=\"Modifier\"/>
                            </a>
                            <a href=\"suppuser/{{ user.id }}\">
                                <input class=\"btn btn-danger \" type=\"submit\" value=\"Supprimer\"/>
                            </a>
                            {% if user.enabled == 1 %} <a href=\"{{ path ('desactiver-user', {'id' : user.id})}}\" class=\"btn btn-dark text-white\" href=\"#\">Bloquer</a>
                            {% else %}<a href=\"{{ path ('activer-user', {'id' : user.id})}}\" class=\"btn btn-success text-white\" href=\"#\">Débloquer</a> {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
                </tbody>
                <tbody id=\"search\">
                </tbody>
            </table>
        </nav>
    </div>

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
{% endblock %}
", "admin/administrations.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\admin\\administrations.html.twig");
    }
}
