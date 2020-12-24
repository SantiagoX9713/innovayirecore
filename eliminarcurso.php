<?php
	include('config.php');
	$id = $_GET['Id'];
	 /*ELIMINAMOS LOS CURSOS QUE TIENE ASIGNADO EL ALUMNO*/
        $sql1 = "delete from rel_alumno_curso where idcurso=".$id;
         mysqli_query($conexion, $sql1);
         
	$sql = "DELETE FROM curso WHERE idcurso=".$id;
        mysqli_query($conexion, $sql);
	header('Location:listacurso.php');

 ?>