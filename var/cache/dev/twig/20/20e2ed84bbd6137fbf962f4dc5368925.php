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

/* kpn.html.twig */
class __TwigTemplate_e41b0e2932a059a2fe8e109dbf4c799a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kpn.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kpn.html.twig"));

        // line 1
        yield "<nav>
        <ul class=\"pagination\">
            
                ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 4, $this->source); })()), "pages", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            yield "                    <li class=\"page-item ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["page"], "isCurrentPage", [], "any", false, false, false, 5)) {
                yield "disabled";
            }
            yield "\">
                    <a type=\"button\" href=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 6), "html", null, true);
            yield "\" dusk=\"nextPage\" class=\"page-link\" wire:click=\"nextPage\" wire:loading.attr=\"disabled\" rel=\"next\" aria-label=\"Next &raquo;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "pageNumber", [], "any", false, false, false, 6), "html", null, true);
            yield "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "            </ul>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "kpn.html.twig";
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
        return array (  71 => 9,  60 => 6,  53 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
        <ul class=\"pagination\">
            
                {% for page in pagination.pages %}
                    <li class=\"page-item {% if page.isCurrentPage %}disabled{% endif %}\">
                    <a type=\"button\" href=\"{{page.url}}\" dusk=\"nextPage\" class=\"page-link\" wire:click=\"nextPage\" wire:loading.attr=\"disabled\" rel=\"next\" aria-label=\"Next &raquo;\">{{page.pageNumber}}</a>
                </li>
                {% endfor %}
            </ul>
</nav>", "kpn.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/capital/templates/kpn.html.twig");
    }
}
