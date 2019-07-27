<?php 

	$conexion = oci_connect("melisa","melisa","localhost/xe");

	$fechaI   = $_GET["fechaI"];
	$fechaS   = $_GET["fechaS"];
	$huesped = $_GET["huesped"];
	$adulto  = $_GET["adulto"];
	$nino    = $_GET["nino"];
	$numero  = $_GET["numero"];	
	$estado  = $_GET["estado"];		
	$empleado  = $_GET["empleado"];	
	$mensaje = "Informacion";

	//echo $estado;

	$sql = oci_parse($conexion ,"BEGIN SP_RESERVACION(:fechaI, :fechaS, :huesped, :adulto, :nino, :numero, :estado, :empleado, :pcMensaje); END;");

	oci_bind_by_name($sql, ':fechaI',    $fechaI);
	oci_bind_by_name($sql, ':fechaS',    $fechaS);
	oci_bind_by_name($sql, ':huesped',   $huesped);
	oci_bind_by_name($sql, ':adulto',    $adulto);
	oci_bind_by_name($sql, ':nino',      $nino);
	oci_bind_by_name($sql, ':numero',    $numero);
	oci_bind_by_name($sql, ':estado',    $estado);
	oci_bind_by_name($sql, ':empleado',  $empleado);
	oci_bind_by_name($sql, ':pcMensaje', $mensaje, 32);

	$guardar= ociexecute($sql);

	if ($guardar) {
		# code...
		echo $mensaje;
	}


	
	

 ?>