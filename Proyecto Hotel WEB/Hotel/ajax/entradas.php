<?php 

	$conexion = oci_connect("melisa","melisa","localhost/xe");

	$opcion = $_GET["opcion"];
	$nombre = $_GET["nombre"];
	$preciov = $_GET["preciov"];
	$precioc = $_GET["precioc"];
	$categoria = $_GET["categoria"];
	$cantidad = $_GET["cantidad"];
	$Mensaje = "";
 
	$sql = oci_parse($conexion , "BEGIN  SP_ENTRADAS(:pnNombre, :pnCategoria, :pnPrecioC, :pnPrecioV, :pnCantidad, :pnOpcion, :pcMensaje); END;");

	oci_bind_by_name($sql, ':pnNombre', $nombre);
	oci_bind_by_name($sql, ':pnCategoria', $categoria);
	oci_bind_by_name($sql, ':pnPrecioC', $precioc);
	oci_bind_by_name($sql, ':pnPrecioV', $preciov);
	oci_bind_by_name($sql, ':pnCantidad', $cantidad);
	oci_bind_by_name($sql, ':pnOpcion', $opcion);
	oci_bind_by_name($sql, ':pcMensaje', $mensaje, 32);

	$resultado = $resultado = ociexecute($sql);

	if ($resultado) {
		# code...
		echo $Mensaje;
	} else {
		# code...
		echo "fallo";
	}
	




 ?>