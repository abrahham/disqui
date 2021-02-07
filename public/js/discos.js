function desplegarBusqueda(valor) {
	$.ajax({
		url:'ajaxDiscos/buscar',data:JSON.stringify({genero:valor}),
		dataType:'json',method:"POST",
		success:function(respuesta) {
			var contenedor = $('#discos-desplegar');
			contenedor.empty();
			$.each(respuesta, function() {				
				contenedor.append(
					`<div class='tarjeta'>` + 
						`<div><img src='public/imgd/${this.id}.jpg'></div>` + 					
						`<div><p>${this.nombre}</p><p>${this.artista}</p></div>` +
					`</div>`
				);
			});
		}, error:function(respuesta) {
			console.log(respuesta.responseText);
		}
	});
}
