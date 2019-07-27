<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Probando</title>
	<!--- Estilos De Bootstrap-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!--- Estilos fontawesome -->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<!--- Estilos Css -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<!-- Inicio de Codificacion-->
    <nav style="background-color: #2196f3;" class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php">TABACALERA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a style="color: white;" class="nav-link" href="index.php">Cigarros <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a style="color: white;" class="nav-link" href="consultas.php">Consultas</a>
        </li>
    </ul>
</div>
</nav>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="page">
            <h4 class="text-primary text-xl-center">Consultas con Procedimientos</h4>
        </div>
    </div>
</div>


<div class="container mb-5 mt-5">
    <div class="row">
        <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
            <button onclick="consulta1();" class="btn btn-info m-3" id="consultas1">Consulta 1</button>
            <button onclick="consulta2();" class="btn btn-info m-3" id="consultas2">Consulta 2</button>
            <button onclick="consulta3();" class="btn btn-info m-3" id="consultas3">Consulta 3</button>
            <button onclick="consulta4();" class="btn btn-info m-3" id="consultas4">Consulta 4</button>
            <button onclick="consulta5();" class="btn btn-info m-3" id="consultas5">Consulta 5</button>
            <button onclick="consulta9();" class="btn btn-info m-3" id="consultas9">Consulta 9</button>
        </div>
        <div style="border: 2px solid #2196f3; border-radius: 5px; padding: 10px;" class=" col-lg-6 col-md-6 col-sm-12 col-12" id="consultas">
            <div id="respuestaConsulta">

            </div>
        </div>
    </div>
</div>



<!-- Fin de codificacion-->

<!--- JQuery-->	
<script type="text/javascript" src="js/jquery.js"></script>
<!---bootstrap JQuery-->
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<!--- Contrsolador JS-->	
<script type="text/javascript" src="js/Controlador.js"></script>
</body>
</html>