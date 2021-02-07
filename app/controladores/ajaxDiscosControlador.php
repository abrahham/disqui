<?php
	class ajaXDiscosControlador extends Controlador {
		public function __construct() {
			parent::__construct();
		}
		function buscar() {
			$postData = json_decode(file_get_contents("php://input"), true);
			$paramsBusqueda = [];
			if(isset($postData['genero'])) $paramsBusqueda["genero"] = $postData['genero'];
			$datos = $this->modelo->buscar("");
			header("Content-Type: application/json");
			echo json_encode($datos);
		}
	}
