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

/* af/index.html.twig */
class __TwigTemplate_3e6fbe98b53c1ea097e93509c64508f6a36866e190d1f58004f764781a02acfb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "af/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "af/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "af/index.html.twig", 1);
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

        echo "Article index";
        
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
        echo "    <section id=\"hotels\" class=\"section-with-bg wow fadeInUp\">

        <div class=\"container\">
            <div class=\"section-header\">
                <h2>Blog</h2>
                <p>Her are some Articles</p>
            </div>

            <div class=\"row\">

             ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 17
            echo "                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"hotel\">
                        <div class=\"hotel-img\">

                            <img style=\"height: 200px\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 21)), "html", null, true);
            echo "\"/>
                        </div>
                        <h3><a href=\"http://127.0.0.1:8000/a/f/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></h3>
                        <div class=\"stars\">
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_round(twig_get_attribute($this->env, $this->source, $context["a"], "rating", [], "any", false, false, false, 25), 0, "floor")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 26
                echo "                                <i class=\"fa fa-star\"></i>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                            ";
            if ((0 !== twig_compare((twig_get_attribute($this->env, $this->source, $context["a"], "rating", [], "any", false, false, false, 28) - twig_round(twig_get_attribute($this->env, $this->source, $context["a"], "rating", [], "any", false, false, false, 28), 0, "floor")), 0))) {
                // line 29
                echo "                                <i class=\"fa fa-star-half-full\"></i>
                            ";
            }
            // line 31
            echo "
                        </div>
                        <p>Author : ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "blogueur", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                        <p>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "contenu", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>

                    </div>
                </div>

             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
            </div>
            <div class=\" row pagination\">
                ";
        // line 43
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 43, $this->source); })()), "/af/pagination.html.twig");
        echo "
            </div>
        </div>



        <div class=“d-flex justify-content-center”>


        </div>
        

    </section>
    <script>
    \$(document).ready(function() {
    \$('#example').DataTable( {
    \"pagingType\": \"full_numbers\"
    } );
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "af/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 43,  160 => 40,  148 => 34,  144 => 33,  140 => 31,  136 => 29,  133 => 28,  126 => 26,  122 => 25,  115 => 23,  110 => 21,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Article index{% endblock %}

{% block body %}
    <section id=\"hotels\" class=\"section-with-bg wow fadeInUp\">

        <div class=\"container\">
            <div class=\"section-header\">
                <h2>Blog</h2>
                <p>Her are some Articles</p>
            </div>

            <div class=\"row\">

             {% for a in articles %}
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"hotel\">
                        <div class=\"hotel-img\">

                            <img style=\"height: 200px\" src=\"{{ asset('uploads/') ~ a .image }}\"/>
                        </div>
                        <h3><a href=\"http://127.0.0.1:8000/a/f/{{ a.id }}\">{{ a.title }}</a></h3>
                        <div class=\"stars\">
                            {% for r in 1..(a.rating|round(0, 'floor')  )   %}
                                <i class=\"fa fa-star\"></i>
                            {% endfor %}
                            {% if a.rating - a.rating|round(0, 'floor')   !=0 %}
                                <i class=\"fa fa-star-half-full\"></i>
                            {% endif %}

                        </div>
                        <p>Author : {{ a.blogueur.name }}</p>
                        <p>{{ a.contenu }}</p>

                    </div>
                </div>

             {% endfor %}

            </div>
            <div class=\" row pagination\">
                {{ knp_pagination_render(articles, '/af/pagination.html.twig') }}
            </div>
        </div>



        <div class=“d-flex justify-content-center”>


        </div>
        

    </section>
    <script>
    \$(document).ready(function() {
    \$('#example').DataTable( {
    \"pagingType\": \"full_numbers\"
    } );
    </script>
{% endblock %}
", "af/index.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\af\\index.html.twig");
    }
}
