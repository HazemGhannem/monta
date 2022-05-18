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

/* vol/front.html.twig */
class __TwigTemplate_e48fd1060093898a07e4748ef710e5d1cd4d9821bb1889d8246718a8809c347c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vol/front.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "vol/front.html.twig", 1);
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

        echo "Hello VolController!";
        
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
        echo "<header id=\"header\" class=\"d-flex align-items-center \">
    <div class=\"container-fluid container-xxl d-flex align-items-center\">

        <div id=\"logo\" class=\"me-auto\">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href=\"index.html\">The<span>Event</span></a></h1>-->
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/index.html"), "html", null, true);
        echo "\" class=\"scrollto\"><img width=\"100\"  height=\"600\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\"></a>
        </div>

        <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#about\">About</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#speakers\">Speakers</a></li>
                <li><a class=\"nav-link scrollto\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calenderiervol");
        echo "\">Schedule</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#venue\">Vols</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#hotels\">Hotels</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#gallery\">Gallery</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#supporters\">Sponsors</a></li>

                <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
            </ul>
            <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->
        <a class=\"buy-tickets scrollto\" href=\"#buy-tickets\">Buy Tickets</a>

    </div>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vol/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Hello VolController!{% endblock %}

{% block body %}
<header id=\"header\" class=\"d-flex align-items-center \">
    <div class=\"container-fluid container-xxl d-flex align-items-center\">

        <div id=\"logo\" class=\"me-auto\">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href=\"index.html\">The<span>Event</span></a></h1>-->
            <a href=\"{{ asset('front/index.html') }}\" class=\"scrollto\"><img width=\"100\"  height=\"600\" src=\"{{ asset('front/assets/img/logo.png') }}\" alt=\"\" title=\"\"></a>
        </div>

        <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#about\">About</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#speakers\">Speakers</a></li>
                <li><a class=\"nav-link scrollto\" href=\"{{ path('calenderiervol') }}\">Schedule</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#venue\">Vols</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#hotels\">Hotels</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#gallery\">Gallery</a></li>
                <li><a class=\"nav-link scrollto\" href=\"#supporters\">Sponsors</a></li>

                <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
            </ul>
            <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->
        <a class=\"buy-tickets scrollto\" href=\"#buy-tickets\">Buy Tickets</a>

    </div>
</header>
{% endblock %}", "vol/front.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\vol\\front.html.twig");
    }
}
