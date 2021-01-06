<html >
  <head>
  <script src="js/validacion_campo_vacio.js" type="text/javascript"></script>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/prototype.js" type="text/javascript"></script>
  <script src="js/ValidacionesEspeciales.js" type="text/javascript"></script>
  <link rel = "stylesheet" href = "css/estilos.css" type = "text/css">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">


<meta charset="UTF-8">
<title>Registrar Alumno</title>

</head>

<body>
   <center>
  <form id="form1" name="form1" method="post" action="nuevopedido.php">  
  <strong><h3>NUEVO PEDIDO</h3></strong>
  <table width="68%" border="0" align="center" class="down1">
  
  <tbody>
  
  <tr>
  <td align="right">Descripción:</td>
  <td><span id="sprytextfield1">
  <input name="descripcion" class="cajaDescripcion" onkeypress="return soloLetras(event)" type="text" id="descripcion" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
	
  <tr>
  <td align="right">Fecha de Entrega:</td>
  <td><span id="sprytextfield2">
  <input name="fechaDeEntrega" class="caja" onkeypress="return soloLetras(event)" type="date" id="fechaDeEntrega" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
   
  <tr><td colspan="2">
    <input type="submit" class="boot" name="botonDeAccion" value="GUARDAR"></td></tr>
  </tbody></table>
  
 
  </form></center>
  
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
	
	</script>


</body></html>