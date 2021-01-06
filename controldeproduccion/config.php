<?php
$dbhost = 'localhost';
$dbuser = 'basededatos';
$dbpassword = 'InnovaYire2021';
$dbname = 'innovacore';

$conexion = mysqli_connect($dbhost,$dbuser,$dbpassword);
$conexion_db = mysqli_select_db($conexion, $dbname);

?>