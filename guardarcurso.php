<?php
	include('config.php');
	$curso      = $_POST['curso'];
	$materia    = $_POST['materia'];
	$profesor   = $_POST['profesor'];
	
	$sql = "INSERT INTO curso (curso,materia,profesor) VALUES ('".$curso."','".$materia."','".$profesor."')";
	mysqli_query($conexion, $sql);
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';
 ?>