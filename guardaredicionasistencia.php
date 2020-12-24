<?php 
	include('config.php');
	$id         = $_POST['id'];
	$nombre	 	= $_POST['nombre'];
	$apellidos1 = $_POST['apellido'];
	$presente = $_POST['presente'];
	$ausente      = $_POST['ausente'];
	$justificacion = $_POST['justificacion'];
	$tardanza      = $_POST['tardanza'];
	$fecha      = $_POST['fecha'];
	
	$sql = "UPDATE asistencia SET nombre='".$nombre."',apellido='".$apellidos1."',presente='".$presente."',ausente='".$ausente."',justificacion='".$justificacion."',tardanza='".$tardanza."',fecha='".$fecha."' WHERE id_asistencia=".$id;
	mysqli_query($conexion, $sql);
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Actualizada Correctamente.</center>';

?>