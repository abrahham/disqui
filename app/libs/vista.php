<?php
	class Vista {
		public function __construct() {
			
		}
		public function renderizar($vista) {
			require_once "vistas/encabezado.php";
			require_once "vistas/{$vista}";
		}
	}
