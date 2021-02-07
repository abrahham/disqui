<?php
	class Controlador {
		public function __construct() {
			$this->vista = new Vista;
		}
		function cargarModelo($modelo) {
			$modelo = strtolower(str_replace("ajax","",$modelo));
			require_once "app/modelos/{$modelo}.php";
			$this->modelo = new $modelo;
		}
	}
