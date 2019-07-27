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
                  	<label>Datos Cliente</label><br>
                  <div class="form-group">
                    <label>Primer Nombre</label>
                    <input type="text" class="form-control" placeholder="" value="">
                  </div>
                  <div class="form-group">
                    <label>Segundo Nombre</label>
                    <input type="text" class="form-control" placeholder="" value="">
                  </div>
                  <div class="form-group">
                    <label>Primer Apellido</label>
                    <input type="text" class="form-control" placeholder="" value="">
                  </div>
                  <div class="form-group">
                    <label>Segundo Apellido</label>
                    <input type="text" class="form-control" placeholder="" value="">
                  </div>
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" class="form-control" placeholder="" value="">
                  </div>
                  <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" placeholder="" value="">
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                	<label>Detalle Pedido</label><br>
                	<div class="form-group">
	                    <label>Cantidad Platos</label>
	                    <input type="text" class="form-control" placeholder="" value="">
	                  	</div>
                  	<div class="form-group">
                    <label>Forma de Pago</label>
	                    <select class="form-control">
	                      <option value="1">Efectivo</option>
	                      <option value="2">Tarjeta Debito</option>
	                      <option value="3">Tarjeta Credito</option>
	                    </select>
                  	</div>
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