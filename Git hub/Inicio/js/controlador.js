$(document).ready(function(){
    llenarRepositorios();
});

function llenarRepositorios() {
    $.ajax({
        url:"ajax/obtener-gists.php",
        dataType:"json",
        success:function(respuesta){
            console.log("estas en el succes de carga");
            for(var i=0;i<respuesta.length;i++)
                $("#ul-repositorios").append(
                `<li class="li-list-style"><i class="fas fa-book fa-book-custom"></i><a href="#"   class="anchor-list-repositories">${respuesta[i].nombreExtension}</a></li>`
            );
        },
        error:function(error){
            console.log(JSON.stringify(error));
        }
    });
}