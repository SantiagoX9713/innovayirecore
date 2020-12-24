<?php 
	include('config.php');
	$id         = $_POST['id'];
	$nombre	 	= $_POST['nombre'];
	$apellidos1 = $_POST['apellidos1'];
	$direccion = $_POST['direccion'];
	$email      = $_POST['email'];
	$telefono = $_POST['telefono'];
	
	$sql = "UPDATE alumno SET nombre='".$nombre."',apellido='".$apellidos1."',direccion='".$direccion."',correo='".$email."',telefono='".$telefono."' WHERE id_alumno=".$id;
	mysqli_query($conexion, $sql);
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Actualizada Correctamente.</center>';

?>