<?php
	include('config.php');
	$id = $_POST['id_alumn'];
	
        $sql = "DELETE FROM alumno where id_alumno=".$id;
         mysqli_query($conexion, $sql);
         if(mysqli_query($conexion, $sql)){
		echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';
		}
	else{
		echo "Error en la 8va capa" .$sql . "<br>" .mysqli_error($conexion); 
	}
        $sql1 = "DELETE FROM rel_alumno_curso where id_alumno=".$id;
         mysqli_query($conexion, $sql1);
         if(mysqli_query($conexion, $sql1)){
		echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';
		}
	else{
		echo "Error en la 8va capa" .$sql . "<br>" .mysqli_error($conexion); 
	}
	$sql2 = "DELETE FROM profesor WHERE id_alumno=".$id;
         mysqli_query($conexion, $sql2);
        header('Location:listaalumno.php');
        if(mysqli_query($conexion, $sql2)){
		echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';
		}
	else{
		echo "Error en la 8va capa" .$sql . "<br>" .mysqli_error($conexion); 
	}
 ?>