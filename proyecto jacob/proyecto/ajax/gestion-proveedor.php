<?php 
	
	include_once '../clases/clase-proveedor.php';

	switch ($_GET["accion"]) {
		
		case 'mostrar':
		
			Proveedor::mostrar();

		break;

		case 'obtenerUno':
		
			Proveedor::obtenerUno($_POST["id"]);

		break;

		case 'add':
		
				$proveedor = new Proveedor(null, $_POST["nombre"], $_POST["tipo"], $_POST["tipop"], $_POST["estado"]);
				echo $proveedor->add();

		break;

		case 'editar':
		
				$proveedor = new Proveedor($_POST["id"], $_POST["nombre"], $_POST["tipo"], null, null);
				echo $proveedor->editar();

		break;

		case 'remove':
		
				echo Proveedor::remove($_POST["id"]);
				
		break;

		

		
		default:
			# code...
			break;
	}













 ?>