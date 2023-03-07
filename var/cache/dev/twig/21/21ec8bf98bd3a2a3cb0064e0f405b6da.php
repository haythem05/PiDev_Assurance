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

/* sinistre/ajoutSF.html.twig */
class __TwigTemplate_54d829f758048da16bd909c294bd8e30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sinistre/ajoutSF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sinistre/ajoutSF.html.twig"));

        $this->parent = $this->loadTemplate("front_base.html.twig", "sinistre/ajoutSF.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_Partie2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie2"));

        // line 4
        echo "        <div class=\"card\">
        <div class=\"card-body\">
            <h1 class=\"card-title\">Ajouter un sinistre</h1>
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "row g-3"]]);
        echo "
            <div class=\"col-12\">
             ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9), 'label', ["label" => "Type du sinistre"]);
        echo "
             ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "type", [], "any", false, false, false, 10), 'widget');
        echo "
             ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "type", [], "any", false, false, false, 11), 'errors');
        echo "
             </div>
              <div class=\"col-12\">
             ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "date_heure", [], "any", false, false, false, 14), 'label', ["label" => "Date et heure"]);
        echo "
             ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "date_heure", [], "any", false, false, false, 15), 'widget');
        echo "
             ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "date_heure", [], "any", false, false, false, 16), 'errors');
        echo "
             </div>
             <div class=\"col-12\">
             ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "lieu", [], "any", false, false, false, 19), 'label', ["label" => "Localisation exacte"]);
        echo "
             ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "lieu", [], "any", false, false, false, 20), 'widget');
        echo "
             ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "lieu", [], "any", false, false, false, 21), 'errors');
        echo "
             </div>
             <div class=\"col-12\">
             ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "map", [], "any", false, false, false, 24), 'label', ["label" => "Carte Google Maps"]);
        echo "
             ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "map", [], "any", false, false, false, 25), 'widget');
        echo "
             ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "map", [], "any", false, false, false, 26), 'errors');
        echo "
             </div>
             <div id=\"map\"></div>

             <div class=\"col-md-6\">
             ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'label', ["label" => "Description du sinistre"]);
        echo "
             ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'widget');
        echo "
             ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'errors');
        echo "
             </div>
             <div class=\"col-12\">
             ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "degats", [], "any", false, false, false, 36), 'label', ["label" => "Les dégâts causé"]);
        echo "
             ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "degats", [], "any", false, false, false, 37), 'widget');
        echo "
             ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "degats", [], "any", false, false, false, 38), 'errors');
        echo "
             </div>
             <div class=\"col-md-6\">
             ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "file", [], "any", false, false, false, 41), 'label', ["label" => "Preuve visuelle"]);
        echo "
             ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "file", [], "any", false, false, false, 42), 'widget');
        echo "
             ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "file", [], "any", false, false, false, 43), 'errors');
        echo "
             </div>
             
            <div class=\"text-center\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'widget');
        echo "
            <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficheSF");
        echo "\"><button type=\"button\" class=\"btn btn-outline-secondary\">Retour</button></a>
            </div>
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sinistre/ajoutSF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 50,  183 => 48,  179 => 47,  172 => 43,  168 => 42,  164 => 41,  158 => 38,  154 => 37,  150 => 36,  144 => 33,  140 => 32,  136 => 31,  128 => 26,  124 => 25,  120 => 24,  114 => 21,  110 => 20,  106 => 19,  100 => 16,  96 => 15,  92 => 14,  86 => 11,  82 => 10,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front_base.html.twig' %}

{% block Partie2 %}
        <div class=\"card\">
        <div class=\"card-body\">
            <h1 class=\"card-title\">Ajouter un sinistre</h1>
            {{ form_start(form,{'attr': {'novalidate': 'novalidate','class':'row g-3'}}) }}
            <div class=\"col-12\">
             {{form_label(form.type,\"Type du sinistre\")}}
             {{form_widget(form.type)}}
             {{form_errors(form.type)}}
             </div>
              <div class=\"col-12\">
             {{form_label(form.date_heure,\"Date et heure\")}}
             {{form_widget(form.date_heure)}}
             {{form_errors(form.date_heure)}}
             </div>
             <div class=\"col-12\">
             {{form_label(form.lieu,\"Localisation exacte\")}}
             {{form_widget(form.lieu)}}
             {{form_errors(form.lieu)}}
             </div>
             <div class=\"col-12\">
             {{form_label(form.map,\"Carte Google Maps\")}}
             {{form_widget(form.map)}}
             {{form_errors(form.map)}}
             </div>
             <div id=\"map\"></div>

             <div class=\"col-md-6\">
             {{form_label(form.description,\"Description du sinistre\")}}
             {{form_widget(form.description)}}
             {{form_errors(form.description)}}
             </div>
             <div class=\"col-12\">
             {{form_label(form.degats,\"Les dégâts causé\")}}
             {{form_widget(form.degats)}}
             {{form_errors(form.degats)}}
             </div>
             <div class=\"col-md-6\">
             {{form_label(form.file,\"Preuve visuelle\")}}
             {{form_widget(form.file)}}
             {{form_errors(form.file)}}
             </div>
             
            <div class=\"text-center\">
            {{form_widget(form)}}
            <a href=\"{{ path('afficheSF') }}\"><button type=\"button\" class=\"btn btn-outline-secondary\">Retour</button></a>
            </div>
            {{ form_end(form) }}
        </div>
{% endblock %}", "sinistre/ajoutSF.html.twig", "C:\\Users\\HD\\projetPi\\templates\\sinistre\\ajoutSF.html.twig");
    }
}
