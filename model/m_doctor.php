<?php
class Doc{		
		
		var $dni;
		var $nombre;
		var $fono;
		var $id;
	
		
		public function __construct($nombre=null,$dni=null,$fono=null,$id=null){
       		$this->nombre = $nombre;
			$this->dni = $dni;
			$this->fono = $fono;
			$this->id = $id;
		}

		function guardar(){
			try{
				include('../model/conexion.php');			
				$stmt = $dbh->prepare("INSERT INTO doctores (nombre,dni,fono) VALUES (:nombre,:dni,:fono)");
				$stmt->bindParam(':nombre',$this->nombre);
				$stmt->bindParam(':dni',$this->dni);
				$stmt->bindParam(':fono',$this->fono);		
				if($stmt->execute()){
					echo "<h1>Nuevo doctor registrado!</h1>";
				}	
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
				
		}
		
		public function eliminarDoctor(){
		try{
				include('../model/conexion.php');
				$stmt = $dbh->prepare("DELETE  FROM doctores where id=:id");
				$stmt->bindParam(':id',$this->id);	
				if($stmt->execute()){
				echo "<h1>Eliminado</h1>";
				echo "<button type='submit' class='btn btn-default'><a href='../index.php?accion=Panel'>Volver</a></button>";
			};
		}catch (PDOException $e){
			die("Error: ".$e->getMessage());
		}
      }
	public function cargarDoctor($id){
		try{
		include('../model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT * FROM doctores where id=$id ");
				$stmt->bindParam(':id',$this->id);	
				$stmt ->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
		}catch (PDOException $e){
			die("Error: ".$e->getMessage());
		}
	}
	
	public function editarDoctor($id){
		try{
				include('../model/conexion.php');
				$stmt = $dbh->prepare("update doctores SET nombre=:nombre,dni=:dni,fono=:fono   where id=:id");
				//$stmt->bindParam(':nombre',$this->nombre);
				//$stmt->bindParam(':dni',$this->dni);
				//$stmt->bindParam(':fono',$this->fono);
				//$stmt->bindParam(':id',$this->id);	
				$stmt->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR);
				$stmt->bindParam(':dni', $_POST['dni'], PDO::PARAM_INT);  
				$stmt->bindParam(':fono', $_POST['fono'], PDO::PARAM_INT);  
				$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);  				
				if(!$stmt){
				return "error al editar el doctor";
				//echo "<a href='./view/v_panel.php'>Volver</a>";
		}else{
			$stmt->execute();
			return "<h2>doctor editado exitosamente!</h2>";
			}
		}catch (PDOException $e){
			die("Error: ".$e->getMessage());
		}
		}
}
		?>


