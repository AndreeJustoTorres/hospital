<?php

require 'vendor/autoload.php';
require 'modelo/conexion.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

$sql = " SELECT id, uso, modelo, placa FROM vehiculo ";
$resultado = $conexion->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("Tabla Vehiculo");

$hojaActiva->getColumnDimension('A')->setWidth(10);
$hojaActiva->setCellValue('A1','ID');
$hojaActiva->getColumnDimension('B')->setWidth(30);
$hojaActiva->setCellValue('B1','USO');
$hojaActiva->getColumnDimension('C')->setWidth(30);
$hojaActiva->setCellValue('C1','MODELO');
$hojaActiva->getColumnDimension('D')->setWidth(30);
$hojaActiva->setCellValue('D1','PLACA');

$fila = 2;

while ($rows = $resultado->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['id']);
    $hojaActiva->setCellValue('B'.$fila, $rows['uso']);
    $hojaActiva->setCellValue('C'.$fila, $rows['modelo']);
    $hojaActiva->setCellValue('D'.$fila, $rows['placa']);

    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Tabla Vehiculo.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');

exit;

?>