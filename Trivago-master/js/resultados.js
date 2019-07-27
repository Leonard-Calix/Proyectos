$('.ja-date').datepicker({
    format: "dd/mm/yyyy",
    language: "es"
});

$(document).ready(function(){
	ponerElCursorAlFinal("barra-busqueda");
});


function ponerElCursorAlFinal(id){
    var obj = $("#"+id),

    // Guardamos en una variable el contenido
    val = obj.val();

    // Ponemos el foco, limpiamos el contenido y volvemos a poner
    // nuevamente el mismo contenido
    obj.focus().val("").val(val);

    // Movemos el scroll
    obj.scrollTop(obj[0].scrollHeight);
}
