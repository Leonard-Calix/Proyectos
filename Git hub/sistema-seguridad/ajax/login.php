<?php 
	session_start();
	$conexion = oci_connect("GITHUB","oracle","localhost/xe");

	$usuario = $_POST["usuario"];
	$password = $_POST["password"];

	$usr="";
	$mensaje="";


	$sql = oci_parse($conexion , "BEGIN  SP_(:usuario, :contrasena, :password, :usr, :mensaje); END;");

	oci_bind_by_name($sql, ':usuario', $id);
	oci_bind_by_name($sql, ':contrasena', $pnombre);
	oci_bind_by_name($sql, ':password', $snombre);
	oci_bind_by_name($sql, ':usr', $usr);
	oci_bind_by_name($sql, ':mensaje', $mensaje);



	if ($resultado) {
		$_SESSION["usr"] = $usr;
		echo $mensaje;

	} else {
		 session_destroy();
		 echo $mensaje;
	}
	

 ?>
