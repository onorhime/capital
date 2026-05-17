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

/* dashboard/index.html.twig */
class __TwigTemplate_249118bfdea109013165812e86b92554 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "        <div class=\"container-fluid mb-5\">
                    <!-- Title -->
        <h1 class=\"h2\">
            Welcome, ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "!
        </h1>
        <div>
        </div>
        <div>
        </div>
                    <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"py-4 alert alert-info alert-dismissible fade show\" role=\"alert\">
                        Welcome to Evolved Blockchain Solutions version 5 with a lot of Security Features,
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                </div>
            </div>
            <div class=\"row\">
            <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-primary\"></span>
                                        Account Balance
                                    </h5>

                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \$";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "balance", [], "any", false, false, false, 39), 2, ".", ","), "html", null, true);
        yield "
                                    </h2>

                                    <a href=";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deposit");
        yield " class=\"fs-6 btn-link mb-0 mt-2 mr-3\">
                                        Deposit
                                    </a>
                                    <span class=\"\">-</span>
                                                                        <!-- Comment -->
                                        <a href=";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("withdrawal");
        yield " class=\"fs-6 btn-link mb-0 mt-2 ml-3\">
                                            Transfer
                                        </a>
                                                                </div>

                                <span class=\"text-primary\">
                                    <i class=\"bi bi-wallet-fill fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
                        <div class=\"col-lg-3\">
                    <!-- Card -->
                    <div class=\"card border-0\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col d-flex justify-content-between\">
                                    <div>
                                        <!-- Title -->
                                        <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                            <span class=\"legend-circle-sm bg-success\"></span>
                                            Total Profit
                                        </h5>
                                        <!-- Subtitle -->
                                        <h2 class=\"mb-0\">
                                            \$";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 74), "profit", [], "any", false, false, false, 74), 2, ".", ","), "html", null, true);
        yield "
                                        </h2>
                                        <!-- Comment -->
                                        ";
        // line 82
        yield "                                    </div>

                                    <span class=\"text-success\">
                                        <i class=\"bi bi-coin fs-1\"></i>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
                    <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-info\"></span>
                                        Total Bonus
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \$";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 106), "bonus", [], "any", false, false, false, 106), 2, ".", ","), "html", null, true);
        yield "
                                    </h2>
                                    <!-- Comment -->
                                    ";
        // line 114
        yield "                                </div>

                                <span class=\"text-info\">
                                    <i class=\"bi bi-gift-fill fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>

            ";
        // line 157
        yield "            <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-success\"></span>
                                        Total Deposited
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \$";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 171), "totaldeposit", [], "any", false, false, false, 171), 2, ".", ","), "html", null, true);
        yield "
                                    </h2>
                                    <!-- Comment -->
                                    <a href=";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction");
        yield ">
                                        <p class=\"fs-6 btn-link mb-0 mt-2\">
                                            View deposits
                                        </p>
                                    </a>
                                </div>

                                <span class=\"text-success\">
                                    <i class=\"bi bi-box-arrow-in-down fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-danger\"></span>
                                        Total Withdrawal
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \$";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 203), "totalwithdrawal", [], "any", false, false, false, 203), 2, ".", ","), "html", null, true);
        yield "
                                    </h2>
                                    <!-- Comment -->
                                    <a href=";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction");
        yield ">
                                        <p class=\"fs-6 btn-link mb-0 mt-2\">
                                            View withdrawals
                                        </p>
                                    </a>
                                </div>

                                <span class=\"text-danger\">
                                    <i class=\"bi bi-box-arrow-in-up fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"card border-0\">
                    <!-- Card body -->
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-secondary\"></span>
                                        Referrals
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        ";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 235), "referrals", [], "any", false, false, false, 235)), "html", null, true);
        yield "
                                    </h2>
                                    <!-- Comment -->
                                    ";
        // line 243
        yield "                                </div>
                                <span class=\"text-secondary\">
                                    <i class=\"bi bi-link fs-1\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
                </div>
                
            <div class=\"mt-4 row\">
                <div class=\"col-12\">
                    <div>
                        <h5 class=\"text-primary h5\">Active Plan(s)
                            <span class=\"text-base count\">(";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeplans"] ?? null)), "html", null, true);
        yield ")</span>
                        </h5>
                    </div>
                </div>
                <div class=\"col-12\">
                      ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["activeplans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 265
            yield "                          <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"py-4 card\">
                                    <div class=\"card-body d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"h5\">";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 270), "html", null, true);
            yield "</h6>
                                            <p class=\"h3\">
                                                \$";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "amount", [], "any", false, false, false, 272), "html", null, true);
            yield "
                                            </p>
                                        </div>
                                        <div class=\"d-none d-md-block\">
                                            <div class=\"d-flex justify-content-around\">
                                                <div class=\"mr-3\">
                                                    <h6 class=\"text-black bold\">
                                                        ";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "startdate", [], "any", false, false, false, 279), "D, M d, Y g:i A"), "html", null, true);
            yield "
                                                    </h6>
                                                    <span class=\"nk-iv-scheme-value date\">Start Date</span>
                                                </div>
                                                <span class=\"m-3\">

                                                </span>
                                                <div class=\"ml-3\">
                                                    <h6 class=\"text-black bold\">
                                                        ";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "enddate", [], "any", false, false, false, 288), "D, M d, Y g:i A"), "html", null, true);
            yield "
                                                    </h6>
                                                    <span class=\"nk-iv-scheme-value date\">End Date</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class=\"text-black\">
                                                                                                <span class=\"badge bg-success\">Active</span>
                                                                                        </h6>
                                            <span class=\"nk-iv-scheme-value amount\">Status</span>
                                        </div>

                                        <a href=";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plan", ["plan" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 301)]), "html", null, true);
            yield ">
                                            <i class=\"bi bi-arrow-right fs-2\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        yield "                        
                                </div>
            </div>
            
            
        <div class=\"mt-4 row\">
            <div class=\"col-12\">
                <div class=\"d-flex justify-content-between\">
                    <h6 class=\"text-primary h5\">
                        Recent transactions
                    </h6>
                    <div class=\"\">
                        <a href=";
        // line 321
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction");
        yield " class=\"btn btn-primary btn-sm\">
                            View all transactions
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["txs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tx"]) {
            // line 341
            yield "                                        <tr>
                                            <td>
                                                ";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "date", [], "any", false, false, false, 343), "D, M d, Y g:i A"), "html", null, true);
            yield "
                                            </td>
                                            <td>
                                                ";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "description", [], "any", false, false, false, 346), "html", null, true);
            yield "
                                            </td>
                                            <td>
                                                <span class=\"badge bg-primary\">
                                                    \$";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["tx"], "amount", [], "any", false, false, false, 350), 2, ".", ""), "html", null, true);
            yield " 
                                                </span>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        yield "                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12 d-flex\">
                <!-- Card -->
                <div class=\"card border-0 flex-fill w-100\">
                    <div class=\"card-header border-0 card-header-space-between\">
                        <!-- Title -->
                        <h2 class=\"card-header-title h4 text-uppercase\">
                            Real time market data
                        </h2>
                    </div>
                    <div class=\"card-body d-flex flex-column\">
                        <!-- TradingView Widget BEGIN -->
                        <div class=\"tradingview-widget-container\">
                            <div class=\"tradingview-widget-container__widget\"></div>
                            <div class=\"tradingview-widget-copyright\"><a href=\"https://www.tradingview.com/\"
                                    rel=\"noopener nofollow\" target=\"_blank\"><span class=\"blue-text\">Track all markets on
                                        TradingView</span></a></div>
                            <script type=\"text/javascript\" src=\"https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js\"
                                async>
                                {
                                    \"width\": \"100%\",
                                    \"height\": \"550\",
                                    \"currencies\": [
                                        \"EUR\",
                                        \"USD\",
                                        \"JPY\",
                                        \"GBP\",
                                        \"CHF\",
                                        \"AUD\",
                                        \"CAD\",
                                        \"NZD\",
                                        \"CNY\",
                                        \"TRY\",
                                        \"SEK\",
                                        \"NOK\"
                                    ],
                                    \"isTransparent\": true,
                                    \"colorTheme\": \"light\",
                                    \"locale\": \"en\"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
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
        return "dashboard/index.html.twig";
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
        return array (  444 => 355,  433 => 350,  426 => 346,  420 => 343,  416 => 341,  412 => 340,  390 => 321,  376 => 309,  362 => 301,  346 => 288,  334 => 279,  324 => 272,  319 => 270,  312 => 265,  308 => 264,  300 => 259,  282 => 243,  276 => 235,  244 => 206,  238 => 203,  206 => 174,  200 => 171,  184 => 157,  171 => 114,  165 => 106,  139 => 82,  133 => 74,  103 => 47,  95 => 42,  89 => 39,  56 => 9,  51 => 6,  47 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/index.html.twig", "/home/evolvedchain.net/public_html/templates/dashboard/index.html.twig");
    }
}
