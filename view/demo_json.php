<?php
$ver=$_GET['x'];

$arr=json_decode($ver,true);
/*var_dump($arr);
echo $arr['pieza1_a'];
echo $arr['pieza1_b'];
echo $arr['pieza1_c'];
echo $arr['pieza1_d'];
echo $arr['pieza1_e'];

*/
foreach ($arr as $row) {
  ///
  $pieza1_a = $arr['pieza1_a'];
  $pieza1_b = $arr['pieza1_b'];
  $pieza1_c = $arr['pieza1_c'];
  $pieza1_d = $arr['pieza1_d'];
  $pieza1_e = $arr['pieza1_e'];
  ///
  $pieza2_a = $arr['pieza2_a'];
  $pieza2_b = $arr['pieza2_b'];
  $pieza2_c = $arr['pieza2_c'];
  $pieza2_d = $arr['pieza2_d'];
  $pieza2_e = $arr['pieza2_e'];
  ///
  $pieza3_a = $arr['pieza3_a'];
  $pieza3_b = $arr['pieza3_b'];
  $pieza3_c = $arr['pieza3_c'];
  $pieza3_d = $arr['pieza3_d'];
  $pieza3_e = $arr['pieza3_e'];
  /////
  $pieza4_a = $arr['pieza4_a'];
  $pieza4_b = $arr['pieza4_b'];
  $pieza4_c = $arr['pieza4_c'];
  $pieza4_d = $arr['pieza4_d'];
  ///
  $pieza5_a = $arr['pieza5_a'];
  $pieza5_b = $arr['pieza5_b'];
  $pieza5_c = $arr['pieza5_c'];
  $pieza5_d = $arr['pieza5_d'];
  ///
  $pieza6_a = $arr['pieza6_a'];
  $pieza6_b = $arr['pieza6_b'];
  $pieza6_c = $arr['pieza6_c'];
  $pieza6_d = $arr['pieza6_d'];
  ///
  $pieza7_a = $arr['pieza7_a'];
  $pieza7_b = $arr['pieza7_b'];
  $pieza7_c = $arr['pieza7_c'];
  $pieza7_d = $arr['pieza7_d'];
  ///
  $pieza8_a = $arr['pieza8_a'];
  $pieza8_b = $arr['pieza8_b'];
  $pieza8_c = $arr['pieza8_c'];
  $pieza8_d = $arr['pieza8_d'];
  ///
  $pieza9_a = $arr['pieza9_a'];
  $pieza9_b = $arr['pieza9_b'];
  $pieza9_c = $arr['pieza9_c'];
  $pieza9_d = $arr['pieza9_d'];
  ///
  $pieza10_a = $arr['pieza10_a'];
  $pieza10_b = $arr['pieza10_b'];
  $pieza10_c = $arr['pieza10_c'];
  $pieza10_d = $arr['pieza10_d'];
  ///
  $pieza11_a = $arr['pieza11_a'];
  $pieza11_b = $arr['pieza11_b'];
  $pieza11_c = $arr['pieza11_c'];
  $pieza11_d = $arr['pieza11_d'];
  ///
  $pieza12_a = $arr['pieza12_a'];
  $pieza12_b = $arr['pieza12_b'];
  $pieza12_c = $arr['pieza12_c'];
  $pieza12_d = $arr['pieza12_d'];
  ///
  $pieza13_a = $arr['pieza13_a'];
  $pieza13_b = $arr['pieza13_b'];
  $pieza13_c = $arr['pieza13_c'];
  $pieza13_d = $arr['pieza13_d'];
  ///
  $pieza14_a = $arr['pieza14_a'];
  $pieza14_b = $arr['pieza14_b'];
  $pieza14_c = $arr['pieza14_c'];
  $pieza14_d = $arr['pieza14_d'];
  $pieza14_e = $arr['pieza14_e'];
  ///
  $pieza15_a = $arr['pieza15_a'];
  $pieza15_b = $arr['pieza15_b'];
  $pieza15_c = $arr['pieza15_c'];
  $pieza15_d = $arr['pieza15_d'];
  $pieza15_e = $arr['pieza15_e'];
  ///
  $pieza16_a = $arr['pieza16_a'];
  $pieza16_b = $arr['pieza16_b'];
  $pieza16_c = $arr['pieza16_c'];
  $pieza16_d = $arr['pieza16_d'];
  $pieza16_e = $arr['pieza16_e'];
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $pieza17_a = $arr['pieza17_a'];
  $pieza17_b = $arr['pieza17_b'];
  $pieza17_c = $arr['pieza17_c'];
  $pieza17_d = $arr['pieza17_d'];
  $pieza17_e = $arr['pieza17_e'];
  ///
  $pieza18_a = $arr['pieza18_a'];
  $pieza18_b = $arr['pieza18_b'];
  $pieza18_c = $arr['pieza18_c'];
  $pieza18_d = $arr['pieza18_d'];
  $pieza18_e = $arr['pieza18_e'];
  ///
  $pieza19_a = $arr['pieza19_a'];
  $pieza19_b = $arr['pieza19_b'];
  $pieza19_c = $arr['pieza19_c'];
  $pieza19_d = $arr['pieza19_d'];
  $pieza19_e = $arr['pieza19_e'];
  ///////
  $pieza20_a = $arr['pieza20_a'];
  $pieza20_b = $arr['pieza20_b'];
  $pieza20_c = $arr['pieza20_c'];
  $pieza20_d = $arr['pieza20_d'];
  ///////
  $pieza21_a = $arr['pieza21_a'];
  $pieza21_b = $arr['pieza21_b'];
  $pieza21_c = $arr['pieza21_c'];
  $pieza21_d = $arr['pieza21_d'];
  ///////
  $pieza22_a = $arr['pieza22_a'];
  $pieza22_b = $arr['pieza22_b'];
  $pieza22_c = $arr['pieza22_c'];
  $pieza22_d = $arr['pieza22_d'];
  ///////
  $pieza23_a = $arr['pieza23_a'];
  $pieza23_b = $arr['pieza23_b'];
  $pieza23_c = $arr['pieza23_c'];
  $pieza23_d = $arr['pieza23_d'];
  ///////
  $pieza24_a = $arr['pieza24_a'];
  $pieza24_b = $arr['pieza24_b'];
  $pieza24_c = $arr['pieza24_c'];
  $pieza24_d = $arr['pieza24_d'];
  ///////
  $pieza25_a = $arr['pieza25_a'];
  $pieza25_b = $arr['pieza25_b'];
  $pieza25_c = $arr['pieza25_c'];
  $pieza25_d = $arr['pieza25_d'];
  ///////
  $pieza26_a = $arr['pieza26_a'];
  $pieza26_b = $arr['pieza26_b'];
  $pieza26_c = $arr['pieza26_c'];
  $pieza26_d = $arr['pieza26_d'];
  ///////
  $pieza27_a = $arr['pieza27_a'];
  $pieza27_b = $arr['pieza27_b'];
  $pieza27_c = $arr['pieza27_c'];
  $pieza27_d = $arr['pieza27_d'];
  ///////
  $pieza28_a = $arr['pieza28_a'];
  $pieza28_b = $arr['pieza28_b'];
  $pieza28_c = $arr['pieza28_c'];
  $pieza28_d = $arr['pieza28_d'];
  ///////
  $pieza29_a = $arr['pieza29_a'];
  $pieza29_b = $arr['pieza29_b'];
  $pieza29_c = $arr['pieza29_c'];
  $pieza29_d = $arr['pieza29_d'];
  ////////////
  $pieza30_a = $arr['pieza30_a'];
  $pieza30_b = $arr['pieza30_b'];
  $pieza30_c = $arr['pieza30_c'];
  $pieza30_d = $arr['pieza30_d'];
  $pieza30_e = $arr['pieza30_e'];
  ///
  $pieza31_a = $arr['pieza31_a'];
  $pieza31_b = $arr['pieza31_b'];
  $pieza31_c = $arr['pieza31_c'];
  $pieza31_d = $arr['pieza31_d'];
  $pieza31_e = $arr['pieza31_e'];
  ///
  $pieza32_a = $arr['pieza32_a'];
  $pieza32_b = $arr['pieza32_b'];
  $pieza32_c = $arr['pieza32_c'];
  $pieza32_d = $arr['pieza32_d'];
  $pieza32_e = $arr['pieza32_e'];
}
require_once'../model/conexion.php';
  try{
  $stmt = $dbh->prepare('INSERT INTO dientes
  	(pieza1_a, pieza1_b, pieza1_c, pieza1_d, pieza1_e
  	,pieza2_a, pieza2_b, pieza2_c, pieza2_d, pieza2_e
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
  	)VALUES

  	(:pieza1_a, :pieza1_b, :pieza1_c, :pieza1_d, :pieza1_e
  	,:pieza2_a, :pieza2_b, :pieza2_c, :pieza2_d, :pieza2_e
  	,:pieza3_a, :pieza3_b, :pieza3_c, :pieza3_d, :pieza3_e
  	,:pieza4_a, :pieza4_b, :pieza4_c, :pieza4_d
  	,:pieza5_a, :pieza5_b, :pieza5_c, :pieza5_d
  	,:pieza6_a, :pieza6_b, :pieza6_c, :pieza6_d
  	,:pieza7_a, :pieza7_b, :pieza7_c, :pieza7_d
  	,:pieza8_a, :pieza8_b, :pieza8_c, :pieza8_d
  	,:pieza9_a, :pieza9_b, :pieza9_c, :pieza9_d
  	,:pieza10_a, :pieza10_b, :pieza10_c, :pieza10_d
  	,:pieza11_a, :pieza11_b, :pieza11_c, :pieza11_d
  	,:pieza12_a, :pieza12_b, :pieza12_c, :pieza12_d
  	,:pieza13_a, :pieza13_b, :pieza13_c, :pieza13_d
  	,:pieza14_a, :pieza14_b, :pieza14_c, :pieza14_d, :pieza14_e
  	,:pieza15_a, :pieza15_b, :pieza15_c, :pieza15_d, :pieza15_e
  	,:pieza16_a, :pieza16_b, :pieza16_c, :pieza16_d, :pieza16_e

  	,:pieza17_a, :pieza17_b, :pieza17_c, :pieza17_d, :pieza17_e
  	,:pieza18_a, :pieza18_b, :pieza18_c, :pieza18_d, :pieza18_e
  	,:pieza19_a, :pieza19_b, :pieza19_c, :pieza19_d, :pieza19_e
  	,:pieza20_a, :pieza20_b, :pieza20_c, :pieza20_d
  	,:pieza21_a, :pieza21_b, :pieza21_c, :pieza21_d
  	,:pieza22_a, :pieza22_b, :pieza22_c, :pieza22_d
  	,:pieza23_a, :pieza23_b, :pieza23_c, :pieza23_d
  	,:pieza24_a, :pieza24_b, :pieza24_c, :pieza24_d
  	,:pieza25_a, :pieza25_b, :pieza25_c, :pieza25_d
  	,:pieza26_a, :pieza26_b, :pieza26_c, :pieza26_d
  	,:pieza27_a, :pieza27_b, :pieza27_c, :pieza27_d
  	,:pieza28_a, :pieza28_b, :pieza28_c, :pieza28_d
  	,:pieza29_a, :pieza29_b, :pieza29_c, :pieza29_d
  	,:pieza30_a, :pieza30_b, :pieza30_c, :pieza30_d, :pieza30_e
  	,:pieza31_a, :pieza31_b, :pieza31_c, :pieza31_d, :pieza31_e
  	,:pieza32_a, :pieza32_b, :pieza32_c, :pieza32_d, :pieza32_e
  	);');

    $stmt->bindParam(':pieza1_a',$pieza1_a);
	$stmt->bindParam(':pieza1_b',$pieza1_b);
	$stmt->bindParam(':pieza1_c',$pieza1_c);	
	$stmt->bindParam(':pieza1_d',$pieza1_d);
	$stmt->bindParam(':pieza1_e',$pieza1_e);

	$stmt->bindParam(':pieza2_a',$pieza2_a);
	$stmt->bindParam(':pieza2_b',$pieza2_b);
	$stmt->bindParam(':pieza2_c',$pieza2_c);	
	$stmt->bindParam(':pieza2_d',$pieza2_d);
	$stmt->bindParam(':pieza2_e',$pieza2_e);

	$stmt->bindParam(':pieza3_a',$pieza3_a);
	$stmt->bindParam(':pieza3_b',$pieza3_b);
	$stmt->bindParam(':pieza3_c',$pieza3_c);	
	$stmt->bindParam(':pieza3_d',$pieza3_d);
	$stmt->bindParam(':pieza3_e',$pieza3_e);

	$stmt->bindParam(':pieza4_a',$pieza4_a);
	$stmt->bindParam(':pieza4_b',$pieza4_b);
	$stmt->bindParam(':pieza4_c',$pieza4_c);	
	$stmt->bindParam(':pieza4_d',$pieza4_d);

	$stmt->bindParam(':pieza5_a',$pieza5_a);
	$stmt->bindParam(':pieza5_b',$pieza5_b);
	$stmt->bindParam(':pieza5_c',$pieza5_c);	
	$stmt->bindParam(':pieza5_d',$pieza5_d);

	$stmt->bindParam(':pieza6_a',$pieza6_a);
	$stmt->bindParam(':pieza6_b',$pieza6_b);
	$stmt->bindParam(':pieza6_c',$pieza6_c);	
	$stmt->bindParam(':pieza6_d',$pieza6_d);

	$stmt->bindParam(':pieza7_a',$pieza7_a);
	$stmt->bindParam(':pieza7_b',$pieza7_b);
	$stmt->bindParam(':pieza7_c',$pieza7_c);	
	$stmt->bindParam(':pieza7_d',$pieza7_d);

	$stmt->bindParam(':pieza8_a',$pieza8_a);
	$stmt->bindParam(':pieza8_b',$pieza8_b);
	$stmt->bindParam(':pieza8_c',$pieza8_c);	
	$stmt->bindParam(':pieza8_d',$pieza8_d);

	$stmt->bindParam(':pieza9_a',$pieza9_a);
	$stmt->bindParam(':pieza9_b',$pieza9_b);
	$stmt->bindParam(':pieza9_c',$pieza9_c);	
	$stmt->bindParam(':pieza9_d',$pieza9_d);

	$stmt->bindParam(':pieza10_a',$pieza10_a);
	$stmt->bindParam(':pieza10_b',$pieza10_b);
	$stmt->bindParam(':pieza10_c',$pieza10_c);	
	$stmt->bindParam(':pieza10_d',$pieza10_d);

	$stmt->bindParam(':pieza11_a',$pieza11_a);
	$stmt->bindParam(':pieza11_b',$pieza11_b);
	$stmt->bindParam(':pieza11_c',$pieza11_c);	
	$stmt->bindParam(':pieza11_d',$pieza11_d);

	$stmt->bindParam(':pieza12_a',$pieza12_a);
	$stmt->bindParam(':pieza12_b',$pieza12_b);
	$stmt->bindParam(':pieza12_c',$pieza12_c);	
	$stmt->bindParam(':pieza12_d',$pieza12_d);

	$stmt->bindParam(':pieza13_a',$pieza13_a);
	$stmt->bindParam(':pieza13_b',$pieza13_b);
	$stmt->bindParam(':pieza13_c',$pieza13_c);	
	$stmt->bindParam(':pieza13_d',$pieza13_d);

	$stmt->bindParam(':pieza14_a',$pieza14_a);
	$stmt->bindParam(':pieza14_b',$pieza14_b);
	$stmt->bindParam(':pieza14_c',$pieza14_c);	
	$stmt->bindParam(':pieza14_d',$pieza14_d);
	$stmt->bindParam(':pieza14_e',$pieza14_e);

	$stmt->bindParam(':pieza15_a',$pieza15_a);
	$stmt->bindParam(':pieza15_b',$pieza15_b);
	$stmt->bindParam(':pieza15_c',$pieza15_c);	
	$stmt->bindParam(':pieza15_d',$pieza15_d);
	$stmt->bindParam(':pieza15_e',$pieza15_e);

	$stmt->bindParam(':pieza16_a',$pieza16_a);
	$stmt->bindParam(':pieza16_b',$pieza16_b);
	$stmt->bindParam(':pieza16_c',$pieza16_c);	
	$stmt->bindParam(':pieza16_d',$pieza16_d);
	$stmt->bindParam(':pieza16_e',$pieza16_e);
	///////
	$stmt->bindParam(':pieza17_a',$pieza17_a);
	$stmt->bindParam(':pieza17_b',$pieza17_b);
	$stmt->bindParam(':pieza17_c',$pieza17_c);	
	$stmt->bindParam(':pieza17_d',$pieza17_d);
	$stmt->bindParam(':pieza17_e',$pieza17_e);

	$stmt->bindParam(':pieza18_a',$pieza18_a);
	$stmt->bindParam(':pieza18_b',$pieza18_b);
	$stmt->bindParam(':pieza18_c',$pieza18_c);	
	$stmt->bindParam(':pieza18_d',$pieza18_d);
	$stmt->bindParam(':pieza18_e',$pieza18_e);

	$stmt->bindParam(':pieza19_a',$pieza19_a);
	$stmt->bindParam(':pieza19_b',$pieza19_b);
	$stmt->bindParam(':pieza19_c',$pieza19_c);	
	$stmt->bindParam(':pieza19_d',$pieza19_d);
	$stmt->bindParam(':pieza19_e',$pieza19_e);

	$stmt->bindParam(':pieza20_a',$pieza20_a);
	$stmt->bindParam(':pieza20_b',$pieza20_b);
	$stmt->bindParam(':pieza20_c',$pieza20_c);	
	$stmt->bindParam(':pieza20_d',$pieza20_d);

	$stmt->bindParam(':pieza21_a',$pieza21_a);
	$stmt->bindParam(':pieza21_b',$pieza21_b);
	$stmt->bindParam(':pieza21_c',$pieza21_c);	
	$stmt->bindParam(':pieza21_d',$pieza21_d);

	$stmt->bindParam(':pieza22_a',$pieza22_a);
	$stmt->bindParam(':pieza22_b',$pieza22_b);
	$stmt->bindParam(':pieza22_c',$pieza22_c);	
	$stmt->bindParam(':pieza22_d',$pieza22_d);

	$stmt->bindParam(':pieza23_a',$pieza23_a);
	$stmt->bindParam(':pieza23_b',$pieza23_b);
	$stmt->bindParam(':pieza23_c',$pieza23_c);	
	$stmt->bindParam(':pieza23_d',$pieza23_d);

	$stmt->bindParam(':pieza24_a',$pieza24_a);
	$stmt->bindParam(':pieza24_b',$pieza24_b);
	$stmt->bindParam(':pieza24_c',$pieza24_c);	
	$stmt->bindParam(':pieza24_d',$pieza24_d);

	$stmt->bindParam(':pieza25_a',$pieza25_a);
	$stmt->bindParam(':pieza25_b',$pieza25_b);
	$stmt->bindParam(':pieza25_c',$pieza25_c);	
	$stmt->bindParam(':pieza25_d',$pieza25_d);

	$stmt->bindParam(':pieza26_a',$pieza26_a);
	$stmt->bindParam(':pieza26_b',$pieza26_b);
	$stmt->bindParam(':pieza26_c',$pieza26_c);	
	$stmt->bindParam(':pieza26_d',$pieza26_d);

	$stmt->bindParam(':pieza27_a',$pieza27_a);
	$stmt->bindParam(':pieza27_b',$pieza27_b);
	$stmt->bindParam(':pieza27_c',$pieza27_c);	
	$stmt->bindParam(':pieza27_d',$pieza27_d);

	$stmt->bindParam(':pieza28_a',$pieza28_a);
	$stmt->bindParam(':pieza28_b',$pieza28_b);
	$stmt->bindParam(':pieza28_c',$pieza28_c);	
	$stmt->bindParam(':pieza28_d',$pieza28_d);

	$stmt->bindParam(':pieza29_a',$pieza29_a);
	$stmt->bindParam(':pieza29_b',$pieza29_b);
	$stmt->bindParam(':pieza29_c',$pieza29_c);	
	$stmt->bindParam(':pieza29_d',$pieza29_d);

	$stmt->bindParam(':pieza30_a',$pieza30_a);
	$stmt->bindParam(':pieza30_b',$pieza30_b);
	$stmt->bindParam(':pieza30_c',$pieza30_c);	
	$stmt->bindParam(':pieza30_d',$pieza30_d);
	$stmt->bindParam(':pieza30_e',$pieza30_e);

	$stmt->bindParam(':pieza31_a',$pieza31_a);
	$stmt->bindParam(':pieza31_b',$pieza31_b);
	$stmt->bindParam(':pieza31_c',$pieza31_c);	
	$stmt->bindParam(':pieza31_d',$pieza31_d);
	$stmt->bindParam(':pieza31_e',$pieza31_e);

	$stmt->bindParam(':pieza32_a',$pieza32_a);
	$stmt->bindParam(':pieza32_b',$pieza32_b);
	$stmt->bindParam(':pieza32_c',$pieza32_c);	
	$stmt->bindParam(':pieza32_d',$pieza32_d);
	$stmt->bindParam(':pieza32_e',$pieza32_e);

    if($stmt->execute()){
					echo "<h1>Listo!</h1>";
				}	
	    }catch (PDOException $e){
				die("Error: ".$e->getMessage());
	}

/*echo "<table border='4'>
    <tr>
	<th>pieza_1a</th>
    <th>pieza_2a</th>
    <th>pieza_3a</th>
    <th>pieza_4a</th>
    <th>pieza_5a</th>
    </tr>";

foreach($arr as $key=>$valor) {
	//$eti=$key;
	$valor=$valor;
echo "<tr>";
//echo "<td>".$eti."</td>";
echo "<td>".$valor."</td>";
echo "</tr>";
//echo $eti;
echo $valor;
}
echo "</table>";*/

?>