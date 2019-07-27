<?php
	include ("conection.php");
	
	$conn = new Conexion();
	$res = $_POST['name'];
	$sql = "INSERT INTO 1(id1) VALUES('$res')";
	$conn->ejecutarConsulta($sql);
	echo $res;
 ?>
