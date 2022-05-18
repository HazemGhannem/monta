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

/* hotel/rating.html.twig */
class __TwigTemplate_5b5912637cfc11104c91e116b50bde2fa3f4e95dddcfb1eb86a32139d44b2ba5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/rating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/rating.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Rating System</title>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
</head>
<body>
<div align=\"center\" style=\"background: #000; padding: 50px;color:white;\">
    <i class=\"fa fa-star fa-2x\" data-index=\"0\"></i>
    <i class=\"fa fa-star fa-2x\" data-index=\"1\"></i>
    <i class=\"fa fa-star fa-2x\" data-index=\"2\"></i>
    <i class=\"fa fa-star fa-2x\" data-index=\"3\"></i>
    <i class=\"fa fa-star fa-2x\" data-index=\"4\"></i>
    <br><br>
    <?php echo round(\$avg,2) ?>
</div>

<script src=\"http://code.jquery.com/jquery-3.4.0.min.js\" integrity=\"sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=\" crossorigin=\"anonymous\"></script>
<script>
    var ratedIndex = -1, uID = 0;

    \$(document).ready(function () {
        resetStarColors();

        if (localStorage.getItem('ratedIndex') != null) {
            setStars(parseInt(localStorage.getItem('ratedIndex')));
            uID = localStorage.getItem('uID');
        }

        \$('.fa-star').on('click', function () {
            ratedIndex = parseInt(\$(this).data('index'));
            localStorage.setItem('ratedIndex', ratedIndex);
            saveToTheDB();
        });

        \$('.fa-star').mouseover(function () {
            resetStarColors();
            var currentIndex = parseInt(\$(this).data('index'));
            setStars(currentIndex);
        });

        \$('.fa-star').mouseleave(function () {
            resetStarColors();

            if (ratedIndex != -1)
                setStars(ratedIndex);
        });
    });

    function saveToTheDB() {
        \$.ajax({
            url: \"index.php\",
            method: \"POST\",
            dataType: 'json',
            data: {
                save: 1,
                uID: uID,
                ratedIndex: ratedIndex
            }, success: function (r) {
                uID = r.id;
                localStorage.setItem('uID', uID);
            }
        });
    }

    function setStars(max) {
        for (var i=0; i <= max; i++)
            \$('.fa-star:eq('+i+')').css('color', 'green');
    }

    function resetStarColors() {
        \$('.fa-star').css('color', 'white');
    }
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hotel/rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Rating System</title>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
</head>
<body>
<div align=\"center\" style=\"background: #000; padding: 50px;color:white;\">
    <i class=\"fa fa-star fa-2x\" data-index=\"0\"></i>
    <i class=\"fa fa-star fa-2x\" data-index=\"1\"></i>
    <i class=\"fa fa-star fa-2x\" data-index=\"2\"></i>
    <i class=\"fa fa-star fa-2x\" data-index=\"3\"></i>
    <i class=\"fa fa-star fa-2x\" data-index=\"4\"></i>
    <br><br>
    <?php echo round(\$avg,2) ?>
</div>

<script src=\"http://code.jquery.com/jquery-3.4.0.min.js\" integrity=\"sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=\" crossorigin=\"anonymous\"></script>
<script>
    var ratedIndex = -1, uID = 0;

    \$(document).ready(function () {
        resetStarColors();

        if (localStorage.getItem('ratedIndex') != null) {
            setStars(parseInt(localStorage.getItem('ratedIndex')));
            uID = localStorage.getItem('uID');
        }

        \$('.fa-star').on('click', function () {
            ratedIndex = parseInt(\$(this).data('index'));
            localStorage.setItem('ratedIndex', ratedIndex);
            saveToTheDB();
        });

        \$('.fa-star').mouseover(function () {
            resetStarColors();
            var currentIndex = parseInt(\$(this).data('index'));
            setStars(currentIndex);
        });

        \$('.fa-star').mouseleave(function () {
            resetStarColors();

            if (ratedIndex != -1)
                setStars(ratedIndex);
        });
    });

    function saveToTheDB() {
        \$.ajax({
            url: \"index.php\",
            method: \"POST\",
            dataType: 'json',
            data: {
                save: 1,
                uID: uID,
                ratedIndex: ratedIndex
            }, success: function (r) {
                uID = r.id;
                localStorage.setItem('uID', uID);
            }
        });
    }

    function setStars(max) {
        for (var i=0; i <= max; i++)
            \$('.fa-star:eq('+i+')').css('color', 'green');
    }

    function resetStarColors() {
        \$('.fa-star').css('color', 'white');
    }
</script>
</body>
</html>", "hotel/rating.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\hotel\\rating.html.twig");
    }
}
