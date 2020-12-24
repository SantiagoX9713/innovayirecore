 <?php
	include('config.php');
	$nombre	 	= $_POST['nombre'];
	$apellidos1 = $_POST['apellidos1'];
	$email      = $_POST['email'];
	$direccion	= $_POST['direccion'];
	$telefono	= $_POST['telefono'];
	
	$sql = "INSERT INTO profesor (nombre,apellido,correo,direccion,telefono) VALUES ('".$nombre."','".$apellidos1."','".$email."','".$direccion."','".$telefono."')";
	mysqli_query($conexion, $sql);
	
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';
	?>