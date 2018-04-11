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


/*if(isset($_GET['opcion'])){
    
    $sth1 = $dbh->prepare('select p.numero_h from presupuestos p inner join ficha_ei f on p.numero_h=f.id_fichaie
    where p.numero_h = :numero_h');//tabla actual presu inner join fichaei
    $sth1->bindParam(':numero_h', $_GET['opcion']);
    $sth1->execute();
    $result1 = $sth1->fetchAll();

    $sth = $dbh->prepare('SELECT idUsers, loginUsers FROM presupuestos');
    $sth->execute();
    $result = $sth->fetchAll();
}*/

function Select(){
    $consultas=new Ex($fecha,$numero_h,$motivo_c,$examen_i,$radiografias,$p_arterial,$periodontograma,$f_clinica,$e_laboratorio,
	 $m_estudio,$tomografia,$a_sonrisa,$informe,$diag1,$diag2,$diag3,$diag4,$diag5,$diag6,$diag7,$diag8,$diag9,$diag10,$diag11,
	 $diag12,$diag13,$diente_pieza,$diente_area,$diente_diag,$diagnostico_a,$diagnostico_b,$diagnostico_c,$diagnostico_d);
	
    $filas=$consultas ->selectHistoria();
    
    foreach($filas as $fila){
        echo "<option value=".$fila['numero_h'].">".$fila['numero_h']." - ".$fila['nombre']."</option>";
    }
}
///////////////////////////////////////
/*function verDientes(){
    $consultas=new Dientes(
    	$pieza1_a,$pieza1_b,$pieza1_c,$pieza1_d,$pieza1_e,$pieza2_a,$pieza2_b,$pieza2_c,$pieza2_d,$pieza2_e,
    	$pieza3_a,$pieza3_b,$pieza3_c,$pieza3_d,$pieza3_e,
    	$pieza4_a,$pieza4_b,$pieza4_c,$pieza4_d,$pieza5_a,$pieza5_b,$pieza5_c,$pieza5_d,
    	$pieza6_a,$pieza6_b,$pieza6_c,$pieza6_d,$pieza7_a,$pieza7_b,$pieza7_c,$pieza7_d,
    	$pieza8_a,$pieza8_b,$pieza8_c,$pieza8_d,$pieza9_a,$pieza9_b,$pieza9_c,$pieza9_d,
    	$pieza10_a,$pieza10_b,$pieza10_c,$pieza10_d,$pieza11_a,$pieza11_b,$pieza11_c,$pieza11_d,
    	$pieza12_a,$pieza12_b,$pieza12_c,$pieza12_d,$pieza13_a,$pieza13_b,$pieza13_c,$pieza13_d,
    	$pieza14_a,$pieza14_b,$pieza14_c,$pieza14_d,$pieza14_e,$pieza15_a,$pieza15_b,$pieza15_c,$pieza15_d,
    	$pieza15_e,$pieza16_a,$pieza16_b,$pieza16_c,$pieza16_d,$pieza16_e,

    	$pieza17_a,$pieza17_b,$pieza17_c,$pieza17_d,$pieza17_e,$pieza18_a,$pieza18_b,$pieza18_c,$pieza18_d,$pieza18_e,
    	$pieza19_a,$pieza19_b,$pieza19_c,$pieza19_d,$pieza19_e,
    	$pieza20_a,$pieza20_b,$pieza20_c,$pieza20_d,$pieza21_a,$pieza21_b,$pieza21_c,$pieza21_d,
    	$pieza22_a,$pieza22_b,$pieza22_c,$pieza22_d,$pieza23_a,$pieza23_b,$pieza23_c,$pieza23_d,
    	$pieza24_a,$pieza24_b,$pieza24_c,$pieza24_d,$pieza25_a,$pieza25_b,$pieza25_c,$pieza25_d,
    	$pieza26_a,$pieza26_b,$pieza26_c,$pieza26_d,$pieza27_a,$pieza27_b,$pieza27_c,$pieza27_d,
    	$pieza28_a,$pieza28_b,$pieza28_c,$pieza28_d,$pieza29_a,$pieza29_b,$pieza29_c,$pieza29_d,
    	$pieza30_a,$pieza30_b,$pieza30_c,$pieza30_d,$pieza30_e,$pieza31_a,$pieza31_b,$pieza31_c,$pieza31_d,
    	$pieza31_e,$pieza32_a,$pieza32_b,$pieza32_c,$pieza32_d,$pieza32_e);
	
    $filas=$consultas ->PiezasDientes();
    
    foreach($filas as $fila){
        echo "<option value=".$fila['a'].">".$fila['pieza1_a']."</option>";
    }
}
function Select2(){
    $consultas=new Ex();
    $filas=$consultas ->selectDiagnostico();
     
    foreach($filas as $fila){
        echo "<option value=".$fila['n_diagnostico'].">".$fila['n_diagnostico']."</option>";

    }
}*/
function cargarFicha_ei(){
    $consultas=new Ex();
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