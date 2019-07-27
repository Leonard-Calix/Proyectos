$(document).ready(function(){
	var contador=1;
	$("#menu_pequenio").click(function(){
		if (contador==1) {
			$("#menu-principal2").animate({
				left: '0'
			});
			contador=0;
		} else{
			$("#menu-principal2").animate({
				left:'-100%'
			});
			contador=1;
		}
	});
});