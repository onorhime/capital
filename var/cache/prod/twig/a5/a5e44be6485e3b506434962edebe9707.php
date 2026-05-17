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

/* dashboard/transfer.html.twig */
class __TwigTemplate_6146895e6f49005c55b75149bef1019a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/transfer.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <div class=\"container-fluid mb-5\">
                <!-- Title -->
    <h1 class=\"h2\">
        Complete withdrawal request
    </h1>
        <div>
    </div>
    <div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"mb-5 row\">
                        <div class=\"col-lg-8 offset-md-2\">
                            <div class=\"mb-3\">
                                <h4 class=\"h2\"> <i class=\"bi bi-cursor\"></i> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["mode"] ?? null)), "html", null, true);
        yield "</h4>
                            </div>
                                                            <form action=\"\" method=\"post\">
                                    <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                    <div class=\"mb-3\">
                                        <label class=\"\">Enter Amount to
                                            withdraw(\$)</label>
                                        <input class=\"form-control \" placeholder=\"Enter Amount\" type=\"number\"
                                            name=\"amount\" step=\"any\" required>
                                    </div>
                                    <input value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mode"] ?? null), "html", null, true);
        yield "\" type=\"hidden\" name=\"method\">

                                                                                                                                                            <div class=\"mb-3\">
                                                <h5 class=\"\">Enter ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["mode"] ?? null)), "html", null, true);
        yield " Address </h5>
                                                <input class=\"form-control \" placeholder=\"Enter ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["mode"] ?? null)), "html", null, true);
        yield " Address\"
                                                    type=\"text\" name=\"details\" required>
                                                <small class=\"\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["mode"] ?? null)), "html", null, true);
        yield " is not a default
                                                    withdrawal option in your account, please enter the correct
                                                    wallet address to recieve your funds.</small>
                                            </div>
                                                                                                                <div class=\"mb-3\">
                                        <button class=\"btn btn-primary\" type='submit' name=\"submit\">Complete Request</button>
                                    </div>
                                </form>
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
        return "dashboard/transfer.html.twig";
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
        return array (  96 => 36,  91 => 34,  87 => 33,  81 => 30,  69 => 21,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/transfer.html.twig", "/home/evolvedchain.net/public_html/templates/dashboard/transfer.html.twig");
    }
}
