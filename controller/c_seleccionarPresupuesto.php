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
//error_reporting(0);
function c_seleccionarPresupuesto(){
	if(isset($_GET['numero_h'])){
	$Fich = new Presupuesto();
	$numero_h=$_GET['numero_h'];
	//$nombre = $_GET['nombre'];
	//$dni = $_GET['dni'];
	//$fono = $_GET['fono'];
		$filas=$Fich->cargarFicha_Presupuesto($numero_h);
		foreach($filas as $fila1){ ?>

		<form   id="mi_formulario" method="POST" action="#">
		<center>

		<div class="panel panel-danger">
		<div class="panel-heading">Ficha de Aceptacion de Tratamientos y Presupuestos de Paciente Particular:</div>

		<div class="panel-body">

			<div class="col-xs-1"></div>
			
			<div class="col-xs-3">
			<label>Fecha:</label>
			<input type="date" class="form-control" id="txtFecha" name="txtFecha">
			</div>

			<div class="col-xs-6">
			<label>Nro de historia clinica:</label>
			<input type="text" class="form-control"   name="numero_h" value="<?php echo $fila1['numero_h'];?>" ><br /><br />

			</div><br/><br/>

		</div>

		<div class="col-xs-3"></div>
		</div>

	<div class="col-xs-4">
      <label>pieza</label>
      <input class="form-control" type="text" name="txtPieza" value="<?php echo $fila1['pieza'];?>"" />
      <br>
	</div>

	<div class="col-xs-4">
      <label>area:</label>
      <input class="form-control" type="text" name="txtArea" value="<?php echo $fila1['area'];?>" />
	</div>

	<div class="col-xs-4">
	  <label>diagostivo:</label>
	  <input class="form-control"  type="text" name="txtDiag" value="<?php echo $fila1['diag'];?>" />
	<br>
    </div>

		<?php 
		$Fich2 = new Presupuesto();
		$filas2=$Fich2->listarPresupuesto($numero_h);?>
			<div class="col-xs-2"></div>
			<div class="col-xs-8">
				<table border="1" class="table">
					<tr>
						<th>Descripcion 1</th>
						<th>Descripcion 1</th>
						<th>Cantidad</th>
						<th>Precio</th>
					</tr>
			
				<?php foreach($filas2 as $fila){
				echo "<tr >";
		        echo "<td>".$fila['Descripcion']."</td>";
		        echo "<td>".$fila['Descripcion2']."</td>";
		        echo "<td>".$fila['costo']."</td>";
		        echo "<td>".$fila['cantidad']."</td>";
		        echo "</tr>";
				 }?>
				</table>
			</div>



	<!--<div class="col-xs-12" id='suma'>
		<div  class="row">
			<div class="col-xs-1" ></div>
			<div class="col-xs-2" ><br>
			<label>Costo Total del Tratamientos: </label>
			</div>

			<div class="col-xs-2" >
			S/<input type="text"   class="form-control" name='total_soles' id='total_soles' value="<?php echo $fila1['costoSoles'];?>"/>
			</div>

			<div class="col-xs-2" >
			$<input type="text"   name='total_dolar' id='total_dolar' class="form-control" value="<?php echo $fila1['costoDolar'];?>" /><br>
			</div>
		</div>

		<div  class="row">
			<div class="col-xs-1" ></div>
			<div class="col-xs-2" ><br>
			<label>Compromiso de Pago:</label>
			</div>

			<div class="col-xs-2" >
			Inicial<input type="text"  placeholder="inicial" name='inicial' id='inicial' class="form-control" value="<?php echo $fila1['inicial'];?>"  />
			</div>

			<div class="col-xs-2" >
			Saldo<input type="text"  placeholder="saldo" name='saldo' id='saldo' class="form-control"  value="<?php echo $fila1['saldo'];?>" />
			</div>

			<div class="col-xs-2" >
			Cuota de<input type="text"  placeholder="cuotas" name='cuotas' id='cuotas' class="form-control" value="<?php echo $fila1['cuotas'];?>"  /><br>
			</div>
		</div>
	</div>	-->			
    <!--<button type="submit" class="btn-success btn btn-block" name="btnagregar">Guardar </button> -->
		</div>
	</div>
	</center>  
 
	</form>




<?php 		
		}
	}
}

?>		