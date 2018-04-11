<?php

class Ex
{

    var $fecha;
    var $numero_h;
    var $motivo_c;
    var $examen_i;
    var $radiografias;
    var $p_arterial;
    var $periodontograma;
    var $f_clinica;
    var $e_laboratorio;
	var $m_estudio;
    var $tomografia;
    var $a_sonrisa;
    var $informe;

    var $pieza;
    var $area;
    var $diag;
    var $caries;
    var $pulpitis;
    var $necrosi_p;
    var $gingivitis_a;
    var $gingivitis_c;
    var $periodontitis_a;
    var $periodontitis_c;
    var $dientes_inclu;
    var $dientes_impac;
    var $anomalias_dentofaciales;
    var $anomalias_posicion;
    var $transtornos;
    var $perdida_diente;
    var $diagnostico_a;
    var $diagnostico_b;
    var $diagnostico_c;
    var $diagnostico_d;

	public function __construct ($fecha, $numero_h, $motivo_c, $examen_i, $radiografias, $p_arterial, $periodontograma, $f_clinica, $e_laboratorio, $m_estudio, $tomografia, $a_sonrisa,$informe,$pieza,$area,$diag,$caries,$pulpitis,$necrosi_p,$gingivitis_a,$gingivitis_c,$periodontitis_a,$periodontitis_c,$dientes_inclu,$dientes_impac,$anomalias_dentofaciales,$anomalias_posicion,$transtornos,$perdida_diente,$diagnostico_a,$diagnostico_b,$diagnostico_c,$diagnostico_d)
	 {
        $this->fecha = $fecha;
		$this->numero_h = $numero_h;
        $this->motivo_c = $motivo_c;
        $this->examen_i = $examen_i;
        $this->radiografias = $radiografias;
        $this->p_arterial = $p_arterial;
        $this->periodontograma = $periodontograma;
        $this->f_clinica = $f_clinica;
        $this->e_laboratorio = $e_laboratorio;
        $this->m_estudio = $m_estudio;
        $this->tomografia = $tomografia;
        $this->a_sonrisa = $a_sonrisa;
        $this->informe = $informe;

        $this->pieza = $pieza;
        $this->area = $area;
        $this->diag = $diag;
        $this->caries = $caries;
        $this->pulpitis = $pulpitis;
        $this->necrosi_p = $necrosi_p;
        $this->gingivitis_a = $gingivitis_a;
        $this->gingivitis_c = $gingivitis_c;
        $this->periodontitis_a = $periodontitis_a;
        $this->periodontitis_c = $periodontitis_c;
		$this->dientes_inclu = $dientes_inclu;
        $this->dientes_impac = $dientes_impac;
        $this->anomalias_dentofaciales = $anomalias_dentofaciales;
        $this->anomalias_posicion = $anomalias_posicion;
        $this->transtornos = $transtornos;
        $this->perdida_diente = $perdida_diente;
        $this->diagnostico_a = $diagnostico_a;
        $this->diagnostico_b = $diagnostico_b;
        $this->diagnostico_c = $diagnostico_c;
        $this->diagnostico_d = $diagnostico_d;
     
    }							 
	function guardar ()
    {
        try {
            include('../model/conexion.php');
            $stmt = $dbh->prepare("INSERT INTO ficha_ei (fecha,numero_h,motivo_c,examen_i,radiografias,p_arterial,periodontograma,f_clinica,e_laboratorio,m_estudio,tomografia,a_sonrisa,informe,pieza,area,diag,caries,pulpitis,necrosi_p,gingivitis_a,gingivitis_c,periodontitis_a,periodontitis_c,dientes_inclu,dientes_impac,anomalias_dentofaciales,anomalias_posicion,transtornos,perdida_diente,diagnostico_a,diagnostico_b,diagnostico_c,diagnostico_d)
            VALUES (:fecha,:numero_h,:motivo_c,:examen_i,:radiografias,:p_arterial,:periodontograma,:f_clinica,:e_laboratorio,:m_estudio,:tomografia,:a_sonrisa,:informe,:pieza,:area,:diag,:caries,:pulpitis,:necrosi_p,:gingivitis_a,:gingivitis_c,:periodontitis_a,:periodontitis_c,:dientes_inclu,:dientes_impac,:anomalias_dentofaciales,:anomalias_posicion,:transtornos,:perdida_diente,:diagnostico_a,:diagnostico_b,:diagnostico_c,:diagnostico_d)");

            $stmt->bindParam(':fecha', $this->fecha);
            $stmt->bindParam(':numero_h', $this->numero_h);
            $stmt->bindParam(':motivo_c', $this->motivo_c);
            $stmt->bindParam(':examen_i', $this->examen_i);
            $stmt->bindParam(':radiografias', $this->radiografias);
            $stmt->bindParam(':p_arterial', $this->p_arterial);
            $stmt->bindParam(':periodontograma', $this->periodontograma);
			$stmt->bindParam(':f_clinica', $this->f_clinica);
            $stmt->bindParam(':e_laboratorio', $this->e_laboratorio);
            $stmt->bindParam(':m_estudio', $this->m_estudio);
            $stmt->bindParam(':tomografia', $this->tomografia);
            $stmt->bindParam(':a_sonrisa', $this->a_sonrisa);
            $stmt->bindParam(':informe', $this->informe);

            $stmt->bindParam(':pieza', $this->pieza);
            $stmt->bindParam(':area', $this->area);
            $stmt->bindParam(':diag', $this->diag);
			$stmt->bindParam(':caries', $this->caries);
            $stmt->bindParam(':pulpitis', $this->pulpitis);
            $stmt->bindParam(':necrosi_p', $this->necrosi_p);
            $stmt->bindParam(':gingivitis_a', $this->gingivitis_a);
            $stmt->bindParam(':gingivitis_c', $this->gingivitis_c);
            $stmt->bindParam(':periodontitis_a', $this->periodontitis_a);
            $stmt->bindParam(':periodontitis_c', $this->periodontitis_c);
            $stmt->bindParam(':dientes_inclu', $this->dientes_inclu);
            $stmt->bindParam(':dientes_impac', $this->dientes_impac);
            $stmt->bindParam(':anomalias_dentofaciales', $this->anomalias_dentofaciales);
            $stmt->bindParam(':anomalias_posicion', $this->anomalias_posicion);
            $stmt->bindParam(':transtornos', $this->transtornos);
            $stmt->bindParam(':perdida_diente', $this->perdida_diente);
            $stmt->bindParam(':diagnostico_a', $this->diagnostico_a);
            $stmt->bindParam(':diagnostico_b', $this->diagnostico_b);
            $stmt->bindParam(':diagnostico_c', $this->diagnostico_c);
            $stmt->bindParam(':diagnostico_d', $this->diagnostico_d);


            $stmt->execute();

            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }

    }	
	
	    public function selectHistoria (){
        try {
            include('../model/conexion.php');
            $rows = null;
            $stmt = $dbh->prepare("SELECT id_ficha,numero_h,nombre FROM ficha");
            $stmt->execute();
            while ($result = $stmt->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
        public function ficha_eip(){
            try{
                include('../model/conexion.php');   
                $rows=null;
                $stmt = $dbh->prepare("SELECT fei.numero_h,f.nombre,fei.motivo_c from ficha_ei  fei inner join ficha f
                on f.numero_h=fei.numero_h group by fei.numero_h");
                $stmt ->execute();
                while($result=$stmt->fetch()){
                    $rows[]=$result;
                }
                return $rows;
            }catch (PDOException $e){
                die("Error: ".$e->getMessage());
            }
    }
        public function cargarFicha_ei($id){
        try{
        include('../model/conexion.php');   
                $rows=null;
                $stmt = $dbh->prepare("SELECT * FROM ficha_ei where numero_h=$id group by numero_h ");
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

    public function editarFicha_ei($numero_h){
        try{
                include('../model/conexion.php');
                $stmt = $dbh->prepare("UPDATE ficha_ei SET
                fecha=:fecha,numero_h=:numero_h,motivo_c=:motivo_c,examen_i=:examen_i,radiografias=:radiografias,
                p_arterial=:p_arterial,periodontograma=:periodontograma,f_clinica=:f_clinica,
                e_laboratorio=:e_laboratorio,m_estudio=:m_estudio,tomografia=:tomografia,a_sonrisa=:a_sonrisa,
                informe=:informe,caries=:caries,pulpitis=:pulpitis,
                necrosi_p=:necrosi_p,gingivitis_a=:gingivitis_a,gingivitis_c=:gingivitis_c,periodontitis_a=:periodontitis_a,
                periodontitis_c=:periodontitis_c,dientes_inclu=:dientes_inclu,dientes_impac=:dientes_impac,
                anomalias_dentofaciales=:anomalias_dentofaciales,anomalias_posicion=:anomalias_posicion,
                transtornos=:transtornos,perdida_diente=:perdida_diente,diagnostico_a=:diagnostico_a,
                diagnostico_b=:diagnostico_b, diagnostico_c=:diagnostico_c,diagnostico_d=:diagnostico_d
                where numero_h=:numero_h");
  
                $stmt->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);  
                $stmt->bindParam(':numero_h', $_POST['numero_h'], PDO::PARAM_STR);
                $stmt->bindParam(':examen_i', $_POST['examen_i'], PDO::PARAM_STR);  
                $stmt->bindParam(':radiografias', $_POST['radiografias'], PDO::PARAM_STR);
                $stmt->bindParam(':p_arterial', $_POST['p_arterial'], PDO::PARAM_STR); 
                $stmt->bindParam(':periodontograma', $_POST['periodontograma'], PDO::PARAM_STR); 
                $stmt->bindParam(':f_clinica', $_POST['f_clinica'], PDO::PARAM_STR); 
                $stmt->bindParam(':e_laboratorio', $_POST['e_laboratorio'], PDO::PARAM_STR); 
                $stmt->bindParam(':m_estudio', $_POST['m_estudio'], PDO::PARAM_STR); 
                $stmt->bindParam(':tomografia', $_POST['tomografia'], PDO::PARAM_STR); 
                $stmt->bindParam(':a_sonrisa', $_POST['a_sonrisa'], PDO::PARAM_STR); 
                $stmt->bindParam(':informe', $_POST['informe'], PDO::PARAM_STR); 
                
                $stmt->bindParam(':caries', $_POST['caries'], PDO::PARAM_STR);
                $stmt->bindParam(':pulpitis', $_POST['pulpitis'], PDO::PARAM_STR); 
                $stmt->bindParam(':necrosi_p', $_POST['necrosi_p'], PDO::PARAM_STR); 
                $stmt->bindParam(':gingivitis_a', $_POST['gingivitis_a'], PDO::PARAM_STR); 
                $stmt->bindParam(':gingivitis_c', $_POST['gingivitis_c'], PDO::PARAM_STR); 
                $stmt->bindParam(':periodontitis_a', $_POST['periodontitis_a'], PDO::PARAM_STR); 
                $stmt->bindParam(':periodontitis_c', $_POST['periodontitis_c'], PDO::PARAM_STR); 
                $stmt->bindParam(':dientes_inclu', $_POST['dientes_inclu'], PDO::PARAM_STR); 
                $stmt->bindParam(':dientes_impac', $_POST['dientes_impac'], PDO::PARAM_STR); 
                $stmt->bindParam(':anomalias_dentofaciales', $_POST['anomalias_dentofaciales'], PDO::PARAM_STR); 
                $stmt->bindParam(':anomalias_posicion', $_POST['anomalias_posicion'], PDO::PARAM_STR); 
                $stmt->bindParam(':transtornos', $_POST['transtornos'], PDO::PARAM_STR); 
                $stmt->bindParam(':perdida_diente', $_POST['perdida_diente'], PDO::PARAM_STR); 
                $stmt->bindParam(':diagnostico_a', $_POST['diagnostico_a'], PDO::PARAM_STR);
                $stmt->bindParam(':diagnostico_b', $_POST['diagnostico_b'], PDO::PARAM_STR);
                $stmt->bindParam(':diagnostico_c', $_POST['diagnostico_c'], PDO::PARAM_STR);                  
                $stmt->bindParam(':diagnostico_d', $_POST['diagnostico_d'], PDO::PARAM_STR);
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
	 /*public function selectDiagnostico ()
    {
        try {
            include('../model/conexion.php');
            $rows = null;
            $stmt = $dbh->prepare("SELECT n_diagnostico,cie FROM diagnostico");
            $stmt->execute();
            while ($result = $stmt->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }*/
        public function listarMuelas($id){
        try{
        include('../model/conexion.php');   
                $rows2=null;
                $stmt = $dbh->prepare("SELECT pieza,area,diag from ficha_ei where numero_h=$id ");
                $stmt->bindParam(':numero_h',$this->id);    
                $stmt ->execute();
                while($result2=$stmt->fetch()){
                    $rows2[]=$result2;
                }
                return $rows2;
        }catch (PDOException $e){
            die("Error: ".$e->getMessage());
        }
    }
	
}
	?>