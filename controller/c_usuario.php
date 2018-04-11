<?php
function cargar2(){
    $consultas=new Usuario();
    $filas=$consultas ->mostrarCita2();
    echo "<table border='1' class='table'>
            <tr>
                <th>ID</th>
                <th>Nombre del usuario</th>
                <th>Clave del usuario</th>
                <th>Doctor</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr class='warning'>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['nombre_usuario']."</td>";
        echo "<td>".$fila['clave']."</td>";
        echo "<td>".$fila['idusuario']."</td>";?>
        <!--<td><select class="form-control" id="sel1" required="required" name="doctor"><option></option></*?php AsignarDoctor();?*/></select></td>-->
        <?php 
        /*echo "<td><button type='submit' class='btn btn-default' id='btnGuardar' name='btnGuardar'><a href='../controller/c_Actualizar.php?id=".$fila['id']."'>Actualizar</button></a></td>";*/
        echo "</tr>";
    }
        echo "</table>";
}

?>