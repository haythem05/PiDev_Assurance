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

/* sinistre/afficheSF.html.twig */
class __TwigTemplate_80f4ba93723ee71a7f80485e2fbacad7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'Partie2' => [$this, 'block_Partie2'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sinistre/afficheSF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sinistre/afficheSF.html.twig"));

        $this->parent = $this->loadTemplate("front_base.html.twig", "sinistre/afficheSF.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SecurAssur 
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logoassu.png"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_Partie2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie2"));

        // line 10
        echo "<header class=\"section-header\">
          <h2>Sinistres</h2>
          <p>Déclarez, consultez et suivez vos sinistres.</p>
        </header>
<div class=\"row gy-4\"> 

<header class=\"section-header\" style=\"text-align:center; border: 2px solid #191970; padding: 20px;\">
    <div id=\"google_translate_element\" style=\"margin: 20px;\"></div>
    <script type=\"text/javascript\">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
        }
    </script>
    <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
</header>


<button class=\"btn\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutSF");
        echo "\">Ajouter un nouveau sinistre</a></button>
<header class=\"section-header\">
<h1>Liste des sinistres </h1>
<table class=\"table table-bordered\" border=\"2\">
<tr>
  
  <th>Type</th>
  <th>Date et heure</th>
  <th>Localisation exacte</th>
  <th>Description</th>
  <th>Dégâts</th>
  <th>Preuve visuelle</th>
  <th>Statut</th>
  <th>Modifier</th>
  <th>Supprimer</th>
</tr>

";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sinistres"]) || array_key_exists("sinistres", $context) ? $context["sinistres"] : (function () { throw new RuntimeError('Variable "sinistres" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "<tr>
  
  <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
  <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateHeure", [], "any", false, false, false, 48), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
  <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lieu", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
  <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
  <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "degats", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
  ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 52)) {
                // line 53
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 53))), "html", null, true);
                echo "\" style=\"width:100px;height:100px;\"></td>
            ";
            } else {
                // line 55
                echo "                <td>Aucune image sélectionnée</td>
  ";
            }
            // line 57
            echo "  <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "statut", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
  <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifSF", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">Modifier</a></td>
  <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppSF", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">Supprimer</a></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</table>

";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "flashes", [], "method", false, false, false, 64));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 65
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 66
                echo "        <div style=\"text-align: center; font-weight: bold; \">
            ";
                // line 67
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "    <div style=\"display: flex; justify-content: center;\">
    <button class=\"btn\"><a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheSF");
            echo "\">J'ai compris</a></button>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sinistre/afficheSF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 74,  218 => 71,  215 => 70,  206 => 67,  203 => 66,  198 => 65,  194 => 64,  190 => 62,  181 => 59,  177 => 58,  172 => 57,  168 => 55,  162 => 53,  160 => 52,  156 => 51,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  136 => 45,  132 => 44,  112 => 27,  93 => 10,  83 => 9,  71 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front_base.html.twig' %}


{% block title %}SecurAssur 
<link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets/img/logoassu.png')}}\">
{% endblock %}


{% block Partie2 %}
<header class=\"section-header\">
          <h2>Sinistres</h2>
          <p>Déclarez, consultez et suivez vos sinistres.</p>
        </header>
<div class=\"row gy-4\"> 

<header class=\"section-header\" style=\"text-align:center; border: 2px solid #191970; padding: 20px;\">
    <div id=\"google_translate_element\" style=\"margin: 20px;\"></div>
    <script type=\"text/javascript\">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
        }
    </script>
    <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
</header>


<button class=\"btn\"><a href=\"{{ path('ajoutSF') }}\">Ajouter un nouveau sinistre</a></button>
<header class=\"section-header\">
<h1>Liste des sinistres </h1>
<table class=\"table table-bordered\" border=\"2\">
<tr>
  
  <th>Type</th>
  <th>Date et heure</th>
  <th>Localisation exacte</th>
  <th>Description</th>
  <th>Dégâts</th>
  <th>Preuve visuelle</th>
  <th>Statut</th>
  <th>Modifier</th>
  <th>Supprimer</th>
</tr>

{% for i in sinistres %}
<tr>
  
  <td>{{i.type.nom}}</td>
  <td>{{i.getDateHeure|date(\"d/m/Y H:i:s\") }}</td>
  <td>{{i.lieu}}</td>
  <td>{{i.description}}</td>
  <td>{{i.degats}}</td>
  {% if i.file %}
                <td><img src=\"{{ asset('uploads/files/' ~ i.file) }}\" style=\"width:100px;height:100px;\"></td>
            {% else %}
                <td>Aucune image sélectionnée</td>
  {% endif %}
  <td>{{i.statut}}</td>
  <td><a href=\"{{ path('modifSF', {id: i.id}) }}\">Modifier</a></td>
  <td><a href=\"{{ path('suppSF', {id: i.id}) }}\">Supprimer</a></td>
</tr>
{% endfor %}
</table>

{% for type, messages in app.flashes() %}
    {% for message in messages %}
        <div style=\"text-align: center; font-weight: bold; \">
            {{ message }}
        </div>
    {% endfor %}
    <div style=\"display: flex; justify-content: center;\">
    <button class=\"btn\"><a href=\"{{ path('afficheSF') }}\">J'ai compris</a></button>
</div>
{% endfor %}

{% endblock %}

", "sinistre/afficheSF.html.twig", "C:\\Users\\HD\\projetPi\\templates\\sinistre\\afficheSF.html.twig");
    }
}
