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
function cargar(){
    $consultas=new Doctor();
    $filas=$consultas ->mostrarCita();
    
    echo "<table border='1' class='table'>
            <tr>
			    <th>ID</th>
                <th>DNI</th>
                <th>Nombre y Apellidos </th>
                <th>Telefono</th>
				
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr class='info'>";
		echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['dni']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['fono']."</td>";
		
		echo "<td><button type='submit' class='btn btn-default' id='btnEliminar' name='btnEliminar'><a href='./controller/c_eliminarDoctor.php?id=".$fila['id']."'>Eliminar</button></a></td>";
        echo "<td><button type='submit' class='btn btn-default' id='btnEditar' name='btnEditar'><a href='./view/v_modificar.php?id=".$fila['id']."'>Editar</button></a></td>";
		echo "</tr>";
    }
    echo "</table>";
}
function Select(){
$consultas=new Doctor();
$filas=$consultas->selectDoctor();

    foreach($filas as $fila){
    echo "<option value=".$fila['id'].">".$fila['nombre']."</option>";

    }
}
/*if ($_SESSION["nombre_doctor_"]==ucwords("jose")) {
    function Select(){
    $consultas=new Doctor();
    $filas=$consultas->selectDoctor();

    foreach($filas as $fila){
    echo "<option value=".$fila['id'].">".$fila['nombre']."</option>";

    }
    }
}else{
    function Select(){
    $consultas=new Doctor();
    $filas=$consultas->selectDoctor1();

    foreach($filas as $fila){
    echo "<option value=".$fila['id'].">".$fila['nombre']."</option>";

    }
    }
}*/

function AsignarDoctor(){
    $consultas=new Doctor();
    $filas=$consultas ->selectDoctor();

    foreach($filas as $fila){
        echo "<option value=".$fila['id'].">".$fila['nombre']."</option>";

    }
}
?>
</body>
</html>