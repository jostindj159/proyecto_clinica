<?php

require_once('../model/conexion.php');
$stmt = $dbh->prepare("SELECT * FROM n_tratamiento order by tratamiento");
$stmt->execute();
$filas = $stmt->fetchAll();
echo '<option value="">Seleccione</option>';
foreach ($filas as $col) {
echo '<option value="' . $col['id']. '">' . $col['tratamiento'] . '</option>' . "\n";
}
