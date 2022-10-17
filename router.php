<?php
require_once './app/controllers/tripController.php';
require_once './app/controllers/listController.php';
require_once './app/controllers/vendedoresController.php';
require_once './app/controllers/loginController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//cambiar a HOME por default
$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

// instancio todos controllers
$viajeController = new ViajeController();
$listController= new ListController();
$vendedoresController= new VendedoresController();
$loginController= new LoginController();


switch ($params[0]) {
    case 'home':
        $listController->showList();
        break;
        
    case 'vendedor':
        $vendedoresController->showVendedores();
        break;
    
    case 'logout':
        $loginController->logout();
        break;
    
    case 'administrador':
        $loginController->showFormLogin();
        $loginController->verifyUser();
        $viajeController->showViajes();
        break;

    case 'edit':
        $id = $params[1];
        $viajeController->editViaje($id);
        break;

    case 'editForm':
        $viajeController->editForm();
        break;
            
    case 'add':
        $viajeController->addViaje();
        break;
    case 'delete':
        $id = $params[1];
        $viajeController->deleteViaje($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
