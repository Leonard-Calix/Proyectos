<?php 
session_start();
include_once("class_conexion.php");

$variable["exito"]=1;
//$variable["mensaje"]="Por favor termine de completar el siguiente formulario para finalizar el registro con exito";
$conexion = new Conexion();
//$conexion->establecerConexion();
$a = $_GET["nombre"];
$b = $_GET["apellido"];
$c = $_GET["hotel"];
//$d = $_GET["postal"];
//$f = $_GET["direccion"];


$correo = $_GET['correo'];
//$correo= $_SESSION['correo'];
$contra = $_GET['contra'];
//$contra = $_SESSION['contrasenia'];



$genero= 1;
if ($_GET["genero"]=1) {
	$genero= 1;
}else{
	$genero=2;
}


$sql2= "SELECT NOMBRE FROM TRIVAGO.TBL_HOTELERO";
$resultado=$conexion->ejecutarInstruccion($sql2);
$u= 2;
while ($nuevoresultado=oci_fetch_array($resultado)!=FALSE) {
	$u= $u + 1;
	//echo $u;
}

//echo $u;


//alert (data);


$sql ="INSERT INTO TBL_HOTELERO (CODIGO_HOTELERO , CODIGO_HOTEL , NOMBRE ,CODIGO_GENERO ,APELLIDO ,CORREO,CONTRASENA) VALUES ('$u','$c','$a', $genero,'$b','$correo','$contra')";//,
	     //$_GET["genero"],
		 //$_POST["nombre"],
		 //$_POST["apelido"]
		 //$_GET["nombre"],	


	 //);

$resultado=$conexion->ejecutarInstruccion($sql);


oci_commit($conexion->retornaConexion());

//$variable["mensaje"]="Error, usuario no encontrado o contraseña incorrecta";
//$resultadonuevo=oci_fetch_array($resultado);

//if ($resultadonuevo[1]==$_GET['correo']) {
	    //$_SESSION["codigo_usuario"]=$resultadonuevo[3];
		//$_SESSION["nombre"]=$resultadonuevo[0];
		//$_SESSION["correo"]=$_POST["correo"];
		//$_SESSION['contrasenia']=$_POST["contra"];
//$variable["exito"]=1;
$variable["mensaje"]="Se debe redireccionar";

//}
echo json_encode($variable);


 ?>