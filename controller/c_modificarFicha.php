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
require_once '../model/m_ficha.php';
require_once '../controller/c_seleccionarf.php';

$msj=null;

$Fich = new Fich();

		 $numero_h = $_POST['numero_h'];
		 $fecha = $_POST['fecha'];
		 $doctor_tte=$_POST['doctor_tte'];
		 $nombre=$_POST['nombre'];
		 $dni=$_POST['dni'];
		 $edad=$_POST['edad'];
		 $fecha_n=$_POST['fecha_n'];
		 $lugar_n=$_POST['lugar_n'];
		 $apoderado=$_POST['apoderado'];
		 $parentesco=$_POST['parentesco'];
		 $lugar_p=$_POST['lugar_p'];
		 $direccion=$_POST['direccion'];
		 $distrito=$_POST['distrito'];
		 $codigo_p=$_POST['codigo_p'];
		 $correo=$_POST['correo'];
		 $telefono=$_POST['telefono'];
		 $celular=$_POST['celular'];
		 $centro_toe=$_POST['centro_toe'];
		 $telefono_ofi=$_POST['telefono_ofi'];
		 $recom_por=$_POST['recom_por'];
		 $motivo_consul=$_POST['motivo_consul'];
		 $medicode_conf=$_POST['medicode_conf'];
		 $contacto_emer=$_POST['contacto_emer'];
		 $telef_emer=$_POST['telef_emer'];
		 $alergico_m=$_POST['alergico_m'];
		 $cual_am=$_POST['cual_am'];
		 $tipo_m=$_POST['tipo_m'];
		 $cualtipo_m=$_POST['cualtipo_m'];
		 $hepatitis=$_POST['hepatitis'];
		 $tipo_h=$_POST['tipo_h'];
		 $diabetes=$_POST['diabetes'];
		 $tratamiento_d=$_POST['tratamiento_d'];
		 $presion=$_POST['presion'];
		 $presion_m=$_POST['presion_m'];
		 $fuma=$_POST['fuma'];
		 $embarazada=$_POST['embarazada'];
		 $hemorragias=$_POST['hemorragias'];
		 $r_anestecia=$_POST['r_anestecia'];
		 $dolor_d=$_POST['dolor_d'];
		 $olor_b=$_POST['olor_b'];
		 $ruidos_b=$_POST['ruidos_b'];
		 $dolor_m=$_POST['dolor_m'];
		 $satisfecho_s=$_POST['satisfecho_s'];
		 $e_muelas=$_POST['e_muelas'];
		 $b_dental=$_POST['b_dental'];
		 $cuanto_t=$_POST['cuanto_t'];
		 $protesis=$_POST['protesis'];
		 $tipo_p=$_POST['tipo_p'];
		 $aditamento_d=$_POST['aditamento_d'];
		 $cual_adit=$_POST['cual_adit'];
	     $s_encias=$_POST['cuals_encias_am'];
	     $u_profilaxia=$_POST['u_profilaxia'];
	     $frecuencia_d=$_POST['frecuencia_d'];
	     $experiencia_t=$_POST['experiencia_t'];

			$msj=$Fich->editarFicha("numero_h",$numero_h,$numero_h);
			$msj=$Fich->editarFicha("fecha",$fecha,$numero_h);
			$msj=$Fich->editarFicha("doctor_tte",$doctor_tte,$numero_h);
			$msj=$Fich->editarFicha("nombre",$nombre,$numero_h);
			$msj=$Fich->editarFicha("dni",$dni,$numero_h);
			$msj=$Fich->editarFicha("edad",$edad,$numero_h);
			$msj=$Fich->editarFicha("fecha_n",$fecha_n,$numero_h);
			$msj=$Fich->editarFicha("lugar_n",$lugar_n,$numero_h);
			$msj=$Fich->editarFicha("apoderado",$apoderado,$numero_h);
			$msj=$Fich->editarFicha("parentesco",$parentesco,$numero_h);
			$msj=$Fich->editarFicha("lugar_p",$lugar_p,$numero_h);
			$msj=$Fich->editarFicha("direccion",$direccion,$numero_h);
			$msj=$Fich->editarFicha("distrito",$distrito,$numero_h);
			$msj=$Fich->editarFicha("codigo_p",$codigo_p,$numero_h);
			$msj=$Fich->editarFicha("correo",$correo,$numero_h);
			$msj=$Fich->editarFicha("telefono",$telefono,$numero_h);
			$msj=$Fich->editarFicha("celular",$celular,$numero_h);
			$msj=$Fich->editarFicha("centro_toe",$centro_toe,$numero_h);
			$msj=$Fich->editarFicha("telefono_ofi",$telefono_ofi,$numero_h);
			$msj=$Fich->editarFicha("recom_por",$recom_por,$numero_h);
			$msj=$Fich->editarFicha("motivo_consul",$motivo_consul,$numero_h);
			$msj=$Fich->editarFicha("medicode_conf",$medicode_conf,$numero_h);
			$msj=$Fich->editarFicha("contacto_emer",$contacto_emer,$numero_h);
			$msj=$Fich->editarFicha("telef_emer",$telef_emer,$numero_h);
			$msj=$Fich->editarFicha("alergico_m",$alergico_m,$numero_h);
			$msj=$Fich->editarFicha("cual_am",$cual_am,$numero_h);
			$msj=$Fich->editarFicha("tipo_m",$tipo_m,$numero_h);
			$msj=$Fich->editarFicha("cualtipo_m",$cualtipo_m,$numero_h);
			$msj=$Fich->editarFicha("hepatitis",$hepatitis,$numero_h);
			$msj=$Fich->editarFicha("tipo_h",$tipo_h,$numero_h);
			$msj=$Fich->editarFicha("diabetes",$diabetes,$numero_h);
			$msj=$Fich->editarFicha("tratamiento_d",$tratamiento_d,$numero_h);
			$msj=$Fich->editarFicha("presion",$presion,$numero_h);
			$msj=$Fich->editarFicha("presion_m",$presion_m,$numero_h);
			$msj=$Fich->editarFicha("fuma",$fuma,$numero_h);
			$msj=$Fich->editarFicha("embarazada",$embarazada,$numero_h);
			$msj=$Fich->editarFicha("hemorragias",$hemorragias,$numero_h);
			$msj=$Fich->editarFicha("r_anestecia",$r_anestecia,$numero_h);
			$msj=$Fich->editarFicha("dolor_d",$dolor_d,$numero_h);
			$msj=$Fich->editarFicha("olor_b",$olor_b,$numero_h);
			$msj=$Fich->editarFicha("ruidos_b",$ruidos_b,$numero_h);
			$msj=$Fich->editarFicha("dolor_m",$dolor_m,$numero_h);
			$msj=$Fich->editarFicha("satisfecho_s",$satisfecho_s,$numero_h);
			$msj=$Fich->editarFicha("e_muelas",$e_muelas,$numero_h);
			$msj=$Fich->editarFicha("b_dental",$b_dental,$numero_h);
			$msj=$Fich->editarFicha("cuanto_t",$cuanto_t,$numero_h);
			$msj=$Fich->editarFicha("protesis",$protesis,$numero_h);
			$msj=$Fich->editarFicha("tipo_p",$tipo_p,$numero_h);
			$msj=$Fich->editarFicha("aditamento_d",$aditamento_d,$numero_h);
			$msj=$Fich->editarFicha("cual_adit",$cual_adit,$numero_h);
			$msj=$Fich->editarFicha("cuals_encias_am",$cuals_encias_am,$numero_h);
			$msj=$Fich->editarFicha("u_profilaxia",$u_profilaxia,$numero_h);
			$msj=$Fich->editarFicha("frecuencia_d",$frecuencia_d,$numero_h);
			$msj=$Fich->editarFicha("experiencia_t",$experiencia_t,$numero_h);

			

			echo $msj;
			echo"<button class='btn btn-default'><a href='../index.php?accion=Panel'>Volver al Panel</a></button>";
			//echo"<a href='../view/v_panel.php'>ver doctores</a>";

?>
</body>
</html>