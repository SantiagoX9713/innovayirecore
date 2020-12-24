<?php
	include('config.php');
	$id = $_GET['Id'];
	
        /*ELIMINAMOS LOS CURSOS QUE TIENE ASIGNADO EL PROFESOR*/
        $sql1 = "delete from rel_asistencia_curso where id_asistencia=".$id;
         mysqli_query($conexion, $sql1);
	$sql = "DELETE FROM asistencia WHERE id_asistencia=".$id;
         mysqli_query($conexion, $sql);
	header('Location:listaasistencia.php');
 ?>