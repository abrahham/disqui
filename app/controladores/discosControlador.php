<?php
	class discosControlador extends Controlador {
		public function __construct() {
			parent::__construct();
		}
		function index() {
			$this->vista->renderizar("discos");
		}
	}
