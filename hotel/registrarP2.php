 <?php  
	$cn=mysqli_connect("localhost","root","","hotel")   
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
							<form id="form9" name="form9" method="post" action="per.php">
							<div class="form-group">
									<label for="pnom">Primer Nombre</label>
									<input type="text" class="form-control" name="pnom" id="pnom" placeholder="">								
								</div>
								
								<div class="form-group">
									<label for="snom">Segundo Nombre</label>
									<input type="text" class="form-control" name="snom" id="snom" placeholder="">		
								</div>
								
								<div class="form-group">
									<label for="papell">Primer Apellido</label>
									<input type="text" class="form-control" name="papell" id="papell" placeholder="">		
								</div>
								
								<div class="form-group">
									<label for="sapell">Segundo Apellido</label>
									<input type="text" class="form-control" name="sapell" id="sapell" placeholder="">		
								</div>
								
								<div class="form-group">
									<label for="iden">Identidad</label>
									<input type="text" class="form-control" name="iden" id="iden" placeholder="">		
								</div>
								
								<div class="form-group">
									<label for="dir">Direccion</label>
									<input type="text" class="form-control" name="dir" id="dir" placeholder="">		
								</div>
								
								<div class="form-group">
									<input type="submit" id="agr" name="agr" class="btn btn-primary"  value="Agregar Persona">
									
								</div>
							</form>
					</div>
				</div>
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
