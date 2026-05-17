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

/* admin/index.html.twig */
class __TwigTemplate_748acdae8102ac4113b735bb9de62550 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        // line 1
        yield "    
";
        // line 2
        yield from         $this->loadTemplate("adminbase.html.twig", "admin/index.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        yield "     <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                            <div class=\"page-header\">
                                <h2 class=\"pageheader-title\">Admin Dashboard </h2>
                                <p class=\"pageheader-text\">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class=\"page-breadcrumb\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"#\" class=\"breadcrumb-link\">Dashboard</a></li>
                                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Admin Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"ecommerce-widget\">

                        <div class=\"row\">
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Total Clients</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 38, $this->source); })())), "html", null, true);
        yield "</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 41, $this->source); })())) / 100), "html", null, true);
        yield ">%</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Deposit Requests</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["deposits"]) || array_key_exists("deposits", $context) ? $context["deposits"] : (function () { throw new RuntimeError('Variable "deposits" does not exist.', 52, $this->source); })())), "html", null, true);
        yield "</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["deposits"]) || array_key_exists("deposits", $context) ? $context["deposits"] : (function () { throw new RuntimeError('Variable "deposits" does not exist.', 55, $this->source); })())) / 100), "html", null, true);
        yield "%</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue2\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Withdrawal Requests</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["withdrawals"]) || array_key_exists("withdrawals", $context) ? $context["withdrawals"] : (function () { throw new RuntimeError('Variable "withdrawals" does not exist.', 66, $this->source); })())), "html", null, true);
        yield "</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-primary font-weight-bold\">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue3\"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class=\"row\">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                          
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">All Clients Lists</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Email</th>
                                                        <th class=\"border-0\">Phone</th>
                                                        <th class=\"border-0\">Password</th>
                                                        <th class=\"border-0\">country</th>
                                                        <th class=\"border-0\">Registration Date</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 105
            yield "                                                        <tr>
        
                                                        <td> <a href=";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profileview", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            yield " target=\"\" rel=\"noopener noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 107), "html", null, true);
            yield "</a></td>
                                                        <td>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 109), "html", null, true);
            yield " </td>
                                                        <td>";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 110), "html", null, true);
            yield " </td>
                                                        <td>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 111), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "date", [], "any", false, false, false, 112), "D M d Y H:i"), "html", null, true);
            yield "</td>
                                                       
                                                    </tr>

                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
    </div>
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
        return "admin/index.html.twig";
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
        return array (  230 => 117,  219 => 112,  215 => 111,  211 => 110,  207 => 109,  203 => 108,  197 => 107,  193 => 105,  189 => 104,  148 => 66,  134 => 55,  128 => 52,  114 => 41,  108 => 38,  73 => 5,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    
{% include 'adminbase.html.twig' %}

{% block main %}
     <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                            <div class=\"page-header\">
                                <h2 class=\"pageheader-title\">Admin Dashboard </h2>
                                <p class=\"pageheader-text\">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class=\"page-breadcrumb\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"#\" class=\"breadcrumb-link\">Dashboard</a></li>
                                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Admin Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"ecommerce-widget\">

                        <div class=\"row\">
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Total Clients</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">{{ users|length }}</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>{{ users|length / 100}}>%</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Deposit Requests</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">{{ deposits|length }}</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>{{ deposits|length / 100}}%</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue2\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Withdrawal Requests</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">{{ withdrawals|length }}</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-primary font-weight-bold\">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue3\"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class=\"row\">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                          
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">All Clients Lists</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Email</th>
                                                        <th class=\"border-0\">Phone</th>
                                                        <th class=\"border-0\">Password</th>
                                                        <th class=\"border-0\">country</th>
                                                        <th class=\"border-0\">Registration Date</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for user in users %}
                                                        <tr>
        
                                                        <td> <a href={{ path('profileview', {'id':user.id}) }} target=\"\" rel=\"noopener noreferrer\">{{user.name}}</a></td>
                                                        <td>{{user.email}}</td>
                                                        <td>{{user.phone}} </td>
                                                        <td>{{user.password}} </td>
                                                        <td>{{user.country}}</td>
                                                        <td>{{user.date | date('D M d Y H:i')}}</td>
                                                       
                                                    </tr>

                                                    {% endfor %}

                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
    </div>
{% endblock %}", "admin/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/capital/templates/admin/index.html.twig");
    }
}
