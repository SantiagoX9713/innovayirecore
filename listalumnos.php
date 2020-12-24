<link href="css/MenuPrincipal.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
<script>
function editar(id){
	window.location="editaralumno.php?Id="+id;
}
function eliminar(id){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="eliminaralumno.php?Id="+id;
	}else{
	
	}
}
</script>
<small><font color="red">* Al eliminar un Alumno, igual se eliminan los cursos la que le pertenece</font></small>
<table width="100%" class='table'>
		<tr>
		<td class="down1">
		<strong><center> LISTA DE ALUMNOS </center></strong>
		</td>
		</tr>
                
		</table>
                
<table id="table" cellspacing="0" width="100%" class='table'>
 <thead>
  <tr class="asc" id="head">
   <th>No. Matricula</th>
   <th>NOMBRE</th>
   <th>APELLIDO </th>
   <th>CORREO</th>
   <th>DIRECCION</th>
   <th>TELEFONO</th>
  </tr>
 </thead>
 <tbody id="tbody" class='table'>
 <?php 
 include('config.php');
 $contador = 0;
 $sql = "SELECT * FROM alumno order by id_alumno";
 $rs  = mysqli_query($conexion, $sql);
 if(mysqli_num_rows($rs) !=0 ){
	while($row=mysqli_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		echo '<tr class="'.$class.'">';
		echo '<td>'.$row['id_alumno'].'</td>';
		echo '<td>'.$row['nombre'].'</td>';
		echo '<td>'.$row['apellido'].'</td>';
		echo '<td>'.$row['correo'].'</td>';
		echo '<td>'.$row['direccion'].'</td>';
		echo '<td>'.$row['telefono'].'</td>';

		
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>
<div class='querys'>
	<form class="action" method="POST"  action="eliminaralumno.php">
		Nombre <input type="text" name="id_alumn">
		<input class="action1"type="submit" value="Borrar">
 	</form>

 	<form class="action" method="POST"  action="editaralumno.php">
		Nombre <input type="text" name="id_alumn">
		<input class="action1"type="submit" value="Editar">
 	</form>
 	<form class="action" method="POST"  action="eliminaralumno.php">
		Nombre <input type="text" name="nombre">
		<input class="action1"type="submit" value="Buscar">
 	</form>
 </div>