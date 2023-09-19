<?php
namespace models;

use mvc\Model;

class DataModel extends Model {

    private array $data = [
        'Michael Schuiling',
        'Jesse Foekens',
        'Quandale Dingle',
    ];

    /**
     * @return array[]
     */
    public function getData(): array
    {
        return $this->data;
    }
}