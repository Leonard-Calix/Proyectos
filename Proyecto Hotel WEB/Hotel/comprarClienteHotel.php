<!DOCTYPE html>
<html>
<head>
  <title>Compras</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 ">
          <!-- Editar -->
          <br><br><br>
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Guardar Pedido <!--?php echo $_GET["id"]; ?--> </h3> 
            </div>
            <div class="panel-body">
              <form>
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-sm-12 col-12">

                  	<label>Datos Cliente Hotel</label><br>
                    <div class="form-group">
                    <label>Numero Reservacion</label>
                      <input type="text" class="form-control" placeholder="" value="">
                   </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                	<label>Detalle Pedido</label><br>
                	<div class="form-group">
	                    <label>Cantidad Platos</label>
	                    <input type="text" class="form-control" placeholder="" value="">
	                  	</div>
                  	<div class="form-group">
                </div>
              </div>
              <input type="submit" class="btn btn-primary" value="Guardar">
              <input type="submit" class="btn btn-default" value="Cancelar">
            </form>
          </div>
        </div>

      </div>
</body>
</html>