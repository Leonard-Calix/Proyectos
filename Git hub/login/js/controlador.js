/*function ejecutarValidacion(){
    validar("txt-username");
    validar("password");
}

function validar(id){
    if(document.getElementById(id).value == ""){
        document.getElementById(id).classList.remove("is-valid");
        document.getElementById(id).classList.add("is-invalid");
        document.getElementById("p-validacion").classList.remove("display");
    }else{
        document.getElementById(id).classList.remove("is-invalid");
        document.getElementById(id).classList.add("is-valid");
        document.getElementById("p-validacion").classList.add("display");
    }
}

function cerrarDiv(id){
    document.getElementById(id).classList.add("display"); 
}*/

$("#btn-cerrar").click(function(){
    $("#p-validacion").addClass("display");
});

function validar(id) {
    if($(id).val()==""){
        $(id).removeClass("is-valid");
        $(id).addClass("is-invalid");
        $("#p-validacion").removeClass("display");
        return false;
    }else{
        $(id).addClass("is-valid");
        $(id).removeClass("is-invalid");
        $("#p-validacion").addClass("display");
        return true;
    }
}

$("#btn-signin").click(function(){
    if(
        validar("#txt-username") &&
        validar("#password")
    ){
        var parametros = "usuario="+$("#txt-username").val()+"&password="+$("#password").val();
        //console.log("se enviara esto al servidor: "+parametros);
        $.ajax({
            url:"../sistema-seguridad/ajax/login.php",
            method:"POST",
            data:parametros,
            dataType:"json",
            success:function(respuesta){
                console.log(respuesta);
                if (respuesta.codigo == 0)
                    window.location = "../inicio/index.php";  //Redirreccionar desde js
            },
            error:function(error){
                console.log(error);
            }
        });
    }
});