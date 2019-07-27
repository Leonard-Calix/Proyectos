<?php 
	$conexion = oci_connect("melisa","melisa","localhost/xe");
	
	$opcion = $_GET["opcion"];
	$mensaje = "";
	//echo $_GET["precio"] . $_GET["opcion"] ;

	if ($opcion=="eliminar"){
		$id = $_GET["id"];
		$no = "";
		$descripcion ="";
		$precio = "";
		$tipo = "";
	}else{
		$id = $_GET["id"];	
		$tipo = $_GET["tipo"];
		$no = $_GET["no"];
		$precio = $_GET["precio"];
		$descripcion = $_GET["descripcion"];
		
	}



	$sql = oci_parse($conexion , "BEGIN  SP_HABITACION(:pnId, :pnNo, :pnDescripcio, :pnPrecio, :pnTipo, :pnOpcion, :pcMensaje); END;");

	oci_bind_by_name($sql, ':pnId', $id);
	oci_bind_by_name($sql, ':pnNo', $no);
	oci_bind_by_name($sql, ':pnDescripcio', $descripcion);
	oci_bind_by_name($sql, ':pnPrecio', $precio);
	oci_bind_by_name($sql, ':pnTipo', $tipo);
	oci_bind_by_name($sql, ':pnOpcion', $opcion);
	oci_bind_by_name($sql, ':pcMensaje', $mensaje, 32);

	$resultado = ociexecute($sql);

		if ($resultado) {
			echo $mensaje;
		}else{
			echo "Fallo";
		}

 ?>