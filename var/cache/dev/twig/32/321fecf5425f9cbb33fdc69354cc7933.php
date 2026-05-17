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

/* dashboard/transaction.html.twig */
class __TwigTemplate_bcbe2f6cfcb9c5a1534381e486a90136 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/transaction.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/transaction.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/transaction.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        yield "            <div class=\"container-fluid mb-5\">
                <div wire:id=\"1tqBlDBPEX0vka6vDs9M\" wire:initial-data=\"{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;1tqBlDBPEX0vka6vDs9M&quot;,&quot;name&quot;:&quot;user.history.deposit-history&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard\\/accounthistory&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[],&quot;path&quot;:&quot;https:\\/\\/mam.getonlinetrader.pro\\/protodash\\/dashboard\\/accounthistory&quot;},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;2eb6e9c6&quot;,&quot;data&quot;:{&quot;page&quot;:1,&quot;paginators&quot;:{&quot;page&quot;:1}},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;e97e249dd99b8048862eeb49cbdcf6ee5251973ba39b675ce9881cf1ac0d62e5&quot;}}\">
    <div>
        <div>
    <!-- Title -->
    <h1 class=\"h2 m-0\">
        Account transactions history
    </h1>
    <p class=\"m-0\">All your transaction history in one place.</p>
</div>

<div class=\"row mt-5\">
    <div class=\"col-6 col-lg-3\">
        <!-- Card -->
        <a >
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"d-flex flex-column\">
                            <h3 class=\"card-title h4 mb-0\">Deposits</h3>
                                                            ";
        // line 25
        yield "                                                    </div>

                        <div class=\"avatar avatar-circle avatar-xs me-2\">
                            <i class=\"bi bi-wallet-fill fs-3\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"col-6 col-lg-3\">
        <!-- Card -->
        <a >
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"d-flex flex-column\">
                            <h3 class=\"card-title h4 mb-0\">Withdrawals</h3>
                                                    </div>

                        <div class=\"avatar avatar-circle avatar-xs me-2\">
                            <i class=\"bi bi-graph-down fs-3\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
            <div class=\"col-6 col-lg-3\">
            <!-- Card -->
            <a >
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"d-flex flex-column\">
                                <h3 class=\"card-title h4 mb-0\">Profit</h3>
                                                            </div>

                            <div class=\"avatar avatar-circle avatar-xs me-2\">
                                <i class=\"bi bi-coin fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-6 col-lg-3\">
        <!-- Card -->
        <a >
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"d-flex flex-column\">
                            <h3 class=\"card-title h4 mb-0\">Others</h3>
                                                    </div>

                        <div class=\"avatar avatar-circle avatar-xs me-2\">
                            <i class=\"bi bi-hourglass fs-3\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>
    </div>
    <div>
    </div>
    <div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5>Transaction history</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table text-center\">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Date created</th>
                                </tr>
                            </thead>
                            <tbody>
                                       ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paginations"]) || array_key_exists("paginations", $context) ? $context["paginations"] : (function () { throw new RuntimeError('Variable "paginations" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 113
            yield "                                       <tr>
                                            <td>\$";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pagination"], "amount", [], "any", false, false, false, 114), "html", null, true);
            yield "</td>
                                            <td>";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pagination"], "description", [], "any", false, false, false, 115), "html", null, true);
            yield "</td>
                                            <td>
                                            ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["pagination"], "status", [], "any", false, false, false, 117) == "complete")) {
                // line 118
                yield "                                                <span class=\"badge bg-success rounded-pill\">Successful</span>
                                                ";
            } else {
                // line 120
                yield "                                                 <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pagination"], "status", [], "any", false, false, false, 120), "html", null, true);
                yield "</span>
                                            ";
            }
            // line 122
            yield "                                                                                        </td>
                                            <td>
                                               ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pagination"], "date", [], "any", false, false, false, 124), "D, M d, Y g:i A"), "html", null, true);
            yield "
                                            </td>
                                      </tr>
                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "
                                      
                                
                            </tbody>
                        </table>
                        <div>
                            <div>
                            <nav>
                                
                                      ";
        // line 137
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["paginations"]) || array_key_exists("paginations", $context) ? $context["paginations"] : (function () { throw new RuntimeError('Variable "paginations" does not exist.', 137, $this->source); })()));
        yield "     
                            
                            </nav>
    </div>

                        </div>
                    </div>
                </div>
            </div>
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
        return "dashboard/transaction.html.twig";
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
        return array (  233 => 137,  222 => 128,  212 => 124,  208 => 122,  202 => 120,  198 => 118,  196 => 117,  191 => 115,  187 => 114,  184 => 113,  180 => 112,  91 => 25,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
            <div class=\"container-fluid mb-5\">
                <div wire:id=\"1tqBlDBPEX0vka6vDs9M\" wire:initial-data=\"{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;1tqBlDBPEX0vka6vDs9M&quot;,&quot;name&quot;:&quot;user.history.deposit-history&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard\\/accounthistory&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[],&quot;path&quot;:&quot;https:\\/\\/mam.getonlinetrader.pro\\/protodash\\/dashboard\\/accounthistory&quot;},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;2eb6e9c6&quot;,&quot;data&quot;:{&quot;page&quot;:1,&quot;paginators&quot;:{&quot;page&quot;:1}},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;e97e249dd99b8048862eeb49cbdcf6ee5251973ba39b675ce9881cf1ac0d62e5&quot;}}\">
    <div>
        <div>
    <!-- Title -->
    <h1 class=\"h2 m-0\">
        Account transactions history
    </h1>
    <p class=\"m-0\">All your transaction history in one place.</p>
</div>

<div class=\"row mt-5\">
    <div class=\"col-6 col-lg-3\">
        <!-- Card -->
        <a >
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"d-flex flex-column\">
                            <h3 class=\"card-title h4 mb-0\">Deposits</h3>
                                                            {# <span class=\"fs-6 text-dark\">10 records</span> #}
                                                    </div>

                        <div class=\"avatar avatar-circle avatar-xs me-2\">
                            <i class=\"bi bi-wallet-fill fs-3\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"col-6 col-lg-3\">
        <!-- Card -->
        <a >
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"d-flex flex-column\">
                            <h3 class=\"card-title h4 mb-0\">Withdrawals</h3>
                                                    </div>

                        <div class=\"avatar avatar-circle avatar-xs me-2\">
                            <i class=\"bi bi-graph-down fs-3\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
            <div class=\"col-6 col-lg-3\">
            <!-- Card -->
            <a >
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"d-flex flex-column\">
                                <h3 class=\"card-title h4 mb-0\">Profit</h3>
                                                            </div>

                            <div class=\"avatar avatar-circle avatar-xs me-2\">
                                <i class=\"bi bi-coin fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-6 col-lg-3\">
        <!-- Card -->
        <a >
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"d-flex flex-column\">
                            <h3 class=\"card-title h4 mb-0\">Others</h3>
                                                    </div>

                        <div class=\"avatar avatar-circle avatar-xs me-2\">
                            <i class=\"bi bi-hourglass fs-3\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>
    </div>
    <div>
    </div>
    <div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5>Transaction history</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table text-center\">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Date created</th>
                                </tr>
                            </thead>
                            <tbody>
                                       {% for pagination in paginations %}
                                       <tr>
                                            <td>\${{pagination.amount}}</td>
                                            <td>{{pagination.description}}</td>
                                            <td>
                                            {% if pagination.status == 'complete' %}
                                                <span class=\"badge bg-success rounded-pill\">Successful</span>
                                                {% else %}
                                                 <span class=\"badge bg-danger\">{{pagination.status}}</span>
                                            {% endif %}
                                                                                        </td>
                                            <td>
                                               {{ pagination.date | date('D, M d, Y g:i A') }}
                                            </td>
                                      </tr>
                                       {% endfor %}

                                      
                                
                            </tbody>
                        </table>
                        <div>
                            <div>
                            <nav>
                                
                                      {{ knp_pagination_render(paginations) }}     
                            
                            </nav>
    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "dashboard/transaction.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/capital/templates/dashboard/transaction.html.twig");
    }
}
