<?php
session_start();
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
//error_reporting(0);
require_once '../model/conexion.php';
require_once '../model/m_presupuesto.php';
for ($i=0; $i < count($_POST['txtDesc1']); $i++) {
	$fecha = $_REQUEST['txtFecha'];
	$numero_h = $_REQUEST['txtHistoria'];
	$pieza = $_REQUEST['txtPieza'];
	$area = $_REQUEST['txtArea'];
	$diag = $_REQUEST['txtDiag'];

	$desc1 = $_REQUEST['txtDesc1'][$i];
	$desc2 = $_REQUEST['txtDesc2'][$i];
	$costo = $_REQUEST['txtCosto'][$i];
	$cantidad = $_REQUEST['txtCant'][$i];

	$costSol = $_REQUEST['total_soles'];
	$costDol = $_REQUEST['total_dolar'];
	$inicial = $_REQUEST['inicial'];
	$saldo = $_REQUEST['saldo'];
	$cuotas = $_REQUEST['cuotas'];

		$Pre = new Presupuesto();
		$Pre->fecha = $fecha;
		$Pre->numero_h = $numero_h;
		$Pre->pieza = $pieza;
		$Pre->area = $area;
		$Pre->diag = $diag;
        $Pre->desc1 = $desc1;
		$Pre->desc2 = $desc2;
		$Pre->costo = $costo;
		$Pre->cantidad = $cantidad;
		$Pre->costSol = $costSol;
        $Pre->costDol = $costDol;
		$Pre->inicial = $inicial;
		$Pre->saldo = $saldo;
		$Pre->cuotas = $cuotas;
if(isset($_POST['btnagregar'])){
	$Pre->guardar();	//es este
	
}
}
echo "<h1>Guardado..</h1>";
echo "<button type='submit' class='btn btn-default'><a href='../index.php?accion=Panel'>Volver</a></button>";
?>
</body>
</html>