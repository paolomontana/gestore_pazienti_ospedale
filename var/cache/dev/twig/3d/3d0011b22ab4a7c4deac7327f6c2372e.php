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

/* medicalExamination/medical_examination_list.html.twig */
class __TwigTemplate_e78590a8b7b3b631b50a42dcccda0bc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicalExamination/medical_examination_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medicalExamination/medical_examination_list.html.twig"));

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
                  <h2>Visite</h2>
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
                        Visite
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
                          <th><h6>Numero protocollo</h6></th>
                          <th><h6>Data protocollo</h6></th>
                          <th><h6>Data Visita</h6></th>
                          <th><h6>Codice Fiscale Paziente</h6></th>
                          <th><h6>Esito della visita</h6></th>
                          <th><h6>Tipologia di instanza</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                         ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medical_examinations"]) || array_key_exists("medical_examinations", $context) ? $context["medical_examinations"] : (function () { throw new RuntimeError('Variable "medical_examinations" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["medical_examination"]) {
            echo " 
                        <tr>
                          <td class=\"min-width\">
                            
                              <div class=\"lead-text\">
                                <a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mod_medical_examination");
            echo "?id_medical_examination=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medical_examination"], "getId", [], "method", false, false, false, 114), "html", null, true);
            echo "\"><p href=\"http://www.stopsweats.org\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medical_examination"], "getProtocolNumber", [], "method", false, false, false, 114), "html", null, true);
            echo "</p></a>
                              </div>
                            </div>
                          </td>
                          <td class=\"min-width\">
                            <p>";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medical_examination"], "getProtocolDate", [], "method", false, false, false, 119), "d-m-Y"), "html", null, true);
            echo "</p>
                          </td>
                          <td class=\"min-width\">
                            <p>";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medical_examination"], "getDateOfExamination", [], "method", false, false, false, 122), "d-m-Y"), "html", null, true);
            echo "</p>
                          </td>
                          <td class=\"min-width\">
                            <p>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["medical_examination"], "getPatient", [], "method", false, false, false, 125), "getFiscalCode", [], "method", false, false, false, 125), "html", null, true);
            echo "</p>
                          </td>
                          <td class=\"min-width\">
                            <p>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medical_examination"], "getResultOfExamination", [], "method", false, false, false, 128), "html", null, true);
            echo "</p>
                          </td>
                           <td class=\"min-width\">
                            <p>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medical_examination"], "getType", [], "method", false, false, false, 131), "html", null, true);
            echo "</p>
                          </td>
                          <td>
                            <div class=\"action\">
                             <a href=\"";
            // line 135
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_medical_examination");
            echo "?id_medical_examination=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medical_examination"], "getId", [], "method", false, false, false, 135), "html", null, true);
            echo "\">
                                <button  class=\"text-danger\">
                                  <i  class=\"lni lni-trash-can\"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medical_examination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
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
            

            
          </div>
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
        return "medicalExamination/medical_examination_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 143,  209 => 135,  202 => 131,  196 => 128,  190 => 125,  184 => 122,  178 => 119,  166 => 114,  156 => 109,  69 => 25,  43 => 1,);
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
                  <h2>Visite</h2>
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
                        Visite
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
                          <th><h6>Numero protocollo</h6></th>
                          <th><h6>Data protocollo</h6></th>
                          <th><h6>Data Visita</h6></th>
                          <th><h6>Codice Fiscale Paziente</h6></th>
                          <th><h6>Esito della visita</h6></th>
                          <th><h6>Tipologia di instanza</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                         {% for medical_examination in medical_examinations %} 
                        <tr>
                          <td class=\"min-width\">
                            
                              <div class=\"lead-text\">
                                <a href=\"{{ path('mod_medical_examination') }}?id_medical_examination={{ medical_examination.getId() }}\"><p href=\"http://www.stopsweats.org\">{{ \"#{medical_examination.getProtocolNumber()}\" }}</p></a>
                              </div>
                            </div>
                          </td>
                          <td class=\"min-width\">
                            <p>{{ medical_examination.getProtocolDate() | date('d-m-Y') }}</p>
                          </td>
                          <td class=\"min-width\">
                            <p>{{ medical_examination.getDateOfExamination() | date('d-m-Y') }}</p>
                          </td>
                          <td class=\"min-width\">
                            <p>{{ \"#{medical_examination.getPatient().getFiscalCode()}\" }}</p>
                          </td>
                          <td class=\"min-width\">
                            <p>{{ medical_examination.getResultOfExamination()  }}</p>
                          </td>
                           <td class=\"min-width\">
                            <p>{{ \"#{medical_examination.getType()}\" }}</p>
                          </td>
                          <td>
                            <div class=\"action\">
                             <a href=\"{{ path('remove_medical_examination') }}?id_medical_examination={{ medical_examination.getId() }}\">
                                <button  class=\"text-danger\">
                                  <i  class=\"lni lni-trash-can\"></i>
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
            

            
          </div>
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
", "medicalExamination/medical_examination_list.html.twig", "/Users/paolo/Desktop/progetti_studenti/ecampus/tesi/2023/Giuseppe_borzumati/patient_manager/templates/medicalExamination/medical_examination_list.html.twig");
    }
}
