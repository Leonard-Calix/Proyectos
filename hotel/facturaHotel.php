 <?php  
	function __autoload($conexion) {
		require_once 'conexion.php';
	}
	$connect = new Conexion();
	$result =  $connect->ejecutarConsulta("SELECT * FROM vw_facturaHotel");    
 ?> 
 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Facturas</title>

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
							
							<h2>Facturas</h2> 
							<h5 class="card-title">Facturas de Hotel</h5>
							<!-- Tabla --> 
								<br />  
								<div id="tabla-cliente" class="table-responsive">  
									<table id="employee_data" class="table table-striped table-bordered">  
										<thead>  
											<tr>  
												<td>ID Factura</td>  
												<td>Fecha</td>  
												<td>Primer Nombre</td> 
												<td>Segundo Apellido</td>
												<td>Forma de Pago</td>
												<td>Moneda</td>
												<td>SubTotal</td>
												<td>Descuento</td>
												<td>Total</td>  
											</tr>  
										</thead>
										<?php  
											while($row = mysqli_fetch_array($result))  
											{  
												echo '  
													<tr>  
														<td>'.$row["idFactura"].'</td> 
														<td>'.$row["Fecha"].'</td> 
														<td>'.$row["pNombre"].'</td> 
														<td>'.$row["sApellido"].'</td> 
														<td>'.$row["idFormaPago"].'</td> 
														<td>'.$row["Descripcion"].'</td> 
														<td>'.$row["SubTotal"].'</td> 
														<td>'.$row["Descuento"].'</td> 
														<td>'.$row["Total"].'</td> 
													</tr>  
												';  
											}
										$connect->cerrarConexion();
										?>								  
									</table>  
								</div>
							<br></br>
							<!-- Button trigger modal -->
							
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
