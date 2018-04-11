<?php
$conexion = mysqli_connect("localhost","root","jakamoto","clinica");
$query = $conexion->query("SELECT * FROM n_tratamiento order by tratamiento");
//detalle descriion 1
echo '<option value="">Seleccione</option>';
while ( $row = $query->fetch_assoc() ){
	echo '<option value="' . $row['id']. '">' . $row['tratamiento'] . '</option>' . "\n";
}