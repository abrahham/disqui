<div class="contenedor">
	<h1>discos</h1>
	<div>		
		<div>
			<button class="btn b-sec" onclick="desplegarBusqueda({genero:'electronica'});">Electrónica</button>
			<button class="btn b-sec" onclick="desplegarBusqueda({genero:'pop'});">Pop</button>
			<button class="btn b-sec" onclick="desplegarBusqueda({genero:'rock'});">Rock</button>
			<button class="btn b-sec" onclick="desplegarBusqueda({genero:'rap'});">Rap</button>
		</div>
		<input type="text" id="buscar-discos" placeholder="Busca un artista en particular">
	</div>
	<div style="display:none;" id="discos-datos">
		<button class="btn btn-cerrar" onclick="this.parentElement.style.display='none';">X</button>
		<div>
			<img style="height:100%;">		
			<div id="discos-info">
				<h3 id="d-nombre"></h3>
				<p id="d-fecha"></p>
				<p id="d-artista"></p>
				<p id="d-genero"></p>
				<div style="margin-top:10px;">
					<p>Listado de canciones</p>
					<div class="contenedor-tabla">
						<table></table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="discos-desplegar"></div>
	<script src="public/js/discos.js"></script>
</div>
