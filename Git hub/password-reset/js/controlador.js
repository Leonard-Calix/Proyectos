function ejecutar(){
    validarCampo("input-txt");
}

function validarCampo(id){
    if(document.getElementById(id).value=="")
    document.getElementById("p-validacion").classList.remove("display");
    else
    document.getElementById("p-validacion").classList.add("display");
}

function cerrarDiv(id){
    document.getElementById(id).classList.add("display");
}