<?php
    $archivo = fopen("../../data-gists/gist.json","r");
    $linea="";
    $gists=array();
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        $gists[] = $registro;
    }
    
    echo json_encode($gists);
    ?>