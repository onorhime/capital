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

/* nav.html.twig */
class __TwigTemplate_c603a6ce634befc7ec3062864eaa515d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "                        <ul class=\"navbar-nav mb-lg-7\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='dashboard' href=";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield ">
                                    <i class=\"bi bi-house nav-link-icon fs-3\"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='deposit' href=";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deposit");
        yield ">
                                    <i class=\"bi bi-wallet-fill nav-link-icon fs-3\"></i>
                                    <span>Deposit</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='withdrawal' href=";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("withdrawal");
        yield ">
                                    <i class=\"bi bi-graph-down nav-link-icon fs-3\"></i>
                                    <span>Withdraw</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='transaction' href=";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction");
        yield ">
                                    <i class=\"bi bi-clock-history nav-link-icon fs-3\"></i>
                                    <span>Transaction History</span>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" id=\"invest\" href=\"#pagesCollapse\" data-bs-toggle=\"collapse\"
                                    role=\"button\" aria-expanded=\"false\" aria-controls=\"pagesCollapse\">
                                    <i class=\"bi bi-bounding-box nav-link-icon fs-3\"></i>
                                    <span>Investment</span>
                                </a>
                                    <div class=\"collapse\" id=\"pagesCollapse\">
                                        <ul class=\"nav flex-column\">
                                            <li class=\"nav-item\">
                                                <a href=";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invest");
        yield "  class=\"nav-link\">
                                                    <span>Invest</span>
                                                </a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plans");
        yield " class=\"nav-link\">
                                                    <span>My investments</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                               
                      

                            <li class=\"nav-item w-100\">
                                <hr>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"mailto:\" class=\"nav-link\" class=\"nav-link\">
                                    <i class=\"bi bi-info-circle-fill nav-link-icon fs-3\"></i>
                                    <span>Help & Support</span>
                                </a>
                            </li>
                        </ul>

                        <script>
                            let path =  \"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
        yield "\"
                           
                            document.getElementById(path).classList.add('active')
                        </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "nav.html.twig";
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
        return array (  118 => 61,  94 => 40,  86 => 35,  69 => 21,  60 => 15,  51 => 9,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav.html.twig", "/home/evolvedchain.net/public_html/templates/nav.html.twig");
    }
}
