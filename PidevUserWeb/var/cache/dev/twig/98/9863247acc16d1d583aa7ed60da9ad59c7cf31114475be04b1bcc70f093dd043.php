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

/* chambre/modifierchambre.html.twig */
class __TwigTemplate_6575c60505d3aba024fab98ecb5579d5704ccdbbd3223dd1a92a9b79f91cf784 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/modifierchambre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/modifierchambre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre/modifierchambre.html.twig", 1);
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
        echo "    <div class=\"container-fluid\">
        <!-- Page Heading -->
        <h1 class=\"h3 mb-2 text-gray-800\">Modifier une chambre</h1>

        <div class=\"card shadow mb-4\">
            <div class=\"card-body\">
                <div >
                    <div class=\"row\">
                        <div class=\"col-xl-6 align-content-center\" >
                            <br><br>
                            <div class=\"form-group\">
                                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "Type", [], "any", false, false, false, 17), 'label', ["label" => "type"]);
        echo "
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Type", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "type"]]);
        echo "
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "Type", [], "any", false, false, false, 19), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nbLits", [], "any", false, false, false, 22), 'label', ["label" => "nombres lits"]);
        echo "
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nbLits", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "nombres de lits"]]);
        echo "
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nbLits", [], "any", false, false, false, 24), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">

                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "etage", [], "any", false, false, false, 28), 'label', ["label" => "etage"]);
        echo "
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "etage", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "etage"]]);
        echo "
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "etage", [], "any", false, false, false, 30), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prix", [], "any", false, false, false, 33), 'label', ["label" => "prix "]);
        echo "
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prix", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "prix "]]);
        echo "
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "prix", [], "any", false, false, false, 35), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vue", [], "any", false, false, false, 38), 'label', ["label" => "vue"]);
        echo "
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vue", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "vue "]]);
        echo "
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "vue", [], "any", false, false, false, 40), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "hotel", [], "any", false, false, false, 43), 'label', ["label" => "hotel"]);
        echo "
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "hotel", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom Hotel "]]);
        echo "
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "hotel", [], "any", false, false, false, 45), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
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
        return "chambre/modifierchambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 48,  165 => 45,  161 => 44,  157 => 43,  151 => 40,  147 => 39,  143 => 38,  137 => 35,  133 => 34,  129 => 33,  123 => 30,  119 => 29,  115 => 28,  108 => 24,  104 => 23,  100 => 22,  94 => 19,  90 => 18,  86 => 17,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-fluid\">
        <!-- Page Heading -->
        <h1 class=\"h3 mb-2 text-gray-800\">Modifier une chambre</h1>

        <div class=\"card shadow mb-4\">
            <div class=\"card-body\">
                <div >
                    <div class=\"row\">
                        <div class=\"col-xl-6 align-content-center\" >
                            <br><br>
                            <div class=\"form-group\">
                                {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
                                <div class=\"form-group\">
                                    {{ form_label(form.Type, 'type')  }}
                                    {{ form_widget(form.Type, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'type'}} ) }}
                                    {{ form_errors(form.Type ) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.nbLits, 'nombres lits')  }}
                                    {{ form_widget(form.nbLits, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'nombres de lits'}} ) }}
                                    {{ form_errors(form.nbLits ) }}
                                </div>
                                <div class=\"form-group\">

                                    {{ form_label(form.etage, 'etage')  }}
                                    {{ form_widget(form.etage , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'etage'}} ) }}
                                    {{ form_errors(form.etage) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.prix, 'prix ')  }}
                                    {{ form_widget(form.prix , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'prix '}} ) }}
                                    {{ form_errors(form.prix) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.vue, 'vue')  }}
                                    {{ form_widget(form.vue , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'vue '}} ) }}
                                    {{ form_errors(form.vue) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.hotel, 'hotel')  }}
                                    {{ form_widget(form.hotel , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom Hotel '}} ) }}
                                    {{ form_errors(form.hotel) }}
                                </div>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







{% endblock %}", "chambre/modifierchambre.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\chambre\\modifierchambre.html.twig");
    }
}
