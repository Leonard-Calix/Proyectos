<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel M & B | Compras</title>
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
          <li ><a href="Bebidas.php">Bebidas</a></li>
          <li class="active"><a href="Compra.php">Restaurante</a></li>
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
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Restaurante<small></small></h1>
        </div>
      </div>
    </div>
  </header>

  <section id="breadcrumb">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li><a href="index.php">Panel de Control</a></li>
        <li class="active">Compras</li>
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
              <a href="compra.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Comprar Plato <span class="badge">45</span></a>
            <a href="comprarBebida.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Comprar Bebidas<span class="badge">112</span></a>
            
          </div>
        </div>
        <div class="col-md-9">
          <!-- Website Overview -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Comprar Bebidas</h3>
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
                    $resultado = $conexion->ejecutarConsulta($vista); 
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
                    <a class="btn btn-default" href="pedidoBebida.php?id=<?php echo $bebida["IDBEBIDAS"]  ?>">Comprar</a> 
                    <a class="btn btn-danger" href="pedidoBebida.php?id=<?php echo $bebida["IDBEBIDAS"]  ?>">Servisio al cuarto</a> 
                   
                  </td>
                </tr>
              <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer">
    <p>Copyright Hotel M & B, &copy; 2018</p>
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
