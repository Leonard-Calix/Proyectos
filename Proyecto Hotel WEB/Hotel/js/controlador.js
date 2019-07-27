
//editar empleado
$("#btn-guardar").click(function () {
	var empleado = $("#id").val();
	//alert(empleado);


	console.log("id="+empleado+"&"+"pnombre="+$("#pnombre").val()+"&"+"snombre="+$("#snombre").val() );
	
    var parametros = "id="+empleado+"&"+"pnombre="+$("#pnombre").val()+"&"+"snombre="+$("#snombre").val()+"&"+
    				 "papellido="+$("#papellido").val()+"&"+"sapellido="+$("#sapellido").val()+"&"+
    				 "telefono="+$("#telefono").val()+"&"+"correo="+$("#correo").val()+"&"+"cargo="+$("#cargo").val()+
    				 "&"+"turno="+$("#turno").val();

    				 
    $.ajax({
		url:"ajax/empleados.php?opcion=editar",
		method:"GET",
		data:parametros,
		//dataType:"json",
		success:function(respuesta){
			if ( !respuesta.localeCompare("Empleado Modificado Con Exito") ) {
				window.location.replace("Empleados.php");
				alert(respuesta);
			}else{
				alert(respuesta);
			}
			
		}
	});
    				
	console.log(parametros);
});



$("#guardarHab").click(function(){
 	
 	var parametros = "id="+$("#id").val()+"&"+"no="+$("#no").val()+"&"+"descripcion="+$("#descripcion").val()+"&"+
    				 "precio="+$("#precio").val()+"&"+"tipo="+$("#tipo").val();
    				 
 	//alert(parametros);
    				 
    $.ajax({
		url:"ajax/habitaciones.php?opcion=guardar",
		method:"GET",
		data:parametros,
		//dataType:"json",
		success:function(respuesta){

			if ( !respuesta.localeCompare("Habitacion Guardada") ) {
				window.location.replace("habitacion.php");
				alert(respuesta);
			}else{
				alert(respuesta);
			}
		
			
		}
	});


});

$("#editarHab").click(function(){
 	
 	var parametros = "id="+$("#id").val()+"&"+"no="+$("#no").val()+"&"+"descripcion="+$("#descripcion").val()+"&"+
    				 "precio="+$("#precio").val()+"&"+"tipo="+$("#tipo").val();
    				 

   // alert(parametros);
    				 
    $.ajax({
		url:"ajax/habitaciones.php?opcion=editar",
		method:"GET",
		data:parametros,
		//dataType:"json",
		success:function(respuesta){

			if ( !respuesta.localeCompare("Habitacion editada con exito")  ) {
				window.location.replace("habitacion.php");
				alert(respuesta);
			}else{
				alert(respuesta);
			}

			
			
		}
	});


});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$("#guardarH").click(function(){

	var parametros = "id="+$("#id").val()+"&"+"pnombre="+$("#pnombre").val()+"&"+"snombre="+$("#snombre").val()+"&"+
    				 "papellido="+$("#papellido").val()+"&"+"sapellido="+$("#sapellido").val()+"&"+
    				 "telefono="+$("#telefono").val()+"&"+"correo="+$("#correo").val()+"&"+"direccion="+$("#direccion").val();
    				 
    console.log(parametros);
    				 
    $.ajax({
		url:"ajax/Huesped.php?opcion=guardar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			if ( respuesta.localeCompare("Registrado Con Exito") ) {
				window.location.replace("huespedes.php");
				alert(respuesta);
			}else{
				alert(respuesta);
			}
		
		}
	});
    	

});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$("#editarH").click(function(){

	var parametros = "id="+$("#id").val()+"&"+"pnombre="+$("#pnombre").val()+"&"+"snombre="+$("#snombre").val()+"&"+
    				 "papellido="+$("#papellido").val()+"&"+"sapellido="+$("#sapellido").val()+"&"+
    				 "telefono="+$("#telefono").val()+"&"+"correo="+$("#correo").val()+"&"+"direccion="+$("#direccion").val();
 
    				 
    $.ajax({
		url:"ajax/Huesped.php?opcion=editar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			if ( respuesta.localeCompare("Modificado Con Exito") ) {
				window.location.replace("huespedes.php");
				alert(respuesta);
			} else {
				//alert(respuesta);
			}
			
			
		}
	});
    	


});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$("#GuardarPlatillo").click(function(){
	
	  var parametros ="id="+$("#id").val()+"&"+"nombre="+$("#nombre").val()+"&"+"valor="+$("#valor").val()+"&"+
    				 "tipo="+$("#tipo").val();

      if($("#nombre").val() == " " && $("#valor").val() == " " && $("#tipo").val() == " " ){
      		alert("Campos requeridos");
      		return;
      }


      console.log(parametros);

       $.ajax({
		url:"ajax/plato.php?opcion=guardar",
		method:"GET",
		data:parametros,
		//dataType:"json",
		success:function(respuesta){
			if (respuesta="Guardado correctamente") {
				window.location.replace("Comidas.php");
				alert(respuesta);
			} else {
				alert(respuesta);
			}
		
			
		}
	});


});


$("#editarPlato").click(function(){
	
	  var parametros ="id="+$("#id").val()+"&"+"nombre="+$("#nombre").val()+"&"+"valor="+$("#valor").val()+"&"+
    				 "tipo="+$("#tipo").val();

      console.log(parametros);

       $.ajax({
		url:"ajax/plato.php?opcion=editar",
		method:"GET",
		data:parametros,
		//dataType:"json",
		success:function(respuesta){
			if (respuesta="Edicion realizada correctamente") {
				window.location.replace("Comidas.php");
			} else {
				alert(respuesta);
			}
			
			
		}
	});


});


$("#btnNuevoEmpleado").click(function () {

	//console.log( $("#id").val() );

	
    var parametros = "id="+$("#id").val()+"&"+"pnombre="+$("#pnombre").val()+"&"+"snombre="+$("#snombre").val()+"&"+
    				 "papellido="+$("#papellido").val()+"&"+"sapellido="+$("#sapellido").val()+"&"+
    				 "telefono="+$("#telefono").val()+"&"+"correo="+$("#correo").val()+"&"+
    				 "cargo="+$("#cargo").val()+"&"+"turno="+$("#turno").val();

    //alert(parametros);
    				 
    $.ajax({
		url:"ajax/empleados.php?opcion=agregar",
		method:"GET",
		data:parametros,
		//dataType:"json",
		success:function(respuesta){
			if (respuesta="Se Guardo Con Exito") {
				window.location.replace("empleados.php");
				
			}
			alert(respuesta);
		}
	});
    				
	console.log(parametros);
});


$("#GuardarBebida").click(function () {

    var parametros = "id="+$("#id").val()+"&"+"nombre="+$("#nombre").val()+"&"+"valor="+$("#valor").val()+"&"+"tipo="+$("#tipo").val();

    //alert(parametros);


    $.ajax({
		url:"ajax/bebidas.php?opcion=guardar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			if(respuesta=="Guardado correctamente"){
				window.location.replace("Bebidas.php");
				alert(respuesta);
			}else{
				alert(respuesta);
			}		
			
		}
	});
    				
	console.log(parametros);
});

$("#editarBebida").click(function () {

    var parametros = "id="+$("#id").val()+"&"+"nombre="+$("#nombre").val()+"&"+"valor="+$("#valor").val()+"&"+"tipo="+$("#tipo").val();

   // alert(parametros);


    $.ajax({
		url:"ajax/bebidas.php?opcion=editar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			if (respuesta="Edicion realizada correctamente") {
				window.location.replace("Bebidas.php");
				alert(respuesta);
			} else {
				alert(respuesta);
			}
		}
	});
    				
	console.log(parametros);
});

$("#guardarRes").click(function () {

    var parametros = "fechaI="+$("#fechaI").val()+"&"+"fechaS="+$("#fechaS").val()+"&"+"adulto="+$("#adulto").val()+"&"+"nino="+$("#nino").val()+
    				 "&"+"huesped="+$("#huesped").val()+"&"+"numero="+$("#numero").val()+"&"+"estado="+$("#estado").val()+
    				 "&"+"empleado="+$("#empleado").val();

    console.log(parametros);

    $.ajax({
		url:"ajax/reservacion.php",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			if (respuesta == "Reservacion Ingresada Con Exito") {
				window.location.replace("index.php");
				alert(respuesta);
			} else {
				alert(respuesta);
			}
	
		}
	});
    				
	console.log(parametros);
	
});

$("#GuardarEntrada").click(function () {

    var parametros = "nombre="+$("#nombre").val()+"&"+"precioc="+$("#precioc").val()+"&"+"preciov="+$("#preciov").val()+
    				 "&"+"categoria="+$("#categoria").val()+"&"+"cantidad="+$("#cantidad").val();

    //alert(parametros);

    $.ajax({
		url:"ajax/entradas.php?opcion=agregar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			window.location.replace("entradas.php");
			alert(respuesta);
			console.log(respuesta);
		}
	});
    				
	console.log(parametros);
	
});





function eliminarHab(id){
	//alert(id);
	var parametros = "id="+id;

	$.ajax({
		url:"ajax/habitaciones.php?opcion=eliminar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			window.location.replace("habitacion.php");
			alert(respuesta);
		}
	});
    				
	console.log(parametros);
}


function eliminarBebi(id){
	
	var parametros = "id="+id;

	$.ajax({
		url:"ajax/bebidas.php?opcion=eliminar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			window.location.replace("Bebidas.php");
			alert(respuesta);
		}
	});
    				
	console.log(parametros);
}



function eliminarComi(id){
	
	var parametros = "id="+id;

	$.ajax({
		url:"ajax/plato.php?opcion=eliminar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			window.location.replace("Comidas.php");
			alert(respuesta);
		}
	});
    				
	console.log(parametros);
}

function eliminarEmpleado(id){
	
	var parametros = "id="+id;

	$.ajax({
		url:"ajax/empleados.php?opcion=eliminar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			window.location.replace("empleados.php");
			alert(respuesta);
		}
	});
    				
	console.log(parametros);
}


function eliminarHuesped(id){
	
	var parametros = "id="+id;

	$.ajax({
		url:"ajax/Huesped.php?opcion=eliminar",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			window.location.replace("huespedes.php");
			alert(respuesta);
		}
	});
    				
	console.log(parametros);
}


///////////////////////////////////////////////////////


$("#btnAgregarPedido").click(function () {

    var parametros = "id="+$("#id").val()+"&"+"reservacion="+$("#reservacion").val()+"&"+"cantidad="+$("#cantidad").val();
   // alert(parametros);

    $.ajax({
		url:"ajax/servicio.php?opcion=bebida",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			if ( respuesta == "Guardado correctamente" ) {
				window.location.replace("comprarBebida.php");
				alert(respuesta);
			} else {
				alert(respuesta);
			}

		}
	});
    				
	console.log(parametros);
	
});

$("#EnviarComida").click(function () {

    var parametros = "id="+$("#id").val()+"&"+"reservacion="+$("#reservacion").val()+"&"+"cantidad="+$("#cantidad").val();
   // alert(parametros);

    $.ajax({
		url:"ajax/servicio.php?opcion=comida",
		method:"GET",
		data:parametros,
		success:function(respuesta){
			if ( respuesta == "Guardado correctamente" ) {
				window.location.replace("compra.php");
				alert(respuesta);
			} else {
				alert(respuesta);
			}

		}
	});
    				
	console.log(parametros);
	
});

