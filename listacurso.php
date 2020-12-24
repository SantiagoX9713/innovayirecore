<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function editar(id){
	window.location="editarcurso.php?Id="+id;
}
function eliminar(id){
         var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="eliminarcurso.php?Id="+id;
	}else{
	
	}
	
}
</script>
<small><font color="red">* Al eliminar un Curso, igual se eliminan las materias del alumno</font></small>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center> CURSOS Y MATERIAS </center></strong>
		</td>
		</tr>
		</table>
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th></th>
   <th>ID</th>
   <th>CURSO</th>
   <th>MATERIA</th>
   <th>PROFESOR</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('config.php');
 $contador = 0;
 $sql = "SELECT * FROM curso order by idcurso";
 $rs  = mysqli_query($conexion, $sql);
 if(mysqli_num_rows($rs) !=0 ){
	while($row=mysqli_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		echo '<tr class="'.$class.'">';
		echo '<td>';
	    echo '<img src="imagenes/actions-edit.png" onclick="editar('.$row['idcurso'].')"/>  ';
		echo '<img src="imagenes/actions-delete.png" onclick="eliminar('.$row['idcurso'].')"/>';
		echo '</td>';
		echo '<td>'.$contador.'</td>';
		echo '<td>'.$row['curso'].'</td>';
		echo '<td>'.$row['materia'].'</td>';
		echo '<td>'.$row['profesor'].'</td>';
		
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>