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

/* opinion/index.html.twig */
class __TwigTemplate_c9aaab353b361f97fca36098f75fe1ee65e2d1df2f8006be19d0ef710befb070 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "opinion/index.html.twig", 1);
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

        echo "Opinion index";
        
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
        echo "    <div class=\"align-content-center p-5 m-5\">
        <main>
            <div class=\"container-fluid px-4\">
                <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        <i class=\"fas fa-table me-1\"></i>
                        Opinion
                    </div>
                    <div class=\"card-body\">
                        <table id=\"datatablesSimple\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Commentaire</th>
                                <th>Rating</th>
                                <th>CreationDate</th>
                                <th>actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opinions"]) || array_key_exists("opinions", $context) ? $context["opinions"] : (function () { throw new RuntimeError('Variable "opinions" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 27
            echo "                                <tr>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "commentaire", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "rating", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                    <td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["opinion"], "creationDate", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "creationDate", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opinion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["opinion"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">show</a>
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opinion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["opinion"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">edit</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                                <tr>
                                    <td colspan=\"5\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opinion_new");
        echo "\">Create new</a>
        </main>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "opinion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 46,  157 => 42,  148 => 38,  139 => 34,  135 => 33,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Opinion index{% endblock %}

{% block body %}
    <div class=\"align-content-center p-5 m-5\">
        <main>
            <div class=\"container-fluid px-4\">
                <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        <i class=\"fas fa-table me-1\"></i>
                        Opinion
                    </div>
                    <div class=\"card-body\">
                        <table id=\"datatablesSimple\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Commentaire</th>
                                <th>Rating</th>
                                <th>CreationDate</th>
                                <th>actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for opinion in opinions %}
                                <tr>
                                    <td>{{ opinion.id }}</td>
                                    <td>{{ opinion.commentaire }}</td>
                                    <td>{{ opinion.rating }}</td>
                                    <td>{{ opinion.creationDate ? opinion.creationDate|date('Y-m-d') : '' }}</td>
                                    <td>
                                        <a href=\"{{ path('opinion_show', {'id': opinion.id}) }}\">show</a>
                                        <a href=\"{{ path('opinion_edit', {'id': opinion.id}) }}\">edit</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"5\">no records found</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href=\"{{ path('opinion_new') }}\">Create new</a>
        </main>
    </div>
{% endblock %}
", "opinion/index.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\opinion\\index.html.twig");
    }
}
