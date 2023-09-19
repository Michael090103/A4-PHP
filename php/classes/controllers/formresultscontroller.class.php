<?php
namespace controllers;

use mvc\Controller;

class FormResultsController extends Controller {

    public function validateInput(array $input)
    {
        $output = [];
        foreach ($input as $row) {
            array_push($output, strip_tags($row));
        }
        return $output;
    }
}