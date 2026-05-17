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

/* admin/withdrawals.html.twig */
class __TwigTemplate_677875af5d43b3c9961a8194b8138b41 extends Template
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
        yield from         $this->loadTemplate("adminbase.html.twig", "admin/withdrawals.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        return; yield '';
    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "      <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                            <div class=\"page-header\">
                                <h2 class=\"pageheader-title\">Withdrawal Requests </h2>
                                <p class=\"pageheader-text\">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class=\"page-breadcrumb\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"#\" class=\"breadcrumb-link\">Dashboard</a></li>
                                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Withdrawal Requests</li>
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
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">Withdrawal Requests Lists</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Amount</th>
                                                        <th class=\"border-0\">status</th>
                                                         <th class=\"border-0\">Date</th> 
                                                         <th class=\"border-0\">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["withdrawals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["withdrawal"]) {
            // line 57
            yield "                                                     <tr>
                                                    
                                                        <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["withdrawal"], "user", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                                                        <td>\$";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["withdrawal"], "amount", [], "any", false, false, false, 60), "html", null, true);
            yield " </td>
                                                        <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["withdrawal"], "status", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["withdrawal"], "date", [], "any", false, false, false, 62), "D-M-Y"), "html", null, true);
            yield "</td>
                                                        <td><form action=\"\" method=\"post\"><input type=\"text\" name=\"id\" value=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["withdrawal"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "\" hidden> <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" name=\"approve\" value=\"approve\"><input type=\"submit\" name=\"delete\" class=\"btn btn-primary btn-lg btn-block\" value=\"delete\"></form></td>
                                                       
                                                       
                                                    </tr>
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['withdrawal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        return "admin/withdrawals.html.twig";
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
        return array (  139 => 68,  128 => 63,  124 => 62,  120 => 61,  116 => 60,  112 => 59,  108 => 57,  104 => 56,  49 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/withdrawals.html.twig", "/home/evolvedchain.net/public_html/templates/admin/withdrawals.html.twig");
    }
}
