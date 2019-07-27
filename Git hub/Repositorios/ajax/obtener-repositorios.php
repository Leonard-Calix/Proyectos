<?php
    include_once 'conexion/conexionOracle.php';
    $conexion = new Conexion();

    $sql = "VISTA REPOSITORIOS ";
    $resultado = $conexion->ejecutarConsulta($sql);

    $repositorios = array();

    while($linea = conexion ){
        $repositorios[] = $linea;
    }

    echo json_encode($respuesta);

    $conexion->cerrarConexion();
?>