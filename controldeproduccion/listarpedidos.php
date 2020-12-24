<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<link href="css/MenuPrincipal.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 

<table width="100%" class='table'>
		<tr>
		<td style="text-align:center; padding:25px 0px;">
		Pedidos
		</td>
		</tr>
                
		</table>
                
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th>No. Pedidos</th>
   <th>Descripcion</th>
   <th>Fecha de Recepcion</th>
   <th>Fecha de Entrega</th>
   <th>Estado</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('config.php');
 $contador = 0;
 $sql = "SELECT * FROM pedidos order by id";
 $rs  = mysqli_query($conexion, $sql);
 if(mysqli_num_rows($rs) !=0 ){
    while($row = mysqli_fetch_assoc($rs)){
        $class = "odd";
        $contador = $contador + 1;
        if($contador%2){$class="even";}
        echo '<tr class="'.$class.'">';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['descripcion'].'</td>';
        echo '<td>'.$row['fechaDeRecepcion'].'</td>';
        echo '<td>'.$row['fechaDeEntrega'].'</td>';
        echo '<td>'.$row['estado'].'</td>';
    }

 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
 </table>
 <form class="action" method="POST"  action="eliminaralumno.php">
	Nombre <input type="text" name="id_alumn">
	<input class="caja1"type="submit" value="Borrar">
 </form>

 <form class="action" method="POST"  action="editaralumno.php">
	Nombre <input type="text" name="id_alumn">
	<input class="caja1"type="submit" value="Editar">
 </form>

 <form class="action" method="POST"  action="eliminaralumno.php">
	Nombre <input type="text" name="nombre">
	<input class="caja1"type="submit" value="Buscar">
 </form>