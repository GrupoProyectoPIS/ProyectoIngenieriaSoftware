<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" href="jquery-ui-1.8.6.css" rel="Stylesheet" />
<title>Documento sin t&iacute;tulo</title>
<link  rel="stylesheet" href="diseño_registro.css" type="text/css" />
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
$(function() {
	$('#dob').datepicker({dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true, yearRange: '-100:+0'});
});

</script>

</head>

<body>
<div class="tit">Crear cuenta</div>
<div class="registro">

<form action="uno.php" method="post">



<label class="nombres"><br />
Nombres Completos:</label>

  
    <input type="text" name="nombre"  size="40px" class="n1" value="Primer Nombre" onclick="this.value=('')"/> 
	<input type="text" name="nombre2"  size="40px"class="n2" value="Segundo Nombre" onclick="this.value=('')" /> 
    <br />
 
  <label class="apellidos"> Apellidos Completos:</label>

  
    <input type="text" name="apellidos"  size="40px" class="ap1" value="Apellido Paterno" onclick="this.value=('')"/>
	<input type="text" name="apellidos2"  size="40px" class="ap2"value="Apellido Materno" onclick="this.value=('')"/> 
    <br />
	
	<label class="cedula"> Cédula/Pasaporte:</label>

  
    <input type="text" name="cedula"  size="40px" class="ced"/>
	<br />
	
	<label class="edad"> Edad:</label>

  
    <input type="text" name="edad"  size="40px" class="ced"/>
	<br />
 
  <label class="fecha">Fecha de nacimiento:
  </label>

 
    <input type="text" name="dob" id="dob" />
    <br />
 
  <label class="ciudad">Ciudad:
  </label>

 
    <input type="text" name="ciudad"  size="40px" class="cd" value="Escribe tu ciudad" onclick="this.value=('')"/> 
  
  <label class="pais">País:
  </label>

  
    <input type="text" name="País"  size="40px" class="pa" value="Escribe Tu país" onclick="this.value=('')"/> 
    <br />
  
  <label class="genero">
  Género:
  </label>
<label class="hombre">M
</label><input type="radio" name="genero"  class="m"/> 
    
  
  <label class="mujer">F
  </label>

  
    <input type="radio" name="genero"  class="f"/>
    <br  />
    
   <label class="placa"> Placas del Vehículo:
  </label>

  
    <input type="text" name="placas"  size="40px" class="placas" />
    <br />
  
  <label class="usuario"> Usuario:
  </label>

  
    <input type="text" name="usuario"  size="40px" class="user" />
    <br />
  
  <label class="contraseña">Contraseña:
  </label>

     <input type="password" name="clave"  size="40px" class="clave"/>
    <br />
  


<input type="submit" value="Crear Cuenta" class="crear" name="btn_crear"  />
<input type="submit" value="Cancelar" class="crear1" name="btn_cancel"  />
</form>
</div>


</body>


</html>
