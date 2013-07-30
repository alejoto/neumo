<?php
include 'excel_manipulation.php';
include 'excel_data_recolection.php';

$excel = new Export2ExcelClass; 
$Matriz = array();
$Matriz[] = $titles;

$excel->WriteMatriz($Matriz); 
$excel->Download("ArchivoExcel"); 
?>