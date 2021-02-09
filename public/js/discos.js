$(document).ready(function() {
	desplegarBusqueda({nombre:''});
});
$('#buscar-discos').keyup(function(){
	desplegarBusqueda({nombre:$('#buscar-discos').val()});
});
function desplegarBusqueda(obj) {
	var datos = {};
	if(obj.genero != undefined) datos.genero = obj.genero;
	if(obj.nombre != undefined) datos.nombre = obj.nombre;
	$.ajax({
		url:'ajaxDiscos/buscar',data:JSON.stringify(datos),
		dataType:'json',method:"POST",
		success:function(respuesta) {
			var contenedor = $('#discos-desplegar');
			contenedor.empty();
			$.each(respuesta, function() {				
				contenedor.append(
					`<div class='tarjeta'>` + 
						`<button class='btn-ver'><img src='public/img/mostrar.png'></button>` +
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
