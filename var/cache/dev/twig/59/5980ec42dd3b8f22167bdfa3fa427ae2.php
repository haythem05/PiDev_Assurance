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

/* sinistre/search.html.twig */
class __TwigTemplate_bd2fcdd2ad2925219c760b035dd3aea5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sinistre/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sinistre/search.html.twig"));

        $this->parent = $this->loadTemplate("back_base.html.twig", "sinistre/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table id=\"results\" class=\"table table-bordered\" border=\"2\">
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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sinistres"]) || array_key_exists("sinistres", $context) ? $context["sinistres"] : (function () { throw new RuntimeError('Variable "sinistres" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 23), "getNom", [], "method", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateHeure", [], "any", false, false, false, 24), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lieu", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "degats", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 28)) {
                // line 29
                echo "            <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 29))), "html", null, true);
                echo "\" style=\"width:100px;height:100px;\"></td>
            ";
            } else {
                // line 31
                echo "            <td>Aucune image sélectionnée</td>
            ";
            }
            // line 33
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "statut", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statut", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">Suivi</a></td>
            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppS", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Supprimer</a></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sinistre/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 38,  138 => 35,  134 => 34,  129 => 33,  125 => 31,  119 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  90 => 21,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block body %}
    <table id=\"results\" class=\"table table-bordered\" border=\"2\">
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
{% endblock %}", "sinistre/search.html.twig", "C:\\Users\\HD\\projetPi\\templates\\sinistre\\search.html.twig");
    }
}
