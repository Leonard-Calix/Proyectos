<?php
require('../pdf/fpdf.php');
require '../class/conexionOracle.php';

$id = 42;
class pdf extends FPDF
{

	public function header()
	{
		//$this->SetFillColor(0, 0,0);
		$this->Rect(0,0, 250, 30, 'F');
		$this->SetY(10);
		$this->SetFont('Arial', 'B', 15);
		$this->SetTextColor(255,255,255);
		$this->Write(5, 'HOTEL M & B');

	}
/*
	public function footer()
	{
		$this->SetFillColor(253, 135,39);
		$this->Rect(0, 250, 220, 30, 'F');
		$this->SetY(-20);
		$this->SetFont('Arial', '', 12);
		$this->SetTextColor(255,255,255);
		$this->SetX(120);
		$this->Write(5, 'Hotel M&B');
		$this->Ln();
		$this->SetX(120);
		$this->Write(5, 'HotelM&B@gmail.com');
		$this->SetX(120);
		$this->Ln();
		$this->SetX(120);
		$this->Write(5, '+(503)7889-8787');
	}
	*/
}


$conexion = new Conexion();

$sql = "SELECT * FROM VW_DETALLE_FACTURA_RESERVACION";
$resultado = $conexion->ejecutarConsulta($sql); 

$pdf = new pdf();
$pdf->AddPage('portrait', 'letter');
$pdf->SetMargins(10,30,20,20);
$pdf->SetFont('Arial', '', 14);
$pdf->SetTextColor(255,255,255);

$pdf->SetY(30);
$pdf->SetX(120);
$pdf->Write(5, 'Planillas ');
/*$pdf->Ln();
$pdf->SetX(120);
$pdf->Write(5, 'Fecha de la orden: ');
$pdf->Ln();
$pdf->SetX(120);
$pdf->Write(5, 'Fecha de envío: ');
$pdf->Ln();
$pdf->SetX(120);
$pdf->Write(5, 'Dirección: ');
$pdf->Ln();
$pdf->SetX(120);
$pdf->Write(5, 'Ciudad: ');
*/
$pdf->SetTextColor(0,0,0);
//$pdf->Image('images/2.jpg', 20, 55);
$pdf->SetFont('Arial', '', 9);
$pdf->SetY(35);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(79,78,77);
$pdf->Cell(10, 10, 'NO', 0, 0, 'C', 1);
$pdf->Cell(40, 10, 'NOMBRE', 0, 0, 'C', 1);
$pdf->Cell(40, 10, 'APLELLIDO', 0, 0, 'C', 1);
$pdf->Cell(40, 10, 'CORREO', 0, 0, 'C', 1);
$pdf->Cell(20, 10, 'TURNO', 0, 0, 'C', 1);
$pdf->Cell(40, 10, 'CARGO', 0, 0, 'C', 1);
$pdf->Ln();

$cantidad=1;
$total=0;

$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(255,255,255);
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

$pdf->OutPut();
