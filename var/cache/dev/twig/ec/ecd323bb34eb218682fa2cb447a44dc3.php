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

/* components/navbar_component.html.twig */
class __TwigTemplate_ffdcb9a773c03e7348e6b0e7d8c4f629 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/navbar_component.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/navbar_component.html.twig"));

        // line 1
        echo "<!-- ======== sidebar-nav start =========== -->
    <aside class=\"sidebar-nav-wrapper\">
      <div class=\"navbar-logo\">
        <a href=\"index.html\">
          <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\" />
        </a>
      </div>
      <nav class=\"sidebar-nav\">
        <ul>
          <li class=\"nav-item nav-item-has-children\">
            <a
              href=\"#0\"
              data-bs-toggle=\"collapse\"
              data-bs-target=\"#ddmenu_1\"
              aria-controls=\"ddmenu_1\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
            >
              <span class=\"icon\">
                <svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\">
                  <path
                    d=\"M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z\"
                  />
                </svg>
              </span>
              <span class=\"text\">Pazienti</span>
            </a>
            <ul id=\"ddmenu_1\" class=\"collapse show dropdown-nav\">
              <li>
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patients_list");
        echo "\"> Visualizza Pazienti </a>
              </li>
              <li>
                <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("insert_patient");
        echo "\"> Inserisci Nuovi Pazienti </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item nav-item-has-children\">
            <a
              href=\"#0\"
              data-bs-toggle=\"collapse\"
              data-bs-target=\"#ddmenu_2\"
              aria-controls=\"ddmenu_2\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
            >
              <span class=\"icon\">
                <svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\">
                  <path
                    d=\"M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z\"
                  />
                </svg>
              </span>
              <span class=\"text\">Visite</span>
            </a>
            <ul id=\"ddmenu_2\" class=\"collapse show dropdown-nav\">
              <li>
                <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medical_examination_list");
        echo "\"> Visualizza le Visite </a>
              </li>
            </ul>
          </li>         
        </ul>
      </nav>
      
    </aside>
    <div class=\"overlay\"></div>
    <!-- ======== sidebar-nav end =========== -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/navbar_component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 57,  83 => 33,  77 => 30,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ======== sidebar-nav start =========== -->
    <aside class=\"sidebar-nav-wrapper\">
      <div class=\"navbar-logo\">
        <a href=\"index.html\">
          <img src=\"{{ asset('assets/images/logo/logo.svg') }}\" alt=\"logo\" />
        </a>
      </div>
      <nav class=\"sidebar-nav\">
        <ul>
          <li class=\"nav-item nav-item-has-children\">
            <a
              href=\"#0\"
              data-bs-toggle=\"collapse\"
              data-bs-target=\"#ddmenu_1\"
              aria-controls=\"ddmenu_1\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
            >
              <span class=\"icon\">
                <svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\">
                  <path
                    d=\"M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z\"
                  />
                </svg>
              </span>
              <span class=\"text\">Pazienti</span>
            </a>
            <ul id=\"ddmenu_1\" class=\"collapse show dropdown-nav\">
              <li>
                <a href=\"{{ path('patients_list')}}\"> Visualizza Pazienti </a>
              </li>
              <li>
                <a href=\"{{ path('insert_patient')}}\"> Inserisci Nuovi Pazienti </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item nav-item-has-children\">
            <a
              href=\"#0\"
              data-bs-toggle=\"collapse\"
              data-bs-target=\"#ddmenu_2\"
              aria-controls=\"ddmenu_2\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
            >
              <span class=\"icon\">
                <svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\">
                  <path
                    d=\"M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z\"
                  />
                </svg>
              </span>
              <span class=\"text\">Visite</span>
            </a>
            <ul id=\"ddmenu_2\" class=\"collapse show dropdown-nav\">
              <li>
                <a href=\"{{ path('medical_examination_list')}}\"> Visualizza le Visite </a>
              </li>
            </ul>
          </li>         
        </ul>
      </nav>
      
    </aside>
    <div class=\"overlay\"></div>
    <!-- ======== sidebar-nav end =========== -->", "components/navbar_component.html.twig", "/Users/paolo/Desktop/progetti_studenti/ecampus/tesi/2023/Giuseppe_borzumati/patient_manager/templates/components/navbar_component.html.twig");
    }
}
