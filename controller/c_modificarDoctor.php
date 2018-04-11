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
require_once '../model/conexion.php';
require_once '../model/m_doctor.php';
require_once '../controller/c_seleccionar.php';
$msj=null;
$Doc = new Doc();
	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$fono = $_POST['fono'];
	$id = $_POST['id'];

	//if(strlen($nombre)>0 && strlen($dni)>0 && strlen($fono)>0){
			$msj=$Doc->editarDoctor("nombre",$nombre,$id);
			$msj=$Doc->editarDoctor("dni",$dni,$id);
			$msj=$Doc->editarDoctor("fono",$fono,$id);
			echo $msj;
			echo"<button class='btn btn-default'><a href='../index.php?accion=Panel'>Volver al Panel</a></button>";
	/*}else{
		echo "Por favor rellene todos los campos, todo son requeridos.";
	}*/
?>
</body>
</html>