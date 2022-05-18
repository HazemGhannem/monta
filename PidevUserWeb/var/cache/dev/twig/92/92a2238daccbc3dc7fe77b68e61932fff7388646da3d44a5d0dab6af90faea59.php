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

/* reserve_vol/updatereservation.html.twig */
class __TwigTemplate_8058675a4438b3dc2b236b01763f022b0fc8755fdfea6ad935df7da383650d76 extends Template
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
        // line 5
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve_vol/updatereservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve_vol/updatereservation.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "reserve_vol/updatereservation.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"app-content\">

        <div class=\"side-app\">

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card m-b-20\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Modifier Une Reservation Event</h3>

                        </div>
                        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                        <div class=\"card-body\">

                            <form>

                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputEmail2\">Date</label>
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "date", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "DATE"]]);
        echo "
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date", [], "any", false, false, false, 30), 'errors');
        echo "
                                </div>
                                <div class=\"form-group mb-0\">
                                    <div class=\"checkbox checkbox-secondary\">
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'widget');
        echo "
                                        <button type=\"SubmitType\" class=\"btn btn-primary \">Modifier Reservation</button>
                                    </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reserve_vol/updatereservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  103 => 34,  96 => 30,  92 => 29,  82 => 22,  68 => 10,  58 => 9,  35 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{#
<h1> update une Reservation Event </h1>
{{ form (form)}}
#}
{% extends 'front.html.twig' %}

{#<h1>Ajout Article</h1>
{{ form(form)}}#}
{% block body %}

    <div class=\"app-content\">

        <div class=\"side-app\">

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card m-b-20\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Modifier Une Reservation Event</h3>

                        </div>
                        {{ form_start(form)}}
                        <div class=\"card-body\">

                            <form>

                                <div class=\"form-group\">
                                    <label class=\"form-label\" for=\"exampleInputEmail2\">Date</label>
                                    {{ form_widget(form.date , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'DATE'}} ) }}
                                    {{ form_errors(form.date) }}
                                </div>
                                <div class=\"form-group mb-0\">
                                    <div class=\"checkbox checkbox-secondary\">
                                        {{ form_widget(form) }}
                                        <button type=\"SubmitType\" class=\"btn btn-primary \">Modifier Reservation</button>
                                    </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
            {{ form_end(form) }}

        </div>
    </div>

{% endblock %}", "reserve_vol/updatereservation.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\reserve_vol\\updatereservation.html.twig");
    }
}
