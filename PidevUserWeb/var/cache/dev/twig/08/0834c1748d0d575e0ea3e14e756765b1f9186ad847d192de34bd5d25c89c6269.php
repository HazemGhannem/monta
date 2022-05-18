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

/* event/affback.html.twig */
class __TwigTemplate_0b8f87dc557f11430d623ff6571c97070869199165e7cd497974c42e11cb74e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/affback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/affback.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "event/affback.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Event index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Event index</h1>
    <input id=\"search\" type=text value=\"\" placeholder=\"type a name\">
    <table class=\"table table-secondary\" style=\"color: steelblue\" border=\"2\">
        <thead>
        <tr>
            <th>Id</th>
            <th>NomEvent</th>
            <th>DateEvent</th>
            <th>Description</th>
            <th>Image</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody id=\"body1\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nomEvent", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["event"], "dateEvent", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateEvent", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td><img  width=\"300px\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 27))), "html", null, true);
            echo "   \"class=\"\"></td>
                <td>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
        <tbody id=\"searchBody\">

        </tbody>
    </table>

    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_new");
        echo "\">Create new</a>

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
                    url: 'event/recherche',
                    data: {
                        'valeur-recherche': value
                    },
                    success: function (retour) {
                        if (retour) {
                            \$('#searchBody').empty()
                            \$.each(JSON.parse(retour), function (i, obj) {

                                \$('#searchBody').append(
                                    \"<tr>\" +
                                    \"    <td>\" + obj.id + \"</td>\" +
                                    \"    <td>\" + obj.nomEvent + \"</td>\" +
                                    \"    <td>\" + obj.dateEvent + \"</td>\" +
                                    \"    <td>\" + obj.description + \"</td>\" +
                                    \"    <td></td>\" +
                                    \"</tr>\"
                                );

                                console.log(\"wsel\");
                            });
                        }
                    },
                }
            );
        })
    </script>
    <div class=\"mt-5\">
        ";
        // line 87
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 87, $this->source); })()), "pagination.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/affback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 87,  164 => 44,  156 => 38,  147 => 34,  138 => 30,  134 => 29,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Event index{% endblock %}

{% block body %}

    <h1>Event index</h1>
    <input id=\"search\" type=text value=\"\" placeholder=\"type a name\">
    <table class=\"table table-secondary\" style=\"color: steelblue\" border=\"2\">
        <thead>
        <tr>
            <th>Id</th>
            <th>NomEvent</th>
            <th>DateEvent</th>
            <th>Description</th>
            <th>Image</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody id=\"body1\">
        {% for event in events %}
            <tr>
                <td>{{ event.id }}</td>
                <td>{{ event.nomEvent }}</td>
                <td>{{ event.dateEvent ? event.dateEvent|date('Y-m-d') : '' }}</td>
                <td>{{ event.description }}</td>
                <td><img  width=\"300px\" src=\"{{ asset('uploads/image/' ~ event.image) }}   \"class=\"\"></td>
                <td>
                    <a href=\"{{ path('event_show', {'id': event.id}) }}\">show</a>
                    <a href=\"{{ path('event_edit', {'id': event.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        <tbody id=\"searchBody\">

        </tbody>
    </table>

    <a href=\"{{ path('event_new') }}\">Create new</a>

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
                    url: 'event/recherche',
                    data: {
                        'valeur-recherche': value
                    },
                    success: function (retour) {
                        if (retour) {
                            \$('#searchBody').empty()
                            \$.each(JSON.parse(retour), function (i, obj) {

                                \$('#searchBody').append(
                                    \"<tr>\" +
                                    \"    <td>\" + obj.id + \"</td>\" +
                                    \"    <td>\" + obj.nomEvent + \"</td>\" +
                                    \"    <td>\" + obj.dateEvent + \"</td>\" +
                                    \"    <td>\" + obj.description + \"</td>\" +
                                    \"    <td></td>\" +
                                    \"</tr>\"
                                );

                                console.log(\"wsel\");
                            });
                        }
                    },
                }
            );
        })
    </script>
    <div class=\"mt-5\">
        {{ knp_pagination_render(events, 'pagination.html.twig') }}
    </div>
{% endblock %}
", "event/affback.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\event\\affback.html.twig");
    }
}
