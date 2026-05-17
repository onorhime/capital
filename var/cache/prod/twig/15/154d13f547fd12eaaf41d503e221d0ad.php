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

/* admin/deposits.html.twig */
class __TwigTemplate_6b8cc7ad6145890a68c3091fd846c19e extends Template
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
        yield from         $this->loadTemplate("adminbase.html.twig", "admin/deposits.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "       
    ";
        // line 3
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        return; yield '';
    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "           <div class=\"dashboard-wrapper\">
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
                                    <h5 class=\"card-header\">Deposit Requests Lists</h5>
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["deposits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["deposit"]) {
            // line 37
            yield "                                                    <tr>
                                                    
                                                        <td> ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["deposit"], "user", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                                        <td>\$ ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["deposit"], "amount", [], "any", false, false, false, 40), 2, ".", ""), "html", null, true);
            yield " </td>
                                                        <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["deposit"], "status", [], "any", false, false, false, 41), "html", null, true);
            yield " </td>
                                                        <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["deposit"], "date", [], "any", false, false, false, 42), "D-M-Y"), "html", null, true);
            yield "</td>
                                                        <td><form action=\"\" method=\"post\"><input type=\"text\" name=\"id\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["deposit"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\" hidden> <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" name=\"approve\" value=\"approve\"><input type=\"submit\" name=\"delete\" class=\"btn btn-primary btn-lg btn-block\" value=\"delete\"></form></td>
                                                       
                                                       
                                                    </tr>
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deposit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                                                </tbody>
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
        return "admin/deposits.html.twig";
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
        return array (  121 => 48,  110 => 43,  106 => 42,  102 => 41,  98 => 40,  94 => 39,  90 => 37,  86 => 36,  52 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/deposits.html.twig", "/home/evolvedchain.net/public_html/templates/admin/deposits.html.twig");
    }
}
