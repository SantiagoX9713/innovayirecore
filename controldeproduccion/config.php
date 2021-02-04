<?php
$dbhost     = 'localhost';
$dbuser     = 'santiago';
$password   = 'Santiago1!';
$dbname     = 'innovacore';

$conexion = mysqli_connect($dbhost,$dbuser,$password);
$conexion_db = mysqli_select_db($conexion, $dbname);

?>