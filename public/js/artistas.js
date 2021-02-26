function desplegarBusqueda() {
	$.ajax({
		url:'ajaxBandas/buscar',dataType:'json',
		method:'POST',
		success:function(respuesta) {
			console.log(respuesta);
		}, error:function(respuesta) {
			console.log(respuesta.responseText);
		}
	});
}
