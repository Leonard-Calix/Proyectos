<?php

class Informes{

	public static function informeMayorista(){
		include 'conexionPDO.php';

		$sql = "SELECT * FROM view_datos_global";

		$resultado = $base_de_datos->prepare($sql);
		$resultado->execute();

		$datos = array();

		foreach ($resultado as $row) {
			$datos[] = $row;
			
		}

		echo json_encode($datos);
	}

	public static function informeMinorista(){
		include'conexionPDO.php';

		$sql = "SELECT * FROM view_Datos_Minorista";

		$resultado = $base_de_datos->prepare($sql);
		$resultado ->execute();

		$datos = array();

		foreach ($resultado as $row) {
			$datos[] = $row;
			
		}

		echo json_encode($datos);
	}

	public static function informeGlobal(){
		include'conexionPDO.php';

		$sql = "SELECT * FROM view_Datos_Mayorista";

		$resultado = $base_de_datos->prepare($sql);
		$resultado ->execute();

		$datos = array();

		foreach ($resultado as $row) {
			$datos[] = $row;
			
		}

		echo json_encode($datos);
	}
	
	



}
?>