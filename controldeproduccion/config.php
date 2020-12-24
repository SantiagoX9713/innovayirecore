<?php
$dbhost = 'localhost';
$dbuser = 'santiago';
$dbpassword = 'Santiago1!';
$dbname = 'innovayire';

$conexion = mysqli_connect($dbhost,$dbuser,$dbpassword);
$conexion_db = mysqli_select_db($conexion, $dbname);

?>