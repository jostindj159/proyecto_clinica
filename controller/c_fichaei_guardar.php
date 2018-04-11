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
require_once '../model/m_fichaei.php';
//require_once '../model/m_dientes.php';
for ($i=0; $i < count($_POST['Pieza']); $i++) {
	$fecha=$_POST['txtFecha'];
	$numero_h=$_POST['txtHistoria'];
	$motivo_c=$_POST['txtMotivo'];
	$examen_i=$_POST['txtExamen'];
	$radiografias=$_POST['optradio1'];
	$p_arterial=$_POST['optradio2'];
	$periodontograma=$_POST['optradio3'];
	$f_clinica=$_POST['optradio4'];
	$e_laboratorio=$_POST['optradio5'];
	$m_estudio=$_POST['optradio6'];
	$tomografia=$_POST['optradio7'];
	$a_sonrisa=$_POST['optradio8'];
	$informe=$_POST['txtInforme'];

	$pieza=$_POST['Pieza'][$i];
	$area=$_POST['txtArea'][$i];
	$diag=$_POST['txtDiag'][$i];
	$diag1=$_POST['diag1'];
	$diag2=$_POST['diag2'];
	$diag3=$_POST['diag3'];
	$diag4=$_POST['diag4'];
	$diag5=$_POST['diag5'];
	$diag6=$_POST['diag6'];
	$diag7=$_POST['diag7'];
	$diag8=$_POST['diag8'];
	$diag9=$_POST['diag9'];
	$diag10=$_POST['diag10'];
	$diag11=$_POST['diag11'];
	$diag12=$_POST['diag12'];
	$diag13=$_POST['diag13'];
	$diagnostico_a=$_POST['txtDiag1'];
	$diagnostico_b=$_POST['txtDiag2'];
	$diagnostico_c=$_POST['txtDiag3'];
	$diagnostico_d=$_POST['txtDiag4'];

	$Ex = new Ex($fecha,$numero_h,$motivo_c,$examen_i,$radiografias,$p_arterial,$periodontograma,$f_clinica,$e_laboratorio,
	$m_estudio,$tomografia,$a_sonrisa,$informe,$pieza,$area,$diag,$diag1,$diag2,$diag3,$diag4,$diag5,$diag6,$diag7,$diag8,$diag9,$diag10,$diag11,
	$diag12,$diag13,$diagnostico_a,$diagnostico_b,$diagnostico_c,$diagnostico_d);

	$Ex->fecha = $fecha;
	$Ex->numero_h = $numero_h;
	$Ex->motivo_c = $motivo_c;
	$Ex->examen_i = $examen_i;
	$Ex->radiografias = $radiografias;
	$Ex->p_arterial = $p_arterial;
	$Ex->periodontograma = $periodontograma;
	$Ex->f_clinica = $f_clinica;
	$Ex->e_laboratorio = $e_laboratorio;
	$Ex->m_estudio = $m_estudio;
	$Ex->tomografia = $tomografia;
	$Ex->a_sonrisa = $a_sonrisa;
	$Ex->informe = $informe;

	$Ex->pieza = $pieza;
	$Ex->area = $area;
	$Ex->diag = $diag;
	$Ex->caries = $diag1;
	$Ex->pulpitis = $diag2;
	$Ex->necrosi_p = $diag3;
	$Ex->gingivitis_a = $diag4;
	$Ex->gingivitis_c = $diag5;
	$Ex->periodontitis_a = $diag6;
	$Ex->periodontitis_c = $diag7;
	$Ex->dientes_inclu = $diag8;
	$Ex->dientes_impac = $diag9;
	$Ex->anomalias_dentofaciales = $diag10;
	$Ex->anomalias_posicion = $diag11;
	$Ex->transtornos = $diag12;
	$Ex->perdida_diente = $diag13;
	$Ex->diagnostico_a = $diagnostico_a;
	$Ex->diagnostico_b = $diagnostico_b;
	$Ex->diagnostico_c = $diagnostico_c;
	$Ex->diagnostico_d = $diagnostico_d;

		if(isset($_POST['btnGuardar'])){
		$Ex->guardar();

		}
}
		echo "<h2>Ficha registrada!</h2>";
		echo "<button type='submit' class='btn btn-default' id='btnGuardar' name='btnGuardar'><a href='../index.php?accion=Panel'>Volver</a></button>";
?>
</body>
</html>