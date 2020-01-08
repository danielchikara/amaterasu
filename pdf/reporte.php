<?php


include 'plantilla.php';
require 'conexion.php';

$query = "SELECT nombre_cliente,apellido_cliente,documento,direccion,telefono,correo FROM cliente ";
$resultado = $mysqli->query($query);

$pdf = new PDF ();
$pdf->AliasNbPages();
$pdf->AddPage (); 
$pdf->SetFillColor(232,232,232);
$pdf->SetFont ('Arial', 'B', 8);


  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',8);
  
  $pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
  $pdf->Cell(30,6,'APELLIDO',1,0,'C',1);
  $pdf->Cell(30,6,'DOCUMENTO',1,0,'C',1);
  $pdf->Cell(30,6,'DIRECCION',1,0,'C',1);      
  $pdf->Cell(30,6,'TELEFONO',1,0,'C',1);
  $pdf->Cell(30,6,'CORREO',1,1,'C',1  );
  



  while($row = $resultado->fetch_assoc())
  {
    
    $pdf->Cell(30,6,$row['nombre_cliente'],1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['apellido_cliente']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['documento']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['direccion']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['telefono']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['correo']),1,1,'C');
      }


$pdf->Output ();


?>