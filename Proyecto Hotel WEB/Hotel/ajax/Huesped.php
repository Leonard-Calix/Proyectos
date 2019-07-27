

<?php 
	
	$conexion = oci_connect("melisa","melisa","localhost/xe");

	$opcion = $_GET["opcion"];
	

	if ($opcion=="eliminar") {
		$id  = $_GET["id"];
		$pnombre   = "";
		$snombre   = "";
		$papellido = "";
		$sapellido = "";
		$correo    = "";
		$telefono  = "";
		$direccion = "";
	}else{
		$id  = $_GET["id"];
		$pnombre   = $_GET["pnombre"];
		$snombre   = $_GET["snombre"];
		$papellido = $_GET["papellido"];
		$sapellido = $_GET["sapellido"];
		$correo    = $_GET["correo"];
		$telefono  = $_GET["telefono"];
		$direccion = $_GET["direccion"];
	}

	$mensaje = " ";

	$sql = oci_parse($conexion ,"BEGIN SP_HUESPED(:pnId, :Nombre1, :Nombre2, :Apellido1, :Apellido2, :pcorreo, :ptelefono, :pdireccion, :pnOpcion, :pcMensaje); END;");

	oci_bind_by_name($sql, ':pnId',       $id);
	oci_bind_by_name($sql, ':Nombre1',    $pnombre);
	oci_bind_by_name($sql, ':Nombre2',    $snombre);
	oci_bind_by_name($sql, ':Apellido1',  $papellido);
	oci_bind_by_name($sql, ':Apellido2',  $sapellido);
	oci_bind_by_name($sql, ':pcorreo',    $correo);
	oci_bind_by_name($sql, ':ptelefono',  $telefono);
	oci_bind_by_name($sql, ':pdireccion', $direccion);
	oci_bind_by_name($sql, ':pnOpcion',   $opcion);
	oci_bind_by_name($sql, ':pcMensaje',  $mensaje, 32);

	$resultado = ociexecute($sql);

	if ($resultado) {
		echo $mensaje;
	}else{
		echo "Fallo";
	}



/*
	switch ($opcion) {
		case 'editar':
			
			$id  = $_GET["id"];
			$pnombre   = $_GET["pnombre"];
			$snombre   = $_GET["snombre"];
			$papellido = $_GET["papellido"];
			$sapellido = $_GET["sapellido"];
			$correo    = $_GET["correo"];
			$telefono  = $_GET["telefono"];		

			
			$sql = oci_parse($conexion ,"BEGIN SP_EDITAR_HUESPED(:pnId, :pNombre, :sNombre, :pApellido, :sApellido, :pcorreo, :ptelefono, :pcMensaje); END;");

			oci_bind_by_name($sql, ':pnId',       $id);
			oci_bind_by_name($sql, ':pNombre',    $pnombre);
			oci_bind_by_name($sql, ':sNombre',    $snombre);
			oci_bind_by_name($sql, ':pApellido',  $papellido);
			oci_bind_by_name($sql, ':sApellido',  $sapellido);
			oci_bind_by_name($sql, ':pcorreo',    $correo);
			oci_bind_by_name($sql, ':ptelefono',  $telefono);
			oci_bind_by_name($sql, ':pcMensaje',  $mensaje, 32);

			$editar = ociexecute($sql);

			if ($editar) {
				echo $mensaje;
			}else{
				echo "Fallo";
			}
	
		break;

		case 'guardar':
			//echo "guardar";

			$pnombre   = $_GET["pnombre"];
			$snombre   = $_GET["snombre"];
			$papellido = $_GET["papellido"];
			$sapellido = $_GET["sapellido"];
			$correo    = $_GET["correo"];
			$telefono  = $_GET["telefono"];
			$direccion  = $_GET["direccion"];

			$sql = oci_parse($conexion ,"BEGIN SP_NUEVO_HUESPED(:pNombre, :sNombre, :pApellido, :sApellido, :pcorreo, :ptelefono, :pdireccion, :pcMensaje); END;");

			oci_bind_by_name($sql, ':pNombre',    $pnombre);
			oci_bind_by_name($sql, ':sNombre',    $snombre);
			oci_bind_by_name($sql, ':pApellido',  $papellido);
			oci_bind_by_name($sql, ':sApellido',  $sapellido);
			oci_bind_by_name($sql, ':pcorreo',    $correo);
			oci_bind_by_name($sql, ':ptelefono',  $telefono);
			oci_bind_by_name($sql, ':pdireccion', $direccion);
			oci_bind_by_name($sql, ':pcMensaje',  $mensaje, 32);

			$guardar = ociexecute($sql);

			if ($guardar) {
				echo $mensaje;
			}else{
				echo "Fallo";
			}
	
			break;

		case 'eliminar':
			$id  = $_GET["id"];
			

			$sql = oci_parse($conexion ,"BEGIN SP_ELIMINAR_HUESPED(:pNId, :pcMensaje); END;");

			oci_bind_by_name($sql, ':pnId',       $id);
			oci_bind_by_name($sql, ':pcMensaje',  $mensaje, 32);

			$eliminar = ociexecute($sql);

			if ($eliminar) {
				echo $mensaje;
			}else{
				echo "Fallo";
			}

		break;
		
		

	}

*/

	

 ?>