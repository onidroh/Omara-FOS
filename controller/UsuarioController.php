<?php
require_once 'model/Usuario.php';

class UsuarioController{
    
    private $model;
    
    public function __construct(){
        $this->model = new Usuario();
    }
    
    public function index() {
        require_once 'vista/header.php';
        require_once 'vista/usuario/index.php';
       
    }
    
    public function editar() {
        $usuario = new Usuario();
        
        if(isset($_REQUEST['id'])){
            $usuarios = $this->model->Obtener($_REQUEST['id']);
        }  

        require_once 'vista/header.php';
        require_once 'vista/usuario/editar.php';
    }

    public function crear() {
 
        require_once 'vista/header.php';
        require_once 'vista/usuario/crear.php'; 
    }
    
    public function guardar(){

        //encripta la clave
        $pass = $_REQUEST['password'];
        $contraseña = password_hash($pass,PASSWORD_DEFAULT);
        echo $contraseña;

        $nuevo = new Usuario();
        
        $nuevo->nombre = $_REQUEST['nombre'];
        $nuevo->apellido = $_REQUEST['apellido'];
        $nuevo->rut = $_REQUEST['rut'];
        $nuevo->password = $contraseña;
        $nuevo->fecha_nac = $_REQUEST['fecha'];  
        $nuevo->correo = $_REQUEST['correo'];
        $nuevo->fecha_crea = date("Y-m-d");

        $this->model->Registrar($nuevo);
        
        header('Location: index.php');
    }

    public function actualiza(){
        //encripta la clave
        $contraseña = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        
        $usuario = new Usuario();
        
        $usuario->id = $_REQUEST['id'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->rut = $_REQUEST['rut'];
        $usuario->password = $contraseña;
        $usuario->fecha_nac = $_REQUEST['fecha'];  
        $usuario->correo = $_REQUEST['correo'];
        $usuario->fecha_edit = date("Y-m-d");
      
        $this->model->Actualizar($usuario);
        
        header('Location: index.php');
    }
    
    public function eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }

}