<?php
	class Discos extends Modelo {
		public function __construct() {
			parent::__construct();
		}
		function datosPorId($id) {
			$con = $this->datai::conectar();
			$sentencia = "SELECT disco_id, disco_nombre, disco_fecha, disco_genero, (SELECT banda_nombre "
				."FROM bandas WHERE banda_id = d.banda_id) as banda FROM discos AS d WHERE disco_id = :id";
			$query = $con->prepare($sentencia);
			$query->execute([":id" => $id]);
			while($fila = $query->fetch()) {
				return [
					"id" => $fila['disco_id'], "nombre" => $fila['disco_nombre'], "fecha" => date("d/m/Y", strtotime($fila['disco_fecha'])),
					"genero" => $fila['disco_genero'],"artista" => $fila['banda']
				];
			}
		}
		function buscar($parametros) {
			$con = $this->datai::conectar();
			$parametrosEjecucion = [];
			$sentencia = "SELECT disco_id, disco_nombre, (SELECT banda_nombre FROM bandas WHERE banda_id = d.banda_id)"
				." as banda FROM discos AS d";
			if(count($parametros) > 0) {
				$sentencia .= " WHERE ";
				if(isset($parametros['genero'])) {
					$sentencia .= " disco_genero = :genero";
					$parametrosEjecucion[':genero'] = $parametros['genero'];
				}
				if(isset($parametros['nombre'])) {
					$sentencia .= " disco_nombre LIKE :nombre";
					$parametrosEjecucion[':nombre'] = "%{$parametros['nombre']}%";
				}
			}
			$query = $con->prepare($sentencia);
			if(count($parametrosEjecucion) > 0) $query->execute($parametrosEjecucion); else $query->execute();
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
