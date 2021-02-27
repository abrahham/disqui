function desplegarBusqueda() {
	$.ajax({
		url:'ajaxBandas/buscar',dataType:'json',
		method:'POST',
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
						`<img src='public/imgd/${this.id}.jpg'>` +
					`</div>`
				);
			});
		}, error:function(respuesta) {
			console.log(respuesta.responseText);
		}
	});
}
