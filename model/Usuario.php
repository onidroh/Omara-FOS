<?php

class Usuario {

	private $db;
    
    public $id;
    public $nombre;
    public $apellido;
	public $rut;
	public $password;
    public $fecha_nac;
	public $correo;
	public $fecha_crea;
	public $fecha_edit;

	public function __construct() {

		try {
			$this->db = Database::Conectar();     
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function Listar() {
		try {
			$result = array();

			$query = $this->db->prepare("SELECT * FROM usuario");
			$query->execute();

			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}

	public function Obtener($id) {
		try {
			$query = $this->db->prepare("SELECT * FROM usuario WHERE id = ?");
			          
			$query->execute(array($id));
			return $query->fetch(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Eliminar($id) {
		try {
			$query = $this->db->prepare("DELETE FROM usuario WHERE id = ?");			          

			$query->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Actualizar($data) {
		try {
			$sql = "UPDATE usuario SET 
				nombre = ?,
				apellido = ?, 
				rut = ?,
                fecha_nac = ?,
                correo = ?,
				fecha_edit = ?	
				WHERE id = ?";

			$this->db->prepare($sql)->execute(
				array(
				    $data->nombre, 
                    $data->apellido,                        
					$data->rut,
                    $data->fecha_nac,
                    $data->correo, 
					$data->fecha_edit,
					$data->id
				)
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function cambioPass($data) {
		try {
			$sql = "UPDATE usuario SET 
				pass = ?	
				WHERE id = ?";

			$this->db->prepare($sql)->execute(
				array(
					$data->password,
					$data->id
				)
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data) {

		try {
		$sql = "INSERT INTO usuario (nombre, apellido, rut, pass, fecha_nac, correo, fecha_crea) 
		    VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->db->prepare($sql)->execute(
			array(
				$data->nombre, 
                $data->apellido,
				$data->rut, 
				$data->password,
                $data->fecha_nac, 
				$data->correo,
				$data->fecha_crea
            )
		);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}