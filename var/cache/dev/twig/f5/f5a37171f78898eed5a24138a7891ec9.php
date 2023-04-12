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

/* medicalExamination/mod_medical_examination.html.twig */
class __TwigTemplate_a27641f7f5a29204b07830889f541fe9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicalExamination/mod_medical_examination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicalExamination/mod_medical_examination.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link
      rel=\"shortcut icon\"
      href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.svg"), "html", null, true);
        echo "\"
      type=\"image/x-icon\"
    />
    <title>Form Elements | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lineicons.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/materialdesignicons.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fullcalendar.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
     ";
        // line 23
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("navbar_component");
        echo "
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class=\"main-wrapper\">
      <!-- ========== header start ========== -->
      <header class=\"header\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-5 col-md-5 col-6\">
              <div class=\"header-left d-flex align-items-center\">
                <div class=\"menu-toggle-btn mr-20\">
                  <button
                    id=\"menu-toggle\"
                    class=\"main-btn primary-btn btn-hover\"
                  >
                    <i class=\"lni lni-chevron-left me-2\"></i> Menu
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->
    <form action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify_medical_examination");
        echo "\" method=\"post\">
      <!-- ========== tab components start ========== -->
      <section class=\"tab-components\">
        <div class=\"container-fluid\">
          <!-- ========== title-wrapper start ========== -->
          <div class=\"title-wrapper pt-30\">
            <div class=\"row align-items-center\">
              <div class=\"col-md-6\">
                <div class=\"title mb-30\">
                  <h2>Modifica la visita</h2>
                </div>
              </div>
              <!-- end col -->
              <div class=\"col-md-6\">
                <div class=\"breadcrumb-wrapper mb-30\">
                  <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"#0\">Dashboard</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        Modifica Visita
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== form-elements-wrapper start ========== -->
          <div class=\"form-elements-wrapper\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <!-- input style start -->
               <div class=\"card-style mb-30\">
                  <h6 class=\"mb-25\">Anagrafica Paziente</h6>
                  
                  <div class=\"input-style-1\">
                    <label>Cognome</label>
                    <input type=\"text\"  value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 91, $this->source); })()), "surname", [], "any", false, false, false, 91), "html", null, true);
        echo "\" name=\"surname\" placeholder=\"\" readonly/>
                  </div>
                  <div class=\"input-style-1\">
                    <label>Nome</label>
                    <input type=\"text\" name=\"name\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 95, $this->source); })()), "name", [], "any", false, false, false, 95), "html", null, true);
        echo "\" placeholder=\"\" readonly/>
                  </div>
                  <div class=\"input-style-1\">
                    <label>Data di nascita</label>
                    <input type=\"text\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 99, $this->source); })()), "birthDate", [], "any", false, false, false, 99), "d-m-Y"), "html", null, true);
        echo "\" name=\"birthday\" readonly/>
                  </div>
                  <div class=\"input-style-1\">
                    <label>Città di nascita</label>
                    <input type=\"text\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 103, $this->source); })()), "birthPlace", [], "any", false, false, false, 103), "html", null, true);
        echo "\" name=\"birthcity\" readonly/>
                  </div>
                  
                   <div class=\"input-style-1\">
                    <label>Codice Fiscale</label>
                    <input type=\"text\"  value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 108, $this->source); })()), "fiscalCode", [], "any", false, false, false, 108), "html", null, true);
        echo "\" name=\"fiscalCode\" readonly/>
                  </div>
                </div>
              </div>
              <!-- end col -->
              <div class=\"col-lg-6\">
                <!-- ======= textarea style start ======= -->
                <div class=\"card-style mb-30\">
                  <h6 class=\"mb-25\">Informazioni sulla visita</h6>
                   <div class=\"select-style-1\">
                    <label>Tipologia di istanza</label>
                    <div class=\"select-position\">
                      <select  name=\"type\">
                        <option value=\"Conferma Rinnovo\" ";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 121, $this->source); })()), "type", [], "any", false, false, false, 121) == "Conferma Rinnovo")) {
            echo " selected ";
        }
        echo ">Conferma Rinnovo</option>
                        <option value=\"Conseguimento\" ";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 122, $this->source); })()), "type", [], "any", false, false, false, 122) == "Conseguimento")) {
            echo " selected ";
        }
        echo ">Conseguimento</option>
                        <option value=\"Revisione\" ";
        // line 123
        if ((twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 123, $this->source); })()), "type", [], "any", false, false, false, 123) == "Revisione")) {
            echo " selected ";
        }
        echo ">Revisione</option>
                        <option value=\"Riclassificazione\" ";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 124, $this->source); })()), "type", [], "any", false, false, false, 124) == "Riclassificazione")) {
            echo " selected ";
        }
        echo ">Riclassificazione</option>
                      </select>
                    </div>
                  </div>
                   <div class=\"input-style-1\">
                    <label>Motivazione Istanza</label>
                    <textarea name=\"reason\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 130, $this->source); })()), "reason", [], "any", false, false, false, 130), "html", null, true);
        echo "\" rows=\"5\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 130, $this->source); })()), "reason", [], "any", false, false, false, 130), "html", null, true);
        echo "</textarea>
                  </div>
                  <div class=\"input-style-1\">
                    <label>Numero di protoccolo</label>
                    <input type=\"text\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 134, $this->source); })()), "protocolNumber", [], "any", false, false, false, 134), "html", null, true);
        echo "\"  name=\"protocol_number\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Data Protocollo</label>
                    <input type=\"date\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 138, $this->source); })()), "protocolDate", [], "any", false, false, false, 138), "Y-m-d"), "html", null, true);
        echo "\" name=\"protocol_date\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Data Visita</label>
                    <input type=\"date\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 142, $this->source); })()), "dateOfExamination", [], "any", false, false, false, 142), "Y-m-d"), "html", null, true);
        echo "\" name=\"visit_date\" />
                  </div>
                  <div class=\"select-style-1\">
                    <label>Esito Visita</label>
                      <div class=\"select-position\">
                        <select  name=\"outcome\">
                          <option value=\"-----\" ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 148, $this->source); })()), "resultOfExamination", [], "any", false, false, false, 148) == "-----")) {
            echo " selected ";
        }
        echo ">-----</option>
                          <option value=\"Idoneo\" ";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 149, $this->source); })()), "resultOfExamination", [], "any", false, false, false, 149) == "Idoneo")) {
            echo " selected ";
        }
        echo ">Idoneo</option>
                          <option value=\"Non idoneo temporaneamente\" ";
        // line 150
        if ((twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 150, $this->source); })()), "resultOfExamination", [], "any", false, false, false, 150) == "Non idoneo temporaneamente")) {
            echo " selected ";
        }
        echo ">Non idoneo temporaneamente</option>
                          <option value=\"Non idoneo permanente\" ";
        // line 151
        if ((twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 151, $this->source); })()), "resultOfExamination", [], "any", false, false, false, 151) == "Non idoneo permanente")) {
            echo " selected ";
        }
        echo ">Non idoneo permanente</option>
                          <option value=\"Esente CML\" ";
        // line 152
        if ((twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 152, $this->source); })()), "resultOfExamination", [], "any", false, false, false, 152) == "Esente CML")) {
            echo " selected ";
        }
        echo ">Esente CML</option>
                        </select>
                      </div>
                  </div>
                  
                   <input type=\"hidden\" name=\"medical_examination_id\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medical_examination"]) || array_key_exists("medical_examination", $context) ? $context["medical_examination"] : (function () { throw new RuntimeError('Variable "medical_examination" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157), "html", null, true);
        echo "\">
                   
                </div>
                <!-- ======= textarea style end ======= -->

                <input class=\"main-btn primary-btn rounded-full btn-hover\" type=\"submit\" value=\"Salva Visita\">
                    
                
               
              </div>
              
              <!-- end col -->
            </div>
            
            <!-- end row -->
          </div>
          
          <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
        
      </section>
     
    </form>
      <!-- ========== tab components end ========== -->

      <!-- ========== footer start =========== -->
      <footer class=\"footer\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-md-6 order-last order-md-first\">
              <div class=\"copyright text-center text-md-start\">
                <p class=\"text-sm\">
                  Designed and Developed by
                  <a
                    href=\"https://plainadmin.com\"
                    rel=\"nofollow\"
                    target=\"_blank\"
                  >
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class=\"col-md-6\">
              <div
                class=\"
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                \"
              >
                <a href=\"#0\" class=\"text-sm\">Term & Conditions</a>
                <a href=\"#0\" class=\"text-sm ml-15\">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dynamic-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullcalendar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jvectormap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/world-merc.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/polyfill.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "medicalExamination/mod_medical_examination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 232,  397 => 231,  393 => 230,  389 => 229,  385 => 228,  381 => 227,  377 => 226,  373 => 225,  369 => 224,  299 => 157,  289 => 152,  283 => 151,  277 => 150,  271 => 149,  265 => 148,  256 => 142,  249 => 138,  242 => 134,  233 => 130,  222 => 124,  216 => 123,  210 => 122,  204 => 121,  188 => 108,  180 => 103,  173 => 99,  166 => 95,  159 => 91,  113 => 48,  85 => 23,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link
      rel=\"shortcut icon\"
      href=\"{{ asset('assets/images/favicon.svg') }}\"
      type=\"image/x-icon\"
    />
    <title>Form Elements | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lineicons.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/materialdesignicons.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fullcalendar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\" />
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
     {{ component('navbar_component') }}
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class=\"main-wrapper\">
      <!-- ========== header start ========== -->
      <header class=\"header\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-5 col-md-5 col-6\">
              <div class=\"header-left d-flex align-items-center\">
                <div class=\"menu-toggle-btn mr-20\">
                  <button
                    id=\"menu-toggle\"
                    class=\"main-btn primary-btn btn-hover\"
                  >
                    <i class=\"lni lni-chevron-left me-2\"></i> Menu
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->
    <form action=\"{{ path('modify_medical_examination') }}\" method=\"post\">
      <!-- ========== tab components start ========== -->
      <section class=\"tab-components\">
        <div class=\"container-fluid\">
          <!-- ========== title-wrapper start ========== -->
          <div class=\"title-wrapper pt-30\">
            <div class=\"row align-items-center\">
              <div class=\"col-md-6\">
                <div class=\"title mb-30\">
                  <h2>Modifica la visita</h2>
                </div>
              </div>
              <!-- end col -->
              <div class=\"col-md-6\">
                <div class=\"breadcrumb-wrapper mb-30\">
                  <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">
                        <a href=\"#0\">Dashboard</a>
                      </li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        Modifica Visita
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== form-elements-wrapper start ========== -->
          <div class=\"form-elements-wrapper\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <!-- input style start -->
               <div class=\"card-style mb-30\">
                  <h6 class=\"mb-25\">Anagrafica Paziente</h6>
                  
                  <div class=\"input-style-1\">
                    <label>Cognome</label>
                    <input type=\"text\"  value=\"{{ patient.surname }}\" name=\"surname\" placeholder=\"\" readonly/>
                  </div>
                  <div class=\"input-style-1\">
                    <label>Nome</label>
                    <input type=\"text\" name=\"name\" value=\"{{ patient.name }}\" placeholder=\"\" readonly/>
                  </div>
                  <div class=\"input-style-1\">
                    <label>Data di nascita</label>
                    <input type=\"text\" value=\"{{ patient.birthDate|date('d-m-Y') }}\" name=\"birthday\" readonly/>
                  </div>
                  <div class=\"input-style-1\">
                    <label>Città di nascita</label>
                    <input type=\"text\" value=\"{{ patient.birthPlace }}\" name=\"birthcity\" readonly/>
                  </div>
                  
                   <div class=\"input-style-1\">
                    <label>Codice Fiscale</label>
                    <input type=\"text\"  value=\"{{ patient.fiscalCode }}\" name=\"fiscalCode\" readonly/>
                  </div>
                </div>
              </div>
              <!-- end col -->
              <div class=\"col-lg-6\">
                <!-- ======= textarea style start ======= -->
                <div class=\"card-style mb-30\">
                  <h6 class=\"mb-25\">Informazioni sulla visita</h6>
                   <div class=\"select-style-1\">
                    <label>Tipologia di istanza</label>
                    <div class=\"select-position\">
                      <select  name=\"type\">
                        <option value=\"Conferma Rinnovo\" {% if medical_examination.type == 'Conferma Rinnovo' %} selected {% endif %}>Conferma Rinnovo</option>
                        <option value=\"Conseguimento\" {% if medical_examination.type == 'Conseguimento' %} selected {% endif %}>Conseguimento</option>
                        <option value=\"Revisione\" {% if medical_examination.type == 'Revisione' %} selected {% endif %}>Revisione</option>
                        <option value=\"Riclassificazione\" {% if medical_examination.type == 'Riclassificazione' %} selected {% endif %}>Riclassificazione</option>
                      </select>
                    </div>
                  </div>
                   <div class=\"input-style-1\">
                    <label>Motivazione Istanza</label>
                    <textarea name=\"reason\" value=\"{{ medical_examination.reason }}\" rows=\"5\">{{ medical_examination.reason }}</textarea>
                  </div>
                  <div class=\"input-style-1\">
                    <label>Numero di protoccolo</label>
                    <input type=\"text\" value=\"{{ medical_examination.protocolNumber }}\"  name=\"protocol_number\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Data Protocollo</label>
                    <input type=\"date\" value=\"{{ medical_examination.protocolDate|date('Y-m-d') }}\" name=\"protocol_date\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Data Visita</label>
                    <input type=\"date\" value=\"{{ medical_examination.dateOfExamination|date('Y-m-d') }}\" name=\"visit_date\" />
                  </div>
                  <div class=\"select-style-1\">
                    <label>Esito Visita</label>
                      <div class=\"select-position\">
                        <select  name=\"outcome\">
                          <option value=\"-----\" {% if medical_examination.resultOfExamination == '-----' %} selected {% endif %}>-----</option>
                          <option value=\"Idoneo\" {% if medical_examination.resultOfExamination == 'Idoneo' %} selected {% endif %}>Idoneo</option>
                          <option value=\"Non idoneo temporaneamente\" {% if medical_examination.resultOfExamination == 'Non idoneo temporaneamente' %} selected {% endif %}>Non idoneo temporaneamente</option>
                          <option value=\"Non idoneo permanente\" {% if medical_examination.resultOfExamination == 'Non idoneo permanente' %} selected {% endif %}>Non idoneo permanente</option>
                          <option value=\"Esente CML\" {% if medical_examination.resultOfExamination == 'Esente CML' %} selected {% endif %}>Esente CML</option>
                        </select>
                      </div>
                  </div>
                  
                   <input type=\"hidden\" name=\"medical_examination_id\" value=\"{{ medical_examination.id }}\">
                   
                </div>
                <!-- ======= textarea style end ======= -->

                <input class=\"main-btn primary-btn rounded-full btn-hover\" type=\"submit\" value=\"Salva Visita\">
                    
                
               
              </div>
              
              <!-- end col -->
            </div>
            
            <!-- end row -->
          </div>
          
          <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
        
      </section>
     
    </form>
      <!-- ========== tab components end ========== -->

      <!-- ========== footer start =========== -->
      <footer class=\"footer\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-md-6 order-last order-md-first\">
              <div class=\"copyright text-center text-md-start\">
                <p class=\"text-sm\">
                  Designed and Developed by
                  <a
                    href=\"https://plainadmin.com\"
                    rel=\"nofollow\"
                    target=\"_blank\"
                  >
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class=\"col-md-6\">
              <div
                class=\"
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                \"
              >
                <a href=\"#0\" class=\"text-sm\">Term & Conditions</a>
                <a href=\"#0\" class=\"text-sm ml-15\">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/Chart.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/dynamic-pie-chart.js') }}\"></script>
    <script src=\"{{ asset('assets/js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/fullcalendar.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jvectormap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/world-merc.js') }}\"></script>
    <script src=\"{{ asset('assets/js/polyfill.js') }}\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
  </body>
</html>
", "medicalExamination/mod_medical_examination.html.twig", "/Users/paolo/Desktop/progetti_studenti/ecampus/tesi/2023/Giuseppe_borzumati/patient_manager/templates/medicalExamination/mod_medical_examination.html.twig");
    }
}
