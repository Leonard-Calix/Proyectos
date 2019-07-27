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
	
	<!-- Data Tables -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
            <div class="container-fluid">   		
				<form id="form9" name="form9" method="post" action="per.php">
					<div class="form-group">
						<label for="pnom">Primer Nombre</label>
						<input type="text" class="form-control" name="txtapellido" id="txtapellido" placeholder="">								
					</div>
									
					<div class="form-group">
						<label for="snom">Segundo Nombre</label>
						<input type="text" class="form-control" name="txtnombre" id="txtnombre" placeholder="">		
					</div>
																	
					<div class="form-group">
						<input type="submit" id="agr" name="agr" class="btn btn-primary"  value="Agregar Persona">	
					</div>
				</form>
			</div>
        <!-- /#page-content-wrapper -->

    
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
	</script>

</body>

</html>
