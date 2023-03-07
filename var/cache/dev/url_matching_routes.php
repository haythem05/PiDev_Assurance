<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/sinistre' => [[['_route' => 'app_sinistre', '_controller' => 'App\\Controller\\SinistreController::index'], null, null, null, false, false, null]],
        '/afficheS' => [[['_route' => 'afficheS', '_controller' => 'App\\Controller\\SinistreController::afficheS'], null, null, null, false, false, null]],
        '/afficheSF' => [[['_route' => 'afficheSF', '_controller' => 'App\\Controller\\SinistreController::afficheSF'], null, null, null, false, false, null]],
        '/ajoutS' => [[['_route' => 'ajoutS', '_controller' => 'App\\Controller\\SinistreController::ajoutS'], null, null, null, false, false, null]],
        '/ajoutSF' => [[['_route' => 'ajoutSF', '_controller' => 'App\\Controller\\SinistreController::ajoutSF'], null, null, null, false, false, null]],
        '/sinistre/displayJSON' => [[['_route' => 'sinistre_displayJSON', '_controller' => 'App\\Controller\\SinistreController::displayJSON'], null, null, null, false, false, null]],
        '/sinistre/addJSON' => [[['_route' => 'sinistre_addJSON', '_controller' => 'App\\Controller\\SinistreController::addJSON'], null, null, null, false, false, null]],
        '/sinistre/search' => [[['_route' => 'search_sinistre', '_controller' => 'App\\Controller\\SinistreController::searchSinistre'], null, null, null, false, false, null]],
        '/sinistre/searchS' => [[['_route' => 'search_sinistreS', '_controller' => 'App\\Controller\\SinistreController::searchSinistreS'], null, null, null, false, false, null]],
        '/type' => [[['_route' => 'app_type', '_controller' => 'App\\Controller\\TypeController::index'], null, null, null, false, false, null]],
        '/afficheT' => [[['_route' => 'afficheT', '_controller' => 'App\\Controller\\TypeController::afficheT'], null, null, null, false, false, null]],
        '/ajoutT' => [[['_route' => 'ajoutT', '_controller' => 'App\\Controller\\TypeController::ajoutT'], null, null, null, false, false, null]],
        '/type/displayJSON' => [[['_route' => 'type_displayJSON', '_controller' => 'App\\Controller\\TypeController::displayJSON'], null, null, null, false, false, null]],
        '/type/addJSON' => [[['_route' => 'type_addJSON', '_controller' => 'App\\Controller\\TypeController::addJSON'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/sinistre/stats' => [[['_route' => 'app_sinistre_stat', '_controller' => 'App\\Controller\\SinistreController::stats'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_id_asc' => [[['_route' => 'sinistre_display_sorted_by_id_asc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByIdASC'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_type_asc' => [[['_route' => 'sinistre_display_sorted_by_type_asc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByTypeASC'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_date_asc' => [[['_route' => 'sinistre_display_sorted_by_date_asc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByDateASC'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_lieu_asc' => [[['_route' => 'sinistre_display_sorted_by_lieu_asc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByLieuASC'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_statut_asc' => [[['_route' => 'sinistre_display_sorted_by_statut_asc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByStatutASC'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_id_desc' => [[['_route' => 'sinistre_display_sorted_by_id_desc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByIdDESC'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_type_desc' => [[['_route' => 'sinistre_display_sorted_by_type_desc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByTypeDESC'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_date_desc' => [[['_route' => 'sinistre_display_sorted_by_date_desc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByDateDESC'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_lieu_desc' => [[['_route' => 'sinistre_display_sorted_by_lieu_desc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByLieuDESC'], null, null, null, false, false, null]],
        '/sinistre/sorted_by_statut_desc' => [[['_route' => 'sinistre_display_sorted_by_statut_desc', '_controller' => 'App\\Controller\\SinistreController::displaySortedByStatutDESC'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/s(?'
                    .'|upp(?'
                        .'|S(?'
                            .'|/([^/]++)(*:31)'
                            .'|F/([^/]++)(*:48)'
                        .')'
                        .'|T/([^/]++)(*:66)'
                    .')'
                    .'|tatut/([^/]++)(*:88)'
                    .'|inistre/(?'
                        .'|editJSON/([^/]++)(*:123)'
                        .'|deleteJSON/([^/]++)(*:150)'
                    .')'
                .')'
                .'|/modif(?'
                    .'|S(?'
                        .'|/([^/]++)(*:182)'
                        .'|F/([^/]++)(*:200)'
                    .')'
                    .'|T/([^/]++)(*:219)'
                .')'
                .'|/type/(?'
                    .'|editJSON/([^/]++)(*:254)'
                    .'|deleteJSON/([^/]++)(*:281)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:321)'
                    .'|wdt/([^/]++)(*:341)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:387)'
                            .'|router(*:401)'
                            .'|exception(?'
                                .'|(*:421)'
                                .'|\\.css(*:434)'
                            .')'
                        .')'
                        .'|(*:444)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'suppS', '_controller' => 'App\\Controller\\SinistreController::suppS'], ['id'], null, null, false, true, null]],
        48 => [[['_route' => 'suppSF', '_controller' => 'App\\Controller\\SinistreController::suppSF'], ['id'], null, null, false, true, null]],
        66 => [[['_route' => 'suppT', '_controller' => 'App\\Controller\\TypeController::suppT'], ['id'], null, null, false, true, null]],
        88 => [[['_route' => 'statut', '_controller' => 'App\\Controller\\SinistreController::statut'], ['id'], null, null, false, true, null]],
        123 => [[['_route' => 'sinistre_editJSON', '_controller' => 'App\\Controller\\SinistreController::editJSON'], ['id'], null, null, false, true, null]],
        150 => [[['_route' => 'sinistre_deleteJSON', '_controller' => 'App\\Controller\\SinistreController::deleteJSON'], ['id'], null, null, false, true, null]],
        182 => [[['_route' => 'modifS', '_controller' => 'App\\Controller\\SinistreController::modifS'], ['id'], null, null, false, true, null]],
        200 => [[['_route' => 'modifSF', '_controller' => 'App\\Controller\\SinistreController::modifSF'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'modifT', '_controller' => 'App\\Controller\\TypeController::modifT'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'type_editJSON', '_controller' => 'App\\Controller\\TypeController::editJSON'], ['id'], null, null, false, true, null]],
        281 => [[['_route' => 'type_deleteJSON', '_controller' => 'App\\Controller\\TypeController::deleteJSON'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        341 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        387 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        401 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        421 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        434 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        444 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
