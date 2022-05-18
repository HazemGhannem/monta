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

/* reclammation/ttt */
class __TwigTemplate_8dd3987f800386b57a041d2e8b5ece7fe979934b9cd3165e101bda16930650cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclammation/ttt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclammation/ttt"));

        // line 1
        echo " \" <tr>\"
 \"
 \"                <td>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclammation"]) || array_key_exists("reclammation", $context) ? $context["reclammation"] : (function () { throw new RuntimeError('Variable "reclammation" does not exist.', 3, $this->source); })()), "objet", [], "any", false, false, false, 3), "html", null, true);
        echo "</td>\"
 \"               <td>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclammation"]) || array_key_exists("reclammation", $context) ? $context["reclammation"] : (function () { throw new RuntimeError('Variable "reclammation" does not exist.', 4, $this->source); })()), "message", [], "any", false, false, false, 4), "html", null, true);
        echo "</td>\"
 \"               <td>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclammation"]) || array_key_exists("reclammation", $context) ? $context["reclammation"] : (function () { throw new RuntimeError('Variable "reclammation" does not exist.', 5, $this->source); })()), "statut", [], "any", false, false, false, 5), "html", null, true);
        echo "</td>
 \"           </tr>



 \"<table class='table'>\"+
 \"        <thead>\"+
 \"            <tr>\"+
 \"                <th>Objet</th>\"+
 \"                <th>Message</th>\"+
 \"                <th>Statut</th>\"+
 \"                <th>actions</th>\"+
 \"            </tr>\"+
 \"        </thead>\"+
 \"        <tbody>\"+
 \"            <tr>\"+
 \"                <td>\"+obj.objet +\"</td>\"+
 \"                <td>\"+ obj.message+\"</td>\"+
 \"                <td>\"+obj.statut+\"</td>\"+
 \"            </tr>\"+
 \"            <tr>\"+
 \"            </tr>\"+
  \"               <td>\"+
  \"                   <a href='";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_showClient", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclammation"]) || array_key_exists("reclammation", $context) ? $context["reclammation"] : (function () { throw new RuntimeError('Variable "reclammation" does not exist.', 28, $this->source); })()), "getReponse", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "''>Afficher reponse</a>\"+
\"                 </td>\"+
  \"           </tr>\"+
\"             <tr>\"+
  \"               <td colspan=\"7\">Pas de réclammation</td>\"+
  \"           </tr>\"+

   \"      </tbody>\"+
   \"  </table>\"";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclammation/ttt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" \" <tr>\"
 \"
 \"                <td>{{ reclammation.objet }}</td>\"
 \"               <td>{{ reclammation.message }}</td>\"
 \"               <td>{{ reclammation.statut }}</td>
 \"           </tr>



 \"<table class='table'>\"+
 \"        <thead>\"+
 \"            <tr>\"+
 \"                <th>Objet</th>\"+
 \"                <th>Message</th>\"+
 \"                <th>Statut</th>\"+
 \"                <th>actions</th>\"+
 \"            </tr>\"+
 \"        </thead>\"+
 \"        <tbody>\"+
 \"            <tr>\"+
 \"                <td>\"+obj.objet +\"</td>\"+
 \"                <td>\"+ obj.message+\"</td>\"+
 \"                <td>\"+obj.statut+\"</td>\"+
 \"            </tr>\"+
 \"            <tr>\"+
 \"            </tr>\"+
  \"               <td>\"+
  \"                   <a href='{{ path('reponse_showClient', {'id': reclammation.getReponse.id}) }}''>Afficher reponse</a>\"+
\"                 </td>\"+
  \"           </tr>\"+
\"             <tr>\"+
  \"               <td colspan=\"7\">Pas de réclammation</td>\"+
  \"           </tr>\"+

   \"      </tbody>\"+
   \"  </table>\"", "reclammation/ttt", "C:\\Users\\asus\\Documents\\PidevUserWeb\\templates\\reclammation\\ttt");
    }
}
