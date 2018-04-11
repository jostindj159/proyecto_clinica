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
error_reporting(0);
function cargar3(){
    $consultas=new Paciente();
    $filas=$consultas ->listarPaciente();
    
    /*echo "<table border='1' class='table'>
            <tr>
                <th>ID</th>
                <th>Nombre del paciente</th>
                <th>DNI del paciente</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Edad</th>
                <th>Fecha de Nacimiento</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr class='success'>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['dni']."</td>";
        echo "<td>".$fila['telefono']."</td>";
        echo "<td>".$fila['email']."</td>";
        echo "<td>".$fila['edad']."</td>";
        echo "<td>".$fila['fechanac']."</td>";
        echo "<td><button type='submit' class='btn btn-default' id='btnCancelar' name='btnCancelar'><a href='../controller/c_cancelarCita.php?id=".$fila['id']."'>Cancelar</button></a></td>";
        echo "</tr>";
    }
    echo "</table>";*/
    echo "<table border='1' class='table'>
            <tr>
                <th>ID</th>
                <th>Nombre del paciente</th>
                <th>DNI del paciente</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr class='success'>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['dni']."</td>";
        echo "<td><button type='submit' class='btn btn-default' id='btnCancelar' name='btnCancelar'><a href='./controller/c_eliminarPaciente.php?id=".$fila['id']."'>Eliminar</button></a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>