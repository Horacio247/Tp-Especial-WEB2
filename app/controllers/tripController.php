<?php
require_once './app/models/tripModel.php';
require_once './app/views/tripView.php';

class ViajeController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ViajeModel();
        $this->view = new ViajeView();
    }

    public function showViajes() {
        $viajes = $this->model->getAllViajes();
        $this->view->showViajes($viajes);
    }

    public function editViaje($id) {
        $edit=$this->model->getViaje($id);
        $this->view->showEditViajes($edit);
    }

    public function editForm(){
        $id=$_POST['id'];
        $origen = $_POST['origen'];
        $destino = $_POST['destino'];
        $vendedor = $_POST['vendedor'];

        $id = $this->model->editViajeById($id, $origen, $destino, $vendedor);

        header("Location: " . BASE_URL);
    }
    
    function addViaje() {
        // Se validan los datos

        $origen = $_POST['origen'];
        $destino = $_POST['destino'];
        $vendedor = $_POST['vendedor'];

        $id = $this->model->insertViaje($origen, $destino, $vendedor);

        header("Location: " . BASE_URL); 
    }
   
    function deleteViaje($id) {
        $this->model->deleteViajeById($id);
        header("Location: " . BASE_URL);
    }

}
