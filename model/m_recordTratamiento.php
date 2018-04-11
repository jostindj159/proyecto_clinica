<?php 
class tratamiento{
	var $fecha;
	var $numero_h;
	var $tpps;
	var $tppd;
	var $cis;
	var $cid;
	var $rtfecha;
	var $rtatencion;
	var $ecdr;
	var $ecfecha;
	var $ectc;
	var $ecacta;
	var $ecsaldo;
	var $laba;
	var $labb;
	var $labc;

	public function __construct($fecha,$numero_h,$tpps,$tppd,$cis,$cid,$rtfecha,$rtatencion,$ecdr,$ecfecha,$ectc,$ecacta,$ecsaldo,$laba,$labb,$labc)
	{
		$this->fecha = $fecha;
		$this->numero_h = $numero_h;
		$this->tpps = $tpps;
		$this->tppd = $tppd;
		$this->cis = $cis;
		$this->cid = $cid;
		$this->rtfecha = $rtfecha;
		$this->rtatencion = $rtatencion;
		$this->ecdr = $ecdr;
		$this->ecfecha = $ecfecha;
		$this->ectc = $ectc;
		$this->ecacta = $ecacta;
		$this->ecsaldo = $ecsaldo;
		$this->laba = $laba;
		$this->labb = $labb;
		$this->labc = $labc;
	}

	function guardar(){
		try {
			include('../model/conexion.php');
			 $stmt = $dbh->prepare("INSERT INTO record_tratamiento (fecha,numero_h,tpps,tppd,cis,cid,rtfecha,rtatencion,ecdr,ecfecha,
			 	ectc,ecacta,ecsaldo,laba,labb,labc) VALUES(:fecha,:numero_h,:tpps,:tppd,:cis,:cid,:rtfecha,:rtatencion,:ecdr,:ecfecha,:ectc,
			 	:ecacta,:ecsaldo,:laba,:labb,:labc)");
			 $stmt->bindParam(':fecha',$this->fecha);
			 $stmt->bindParam(':numero_h',$this->numero_h);
			 $stmt->bindParam(':tpps',$this->tpps);
			 $stmt->bindParam(':tppd',$this->tppd);
			 $stmt->bindParam(':cis',$this->cis);
			 $stmt->bindParam(':cid',$this->cid);
			 $stmt->bindParam(':rtfecha',$this->rtfecha);
			 $stmt->bindParam(':rtatencion',$this->rtatencion);
			 $stmt->bindParam(':ecdr',$this->ecdr);
			 $stmt->bindParam(':ecfecha',$this->ecfecha);
			 $stmt->bindParam(':ectc',$this->ectc);
			 $stmt->bindParam(':ecacta',$this->ecacta);
			 $stmt->bindParam(':ecsaldo',$this->ecsaldo);
			 $stmt->bindParam(':laba',$this->laba);
			 $stmt->bindParam(':labb',$this->labb);
			 $stmt->bindParam(':labc',$this->labc);

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

        public function ficha_record(){
            try{
                include('../model/conexion.php');   
                $rows=null;
                $stmt = $dbh->prepare("SELECT fei.numero_h,f.nombre,p.fecha from ficha_ei  fei inner join ficha f
                on f.numero_h=fei.numero_h inner join presupuestos p on p.numero_h=fei.numero_h group by fei.numero_h");
                $stmt ->execute();
                while($result=$stmt->fetch()){
                    $rows[]=$result;
                }
                return $rows;
            }catch (PDOException $e){
                die("Error: ".$e->getMessage());
            }
    }

        public function cargarFicha_Record($id){
        try{
        include('../model/conexion.php');   
                $rows=null;
                $stmt = $dbh->prepare("SELECT * FROM record_tratamiento where numero_h=$id group by numero_h ");
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

        public function listarRecord($id){
        try{
        include('../model/conexion.php');   
                $rows2=null;
                $stmt = $dbh->prepare("SELECT rtfecha,rtatencion,ecdr,ecfecha,ectc,ecacta,ecsaldo from record_tratamiento where numero_h=$id ");
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