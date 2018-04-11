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
function c_seleccionarRecord(){
	if(isset($_GET['numero_h'])){
	$Fich = new tratamiento();
	$numero_h=$_GET['numero_h'];
	//$nombre = $_GET['nombre'];
	//$dni = $_GET['dni'];
	//$fono = $_GET['fono'];
		$filas=$Fich->cargarFicha_Record($numero_h);
		foreach($filas as $fila1){ ?>

		<form action="../controller/c_recordTratamiento_guardar.php" method="post" >
  <center>
    <div class="panel panel-danger">

	  <div class="panel-heading">FICHA DE EXAMEN DE INGRESO:</div>
		<div class="panel-body">
		<div class="col-xs-1"></div>

		<div class="col-xs-3">
			<label>Fecha:</label>
			<input type="date" class="form-control" id="txtFecha" name="txtFecha" value="<?php echo $fila1['fecha'];?>">
		</div>

		<div class="col-xs-6">
			<label>Nro de historia clinica:</label>
		<input type="text" class="form-control"   name="numero_h" value="<?php echo $fila1['numero_h'];?>" ><br /><br />
		</div><br /><br />

		</div>
		<div class="col-xs-3"></div>
	</div>
  </center>
<!-- //////////////////////////////////////////////////////////-->	
<div class="row">
	<div class="col-xs-2" ></div>
	<div class="col-xs-2" >
		<label>Total de Presupuesto Particular: </label>
	</div>

	<div class="col-xs-3" >
	  <input type="text" class="form-control" id="txtTPSoles" name="txtTPSoles" placeholder="S/." value="<?php echo $fila1['tpps'];?>">
	</div>
	 
	<div class="col-xs-3" >
	  <input type="text" class="form-control" id="txtTPDolar" name="txtTPDolar" placeholder="$" value="<?php echo $fila1['tppd'];?>"><br>
	</div>  
	<div class="col-xs-2" ></div>
</div>
<div class="row">
	<div class="col-xs-2" ></div>
	<div class="col-xs-2" >
		<label>Cuota Inicial: </label>
	</div>

	<div class="col-xs-3" >
	  <input type="text" class="form-control" id="txtCISoles" name="txtCISoles" placeholder="S/." value="<?php echo $fila1['cis'];?>">
	</div>
	 
	<div class="col-xs-3" >
	  <input type="text" class="form-control" id="txtCIDolar" name="txtCIDolar" placeholder="$" value="<?php echo $fila1['cid'];?>"><br>
	</div> 
	<div class="col-xs-2" ></div>
</div>
<hr>

<?php 
$Fich2 = new tratamiento();
$filas2=$Fich2->listarRecord($numero_h);?>
	<div class="col-xs-2"></div>
	<div class="col-xs-8">
		<table border="1" class="table">
			<tr>
				<th>Fecha</th>
				<th>Atencion</th>
				<th>Dr.</th>
				<th>Fecha</th>
				<th>$ S/.TC</th>
				<th>Acta</th>
				<th>saldo</th>
			</tr>
	
		<?php foreach($filas2 as $fila){
		echo "<tr >";
        echo "<td>".$fila['rtfecha']."</td>";
        echo "<td>".$fila['rtatencion']."</td>";
        echo "<td>".$fila['ecdr']."</td>";
        echo "<td>".$fila['ecfecha']."</td>";
        echo "<td>".$fila['ectc']."</td>";
        echo "<td>".$fila['ecacta']."</td>";
        echo "<td>".$fila['ecsaldo']."</td>";
        echo "</tr>";
		 }?>
		</table>
	</div>
<hr>	

<div class="col-xs-12">
	<h3>Laboratorios</h3>
</div>
<div class="col-xs-12">
	<input type="text" name="txtLabA" class="form-control" placeholder="A" value="<?php echo $fila1['laba'];?>"><br>
</div>
<div class="col-xs-12">
	<input type="text" name="txtLabB" class="form-control" placeholder="B" value="<?php echo $fila1['labb'];?>"><br>
</div>
<div class="col-xs-12">
	<input type="text" name="txtLabC" class="form-control" placeholder="C" value="<?php echo $fila1['labc'];?>"><br>
</div>
<!--<center>
<button type="submit" class="btn btn-info btn-lg" id="btnGuardar" name="btnGuardar"><em class="fa fa-user-plus"></em>Guardar </button>
</center>-->
</form>

<?php 		
		}
	}
}

?>		