<?php
require_once './app/models/tripModel.php';
require_once './app/views/tripView.php';

class tripController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new tripModel();
        $this->view = new tripView();
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
        $id=$_POST['ID'];
        $origen = $_POST['Origen'];
        $destino = $_POST['Destino'];
        $vendedor = $_POST['Vendedor'];

        if (!empty($origen) || !empty($destino) || !empty($vendedor) || !empty($id)) {

            $this->model->editViajeById($origen, $destino, $vendedor, $id);

            header("Location: " . BASE_URL); 
            
        } else {

           echo "no se pudo actualizar su consulta";

        }


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
