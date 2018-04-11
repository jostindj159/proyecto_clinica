<?php
session_start();
if (isset($_POST['submit'])) {

	if (empty($_POST['username']) || empty($_POST['password'])) {
		echo  "Llene los campos ";
	}else{
		$user = $_POST["username"];
		$pass = $_POST["password"];

		//echo "JJJJJJJ --$user--<br>";
		//echo "KKKKKKK --$pass--<br>";

		include("./model/conexion.php");

		try{
			$cSql = "select * from usuario where nombre_usuario = ? and clave = ?";

			$pdo = $dbh->prepare($cSql);
			$pdo->bindParam(1,$user);
			$pdo->bindParam(2,$pass);

			$pdo->execute();

			$nFilas = 0;
			while($r = $pdo->fetch()){
			$nFilas++;
			$_SESSION['usuario_'] = $r["id"];
			$_SESSION["nombre_doctor_"] = $r["nombre_usuario"];
			//echo "el usuario essss:" . $_SESSION['usuario_'];
			}
			
			/*if ($nFilas > 0){
				if ($_SESSION["nombre_doctor_"]==ucwords("jose")) {
				include("view/v_panel.php");
				}else{
				include("view/v_index1.php");
				}
			}else{
			echo "acceso denegado X";
			}*/

			if ($nFilas == 0){
			echo "acceso denegado X";
			}else{
			include("view/v_panel.php");
			}

		}catch(PDOException $e){
		die("Error: ".$e->getMessage());
		}
	}//fin else
}
?>