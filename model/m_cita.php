<?php
class Agen{		
		var $id;
		var $doctor;
		var $nombre;
		var $dni;
		var $telefono;
		var $email;
		var $fechanac;
		var $start;
		var $hora_i_h;
		var $hora_i_m;
		var $hora_i_t;
		var $hora_f_h;
		var $hora_f_m;
		var $hora_f_t;
		var $id_usuario;

		public function __construct($id,$doctor,$nombre,$dni,$telefono,$email,$fechanac,$start,$hora_i_h,$hora_i_m,$hora_i_t,$hora_f_h,$hora_f_m,$hora_f_t,$id_usuario){
		$this->id = $id;
        $this->doctor = $doctor;
		$this->nombre = $nombre;
		$this->dni = $dni;
		$this->telefono = $telefono;
		$this->email = $email;
		$this->fechanac = $fechanac;
		$this->start = $start;
        $this->hora_i_h = $hora_i_h;
        $this->hora_i_m = $hora_i_m;
        $this->hora_i_t = $hora_i_t;
        $this->hora_f_h = $hora_f_h;
        $this->hora_f_m = $hora_f_m;
        $this->hora_f_t = $hora_f_t;
        $this->id_usuario = $id_usuario;
		}

		function guardar(){
			try{
				include('../model/conexion.php');

				$consulta= $dbh->prepare("SELECT id,doctor,nombre,dni,telefono,email,fechanac,start,hora_i_h,hora_i_m,hora_i_t,hora_f_h,hora_f_m,hora_f_t,id_usuario FROM  agenda 
				where hora_i_h=:hora_i_h and hora_i_m=:hora_i_m and hora_i_t=:hora_i_t and start=:start and doctor=:doctor");
				$consulta->bindParam(':hora_i_h',$this->hora_i_h);
				$consulta->bindParam(':hora_i_m',$this->hora_i_m);
				$consulta->bindParam(':hora_i_t',$this->hora_i_t);
				$consulta->bindParam(':start',$this->start);
				$consulta->bindParam(':doctor',$this->doctor);
				$consulta->execute();
				if ($consulta->rowCount()>0) {
					echo "<h1>Error:</h1>";
					echo "<h2>La hora de la cita ya esta Programada</h2>";
					//echo "<button type='submit' class='btn btn-default' id='btnGuardar' name='btnGuardar'><a href='../view/v_index.php'>Volver</a></button>";
				}else{
				$stmt = $dbh->prepare("INSERT INTO agenda (doctor,nombre,dni,telefono,email,fechanac,start,hora_i_h,hora_i_m,hora_i_t,hora_f_h,hora_f_m,hora_f_t,id_usuario) VALUES (:doctor,:nombre, :dni, :telefono, :email, :fechanac, :start,:hora_i_h, :hora_i_m, :hora_i_t, :hora_f_h, :hora_f_m, :hora_f_t,:id_usuario)");
				$stmt->bindParam(':doctor',$this->doctor);
				$stmt->bindParam(':nombre',$this->nombre);
				$stmt->bindParam(':dni',$this->dni);
				$stmt->bindParam(':telefono',$this->telefono);
				$stmt->bindParam(':email',$this->email);
				$stmt->bindParam(':fechanac',$this->fechanac);
				$stmt->bindParam(':start',$this->start);
				$stmt->bindParam(':hora_i_h',$this->hora_i_h);
				$stmt->bindParam(':hora_i_m',$this->hora_i_m);
				$stmt->bindParam(':hora_i_t',$this->hora_i_t);	
				$stmt->bindParam(':hora_f_h',$this->hora_f_h);
				$stmt->bindParam(':hora_f_m',$this->hora_f_m);
				$stmt->bindParam(':hora_f_t',$this->hora_f_t);
				$stmt->bindParam(':id_usuario',$this->id_usuario);	
				if($stmt->execute()){
					echo "<h1>La cita se ha registrado!</h1></br>";
					//echo "<button type='submit' class='btn btn-default'><a href='../view/v_index.php'>Volver</a></button>";
				}	
			}
		}catch (PDOException $e){
				die("Error: ".$e->getMessage());
		}
}
		public function eliminarCita(){
				try{
						include('../model/conexion.php');
						$stmt = $dbh->prepare("DELETE FROM agenda where id=:id");
						$stmt->bindParam(':id',$this->id);	
						if($stmt->execute()){
						echo "<h1>Eliminado</h1>";
					}
				}catch (PDOException $e){
					die("Error: ".$e->getMessage());
				}
		      }
}
////////////
Class Doctor{
		public function mostrarCita(){
			try{
				include('./model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT id,dni,nombre,fono FROM doctores");
				$stmt ->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	}

		public function selectDoctor(){
			try{
				//si se usa un index - index1
				/*if ($_SESSION["nombre_doctor_"]==ucwords("jose")) {
					echo "uso jose";
					include('../model/conexion.php');
				}else{
					echo "uso otro";
					include('./model/conexion.php');	
				}*/
				include('./model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT id,nombre FROM doctores");
				$stmt->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	}

		public function selectDoctor1(){
			try{
				//index1
				include('./model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT id,nombre FROM doctores");
				$stmt->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	}
}
////////////
Class Usuario{
		public function mostrarCita2(){
			try{
				include('./model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT * FROM usuario");
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
////////////
Class Paciente{
		var $id;
		var $nombre;
		var $dni;
		var $telefono;
		var $email;
		var $fechanac;
		
		public function __construct($id,$nombre,$dni,$telefono,$email,$fechanac){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->dni = $dni;
		$this->telefono = $telefono;
		$this->email = $email;
		$this->fechanac = $fechanac;
		}

		public function guardarPaciente(){
			try{
				include('../model/conexion.php');

				$consulta= $dbh->prepare("SELECT id,nombre,dni,telefono,email,fechanac FROM  pacientes  where nombre=:nombre ");
				$consulta->bindParam(':nombre',$this->nombre);
				$consulta->execute();
				if ($consulta->rowCount()>0) {
					//echo "ya existe";
				}else{
				$stmt = $dbh->prepare("INSERT INTO pacientes(nombre,dni,telefono,email,fechanac) VALUES (:nombre, :dni, :telefono, :email, :fechanac)");
				$stmt->bindParam(':nombre',$this->nombre);
				$stmt->bindParam(':dni',$this->dni);
				$stmt->bindParam(':telefono',$this->telefono);
				$stmt->bindParam(':email',$this->email);
				$stmt->bindParam(':fechanac',$this->fechanac);
				if($stmt->execute()){
					//echo "<h1>Un nuevo Paciente se ha Registrado!</h1></br>";
					//echo "<button type='submit' class='btn btn-default' id='btnGuardar' name='btnGuardar'><a href='../view/v_index.php'>Volver</a></button>";
					//echo "Guardado";
				}	
				}
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
		}
}

		public function listarPaciente(){
			try{
				include('./model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT id,nombre,dni,telefono,email,fechanac FROM pacientes");
				$stmt ->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	}
		public function Eliminar(){
			try{
					include('../model/conexion.php');
					$stmt = $dbh->prepare("DELETE  FROM pacientes where id=:id");
					$stmt->bindParam(':id',$this->id);	
					if($stmt->execute()){
					echo "<h2>Cita eliminada!</h2>";
					//echo "<button type='submit' class='btn btn-default'><a href='../index.php?accion=Calendario'>Volver</a></button>";
				};
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	      }
		public function guardarPacienteEliminado(){
			try{
				include('../model/conexion.php');
				$stmt = $dbh->prepare("INSERT INTO pacienteseliminados SELECT *FROM pacientes WHERE  id=:id");		
				$stmt->bindParam(':id',$this->id);
				if($stmt->execute()){
					echo "<h1>Paciente Eliminado!<h1>";
					echo "<button type='submit' class='btn btn-lg' id='btnGuardar' name='btnGuardar'><a href='../index.php?accion=Panel'>Volver</a></button>";
				}	
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
		}
}
}
///////
?>			
