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
require_once '../model/conexion.php';
require_once '../model/m_fichaei.php';


function Select(){
    $consultas=new Ex($fecha,$numero_h,$motivo_c,$examen_i,$radiografias,$p_arterial,$periodontograma,$f_clinica,$e_laboratorio,
	 $m_estudio,$tomografia,$a_sonrisa,$informe,$diag1,$diag2,$diag3,$diag4,$diag5,$diag6,$diag7,$diag8,$diag9,$diag10,$diag11,
	 $diag12,$diag13,$diente_pieza,$diente_area,$diente_diag,$diagnostico_a,$diagnostico_b,$diagnostico_c,$diagnostico_d);
	
    $filas=$consultas ->selectHistoria();
    
    foreach($filas as $fila){
        echo "<option value=".$fila['numero_h'].">".$fila['numero_h']." - ".$fila['nombre']."</option>";
    }
}
///
function cargarFicha_ei(){
    $consultas=new Ex($fecha,$numero_h,$motivo_c,$examen_i,$radiografias,$p_arterial,$periodontograma,$f_clinica,$e_laboratorio,
     $m_estudio,$tomografia,$a_sonrisa,$informe,$diag1,$diag2,$diag3,$diag4,$diag5,$diag6,$diag7,$diag8,$diag9,$diag10,$diag11,
     $diag12,$diag13,$diente_pieza,$diente_area,$diente_diag,$diagnostico_a,$diagnostico_b,$diagnostico_c,$diagnostico_d);
    $filas=$consultas ->ficha_eip();
    
    echo "<table border='1' class='table'>
            <tr>
                <th>Numero Historial</th>
                <th>Nombre</th>
                <th>Motivo</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr >";
        echo "<td>".$fila['numero_h']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['motivo_c']."</td>";
        echo "<td><button type='submit' class='btn btn-warning' id='btnVer' name='btnVer'><a  href='../controller/c_modificarfei.php?numero_h=".$fila['numero_h']."'>Ver</button></a></td>";

        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>