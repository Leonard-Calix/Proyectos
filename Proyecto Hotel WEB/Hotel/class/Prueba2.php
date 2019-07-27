<?php 

	$nombre = "Nacho"; 
	$valor = 5;
	$tipo = 5;
	$mensaje = "";


	$conexion = oci_connect("melisa","melisa","localhost/xe");

	$sql = oci_parse($conexion , "BEGIN  SP_PLATO(:pnNombre, :pnValor, :pnTipo, :pcMensaje); END;");

	oci_bind_by_name($sql, ':pnNombre', $nombre);
	oci_bind_by_name($sql, ':pnValor', $valor);
	oci_bind_by_name($sql, ':pnTipo', $tipo);
	oci_bind_by_name($sql, ':pcMensaje', $mensaje, 32);

	$resultado = ociexecute($sql);

	if ($resultado) {
		# code...
		echo "Listo " . "Mensaje de la base de datos " . $mensaje ;
	}else{
		echo "Fallo";
	}


 ?>