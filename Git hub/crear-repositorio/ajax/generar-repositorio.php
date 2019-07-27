<?php
    $conexion = oci_connect("GITHUB","oracle","localhost/xe");

    //$usuario = $_POST["usuario"];
    $usuario = 1;
    $repositorio = $_POST["repositorio"];
    $descripcion = $_POST["descripcion"];
    $idRepositorio=0;
    $idBranch=0;


    $sql = oci_parse($conexion , "BEGIN  CREAR_REPO(:P_USUARIO, :P_NOMBRE_REPO, :P_DESCRIPCION, :O_ID_REPO, :O_ID_BRANCH ); END;");

    oci_bind_by_name($sql, ':P_USUARIO', $usuario);
    oci_bind_by_name($sql, ':P_NOMBRE_REPO', $repositorio );
    oci_bind_by_name($sql, ':P_DESCRIPCION', $descripcion);
    oci_bind_by_name($sql, ':O_ID_REPO', $idRepositorio);
    oci_bind_by_name($sql, ':O_ID_BRANCH', $idBranch);


    $resultado = ociexecute($sql);

    if ($resultado) {
        echo "Registro Guardado";
        echo $idRepositorio;
    } else {
        echo "Fallo";
    }
    


     
?>