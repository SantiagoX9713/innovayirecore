<html xmlns="http://www.w3.org/1999/xhtml"><head><link href="css/main.css" rel="stylesheet" type="text/css">
<script src="js/validacion_campo_vacio.js" type="text/javascript"></script>
<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">
<link href="css/tablas.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/ValidacionesEspeciales.js" type="text/javascript"></script>

<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">




<style>
.caja{
	display: inline-block;
	margin: 5px;
	border: 1px solid #dadada;
	background-color: #eaeaea;
	padding: 3px;
	color: #404040;
	width: 250px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Asistencias de Alumnos</title>

</head>

<body>
  <form id="form1" name="form1" method="post" action="RegistroAsistencia.php">  
  <strong><h3>Asistencias de Alumnos </h3></strong>
  <table width="68%" border="0" align="center" class="down1">
  
  <tbody>
  
  <tr>
  <td align="right">Nombre:</td>
  <td><span id="sprytextfield1">
  <input name="nombre" class="caja" onkeypress="return soloLetras(event)" type="text" id="nombre" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  <tr>
  <td align="right">Apellido:</td>
  <td><span id="sprytextfield2">
  <input name="apellido" class="caja" onkeypress="return soloLetras(event)" type="text" id="apellido" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  <tr>
  <td align="right">Presente :</td>
  <td><span id="sprytextfield3">
  <input name="presente" class="caja" onkeypress="return soloLetras(event)" type="text" id="presente" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  <tr>
  <td align="right">Ausente :</td>
  <td><span id="sprytextfield4">
  <input name="ausente" class="caja" onkeypress="return soloLetras(event)" type="text" id="ausente" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  <tr>
  <td align="right">Justificacion :</td>
  <td><span id="sprytextfield5">
  <input name="justificacion" class="caja" onkeypress="return soloLetras(event)" type="text" id="justificacion" size=28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  <tr>
  <td align="right">Tardanza:</td>
  <td><span id="sprytextfield6">
  <input name="tardanza" class="caja" onkeypress="return soloLetras(event)" type="text" id="tardanza" size=28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  <tr>
  <td align="right">Fecha :</td>
  <td><span id="sprytextfield7">
  <input name="fecha" class="caja" onkeypress="return soloLetras(event)" type="text" id="fecha" size=28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
  <tr><td colspan="2"><input type="submit" class="boot" name="guarda" value="GUARDAR"></td></tr>
  </tbody></table>
  
 
  </form>
  
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
	
	</script>


</body></html>