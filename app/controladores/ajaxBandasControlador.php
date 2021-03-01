<?php
	class ajaxBandasControlador extends Controlador {
		public function __construct() {
			parent::__construct();
		}
		function buscar() {
			$postData = json_decode(file_get_contents("php://input"), true);
			$nombre = $postData['nombre'];
			$datos = $this->modelo->buscar($nombre);
			header("Content-Type: application/json");
			echo json_encode($datos);
		}
		function datos() {
			$postData = json_decode(file_get_contents("php://input"), true);
			$id = $postData['id'];
			$datos = $this->modelo->obtenerDiscos($id);
			header("Content-Type: application/json");
			echo json_encode($datos);
		}
	}
