<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel M & B | Entradas</title>
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
          <a style="padding: 40px;" class="navbar-brand" href="#">Hotel M & B</a>
        </div>
        <div style="padding-top: 10px; padding-bottom: 10px;" id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Panel de Control</a></li>
            <li><a href="reservacion.php">Reservacion</a></li>
            <li><a href="Empleados.php">Empleados</a></li>
            <li ><a href="Comidas.php">Comidas</a></li>
            <li><a href="Bebidas.php">Bebidas</a></li>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Editar Habitacion<small></small></h1>
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
          <li class="active">Editar / Habitacion</li>
        </ol>
      </div>
    </section>

    <?php 
        include_once 'class/conexionOracle.php';
        $conexion = new Conexion();

        if (isset($_GET["id"])) {
          $id= $_GET["id"];
        }

        $habitacion = "SELECT h.idhabitacion,  h.numero, h.precio ,h.estado, h.descripcion, th.descripcion TIPO  FROM  HABITACION H
                       INNER JOIN TIPOHABITACION TH ON th.idtipohabitacion=H.TIPOHABITACION 
                       WHERE h.idhabitacion = $id";

        $resultado = $conexion->ejecutarConsulta($habitacion);
/*
        while( $info = $conexion->obtenerFila($resultado) ){
             echo "<pre>";
                var_dump($info);
             echo "</pre>";
        }
*/
     ?> 
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
                <h3 class="panel-title">Editar Habitacion</h3>
              </div>
              <?php while( $info = $conexion->obtenerFila($resultado) ){ ?>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label>No. habitacion</label>
                      <input id="no" name="no" type="text" class="form-control"  value="<?php echo $info["NUMERO"] ?>">
                    </div>
                    <div class="form-group">
                      <label>Descripcion</label>
                      <input id="descripcion" name="descripcion"  type="text" class="form-control"  value="<?php echo $info["DESCRIPCION"] ?>">
                    </div>
                    <div class="form-group">
                      <label>Precio</label>
                      <input id="precio" name="precio" type="text" class="form-control"  value="<?php echo $info["PRECIO"] ?>">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label>Tipo Habitacion</label>
                      <select id="tipo" name="tipo" class="form-control">
                        <option value="1">Sencilla</option>
                        <option value="2">Doble</option>
                        <option value="3">Suites</option>
                        <option value="3">Suites Junior</option>
                      </select>
                    </div>
                  </div>
                </div>
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                <button id="editarHab" class="btn btn-primary">Guardar Cambios</button>
                <a class="btn btn-default" href="habitacion.php">Canselar</a>
              <?php } ?>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright Hotel M & B, &copy; 2017</p>
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
