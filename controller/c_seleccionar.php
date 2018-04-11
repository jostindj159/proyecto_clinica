<?php
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
function c_seleccionar(){
	if(isset($_GET['id'])){
		$Doc = new Doc();
		$id=$_GET['id'];
		//$nombre = $_GET['nombre'];
		//$dni = $_GET['dni'];
		//$fono = $_GET['fono'];
		$filas=$Doc->cargarDoctor($id);
			foreach($filas as $fila){

			echo'
			<form action="../controller/c_modificarDoctor.php" method="post"  >
			<center>
				<label>Nombre:</label>
				<input type="text" class="form-control"   name="nombre" value="'.$fila['nombre'].'">
				<br /><br />
				
				<label>DNI:   </label>
		  		<input type="number" class="form-control" name="dni" value="'.$fila['dni'].'"><br /><br />

				<label>Celular:   </label>
		  		<input type="number" class="form-control"  name="fono" value="'.$fila['fono'].'"><br /><br />
		  		<label>&nbsp;</label>

		  		<input type="hidden"  name="id" value="'.$fila['id'].'"><br /><br />

				<button type="submit" class="btn btn-primary btn-lg" ><em class="fa fa-user-plus"></em>Guardar Cambios</button>
				<button  type="button"  class="btn  btn-warning btn-lg" class="fa fa-user-plus"><a href="../index.php?accion=Panel">Cancelar</a></button>
			</form>';
		}

	}

}

?>
</body>
</html>