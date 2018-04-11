<?php
$conexion = mysqli_connect("localhost","root","jakamoto","clinica");
$id = $_POST['id'];
$query = $conexion->query("SELECT * FROM d_tratamiento WHERE id = $id");
//detalle descripcion2
echo '<option value="">Seleccione</option>';
while ( $row = $query->fetch_assoc() ){
	echo '<option value="' . $row['descripcion']. '">' . $row['descripcion'] . '</option>' . "\n";
}