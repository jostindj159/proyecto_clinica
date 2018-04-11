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
// Conexion a la base de datos
require_once '../model/conexion.php';
require_once '../model/m_cita.php';


	$doctor = $_POST['doctor'];
	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$fechanac = $_POST['fechanac'];
	$start = $_POST['start'];
	$hora_i_h = $_POST['hora_i_h'];
	$hora_i_m = $_POST['hora_i_m'];
	$hora_i_t = $_POST['hora_i_t'];
	$hora_f_h = $_POST['hora_f_h'];
	$hora_f_m = $_POST['hora_f_m'];
	$hora_f_t = $_POST['hora_f_t'];
	$id_usuario = $_POST['id_usuario'];


		$Agen = new Agen;
		$Agen->doctor = $doctor;
		$Agen->nombre = $nombre;
		$Agen->dni = $dni;
		$Agen->telefono = $telefono;
		$Agen->email = $email;
		$Agen->fechanac = $fechanac;
		$Agen->start = $start;
		$Agen->hora_i_h = $hora_i_h;
		$Agen->hora_i_m = $hora_i_m;
		$Agen->hora_i_t = $hora_i_t;
		$Agen->hora_f_h = $hora_f_h;
		$Agen->hora_f_m = $hora_f_m;
		$Agen->hora_f_t = $hora_f_t;
		$Agen->id_usuario = $id_usuario;

		$pac = new Paciente;
		$pac->nombre = $nombre;
		$pac->dni = $dni;
		$pac->telefono = $telefono;
		$pac->email = $email;
		$pac->fechanac = $fechanac;
		

if(isset($_POST['btnGuardar'])){
	$Agen->guardar();
	$pac->guardarPaciente();
	echo "<button type='submit' class='btn btn-default'><a href='../index.php?accion=Calendario'>Volver</a></button>";
}
	/*if ($_SESSION["nombre_doctor_"]==ucwords("jose")) {
				//echo "es de jose";
				echo "<button type='submit' class='btn btn-default'><a href='../view/v_index.php'>Volver</a></button>";
				}else{
				echo "<button type='submit' class='btn btn-default'><a href='../index.php?accion=CalendarioUsuario'>Volver</a></button>";
				//echo "es de otros";
	}*/
?>
</body>
</html>