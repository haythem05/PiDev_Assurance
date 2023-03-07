<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_sinistre' => [[], ['_controller' => 'App\\Controller\\SinistreController::index'], [], [['text', '/sinistre']], [], [], []],
    'afficheS' => [[], ['_controller' => 'App\\Controller\\SinistreController::afficheS'], [], [['text', '/afficheS']], [], [], []],
    'afficheSF' => [[], ['_controller' => 'App\\Controller\\SinistreController::afficheSF'], [], [['text', '/afficheSF']], [], [], []],
    'suppS' => [['id'], ['_controller' => 'App\\Controller\\SinistreController::suppS'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/suppS']], [], [], []],
    'suppSF' => [['id'], ['_controller' => 'App\\Controller\\SinistreController::suppSF'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/suppSF']], [], [], []],
    'ajoutS' => [[], ['_controller' => 'App\\Controller\\SinistreController::ajoutS'], [], [['text', '/ajoutS']], [], [], []],
    'ajoutSF' => [[], ['_controller' => 'App\\Controller\\SinistreController::ajoutSF'], [], [['text', '/ajoutSF']], [], [], []],
    'modifS' => [['id'], ['_controller' => 'App\\Controller\\SinistreController::modifS'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modifS']], [], [], []],
    'modifSF' => [['id'], ['_controller' => 'App\\Controller\\SinistreController::modifSF'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modifSF']], [], [], []],
    'statut' => [['id'], ['_controller' => 'App\\Controller\\SinistreController::statut'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/statut']], [], [], []],
    'sinistre_displayJSON' => [[], ['_controller' => 'App\\Controller\\SinistreController::displayJSON'], [], [['text', '/sinistre/displayJSON']], [], [], []],
    'sinistre_addJSON' => [[], ['_controller' => 'App\\Controller\\SinistreController::addJSON'], [], [['text', '/sinistre/addJSON']], [], [], []],
    'sinistre_editJSON' => [['id'], ['_controller' => 'App\\Controller\\SinistreController::editJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sinistre/editJSON']], [], [], []],
    'sinistre_deleteJSON' => [['id'], ['_controller' => 'App\\Controller\\SinistreController::deleteJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sinistre/deleteJSON']], [], [], []],
    'search_sinistre' => [[], ['_controller' => 'App\\Controller\\SinistreController::searchSinistre'], [], [['text', '/sinistre/search']], [], [], []],
    'search_sinistreS' => [[], ['_controller' => 'App\\Controller\\SinistreController::searchSinistreS'], [], [['text', '/sinistre/searchS']], [], [], []],
    'app_type' => [[], ['_controller' => 'App\\Controller\\TypeController::index'], [], [['text', '/type']], [], [], []],
    'afficheT' => [[], ['_controller' => 'App\\Controller\\TypeController::afficheT'], [], [['text', '/afficheT']], [], [], []],
    'suppT' => [['id'], ['_controller' => 'App\\Controller\\TypeController::suppT'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/suppT']], [], [], []],
    'ajoutT' => [[], ['_controller' => 'App\\Controller\\TypeController::ajoutT'], [], [['text', '/ajoutT']], [], [], []],
    'modifT' => [['id'], ['_controller' => 'App\\Controller\\TypeController::modifT'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modifT']], [], [], []],
    'type_displayJSON' => [[], ['_controller' => 'App\\Controller\\TypeController::displayJSON'], [], [['text', '/type/displayJSON']], [], [], []],
    'type_addJSON' => [[], ['_controller' => 'App\\Controller\\TypeController::addJSON'], [], [['text', '/type/addJSON']], [], [], []],
    'type_editJSON' => [['id'], ['_controller' => 'App\\Controller\\TypeController::editJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/editJSON']], [], [], []],
    'type_deleteJSON' => [['id'], ['_controller' => 'App\\Controller\\TypeController::deleteJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type/deleteJSON']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_sinistre_stat' => [[], ['_controller' => 'App\\Controller\\SinistreController::stats'], [], [['text', '/sinistre/stats']], [], [], []],
    'sinistre_display_sorted_by_id_asc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByIdASC'], [], [['text', '/sinistre/sorted_by_id_asc']], [], [], []],
    'sinistre_display_sorted_by_type_asc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByTypeASC'], [], [['text', '/sinistre/sorted_by_type_asc']], [], [], []],
    'sinistre_display_sorted_by_date_asc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByDateASC'], [], [['text', '/sinistre/sorted_by_date_asc']], [], [], []],
    'sinistre_display_sorted_by_lieu_asc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByLieuASC'], [], [['text', '/sinistre/sorted_by_lieu_asc']], [], [], []],
    'sinistre_display_sorted_by_statut_asc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByStatutASC'], [], [['text', '/sinistre/sorted_by_statut_asc']], [], [], []],
    'sinistre_display_sorted_by_id_desc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByIdDESC'], [], [['text', '/sinistre/sorted_by_id_desc']], [], [], []],
    'sinistre_display_sorted_by_type_desc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByTypeDESC'], [], [['text', '/sinistre/sorted_by_type_desc']], [], [], []],
    'sinistre_display_sorted_by_date_desc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByDateDESC'], [], [['text', '/sinistre/sorted_by_date_desc']], [], [], []],
    'sinistre_display_sorted_by_lieu_desc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByLieuDESC'], [], [['text', '/sinistre/sorted_by_lieu_desc']], [], [], []],
    'sinistre_display_sorted_by_statut_desc' => [[], ['_controller' => 'App\\Controller\\SinistreController::displaySortedByStatutDESC'], [], [['text', '/sinistre/sorted_by_statut_desc']], [], [], []],
];
