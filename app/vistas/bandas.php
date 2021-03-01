<div class="contenedor">
	<h1>bandas</h1>
	<input type="text" id="buscar-discos" placeholder="Busca un artista en particular">
	<div id="bandas-desplegar"></div>
	<div style="display:none;" id="bandas-datos">
			<button class="btn btn-cerrar" onclick="this.parentElement.style.display='none';">X</button>
			<div id="contenedor-discos">
			</div>
	</div>
	<script src="public/js/artistas.js"></script>
</div>
