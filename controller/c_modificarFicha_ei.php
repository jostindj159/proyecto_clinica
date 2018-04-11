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
require_once '../model/conexion.php';
require_once '../model/m_fichaei.php';
require_once '../controller/c_seleccionarfei.php';

$msj=null;

$Fich = new Ex();

	 $fecha = $_POST['fecha'];
     $numero_h = $_POST['numero_h'];
     $motivo_c = $_POST['motivo_c'];
     $examen_i = $_POST['examen_i'];
     $radiografias = $_POST['radiografias'];
     $p_arterial = $_POST['p_arterial'];
     $periodontograma = $_POST['periodontograma'];
     $f_clinica = $_POST['f_clinica'];
     $e_laboratorio = $_POST['e_laboratorio'];
	 $m_estudio = $_POST['m_estudio'];
     $tomografia = $_POST['tomografia'];
     $a_sonrisa = $_POST['a_sonrisa'];
     $informe = $_POST['informe'];

     //$pieza = $_POST['pieza'];
     //$area = $_POST['area'];
    //$diag = $_POST['diag'];
     $caries = $_POST['caries'];
     $pulpitis = $_POST['pulpitis'];
     $necrosi_p = $_POST['necrosi_p'];
     $gingivitis_a = $_POST['gingivitis_a'];
     $gingivitis_c = $_POST['gingivitis_c'];
     $periodontitis_a = $_POST['periodontitis_a'];
     $periodontitis_c = $_POST['periodontitis_c'];
     $dientes_inclu = $_POST['dientes_inclu'];
     $dientes_impac = $_POST['dientes_impac'];
     $anomalias_dentofaciales = $_POST['anomalias_dentofaciales'];
     $anomalias_posicion = $_POST['anomalias_posicion'];
     $transtornos = $_POST['transtornos'];
     $perdida_diente = $_POST['perdida_diente'];
     $diagnostico_a = $_POST['diagnostico_a'];
     $diagnostico_b = $_POST['diagnostico_b'];
     $diagnostico_c = $_POST['diagnostico_c'];
     $diagnostico_d = $_POST['diagnostico_d'];

			$msj=$Fich->editarFicha_ei("fecha",$fecha,$numero_h);
			$msj=$Fich->editarFicha_ei("numero_h",$numero_h,$numero_h);
			$msj=$Fich->editarFicha_ei("motivo_c",$motivo_c,$numero_h);
			$msj=$Fich->editarFicha_ei("examen_i",$examen_i,$numero_h);
			$msj=$Fich->editarFicha_ei("radiografias",$radiografias,$numero_h);
			$msj=$Fich->editarFicha_ei("p_arterial",$p_arterial,$numero_h);
			$msj=$Fich->editarFicha_ei("periodontograma",$periodontograma,$numero_h);
			$msj=$Fich->editarFicha_ei("f_clinica",$f_clinica,$numero_h);
			$msj=$Fich->editarFicha_ei("e_laboratorio",$e_laboratorio,$numero_h);
			$msj=$Fich->editarFicha_ei("m_estudio",$m_estudio,$numero_h);
			$msj=$Fich->editarFicha_ei("tomografia",$tomografia,$numero_h);
			$msj=$Fich->editarFicha_ei("a_sonrisa",$a_sonrisa,$numero_h);
			$msj=$Fich->editarFicha_ei("informe",$informe,$numero_h);

			//$msj=$Fich->editarFicha_ei("pieza",$pieza,$numero_h);
			//$msj=$Fich->editarFicha_ei("area",$area,$numero_h);
			//$msj=$Fich->editarFicha_ei("diag",$diag,$numero_h);
			$msj=$Fich->editarFicha_ei("caries",$caries,$numero_h);
			$msj=$Fich->editarFicha_ei("pulpitis",$pulpitis,$numero_h);
			$msj=$Fich->editarFicha_ei("necrosi_p",$necrosi_p,$numero_h);
			$msj=$Fich->editarFicha_ei("gingivitis_a",$gingivitis_a,$numero_h);
			$msj=$Fich->editarFicha_ei("gingivitis_c",$gingivitis_c,$numero_h);
			$msj=$Fich->editarFicha_ei("periodontitis_a",$periodontitis_a,$numero_h);
			$msj=$Fich->editarFicha_ei("periodontitis_c",$periodontitis_c,$numero_h);
			$msj=$Fich->editarFicha_ei("dientes_inclu",$dientes_inclu,$numero_h);
			$msj=$Fich->editarFicha_ei("dientes_impac",$dientes_impac,$numero_h);
			$msj=$Fich->editarFicha_ei("anomalias_dentofaciales",$anomalias_dentofaciales,$numero_h);
			$msj=$Fich->editarFicha_ei("anomalias_posicion",$anomalias_posicion,$numero_h);
			$msj=$Fich->editarFicha_ei("transtornos",$transtornos,$numero_h);
			$msj=$Fich->editarFicha_ei("perdida_diente",$perdida_diente,$numero_h);
			$msj=$Fich->editarFicha_ei("diagnostico_a",$diagnostico_a,$numero_h);
			$msj=$Fich->editarFicha_ei("diagnostico_b",$diagnostico_b,$numero_h);
			$msj=$Fich->editarFicha_ei("diagnostico_c",$diagnostico_c,$numero_h);
			$msj=$Fich->editarFicha_ei("diagnostico_d",$diagnostico_d,$numero_h);
			
			echo $msj;
			echo"<button class='btn btn-default'><a href='../index.php?accion=Panel'>Volver al Panel</a></button>";
			//echo"<a href='../view/v_panel.php'>ver doctores</a>";

?>
</body>
</html>