<?php
  session_start();
  if(!isset($_SESSION['user'])){
    echo '<script>alert("Debe de iniciar secion para acceder a esta pagina");</script>';
    echo '<script>window.location = "index.php"</script>';
  }

  $profile =$_SESSION['user'];
  $urlPag = "DefinicionActividades.php";
  include 'PHP/Conn.php';
  include 'PHP/VerificarPermiso.php';

 ?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/LogIn.css">
  <title>Actividades</title>
</head>
<body>
  <header>

    <img src="img/img.png" align="center" class="claseImg img-responsive" alt="" />
    <!--Barra de navegacion de bootstrap-->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">POA</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class=""><a href="inicio.php">Inicio <span class="sr-only">(current)</span></a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menú <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                  $sql = "SELECT direccionUrl,nombreUrl FROM tblUsuario AS TU,tblUrlXTipoUsuario AS TURU , tblUrl AS TUR
                  WHERE TU.IdTipoUsuario =TURU.idTipoUsuario AND TURU.idUrl = TUR.idUrl AND nickUsuario = ? ";


                  $stmt = sqlsrv_query($conn, $sql, array(&$profile));

                  #Si no se puede hacer la consulta tira errores
                  if( $stmt === false) {
                      die( print_r( sqlsrv_errors(), true) );
                  }

                  #recorre los enlaces y los inserta en la pagina con una etiqueta y usa clases de bootstrap

                  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        echo '<li><a href="'.$row['direccionUrl'].'">'.utf8_encode($row['nombreUrl']).'</a></li>';
                  }
                 ?>

              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Acerca <de class=""></de></a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
      </nav>
      <!--Fin de barra de navegacion de bootstrap-->
  </header>
  <div class="container contenido">

    <div class="row">
        <!--botones para cerrar sesion y volver al menu-->
        <a href="PHP/logout.php" class="pull-right btn btn-danger">Salir</a>

     </div>
     <br>
     <?php
       $sql = "SELECT nombreEjeEstrategico
              FROM tblEjeEstrategico AS TE, tblUsuario AS TU
              WHERE TE.idEjeEstrategico = TU.idEjeEstrategico and nickUsuario = ?";
       $stmt = sqlsrv_query($conn, $sql, array(&$profile));

       if( $stmt === false) {
           die( print_r( sqlsrv_errors(), true) );
       }else{

           $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);

           echo '<h1 class="ejem">Definicion de Actividades</h1>';
           echo '<h6 class="">'.utf8_encode($row['nombreEjeEstrategico']).'</h6>';

       }



      ?>

      <br>
      <br>


    <div class="row ">

      <div class="col-md-5 cent ">
        <p>Categorias años anteriores</p>
        <form>
          <div class="form-group">
            <select id="actividad" class = "form-control">

              <?php
                $sql = "SELECT idActividad,nombreActividad
                        FROM tblActividad as TA ,tblUsuario as TU
                        WHERE TU.idEjeEstrategico = TA.idEjeEstrategico and TU.nickUsuario =? and TA.disponibilidad = 0";

                $stmt = sqlsrv_query($conn, $sql,array(&$profile));

                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                      echo '<option value="'.$row['idActividad'].'">'.utf8_encode($row['nombreActividad']).'</option>';

                }

                sqlsrv_free_stmt( $stmt);

               ?>

            </select>
          </div>




          <button id="agregar" class="btn btn-primary pull-right">Agregar</button>
        </form>

      </div>
      <div id="seleccionadas" class="col-md-6 cent">

        <p id="titulo">
          Actividades Seleccionadas
        </p>


              <?php
                $sql = "SELECT idEjeEstrategico
                        FROM tblUsuario
                        WHERE nickUsuario = ? ";

                $stmt = sqlsrv_query($conn, $sql, array(&$profile));

                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

                $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);

                echo '<input class="oculto form-control" type="text" id="Eje" name="Eje" value="'.utf8_encode($row['idEjeEstrategico']).'" readonly>';
                sqlsrv_free_stmt( $stmt);

                $sql = "SELECT idActividad,nombreActividad
                        FROM tblActividad as TA ,tblUsuario as TU
                        WHERE TU.idEjeEstrategico = TA.idEjeEstrategico and TU.nickUsuario =? and TA.disponibilidad = 1";

                $stmt = sqlsrv_query($conn, $sql,array(&$profile));
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                      echo '<div class="panel panel-default "><div class="panel-body"><p class="nrg">'.utf8_encode($row['nombreActividad']).'</p>
                      <button id="'.$row['idActividad'].'"class="btel btn btn-danger pull-right">Eliminar</button></div></div>';

                }

                sqlsrv_free_stmt( $stmt);

               ?>


               <button type="button" id="terminar"class="btn btn-primary pull-right" name="button">Terminar</button>




      </div>

    </div>
  </div>

  <script src= "../Bootstrap/js/jquery.js"></script>
  <script src= "../Bootstrap/js/bootstrap.min.js"></script>
  <script src="Javascript/DefAct.js"></script>


</body>
</html>
