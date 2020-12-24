<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function inscribir(id){
	window.location="asignarcursoprofesor.php?Id="+id;
}

</script>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center> LISTA DE PROFESOR PARA INSCRIBIR A UN CURSO </center></strong>
		</td>
		</tr>
		</table>
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th></th>
   <th>ID</th>
   <th>NOMBRE</th>
   <th>APELLIDO PATERNO</th>
   <th>CORREO</th>
   <th>CURSO INSCRITOS</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('config.php');
 $contador = 0;
 $sql = "SELECT * FROM profesor order by idprofesor";
 $rs  = mysqli_query($conexion, $sql);
 if(mysqli_num_rows($rs) !=0 ){
	while($row=mysqli_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		
		$idcursos = "";
		$sqlx = "SELECT * FROM rel_profesor_curso WHERE idprofesor=".$row['idprofesor'];		
		$rsx  = mysqli_query($conexion, $sqlx);
		if(mysqli_num_rows($rsx)!=0){
			while($rowx = mysqli_fetch_assoc($rsx)){
				$idcursos = $idcursos.$rowx['idcurso'].',';
			}
		}
		
		$cursosasignados = "";
	    #obtenemos cursos que existe.
		$sqlrs = "SELECT * FROM curso WHERE idcurso IN (".$idcursos."0)";
		$rsxs  = mysqli_query($conexion, $sqlrs);
		if(mysqli_num_rows($rsxs)!=0){
			while($rowxs = mysqli_fetch_assoc($rsxs)){
				$cursosasignados = $cursosasignados.$rowxs['nombre'].',';
			}
		}else {
                    $cursosasignados  = "SIN CURSO";
                }
		
		echo '<tr class="'.$class.'">';
		echo '<td>';
	    echo '<img src="imagenes/inscribe.jpg" onclick="inscribir('.$row['idalumno'].')"/>  ';
		echo '</td>';
		echo '<td>'.$contador.'</td>';
		echo '<td>'.$row['nombre'].'</td>';
		echo '<td>'.$row['apellido_paterno'].'</td>';
		echo '<td>'.$row['correo'].'</td>';
		echo '<td>'.$cursosasignados.'</td>';
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>