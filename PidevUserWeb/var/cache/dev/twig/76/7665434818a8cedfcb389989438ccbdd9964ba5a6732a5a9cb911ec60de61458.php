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

/* hotel/dashbord.html.twig */
class __TwigTemplate_94add45090f25ec704b2481515d28ba08daa7703ea04ab5dd6eb1c20d5a2b130 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/dashbord.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/dashbord.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/dashbord.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />



    <h3>Nombres de chambres par hotel</h3>



    <div class=\"container\">
        <canvas id=\"myPieChart\" width=\"400\" height=\"100\"></canvas>

    </div>










    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/scripts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\" crossorigin=\"anonymous\"></script>


    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\" crossorigin=\"anonymous\"></script>



    <script>
        let categories = document.querySelector(\"#myPieChart\")
        let categGraph = new Chart(categories, {
            type: \"pie\",
            data: {
                labels: ";
        // line 45
        echo (isset($context["hotelNom"]) || array_key_exists("hotelNom", $context) ? $context["hotelNom"] : (function () { throw new RuntimeError('Variable "hotelNom" does not exist.', 45, $this->source); })());
        echo ",
                datasets: [{
                    label: \"Nombres de chambres par chaque hotel\",
                    data: ";
        // line 48
        echo (isset($context["hotelcount"]) || array_key_exists("hotelcount", $context) ? $context["hotelcount"] : (function () { throw new RuntimeError('Variable "hotelcount" does not exist.', 48, $this->source); })());
        echo ",
                    backgroundColor: [\"green\",\"blue\",\"red\",\"black\",\"yellow\",\"brown\",\"pink\",\"white\",\"gold\",\"purple\",\"silver\",\"grey\"]
                }  ]
            }
        })

    </script>

    <script>
        let categories = document.querySelector(\"#myPieChartt\")
        let categGraph = new Chart(categories, {
            type: \"pie\",
            data: {
                labels: ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["hotelNom"]) || array_key_exists("hotelNom", $context) ? $context["hotelNom"] : (function () { throw new RuntimeError('Variable "hotelNom" does not exist.', 61, $this->source); })()), "html", null, true);
        echo ",
                datasets: [{
                    label: \"Nombres de chambres par chaque hotel\",
                    data: ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["hotelVille"]) || array_key_exists("hotelVille", $context) ? $context["hotelVille"] : (function () { throw new RuntimeError('Variable "hotelVille" does not exist.', 64, $this->source); })()), "html", null, true);
        echo ",
                    backgroundColor: [\"green\",\"blue\",\"red\",\"black\",\"yellow\",\"brown\",\"pink\",\"white\",\"gold\",\"purple\",\"silver\",\"grey\"]
                }  ]
            }
        })

    </script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 64,  137 => 61,  121 => 48,  115 => 45,  97 => 30,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <link href=\"{{ asset(\"back/css/styles.css\") }}\" rel=\"stylesheet\" />



    <h3>Nombres de chambres par hotel</h3>



    <div class=\"container\">
        <canvas id=\"myPieChart\" width=\"400\" height=\"100\"></canvas>

    </div>










    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset(\"back/js/scripts.js\") }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\" crossorigin=\"anonymous\"></script>


    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js\" crossorigin=\"anonymous\"></script>



    <script>
        let categories = document.querySelector(\"#myPieChart\")
        let categGraph = new Chart(categories, {
            type: \"pie\",
            data: {
                labels: {{ hotelNom|raw }},
                datasets: [{
                    label: \"Nombres de chambres par chaque hotel\",
                    data: {{ hotelcount|raw }},
                    backgroundColor: [\"green\",\"blue\",\"red\",\"black\",\"yellow\",\"brown\",\"pink\",\"white\",\"gold\",\"purple\",\"silver\",\"grey\"]
                }  ]
            }
        })

    </script>

    <script>
        let categories = document.querySelector(\"#myPieChartt\")
        let categGraph = new Chart(categories, {
            type: \"pie\",
            data: {
                labels: {{ hotelNom }},
                datasets: [{
                    label: \"Nombres de chambres par chaque hotel\",
                    data: {{ hotelVille }},
                    backgroundColor: [\"green\",\"blue\",\"red\",\"black\",\"yellow\",\"brown\",\"pink\",\"white\",\"gold\",\"purple\",\"silver\",\"grey\"]
                }  ]
            }
        })

    </script>



{% endblock %}
", "hotel/dashbord.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\hotel\\dashbord.html.twig");
    }
}
