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
class __TwigTemplate_c11bf40146e76d19992e5a7e6887b5a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/transfer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/transfer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/transfer.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 21, $this->source); })())), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "\" type=\"hidden\" name=\"method\">

                                                                                                                                                            <div class=\"mb-3\">
                                                <h5 class=\"\">Enter ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 33, $this->source); })())), "html", null, true);
        yield " Address </h5>
                                                <input class=\"form-control \" placeholder=\"Enter ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 34, $this->source); })())), "html", null, true);
        yield " Address\"
                                                    type=\"text\" name=\"details\" required>
                                                <small class=\"\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 36, $this->source); })())), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  114 => 36,  109 => 34,  105 => 33,  99 => 30,  87 => 21,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block main %}
    <div class=\"container-fluid mb-5\">
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
                                <h4 class=\"h2\"> <i class=\"bi bi-cursor\"></i> {{mode|upper}}</h4>
                            </div>
                                                            <form action=\"\" method=\"post\">
                                    <input type=\"hidden\" name=\"_token\" value=\"cEKoloPHjmXSzxwlecdxKo4LEHWuwqmmLsKBTsis\">                                    <div class=\"mb-3\">
                                        <label class=\"\">Enter Amount to
                                            withdraw(\$)</label>
                                        <input class=\"form-control \" placeholder=\"Enter Amount\" type=\"number\"
                                            name=\"amount\" step=\"any\" required>
                                    </div>
                                    <input value=\"{{mode}}\" type=\"hidden\" name=\"method\">

                                                                                                                                                            <div class=\"mb-3\">
                                                <h5 class=\"\">Enter {{mode|upper}} Address </h5>
                                                <input class=\"form-control \" placeholder=\"Enter {{mode|upper}} Address\"
                                                    type=\"text\" name=\"details\" required>
                                                <small class=\"\">{{mode|upper}} is not a default
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
{% endblock %}", "dashboard/transfer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/capital/templates/dashboard/transfer.html.twig");
    }
}
