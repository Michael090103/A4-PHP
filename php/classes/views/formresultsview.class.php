<?php
namespace views;

use controllers\FormResultsController;
use mvc\View;

class FormResultsView extends View {

    protected $controller;

    public function __construct(FormResultsController $formResultsController)
    {
        $this->controller = $formResultsController;
    }

    public function getHTML()
    {
        return $this->controller->test();
    }
}