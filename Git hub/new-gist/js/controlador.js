
$("#btn-crear-gist").click(function(){
    
        var parametros= "gistDescripcion="+$("#gist-description").val()+
                "&nombreExtension="+$("#nombre-extension").val()+
                "&contenidoGist=" +$("#contenido-gist").val();
                console.log("info"+parametros);
               
                $.ajax({
                    url:"ajax/guardar-gist.php",
                    dataType:"json",
                    method:"POST",
                    data:parametros,
                    success:function(respuesta){
                        console.log(respuesta)
                        window.location = "mostrar-gist.php";
                    }
                });
               
});