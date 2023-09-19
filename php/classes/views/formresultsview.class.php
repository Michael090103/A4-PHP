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
        $data = [];
        if (isset($_POST)) {
            $data = $this->controller->validateInput([$_POST['firstname'], $_POST['lastname'], $_POST['email']]);
        }

        return "
            $data[0]
            $data[1]
            $data[2]
        ";
    }
}