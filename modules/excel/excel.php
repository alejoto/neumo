<?php
include 'excel_manipulation.php';
include 'excel_data_recolection.php';

$excel = new Export2ExcelClass; 

$result = info_patients();
$excel->WriteMatriz($result); 
$excel->Download("ArchivoExcel"); 
?>