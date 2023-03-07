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

/* front_base.html.twig */
class __TwigTemplate_1fb0cec81c76f00303963dae16a5731e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'Partie1' => [$this, 'block_Partie1'],
            'Partie2' => [$this, 'block_Partie2'],
            'Partie3' => [$this, 'block_Partie3'],
            'Partie4' => [$this, 'block_Partie4'],
            'Partie5' => [$this, 'block_Partie5'],
            'Partie6' => [$this, 'block_Partie6'],
            'Partie7' => [$this, 'block_Partie7'],
            'Partie8' => [$this, 'block_Partie8'],
            'Partie9' => [$this, 'block_Partie9'],
            'Partie10' => [$this, 'block_Partie10'],
            'Partie11' => [$this, 'block_Partie11'],
            'Partie12' => [$this, 'block_Partie12'],
            'Partie13' => [$this, 'block_Partie13'],
            'Partie14' => [$this, 'block_Partie14'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoassu.png"), "html", null, true);
        echo "\">
  <meta content=\"\" name=\"description\">

  <meta content=\"\" name=\"keywords\">
  
  ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "</head>

<body>
  ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "
  ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 1200
        echo "
  </main><!-- End #main -->
  ";
        // line 1202
        $this->displayBlock('footer', $context, $blocks);
        // line 1294
        echo "
</body>

";
        // line 1297
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1310
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  <!-- Favicons -->
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoassu.png"), "html", null, true);
        echo "\" alt=\"\">
        <span>SecurAssur</span>
      </a>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Acceuil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Sinistres</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Contrats</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#portfolio\">Réclamations</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Profil</a></li>
          
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          <li><a class=\"getstarted scrollto\" href=\"#about\">Démarrer</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "  ";
        $this->displayBlock('Partie1', $context, $blocks);
        // line 98
        echo "
  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
    ";
        // line 103
        $this->displayBlock('Partie2', $context, $blocks);
        // line 106
        echo "    </section><!-- End About Section -->

    ";
        // line 108
        $this->displayBlock('Partie3', $context, $blocks);
        // line 151
        echo "    
    ";
        // line 152
        $this->displayBlock('Partie4', $context, $blocks);
        // line 204
        echo "    ";
        $this->displayBlock('Partie5', $context, $blocks);
        // line 416
        echo "    ";
        $this->displayBlock('Partie6', $context, $blocks);
        // line 489
        echo "    ";
        $this->displayBlock('Partie7', $context, $blocks);
        // line 573
        echo "    ";
        $this->displayBlock('Partie8', $context, $blocks);
        // line 683
        echo "    ";
        $this->displayBlock('Partie9', $context, $blocks);
        // line 840
        echo "    ";
        $this->displayBlock('Partie10', $context, $blocks);
        // line 942
        echo "    ";
        $this->displayBlock('Partie11', $context, $blocks);
        // line 1037
        echo "
    ";
        // line 1038
        $this->displayBlock('Partie12', $context, $blocks);
        // line 1066
        echo "    ";
        $this->displayBlock('Partie13', $context, $blocks);
        // line 1112
        echo "    ";
        $this->displayBlock('Partie14', $context, $blocks);
        // line 1199
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_Partie1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie1"));

        // line 73
        echo "  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"hero d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 d-flex flex-column justify-content-center\">
          <h1 data-aos=\"fade-up\">Bienvenue sur notre site web SecurAssur.</h1>
          <h2 data-aos=\"fade-up\" data-aos-delay=\"400\">Assurez-vous en quelques clics !</h2>
          <div data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"text-center text-lg-start\">
              <a href=\"#about\" class=\"btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center\">
                <span>Démarrer</span>
                <i class=\"bi bi-arrow-right\"></i>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-6 hero-img\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
          <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/hero-img.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_Partie2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie2"));

        // line 104
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_Partie3($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie3"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie3"));

        // line 109
        echo "    <!-- ======= Values Section ======= -->
    <section id=\"values\" class=\"values\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Our Values</h2>
          <p>Odit est perspiciatis laborum et dicta</p>
        </header>

        <div class=\"row\">

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"box\">
              <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/values-1.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <h3>Ad cupiditate sed est odio</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class=\"col-lg-4 mt-4 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"box\">
              <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/values-2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class=\"col-lg-4 mt-4 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"box\">
              <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/values-3.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 152
    public function block_Partie4($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie4"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie4"));

        // line 153
        echo "    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"bi bi-emoji-smile\"></i>
              <div>
                <span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"bi bi-journal-richtext\" style=\"color: #ee6c20;\"></i>
              <div>
                <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"bi bi-headset\" style=\"color: #15be56;\"></i>
              <div>
                <span data-purecounter-start=\"0\" data-purecounter-end=\"1463\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"bi bi-people\" style=\"color: #bb0852;\"></i>
              <div>
                <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 204
    public function block_Partie5($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie5"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie5"));

        // line 205
        echo "    <!-- ======= Features Section ======= -->
    <section id=\"features\" class=\"features\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Features</h2>
          <p>Laboriosam et omnis fuga quis dolor direda fara</p>
        </header>

        <div class=\"row\">

          <div class=\"col-lg-6\">
            <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/features.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-6 mt-5 mt-lg-0 d-flex\">
            <div class=\"row align-self-center gy-4\">

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Eos aspernatur rem</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"300\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Facilis neque ipsa</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"400\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Volup amet voluptas</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"500\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Rerum omnis sint</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"600\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Alias possimus</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"700\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Repellendus mollitia</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

        <!-- Feature Tabs -->
        <div class=\"row feture-tabs\" data-aos=\"fade-up\">
          <div class=\"col-lg-6\">
            <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>

            <!-- Tabs -->
            <ul class=\"nav nav-pills mb-3\">
              <li>
                <a class=\"nav-link active\" data-bs-toggle=\"pill\" href=\"#tab1\">Saepe fuga</a>
              </li>
              <li>
                <a class=\"nav-link\" data-bs-toggle=\"pill\" href=\"#tab2\">Voluptates</a>
              </li>
              <li>
                <a class=\"nav-link\" data-bs-toggle=\"pill\" href=\"#tab3\">Corrupti</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class=\"tab-content\">

              <div class=\"tab-pane fade show active\" id=\"tab1\">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 1 Content -->

              <div class=\"tab-pane fade show\" id=\"tab2\">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 2 Content -->

              <div class=\"tab-pane fade show\" id=\"tab3\">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class=\"col-lg-6\">
            <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/features-2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
          </div>

        </div><!-- End Feature Tabs -->

        <!-- Feature Icons -->
        <div class=\"row feature-icons\" data-aos=\"fade-up\">
          <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

          <div class=\"row\">

            <div class=\"col-xl-4 text-center\" data-aos=\"fade-right\" data-aos-delay=\"100\">
              <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/features-3.png"), "html", null, true);
        echo "\" class=\"img-fluid p-4\" alt=\"\">
            </div>

            <div class=\"col-xl-8 d-flex content\">
              <div class=\"row align-self-center gy-4\">

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\">
                  <i class=\"ri-line-chart-line\"></i>
                  <div>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <i class=\"ri-stack-line\"></i>
                  <div>
                    <h4>Ullamco laboris nisi</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                  <i class=\"ri-brush-4-line\"></i>
                  <div>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                  <i class=\"ri-magic-line\"></i>
                  <div>
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                  <i class=\"ri-command-line\"></i>
                  <div>
                    <h4>Molestiae dolor</h4>
                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                  <i class=\"ri-radar-line\"></i>
                  <div>
                    <h4>Explicabo consectetur</h4>
                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 416
    public function block_Partie6($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie6"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie6"));

        // line 417
        echo "    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Services</h2>
          <p>Veritatis et dolores facere numquam et praesentium</p>
        </header>

        <div class=\"row gy-4\">

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-box blue\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Nesciunt Mete</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"service-box orange\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Eosle Commodi</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"service-box green\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"service-box red\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Asperiores Commodi</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"service-box purple\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Velit Doloremque.</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"700\">
            <div class=\"service-box pink\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 489
    public function block_Partie7($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie7"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie7"));

        // line 490
        echo "    <!-- ======= Pricing Section ======= -->
    <section id=\"pricing\" class=\"pricing\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class=\"row gy-4\" data-aos=\"fade-left\">

          <div class=\"col-lg-3 col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"box\">
              <h3 style=\"color: #07d5c0;\">Free Plan</h3>
              <div class=\"price\"><sup>\$</sup>0<span> / mo</span></div>
              <img src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/pricing-free.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <a href=\"#\" class=\"btn-buy\">Buy Now</a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
            <div class=\"box\">
              <span class=\"featured\">Featured</span>
              <h3 style=\"color: #65c600;\">Starter Plan</h3>
              <div class=\"price\"><sup>\$</sup>19<span> / mo</span></div>
              <img src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/pricing-starter.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <a href=\"#\" class=\"btn-buy\">Buy Now</a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
            <div class=\"box\">
              <h3 style=\"color: #ff901c;\">Business Plan</h3>
              <div class=\"price\"><sup>\$</sup>29<span> / mo</span></div>
              <img src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/pricing-business.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href=\"#\" class=\"btn-buy\">Buy Now</a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
            <div class=\"box\">
              <h3 style=\"color: #ff0071;\">Ultimate Plan</h3>
              <div class=\"price\"><sup>\$</sup>49<span> / mo</span></div>
              <img src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/pricing-ultimate.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href=\"#\" class=\"btn-buy\">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Pricing Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 573
    public function block_Partie8($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie8"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie8"));

        // line 574
        echo "    <!-- ======= F.A.Q Section ======= -->
    <section id=\"faq\" class=\"faq\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class=\"row\">
          <div class=\"col-lg-6\">
            <!-- F.A.Q List 1-->
            <div class=\"accordion accordion-flush\" id=\"faqlist1\">
              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq-content-1\">
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h2>
                <div id=\"faq-content-1\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist1\">
                  <div class=\"accordion-body\">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div>

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq-content-2\">
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h2>
                <div id=\"faq-content-2\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist1\">
                  <div class=\"accordion-body\">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq-content-3\">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h2>
                <div id=\"faq-content-3\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist1\">
                  <div class=\"accordion-body\">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class=\"col-lg-6\">

            <!-- F.A.Q List 2-->
            <div class=\"accordion accordion-flush\" id=\"faqlist2\">

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq2-content-1\">
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h2>
                <div id=\"faq2-content-1\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist2\">
                  <div class=\"accordion-body\">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq2-content-2\">
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h2>
                <div id=\"faq2-content-2\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist2\">
                  <div class=\"accordion-body\">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq2-content-3\">
                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                  </button>
                </h2>
                <div id=\"faq2-content-3\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist2\">
                  <div class=\"accordion-body\">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 683
    public function block_Partie9($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie9"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie9"));

        // line 684
        echo "
    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Portfolio</h2>
          <p>Check our latest work</p>
        </header>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">App</li>
              <li data-filter=\".filter-card\">Card</li>
              <li data-filter=\".filter-web\">Web</li>
            </ul>
          </div>
        </div>

        <div class=\"row gy-4 portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 1</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"App 1\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Web 3\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 2</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 743
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"App 2\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Card 2\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 766
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Web 2\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 780
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 3</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 785
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"App 3\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 799
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Card 1\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Card 3\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 827
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Web 3\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 840
    public function block_Partie10($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie10"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie10"));

        // line 841
        echo "    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"";
        // line 863
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/testimonials/testimonials-1.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"";
        // line 879
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/testimonials/testimonials-2.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"";
        // line 895
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/testimonials/testimonials-3.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"";
        // line 911
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/testimonials/testimonials-4.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"";
        // line 927
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/testimonials/testimonials-5.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 942
    public function block_Partie11($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie11"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie11"));

        // line 943
        echo "    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>

        <div class=\"row gy-4\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 958
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/team/team-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 977
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/team/team-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 996
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/team/team-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 1015
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/team/team-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1038
    public function block_Partie12($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie12"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie12"));

        // line 1039
        echo "    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Our Clients</h2>
          <p>Temporibus omnis officia</p>
        </header>

        <div class=\"clients-slider swiper\">
          <div class=\"swiper-wrapper align-items-center\">
            <div class=\"swiper-slide\"><img src=\"";
        // line 1051
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/clients/client-1.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 1052
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/clients/client-2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 1053
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/clients/client-3.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 1054
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/clients/client-4.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 1055
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/clients/client-5.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 1056
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/clients/client-6.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 1057
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/clients/client-7.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 1058
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/clients/client-8.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1066
    public function block_Partie13($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie13"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie13"));

        // line 1067
        echo "    <!-- ======= Recent Blog Posts Section ======= -->
    <section id=\"recent-blog-posts\" class=\"recent-blog-posts\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class=\"row\">

          <div class=\"col-lg-4\">
            <div class=\"post-box\">
              <div class=\"post-img\"><img src=\"";
        // line 1081
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/blog/blog-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
              <span class=\"post-date\">Tue, September 15</span>
              <h3 class=\"post-title\">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
              <a href=\"blog-single.html\" class=\"readmore stretched-link mt-auto\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4\">
            <div class=\"post-box\">
              <div class=\"post-img\"><img src=\"";
        // line 1090
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/blog/blog-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
              <span class=\"post-date\">Fri, August 28</span>
              <h3 class=\"post-title\">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <a href=\"blog-single.html\" class=\"readmore stretched-link mt-auto\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4\">
            <div class=\"post-box\">
              <div class=\"post-img\"><img src=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/blog/blog-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
              <span class=\"post-date\">Mon, July 11</span>
              <h3 class=\"post-title\">Quia assumenda est et veritatis aut quae</h3>
              <a href=\"blog-single.html\" class=\"readmore stretched-link mt-auto\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1112
    public function block_Partie14($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie14"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Partie14"));

        // line 1113
        echo "    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class=\"row gy-4\">

          <div class=\"col-lg-6\">

            <div class=\"row gy-4\">
              <div class=\"col-md-6\">
                <div class=\"info-box\">
                  <i class=\"bi bi-geo-alt\"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"info-box\">
                  <i class=\"bi bi-telephone\"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"info-box\">
                  <i class=\"bi bi-envelope\"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"info-box\">
                  <i class=\"bi bi-clock\"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class=\"col-lg-6\">
            <form action=\"forms/contact.php\" method=\"post\" class=\"php-email-form\">
              <div class=\"row gy-4\">

                <div class=\"col-md-6\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" required>
                </div>

                <div class=\"col-md-6 \">
                  <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Your Email\" required>
                </div>

                <div class=\"col-md-12\">
                  <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\" required>
                </div>

                <div class=\"col-md-12\">
                  <textarea class=\"form-control\" name=\"message\" rows=\"6\" placeholder=\"Message\" required></textarea>
                </div>

                <div class=\"col-md-12 text-center\">
                  <div class=\"loading\">Loading</div>
                  <div class=\"error-message\"></div>
                  <div class=\"sent-message\">Your message has been sent. Thank you!</div>

                  <button type=\"submit\">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1202
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1203
        echo "  <!-- ======= Footer ======= -->
  <footer id=\"footer\" class=\"footer\">

    <div class=\"footer-newsletter\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-12 text-center\">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class=\"col-lg-6\">
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <div class=\"col-lg-5 col-md-12 footer-info\">
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
              <img src=\"";
        // line 1227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
              <span>FlexStart</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class=\"social-links mt-3\">
              <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
              <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
              <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
              <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-2 col-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Home</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">About us</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Services</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-6 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1297
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1298
        echo "  <!-- Vendor JS Files -->
  <script src=\"";
        // line 1299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 1308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2011 => 1308,  2005 => 1305,  2001 => 1304,  1997 => 1303,  1993 => 1302,  1989 => 1301,  1985 => 1300,  1981 => 1299,  1978 => 1298,  1968 => 1297,  1891 => 1227,  1865 => 1203,  1855 => 1202,  1760 => 1113,  1750 => 1112,  1727 => 1099,  1715 => 1090,  1703 => 1081,  1687 => 1067,  1677 => 1066,  1659 => 1058,  1655 => 1057,  1651 => 1056,  1647 => 1055,  1643 => 1054,  1639 => 1053,  1635 => 1052,  1631 => 1051,  1617 => 1039,  1607 => 1038,  1575 => 1015,  1553 => 996,  1531 => 977,  1509 => 958,  1492 => 943,  1482 => 942,  1457 => 927,  1438 => 911,  1419 => 895,  1400 => 879,  1381 => 863,  1357 => 841,  1347 => 840,  1324 => 827,  1316 => 822,  1304 => 813,  1296 => 808,  1284 => 799,  1276 => 794,  1264 => 785,  1256 => 780,  1244 => 771,  1236 => 766,  1224 => 757,  1216 => 752,  1204 => 743,  1196 => 738,  1184 => 729,  1176 => 724,  1164 => 715,  1156 => 710,  1128 => 684,  1118 => 683,  1000 => 574,  990 => 573,  962 => 555,  943 => 539,  924 => 523,  904 => 506,  886 => 490,  876 => 489,  795 => 417,  785 => 416,  710 => 351,  695 => 339,  571 => 218,  556 => 205,  546 => 204,  486 => 153,  476 => 152,  454 => 139,  443 => 131,  432 => 123,  416 => 109,  406 => 108,  395 => 104,  385 => 103,  368 => 91,  348 => 73,  338 => 72,  328 => 1199,  325 => 1112,  322 => 1066,  320 => 1038,  317 => 1037,  314 => 942,  311 => 840,  308 => 683,  305 => 573,  302 => 489,  299 => 416,  296 => 204,  294 => 152,  291 => 151,  289 => 108,  285 => 106,  283 => 103,  276 => 98,  273 => 72,  263 => 71,  232 => 49,  225 => 44,  215 => 43,  196 => 31,  190 => 28,  186 => 27,  182 => 26,  178 => 25,  174 => 24,  170 => 23,  164 => 20,  158 => 17,  154 => 16,  151 => 15,  141 => 14,  122 => 8,  111 => 1310,  109 => 1297,  104 => 1294,  102 => 1202,  98 => 1200,  96 => 71,  93 => 70,  91 => 43,  86 => 40,  84 => 14,  76 => 9,  72 => 8,  63 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>{% block title %}Bienvenue!{% endblock %}</title>
  <link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets2/img/logoassu.png')}}\">
  <meta content=\"\" name=\"description\">

  <meta content=\"\" name=\"keywords\">
  
  {% block stylesheets %}
  <!-- Favicons -->
  <link href=\"{{asset('assets2/img/favicon.png')}}\" rel=\"icon\">
  <link href=\"{{asset('assets2/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{asset('assets2/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets2/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets2/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets2/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets2/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{asset('assets2/css/style.css')}}\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  {% endblock %}
</head>

<body>
  {% block header %}
  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"{{asset('assets2/img/logoassu.png')}}\" alt=\"\">
        <span>SecurAssur</span>
      </a>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Acceuil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Sinistres</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Contrats</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#portfolio\">Réclamations</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Profil</a></li>
          
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          <li><a class=\"getstarted scrollto\" href=\"#about\">Démarrer</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  {% endblock %}

  {% block body %}
  {% block Partie1 %}
  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"hero d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 d-flex flex-column justify-content-center\">
          <h1 data-aos=\"fade-up\">Bienvenue sur notre site web SecurAssur.</h1>
          <h2 data-aos=\"fade-up\" data-aos-delay=\"400\">Assurez-vous en quelques clics !</h2>
          <div data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"text-center text-lg-start\">
              <a href=\"#about\" class=\"btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center\">
                <span>Démarrer</span>
                <i class=\"bi bi-arrow-right\"></i>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-6 hero-img\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
          <img src=\"{{asset('assets2/img/hero-img.png')}}\" class=\"img-fluid\" alt=\"\">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  {% endblock %}

  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
    {% block Partie2 %}

    {% endblock %}
    </section><!-- End About Section -->

    {% block Partie3 %}
    <!-- ======= Values Section ======= -->
    <section id=\"values\" class=\"values\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Our Values</h2>
          <p>Odit est perspiciatis laborum et dicta</p>
        </header>

        <div class=\"row\">

          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"box\">
              <img src=\"{{asset('assets2/img/values-1.png')}}\" class=\"img-fluid\" alt=\"\">
              <h3>Ad cupiditate sed est odio</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class=\"col-lg-4 mt-4 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"box\">
              <img src=\"{{asset('assets2/img/values-2.png')}}\" class=\"img-fluid\" alt=\"\">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class=\"col-lg-4 mt-4 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"box\">
              <img src=\"{{asset('assets2/img/values-3.png')}}\" class=\"img-fluid\" alt=\"\">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->
    {% endblock %}
    
    {% block Partie4 %}
    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"bi bi-emoji-smile\"></i>
              <div>
                <span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"bi bi-journal-richtext\" style=\"color: #ee6c20;\"></i>
              <div>
                <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"bi bi-headset\" style=\"color: #15be56;\"></i>
              <div>
                <span data-purecounter-start=\"0\" data-purecounter-end=\"1463\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"bi bi-people\" style=\"color: #bb0852;\"></i>
              <div>
                <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    {% endblock %}
    {% block Partie5 %}
    <!-- ======= Features Section ======= -->
    <section id=\"features\" class=\"features\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Features</h2>
          <p>Laboriosam et omnis fuga quis dolor direda fara</p>
        </header>

        <div class=\"row\">

          <div class=\"col-lg-6\">
            <img src=\"{{asset('assets2/img/features.png')}}\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-6 mt-5 mt-lg-0 d-flex\">
            <div class=\"row align-self-center gy-4\">

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Eos aspernatur rem</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"300\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Facilis neque ipsa</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"400\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Volup amet voluptas</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"500\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Rerum omnis sint</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"600\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Alias possimus</h3>
                </div>
              </div>

              <div class=\"col-md-6\" data-aos=\"zoom-out\" data-aos-delay=\"700\">
                <div class=\"feature-box d-flex align-items-center\">
                  <i class=\"bi bi-check\"></i>
                  <h3>Repellendus mollitia</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

        <!-- Feature Tabs -->
        <div class=\"row feture-tabs\" data-aos=\"fade-up\">
          <div class=\"col-lg-6\">
            <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>

            <!-- Tabs -->
            <ul class=\"nav nav-pills mb-3\">
              <li>
                <a class=\"nav-link active\" data-bs-toggle=\"pill\" href=\"#tab1\">Saepe fuga</a>
              </li>
              <li>
                <a class=\"nav-link\" data-bs-toggle=\"pill\" href=\"#tab2\">Voluptates</a>
              </li>
              <li>
                <a class=\"nav-link\" data-bs-toggle=\"pill\" href=\"#tab3\">Corrupti</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class=\"tab-content\">

              <div class=\"tab-pane fade show active\" id=\"tab1\">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 1 Content -->

              <div class=\"tab-pane fade show\" id=\"tab2\">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 2 Content -->

              <div class=\"tab-pane fade show\" id=\"tab3\">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class=\"d-flex align-items-center mb-2\">
                  <i class=\"bi bi-check2\"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class=\"col-lg-6\">
            <img src=\"{{asset('assets2/img/features-2.png')}}\" class=\"img-fluid\" alt=\"\">
          </div>

        </div><!-- End Feature Tabs -->

        <!-- Feature Icons -->
        <div class=\"row feature-icons\" data-aos=\"fade-up\">
          <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

          <div class=\"row\">

            <div class=\"col-xl-4 text-center\" data-aos=\"fade-right\" data-aos-delay=\"100\">
              <img src=\"{{asset('assets2/img/features-3.png')}}\" class=\"img-fluid p-4\" alt=\"\">
            </div>

            <div class=\"col-xl-8 d-flex content\">
              <div class=\"row align-self-center gy-4\">

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\">
                  <i class=\"ri-line-chart-line\"></i>
                  <div>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <i class=\"ri-stack-line\"></i>
                  <div>
                    <h4>Ullamco laboris nisi</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                  <i class=\"ri-brush-4-line\"></i>
                  <div>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                  <i class=\"ri-magic-line\"></i>
                  <div>
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                  <i class=\"ri-command-line\"></i>
                  <div>
                    <h4>Molestiae dolor</h4>
                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                  </div>
                </div>

                <div class=\"col-md-6 icon-box\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                  <i class=\"ri-radar-line\"></i>
                  <div>
                    <h4>Explicabo consectetur</h4>
                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->
    {% endblock %}
    {% block Partie6 %}
    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Services</h2>
          <p>Veritatis et dolores facere numquam et praesentium</p>
        </header>

        <div class=\"row gy-4\">

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-box blue\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Nesciunt Mete</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"service-box orange\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Eosle Commodi</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"service-box green\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"service-box red\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Asperiores Commodi</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"service-box purple\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Velit Doloremque.</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"700\">
            <div class=\"service-box pink\">
              <i class=\"ri-discuss-line icon\"></i>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href=\"#\" class=\"read-more\"><span>Read More</span> <i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->
    {% endblock %}
    {% block Partie7 %}
    <!-- ======= Pricing Section ======= -->
    <section id=\"pricing\" class=\"pricing\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class=\"row gy-4\" data-aos=\"fade-left\">

          <div class=\"col-lg-3 col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"box\">
              <h3 style=\"color: #07d5c0;\">Free Plan</h3>
              <div class=\"price\"><sup>\$</sup>0<span> / mo</span></div>
              <img src=\"{{asset('assets2/img/pricing-free.png')}}\" class=\"img-fluid\" alt=\"\">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <a href=\"#\" class=\"btn-buy\">Buy Now</a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
            <div class=\"box\">
              <span class=\"featured\">Featured</span>
              <h3 style=\"color: #65c600;\">Starter Plan</h3>
              <div class=\"price\"><sup>\$</sup>19<span> / mo</span></div>
              <img src=\"{{asset('assets2/img/pricing-starter.png')}}\" class=\"img-fluid\" alt=\"\">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <a href=\"#\" class=\"btn-buy\">Buy Now</a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
            <div class=\"box\">
              <h3 style=\"color: #ff901c;\">Business Plan</h3>
              <div class=\"price\"><sup>\$</sup>29<span> / mo</span></div>
              <img src=\"{{asset('assets2/img/pricing-business.png')}}\" class=\"img-fluid\" alt=\"\">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href=\"#\" class=\"btn-buy\">Buy Now</a>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
            <div class=\"box\">
              <h3 style=\"color: #ff0071;\">Ultimate Plan</h3>
              <div class=\"price\"><sup>\$</sup>49<span> / mo</span></div>
              <img src=\"{{asset('assets2/img/pricing-ultimate.png')}}\" class=\"img-fluid\" alt=\"\">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href=\"#\" class=\"btn-buy\">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Pricing Section -->
    {% endblock %}
    {% block Partie8 %}
    <!-- ======= F.A.Q Section ======= -->
    <section id=\"faq\" class=\"faq\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class=\"row\">
          <div class=\"col-lg-6\">
            <!-- F.A.Q List 1-->
            <div class=\"accordion accordion-flush\" id=\"faqlist1\">
              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq-content-1\">
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h2>
                <div id=\"faq-content-1\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist1\">
                  <div class=\"accordion-body\">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div>

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq-content-2\">
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h2>
                <div id=\"faq-content-2\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist1\">
                  <div class=\"accordion-body\">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq-content-3\">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h2>
                <div id=\"faq-content-3\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist1\">
                  <div class=\"accordion-body\">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class=\"col-lg-6\">

            <!-- F.A.Q List 2-->
            <div class=\"accordion accordion-flush\" id=\"faqlist2\">

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq2-content-1\">
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h2>
                <div id=\"faq2-content-1\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist2\">
                  <div class=\"accordion-body\">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq2-content-2\">
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h2>
                <div id=\"faq2-content-2\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist2\">
                  <div class=\"accordion-body\">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq2-content-3\">
                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                  </button>
                </h2>
                <div id=\"faq2-content-3\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqlist2\">
                  <div class=\"accordion-body\">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->
    {% endblock %}
    {% block Partie9 %}

    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Portfolio</h2>
          <p>Check our latest work</p>
        </header>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">App</li>
              <li data-filter=\".filter-card\">Card</li>
              <li data-filter=\".filter-web\">Web</li>
            </ul>
          </div>
        </div>

        <div class=\"row gy-4 portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('assets2/img/portfolio/portfolio-1.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 1</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('assets2/img/portfolio/portfolio-1.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"App 1\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('assets2/img/portfolio/portfolio-2.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('assets2/img/portfolio/portfolio-2.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Web 3\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('assets2/img/portfolio/portfolio-3.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 2</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('assets2/img/portfolio/portfolio-3.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"App 2\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('assets2/img/portfolio/portfolio-4.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('assets2/img/portfolio/portfolio-4.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Card 2\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('assets2/img/portfolio/portfolio-5.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('assets2/img/portfolio/portfolio-5.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Web 2\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('assets2/img/portfolio/portfolio-6.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 3</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('assets2/img/portfolio/portfolio-6.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"App 3\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('assets2/img/portfolio/portfolio-7.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('assets2/img/portfolio/portfolio-7.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Card 1\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('assets2/img/portfolio/portfolio-8.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('assets2/img/portfolio/portfolio-8.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Card 3\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('assets2/img/portfolio/portfolio-9.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('assets2/img/portfolio/portfolio-9.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfokio-lightbox\" title=\"Web 3\"><i class=\"bi bi-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bi bi-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->
    {% endblock %}
    {% block Partie10 %}
    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"{{asset('assets2/img/testimonials/testimonials-1.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"{{asset('assets2/img/testimonials/testimonials-2.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"{{asset('assets2/img/testimonials/testimonials-3.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"{{asset('assets2/img/testimonials/testimonials-4.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i><i class=\"bi bi-star-fill\"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class=\"profile mt-auto\">
                  <img src=\"{{asset('assets2/img/testimonials/testimonials-5.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->
    {% endblock %}
    {% block Partie11 %}
    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>

        <div class=\"row gy-4\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset('assets2/img/team/team-1.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset('assets2/img/team/team-2.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset('assets2/img/team/team-3.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset('assets2/img/team/team-4.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->
    {% endblock %}

    {% block Partie12 %}
    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Our Clients</h2>
          <p>Temporibus omnis officia</p>
        </header>

        <div class=\"clients-slider swiper\">
          <div class=\"swiper-wrapper align-items-center\">
            <div class=\"swiper-slide\"><img src=\"{{asset('assets2/img/clients/client-1.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset('assets2/img/clients/client-2.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset('assets2/img/clients/client-3.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset('assets2/img/clients/client-4.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset('assets2/img/clients/client-5.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset('assets2/img/clients/client-6.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset('assets2/img/clients/client-7.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset('assets2/img/clients/client-8.png')}}\" class=\"img-fluid\" alt=\"\"></div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->
    {% endblock %}
    {% block Partie13 %}
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id=\"recent-blog-posts\" class=\"recent-blog-posts\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class=\"row\">

          <div class=\"col-lg-4\">
            <div class=\"post-box\">
              <div class=\"post-img\"><img src=\"{{asset('assets2/img/blog/blog-1.jpg')}}\" class=\"img-fluid\" alt=\"\"></div>
              <span class=\"post-date\">Tue, September 15</span>
              <h3 class=\"post-title\">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
              <a href=\"blog-single.html\" class=\"readmore stretched-link mt-auto\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4\">
            <div class=\"post-box\">
              <div class=\"post-img\"><img src=\"{{asset('assets2/img/blog/blog-2.jpg')}}\" class=\"img-fluid\" alt=\"\"></div>
              <span class=\"post-date\">Fri, August 28</span>
              <h3 class=\"post-title\">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <a href=\"blog-single.html\" class=\"readmore stretched-link mt-auto\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4\">
            <div class=\"post-box\">
              <div class=\"post-img\"><img src=\"{{asset('assets2/img/blog/blog-3.jpg')}}\" class=\"img-fluid\" alt=\"\"></div>
              <span class=\"post-date\">Mon, July 11</span>
              <h3 class=\"post-title\">Quia assumenda est et veritatis aut quae</h3>
              <a href=\"blog-single.html\" class=\"readmore stretched-link mt-auto\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->
    {% endblock %}
    {% block Partie14 %}
    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">

      <div class=\"container\" data-aos=\"fade-up\">

        <header class=\"section-header\">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class=\"row gy-4\">

          <div class=\"col-lg-6\">

            <div class=\"row gy-4\">
              <div class=\"col-md-6\">
                <div class=\"info-box\">
                  <i class=\"bi bi-geo-alt\"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"info-box\">
                  <i class=\"bi bi-telephone\"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"info-box\">
                  <i class=\"bi bi-envelope\"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"info-box\">
                  <i class=\"bi bi-clock\"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class=\"col-lg-6\">
            <form action=\"forms/contact.php\" method=\"post\" class=\"php-email-form\">
              <div class=\"row gy-4\">

                <div class=\"col-md-6\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" required>
                </div>

                <div class=\"col-md-6 \">
                  <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Your Email\" required>
                </div>

                <div class=\"col-md-12\">
                  <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\" required>
                </div>

                <div class=\"col-md-12\">
                  <textarea class=\"form-control\" name=\"message\" rows=\"6\" placeholder=\"Message\" required></textarea>
                </div>

                <div class=\"col-md-12 text-center\">
                  <div class=\"loading\">Loading</div>
                  <div class=\"error-message\"></div>
                  <div class=\"sent-message\">Your message has been sent. Thank you!</div>

                  <button type=\"submit\">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->
    {% endblock %}
    {% endblock %}

  </main><!-- End #main -->
  {% block footer%}
  <!-- ======= Footer ======= -->
  <footer id=\"footer\" class=\"footer\">

    <div class=\"footer-newsletter\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-12 text-center\">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class=\"col-lg-6\">
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <div class=\"col-lg-5 col-md-12 footer-info\">
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
              <img src=\"{{asset('assets2/img/logo.png')}}\" alt=\"\">
              <span>FlexStart</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class=\"social-links mt-3\">
              <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
              <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
              <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
              <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-2 col-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Home</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">About us</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Services</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-6 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bi bi-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
{% endblock %}

</body>

{% block javascripts %}
  <!-- Vendor JS Files -->
  <script src=\"{{asset('assets2/vendor/purecounter/purecounter_vanilla.js')}}\"></script>
  <script src=\"{{asset('assets2/vendor/aos/aos.js')}}\"></script>
  <script src=\"{{asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('assets2/vendor/glightbox/js/glightbox.min.js')}}\"></script>
  <script src=\"{{asset('assets2/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
  <script src=\"{{asset('assets2/vendor/swiper/swiper-bundle.min.js')}}\"></script>
  <script src=\"{{asset('assets2/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{asset('assets2/js/main.js')}}\"></script>
{% endblock %}

</html>", "front_base.html.twig", "C:\\Users\\HD\\projetPi\\templates\\front_base.html.twig");
    }
}
