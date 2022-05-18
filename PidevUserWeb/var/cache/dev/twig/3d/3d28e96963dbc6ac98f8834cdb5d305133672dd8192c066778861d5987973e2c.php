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

/* signalement/show.html.twig */
class __TwigTemplate_d72a3c420a883115f31439b0ccef1593f3e977d8a351dd30966f697c43c12182 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "signalement/show.html.twig", 1);
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

        echo "Signalement";
        
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
        echo "    <div class=\"align-content-center m-5 p-5\">
        <h1>Signalement</h1>

        <table class=\"table\">
            <tbody>
            <tr>
                <td><b>Blogueur</b></td>
                <td><b>Description</b></td>
                <td><b>Blogueur signalé</b></td>
                <td><b>Description de l'opinion signalé</b></td>
                <td><b>Actions</b></td>
            </tr>
            <tr>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 19, $this->source); })()), "blogueur", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 21, $this->source); })()), "opinion", [], "any", false, false, false, 21), "client", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 22, $this->source); })()), "opinion", [], "any", false, false, false, 22), "commentaire", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                <td>
                    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opinion_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 24, $this->source); })()), "opinion", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">Afficher l'opinion</a>
                    &nbsp|&nbsp
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">Ignorer</a>
                </td>
            </tr>
            </tbody>
        </table>

        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_index");
        echo "\">Back to list</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "signalement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  125 => 26,  120 => 24,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Signalement{% endblock %}

{% block body %}
    <div class=\"align-content-center m-5 p-5\">
        <h1>Signalement</h1>

        <table class=\"table\">
            <tbody>
            <tr>
                <td><b>Blogueur</b></td>
                <td><b>Description</b></td>
                <td><b>Blogueur signalé</b></td>
                <td><b>Description de l'opinion signalé</b></td>
                <td><b>Actions</b></td>
            </tr>
            <tr>
                <td>{{ signalement.blogueur.name }}</td>
                <td>{{ signalement.description }}</td>
                <td>{{ signalement.opinion.client.name }}</td>
                <td>{{ signalement.opinion.commentaire }}</td>
                <td>
                    <a href=\"{{ path('opinion_show', {'id': signalement.opinion.id}) }}\">Afficher l'opinion</a>
                    &nbsp|&nbsp
                    <a href=\"{{ path('signalement_delete', {'id': signalement.id}) }}\">Ignorer</a>
                </td>
            </tr>
            </tbody>
        </table>

        <a href=\"{{ path('signalement_index') }}\">Back to list</a>
    </div>
{% endblock %}
", "signalement/show.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\signalement\\show.html.twig");
    }
}
