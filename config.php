<?php
	$dbhost="localhost";
	$dbuser="santiago";
	$dbpass="Santiago1!";
	$dbname="basededatos";
	$conexion=mysqli_connect($dbhost, $dbuser, $dbpass);
	$conecta=mysqli_select_db($conexion, $dbname);
	
?>