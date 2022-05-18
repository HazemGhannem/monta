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

/* hotel/AfficheHotelClient.html.twig */
class __TwigTemplate_8d4fa72f2ffad77c04a670b3284c921846e7946c368dc0171f45392e8b149b1e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/AfficheHotelClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/AfficheHotelClient.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "hotel/AfficheHotelClient.html.twig", 1);
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

        echo "Hello HotelController!";
        
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
        echo "    <section id=\"hotels\" class=\"section-with-bg\">

        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Hotels</h2>
                <p> Recherchez des offres sur des hôtels, des hébergements indépendants et plus encore </p>
            </div>


            <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">



                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tablehotels"]) || array_key_exists("tablehotels", $context) ? $context["tablehotels"] : (function () { throw new RuntimeError('Variable "tablehotels" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "                <div class=\"col-lg-4 col-md-6\" >
                    <div class=\"hotel\">
                        <div class=\"hotel-img\"  >
                            <img   src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/back/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "imghotel", [], "any", false, false, false, 23), "html", null, true);
            echo "\"  alt=\"Hotel 1\" class=\"img-fluid\"   />
                        </div>
                        <h3><a href=\"#\"> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></h3>
                        <div class=\"stars\">
                            <i class=\"bi bi-star-fill\"></i>
                            <i class=\"bi bi-star-fill\"></i>
                            <i class=\"bi bi-star-fill\"></i>
                            <i class=\"bi bi-star-fill\"></i>
                            <i class=\"bi bi-star-fill\"></i>
                        </div>
                        <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ville", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                        <a class=\"btn btn-outline-dark mt-auto\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_hotel_info", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">Ouvrir</a>
        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">   <img   width=\"30\" src=\"https://cdn-icons-png.flaticon.com/512/337/337946.png\">  </a>

                    </div>

                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "




            </div>
        </div>

    </section>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/AfficheHotelClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  137 => 35,  133 => 34,  129 => 33,  118 => 25,  112 => 23,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Hello HotelController!{% endblock %}

{% block body %}
    <section id=\"hotels\" class=\"section-with-bg\">

        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Hotels</h2>
                <p> Recherchez des offres sur des hôtels, des hébergements indépendants et plus encore </p>
            </div>


            <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">



                {% for i in tablehotels %}
                <div class=\"col-lg-4 col-md-6\" >
                    <div class=\"hotel\">
                        <div class=\"hotel-img\"  >
                            <img   src=\"{{ asset('/back/img/')}}{{ i.imghotel }}\"  alt=\"Hotel 1\" class=\"img-fluid\"   />
                        </div>
                        <h3><a href=\"#\"> {{ i.nom }}</a></h3>
                        <div class=\"stars\">
                            <i class=\"bi bi-star-fill\"></i>
                            <i class=\"bi bi-star-fill\"></i>
                            <i class=\"bi bi-star-fill\"></i>
                            <i class=\"bi bi-star-fill\"></i>
                            <i class=\"bi bi-star-fill\"></i>
                        </div>
                        <p>{{ i.ville  }}</p>
                        <a class=\"btn btn-outline-dark mt-auto\" href=\"{{ path('get_hotel_info', {id:i.id}) }}\">Ouvrir</a>
        <a href=\"{{ path('pdf',{'id': i.id}) }}\">   <img   width=\"30\" src=\"https://cdn-icons-png.flaticon.com/512/337/337946.png\">  </a>

                    </div>

                </div>
                {% endfor %}





            </div>
        </div>

    </section>







{% endblock %}", "hotel/AfficheHotelClient.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\hotel\\AfficheHotelClient.html.twig");
    }
}
