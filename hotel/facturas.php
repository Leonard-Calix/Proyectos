  
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
				<div class="containter">
					<h1>Facturas</h1>
					<!-- Primera fila -->
					<div class="containter-fluid">
						<div class="row">
						  <div class="col-md-4">
							<div class="card">
							  <div class="card-body">
								<h5 class="card-title">Facturas del Hotel</h5>
								<p class="card-text">Manejar las facturas del hotel.</p>
								<a href="facturaHotel.php" class="btn btn-primary">Hotel</a>
							  </div>
							</div>
						  </div>
						  <div class="col-sm-4">
							<div class="card">
							  <div class="card-body">
								<h5 class="card-title">Facturas del Restaurante</h5>
								<p class="card-text">Manejar las facturas del restaurante.</p>
								<a href="facturaRestaurante.php" class="btn btn-primary">Restaurante</a>
							  </div>
							</div>
						  </div>
						</div>
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
			
			var c = document.getElementById("select_cliente").value;
			var th = document.getElementById("select_th").value;
			var fi = document.getElementById("fecha_inicio").value;
			var ff = document.getElementById("fecha_fin").value;
			var np = document.getElementById("Num_P").value;
			
			$.ajax({
				url: 'some.php',
				type: "POST",
				data: {'c':c, 'th':th, 'fi':fi, 'ff':ff, 'np':np, 'a':1},
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
