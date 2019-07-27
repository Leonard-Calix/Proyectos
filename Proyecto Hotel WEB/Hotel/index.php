<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel M & B | Dashboard</title>
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
          <li class="active"><a href="index.php">Panel de control</a></li>
          <li><a href="reservacion.php">Reservaciones</a></li>
          <li><a href="Empleados.php">Empleados</a></li>
          <li><a href="Comidas.php">Comidas</a></li>
          <li><a href="Bebidas.php">Bebidas</a></li>
          <li ><a href="Compra.php">Restaurante</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Bienvenido, Hotel M & B</a></li>
          <li><a href="login.php">Salir</a></li>
          <li><a href="MenuUsuario/MenuUsuarioHotel.html" target="_blank">Ayuda</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <?php 
  include_once 'class/conexionOracle.php';
  $conexion = new Conexion();

  $vista = "SELECT * FROM Vista_RESERVACION
  ORDER BY idreservacion DESC";

  $res = $conexion->ejecutarConsulta($vista); 
  $c = 0;

         /*    
          
          while( $reservacion = $conexion->obtenerFila($clientes) ){
           echo "<pre>";
              var_dump($reservacion);
           echo "</pre>";
          }
*/

          ?>


          <header id="header">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-10">
                  <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de Control <small></small></h1>
                </div>
              </div>
            </div>
          </header>

          <section id="breadcrumb">
            <div class="container-fluid">
              <ol class="breadcrumb">
                <li class="active">Panel de Control</li>
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
                    <a href="Habitacion.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Habitaciones <span class="badge">112</span></a>
                    <a href="Comidas.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Comidas <span class="badge">40</span></a>
                    <a href="Bebidas.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Bebidas <span class="badge">33</span></a>
                    <a href="facturasR.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Factura Res. <span class="badge">45</span></a>
                    <a href="facturasH.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Factura Hot. <span class="badge">35</span></a>
                  </div>

                  <div class="well">
                    <h4>Espacio en disco</h4>
                    <div class="progress">
                      <div class="barra-progreso" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                        40%
                      </div>
                    </div>
                    <h4>Ancho de banda </h4>
                    <div class="progress">
                      <div class="barra-progreso" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                        75%
                      </div>
                    </div>
                  </div>
                  <div class="well">
                    <label>Reportes</label> <br>
                    <div class="form-group" >
                      <a class="btn btn-success"  href="reportes/empleados.php" target="_blank">Planillas</a>  
                      <a class="btn btn-success"  href="reportes/huezpedes.php" target="_blank">Huezpedes</a>  
                    </div>
                    
                    <div class="form-group" >
                      <a class="btn btn-success"  href="reportes/facturasH.php" target="_blank">Facturas</a> 
                      <a class="btn btn-success"  href="reportes/reservacion.php" target="_blank">Reservaciones</a>   
                    </div>
                
                    <div class="form-group" >
                      <a class="btn btn-success"  href="reportes/entradas.php" target="_blank">Entradas</a>  
                      <a class="btn btn-success"  href="reportes/habitaciones.php" target="_blank">Habitaciones</a>  
                    </div>
                  </div>

                </div>
                <div class="col-md-9">
                  <!-- Vista rápida del sitio -->
                  <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                      <h3 class="panel-title">Vista Rápida</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-md-3">
                        <div class="well dash-box">
                          <?php
                          $sql = "SELECT COUNT(*) suma FROM empleado";
                          $resultado = $conexion->ejecutarConsulta($sql);

                          while( $fila= $conexion->obtenerFila($resultado) ){  ?> 
                            <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $fila["SUMA"]  ?> </h2>
                            <h4>Empleados</h4>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="well dash-box">
                         <?php
                         $sql = "SELECT COUNT(*) suma FROM cliente";
                         $resultado = $conexion->ejecutarConsulta($sql);

                         while( $fila = $conexion->obtenerFila($resultado) ){  ?> 
                          <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  <?php echo $fila["SUMA"]; ?> </h2>
                          <h4>Huespedes</h4>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="col-md-3">
                     <?php
                     $sql = "SELECT COUNT(*) suma FROM Vista_RESERVACION";
                     $resultado = $conexion->ejecutarConsulta($sql);

                     while( $fila = $conexion->obtenerFila($resultado) ){  ?> 
                      <div class="well dash-box">
                        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $fila["SUMA"]; ?>  </h2>
                        <h4>Reservaciones</h4>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-md-3">
                   <?php
                   $sql = "SELECT COUNT(*) suma FROM entradas";
                   $resultado = $conexion->ejecutarConsulta($sql);

                   while( $fila = $conexion->obtenerFila($resultado) ){  ?>
                    <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo $fila["SUMA"] ; ?> </h2>
                      <h4>Entradas</h4>
                    <?php } ?>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <?php
                    $sql = "SELECT COUNT(*) suma FROM Habitacion";
                    $resultado = $conexion->ejecutarConsulta($sql);

                    while( $fila = $conexion->obtenerFila($resultado) ){  ?> 
                      <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $fila["SUMA"] ; ?></h2>
                      <h4>Habitaciones</h4>
                    <?php } ?>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 10</h2>
                    <h4>Faturas Hotel.</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 10</h2>
                    <h4>Faturas Res.</h4>
                  </div>
                </div>
              </div>
            </div>


            <!-- últimos usuarios -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Últimas Reservaciones</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Huezped</th>
                    <th>Empleado</th>
                    <th>Estado</th>
                    <th>Fecha Ingreso.</th>
                    <th>Fecha Salida.</th>   
                  </tr>
                  <?php  while( $reservacion = $conexion->obtenerFila($res)){ ?>
                    <?php if ($c<5){ ?>
                      <tr>
                        <td> <?php echo $reservacion["HUEZPED"] ?></td>
                        <td> <?php echo $reservacion["EMPLEADO"]; ?> </td>
                        <td> <?php echo $reservacion["ESTADO"]  ?> </td>
                        <td> <?php echo $reservacion["FECHAINGRESO"]; ?> </td>
                        <td> <?php echo $reservacion["FECHASALIDA"]  ?> </td>
                      </tr>
                      <?php $c++; ?>
                    <?php } ?>
                  <?php } ?>   
                </table>
                <a class="btn-primary btn" href="nuevaReser.php">Nueva Reservacion</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright Hotel M & B, &copy; 2017</p>
    </footer>

    <!-- Modals -->

    <!-- Agregar página -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Agregar Página</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Título de Página</label>
                <input type="text" class="form-control" placeholder="Título de la página">
              </div>
              <div class="form-group">
                <label>Mensaje de Página</label>
                <textarea name="editor1" class="form-control" placeholder="Información de la página"></textarea>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Publicado
                </label>
              </div>
              <div class="form-group">
                <label>Palabras Clave</label>
                <input type="text" class="form-control" placeholder="Agregar algunas palabras...">
              </div>
              <div class="form-group">
                <label>Meta Descripción</label>
                <input type="text" class="form-control" placeholder="Agregar una metadescripción...">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
          </form>
        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
      <script src="js/controlador.js" type="text/javascript"></script> 
    </body>
    </html>
