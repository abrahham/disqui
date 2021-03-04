<?php
	class Bandas extends Modelo {
		public function __construct() {
			parent::__construct();
		}
		function obtenerDiscos($id) {
			$con = $this->datai::conectar();
			$sentencia = "SELECT disco_id, disco_nombre, YEAR(disco_fecha) AS anio FROM discos WHERE banda_id = :id";
			$query = $con->prepare($sentencia);
			$query->execute([":id" => $id]);
			$items = [];
			while($fila = $query->fetch()) {
				array_push($items,[
					"id" => $fila["disco_id"],"nombre" => $fila['disco_nombre'],
					"anio" => $fila['anio']
				]);
			}
			return $items;		
		}
		function buscar($valor) {
			$con = $this->datai::conectar();
			$sentencia = "SELECT banda_id, banda_nombre FROM bandas WHERE banda_nombre LIKE :valor ORDER BY banda_nombre";
			$query = $con->prepare($sentencia);
			$query->execute([":valor" => "%{$valor}%"]);
			$items = [];
			while($fila = $query->fetch()) {
				array_push($items,[
					"id" => $fila["banda_id"], "nombre" => $fila['banda_nombre']
				]);
			}
			return $items;
		}
	}
