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
    'test' => [
        'view' => 'TestView',
        'controller' => 'TestController',
    ],
];