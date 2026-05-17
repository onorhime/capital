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

/* admin/profile.html.twig */
class __TwigTemplate_80fe78b58e43cfe9658090ce2d728f87 extends Template
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
        yield from         $this->loadTemplate("adminbase.html.twig", "admin/profile.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 144
        yield "        
    ";
        return; yield '';
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"dashboard-wrapper\">
            <div class=\"container-fluid  dashboard-content\">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class=\"row\">
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                        <div class=\"page-header\">
                            <div class=\"page-breadcrumb\">
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"index.php\" class=\"breadcrumb-link\">Dashboard</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"index.php\" class=\"breadcrumb-link\">Users</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\"><?php echo \$user['0']['firstname'];?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class=\"row\">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                            <div class=\"card\">
                                <h5 class=\"card-header\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        yield " account details</h5>
                                <div class=\"card-body\">
                                    <form  method=\"post\" action=\"\">
                                        <div class=\"row\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">name</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"name\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
        yield "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">email</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"email address\" value=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 47), "html", null, true);
        yield "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>

                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">phone</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"phone number\" value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 55), "html", null, true);
        yield "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>

                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Balance</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\"  name=\"balance\" placeholder=\"balance\" value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "balance", [], "any", false, false, false, 63), "html", null, true);
        yield "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Bonus</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\"  name=\"bonus\" placeholder=\"bonus\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "bonus", [], "any", false, false, false, 71), "html", null, true);
        yield "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>

                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">profit</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name=\"profit\" placeholder=\"profit\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profit", [], "any", false, false, false, 79), "html", null, true);
        yield "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            
                                           
                                           
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">country</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name= \"country\" placeholder=\"Bonus\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "country", [], "any", false, false, false, 89), "html", null, true);
        yield "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                           
                                           
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Registration Date</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"date\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "date", [], "any", false, false, false, 98), "y - m - d"), "html", null, true);
        yield "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Password</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"password\" value=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "password", [], "any", false, false, false, 105), "html", null, true);
        yield "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>


                                        
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <input type=\"submit\" class=\"btn btn-primary\" name=\"update\"  value=\"Update User\">
                                            </div>

                                            
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <input type=\"submit\" class=\"btn btn-primary\" name=\"delete\"  value=\"Delete User\">
                                            </div>
                                        </div>
                                    </form>

                    
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
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
        return "admin/profile.html.twig";
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
        return array (  186 => 105,  176 => 98,  164 => 89,  151 => 79,  140 => 71,  129 => 63,  118 => 55,  107 => 47,  97 => 40,  88 => 34,  56 => 4,  52 => 3,  46 => 144,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/profile.html.twig", "/home/evolvedchain.net/public_html/templates/admin/profile.html.twig");
    }
}
