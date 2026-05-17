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

/* dashboard/invest.html.twig */
class __TwigTemplate_3ea123874d5f3411e92033e696d22e83 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/invest.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield " <div class=\"container-fluid mb-5\">
                <!-- Title -->
    <h1 class=\"h2\">
        Buy an investment plan
    </h1>
    <div wire:id=\"8Gnd6XaMxmVyli6B6tEL\" wire:initial-data=\"{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;8Gnd6XaMxmVyli6B6tEL&quot;,&quot;name&quot;:&quot;user.investment-plan&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard\\/buy-plan&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;252914ab&quot;,&quot;data&quot;:{&quot;planSelected&quot;:[],&quot;amountToInvest&quot;:0,&quot;disabled&quot;:&quot;disabled&quot;,&quot;paymentMethod&quot;:&quot;Account Balance&quot;,&quot;feedback&quot;:&quot;&quot;},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;planSelected&quot;:{&quot;class&quot;:&quot;App\\\\Models\\\\Plans&quot;,&quot;id&quot;:12,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;}}},&quot;checksum&quot;:&quot;4d82a5108bd167ee884a3e0e8704545f8edeaf9de4205221e8f41faa1b4d4305&quot;}}\">
    <div>
    </div>
    <div>
    </div>
            <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <!-- Remove 'active' class, this is just to show in Codepen thumbnail -->
                        
                        <div class=\"mt-5\">
                            <p class=\"mb-2\">Select an Investment Plan</p>
                            <select name=\"\" class=\"form-control d-block w-100\" onchange=\"selectPlan()\" id=\"plan\">
                            <option selected>Select Plan </option>
                            <option value=\"0\">RIOT BLOCKCHAIN </option>
                            <option value=\"1\">MARATHON </option>
                            <option value=\"2\">CANAAN (NASDAQ: CAN) </option>
                            <option value=\"3\">HUT 8 </option>
                            <option value=\"4\">CIPHER MINING </option>
                            </select>
                        </div>
                        <div class=\"mt-5\">
                            <p class=\"mb-0\">Choose Quick Amount to Invest</p>
                            <div class=\"flex-wrap mt-2 d-flex justify-content-between align-items-center\">
                                <button class=\"mb-2 btn btn-info\"
                                    onclick=\"selectAmount('100')\">\$100</button>
                                <button class=\"mb-2 rounded-none btn btn-info\"
                                onclick=\"selectAmount('250')\">\$250</button>
                                <button class=\"mb-2 rounded-none btn btn-info\"
                                onclick=\"selectAmount('500')\">\$500</button>
                                <button class=\"mb-2 rounded-none btn btn-info\"
                                onclick=\"selectAmount('1000')\">\$1,000</button>
                                <button class=\"mb-2 rounded-none btn btn-info\"
                                onclick=\"selectAmount('1500')\">\$1,500</button>
                                <button class=\"mb-2 rounded-none btn btn-info\"
                                onclick=\"selectAmount('2000')\">\$2,000</button>
                            </div>
                        </div>

                        <div class=\"mt-5\">
                            <p class=\"mb-2\">Or Enter Your Amount</p>
                            <input type=\"number\" required wire:model='amountToInvest' wire:keyup=\"checkIfAmountIsEmpty\"
                                name=\"\" id=\"amm\" onchange=\"setAmount()\" class=\"form-control d-block w-100\" placeholder=\"1000\"
                                min=\"100\"
                                max=\"1000\">
                        </div>

                        <div class=\"mt-5\">
                            <p class=\"mb-2\">Choose Payment Method</p>
                        </div>
                        <div class=\"select-menu2\">
                            <ul class=\"options2 d-block text-decoration-none\">
                                <li class=\"mb-3 option2 d-lg-flex justify-content-between align-items-center border border-primary\"
                                    wire:click=\"chanegePaymentMethod('Account Balance')\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-wallet\"></i>
                                        &nbsp; &nbsp;
                                        <span>Account Balance</span>
                                    </div>
                                    <span class=\"fs-3 font-weight-bold\">
                                        \$";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 70), "balance", [], "any", false, false, false, 70), 2, ".", ","), "html", null, true);
        yield "</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <p>Your Investment Details</p>
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <p class=\"mb-0 small\" >Name of plan</p>
                                <span class=\"text-primary small\" id=\"planname\">Select Plan</span>
                            </div>
                            
                            <div class=\"mb-3 col-md-6\">
                                <p class=\"mb-0 small\" >Duration</p>
                                <span
                                    class=\"text-primary small\" id=\"planduration\">Select Plan</span>
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <p class=\"mb-0 small\">Return Rate </p>
                                <span class=\"text-primary small\" id=\"planreturn\">
                                    Select Plan
                                </span>
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <p class=\"mb-0 small\" >Minimum Deposit</p>
                                <span
                                    class=\"text-primary small\" id=\"planmin\">Select Plan</span>
                            </div>


                            
                        </div>
                        <hr>
                        <div class=\"justify-content-between d-md-flex\">
                            <span class=\"small d-block d-md-inline\">Payment method:</span>
                            <span class=\"small text-primary\">Account Balance</span>
                        </div>
                        <hr>
                        <div class=\"justify-content-between d-md-flex\">
                            <span class=\"d-block d-md-inline font-weight-bold\">Amount to Invest:</span>
                            <span
                                class=\"text-primary font-weight-bold\" id=\"investamount\">\$100</span>
                        </div>
                        <div class=\"mt-3 text-center\">
                                <form action=\"\" wire:submit.prevent=\"joinPlan\" method=\"post\">
                                <input type=\"hidden\"  name=\"planname\" id=\"pname\">
                                <input type=\"hidden\"  name=\"duration\" id=\"pduration\">
                                <input type=\"hidden\"  name=\"return\" id=\"preturn\">
                                <input type=\"hidden\"  name=\"amount\" id=\"pamm\" value=\"100\" >
                                    <button type=\"submit\" name=\"inv\" id=\"invbtn\" class=\"px-3 btn btn-primary\" disabled>
                                        Confirm & Invest
                                    </button>
                                </form>
                            
                            <span class=\"mt-2 small text-primary\" wire:loading wire:target=\"joinPlan\">
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("customs/js/invest.js"), "html", null, true);
        yield "></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/invest.html.twig";
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
        return array (  189 => 137,  119 => 70,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/invest.html.twig", "/home/evolvedchain.net/public_html/templates/dashboard/invest.html.twig");
    }
}
