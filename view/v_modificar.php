<?php
session_start();
require_once('../controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
} 
require_once('../model/conexion.php');
require_once('../model/m_doctor.php');
require_once('../controller/c_seleccionar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Doctor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
	<h1 style="color: orange;">Editar Doctor</h1>
	<?php
 	c_seleccionar();
	 ?>
	</center>
</body>