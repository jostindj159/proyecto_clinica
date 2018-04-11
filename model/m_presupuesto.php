<?php
class Presupuesto{		
	var $fecha;
	var $numero_h;	
	var $pieza;
	var $area;
	var $diag;
	var $desc1;
	var $desc2;
	var $costo;
	var $cantidad;
	var $costSol;
	var $costDol;
	var $inicial;
	var $saldo;
	var $cuotas;

	
	public function __construct($fecha=null,$numero_h=null,$pieza=null,$area=null,$diag=null,$desc1=null,$desc2=null,$costo=null,$cantidad=null,$costSol=null,$costDol=null,$inicial=null,$saldo=null,$cuotas=null){
		$this->fecha = $fecha;
		$this->numero_h = $numero_h;
		$this->pieza = $pieza;
		$this->area = $area;
		$this->diag = $diag;
		$this->desc1 = $desc1;
		$this->desc2 = $desc2;
		$this->costo = $costo;
		$this->cantidad = $cantidad;
		$this->costSol = $costSol;
		$this->costDol = $costDol;
		$this->inicial = $inicial;
		$this->saldo = $saldo;
		$this->cuotas = $cuotas;
	}

	function guardar(){
		try{
			include('../model/conexion.php');			
			$stmt = $dbh->prepare("
			INSERT INTO presupuestos (fecha,numero_h,pieza,area,diag,Descripcion,Descripcion2,costo,cantidad,costoSoles,costoDolar,inicial,saldo,cuotas)
			VALUES (:fecha,:numero_h,:pieza,:area,:diag,:Descripcion,:Descripcion2,:costo,:cantidad,:costoSoles,:costoDolar,:inicial,:saldo,:cuotas)");
			$stmt->bindParam(':fecha',$this->fecha);
			$stmt->bindParam(':numero_h',$this->numero_h);
			$stmt->bindParam(':pieza',$this->pieza);
			$stmt->bindParam(':area',$this->area);
			$stmt->bindParam(':diag',$this->diag);
			$stmt->bindParam(':Descripcion',$this->desc1);
			$stmt->bindParam(':Descripcion2',$this->desc2);
			$stmt->bindParam(':costo',$this->costo);
			$stmt->bindParam(':cantidad',$this->cantidad);
			$stmt->bindParam(':costoSoles',$this->costSol);	
			$stmt->bindParam(':costoDolar',$this->costDol);	
			$stmt->bindParam(':inicial',$this->inicial);	
			$stmt->bindParam(':saldo',$this->saldo);	
			$stmt->bindParam(':cuotas',$this->cuotas);		
			if($stmt->execute()){ //este execute esta en algun lado?
				//echo "<h1>Guardado..</h1>";
			}	
		}catch (PDOException $e){
			die("Error: ".$e->getMessage());
		}
			
	}
        public function ficha_presupuesto(){
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
        public function cargarFicha_Presupuesto($id){
        try{
        include('../model/conexion.php');   
                $rows=null;
                $stmt = $dbh->prepare("SELECT * FROM presupuestos where numero_h=$id group by numero_h ");
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

        public function listarPresupuesto($id){
        try{
        include('../model/conexion.php');   
                $rows2=null;
                $stmt = $dbh->prepare("SELECT Descripcion,Descripcion2,costo,cantidad from presupuestos where numero_h=$id ");
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