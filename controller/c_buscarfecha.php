<?php
 require_once('../model/conexion.php');

$consultaBusqueda = $_POST['valorBusqueda'];
$filas = "";

if (isset($consultaBusqueda)) {



  $stmt = $dbh->prepare("
  SELECT res.*, record.pagando,((res.subtotal)-(record.pagando)) saldo from
  (
    select b.nombre, a.numero_h, sum(costo*cantidad) subtotal from presupuestos a
    inner join ficha b on a.numero_h = b.numero_h
    where a.fecha = ?
    group by b.nombre, a.numero_h 

  ) res
  left join 
  (
    select numero_h,SUM(ecacta) pagando from record_tratamiento 
     group by numero_h
  ) record
  on res.numero_h = record.numero_h 
    ");
  $fecha = date("Y-m-d", strtotime($consultaBusqueda));
  $stmt->bindParam(1,$fecha);
  $stmt->execute();
  $filas = $stmt->fetchAll();
////////////////////////////////
////////////////////////////////
  $stmt2 = $dbh->prepare("
  SELECT res.*, record.pagando,((res.subtotal)-(record.pagando)) saldo,SUM(record.total) total from
  (
    select b.nombre, a.numero_h, sum(costo*cantidad) subtotal from presupuestos a
    inner join ficha b on a.numero_h = b.numero_h
    where a.fecha = ?
    group by b.nombre, a.numero_h 

  ) res
  left join 
  (
    select numero_h,SUM(ecacta) pagando,SUM(ecacta) total from record_tratamiento 
     group by numero_h
  ) record
  on res.numero_h = record.numero_h 
    ");

  $fecha2 = date("Y-m-d", strtotime($consultaBusqueda));
  $stmt2->bindParam(1,$fecha2);
  $stmt2->execute();
  $filas2 = $stmt2->fetchAll();
  // echo $filas[0][0];
    if ($filas == false) {
    echo "<p><center><h2>No hay Resultados..</h2></center></p>";
    }else {
    echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';
    //print_r($filas);
    echo "<table class='table '>
            <tr class='success'>
              <th>NOMBRE</th>
              <th>H.C</th>
              <th>TOTAL PRESUP. </th>
              <th>PAGANDO</th>
              <th>SALDO</th>
            </tr>";
    foreach ($filas as $col) {
    echo    "<tr>";
    echo     "<td>".$col['nombre']."</td>";
    echo     "<td>".$col['numero_h']."</td>";
    echo     "<td>".$col['subtotal']."</td>";
	  echo     "<td>".$col['pagando']."</td>";
    echo     "<td>".$col['saldo']."</td>";
    //echo "<table class='table table-bordered'><tr><td>Fecha</td><td>".$col["nombre"]."</td></tr></table>";
    //echo "<p>Fecha:".$col["fecha"]."</p>";
    //echo "<p>Descripcion:".$col["Descripcion"]."</p>";
    //$value = $col['total'];
    //$sum += $value;
    echo "   </tr>";
    }

    echo "<tr class='success'>";
    echo "<th colspan='2'></th>";
    echo "<th>TOTAL  : </th>";
    echo "<td colspan='2'>".$filas2[0]['total']."</td>";
    echo "</tr>";
    echo "</table>";
  }

}
?>