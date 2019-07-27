  
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reservaciones</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
	
	<!-- Data Tables -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="vendor/jquery/jquery.dataTables.min.js"></script>  
	<script src="vendor/jquery/dataTables.bootstrap4.min.js"></script>     
    <link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />

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
							
							<h2>Personas</h2> 
							<h5 class="card-title">Personas registradas</h5>
							<!-- Tabla --> 
								<br />  
								<div id="tabla-cliente" class="table-responsive">  
									<table id="reservacion_data" class="table table-striped table-bordered">  
										<thead>  
											<tr> 
												<td>Primer Nombre</td>
												<td>Segundo Nombre</td>  
												<td>Primer Apellido</td>
												<td>Segundo Apellido</td>  
												<td>Identidad</td>
												<td>Direccion</td>
												<td>Correo</td> 												
											</tr>  
										</thead>
										<?php
											function __autoload($conexion) {
												require 'conexion.php';
											}
											$connect = new Conexion();
											$result =  $connect->ejecutarConsulta("SELECT * FROM vw_personas ORDER BY pNombre ASC");    									
											while($row = mysqli_fetch_array($result))  
											{  
												echo '  
													<tr> 	
														<td>'.$row["pNombre"].'</td> 
														<td>'.$row["sNombre"].'</td> 
														<td>'.$row["pApellido"].'</td> 
														<td>'.$row["sApellido"].'</td> 
														<td>'.$row["Identidad"].'</td>
														<td>'.$row["Direccion"].'</td>
														<td>'.$row["Correo"].'</td> 
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
										<a href="registrarP.php" class="btn btn-primary">Agregar</a>
										</a>
									</div>
										
									<div class="col-sm-2">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_edit_modal">
											Editar Reservación
										</button>
									</div>
										
									<div class="col-sm-2">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#l">
											Eliminar Reservación
										</button>
									</div>								
								</div>		
							</div>
						</div>	
					</div>
				</div>

				<!-- Modal -->
				
				<div class="modal fade" id="add_edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Agregar Reservacion</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
							<form action="php/some.php">
							<!--- input --->
								
							
							  </div>
							 </form>
							<!--- input --->
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button id="boton_guardar" type="submit" class="btn btn-primary" data-dismiss="modal">Guardar</button>
						  </div>
					</div>
				</div>
				<!-- Modal -->
            </div>
			<p id="msg"></p>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
	
    <!-- Menu Toggle Script -->
	
    <script>
	 $(document).ready(function(){  
		$('#reservacion_data').DataTable(); 
		
		$('#boton_guardar').on('click', function(event) {
			event.preventDefault();
			reiniciar();
			
			var pn = document.getElementById("pnom").value;
			var sn = document.getElementById("snom").value;
			var pa = document.getElementById("papell").value;
			var sa = document.getElementById("sapell").value;
			var id = document.getElementById("iden").value;
			var di = document.getElementById("dir").value;
			
			$.ajax({
				url: 'per.php',
				type: "POST",
				data: {'0':pnom, '1':snom, '2':papell, '3':sapell, '4':iden, '5':dir},
				success: function(output) {
					alert(th);
						  },
				  error: function(request, status, error){
					alert("Error: Fallo de conexión");
				  }
			});
		});
	});  
	 
	 function reiniciar(){
		$("#fecha_inicio").val('');
		$("#fecha_fin").val('');
	 }

	</script>

</body>

</html>
