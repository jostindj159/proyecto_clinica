<?php
function cargar(){
    $consultas=new Doctor();
    $filas=$consultas ->mostrarCita();
    
    echo "<table border='1' >
            <tr>
                <th>DNI</th>
                <th>Nombre y Apellidos</th>
                <th>Telefono</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr>";
        echo "<td>".$fila['dni']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['fono']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>