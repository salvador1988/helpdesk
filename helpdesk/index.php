<!DOCTYPE html>
<html>
<head>
	<title>ayuda sistematica</title>
</head>
<body>
	<h1>Empresa coorporativo</h1>
	<?php
	$conexion = mysqli_connect("localhost","root","root","ayuda");

	$registros = mysqli_query($conexion,"select * from helpdesk");

		while ($reg = mysqli_fetch_array($registros)) {
			
			echo $reg['dep']."<br>";

			echo $reg['usuario']."<br>";

			echo $reg['problema']."<br>";

			echo $reg['fecha']."<br>";

			echo $reg['des']."<br>";

		}

		?>

</body>
</html>