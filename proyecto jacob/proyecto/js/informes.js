$(document).ready(function(){	
	/*Detalle de tour*/
	InformeMayorista();
	InformeMinorista();
	InformeGlobal(); 

}); 

function InformeMayorista() {
	
	$.ajax({
		url:"ajax/gestion-informes.php?accion=mayorista",
		method:"GET",
		dataType:'json',
		success:function(res){
			//console.log("mayorista");
			//console.log(res);

			for (var i = 0; i < res.length; i++) {
				$('#tabla-mayorista').append(`<tr>
                          						<td>${res[i].Codigo_Comercio}</td>
                          						<td>${res[i].PorcentajeyPago}</td>
                          						<td>${res[i].Zona_Comercio}</td>
                          						<td>${res[i].Tipo_Comercio}</td>
                        					</tr>`);
			}
			
		}
	});
}


function InformeGlobal() {
	
	$.ajax({
		url:"ajax/gestion-informes.php?accion=global",
		method:"GET",
		dataType:'json',
		success:function(res){
			//console.log("GLOBAL");
			//console.log(res);

			for (var i = 0; i < res.length; i++) {
				$('#tabla-global').append(`<tr>
                          						<td>${res[i].Codigo_Comercio}</td>
                          						<td>${res[i].Zona_Comercio}</td>
                          						<td>${res[i].Zona_Comercio}</td>
                          						<td>${res[i].Porcentaje_Mayorista}</td>
                        					</tr>`);
			}
			
		}
	});
}


function InformeMinorista() {
	
	$.ajax({
		url:"ajax/gestion-informes.php?accion=minorista",
		method:"GET",
		dataType:'json',
		success:function(res){
			//console.log("minorista");
			console.log(res);

			for (var i = 0; i < res.length; i++) {
				$('#tabla-minorista').append(`<tr>
                          						<td>${res[i].Codigo_Comercio}</td>
                          						<td>${res[i].Pago_Minorista_Mensual}</td>
                          						<td>${res[i].Zona_Comercio}</td>
                          						<td>${res[i].Tipo_Comercio}</td>
                        					</tr>`);
			}
			
		}
	});
}



                      