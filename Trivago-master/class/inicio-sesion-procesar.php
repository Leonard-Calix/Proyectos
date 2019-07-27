<?php 
session_start();
include_once("class_conexion.php");

$variable["exito"]=0;
$conexion = new Conexion();
$conexion->establecerConexion();

$sql = sprintf(
		"SELECT NOMBRE,CORREO_ELECTRONICO, CONTRASENIA, CODIGO_USUARIO  FROM TRIVAGO.TBL_USUARIO WHERE CONTRASENIA= '%s' AND CORREO_ELECTRONICO= '%s'",
		$_GET["contra"],
		$_GET["correo"]		
	);
$resultado=$conexion->ejecutarInstruccion($sql);

$variable["mensaje"]="Error, usuario no encontrado o contraseña incorrecta";
$resultadonuevo=oci_fetch_array($resultado);


if ($resultadonuevo[1]==$_GET['correo']) {
	    $_SESSION["codigo_usuario"]=$resultadonuevo[3];
		$_SESSION["nombre"]=$resultadonuevo[0];
		$_SESSION["correo"]=$resultadonuevo[1];
		$_SESSION['contrasenia']=$resultadonuevo[2];
		$variable["exito"]=1;
		$variable["mensaje"]="Se debe redireccionar";
}
		

echo json_encode($variable);
 ?>