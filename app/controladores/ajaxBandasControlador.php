<?php
	class ajaxBandasControlador extends Controlador {
		public function __construct() {
			parent::__construct();
		}
		function buscar() {
			$datos = $this->modelo->buscar("");
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
