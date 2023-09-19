<?php
namespace controllers;

use mvc\Controller;

class DataController extends Controller {

    private array $data = [
        'Michael Schuiling',
        'Jesse Foekens',
        'Quandale Dingle',
    ];

    public function getModelData()
    {
        return $this->data;
    }
}