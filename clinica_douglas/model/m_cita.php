<?php
/*error_reporting(0);*/
	class Agen{		
		
		var $dni;
		var $nombre;
		var $fecha;
		var $hora;
		
		public function __construct($dni,$nombre,$fecha,$horai,$horaf,$Query,$username){
       	$this->nombre = $nombre;
		$this->dni = $dni;
		 $this->fecha = $fecha;
        $this->horai = $horai;
		$this->horaf = $horaf;
		$this->query=$Query;
	
		}
		
		function guardar(){

			try{
				include('../model/conexion.php');			
				$stmt = $dbh->prepare("INSERT INTO agenda (nombre,dni,start,hora_i,hora_f) VALUES (:nombre,:dni,:fecha, :horai,:horaf)");
				$stmt->bindParam(':nombre',$this->nombre);
				$stmt->bindParam(':dni',$this->dni);
				$stmt->bindParam(':fecha',$this->fecha);
				$stmt->bindParam(':hora',$this->horai);	
                $stmt->bindParam(':horaf',$this->horaf);					
				if($stmt->execute()){
					echo "Se ha creado un nuevo registro!";
				}	
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
				
		}}
		Class Doctor{
		public function mostrarCita(){
			try{
				include('../model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT dni,nombre,fono FROM doctores");
				$stmt ->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	}
}

?>
