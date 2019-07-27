<?php
require('../pdf/fpdf.php');
require '../class/conexionOracle.php';

class pdf extends FPDF
{
	public function header()
	{
		$this->SetFillColor(253, 135,39);
		$this->Rect(0,0, 220, 50, 'F');
		$this->SetY(25);
		$this->SetFont('Arial', 'B', 30);
		$this->SetTextColor(255,255,255);
		$this->Write(5, 'HOTEL M & B');

	}

	public function footer()
	{
		$this->SetFillColor(253, 135,39);
		$this->Rect(0, 250, 220, 50, 'F');
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
}


$conexion = new Conexion();

$sql = "SELECT * FROM Vista_Empleados ";
$resultado = $conexion->ejecutarConsulta($sql); 

$fpdf = new pdf('P','mm','letter',true);
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetMargins(10,30,20,20);
$fpdf->SetFont('Arial', '', 14);
$fpdf->SetTextColor(255,255,255);

$fpdf->SetY(15);
$fpdf->SetX(120);
$fpdf->Write(5, 'Planillas ');
/*$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Fecha de la orden: ');
$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Fecha de envío: ');
$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Dirección: ');
$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Ciudad: ');
*/
$fpdf->SetTextColor(0,0,0);
//$fpdf->Image('images/2.jpg', 20, 55);
$fpdf->SetFont('Arial', '', 9);
$fpdf->SetY(60);
$fpdf->SetTextColor(255,255,255);
$fpdf->SetFillColor(79,78,77);
$fpdf->Cell(10, 10, 'NO', 0, 0, 'C', 1);
$fpdf->Cell(40, 10, 'NOMBRE', 0, 0, 'C', 1);
$fpdf->Cell(40, 10, 'APLELLIDO', 0, 0, 'C', 1);
$fpdf->Cell(40, 10, 'CORREO', 0, 0, 'C', 1);
$fpdf->Cell(20, 10, 'TURNO', 0, 0, 'C', 1);
$fpdf->Cell(40, 10, 'CARGO', 0, 0, 'C', 1);
$fpdf->Ln();

$cantidad=1;

$fpdf->SetTextColor(0,0,0);
$fpdf->SetFillColor(255,255,255);
while ( $facturas = $conexion->obtenerFila($resultado)  ) {
	$fpdf->Cell(10, 10, $cantidad  , 0, 0, 'C', 1);
	$fpdf->Cell(40, 10, $facturas["PNOMBRE"] . " ". $facturas["SNOMBRE"] , 0, 0, 'C', 1);
	$fpdf->Cell(40, 10, $facturas["PAPPELLIDO"] . " " . $facturas["SAPELLIDO"] , 0, 0, 'C', 1);
	$fpdf->Cell(40, 10, $facturas["CORREO"] , 0, 0, 'C', 1);
	$fpdf->Cell(20, 10, $facturas["DESCRIPCION"] , 0, 0, 'C', 1);
	$fpdf->Cell(40, 10, $facturas["CARGO"] , 0, 0, 'C', 1);
	$fpdf->Ln();
	$cantidad++;
}
$fpdf->OutPut();
