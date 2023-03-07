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

/* sinistre/afficheS.html.twig */
class __TwigTemplate_e9529133b4eb3d4a1b4daf6e759e93b8 extends Template
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
            'search' => [$this, 'block_search'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sinistre/afficheS.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sinistre/afficheS.html.twig"));

        $this->parent = $this->loadTemplate("back_base.html.twig", "sinistre/afficheS.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des sinistres";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Liste des sinistres</h1>

<div class=\"form-group\">
    <label for=\"search-input\">Rechercher un sinistre :</label>
    <input type=\"text\" id=\"search-input\" placeholder=\"Rechercher par type...\">
</div>

";
        // line 14
        $this->displayBlock('search', $context, $blocks);
        // line 21
        echo "
<button class=\"btn\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sinistre_stat");
        echo "\">Génerer statistiques</a></button>
<table class=\"table table-bordered\" border=\"2\">
    <thead>
        <tr>
            <th>Identifiant</th>
            <th>Type</th>
            <th>Date et heure</th>
            <th>Localisation exacte</th>
            <th>Description</th>
            <th>Dégâts</th>
            <th>Preuve visuelle</th>
            <th>Statut</th>
            <th>Faire le suivi</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody id=\"sinistre-table-body\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sinistres"]) || array_key_exists("sinistres", $context) ? $context["sinistres"] : (function () { throw new RuntimeError('Variable "sinistres" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "        <tr>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 42), "getNom", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateHeure", [], "any", false, false, false, 43), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lieu", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "degats", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 47)) {
                // line 48
                echo "            <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 48))), "html", null, true);
                echo "\" style=\"width:100px;height:100px;\"></td>
            ";
            } else {
                // line 50
                echo "            <td>Aucune image sélectionnée</td>
            ";
            }
            // line 52
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "statut", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statut", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">Suivi</a></td>
            <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppS", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Supprimer</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </tbody>
</table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 15
        echo "    <form class=\"d-none d-md-flex ms-4\">
        <input class=\"form-control border-0\" id=\"search\" type=\"search\" placeholder=\"Search\">
    </form>
    <span></span>
    <button class=\" btn-outline-primary fa fa-search me-2\" id=\"btn-search\" style=\"padding:1%\"></button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sinistre/afficheS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 15,  199 => 14,  185 => 57,  176 => 54,  172 => 53,  167 => 52,  163 => 50,  157 => 48,  155 => 47,  151 => 46,  147 => 45,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  128 => 40,  124 => 39,  104 => 22,  101 => 21,  99 => 14,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Liste des sinistres{% endblock %}

{% block body %}

<h1>Liste des sinistres</h1>

<div class=\"form-group\">
    <label for=\"search-input\">Rechercher un sinistre :</label>
    <input type=\"text\" id=\"search-input\" placeholder=\"Rechercher par type...\">
</div>

{% block search %}
    <form class=\"d-none d-md-flex ms-4\">
        <input class=\"form-control border-0\" id=\"search\" type=\"search\" placeholder=\"Search\">
    </form>
    <span></span>
    <button class=\" btn-outline-primary fa fa-search me-2\" id=\"btn-search\" style=\"padding:1%\"></button>
{% endblock %}

<button class=\"btn\"><a href=\"{{ path('app_sinistre_stat') }}\">Génerer statistiques</a></button>
<table class=\"table table-bordered\" border=\"2\">
    <thead>
        <tr>
            <th>Identifiant</th>
            <th>Type</th>
            <th>Date et heure</th>
            <th>Localisation exacte</th>
            <th>Description</th>
            <th>Dégâts</th>
            <th>Preuve visuelle</th>
            <th>Statut</th>
            <th>Faire le suivi</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody id=\"sinistre-table-body\">
        {% for i in sinistres %}
        <tr>
            <td>{{i.id}}</td>
            <td>{{i.type.getNom()}}</td>
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
            <td><a href=\"{{ path('statut', {id: i.id}) }}\">Suivi</a></td>
            <td><a href=\"{{ path('suppS', {id: i.id}) }}\">Supprimer</a></td>
        </tr>
        {% endfor %}
    </tbody>
</table>


{% endblock %}

", "sinistre/afficheS.html.twig", "C:\\Users\\HD\\projetPi\\templates\\sinistre\\afficheS.html.twig");
    }
}
