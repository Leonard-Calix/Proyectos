<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel M & B | Bebidas</title>
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
          <li><a href="reservacion.php">Reservaciones</a></li>
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
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Bebidas<small></small></h1>
        </div>
        <div class="col-md-2">
          <div class="dropdown create">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Crear Contenido
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a type="button" data-toggle="modal" data-target="#addPage">Agregar Empleados</a></li>
              <li><a href="#">Agregar Entrada</a></li>
              <li><a href="#">Agregar Empleado</a></li>
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
        <li class="active">Bebidas</li>
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
            <a href="reservacion.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Reservaciones<span class="badge">39</span></a>
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
          <!-- Website Overview -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Bebidas</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <input class="form-control" type="text" placeholder="Filtrar comida...">
                </div>
              </div>
              <br>

              <?php 
              include_once 'class/conexionOracle.php';
              $conexion = new Conexion();

              $vista = "SELECT * FROM Vista_BEBIDAS";
/*
              $sql = "SELECT * FROM empleado emp
                      INNER JOIN persona  p ON p.idpersona=emp.persona
                      INNER JOIN turno t on t.idturno=emp.turno";
                $resultado = $conexion->ejecutarConsulta($sql);     
*/


                $resultado = $conexion->ejecutarConsulta($vista); 
/*
                while( $bebida = $conexion->obtenerFila($resultado) ){
                 echo "<pre>";
                 var_dump($bebida);
                 echo "</pre>";
               }
*/
               ?>


               <table class="table table-striped table-hover">                     
                <tr>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Tipo Bebida</th>
                  <th>Acciones</th>
                </tr>
                <?php while( $bebida = $conexion->obtenerFila($resultado) ){ ?>
                <tr>
                  <td><?php echo $bebida["DESCRIPCION"] ; ?></td>
                  <td><?php echo $bebida["PRECIO"] ; ?></td>
                  <td><?php echo $bebida["descripcion "] ; ?></td>
                  <td>
                    <a class="btn btn-default" href="editarBebida.php?id=<?php echo $bebida["IDBEBIDAS"]  ?>">Editar</a> 
                    <input class="btn btn-danger" type="button" value="eliminar" onclick="eliminarBebi('<?php echo $bebida["IDBEBIDAS"] ?>');"
                  </td>
                </tr>
              <?php } ?>
              </table>
              <a class="btn btn-primary" href="nuevaBebida.php">Nuevo</a>
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
