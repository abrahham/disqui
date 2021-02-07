<?php
	class Artistas extends Modelo {
		public function __construct() {
			parent::__construct();
		}
		function buscar($valor) {
			$con = $this->datai::conectar();
			$sentencia = "SELECT banda_id, banda_nombre FROM bandas";
			$query = $con->prepare($sentencia);
			$query->execute();
			$items = [];
			while($fila = $query->fetch()) {
				array_push($items,[]);
			}
			return $items;
		}
	}
