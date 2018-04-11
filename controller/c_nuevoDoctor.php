<?php
session_start();
require_once('c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
error_reporting(0);
require_once '../model/conexion.php';
require_once '../model/m_doctor.php';
	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$fono = $_POST['fono'];

		$Doc = new Doc($nombre,$dni,$fono);
        $Doc->nombre = $nombre;
		$Doc->dni = $dni;
		$Doc->fono = $fono;
if(isset($_POST['btnGuardar'])){
	$Doc->guardar();	
	echo "<button type='submit' class='btn btn-default'><a href='../index.php?accion=Panel'>Volver</a></button>";
}
?>
</body>
</html>