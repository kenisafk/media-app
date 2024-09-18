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

/* @DukecityCommandScheduler/Detail/index.html.twig */
class __TwigTemplate_d8e7bbc4354ac1fdd2672fc23f572d64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@DukecityCommandScheduler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/Detail/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/Detail/index.html.twig"));

        $this->parent = $this->loadTemplate("@DukecityCommandScheduler/layout.html.twig", "@DukecityCommandScheduler/Detail/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.title", [], "DukecityCommandScheduler"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        yield "
    ";
        // line 11
        $context["styleConfiguration"] = ["class" => "form-control"];
        // line 12
        yield "<div class=\"card\">
    ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
    <div class=\"card-header\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.title", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">

        <div class=\"row\">
        <div class=\"col-lg-6 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header text-white bg-secondary\">
                ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("card.header.title", [], "DukecityCommandScheduler"), "html", null, true);
        yield "
            </div>
            <div class=\"card-body\">
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'row', ["attr" => Twig\Extension\CoreExtension::merge((isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 24, $this->source); })()), ["placeholder" => "name"])]);
        yield "

                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 26, $this->source); })()), "logFile", [], "any", false, false, false, 26), 'row', ["attr" => Twig\Extension\CoreExtension::merge((isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 26, $this->source); })()), ["placeholder" => "myFile.log"])]);
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 27, $this->source); })()), "priority", [], "any", false, false, false, 27), 'row', ["attr" => (isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 27, $this->source); })())]);
        yield "
                <div>
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 29, $this->source); })()), "executeImmediately", [], "any", false, false, false, 29), 'row', ["label_attr" => ["class" => "checkbox-custom"]]);
        yield "
                </div>
                <div>
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 32, $this->source); })()), "disabled", [], "any", false, false, false, 32), 'row', ["label_attr" => ["class" => "checkbox-custom"]]);
        yield "
                </div>
            </div>
        </div>
        </div>

        <div class=\"col-lg-6 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header text-white bg-secondary\">
                ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("card.header.title", [], "DukecityCommandScheduler"), "html", null, true);
        yield "
            </div>
            <div class=\"card-body\">
                ";
        // line 45
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 45, $this->source); })()), "command", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control select2"]]);
        yield "
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 46, $this->source); })()), "arguments", [], "any", false, false, false, 46), 'row', ["attr" => Twig\Extension\CoreExtension::merge((isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 46, $this->source); })()), ["placeholder" => "--argument1=foo --bar"])]);
        yield "
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 47, $this->source); })()), "cronExpression", [], "any", false, false, false, 47), 'row', ["attr" => Twig\Extension\CoreExtension::merge((isset($context["styleConfiguration"]) || array_key_exists("styleConfiguration", $context) ? $context["styleConfiguration"] : (function () { throw new RuntimeError('Variable "styleConfiguration" does not exist.', 47, $this->source); })()), ["placeholder" => "*/10 * * * *"])]);
        yield "
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 48, $this->source); })()), "pingBackUrl", [], "any", false, false, false, 48), 'row');
        yield "
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 49, $this->source); })()), "pingBackFailedUrl", [], "any", false, false, false, 49), 'row');
        yield "
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 50, $this->source); })()), "notes", [], "any", false, false, false, 50), 'row');
        yield "
            </div>
        </div>
        </div>
        </div>

    </div>
    <div class=\"card-footer\">
        ";
        // line 59
        yield "        <div class=\"\">
            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_list");
        yield "\" class=\"btn btn-danger btn-lg float-left\" role=\"button\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</a>
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 61, $this->source); })()), "save", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "btn btn-success btn-lg float-right"]]);
        yield "
        </div>
    </div>
    ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["scheduledCommandForm"]) || array_key_exists("scheduledCommandForm", $context) ? $context["scheduledCommandForm"] : (function () { throw new RuntimeError('Variable "scheduledCommandForm" does not exist.', 64, $this->source); })()), 'form_end');
        yield "
</div>
";
        
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

        // line 69
        yield "    \$(document).ready(function() {
        \$('.select2').select2();
    });
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
        return "@DukecityCommandScheduler/Detail/index.html.twig";
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
        return array (  232 => 69,  222 => 68,  208 => 64,  202 => 61,  196 => 60,  193 => 59,  182 => 50,  178 => 49,  174 => 48,  170 => 47,  166 => 46,  161 => 45,  155 => 41,  143 => 32,  137 => 29,  132 => 27,  128 => 26,  123 => 24,  117 => 21,  107 => 14,  103 => 13,  100 => 12,  98 => 11,  95 => 10,  85 => 9,  71 => 6,  61 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@DukecityCommandScheduler/layout.html.twig\" %}
{% trans_default_domain 'DukecityCommandScheduler' %}
{# % form_theme form 'bootstrap_4_layout.html.twig' %} #}

{% block title %}
    {{ 'detail.title'|trans }}
{% endblock title %}

{% block content %}

    {% set styleConfiguration = {'class': 'form-control'} %}
<div class=\"card\">
    {{ form_start( scheduledCommandForm) }}
    <div class=\"card-header\">{{ 'list.title'|trans }}</div>
    <div class=\"card-body\">

        <div class=\"row\">
        <div class=\"col-lg-6 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header text-white bg-secondary\">
                {{ 'card.header.title'|trans }}
            </div>
            <div class=\"card-body\">
                {{ form_row( scheduledCommandForm.name, {'attr': styleConfiguration|merge({'placeholder': 'name'}) } ) }}

                {{ form_row( scheduledCommandForm.logFile, {'attr': styleConfiguration|merge({'placeholder': 'myFile.log'}) } ) }}
                {{ form_row( scheduledCommandForm.priority, {'attr': styleConfiguration } ) }}
                <div>
                    {{ form_row(scheduledCommandForm.executeImmediately, {label_attr: {class: 'checkbox-custom'} }) }}
                </div>
                <div>
                    {{ form_row(scheduledCommandForm.disabled, {label_attr: {class: 'checkbox-custom'} }) }}
                </div>
            </div>
        </div>
        </div>

        <div class=\"col-lg-6 col-sm-12\">
        <div class=\"card\">
            <div class=\"card-header text-white bg-secondary\">
                {{ 'card.header.title'|trans }}
            </div>
            <div class=\"card-body\">
                {# Form's fields #}
                {{ form_row( scheduledCommandForm.command, {'attr': {'class': 'form-control select2'} } ) }}
                {{ form_row( scheduledCommandForm.arguments, {'attr': styleConfiguration|merge({'placeholder': '--argument1=foo --bar'}) } ) }}
                {{ form_row( scheduledCommandForm.cronExpression, {'attr': styleConfiguration|merge({'placeholder': '*/10 * * * *'}) } ) }}
                {{ form_row( scheduledCommandForm.pingBackUrl ) }}
                {{ form_row( scheduledCommandForm.pingBackFailedUrl ) }}
                {{ form_row( scheduledCommandForm.notes ) }}
            </div>
        </div>
        </div>
        </div>

    </div>
    <div class=\"card-footer\">
        {# Form's actions #}
        <div class=\"\">
            <a href=\"{{ path('dukecity_command_scheduler_list') }}\" class=\"btn btn-danger btn-lg float-left\" role=\"button\">{{ 'action.cancel'|trans }}</a>
            {{ form_row( scheduledCommandForm.save, {'attr': {'class': 'btn btn-success btn-lg float-right'} } ) }}
        </div>
    </div>
    {{ form_end( scheduledCommandForm ) }}
</div>
{% endblock content %}

{% block javascript %}
    \$(document).ready(function() {
        \$('.select2').select2();
    });
{% endblock javascript %}", "@DukecityCommandScheduler/Detail/index.html.twig", "/var/www/html/vendor/dukecity/command-scheduler-bundle/Resources/views/Detail/index.html.twig");
    }
}
