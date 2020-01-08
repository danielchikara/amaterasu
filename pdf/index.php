<?php


include 'plantillaproductos.php';
require 'conexion.php';

$query = "SELECT idproducto, idcategoria,codigo,nombre,stock,descripcion,estado FROM producto ";
$resultado = $mysqli->query($query);

$pdf = new PDF ();
$pdf->AliasNbPages();
$pdf->AddPage ();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont ('Arial', 'B', 8);


	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(30,6,'IDPRODUCTO',1,0,'C',1);
	$pdf->Cell(30,6,'IDCATEGORIA',1,0,'C',1);
        $pdf->Cell(30,6,'CODIGO',1,0,'C',1);
	$pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(30,6,'DESCRIPCION',1,0,'C',1);
        
        $pdf->Cell(20,6,'ESTADO',1,1,'C',1);





	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(30,6,utf8_decode($row['idproducto']),1,0,'C');
		$pdf->Cell(30,6,$row['idcategoria'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['codigo']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['descripcion']),1,0,'C');
                
        $pdf->Cell(20,6,utf8_decode($row['estado']),1,1,'C');
	}


$pdf->Output ();


?>