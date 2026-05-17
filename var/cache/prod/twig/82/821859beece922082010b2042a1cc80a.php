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

/* dashboard/plandetail.html.twig */
class __TwigTemplate_afc985dc7b6e791f483206e86c4aab07 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/plandetail.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "            <div class=\"container-fluid mb-5\">
                <!-- Title -->
    <div class=\"d-flex justify-content-between align-items-center\">
        <h1 class=\"h2\">
            Premium Plan
        </h1>
        <div>
            <a href=";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plans");
        yield " class=\"fs-1\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>
        </div>
    </div>
    <div>
    </div>
    <div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h2>
                        ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "interest", [], "any", false, false, false, 26), "html", null, true);
        yield "% Daily
                        for 
                        ";
        // line 28
        $context["startDate"] = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "startdate", [], "any", false, false, false, 28);
        // line 29
        yield "                        ";
        $context["endDate"] = CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "enddate", [], "any", false, false, false, 29);
        // line 30
        yield "
                        ";
        // line 31
        $context["difference"] = CoreExtension::getAttribute($this->env, $this->source, ($context["endDate"] ?? null), "diff", [($context["startDate"] ?? null)], "method", false, false, false, 31);
        // line 32
        yield "                        ";
        $context["daysDifference"] = CoreExtension::getAttribute($this->env, $this->source, ($context["difference"] ?? null), "days", [], "any", false, false, false, 32);
        // line 33
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysDifference"] ?? null), "html", null, true);
        yield "
                        Days
                    </h2>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                                                           ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "iscomplete", [], "any", false, false, false, 39)) {
            // line 40
            yield "                                                             <span class=\"badge bg-success\">Completed</span>
                                                             ";
        } else {
            // line 42
            yield "                                                              <span class=\"badge bg-success\">Active</span>
                                                           ";
        }
        // line 44
        yield "                                                    </div>
                                                                                    ";
        // line 47
        yield "
                                <!-- cancel plan modal -->
                                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\"
                                    aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\" x-data=\"{ disabled: false }\">
                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header pb-0\">
                                                <h3 class=\"modal-title\">Cancel plan</h3>
                                                <!-- Button -->
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                                    aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                Are you sure you want to cancel your Premium plan?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\"
                                                    data-bs-dismiss=\"modal\">Close</button>

                                                <a href=\"https://mam.getonlinetrader.pro/protodash/dashboard/cancel-plan/68\" type=\"button\"
                                                    class=\"btn btn-danger\" :class=\"{ 'd-none': disabled }\"
                                                    x-on:click=\"disabled = true\">Cancel</a>

                                                <button class=\"btn btn-danger\" :class=\"disabled ? 'd-block' : 'd-none'\"
                                                    disabled>
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                        </div>
                    <hr>
                    <div class=\"mt-5\">
                        <h4 class=\"mb-3\">Plan information</h4>
                        <div class=\"mb-5 row\">
                            <div class=\"col-12\">
                                <div class=\"d-flex justify-content-around\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h2 class=\"m-0\">
                                                \$";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "amount", [], "any", false, false, false, 88), "2", ".", ","), "html", null, true);
        yield " +
                                                &nbsp;
                                            </h2>
                                            <small>Invested</small>
                                        </div>
                                        <div>
                                            <h2 class=\"m-0 text-success\">
                                                \$
                                                

                                                ";
        // line 98
        $context["diffe"] = CoreExtension::getAttribute($this->env, $this->source, ($context["date"] ?? null), "diff", [($context["startDate"] ?? null)], "method", false, false, false, 98);
        // line 99
        yield "                                                ";
        $context["daysDiff"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["diffe"] ?? null), "days", [], "any", false, false, false, 99), 2, ".", "");
        // line 100
        yield "                                                 ";
        if ((($context["daysDiff"] ?? null) <= ($context["daysDifference"] ?? null))) {
            // line 101
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "amount", [], "any", false, false, false, 101) * CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "interest", [], "any", false, false, false, 101)) / 100) * $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["daysDiff"] ?? null), 2, ".", "")), "html", null, true);
            yield "
                                                    ";
        } else {
            // line 103
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "amount", [], "any", false, false, false, 103) * CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "interest", [], "any", false, false, false, 103)) / 100) * $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["daysDifference"] ?? null), 2, ".", "")), "html", null, true);
            yield "
                                                ";
        }
        // line 105
        yield "                                                 

                                            </h2>
                                            <small> Earned</small>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class=\"m-0 text-success\">
                                                                                            \$ ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "amount", [], "any", false, false, false, 113) * CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "interest", [], "any", false, false, false, 113)) / 100) * $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["daysDifference"] ?? null), 2, ".", "")), "html", null, true);
        yield "
                                                                                    </h2>
                                        <small>Total Return</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row border-bottom\">
                            <div class=\"col-md-3\">
                                <p>Duration: <br><strong>";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysDifference"] ?? null), "html", null, true);
        yield " Days</strong> </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>Start Date: <br>
                                    <strong>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "startdate", [], "any", false, false, false, 126), "D, M d, Y g:i A"), "html", null, true);
        yield "</strong>
                                </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>End Date:
                                    <br><strong>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "enddate", [], "any", false, false, false, 131), "D, M d, Y g:i A"), "html", null, true);
        yield "</strong>
                                </p>
                            </div>
                        </div>
                        <div class=\"mt-4 row border-bottom\">
                            <div class=\"col-md-3\">
                                <p>Minimum Return: <br><strong>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "interest", [], "any", false, false, false, 137), "html", null, true);
        yield "%</strong> </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>Maximum Return: <br> <strong>";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["plan"] ?? null), "interest", [], "any", false, false, false, 140) * ($context["daysDifference"] ?? null)), "html", null, true);
        yield "%</strong> </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>ROI Interval:
                                    <br><strong>Daily</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    ";
        // line 177
        yield "                </div>
            </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/plandetail.html.twig";
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
        return array (  260 => 177,  247 => 140,  241 => 137,  232 => 131,  224 => 126,  217 => 122,  205 => 113,  195 => 105,  189 => 103,  183 => 101,  180 => 100,  177 => 99,  175 => 98,  162 => 88,  119 => 47,  116 => 44,  112 => 42,  108 => 40,  106 => 39,  98 => 34,  95 => 33,  92 => 32,  90 => 31,  87 => 30,  84 => 29,  82 => 28,  77 => 26,  60 => 12,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/plandetail.html.twig", "/home/evolvedchain.net/public_html/templates/dashboard/plandetail.html.twig");
    }
}
