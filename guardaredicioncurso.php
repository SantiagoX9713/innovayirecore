<?php
	
	include('config.php');
	$id				= $_POST['id'];
	$curso  		= $_POST['curso'];
	$materia    = $_POST['materia'];
	$profesor          = $_POST['profesor'];
	
	$sql = "UPDATE curso SET curso='".$curso."',materia='".$materia."',profesor='".$profesor."' WHERE idcurso=".$id;
	mysqli_query($conexion, $sql);
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Actualizada Correctamente.</center>';
 ?>