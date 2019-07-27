//funcion para enseniar el div oculto; aun falta y se puede mejorar
$("#rbt-private").click(function(){
            //console.log("se entro a la funcion click private");
            if($("#rbt-private").is(':checked'))
            $("#div-mostrar-private").removeClass("display-none");
        });
        
        $("#rbt-public").click(function(){
            //console.log("se entro a la funcion click public");
            if($("#rbt-public").is(':checked'))
            $("#div-mostrar-private").addClass("display-none");
        });
        //FIN funcion para enseniar el div oculto


function validarRepertorio(id) {
    if($(id).val()==""){
        $(id).addClass("is-invalid");
        $(id).removeClass("is-valid");
        return false;
    }else{
        $(id).removeClass("is-invalid");
        $(id).addClass("is-valid");
        return true;
    }
}


$("#crear-repositorio").click(function(){
    if(validarRepertorio("#txt-repository")){

        var parametros="usuario="+$("#sct-usuario").val()+"&repositorio="+$("#txt-repository").val()+"&descripcion="+$("#txt-descripcion").val();
        console.log("se le enviara esta info al servidor: "+parametros);

        $.ajax({
            url:"ajax/generar-repositorio.php",
            data:parametros,
            method:"POST",
            success:function(respuesta){
              alert(respuesta);
            }
        });
    }
});
/*#crear-repositorio
#sct-usuario
#txt-repository
#txt-descripcion*/