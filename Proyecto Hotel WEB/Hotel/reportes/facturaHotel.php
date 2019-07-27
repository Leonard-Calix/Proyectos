<?php 

	//require '../pdf/fpdf.php';
	require '../class/conexionOracle.php';
	include '../class/PDF.php';


	//$pdf = new FPDF();

	$conexion = new Conexion();

	$sql = "SELECT * FROM VW_DETALLE_FACTURA_RESERVACION";
	$resultado = $conexion->ejecutarConsulta($sql); 

/*
	while( $facturas = $conexion->obtenerFila($resultado) ){
        echo "<pre>";
            var_dump($facturas);
        echo "</pre>";
    }
*/

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);



    $pdf->Cell(200,10,  '' ,0,1,'C');
	$cantidad=1;
	$total=0;
	$pdf->SetFont('Arial','I','10');
	$pdf->Cell(10,10,  'No.' ,1,0,'L');
	$pdf->Cell(30,10, 'Fecha' ,1,0,'L');
	$pdf->Cell(50,10, 'Descripcion Hab.',1,0,'L');
	$pdf->Cell(25,10, 'Precio Hab.',1,0,'L');
	$pdf->Cell(18,10, 'Estadias',1,0,'L');
	$pdf->Cell(18,10, 'Total H.',1,0,'L');
	$pdf->Cell(18,10, 'Costo P.' ,1,0,'L');
	$pdf->Cell(18,10, 'Total',1,1,'L');
    
    

	while ( $facturas = $conexion->obtenerFila($resultado)  ) {
		$pdf->Cell(10,10, $cantidad ,1,0,'L');
		$pdf->Cell(30,10, $facturas["FECHA"] ,1,0,'L');
		$pdf->Cell(50,10, $facturas["DESCRIPCIONHABITACION"],1,0,'L');
		$pdf->Cell(25,10, $facturas["PRECIOHABITACION"],1,0,'L');
		$pdf->Cell(18,10, $facturas["ESTADIA"],1,0,'L');
		$pdf->Cell(18,10, $facturas["TOTALHABITACION"],1,0,'L');
		$pdf->Cell(18,10, $facturas["COSTOPEDIDO"] ,1,0,'L');
		$pdf->Cell(18,10, $facturas["TOTAL"] ,1,1,'L');
		$cantidad++;
		$total = $total + $facturas["TOTAL"];
	}
	
	$pdf->Cell(30,20,  'Total : ' . $total . ' Lps.',0,0,'C');



	$pdf->outPut();



 ?>



          