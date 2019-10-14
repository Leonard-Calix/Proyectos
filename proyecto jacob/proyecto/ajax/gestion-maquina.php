<?php 
	
	include_once '../clases/clase-maquinas.php';

	switch ($_GET["accion"]) {
		
		case 'mostrar':
		
			Maquina::mostrar();

		break;

		case 'obtenerUno':
		
			Maquina::odtenerUno($_POST["id"]);

		break;


		case 'add':
		
			$maquina = new Maquina(null, $_POST["nombre"], $_POST["estado"], $_POST["cantidad"]);
			echo $maquina->add();

		break;

		case 'editar':
		
			$maquina = new Maquina($_POST["id"], $_POST["nombre"], $_POST["estado"], $_POST["cantidad"]);
			echo $maquina->editar();

		break;

		case 'remove':
		
			 echo Maquina::remove($_POST["id"]);
			

		break;

		
		default:
			# code...
			break;
	}













 ?>