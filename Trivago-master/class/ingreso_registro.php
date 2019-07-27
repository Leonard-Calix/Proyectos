<?php
include_once("class_conexion.php");
$P_CORREO_USUARIO = $_GET['correo'];
$P_CONTRA = $_GET["contra"];
echo "sdfsda";

$conexion = new Conexion();
$conexion->establecerConexion();
$conexion->ejecutarInstruccion($conexion, EXECUTE SP_REGISTRO_USUARIO ($P_CORREO_USUARIO,$P_CONTRA));

?>