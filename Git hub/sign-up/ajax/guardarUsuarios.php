<?php
    
    $conexion = oci_connect("GITHUB","oracle","localhost/xe");

    $usuario = $_POST["usuario"];
    $contra =  $_POST["password"];
    $email =  $_POST["correo"];

    //echo "usuario " . $usuario . "Contraseña= " . " " . $contra . " " . "Correo" . " " . $email;

   $sql = oci_parse($conexion , "BEGIN  SP_EMPLEADO(:usuario, :contrasena, :email ); END;");

    oci_bind_by_name($sql, ':usuario', $usuario);
    oci_bind_by_name($sql, ':contrasena', $contra;
    oci_bind_by_name($sql, ':email', $email);

    $resultado = ociexecute($sql);

        if ($resultado) {
            echo "Reguistro Guardado";
        }else{
            echo "Fallo";
        }

?>