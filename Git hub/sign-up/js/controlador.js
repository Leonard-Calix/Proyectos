$("#crear-cuenta").click(function(){
    console.log("se entro al click");
    if(
       validar("#txt-username")&&
       validar("#txt-password")&&
       validarEmail("#txt-email")
    ){
        var parametros="usuario="+$("#txt-username").val()+"&correo="+$("#txt-email").val()+"&password="+$("#txt-password").val();
        console.log("esto se le enviara al servidor: "+parametros);
       
        $.ajax({
            data:parametros,
            method:"POST",
            url:"ajax/guardarUsuarios.php",
           // dataType:"json",
            success:function(respuesta){
               
                alert(respuesta);
            }

        });
    }
});

$("#crear-cuenta2").click(function(){
    $("#div2-titulo-desaparecer").addClass("display-none");
    $("#div2-principal-desaparecer").addClass("display-none");
    $("#div3-titulo-desaparecer").removeClass("display-none");
    $("#div3-principal-desaparecer").removeClass("display-none");
    $("#step2").removeClass("div-selected").addClass("div-notselected");
    $("#step3").removeClass("div-notselected").addClass("div-selected");
    $("#icon3").removeClass("steps-font-notselected");
});

function validar(id) {
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

function validarEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test($(email).val())){
        $(email).removeClass("is-invalid");
        $(email).addClass("is-valid");
        return true;
    }else{
        $(email).addClass("is-invalid");
        $(email).removeClass("is-valid");
        return false;
    }
}

$("#rbt-pay").click(function(){
    //console.log("se entro a la funcion click private");
    if($("#rbt-pay").is(':checked'))
    $("#div-mostrar-private").removeClass("display-none");
});

$("#rbt-free").click(function(){
    //console.log("se entro a la funcion click public");
    if($("#rbt-free").is(':checked'))
    $("#div-mostrar-private").addClass("display-none");
});