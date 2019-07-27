/*$("#btn-crear-gist")
$.ajax({
    url:"ajax/obtener-gist.php",
    dataType:"json",
    data:parametros,
    method:"POST",
    success: function(respuesta){
       $("#nombre-gist-superior").append(` <p  id="nombre-gist-superior">${$("#contenido-gist").val()}</p>`)
    },
    error:function(error){
        console.log(error);
    }
 });