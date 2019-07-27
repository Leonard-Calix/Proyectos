<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Planilla</title>

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
				<h1>Menú Planilla</h1>
				
				<!-- Primera fila -->
				<div class="containter-fluid">
					<div class="row">
					  <div class="col-md-6">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Planilla</h5>
							<p class="card-text">Informacion de las planillas.</p>
							<a href="#" class="btn btn-primary">Ir a planillas</a>
						  </div>
						</div>
					  </div>
					  <div class="col-sm-6">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Agregar Planilla</h5>
							<p class="card-text">Registrar una nueva planilla</p>
							<a href="#" class="btn btn-primary">Nueva planilla</a>
						  </div>
						</div>
					  </div>
				</div>
				<br></br>
				<!-- Segunda fila -->
				<div class="containter-fluid">
					<div class="row">
					  <div class="col-sm-6">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Bonos</h5>
							<p class="card-text">Registrar nuevo bono.</p>
							<a href="#" class="btn btn-primary">Nuevo Bono</a>
						  </div>
						</div>
					  </div>
					  <div class="col-sm-6">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Nuevo Anticipo</h5>
							<p class="card-text"> Solicitar un anticipo.</p>
							<a href="#" class="btn btn-primary">Nuevo Anticipo</a>
						  </div>
						</div>
					  </div>
					  
					</div>
				</div>
				<br></br>
				<!-- Tercera fila -->
				<div class="containter-fluid">
					<div class="row">
					  <div class="col-sm-6">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Deducciones</h5>
							<p class="card-text">Registrar nueva deduccion.</p>
							<a href="#" class="btn btn-primary">Nueva deduccion</a>
						  </div>
						</div>
					  </div>
					  <div class="col-sm-6">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Bonos, Anticipos, Deducciones</h5>
							<p class="card-text"> Lista de bonos, anticipos y deducciones que no han sido contadas en planilla.</p>
							<a href="#" class="btn btn-primary">Ir a lista</a>
						  </div>
						</div>
					  </div>
					  
					</div>
				</div>
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
