$(document).ready(function() {
	desplegarBusqueda('');
});
$('#buscar-discos').keyup(function(){
	desplegarBusqueda($('#buscar-discos').val());
});
function desplegarBusqueda(valor) {
	$.ajax({
		url:'ajaxBandas/buscar',dataType:'json',
		method:'POST',data:JSON.stringify({nombre:valor}),
		success:function(respuesta) {
			$("#bandas-desplegar").empty();
			$.each(respuesta, function(){
				$("#bandas-desplegar").append(
					`<div class='tarjeta'>` + 
						`<button class='btn-ver' onclick='desplegarDatos(\"${this.id}\");'><img src='public/img/mostrar.png'></button>` +
						`<img src='public/imgd/artistas/${this.id}.jpg'>` +
						`<p>${this.nombre}</p>` +
					`</div>`
				);
			});
		}, error:function(respuesta) {
			console.log(respuesta.responseText);
		}
	});
}
function desplegarDatos(id) {
	$.ajax({
		url:'ajaxBandas/datos',data:JSON.stringify({'id':id}),
		dataType:'json',method:'POST',
		success:function(respuesta) {
			$("#bandas-datos").css("display", "block");
			$("#bandas-datos #contenedor-discos").empty();
			$.each(respuesta, function() {
				$("#bandas-datos #contenedor-discos").append(
					`<div>` +
						`<img src='public/imgd/discos/${this.id}.jpg'>` +
						`<p>${this.nombre}</p><p>${this.anio}</p>` +
					`</div>`
				);
			});
		}, error:function(respuesta) {
			console.log(respuesta.responseText);
		}
	});
}
