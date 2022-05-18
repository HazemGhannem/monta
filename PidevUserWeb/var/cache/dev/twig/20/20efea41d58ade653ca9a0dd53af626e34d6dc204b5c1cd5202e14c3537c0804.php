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

/* front.html.twig */
class __TwigTemplate_db1115e7ee652b09084edc6ead4a436e40dcbe76f5512e016703efa4e3a1a590 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'reclammation' => [$this, 'block_reclammation'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Viatores </title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <!-- Favicons -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/logo.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/style.cs"), "html", null, true);
        echo "s\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: TheEvent - v4.7.0
    * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"d-flex align-items-center \">
    <div class=\"container-fluid container-xxl d-flex align-items-center\">

        <div id=\"logo\" class=\"me-auto\">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href=\"index.html\">The<span>Event</span></a></h1>-->
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/index.html"), "html", null, true);
        echo "\" class=\"scrollto\"><img  src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\"></a>
        </div>

        <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>


                <li><a class=\"nav-link scrollto\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherhotelClient");
        echo "\">Hotels</a></li>

                <li><a class=\"nav-link scrollto\" href=";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo ">Contact</a></li>
                <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"nav-link scrollto\">LOGIN  </a></li>
                <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"nav-link scrollto\">SIGN UP  </a></li>
                <li><a class=\"nav-link scrollto\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclammation_new");
        echo "\">Reclammation</a></li>
                <li><a class=\"nav-link scrollto\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclammation_indexClient");
        echo "\">Reponse</a></li>
                <li><a class=\"nav-link scrollto\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showArticleFront");
        echo "\">Article</a></li>
                <li><a class=\"nav-link scrollto\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_index");
        echo "\">Commentaires</a></li>

                <li><a class=\"nav-link scrollto\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lis");
        echo "\">Vols</a></li>

                <li><a class=\"nav-link scrollto\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calenderiervol");
        echo "\">Schedule</a></li>

                <li><a class=\"nav-link scrollto\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("WishList");
        echo "\">WishList</a></li>
                <li><a class=\"nav-link scrollto\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affback");
        echo "\">Events</a></li>

            </ul>


        </nav><!-- .navbar -->


    </div>

</header><!-- End Header -->
";
        // line 82
        $this->displayBlock('reclammation', $context, $blocks);
        // line 862
        echo "    </section><!-- End Buy Ticket Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"section-bg\">

        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-header\">
                <h2>Contact Us</h2>

            </div>

            <div class=\"row contact-info\">

                <div class=\"col-md-4\">
                    <div class=\"contact-address\">
                        <i class=\"bi bi-geo-alt\"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"contact-phone\">
                        <i class=\"bi bi-phone\"></i>
                        <h3>Phone Number</h3>
                        <p><a href=\"tel:+155895548855\">+1 5589 55488 55</a></p>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"contact-email\">
                        <i class=\"bi bi-envelope\"></i>
                        <h3>Email</h3>
                        <p><a href=\"mailto:info@example.com\">info@example.com</a></p>
                    </div>
                </div>

            </div>

            <div class=\"form\">
                <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
                    <div class=\"row\">
                        <div class=\"form-group col-md-6\">
                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                        </div>
                        <div class=\"form-group col-md-6 mt-3 mt-md-0\">
                            <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                        </div>
                    </div>
                    <div class=\"form-group mt-3\">
                        <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
                    </div>
                    <div class=\"form-group mt-3\">
                        <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
                    </div>
                    <div class=\"my-3\">
                        <div class=\"loading\">Loading</div>
                        <div class=\"error-message\"></div>
                        <div class=\"sent-message\">Your message has been sent. Thank you!</div>
                    </div>
                    <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-3 col-md-6 footer-info\">
                    <img src=\"";
        // line 939
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"TheEvenet\">
                    <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
                </div>

                <div class=\"col-lg-3 col-md-6 footer-links\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Home</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">About us</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Services</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-6 footer-links\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Home</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">About us</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Services</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-6 footer-contact\">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                    <div class=\"social-links\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                        <a href=\"#\" class=\"google-plus\"><i class=\"bi bi-instagram\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"copyright\">
            &copy; Copyright <strong>Viatores</strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
          -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>

";
        // line 1008
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1009
        echo "<!-- Vendor JS Files -->
<script src=\"";
        // line 1010
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1011
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1012
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1013
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1014
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 1017
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/621e24a81ffac05b1d7c690f/1ft2rufgb';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<script src=\"";
        // line 1029
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_reclammation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reclammation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reclammation"));

        // line 83
        echo "<!-- ======= Hero Section ======= -->
<section id=\"hero\">
    <div class=\"hero-container\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
        <h1 class=\"mb-4 pb-0\">Viatores</h1>
        <h1 class=\"mb-4 pb-0\">Trouvez votre prochain séjour</h1>
        <a href=\"https://www.youtube.com/watch?v=OtJVufo3IrA\" class=\"glightbox play-btn mb-4\"></a>
        <a href=\"#about\" class=\"about-btn scrollto\">Viatores</a>
    </div>
</section><!-- End Hero Section -->

<main id=\"main\">


    <!-- ======= Speakers Section ======= -->
    <section id=\"venue\">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </section>
    ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 861
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 102
        echo "    <section id=\"speakers\">
        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Event Speakers</h2>
                <p>Here are some of our speakers</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/1.jpg"), "html", null, true);
        echo "\" alt=\"Speaker 1\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/speaker-details.html"), "html", null, true);
        echo "\">Brenden Legros</a></h3>
                            <p>Quas alias incidunt</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                        <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/2.jpg"), "html", null, true);
        echo "\" alt=\"Speaker 2\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/speaker-details.html"), "html", null, true);
        echo "\">Hubert Hirthe</a></h3>
                            <p>Consequuntur odio aut</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                        <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/3.jpg"), "html", null, true);
        echo "\" alt=\"Speaker 3\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/speaker-details.html"), "html", null, true);
        echo "\">Cole Emmerich</a></h3>
                            <p>Fugiat laborum et</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                        <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/4.jpg"), "html", null, true);
        echo "\" alt=\"Speaker 4\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/speaker-details.html"), "html", null, true);
        echo "\">Jack Christiansen</a></h3>
                            <p>Debitis iure vero</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                        <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/5.jpg"), "html", null, true);
        echo "\" alt=\"Speaker 5\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/speaker-details.html"), "html", null, true);
        echo "\">Alejandrin Littel</a></h3>
                            <p>Qui molestiae natus</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                        <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/6.jpg"), "html", null, true);
        echo "\" alt=\"Speaker 6\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/speaker-details.html"), "html", null, true);
        echo "\">Willow Trantow</a></h3>
                            <p>Non autem dicta</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Schedule Section ======= -->
    <section id=\"schedule\" class=\"section-with-bg\">
        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Event Schedule</h2>
                <p>Here is our event schedule</p>
            </div>

            <ul class=\"nav nav-tabs\" role=\"tablist\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#day-1\" role=\"tab\" data-bs-toggle=\"tab\">Day 1</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#day-2\" role=\"tab\" data-bs-toggle=\"tab\">Day 2</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#day-3\" role=\"tab\" data-bs-toggle=\"tab\">Day 3</a>
                </li>
            </ul>

            <h3 class=\"sub-heading\">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
                necessitatibus voluptatem quis labore perspiciatis quia.</h3>

            <div class=\"tab-content row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">

                <!-- Schdule Day 1 -->
                <div role=\"tabpanel\" class=\"col-lg-9 tab-pane fade show active\" id=\"day-1\">

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>09:30 AM</time></div>
                        <div class=\"col-md-10\">
                            <h4>Registration</h4>
                            <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>10:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/1.jpg"), "html", null, true);
        echo "\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Keynote <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>11:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/2.jpg"), "html", null, true);
        echo "\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>12:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/3.jpg"), "html", null, true);
        echo "\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>02:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/4.jpg"), "html", null, true);
        echo "\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>03:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/5.jpg"), "html", null, true);
        echo "\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>04:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/6.jpg"), "html", null, true);
        echo "\" alt=\"Willow Trantow\">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 1 -->

                <!-- Schdule Day 2 -->
                <div role=\"tabpanel\" class=\"col-lg-9  tab-pane fade\" id=\"day-2\">

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>10:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/1.jpg"), "html", null, true);
        echo "\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>11:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/2.jpg"), "html", null, true);
        echo "\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>12:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/3.jpg"), "html", null, true);
        echo "\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>02:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/4.jpg"), "html", null, true);
        echo "\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>03:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/5.jpg"), "html", null, true);
        echo "\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>04:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/6.jpg"), "html", null, true);
        echo "\" alt=\"Willow Trantow\">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

                <!-- Schdule Day 3 -->
                <div role=\"tabpanel\" class=\"col-lg-9  tab-pane fade\" id=\"day-3\">

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>10:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/2.jpg"), "html", null, true);
        echo "\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>11:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/3.jpg"), "html", null, true);
        echo "\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>12:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/1.jpg"), "html", null, true);
        echo "\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>02:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/4.jpg"), "html", null, true);
        echo "\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>03:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/5.jpg"), "html", null, true);
        echo "\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>04:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/speakers/6.jpg"), "html", null, true);
        echo "\" alt=\"Willow Trantow\">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

            </div>

        </div>

    </section><!-- End Schedule Section -->

    <!-- ======= Venue Section ======= -->
    <section id=\"venue\">

        <div class=\"container-fluid\" data-aos=\"fade-up\">

            <div class=\"section-header\">
                <h2>Event Venue</h2>
                <p>Event venue location info and gallery</p>
            </div>

            <div class=\"row g-0\">
                <div class=\"col-lg-6 venue-map\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>

                <div class=\"col-lg-6 venue-info\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11 col-lg-8 position-relative\">
                            <h3>Downtown Conference Center, New York</h3>
                            <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class=\"container-fluid venue-gallery-container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"row g-0\">

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/1.jpg"), "html", null, true);
        echo "\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/2.jpg"), "html", null, true);
        echo "\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/2.jpg\""), "html", null, true);
        echo " alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/3.jpg\""), "html", null, true);
        echo "\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/4.jpg"), "html", null, true);
        echo "\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/5.jpg"), "html", null, true);
        echo "\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/6.jpg"), "html", null, true);
        echo "\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/7.jpg"), "html", null, true);
        echo "\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/7.jpgg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/8.jpg"), "html", null, true);
        echo "\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/venue-gallery/8.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- End Venue Section -->

    <!-- ======= Hotels Section ======= -->
  <!-- End Hotels Section -->

    <!-- ======= Gallery Section ======= -->
    <section id=\"gallery\">

        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent events</p>
            </div>
        </div>

        <div class=\"gallery-slider swiper\">
            <div class=\"swiper-wrapper align-items-center\">
                <div class=\"swiper-slide\"><a href=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/1.jpg"), "html", null, true);
        echo "\" class=\"gallery-lightbox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/2.jpg"), "html", null, true);
        echo "\" class=\"gallery-lightbox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"a";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/3.jpg"), "html", null, true);
        echo "\" class=\"gallery-lightbox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/4.jpg"), "html", null, true);
        echo "\" class=\"gallery-lightbox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/5.jpg"), "html", null, true);
        echo "\" class=\"gallery-lightbox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/6.jpg"), "html", null, true);
        echo "\" class=\"gallery-lightbox\"><img src=\"a";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/7.jpg"), "html", null, true);
        echo "\" class=\"gallery-lightbox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/8.jpg"), "html", null, true);
        echo "\" class=\"gallery-lightbox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/gallery/8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a></div>
            </div>
            <div class=\"swiper-pagination\"></div>
        </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Supporters Section ======= -->
    <section id=\"supporters\" class=\"section-with-bg\">

        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Sponsors</h2>
            </div>

            <div class=\"row no-gutters supporters-wrap clearfix\" data-aos=\"zoom-in\" data-aos-delay=\"100\">

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/supporters/1.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/supporters/2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/supporters/3.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/supporters/4.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/supporters/5.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/supporters/6.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/supporters/7.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/supporters/8.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Sponsors Section -->

    <!-- =======  F.A.Q Section ======= -->
    <section id=\"faq\">

        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-header\">
                <h2>F.A.Q </h2>
            </div>

            <div class=\"row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"col-lg-9\">

                    <ul class=\"faq-list\">

                        <li>
                            <div data-bs-toggle=\"collapse\" class=\"collapsed question\" href=\"#faq1\">Non consectetur a erat nam at lectus urna duis? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq1\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq2\" class=\"collapsed question\">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq2\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq3\" class=\"collapsed question\">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq3\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq4\" class=\"collapsed question\">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq4\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq5\" class=\"collapsed question\">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq5\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq6\" class=\"collapsed question\">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq6\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </div>

    </section><!-- End  F.A.Q Section -->

    <!-- ======= Subscribe Section ======= -->
    <section id=\"subscribe\">
        <div class=\"container\" data-aos=\"zoom-in\">
            <div class=\"section-header\">
                <h2>Newsletter</h2>
                <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
            </div>

            <form method=\"POST\" action=\"#\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-10 d-flex\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter your Email\">
                        <button type=\"submit\" class=\"ms-2\">Subscribe</button>
                    </div>
                </div>
            </form>

        </div>
    </section><!-- End Subscribe Section -->

    <!-- ======= Buy Ticket Section ======= -->
    <section id=\"buy-tickets\" class=\"section-with-bg\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-header\">
                <h2>Buy Tickets</h2>
                <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                    <div class=\"card mb-5 mb-lg-0\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-muted text-uppercase text-center\">Standard Access</h5>
                            <h6 class=\"card-price text-center\">\$150</h6>
                            <hr>
                            <ul class=\"fa-ul\">
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Regular Seating</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Coffee Break</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Custom Badge</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>Community Access</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>Workshop Access</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>After Party</li>
                            </ul>
                            <hr>
                            <div class=\"text-center\">
                                <button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#buy-ticket-modal\" data-ticket-type=\"standard-access\">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                    <div class=\"card mb-5 mb-lg-0\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-muted text-uppercase text-center\">Pro Access</h5>
                            <h6 class=\"card-price text-center\">\$250</h6>
                            <hr>
                            <ul class=\"fa-ul\">
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Regular Seating</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Coffee Break</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Custom Badge</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Community Access</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>Workshop Access</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>After Party</li>
                            </ul>
                            <hr>
                            <div class=\"text-center\">
                                <button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#buy-ticket-modal\" data-ticket-type=\"pro-access\">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-muted text-uppercase text-center\">Premium Access</h5>
                            <h6 class=\"card-price text-center\">\$350</h6>
                            <hr>
                            <ul class=\"fa-ul\">
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Regular Seating</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Coffee Break</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Custom Badge</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Community Access</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Workshop Access</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>After Party</li>
                            </ul>
                            <hr>
                            <div class=\"text-center\">
                                <button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#buy-ticket-modal\" data-ticket-type=\"premium-access\">Buy Now</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal Order Form -->
        <div id=\"buy-ticket-modal\" class=\"modal fade\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Buy Tickets</h4>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"POST\" action=\"#\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"your-name\" placeholder=\"Your Name\">
                            </div>
                            <div class=\"form-group mt-3\">
                                <input type=\"text\" class=\"form-control\" name=\"your-email\" placeholder=\"Your Email\">
                            </div>
                            <div class=\"form-group mt-3\">
                                <select id=\"ticket-type\" name=\"ticket-type\" class=\"form-select\">
                                    <option value=\"\">-- Select Your Ticket Type --</option>
                                    <option value=\"standard-access\">Standard Access</option>
                                    <option value=\"pro-access\">Pro Access</option>
                                    <option value=\"premium-access\">Premium Access</option>
                                </select>
                            </div>
                            <div class=\"text-center mt-3\">
                                <button type=\"submit\" class=\"btn\">Buy Now</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1008
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1447 => 1008,  1218 => 642,  1209 => 636,  1200 => 630,  1191 => 624,  1182 => 618,  1173 => 612,  1164 => 606,  1155 => 600,  1131 => 581,  1125 => 580,  1119 => 579,  1113 => 578,  1107 => 577,  1101 => 576,  1095 => 575,  1089 => 574,  1061 => 549,  1057 => 548,  1047 => 541,  1043 => 540,  1033 => 533,  1029 => 532,  1019 => 525,  1015 => 524,  1005 => 517,  1001 => 516,  991 => 509,  987 => 508,  977 => 501,  973 => 500,  963 => 493,  959 => 492,  908 => 444,  894 => 433,  880 => 422,  866 => 411,  852 => 400,  838 => 389,  818 => 372,  804 => 361,  790 => 350,  776 => 339,  762 => 328,  748 => 317,  728 => 300,  714 => 289,  700 => 278,  686 => 267,  672 => 256,  658 => 245,  599 => 189,  594 => 187,  578 => 174,  573 => 172,  557 => 159,  552 => 157,  536 => 144,  531 => 142,  515 => 129,  510 => 127,  494 => 114,  489 => 112,  477 => 102,  467 => 101,  457 => 861,  455 => 101,  435 => 83,  425 => 82,  407 => 13,  393 => 1029,  378 => 1017,  372 => 1014,  368 => 1013,  364 => 1012,  360 => 1011,  356 => 1010,  353 => 1009,  351 => 1008,  279 => 939,  200 => 862,  198 => 82,  184 => 71,  180 => 70,  175 => 68,  170 => 66,  165 => 64,  161 => 63,  157 => 62,  153 => 61,  149 => 60,  145 => 59,  141 => 58,  136 => 56,  123 => 48,  101 => 29,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  70 => 16,  66 => 15,  63 => 14,  61 => 13,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Viatores </title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

    {% block stylesheets %}{% endblock %}
    <!-- Favicons -->
    <link href=\"{{ asset('front/assets/img/logo.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('front/assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('front/assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{ asset('front/assets/css/style.cs') }}s\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: TheEvent - v4.7.0
    * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"d-flex align-items-center \">
    <div class=\"container-fluid container-xxl d-flex align-items-center\">

        <div id=\"logo\" class=\"me-auto\">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href=\"index.html\">The<span>Event</span></a></h1>-->
            <a href=\"{{ asset('front/index.html') }}\" class=\"scrollto\"><img  src=\"{{ asset('front/assets/img/logo.png') }}\" alt=\"\" title=\"\"></a>
        </div>

        <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
            <ul>
                <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>


                <li><a class=\"nav-link scrollto\" href=\"{{ path(\"afficherhotelClient\") }}\">Hotels</a></li>

                <li><a class=\"nav-link scrollto\" href={{ path('contact') }}>Contact</a></li>
                <li><a href=\"{{ path('app_login') }}\" class=\"nav-link scrollto\">LOGIN  </a></li>
                <li><a href=\"{{ path('app_register') }}\" class=\"nav-link scrollto\">SIGN UP  </a></li>
                <li><a class=\"nav-link scrollto\" href=\"{{ path('reclammation_new') }}\">Reclammation</a></li>
                <li><a class=\"nav-link scrollto\" href=\"{{ path('reclammation_indexClient') }}\">Reponse</a></li>
                <li><a class=\"nav-link scrollto\" href=\"{{ path('showArticleFront') }}\">Article</a></li>
                <li><a class=\"nav-link scrollto\" href=\"{{ path('commentaire_index') }}\">Commentaires</a></li>

                <li><a class=\"nav-link scrollto\" href=\"{{ path('lis') }}\">Vols</a></li>

                <li><a class=\"nav-link scrollto\" href=\"{{ path('calenderiervol') }}\">Schedule</a></li>

                <li><a class=\"nav-link scrollto\" href=\"{{ path('WishList') }}\">WishList</a></li>
                <li><a class=\"nav-link scrollto\" href=\"{{ path('affback') }}\">Events</a></li>

            </ul>


        </nav><!-- .navbar -->


    </div>

</header><!-- End Header -->
{% block reclammation %}
<!-- ======= Hero Section ======= -->
<section id=\"hero\">
    <div class=\"hero-container\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
        <h1 class=\"mb-4 pb-0\">Viatores</h1>
        <h1 class=\"mb-4 pb-0\">Trouvez votre prochain séjour</h1>
        <a href=\"https://www.youtube.com/watch?v=OtJVufo3IrA\" class=\"glightbox play-btn mb-4\"></a>
        <a href=\"#about\" class=\"about-btn scrollto\">Viatores</a>
    </div>
</section><!-- End Hero Section -->

<main id=\"main\">


    <!-- ======= Speakers Section ======= -->
    <section id=\"venue\">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </section>
    {% block body %}
    <section id=\"speakers\">
        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Event Speakers</h2>
                <p>Here are some of our speakers</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                        <img src=\"{{ asset('front/assets/img/speakers/1.jpg') }}\" alt=\"Speaker 1\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"{{ asset('front/speaker-details.html') }}\">Brenden Legros</a></h3>
                            <p>Quas alias incidunt</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                        <img src=\"{{ asset('front/assets/img/speakers/2.jpg') }}\" alt=\"Speaker 2\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"{{ asset('front/speaker-details.html') }}\">Hubert Hirthe</a></h3>
                            <p>Consequuntur odio aut</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                        <img src=\"{{ asset('front/assets/img/speakers/3.jpg') }}\" alt=\"Speaker 3\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"{{ asset('front/speaker-details.html') }}\">Cole Emmerich</a></h3>
                            <p>Fugiat laborum et</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                        <img src=\"{{ asset('front/assets/img/speakers/4.jpg') }}\" alt=\"Speaker 4\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"{{ asset('front/speaker-details.html') }}\">Jack Christiansen</a></h3>
                            <p>Debitis iure vero</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                        <img src=\"{{ asset('front/assets/img/speakers/5.jpg') }}\" alt=\"Speaker 5\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"{{ asset('front/speaker-details.html') }}\">Alejandrin Littel</a></h3>
                            <p>Qui molestiae natus</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"speaker\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                        <img src=\"{{ asset('front/assets/img/speakers/6.jpg') }}\" alt=\"Speaker 6\" class=\"img-fluid\">
                        <div class=\"details\">
                            <h3><a href=\"{{ asset('front/speaker-details.html') }}\">Willow Trantow</a></h3>
                            <p>Non autem dicta</p>
                            <div class=\"social\">
                                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Schedule Section ======= -->
    <section id=\"schedule\" class=\"section-with-bg\">
        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Event Schedule</h2>
                <p>Here is our event schedule</p>
            </div>

            <ul class=\"nav nav-tabs\" role=\"tablist\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#day-1\" role=\"tab\" data-bs-toggle=\"tab\">Day 1</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#day-2\" role=\"tab\" data-bs-toggle=\"tab\">Day 2</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#day-3\" role=\"tab\" data-bs-toggle=\"tab\">Day 3</a>
                </li>
            </ul>

            <h3 class=\"sub-heading\">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
                necessitatibus voluptatem quis labore perspiciatis quia.</h3>

            <div class=\"tab-content row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">

                <!-- Schdule Day 1 -->
                <div role=\"tabpanel\" class=\"col-lg-9 tab-pane fade show active\" id=\"day-1\">

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>09:30 AM</time></div>
                        <div class=\"col-md-10\">
                            <h4>Registration</h4>
                            <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>10:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/1.jpg') }}\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Keynote <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>11:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/2.jpg') }}\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>12:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/3.jpg') }}\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>02:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/4.jpg') }}\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>03:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/5.jpg') }}\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>04:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/6.jpg') }}\" alt=\"Willow Trantow\">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 1 -->

                <!-- Schdule Day 2 -->
                <div role=\"tabpanel\" class=\"col-lg-9  tab-pane fade\" id=\"day-2\">

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>10:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/1.jpg') }}\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>11:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/2.jpg') }}\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>12:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/3.jpg') }}\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>02:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/4.jpg') }}\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>03:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/5.jpg') }}\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>04:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/6.jpg') }}\" alt=\"Willow Trantow\">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

                <!-- Schdule Day 3 -->
                <div role=\"tabpanel\" class=\"col-lg-9  tab-pane fade\" id=\"day-3\">

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>10:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/2.jpg') }}\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>11:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/3.jpg') }}\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>12:00 AM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/1.jpg') }}\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>02:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/4.jpg') }}\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>03:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/5.jpg') }}\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\"><time>04:00 PM</time></div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"{{ asset('front/assets/img/speakers/6.jpg') }}\" alt=\"Willow Trantow\">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

            </div>

        </div>

    </section><!-- End Schedule Section -->

    <!-- ======= Venue Section ======= -->
    <section id=\"venue\">

        <div class=\"container-fluid\" data-aos=\"fade-up\">

            <div class=\"section-header\">
                <h2>Event Venue</h2>
                <p>Event venue location info and gallery</p>
            </div>

            <div class=\"row g-0\">
                <div class=\"col-lg-6 venue-map\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>

                <div class=\"col-lg-6 venue-info\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11 col-lg-8 position-relative\">
                            <h3>Downtown Conference Center, New York</h3>
                            <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class=\"container-fluid venue-gallery-container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"row g-0\">

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"{{ asset('front/assets/img/venue-gallery/1.jpg') }}\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"{{ asset('front/assets/img/venue-gallery/1.jpg') }}\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"{{ asset('front/assets/img/venue-gallery/2.jpg') }}\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"{{ asset('front/assets/img/venue-gallery/2.jpg\"') }} alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"{{ asset('front/assets/img/venue-gallery/3.jpg\"') }}\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"{{ asset('front/assets/img/venue-gallery/3.jpg') }}\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"{{ asset('front/assets/img/venue-gallery/4.jpg') }}\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"{{ asset('front/assets/img/venue-gallery/4.jpg') }}\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"{{ asset('front/assets/img/venue-gallery/5.jpg') }}\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"{{ asset('front/assets/img/venue-gallery/5.jpg') }}\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"{{ asset('front/assets/img/venue-gallery/6.jpg') }}\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"{{ asset('front/assets/img/venue-gallery/6.jpg') }}\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"{{ asset('front/assets/img/venue-gallery/7.jpg') }}\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"{{ asset('front/assets/img/venue-gallery/7.jpgg') }}\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"venue-gallery\">
                        <a href=\"{{ asset('front/assets/img/venue-gallery/8.jpg') }}\" class=\"glightbox\" data-gall=\"venue-gallery\">
                            <img src=\"{{ asset('front/assets/img/venue-gallery/8.jpg') }}\" alt=\"\" class=\"img-fluid\">
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- End Venue Section -->

    <!-- ======= Hotels Section ======= -->
  <!-- End Hotels Section -->

    <!-- ======= Gallery Section ======= -->
    <section id=\"gallery\">

        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent events</p>
            </div>
        </div>

        <div class=\"gallery-slider swiper\">
            <div class=\"swiper-wrapper align-items-center\">
                <div class=\"swiper-slide\"><a href=\"{{ asset('front/assets/img/gallery/1.jpg') }}\" class=\"gallery-lightbox\"><img src=\"{{ asset('front/assets/img/gallery/1.jpg') }}\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"{{ asset('front/assets/img/gallery/2.jpg') }}\" class=\"gallery-lightbox\"><img src=\"{{ asset('front/assets/img/gallery/2.jpg') }}\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"a{{ asset('front/assets/img/gallery/3.jpg') }}\" class=\"gallery-lightbox\"><img src=\"{{ asset('front/assets/img/gallery/3.jpg') }}\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"{{ asset('front/assets/img/gallery/4.jpg') }}\" class=\"gallery-lightbox\"><img src=\"{{ asset('front/assets/img/gallery/4.jpg') }}\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"{{ asset('front/assets/img/gallery/5.jpg') }}\" class=\"gallery-lightbox\"><img src=\"{{ asset('front/assets/img/gallery/5.jpg') }}\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"{{ asset('front/assets/img/gallery/6.jpg') }}\" class=\"gallery-lightbox\"><img src=\"a{{ asset('front/assets/img/gallery/6.jpg') }}\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"{{ asset('front/assets/img/gallery/7.jpg') }}\" class=\"gallery-lightbox\"><img src=\"{{ asset('front/assets/img/gallery/7.jpg') }}\" class=\"img-fluid\" alt=\"\"></a></div>
                <div class=\"swiper-slide\"><a href=\"{{ asset('front/assets/img/gallery/8.jpg') }}\" class=\"gallery-lightbox\"><img src=\"{{ asset('front/assets/img/gallery/8.jpg') }}\" class=\"img-fluid\" alt=\"\"></a></div>
            </div>
            <div class=\"swiper-pagination\"></div>
        </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Supporters Section ======= -->
    <section id=\"supporters\" class=\"section-with-bg\">

        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"section-header\">
                <h2>Sponsors</h2>
            </div>

            <div class=\"row no-gutters supporters-wrap clearfix\" data-aos=\"zoom-in\" data-aos-delay=\"100\">

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"{{ asset('front/assets/img/supporters/1.png') }}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"{{ asset('front/assets/img/supporters/2.png') }}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"{{ asset('front/assets/img/supporters/3.png') }}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"{{ asset('front/assets/img/supporters/4.png') }}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"{{ asset('front/assets/img/supporters/5.png') }}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"{{ asset('front/assets/img/supporters/6.png') }}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"{{ asset('front/assets/img/supporters/7.png') }}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-4 col-xs-6\">
                    <div class=\"supporter-logo\">
                        <img src=\"{{ asset('front/assets/img/supporters/8.png') }}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Sponsors Section -->

    <!-- =======  F.A.Q Section ======= -->
    <section id=\"faq\">

        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-header\">
                <h2>F.A.Q </h2>
            </div>

            <div class=\"row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"col-lg-9\">

                    <ul class=\"faq-list\">

                        <li>
                            <div data-bs-toggle=\"collapse\" class=\"collapsed question\" href=\"#faq1\">Non consectetur a erat nam at lectus urna duis? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq1\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq2\" class=\"collapsed question\">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq2\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq3\" class=\"collapsed question\">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq3\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq4\" class=\"collapsed question\">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq4\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq5\" class=\"collapsed question\">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq5\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle=\"collapse\" href=\"#faq6\" class=\"collapsed question\">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class=\"bi bi-chevron-down icon-show\"></i><i class=\"bi bi-chevron-up icon-close\"></i></div>
                            <div id=\"faq6\" class=\"collapse\" data-bs-parent=\".faq-list\">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </div>

    </section><!-- End  F.A.Q Section -->

    <!-- ======= Subscribe Section ======= -->
    <section id=\"subscribe\">
        <div class=\"container\" data-aos=\"zoom-in\">
            <div class=\"section-header\">
                <h2>Newsletter</h2>
                <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
            </div>

            <form method=\"POST\" action=\"#\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6 col-md-10 d-flex\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter your Email\">
                        <button type=\"submit\" class=\"ms-2\">Subscribe</button>
                    </div>
                </div>
            </form>

        </div>
    </section><!-- End Subscribe Section -->

    <!-- ======= Buy Ticket Section ======= -->
    <section id=\"buy-tickets\" class=\"section-with-bg\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-header\">
                <h2>Buy Tickets</h2>
                <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                    <div class=\"card mb-5 mb-lg-0\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-muted text-uppercase text-center\">Standard Access</h5>
                            <h6 class=\"card-price text-center\">\$150</h6>
                            <hr>
                            <ul class=\"fa-ul\">
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Regular Seating</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Coffee Break</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Custom Badge</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>Community Access</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>Workshop Access</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>After Party</li>
                            </ul>
                            <hr>
                            <div class=\"text-center\">
                                <button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#buy-ticket-modal\" data-ticket-type=\"standard-access\">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                    <div class=\"card mb-5 mb-lg-0\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-muted text-uppercase text-center\">Pro Access</h5>
                            <h6 class=\"card-price text-center\">\$250</h6>
                            <hr>
                            <ul class=\"fa-ul\">
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Regular Seating</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Coffee Break</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Custom Badge</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Community Access</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>Workshop Access</li>
                                <li class=\"text-muted\"><span class=\"fa-li\"><i class=\"fa fa-times\"></i></span>After Party</li>
                            </ul>
                            <hr>
                            <div class=\"text-center\">
                                <button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#buy-ticket-modal\" data-ticket-type=\"pro-access\">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-muted text-uppercase text-center\">Premium Access</h5>
                            <h6 class=\"card-price text-center\">\$350</h6>
                            <hr>
                            <ul class=\"fa-ul\">
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Regular Seating</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Coffee Break</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Custom Badge</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Community Access</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>Workshop Access</li>
                                <li><span class=\"fa-li\"><i class=\"fa fa-check\"></i></span>After Party</li>
                            </ul>
                            <hr>
                            <div class=\"text-center\">
                                <button type=\"button\" class=\"btn\" data-bs-toggle=\"modal\" data-bs-target=\"#buy-ticket-modal\" data-ticket-type=\"premium-access\">Buy Now</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal Order Form -->
        <div id=\"buy-ticket-modal\" class=\"modal fade\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Buy Tickets</h4>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"POST\" action=\"#\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"your-name\" placeholder=\"Your Name\">
                            </div>
                            <div class=\"form-group mt-3\">
                                <input type=\"text\" class=\"form-control\" name=\"your-email\" placeholder=\"Your Email\">
                            </div>
                            <div class=\"form-group mt-3\">
                                <select id=\"ticket-type\" name=\"ticket-type\" class=\"form-select\">
                                    <option value=\"\">-- Select Your Ticket Type --</option>
                                    <option value=\"standard-access\">Standard Access</option>
                                    <option value=\"pro-access\">Pro Access</option>
                                    <option value=\"premium-access\">Premium Access</option>
                                </select>
                            </div>
                            <div class=\"text-center mt-3\">
                                <button type=\"submit\" class=\"btn\">Buy Now</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        {% endblock %}
        {% endblock %}
    </section><!-- End Buy Ticket Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"section-bg\">

        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-header\">
                <h2>Contact Us</h2>

            </div>

            <div class=\"row contact-info\">

                <div class=\"col-md-4\">
                    <div class=\"contact-address\">
                        <i class=\"bi bi-geo-alt\"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"contact-phone\">
                        <i class=\"bi bi-phone\"></i>
                        <h3>Phone Number</h3>
                        <p><a href=\"tel:+155895548855\">+1 5589 55488 55</a></p>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"contact-email\">
                        <i class=\"bi bi-envelope\"></i>
                        <h3>Email</h3>
                        <p><a href=\"mailto:info@example.com\">info@example.com</a></p>
                    </div>
                </div>

            </div>

            <div class=\"form\">
                <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
                    <div class=\"row\">
                        <div class=\"form-group col-md-6\">
                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                        </div>
                        <div class=\"form-group col-md-6 mt-3 mt-md-0\">
                            <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                        </div>
                    </div>
                    <div class=\"form-group mt-3\">
                        <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
                    </div>
                    <div class=\"form-group mt-3\">
                        <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
                    </div>
                    <div class=\"my-3\">
                        <div class=\"loading\">Loading</div>
                        <div class=\"error-message\"></div>
                        <div class=\"sent-message\">Your message has been sent. Thank you!</div>
                    </div>
                    <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\">
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-3 col-md-6 footer-info\">
                    <img src=\"{{ asset('front/assets/img/logo.png') }}\" alt=\"TheEvenet\">
                    <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
                </div>

                <div class=\"col-lg-3 col-md-6 footer-links\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Home</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">About us</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Services</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-6 footer-links\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Home</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">About us</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Services</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
                        <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-6 footer-contact\">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                    <div class=\"social-links\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                        <a href=\"#\" class=\"google-plus\"><i class=\"bi bi-instagram\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"copyright\">
            &copy; Copyright <strong>Viatores</strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
          -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>

{% block javascripts %}{% endblock %}
<!-- Vendor JS Files -->
<script src=\"{{ asset('front/assets/vendor/aos/aos.js') }}\"></script>
<script src=\"{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
<script src=\"{{ asset('front/assets/vendor/php-email-form/validate.js') }}\"></script>

<!-- Template Main JS File -->
<script src=\"{{ asset('front/assets/js/main.js') }}\"></script>
<script type=\"text/javascript\">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/621e24a81ffac05b1d7c690f/1ft2rufgb';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<script src=\"{{ asset('front/assets/js/main.js') }}\"></script>
</body>

</html>", "front.html.twig", "C:\\xampp\\htdocs\\PidevUserWeb\\templates\\front.html.twig");
    }
}
