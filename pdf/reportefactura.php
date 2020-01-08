<?php


include 'plantillafactura.php';
require 'conexion.php';

$query = "SELECT idfactura, idcliente,fecha,total_venta FROM factura ";
$resultado = $mysqli->query($query);

$pdf = new PDF ();
$pdf->AliasNbPages();
$pdf->AddPage ();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont ('Arial', 'B', 8);


	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(30,6,'IDFACTURA',1,0,'C',1);
	$pdf->Cell(30,6,'IDCLIENTE',1,0,'C',1);
        $pdf->Cell(30,6,'FECHA',1,0,'C',1);
	$pdf->Cell(30,6,'TOTAL DE LA VENTA',1,1,'C',1);
	




	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(30,6,utf8_decode($row['idfactura']),1,0,'C');
		$pdf->Cell(30,6,$row['idcliente'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['fecha']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['total_venta']),1,1,'C');
                
	}


$pdf->Output ();


?>