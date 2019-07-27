<?php 
session_start();
include_once("class_conexion.php");

$variable["exito"]=1;

/*$conexion = new Conexion();*/
//$conexion->establecerConexion();

/*$sql = sprintf("INSERT INTO TBL_USUARIO VALUES ('%s','%s'),",
	     $_GET["correo"],
		 $_GET["pwd"]  

	 );

$resultado=$conexion->ejecutarInstruccion($sql);

*/
/*
$variable["mensaje"]="Error, usuario no encontrado o contraseña incorrecta";
$resultadonuevo=oci_fetch_array($resultado);*/

//if ($resultadonuevo[1]==$_GET['correo']) {
	    //$_SESSION["codigo_usuario"]=$resultadonuevo[3];
		//$_SESSION["nombre"]=$resultadonuevo[0];

$_SESSION["correo"]=$_GET["correo"];
$_SESSION['contrasenia']=$_GET["contra"];
		//$variable["exito"]=1;
		//$variable["mensaje"]="Se debe redireccionar";

//}
	
$variable["mensaje"]="Por favor termine de completar el siguiente formulario para finalizar el registro con exito:".$_SESSION["correo"]." ".$_SESSION["contrasenia"];
echo json_encode($variable);
 ?>