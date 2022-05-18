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

/* hotel/ajouterhotel.html.twig */
class __TwigTemplate_537a0d8852fb76a26e291cb3bf26f864b579ae773cbb49d294d287abf3e9248d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/ajouterhotel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/ajouterhotel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/ajouterhotel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "<div class=\"container-fluid\">
    <!-- Page Heading -->
    <h1 class=\"h3 mb-2 text-gray-800\">Ajouter un Hotel</h1>

    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div >
                <div class=\"row\">
                    <div class=\"col-xl-6 align-content-center\" >
                        <br><br>
                        <div class=\"form-group\">
                            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <div class=\"form-group\">
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "nom"]]);
        echo "
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 23, $this->source); })()), "nbChambre", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "nombres de chambres"]]);
        echo "
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 24, $this->source); })()), "nbChambre", [], "any", false, false, false, 24), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 27, $this->source); })()), "ville", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "ville"]]);
        echo "
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 28, $this->source); })()), "ville", [], "any", false, false, false, 28), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 31, $this->source); })()), "imghotel", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "image Hotel"]]);
        echo "
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 32, $this->source); })()), "imghotel", [], "any", false, false, false, 32), 'errors');
        echo "
                            </div>

                        </div>
                        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/ajouterhotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  120 => 32,  116 => 31,  110 => 28,  106 => 27,  100 => 24,  96 => 23,  90 => 20,  86 => 19,  81 => 17,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
<div class=\"container-fluid\">
    <!-- Page Heading -->
    <h1 class=\"h3 mb-2 text-gray-800\">Ajouter un Hotel</h1>

    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div >
                <div class=\"row\">
                    <div class=\"col-xl-6 align-content-center\" >
                        <br><br>
                        <div class=\"form-group\">
                            {{ form_start(formulaire,{'attr': {'novalidate': 'novalidate'}} ) }}
                            <div class=\"form-group\">
                                {{ form_widget(formulaire.nom  , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'nom'}} ) }}
                                {{ form_errors(formulaire.nom ) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(formulaire.nbChambre, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'nombres de chambres'}} ) }}
                                {{ form_errors(formulaire.nbChambre ) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(formulaire.ville , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'ville'}} ) }}
                                {{ form_errors(formulaire.ville) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(formulaire.imghotel , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'image Hotel'}} ) }}
                                {{ form_errors(formulaire.imghotel) }}
                            </div>

                        </div>
                        {{ form_end(formulaire) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "hotel/ajouterhotel.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\hotel\\ajouterhotel.html.twig");
    }
}
