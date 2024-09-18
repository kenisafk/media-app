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

/* document/index.html.twig */
class __TwigTemplate_60ddf244dd6ff442a6a9936b71ad36d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "document/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Document index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"mt-4\">
        <!-- 3x3 Grid Layout -->
        <h2 class=\"text-xl font-bold mb-4\">3x3 Grid Layout</h2>
        <div class=\"grid grid-cols-3 gap-4 mb-8\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 11
            yield "                <div class=\"bg-white border border-gray-300 rounded-lg shadow-md p-4\">
                    <h3 class=\"text-lg font-semibold mb-2\">
                        <a href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\" target=\"_blank\" class=\"text-blue-600 hover:underline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 13), "html", null, true);
            yield "</a>
                    </h3>
                    <p class=\"text-gray-700 mb-2\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["document"], "description", [], "any", false, false, false, 15), 0, 145) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["document"], "description", [], "any", false, false, false, 15)) > 45)) ? ("...") : (""))), "html", null, true);
            yield "</p>
                    <p class=\"text-gray-600 mb-2\">Source: ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "source", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                    <p class=\"text-gray-500 mb-2\">Published At: ";
            // line 17
            ((CoreExtension::getAttribute($this->env, $this->source, $context["document"], "publishedAt", [], "any", false, false, false, 17)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "publishedAt", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true)) : (yield "N/A"));
            yield "</p>
                    <p class=\"text-gray-600 mb-2\">Category: ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                    <a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "link", [], "any", false, false, false, 19), "html", null, true);
            yield "\" class=\"text-indigo-600 hover:underline\">👁️</a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            yield "                <p class=\"col-span-3 text-center text-gray-500\">No records found</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "        </div>

        <!-- 2x3 Grid Layout -->
        <h2 class=\"text-xl font-bold mb-4\">2x3 Grid Layout</h2>
        <div class=\"grid grid-cols-2 gap-4\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 30
            yield "                <div class=\"bg-white border border-gray-300 rounded-lg shadow-md p-4\">
                    <h3 class=\"text-lg font-semibold mb-2\">
                        <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" target=\"_blank\" class=\"text-blue-600 hover:underline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 32), "html", null, true);
            yield "</a>
                    </h3>
                    <p class=\"text-gray-700 mb-2\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                    <p class=\"text-gray-600 mb-2\">Source: ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "source", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
                    <p class=\"text-gray-500 mb-2\">Published At: ";
            // line 36
            ((CoreExtension::getAttribute($this->env, $this->source, $context["document"], "publishedAt", [], "any", false, false, false, 36)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "publishedAt", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true)) : (yield "N/A"));
            yield "</p>
                    <p class=\"text-gray-600 mb-2\">Category: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
                    <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "link", [], "any", false, false, false, 38), "html", null, true);
            yield "\" class=\"text-indigo-600 hover:underline\">👁️</a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            yield "                <p class=\"col-span-2 text-center text-gray-500\">No records found</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "        </div>
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
        return "document/index.html.twig";
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
        return array (  197 => 43,  190 => 41,  182 => 38,  178 => 37,  174 => 36,  170 => 35,  166 => 34,  159 => 32,  155 => 30,  150 => 29,  143 => 24,  136 => 22,  128 => 19,  124 => 18,  120 => 17,  116 => 16,  112 => 15,  105 => 13,  101 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Document index{% endblock %}

{% block body %}
    <div class=\"mt-4\">
        <!-- 3x3 Grid Layout -->
        <h2 class=\"text-xl font-bold mb-4\">3x3 Grid Layout</h2>
        <div class=\"grid grid-cols-3 gap-4 mb-8\">
            {% for document in documents %}
                <div class=\"bg-white border border-gray-300 rounded-lg shadow-md p-4\">
                    <h3 class=\"text-lg font-semibold mb-2\">
                        <a href=\"{{ path('app_document_show', {'id': document.id}) }}\" target=\"_blank\" class=\"text-blue-600 hover:underline\">{{ document.title }}</a>
                    </h3>
                    <p class=\"text-gray-700 mb-2\">{{ document.description|slice(0, 145) ~ (document.description|length > 45 ? '...' : '') }}</p>
                    <p class=\"text-gray-600 mb-2\">Source: {{ document.source }}</p>
                    <p class=\"text-gray-500 mb-2\">Published At: {{ document.publishedAt ? document.publishedAt|date('Y-m-d') : 'N/A' }}</p>
                    <p class=\"text-gray-600 mb-2\">Category: {{ document.category }}</p>
                    <a href=\"{{ document.link }}\" class=\"text-indigo-600 hover:underline\">👁️</a>
                </div>
            {% else %}
                <p class=\"col-span-3 text-center text-gray-500\">No records found</p>
            {% endfor %}
        </div>

        <!-- 2x3 Grid Layout -->
        <h2 class=\"text-xl font-bold mb-4\">2x3 Grid Layout</h2>
        <div class=\"grid grid-cols-2 gap-4\">
            {% for document in documents %}
                <div class=\"bg-white border border-gray-300 rounded-lg shadow-md p-4\">
                    <h3 class=\"text-lg font-semibold mb-2\">
                        <a href=\"{{ path('app_document_show', {'id': document.id}) }}\" target=\"_blank\" class=\"text-blue-600 hover:underline\">{{ document.title }}</a>
                    </h3>
                    <p class=\"text-gray-700 mb-2\">{{ document.description }}</p>
                    <p class=\"text-gray-600 mb-2\">Source: {{ document.source }}</p>
                    <p class=\"text-gray-500 mb-2\">Published At: {{ document.publishedAt ? document.publishedAt|date('Y-m-d') : 'N/A' }}</p>
                    <p class=\"text-gray-600 mb-2\">Category: {{ document.category }}</p>
                    <a href=\"{{ document.link }}\" class=\"text-indigo-600 hover:underline\">👁️</a>
                </div>
            {% else %}
                <p class=\"col-span-2 text-center text-gray-500\">No records found</p>
            {% endfor %}
        </div>
    </div>
{% endblock %}

", "document/index.html.twig", "/var/www/html/templates/document/index.html.twig");
    }
}
