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

/* @DukecityCommandScheduler/List/index.html.twig */
class __TwigTemplate_9b1127717e7555fd579dd8232b7419a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/List/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DukecityCommandScheduler/List/index.html.twig"));

        $this->parent = $this->loadTemplate("@DukecityCommandScheduler/layout.html.twig", "@DukecityCommandScheduler/List/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.title", [], "DukecityCommandScheduler"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        yield "
<div class=\"card\">
    <div class=\"card-header\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.title", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
    <table id=\"duketown-cronjobs\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th data-searchable=\"false\" data-orderable=\"false\">&nbsp;</th>
                <th data-searchable=\"true\" data-orderable=\"true\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.name", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</th>
                <th data-searchable=\"true\" data-orderable=\"true\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.command", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</th>
                <th data-searchable=\"false\" data-orderable=\"false\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.cronExpression", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</th>
                <th data-searchable=\"true\" data-orderable=\"false\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.logFile", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</th>
                <th data-searchable=\"false\" data-orderable=\"true\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.lastExecution", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</th>
                <th data-searchable=\"false\" data-orderable=\"true\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.nextRun", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</th>
                <th data-searchable=\"false\" data-orderable=\"true\" class=\"text-right\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priority", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</th>
                <th data-searchable=\"false\" data-orderable=\"false\" class=\"text-right\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.actions", [], "DukecityCommandScheduler"), "html", null, true);
        yield "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scheduledCommands"]) || array_key_exists("scheduledCommands", $context) ? $context["scheduledCommands"] : (function () { throw new RuntimeError('Variable "scheduledCommands" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
            // line 29
            yield "            <tr ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["command"], "disabled", [], "any", false, false, false, 29) == true)) {
                yield "class=\"text-muted\" ";
            }
            yield ">
                <td ";
            // line 30
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["command"], "disabled", [], "any", false, false, false, 30) == false)) {
                yield "data-search=\"active\" data-order=\"0\"";
            } else {
                yield "data-search=\"deactive\" data-order=\"1\"";
            }
            yield ">
                    <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_action_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\"
                       data-toggle=\"confirmation\" data-btn-ok-label=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.disable", [], "DukecityCommandScheduler"), "html", null, true);
            yield "\" data-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.disable", [], "DukecityCommandScheduler"), "html", null, true);
            yield "\">
                    ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["command"], "disabled", [], "any", false, false, false, 33) == true)) {
                // line 34
                yield "                        <i class=\"bi bi-power text-danger\" title=\"Activate command\"></i>
                    ";
            } else {
                // line 36
                yield "                        <i class=\"bi bi-power text-success\" title=\"Deativate command\"></i>
                    ";
            }
            // line 38
            yield "                    </a>
                </td>
                <td data-search=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "\" data-order=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
                    <span style=\"font-size:14px;\" ";
            // line 41
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["command"], "disabled", [], "any", false, false, false, 41) == false)) {
                // line 42
                yield "                            class=\"badge badge-success\" title=\"Command is active\"
                            ";
            } else {
                // line 44
                yield "                            class=\"badge badge-danger\" title=\"Command is disabled\"
                            ";
            }
            // line 45
            yield ">
                    ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "name", [], "any", false, false, false, 46), "html", null, true);
            yield "
                    </span>
                </td>
                <td>
                    ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "command", [], "any", false, false, false, 50), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "arguments", [], "any", false, false, false, 50), "html", null, true);
            yield "
                </td>
                <td>
                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "cronExpression", [], "any", false, false, false, 53), "html", null, true);
            yield "
                </td>
                <td>
                    ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "logFile", [], "any", false, false, false, 56), "html", null, true);
            yield "
                </td>
                <td>
                    <span style=\"font-size:14px;\" class=\"badge badge-";
            // line 59
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["command"], "lastReturnCode", [], "any", false, false, false, 59) == 0)) {
                yield "success";
            } else {
                yield "danger";
            }
            yield "\" title=\"Last Return Code: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "lastReturnCode", [], "any", false, false, false, 59), "html", null, true);
            yield "\">
                    ";
            // line 60
            ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "lastExecution", [], "any", false, false, false, 60))) ? (yield "") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "lastExecution", [], "any", false, false, false, 60), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dateFormat", [], "DukecityCommandScheduler")), "html", null, true)));
            yield "
                    </span>
                </td>
                <td>
                    ";
            // line 64
            $context["nextRunDate"] = CoreExtension::getAttribute($this->env, $this->source, $context["command"], "getNextRunDate", [], "method", false, false, false, 64);
            // line 65
            yield "                    ";
            if ( !(null === (isset($context["nextRunDate"]) || array_key_exists("nextRunDate", $context) ? $context["nextRunDate"] : (function () { throw new RuntimeError('Variable "nextRunDate" does not exist.', 65, $this->source); })()))) {
                // line 66
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["nextRunDate"]) || array_key_exists("nextRunDate", $context) ? $context["nextRunDate"] : (function () { throw new RuntimeError('Variable "nextRunDate" does not exist.', 66, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dateFormat", [], "DukecityCommandScheduler")), "html", null, true);
                yield "
                    ";
            }
            // line 68
            yield "                </td>
                <td class=\"text-right\">
                    ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "priority", [], "any", false, false, false, 70), "html", null, true);
            yield "
                </td>
                <td style=\"min-width: 90px;\" class=\"action-container text-right\">
                    ";
            // line 73
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["command"], "locked", [], "any", false, false, false, 73) == true)) {
                // line 74
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_action_unlock", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                yield "\"
                           data-toggle=\"confirmation\"
                           data-btn-ok-label=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.unlock", [], "DukecityCommandScheduler"), "html", null, true);
                yield "\"
                           data-title=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.unlock", [], "DukecityCommandScheduler"), "html", null, true);
                yield "\" >
                            <i class=\"bi bi-lock-fill text-danger\" title=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.unlock", [], "DukecityCommandScheduler"), "html", null, true);
                yield "\"></i>
                        </a>
                    ";
            } else {
                // line 81
                yield "                       <div style=\"display: inline-block;\"> </div>
                    ";
            }
            // line 83
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_detail_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" >
                        <i class=\"bi bi-pencil-square\" title=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit", [], "DukecityCommandScheduler"), "html", null, true);
            yield "\"></i>
                    </a>
                    <a href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_action_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\"
                       data-toggle=\"confirmation\"
                       data-btn-ok-label=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete", [], "DukecityCommandScheduler"), "html", null, true);
            yield "\"
                       data-title=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.delete", [], "DukecityCommandScheduler"), "html", null, true);
            yield "\" >
                        <i class=\"bi bi-trash-fill text-danger\" title=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete", [], "DukecityCommandScheduler"), "html", null, true);
            yield "\"></i>
                    </a>
                    <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_action_execute", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\"
                       data-toggle=\"confirmation\"
                       data-btn-ok-label=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.execute", [], "DukecityCommandScheduler"), "html", null, true);
            yield "\"
                       data-title=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.execute", [], "DukecityCommandScheduler"), "html", null, true);
            yield "\"
                    >
                        <i class=\"bi bi-file-play text-";
            // line 97
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["command"], "executeImmediately", [], "any", false, false, false, 97) == true)) {
                yield "muted";
            } else {
                yield "success";
            }
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.execute", [], "DukecityCommandScheduler"), "html", null, true);
            yield "\"></i>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "        </tbody>
    </table>

    </div>
    <div class=\"card-footer\">
    <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dukecity_command_scheduler_detail_new");
        yield "\" class=\"btn btn-primary float-right\" role=\"button\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.new", [], "DukecityCommandScheduler"), "html", null, true);
        yield " »</a>
    </div>
</div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 113
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 114
        yield "\$(document).ready(function() {

    \$('#duketown-cronjobs').DataTable( {
        stateSave: true,
        dom: 'Bfrtip',
        buttons: [
            'colvis'
        ],
        /*rowGroup: {
            dataSrc: 1
        },*/
        order: [[ 6, \"desc\" ], [ 7, \"desc\" ]],
        columnDefs: [
            {
                \"targets\": [ 4 ],
                \"visible\": false,
                \"searchable\": false
            }
        ],
        paging: false,
        ordering: true,
        info: false,
        search: false,
        responsive: true
    } );
} );
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
        return "@DukecityCommandScheduler/List/index.html.twig";
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
        return array (  389 => 114,  379 => 113,  362 => 107,  355 => 102,  338 => 97,  333 => 95,  329 => 94,  324 => 92,  319 => 90,  315 => 89,  311 => 88,  306 => 86,  301 => 84,  296 => 83,  292 => 81,  286 => 78,  282 => 77,  278 => 76,  272 => 74,  270 => 73,  264 => 70,  260 => 68,  254 => 66,  251 => 65,  249 => 64,  242 => 60,  232 => 59,  226 => 56,  220 => 53,  212 => 50,  205 => 46,  202 => 45,  198 => 44,  194 => 42,  192 => 41,  186 => 40,  182 => 38,  178 => 36,  174 => 34,  172 => 33,  166 => 32,  162 => 31,  154 => 30,  147 => 29,  143 => 28,  136 => 24,  132 => 23,  128 => 22,  124 => 21,  120 => 20,  116 => 19,  112 => 18,  108 => 17,  99 => 11,  95 => 9,  85 => 8,  71 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@DukecityCommandScheduler/layout.html.twig\" %}
{% trans_default_domain 'DukecityCommandScheduler' %}

{% block title %}
    {{ 'list.title'|trans }}
{% endblock title %}

{% block content %}

<div class=\"card\">
    <div class=\"card-header\">{{ 'list.title'|trans }}</div>
    <div class=\"card-body\">
    <table id=\"duketown-cronjobs\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th data-searchable=\"false\" data-orderable=\"false\">&nbsp;</th>
                <th data-searchable=\"true\" data-orderable=\"true\">{{ \"detail.name\"|trans }}</th>
                <th data-searchable=\"true\" data-orderable=\"true\">{{ \"detail.command\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"false\">{{ \"detail.cronExpression\"|trans }}</th>
                <th data-searchable=\"true\" data-orderable=\"false\">{{ \"detail.logFile\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"true\">{{ \"detail.lastExecution\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"true\">{{ \"detail.nextRun\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"true\" class=\"text-right\">{{ \"detail.priority\"|trans }}</th>
                <th data-searchable=\"false\" data-orderable=\"false\" class=\"text-right\">{{ \"detail.actions\"|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for command in scheduledCommands %}
            <tr {% if command.disabled == true %}class=\"text-muted\" {% endif %}>
                <td {% if command.disabled == false %}data-search=\"active\" data-order=\"0\"{% else %}data-search=\"deactive\" data-order=\"1\"{% endif %}>
                    <a href=\"{{ path('dukecity_command_scheduler_action_toggle', {'id': command.id}) }}\"
                       data-toggle=\"confirmation\" data-btn-ok-label=\"{{ \"action.disable\"|trans }}\" data-title=\"{{ \"confirm.disable\"|trans }}\">
                    {% if command.disabled == true %}
                        <i class=\"bi bi-power text-danger\" title=\"Activate command\"></i>
                    {% else %}
                        <i class=\"bi bi-power text-success\" title=\"Deativate command\"></i>
                    {% endif %}
                    </a>
                </td>
                <td data-search=\"{{ command.name }}\" data-order=\"{{ command.name }}\">
                    <span style=\"font-size:14px;\" {% if command.disabled == false %}
                            class=\"badge badge-success\" title=\"Command is active\"
                            {% else %}
                            class=\"badge badge-danger\" title=\"Command is disabled\"
                            {% endif %}>
                    {{ command.name }}
                    </span>
                </td>
                <td>
                    {{ command.command }} {{ command.arguments }}
                </td>
                <td>
                    {{ command.cronExpression }}
                </td>
                <td>
                    {{ command.logFile }}
                </td>
                <td>
                    <span style=\"font-size:14px;\" class=\"badge badge-{% if command.lastReturnCode == 0 %}success{% else %}danger{% endif %}\" title=\"Last Return Code: {{ command.lastReturnCode }}\">
                    {{ command.lastExecution is empty ? \"\" : command.lastExecution|date( \"dateFormat\"|trans ) }}
                    </span>
                </td>
                <td>
                    {% set nextRunDate = command.getNextRunDate() %}
                    {% if nextRunDate is not null %}
                    {{ nextRunDate|date( \"dateFormat\"|trans ) }}
                    {% endif %}
                </td>
                <td class=\"text-right\">
                    {{ command.priority }}
                </td>
                <td style=\"min-width: 90px;\" class=\"action-container text-right\">
                    {% if command.locked == true %}
                        <a href=\"{{ path('dukecity_command_scheduler_action_unlock', {'id': command.id}) }}\"
                           data-toggle=\"confirmation\"
                           data-btn-ok-label=\"{{ \"action.unlock\"|trans }}\"
                           data-title=\"{{ \"confirm.unlock\"|trans }}\" >
                            <i class=\"bi bi-lock-fill text-danger\" title=\"{{ \"action.unlock\"|trans }}\"></i>
                        </a>
                    {% else %}
                       <div style=\"display: inline-block;\"> </div>
                    {% endif %}
                    <a href=\"{{ path('dukecity_command_scheduler_detail_edit', {'id': command.id}) }}\" >
                        <i class=\"bi bi-pencil-square\" title=\"{{ \"action.edit\"|trans }}\"></i>
                    </a>
                    <a href=\"{{ path('dukecity_command_scheduler_action_remove', {'id': command.id}) }}\"
                       data-toggle=\"confirmation\"
                       data-btn-ok-label=\"{{ \"action.delete\"|trans }}\"
                       data-title=\"{{ \"confirm.delete\"|trans }}\" >
                        <i class=\"bi bi-trash-fill text-danger\" title=\"{{ \"action.delete\"|trans }}\"></i>
                    </a>
                    <a href=\"{{ path('dukecity_command_scheduler_action_execute', {'id': command.id}) }}\"
                       data-toggle=\"confirmation\"
                       data-btn-ok-label=\"{{ \"action.execute\"|trans }}\"
                       data-title=\"{{ \"confirm.execute\"|trans }}\"
                    >
                        <i class=\"bi bi-file-play text-{% if command.executeImmediately == true %}muted{% else %}success{% endif %}\" title=\"{{ \"action.execute\"|trans }}\"></i>
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    </div>
    <div class=\"card-footer\">
    <a href=\"{{ path('dukecity_command_scheduler_detail_new') }}\" class=\"btn btn-primary float-right\" role=\"button\">{{ \"action.new\"|trans }} »</a>
    </div>
</div>
    {% endblock content %}


{% block javascript %}
\$(document).ready(function() {

    \$('#duketown-cronjobs').DataTable( {
        stateSave: true,
        dom: 'Bfrtip',
        buttons: [
            'colvis'
        ],
        /*rowGroup: {
            dataSrc: 1
        },*/
        order: [[ 6, \"desc\" ], [ 7, \"desc\" ]],
        columnDefs: [
            {
                \"targets\": [ 4 ],
                \"visible\": false,
                \"searchable\": false
            }
        ],
        paging: false,
        ordering: true,
        info: false,
        search: false,
        responsive: true
    } );
} );
{% endblock javascript %}

", "@DukecityCommandScheduler/List/index.html.twig", "/var/www/html/vendor/dukecity/command-scheduler-bundle/Resources/views/List/index.html.twig");
    }
}
