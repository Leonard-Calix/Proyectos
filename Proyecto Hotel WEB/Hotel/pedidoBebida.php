<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AppAdmin | Compras</title>
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
          <?php
           //echo "Valor id ".$_GET["id"]; 
          include_once 'class/conexionOracle.php';
          $conexion = new Conexion();


          $id = $_GET["id"];

          $vista = "SELECT * FROM Vista_BEBIDAS WHERE idBebidas = $id";


          $resultado = $conexion->ejecutarConsulta($vista); 

          ?>

          <div class="well">
            <img src="images/vino4.jpg" alt="" width="250px" height="150px">
            <?php while( $bebida = $conexion->obtenerFila($resultado) ){ ?>
              <h4 style="color: red">Detalle Compra</h4>
              <h5>Nombre Bebida: <?php echo $bebida["DESCRIPCION"] ; ?></h5>
              <h5>Precio: Lps. <?php echo $bebida["PRECIO"] ; ?></h5>
              <h5>Tipo Bebida: <?php echo $bebida["descripcion "] ; ?></h5>
            <?php } ?>  
          </div>


        </div>




        <div class="col-md-9">
          <!-- Website Overview -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Detalles Pedido</h3>
            </div>
            <div class="panel-body">
             <div class="row">
              <div class="col-md-6">  

                <div class="form-group">
                  <label>ID Reservacion</label>
                  <input id="reservacion" name="reservacion" type="text" class="form-control" >
                </div>

                <div class="form-group">
                  <label>Cantidad</label>
                  <input id="cantidad" name="cantidad" type="text" class="form-control" >
                </div>

                <button id="btnAgregarPedido" class="btn btn-primary">Agregar A Pedido</button>
                <input type="hidden"  id="id" name="id" value="<?php echo $id ?> ">
                
              </div>
              <div class="col-md-6">  
                <img src="images/<?php echo $id . "png" ?>" alt="Te lipton" width="420px" height="250px">
              </div>
            </div>

          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>
</div>
</section>

<footer id="footer">
  <p>Copyright AppAdmin, &copy; 2018</p>
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