<?php

require 'vendor/autoload.php';
require 'modelo/conexion.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

$sql = " SELECT id, encargado, turno, recepcionista FROM emergencia ";
$resultado = $conexion->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("Tabla Emergencia");

$hojaActiva->getColumnDimension('A')->setWidth(10);
$hojaActiva->setCellValue('A1','ID');
$hojaActiva->getColumnDimension('B')->setWidth(30);
$hojaActiva->setCellValue('B1','ENCARGADO');
$hojaActiva->getColumnDimension('C')->setWidth(30);
$hojaActiva->setCellValue('C1','TURNO');
$hojaActiva->getColumnDimension('D')->setWidth(30);
$hojaActiva->setCellValue('D1','RECEPCIONISTA');

$fila = 2;

while ($rows = $resultado->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['id']);
    $hojaActiva->setCellValue('B'.$fila, $rows['encargado']);
    $hojaActiva->setCellValue('C'.$fila, $rows['turno']);
    $hojaActiva->setCellValue('D'.$fila, $rows['recepcionista']);

    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Tabla Emergencia.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');

exit;

?>