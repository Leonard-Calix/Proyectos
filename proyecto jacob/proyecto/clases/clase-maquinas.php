<?php

	class Maquina{

		private $idMaquina	;
		private $nombre	;
		private $estado;
		private $cantidadFallo;

		public function __construct($idMaquina	,
					$nombre	,
					$estado,
					$cantidadFallo){
			$this->idMaquina	 = $idMaquina	;
			$this->nombre	 = $nombre	;
			$this->estado = $estado;
			$this->cantidadFallo = $cantidadFallo;
		}
		public function getIdMaquina	(){
			return $this->idMaquina	;
		}
		public function setIdMaquina	($idMaquina	){
			$this->idMaquina	 = $idMaquina	;
		}
		public function getNombre	(){
			return $this->nombre	;
		}
		public function setNombre	($nombre	){
			$this->nombre	 = $nombre	;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getCantidadFallo(){
			return $this->cantidadFallo;
		}
		public function setCantidadFallo($cantidadFallo){
			$this->cantidadFallo = $cantidadFallo;
		}
		public function toString(){
			return "IdMaquina	: " . $this->idMaquina	 . 
				" Nombre	: " . $this->nombre	 . 
				" Estado: " . $this->estado . 
				" CantidadFallo: " . $this->cantidadFallo;
		}

		public static function mostrar(){
				include_once 'conexionPDO.php';

				$sql = "SELECT * FROM maquina";
				
				$resultado = $base_de_datos->prepare($sql);
				$resultado ->execute();

				$tours = array();

				foreach ($resultado as $tour) {
					$tours[] = $tour;
			
				}

				echo json_encode($tours);
		}

		public static function odtenerUno($id){
				include_once 'conexionPDO.php';

				$sql = "SELECT * FROM maquina WHERE idMaquina='$id'";
				
				$resultado = $base_de_datos->prepare($sql);
				$resultado ->execute();

				$tours = array();

				foreach ($resultado as $tour) {
					$tours[] = $tour;
			
				}

				echo json_encode($tours);
		}

		public function add(){

			include_once 'conexion.php';

			$misParametros['nombre'] = $this->nombre;
			$misParametros['estado'] = $this->estado;
			$misParametros['cantidad'] = $this->cantidadFallo;
			$misParametros['pcMensaje'] = 0;


			// Set up the proc params array - be sure to pass the param by reference
			$parametrosProcedimiento = array(
				array(&$misParametros['nombre'], SQLSRV_PARAM_IN),
				array(&$misParametros['estado'], SQLSRV_PARAM_IN),
				array(&$misParametros['cantidad'], SQLSRV_PARAM_IN),
				array(&$misParametros['pcMensaje'], SQLSRV_PARAM_OUT)
			);

			// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments
			// PREPERARA EL PROCEDIMIENTO
			$sql = "EXEC sp_insertarMaquina @nombre = ?, @estado = ?, @cantFallo = ?, @pcMensaje = ?";

			$stmt = sqlsrv_prepare($conn, $sql, $parametrosProcedimiento);

			if( !$stmt ) {
				die( print_r( sqlsrv_errors(), true));
			}

			if(sqlsrv_execute($stmt)){
 			 while($res = sqlsrv_next_result($stmt)){
   			 // make sure all result sets are stepped through, since the output params may not be set until this happens
  			}
  			// Output params are now set,
  			//print_r($params);
  			return json_encode($misParametros);

			}else{

  				die( print_r( sqlsrv_errors(), true));
			}
			
		}

		public function editar(){

			include_once 'conexion.php';

			$misParametros['codigo'] = $this->idMaquina;
			$misParametros['nombre'] = $this->nombre;
			$misParametros['estado'] = $this->estado;
			$misParametros['cantidad'] = $this->cantidadFallo;
			$misParametros['pcMensaje'] = 0;


			// Set up the proc params array - be sure to pass the param by reference
			$parametrosProcedimiento = array(
				array(&$misParametros['codigo'], SQLSRV_PARAM_IN),
				array(&$misParametros['nombre'], SQLSRV_PARAM_IN),
				array(&$misParametros['estado'], SQLSRV_PARAM_IN),
				array(&$misParametros['cantidad'], SQLSRV_PARAM_IN),
				array(&$misParametros['pcMensaje'], SQLSRV_PARAM_OUT)
			);

			// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments
			// PREPERARA EL PROCEDIMIENTO
			$sql = "EXEC sp_editarMaquina @codigo = ?,@nombre = ?, @estado = ?, @cantFallo = ?, @pcMensaje = ?";

			$stmt = sqlsrv_prepare($conn, $sql, $parametrosProcedimiento);

			if( !$stmt ) {
				die( print_r( sqlsrv_errors(), true));
			}

			if(sqlsrv_execute($stmt)){
 			 while($res = sqlsrv_next_result($stmt)){
   			 // make sure all result sets are stepped through, since the output params may not be set until this happens
  			}
  			// Output params are now set,
  			//print_r($params);
  			return json_encode($misParametros);

			}else{

  				die( print_r( sqlsrv_errors(), true));
			}
			
		}

		public function remove($id){

			include_once 'conexion.php';


			$misParametros['idBorrar'] = $id;
			$misParametros['pcMensaje'] = 0;


			// Set up the proc params array - be sure to pass the param by reference
			$parametrosProcedimiento = array(
				array(&$misParametros['idBorrar'], SQLSRV_PARAM_IN),
				array(&$misParametros['pcMensaje'], SQLSRV_PARAM_OUT)
			);

			// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments
			// PREPERARA EL PROCEDIMIENTO
			$sql = "EXEC sp_delete_maquina @idBorrar = ?, @pcMensaje = ?";

			$stmt = sqlsrv_prepare($conn, $sql, $parametrosProcedimiento);

			if( !$stmt ) {
				die( print_r( sqlsrv_errors(), true));
			}

			if(sqlsrv_execute($stmt)){
 			 while($res = sqlsrv_next_result($stmt)){
   			 // make sure all result sets are stepped through, since the output params may not be set until this happens
  			}
  			// Output params are now set,
  			//print_r($params);
  			return json_encode($misParametros);

			}else{

  				die( print_r( sqlsrv_errors(), true));
			}
			
		}
	}
?>