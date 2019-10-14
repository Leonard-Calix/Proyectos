<?php 


	$contraseña = "1234";
$usuario = "leonardo";
$nombreBaseDeDatos = "proyecto_BD2";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "DESKTOP-0TRI2MA\SQLEXPRESS";
try {
	$base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
	$base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

if ($base_de_datos) {
	//echo "Conexion lista";
}


	








 ?>