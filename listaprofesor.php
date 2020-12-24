<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function editar(id){
	window.location="editarprofesor.php?Id="+id;
}
function eliminar(id){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="eliminarprofesor.php?Id="+id;
	}else{
	
	}
	
}
</script>
<small><font color="red">* Al eliminar un Profesor, igual se eliminan los cursos la que le pertenece</font></small>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center> LISTA DE PROFESORES </center></strong>
		</td>
		</tr>
                
		</table>
                
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th></th>
   <th>No.</th>
   <th>NOMBRE</th>
   <th>APELLIDO PATERNO</th>
   <th>CORREO</th>
   <th>DIRECCION</th>
   <th>TELEFONO</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('config.php');
 $contador = 0;
 $sql = "SELECT * FROM profesor order by id_profesor";
 $rs  = mysqli_query($conexion, $sql);
 if(mysqli_num_rows($rs) !=0 ){
	while($row=mysqli_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		echo '<tr class="'.$class.'">';
		echo '<td>';
	    echo '<img src="imagenes/actions-edit.png" onclick="editar('.$row['id_profesor'].')"/>  ';
		echo '<img src="imagenes/actions-delete.png" onclick="eliminar('.$row['id_profesor'].')"/>';
		echo '</td>';
		echo '<td>'.$contador.'</td>';
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