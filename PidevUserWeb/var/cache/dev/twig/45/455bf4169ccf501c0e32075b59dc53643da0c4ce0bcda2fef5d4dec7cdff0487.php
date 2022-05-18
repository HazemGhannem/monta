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

/* opinion/notifications.html.twig */
class __TwigTemplate_f93ee0b17f1880a0ad46b2d8ce5da596eeb525c98c5baea3c528139d188e3c3d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opinion/notifications.html.twig"));

        // line 1
        echo "<ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
    <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\"
           aria-expanded=\"false\">
            <i class=\"fas fa-bell\"></i>
            ";
        // line 6
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 6, $this->source); })())), 0))) {
            // line 7
            echo "                <span class=\"badge badge-danger\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "</span>
            ";
        }
        // line 9
        echo "        </a>
        <ul class=\"dropdown-menu dropdown-menu-end py-0\" aria-labelledby=\"navbarDropdown\">
            ";
        // line 11
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 11, $this->source); })())), 0))) {
            // line 12
            echo "                <p class=\"pt-3 text-center\">
                    <b>Signalements</b>
                </p>
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["signalement"]) {
                // line 16
                echo "                    <li class=\"border-top py-1\">
                        <a class=\"dropdown-item\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["signalement"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">
                            <p><b>Auteur :</b> ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["signalement"], "blogueur", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
                            <p><b>Opinion signalé :</b> ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["signalement"], "blogueur", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
                echo "</p>
                            <b>Description :</b>
                            <p> ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["signalement"], "description", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['signalement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        } else {
            // line 26
            echo "                <p class=\"d-flex align-items-center\">
                    Aucun signalement
                </p>
            ";
        }
        // line 30
        echo "            <li>
                <hr class=\"dropdown-divider\"/>
            </li>
            <li>
                <a class=\"dropdown-item text-center text-primary pb-3\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_index");
        echo "\">
                    Show all
                </a>
            </li>
        </ul>
    </li>
</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "opinion/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  108 => 30,  102 => 26,  99 => 25,  89 => 21,  84 => 19,  80 => 18,  76 => 17,  73 => 16,  69 => 15,  64 => 12,  62 => 11,  58 => 9,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
    <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\"
           aria-expanded=\"false\">
            <i class=\"fas fa-bell\"></i>
            {% if signalements|length > 0 %}
                <span class=\"badge badge-danger\">{{ signalements|length }}</span>
            {% endif %}
        </a>
        <ul class=\"dropdown-menu dropdown-menu-end py-0\" aria-labelledby=\"navbarDropdown\">
            {% if signalements|length > 0 %}
                <p class=\"pt-3 text-center\">
                    <b>Signalements</b>
                </p>
                {% for signalement in signalements %}
                    <li class=\"border-top py-1\">
                        <a class=\"dropdown-item\" href=\"{{ path('signalement_show', {'id': signalement.id}) }}\">
                            <p><b>Auteur :</b> {{ signalement.blogueur.name }}</p>
                            <p><b>Opinion signalé :</b> {{ signalement.blogueur.name }}</p>
                            <b>Description :</b>
                            <p> {{ signalement.description }}</p>
                        </a>
                    </li>
                {% endfor %}
            {% else %}
                <p class=\"d-flex align-items-center\">
                    Aucun signalement
                </p>
            {% endif %}
            <li>
                <hr class=\"dropdown-divider\"/>
            </li>
            <li>
                <a class=\"dropdown-item text-center text-primary pb-3\" href=\"{{ path('signalement_index') }}\">
                    Show all
                </a>
            </li>
        </ul>
    </li>
</ul>
", "opinion/notifications.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\opinion\\notifications.html.twig");
    }
}
