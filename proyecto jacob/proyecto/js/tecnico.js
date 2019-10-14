$(document).ready(function(){	
	
	odtenerTecnicos(); 
	

}); 

function odtenerTecnicos() {
	
	$.ajax({
		url:"ajax/gestion-tecnico.php?accion=mostrar",
		method:"GET",
		dataType:'json',
		success:function(res){
			console.log(res);

			for (var i = 0; i < res.length; i++) {
				$('#tabla-tecnicos').append(`
					<tr id="${ res[i].idTecnico }">
					<th scope="row">${ res[i].idTecnico }</th>
					<td>${res[i].nombre}</td>
					<td>${res[i].cantRepa}</td>
					<td>
					<button onclick="editar(${res[i].idTecnico})" class="btn btn-success" ><i class="fas fa-edit"></i></button> | 
					<button onclick="eliminar(${res[i].idTecnico})" class="btn btn-danger" ><i class="fas fa-user-times"></i></button>
					</td>
					</tr>`);
			}
			
		}
	});
}



function eliminar( id )  {
	console.log(id);

	var param = {
		id: id
	};

	$.ajax({
		url:"ajax/gestion-tecnico.php?accion=remove",
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
		nombre: $("#nombre").val(),
		cantidad: $("#cantidadFallos").val(),
		estado: "mal estado"
	};

	console.log(param);
	
	$.ajax({
		url:"ajax/gestion-tecnico.php?accion=add",
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
	console.log(id);

	$('#exampleModal').modal('show');


	var param = { id: id };

	$.ajax({
		url:"ajax/gestion-tecnico.php?accion=obtenerUno",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);
			$("#nombre2").val(res[0].nombre);
			$("#cantidadFallos2").val(res[0].cantRepa);
			$("#id").val(id);
		}
	});

}

function actualizar() {

	var param = {
		id: $("#id").val(),
		nombre: $("#nombre2").val(),
		cantidad: $("#cantidadFallos2").val(),
		estado: "mal estado"
	};

	console.log(param);
	
	$.ajax({
		url:"ajax/gestion-tecnico.php?accion=add",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);

			if (res.pcMensaje==1) {
				$('#exampleModal').modal('hide');
				alert("Se actualizo");

				$('#'+param.id).html(`
					<th scope="row">${ param.id }</th>
					<td>${param.nombre}</td>
					<td>${param.cantidad}</td>
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