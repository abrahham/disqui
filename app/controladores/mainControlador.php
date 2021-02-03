<?php
	class mainControlador extends Controlador {
		public function __construct() {
			parent::__construct();
		}
		function index() {
			$this->vista->renderizar("main");
		}
	}
