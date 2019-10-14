<?php

	class Comercio{

		private $rntComercio				;
		private $zona;
		private $tipoComercio;

		public function __construct($rntComercio				,
					$zona,
					$tipoComercio){
			$this->rntComercio				 = $rntComercio				;
			$this->zona = $zona;
			$this->tipoComercio = $tipoComercio;
		}
		public function getRntComercio				(){
			return $this->rntComercio				;
		}
		public function setRntComercio				($rntComercio				){
			$this->rntComercio				 = $rntComercio				;
		}
		public function getZona(){
			return $this->zona;
		}
		public function setZona($zona){
			$this->zona = $zona;
		}
		public function getTipoComercio(){
			return $this->tipoComercio;
		}
		public function setTipoComercio($tipoComercio){
			$this->tipoComercio = $tipoComercio;
		}
		public function toString(){
			return "RntComercio				: " . $this->rntComercio				 . 
				" Zona: " . $this->zona . 
				" TipoComercio: " . $this->tipoComercio;
		}

		public static function mostrar(){
				include_once 'conexionPDO.php';

				$sql = "SELECT * FROM Comercio";
				
				$resultado = $base_de_datos->prepare($sql);
				$resultado ->execute();

				$datos = array();

				foreach ($resultado as $row) {
					$datos[] = $row;
			
				}

				echo json_encode($datos);
		}

			public static function odtenerUno($id){
				include_once 'conexionPDO.php';

				$sql = "SELECT * FROM Comercio WHERE rtnComercio='$id'";
				
				$resultado = $base_de_datos->prepare($sql);
				$resultado ->execute();

				$tours = array();

				foreach ($resultado as $tour) {
					$tours[] = $tour;
			
				}

				echo json_encode($tours);
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
			$sql = "EXEC sp_delete_comercio @idBorrar = ?, @pcMensaje = ?";

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

		public function add(){

			include_once 'conexion.php';

			$misParametros['zona'] = $this->zona;
			$misParametros['tipoComercio'] = $this->tipoComercio;
			$misParametros['pcMensaje'] = 0;


			// Set up the proc params array - be sure to pass the param by reference
			$parametrosProcedimiento = array(
				array(&$misParametros['zona'], SQLSRV_PARAM_IN),
				array(&$misParametros['tipoComercio'], SQLSRV_PARAM_IN),
				array(&$misParametros['pcMensaje'], SQLSRV_PARAM_OUT)
			);

			// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments
			// PREPERARA EL PROCEDIMIENTO
			$sql = "EXEC sp_insertarComercio @zona = ?, @tipoComercio = ?, @pcMensaje = ?";

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

			$misParametros['codigo'] = $this->rntComercio;
			$misParametros['zona'] = $this->zona;
			$misParametros['tipoComercio'] = $this->tipoComercio;
			$misParametros['pcMensaje'] = 0;


			// Set up the proc params array - be sure to pass the param by reference
			$parametrosProcedimiento = array(
				array(&$misParametros['codigo'], SQLSRV_PARAM_IN),
				array(&$misParametros['zona'], SQLSRV_PARAM_IN),
				array(&$misParametros['tipoComercio'], SQLSRV_PARAM_IN),
				array(&$misParametros['pcMensaje'], SQLSRV_PARAM_OUT)
			);

			// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments
			// PREPERARA EL PROCEDIMIENTO
			$sql = "EXEC sp_editarComercio @codigo = ?, @zona = ?, @tipoComercio = ?, @pcMensaje = ?";

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