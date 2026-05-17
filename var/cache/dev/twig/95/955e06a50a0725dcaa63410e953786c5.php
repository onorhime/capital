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

/* dashboard/withdrawal.html.twig */
class __TwigTemplate_8bf09a57c5991920d1833e353b08a089 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/withdrawal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/withdrawal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/withdrawal.html.twig", 1);
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
        yield "    <div class=\"container-fluid mb-5\">
                <!-- Title -->
    <div class=\"mb-5\">
        <h1 class=\"h2 m-0\">
            Withdraw from your account.
        </h1>
        <p class=\"m-0\">Place a withdrawal request using any of the payment method below.</p>
    </div>
    <div>
    </div>
    <div>
    </div>
    <div class=\"row mb-6\">
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">BUSD</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$1,000 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$0
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: percentage
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    0%
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: 
                            </li>
                        </ul>
                                                    <form  method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"BUSD\" name=\"method\">
                                    <a href=";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfer", ["mode" => "busd"]);
        yield " class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">USDT</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$100 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$0
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: percentage
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    0%
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: Instant Payment
                            </li>
                        </ul>
                                                    <form method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"USDT\" name=\"method\">
                                    <a href=";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfer", ["mode" => "usdt"]);
        yield " class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">Litecoin</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$10,000 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$100
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: 0
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    \$0
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: Instant
                            </li>
                        </ul>
                                                    <form  method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"Litecoin\" name=\"method\">
                                    <a href=";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfer", ["mode" => "ltc"]);
        yield " class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">Ethereum</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$2,100 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$10
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: percentage
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    0%
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: Instant
                            </li>
                        </ul>
                                                    <form  method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"Ethereum\" name=\"method\">
                                    <a href=";
        // line 261
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfer", ["mode" => "eth"]);
        yield " class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">Bitcoin</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$10,000 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$10
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: percentage
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    0%
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: Instant
                            </li>
                        </ul>
                                                    <form  method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"Bitcoin\" name=\"method\">
                                    <a href=";
        // line 324
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfer", ["mode" => "btc"]);
        yield " class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
        
        <div id=\"withdrawdisabled\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\"
            aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h3 class=\"modal-title\" id=\"exampleModalCenterTitle\">Withdawal is disabled</h3>
                    </div>
                    <div class=\"modal-footer m-0\">
                        <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Close</button>
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
        return "dashboard/withdrawal.html.twig";
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
        return array (  403 => 324,  337 => 261,  271 => 198,  205 => 135,  139 => 72,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container-fluid mb-5\">
                <!-- Title -->
    <div class=\"mb-5\">
        <h1 class=\"h2 m-0\">
            Withdraw from your account.
        </h1>
        <p class=\"m-0\">Place a withdrawal request using any of the payment method below.</p>
    </div>
    <div>
    </div>
    <div>
    </div>
    <div class=\"row mb-6\">
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">BUSD</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$1,000 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$0
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: percentage
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    0%
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: 
                            </li>
                        </ul>
                                                    <form  method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"BUSD\" name=\"method\">
                                    <a href={{ path('transfer', {'mode': 'busd'}) }} class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">USDT</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$100 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$0
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: percentage
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    0%
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: Instant Payment
                            </li>
                        </ul>
                                                    <form method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"USDT\" name=\"method\">
                                    <a href={{ path('transfer', {'mode': 'usdt'}) }} class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">Litecoin</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$10,000 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$100
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: 0
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    \$0
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: Instant
                            </li>
                        </ul>
                                                    <form  method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"Litecoin\" name=\"method\">
                                    <a href={{ path('transfer', {'mode': 'ltc'}) }} class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">Ethereum</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$2,100 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$10
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: percentage
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    0%
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: Instant
                            </li>
                        </ul>
                                                    <form  method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"Ethereum\" name=\"method\">
                                    <a href={{ path('transfer', {'mode': 'eth'}) }} class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
                    <div class=\"col-xl-4\">
                <!-- Card -->
                <div class=\"card border-0 py-6 px-4 mb-6 mb-xl-3\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title h4 text-uppercase text-secondary text-center mb-3\">Bitcoin</h2>
                        <h3 class=\"card-text display-3 text-center\">
                            \$10,000 <span
                                class=\"fs-3 fw-normal text-secondary\">Max</span>
                        </h3>

                        <!-- Divider -->
                        <hr>

                        <ul class=\"list-unstyled mb-7\">
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Minimum amount: \$10
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charge Type: percentage
                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Charges Amount:
                                                                    0%
                                                            </li>
                            <li class=\"mb-3\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"12\" width=\"12\"
                                    class=\"me-2 text-primary\">
                                    <path
                                        d=\"M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z\"
                                        style=\"fill: currentColor\" />
                                </svg>
                                Duration: Instant
                            </li>
                        </ul>
                                                    <form  method=\"POST\">
                                <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                <div class=\"form-group\">
                                    <input type=\"hidden\" value=\"Bitcoin\" name=\"method\">
                                    <a href={{ path('transfer', {'mode': 'btc'}) }} class=\"btn btn-lg btn-primary w-100\" type='submit'>
                                        Select this method
                                    </a>
                                </div>
                            </form>
                                            </div>
                </div>
            </div>
        
        <div id=\"withdrawdisabled\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\"
            aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h3 class=\"modal-title\" id=\"exampleModalCenterTitle\">Withdawal is disabled</h3>
                    </div>
                    <div class=\"modal-footer m-0\">
                        <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
{% endblock %}", "dashboard/withdrawal.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/capital/templates/dashboard/withdrawal.html.twig");
    }
}
