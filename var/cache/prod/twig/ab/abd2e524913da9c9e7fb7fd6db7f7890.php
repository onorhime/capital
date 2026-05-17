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

/* admin/invest.html.twig */
class __TwigTemplate_b1a3fb279009513d990735d8c1aedac5 extends Template
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
        yield from         $this->loadTemplate("adminbase.html.twig", "admin/invest.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "       ";
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 74
        yield "    ";
        return; yield '';
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "            <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                  
                    <div class=\"ecommerce-widget\">

                       
                        <div class=\"row\">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">Wallets List</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Plan Name</th>
                                                        <th class=\"border-0\">amount</th>
                                                        <th class=\"border-0\">Start Date</th>
                                                         <th class=\"border-0\">End Date</th> 
                                                         <th class=\"border-0\">Interest (daily)</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 37
            yield "                                                    <tr>
                                                    
                                                        <td> ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "user", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                                        <td> ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                                        <td>\$";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "amount", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                                        <td> ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "startdate", [], "any", false, false, false, 42), "D, M d, Y g:i A"), "html", null, true);
            yield " </td>
                                                        <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "enddate", [], "any", false, false, false, 43), "D, M d, Y g:i A"), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "interest", [], "any", false, false, false, 44), "html", null, true);
            yield "% Daiy</td>
                                                       
                                                       
                                                    </tr>
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                                                </tbody>
                                                  ";
        // line 50
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["plans"] ?? null));
        yield "     
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
        return "admin/invest.html.twig";
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
        return array (  130 => 50,  127 => 49,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  92 => 37,  88 => 36,  53 => 3,  49 => 2,  44 => 74,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/invest.html.twig", "/home/evolvedchain.net/public_html/templates/admin/invest.html.twig");
    }
}
