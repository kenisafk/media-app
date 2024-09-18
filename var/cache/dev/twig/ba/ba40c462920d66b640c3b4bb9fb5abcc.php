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

/* @DukecityCommandScheduler/layout.html.twig */
class __TwigTemplate_b36ad0bd7934b53a0049e733f6867baa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/layout.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", ["_locale", "en"], "method", false, false, false, 3), "html", null, true);
        yield "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Command Scheduler ";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/select2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/datatables.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/dataTables.bootstrap4.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/css/custom.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
</head>
<body id=\"dukecity\">
";
        // line 17
        yield from         $this->loadTemplate("@DukecityCommandScheduler/Navbar/navbar.html.twig", "@DukecityCommandScheduler/layout.html.twig", 17)->unwrap()->yield($context);
        // line 18
        yield "<div class=\"\">
    <div class=\"container-fluid\" style=\"margin-top:30px; max-width: 1300px; margin-bottom: 50px;\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                ";
        // line 24
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "session", [], "any", false, false, false, 24), "flashbag", [], "any", false, false, false, 24), "get", ["success"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            yield "                    <div class=\"alert alert-success\" role=\"alert\">
                        ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
                ";
        // line 31
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "flashbag", [], "any", false, false, false, 31), "get", ["error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            yield "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "
                ";
        // line 37
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 38
        yield "            </div>
        </div>
    </div>
</div><!-- /container -->

<script type=\"text/javascript\" src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/jquery-3.6.0.slim.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/jquery-migrate-3.3.2.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/bootstrap-confirmation.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/select2.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/datatables.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dukecitycommandscheduler/js/dataTables.bootstrap4.min.js"), "html", null, true);
        yield "\"></script>

<script type=\"text/javascript\">

    \$(document).ready(function () {

        // Enable bootstrap-confirmation (https://bootstrap-confirmation.js.org/)
        \$('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            container: 'body',
            singleton: true,
            popout: true,
            placement: 'left',
            btnOkClass: 'btn btn-danger',
            btnCancelLabel: 'Cancel',
            btnCancelClass: 'btn btn-secondary',
        });
    });

    ";
        // line 68
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 69
        yield "
</script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 68
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@DukecityCommandScheduler/layout.html.twig";
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
        return array (  246 => 68,  227 => 37,  208 => 8,  194 => 69,  192 => 68,  170 => 49,  166 => 48,  162 => 47,  158 => 46,  154 => 45,  150 => 44,  146 => 43,  139 => 38,  137 => 37,  134 => 36,  125 => 33,  122 => 32,  117 => 31,  114 => 29,  105 => 26,  102 => 25,  97 => 24,  90 => 18,  88 => 17,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  50 => 3,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'DukecityCommandScheduler' %}
<!DOCTYPE html>
<html lang=\"{{ app.request.attributes.get('_locale', 'en') }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Command Scheduler {% block title %}{% endblock title %}</title>
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/select2.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/datatables.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/dukecitycommandscheduler/css/custom.css') }}\" rel=\"stylesheet\">
</head>
<body id=\"dukecity\">
{% include '@DukecityCommandScheduler/Navbar/navbar.html.twig' %}
<div class=\"\">
    <div class=\"container-fluid\" style=\"margin-top:30px; max-width: 1300px; margin-bottom: 50px;\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                {# Succes flash messages #}
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"alert alert-success\" role=\"alert\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}

                {# Errors flash messages #}
                {% for flashMessage in app.session.flashbag.get('error') %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}

                {% block content %}{% endblock content %}
            </div>
        </div>
    </div>
</div><!-- /container -->

<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/jquery-3.6.0.slim.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/jquery-migrate-3.3.2.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/bootstrap.bundle.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/bootstrap-confirmation.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/select2.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/datatables.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/dukecitycommandscheduler/js/dataTables.bootstrap4.min.js') }}\"></script>

<script type=\"text/javascript\">

    \$(document).ready(function () {

        // Enable bootstrap-confirmation (https://bootstrap-confirmation.js.org/)
        \$('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            container: 'body',
            singleton: true,
            popout: true,
            placement: 'left',
            btnOkClass: 'btn btn-danger',
            btnCancelLabel: 'Cancel',
            btnCancelClass: 'btn btn-secondary',
        });
    });

    {% block javascript %}{% endblock javascript %}

</script>
</body>
</html>", "@DukecityCommandScheduler/layout.html.twig", "/var/www/html/vendor/dukecity/command-scheduler-bundle/Resources/views/layout.html.twig");
    }
}
