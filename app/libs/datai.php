<?php
	class Datai {
		public static function conectar() {
			$constant = "constant";		
			try {
				$data = "mysql:host={$constant('host')};dbname={$constant('datb')};charset=utf8";
				$options = array(
				  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				);
				$con = new PDO($data, constant('usur'), constant('contr'));
				return $con;
			} catch (PDOException $e){
				echo $e->getMessage();
			}			
		}
	}

