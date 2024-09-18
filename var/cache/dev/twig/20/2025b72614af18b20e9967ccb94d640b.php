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
class __TwigTemplate_861f17d14e1a7965cb49f706d405f88f extends Template
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
        yield "<script>
      document.addEventListener('DOMContentLoaded', function () {
            const gridItems = document.querySelectorAll('.grid-item');
            gridItems.forEach(item => {
                const randomSize = Math.floor(Math.random() * 2) + 1; // Random number between 1 and 4
                item.style.gridColumn = `span \${randomSize}`;
            });
        });
</script>
    <div class=\"mt-4\">
        <p class=\"text-gray-600 mb-4\">Total Documents: ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["documentCount"]) || array_key_exists("documentCount", $context) ? $context["documentCount"] : (function () { throw new RuntimeError('Variable "documentCount" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "</p>

        <div class=\"flex flex-wrap gap-4 p-4\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 20
            yield "                    <span class=\"px-4 py-2 border border-gray-300 rounded bg-white text-gray-800\">
                        ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["source"], "name", [], "any", false, false, false, 21), "html", null, true);
            yield "
                    </span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "            </div>
        <!-- 3x3 Grid Layout --> 

        <h2 class=\"text-xl font-bold mb-4\">3x3 Grid Layout</h2>
       <div class=\"grid grid-cols-3 gap-4 mb-8\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 30
            yield "        <div class=\"bg-gray-200 border border-gray-300 rounded-sm shadow-md p-4 grid-item\">
            <h3 class=\"text-lg font-semibold mb-2\">
                <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" target=\"_blank\" class=\"text-gray-600 hover:underline\">👁️‍🗨️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 32), "html", null, true);
            yield "</a>
            </h3>
            <p class=\"text-gray-700 mb-2\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["document"], "description", [], "any", false, false, false, 34), 0, 145) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["document"], "description", [], "any", false, false, false, 34)) > 45)) ? ("...") : (""))), "html", null, true);
            yield "</p>
            <p class=\"text-gray-600 mb-2\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "source", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
            <p class=\"text-gray-500 mb-2\">";
            // line 36
            ((CoreExtension::getAttribute($this->env, $this->source, $context["document"], "publishedAt", [], "any", false, false, false, 36)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extension']->humanReadableDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "publishedAt", [], "any", false, false, false, 36)), "html", null, true)) : (yield "N/A"));
            yield "</p>
            <p class=\"text-gray-600 mb-2\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            yield "        <p class=\"col-span-3 text-center text-gray-500\">No records found</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "</div>



        <!-- 2x3 Grid Layout -->
        <h2 class=\"text-xl font-bold mb-4\">2x3 Grid Layout</h2>
        <div class=\"grid grid-cols-2 gap-4\">
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 50
            yield "                <div class=\"bg-white border border-gray-300 rounded-xl shadow-md p-4\">
                    <h3 class=\"text-lg font-semibold mb-2\">
                        <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_document_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" target=\"_blank\" class=\"text-gray-600 hover:underline\">👁️‍🗨️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "title", [], "any", false, false, false, 52), "html", null, true);
            yield "</a>
                    </h3>
                    <p class=\"text-gray-700 mb-2\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["document"], "description", [], "any", false, false, false, 54), 0, 145) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["document"], "description", [], "any", false, false, false, 54)) > 45)) ? ("...") : (""))), "html", null, true);
            yield "</p>
                    <p class=\"text-gray-600 mb-2\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "source", [], "any", false, false, false, 55), "html", null, true);
            yield "</p>
                    <p class=\"text-gray-500 mb-2\">";
            // line 56
            ((CoreExtension::getAttribute($this->env, $this->source, $context["document"], "publishedAt", [], "any", false, false, false, 56)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\Extension']->humanReadableDate(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "publishedAt", [], "any", false, false, false, 56)), "html", null, true)) : (yield "N/A"));
            yield "</p>
                    <p class=\"text-gray-600 mb-2\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["document"], "category", [], "any", false, false, false, 57), "html", null, true);
            yield "</p>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            yield "                <p class=\"col-span-2 text-center text-gray-500\">No records found</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        return array (  226 => 62,  219 => 60,  211 => 57,  207 => 56,  203 => 55,  199 => 54,  192 => 52,  188 => 50,  183 => 49,  174 => 42,  167 => 40,  159 => 37,  155 => 36,  151 => 35,  147 => 34,  140 => 32,  136 => 30,  131 => 29,  124 => 24,  115 => 21,  112 => 20,  108 => 19,  102 => 16,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Document index{% endblock %}

{% block body %}
<script>
      document.addEventListener('DOMContentLoaded', function () {
            const gridItems = document.querySelectorAll('.grid-item');
            gridItems.forEach(item => {
                const randomSize = Math.floor(Math.random() * 2) + 1; // Random number between 1 and 4
                item.style.gridColumn = `span \${randomSize}`;
            });
        });
</script>
    <div class=\"mt-4\">
        <p class=\"text-gray-600 mb-4\">Total Documents: {{ documentCount }}</p>

        <div class=\"flex flex-wrap gap-4 p-4\">
                {% for source in sources %}
                    <span class=\"px-4 py-2 border border-gray-300 rounded bg-white text-gray-800\">
                        {{ source.name }}
                    </span>
                {% endfor %}
            </div>
        <!-- 3x3 Grid Layout --> 

        <h2 class=\"text-xl font-bold mb-4\">3x3 Grid Layout</h2>
       <div class=\"grid grid-cols-3 gap-4 mb-8\">
    {% for document in documents %}
        <div class=\"bg-gray-200 border border-gray-300 rounded-sm shadow-md p-4 grid-item\">
            <h3 class=\"text-lg font-semibold mb-2\">
                <a href=\"{{ path('app_document_show', {'id': document.id}) }}\" target=\"_blank\" class=\"text-gray-600 hover:underline\">👁️‍🗨️ {{ document.title }}</a>
            </h3>
            <p class=\"text-gray-700 mb-2\">{{ document.description|slice(0, 145) ~ (document.description|length > 45 ? '...' : '') }}</p>
            <p class=\"text-gray-600 mb-2\">{{ document.source }}</p>
            <p class=\"text-gray-500 mb-2\">{{ document.publishedAt ? document.publishedAt|human_readable_date : 'N/A' }}</p>
            <p class=\"text-gray-600 mb-2\">{{ document.category }}</p>
        </div>
    {% else %}
        <p class=\"col-span-3 text-center text-gray-500\">No records found</p>
    {% endfor %}
</div>



        <!-- 2x3 Grid Layout -->
        <h2 class=\"text-xl font-bold mb-4\">2x3 Grid Layout</h2>
        <div class=\"grid grid-cols-2 gap-4\">
            {% for document in documents %}
                <div class=\"bg-white border border-gray-300 rounded-xl shadow-md p-4\">
                    <h3 class=\"text-lg font-semibold mb-2\">
                        <a href=\"{{ path('app_document_show', {'id': document.id}) }}\" target=\"_blank\" class=\"text-gray-600 hover:underline\">👁️‍🗨️ {{ document.title }}</a>
                    </h3>
                    <p class=\"text-gray-700 mb-2\">{{ document.description|slice(0, 145) ~ (document.description|length > 45 ? '...' : '') }}</p>
                    <p class=\"text-gray-600 mb-2\">{{ document.source }}</p>
                    <p class=\"text-gray-500 mb-2\">{{ document.publishedAt ? document.publishedAt|human_readable_date: 'N/A' }}</p>
                    <p class=\"text-gray-600 mb-2\">{{ document.category }}</p>
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
