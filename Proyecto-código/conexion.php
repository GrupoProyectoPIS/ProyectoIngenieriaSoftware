<!--Conexión a la base de datos !-->
<?php
	$conexion = mysql_connect("localhost", "root","1234");
	mysql_database("matricula",$conexion);

	$query = mysql_query("select * from usuarios",$conexion);

	$resultado = ($query,0);
?>
