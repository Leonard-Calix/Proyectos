 <?php  
	function __autoload($conexion) {
		require_once 'conexion.php';
	}
	$connect = new Conexion();
	$result =  $connect->ejecutarConsulta("SELECT * FROM vw_habitaciones_disp ORDER BY idHabitacion ASC");    
 ?> 
 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Habitaciones</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
	
	<!-- Data Tables -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="vendor/jquery/jquery.dataTables.min.js"></script>  
	<script src="vendor/jquery/dataTables.bootstrap4.min.js"></script>     
    <link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css" /> 

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div class="pos-f-t">
		  <div class="collapse" id="navbarToggleExternalContent">
			<div class="bg-dark p-4">
			  <h4 class="text-white">Hotel Quedados</h4>
			  <div class="container-fluid">
				<div class="row">
					<div class="col">
						<a href="index.php" class="text-light">
							Menú Principal
						</a>
					</div>	
					<div class="col">
						<a href="habitaciones.php" class="text-white">
							Habitaciones
						</a>
					</div>					
					<div class="col">
						<a href="reservaciones.php" class="text-white">
							Reservaciones
						</a>
					</div>	
					<div class="col">
						<a href="facturas.php" class="text-white">
							Facturas
						</a>
					</div>
					<div class="col">
						<a href="personas.php" class="text-white">
							Personas
						</a>
					</div>
					<div class="col">
						<a href="empleados.php" class="text-white">
							Empleados
						</a>
					</div>
					<div class="col">
						<a href="clientes.php" class="text-white">
							Clientes
						</a>
					</div>
				</div>
			 </div>
			</div>
		  </div>
		  <nav class="navbar navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		  </nav>
		</div>	
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">   		
				<div class="containter">
					<div class="card">	
						<div class="card-body">	
							
							<h2>Habitaciones</h2> 
							<h5 class="card-title">Habitaciones actuales</h5>
							<!-- Tabla --> 
								<br />  
								<div id="tabla-cliente" class="table-responsive">  
									<table id="employee_data" class="table table-striped table-bordered">  
										<thead>  
											<tr>  
												<td>ID</td>  
												<td>Numero</td>
												<td>Piso</td>  
												<td>Descripción</td> 
												<td>EstadoDescripción</td>  
											</tr>  
										</thead>
										<?php  
											while($row = mysqli_fetch_array($result))  
											{  
												echo '  
													<tr>  
														<td>'.$row["idHabitacion"].'</td> 
														<td>'.$row["Numero"].'</td> 
														<td>'.$row["Piso"].'</td> 
														<td>'.$row["Descripcion"].'</td> 
														<td>'.$row["EstadoDescripcion"].'</td> 
													</tr>  
												';  
											}
										$connect->cerrarConexion();
										?>								  
									</table>  
								</div>
							<br></br>
							<!-- Button trigger modal -->
							<div class="container-fluid" align="center">
							
								<div class="d-flex justify-content-center" align="center">
							
									<div class="col-sm-2">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
											Agregar Habitacion
										</button>
									</div>
										
									<div class="col-sm-2">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
											Editar Habitacion
										</button>
									</div>
										
									<div class="col-sm-2">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
											Eliminar Habitacion
										</button>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- Modal -->
				
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
							<form>
							<!--- input --->
							  <div class="form-group">
								<label for="exampleInputEmail1">Numero Habitacion</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Tipo Habitacion</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
							  </div>
							  <div class="form-check">
							
							  </div>
							 </form>
							<!--- input --->
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
						  </div>
					</div>
				</div>
				<!-- Modal -->
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
	 	 $(document).ready(function(){  
		  $('#employee_data').DataTable();  
	 });  
	</script>

</body>

</html>
