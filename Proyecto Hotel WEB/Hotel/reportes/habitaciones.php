<?php
require('../pdf/fpdf.php');
require '../class/conexionOracle.php';

$id = 42;
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
		$this->ln(30);
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

$sql = "SELECT * FROM Vista_HABITACIONES";
$resultado = $conexion->ejecutarConsulta($sql); 
/*
while ($fila = $conexion->obtenerFila($resultado)) {
	var_dump($fila);
}
*/
$fpdf = new pdf('P','mm','letter',true);
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetMargins(10,30,20,20);
$fpdf->SetFont('Arial', 'I', 9);
$fpdf->SetTextColor(255,255,255);

$fpdf->SetY(15);
$fpdf->SetX(120);
$fpdf->Write(15, 'Habitaciones  Disponibles');
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

$fpdf->SetY(60);
$fpdf->SetTextColor(255,255,255);
$fpdf->SetFillColor(79,78,77);
$fpdf->Cell(35, 10, 'No.', 0, 0, 'C', 1);
$fpdf->Cell(35, 10, 'No. Habitacion', 0, 0, 'C', 1);
$fpdf->Cell(35, 10, 'DESCRIPCION', 0, 0, 'C', 1);
$fpdf->Cell(35, 10, 'PRECIO', 0, 0, 'C', 1);
$fpdf->Cell(35, 10, 'TIPO', 0, 0, 'C', 1);
$fpdf->Ln();

$cantidad=1;

$fpdf->SetTextColor(0,0,0);
$fpdf->SetFillColor(255,255,255);
while ( $reservacion = $conexion->obtenerFila($resultado)  ) {
	$fpdf->Cell(35, 10, $cantidad , 0, 0, 'C', 1);
	$fpdf->Cell(35, 10, $reservacion["NUMERO"]  , 0, 0, 'C', 1);
	$fpdf->Cell(35, 10, $reservacion["DESCRIPCION"]  , 0, 0, 'C', 1);
	$fpdf->Cell(35, 10, $reservacion["PRECIO"] , 0, 0, 'C', 1);
	$fpdf->Cell(35, 10, $reservacion["TIPO"] , 0, 0, 'C', 1);
	$fpdf->Ln();
	$cantidad++;
}

$fpdf->OutPut();

