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
class __TwigTemplate_5e339fa29513360a8bcc58235b40df1d extends Template
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
        yield "    
";
        // line 2
        yield from         $this->loadTemplate("adminbase.html.twig", "admin/index.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        return; yield '';
    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["users"] ?? null)), "html", null, true);
        yield "</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["users"] ?? null)) / 100), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["deposits"] ?? null)), "html", null, true);
        yield "</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["deposits"] ?? null)) / 100), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["withdrawals"] ?? null)), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
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
        return array (  212 => 117,  201 => 112,  197 => 111,  193 => 110,  189 => 109,  185 => 108,  179 => 107,  175 => 105,  171 => 104,  130 => 66,  116 => 55,  110 => 52,  96 => 41,  90 => 38,  55 => 5,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "/home/evolvedchain.net/public_html/templates/admin/index.html.twig");
    }
}
