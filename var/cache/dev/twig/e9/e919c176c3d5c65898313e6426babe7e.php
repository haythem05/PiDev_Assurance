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
class __TwigTemplate_c727d58fba0503c7c110fcf00fb8771f extends Template
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

        echo "SecurAssur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_Partie2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie2"));

        // line 7
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
        // line 24
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sinistres"]) || array_key_exists("sinistres", $context) ? $context["sinistres"] : (function () { throw new RuntimeError('Variable "sinistres" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 42
            echo "<tr>
  
  <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
  <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateHeure", [], "any", false, false, false, 45), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
  <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lieu", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
  <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
  <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "degats", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
  ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 49)) {
                // line 50
                echo "                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 50))), "html", null, true);
                echo "\" style=\"width:100px;height:100px;\"></td>
            ";
            } else {
                // line 52
                echo "                <td>Aucune image sélectionnée</td>
  ";
            }
            // line 54
            echo "  <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "statut", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
  <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifSF", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Modifier</a></td>
  <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppSF", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Supprimer</a></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</table>

";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", [], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 62
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 63
                echo "        <div style=\"text-align: center; font-weight: bold; \">
            ";
                // line 64
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "    <div style=\"display: flex; justify-content: center;\">
    <button class=\"btn\"><a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheSF");
            echo "\">J'ai compris</a></button>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return array (  222 => 71,  213 => 68,  210 => 67,  201 => 64,  198 => 63,  193 => 62,  189 => 61,  185 => 59,  176 => 56,  172 => 55,  167 => 54,  163 => 52,  157 => 50,  155 => 49,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  131 => 42,  127 => 41,  107 => 24,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front_base.html.twig' %}


{% block title %}SecurAssur{% endblock %}

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
