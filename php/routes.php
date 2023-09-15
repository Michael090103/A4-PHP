<?php
define('DEFAULT_ROUTE', 'home');

$routes = [
    'home' => [
        'view' => 'HomeView',
        'controller' => 'HomeController',
    ],
    'form' => [
        'view' => 'FormView',
        'controller' => 'FormController',
    ],
    'results' => [
        'view' => 'FormResultsView',
        'controller' => 'FormResultsController',
    ],
];