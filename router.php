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
$tripController = new tripController();
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
    case 'login':
        $loginController->showFormLogin();
        break;
    case 'verify':
        $loginController->verifyUser();
        break;
    
    case 'logout':
        $loginController->logout();
        break;
    
    case 'administrador':
        $tripController->showViajes();
        break;

    case 'edit':
        $id = $params[1];
        $tripController->editViaje($id);
        break;

    case 'editForm':
        $tripController->editForm();
        break;
            
    case 'add':
        $tripController->addViaje();
        break;
    case 'delete':
        $id = $params[1];
        $tripController->deleteViaje($id);
        break;
    default:
        echo('404 Page not found');
        break;
}

