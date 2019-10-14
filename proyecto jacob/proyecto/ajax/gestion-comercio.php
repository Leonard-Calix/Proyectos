<?php 
	
	include_once '../clases/clase-comercio.php';

	switch ($_GET["accion"]) {
		
		case 'mostrar':
		
			Comercio::mostrar();

		break;

		case 'obtenerUno':
		
			Comercio::odtenerUno($_POST["id"]);

		break;

		case 'add':
		
			$comercio = new Comercio(null, $_POST["zona"],  $_POST["tipo"]);
			echo $comercio->add();

		break;

		case 'editar':
		
			$comercio = new Comercio($_POST["id"], $_POST["zona"], $_POST["tipo"]);
			echo $comercio->editar();

		break;

		case 'remove':
		
			echo Comercio::remove($_POST["id"]);
			

		break;


		

		
		default:
			# code...
			break;
	}













 ?>