<?php

require 'vendor/autoload.php';
require 'modelo/conexion.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

$sql = " SELECT id, capacidad, fallecido FROM morge ";
$resultado = $conexion->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("Tabla Morge");

$hojaActiva->getColumnDimension('A')->setWidth(10);
$hojaActiva->setCellValue('A1','ID');
$hojaActiva->getColumnDimension('B')->setWidth(30);
$hojaActiva->setCellValue('B1','CAPACIDAD');
$hojaActiva->getColumnDimension('C')->setWidth(30);
$hojaActiva->setCellValue('C1','FALLECIDO');

$fila = 2;

while ($rows = $resultado->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['id']);
    $hojaActiva->setCellValue('B'.$fila, $rows['capacidad']);
    $hojaActiva->setCellValue('C'.$fila, $rows['fallecido']);

    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Tabla Morge.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');

exit;

?>