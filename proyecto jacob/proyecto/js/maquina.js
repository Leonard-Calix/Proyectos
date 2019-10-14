$(document).ready(function(){	
	/*Detalle de tour*/
	obtenerMaquina() 

}); 

function obtenerMaquina() {
	
	$.ajax({
		url:"ajax/gestion-maquina.php?accion=mostrar",
		method:"GET",
		dataType:'json',
		success:function(res){
			console.log(res);

			for (var i = 0; i < res.length; i++) {
				$('#tabla-maquinas').append(`
					<tr id="${res[i].idMaquina}" >
					<th scope="row">${ res[i].idMaquina }</th>
					<td>${res[i].nombre}</td>
					<td>${res[i].estado}</td>
					<td>${res[i].cantFallo}</td>
					<td>
					<button onclick="editar(${res[i].idMaquina})" class="btn btn-success" ><i class="fas fa-edit"></i></button> | 
					<button onclick="eliminar(${res[i].idMaquina})" class="btn btn-danger" ><i class="fas fa-user-times"></i></button>
					</td>
					</tr>`);
			}
			
		}
	});
}



function eliminar( id )  {
	console.log(id);

	var param = { id: id };

	$.ajax({
		url:"ajax/gestion-maquina.php?accion=remove",
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
		cantidad: $("#estado").val(),
		estado: $("#cantidadFallos").val()
	};

	console.log(param);
	
	$.ajax({
		url:"ajax/gestion-maquina.php?accion=add",
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
		url:"ajax/gestion-maquina.php?accion=obtenerUno",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);

			$("#nombre2").val(res[0].nombre);
			$("#id").val(res[0].idMaquina);
			$("#estado2").val(res[0].estado);
			$("#cantidadFallos2").val(res[0].cantFallo);
			
		}
	});

}

function actualizar() {

	var param = {
		nombre: $("#nombre2").val(),
		id: $("#id").val(),
		estado: $("#estado2").val(),
		cantidad: $("#cantidadFallos2").val()
	};

	console.log(param);
	
	$.ajax({
		url:"ajax/gestion-maquina.php?accion=editar",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);

			if (res.pcMensaje==1) {

				$('#exampleModal').modal('hide');
				alert("Registro actualizado");

				$("#"+param.id).html(`
					<th scope="row">${id}</th>
					<td>${param.nombre}</td>
					<td>${param.estado}</td>
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