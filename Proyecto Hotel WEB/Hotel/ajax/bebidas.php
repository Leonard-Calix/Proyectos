<?php 


		$conexion = oci_connect("melisa","melisa","localhost/xe");
		$mensaje = " ";
		$opcion = $_GET["opcion"];

		if ($opcion=="eliminar") {
			$id = $_GET["id"];
			$nombre = "";
			$valor = "";
			$tipo = "";
		} else {
		    $id = $_GET["id"];		
			$nombre = $_GET["nombre"];
			$valor = $_GET["valor"];
			$tipo = $_GET["tipo"];
			
		}
		

		$sql = oci_parse($conexion , "BEGIN  GESTION_BEBIDAS(:pnIdBebida, :pnNombre, :pnValor, :pnTipoBebida, :pcAccion, :pcMensaje); END;");

		oci_bind_by_name($sql, ':pnIdBebida', $id);
		oci_bind_by_name($sql, ':pnNombre', $nombre);
		oci_bind_by_name($sql, ':pnValor', $valor);
		oci_bind_by_name($sql, ':pnTipoBebida', $tipo);
		oci_bind_by_name($sql, ':pcAccion', $opcion);
		oci_bind_by_name($sql, ':pcMensaje',  $mensaje, 32);
	

			

		$resultado = ociexecute($sql);

		if ($resultado) {
			echo $mensaje;
		}else{
			echo "Fallo";
		}


/*
	$opcion = $_GET["opcion"];
	
	switch ($opcion) {
		case 'editar':
			echo "Editar";
			$id = $_GET["id"];
			$tipo = $_GET["tipo"];
			$nombre = $_GET["nombre"];
			$valor = $_GET["valor"];

			break;
		
		case 'guardar':
			echo "Guardar";
			$tipo = $_GET["tipo"];
			$nombre = $_GET["nombre"];
			$valor = $_GET["valor"];

			
			break;

		case 'eliminar':
			
			$id = $_GET["id"];
			echo "Eliminar " . $id;

			break;
	}


*/
 ?>