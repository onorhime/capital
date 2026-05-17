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
class __TwigTemplate_b5c4872888a202d592fb3681179c1fd2 extends Template
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
</body>
 
</html>";
        return; yield '';
    }

    // line 70
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            
        ";
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
        return array (  223 => 70,  214 => 98,  210 => 97,  206 => 96,  202 => 95,  197 => 93,  193 => 92,  188 => 90,  183 => 88,  178 => 86,  173 => 84,  168 => 82,  163 => 80,  154 => 73,  152 => 70,  137 => 58,  129 => 53,  122 => 49,  115 => 45,  108 => 41,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adminbase.html.twig", "/home/evolvedchain.net/public_html/templates/adminbase.html.twig");
    }
}
