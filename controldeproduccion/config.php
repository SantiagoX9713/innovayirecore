<?php
$dbhost     = 'localhost';
$dbuser     = 'basededatos';
$password   = 'InnovaYire2021';
$dbname     = 'innovacore';

$conexion = mysqli_connect($dbhost,$dbuser,$password);
$conexion_db = mysqli_select_db($conexion, $dbname);

?>