<?php
	class Conexion{
		private $serverName="DESKTOP-73P3FKL\SQLEXPRESS";
		private $Database = "maquinas";
		private $UID = "usuarios2";
		private $PWD = "123";
		private $CharacterSet = "utf-8";
		private $link;
		public function __construct(){
			$this->establecerConexion();
		}
		public function establecerConexion(){
			$this->link = sqlsrv_connect($this->serverName,$this->Database,$this->UID,$this->PWD,$this->CharacterSet);
			
				echo "conexion exitosa";	/*Para caracteres especiales del español*/
			if(!$this->link){
				echo "No se pudo conectar con MySQL";
				exit;
			}
		}
		
	}
?>