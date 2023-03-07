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
class __TwigTemplate_599b81ce65bf646d22c7c5fa30d23ae8 extends Template
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


    <div >
    <label for=\"search-input\">Rechercher un sinistre :</label>
    <input type=\"text\" id=\"search\" placeholder=\"Recherche par type...\">
    </div>

    <div class=\"input-group\">
  <div class=\"col-md-6\">
    <select id=\"tri\" onchange=\"sortSinistres()\" class=\"form-select\">
      <option value=\"\">Trier les sinistres selon ...</option>
      <option value=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_id_asc");
        echo "\">Identifiant croissant</option>
      <option value=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_id_desc");
        echo "\">Identifiant décroissant</option>
      <option value=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_type_asc");
        echo "\">Type croissant</option>
      <option value=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_type_desc");
        echo "\">Type décroissant</option>
      <option value=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_date_asc");
        echo "\">Date croissante</option>
      <option value=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_date_desc");
        echo "\">Date décroissante</option>
      <option value=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_lieu_asc");
        echo "\">Lieu croissant</option>
      <option value=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_lieu_desc");
        echo "\">Lieu décroissant</option>
      <option value=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_statut_asc");
        echo "\">Statut croissant</option>
      <option value=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sinistre_display_sorted_by_statut_desc");
        echo "\">Statut décroissant</option>
    </select>
  </div>
  </div>
  <br>
  <button class=\"btn\"><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sinistre_stat");
        echo "\">Génerer statistiques</a></button>
</div>



    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#search').keyup(function() {
            var query = \$(this).val();
            \$.ajax({
                url: \"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_sinistre");
        echo "\",
                type: \"POST\",
                data: {query: query},
                success: function(data) {
                    \$('#results').html(data);
                    \$('#results').css('width', '100%');
                    \$('#results').css('position', 'static');
                }
            });
        });
    });
</script>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchS').keyup(function() {
            var query = \$(this).val();
            \$.ajax({
                url: \"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_sinistreS");
        echo "\",
                type: \"POST\",
                data: {query: query},
                success: function(data) {
                    \$('#resultsS').html(data);
                    \$('#resultsS').css('width', '100%');
                    \$('#resultsS').css('position', 'static');
                }
            });
        });
    });
</script>


<table  id=\"results\" id=\"resultsS\" class=\"table table-bordered\" border=\"2\">
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
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sinistres"]) || array_key_exists("sinistres", $context) ? $context["sinistres"] : (function () { throw new RuntimeError('Variable "sinistres" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 94
            echo "        <tr>
            <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 96), "getNom", [], "method", false, false, false, 96), "html", null, true);
            echo "</td>
            <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateHeure", [], "any", false, false, false, 97), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lieu", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
            <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "degats", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
            ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 101)) {
                // line 102
                echo "            <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/files/" . twig_get_attribute($this->env, $this->source, $context["i"], "file", [], "any", false, false, false, 102))), "html", null, true);
                echo "\" style=\"width:100px;height:100px;\"></td>
            ";
            } else {
                // line 104
                echo "            <td>Aucune image sélectionnée</td>
            ";
            }
            // line 106
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "statut", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statut", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\">Suivi</a></td>
            <td><a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppS", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\">Supprimer</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "    </tbody>
</table>

<script>
function sortSinistres() {
  var select = document.getElementById(\"tri\");
  var selectedOption = select.options[select.selectedIndex];
  window.location.href = selectedOption.value;
}

</script>
    </div>
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
        return array (  277 => 111,  268 => 108,  264 => 107,  259 => 106,  255 => 104,  249 => 102,  247 => 101,  243 => 100,  239 => 99,  235 => 98,  231 => 97,  227 => 96,  223 => 95,  220 => 94,  216 => 93,  183 => 63,  161 => 44,  147 => 33,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  123 => 24,  119 => 23,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back_base.html.twig' %}

{% block title %}Liste des sinistres{% endblock %}

{% block body %}

<h1>Liste des sinistres</h1>


    <div >
    <label for=\"search-input\">Rechercher un sinistre :</label>
    <input type=\"text\" id=\"search\" placeholder=\"Recherche par type...\">
    </div>

    <div class=\"input-group\">
  <div class=\"col-md-6\">
    <select id=\"tri\" onchange=\"sortSinistres()\" class=\"form-select\">
      <option value=\"\">Trier les sinistres selon ...</option>
      <option value=\"{{ path('sinistre_display_sorted_by_id_asc') }}\">Identifiant croissant</option>
      <option value=\"{{ path('sinistre_display_sorted_by_id_desc') }}\">Identifiant décroissant</option>
      <option value=\"{{ path('sinistre_display_sorted_by_type_asc') }}\">Type croissant</option>
      <option value=\"{{ path('sinistre_display_sorted_by_type_desc') }}\">Type décroissant</option>
      <option value=\"{{ path('sinistre_display_sorted_by_date_asc') }}\">Date croissante</option>
      <option value=\"{{ path('sinistre_display_sorted_by_date_desc') }}\">Date décroissante</option>
      <option value=\"{{ path('sinistre_display_sorted_by_lieu_asc') }}\">Lieu croissant</option>
      <option value=\"{{ path('sinistre_display_sorted_by_lieu_desc') }}\">Lieu décroissant</option>
      <option value=\"{{ path('sinistre_display_sorted_by_statut_asc') }}\">Statut croissant</option>
      <option value=\"{{ path('sinistre_display_sorted_by_statut_desc') }}\">Statut décroissant</option>
    </select>
  </div>
  </div>
  <br>
  <button class=\"btn\"><a href=\"{{ path('app_sinistre_stat') }}\">Génerer statistiques</a></button>
</div>



    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#search').keyup(function() {
            var query = \$(this).val();
            \$.ajax({
                url: \"{{ path('search_sinistre') }}\",
                type: \"POST\",
                data: {query: query},
                success: function(data) {
                    \$('#results').html(data);
                    \$('#results').css('width', '100%');
                    \$('#results').css('position', 'static');
                }
            });
        });
    });
</script>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchS').keyup(function() {
            var query = \$(this).val();
            \$.ajax({
                url: \"{{ path('search_sinistreS') }}\",
                type: \"POST\",
                data: {query: query},
                success: function(data) {
                    \$('#resultsS').html(data);
                    \$('#resultsS').css('width', '100%');
                    \$('#resultsS').css('position', 'static');
                }
            });
        });
    });
</script>


<table  id=\"results\" id=\"resultsS\" class=\"table table-bordered\" border=\"2\">
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

<script>
function sortSinistres() {
  var select = document.getElementById(\"tri\");
  var selectedOption = select.options[select.selectedIndex];
  window.location.href = selectedOption.value;
}

</script>
    </div>
{% endblock %}

", "sinistre/afficheS.html.twig", "C:\\Users\\HD\\projetPi\\templates\\sinistre\\afficheS.html.twig");
    }
}
