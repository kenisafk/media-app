<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/command-scheduler/list' => [[['_route' => 'dukecity_command_scheduler_list', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::indexAction'], null, null, null, false, false, null]],
        '/command-scheduler/monitor' => [[['_route' => 'dukecity_command_scheduler_monitor', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::monitorAction'], null, null, null, false, false, null]],
        '/command-scheduler/api/list' => [[['_route' => 'dukecity_command_scheduler_api_list', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::listAction'], null, null, null, false, false, null]],
        '/command-scheduler/api/console_commands' => [[['_route' => 'dukecity_command_scheduler_api_console_commands', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::getConsoleCommands'], null, null, null, false, false, null]],
        '/command-scheduler/detail/edit' => [[['_route' => 'dukecity_command_scheduler_detail_new', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\DetailController::edit'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/document' => [[['_route' => 'app_document_index', '_controller' => 'App\\Controller\\DocumentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/document/json' => [[['_route' => 'app_document_index_json', '_controller' => 'App\\Controller\\DocumentController::index_json'], null, ['GET' => 0], null, false, false, null]],
        '/rss/save' => [[['_route' => 'app_save_all_rss', '_controller' => 'App\\Controller\\GetRssController::save_all'], null, null, null, false, false, null]],
        '/source' => [[['_route' => 'app_source_index', '_controller' => 'App\\Controller\\SourceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/source/new' => [[['_route' => 'app_source_new', '_controller' => 'App\\Controller\\SourceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/source/level/new' => [[['_route' => 'app_source_level_new', '_controller' => 'App\\Controller\\SourceLevelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/command\\-scheduler/(?'
                    .'|a(?'
                        .'|pi/(?'
                            .'|console_commands_details(?:/([^/]++))?(*:273)'
                            .'|trans_cron_expression/([^/]++)(?:/([^/]++))?(*:325)'
                        .')'
                        .'|ction/(?'
                            .'|toggle/([^/]++)(*:358)'
                            .'|remove/([^/]++)(*:381)'
                            .'|execute/([^/]++)(*:405)'
                            .'|unlock/([^/]++)(*:428)'
                        .')'
                    .')'
                    .'|detail/edit/([^/]++)(*:458)'
                .')'
                .'|/document/([^/]++)(*:485)'
                .'|/rss/save/([^/]++)(*:511)'
                .'|/source/(?'
                    .'|([^/]++)(?'
                        .'|(*:541)'
                        .'|/edit(*:554)'
                        .'|(*:562)'
                    .')'
                    .'|level(?'
                        .'|(*:579)'
                        .'|/([^/]++)(?'
                            .'|(*:599)'
                            .'|/edit(*:612)'
                            .'|(*:620)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        273 => [[['_route' => 'dukecity_command_scheduler_api_console_commands_details', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::getConsoleCommandsDetails', 'commands' => 'all'], ['commands'], null, null, false, true, null]],
        325 => [[['_route' => 'dukecity_command_scheduler_api_translate_cron_expression', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::translateCronExpression', 'lang' => 'en'], ['cronExpression', 'lang'], null, null, false, true, null]],
        358 => [[['_route' => 'dukecity_command_scheduler_action_toggle', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::toggleAction'], ['id'], null, null, false, true, null]],
        381 => [[['_route' => 'dukecity_command_scheduler_action_remove', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::removeAction'], ['id'], null, null, false, true, null]],
        405 => [[['_route' => 'dukecity_command_scheduler_action_execute', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::executeAction'], ['id'], null, null, false, true, null]],
        428 => [[['_route' => 'dukecity_command_scheduler_action_unlock', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::unlockAction'], ['id'], null, null, false, true, null]],
        458 => [[['_route' => 'dukecity_command_scheduler_detail_edit', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\DetailController::edit'], ['id'], null, null, false, true, null]],
        485 => [[['_route' => 'app_document_show', '_controller' => 'App\\Controller\\DocumentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        511 => [[['_route' => 'app_save_source_rss', '_controller' => 'App\\Controller\\GetRssController::save'], ['source'], null, null, false, true, null]],
        541 => [[['_route' => 'app_source_show', '_controller' => 'App\\Controller\\SourceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        554 => [[['_route' => 'app_source_edit', '_controller' => 'App\\Controller\\SourceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        562 => [[['_route' => 'app_source_delete', '_controller' => 'App\\Controller\\SourceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        579 => [[['_route' => 'app_source_level_index', '_controller' => 'App\\Controller\\SourceLevelController::index'], [], ['GET' => 0], null, false, false, null]],
        599 => [[['_route' => 'app_source_level_show', '_controller' => 'App\\Controller\\SourceLevelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        612 => [[['_route' => 'app_source_level_edit', '_controller' => 'App\\Controller\\SourceLevelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        620 => [
            [['_route' => 'app_source_level_delete', '_controller' => 'App\\Controller\\SourceLevelController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
