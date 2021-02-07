<?php
	class App {
		public function __construct() {
			$params = $this->dividirURL();
			require_once "app/controladores/{$params[0]}Controlador.php";
			$controlador = "{$params[0]}Controlador";
			$controlador = new $controlador;			
			$metodo = $params[1] ?? "index";
			$controlador->cargarModelo($params[0]);
			$controlador->$metodo();
			/*$params[0] = strtolower(str_replace("ajax","",$params[0]));
			require_once "app/modelos/{$params[0]}.php";
			$modelo = new $params[0];*/
		}
		function dividirURL() {
			$url = $_GET['url'] ?? "main";
			$url = rtrim($url,"/");
			return array_filter(explode("/",$url));
		}
	}
