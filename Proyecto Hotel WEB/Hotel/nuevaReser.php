<!DOCTYPE php>
<php lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AppAdmin | Entradas</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilos.css" rel="stylesheet">
		<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
	</head>
	<body>

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div style="padding-top: 10px; padding-bottom: 10px;" class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a style="padding: 40px;" class="navbar-brand" href="#">AppAdmin</a>
				</div>
				<div style="padding-top: 10px; padding-bottom: 10px;" id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Panel de Control</a></li>
						<li><a href="reservacion.php">Reservacion</a></li>
						<li ><a href="Empleados.php">Empleados</a></li>
						<li ><a href="Comidas.php">Comidas</a></li>
						<li class="active"><a href="Bebidas.php">Bebidas</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Bienvenido, Hotel M & B</a></li>
						<li><a href="login.php">Salir</a></li>
                        <li><a href="MenuUsuario/MenuUsuarioHotel.html" target="_blank">Ayuda</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<header id="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-10">
						<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Editar Bebida<small></small></h1>
					</div>
					<div class="col-md-2">
						<div class="dropdown create">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Crear Contenido
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a type="button" data-toggle="modal" data-target="#addPage">Agregar Página</a></li>
								<li><a href="#">Agregar Entrada</a></li>
								<li><a href="#">Agregar Usuario</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		<section id="breadcrumb">
			<div class="container-fluid">
				<ol class="breadcrumb">
					<li><a href="index.php">Panel de Control</a></li>
					<li class="active">Editar / Bebida</li>
				</ol>
			</div>
		</section>

		<section id="main">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<div class="list-group">
							<a href="index.php" class="list-group-item active color-principal">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de Control
							</a>
							<a href="reservacion.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Reservaciones <span class="badge">39</span></a>
							<a href="entradas.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Entradas <span class="badge">45</span></a>
							<a href="Empleados.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Empleados <span class="badge">112</span></a>
							<a href="huespedes.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> huéspedes <span class="badge">112</span></a>
							<a href="habitacion.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Habitaciones <span class="badge">112</span></a>
							<a href="Comidas.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Comidas <span class="badge">40</span></a>
							<a href="Bebidas.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Bebidas <span class="badge">33</span></a>
						</div>

						<?php 
						include_once 'class/conexionOracle.php';
						$conexion = new Conexion();



						$sql =  "SELECT * FROM Vista_HUESPEDES";

						$sql2 = "SELECT * FROM VISTA_HABITACIONES";

						$sql3 = "SELECT * FROM Vista_Empleados WHERE cargo = 'Recepcion' ";


						$resultado = $conexion->ejecutarConsulta($sql);
						$resultado2 = $conexion->ejecutarConsulta($sql2);
						$resultado3 = $conexion->ejecutarConsulta($sql3);


         /*         
            while ($bebida = $conexion->obtenerFila($resultado3) ) {
              echo "<pre>";
                  var_dump($bebida);
              echo "</pre>";

            } 
         */          
            ?>



            <div class="well">
            	<h4>Espacio en Disco</h4>
            	<div class="progress">
            		<div class="barra-progreso" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
            			40%
            		</div>
            	</div>
            	<h4>Ancho de Banda </h4>
            	<div class="progress">
            		<div class="barra-progreso" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
            			75%
            		</div>
            	</div>
            </div>
        </div>
        <div class="col-md-9">
        	<!-- Editar -->
        	<div class="panel panel-default">
        		<div class="panel-heading main-color-bg">
        			<h3 class="panel-title">Nueva Reservacion </h3> 
        		</div>

        		<div class="panel-body">
        			<div class="row">
        				<div class="col-xl-6 col-md-6 col-sm-12 col-12">
        					
        					<div class="form-group">
        						<label>Fecha Ingreso</label>
        						<input class="form-control" type="date" id="fechaI" name="fechaI">
        					</div>
        					<div class="form-group">
        						<label>Fecha Salida</label>
        						<input class="form-control" type="date" id="fechaS" name="fechaS">
        					</div>
        					<div class="form-group">
        						<label>Cantidad Adultos</label>
        						<input class="form-control" type="text" name="adulto" id="adulto">
        					</div>
        					<div class="form-group">
        						<label>Cantidad Niño</label>
        						<input class="form-control" type="text" name="nino" id="nino">
        					</div>
        				</div>
        				<div class="col-xl-6 col-md-6 col-sm-12 col-12">
        					<div class="form-group">
        						<label>Huesped</label>
        						<select name="huesped" id="huesped" class="form-control">
        							<?php while ($huesped = $conexion->obtenerFila($resultado) ) { ?>
        								<option value="<?php echo $huesped["IDCLIENTE"] ?> "> <?php echo $huesped["PNOMBRE"] . " " . $huesped["PAPPELLIDO"] ?>  </option>
        							<?php } ?>
        						</select>
        					</div>

        					<div class="form-group">
        						<label>No. de Habitacion</label>
        						<select name="numero" id="numero" class="form-control">
        							<?php while ($habitacion = $conexion->obtenerFila($resultado2) ) { ?>
        								<option value="<?php echo $habitacion["IDHABITACION"]?>"><?php echo "Numero " . $habitacion["NUMERO"] ?></option>
        							<?php } ?>
        						</select>
        					</div>

        					<div class="form-group">
        						<label>Estado</label>
        						<input class="form-control" type="text" name="estado" id="estado">
        					</div>

        					<div class="form-group">
        						<label>Empleado</label>
        						<select name="empleado" id="empleado" class="form-control">
        							<?php while ($empleado = $conexion->obtenerFila($resultado3) ) { ?>
        								<option value="<?php echo $empleado["IDEMPLEADO"] ?>"><?php echo $empleado["PNOMBRE"] . " " . $empleado["PAPPELLIDO"]  ?></option>
        							<?php } ?>
        						</select>
        					</div>

        				</div>
        				<button id="guardarRes" class="btn btn-primary">Guardar Cambios</button>
        				<a class="btn btn-default" href="index.php">Cancelar</a>

        			</div>

        		</div>
        	</div>

        </div>



    </div>
</div>
</section>

<footer id="footer">
	<p>Copyright AppAdmin, &copy; 2017</p>
</footer>



    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    	<script src="js/controlador.js" type="text/javascript"></script>
    </body>
    </html>
