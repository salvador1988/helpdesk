<<?php 
$accion = $_GET['ac'];
$dep = $_POST['dep'];
$usuario = $_POST['usuario'];
$fecha = $_POST['fecha'];
$problema = $_POST['problema'];
$des = $_POST['des'];

$conexion = mysqli_connect("localhost","root","root","ayuda");

switch ($accion) {
	case 1:
	$consulta = "INSERT INTO `helpdesk`(`id`, `departamento`, `usuario`, `problema`, `fecha`, `descripción`) VALUES (NULL,'$dep','$usuario','$problema','$fecha','$des')";
	mysqli_query($conexion,$consulta);
	echo "se envio su pronblem a al departamento TI";

		break;
	
	default:
		# code...
		break;
}



 ?>
 <a href="index.php">comunicarse con su gefe directo</a>