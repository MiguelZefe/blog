<?php

require_once "controllers/PublicacionController.php";

$controller = new PublicacionController();

$action = isset($_GET['action'])
? $_GET['action']
: 'index';

switch($action){

    case 'crear':
        $controller->crear();
    break;

    case 'guardar':
        $controller->guardar();
    break;

    case 'editar':
        $controller->editar();
    break;

    case 'actualizar':
        $controller->actualizar();
    break;

    case 'eliminar':
        $controller->eliminar();
    break;

    default:
        $controller->index();
    break;

}

?>