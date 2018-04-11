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
//error_reporting(0);
require_once '../model/conexion.php';
require_once '../model/m_presupuesto.php';

function cargarPresupuestos(){
    $consultas=new Presupuesto();
    $filas=$consultas ->ficha_presupuesto();
    
    echo "<table border='1' class='table'>
            <tr>
                <th>Numero Historial</th>
                <th>Nombre</th>
                <th>Fecha</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr >";
        echo "<td>".$fila['numero_h']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['fecha']."</td>";
        echo "<td><button type='submit' class='btn btn-warning' id='btnVer' name='btnVer'><a  href='../controller/c_modificarPresupuesto.php?numero_h=".$fila['numero_h']."'>Ver</button></a></td>";

        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>