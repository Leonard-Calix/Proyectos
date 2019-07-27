
$(document).ready(function(){
	$("#btn_guardar_ajustes").click(function(){ 	
		 //alert($("#nombre").val() + $("#apellido").val()+$("#codigo-postal").val()+$("#seleccionar-ciudad").val()+$("#genero").val()+$("#direccion").val());
		if ($("#nombre").val()!='' && $("#apellido").val()!=''&& $("#codigo-postal").val()!='' && $("#seleccionar-ciudad").val()!='' && $("#genero").val()!=''
		  && $("#direccion").val()!='' && $("#correo").val()!='' && $("#contra").val()!='') {
		 //alert($("#nombre").val() + $("#apellido").val()+$("#codigo-postal").val()+$("#seleccionar-ciudad").val()+$("#genero").val()+$("#direccion").val() + $("#correo").val() + $("#contra").val()); 		
		 $.ajax({
		 url:"../class/registro-ajustes-procesar.php",
		 data:{ 'genero': $("#genero").val(), 
		        'ciudad':$("#seleccionar-ciudad").val(), 
		        'postal':$("#codigo-postal").val(),
		        'nombre': $("#nombre").val(),
		        'apellido':$("#apellido").val(), 
		        'direccion':$("#direccion").val(),
		        '&correo': $("#correo").val(),
		        '&contra':$("#contra").val()}
		 method: "GET",
		 dataType:"json",
		 success: function(data){
		 	//alert(data);
			 if (data.exito==1) {
				 alert("PASO ESTA TODO BIEN");
				 window.location = "../paginasweb/pagina_inicio.html";
			 }else{ 
				alert("algo esta mal");
			 }
		   },
	    });
		}else{
		 alert("Falta completar al menos uno de los campos");
		};
	});
});




//'nombre=' + $("#nombre").val() +
//'nombre=' + $("#nombre").val() +