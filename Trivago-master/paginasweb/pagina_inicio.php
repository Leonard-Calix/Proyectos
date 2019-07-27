<?php
 session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  	<title>Pagina Inicio Trivago</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">
	<link rel="shortcut icon" href="../img/logo-trivago.png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- jquery-->
	<script type="text/javascript" src="../libs/jquery.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--bootstrap date picker -->
	<link rel="stylesheet" type="text/css" href="../libs/bootstrap-datepicker/css/bootstrap-datepicker.css">
	<script type="text/javascript" src="../libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<!-- nuevos iconos -->
	<link rel="stylesheet" type="text/css" media="all" href="../css/whhg.css" />
    <link rel="stylesheet" type="text/css" href="../css/proyecto.css">
    <link rel="stylesheet" type="text/css" href="../css/resultados.css">
    <link rel="stylesheet" type="text/css" href="../css/css_menu_principal.css">

  </head>

  <body>
	<!-- barra superior primera -->
   <div class="contenedor_general" style="z-index: 0">	
   	      <?php
			include_once("menu_principal.php");
		 ?>

    <div class="container" style="z-index: 0;">
    	<div class="row">
    		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    			<div class="trivago">
	        	<h1>Encuentra tu hotel ideal<br>al mejor precio</h1>
		        	<div class="search">
	        			<input id="buscar" type="search" name="main-search" class="input-search" placeholder="Ej. Tegucigalpa">
	        			<button><strong>Buscar</strong></button>
	        		</div>
	        </div>
     		</div>
    	</div>

    </div>



</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
   <script type="text/javascript" src="../libs/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
