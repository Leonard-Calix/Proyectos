$("#crear-cuenta").click(function(){
	var nomhotel= trato=cargo= tel_id = txt_tel = nombre_usr = apellido_usr=correo=pwd="";
	// alert(txt_nomehotel);
	nomhotel = $("#txt_nomehotel").val();
	if(txt_nomehotel == ""){
		$("#txt_nomehotel").addClass("error");
	}else{
		$("#txt_nomehotel").removeClass("error");
	}

});