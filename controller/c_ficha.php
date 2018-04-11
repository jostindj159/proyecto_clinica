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
require_once '../model/m_ficha.php';

		 $numero_h=$_POST['txtnroh'];
		 $fecha=$_POST['txtFecha'];
		 $doctor_tte=$_POST['txtDr'];
		 $nombre=$_POST['txtNombre'];
		 $dni=$_POST['txtDNI'];
		 $edad=$_POST['txtEdad'];
		 $fecha_n=$_POST['txtFecN'];
		 $lugar_n=$_POST['txtLugN'];
		 $apoderado=$_POST['txtApoderado'];
		 $parentesco=$_POST['txtParentesco'];
		 $lugar_p=$_POST['txtLugP'];
		 $direccion=$_POST['txtDirec'];
		 $distrito=$_POST['txtDistrito'];
		 $codigo_p=$_POST['txtCodP'];
		 $correo=$_POST['txtEmail'];
		 $telefono=$_POST['txtTelef'];
		 $celular=$_POST['txtCel'];
		 $centro_toe=$_POST['txtCentro'];
		 $telefono_ofi=$_POST['txtTelfOf'];
		 $recom_por=$_POST['txtRecomendado'];
		 $motivo_consul=$_POST['txtMotivo'];
		 $medicode_conf=$_POST['txtMedicoc'];
		 $contacto_emer=$_POST['txtContactoe'];
		 $telef_emer=$_POST['txtTelefEmerg'];
		 $alergico_m=$_POST['optradio1'];
		 $cual_am=$_POST['txtCuales1'];
		 $tipo_m=$_POST['optradio2'];
		 $cualtipo_m=$_POST['txtCuales2'];
		 $hepatitis=$_POST['optradio3'];
		 $tipo_h=$_POST['txtTipo'];
		 $diabetes=$_POST['optradio4'];
		 $tratamiento_d=$_POST['txtTratamiento'];
		 $presion=$_POST['optradio5'];
		 $presion_m=$_POST['txtMedicamentos'];
		 $fuma=$_POST['optradio6'];
		 $embarazada=$_POST['optradio7'];
		 $hemorragias=$_POST['optradio8'];
		 $r_anestecia=$_POST['optradio9'];
		 $dolor_d=$_POST['optradio10'];
		 $olor_b=$_POST['optradio11'];
		 $ruidos_b=$_POST['optradio12'];
		 $dolor_m=$_POST['optradio13'];
		 $satisfecho_s=$_POST['optradio14'];
		 $e_muelas=$_POST['optradio15'];
		 $b_dental=$_POST['optradio16'];
		 $cuanto_t=$_POST['txtCuantot'];
		 $protesis=$_POST['optradio17'];
		 $tipo_p=$_POST['txtTipop'];
		 $aditamento_d=$_POST['optradio18'];
		 $cual_adit=$_POST['txtCuala'];
		 $s_encias=$_POST['optradio19'];
		 $u_profilaxia=$_POST['txtUltimap'];
		 $frecuencia_d=$_POST['txtFrecuenciad'];
		 $experiencia_t=$_POST['txtTraumas'];

 
	$Fich = new Fich($numero_h, $fecha, $doctor_tte,$nombre,$dni,$edad,$fecha_n,$lugar_n,$apoderado,$parentesco,
	$lugar_p,$direccion,$distrito,$codigo_p,$correo,$telefono,$celular,$centro_toe,$telefono_ofi,$recom_por,$motivo_consul,
	$medicode_conf,$contacto_emer,$telef_emer,$alergico_m,$cual_am, $tipo_m, $cualtipo_m, $hepatitis, $tipo_h, $diabetes, 
	$tratamiento_d,$presion, $presion_m, $fuma, $embarazada, $hemorragias, $r_anestecia, $dolor_d,
    $olor_b, $ruidos_b, $dolor_m, $satisfecho_s, $e_muelas, $b_dental, $cuanto_t, $protesis, $tipo_p, $aditamento_d, $cual_adit,
    $s_encias, $u_profilaxia, $frecuencia_d, $experiencia_t);

        
	/*	
		$Fich->numero_h = ;
		$Fich->fecha = ;
		$Fich->doctor_tte = ;
		$Fich->nombre = $nombre;
		$Fich->dni = $dni;
		$Fich->edad = $edad;
		$Fich->fecha_n = $fecha_n;
        $Fich->lugar_n = $lugar_n;
		$Fich->apoderado = $apoderado;
		$Fich->parentesco = $parentesco;
		$Fich->lugar_p = $lugar_p;
        $Fich->direccion = $direccion;
		$Fich->distrito = $distrito;
		$Fich->codigo_p = $codigo_p;
		$Fich->correo = $correo;
		$Fich->telefono = $telefono;
		$Fich->celular = $celular;
		$Fich->centro_toe = $centro_toe;
		$Fich->telefono_ofi = $telefono_ofi;
        $Fich->recom_por = $recom_por;
		$Fich->motivo_consul = $motivo_consul;
		$Fich->medicode_conf = $medicode_conf;
        $Fich->contacto_emer = $contacto_emer;
		$Fich->telef_emer = $telef_emer;
		$Fich->alergico_m = $alergico_m;
		$Fich->cual_am = $cual_am;
		$Fich->tipo_m = $tipo_m;
		$Fich->cualtipo_m = $cualtipo_m;
		$Fich->hepatitis = $hepatitis;
		$Fich->tipo_h = $tipo_h;
        $Fich->diabetes = $diabetes;
		$Fich->tratamiento_d = $tratamiento_d;
        $Fich->presion = $presion;
		$Fich->presion_m = $presion_m;
		$Fich->fuma = $fuma;
		$Fich->embarazada = $embarazada;
		$Fich->hemorragias = $hemorragias;
		$Fich->r_anestecia = $r_anestecia;
		$Fich->dolor_d = $dolor_d;
		$Fich->olor_b = $olor_b;
        $Fich->ruidos_b = $ruidos_b;
		$Fich->dolor_m = $dolor_m;
        $Fich->satisfecho_s = $satisfecho_s;
		$Fich->e_muelas = $e_muelas;
		$Fich->b_dental = $b_dental;
		$Fich->cuanto_t = $cuanto_t;
		$Fich->protesis = $protesis;
		$Fich->tipo_p = $tipo_p;
		$Fich->aditamento_d = $aditamento_d;
		$Fich->cual_adit = $cual_adit;
        $Fich->s_encias = $s_encias;
		$Fich->u_profilaxia = $u_profilaxia;
        $Fich->frecuencia_d = $frecuencia_d;
		 $Fich->experiencia_t = $experiencia_t;
	*/
	
if(isset($_POST['btnEnviar'])){
	$Fich->guardar();	
}
function Select(){
    $consultas=new Fich($numero_h, $fecha, $doctor_tte,$nombre,$dni,$edad,$fecha_n,$lugar_n,$apoderado,$parentesco,
	$lugar_p,$direccion,$distrito,$codigo_p,$correo,$telefono,$celular,$centro_toe,$telefono_ofi,$recom_por,$motivo_consul,
	$medicode_conf,$contacto_emer,$telef_emer,$alergico_m,$cual_am, $tipo_m, $cualtipo_m, $hepatitis, $tipo_h, $diabetes, 
	$tratamiento_d,$presion, $presion_m, $fuma, $embarazada, $hemorragias, $r_anestecia, $dolor_d,
    $olor_b, $ruidos_b, $dolor_m, $satisfecho_s, $e_muelas, $b_dental, $cuanto_t, $protesis, $tipo_p, $aditamento_d, $cual_adit,
    $s_encias, $u_profilaxia, $frecuencia_d, $experiencia_t);
    $filas=$consultas ->selectDoctor();
     
    foreach($filas as $fila){
        echo "<option value=".$fila['nombre'].">".$fila['nombre']."</option>";

    }
}

function cargar(){
    $consultas=new Fich($numero_h, $fecha, $doctor_tte,$nombre,$dni,$edad,$fecha_n,$lugar_n,$apoderado,$parentesco,
	$lugar_p,$direccion,$distrito,$codigo_p,$correo,$telefono,$celular,$centro_toe,$telefono_ofi,$recom_por,$motivo_consul,
	$medicode_conf,$contacto_emer,$telef_emer,$alergico_m,$cual_am, $tipo_m, $cualtipo_m, $hepatitis, $tipo_h, $diabetes, 
	$tratamiento_d,$presion, $presion_m, $fuma, $embarazada, $hemorragias, $r_anestecia, $dolor_d,
    $olor_b, $ruidos_b, $dolor_m, $satisfecho_s, $e_muelas, $b_dental, $cuanto_t, $protesis, $tipo_p, $aditamento_d, $cual_adit,
    $s_encias, $u_profilaxia, $frecuencia_d, $experiencia_t);
    $filas=$consultas ->ficha();
    
    echo "<table border='1' class='table table-condensed table-striped'>
            <tr>
			    <th >ID</th>
                <th >Numero de historia</th>
                <th>Fecha </th>
                <th>Doctor.tte</th>
				<th>Nombre</th>
				<th>DNI</th>
				<th>Edad</th>
				<th>Fecha de Nacimiento</th>
				<th>Lugar de Nacimiento</th>
				<th>Apoderado</th>
				<th>Parenteso</th>
                <th>Lugar de Procedencia</th>
                <th>Direccion</th>
                <th>Distrito</th>
				<th>Codigo Postal</th>
				<th>Correo</th>
				<th>Telefono</th>
				<th>Celular</th>
				<th>Centro de trabajo o estudios</th>
				<th>Telefono de oficina</th>
				<th>Recomendado por</th>
                <th>Motivo de Consulta</th>
                <th>Medico de Confianza</th>
                <th>Contacto de Emergencia</th>
				<th>Telefono de Emergencia</th>
				<th>Es alergico a algun medicamento</th>
				<th>Cual medicamento</th>
				<th>Toma algun tipo de medicamento</th>
				<th>Cual medicamento</th>
				<th>Ha padecido Hepatitis</th>
				<th>Tipo de hepatitis</th>
                <th>Sufre de Diabetes</th>
                <th>Esta en tratamiento </th>
                <th>Sufre de Presion Alta</th>
				<th>Que medicamentos toma</th>
				<th>Fuma</th>
				<th>Embarazada</th>
				<th>Hemorragias</th>
				<th>Presenta reacciones a la anastecia dental</th>
				<th>Padece de algun dolor dental o en la cavidad oral</th>
				<th>Siente mal olor o sabor en la boca</th>
                <th>Siente chasquidos o ruidos al masticar o abrir la boca</th>
                <th>Siente dolor en la articulacion mandibular </th>
                <th>Esta satisfecho con su sonrisa</th>
				<th>Le han extraido muelas</th>
				<th>Se ha realizado blanqueamiento dental</th>
				<th>Hace cuanto tiempo</th>
				<th>Usa algun tipo de protesis</th>
				<th>Que tipo</th>
				<th>utiliza otro aditamento para limpiar sus dientes</th>
				<th>Cuales</th>
				<th>Le sangran las encias</th>
				<th>Fecha de ultima profilaxia</th>
				<th>Frecuencia con que va al dentista</th>
				<th>Experiencias dentales traumaticas</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr class='info' >";
		echo "<td >".$fila['id_ficha']."</td>";
        echo "<td>".$fila['numero_h']."</td>";
        echo "<td>".$fila['fecha']."</td>";
        echo "<td>".$fila['doctor_tte']."</td>";
		echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['dni']."</td>";
        echo "<td>".$fila['edad']."</td>";
        echo "<td>".$fila['fecha_n']."</td>";
		echo "<td>".$fila['lugar_n']."</td>";
        echo "<td>".$fila['apoderado']."</td>";
		echo "<td>".$fila['parentesco']."</td>";
        echo "<td>".$fila['lugar_p']."</td>";
        echo "<td>".$fila['direccion']."</td>";
        echo "<td>".$fila['distrito']."</td>";
		echo "<td>".$fila['codigo_p']."</td>";
        echo "<td>".$fila['correo']."</td>";
        echo "<td>".$fila['telefono']."</td>";
        echo "<td>".$fila['celular']."</td>";
		echo "<td>".$fila['centro_toe']."</td>";
        echo "<td>".$fila['telefono_ofi']."</td>";
		echo "<td>".$fila['recom_por']."</td>";
        echo "<td>".$fila['motivo_consul']."</td>";
        echo "<td>".$fila['medicode_conf']."</td>";
        echo "<td>".$fila['contacto_emer']."</td>";
		echo "<td>".$fila['telef_emer']."</td>";
        echo "<td>".$fila['alergico_m']."</td>";
        echo "<td>".$fila['cual_am']."</td>";
        echo "<td>".$fila['tipo_m']."</td>";
		echo "<td>".$fila['cualtipo_m']."</td>";
        echo "<td>".$fila['hepatitis']."</td>";
		echo "<td>".$fila['tipo_h']."</td>";
        echo "<td>".$fila['diabetes']."</td>";
        echo "<td>".$fila['tratamiento_d']."</td>";
        echo "<td>".$fila['presion']."</td>";
		echo "<td>".$fila['presion_m']."</td>";
        echo "<td>".$fila['fuma']."</td>";
        echo "<td>".$fila['embarazada']."</td>";
        echo "<td>".$fila['hemorragias']."</td>";
		echo "<td>".$fila['r_anestecia']."</td>";
        echo "<td>".$fila['dolor_d']."</td>";
		echo "<td>".$fila['olor_b']."</td>";
        echo "<td>".$fila['ruidos_b']."</td>";
        echo "<td>".$fila['dolor_m']."</td>";
        echo "<td>".$fila['satisfecho_s']."</td>";
		echo "<td>".$fila['e_muelas']."</td>";
        echo "<td>".$fila['b_dental']."</td>";
        echo "<td>".$fila['cuanto_t']."</td>";
        echo "<td>".$fila['protesis']."</td>";
		echo "<td>".$fila['tipo_p']."</td>";
        echo "<td>".$fila['aditamento_d']."</td>";
		echo "<td>".$fila['cual_adit']."</td>";
        echo "<td>".$fila['s_encias']."</td>";
        echo "<td>".$fila['u_profilaxia']."</td>";
		echo "<td>".$fila['frecuencia_d']."</td>";
        echo "<td>".$fila['experiencia_t']."</td>";
		
		
		echo "</tr>";
    }
    echo "</table>";
}

function cargar2(){
    $consultas=new Fich($numero_h, $fecha, $doctor_tte,$nombre,$dni,$edad,$fecha_n,$lugar_n,$apoderado,$parentesco,
	$lugar_p,$direccion,$distrito,$codigo_p,$correo,$telefono,$celular,$centro_toe,$telefono_ofi,$recom_por,$motivo_consul,
	$medicode_conf,$contacto_emer,$telef_emer,$alergico_m,$cual_am, $tipo_m, $cualtipo_m, $hepatitis, $tipo_h, $diabetes, 
	$tratamiento_d,$presion, $presion_m, $fuma, $embarazada, $hemorragias, $r_anestecia, $dolor_d,
    $olor_b, $ruidos_b, $dolor_m, $satisfecho_s, $e_muelas, $b_dental, $cuanto_t, $protesis, $tipo_p, $aditamento_d, $cual_adit,
    $s_encias, $u_profilaxia, $frecuencia_d, $experiencia_t);
    $filas=$consultas ->fichap();
    
    echo "<table border='1' class='table'>
            <tr>
                <th>Numero Historial</th>
                <th>Nombres y Apellidos </th>
				 <th>DNI </th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr >";
        echo "<td>".$fila['numero_h']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['dni']."</td>";
		echo "<td><button type='submit' class='btn btn-warning' id='btnVer' name='btnVer'><a  href='../controller/c_modificarf.php?numero_h=".$fila['numero_h']."'>Ver</button></a></td>";

		echo "</tr>";
    }
    echo "</table>";
}
//
function MaxnumHistorial(){
    $consultas=new Fich($numero_h, $fecha, $doctor_tte,$nombre,$dni,$edad,$fecha_n,$lugar_n,$apoderado,$parentesco,
	$lugar_p,$direccion,$distrito,$codigo_p,$correo,$telefono,$celular,$centro_toe,$telefono_ofi,$recom_por,$motivo_consul,
	$medicode_conf,$contacto_emer,$telef_emer,$alergico_m,$cual_am, $tipo_m, $cualtipo_m, $hepatitis, $tipo_h, $diabetes, 
	$tratamiento_d,$presion, $presion_m, $fuma, $embarazada, $hemorragias, $r_anestecia, $dolor_d,
    $olor_b, $ruidos_b, $dolor_m, $satisfecho_s, $e_muelas, $b_dental, $cuanto_t, $protesis, $tipo_p, $aditamento_d, $cual_adit,
    $s_encias, $u_profilaxia, $frecuencia_d, $experiencia_t);
    $filas=$consultas ->NumeroHistorial();
}
?>
</body>
</html>





