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

/* dashboard/payment.html.twig */
class __TwigTemplate_18a9e0b525c5e4896f3e3163e13c1cc2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/payment.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <div class=\"container-fluid mb-5\">
                    <div>
    </div>
    <div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <h1 class=\"h2\">
                    Make payment
                </h1>
                <div>
                    <a href=";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield " class=\"btn btn-danger btn-sm\">
                        <i class=\"bi bi-x\"></i>
                        Cancel payment
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"avatar avatar-lg text-bg-gray-300 d-flex align-items-center justify-content-center\">
                                                            <svg width=\"42px\" height=\"37px\" viewBox=\"0 0 1024 1024\" class=\"icon\" version=\"1.1\"
                                    xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M512 512m-480 0a480 480 0 1 0 960 0 480 480 0 1 0-960 0Z\" fill=\"#E9E8FF\" />
                                    <path d=\"M467.2 332.8l230.4-83.2 44.8 83.2zM384 332.8l96-83.2 38.4 51.2-64 32z\"
                                        fill=\"#C6C9FF\" />
                                    <path
                                        d=\"M300.8 755.2c-25.6 0-51.2-25.6-51.2-51.2V384c0-25.6 25.6-51.2 51.2-51.2h428.8c25.6 0 51.2 25.6 51.2 51.2v313.6c0 25.6-25.6 51.2-51.2 51.2l-428.8 6.4z\"
                                        fill=\"#8880FE\" />
                                    <path
                                        d=\"M761.6 608H704c-25.6 0-51.2-19.2-51.2-51.2v-19.2c0-25.6 25.6-51.2 51.2-51.2h57.6c25.6 0 51.2 19.2 51.2 51.2v25.6c0 25.6-19.2 44.8-51.2 44.8z\"
                                        fill=\"#C6C9FF\" />
                                </svg>
                                                    </div>
                        <div>
                            <h1>\$ ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["amount"] ?? null), "html", null, true);
        yield "</h1>
                        </div>
                    </div>
                    <!-- Title -->
                    <h3 class=\"card-title mt-3 mb-0 text-dark\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["method"] ?? null)), "html", null, true);
        yield "</h3>
                    <span class=\"text-muted m-0 p-0\">Pay via ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>
                        <div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 offset-lg-2\" x-data=\"{
                            address: '";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["address"] ?? null), "html", null, true);
        yield "',
                            copyToClipboard(text) {
                                navigator.clipboard.writeText(text)
                                if (!navigator.clipboard) {
                                    return alert('Copying to clipboard only works on secure sites viewed through a modern browser.')
                                }
                                navigator.clipboard.writeText(text)
                                    .then(() => {
                                        var toastOptions = {
                                            'closeButton': false,
                                            'debug': false,
                                            'newestOnTop': false,
                                            'progressBar': false,
                                            'positionClass': 'toast-top-right',
                                            'preventDuplicates': false,
                                            'onclick': null,
                                            'showDuration': '300',
                                            'hideDuration': '1000',
                                            'timeOut': '5000',
                                            'extendedTimeOut': '1000',
                                            'showEasing': 'swing',
                                            'hideEasing': 'linear',
                                            'showMethod': 'fadeIn',
                                            'hideMethod': 'fadeOut'
                                        };
                                        Command: toastr['success']('Copied to clipboard', 'Success')
                                        toastr.options = toastOptions;
                                    })
                            },
                        }\">
                                                                                            <div class=\"mt-5\">
                                    <p class=\"m-0\">
                                        Or Send \$";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["amount"] ?? null), "html", null, true);
        yield " to the
                                        address below
                                    </p>
                                    <div class=\"d-flex mt-2\">
                                        <input id=\"key-02\" class=\"form-control me-3\"
                                            value=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["address"] ?? null), "html", null, true);
        yield "\" readonly>
                                        <div>
                                            <!-- Button -->
                                            <button class=\"clipboard btn btn-link px-0\" data-clipboard-target=\"#key-02\"
                                                data-bs-toggle=\"tooltip\" data-bs-title=\"Copy to clipboard\"
                                                x-on:click=\"copyToClipboard(address)\">
                                                <i class=\"bi bi-clipboard fs-3\"></i>
                                            </button>
                                        </div>

                                    </div>
                                                                            <small class=\"d-block mt-1\">
                                            <strong>Network Type:</strong>
                                            ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
        yield "
                                        </small>
                                                                    </div>
                                <button type=\"button\" class=\"btn btn-primary mt-5\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalCenter\">
    Mark as Completed
</button>

<div id=\"exampleModalCenter\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3 class=\"modal-title\" id=\"exampleModalCenterTitle\">Upload payment
                    receipt</h3>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <form method=\"post\" action=\"payment\" enctype=\"multipart/form-data\"
                onsubmit=\"document.getElementById('savebtn').disabled = true;\">
                <input type=\"hidden\" name=\"_tokenp\" value=\"yqqzCPptpxuAusOuRA9DuuripbN25P2bEnBtghyv\">                <div class=\"modal-body m-0\">
                    <div class=\"mb-3\">
                        <input type=\"file\" name=\"proof\" class=\"form-control\" required>
                    </div>
                    <input type=\"hidden\" name=\"amount\" value=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["amount"] ?? null), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"method\" value=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
        yield "\">
                </div>
                <div class=\"modal-footer m-0\">
                    <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"submit\" class=\"btn btn-primary\" name=\"save\" id=\"savebtn\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
        return "dashboard/payment.html.twig";
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
        return array (  208 => 133,  204 => 132,  179 => 110,  163 => 97,  155 => 92,  120 => 60,  105 => 48,  101 => 47,  94 => 43,  65 => 17,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/payment.html.twig", "/home/evolvedchain.net/public_html/templates/dashboard/payment.html.twig");
    }
}
