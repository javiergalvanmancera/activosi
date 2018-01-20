<?php
require 'pdf/fpdf181/fpdf.php';
include("../../funciones/conexiondb.php");


$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetMargins(30,32,30);
// $pdf->SetAutoPageBreak(true,20);  
$pdf->SetFont('Arial','',9);

$conexion = @mysql_connect($servername,$username,$password) or die("No se establecio conexion con el servidor");
$db = @mysql_select_db(activosi,$conexion) or die("Problema de Seleccion Base de Datos");

	$strConsulta = "SELECT * FROM persona WHERE id_personas=(SELECT MAX(id_personas) FROM persona)";
	$persona = mysql_query($strConsulta);
	$fila = mysql_fetch_array($persona);
    date_default_timezone_set('America/Bogota');
    setlocale (LC_TIME, "es_CO");
	


$pdf->Image('../../imagenes/encabezado.jpg', 2 ,0, 206 , 23,'JPG');
	$pdf->Ln(20);
$pdf->Cell(154,3, utf8_decode('En Bucaramanga  a los  '. date("d"). ' dias del mes '.strftime("%B").' de '.date("Y") ),0,0,'L');
	$pdf->Ln(5);

$pdf->MultiCell(154,4, utf8_decode('Con fundamento en lo dispuesto en el Decreto ley 1712 de 2014 y Decreto 1078 de 2015 (Titulo 9:Políticas y Lineamientos    de    Tecnologías    de    la Información), el suscrito '.utf8_decode($fila['nombres_personas']).' '.utf8_decode($fila['apellidos_personas']).', identificado con la C.C. No.'.utf8_decode($fila['doc_persona']).' ACEPTO el presente Compromiso de Confidencialidad y no Divulgación de la Información sustentado en las siguientes CLAUSULAS:

	PRIMERA.- Objeto. El presente Compromiso se refiere a la información que EL MUNICIPIO DE BUCARAMANGA proporcione al suscrito, ya sea de forma oral, gráfica o escrita y, en estos dos últimos casos, ya esté contenida en el "Plan de Desarrollo" o en cualquier otro tipo de documento.

	SEGUNDA.- 1. EL suscrito únicamente utilizará la información facilitada por EL MUNICIPIO DE	BUCARAMANGA para el desarrollo de sus funciones y/o obligaciones adquiridas mediante contrato, comprometiéndose  a mantener la más estricta confidencialidad respecto de dicha información para con EL MUNICIPIO. 

	2. EL suscrito no podrán reproducir, modificar, hacer pública o divulgar a terceros la información objeto del presente Acuerdo sin previa autorización escrita y expresa del MUNICIPIO DE BUCARAMANGA.

	3. De igual forma, el suscrito adoptará respecto de la información objeto de este Compromiso las mismas medidas de seguridad que adoptaría normalmente respecto a la información confidencial de su propiedad, evitando en la medida de lo posible su pérdida, robo o sustracción.

	TERCERA.- Sin perjuicio de lo estipulado en el presente Compromiso, acepto  que la obligación de confidencialidad no se aplicará en los siguientes casos:

	a)	Cuando la información se encontrara en el dominio público en el momento de su suministro al suscrito o, una vez suministrada la información, ésta acceda al dominio público sin infracción de ninguna de las Estipulaciones del presente Acuerdo.

	b)	Cuando la información ya estuviera en el conocimiento del suscrito con anterioridad a la firma del presente Compromiso y sin obligación de guardar confidencialidad.

	c)	Cuando la legislación vigente o un mandato judicial exija su divulgación. En ese caso, el suscrito notificará al MUNICIPIO DE BUCARAMANGA tal eventualidad y hará todo lo posible por garantizar que se dé un tratamiento confidencial a la información.

	d)	En caso de que el suscrito pueda probar que la información fue desarrollada o recibida legítimamente de terceros, de forma totalmente independiente a su relación con EL MUNICIPIO DE BUCARAMANGA.

	CUARTA.- Los derechos de propiedad intelectual de la información objeto de este Compromiso pertenecen al MUNICIPIO DE BUCARAMANGA y el hecho de revelarla al suscrito para el fin mencionado en la Cláusula Primera no cambiará tal situación. 

	QUINTA.- El suscrito se obliga a devolver cualquier documentación, antecedente facilitado en cualquier tipo de soporte y, en su caso, las copias obtenidas de los mismos, que constituyan información amparada por el deber de confidencialidad objeto del presente Compromiso en el supuesto de que cese la relación con el MUNICIPIO DE BUCARAMANGA por cualquier motivo.

	SEXTA.- Con la suscripción del presente documento expreso que conozco íntegramente el INSTRUCTIVO DE USO ACEPTABLE DE ACTIVOS DE INFORMACION y me obligo a su estricto cumplimiento 

	SEPTIMO.-El presente Compromiso iniciará su vigencia en el momento de la firma del mismo, extendiéndose la misma la finalización de la relación laboral o contractual.

	En señal de expresa conformidad y aceptación de los términos recogidos en el presente Compromiso lo suscribo en Bucaramanga a los '. date("d"). ' días del mes de '. date("F"). ' del año '. date("Y").''),0,'J');

$pdf->SetFont('Arial','',9);
     $pdf->SetFillColor(255);     //  <--color de fondo de las celdas
	$pdf->SetXY(20, 258);		 // propiedades al ancho y alto en la pagina	
    $pdf->Cell(70, 3, '           Firma: ________________________________', 0, 0, 'L', 1);	//propiedades de justificacion de texto y borde
	$pdf->SetXY(20, 263);
    $pdf->Cell(70, 3, '           Nombre: ______________________________', 0, 0, 'L', 1);     
    $pdf->SetXY(20, 268);
    $pdf->Cell(70, 3, '           Cedula: _______________________________', 0, 0, 'L', 1);     
    $pdf->SetXY(20, 273);
    $pdf->Cell(70, 3, '           Cargo: ________________________________', 0, 0, 'L', 1);     
	
 
$pdf->Output();
?>