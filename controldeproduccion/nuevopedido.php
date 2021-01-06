 <?php
	include('config.php');
	$nombre	 	= $_POST['nombre'];
	$apellidos1 = $_POST['apellidos1'];
	$email      = $_POST['email'];
	$direccion	= $_POST['direccion'];
	$telefono	= $_POST['telefono'];
	
	$sql = "INSERT INTO alumno (nombre,apellido,correo,direccion,telefono,foto) VALUES ('".$nombre."','".$apellidos1."','".$email."','".$direccion."','".$telefono."','')";
	if(mysqli_query($conexion, $sql)){
		echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';
		}
	else{
		echo "Error en la 8va capa" .$sql . "<br>" .mysqli_error($conexion); 
	}
	mysqli_close($conexion);
	?>