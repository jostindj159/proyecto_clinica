<?php

class Fich
{
    var $numero_h;
    var $fecha;
    var $doctor_tte;
    var $nombre;
    var $dni;
    var $edad;
    var $fecha_n;
    var $lugar_n;
    var $apoderado;
    var $parentesco;
    var $lugar_p;
    var $direccion;
    var $distrito;
    var $codigo_p;
    var $correo;
    var $telefono;
    var $celular;
    var $centro_toe;
    var $telefono_ofi;
    var $recom_por;
    var $motivo_consul;
    var $medicode_conf;
    var $contacto_emer;
    var $telef_emer;
    var $alergico_m;
    var $cual_am;
    var $tipo_m;
    var $cualtipo_m;
    var $hepatitis;
    var $tipo_h;
    var $diabetes;
    var $tratamiento_d;
    var $presion;
    var $presion_m;
    var $fuma;
    var $embarazada;
    var $hemorragias;
    var $r_anestecia;
    var $dolor_d;
    var $olor_b;
    var $ruidos_b;
    var $dolor_m;
    var $satisfecho_s;
    var $e_muelas;
    var $b_dental;
    var $cuanto_t;
    var $protesis;
    var $tipo_p;
    var $aditamento_d;
    var $cual_adit;
    var $s_encias;
    var $u_profilaxia;
    var $frecuencia_d;
    var $experiencia_t;


    public function __construct ($numero_h, $fecha, $doctor_tte, $nombre, $dni, $edad, $fecha_n, $lugar_n, $apoderado, $parentesco, $lugar_p, $direccion,
                                 $distrito, $codigo_p, $correo, $telefono, $celular, $centro_toe, $telefono_ofi, $recom_por, $motivo_consul, $medicode_conf,
                                 $contacto_emer, $telef_emer, $alergico_m,$cual_am, $tipo_m, $cualtipo_m, $hepatitis, $tipo_h, $diabetes, $tratamiento_d,
                                 $presion, $presion_m, $fuma, $embarazada, $hemorragias, $r_anestecia, $dolor_d,
                                 $olor_b, $ruidos_b, $dolor_m, $satisfecho_s, $e_muelas, $b_dental, $cuanto_t, $protesis, $tipo_p, $aditamento_d, $cual_adit,
                                 $s_encias, $u_profilaxia, $frecuencia_d, $experiencia_t)
    {
        $this->numero_h = $numero_h;
        $this->fecha = $fecha;
        $this->doctor_tte = $doctor_tte;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->edad = $edad;
        $this->fecha_n = $fecha_n;
        $this->lugar_n = $lugar_n;
        $this->apoderado = $apoderado;
        $this->parentesco = $parentesco;
        $this->lugar_p = $lugar_p;
        $this->direccion = $direccion;
        $this->distrito = $distrito;
        $this->codigo_p = $codigo_p;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->celular = $celular;
        $this->centro_toe = $centro_toe;
        $this->telefono_ofi = $telefono_ofi;
        $this->recom_por = $recom_por;
        $this->motivo_consul = $motivo_consul;
        $this->medicode_conf = $medicode_conf;
        $this->contacto_emer = $contacto_emer;
        $this->telef_emer = $telef_emer;
        $this->alergico_m = $alergico_m;
        $this->cual_am = $cual_am;
        $this->tipo_m = $tipo_m;
        $this->cualtipo_m = $cualtipo_m;
        $this->hepatitis = $hepatitis;
        $this->tipo_h = $tipo_h;
        $this->diabetes = $diabetes;
        $this->tratamiento_d = $tratamiento_d;
        $this->presion = $presion;
        $this->presion_m = $presion_m;
        $this->fuma = $fuma;
        $this->embarazada = $embarazada;
        $this->hemorragias = $hemorragias;
        $this->r_anestecia = $r_anestecia;
        $this->dolor_d = $dolor_d;
        $this->olor_b = $olor_b;
        $this->ruidos_b = $ruidos_b;
        $this->dolor_m = $dolor_m;
        $this->satisfecho_s = $satisfecho_s;
        $this->e_muelas = $e_muelas;
        $this->b_dental = $b_dental;
        $this->cuanto_t = $cuanto_t;
        $this->protesis = $protesis;
        $this->tipo_p = $tipo_p;
        $this->aditamento_d = $aditamento_d;
        $this->cual_adit = $cual_adit;
        $this->s_encias = $s_encias;
        $this->u_profilaxia = $u_profilaxia;
        $this->frecuencia_d = $frecuencia_d;
        $this->experiencia_t = $experiencia_t;
    }

    function guardar ()
    {
        try {
            include('../model/conexion.php');
            $stmt = $dbh->prepare("INSERT INTO ficha (numero_h,fecha,doctor_tte,nombre,dni,
                                  edad,fecha_n,lugar_n,apoderado,parentesco,
                                  lugar_p,direccion,distrito,codigo_p,correo,
                                  telefono,celular,centro_toe,telefono_ofi,recom_por,
                                  motivo_consul,medicode_conf,contacto_emer,telef_emer,alergico_m,
								  cual_am,tipo_m,cualtipo_m,hepatitis,tipo_h,
                                  diabetes,tratamiento_d,presion,presion_m,fuma,
                                  embarazada,hemorragias,r_anestecia,dolor_d,olor_b,
                                  ruidos_b,dolor_m,satisfecho_s,e_muelas,b_dental,
                                  cuanto_t,protesis,tipo_p,aditamento_d,cual_adit,
                                  s_encias,u_profilaxia,frecuencia_d,experiencia_t) 
										VALUES (:numero_h,:fecha,:doctor_tte,:nombre,:dni,
                                        :edad,:fecha_n,:lugar_n,:apoderado,:parentesco,:lugar_p,:direccion,
										:distrito,:codigo_p,:correo,:telefono,:celular,
                                        :centro_toe,:telefono_ofi,:recom_por,:motivo_consul,:medicode_conf,
                                        :contacto_emer,:telef_emer,:alergico_m,:cual_am,:tipo_m,
                                        :cualtipo_m,:hepatitis,:tipo_h,:diabetes,:tratamiento_d,
                                        :presion,:presion_m,:fuma,:embarazada,:hemorragias,
                                        :r_anestecia,:dolor_d,:olor_b,:ruidos_b,:dolor_m,
                                        :satisfecho_s,:e_muelas,:b_dental,:cuanto_t,:protesis,
                                        :tipo_p,:aditamento_d,:cual_adit,:s_encias,:u_profilaxia,
                                        :frecuencia_d,:experiencia_t)");
            $stmt->bindParam(':numero_h', $this->numero_h);
            $stmt->bindParam(':fecha', $this->fecha);
            $stmt->bindParam(':doctor_tte', $this->doctor_tte);
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':dni', $this->dni);
            $stmt->bindParam(':edad', $this->edad);
            $stmt->bindParam(':fecha_n', $this->fecha_n);
            $stmt->bindParam(':lugar_n', $this->lugar_n);
            $stmt->bindParam(':apoderado', $this->apoderado);
            $stmt->bindParam(':parentesco', $this->parentesco);
            $stmt->bindParam(':lugar_p', $this->lugar_p);
            $stmt->bindParam(':direccion', $this->direccion);
            $stmt->bindParam(':distrito', $this->distrito);
            $stmt->bindParam(':codigo_p', $this->codigo_p);
            $stmt->bindParam(':correo', $this->correo);
            $stmt->bindParam(':telefono', $this->telefono);
            $stmt->bindParam(':celular', $this->celular);
            $stmt->bindParam(':centro_toe', $this->centro_toe);
            $stmt->bindParam(':telefono_ofi', $this->telefono_ofi);
            $stmt->bindParam(':recom_por', $this->recom_por);
            $stmt->bindParam(':motivo_consul', $this->motivo_consul);
            $stmt->bindParam(':medicode_conf', $this->medicode_conf);
            $stmt->bindParam(':contacto_emer', $this->contacto_emer);
            $stmt->bindParam(':telef_emer', $this->telef_emer);
            $stmt->bindParam(':alergico_m', $this->alergico_m);
            $stmt->bindParam(':cual_am', $this->cual_am);
            $stmt->bindParam(':tipo_m', $this->tipo_m);
            $stmt->bindParam(':cualtipo_m', $this->cualtipo_m);
            $stmt->bindParam(':hepatitis', $this->hepatitis);
            $stmt->bindParam(':tipo_h', $this->tipo_h);
            $stmt->bindParam(':diabetes', $this->diabetes);
            $stmt->bindParam(':tratamiento_d', $this->tratamiento_d);
            $stmt->bindParam(':presion', $this->presion);
            $stmt->bindParam(':presion_m', $this->presion_m);
            $stmt->bindParam(':fuma', $this->fuma);
            $stmt->bindParam(':embarazada', $this->embarazada);
            $stmt->bindParam(':hemorragias', $this->hemorragias);
            $stmt->bindParam(':r_anestecia', $this->r_anestecia);
            $stmt->bindParam(':dolor_d', $this->dolor_d);
            $stmt->bindParam(':olor_b', $this->olor_b);
            $stmt->bindParam(':ruidos_b', $this->ruidos_b);
            $stmt->bindParam(':dolor_m', $this->dolor_m);
            $stmt->bindParam(':satisfecho_s', $this->satisfecho_s);
            $stmt->bindParam(':e_muelas', $this->e_muelas);
            $stmt->bindParam(':b_dental', $this->b_dental);
            $stmt->bindParam(':cuanto_t', $this->cuanto_t);
            $stmt->bindParam(':protesis', $this->protesis);
            $stmt->bindParam(':tipo_p', $this->tipo_p);
            $stmt->bindParam(':aditamento_d', $this->aditamento_d);
            $stmt->bindParam(':cual_adit', $this->cual_adit);
            $stmt->bindParam(':s_encias', $this->s_encias);
            $stmt->bindParam(':u_profilaxia', $this->u_profilaxia);
            $stmt->bindParam(':frecuencia_d', $this->frecuencia_d);
            $stmt->bindParam(':experiencia_t', $this->experiencia_t);
            if ($stmt->execute()) {
                echo "<h2>Ficha registrada!</h2>";
                echo "<button type='submit' class='btn btn-default' id='btnGuardar' name='btnGuardar'><a href='../index.php?accion=Panel'>Volver</a></button>";
            }
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }

    }

    public function selectDoctor (){
        try {
            include('../model/conexion.php');
            $rows = null;
            $stmt = $dbh->prepare("SELECT nombre FROM doctores");
            $stmt->execute();
            while ($result = $stmt->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
    
		public function ficha(){
			try{
				include('../model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT * FROM ficha");
				$stmt ->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	}

	public function fichap(){
			try{
				include('../model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT id_ficha,numero_h,nombre,dni FROM ficha");
				$stmt ->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	}
    
    public function cargarFicha($id){
        try{
        include('../model/conexion.php');   
                $rows=null;
                $stmt = $dbh->prepare("SELECT * FROM ficha where numero_h=$id ");
                $stmt->bindParam(':numero_h',$this->id);    
                $stmt ->execute();
                while($result=$stmt->fetch()){
                    $rows[]=$result;
                }
                return $rows;
        }catch (PDOException $e){
            die("Error: ".$e->getMessage());
        }
    }
    //
        public function editarFicha($numero_h){
        try{
                include('../model/conexion.php');
                $stmt = $dbh->prepare("UPDATE ficha SET
                numero_h=:numero_h,fecha=:fecha,doctor_tte=:doctor_tte,nombre=:nombre,dni=:dni,edad=:edad,
                fecha_n=:fecha_n,lugar_n=:lugar_n,apoderado=:apoderado,parentesco=:parentesco,lugar_p=:lugar_p,
                direccion=:direccion,distrito=:distrito,codigo_p=:codigo_p,correo=:correo,telefono=:telefono,celular=:celular,
                centro_toe=:centro_toe,telefono_ofi=:telefono_ofi,recom_por=:recom_por,motivo_consul=:motivo_consul,
                medicode_conf=:medicode_conf,contacto_emer=:contacto_emer,telef_emer=:telef_emer,alergico_m=:alergico_m,
                cual_am=:cual_am,tipo_m=:tipo_m,cualtipo_m=:cualtipo_m,hepatitis=:hepatitis,tipo_h=:tipo_h,   
                diabetes=:diabetes,tratamiento_d=:tratamiento_d,presion=:presion,presion_m=:presion_m,fuma=:fuma,
                embarazada=:embarazada,hemorragias=:hemorragias,r_anestecia=:r_anestecia,dolor_d=:dolor_d,olor_b=:olor_b,
                ruidos_b=:ruidos_b,dolor_m=:dolor_m,satisfecho_s=:satisfecho_s,e_muelas=:e_muelas,b_dental=:b_dental,
                cuanto_t=:cuanto_t,protesis=:protesis,tipo_p=:tipo_p,aditamento_d=:aditamento_d,cual_adit=:cual_adit,
                s_encias=:s_encias,u_profilaxia=:u_profilaxia,frecuencia_d=:frecuencia_d,experiencia_t=:experiencia_t
                where numero_h=:numero_h");
  
                $stmt->bindParam(':numero_h', $_POST['numero_h'], PDO::PARAM_STR);
                $stmt->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);  
                $stmt->bindParam(':doctor_tte', $_POST['doctor_tte'], PDO::PARAM_STR);  
                $stmt->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR);
                $stmt->bindParam(':dni', $_POST['dni'], PDO::PARAM_STR); 
                $stmt->bindParam(':edad', $_POST['edad'], PDO::PARAM_STR); 
                $stmt->bindParam(':fecha_n', $_POST['fecha_n'], PDO::PARAM_STR); 
                $stmt->bindParam(':lugar_n', $_POST['lugar_n'], PDO::PARAM_STR); 
                $stmt->bindParam(':apoderado', $_POST['apoderado'], PDO::PARAM_STR); 
                $stmt->bindParam(':parentesco', $_POST['parentesco'], PDO::PARAM_STR); 
                $stmt->bindParam(':lugar_p', $_POST['lugar_p'], PDO::PARAM_STR); 
                $stmt->bindParam(':direccion', $_POST['direccion'], PDO::PARAM_STR); 
                $stmt->bindParam(':distrito', $_POST['distrito'], PDO::PARAM_STR); 
                $stmt->bindParam(':codigo_p', $_POST['codigo_p'], PDO::PARAM_STR); 
                $stmt->bindParam(':correo', $_POST['correo'], PDO::PARAM_STR);  
                $stmt->bindParam(':telefono', $_POST['telefono'], PDO::PARAM_STR);
                $stmt->bindParam(':celular', $_POST['celular'], PDO::PARAM_STR); 
                $stmt->bindParam(':centro_toe', $_POST['centro_toe'], PDO::PARAM_STR); 
                $stmt->bindParam(':telefono_ofi', $_POST['telefono_ofi'], PDO::PARAM_STR); 
                $stmt->bindParam(':recom_por', $_POST['recom_por'], PDO::PARAM_STR); 
                $stmt->bindParam(':motivo_consul', $_POST['motivo_consul'], PDO::PARAM_STR); 
                $stmt->bindParam(':medicode_conf', $_POST['medicode_conf'], PDO::PARAM_STR); 
                $stmt->bindParam(':contacto_emer', $_POST['contacto_emer'], PDO::PARAM_STR); 
                $stmt->bindParam(':telef_emer', $_POST['telef_emer'], PDO::PARAM_STR); 
                $stmt->bindParam(':alergico_m', $_POST['alergico_m'], PDO::PARAM_STR); 
                $stmt->bindParam(':cual_am', $_POST['cual_am'], PDO::PARAM_STR); 
                $stmt->bindParam(':tipo_m', $_POST['tipo_m'], PDO::PARAM_STR); 
                $stmt->bindParam(':cualtipo_m', $_POST['cualtipo_m'], PDO::PARAM_STR); 
                $stmt->bindParam(':hepatitis', $_POST['hepatitis'], PDO::PARAM_STR);
                $stmt->bindParam(':tipo_h', $_POST['tipo_h'], PDO::PARAM_STR);
                $stmt->bindParam(':diabetes', $_POST['diabetes'], PDO::PARAM_STR);                  
                $stmt->bindParam(':tratamiento_d', $_POST['tratamiento_d'], PDO::PARAM_STR);
                $stmt->bindParam(':presion', $_POST['presion'], PDO::PARAM_STR);
                $stmt->bindParam(':presion_m', $_POST['presion_m'], PDO::PARAM_STR);
                $stmt->bindParam(':fuma', $_POST['fuma'], PDO::PARAM_STR);
                $stmt->bindParam(':embarazada', $_POST['embarazada'], PDO::PARAM_STR);
                $stmt->bindParam(':hemorragias', $_POST['hemorragias'], PDO::PARAM_STR);
                $stmt->bindParam(':r_anestecia', $_POST['r_anestecia'], PDO::PARAM_STR);
                $stmt->bindParam(':dolor_d', $_POST['dolor_d'], PDO::PARAM_STR); 
                $stmt->bindParam(':olor_b', $_POST['olor_b'], PDO::PARAM_STR); 
                $stmt->bindParam(':ruidos_b', $_POST['ruidos_b'], PDO::PARAM_STR);
                $stmt->bindParam(':dolor_m', $_POST['tipo_h'], PDO::PARAM_STR);
                $stmt->bindParam(':satisfecho_s', $_POST['satisfecho_s'], PDO::PARAM_STR);                  
                $stmt->bindParam(':e_muelas', $_POST['e_muelas'], PDO::PARAM_STR);
                $stmt->bindParam(':b_dental', $_POST['b_dental'], PDO::PARAM_STR);
                $stmt->bindParam(':cuanto_t', $_POST['cuanto_t'], PDO::PARAM_STR);
                $stmt->bindParam(':protesis', $_POST['protesis'], PDO::PARAM_STR);
                $stmt->bindParam(':tipo_p', $_POST['tipo_p'], PDO::PARAM_STR);
                $stmt->bindParam(':aditamento_d', $_POST['aditamento_d'], PDO::PARAM_STR);
                $stmt->bindParam(':cual_adit', $_POST['cual_adit'], PDO::PARAM_STR);
                $stmt->bindParam(':s_encias', $_POST['s_encias'], PDO::PARAM_STR);
                $stmt->bindParam(':u_profilaxia', $_POST['u_profilaxia'], PDO::PARAM_STR);
                $stmt->bindParam(':frecuencia_d', $_POST['frecuencia_d'], PDO::PARAM_STR);
                $stmt->bindParam(':experiencia_t', $_POST['experiencia_t'], PDO::PARAM_STR);
                if(!$stmt){
                return "error al editar el doctor";
                //echo "<a href='./view/v_panel.php'>Volver</a>";
                }else{
                    $stmt->execute();
                    return "<h2>Ficha editada exitosamente!</h2>";
                }
        }catch (PDOException $e){
            die("Error: ".$e->getMessage());
        }
    }
    //
    public function NumeroHistorial(){
            try{
                include('../model/conexion.php');   
                $stmt = $dbh->prepare("SELECT max(numero_h)+1 as id FROM ficha");
                $stmt ->execute();
                $row = $stmt->fetch();

                echo $row['id'];

            }catch (PDOException $e){
                die("Error: ".$e->getMessage());
            }

    }
}

?>
