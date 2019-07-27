<?php
    $archivo = fopen("../../data-gists/gist.json","r");
    $linea = "";
    $respuesta = array();
    while(($linea=fgets($archivo))){
        $usuarios = json_decode($linea,true);
        $respuesta[] = $usuarios;
    }
    fclose($archivo);
    echo json_encode($respuesta);
?>