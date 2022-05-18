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

/* hotel/afficherdetailhotel.html.twig */
class __TwigTemplate_c872b790b5f32b327e36c1c2f836f2876ba25db0279dcdfd024c910db5145830 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/afficherdetailhotel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/afficherdetailhotel.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "hotel/afficherdetailhotel.html.twig", 1);
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
        echo "    <section id=\"speakers-details\">
        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-md-6\">

                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/back/img/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 11, $this->source); })()), "imghotel", [], "any", false, false, false, 11), "html", null, true);
        echo "\" alt=\"Speaker 1\" class=\"img-fluid\">
                    <iframe class=\"gmap_iframe\" width=\"100%\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=917&amp;height=400&amp;hl=en&amp;q=";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\"></iframe>
                </div>


                <div class=\"col-md-6\">
                    <div class=\"details\">
                        <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 18, $this->source); })()), "getNom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                        <div class=\"social\">

                        </div>

                     <h2>Adress : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 23, $this->source); })()), "ville", [], "any", false, false, false, 23), "html", null, true);
        echo "</h2>
                        <h6>nombres de chambres : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 24, $this->source); })()), "nbchambre", [], "any", false, false, false, 24), "html", null, true);
        echo " chambres</h6>


                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 27, $this->source); })()), "relation", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "
                    <h3>   Chambre : ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 29), "html", null, true);
            echo "  </h3>
                            <h6>Nombre de lits : ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "NbLits", [], "any", false, false, false, 30), "html", null, true);
            echo "    </h6>
                            <h6>Prix ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Prix", [], "any", false, false, false, 31), "html", null, true);
            echo " <pre>
                                </pre>
                                <h6> Etage :";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Etage", [], "any", false, false, false, 33), "html", null, true);
            echo "</h6>
                                 ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Vue", [], "any", false, false, false, 34), "html", null, true);
            echo " </h6>



                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                    </div>
                </div>



            </div>
        </div>

    </section>











";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/afficherdetailhotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 39,  133 => 34,  129 => 33,  124 => 31,  120 => 30,  116 => 29,  113 => 28,  109 => 27,  103 => 24,  99 => 23,  91 => 18,  82 => 12,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block body %}
    <section id=\"speakers-details\">
        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-md-6\">

                    <img src=\"{{ asset('/back/img/')}}{{ hotel.imghotel }}\" alt=\"Speaker 1\" class=\"img-fluid\">
                    <iframe class=\"gmap_iframe\" width=\"100%\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=917&amp;height=400&amp;hl=en&amp;q={{ hotel.nom }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\"></iframe>
                </div>


                <div class=\"col-md-6\">
                    <div class=\"details\">
                        <h1>{{ hotel.getNom }}</h1>
                        <div class=\"social\">

                        </div>

                     <h2>Adress : {{ hotel.ville }}</h2>
                        <h6>nombres de chambres : {{ hotel.nbchambre }} chambres</h6>


                        {% for i in hotel.relation %}

                    <h3>   Chambre : {{ i.type}}  </h3>
                            <h6>Nombre de lits : {{ i.NbLits}}    </h6>
                            <h6>Prix {{ i.Prix}} <pre>
                                </pre>
                                <h6> Etage :{{ i.Etage}}</h6>
                                 {{ i.Vue}} </h6>



                        {% endfor %}

                    </div>
                </div>



            </div>
        </div>

    </section>











{% endblock %}", "hotel/afficherdetailhotel.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\hotel\\afficherdetailhotel.html.twig");
    }
}
