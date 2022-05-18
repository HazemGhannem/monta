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

/* reserve_vol/pdf2.html.twig */
class __TwigTemplate_70ad2f9a6363618d7afef46bf7550ae0d960a5338cd62be88883c838db96e286 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve_vol/pdf2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserve_vol/pdf2.html.twig"));

        // line 1
        echo "<div class=\"table-responsive\">
    <table class=\"table mb-0\">
        <thead>
        <tr>
            <th scope=\"row\">ID</th>
            <th scope=\"row\">Prenom</th>
            <th scope=\"row\">Nom</th>
            <th scope=\"row\">Vol</th>
            <th scope=\"row\">Ville Arrivé</th>
            <th scope=\"row\">Date</th>
            <th scope=\"row\">Prix</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["resvol"]);
        foreach ($context['_seq'] as $context["_key"] => $context["resvol"]) {
            // line 16
            echo "            <tr>
                <td>
                    ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "prenom", [], "any", false, false, false, 21), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "villedep", [], "any", false, false, false, 27), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "villearr", [], "any", false, false, false, 30), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "getDatevoll", [], "method", false, false, false, 33), "d-m-Y H:i:s"), "html", null, true);
            echo "
                </td>

                <td>
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resvol"], "prixvol", [], "any", false, false, false, 37), "html", null, true);
            echo "
                </td>

            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resvol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>

    </table>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reserve_vol/pdf2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  104 => 37,  97 => 33,  91 => 30,  85 => 27,  79 => 24,  73 => 21,  67 => 18,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\">
    <table class=\"table mb-0\">
        <thead>
        <tr>
            <th scope=\"row\">ID</th>
            <th scope=\"row\">Prenom</th>
            <th scope=\"row\">Nom</th>
            <th scope=\"row\">Vol</th>
            <th scope=\"row\">Ville Arrivé</th>
            <th scope=\"row\">Date</th>
            <th scope=\"row\">Prix</th>
        </tr>
        </thead>
        <tbody>
        {% for resvol in resvol %}
            <tr>
                <td>
                    {{ resvol.id }}
                </td>
                <td>
                    {{ resvol.prenom }}
                </td>
                <td>
                    {{ resvol.nom }}
                </td>
                <td>
                    {{ resvol.villedep }}
                </td>
                <td>
                    {{ resvol.villearr }}
                </td>
                <td>
                    {{ resvol.getDatevoll()|date('d-m-Y H:i:s') }}
                </td>

                <td>
                    {{ resvol.prixvol }}
                </td>

            </tr>

        {% endfor %}
        </tbody>

    </table>
</div>", "reserve_vol/pdf2.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\reserve_vol\\pdf2.html.twig");
    }
}
