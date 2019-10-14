<?php 


$serverName = "DESKTOP-0TRI2MA\SQLEXPRESS";
$connectionInfo = array( "Database"=>"proyecto_BD2", "UID"=>"leonardo", "PWD"=>"1234");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false) {
	die( print_r( sqlsrv_errors(), true));
}






?>