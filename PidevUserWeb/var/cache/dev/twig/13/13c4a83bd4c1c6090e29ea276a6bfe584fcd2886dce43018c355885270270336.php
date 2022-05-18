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

/* admin/ajouteruser.html.twig */
class __TwigTemplate_dba61eb99850118f8fdee0b704169028417dd08dec72a7110d37d50b39cc59aa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouteruser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouteruser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/ajouteruser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"main-panel\">

            <div> <h1>Ajouter un User</h1></div><br>
            <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutuser");
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>Nom:<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type=\"text\" name=\"nom\" required class=\"form-control\" placeholder=\"Nom\">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>Prenom:<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type=\"text\" name=\"prenom\" required class=\"form-control\" placeholder=\"Prenom\">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>email:<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type=\"email\" name=\"email\" required class=\"form-control\" placeholder=\"email\">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>




                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>Cin:<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input value=\"\" name=\"cin\" required type=\"text\" class=\"form-control\" maxlength=\"8\" placeholder=\"Cin\">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>Mot de Passe :<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type=\"password\" name=\"password\" required class=\"form-control\" placeholder=\"Mot de Passe \">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <br>
                <p>Vous êtes:</p>

                <p>
                    <input type=\"radio\" id=\"male\" name=\"sexe\" value=\"Male\" checked>
                    <label for=\"male\">Male</label><br>
                    <input type=\"radio\" id=\"female\" name=\"sexe\" value=\"Female\">
                    <label for=\"female\">Female</label>
                </p>

                <div class=\"form-group d-flex justify-content-center\">
                    <div class=\"form-check form-check-flat mt-0\">
                        <label class=\"form-check-label\">

                    </div>
                </div>
                <br><br>
                <div class=\"form-group d-flex justify-content-center\">
                    <div class=\"form-check form-check-flat mt-0\">
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\" checked> I agree to the terms </label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-primary submit-btn btn-block\">Submit</button>
                </div>



            </form>
        </nav>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ajouteruser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}




{% block body %}

    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"main-panel\">

            <div> <h1>Ajouter un User</h1></div><br>
            <form action=\"{{  path ('ajoutuser')}}\" method=\"post\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>Nom:<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type=\"text\" name=\"nom\" required class=\"form-control\" placeholder=\"Nom\">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>Prenom:<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type=\"text\" name=\"prenom\" required class=\"form-control\" placeholder=\"Prenom\">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>email:<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type=\"email\" name=\"email\" required class=\"form-control\" placeholder=\"email\">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>




                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>Cin:<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input value=\"\" name=\"cin\" required type=\"text\" class=\"form-control\" maxlength=\"8\" placeholder=\"Cin\">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <label for=\"start\"><h4>Mot de Passe :<abbr title=\"Ce champ est obligatoire\">*</abbr></h4></label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type=\"password\" name=\"password\" required class=\"form-control\" placeholder=\"Mot de Passe \">
                        <div class=\"input-group-append\">
                        <span class=\"input-group-text\">
                          <i class=\"mdi mdi-check-circle-outline\"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <br>
                <p>Vous êtes:</p>

                <p>
                    <input type=\"radio\" id=\"male\" name=\"sexe\" value=\"Male\" checked>
                    <label for=\"male\">Male</label><br>
                    <input type=\"radio\" id=\"female\" name=\"sexe\" value=\"Female\">
                    <label for=\"female\">Female</label>
                </p>

                <div class=\"form-group d-flex justify-content-center\">
                    <div class=\"form-check form-check-flat mt-0\">
                        <label class=\"form-check-label\">

                    </div>
                </div>
                <br><br>
                <div class=\"form-group d-flex justify-content-center\">
                    <div class=\"form-check form-check-flat mt-0\">
                        <label class=\"form-check-label\">
                            <input type=\"checkbox\" class=\"form-check-input\" checked> I agree to the terms </label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-primary submit-btn btn-block\">Submit</button>
                </div>



            </form>
        </nav>
    </div>

{% endblock %}", "admin/ajouteruser.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\admin\\ajouteruser.html.twig");
    }
}
