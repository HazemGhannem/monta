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

/* hotel/map.html.twig */
class __TwigTemplate_9f0092262a6daf65dab0dcc630015bbbacfb7ea8f414f463023d148b3f2c0479 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/map.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/map.html.twig"));

        // line 1
        echo "


";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 50%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 50px;
            padding: 50px;
        }

    </style>
    <script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./style.css\" />
    <script src=\"./index.js\"></script>
</head>
<body>


<div id=\"map\"></div>
<script>
    function initMap() {
        const myLatLng = { lat: 33.8439408, lng: 9.400138 };
        const map = new google.maps.Map(document.getElementById(\"map\"), {
            zoom: 7,
            center: myLatLng,
        });

        new google.maps.Marker({
            position: myLatLng,
            map,
            title: \"Hello World!\",
        });
    }


</script>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAiFU2VckFQ9jBFUDYr_9kUZWjO6qTXgzk&callback=initMap&v=weekly\"
        async>


</script>

</body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


{% block body %}
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 50%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 50px;
            padding: 50px;
        }

    </style>
    <script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./style.css\" />
    <script src=\"./index.js\"></script>
</head>
<body>


<div id=\"map\"></div>
<script>
    function initMap() {
        const myLatLng = { lat: 33.8439408, lng: 9.400138 };
        const map = new google.maps.Map(document.getElementById(\"map\"), {
            zoom: 7,
            center: myLatLng,
        });

        new google.maps.Marker({
            position: myLatLng,
            map,
            title: \"Hello World!\",
        });
    }


</script>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAiFU2VckFQ9jBFUDYr_9kUZWjO6qTXgzk&callback=initMap&v=weekly\"
        async>


</script>

</body>
</html>

{% endblock %}
", "hotel/map.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\hotel\\map.html.twig");
    }
}
