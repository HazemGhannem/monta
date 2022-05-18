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

/* article/index.html.twig */
class __TwigTemplate_1282a6c7ac77012f6afc06ca1b67befa17b74933ac97623cadec69ae76b9b666 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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
        echo "    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-4\">
                <div  class=\"card mb-4\">
                    <div class=\"card-header\">
                        <i class=\"fas fa-table me-1\"></i>
                        Opinion
                        <hr>
                        <label for=\"site-search\">Rechercher L'ARTICLE:</label>

                        <form action=\"\" method=\"GET\">
                            <input type=\"search\" id=\"site-search\" name=\"search\"
                                   aria-label=\"Search through site content\">
                            <button type=\"submit\">Search</button>
                        </form>

                    </div>
                    <div class=\"card-body\">
                        <table id=\"datatablesSimple\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Contenu</th>
                                <th>CreationDate</th>
                                <th>Rating</th>
                                <th>actions</th>
                            </tr>
                            </thead>


                            <tbody>
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 40
            echo "
                                <tr>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>

                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                    <td><img style=\"height: 100px\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 46)), "html", null, true);
            echo "\"/></td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "creationDate", [], "any", false, false, false, 47)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">show</a>
                                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">edit</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                                <tr>
                                    <td colspan=\"5\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\">Create new</a>
                <h1>Opinion </h1>
            </div>
        </main>
    </div>
    <a>  <img   width=\"30\" src=\"https://cdn-icons-png.flaticon.com/512/337/337946.png\">  </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 64,  180 => 59,  171 => 55,  162 => 51,  158 => 50,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  136 => 43,  132 => 42,  128 => 40,  123 => 39,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article{% endblock %}

{% block body %}
    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-4\">
                <div  class=\"card mb-4\">
                    <div class=\"card-header\">
                        <i class=\"fas fa-table me-1\"></i>
                        Opinion
                        <hr>
                        <label for=\"site-search\">Rechercher L'ARTICLE:</label>

                        <form action=\"\" method=\"GET\">
                            <input type=\"search\" id=\"site-search\" name=\"search\"
                                   aria-label=\"Search through site content\">
                            <button type=\"submit\">Search</button>
                        </form>

                    </div>
                    <div class=\"card-body\">
                        <table id=\"datatablesSimple\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Contenu</th>
                                <th>CreationDate</th>
                                <th>Rating</th>
                                <th>actions</th>
                            </tr>
                            </thead>


                            <tbody>
                            {% for article in articles %}

                                <tr>
                                    <td>{{ article.id }}</td>
                                    <td>{{ article.title }}</td>

                                    <td>{{ article.contenu }}</td>
                                    <td><img style=\"height: 100px\" src=\"{{ asset('uploads/') ~ article .image }}\"/></td>
                                    <td>{{ article.creationDate|date}}</td>
                                    <td>{{ article.rating }}</td>
                                    <td>
                                        <a href=\"{{ path('article_show', {'id': article.id}) }}\">show</a>
                                        <a href=\"{{ path('article_edit', {'id': article.id}) }}\">edit</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"5\">no records found</td>
                                </tr>
                            {% endfor %}

                            </tbody>
                        </table>
                    </div>
                </div>
                <a href=\"{{ path('article_new') }}\">Create new</a>
                <h1>Opinion </h1>
            </div>
        </main>
    </div>
    <a>  <img   width=\"30\" src=\"https://cdn-icons-png.flaticon.com/512/337/337946.png\">  </a>
{% endblock %}
", "article/index.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\article\\index.html.twig");
    }
}
