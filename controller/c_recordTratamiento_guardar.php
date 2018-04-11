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
error_reporting(0);
require_once '../model/conexion.php';
require_once '../model/m_recordTratamiento.php';
//require_once '../model/m_dientes.php';
for ($i=0; $i < count($_POST['txtRTFecha']); $i++) {
	$fecha=$_POST['txtFecha'];
	$numero_h=$_POST['txtHistoria'];
	$tpps=$_POST['txtTPSoles'];
	$tppd=$_POST['txtTPDolar'];
	$cis=$_POST['txtCISoles'];
	$cid=$_POST['txtCIDolar'];

	$rtfecha=$_POST['txtRTFecha'][$i];
	$rtatencion=$_POST['txtRTAtencion'][$i];
	$ecdr=$_POST['txtDR'][$i];
	$ecfecha=$_POST['txtECFecha'][$i];
	$ectc=$_POST['txtTC'][$i];
	$ecacta=$_POST['txtActa'][$i];
	$ecsaldo=$_POST['txtsaldo'][$i];

	$laba=$_POST['txtLabA'];
	$labb=$_POST['txtLabB'];
	$labc=$_POST['txtLabC'];

	$rt = new tratamiento();

	$rt->fecha = $fecha;
	$rt->numero_h = $numero_h;
	$rt->tpps = $tpps;
	$rt->tppd = $tppd;
	$rt->cis = $cis;
	$rt->cid = $cid;
	$rt->rtfecha = $rtfecha;
	$rt->rtatencion = $rtatencion;
	$rt->ecdr = $ecdr;
	$rt->ecfecha = $ecfecha;
	$rt->ectc = $ectc;
	$rt->ecacta = $ecacta;
	$rt->ecsaldo = $ecsaldo;
	$rt->laba = $laba;
	$rt->labb = $labb;
	$rt->labc = $labc;

		if(isset($_POST['btnGuardar'])){
		$rt->guardar();
		}
}
		echo "<h2>Ficha registrada!</h2>";
		echo "<button type='submit' class='btn btn-default' id='btnGuardar' name='btnGuardar'><a href='../index.php?accion=Panel'>Volver</a></button>";
?>
</body>
</html>