 <?php
//insertar alumnos
$apellido = $_POST['txtapellido'];
$nombre = $_POST['txtnombre'];


$cn = mysqli_connect("localhost","root","","hotel");
$rs = mysqli_query($cn,"call SP_registroProveedor('$apellido','$nombre')");
mysqli_close($cn);
mysqli_error($cn);
header("location:index.php");
?> 