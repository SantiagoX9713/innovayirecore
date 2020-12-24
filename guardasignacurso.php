<?php
	include('config.php');
	$id_alumno 		= $_POST['id'];
	$idcurso  		= $_POST['curso'];
	$fechainicial 	= $_POST['fechainicial'];
	$fechafinal		= $_POST['fechafinal'];
	
	$sql = "INSERT INTO rel_alumno_curso (idcurso,id_alumno,fecha_inicio,fecha_fin) VALUES ('".$idcurso."','".$id_alumno."','".$fechainicial."','".$fechafinal."')";

	mysqli_query($conexion ,$sql,);
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';

?>