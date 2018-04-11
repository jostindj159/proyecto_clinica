<?php
session_start();
require_once('../controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
}
require_once('../model/conexion.php');
require_once('../model/m_recordTratamiento.php');
require_once('../controller/c_recordTratamiento.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Record de Tratamiento</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link  rel="stylesheet" type="text/css" href="../recursos/css/estilos.css"/>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/ocultar2.js"></script>
	<style type="text/css">
		#tablita td{ align:right; }
	</style>
</head>

<body class="">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
	<ul class="nav navbar-nav">
		<li class="active"><a href="../index.php?accion=Panel">Panel Principal</a></li>
		<li class="active"><a href="v_ficha.php">Ficha de Datos</a></li>
		<li class="active"><a href="v_fichaei.php">Ficha de Examen De Ingreso</a></li>
		<li class="active"><a href="v_tratPres.php">Ficha de Tratamientos y Presupuestos  Particular</a></li>
		<li class="active"><a href="#">Ficha de Record de Tratamiento</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="../index.php?accion=Salir"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
	</ul>
  </div>
</nav>
<center>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Ver fichas registradas
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
      <h4 class="modal-title">fichas registradas</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?php 
      cargarRecord();
      ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>

      </div>
    </div>
  </div>
</center>
<form action="../controller/c_recordTratamiento_guardar.php" method="post" >
  <center>
    <div class="panel panel-danger">

	  <div class="panel-heading">FICHA DE EXAMEN DE INGRESO:</div>
		<div class="panel-body">
		<div class="col-xs-1"></div>

		<div class="col-xs-3">
			<label>Fecha:</label>
			<input type="date" class="form-control" id="txtFecha" name="txtFecha">
		</div>

		<div class="col-xs-6">
			<label>Nro de historia clinica:</label>
			<select class="form-control" id="sel1" required="required" name="txtHistoria">
				<option value="">--Seleccione--</option>
				<?php Select();?>
			</select><br /><br />
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
	  <input type="text" class="form-control" id="txtTPSoles" name="txtTPSoles" placeholder="S/.">
	</div>
	 
	<div class="col-xs-3" >
	  <input type="text" class="form-control" id="txtTPDolar" name="txtTPDolar" placeholder="$"><br>
	</div>  
	<div class="col-xs-2" ></div>
</div>
<div class="row">
	<div class="col-xs-2" ></div>
	<div class="col-xs-2" >
		<label>Cuota Inicial: </label>
	</div>

	<div class="col-xs-3" >
	  <input type="text" class="form-control" id="txtCISoles" name="txtCISoles" placeholder="S/.">
	</div>
	 
	<div class="col-xs-3" >
	  <input type="text" class="form-control" id="txtCIDolar" name="txtCIDolar" placeholder="$"><br>
	</div> 
	<div class="col-xs-2" ></div>
</div>
<hr>
<div class="col-xs-3">
<button class="btn-success btn btn-block" type="button" id="btn-alumno-agregar" >Otro</button>
</div>
<div class="col-xs-9"><br><br></div>
<center>
	<div class="row">
		<div class="col-xs-4"><label>RECORD DE TRATAMIENTO</label></div>
		<div class="col-xs-8"><label>ESTADO DE CUENTA</label></div>
	</div>
</center>



<div class="col-xs-12">
<div id="alumnos" class="row">
<div id="lo-que-vamos-a-copiar">
	<?php $x = 1; for($x; $x <= 1; $x++): ?>
	<div class="col-xs-12">
        <div class="well well-sm">
			    <div class="col-xs-2">
					<label>Fecha</label>
				    <input type="date" class="form-control" name="txtRTFecha[]">
			    </div>
			    <div class="col-xs-2">
			    	<label>Atencion</label>
				    <input type="text" class="form-control" name="txtRTAtencion[]">
			    </div>
			    <div class="col-xs-1"> 
					<label>DR.</label>
				    <input type="text" class="form-control" name="txtDR[]">
			    </div>
			    <div class="col-xs-2">
					<label>Fecha</label>
				    <input type="date" class="form-control" name="txtECFecha[]">
			    </div>
			    <div class="col-xs-2"> 
					<label>$S/.TC</label>
				    <input type="text" class="form-control" name="txtTC[]">
			    </div>
			    <div class="col-xs-1"> 
					<label>Acta</label>
				    <input type="text" class="form-control" name="txtActa[]">
			    </div>
			    <div class="col-xs-1"> 
					<label>Saldo</label>
				    <input type="text" class="form-control" name="txtsaldo[]">
			    </div><br>
			    <div class="col-xs-1"> 
			        <button class="btn-danger btn btn-block btn-retirar-alumno" type="button">-</button>
			    </div>
			    <br><br>
        	
        </div> 
    <?php endfor; ?> 
	</div>
</div>
</div>
<hr>	

<div class="col-xs-12">
	<h3>Laboratorios</h3>
</div>
<div class="col-xs-12">
	<input type="text" name="txtLabA" class="form-control" placeholder="A"><br>
</div>
<div class="col-xs-12">
	<input type="text" name="txtLabB" class="form-control" placeholder="B"><br>
</div>
<div class="col-xs-12">
	<input type="text" name="txtLabC" class="form-control" placeholder="C"><br>
</div>
<center>
<button type="submit" class="btn btn-info btn-lg" id="btnGuardar" name="btnGuardar"><em class="fa fa-user-plus"></em>Guardar </button>
</center>
</form>

</body>

</html>
	<script type="text/javascript">
	var formulario_alumno = $("#lo-que-vamos-a-copiar").html();
	</script>
	<script type="text/javascript">
			// El encargado de agregar más formularios
		$("#btn-alumno-agregar").click(function(){

		    // Agregamos el formulario
		    $("#alumnos").prepend(formulario_alumno);

		    // Agregamos un boton para retirar el formulario
		    //$("#alumnos .col-xs-4:first .well").append('<button class="btn-danger btn btn-block btn-retirar-alumno" type="button">Retirar</button>');

		    // Hacemos focus en el primer input del formulario
		    $("#alumnos .col-xs-12:first .well input:first").focus();

		});

		// Cuando hacemos click en el boton de retirar
		$("#alumnos").on('click', '.btn-retirar-alumno', function(){
	    	$(this).closest('.col-xs-12').remove();
		})
	</script>