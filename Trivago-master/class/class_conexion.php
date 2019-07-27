<?php

	class Conexion{

		private $usuario="TRIVAGO";
		private $contrasena="oracle";
		private $host="localhost/XE";
		//private $baseDatos="TRIVAGO";
		//private $puerto="3306";
		private $link;
		private $stid;

		public function __construct(){
			$this->establecerConexion();			
		}

		public function establecerConexion(){
			$this->link = oci_connect($this->usuario, $this->contrasena, $this->host);
			if (!$this->link){
				echo "No se pudo conectar con oracle";
				exit;
			}else{
				//CASI NOS QUEDAMOS POR VOS echo "Ya pasamos";
			}
		}

		public function retornaConexion(){
			return $this->link;	
			
		}

		public function cerrarConexion(){
			oci_close($this->link);
		}

		public function ejecutarInstruccion($sql){
			$stid = oci_parse($this->link,$sql);
			oci_execute($stid);
			return $stid;
			
		}

		public function obtenerFila($resultado){
			return oci_fetch_array($resultado);
		}

		public function cantidadRegistros($resultado){
			return mysqli_num_rows($resultado);
		}

		public function liberarResultado($resultado){
			mysqli_free_result($resultado);
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getHost(){
			return $this->host;
		}
		public function setHost($host){
			$this->host = $host;
		}
		public function getBaseDatos(){
			return $this->baseDatos;
		}
		public function setBaseDatos($baseDatos){
			$this->baseDatos = $baseDatos;
		}
		public function getPuerto(){
			return $this->puerto;
		}
		public function setPuerto($puerto){
			$this->puerto = $puerto;
		}
		public function getLink(){
			return $this->link;
		}
		public function setLink($link){
			$this->link = $link;
		}

	}
?>