<?php

require 'vendor/autoload.php';
require 'modelo/conexion.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

$sql = " SELECT id, nombre FROM especialidad ";
$resultado = $conexion->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("Tabla Especialidad");

$hojaActiva->getColumnDimension('A')->setWidth(10);
$hojaActiva->setCellValue('A1','ID');
$hojaActiva->getColumnDimension('B')->setWidth(30);
$hojaActiva->setCellValue('B1','NOMBRE');

$fila = 2;

while ($rows = $resultado->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['id']);
    $hojaActiva->setCellValue('B'.$fila, $rows['nombre']);

    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Tabla Especialidad.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');

exit;

?>