<?php
	class ajaXDiscosControlador extends Controlador {
		public function __construct() {
			parent::__construct();
		}
		function buscar() {
			$postData = json_decode(file_get_contents("php://input"), true);
			$paramsBusqueda = [];
			if(isset($postData['genero'])) $paramsBusqueda['genero'] = $postData['genero'];
			if(isset($postData['nombre'])) $paramsBusqueda['nombre'] = $postData['nombre'];
			$datos = $this->modelo->buscar($paramsBusqueda);
			header("Content-Type: application/json");
			echo json_encode($datos);
		}
	}
