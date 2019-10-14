<?php 


	include_once '../clases/clase-informe.php';

	switch ($_GET["accion"]) {
		case 'mayorista':
			echo Informes::informeMayorista();
		break;

		case 'minorista':
			echo Informes::informeMinorista();
		break;

		case 'global':
			echo Informes::informeGlobal();
		break;
		
		default:
			# code...
			break;
	}


















 ?>