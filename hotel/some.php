<?php
	$conn = mysqli_connect("localhost","root","","hotel");
	if (mysqli_connect_errno()) {
		echo "Connect failed: " . mysqli_connect_error();
		exit();
	}
			
	$c = $_POST['c'];
	$th= $_POST['th'];
	$fi = $_POST['fi'];
	$ff = $_POST['ff'];
	$np = $_POST['c'];
	$a = $_POST['a'];
	
	
	$conn->query("INSERT INTO var (var1,var2,var3,var4,var5,varc1,varc2) VALUES (0,'$c','$th','$np','$a','2018-05-05','2018-05-08')");
	$conn->query("SELECT fn_sp_gestAgregar()");
	
	
	// if($stm3 = $conn->prepare("call hotel.SP_Reservacion(?,?,?,?,?,?,'A',?"))
		// $r = 0;
		// $c = 1;
		// $th = 1;
		// $fi = "2018-05-05";
		// $ff = "2018-05-07";
		// $np = 4;
		// $act = 'A';
		// $a = 1;
		// $mensaje = '0';
		// $err = int(0);
		
		// $stm3->bind_param("i", $r);
		// $stm3->bind_param("i", $c);
		// $stm3->bind_param("i", $th);
		// $stm3->bind_param("s", $fi);
		// $stm3->bind_param("s", $ff);
		// $stm3->bind_param("i", $np);
		// $stm3->bind_param("s", $act);
		// $stm3->bind_param("i", $a);
		// $stm3->bind_result($result);
		
		// $stm3->execute();
		
		// $stm3->close();
	// }else{
		// echo "error";
	// }
	
	mysqli_close($conn);
 ?>