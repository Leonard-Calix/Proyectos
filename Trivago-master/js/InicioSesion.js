$(document).ready(function(){
   $("#iniciar-sesion").click(function(){ 	
   	if ($("#pwd").val()!="" && $("#correo").val()!="" ) {		
   		$.ajax({
		url:"../class/inicio-sesion-procesar.php",
		data: 'contra=' + $("#pwd").val() + '& correo=' + $("#correo").val(),
		method: "GET",
		dataType:"json",
		success: function(data){
			//alert(data);
			if (data.exito==1) {
				window.location = "../paginasweb/pagina_inicio.php";
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
