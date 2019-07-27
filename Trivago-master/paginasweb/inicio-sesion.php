<!DOCTYPE html>
<html lang="es">

<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Iniciar sesión en trivago</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  <!--personales--> 
  <link rel="stylesheet" type="text/css" href="../css/estandares.css">
	<!-- <link rel="stylesheet" href="../css/estilos.css"> -->
<style type="text/css">
 
  #clear{
    clear: both;
  }

  body{
    background-color: #EBECED;
  }

  #caja{
          
         
          font-size: 16px;
          margin-top:50px;
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
    padding-top: 40px;
  }
  #registrar{
    padding-top: 30px;
  }
</style>

</head>
<body>
    
   <nav class="navbar  navbar-fixed-top"  style="background-color: #ffffff; border-color: #9a9d9f;">
	   
     <div class="container" style="padding: 12px; height: 40px margin-top: 5px" align="center">  
  
      <a href="Pagina_Inicio.html"> <img src="../img/logoPrincipal.png"> </a>
      <img src="../img/candado.png" align="right"> 

     </div>
     </nav>
  

      
  <div id="cuerpo" class="container"> 
    <div class="row">
      <div class="col-md-offset-1 col-md-4">
         <div id="caja" style="text-align: center;">
                <h3 style="font-size: 20px">Inicia sesion con una red social</h3>
                <a href="#"> <img src="../img/loginface.png" style="margin-top: 5px; margin-bottom: 15px"> </a>
                <a href="#"> <img src="../img/logingoogle.png" style="margin-bottom: 15px"> </a>
                <p style="font-size: 14px">No publicaremos nada en tu Facebook o Google+ sin consultarte primero.</p>
                </div> 
      </div>
      <div class="col-md-offset-1 col-md-4 col-md-offset-2">
                <div id="caja">
                <h3 style="font-size: 20px; text-align: center;">Inicia sesion con tu e-mail</h3>
               <div class="fuenteform">
                <div class="form-group">
                  <label for="correo">Correo Electronico:</label>
                  <input type="correo" class="form-control" id="correo">
                </div>
                <div class="form-group">
                  <label for="pwd">Contraseña:</label>

                  <p style="float: right;"><a href="#"> ¿Olvidaste tu contraseña?</a></p>

                  <input type="password" class="form-control" id="pwd">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox"> Mostrar contraseña</label>
                  <label><input type="checkbox"> Recordar mis datos</label>
                </div>
                <button id="iniciar-sesion" class="btn btn-primary btn-lg botonderecha">Iniciar sesion</button>
                </div>
         </div>
      </div>      
      
    </div>
    <div class="row">
    <div id="registrar" class="col-md-offset-5" >
      <h5>¿No registrado? <a href="registro-usuarios.html">Registrate</a></h5>
    </div>  
      
    </div>
  </div>  
  

  <!-- jquery-->
  <script type="text/javascript" src="../libs/jquery.js"></script>
  <!--personales-->
    <script type="text/javascript" src="../js/inicioSesion.js"></script>
</body>
</html>
