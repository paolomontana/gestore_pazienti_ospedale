<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/add_medical_examination' => [[['_route' => 'add_medical_examination', '_controller' => 'App\\Controller\\MedicalExaminationController::medicalExamination'], null, null, null, false, false, null]],
        '/medical_examination_list' => [[['_route' => 'medical_examination_list', '_controller' => 'App\\Controller\\MedicalExaminationController::medicalExaminationList'], null, null, null, false, false, null]],
        '/remove_medical_examination' => [[['_route' => 'remove_medical_examination', '_controller' => 'App\\Controller\\MedicalExaminationController::removeMedicalExamination'], null, null, null, false, false, null]],
        '/medical_examinations_patient' => [[['_route' => 'medical_examinations_patient', '_controller' => 'App\\Controller\\MedicalExaminationController::medicalExaminationPatientList'], null, null, null, false, false, null]],
        '/mod_medical_examination' => [[['_route' => 'mod_medical_examination', '_controller' => 'App\\Controller\\MedicalExaminationController::modMedicalExamination'], null, null, null, false, false, null]],
        '/modify_medical_examination' => [[['_route' => 'modify_medical_examination', '_controller' => 'App\\Controller\\MedicalExaminationController::modifyMedicalExamination'], null, null, null, false, false, null]],
        '/add_patient' => [[['_route' => 'add_patient', '_controller' => 'App\\Controller\\PatientController::addPatient'], null, null, null, false, false, null]],
        '/patients_list' => [[['_route' => 'patients_list', '_controller' => 'App\\Controller\\PatientController::patientsList'], null, null, null, false, false, null]],
        '/remove_patient' => [[['_route' => 'remove_patient', '_controller' => 'App\\Controller\\PatientController::removePatient'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\WebController::index'], null, null, null, false, false, null]],
        '/insert_medical_examination' => [[['_route' => 'insert_medical_examination', '_controller' => 'App\\Controller\\WebController::insertMedicalExamination'], null, null, null, false, false, null]],
        '/insert_patient' => [[['_route' => 'insert_patient', '_controller' => 'App\\Controller\\WebController::insertPatient'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
