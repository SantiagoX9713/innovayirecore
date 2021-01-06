<html >
  <head>
  <script src="js/validacion_campo_vacio.js" type="text/javascript"></script>
  <link href="css/MenuPrincipal.css" rel="stylesheet" type="text/css"/>	
  <link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">
  <link href="css/tablas.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/prototype.js" type="text/javascript"></script>
  <script src="js/ValidacionesEspeciales.js" type="text/javascript"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Registrar Alumno</title>

</head>

<body>
   <center>
  <form id="form1" name="form1" method="post" action="RegistroAlumno.php">  
  <strong><h3>REGISTRAR NUEVO ALUMNO</h3></strong>
  <table width="68%" border="0" align="center" class="down1">
  
  <tbody>
  
  <tr>
  <td align="right">Nombre:</td>
  <td><span id="sprytextfield1">
  <input name="nombre" class="caja" onkeypress="return soloLetras(event)" type="text" id="nombre" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
	
  <tr>
  <td align="right">Apellido :</td>
  <td><span id="sprytextfield2">
  <input name="apellidos1" class="caja" onkeypress="return soloLetras(event)" type="text" id="apellidos" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
  <tr>
  <td align="right">Email:</td>
  <td><span id="sprytextfield4">
  <input name="email" class="caja" onblur="validarEmail(this.value)" type="text" id="email" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  <tr>
  <td align="right">Direccion :</td>
  <td><span id="sprytextfield2">
  <input name="direccion" class="caja" onkeypress="return soloLetras(event)" type="text" id="direccion" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  <tr>
  <td align="right">Telefono :</td>
  <td><span id="sprytextfield2">
  <input name="telefono" class="caja" onkeypress="return soloLetras(event)" type="text" id="telefono" size=28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
  <tr><td colspan="2">
    <input type="submit" class="boot" name="guarda" value="GUARDAR"></td></tr>
  </tbody></table>
  
 
  </form></center>
  
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
	
	</script>


</body></html>