<div class="contenedor">
	<h1>discos</h1>
	<div>		
		<div>
			<button class="btn b-prim" onclick="desplegarBusqueda({genero:'electronica'});">Electrónica</button>
			<button class="btn b-prim" onclick="desplegarBusqueda({genero:'pop'});">Pop</button>
			<button class="btn b-prim" onclick="desplegarBusqueda({genero:'rock'});">Rock</button>
			<button class="btn b-prim" onclick="desplegarBusqueda({genero:'rap'});">Rap</button>
		</div>
		<input type="text" id="buscar-discos" placeholder="Busca un artista en particular">
	</div>
	<div id="discos-datos">
		<input name="nombre" type="text">
		<input name="fecha" type="text">
		<input name="genero" type="text"
	</div>
	<div id="discos-desplegar"></div>
	<script src="public/js/discos.js"></script>
</div>
