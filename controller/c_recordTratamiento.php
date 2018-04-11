<?php
require_once('c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
}
?>

<?php
error_reporting(0);
require_once '../model/conexion.php';
require_once '../model/m_recordTratamiento.php';

function Select(){
    $consultas=new tratamiento($fecha,$numero_h,$tpps,$tppd,$cis,$cid,$rtfecha,$rtatencion,$ecdr,$ecfecha,$ectc,$ecacta,$ecsaldo,$laba,$labb,$labc);
    $filas=$consultas ->selectHistoria();
    foreach($filas as $fila){
        echo "<option value=".$fila['numero_h'].">".$fila['numero_h']." - ".$fila['nombre']."</option>";
    }
}
function cargarRecord(){
    $consultas=new tratamiento($fecha,$numero_h,$tpps,$tppd,$cis,$cid,$rtfecha,$rtatencion,$ecdr,$ecfecha,$ectc,$ecacta,$ecsaldo,$laba,$labb,$labc);
    $filas=$consultas ->ficha_record();
    
    echo "<table border='1' class='table'>
            <tr>
                <th>Numero Historial</th>
                <th>Nombre</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr >";
        echo "<td>".$fila['numero_h']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td><button type='submit' class='btn btn-warning' id='btnVer' name='btnVer'><a  href='../controller/c_modificarRecord.php?numero_h=".$fila['numero_h']."'>Ver</button></a></td>";

        echo "</tr>";
    }
    echo "</table>";
}
?>
