<?php
 require_once('../model/conexion.php');

$consultaBusqueda = $_POST['valorBusqueda'];
$filas = "";

if (isset($consultaBusqueda)) {



  $stmt = $dbh->prepare("
  SELECT res.*, record.pagando,((res.subtotal)-(record.pagando)) saldo, record.total from
(
  select b.nombre, a.numero_h, sum(costo*cantidad) subtotal from presupuestos a
  inner join ficha b on a.numero_h = b.numero_h
  where a.fecha = ?
  group by b.nombre, a.numero_h 

) res
left join 
(
  select numero_h,SUM(ecacta) pagando,SUM(cid) total from record_tratamiento 
   group by numero_h
) record
on res.numero_h = record.numero_h 
  ");

  //$likee = "%".$consultaBusqueda."%"; 
  $fecha = date("Y-m-d", strtotime($consultaBusqueda));
  $stmt->bindParam(1,$fecha);
  $stmt->execute();

  $filas = $stmt->fetchAll();

  // echo $filas[0][0];
    if ($filas == 0) {
    echo "<p>No hay Resultados</p>";
    }else {
    echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';
    //print_r($filas);
    echo "<table class='table table-bordered'>
            <tr class='success'>
              <th>NOMBRE</th>
              <th>H.C</th>
              <th>TOTAL PRESUP. </th>
              <th>PAGANDO</th>
              <th>SALDO</th>
            </tr>";
    foreach ($filas as $col) {
    echo    "<tr>";
    echo      "<td>".$col['nombre']."</td>";
    echo      "<td>".$col['numero_h']."</td>";
    echo      "<td>".$col['subtotal']."</td>";
	echo     "<td>".$col['pagando']."</td>";
    echo     "<td>".$col['saldo']."</td>";
    //echo "<table class='table table-bordered'><tr><td>Fecha</td><td>".$col["nombre"]."</td></tr></table>";
    //echo "<p>Fecha:".$col["fecha"]."</p>";
    //echo "<p>Descripcion:".$col["Descripcion"]."</p>";
    //$value = $col['total'];
    //$sum += $value;
    echo "   </tr>";
    }

    echo "<tr>";
    echo "<th colspan='3'></th>";
    echo "<th>TOTAL  : </th>";
    echo "<td>".$col['total']."</td>";
    echo "</tr>";
    echo "</table>";
  }
}
?>