<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script src="js/validacion_campo_vacio.js" type="text/javascript"></script>
<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="calendario/tcal.css" />
<script type="text/javascript" src="calendario/tcal.js"></script>
<?php
	
	include('config.php');
	$a 		= $_GET['Id'];
	
	$idexis = "";
	
	
	
	#obtenemos que materia ya fue asignado para no mostrarlo en el combo
	$idexiste = "SELECT id_alumno FROM rel_alumno_curso WHERE id_alumno=".$a;
	$rsexiste = mysqli_query($conexion, $idexiste);
	if(mysqli_num_rows($rsexiste)!=0){
		while($rowxx = mysqli_fetch_assoc($rsexiste)){
			$idexis = $idexis.$rowxx['idcurso'].',';
		}
	}
	
	
?>
<form id="form1" name="form1" method="post" action="guardasignacurso.php">  
  <center><strong>Asigna Curso [ <?php echo $a; ?> ]</strong>
  <table width="50%" border="0" align="center"  class="down1">
  
  <tr>
  <td align="right">Curso:</td>
  <td>
  <input type="hidden" name="id" id="id" value="<?php echo $a; ?>"/>
  
  <select name="curso" id="curso" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
	$materia	= "SELECT * FROM curso ";
	$rsmateria	= mysqli_query($conexion, $materia);
	if(mysqli_num_rows($rsmateria) != 0){
		while($rowx	= mysqli_fetch_assoc($rsmateria)){
		echo '<option value="'.$rowx['idcurso'].'">'.$rowx['nombre'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select>
  </td>
  </tr>
  
  <tr>
  <td align="right">Fecha Inicial:</td>
  <td><span id="sprytextfield2">
  <input type="text" name="fechainicial" id="fechainicial" size="28" class="tcal"/>
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"/></span></span></td>
  </tr>
  <tr>
  <td align="right">Fecha Final:</td>
  <td><span id="sprytextfield3">
    <input type="text" name="fechafinal" id="fechafinal" size="28" class="tcal"/>
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"/></span></span></td>
  </tr>
  
  <tr>
  <td colspan=2>
  <input type="button" style="cursor: pointer;" class="boot" onclick="javascript:window.history.back();" value="REGRESAR" /> 
  <input type="submit" style="cursor: pointer;"  class="boot"  name="guarda" value="GUARDAR" />
  </td>
  </tr>
  
  </table>
  </center>
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
	</script>
</form>