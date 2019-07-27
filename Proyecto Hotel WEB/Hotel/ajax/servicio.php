<?php 
		$conexion = oci_connect("melisa","melisa","localhost/xe");
		$opcion = $_GET["opcion"];
	    $Mensaje = "";

		switch ($opcion) {

			case 'bebida':

			$id = $_GET["id"];
			$cantidad = $_GET["cantidad"];
			$reservacion = $_GET["reservacion"];
			
			$sql = oci_parse($conexion , "BEGIN  GESTION_BEBIDAS_RESERVACION(:pnIdBebida, :pnCantidad, :pnIdReservacion, :pcMensaje); END;");

			oci_bind_by_name($sql, ':pnIdBebida', $id);
			oci_bind_by_name($sql, ':pnCantidad', $cantidad);
			oci_bind_by_name($sql, ':pnIdReservacion', $reservacion);
			oci_bind_by_name($sql, ':pcMensaje',  $mensaje, 32);
	
			$resultado = ociexecute($sql);

			if ($resultado) {
				echo $mensaje;
			}else{
				echo "Fallo";
			}


			break;

			case 'comida':
				
				$id = $_GET["id"];
				$cantidad = $_GET["cantidad"];
				$reservacion = $_GET["reservacion"];
			
				$sql = oci_parse($conexion , "BEGIN  PC_GESTION_PLATO_RESERVACION(:pnIdPlato, :pnCantidad, :pnIdReservacion, :pcMensaje); END;");

				oci_bind_by_name($sql, ':pnIdPlato', $id);
				oci_bind_by_name($sql, ':pnCantidad', $cantidad);
				oci_bind_by_name($sql, ':pnIdReservacion', $reservacion);
				oci_bind_by_name($sql, ':pcMensaje',  $mensaje, 32);
	
				$resultado = ociexecute($sql);

				if ($resultado) {
					echo $mensaje;
				}else{
					echo "Fallo";
				}
				break;
			
		}














 ?>