<?php include_once 'header.php'; ?>
<body style="background-color: rgb(236, 240, 245)">
	<br>
	<h4 class="container-fluid">  <i class="far fa-folder"></i> Gestion de Productos</h4>
	<hr style="color:  blue; ">
	
	<div style="background-color: white; padding: 20px;" class="container-fluid">
		<div style="padding: 10px;" class="row ">
			<a class=" btn btn-primary" href="agregarEmpleado.php"><i class="fas fa-plus-circle"></i> Nuevo</a>
		</div>
		<div  class="row" >
			<div class="col-xl-12">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Codigo</th>
							<th scope="col">Nombre</th>
							<th scope="col">Apellido</th>
							<th scope="col">Direccion</th>
							<th scope="col">Telefono</th>
							<th scope="col">Turno</th>
							<th scope="col">Sueldo</th>
							<th scope="col">Cargo</th>
							<th scope="col">Editar</th>
							<th scope="col">Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>La era</td>
							<td>96850749</td>
							<td>matutino</td>
							<td>15000</td>
							<td>Mesero</td>
							<td><a class=" btn btn-success" href="modificarEmpleado.php"> <i class="fas fa-edit"></i> </a></td>
							<td><a class=" btn btn-danger" href="EliminarEmpleado.php"> <i class="fas fa-trash"></i> </a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>



</body >
</html>
