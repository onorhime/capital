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

/* dashboard/plans.html.twig */
class __TwigTemplate_7fe453b94155b1597c4659dd9b4551d3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/plans.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "     <div class=\"container-fluid mb-5\">
                <div wire:id=\"xhwKrHEZ9V2ll2OKnahT\" wire:initial-data=\"{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;xhwKrHEZ9V2ll2OKnahT&quot;,&quot;name&quot;:&quot;user.plans.my-plans&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard\\/myplans\\/All&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[],&quot;path&quot;:&quot;https:\\/\\/mam.getonlinetrader.pro\\/protodash\\/dashboard\\/myplans\\/All&quot;},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;a8b6a3f3&quot;,&quot;data&quot;:{&quot;sortValue&quot;:null,&quot;page&quot;:1,&quot;paginators&quot;:{&quot;page&quot;:1}},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;7d5d89b108e65e1433670a3086fbfd4583006320c2cdef2632023e4bbf817a7b&quot;}}\">
    <div>
    </div>
    <div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"d-flex align-items-baseline justify-content-between\">
            <!-- Title -->
            <h1 class=\"h2 d-flex align-items-center justify-content-between\">
                <span>
                    My plans
                                            <a href=";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invest");
        yield " class=\"btn btn-sm btn-primary ms-4\">Buy new plan</a>
                                    </span>
            </h1>
            <div class=\"m-0\">
                <label class=\"form-label\">Sort</label>
                <select class=\"form-select\">
                    <option>All</option>
                    <option>Active</option>
                    <option>Inactive</option>
                    <option>Expired</option>
                </select>
            </div>
        </div>

        <div class=\"row mt-5\">
                     ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 32
            yield "                               <div class=\"col-lg-4 mb-3\">
                    <!-- Card -->
                    <div class=\"card border-0 mb-2 cursor-move\">

                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center justify-content-between\">
                                                                    ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "iscomplete", [], "any", false, false, false, 38)) {
                // line 39
                yield "                                                                        <span class=\"badge bg-success\">Completed</span>
                                                                        ";
            } else {
                // line 41
                yield "                                                                        <span class=\"badge bg-warning\">Active</span>
                                                                    ";
            }
            // line 43
            yield "                                                                <!-- Dropdown -->
                                <div data-bs-toggle=\"tooltip\" title=\"Plan details\">
                                    <a class=\"dropdown-item\" href=";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plan", ["plan" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield ">View</a>
                                </div>
                            </div>

                            <!-- Title -->
                            <a href=\"\" class=\"h4 text-body card-title d-inline-block\">
                                ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 51), "html", null, true);
            yield "
                            </a>
                            <div class=\"d-flex justify-content-around\">
                                <div class=\"mr-3 mb-0\">
                                    <h6 class=\"text-black m-0\">
                                        ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "startdate", [], "any", false, false, false, 56), "D, M d, Y g:i A"), "html", null, true);
            yield "
                                    </h6>
                                    <span>Start Date</span>
                                </div>
                                <i class=\"fas fa-arrow-right text-muted\"></i>
                                <div class=\"ml-3\">
                                    <h6 class=\"text-black m-0\">
                                        ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "enddate", [], "any", false, false, false, 63), "D, M d, Y g:i A"), "html", null, true);
            yield "
                                    </h6>
                                    <span>End Date</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-footer border-0\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col\">
                                    <i class=\"bi bi-coin fs-3\"></i>
                                    <span class=\"fs-3 h4\" data-bs-toggle=\"tooltip\"
                                        title=\"Amount invested\">\$";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "amount", [], "any", false, false, false, 75), "html", null, true);
            yield "</span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                    <div class=\"row\">
                <div class=\"mt-2 col-12\">
                    <div>
            <nav>
            <ul class=\"pagination\">
                
                                  
                        ";
        // line 89
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["pagination"] ?? null));
        yield "     
                            </ul>
        </nav>
    </div>

                </div>
            </div>
            </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/plans.html.twig";
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
        return array (  173 => 89,  164 => 82,  151 => 75,  136 => 63,  126 => 56,  118 => 51,  109 => 45,  105 => 43,  101 => 41,  97 => 39,  95 => 38,  87 => 32,  83 => 31,  65 => 16,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/plans.html.twig", "/home/evolvedchain.net/public_html/templates/dashboard/plans.html.twig");
    }
}
