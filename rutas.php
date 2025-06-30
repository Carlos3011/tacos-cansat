<?php
require __DIR__ . "/db/connection.php"; //__DIR__ toma la direccion del disco duro y asi solo se concatena la ruta del archivo de conexion
require_once __DIR__ . "/controllers/TacoController.php";
$controller = new TacoController($conn);
$accion = $_GET['accion'] ?? 'index';

switch($accion){
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store($_POST);
        break;
    case 'edit':
       
        $controller->edit($_GET['id']);
        break;
    case 'update':
       
        $controller->update($_GET['id'], $_POST);
        break;
    case 'delete':
        $controller->delete($_GET['id']);
        break;
    default:
        $controller->index();
        break;
}
