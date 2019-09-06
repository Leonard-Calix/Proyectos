<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menú Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

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

        <!-- Page Content -->
        <div id="page-content-wrapper">
			<div class="containter">
				<h1>Menú Principal</h1>
				
				<!-- Primera fila -->
				<div class="containter-fluid">
					<div class="row">
					  <div class="col-md-4">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Habitaciones</h5>
							<p class="card-text">Manejar las habitaciones actuales.</p>
							<a href="habitaciones.php" class="btn btn-primary">Ir a Habitaciones</a>
						  </div>
						</div>
					  </div>
					  <div class="col-sm-4">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Reservaciones</h5>
							<p class="card-text">Manejar las reservaciones actuales.</p>
							<a href="reservaciones.php" class="btn btn-primary">Ir a Reservaciones</a>
						  </div>
						</div>
					  </div>
					  <div class="col-sm-4">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Personas Registradas</h5>
							<p class="card-text">Manejar las reservaciones actuales.</p>
							<a href="reservaciones.php" class="btn btn-primary">Ir a Personas</a>
						  </div>
						</div>
					  </div>
					</div>
				</div>
				<br></br>
				<!-- Segunda fila -->
				<div class="containter-fluid">
					<div class="row">
					  <div class="col-sm-4">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Facturas</h5>
							<p class="card-text">Gestionar las facturas totales del hotel.</p>
							<a href="facturas.php" class="btn btn-primary">Ir a Facturas</a>
						  </div>
						</div>
					  </div>			  
					  <div class="col-sm-4">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Planillas</h5>
							<p class="card-text">Pagos, bonos y deducciones.</p>
							<a href="Menu-planilla.php" class="btn btn-primary">Ir a Planillas</a>
						  </div>
						</div>
					  </div>
					</div>
				</div>
				<br></br>
			</div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>