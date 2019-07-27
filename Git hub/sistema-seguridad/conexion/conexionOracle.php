<?php
	class Conexion{
		private $hostDB = "localhost/xe";
		private $usuario = "GITHUB";
		private $passDB = "oracle";
		private $link;

		public function __construct(){
			$this->link = oci_connect("GITHUB","oracle","localhost/xe");
		}
	

	public function ejecutarConsulta($sql){
			$query = oci_parse($this->link,$sql);
			oci_execute($query);
            return $query;
		}


		public function obtenerFila($resultado){
			return oci_fetch_assoc($resultado);
		}


		 public function cerrarConexion(){
			oci_close($this->link);
		}


		public function antiInyeccion($texto){
		//[INDENT] return str_replace("'", "\'", $texto); [/INDENT] 

		}

		public function cantidadRegistros($resultado){
			return oci_num_rows($resultado);
			
		}

		public function enviarDatos($sql, $dato, $valor){

			 oci_bind_by_name( oci_parse($this->link,$sql) , $dato, $valor);
			
		}


    }
?>