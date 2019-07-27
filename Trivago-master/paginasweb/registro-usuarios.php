<?php
 session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Registrarse en trivago</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../img/logo-trivago.png">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- jquery-->
  
  <!-- Latest compiled and minified JavaScript -->
  
  <!--bootstrap date picker -->
  <link rel="stylesheet" type="text/css" href="../libs/bootstrap-datepicker/css/bootstrap-datepicker.css">
  
  <!-- nuevos iconos -->
  <link rel="stylesheet" type="text/css" media="all" href="../css/whhg.css" />
  <!-- personales -->
	<link rel="stylesheet" type="text/css" href="../css/estandares.css">
	<!--<link rel="stylesheet" href="../css/estilos.css">-->
  
<style type="text/css">
 
  #clear{
    clear: both;
  }

  body{
    background-color: #EBECED;
  }

  #caja{
          
         
          font-size: 16px;
          border:1px;
          width: 410px;
          height:293px;
          line-height: 20px;
          padding-left: 16px;
          padding-right: 16px;
          background:white;
          border-style:solid;
          border-color:#EBECED;
         
  }
 
  .fuenteform{
    font-size: 14px;
  }
  
  .botonderecha{
    float: right;
  }
  #cuerpo{
    padding-top: 20px;
  }
  #iniciarSesion{
    padding-top: 10px;
  }
  #encabezado{
    text-align: center;
  }
</style>

</head>
<body>
    
   <nav class="navbar"  style="background-color: #ffffff; border-color: #9a9d9f;">
	   
     <div class="container" style="padding: 12px; height: 40px margin-top: 5px" align="center">  
	
     	<a href="Pagina_Inicio.html"> <img src="../img/logoPrincipal.png"> </a>
      <img src="../img/candado.png" align="right"> 

     </div>
     </nav>
  

      
  <div id="encabezado">
    <h3><strong>Crea una cuenta gratis para hacer más con trivago</strong></h3>
    Al crear una cuenta, podrás <strong>guardar y compartir diversas listas de hoteles</strong> con otros viajeros. Incluso podrás <strong>crear alertas de<br>precios</strong> para tus próximos viajes. Sincronizaremos tu cuenta de forma automática en todos tus dispositivos.
  </div> 
  <div id="cuerpo" class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-4">
        <div  id="caja" style="text-align: center;">
                <h3 style="font-size: 20px">Regístrate con una red social</h3>
                <img src="../img/loginface.png" style="margin-top: 5px; margin-bottom: 15px">
                <img src="../img/logingoogle.png" style="margin-bottom: 15px"> 
                <p style="font-size: 14px">No publicaremos nada en tu Facebook o Google+ sin consultarte primero.</p>
                </div> 
      </div>
      <div class="col-md-offset-1 col-md-4">
                <div  id="caja">
                <h3 style="font-size: 20px; text-align: center;">Regístrate con tu e-mail</h3>
               <div class="fuenteform">
                <div class="form-group ">
                  <label for="correo">Correo Electronico:</label>
                  <input type="correo" class="form-control" id="correo">
                </div>
                <div class="form-group">
                  <label for="pwd">Contraseña:</label>
                  <input type="password" class="form-control" id="pwd">
                </div>
                <div id="pie" class="form-group">
                <div class="checkbox">
                  <label><input type="checkbox"> Mostrar contraseña</label>
                </div>
                <button id="btn-registrar" class="btn btn-primary btn-lg botonderecha">Registrarme</button>
               </div>

                </div>
              </div>
      </div>   
    </div>
    <div class="row">
    <div id="iniciarSesion" class="col-md-offset-5" >
      <h5>¿Ya tienes cuenta? <a href="inicio-sesionweb.php">Inicia Sesión</a></h5>
    </div>  
      
    </div>
  </div>  
    <!-- jquery-->
	<script type="text/javascript" src="../libs/jquery.js"></script>
	<!--personales-->
    <script type="text/javascript" src="../js/registroUsuario.js"></script>
    <script type="text/javascript" src="../libs/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="../libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  			   
</body>
</html>