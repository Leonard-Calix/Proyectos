$(document).ready(function(){
   $("#btn_guardar_ajustes").click(function(){ 	
   	if ($("#nombre_txt").val()!='' && $("#apellido-txt").val()!=''&& $("#txt_hotel").val()!='' && $("#slc_tra").val()!=''
	  && $("#correo").val()!='' && $("#pwd").val()!='' ) {		
   		$.ajax({
		url:"../registro-hotelero-procesar.php",
		data: 'genero=' + $("#slc_tra").val() + '&hotel=' + $("#txt_hotel").val() + '&nombre=' + $("#nombre_txt").val() +
	    '&apellido=' + $("#apellido").val() + '&correo=' + $("#correo").val() + '&contra=' + $("#pwd").val(),
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

nombre_hotel=1&selcttra=1&nombre_txt=dsadsa&apellido-txt=dasdsa&emailof=dsadsa&password_txt=dsadsada

nombre=dfsfasd&apellido=safads&hotel=1&correo=fdasds&contra=dsFADFAS&genero=M

/*
$("#btn_guardar_ajustes").click(function(){ 	
	if ($("#nombre_txt").val()!='' && $("#apellido-txt").val()!=''&& $("#txt_hotel").val()!='' && $("#slc_tra").val()!=''
	  && $("#correo").val()!='' && $("#pwd").val()!='') {		
	 $.ajax({
	 url:"../class/registro-hotelero-procesar.php",
	 data: 'genero=' + $(".slc_tra").val() + '&ciudad=' + '&hotel=' + $(".txt_hotel").val() + '&nombre=' + $("#nombre_txt").val() +
	 '&apellido=' + $("#apellido").val() + '&correo=' + $("#correo").val() + '&contra=' + $("#pwd").val(),
	 method: "GET",
	 dataType:"json",
	 success: function(data){
		 if (data.exito==1) {
			 alert(data.mensaje);
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
*/
