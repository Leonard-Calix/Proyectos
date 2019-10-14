$(document).ready(function(){	
	/*Detalle de tour*/
	obtenerMaquina() 

}); 

function obtenerMaquina() {
	
	$.ajax({
		url:"ajax/gestion-proveedor.php?accion=mostrar",
		method:"GET",
		dataType:'json',
		success:function(res){
			console.log(res);

			for (var i = 0; i < res.length; i++) {
				$('#tabla-proveedor').append(`
					<tr id="${res[i].rtnProveedor}" >
					<th scope="row">${ res[i].rtnProveedor }</th>
					<td>${res[i].nombre}</td>
					<td>${res[i].tipo}</td>
					<td>
					<button onclick="editar(${res[i].rtnProveedor})" class="btn btn-success" ><i class="fas fa-edit"></i></button> | 
					<button onclick="eliminar(${res[i].rtnProveedor})" class="btn btn-danger" ><i class="fas fa-user-times"></i></button>
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
		url:"ajax/gestion-proveedor.php?accion=remove",
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
		tipo: $("#tipo").val(),
		tipop: $("#tipoP").val(),
		estado: $("#estado").val()
	};

	console.log(param);
	
	$.ajax({
		url:"ajax/gestion-proveedor.php?accion=add",
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

function actualizar() {

	var param = {
		id: $("#id").val(),
		nombre: $("#nombre2").val(),
		tipo: $("#tipo2").val(),
		tipop: $("#tipoP2").val(),
		estado: $("#estado2").val()
	};


	console.log(param);
	
	$.ajax({
		url:"ajax/gestion-proveedor.php?accion=editar",
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
					<td>${param.nombre}</td>
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


function editar( id )  {
	console.log(id);

	$('#exampleModal').modal('show');
	
	
	var param = { id: id };
	

	$.ajax({
		url:"ajax/gestion-proveedor.php?accion=obtenerUno",
		method:"POST",
		dataType:'json',
		data: param,
		success:function(res){
			console.log(res);

			$("#nombre2").val(res[0].nombre);
			$("#tipo2").val(res[0].tipo);
			$("#tipoP2").val();
			$("#estado2").val();
			$("#id").val(id);

			
		}
	});

}