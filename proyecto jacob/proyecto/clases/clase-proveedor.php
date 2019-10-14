<?php

class Proveedor{

	private $idProveedor;
	private $nombre	;
	private $tipoProveedor	;
	private $tipoPieza;
	private $estado;

	public function __construct($idProveedor, $nombre ,$tipoProveedor,	
		$tipoPieza,
		$estado){
		$this->idProveedor = $idProveedor;
		$this->nombre	 = $nombre	;
		$this->tipoProveedor = $tipoProveedor;

		$this->tipoPieza = $tipoPieza;
		$this->estado = $estado;
	}
	public function getIdProveedor(){
		return $this->idProveedor;
	}
	public function setIdProveedor($idProveedor){
		$this->idProveedor = $idProveedor;
	}
	public function getNombre	(){
		return $this->nombre	;
	}
	public function setNombre	($nombre	){
		$this->nombre	 = $nombre	;
	}
	public function getTipoPieza(){
		return $this->tipoPieza;
	}
	public function setTipoPieza($tipoPieza){
		$this->tipoPieza = $tipoPieza;
	}
	public function getEstado(){
		return $this->estado;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}
	public function toString(){
		return "IdProveedor: " . $this->idProveedor . 
		" Nombre	: " . $this->nombre	 . 
		" TipoPieza: " . $this->tipoPieza . 
		" Estado: " . $this->estado;
	}

	public static function mostrar(){
		include_once 'conexionPDO.php';

		$sql = "SELECT * FROM Proveedor";

		$resultado = $base_de_datos->prepare($sql);
		$resultado ->execute();

		$tours = array();

		foreach ($resultado as $tour) {
			$tours[] = $tour;
			
		}

		echo json_encode($tours);
	}

	public static function obtenerUno($id){
		include_once 'conexionPDO.php';

		$sql = "SELECT * FROM Proveedor WHERE rtnProveedor='$id'";

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
		$sql = "EXEC sp_delete_proveedor @idBorrar = ?, @pcMensaje = ?";

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

		$misParametros['nombre'] = $this->nombre;
		$misParametros['tipo'] = $this->tipoProveedor;
		$misParametros['tipoPieza'] = $this->tipoPieza;
		$misParametros['estadoPieza'] = $this->estado;
		$misParametros['pcMensaje'] = 0;


			// Set up the proc params array - be sure to pass the param by reference
		$parametrosProcedimiento = array(
			array(&$misParametros['nombre'], SQLSRV_PARAM_IN),
			array(&$misParametros['tipo'], SQLSRV_PARAM_IN),
			array(&$misParametros['tipoPieza'], SQLSRV_PARAM_IN),
			array(&$misParametros['estadoPieza'], SQLSRV_PARAM_IN),
			array(&$misParametros['pcMensaje'], SQLSRV_PARAM_OUT)
		);

			// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments
			// PREPERARA EL PROCEDIMIENTO
		$sql = "EXEC sp_insertarProveedor @nombre = ?, @tipo = ?, @tipoPieza = ?, @estadoPieza = ?, @pcMensaje = ?";

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

		$misParametros['codigo'] = $this->idProveedor;
		$misParametros['nombre'] = $this->nombre;
		$misParametros['tipo'] = $this->tipoProveedor;
		$misParametros['tipoPieza'] = $this->tipoPieza;
		$misParametros['estadoPieza'] = $this->estado;
		$misParametros['pcMensaje'] = 0;


			// Set up the proc params array - be sure to pass the param by reference
		$parametrosProcedimiento = array(
			array(&$misParametros['codigo'], SQLSRV_PARAM_IN),
			array(&$misParametros['nombre'], SQLSRV_PARAM_IN),
			array(&$misParametros['tipo'], SQLSRV_PARAM_IN),
			array(&$misParametros['tipoPieza'], SQLSRV_PARAM_IN),
			array(&$misParametros['estadoPieza'], SQLSRV_PARAM_IN),
			array(&$misParametros['pcMensaje'], SQLSRV_PARAM_OUT)
		);

			// EXEC the procedure, {call stp_Create_Item (@Item_ID = ?, @Item_Name = ?)} seems to fail with various errors in my experiments
			// PREPERARA EL PROCEDIMIENTO
		$sql = "EXEC sp_editarProveedor @codigo = ?, @nombre = ?, @tipo = ?, @tipoPieza = ?, @estadoPieza = ?, @pcMensaje = ?";

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