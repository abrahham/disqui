<?php
	class Vista {
		public function __construct() {
			
		}
		public function renderizar($vista) {
			require_once "app/vistas/encabezado.php";
			require_once "app/vistas/{$vista}.php";
			require_once "app/vistas/pie.php";
		}
	}
