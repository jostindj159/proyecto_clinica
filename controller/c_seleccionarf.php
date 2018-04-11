<?php 
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
   <link  rel="stylesheet" type="text/css" href="../recursos/css/estilos.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/ocultar2.js"></script>
  	<style type="text/css">
		#ajusto{ text-align: right; }
	</style>
</head>
<body>
<?php 
error_reporting(0);
function c_seleccionarf(){
	if(isset($_GET['numero_h'])){
	$Fich = new Fich($numero_h, $fecha, $doctor_tte,$nombre,$dni,$edad,$fecha_n,$lugar_n,$apoderado,$parentesco,
	$lugar_p,$direccion,$distrito,$codigo_p,$correo,$telefono,$celular,$centro_toe,$telefono_ofi,$recom_por,$motivo_consul,
	$medicode_conf,$contacto_emer,$telef_emer,$alergico_m,$cual_am, $tipo_m, $cualtipo_m, $hepatitis, $tipo_h, $diabetes, 
	$tratamiento_d,$presion, $presion_m, $fuma, $embarazada, $hemorragias, $r_anestecia, $dolor_d,
    $olor_b, $ruidos_b, $dolor_m, $satisfecho_s, $e_muelas, $b_dental, $cuanto_t, $protesis, $tipo_p, $aditamento_d, $cual_adit,
    $s_encias, $u_profilaxia, $frecuencia_d, $experiencia_t);
	$numero_h=$_GET['numero_h'];
	//$nombre = $_GET['nombre'];
	//$dni = $_GET['dni'];
	//$fono = $_GET['fono'];
		$filas=$Fich->cargarFicha($numero_h);
		foreach($filas as $fila){?>

		<div id="col-sm-4" class="fondo-radial">
		<form action="../controller/c_modificarFicha.php" method="post"  >
		<center>
		<div class="panel panel-danger">
			<div class="panel-heading">Nro de Historia Clinica: </div>
				<div class="panel-body">
				<div class="col-xs-3"></div>
				<div class="col-xs-6">
					<input type="text" class="form-control"   name="numero_h" value="<?php echo $fila['numero_h']?>"><br /><br />
				</div>
		<div class="col-xs-3"></div>
		</div>
		</div>

		<div class="col-xs-6">
		<label>Fecha:</label>
		<input type="date" class="form-control" id="txtFecha" name="fecha" value="<?php echo $fila['fecha']?>">
		</div>

		<div class="col-xs-6">
		<label>DR.TTE:   </label>
		<input type="text" class="form-control" id="txtDr" name="doctor_tte" value="<?php echo $fila['doctor_tte']?>" ><br /><br /><br /><br />
		</div>

		<div class="col-xs-8">
		<label>Nombre y Apellidos:</label>
		<input type="text" class="form-control" id="txtNombre" name="nombre"  value="<?php echo $fila['nombre']?>"><br /><br />
		</div>
		<div class="col-xs-4">
		<label>DNI/CE/Passport:   </label>
		<input type="text" class="form-control" id="txtDNI" name="dni"  value="<?php echo $fila['dni']?>"><br /><br />
		</div>
		<div class="col-xs-3">
		<label>Edad:   </label>
		<input type="text" class="form-control" id="txtEdad" name="edad" value="<?php echo $fila['edad']?>" ><br /><br />
		</div>
		<div class="col-xs-3">
		<label>Fecha de Nacimiento:   </label>
		<input type="date" class="form-control" id="txtFecN" name="fecha_n"  value="<?php echo $fila['fecha_n']?>"><br /><br />
		</div>
		<div class="col-xs-6">
		<label>Lugar de Nacimiento:   </label>
		<input type="text" class="form-control" id="txtLugN" name="lugar_n"  value="<?php echo $fila['lugar_n']?>"><br /><br />
		</div>
		<div class="col-xs-8">
		<label>Apoderado:   </label>
		<input type="text" class="form-control" id="txtApoderado" name="apoderado"  value="<?php echo $fila['apoderado']?>"><br /><br />
		</div>
		<div class="col-xs-4">
		<label>Parentesco:   </label>
		<input type="text" class="form-control" id="txtParentesco" name="parentesco"  value="<?php echo $fila['parentesco']?>"><br /><br />
		</div>
		<div class="col-xs-12" >
		<label>Lugar de procedencia:   </label>
		<input type="text" class="form-control" id="txtLugP" name="lugar_p"  value="<?php echo $fila['lugar_p']?>"><br /><br />
		</div>
		<div class="col-xs-12" >
		<label>Direccion:   </label>
		<input type="text" class="form-control" id="txtDirec" name="direccion"  value="<?php echo $fila['direccion']?>"><br /><br />
		</div>
		<div class="col-xs-6">
		<label>Distrito:   </label>
		<input type="text" class="form-control" id="txtDistrito" name="distrito" value="<?php echo $fila['distrito']?>" ><br /><br />
		</div>
		<div class="col-xs-6">
		<label>Codigo Postal:   </label>
		<input type="text" class="form-control" id="txtCodP" name="codigo_p"  value="<?php echo $fila['codigo_p']?>"><br /><br />
		</div>
		<div class="col-xs-6">
		<label>E-mail:   </label>
		<input type="text" class="form-control" id="txtEmail" name="correo" value="<?php echo $fila['correo']?>" ><br /><br />
		</div>
		<div class="col-xs-3">
		<label>Telefono:   </label>
		<input type="text" class="form-control" id="txtTelef" name="telefono" value="<?php echo $fila['telefono']?>" ><br /><br />
		</div>
		<div class="col-xs-3">
		<label>Celular:   </label>
		<input type="text" class="form-control" id="txtCel" name="celular"  value="<?php echo $fila['celular']?>"><br /><br />
		</div>
		<div class="col-xs-9">
		<label>Centro de trabajo o Estudios:   </label>
		<input type="text" class="form-control" id="txtCentro" name="centro_toe"  value="<?php echo $fila['centro_toe']?>"><br /><br />
		</div>
		<div class="col-xs-3" >
		<label>Telf.Ofic:   </label>
		<input type="text" class="form-control" id="txtTelfOf" name="telefono_ofi"  value="<?php echo $fila['telefono_ofi']?>"><br /><br />
		</div>
		<div class="col-xs-12" >
		<label>Recomendado por:   </label>
		<input type="text" class="form-control" id="txtRecomendado" name="recom_por" value="<?php echo $fila['recom_por']?>" ><br /><br />
		</div>

		<div class="col-xs-12" >
		<label>Motivo de Consulta:   </label>
		<input type="text" id="txtMotivo" class="form-control" name="motivo_consul" value="<?php echo $fila['motivo_consul']?>" ><br /><br />
		</div>

		<!-----------------CASOS DE EMERGENCIA------------------------------------------------------------>

		<div class="panel panel-warning">
		<div class="panel-heading">PARA CASOS DE EMEGENCIA DAR LOS SIGUIENTES DATOS:</div>
		<div class="panel-body">
		<div class="col-xs-12">
		<label>Medico de Confianza:   </label>
		<input type="text" class="form-control" id="txtMedicoc" name="medicode_conf"  value="<?php echo $fila['medicode_conf']?>"><br /><br />
		</div>
		<div class="col-xs-9">
		<label>En caso de emergencia contactar:   </label>
		<input type="text" class="form-control" id="txtContactoe" name="contacto_emer" value="<?php echo $fila['contacto_emer']?>" ><br /><br />
		</div>
		<div class="col-xs-3">
		<label>Telefono:   </label>
		<input type="text" class="form-control" id="txtTelefEmerg" name="telef_emer"  value="<?php echo $fila['telef_emer']?>" ><br /><br />
		</div>
		</div>
		</div>
		<!-----------------HISTORIA CLINICA------------------------------------------------------------>
		<div class="panel panel-success">
		<div class="panel-heading">HISTORIA CLINICA:</div>
		<div class="panel-body">

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Es alergico a algun medicamento:</label>
		<?php 
		$rpta=$fila['alergico_m'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar1" name="alergico_m" <?php echo $check_si; ?> value="SI"  >SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="alergico_m" <?php echo $check_no; ?> value="NO"  >NO</label>
		<div style="display:none;" id="target1">
		<label>Cuales:   </label>
		<input  type="text"  class="form-control" id="txtCuales1"  name="cual_am" value="<?php echo $fila['cual_am']; ?>"><br /><br />
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Toma algun tipo de medicamento:   </label>
		<?php 
		$rpta=$fila['tipo_m'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar2" name="tipo_m"<?php echo $check_si; ?> value="SI" >SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar2" name="tipo_m"<?php echo $check_no; ?> value="NO" >NO</label>
		<div style="display:none;" id="target2">
		<label>Cuales:   </label>
		<input type="text" class="form-control" id="txtCuales2" name="cualtipo_m" value="<?php echo $fila['cualtipo_m']; ?>"><br /><br />
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Ha padecido Hepatitis:   </label>
		<?php 
		$rpta=$fila['hepatitis'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar3" name="hepatitis"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar3" name="hepatitis"<?php echo $check_no; ?> value="NO">NO</label>
		<div style="display:none;" id="target3">
		<label>Tipo:   </label>
		<input type="text" class="form-control" id="txtTipo" name="tipo_h" value="<?php echo $fila['tipo_h']; ?>" ><br /><br />
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Sufre de Diabetes:   </label>
		<?php 
		$rpta=$fila['diabetes'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar4" name="diabetes"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar4" name="diabetes"<?php echo $check_no; ?> value="NO">NO</label>
		<div style="display:none;" id="target4">
		<label>Esta en tratamiento:   </label>
		<input type="text" class="form-control" id="txtTratamiento" name="tratamiento_d" value="<?php echo $fila['tratamiento_d']; ?>"><br /><br />
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Sufre de Presion Alta:   </label>
		<?php 
		$rpta=$fila['presion'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar5" name="presion"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar5" name="presion"<?php echo $check_no; ?> value="NO">NO</label>
		<div style="display:none;" id="target5">
		<label>Que medicamentos toma:   </label style="display:none;">
		<input type="text" class="form-control" id="txtMedicamentos" name="presion_m" value="<?php echo $fila['presion_m']; ?>"><br /><br />
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Fuma:   </label>
		<?php 
		$rpta=$fila['fuma'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar6" name="fuma"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar6" name="fuma"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Esta usted embarazada:   </label>
		<?php 
		$rpta=$fila['embarazada'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar7" name="embarazada"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" name="embarazada"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Padece de hemorragias:   </label>
		<?php 
		$rpta=$fila['hemorragias'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar8" name="hemorragias"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" name="hemorragias"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>
		</div>
		</div>

		<!-----------------ANTENCEDENTES ODONTOLOGICOS------------------------------------------------------------>
		<div class="panel panel-primary">
		<div class="panel-heading">ANTECEDENTES ODONTOLOGICOS:</div>
		<div class="panel-body">
		<div class="col-xs-12">

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Presenta reacciones a la anastecia dental:   </label>
		<?php 
		$rpta=$fila['r_anestecia'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar9" name="r_anestecia"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar9" name="r_anestecia"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Padece de algun dolor dental o en la cavidad oral:   </label>
		<?php 
		$rpta=$fila['dolor_d'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar10" name="dolor_d"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" name="dolor_d"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Siente mal olor o sabor en la boca:</label>
		<?php 
		$rpta=$fila['olor_b'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar11" name="olor_b"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" name="olor_b"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Siente chasquidos o ruidos al masticar o abrir la boca:   </label>
		<?php 
		$rpta=$fila['ruidos_b'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar12" name="ruidos_b"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" name="ruidos_b"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Siente dolor en la articulacion mandibular:   </label>
		<?php 
		$rpta=$fila['dolor_m'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar13" name="dolor_m"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar13" name="dolor_m"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Esta satisfecho con su sonrisa:   </label>
		<?php 
		$rpta=$fila['satisfecho_s'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar14" name="satisfecho_s"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar14" name="satisfecho_s"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Le han extraido muelas:   </label>
		<?php 
		$rpta=$fila['e_muelas'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar15" name="e_muelas"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar15" name="e_muelas"<?php echo $check_no; ?> value="NO">NO</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Se ha realizado blanqueamiento dental:   </label>
		<?php 
		$rpta=$fila['b_dental'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar16" name="b_dental"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar16" name="b_dental"<?php echo $check_no; ?> value="NO">NO</label>
		<div style="display:none;" id="target6">
		<label>Hace cuanto tiempo:   </label style="display:none;">
		<input type="text" class="form-control" id="txtCuantot" name="cuanto_t" value="<?php echo $fila['cuanto_t']; ?>"><br /><br />
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Usa algun tipo de protesis:   </label>
		<?php 
		$rpta=$fila['protesis'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar17" name="protesis"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar17" name="protesis"<?php echo $check_no; ?> value="NO">NO</label>
		<div style="display:none;" id="target7">
		<label>Que tipo:   </label style="display:none;">
		<input type="text" class="form-control" id="txtTipop" name="tipo_p" value="<?php echo $fila['tipo_p']; ?>"><br /><br />
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>A parte del cepillo, utiliza otro aditamento para limpiar sus dientes:   </label>
		<?php 
		$rpta=$fila['aditamento_d'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar18" name="aditamento_d"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar18" name="aditamento_d"<?php echo $check_no; ?> value="NO">NO</label>
		<div style="display:none;" id="target8">
		<label>Cuales:   </label style="display:none;">
		<input type="text" class="form-control" id="txtCuala" name="cual_adit" value="<?php echo $fila['cual_adit']; ?>" ><br /><br />
		</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
		<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
		<label>Le sangran las encias:   </label>
		<?php 
		$rpta=$fila['s_encias'];
			if ($rpta == "SI"){ 
				$check_si = "checked"; 
				$check_no = ""; 
			}else{
				$check_si = ""; 
				$check_no = "checked"; 
			}
		?>
		<label class="radio-inline"><input type="radio" id="mostrar19" name="s_encias"<?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar19" name="s_encias"<?php echo $check_no; ?> value="NO">NO</label>
		<div style="display:none;" id="target9">
		<label>Fecha de ultima profilaxia:   </label style="display:none;">
		<input type="text" class="form-control" id="txtUltimap" name="u_profilaxia" value="<?php echo $fila['u_profilaxia']; ?>"><br /><br />
		</div><br /><br />
		</div>
	</div>

		<div>
		<label>Frecuencia con que va al dentista:   </label>
		<input type="text" class="form-control" id="txtFrecuenciad" name="frecuencia_d" value="<?php echo $fila['frecuencia_d']; ?>" ><br /><br />
		</div>
		<div>
		<label>Experiencias dentales traumaticas:   </label>
		<input type="text" class="form-control" id="txtTraumas" name="experiencia_t" value="<?php echo $fila['experiencia_t']; ?>"><br /><br />
		</div>

		</div>

		</div>
		</div>

		<!--<button type="submit" class="btn btn-primary btn-lg" ><em class="fa fa-user-plus"></em>Guardar Cambios</button>

		<button  type="submit"  class="btn  btn-warning btn-lg" id="btnCancelar" name="btnCancelar"><em class="fa fa-user-plus"><a href="./v_ficha.php">Cancelar</a></em></button>-->
		</form>
		</div>

<?php
		}
	}
}

?>
</body>
</html>