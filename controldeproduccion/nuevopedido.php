 <?php
	include('config.php');
	$descripcion 	= $_POST['descripcion'];
	$fechaDeEntrega = $_POST['fechaDeEntrega'];
	$estado      	= $_POST['email'];
	
	$sql = "INSERT INTO pedidos (descripcion,fechaDeRecepcion,fechaDeEntrega) VALUES ('".$nombre."','".$apellidos1."','".$email."','".$direccion."','".$telefono."','')";
	if(mysqli_query($conexion, $sql)){
		echo '<center><img src="imagenes/correcto.gif"/>Informacion Almacenada Correctamente.</center>';
		}
	else{
		echo "Error en la 8va capa" .$sql . "<br>" .mysqli_error($conexion); 
	}
	mysqli_close($conexion);
	?>