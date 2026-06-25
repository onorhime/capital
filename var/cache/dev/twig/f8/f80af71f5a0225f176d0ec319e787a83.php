<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* adminbase.html.twig */
class __TwigTemplate_0dfb1c1bc416f70af9f75d407994c339 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
 
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield ">
    <link href=";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/fonts/circular-std/style.css"), "html", null, true);
        yield " rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/libs/css/style.css"), "html", null, true);
        yield ">
    <link rel=\"stylesheet\" href=";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css"), "html", null, true);
        yield ">
    <link rel=\"stylesheet\" href=";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/chartist-bundle/chartist.css"), "html", null, true);
        yield ">
    <link rel=\"stylesheet\" href=";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/morris-bundle/morris.css"), "html", null, true);
        yield ">
    <link rel=\"stylesheet\" href=";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css"), "html", null, true);
        yield ">
    <link rel=\"stylesheet\" href=";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/c3charts/c3.css"), "html", null, true);
        yield ">
    <link rel=\"stylesheet\" href=";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css"), "html", null, true);
        yield ">
    <title>Admin Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class=\"dashboard-main-wrapper\">
       
        <!-- ============================================================== -->
        <div class=\"nav-left-sidebar sidebar-dark\">
            <div class=\"menu-list\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                        <ul class=\"navbar-nav flex-column\">
                            <li class=\"nav-divider\">
                                Menu
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link active\" href=";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        yield " aria-controls=\"submenu-1\"><i class=\"fa fa-fw fa-user-circle\"></i>Dashboard <span class=\"badge badge-success\">6</span></a>
                               
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("depositlist");
        yield "  aria-controls=\"submenu-2\"><i class=\"fa fa-fw fa-rocket\"></i>Deposit Requests</a>
                        
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("withdrawallist");
        yield "  aria-controls=\"submenu-3\"><i class=\"fas fa-fw fa-chart-pie\"></i>Withdrawal Requests</a>
                              
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("investments");
        yield " aria-controls=\"submenu-4\"><i class=\"fab fa-fw fa-wpforms\"></i>Investments</a>
                               
                            </li>

                             <li class=\"nav-item \">
                                <a class=\"nav-link\" href=";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield " aria-controls=\"submenu-4\"><i class=\"fab fa-fw fa-wpforms\"></i>Logout</a>
                               
                            </li>
                            
                          
                        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        ";
        // line 70
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 73
        yield "
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src=";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/jquery/jquery-3.3.1.min.js"), "html", null, true);
        yield "></script>
    <!-- bootstap bundle js -->
    <script src=";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"), "html", null, true);
        yield "></script>
    <!-- slimscroll js -->
    <script src=";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/slimscroll/jquery.slimscroll.js"), "html", null, true);
        yield "></script>
    <!-- main js -->
    <script src=";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/libs/js/main-js.js"), "html", null, true);
        yield "></script>
    <!-- chart chartist js -->
    <script src=";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/chartist-bundle/chartist.min.js"), "html", null, true);
        yield "></script>
    <!-- sparkline js -->
    <script src=";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/sparkline/jquery.sparkline.js"), "html", null, true);
        yield "></script>
    <!-- morris js -->
    <script src=";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/morris-bundle/raphael.min.js"), "html", null, true);
        yield "></script>
    <script src=";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/morris-bundle/morris.js"), "html", null, true);
        yield "></script>
    <!-- chart c3 js -->
    <script src=";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/c3charts/c3.min.js"), "html", null, true);
        yield "></script>
    <script src=";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js"), "html", null, true);
        yield "></script>
    <script src=";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/c3charts/C3chartjs.js"), "html", null, true);
        yield "></script>
    <script src=";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/libs/js/dashboard-ecommerce.js"), "html", null, true);
        yield "></script>
    <!-- Smartsupp Live Chat script -->
    <script type=\"text/javascript\">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = 'e852fdce38c629a5866f770f0bea76449d4055a6';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript>Powered by <a href=\"https://www.smartsupp.com\" target=\"_blank\">Smartsupp</a></noscript>
</body>
 
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 70
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 71
        yield "            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "adminbase.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  258 => 71,  248 => 70,  220 => 98,  216 => 97,  212 => 96,  208 => 95,  203 => 93,  199 => 92,  194 => 90,  189 => 88,  184 => 86,  179 => 84,  174 => 82,  169 => 80,  160 => 73,  158 => 70,  143 => 58,  135 => 53,  128 => 49,  121 => 45,  114 => 41,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
 
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/bootstrap/css/bootstrap.min.css\")}}>
    <link href={{ asset(\"admin/assets/vendor/fonts/circular-std/style.css\")}} rel=\"stylesheet\">
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/libs/css/style.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/charts/chartist-bundle/chartist.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/charts/morris-bundle/morris.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/charts/c3charts/c3.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css\")}}>
    <title>Admin Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class=\"dashboard-main-wrapper\">
       
        <!-- ============================================================== -->
        <div class=\"nav-left-sidebar sidebar-dark\">
            <div class=\"menu-list\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                        <ul class=\"navbar-nav flex-column\">
                            <li class=\"nav-divider\">
                                Menu
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link active\" href={{ path('admin') }} aria-controls=\"submenu-1\"><i class=\"fa fa-fw fa-user-circle\"></i>Dashboard <span class=\"badge badge-success\">6</span></a>
                               
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href={{ path(\"depositlist\") }}  aria-controls=\"submenu-2\"><i class=\"fa fa-fw fa-rocket\"></i>Deposit Requests</a>
                        
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href={{ path('withdrawallist') }}  aria-controls=\"submenu-3\"><i class=\"fas fa-fw fa-chart-pie\"></i>Withdrawal Requests</a>
                              
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href={{ path('investments') }} aria-controls=\"submenu-4\"><i class=\"fab fa-fw fa-wpforms\"></i>Investments</a>
                               
                            </li>

                             <li class=\"nav-item \">
                                <a class=\"nav-link\" href={{ path('logout') }} aria-controls=\"submenu-4\"><i class=\"fab fa-fw fa-wpforms\"></i>Logout</a>
                               
                            </li>
                            
                          
                        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        {% block main %}
            
        {% endblock %}

    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src={{ asset(\"admin/assets/vendor/jquery/jquery-3.3.1.min.js\")}}></script>
    <!-- bootstap bundle js -->
    <script src={{ asset(\"admin/assets/vendor/bootstrap/js/bootstrap.bundle.js\")}}></script>
    <!-- slimscroll js -->
    <script src={{ asset(\"admin/assets/vendor/slimscroll/jquery.slimscroll.js\")}}></script>
    <!-- main js -->
    <script src={{ asset(\"admin/assets/libs/js/main-js.js\")}}></script>
    <!-- chart chartist js -->
    <script src={{ asset(\"admin/assets/vendor/charts/chartist-bundle/chartist.min.js\")}}></script>
    <!-- sparkline js -->
    <script src={{ asset(\"admin/assets/vendor/charts/sparkline/jquery.sparkline.js\")}}></script>
    <!-- morris js -->
    <script src={{ asset(\"admin/assets/vendor/charts/morris-bundle/raphael.min.js\")}}></script>
    <script src={{ asset(\"admin/assets/vendor/charts/morris-bundle/morris.js\")}}></script>
    <!-- chart c3 js -->
    <script src={{ asset(\"admin/assets/vendor/charts/c3charts/c3.min.js\")}}></script>
    <script src={{ asset(\"admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js\")}}></script>
    <script src={{ asset(\"admin/assets/vendor/charts/c3charts/C3chartjs.js\")}}></script>
    <script src={{ asset(\"admin/assets/libs/js/dashboard-ecommerce.js\")}}></script>
    <!-- Smartsupp Live Chat script -->
    <script type=\"text/javascript\">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = 'e852fdce38c629a5866f770f0bea76449d4055a6';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript>Powered by <a href=\"https://www.smartsupp.com\" target=\"_blank\">Smartsupp</a></noscript>
</body>
 
</html>
", "adminbase.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/capital/templates/adminbase.html.twig");
    }
}
