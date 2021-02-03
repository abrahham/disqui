<?php
	class App {
		public function __construct() {
			$params = $this->dividirURL();
			require_once "app/controladores/{$params[0]}Controlador.php";
			$controlador = "{$params[0]}Controlador";
			$controlador = new $controlador;
			$controlador->index();
		}
		function dividirURL() {
			$url = $_GET['url'] ?? "main";
			$url = rtrim($url,"/");
			return array_filter(explode("/",$url));
		}
	}
