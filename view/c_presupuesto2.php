<?php
require_once('../model/conexion.php');
$id = $_POST['id'];
$stmt = $dbh->prepare("SELECT * FROM d_tratamiento WHERE id = ? ");
$stmt->bindParam(1,$id);
$stmt->execute();
$filas = $stmt->fetchAll();

echo '<option value="">Seleccione</option>';
foreach ($filas as $col) {
echo '<option value="' . $col['descripcion']. '">' . $col['descripcion'] . '</option>' . "\n";
}
