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

/* vol/aff.html.twig */
class __TwigTemplate_21264a33439dff94c9bf117fe5ad09d9d64def223460fcf11e66575d714409b2 extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/aff.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/aff.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "vol/aff.html.twig", 1);
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
        echo "    <head><script src=\"https://kit.fontawesome.com/9f0b926b9a.js\" crossorigin=\"anonymous\"></script></head>
    <tbody>
            <h1> La liste des vols</h1>
   <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche_vol");
        echo "\">
       <label>Entrer la ville de départ:</label>
       <input id=\"search\" type=text value=\"\" placeholder=\"type a name\">

       <input type=\"submit\" value=\"Recherche\">
   </form>
    <style>
            table{
                border:solid 1px #aaa999;
            }
            table tr th{
                border:solid 1px #aaa999;
                padding:6px 11px;
            }
            table tr td{
                border:solid 1px #aaa999;
                padding:6px 11px;
            }
    </style>
        <table style=\"border:solid 1px #aaa999;\">


                <th>Date vol</th>

                <th>Prix vol</th>
                <th>Ville depart</th>
                <th>Ville arrivée</th>
                <th>Action</th>
            <th>Wishlist</th>
            <th>rating</th>

            <tbody id=\"body1\">

            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vol"]) || array_key_exists("vol", $context) ? $context["vol"] : (function () { throw new RuntimeError('Variable "vol" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 41
            echo "                <tr>

                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Datevolll", [], "any", false, false, false, 43)), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "prixvolll", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "destination", [], "any", false, false, false, 45), "villedep", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "destination", [], "any", false, false, false, 46), "villearr", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listres");
            echo "\">Réserver</a>
                        </td>
                    <td> <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"\">Ajouter</a>

                    </td>
                    <td><i class=\"fa fa-star\" style=\"color: black\">
                            <i class=\"fa fa-star\" style=\"color: black\"></i>
                            <i class=\"fa fa-star\" style=\"color: black\"></i>
                            <i class=\"fa fa-star\" style=\"color: black\"></i>
                            <i class=\"fa fa-star\" style=\"color: black\"></i>
                            <i class=\"fa fa-star\" style=\"color: black\"></i> </td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
            <tbody id=\"searchBody\">

            </tbody>
        </table>




    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(\"#search\").keyup(function () {
            var value = \$(\"#search\").val();
            if (value === \"\") {
                \$('#searchBody').hide();
                \$('#body1').show();
            } else {
                \$('#searchBody').show();
                \$('#body1').hide();
            }
            \$.ajax({
                    type: 'GET',
                    url: 'vol/recherche',
                    data: {
                        'valeur-recherche': value
                    },
                    success: function (retour) {
                        if (retour) {
                            \$('#searchBody').empty()
                            \$.each(JSON.parse(retour), function (i, obj) {

                                \$('#searchBody').append(
                                    \"<tr>\" +
                                    \"    <td>\" + obj.date + \"</td>\" +
                                    \"    <td>\" + obj.prix + \"</td>\" +
                                    \"    <td>\" + obj.destination + \"</td>\" +
                                    \"    <td>\" + obj.destination2 + \"</td>\" +
                                    \"        <td>\" +
                                    \"           <a href='listres/\" + obj.id + \"'>Réserver\" +
                                    \"           </a>\" +
                                    \"        </td>\" +
                                    \"        <td>\" +
                                    \"           <a href='add/\" + obj.id + \"'>Ajouter\" +
                                    \"           </a>\" +
                                    \"        </td>\" +
                                    \"    </tr>\"
                                );

                                console.log(\"wsel\");
                            });
                        }
                    },
                }
            );
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vol/aff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 62,  138 => 49,  133 => 47,  129 => 46,  125 => 45,  121 => 44,  117 => 43,  113 => 41,  109 => 40,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block body %}
    <head><script src=\"https://kit.fontawesome.com/9f0b926b9a.js\" crossorigin=\"anonymous\"></script></head>
    <tbody>
            <h1> La liste des vols</h1>
   <form method=\"post\" action=\"{{ path('recherche_vol') }}\">
       <label>Entrer la ville de départ:</label>
       <input id=\"search\" type=text value=\"\" placeholder=\"type a name\">

       <input type=\"submit\" value=\"Recherche\">
   </form>
    <style>
            table{
                border:solid 1px #aaa999;
            }
            table tr th{
                border:solid 1px #aaa999;
                padding:6px 11px;
            }
            table tr td{
                border:solid 1px #aaa999;
                padding:6px 11px;
            }
    </style>
        <table style=\"border:solid 1px #aaa999;\">


                <th>Date vol</th>

                <th>Prix vol</th>
                <th>Ville depart</th>
                <th>Ville arrivée</th>
                <th>Action</th>
            <th>Wishlist</th>
            <th>rating</th>

            <tbody id=\"body1\">

            {% for c in vol %}
                <tr>

                    <td>{{ c.Datevolll|date}}</td>
                    <td>{{ c.prixvolll }}</td>
                    <td>{{ c.destination.villedep }}</td>
                    <td>{{ c.destination.villearr }}</td>
                    <td><a href=\"{{ path('listres')}}\">Réserver</a>
                        </td>
                    <td> <a href=\"{{path(\"add\", {id: c.id})}}\" class=\"\">Ajouter</a>

                    </td>
                    <td><i class=\"fa fa-star\" style=\"color: black\">
                            <i class=\"fa fa-star\" style=\"color: black\"></i>
                            <i class=\"fa fa-star\" style=\"color: black\"></i>
                            <i class=\"fa fa-star\" style=\"color: black\"></i>
                            <i class=\"fa fa-star\" style=\"color: black\"></i>
                            <i class=\"fa fa-star\" style=\"color: black\"></i> </td>

                </tr>

            {% endfor %}
            </tbody>
            <tbody id=\"searchBody\">

            </tbody>
        </table>




    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(\"#search\").keyup(function () {
            var value = \$(\"#search\").val();
            if (value === \"\") {
                \$('#searchBody').hide();
                \$('#body1').show();
            } else {
                \$('#searchBody').show();
                \$('#body1').hide();
            }
            \$.ajax({
                    type: 'GET',
                    url: 'vol/recherche',
                    data: {
                        'valeur-recherche': value
                    },
                    success: function (retour) {
                        if (retour) {
                            \$('#searchBody').empty()
                            \$.each(JSON.parse(retour), function (i, obj) {

                                \$('#searchBody').append(
                                    \"<tr>\" +
                                    \"    <td>\" + obj.date + \"</td>\" +
                                    \"    <td>\" + obj.prix + \"</td>\" +
                                    \"    <td>\" + obj.destination + \"</td>\" +
                                    \"    <td>\" + obj.destination2 + \"</td>\" +
                                    \"        <td>\" +
                                    \"           <a href='listres/\" + obj.id + \"'>Réserver\" +
                                    \"           </a>\" +
                                    \"        </td>\" +
                                    \"        <td>\" +
                                    \"           <a href='add/\" + obj.id + \"'>Ajouter\" +
                                    \"           </a>\" +
                                    \"        </td>\" +
                                    \"    </tr>\"
                                );

                                console.log(\"wsel\");
                            });
                        }
                    },
                }
            );
        })
    </script>
{% endblock %}


", "vol/aff.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\vol\\aff.html.twig");
    }
}
