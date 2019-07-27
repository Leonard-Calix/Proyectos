<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabacalera</title>
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

<div class="container">
    <div class="row mt-4 mb-4">
        <button type="button" onclick="limpiar();" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus-circle"></i> Nuevo Registro</button>
    </div>
</div>
<br>
<div class="container">
    <div id="mensaje"></div>
</div>

<div class="container" id="divCigarros">
  <div class="row">
   <div class="col-md-12">
    <table class="table">
       <thead class="thead-dark table-hover">
         <tr>
            <th scope="col">Marca</th>
            <th scope="col">Filtro</th>
            <th scope="col">Color</th>
            <th scope="col">Clase</th>
            <th scope="col">Mentol</th>
            <th scope="col">Precio Costo</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Modificar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody  id="respuesta">


    </tbody>
</table>
</div>

</div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel text-center text-danger">Registro</h5>
        </div>
        <div class="row m-3">
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Marca</label>
        			<input class="form-control" type="text" id="marca">
        		</div>
        		<div class="form-group">
        			<label>Filtro</label>
        			<input class="form-control" type="text" id="filtro">
        		</div>
        		<div class="form-group">
        			<label>Color</label>
        			<input class="form-control" type="text" id="color">
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Clase</label>
        			<input class="form-control" type="text" id="clase">
        		</div>
        		<div class="form-group">
        			<label>Mentol</label>
        			<input class="form-control" type="text" id="mentol">
        		</div>
        		<div class="form-group">
        			<label>Nicotina</label>
        			<input class="form-control" type="text" id="nicotina">
        		</div>
        		
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Alquitar</label>
        			<input class="form-control" type="text" id="alquitran">
        		</div>
        		<div class="form-group">
        			<label>Precio Costo</label>
        			<input class="form-control" type="text" id="precio_costo">
        		</div>
        		<div class="form-group">
        			<label>Precio Venta</label>
        			<input class="form-control" type="text" id="precio_venta">
        		</div>
        		<input type="hidden" id="id">
        	</div>
        </div>
        <div class="modal-footer">
            <button id="btnGuardar" onclick="guardar();" type="button" class="btn btn-primary" data-dismiss="modal"><i class="fas fa-save"></i> Guardar</button>
            <button id="btnActualizar" onclick="actualizar();" type="button" class="btn btn-primary" data-dismiss="modal"><i class="fas fa-save"></i> Actualizar</button>
            <button  type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
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