<?php
	$conexion = oci_connect("GITHUB","oracle","localhost/xe");

	$descripcion = $_POST["gistDescripcion"];
	$nombreExtension = $_POST["nombreExtension"];
	$contenidoGist = $_POST["contenidoGist"];


	$mensaje =" ";

	$sql = oci_parse($conexion , "BEGIN  SP_EMPLEADO(:descripcion, :nombreExtension, :sNombre, :contenidoGist, :pcMensaje); END;");

	oci_bind_by_name($sql, ':descripcion', $descripcion);
	oci_bind_by_name($sql, ':nombreExtension', $nombreExtension);
	oci_bind_by_name($sql, ':contenidoGist', $contenidoGist);
	oci_bind_by_name($sql, ':mensaje', $mensaje;

	if ($resultado) {
		# code...
	} else {
		# code...
	}
	

?>