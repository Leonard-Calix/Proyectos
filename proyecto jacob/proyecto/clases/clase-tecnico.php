<?php

	class Tecnico{

		private $idTecnico;
		private $nombre	;
		private $idBorrar;
		private $idSuperTecnico;

		public function __construct($idTecnico,
					$nombre	,
					$idBorrar,
					$idSuperTecnico){
			$this->idTecnico = $idTecnico;
			$this->nombre	 = $nombre	;
			$this->idBorrar = $idBorrar;
			$this->idSuperTecnico = $idSuperTecnico;
		}
		public function getIdTecnico(){
			return $this->idTecnico;
		}
		public function setIdTecnico($idTecnico){
			$this->idTecnico = $idTecnico;
		}
		public function getNombre	(){
			return $this->nombre	;
		}
		public function setNombre	($nombre	){
			$this->nombre	 = $nombre	;
		}
		public function getidBorrar(){
			return $this->idBorrar;
		}
		public function setidBorrar($idBorrar){
			$this->idBorrar = $idBorrar;
		}
		public function getIdSuperTecnico(){
			return $this->idSuperTecnico;
		}
		public function setIdSuperTecnico($idSuperTecnico){
			$this->idSuperTecnico = $idSuperTecnico;
		}
		public function toString(){
			return "IdTecnico: " . $this->idTecnico . 
				" Nombre	: " . $this->nombre	 . 
				" idBorrar: " . $this->idBorrar . 
				" IdSuperTecnico: " . $this->idSuperTecnico;
		}

		public static function mostrar(){
				include_once 'conexionPDO.php';

				$sql = "SELECT * FROM Tecnico";
				
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

				$sql = "SELECT * FROM Tecnico WHERE idTecnico='$id'";
				
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
			$misParametros['cantRepa'] = $this->idBorrar;
			$misParametros['pcMensaje'] = 0;


			// Set up the proc params array - be sure to pass the param by reference
			$parametrosProcedimiento = array(
				array(&$misParametros['nombre'], SQLSRV_PARAM_IN),
				array(&$misParametros['cantRepa'], SQLSRV_PARAM_IN),
				array(&$misParametros['pcMensaje'], SQLSRV_PARAM_OUT)
			);

			// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments
			// PREPERARA EL PROCEDIMIENTO
			$sql = "EXEC sp_insertarTecnico @nombre = ?, @cantRepa = ?, @pcMensaje = ?";

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
			$sql = "EXEC sp_delete_tecnico @idBorrar = ?, @pcMensaje = ?";

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

			$misParametros['codigo'] = $this->idTecnico;
			$misParametros['nombre'] = $this->nombre;
			$misParametros['cantRepa'] = $this->idBorrar;
			$misParametros['pcMensaje'] = 0;


			// Set up the proc params array - be sure to pass the param by reference
			$parametrosProcedimiento = array(
				array(&$misParametros['codigo'], SQLSRV_PARAM_IN),
				array(&$misParametros['nombre'], SQLSRV_PARAM_IN),
				array(&$misParametros['cantRepa'], SQLSRV_PARAM_IN),
				array(&$misParametros['pcMensaje'], SQLSRV_PARAM_OUT)
			);

			// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments
			// PREPERARA EL PROCEDIMIENTO
			$sql = "EXEC sp_insertarTecnico @codigo = ?, @nombre = ?, @cantRepa = ?, @pcMensaje = ?";

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