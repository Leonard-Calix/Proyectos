<?php 
	$conexion = oci_connect("melisa","melisa","localhost/xe");
	
	$opcion = $_GET["opcion"];

	if ($opcion =="eliminar") {

		$id = $_GET["id"];
		$pnombre   = "";
		$snombre   = "";
		$papellido = "";
		$sapellido = "";
		$correo    = "";
		$cargo     = "";
		$turno     = "";
		$telefono  = "";
	}else{
		$id = $_GET["id"];
		$pnombre   = $_GET["pnombre"];
		$snombre   = $_GET["snombre"];
		$papellido = $_GET["papellido"];
		$sapellido = $_GET["sapellido"];
		$correo    = $_GET["correo"];
		$cargo     = $_GET["cargo"];
		$turno     = $_GET["turno"];
		$telefono  = $_GET["telefono"];		
	}

	
	$mensaje =" ";

	$sql = oci_parse($conexion , "BEGIN  SP_EMPLEADO(:pnId, :pNombre, :sNombre, :pApellido, :sApellido, :pcargo, :pturno, :pcorreo, :pnumero, :pnOpcion, :pcMensaje); END;");

	oci_bind_by_name($sql, ':pnId', $id);
	oci_bind_by_name($sql, ':pNombre', $pnombre);
	oci_bind_by_name($sql, ':sNombre', $snombre);
	oci_bind_by_name($sql, ':pApellido', $papellido);
	oci_bind_by_name($sql, ':sApellido', $sapellido);
	oci_bind_by_name($sql, ':pcargo', $cargo);
	oci_bind_by_name($sql, ':pturno', $turno);
	oci_bind_by_name($sql, ':pcorreo', $correo);
	oci_bind_by_name($sql, ':pnumero', $telefono);
	oci_bind_by_name($sql, ':pnOpcion', $opcion);
	oci_bind_by_name($sql, ':pcMensaje', $mensaje, 32);

	$resultado = ociexecute($sql);

		if ($resultado) {
			echo $mensaje;
		}else{
			echo "Fallo";
		}

?>