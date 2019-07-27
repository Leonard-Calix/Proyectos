<?php 
session_start();
include_once("class_conexion.php");
$conexion = new Conexion();
$
$sql = "SELECT NOMBRE_CIUDAD, FROM TRIVAGO.TBL_CIUDAD";
$resultado=$conexion->ejecutarInstruccion($sql);
$resultadonuevo=oci_fetch_array($resultado);
echo "$resultadonuevo[0]";
	//while ($resultadonuevo=oci_fetch_array($resultado)!=FALSE) {
		//echo "<option value='$resultadonuevo[0]'>'$resultadonuevo[0]'</option>";
	//	echo $resultadonuevo[0];
	//}
?>