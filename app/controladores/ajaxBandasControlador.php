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
	}
