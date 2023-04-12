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

/* patient/patients_list.html.twig */
class __TwigTemplate_674dd71c321cc5050cc5041e8e487f1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/patients_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/patients_list.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link
      rel=\"shortcut icon\"
      href=\"assets/images/favicon.svg\"
      type=\"image/x-icon\"
    />
    <title>Tables | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/lineicons.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/materialdesignicons.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/fullcalendar.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/main.css\" />
  </head>
  <body>
  
   
    <!-- ======== sidebar-nav start =========== -->
     ";
        // line 25
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
                <div class=\"header-search d-none d-md-flex\">
                  <form action=\"#\">
                    <input type=\"text\" placeholder=\"Search...\" />
                    <button><i class=\"lni lni-search-alt\"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== table components start ========== -->
      <section class=\"table-components\">
        <div class=\"container-fluid\">
          <!-- ========== title-wrapper start ========== -->
          <div class=\"title-wrapper pt-30\">
            <div class=\"row align-items-center\">
              <div class=\"col-md-6\">
                <div class=\"title mb-30\">
                  <h2>Pazienti</h2>
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
                        Pazienti
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

          <!-- ========== tables-wrapper start ========== -->
          <div class=\"tables-wrapper\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"card-style mb-30\">
                  <div class=\"table-wrapper table-responsive\">
                    <table class=\"table\">
                      <thead>
                        <tr>
                          <th><h6>Cognome e Nome</h6></th>
                          <th><h6>Codice Fiscale</h6></th>
                          <th><h6>Data di Nascita</h6></th>
                          <th><h6>Luogo di Nascita</h6></th>
                          <th><h6>Elimina</h6></th>
                          <th><h6>Prenota<br>visita</h6></th>
                          <th><h6>Visite<br> prenotate</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                         ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            echo " 
                        <tr>
                          <td class=\"min-width\">
                            
                              <div class=\"lead-text\">
                                <p>";
            // line 115
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["patient"], "getSurname", [], "method", false, false, false, 115) . "  ") . twig_get_attribute($this->env, $this->source, $context["patient"], "getName", [], "method", false, false, false, 115)), "html", null, true);
            echo "</p>
                              </div>
                            </div>
                          </td>
                          <td class=\"min-width\">
                            <p>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "getFiscalCode", [], "method", false, false, false, 120), "html", null, true);
            echo "</p>
                          </td>
                          <td class=\"min-width\">
                            <p>";
            // line 123
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "getBirthDate", [], "method", false, false, false, 123), "d-m-Y"), "html", null, true);
            echo "</p>
                          </td>
                          <td class=\"min-width\">
                            <p>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "getBirthPlace", [], "method", false, false, false, 126), "html", null, true);
            echo "</p>
                          </td>
                          <td>
                            <div class=\"action\">
                             <a href=\"";
            // line 130
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_patient");
            echo "?id_patient=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "getId", [], "method", false, false, false, 130), "html", null, true);
            echo "\">
                                <button  class=\"text-danger\">
                                  <i  class=\"lni lni-trash-can\"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                          <td>
                            <div class=\"action\">
                             <a href=\"";
            // line 139
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insert_medical_examination");
            echo "?id_patient=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "getId", [], "method", false, false, false, 139), "html", null, true);
            echo "\">
                                <button  class=\"\">
                                  <i  class=\"lni lni-add-files\"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                           <td>
                            <div class=\"action\">
                             <a href=\"";
            // line 148
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medical_examinations_patient");
            echo "?id_patient=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "getId", [], "method", false, false, false, 148), "html", null, true);
            echo "\">
                               <button  class=\"\">
                                  <i  class=\"lni lni-list\"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                          
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo " 
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

            
          <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== table components end ========== -->

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
    <script src=\"assets/js/bootstrap.bundle.min.js\"></script>
    <script src=\"assets/js/Chart.min.js\"></script>
    <script src=\"assets/js/dynamic-pie-chart.js\"></script>
    <script src=\"assets/js/moment.min.js\"></script>
    <script src=\"assets/js/fullcalendar.js\"></script>
    <script src=\"assets/js/jvectormap.min.js\"></script>
    <script src=\"assets/js/world-merc.js\"></script>
    <script src=\"assets/js/polyfill.js\"></script>
    <script src=\"assets/js/main.js\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "patient/patients_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 157,  222 => 148,  208 => 139,  194 => 130,  187 => 126,  181 => 123,  175 => 120,  167 => 115,  157 => 110,  69 => 25,  43 => 1,);
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
      href=\"assets/images/favicon.svg\"
      type=\"image/x-icon\"
    />
    <title>Tables | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/lineicons.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/materialdesignicons.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/fullcalendar.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/main.css\" />
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
                <div class=\"header-search d-none d-md-flex\">
                  <form action=\"#\">
                    <input type=\"text\" placeholder=\"Search...\" />
                    <button><i class=\"lni lni-search-alt\"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== table components start ========== -->
      <section class=\"table-components\">
        <div class=\"container-fluid\">
          <!-- ========== title-wrapper start ========== -->
          <div class=\"title-wrapper pt-30\">
            <div class=\"row align-items-center\">
              <div class=\"col-md-6\">
                <div class=\"title mb-30\">
                  <h2>Pazienti</h2>
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
                        Pazienti
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

          <!-- ========== tables-wrapper start ========== -->
          <div class=\"tables-wrapper\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"card-style mb-30\">
                  <div class=\"table-wrapper table-responsive\">
                    <table class=\"table\">
                      <thead>
                        <tr>
                          <th><h6>Cognome e Nome</h6></th>
                          <th><h6>Codice Fiscale</h6></th>
                          <th><h6>Data di Nascita</h6></th>
                          <th><h6>Luogo di Nascita</h6></th>
                          <th><h6>Elimina</h6></th>
                          <th><h6>Prenota<br>visita</h6></th>
                          <th><h6>Visite<br> prenotate</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                         {% for patient in patients %} 
                        <tr>
                          <td class=\"min-width\">
                            
                              <div class=\"lead-text\">
                                <p>{{ \"#{patient.getSurname()}  #{patient.getName()}\" }}</p>
                              </div>
                            </div>
                          </td>
                          <td class=\"min-width\">
                            <p>{{ \"#{patient.getFiscalCode()}\" }}</p>
                          </td>
                          <td class=\"min-width\">
                            <p>{{ patient.getBirthDate() | date('d-m-Y') }}</p>
                          </td>
                          <td class=\"min-width\">
                            <p>{{ \"#{patient.getBirthPlace()}\" }}</p>
                          </td>
                          <td>
                            <div class=\"action\">
                             <a href=\"{{ path('remove_patient') }}?id_patient={{ patient.getId() }}\">
                                <button  class=\"text-danger\">
                                  <i  class=\"lni lni-trash-can\"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                          <td>
                            <div class=\"action\">
                             <a href=\"{{ path('insert_medical_examination') }}?id_patient={{ patient.getId() }}\">
                                <button  class=\"\">
                                  <i  class=\"lni lni-add-files\"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                           <td>
                            <div class=\"action\">
                             <a href=\"{{ path('medical_examinations_patient') }}?id_patient={{ patient.getId() }}\">
                               <button  class=\"\">
                                  <i  class=\"lni lni-list\"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                          
                        </tr>
                        {% endfor %} 
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

            
          <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== table components end ========== -->

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
    <script src=\"assets/js/bootstrap.bundle.min.js\"></script>
    <script src=\"assets/js/Chart.min.js\"></script>
    <script src=\"assets/js/dynamic-pie-chart.js\"></script>
    <script src=\"assets/js/moment.min.js\"></script>
    <script src=\"assets/js/fullcalendar.js\"></script>
    <script src=\"assets/js/jvectormap.min.js\"></script>
    <script src=\"assets/js/world-merc.js\"></script>
    <script src=\"assets/js/polyfill.js\"></script>
    <script src=\"assets/js/main.js\"></script>
  </body>
</html>
", "patient/patients_list.html.twig", "/Users/paolo/Desktop/progetti_studenti/ecampus/tesi/2023/Giuseppe_borzumati/patient_manager/templates/patient/patients_list.html.twig");
    }
}
