<!DOCTYPE html>
<html>
<head>
	<title>reportes</title>
</head>
<body>
	<h1>sistema para reportes TI</h1>
	<p>ten en cuenta el tiempo de espera</p>

<form method="POST" action="accion.php?ac=1">

<p>departamento:  </p>

<select name"dep">
	<option value="finanzas">fiananzas</option>
	<option value="ventas">ventas</option>
	<option value="refacciones">refacciones</option>
	<option value="contabilidad">contabilidad</option>
	<option value="taller">taller</option>
</select>
<p>Usuario</p>
<input type="text" name="usuario">
<p>fecha</p>
<input type="text" name="fecha">
<p>problema</p>
<input type="text" name="problema">
<p>descripcion</p>
<input type="text" name="des"><br>
<input type="submit" name="enviar">
</form>
</body>
</html>