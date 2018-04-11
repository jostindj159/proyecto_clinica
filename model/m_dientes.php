<?php
Class Dientes{
		public function listar(){
			try{
				include('../model/conexion.php');	
				$rows=null;
				$stmt = $dbh->prepare("SELECT id_dientes
				,pieza1_a,pieza1_b,pieza1_c,pieza1_d,pieza1_e
				,pieza2_a,pieza2_b,pieza2_c,pieza2_d,pieza2_e
				,pieza3_a, pieza3_b, pieza3_c, pieza3_d, pieza3_e
				,pieza4_a, pieza4_b, pieza4_c, pieza4_d
				,pieza5_a, pieza5_b, pieza5_c, pieza5_d
				,pieza6_a, pieza6_b, pieza6_c, pieza6_d
			  	,pieza7_a, pieza7_b, pieza7_c, pieza7_d
			  	,pieza8_a, pieza8_b, pieza8_c, pieza8_d
			  	,pieza9_a, pieza9_b, pieza9_c, pieza9_d
			  	,pieza10_a, pieza10_b, pieza10_c, pieza10_d
			  	,pieza11_a, pieza11_b, pieza11_c, pieza11_d
			  	,pieza12_a, pieza12_b, pieza12_c, pieza12_d
			  	,pieza13_a, pieza13_b, pieza13_c, pieza13_d
			  	,pieza14_a, pieza14_b, pieza14_c, pieza14_d, pieza14_e
			  	,pieza15_a, pieza15_b, pieza15_c, pieza15_d, pieza15_e
			  	,pieza16_a, pieza16_b, pieza16_c, pieza16_d, pieza16_e
			  	
			  	,pieza17_a, pieza17_b, pieza17_c, pieza17_d, pieza17_e
			  	,pieza18_a, pieza18_b, pieza18_c, pieza18_d, pieza18_e
			  	,pieza19_a, pieza19_b, pieza19_c, pieza19_d, pieza19_e
			  	,pieza20_a, pieza20_b, pieza20_c, pieza20_d
			  	,pieza21_a, pieza21_b, pieza21_c, pieza21_d
			  	,pieza22_a, pieza22_b, pieza22_c, pieza22_d
			  	,pieza23_a, pieza23_b, pieza23_c, pieza23_d
			  	,pieza24_a, pieza24_b, pieza24_c, pieza24_d
			  	,pieza25_a, pieza25_b, pieza25_c, pieza25_d
			  	,pieza26_a, pieza26_b, pieza26_c, pieza26_d
			  	,pieza27_a, pieza27_b, pieza27_c, pieza27_d
			  	,pieza28_a, pieza28_b, pieza28_c, pieza28_d
			  	,pieza29_a, pieza29_b, pieza29_c, pieza29_d
			  	,pieza30_a, pieza30_b, pieza30_c, pieza30_d, pieza30_e
			  	,pieza31_a, pieza31_b, pieza31_c, pieza31_d, pieza31_e
			  	,pieza32_a, pieza32_b, pieza32_c, pieza32_d, pieza32_e
				 FROM dientes");
				$stmt ->execute();
				while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;
			}catch (PDOException $e){
				die("Error: ".$e->getMessage());
			}
	}

		public function PiezasDientes(){
			try {
				include('../model/conexion.php');	
				$rows=null;
				$stmt=$dbh->prepare(" SELECT
				pieza1_a,pieza1_b,pieza1_c,pieza1_d,pieza1_e
				,pieza2_a,pieza2_b,pieza2_c,pieza2_d,pieza2_e
				,pieza3_a, pieza3_b, pieza3_c, pieza3_d, pieza3_e
				,pieza4_a, pieza4_b, pieza4_c, pieza4_d
				,pieza5_a, pieza5_b, pieza5_c, pieza5_d
				,pieza6_a, pieza6_b, pieza6_c, pieza6_d
			  	,pieza7_a, pieza7_b, pieza7_c, pieza7_d
			  	,pieza8_a, pieza8_b, pieza8_c, pieza8_d
			  	,pieza9_a, pieza9_b, pieza9_c, pieza9_d
			  	,pieza10_a, pieza10_b, pieza10_c, pieza10_d
			  	,pieza11_a, pieza11_b, pieza11_c, pieza11_d
			  	,pieza12_a, pieza12_b, pieza12_c, pieza12_d
			  	,pieza13_a, pieza13_b, pieza13_c, pieza13_d
			  	,pieza14_a, pieza14_b, pieza14_c, pieza14_d, pieza14_e
			  	,pieza15_a, pieza15_b, pieza15_c, pieza15_d, pieza15_e
			  	,pieza16_a, pieza16_b, pieza16_c, pieza16_d, pieza16_e
			  	
			  	,pieza17_a, pieza17_b, pieza17_c, pieza17_d, pieza17_e
			  	,pieza18_a, pieza18_b, pieza18_c, pieza18_d, pieza18_e
			  	,pieza19_a, pieza19_b, pieza19_c, pieza19_d, pieza19_e
			  	,pieza20_a, pieza20_b, pieza20_c, pieza20_d
			  	,pieza21_a, pieza21_b, pieza21_c, pieza21_d
			  	,pieza22_a, pieza22_b, pieza22_c, pieza22_d
			  	,pieza23_a, pieza23_b, pieza23_c, pieza23_d
			  	,pieza24_a, pieza24_b, pieza24_c, pieza24_d
			  	,pieza25_a, pieza25_b, pieza25_c, pieza25_d
			  	,pieza26_a, pieza26_b, pieza26_c, pieza26_d
			  	,pieza27_a, pieza27_b, pieza27_c, pieza27_d
			  	,pieza28_a, pieza28_b, pieza28_c, pieza28_d
			  	,pieza29_a, pieza29_b, pieza29_c, pieza29_d
			  	,pieza30_a, pieza30_b, pieza30_c, pieza30_d, pieza30_e
			  	,pieza31_a, pieza31_b, pieza31_c, pieza31_d, pieza31_e
			  	,pieza32_a, pieza32_b, pieza32_c, pieza32_d, pieza32_e 
			  	FROM dientes ");
			  	$stmt->execute();

			  	while($result=$stmt->fetch()){
					$rows[]=$result;
				}
				return $rows;

				} catch (Exception $e) {
					
				}
		}

}
?>