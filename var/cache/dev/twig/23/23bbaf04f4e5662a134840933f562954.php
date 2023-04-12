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

/* patient/insert_patient.html.twig */
class __TwigTemplate_80423f7fa70d02b389a6d10a46c9f05a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/insert_patient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/insert_patient.html.twig"));

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_patient");
        echo "\" method=\"post\">
      <!-- ========== tab components start ========== -->
      <section class=\"tab-components\">
        <div class=\"container-fluid\">
          <!-- ========== title-wrapper start ========== -->
          <div class=\"title-wrapper pt-30\">
            <div class=\"row align-items-center\">
              <div class=\"col-md-6\">
                <div class=\"title mb-30\">
                  <h2>Nuovo Paziente</h2>
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
                        Nuovo Paziente
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
                  <h6 class=\"mb-25\">Anagrafica</h6>
                  <div class=\"input-style-1\">
                    <label>Cognome</label>
                    <input type=\"text\"  name=\"surname\" placeholder=\"\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Nome</label>
                    <input type=\"text\" name=\"name\" placeholder=\"\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Data di nascita</label>
                    <input type=\"date\" name=\"birthday\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Città di nascita</label>
                    <input type=\"text\"  name=\"birthcity\" />
                  </div>
                  <div class=\"select-style-1\">
                    <label>Genere</label>
                    <div class=\"select-position\">
                      <select  name=\"gender\">
                        <option value=\"M\">Maschile</option>
                        <option value=\"F\">Femminile</option>
                      </select>
                    </div>
                  </div>
                   <div class=\"input-style-1\">
                    <label>Codice Fiscale</label>
                    <input type=\"text\"  name=\"fiscalCode\" />
                  </div>
                </div>
              </div>
              <!-- end col -->
              <div class=\"col-lg-6\">
                <!-- ======= textarea style start ======= -->
                <div class=\"card-style mb-30\">
                  <h6 class=\"mb-25\">Informazioni di contatto</h6>
                  <div class=\"input-style-1\">
                    <label>Città di Residenza</label>
                    <input type=\"text\"  name=\"cityOfResidence\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Via e numero civico</label>
                    <input type=\"text\" name=\"street\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Numero di telefono</label>
                    <input type=\"text\"  name=\"phone\" />
                  </div>
                 <div class=\"input-style-1\">
                    <label>Email</label>
                    <input type=\"text\"  name=\"email\" />
                  </div>
                  
                  <!-- end textarea -->
                </div>
                <!-- ======= textarea style end ======= -->

                <input class=\"main-btn primary-btn rounded-full btn-hover\" type=\"submit\" value=\"Salva Nuovo Paziente\">
                    
                
               
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
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dynamic-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullcalendar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jvectormap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/world-merc.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/polyfill.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
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
        return "patient/insert_patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 215,  303 => 214,  299 => 213,  295 => 212,  291 => 211,  287 => 210,  283 => 209,  279 => 208,  275 => 207,  113 => 48,  85 => 23,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  53 => 9,  43 => 1,);
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
    <form action=\"{{ path('add_patient') }}\" method=\"post\">
      <!-- ========== tab components start ========== -->
      <section class=\"tab-components\">
        <div class=\"container-fluid\">
          <!-- ========== title-wrapper start ========== -->
          <div class=\"title-wrapper pt-30\">
            <div class=\"row align-items-center\">
              <div class=\"col-md-6\">
                <div class=\"title mb-30\">
                  <h2>Nuovo Paziente</h2>
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
                        Nuovo Paziente
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
                  <h6 class=\"mb-25\">Anagrafica</h6>
                  <div class=\"input-style-1\">
                    <label>Cognome</label>
                    <input type=\"text\"  name=\"surname\" placeholder=\"\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Nome</label>
                    <input type=\"text\" name=\"name\" placeholder=\"\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Data di nascita</label>
                    <input type=\"date\" name=\"birthday\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Città di nascita</label>
                    <input type=\"text\"  name=\"birthcity\" />
                  </div>
                  <div class=\"select-style-1\">
                    <label>Genere</label>
                    <div class=\"select-position\">
                      <select  name=\"gender\">
                        <option value=\"M\">Maschile</option>
                        <option value=\"F\">Femminile</option>
                      </select>
                    </div>
                  </div>
                   <div class=\"input-style-1\">
                    <label>Codice Fiscale</label>
                    <input type=\"text\"  name=\"fiscalCode\" />
                  </div>
                </div>
              </div>
              <!-- end col -->
              <div class=\"col-lg-6\">
                <!-- ======= textarea style start ======= -->
                <div class=\"card-style mb-30\">
                  <h6 class=\"mb-25\">Informazioni di contatto</h6>
                  <div class=\"input-style-1\">
                    <label>Città di Residenza</label>
                    <input type=\"text\"  name=\"cityOfResidence\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Via e numero civico</label>
                    <input type=\"text\" name=\"street\" />
                  </div>
                  <div class=\"input-style-1\">
                    <label>Numero di telefono</label>
                    <input type=\"text\"  name=\"phone\" />
                  </div>
                 <div class=\"input-style-1\">
                    <label>Email</label>
                    <input type=\"text\"  name=\"email\" />
                  </div>
                  
                  <!-- end textarea -->
                </div>
                <!-- ======= textarea style end ======= -->

                <input class=\"main-btn primary-btn rounded-full btn-hover\" type=\"submit\" value=\"Salva Nuovo Paziente\">
                    
                
               
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
", "patient/insert_patient.html.twig", "/Users/paolo/Desktop/progetti_studenti/ecampus/tesi/2023/Giuseppe_borzumati/patient_manager/templates/patient/insert_patient.html.twig");
    }
}
