<?php
	class artistasControlador extends Controlador {
		public function __construct() {
			parent::__construct();
		}
		function index() {
			$this->vista->renderizar("artistas");
		}
	}
