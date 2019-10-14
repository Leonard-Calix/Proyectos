$(document).ready(function(){	
	
	odtenerTecnicos(); 
	console.log("hola");

}); 

function odtenerTecnicos() {
	
	$.ajax({
		url:"ajax/gestion-comercio.php?accion=mostrar",
		method:"GET",
		dataType:'json',
		success:function(res){
			console.log(res);

			for (var i = 0; i < res.length; i++) {
				$('#tabla-comercio').append(`
					<tr id="${res[i].rtnComercio}">
					<th scope="row">${ res[i].rtnComercio }</th>
					<td>${res[i].zona}</td>
					<td>${res[i].tipoComercio}</td>
					<td>
					<button onclick="editar(${res[i].rtnComercio})" class="btn btn-success" ><i class="fas fa-edit"></i></button> | 
					<button onclick="eliminar(${res[i].rtnComercio})" class="btn btn-danger" ><i class="fas fa-user-times"></i></button>
					</td>
					</tr>`);
			}
			
		}
	});
}

function editar( id )  {
	console.log(id);

	var param = {
		id: $("#id").val()
	};

	$.ajax({
		url:"ajax/gestion-comercio.php?accion=editar",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);
			
		}
	});

}

function eliminar( id )  {
	console.log(id);

	var param = {
		id: id
	};

	$.ajax({
		url:"ajax/gestion-comercio.php?accion=remove",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);

			if (res.pcMensaje==1) {
				alert("Se elimino");
				$("#"+id).remove();
			} else {
				alert("Error");

			}

			
		}
	});
	
}



function agregar() {

	var param = {
		zona: $("#zona").val(),
		tipo: $("#tipo").val()
	};

	console.log(param);
	
	$.ajax({
		url:"ajax/gestion-comercio.php?accion=add",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);

			if (res.pcMensaje==1) {
				alert("Se guardo");
				location.reload(true);
			} else {
				alert("Error");

			}
			
		}
	});


}

function editar( id )  {
	

	$('#exampleModal').modal('show');

	var param = { id: id };
	

	$.ajax({
		url:"ajax/gestion-comercio.php?accion=obtenerUno",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);

			$("#zona2").val(res[0].zona);
			$("#id").val(id);
			$("#tipo2").val(res[0].tipoComercio);
			
		}
	});

}

function actualizar() {

	var param = {
		id: $("#id").val(),
		zona: $("#zona2").val(),
		tipo: $("#tipo2").val()
	};

	console.log(param);
	
	$.ajax({
		url:"ajax/gestion-comercio.php?accion=editar",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);

			if (res.pcMensaje==1) {
				
				$('#exampleModal').modal('hide');
				alert("Se actualizo");

				$('#'+ param.id).html(`
					<th scope="row">${ param.id }</th>
					<td>${param.zona}</td>
					<td>${param.tipo}</td>
					<td>
					<button onclick="editar(${param.id})" class="btn btn-success" ><i class="fas fa-edit"></i></button> | 
					<button onclick="eliminar(${param.id})" class="btn btn-danger" ><i class="fas fa-user-times"></i></button>
					</td>
					`);
			} else {
				alert("Error");

			}
			
		}
	});


}