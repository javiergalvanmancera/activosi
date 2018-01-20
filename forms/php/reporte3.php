<?php
require 'pdf/fpdf181/fpdf.php';
include("../../funciones/conexiondb.php");


$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetMargins(30,32,30);
// $pdf->SetAutoPageBreak(true,20);  
$pdf->SetFont('Arial','',14);

$conexion = @mysql_connect($servername,$username,$password) or die("No se establecio conexion con el servidor");
$db = @mysql_select_db(activosi,$conexion) or die("Problema de Seleccion Base de Datos");

	$strConsulta = "SELECT * FROM persona WHERE id_personas=(SELECT MAX(id_personas) FROM persona)";
	$persona = mysql_query($strConsulta);
	$fila = mysql_fetch_array($persona);
    date_default_timezone_set('America/Bogota');
    setlocale (LC_TIME, "es_CO");
	


$pdf->Image('../../imagenes/encabezado.jpg', 2 ,0, 206 , 23,'JPG');
	$pdf->Ln(20);
$pdf->Cell(100,12, utf8_decode('SOLICITUD DE ACCESO A LOS ACTIVOS DE INFORMACION'. date("d"). ' dias del mes '.strftime("%B").' de '.date("Y") ),1,1,'J');
	$pdf->Ln(5);

$pdf->MultiCell(154,4, utf8_decode('Con fundamento'. date("d"). ' días del mes de '. date("F"). ' del año '. date("Y").''),1,'J');

$pdf->SetFont('Arial','',9);
     $pdf->SetFillColor(255);     //  <--color de fondo de las celdas
	$pdf->SetXY(20, 258);		 // propiedades al ancho y alto en la pagina	
    $pdf->Cell(70, 3, '           Firma: ________________________________', 0, 0, 'L', 1);	//propiedades de justificacion de texto y borde
	$pdf->SetXY(20, 263);
    $pdf->Cell(70, 3, '           Nombre: ______________________________', 0, 0, 'L', 1);     
    $pdf->SetXY(20, 268);
    $pdf->Cell(70, 3, '           Cedula: ______________________________', 0, 0, 'L', 1);     
    $pdf->SetXY(20, 273);
    $pdf->Cell(70, 3, '           Cargo: ______________________________', 0, 0, 'L', 1);     
	
 
$pdf->Output();
?>