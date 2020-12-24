<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function editar(id){
	window.location="editarasistencia.php?Id="+id;
}
function eliminar(id){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="eliminarasistencia.php?Id="+id;
	}else{
	
	}
	
}
</script>
<small><font color="red">* Al eliminar un Asistencia, se eliminan las asistencias la que le pertenece</font></small>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center> LISTA DE ALSISTENCIA </center></strong>
		</td>
		</tr>
                
		</table>
                
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th>No.</th>
   <th>NOMBRE</th>
   <th>APELLIDO</th>
   <th>PRESENTE</th>
   <th>AUSENTE</th>
   <th>JUSTIFICACION</th>
   <th>TARDANZA</th>
   <th>FECHA</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('config.php');
 $contador = 0;
 $sql = "SELECT * FROM asistencia order by id_asistencia";
 $rs  = mysqli_query($conexion, $sql);
 if(mysqli_num_rows($rs) !=0 ){
	while($row=mysqli_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		echo '<tr class="'.$class.'">';
		echo '<td>'.$contador.'</td>';
		echo '<td>'.$row['nombre'].'</td>';
		echo '<td>'.$row['apellido'].'</td>';
		echo '<td>'.$row['presente'].'</td>';
		echo '<td>'.$row['ausente'].'</td>';
		echo '<td>'.$row['justificacion'].'</td>';
		echo '<td>'.$row['tardanza'].'</td>';
		echo '<td>'.$row['fecha'].'</td>';

		
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>