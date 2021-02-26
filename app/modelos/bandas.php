<?php
	class Bandas extends Modelo {
		public function __construct() {
			parent::__construct();
		}
		function obtenerDiscos($id) {
			$con = $this->datai::conectar();
			$sentencia = "SELECT disco_nombre, disco_genero FROM discos WHERE banda_id = :id";
			$query = $con->prepare($sentencia);
			$query->execute([":id" => $id]);
			$items = [];
			while($fila = $query->fetch()) {
				array_push($items,["nombre" => $fila['disco_nombre']]);
			}
			return $items;		
		}
		function buscar($valor) {
			$con = $this->datai::conectar();
			$sentencia = "SELECT banda_id, banda_nombre FROM bandas";
			$query = $con->prepare($sentencia);
			$query->execute();
			$items = [];
			while($fila = $query->fetch()) {
				array_push($items,[
					"nombre" => $fila['banda_nombre'], "discos" => $this->obtenerDiscos($fila['banda_id'])
				]);
			}
			return $items;
		}
	}
