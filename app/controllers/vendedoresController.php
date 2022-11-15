<?php

require_once './app/models/vendedoresModel.php';
require_once './app/views/vendedoresView.php';

class VendedoresController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new vendedoresModel();
        $this->view = new vendedoresView();
    }

    public function showVendedores() {
        $vendedores = $this->model->getallVendedores();
        $this->view->vistaVendedores($vendedores);
    }

}