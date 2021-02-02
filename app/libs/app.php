<?php
	class App {
		public function __construct() {
			$params = $this->dividirURL();
			require_once "app/controladores/{$params[0]}Controlador.php";
			$controlador = "{$params[0]}Controlador";
		}
		function dividirURL() {
			$url = $_GET['url'] ?? null;
			$url = rtrim($url,"/");
			return array_filter(explode("/",$url));
		}
	}
