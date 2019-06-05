<?php
require_once 'model/Login.php';

class LoginController{

    private $login;

    public function __construct(){
        $this->login = new Login();
    }

    public function index(){

        require_once 'vista/login.php';
    }

    public function detalle(){

        require_once 'vista/header.php';
        require_once 'vista/detalle.php';
    }

    public function verificar(){

        $rut = $_REQUEST['rut'];
        $pass = $_REQUEST['password'];

        $resultado = $this->login->VerificarLogin($rut, $pass);
        
        if ($resultado ) {
            session_start();

            $_SESSION['uid'] = "hola";
        }
        //header('Location: detalle.php');
    }
    
}