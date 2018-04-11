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

if(isset($_GET['id'])){
	
	
	$id=$_GET['id'];
	$Doc = new Doc("","","","");
	$Doc->id = $id;
	$mensaje=$Doc->eliminarDoctor();
	echo $mensaje;

}
?>
</body>
</html>