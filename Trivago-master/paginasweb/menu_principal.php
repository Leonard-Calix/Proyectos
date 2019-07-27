
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Replica de Trivago">
    <meta name="author" content="Grupo # x">
    <title>Trivago - Proyecto</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/proyecto.css">
    <link rel="stylesheet" type="text/css" href="../css/resultados.css">
    <link rel="stylesheet" type="text/css" href="../css/css_menu_principal.css">
    
  </head>
  <body>
  	<div id="contenedor_general" style="max-width: 2000px; width: 100%;	box-sizing: border-box;">
  		<div id="barra-horizontal" class="container-fluid navbar ">
			<div class="row" style="width: 100%;" id="fila_menu1">
				<div class="col-md-5"></div>
				<div class=" col-md-1" align="center">
					<a class="navbar-brand" href="pagina_inicio.php">
						<strong>
							<span style="color: #2973B8;">tri</span><span style="color: #E37A1F;">va</span><span style="color: #A3171A ;">go</span>
						</strong>
					</a>
				</div>
				<div class="col-md-4"></div>
				<div id="menu-principal" class="col-md-2 container-fluid">
					<div class="row" style="width: 100%; height: 100%;">
						<!--favoritos-->	
						<div class="dropdown col-md-4 menu"   align="center" >
							<a id="favoritos"  class="btn dropdown-toggle opcion_menu"  data-toggle="dropdown" style="height: 100%;"><span id="corazon" class="glyphicon glyphicon-heart-empty" ></span></a>
							<ul id="favoritos-dropdown-menu" class="dropdown-menu">
								<li><img src="../img/mensaje-favoritos.png"></li>
							</ul>
						</div>
						<!-- Modenda-->	
						<div  class="dropdown col-md-4 menu"   align="center">
							<a   id="moneda" class="btn  dropdown-toggle opcion_menu" data-toggle="dropdown"  style="height: 100%;">USD</a>
							<ul  id="dropdown-menu" class="dropdown-menu" style="min-width: 120px">
								<li><a href="#">USD</a></li>
								<li><a href="#">Lempira</a></li>
							</ul>
						</div>
						<!--perfil-->
						<div class="dropdown col-md-4 menu"  align="center" >
							<?php  if (!isset($_SESSION["codigousuario"])) { ?>
									<a id="cuenta" class="btn  dropdown-toggle opcion_menu" data-toggle="dropdown"  style="height: 100%;">Mi Perfil<span id="caret" 	class="caret"></span></a>
										<ul id="cuenta-dropdown-menu" class="dropdown-menu" style="min-width: 150px;">
											<li><a href="inicio-sesion.php">Iniciar Sesión</a></li>
								    		<li class="divider"></li>
								    		<li><a href="registro-usuarios.php">Registrarse</a></li>
								    	</ul>
							<?php  } else { ?>
							            <a id="cuenta" class="btn  dropdown-toggle opcion_menu" data-toggle="dropdown" style="height: 100%;"><img src="../img/mensaje-favoritos.png">Nombre Usuario</a>
							            <ul id="cuenta-dropdown-menu" class="dropdown-menu" style="min-width: 150px;">
							    			<li><a href="inicio-sesion.php">Ver Perfil</a></li>
								    		<li class="divider"></li>
								    		<li><a href="registro-usuarios.php">Cerrar Sesión</a></li>
								    	</ul>
									<?php } ?>
						</div>
					</div>
				</div>	
			</div>
			<div id="fila_menu2">
				<div id="trivago" class="row" align="center">
					<div class="col-md-5"></div>
					<div class="col-md-2">
						<a id="a_trivago" class="navbar-brand" href="pagina_inicio.php">
							<strong>
								<span style="color: #2973B8;">tri</span><span style="color: #E37A1F;">va</span><span style="color: #A3171A ;">go</span>
							</strong>
						</a>
					</div>
					<div class="col-md-5"></div>
				</div>
				<div id="contenedor_menu_pequenio">
					<span id="menu_pequenio" class="glyphicon glyphicon glyphicon-menu-hamburger btn" ></span>
				</div>
			</div>
		</div>
		<header id="menu-principal2" class="col-md-2 container-fluid" style="background-color: white; position: absolute; z-index: 1;">
			<ul style="padding-left: 0px;">
				<li id="li1" class="ico-">
					<a href="#" id="favoritos2" class="enlaces_menu2 btn dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-heart-empty"></span> Favoritos </a>
					<ul id="favoritos2-dropdown-menu" class="dropdown-menu">
						<li><img src="../img/mensaje-favoritos.png"></li>
					</ul>
				</li>
				<li id="li2" class="ico-">
					<a href="#" id="moneda2" class="enlaces_menu2 btn dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon glyphicon-usd"></span> Moneda </a>
					<ul  id="moneda2-dropdown-menu" class="dropdown-menu" style="min-width: 120px">
						<li><a href="#">USD</a></li>
						<li><a href="#">Lempira</a></li>
					</ul>
				</li>
				<li id="li3" class="ico-">
					<?php if (!isset($_SESSION["codigousuario"])) {  ?>
							<a href="#" id="cuenta2" class="enlaces_menu2 btn dropdown-toggle" data-toggle="dropdown" style="border-bottom: 1px solid #b9acaa;" ><span class="glyphicon glyphicon glyphicon-user"></span> Perfiles </a>
							<ul id="cuenta2-dropdown-menu" class="dropdown-menu" style="min-width: 150px;">
								<li><a href="inicio-sesion.php">Iniciar Sesión</a></li>
								<li class="divider"></li>
								<li><a href="registro-usuarios.php">Registrarse</a></li>
							</ul>
					 <?php } else {?>
							      <a id="cuenta2" class="btn  dropdown-toggle opcion_menu" data-toggle="dropdown" style="height: 100%;"><img src="../img/mensaje-favoritos.png">Nombre Usuario</a>
							      <ul id="cuenta2-dropdown-menu" class="dropdown-menu" style="min-width: 150px;">
									<li><a href="inicio-sesion.php">Ver Perfil</a></li>
									<li class="divider"></li>
									<li><a href="registro-usuarios.php">Cerrar Sesión</a></li>
								</ul>
					 <?php } ?>
				</li>
			</ul>
		</header>	
	</div>
	<script type="text/javascript" src="../libs/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>	
    <script type="text/javascript" src="../js/menu_principal.js"></script>
     <script type="text/javascript">
    	var contador=0;
		$("#buscar").keypress(function(){
			contador++;
			if (contador==4)
			window.location.href = "resultados.php?valor=" + $(this).val();
		});
    </script>	
  </body>
 </html>