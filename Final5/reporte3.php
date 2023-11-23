<?php

require 'vendor/autoload.php';
require 'modelo/conexion.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

$sql = " SELECT id, cedula, nombre, apellido FROM medico ";
$resultado = $conexion->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("Tabla Medico");

$hojaActiva->getColumnDimension('A')->setWidth(10);
$hojaActiva->setCellValue('A1','ID');
$hojaActiva->getColumnDimension('B')->setWidth(30);
$hojaActiva->setCellValue('B1','CEDULA');
$hojaActiva->getColumnDimension('C')->setWidth(30);
$hojaActiva->setCellValue('C1','NOMBRE');
$hojaActiva->getColumnDimension('D')->setWidth(30);
$hojaActiva->setCellValue('D1','APELLIDO');

$fila = 2;

while ($rows = $resultado->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['id']);
    $hojaActiva->setCellValue('B'.$fila, $rows['cedula']);
    $hojaActiva->setCellValue('C'.$fila, $rows['nombre']);
    $hojaActiva->setCellValue('D'.$fila, $rows['apellido']);
    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Tabla Medico.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');

exit;

?>