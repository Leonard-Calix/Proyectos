$(document).ready(function(){
   $("#btn-registrar").click(function(){ 	
   	if ($("#pwd").val()!="" && $("#correo").val()!="" ) {		
   		$.ajax({
		url:"../class/registro-usuario-procesar.php",
		data: 'contra=' + $("#pwd").val() + '& correo=' + $("#correo").val(),
		method: "GET",
		dataType:"json",
		success: function(data){
			if (data.exito==1) {
				alert(data.mensaje);
				window.location = "../ajustes_registro.html";
			}else{ 
               alert(data.mensaje);
			}
		},
	 });
   	}else{
   	 alert("Falta completar al menos uno de los campos");
   	}
   });
   
});


