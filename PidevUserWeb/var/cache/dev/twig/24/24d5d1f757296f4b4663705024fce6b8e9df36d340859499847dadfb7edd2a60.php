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

/* hotel/pdf.html.twig */
class __TwigTemplate_ff962fc81783434dfb28b92c6aea655780a9ebed780d2957a77a91d7a353d6e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/pdf.html.twig"));

        // line 1
        echo "






     <h1>    l'hotel' ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pdf"]) || array_key_exists("pdf", $context) ? $context["pdf"] : (function () { throw new RuntimeError('Variable "pdf" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo "      </h1>


        <h2>    dans la ville ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pdf"]) || array_key_exists("pdf", $context) ? $context["pdf"] : (function () { throw new RuntimeError('Variable "pdf" does not exist.', 11, $this->source); })()), "ville", [], "any", false, false, false, 11), "html", null, true);
        echo "      </h2>
       <h2>   Contient ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pdf"]) || array_key_exists("pdf", $context) ? $context["pdf"] : (function () { throw new RuntimeError('Variable "pdf" does not exist.', 12, $this->source); })()), "nbChambre", [], "any", false, false, false, 12), "html", null, true);
        echo " chambres        </h2>






";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hotel/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("






     <h1>    l'hotel' {{ pdf.nom }}      </h1>


        <h2>    dans la ville {{ pdf.ville }}      </h2>
       <h2>   Contient {{ pdf.nbChambre }} chambres        </h2>






", "hotel/pdf.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\hotel\\pdf.html.twig");
    }
}
