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

/* pagination.html.twig */
class __TwigTemplate_58e77733ffb1a2013b5864fa3b797dd14d183f334aa8087c89173cda0b6e7f8b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        // line 1
        if ((1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()), 1))) {
            // line 2
            echo "    <nav aria-label=\"pagination\">
        <ul class=\"pagination job-pagination justify-content-center mb-0 mt-4 pt-2\">
            <li class=\"page-item\">
                ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                echo "                    <a rel=\"prev\" class=\"page-link\"
                       href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 7, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 7, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 7, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 7, $this->source); })())])), "html", null, true);
                echo "\">
                        <i class=\"mdi mdi-chevron-left text-dark\"></i>
                    </a>
                ";
            } else {
                // line 11
                echo "                    <p class=\"page-link disabled bg-light\">
                        <i class=\"mdi mdi-chevron-left text-muted\"></i>
                    </p>
                ";
            }
            // line 15
            echo "            </li>


            ";
            // line 18
            if ((0 === twig_compare((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 18, $this->source); })()), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 18, $this->source); })())))) {
                // line 19
                echo "                <li class=\"page-item active\">
                    <a class=\"page-link\" aria-label=\"Page ";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "\" aria-current=\"page\"
                       href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 21, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 21, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 21, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 21, $this->source); })())])), "html", null, true);
                echo "\">1
                    </a>
                </li>
            ";
            } else {
                // line 25
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 26, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 26, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 26, $this->source); })())])), "html", null, true);
                echo "\">1</a>
                </li>
            ";
            }
            // line 29
            echo "
            ";
            // line 30
            if ((0 <= twig_compare((twig_get_attribute($this->env, $this->source, (isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 30, $this->source); })()), 0, [], "array", false, false, false, 30) - (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 30, $this->source); })())), 2))) {
                // line 31
                echo "                <li class=\"page-item\">
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 35
            echo "
            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 37
                echo "                ";
                if (((0 !== twig_compare((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 37, $this->source); })()), $context["page"])) && (0 !== twig_compare($context["page"], (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 37, $this->source); })()))))) {
                    // line 38
                    echo "                    ";
                    if ((0 === twig_compare($context["page"], (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 38, $this->source); })())))) {
                        // line 39
                        echo "                        <li class=\"page-item active\">
                            <a class=\"page-link\" aria-label=\"Page ";
                        // line 40
                        echo twig_escape_filter($this->env, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 40, $this->source); })()), "html", null, true);
                        echo "\" aria-current=\"page\"
                               href=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 41, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 41, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 41, $this->source); })()) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    } else {
                        // line 45
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" aria-label=\"Goto page ";
                        // line 46
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "\"
                               href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 47, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 47, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 47, $this->source); })()) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    }
                    // line 51
                    echo "                ";
                }
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
            ";
            // line 54
            if ((0 <= twig_compare(((isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 54, $this->source); })()) - twig_get_attribute($this->env, $this->source, (isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 54, $this->source); })()), (twig_length_filter($this->env, (isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 54, $this->source); })())) - 1), [], "array", false, false, false, 54)), 2))) {
                // line 55
                echo "                <li class=\"page-item\">
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            if ((0 === twig_compare((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 60, $this->source); })()), (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 60, $this->source); })())))) {
                // line 61
                echo "                <li class=\"page-item active\">
                    <a class=\"page-link \" aria-label=\"Page ";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "\" aria-current=\"page\"
                       href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 63, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 63, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 63, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 63, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 63, $this->source); })()), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 66
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\"
                       href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 68, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 68, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 68, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 68, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 68, $this->source); })()), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 71
            echo "

            ";
            // line 73
            if (array_key_exists("next", $context)) {
                // line 74
                echo "                <li class=\"page-item\">
                    <a rel=\"next\" class=\"page-link\"
                       href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 76, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 76, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 76, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 76, $this->source); })())])), "html", null, true);
                echo "\">
                        <i class=\"mdi mdi-chevron-right\"></i>
                    </a>
                </li>
            ";
            } else {
                // line 81
                echo "                <p class=\"page-link disabled bg-light\">
                    <i class=\"mdi mdi-chevron-right text-muted\"></i>
                </p>
            ";
            }
            // line 85
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 85,  224 => 81,  216 => 76,  212 => 74,  210 => 73,  206 => 71,  198 => 68,  194 => 66,  186 => 63,  182 => 62,  179 => 61,  177 => 60,  174 => 59,  168 => 55,  166 => 54,  163 => 53,  157 => 52,  154 => 51,  145 => 47,  141 => 46,  138 => 45,  129 => 41,  125 => 40,  122 => 39,  119 => 38,  116 => 37,  112 => 36,  109 => 35,  103 => 31,  101 => 30,  98 => 29,  92 => 26,  89 => 25,  82 => 21,  78 => 20,  75 => 19,  73 => 18,  68 => 15,  62 => 11,  55 => 7,  52 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageCount > 1 %}
    <nav aria-label=\"pagination\">
        <ul class=\"pagination job-pagination justify-content-center mb-0 mt-4 pt-2\">
            <li class=\"page-item\">
                {% if previous is defined %}
                    <a rel=\"prev\" class=\"page-link\"
                       href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                        <i class=\"mdi mdi-chevron-left text-dark\"></i>
                    </a>
                {% else %}
                    <p class=\"page-link disabled bg-light\">
                        <i class=\"mdi mdi-chevron-left text-muted\"></i>
                    </p>
                {% endif %}
            </li>


            {% if current == first %}
                <li class=\"page-item active\">
                    <a class=\"page-link\" aria-label=\"Page {{ current }}\" aria-current=\"page\"
                       href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">1
                    </a>
                </li>
            {% else %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">1</a>
                </li>
            {% endif %}

            {% if pagesInRange[0] - first >= 2 %}
                <li class=\"page-item\">
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if first != page and page != last %}
                    {% if page == current %}
                        <li class=\"page-item active\">
                            <a class=\"page-link\" aria-label=\"Page {{ current }}\" aria-current=\"page\"
                               href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}
                            </a>
                        </li>
                    {% else %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" aria-label=\"Goto page {{ page }}\"
                               href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}
                            </a>
                        </li>
                    {% endif %}
                {% endif %}
            {% endfor %}

            {% if last - pagesInRange[pagesInRange|length - 1] >= 2 %}
                <li class=\"page-item\">
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            {% if current == last %}
                <li class=\"page-item active\">
                    <a class=\"page-link \" aria-label=\"Page {{ current }}\" aria-current=\"page\"
                       href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last }}</a>
                </li>
            {% else %}
                <li class=\"page-item\">
                    <a class=\"page-link\"
                       href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last }}</a>
                </li>
            {% endif %}


            {% if next is defined %}
                <li class=\"page-item\">
                    <a rel=\"next\" class=\"page-link\"
                       href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                        <i class=\"mdi mdi-chevron-right\"></i>
                    </a>
                </li>
            {% else %}
                <p class=\"page-link disabled bg-light\">
                    <i class=\"mdi mdi-chevron-right text-muted\"></i>
                </p>
            {% endif %}
        </ul>
    </nav>
{% endif %}
", "pagination.html.twig", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\pagination.html.twig");
    }
}
