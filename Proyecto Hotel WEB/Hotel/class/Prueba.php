<?php 

	$nombre = "Galleta"; 
	$valor = 25;
	$tipo = 5;


	$conexion = oci_connect("melisa","melisa","localhost/xe");

	$sql = oci_parse($conexion , "BEGIN  SP_PLATO(:pnNombre, :pnValor, :pnTipo ); END;");

	oci_bind_by_name($sql, ':pnNombre', $nombre);
	oci_bind_by_name($sql, ':pnValor', $valor);
	oci_bind_by_name($sql, ':pnTipo', $tipo);

	$resultado = ociexecute($sql);

	if ($resultado) {
		# code...
		echo "Listo";
	}else{
		echo "Fallo";
	}


 ?>
