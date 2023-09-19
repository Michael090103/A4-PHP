<?php
namespace views;

use controllers\DataController;
use models\DataModel;
use mvc\View;

class DataView extends View {

    protected $model;

    public function __construct(DataController $dataController)
    {
        $this->model = $dataController;
    }

    public function getHTML()
    {
        $data = $this->model->getModelData();

        $html = '';

        foreach ($data as $row) {
            $html .= $row;
            $html .= '<br/>';
        }

        return $html;
    }
}