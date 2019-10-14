<?php 
	
	include_once '../clases/clase-tecnico.php';

	switch ($_GET["accion"]) {
		
		case 'mostrar':
		
			Tecnico::mostrar();

		break;

		case 'obtenerUno':
		
			Tecnico::odtenerUno($_POST["id"]);

		break;

		case 'add':
		
			$tecnico = new Tecnico(null, $_POST["nombre"], $_POST["cantidad"],1);

			echo $tecnico->add();

		break;

		case 'remove':
		
			echo Tecnico::remove($_POST["id"]);

		break;

		case 'editar':
		
			$tecnico = new Tecnico($_POST["id"], $_POST["nombre"], $_POST["cantidad"],1);

			echo $tecnico->editar();

		break;


		

		
		default:
			# code...
			break;
	}













 ?>