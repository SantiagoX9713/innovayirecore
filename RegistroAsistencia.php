<?php
	include('config.php');
	$nombre	 		= $_POST['nombre'];
	$apellidos1 	= $_POST['apellido'];
	$presente   	= $_POST['presente'];
	$ausente		= $_POST['ausente'];
    $justificacion	= $_POST['justificacion'];
    $tardanza		= $_POST['tardanza'];
    $fecha			= $_POST['fecha'];
	
	
	$sql = "INSERT INTO asistencia (nombre,apellido,presente,ausente,justificacion,tardanza,fecha) VALUES ('".$nombre."','".$apellidos1."','".$presente."','".$ausente."','".$justificacion."','".$tardanza."','".$fecha."')";
	
	
	if(mysqli_query($conexion, $sql)){
		echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';
		}
	else{
		echo "Error en la 8va capa" .$sql . "<br>" .mysqli_error($conexion); 
	}
	mysqli_close($conexion);?>