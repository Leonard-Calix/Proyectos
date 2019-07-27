<?php
 session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resultado de tu Búsqueda</title>
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
	<!--archivos personales -->
	<link rel="stylesheet" type="text/css" href="../css/resultados.css">
</head>

<body >


	<div style="background-color: #ebeced; max-width: 2000px; width: 100%; box-sizing: border-box;" id="contenedor_general">
	<!-- barra superior primera -->
	<?php  
		include_once("menu_principal.php");
	?>
<!-- barra superior segunda -->
<div id="barra-horizontal2" class="container-fluid" style="z-index: 0;">
	<div id="linea1" class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<input type="text" autofocus id="barra-busqueda" class="input-text col-md-10 " value="<?php if(isset($_GET["valor"])) echo $_GET["valor"]; ?>" >
				<button id="buscar" class="btn btn-primary col-md-2">Buscar</button>
			</div>
		</div>
	</div>
	<div id="linea2" class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="envoltura col-md-4">
					<div class="input-group date ja-date">
						<input id="fecha-entrada" type="text" class="form-control" style="z-index: 0;"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
					</div>
				</div>
				<div class=" col-md-4" id="fecha-salida-div">
					<div class="input-group date ja-date">
						<input id="fecha-salida" type="text" class="form-control" style="z-index: 0;"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
					</div>
				</div>
				<div  class="dropdown envoltura" id="numero-personas-div">
					<a   id="numero-personas" class=" col-md-4 btn  dropdown-toggle" data-toggle="dropdown" style="z-index: 0;">Indiviual</a>
					<ul  id="numero-personas-dropdown" class="dropdown-menu" >
						<li><a href="#">Individual</a></li>
						<li class="divider"></li>
						<li><a href="#">Doble</a></li>
						<li class="divider"></li>
						<li><a href="#">Familiar</a></li>
						<li class="divider"></li>
						<li><a href="#">Múltiple</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- Cuerpo de la Pagina-->
<div class="container-fluid">

				
	<div class="row">
		<div class="col-md-1"></div>
		<!-- Barra Izquierda -->
		<div class="col-md-3" id="filtros">
			<div id="barra-izquierda" >
			<div id="cuadro-mapa-externo">
					<div id="cuadro-mapa">
						<p id="btn-mapa">Ver mapa</p>
					</div>
				</div>
				<!-- la en como prefijo de los nombre significa que son los contenedores de los filtros. -->
				<!-- <div id="cuadro-filtro"> -->
					<div id="c-titulo-filtro" class="cuadro-filtro"></div>
					<div id="c-estrellas" class="cuadro-filtro">
						<p>Estrellas</p>
					</div>
					<div id="c-puntuacion" class="cuadro-filtro">
						<p>Puntuaciòn</p>
					</div>
					<div id="c-precio" class="cuadro-filtro">
						<p>Precio</p>						
					</div>
					<div id="c-distancia" class="cuadro-filtro">
						<p>Distancia desde</p>						
					</div>
					<div id="c-mas-buscado" class="cuadro-filtro">
						<p>Lo màs buscado</p>
					</div>
					<div id="c-busacdor-nomnbre" class="cuadro-filtro">
						<p>buscar nombre de hotel</p>
					</div>
					<div id="c-borrar-filtros" class="cuadro-filtro">
						<button>Borrar todos los filtros</button>
					</div>
				<!-- </div> -->
			</div>
		</div>
		<!-- Parte Central -->
		<div class="col-md-7 borde1"  id="parte-central">
			<div class="row">
				<div class="col-md-12" style="padding: 15 15 0 0px; margin: 0px;">
					<div class="col-md-5">
						<p id="nums-resultados" class="margen1"> <strong>921</strong> de 18,000 hoteles</p>
					</div>
					<div class="col-md-5" >
						<!--Este es el select de ordenar informacion-->
						<select id="odernar-por" title="ordenar-por" class="selectpicker flecha menu-desplegable" style="width: 80%; margin-left: 100px;">
							<option value="o-popularidad">Ordenar por popularidad</option>
							<option value="p-valorizacion">Priorizar por valorización</option>
							<option value="p-precio">Priorizar por precio</option>
							<option value="o-puntuacion">Ordenar por puntuación</option>
							<option value="o-precio">Ordenar por precio</option>
						</select>
					</div>
					<div class="col-md-2">
						<div class="dropdown" style="width: 100%;"> 
							<button class="btn btn-default menu-desplegable" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color: white; margin-left: 21px;">
								Compartir
								<strong><span class="glyphicon glyphicon-menu-down" aria-hidden="true"	></span></strong>
							</button>
							<!--Este es el menu despegable de compartir-->
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width: 270px; height: 330px; padding: 0.5em;">
								<li class="sinborde"><h3 class="h3-estilo1 sinborde2" style="">Comparte esta lista</h3></li>    
								<li role="separator" class="divider sinborde"></li>

								<li class="estilo-dropdown-menu" style="background-color: #5c6368;">
									<a href="#" style="color: #fff; font-weight: 700; font-size: 14px; line-height: 11px; vertical-align: center; background-color: #5c6368; ">
										<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="font-size: 15px;"></span> 
										Compartir por email
									</a>
								</li>    								
								<li class="estilo-dropdown-menu" style="background-color: #3b589b; width: 98%">
									<a href="#" style="background-color: #3b589b; color: #fff; font-weight: 700; font-size: 14px; line-height: 11px; vertical-align: center;">
										<font style="font-size: 23px; background-color: #3b589b; ">f</font> 
										Compartir en Facebook
									</a>
								</li>    								
								<li class="estilo-dropdown-menu" style="background-color: #c94334; width: 98%">
									<a href="#" style="color: #fff; font-weight: 700; font-size: 14px; line-height: 11px; vertical-align: center; background-color: #c94334;">
										<font style="font-size: 23px; background-color: #c94334; ">G+</font> 
										Compartir en Google+
									</a>
								</li>    								
								<li class="estilo-dropdown-menu" style="background-color: #20ade5; width: 98%">
									<a href="#" style="color: #fff; font-weight: 700; font-size: 14px; line-height: 11px; vertical-align: center; background-color: #20ade5;">  
										<img src="../img/twitter-logo.gif" style="height: 20px; width: 25px; display: inline-block;" class="img-responsive"> 
										<p style="display: inline-block;">Compartir en Twitter</p>
									</a>
								</li>    								
								<li class="estilo-dropdown-menu" style="width: 98%; font-size: 12px;" >Copie y pegue el enlace para compartir su lista de hoteles con otros<br> <input type="url" readonly="readonly" id="enlace-compartir" class="i-compartir-enlace" value="http://www.diez.hn/">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>


			<div id="contenedor-informacion-hoteles" class="container-fluid">

			    <!--Inicio de la Etiqueta del Hotel-->
				<div class="row">
					<div class="col-md-12 well cont-inf-hot">
						<div class="col-md-3 borde2"><img src="../img/imagen-prueba.jpg" class="img-responsive img"></div>
						<div class="col-md-4 borde2">
							<a href="#" style="text-decoration:none; color: #37454d;" ><h3 class="cont-inf-hot-nombre" id="nombre-hotel" style="margin: 0px; margin-left: 10px;">Nombre  del Hotel ...</h3></a>
							<div id="puntuacion-estrellas" class="estrellas-puntuacion">
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							</div>
							<div id="direccion-hotel" class="borde3">
								<a href="#" style="color: #37454d; text-decoration:none;"><p>esta es la direccion del hotel</p></a>
							</div>
							<div id="opiniones" class="borde31">
								<div class="row borde3" style="width: 105%; height: 100%;">
									<a href="#" style="color: #37454d; text-decoration:none;">
										<div class="col-md-2 rating-div" style="border: 0px;">
											<strong>90</strong>
										</div>
										<div class="col-md-10 rating-div-op">
											<strong>Calificacion</strong>
											(1400 opiniones)
										</div>
									</a>
								</div>
							</div>
							<div id="ofrece-wifi" class="borde3">
								<!--<i class="icon-wifi"></i>-->
								<span class="icon-wifi" id="font-wifi"></span>
								Wi-Fi gratis
							</div>
						</div>
						<div class="col-md-2 borde2 oferta-precio">
							<div class="bloque-no-linea empresas-comodas">
								<a href="#" style="color: #697379;">
									<p class="sinborde centrado" style="font-weight: lighter;">Travelocity </p>
									<p class="centrado" style="font-weight: 800;">$234.009</p> 
								</a>
							</div>
							<div class="bloque-no-linea empresas-comodas">
								<a href="#" style="color: #697379;">
									<p class="sinborde centrado" style="font-weight: lighter;">TripAdvisor </p>
									<p class="centrado" style="font-weight: 800;">$234.009</p> 
								</a>
							</div>
							<div class="bloque-no-linea empresas-comodas">
								<a href="#" style="color: #697379;">
									<p class="sinborde centrado" style="font-weight: lighter;">HotWired </p>
									<p class="centrado" style="font-weight: 800;">$234.009</p> 
								</a>
							</div>
							<div class="bloque-no-linea" id="mas-ofertas">
								<a href="#" style="color: #37454d;  text-decoration:none;"><strong>Más ofertas: 23</strong></a>
							</div>
						</div>
						<div class="col-md-3 borde2" style="margin-top: 38px;">
							<div class="bloque-no-linea empresas-mas-comoda">
								<a href="#" style="color: #697379;">
									<p class="sinborde " style="font-weight: lighter; color:  #37454d; font-size: 12px; margin-left: 8px;">HotWired </p>
									<p class="centrado" style="font-weight: 800; color: #66a400">$234.009</p> 
								</a>
							</div>
							<div class="bloque-no-linea" style="margin-left: 10px; padding-top: 30px;">
								<button href="#" id="ir-oferta" style="color: white;"><strong>
									<div class="bloque-en-linea" style="margin-left: 25px;"> <strong>Ver oferta</strong></div>
									<div class="bloque-en-linea" style="margin-left: 35px;"><span class="glyphicon glyphicon glyphicon-menu-right" aria-hidden="true"></span></div>
								</strong></button>
							</div>
						</div>
					</div>
					<div class="col-md-12" id="div-opciones" style="padding-top: 0px;">
						<div class="separador bloque-no-linea row" style="margin: 0px;"></div>
						<div class="row" style="height: 45px;">
							<div class="col-md-12" style="height: 100%">
								<div id="op-foto" class="col-md-1 opciones-de-hotel btn" style="width: 6%;"><span ><strong>Fotos</strong></span></div>	
								<div id="op-info" class="col-md-1 opciones-de-hotel btn" style="width: 5%;"><span><strong>Info</strong></span></div>
								<div id="op-opinion" class="col-md-1 opciones-de-hotel btn" style="width: 10%;"><span><strong>Opiniones</strong></span></div>
								<div id="op-ofer" class="col-md-1 opciones-de-hotel btn" style="width: 8%;"><span><strong>Ofertas</strong></span></div>
								<div class="col-md-7"></div>
							</div>
						</div>
						<div class="separador bloque-no-linea row" style="margin: 0px;"></div>
						<!--Inicia el div que contiene las opciones-->
						<div id="div-contenedor-opciones">
						    <!--Las opciones-->
						    <div id="opiniones" style="padding-bottom: 10px:">
						    	<div  class="boxes" style="margin-top: 15px; ">
						 			<div style="padding: 10px; height: 40px; width: 100%; border-bottom: 2px solid #cdd0d2;">
										<div><strong>Puntuación General</strong></div>
									</div>
									 <div style="width: 100%, height: 180px; padding: 20px; ">

									</div>
								</div>
								<div  class="boxes" style="margin-top: 15px; ">
						 			<div style="padding: 10px; height: 40px; width: 100%; border-bottom: 2px solid #cdd0d2;">
										<div><strong>Opiniones</strong></div>
									</div>
									 <div style="width: 100%; padding: 20px; height: 100%">
									 	<div class="opinion-class">
									 		<div style="width: 20%; float: left;">
									 			<div class="rating-div"><span><strong >10</strong></span></div>
									 			<div><span  style="margin-bottom: 20px;">Nombre Usuario</span></div>
									 	    </div>
									 		<div style="float: right; width: 78%; text-align: justify;">opinion cualquiera delgcccccccccc ccccccccccccccccccj dvcgdvcgdhvgh</div>
									 	</div>
									 </div>
									 <div style="width: 100%; padding: 20px; height: 100%">
									 	<div class="opinion-class">
									 		<div style="width: 20%; float: left;">
									 			<div class="rating-div"><span><strong >10</strong></span></div>
									 			<div><span style="margin-bottom: 20px;">Nombre Usuario</span></div>
									 	    </div>
									 		<div style="float: right; width: 78%; text-align: justify;">opinion cualquiera delgcccccccccc ccccccccccccccccccj dvcgdvcgdhvgh</div>
									 	</div>
									 </div>
									 <div style="width: 100%; padding: 20px; height: 100%">
									 	<div class="opinion-class">
									 		<div style="width: 20%; float: left;">
									 			<div class="rating-div"><span><strong >10</strong></span></div>
									 			<div><span style="margin-bottom: 20px;">Nombre Usuario</span></div>
									 	    </div>
									 		<div style="float: right; width: 78%; text-align: justify;">opinion cualquiera delgcccccccccc ccccccccccccccccccj dvcgdvcgdhvgh</div>
									 	</div>
									 </div>
								</div>
						    </div>


						    <div id="info">
						    	<div  class="boxes" style="margin-top: 15px; ">
						 			<div style="padding: 10px; height: 40px; width: 100%; border-bottom: 2px solid #cdd0d2;">
										<div class="col-md-2"><strong>Ubicación</strong></div>
										<div class="col-md-10"></div>
									</div>
									 <div style="width: 100%, height: 180px; padding: 20px; ">
										<div id="map" style="height: 180px; width: 100%;"></div>
									</div>
								</div>

								<div  class="boxes" style="margin-top: 15px; ">
						 			<div style="padding: 10px; height: 40px; width: 100%; border-bottom: 2px solid #cdd0d2;">
										<div><strong>Nombre Hotel</strong></div>
									</div>
									 <div style="width: 100%, height: 380px; padding: 20px; ">
										<a href="#" class="btn" style="color: blue;">mostrar todos servicios</a>
									</div>
									<div id="todos-los-servicios" style="width: 100%; padding: 20px;">
										<a href="#" class="btn" style="color: blue;">mostrar menos servicios</a>
									</div>
								</div>
						    </div>


							<div id="oferta" class="oferta-empresas-opcion" style="display: block;">
								<div class="empresa">
										<div class="col-md-12" style="height: 90%;">
											<div class="col-md-2 alto-100">
												<img src="../img/expedia.png" class="img-responsive img-empresa">
											</div>
											<div class="col-md-8 inf-opcion-empresa alto-100">
												<div class="bloque-no-linea"><p class="estilo-plan-empresa">Programa del plan de la empresa</p></div>
												<div class="bloque-no-linea"><p class="estilo-oferta-empresa">Algo que ofrezca gratis</p></div>
											</div>
											<div class="col-md-2 estilo-dinero-empresa">
												<strong class="estilo-strong-dinero-empresa">$dinero <span class="glyphicon glyphicon glyphicon-menu-right estilo-span-strong-dinero-empresa" aria-hidden="true"></span></strong>
											</div>
										</div>
								</div>

								<div class="empresa">
										<div class="col-md-12" style="height: 90%;">
											<div class="col-md-2 alto-100">
												<img src="../img/expedia.png" class="img-responsive img-empresa">
											</div>
											<div class="col-md-8 inf-opcion-empresa alto-100">
												<div class="bloque-no-linea"><p class="estilo-plan-empresa">Programa del plan de la empresa</p></div>
												<div class="bloque-no-linea"><p class="estilo-oferta-empresa">Algo que ofrezca gratis</p></div>
											</div>
											<div class="col-md-2 estilo-dinero-empresa">
												<strong class="estilo-strong-dinero-empresa">$dinero <span class="glyphicon glyphicon glyphicon-menu-right estilo-span-strong-dinero-empresa" aria-hidden="true"></span></strong>
											</div>
										</div>
								</div>

								<div class="empresa">
										<div class="col-md-12" style="height: 90%;">
											<div class="col-md-2 alto-100">
												<img src="../img/expedia.png" class="img-responsive img-empresa">
											</div>
											<div class="col-md-8 inf-opcion-empresa alto-100">
												<div class="bloque-no-linea"><p class="estilo-plan-empresa">Programa del plan de la empresa</p></div>
												<div class="bloque-no-linea"><p class="estilo-oferta-empresa">Algo que ofrezca gratis</p></div>
											</div>
											<div class="col-md-2 estilo-dinero-empresa">
												<strong class="estilo-strong-dinero-empresa">$dinero <span class="glyphicon glyphicon glyphicon-menu-right estilo-span-strong-dinero-empresa" aria-hidden="true"></span></strong>
											</div>
										</div>
								</div>

								<div class="empresa">
										<div class="col-md-12" style="height: 90%;">
											<div class="col-md-2 alto-100">
												<img src="../img/expedia.png" class="img-responsive img-empresa">
											</div>
											<div class="col-md-8 inf-opcion-empresa alto-100">
												<div class="bloque-no-linea"><p class="estilo-plan-empresa">Programa del plan de la empresa</p></div>
												<div class="bloque-no-linea"><p class="estilo-oferta-empresa">Algo que ofrezca gratis</p></div>
											</div>
											<div class="col-md-2 estilo-dinero-empresa">
												<strong class="estilo-strong-dinero-empresa">$dinero <span class="glyphicon glyphicon glyphicon-menu-right estilo-span-strong-dinero-empresa" aria-hidden="true"></span></strong>
											</div>
										</div>
								</div>

							</div>

							<div id="foto" class="fotos-hotel-opcion">
								<div class="carusel-fotos-hotel">
									<div id="carusel-carusel-fotos-hotel" class="carousel slide" data-ride="carousel">
  										<!-- Indicators -->
  										<ol class="carousel-indicators">
    										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    										<li data-target="#myCarousel" data-slide-to="1"></li>
    										<li data-target="#myCarousel" data-slide-to="2"></li>
  										</ol>
  										<!-- Wrapper for slides -->
  										<div class="carousel-inner">
    										<div class="item active">
      											<img src="../img/hotel1.jpg" class="alto-100 ancho-100" alt="comentario">
    										</div>
									    	<div class="item">
      											<img src="../img/hotel2.jpg" class="alto-100 ancho-100" alt="comentario">
    										</div>
    										<div class="item">
      											<img src="../img/hotel3.jpg" class="alto-100 ancho-100" alt="comentario">
    										</div>
  										</div>
  										<!-- Left and right controls -->
  										<a class="left carousel-control" href="#carusel-carusel-fotos-hotel" data-slide="prev">
    										<span class="glyphicon glyphicon-chevron-left"></span>
    										<span class="sr-only">Previous</span>
  										</a>
  										<a class="right carousel-control" href="#carusel-carusel-fotos-hotel" data-slide="next">
    										<span class="glyphicon glyphicon-chevron-right"></span>
    										<span class="sr-only">Next</span>
  										</a>
									</div>
								</div>
							</div>

							<div class="opiniones-opcion">
								<div class="puntuacion-general bloque-no-linea">
									<div class="titulo-opinion-opcion bloque-no-linea"></div>
									<div class="cuerpo-opinion-opcion bloque-no-linea">
										<div class="col-md-12">
											<div class="col-md-4"></div>
											<div class="col-md-8"></div>
										</div>
									</div>
								</div>
								<div class="opiniones-usuarios bloque-no-linea">
									<div class="titulo-opinion-opcion bloque-no-linea"></div>
									<div class="cuerpo-opinion-opcion bloque-no-linea">
										
									</div>
								</div>


							</div>

							<!--Fin de las opciones-->
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-10"></div>
									<div class="col-md-2 div-botoncerrar"><button class="btn-botoncerrar btn btn-default "><strong>cerrar</strong></button></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Fin de la etiquta del hotel-->

			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

</div>

	<!-- Latest compiled and minified JavaScript -->
	<script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAccN3ACvcDBaYBhGXT2zDpS5YXVWSYMfc &callback=initMap">
    </script>
   <script type="text/javascript" src="../libs/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../libs/jquery.js"></script>

<script type="text/javascript" src="../js/resultados.js"></script>

<script type="text/javascript" src="../libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
</body>
</html>