<?php 

		$conexion = oci_connect("melisa","melisa","localhost/xe");
		$mensaje = " ";
		$opcion = $_GET["opcion"];

		//echo $_POST["nombre"];



		if ($opcion=="eliminar") {
			$nombre = "";
			$valor = "";
			$tipo = "";
			$id = $_GET["id"];	
			
		} else {
			$nombre = $_GET["nombre"];
			$valor = $_GET["valor"];
			$tipo = $_GET["tipo"];
			$id = $_GET["id"];
		}
		

		$sql = oci_parse($conexion , "BEGIN  GESTION_PLATOS(:pnIdPlato, :pcNombre, :pnValor, :pnTipoPlatillo, :pcAccion, :pcMensaje); END;");

		oci_bind_by_name($sql, ':pnIdPlato', $id);
		oci_bind_by_name($sql, ':pcNombre', $nombre);
		oci_bind_by_name($sql, ':pnValor', $valor);
		oci_bind_by_name($sql, ':pnTipoPlatillo', $tipo);
		oci_bind_by_name($sql, ':pcAccion', $opcion);
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
			$nombre = $_POST["nombre"];
			$valor = $_POST["valor"];
			$tipo = $_POST["tipo"];
			$id = $_POST["id"];	

			$sql = oci_parse($conexion , "BEGIN  SP_PLATO(pnIdBebida, :pnNombre, :pnValor, :pnTipoBebida, :pcAccion, :pcMensaje, :bcOcurrioError); END;");

			oci_bind_by_name($sql, ':pnId', $id);
			oci_bind_by_name($sql, ':pnNombre', $nombre);
			oci_bind_by_name($sql, ':pnValor', $valor);
			oci_bind_by_name($sql, ':pnTipoBebida', $tipo);
			oci_bind_by_name($sql, ':pnAccion', $opcion);
			oci_bind_by_name($sql, ':pcMensaje',  $mensaje, 32);
			oci_bind_by_name($sql, ':bcOcurrioError',  $error);

			

			$editar = ociexecute($sql);

			if ($resultado) {
				echo $mensaje;
			}else{
				echo "Fallo";
			}

		break;
		
		case 'guardar':

			$nombre = $_POST["nombre"];
			$valor = $_POST["valor"];
			$tipo = $_POST["tipo"];

			$sql = oci_parse($conexion , "BEGIN  SP_PLATO(:pnNombre, :pnValor, :pnTipo, :pcMensaje); END;");

			oci_bind_by_name($sql, ':pnNombre', $nombre);
			oci_bind_by_name($sql, ':pnValor', $valor);
			oci_bind_by_name($sql, ':pnTipo', $tipo);
			oci_bind_by_name($sql, ':pcMensaje', $mensaje, 32);

			$guardar = ociexecute($sql);

			if ($guardar) {
				echo $mensaje;
			}else{
				echo "Fallo";
			}

		break;

		case 'eliminar':
			$id = $_GET["id"];
			
			$sql = oci_parse($conexion , "BEGIN  SP_PLATO(:pnId, :pcMensaje); END;");

			oci_bind_by_name($sql, ':pnId', $id);
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