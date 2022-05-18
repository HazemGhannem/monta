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

/* af/show.html.twig */
class __TwigTemplate_355a0438f6277de0c36318c15c876142db3e2c4878dfee21830219038e16687f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "af/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "af/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "af/show.html.twig", 1);
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

        echo "Article";
        
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
        echo "    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9)), "html", null, true);
        echo "\" class=\"d-block w-100\" width=\"75%\" alt=\"...\">
            </div>
        </div>
    </div>
    <section id=\"schedule\" class=\"section-with-bg\">
        <div class=\"container wow fadeInUp\">
            <div class=\"section-header\">
                <h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h2>
                <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "creationDate", [], "any", false, false, false, 17), "m/d/Y"), "html", null, true);
        echo "</p>
            </div>


            <h3 class=\"sub-heading\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "contenu", [], "any", false, false, false, 21), "html", null, true);
        echo "</h3>

            <!-- Like container -->
            <div class=\"col-md-12 mt-5\">
                <div class=\"text-dark mt-3 row\">
                    <!-- adf session -->
                    ";
        // line 27
        $context["idBlogueur"] = 2;
        // line 28
        echo "
                    ";
        // line 29
        $context["nbLikes"] = 0;
        // line 30
        echo "                    ";
        $context["nbDislikes"] = 0;
        // line 31
        echo "                    ";
        $context["hasLike"] = false;
        // line 32
        echo "                    ";
        $context["hasDislike"] = false;
        // line 33
        echo "
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "likes", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
            // line 35
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["like"], "typelike", [], "any", false, false, false, 35), 1))) {
                // line 36
                echo "                            ";
                $context["nbLikes"] = ((isset($context["nbLikes"]) || array_key_exists("nbLikes", $context) ? $context["nbLikes"] : (function () { throw new RuntimeError('Variable "nbLikes" does not exist.', 36, $this->source); })()) + 1);
                // line 37
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["like"], "blogueur", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), (isset($context["idBlogueur"]) || array_key_exists("idBlogueur", $context) ? $context["idBlogueur"] : (function () { throw new RuntimeError('Variable "idBlogueur" does not exist.', 37, $this->source); })())))) {
                    // line 38
                    echo "                                ";
                    $context["hasLike"] = true;
                    // line 39
                    echo "                            ";
                }
                // line 40
                echo "                        ";
            } else {
                // line 41
                echo "                            ";
                $context["nbDislikes"] = ((isset($context["nbDislikes"]) || array_key_exists("nbDislikes", $context) ? $context["nbDislikes"] : (function () { throw new RuntimeError('Variable "nbDislikes" does not exist.', 41, $this->source); })()) + 1);
                // line 42
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["like"], "blogueur", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), (isset($context["idBlogueur"]) || array_key_exists("idBlogueur", $context) ? $context["idBlogueur"] : (function () { throw new RuntimeError('Variable "idBlogueur" does not exist.', 42, $this->source); })())))) {
                    // line 43
                    echo "                                ";
                    $context["hasDislike"] = true;
                    // line 44
                    echo "                            ";
                }
                // line 45
                echo "                        ";
            }
            // line 46
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                    <a class=\"col-md-1\" href=\"#\"
                       onclick=\"likeDislike(0,";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
        echo ");return false;\">
                        ";
        // line 50
        if ((isset($context["hasDislike"]) || array_key_exists("hasDislike", $context) ? $context["hasDislike"] : (function () { throw new RuntimeError('Variable "hasDislike" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "                            <button id=\"dislike-button-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\"
                                    class=\"btn btn-dark p-2\">
                                <i id=\"dislike-button-heart-";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\"
                                   class=\"fa fa-thumbs-down\"></i>
                            </button>
                        ";
        } else {
            // line 57
            echo "                            <button id=\"dislike-button-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\"
                                    class=\"btn btn-outline-dark p-2\">
                                <i id=\"dislike-button-heart-";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\"
                                   class=\"fa fa-thumbs-o-down\"></i>
                            </button>
                        ";
        }
        // line 63
        echo "                    </a>
                    <p id=\"nb-dislike-";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "html", null, true);
        echo "\"
                       class=\"col-md-1 my-auto text-center\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["nbDislikes"]) || array_key_exists("nbDislikes", $context) ? $context["nbDislikes"] : (function () { throw new RuntimeError('Variable "nbDislikes" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</p>
                    <div class=\"col-md-8 m-auto progress-box\">
                        <div class=\"progress\">
                            <div id=\"like-bar-";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68), "html", null, true);
        echo "\"
                                 class=\"progress-bar progress-bar-striped position-relative bg-primary\"
                                 style=\"width:";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 70, $this->source); })()), "pourcentageLike", [], "any", false, false, false, 70), "html", null, true);
        echo "%\">
                            </div>
                        </div>
                    </div>
                    <p id=\"nb-like-";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74), "html", null, true);
        echo "\"
                       class=\"col-md-1 my-auto text-center\">";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["nbLikes"]) || array_key_exists("nbLikes", $context) ? $context["nbLikes"] : (function () { throw new RuntimeError('Variable "nbLikes" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "</p>
                    <a class=\"col-md-1 w-100\" href=\"#\"
                       onclick=\"likeDislike(1,";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), "html", null, true);
        echo ");return false;\">
                        ";
        // line 78
        if ((isset($context["hasLike"]) || array_key_exists("hasLike", $context) ? $context["hasLike"] : (function () { throw new RuntimeError('Variable "hasLike" does not exist.', 78, $this->source); })())) {
            // line 79
            echo "                            <button id=\"like-button-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79), "html", null, true);
            echo "\"
                                    class=\"btn btn-dark p-2\">
                                <i id=\"like-button-heart-";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\"
                                   class=\"fa fa-thumbs-up\"></i>
                            </button>
                        ";
        } else {
            // line 85
            echo "                            <button id=\"like-button-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "html", null, true);
            echo "\"
                                    class=\"btn btn-dark-outline p-2\">
                                <i id=\"like-button-heart-";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\"
                                   class=\"fa fa-thumbs-o-up\"></i>
                            </button>
                        ";
        }
        // line 91
        echo "                    </a>
                </div>
            </div>
            <!-- end like container -->

            <div class=\"tab-content row justify-content-center\">

                <!-- Schdule Day 1 -->
                <div role=\"tabpanel\" class=\"col-lg-9 tab-pane fade show active\" id=\"day-1\">
                    <h4 class=\"my-3 font-weight-bold\">Comments section :</h4>
                    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 101, $this->source); })()), "opinions", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 102
            echo "
                        <div class=\"row shadow p-2 my-2 rounded border schedule-item\">
                            <div class=\"col-md-2\">
                                <time>";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "creationDate", [], "any", false, false, false, 105), "Y-m-d  H:i:s"), "html", null, true);
            echo "</time>
                            </div>
                            <div class=\"col-md-8\">
                                <h4>Author <span>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "client", [], "any", false, false, false, 108), "html", null, true);
            echo "</span></h4>
                                <p>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "commentaire", [], "any", false, false, false, 109), "html", null, true);
            echo "</p>
                            </div>
                            <!-- adf session -->
                            ";
            // line 112
            $context["idBlogeur"] = 1;
            // line 113
            echo "                            ";
            $context["isSignaled"] = false;
            // line 114
            echo "
                            ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["o"], "signalements", [], "any", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 116
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "blogueur", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), (isset($context["idBlogueur"]) || array_key_exists("idBlogueur", $context) ? $context["idBlogueur"] : (function () { throw new RuntimeError('Variable "idBlogueur" does not exist.', 116, $this->source); })())))) {
                    // line 117
                    echo "                                    ";
                    $context["isSignaled"] = true;
                    // line 118
                    echo "                                ";
                }
                // line 119
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                            <div class=\"col-md-2\">
                                ";
            // line 121
            if ((isset($context["isSignaled"]) || array_key_exists("isSignaled", $context) ? $context["isSignaled"] : (function () { throw new RuntimeError('Variable "isSignaled" does not exist.', 121, $this->source); })())) {
                // line 122
                echo "                                    <a id=\"btn-signaler-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 122), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("signalement/new/") . twig_get_attribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 122)), "html", null, true);
                echo "\">Signaler</a>
                                ";
            } else {
                // line 124
                echo "                                    <p>Vous avez signalé ce commentaire</p>
                                ";
            }
            // line 126
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                    <!--
                    <form action=\"a_f_newOp\" method=\"post\" role=\"form\" class=\"contactForm\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Rating\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">
                            <div class=\"validation\"></div>
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Add Comment\"></textarea>
                            <div class=\"validation\"></div>
                        </div>
                        <div class=\"text-center\"><button type=\"submit\">Submit</button></div>
                    </form>
                    -->
                </div>
                <!-- End Schdule Day 1 -->

                <!-- Schdule Day 2 -->
                <div role=\"tabpanel\" class=\"col-lg-9  tab-pane fade\" id=\"day-2\">

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>10:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/1.jpg\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>11:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/2.jpg\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>12:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/3.jpg\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>02:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/4.jpg\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>03:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/5.jpg\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>04:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/6.jpg\" alt=\"Willow Trantow\">
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
                        <div class=\"col-md-2\">
                            <time>10:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/2.jpg\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>11:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/3.jpg\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>12:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/1.jpg\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>02:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/4.jpg\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>03:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/5.jpg\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>04:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/6.jpg\" alt=\"Willow Trantow\">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

            </div>

        </div>

    </section>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script id=\"ajax-like-dislike\">
        function signaler(idOpinion) {
            \$.ajax({
                type: 'GET',
                url: '/opinion/signaler/opinion',
                data: {
                    'idOpinion': idOpinion
                },
                success: function (retour) {
                    if (retour) {
                        obj = JSON.parse(retour);
                        \$(\"#btn-signaler-\" + obj.id).remove()
                        alert(\"Signalé avec succes\")
                    }
                },
                error: function () {
                    alert(\"Erreur\");
                }
            });
        }


        function likeDislike(typeLike, idArticle) {
            \$.ajax({
                type: 'GET',
                url: '/like',
                data: {
                    'typeLike': typeLike,
                    'idArticle': idArticle
                },
                success: function (retour) {
                    obj = JSON.parse(retour);
                    if (typeLike) {
                        \$(\"#nb-like-\" + idArticle).empty().append(obj.nbLike);
                        if (obj.haveLike) {
                            \$('#like-button-' + idArticle).attr('class', 'btn btn-outline-dark p-2');
                            \$('#like-button-heart-' + idArticle).attr('class', 'fa fa-thumbs-up');
                        } else {
                            \$('#like-button-' + idArticle).attr('class', 'btn btn-dark p-2');
                            \$('#like-button-heart-' + idArticle).attr('class', 'fa fa-thumbs-up');
                        }
                    } else {
                        \$(\"#nb-dislike-\" + idArticle).empty().append(obj.nbDislike);
                        if (obj.haveDislike) {
                            \$('#dislike-button-' + idArticle).attr('class', 'btn btn-dark p-2');
                            \$('#dislike-button-heart-' + idArticle).attr('class', 'fa fa-thumbs-down');
                        } else {
                            \$('#dislike-button-' + idArticle).attr('class', 'btn btn-outline-dark p-2');
                            \$('#dislike-button-heart-' + idArticle).attr('class', 'fa fa-thumbs-o-down');
                        }
                    }
                    \$(\"#like-bar-\" + idArticle).attr('style', 'width:' + obj.pourcentage + '%');
                },
                error: function () {
                    alert(\"Connectez vous d'abord\");
                }
            });
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "af/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 129,  368 => 126,  364 => 124,  356 => 122,  354 => 121,  351 => 120,  345 => 119,  342 => 118,  339 => 117,  336 => 116,  332 => 115,  329 => 114,  326 => 113,  324 => 112,  318 => 109,  314 => 108,  308 => 105,  303 => 102,  299 => 101,  287 => 91,  280 => 87,  274 => 85,  267 => 81,  261 => 79,  259 => 78,  255 => 77,  250 => 75,  246 => 74,  239 => 70,  234 => 68,  228 => 65,  224 => 64,  221 => 63,  214 => 59,  208 => 57,  201 => 53,  195 => 51,  193 => 50,  189 => 49,  185 => 47,  179 => 46,  176 => 45,  173 => 44,  170 => 43,  167 => 42,  164 => 41,  161 => 40,  158 => 39,  155 => 38,  152 => 37,  149 => 36,  146 => 35,  142 => 34,  139 => 33,  136 => 32,  133 => 31,  130 => 30,  128 => 29,  125 => 28,  123 => 27,  114 => 21,  107 => 17,  103 => 16,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article{% endblock %}

{% block body %}
    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"{{ asset('uploads/') ~article.image }}\" class=\"d-block w-100\" width=\"75%\" alt=\"...\">
            </div>
        </div>
    </div>
    <section id=\"schedule\" class=\"section-with-bg\">
        <div class=\"container wow fadeInUp\">
            <div class=\"section-header\">
                <h2>{{ article.title }}</h2>
                <p>{{ article.creationDate  |date(\"m/d/Y\") }}</p>
            </div>


            <h3 class=\"sub-heading\">{{ article.contenu }}</h3>

            <!-- Like container -->
            <div class=\"col-md-12 mt-5\">
                <div class=\"text-dark mt-3 row\">
                    <!-- adf session -->
                    {% set idBlogueur = 2 %}

                    {% set nbLikes = 0 %}
                    {% set nbDislikes = 0 %}
                    {% set hasLike = false %}
                    {% set hasDislike = false %}

                    {% for like in article.likes %}
                        {% if like.typelike == 1 %}
                            {% set nbLikes = nbLikes + 1 %}
                            {% if like.blogueur.id == idBlogueur %}
                                {% set hasLike = true %}
                            {% endif %}
                        {% else %}
                            {% set nbDislikes = nbDislikes + 1 %}
                            {% if like.blogueur.id == idBlogueur %}
                                {% set hasDislike = true %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}

                    <a class=\"col-md-1\" href=\"#\"
                       onclick=\"likeDislike(0,{{ article.id }});return false;\">
                        {% if hasDislike %}
                            <button id=\"dislike-button-{{ article.id }}\"
                                    class=\"btn btn-dark p-2\">
                                <i id=\"dislike-button-heart-{{ article.id }}\"
                                   class=\"fa fa-thumbs-down\"></i>
                            </button>
                        {% else %}
                            <button id=\"dislike-button-{{ article.id }}\"
                                    class=\"btn btn-outline-dark p-2\">
                                <i id=\"dislike-button-heart-{{ article.id }}\"
                                   class=\"fa fa-thumbs-o-down\"></i>
                            </button>
                        {% endif %}
                    </a>
                    <p id=\"nb-dislike-{{ article.id }}\"
                       class=\"col-md-1 my-auto text-center\">{{ nbDislikes }}</p>
                    <div class=\"col-md-8 m-auto progress-box\">
                        <div class=\"progress\">
                            <div id=\"like-bar-{{ article.id }}\"
                                 class=\"progress-bar progress-bar-striped position-relative bg-primary\"
                                 style=\"width:{{ article.pourcentageLike }}%\">
                            </div>
                        </div>
                    </div>
                    <p id=\"nb-like-{{ article.id }}\"
                       class=\"col-md-1 my-auto text-center\">{{ nbLikes }}</p>
                    <a class=\"col-md-1 w-100\" href=\"#\"
                       onclick=\"likeDislike(1,{{ article.id }});return false;\">
                        {% if hasLike %}
                            <button id=\"like-button-{{ article.id }}\"
                                    class=\"btn btn-dark p-2\">
                                <i id=\"like-button-heart-{{ article.id }}\"
                                   class=\"fa fa-thumbs-up\"></i>
                            </button>
                        {% else %}
                            <button id=\"like-button-{{ article.id }}\"
                                    class=\"btn btn-dark-outline p-2\">
                                <i id=\"like-button-heart-{{ article.id }}\"
                                   class=\"fa fa-thumbs-o-up\"></i>
                            </button>
                        {% endif %}
                    </a>
                </div>
            </div>
            <!-- end like container -->

            <div class=\"tab-content row justify-content-center\">

                <!-- Schdule Day 1 -->
                <div role=\"tabpanel\" class=\"col-lg-9 tab-pane fade show active\" id=\"day-1\">
                    <h4 class=\"my-3 font-weight-bold\">Comments section :</h4>
                    {% for o in article.opinions %}

                        <div class=\"row shadow p-2 my-2 rounded border schedule-item\">
                            <div class=\"col-md-2\">
                                <time>{{ o.creationDate|date('Y-m-d  H:i:s') }}</time>
                            </div>
                            <div class=\"col-md-8\">
                                <h4>Author <span>{{ o.client }}</span></h4>
                                <p>{{ o.commentaire }}</p>
                            </div>
                            <!-- adf session -->
                            {% set idBlogeur = 1 %}
                            {% set isSignaled = false %}

                            {% for s in o.signalements %}
                                {% if s.blogueur.id == idBlogueur %}
                                    {% set isSignaled = true %}
                                {% endif %}
                            {% endfor %}
                            <div class=\"col-md-2\">
                                {% if isSignaled %}
                                    <a id=\"btn-signaler-{{ o.id }}\" href=\"{{ asset('signalement/new/') ~o.id }}\">Signaler</a>
                                {% else %}
                                    <p>Vous avez signalé ce commentaire</p>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                    <!--
                    <form action=\"a_f_newOp\" method=\"post\" role=\"form\" class=\"contactForm\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Rating\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">
                            <div class=\"validation\"></div>
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Add Comment\"></textarea>
                            <div class=\"validation\"></div>
                        </div>
                        <div class=\"text-center\"><button type=\"submit\">Submit</button></div>
                    </form>
                    -->
                </div>
                <!-- End Schdule Day 1 -->

                <!-- Schdule Day 2 -->
                <div role=\"tabpanel\" class=\"col-lg-9  tab-pane fade\" id=\"day-2\">

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>10:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/1.jpg\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>11:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/2.jpg\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>12:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/3.jpg\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>02:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/4.jpg\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>03:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/5.jpg\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>04:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/6.jpg\" alt=\"Willow Trantow\">
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
                        <div class=\"col-md-2\">
                            <time>10:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/2.jpg\" alt=\"Hubert Hirthe\">
                            </div>
                            <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                            <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>11:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/3.jpg\" alt=\"Cole Emmerich\">
                            </div>
                            <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                            <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>12:00 AM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/1.jpg\" alt=\"Brenden Legros\">
                            </div>
                            <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                            <p>Facere provident incidunt quos voluptas.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>02:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/4.jpg\" alt=\"Jack Christiansen\">
                            </div>
                            <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                            <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>03:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/5.jpg\" alt=\"Alejandrin Littel\">
                            </div>
                            <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                            <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                        </div>
                    </div>

                    <div class=\"row schedule-item\">
                        <div class=\"col-md-2\">
                            <time>04:00 PM</time>
                        </div>
                        <div class=\"col-md-10\">
                            <div class=\"speaker\">
                                <img src=\"img/speakers/6.jpg\" alt=\"Willow Trantow\">
                            </div>
                            <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                            <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                        </div>
                    </div>

                </div>
                <!-- End Schdule Day 2 -->

            </div>

        </div>

    </section>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script id=\"ajax-like-dislike\">
        function signaler(idOpinion) {
            \$.ajax({
                type: 'GET',
                url: '/opinion/signaler/opinion',
                data: {
                    'idOpinion': idOpinion
                },
                success: function (retour) {
                    if (retour) {
                        obj = JSON.parse(retour);
                        \$(\"#btn-signaler-\" + obj.id).remove()
                        alert(\"Signalé avec succes\")
                    }
                },
                error: function () {
                    alert(\"Erreur\");
                }
            });
        }


        function likeDislike(typeLike, idArticle) {
            \$.ajax({
                type: 'GET',
                url: '/like',
                data: {
                    'typeLike': typeLike,
                    'idArticle': idArticle
                },
                success: function (retour) {
                    obj = JSON.parse(retour);
                    if (typeLike) {
                        \$(\"#nb-like-\" + idArticle).empty().append(obj.nbLike);
                        if (obj.haveLike) {
                            \$('#like-button-' + idArticle).attr('class', 'btn btn-outline-dark p-2');
                            \$('#like-button-heart-' + idArticle).attr('class', 'fa fa-thumbs-up');
                        } else {
                            \$('#like-button-' + idArticle).attr('class', 'btn btn-dark p-2');
                            \$('#like-button-heart-' + idArticle).attr('class', 'fa fa-thumbs-up');
                        }
                    } else {
                        \$(\"#nb-dislike-\" + idArticle).empty().append(obj.nbDislike);
                        if (obj.haveDislike) {
                            \$('#dislike-button-' + idArticle).attr('class', 'btn btn-dark p-2');
                            \$('#dislike-button-heart-' + idArticle).attr('class', 'fa fa-thumbs-down');
                        } else {
                            \$('#dislike-button-' + idArticle).attr('class', 'btn btn-outline-dark p-2');
                            \$('#dislike-button-heart-' + idArticle).attr('class', 'fa fa-thumbs-o-down');
                        }
                    }
                    \$(\"#like-bar-\" + idArticle).attr('style', 'width:' + obj.pourcentage + '%');
                },
                error: function () {
                    alert(\"Connectez vous d'abord\");
                }
            });
        }
    </script>

{% endblock %}
", "af/show.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\af\\show.html.twig");
    }
}
