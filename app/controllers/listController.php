<?php
require_once './app/models/listModel.php';
require_once './app/views/listView.php';

class ListController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new listModel();
        $this->view = new listView();
    }

    public function showList() {
        $lista = $this->model->getAllViajes();
        $this->view->showViajes($lista);
    }

}