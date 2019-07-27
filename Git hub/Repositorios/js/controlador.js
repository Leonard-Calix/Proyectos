$(document).ready(function(){
    llenarRepositorios();
});

function llenarRepositorios() {
    $.ajax({
        url:"ajax/obtener-repositorios.php",
        dataType:"json",
        success:function(respuesta){
            console.log("estas en el succes de carga");
            for(var i=0;i<respuesta.length;i++)
                $("#agregar").append(
                `<div class="col-12">
                <h5><a href="#">${respuesta[i].repositorio}</a></h5>
                <p style="font-size:13px">${respuesta[i].descripcion}</p>
                <p style="font-size:13px">@${respuesta[i].usuario}</p>
                <hr>
            </div>`
            );
        },
        error:function(error){
            console.log(JSON.stringify(error));
        }
    });
}