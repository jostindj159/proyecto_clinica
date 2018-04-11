<?php 
require_once('c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link  rel="stylesheet" type="text/css" href="../recursos/css/estilos.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/ocultar2.js"></script>
</head>
<body>
<?php 
error_reporting(0);
function c_seleccionarfei(){
	if(isset($_GET['numero_h'])){
	$Fich = new Ex();
	$numero_h=$_GET['numero_h'];
	//$nombre = $_GET['nombre'];
	//$dni = $_GET['dni'];
	//$fono = $_GET['fono'];
		$filas=$Fich->cargarFicha_ei($numero_h);
		foreach($filas as $fila1){ ?>
		
			<form action="../controller/c_modificarFicha_ei.php" method="post"  >
			  <center>
				<div class="panel panel-danger">
					<div class="panel-heading">FICHA DE EXAMEN DE INGRESO:</div>
						<div class="panel-body">
						<div class="col-xs-1"></div>
							<div class="col-xs-3">
							<label>Fecha:</label>
							<input type="date" class="form-control" id="txtFecha" name="fecha" value="<?php echo $fila1['fecha'];?>">
							</div>

							<div class="col-xs-6">
							<label>Nro de historia clinica:</label>
							<input type="text" class="form-control"   name="numero_h" value="<?php echo $fila1['numero_h'];?>" ><br /><br />
							</div><br /><br />
						</div>
					<div class="col-xs-3"></div>
				</div>
					
				<div class="col-xs-12" >
				  <h3>Motivo de Consulta: </h3>
				  <input type="text" class="form-control" id="txtRecomendado" name="motivo_c"  value="<?php echo $fila1['motivo_c']; ?>"><br /><br />
				</div>

				<div class="col-xs-12" >
				  <h3>Examen de Ingreso: </h3>
				  <input type="text" class="form-control" id="txtRecomendado" name="examen_i" value="<?php echo $fila1['examen_i'];?>"><br />
				</div>
	   
			<div class="col-xs-12" >
			  	<h3>Examenes Auxiliares: </h3>
				<div class="col-xs-12">

				 	<table border="1" class="table" id="tablita">
						<tr class="info">
							<td class="col-xs-12 col-lg-6" align="left"><label>Radiografias:</label>
								<?php 
								$rpta=$fila1['radiografias'];
									if ($rpta == "SI"){ 
										$check_si = "checked"; 
										$check_no = ""; 
									}else{
										$check_si = ""; 
										$check_no = "checked"; 
									}
								?>
								<label class="radio-inline"><input type="radio" id="mostrar1" name="radiografias" <?php echo $check_si; ?> value="SI">SI</label>
								<label class="radio-inline"><input type="radio" id="ocultar1" name="radiografias" <?php echo $check_no; ?> value="NO">NO</label>
							</td>
						</tr>      
						<tr class="info">
							<td><label>Periodontograma:</label>
								<?php 
								$rpta=$fila1['periodontograma'];
									if ($rpta == "SI"){ 
										$check_si = "checked"; 
										$check_no = ""; 
									}else{
										$check_si = ""; 
										$check_no = "checked"; 
									}
								?>
								<label class="radio-inline"><input type="radio" id="mostrar1" name="periodontograma" <?php echo $check_si; ?> value="SI">SI</label>
								<label class="radio-inline"><input type="radio" id="ocultar1" name="periodontograma" <?php echo $check_no; ?> value="NO">NO</label>
							</td>
					    </tr>
					    <tr class="info">
							<td ><label>Fotografia Clinica:</label>
								<?php 
								$rpta=$fila1['f_clinica'];
									if ($rpta == "SI"){ 
										$check_si = "checked"; 
										$check_no = ""; 
									}else{
										$check_si = ""; 
										$check_no = "checked"; 
									}
								?>
								<label class="radio-inline"><input type="radio" id="mostrar1" name="f_clinica" <?php echo $check_si; ?> value="SI">SI</label>
								<label class="radio-inline"><input type="radio" id="ocultar1" name="f_clinica" <?php echo $check_no; ?> value="NO">NO</label>
							</td>
					    </tr>   
						<tr class="info">
							<td ><label>Presion Arterial:</label>
									<?php 
									$rpta=$fila1['p_arterial'];
										if ($rpta == "SI"){ 
											$check_si = "checked"; 
											$check_no = ""; 
										}else{
											$check_si = ""; 
											$check_no = "checked"; 
										}
									?>
								<label class="radio-inline"><input type="radio" id="mostrar1" name="p_arterial" <?php echo $check_si; ?> value="SI">SI</label>
								<label class="radio-inline"><input type="radio" id="ocultar1" name="p_arterial" <?php echo $check_no; ?> value="NO">NO</label>
							</td>
						</tr>
						<tr class="info">
							<td ><label>Examenes de Laboratorio:</label>
									<?php 
									$rpta=$fila1['e_laboratorio'];
										if ($rpta == "SI"){ 
											$check_si = "checked"; 
											$check_no = ""; 
										}else{
											$check_si = ""; 
											$check_no = "checked"; 
										}
									?>
								<label class="radio-inline"><input type="radio" id="mostrar1" name="e_laboratorio"<?php echo $check_si; ?> value="SI">SI</label>
								<label class="radio-inline"><input type="radio" id="ocultar1" name="e_laboratorio"<?php echo $check_no; ?> value="NO">NO</label>
							</td>
						</tr>		
						<tr class="info">
							<td ><label>Modelos de Estudio:</label>
									<?php 
									$rpta=$fila1['m_estudio'];
										if ($rpta == "SI"){ 
											$check_si = "checked"; 
											$check_no = ""; 
										}else{
											$check_si = ""; 
											$check_no = "checked"; 
										}
									?>
								<label class="radio-inline"><input type="radio" id="mostrar1" name="m_estudio"<?php echo $check_si; ?> value="SI">SI</label>
								<label class="radio-inline"><input type="radio" id="ocultar1" name="m_estudio"<?php echo $check_no; ?> value="NO">NO</label>
							</td>
						</tr>
						<tr class="info">
							<td >
								<label>Tomografia:</label>
									<?php 
									$rpta=$fila1['tomografia'];
										if ($rpta == "SI"){ 
											$check_si = "checked"; 
											$check_no = ""; 
										}else{
											$check_si = ""; 
											$check_no = "checked"; 
										}
									?>
								<label class="radio-inline"><input type="radio" id="mostrar1" name="tomografia"<?php echo $check_si; ?> value="SI">SI</label>
								<label class="radio-inline"><input type="radio" id="ocultar1" name="tomografia"<?php echo $check_no; ?> value="NO">NO</label>
							</td>
						</tr>	
						<tr class="info">
							<td ><label>Analisis de Sonrisa:</label>
								<?php 
									$rpta=$fila1['a_sonrisa'];
										if ($rpta == "SI"){ 
											$check_si = "checked"; 
											$check_no = ""; 
										}else{
											$check_si = ""; 
											$check_no = "checked"; 
										}
									?>
							<label class="radio-inline"><input type="radio" id="mostrar1" name="a_sonrisa"<?php echo $check_si; ?> value="SI">SI</label>
							<label class="radio-inline"><input type="radio" id="ocultar1" name="a_sonrisa"<?php echo $check_no; ?> value="NO">NO</label>
						</td>
					</table>
				</div>
			</div>

		  	<div class="col-xs-12" >
			  <h1>Informe/Interconsulta: </h1>
			  <input type="text" class="form-control" id="txtRecomendado" name="informe" value="<?php echo $fila1['informe'];?>"><br /><br />
			</div>

			<!--<div class="col-xs-2">
			<button class="btn-success btn btn-block" type="button" id="btn-alumno-agregar" >Otro</button>
			</div>-->
			<div class="col-xs-12">
			<div id="alumnos" class="row">
				<div id="lo-que-vamos-a-copiar">
					<?php 
					$Fich2 = new Ex();
					$filas2=$Fich2->listarMuelas($numero_h);?>
						<div class="col-xs-2"></div>
						<div class="col-xs-8">
							<table border="1" class="table">
								<tr>
									<th>Pieza</th>
									<th>area</th>
									<th>diag</th>
								</tr>
						
							<?php foreach($filas2 as $fila){
							echo "<tr >";
					        echo "<td>".$fila['pieza']."</td>";
					        echo "<td>".$fila['area']."</td>";
					        echo "<td>".$fila['diag']."</td>";
					        echo "</tr>";
							 }?>
							</table>
						</div>
					<!--<div class="col-xs-12">
				        <div class="well well-sm">
							<div class="col-xs-3">
								<label>Pieza:</label>
								    <select class="form-control" id="sel1"  name="Pieza[]">
									 <option value="">--Seleccione--</option>
							         <option value="1">Pieza 1</option>";
							         <option value="2">Pieza 2</option>";
							         <option value="3">Pieza 3</option>";
							         <option value="4">Pieza 4</option>";
							         <option value="5">Pieza 5</option>";
							         <option value="6">Pieza 6</option>";
							         <option value="7">Pieza 7</option>";
							         <option value="8">Pieza 8</option>";
							         <option value="9">Pieza 9</option>";
							         <option value="10">Pieza 10</option>";
							         <option value="11">Pieza 11</option>";
							         <option value="12">Pieza 12</option>";
							         <option value="13">Pieza 13</option>";
							         <option value="14">Pieza 14</option>";
							         <option value="15">Pieza 15</option>";
							         <option value="16">Pieza 16</option>";
							         <option value="17">Pieza 17</option>";
							         <option value="18">Pieza 18</option>";
							         <option value="19">Pieza 19</option>";
							         <option value="20">Pieza 20</option>";
							         <option value="21">Pieza 21</option>";
							         <option value="22">Pieza 22</option>";
							         <option value="23">Pieza 23</option>";
							         <option value="24">Pieza 24</option>";
							         <option value="25">Pieza 25</option>";
							         <option value="26">Pieza 26</option>";
							         <option value="27">Pieza 27</option>";
							         <option value="28">Pieza 28</option>";
							         <option value="29">Pieza 29</option>";
							         <option value="30">Pieza 30</option>";
							         <option value="31">Pieza 31</option>";
							         <option value="32">Pieza 32</option>";
							        </select>
							    </div>
							    <div class="col-xs-3">
							    <label>Area:</label>
								    <select class="form-control" id="sel1" " name="txtArea[]">
									 <option value="">--Seleccione--</option>
							         <option value="A">A</option>";
							         <option value="B">B</option>";
							         <option value="C">C</option>";
							         <option value="D">D</option>";
							         <option value="E">E</option>";

							        </select>
							       </div>
							       <div class="col-xs-3"> 
								<label>Diagnostico:</label>
								    <input type="text" class="form-control" name="txtDiag[]">
							    </div><br>
							    <div class="col-xs-3"> 
							        <button class="btn-danger btn btn-block btn-retirar-alumno" type="button"> Retirar </button>
							    </div>
							    <br><br>
				        	</div> 
				        </div>  -->
	    			
					</div>
				</div>
	
		<div class="col-xs-12" >
	  <h1>Diagnosticos: </h1>
	  <div class="col-xs-12">

	 	<table border="1" class="table">
	 
		<tr class="info">
		<td ><label>Caries:</label>
			<?php 
			$rpta=$fila1['caries'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="caries" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="caries" <?php echo $check_no; ?> value="NO">NO</label></td>
	      
			<tr class="info">
			<td ><label>Pulpitis:</label>
			<?php 
			$rpta=$fila1['pulpitis'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="pulpitis" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="pulpitis" <?php echo $check_no; ?> value="NO">NO</label></td>
	     
		   <tr class="info">
		   <td ><label>Necrosis Pulpar:</label>
		   	<?php 
			$rpta=$fila1['necrosi_p'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="necrosi_p" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="necrosi_p" <?php echo $check_no; ?> value="NO">NO</label></td>
	       
			<tr class="info">
			  <td ><label>Gingivitis Aguda:</label>
			<?php 
			$rpta=$fila1['gingivitis_a'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="gingivitis_a" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="gingivitis_a" <?php echo $check_no; ?> value="NO">NO</label></td>
		
			<tr class="info">
				  <td ><label>Gingivitis Cronica:</label>
			<?php 
			$rpta=$fila1['gingivitis_c'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="gingivitis_c" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="gingivitis_c" <?php echo $check_no; ?> value="NO">NO</label></td>
		
			<tr class="info">
					  <td ><label>Periodontitis Aguda:</label>
			<?php 
			$rpta=$fila1['periodontitis_a'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="periodontitis_a" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="periodontitis_a" <?php echo $check_no; ?> value="NO">NO</label></td>
			
			<tr class="info">
					  <td ><label>Periodontitis Cronica:</label>
			<?php 
			$rpta=$fila1['periodontitis_c'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="periodontitis_c" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="periodontitis_c" <?php echo $check_no; ?> value="NO">NO</label></td>
			
			<tr class="info">
				  <td ><label>Dientes Incluidos:</label>
			<?php 
			$rpta=$fila1['dientes_inclu'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="dientes_inclu" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="dientes_inclu" <?php echo $check_no; ?> value="NO">NO</label></td>
		
		<tr class="info">
				  <td ><label>Dientes Impactados:</label>
			<?php 
			$rpta=$fila1['dientes_impac'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="dientes_impac" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="dientes_impac" <?php echo $check_no; ?> value="NO">NO</label></td>

		<tr class="info">
				  <td ><label>Anomalias Dentofaciales y mal Oclusion:</label>
			<?php 
			$rpta=$fila1['anomalias_dentofaciales'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="anomalias_dentofaciales" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="anomalias_dentofaciales" <?php echo $check_no; ?> value="NO">NO</label></td>

		<tr class="info">
				  <td ><label>Anomalias de la Posicion Dentaria:</label>
			<?php 
			$rpta=$fila1['anomalias_posicion'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="anomalias_posicion" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="anomalias_posicion" <?php echo $check_no; ?> value="NO">NO</label></td>

		<tr class="info">
				  <td ><label>Transtornos de la Articulacion Temporomandibular:</label>
			<?php 
			$rpta=$fila1['transtornos'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="transtornos" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="transtornos" <?php echo $check_no; ?> value="NO">NO</label></td>

		<tr class="info">
				  <td ><label>Perdida de dientes por accidente, extraccion o enfermedad periodontal:</label>
			<?php 
			$rpta=$fila1['perdida_diente'];
				if ($rpta == "SI"){ 
					$check_si = "checked"; 
					$check_no = ""; 
				}else{
					$check_si = ""; 
					$check_no = "checked"; 
				}
			?>
			<label class="radio-inline"><input type="radio" id="mostrar1" name="perdida_diente" <?php echo $check_si; ?> value="SI">SI</label>
		<label class="radio-inline"><input type="radio" id="ocultar1" name="perdida_diente" <?php echo $check_no; ?> value="NO">NO</label></td>
		</table>
	<br/>
	</div>
	 </div>

	 <div class="col-xs-12" >
	  <h1>Diagnostico 1: </h1>
	  <input type="text" class="form-control" id="txtRecomendado" name="diagnostico_a" value="<?php echo $fila1['diagnostico_a'];?>"><br />
	</div>

	<div class="col-xs-12" >
	  <h1>Diagnostico 2: </h1>
	  <input type="text" class="form-control" id="txtRecomendado" name="diagnostico_b" value="<?php echo $fila1['diagnostico_b'];?>"><br />
	</div>

	<div class="col-xs-12" >
	  <h1>Diagnostico 3: </h1>
	  <input type="text" class="form-control" id="txtRecomendado" name="diagnostico_c" value="<?php echo $fila1['diagnostico_c'];?>"><br />
	</div>

	<div class="col-xs-12" >
	  <h1>Diagnostico 4:</h1>
	  <input type="text" class="form-control" id="txtRecomendado" name="diagnostico_d" value="<?php echo $fila1['diagnostico_d'];?>"><br />
	</div>

  <button type="submit" class="btn btn-primary btn-lg" ><em class="fa fa-user-plus"></em>Guardar Cambios</button>
  <br /><br />
  <center>
</center>
 </form>
<?php 		
		}
	}
}

?>
</body>
</html>