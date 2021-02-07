<?php
	class Discos extends Modelo {
		public function __construct() {
			parent::__construct();
		}
		function buscar($valor) {
			$con = $this->datai::conectar();
			$sentencia = "SELECT disco_id, disco_nombre, (SELECT banda_nombre FROM bandas WHERE banda_id = d.banda_id)"
				." as banda FROM discos AS d";
			$query = $con->prepare($sentencia);
			$query->execute();
			$items = [];
			while($fila = $query->fetch()) {
				array_push($items,[
					"id" => $fila['disco_id'], "nombre" => $fila['disco_nombre'],
					"artista" => $fila['banda']
				]);
			}
			return $items;
		}
	}
