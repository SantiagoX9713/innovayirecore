<?php
	include('config.php');
	$id = $_GET['Id'];
	
        /*ELIMINAMOS LOS CURSOS QUE TIENE ASIGNADO EL PROFESOR*/
        $sql1 = "delete from rel_profesor_curso where id_profesor=".$id;
         mysqli_query($conexion, $sql1);
	$sql = "DELETE FROM profesor WHERE id_profesor=".$id;
         mysqli_query($conexion, $sql);
	header('Location:listaprofesor.php');
 ?>