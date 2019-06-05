<?php
require_once 'model/database.php';
require_once 'model/config.php';

$controller = 'Usuario';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c'])) {
    require_once "controller/".$controller."Controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->index();    
}
else {
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';
    
    require_once "controller/".$controller."Controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}