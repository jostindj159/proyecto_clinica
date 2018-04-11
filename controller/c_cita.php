<?php
error_reporting(0);
require_once '../model/conexion.php';
require_once '../model/m_cita.php';
  $dni=$_POST['txtDNI'];
 $nombre=$_POST['txtNombre'];
 $fecha=$_POST['txtFecha'];
 $hora=$_POST['txtHora'];
$username = $_POST['username'];
$password = $_POST['password'];

 /*$Buscar=$_POST['txtBuscar'];*/
 
	$Agen = new Agen;

	$Agen->dni = $dni;
	$Agen->nombre = $nombre;
		$Agen->fecha = $fecha;
	$Agen->hora = $hora;
	$Agen->username=$username;
	$Agen->password=$password;
	
	
if(isset($_POST['btnGuardar'])){


	$Agen->guardar($usename);	
}


if(isset($_POST['submit'])){
if($username != "" && $password != ""){
$Agen->login();
}}

/*if(isset($_POST['btnActualizar'])){
	$Agen->actualizar();	
}
if(isset($_POST['btnEliminar'])){
	$Agen->Eliminar($Query);	
}
if(isset($_POST['btnBuscar'])){
	$Agen->Buscar($Buscar);	
}*/
/**
* 
*/

?>
<form class="" action="../view/v_cita.php" method="post">
