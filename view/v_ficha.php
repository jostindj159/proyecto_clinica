<?php
session_start();
require_once('../controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
}
require_once('../model/conexion.php');
require_once('../model/m_ficha.php');
require_once('../controller/c_ficha.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  	<meta charset="utf-8">
  	<title>Registrar ficha</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../recursos/css/estilos.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/ocultar2.js"></script>
	<style type="text/css">
		#ajusto{ text-align: right; }
	</style>
</head>

<body>
<div class="row">
	<!--cel - tablet - pc-->
	<div class="col-xs-12 col-sm-12 col-lg-12">	
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="../index.php?accion=Panel">Panel Principal</a></li>
		     <li class="active"><a href="#">Ficha de Datos</a></li>
			 <li class="active"><a href="v_fichaei.php">Ficha de Examen De Ingreso</a></li>
		      <li class="active"><a href="v_tratPres.php">Ficha de Tratamientos y Presupuestos  Particular</a></li>
		      <li class="active"><a href="v_recordTratamiento.php">Ficha de Record de Tratamiento</a></li>

		  </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="../index.php?accion=Salir"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
		    </ul>
		  </div>
		</nav>
	</div>
</div>
<center>
<div class="row">
	<!--cel - tablet - pc-->
	<div class="col-xs-12 col-sm-12 col-lg-12">	
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
			cargar2();
			?>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			</div>

			</div>
		</div>
	</div>
	</div>
</div>
</center>	
<div id="col-sm-4" class="fondo-radial">

	<form role="form" class="form-horizontal" method="post" action="../controller/c_ficha.php">
	  <center>
	    <div class="panel panel-danger">
		  <div class="panel-heading">Nro de Historia Clinica:</div>
		  <div class="panel-body">
			<div class="col-xs-3"></div>
			<div class="col-xs-6">
			<input type="text" class="form-control" id="txtnroh" name="txtnroh" value="<?php MaxnumHistorial();?>"  disabled ><br /><br />
			</div>
			<div class="col-xs-3"></div>
		  </div>
		</div>
	
<div class="row">
	<!--cel - tablet - pc-->
	<div class="col-xs-0 col-sm-1 col-lg-1"></div>
	<div class="col-xs-6 col-sm-5 col-lg-5">
	  	<label>Fecha:</label>
		<input type="date" class="form-control" id="txtFecha" name="txtFecha">
	</div>
	
	<div class="col-xs-6 col-sm-5 col-lg-5">
	  	<label>DR.TTE:   </label>
	   	<select class="form-control" id="sel1" required="required" name="txtDr">
                      <?php Select();?>
       	</select><br>
	  	<!--<input type="text" class="form-control" id="txtDr" name="txtDr" >-->
	</div>
</div>
<div class="row">
	  <div class="col-xs-0 col-sm-1 col-lg-1"></div>
	  <div class="col-xs-6 col-sm-5 col-lg-5">
		<label>Nombre y Apellidos:</label>
	  <input type="text" class="form-control" id="txtNombre" name="txtNombre" required="true"><br /><br />
	  </div>
	  <div class="col-xs-6 col-sm-5 col-lg-5">
		<label>DNI/CE/Passport:   </label>
	  	<input type="text" class="form-control" id="txtDNI" name="txtDNI" ><br /><br />
	  </div>
</div>
<div class="row">
	<div class="col-xs-0 col-sm-1 col-lg-1"></div>
	<div class="col-xs-4 col-sm-3 col-lg-3">
		<label>Edad:   </label>
		<input type="text" class="form-control" id="txtEdad" name="txtEdad" ><br /><br />
	</div>
	<div class="col-xs-4 col-sm-4 col-lg-4">
		<label>Fecha de Nacimiento:   </label>
		<input type="date" class="form-control" id="txtFecN" name="txtFecN" ><br /><br />
	</div>
	<div class="col-xs-4 col-sm-3 col-lg-3">
		<label>Lugar de Nacimiento:   </label>
		<input type="text" class="form-control" id="txtLugN" name="txtLugN" ><br /><br />
	</div>
</div>	
<div class="row">
	<div class="col-xs-0 col-sm-1 col-lg-1"></div>
	<div class="col-xs-6 col-sm-5 col-lg-5">
		<label>Apoderado:   </label>
		<input type="text" class="form-control" id="txtApoderado" name="txtApoderado" ><br /><br />
	</div>
	<div class="col-xs-6 col-sm-5 col-lg-5">
		<label>Parentesco:   </label>
		<input type="text" class="form-control" id="txtParentesco" name="txtParentesco" ><br /><br />
	</div>
</div>
<div class="row">
	  <div class="col-xs-0 col-sm-3 col-lg-3"></div>
	  <div class="col-xs-12 col-sm-6 col-lg-6">
		<label>Lugar de procedencia:   </label>
	  <input type="text" class="form-control" id="txtLugP" name="txtLugP" ><br /><br />
	  </div>
</div>
<div class="row">
	  <div class="col-xs-0 col-sm-3 col-lg-3"></div>
	  <div class="col-xs-12 col-sm-6 col-lg-6">
		<label>Direccion:   </label>
	  <input type="text" class="form-control" id="txtDirec" name="txtDirec" ><br /><br />
	  </div>
</div>
<div class="row">
	  <div class="col-xs-0 col-sm-1 col-lg-1"></div>
	  <div class="col-xs-6 col-sm-5 col-lg-5">
		<label>Distrito:   </label>
	  <input type="text" class="form-control" id="txtDistrito" name="txtDistrito" >
	  </div>
	  <div class="col-xs-6 col-sm-5 col-lg-5">
		<label>Codigo Postal:   </label>
		<input type="text" class="form-control" id="txtCodP" name="txtCodP" ><br /><br />
	  </div>
</div>
<div class="row">
	<div class="col-xs-0 col-sm-1 col-lg-1"></div>
	<div class="col-xs-4 col-sm-3 col-lg-3">
		<label>E-mail:   </label>
		<input type="text" class="form-control" id="txtEmail" name="txtEmail" ><br /><br />
	</div>
	<div class="col-xs-4 col-sm-4 col-lg-4">
		<label>Telefono:   </label>
		<input type="text" class="form-control" id="txtTelef" name="txtTelef" ><br /><br />
	</div>
	<div class="col-xs-4 col-sm-3 col-lg-3">
		<label>Celular:   </label>
		<input type="text" class="form-control" id="txtCel" name="txtCel" ><br /><br />
	</div>
</div>
<div class="row">
	<div class="col-xs-0 col-sm-1 col-lg-1"></div>
	<div class="col-xs-6 col-sm-5 col-lg-5">
		<label>Centro de trabajo o Estudios:</label>
		<input type="text" class="form-control" id="txtCentro" name="txtCentro" ><br /><br />
	</div>
	<div class="col-xs-6 col-sm-5 col-lg-5">
		<label>Telf.Ofic:</label>
		<input type="text" class="form-control" id="txtTelfOf" name="txtTelfOf" ><br /><br />
	</div>
</div>
<div class="row">
	<div class="col-xs-0 col-sm-3 col-lg-3"></div>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<label>Recomendado por:</label>
	  	<input type="text" class="form-control" id="txtRecomendado" name="txtRecomendado" ><br /><br />
	</div>
</div>
<div class="row">
	<div class="col-xs-0 col-sm-3 col-lg-3"></div>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<label>Motivo de Consulta:</label>
		<textarea class="form-control" id="txtMotivo" name="txtMotivo" ></textarea><br /><br />
	</div>
</div>

		<!--CASOS DE EMERGENCIA-->

<!--<div class="panel panel-warning">-->

<h4 align="center">PARA CASOS DE EMEGENCIA DAR LOS SIGUIENTES DATOS:</h4>

<div class="row">
	<div class="col-xs-0 col-sm-3 col-lg-3"></div>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<label>Medico de Confianza:   </label>
  		<input type="text" class="form-control" id="txtMedicoc" name="txtMedicoc" ><br />
  	</div>
</div>
<div class="row">
	<div class="col-xs-0 col-sm-1 col-lg-1"></div>
	<div class="col-xs-6 col-sm-5 col-lg-5">
		<label>En caso de emergencia contactar:   </label>
  		<input type="text" class="form-control" id="txtContactoe" name="txtContactoe" ><br /><br />
  	</div>
	<div class="col-xs-6 col-sm-5 col-lg-5">
		<label>Telefono:</label>
		<input type="text" class="form-control" id="txtTelefEmerg" name="txtTelefEmerg" ><br /><br />
	</div>
</div>

		<!--HISTORIA CLINICA-->
<div class="panel panel-primary">
	<div class="panel-heading">
		<b>HISTORIA CLINICA:</b>
	</div>
	<div class="panel-body">
			<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Es alergico a algun medicamento:</label>
					<label class="radio-inline"><input type="radio" id="mostrar1" name="optradio1" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar1" name="optradio1" value="NO" checked>NO </label>
				</div>
				<div style="display:none;" id="target1" class="col-xs-12 col-sm-12 col-lg-12" align="left">
					<label>Cuales:   </label>
					<input  type="text"  class="form-control" id="txtCuales1"  name="txtCuales1" ><br /><br />
				</div>
			</div>
			<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Toma algun tipo de medicamento:</label>
					<label class="radio-inline"><input type="radio" id="mostrar2" name="optradio2" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar2" name="optradio2" value="NO" checked>NO</label>
				</div>
				<div style="display:none;" id="target2" class="col-xs-12 col-sm-12 col-lg-12">
					<label>Cuales:   </label>
		  			<input type="text" class="form-control" id="txtCuales2" name="txtCuales2" ><br /><br />
		  		</div>
		  	</div>
		  	<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Ha padecido Hepatitis:</label>
					<label class="radio-inline"><input type="radio" id="mostrar3" name="optradio3" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar3" name="optradio3" value="NO" checked>NO</label>
				</div>
				<div style="display:none;" id="target3" class="col-xs-12 col-sm-12 col-lg-12">
					<label>Tipo:</label>
		  			<input type="text" class="form-control" id="txtTipo" name="txtTipo" ><br /><br />
		  		</div>
		  	</div>
		  	<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Sufre de Diabetes:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar4" name="optradio4" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar4" name="optradio4" value="NO" checked>NO</label>
				</div>	
				<div style="display:none;" id="target4" class="col-xs-12 col-sm-12 col-lg-12">
					<label>Esta en tratamiento:   </label>
		  			<input type="text" class="form-control" id="txtTratamiento" name="txtTratamiento" ><br /><br />
		  		</div>
			</div>
			<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Sufre de Presion Alta:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar5" name="optradio5" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar5" name="optradio5" value="NO" checked>NO</label>
				</div>
				<div style="display:none;" id="target5" class="col-xs-12 col-sm-12 col-lg-12">
					<label>Que medicamentos toma:   </label style="display:none;">
		  			<input type="text" class="form-control" id="txtMedicamentos" name="txtMedicamentos" ><br /><br />
		  		</div>
		  	</div>
		  	<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Fuma:</label>
					<label class="radio-inline"><input type="radio" id="mostrar6" name="optradio6" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar6" name="optradio6" value="NO" checked>NO</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Esta usted embarazada:</label>
					<label class="radio-inline"><input type="radio" id="mostrar7" name="optradio7" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" name="optradio7" value="NO" checked>NO</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Padece de hemorragias:</label>
					<label class="radio-inline"><input type="radio" id="mostrar8" name="optradio8" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" name="optradio8" value="NO" checked>NO</label>
				</div>
			</div>
	</div>
</div>
  
<!--ANTENCEDENTES ODONTOLOGICOS-->
<div class="panel panel-primary">
	<div class="panel-heading">ANTECEDENTES ODONTOLOGICOS:</div>
		<div class="panel-body">
	  	  	<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Reacciones a la anastecia dental:</label>
					<label class="radio-inline"><input type="radio" id="mostrar9" name="optradio9" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar9" name="optradio9" value="NO" checked>NO</label>
				</div>
	    	</div>
	  	  	<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Padece de algun dolor dental o en la cavidad oral:</label>
					<label class="radio-inline"><input type="radio" id="mostrar10" name="optradio10" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" name="optradio10" value="NO" checked>NO</label>
		  		</div>
	    	</div>
	  	  	<div class="row">
				<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Siente mal olor o sabor en la boca:</label>
					<label class="radio-inline"><input type="radio" id="mostrar11" name="optradio11" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" name="optradio11" value="NO" checked>NO</label>
		  		</div>
	    	</div>
	  	  	<div class="row">
		  		<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Siente chasquidos o ruidos al masticar o abrir la boca:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar12" name="optradio12" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" name="optradio12" value="NO" checked>NO</label>
		  		</div>
	    	</div>
	  	  	<div class="row">
			    <div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Siente dolor en la articulacion mandibular:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar13" name="optradio13" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar13" name="optradio13" value="NO" checked>NO</label>
			  	</div>
	    	</div>
	  	  	<div class="row">
			    <div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Esta satisfecho con su sonrisa:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar14" name="optradio14" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar14" name="optradio14" value="NO" checked>NO</label>
			  	</div>
	    	</div>
	  	  	<div class="row">
		    	<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Le han extraido muelas:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar15" name="optradio15" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar15" name="optradio15" value="NO" checked>NO</label>
		  		</div>
	    	</div>
	  	  	<div class="row">
		 	  	<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Realizo blanqueamiento dental:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar16" name="optradio16" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar16" name="optradio16" value="NO" checked>NO</label>
				</div>
				<div style="display:none;" id="target6" class="col-xs-12 col-sm-12 col-lg-12">
					<label>Hace cuanto tiempo:   </label style="display:none;">
				  	<input type="text" class="form-control" id="txtCuantot" name="txtCuantot" ><br /><br />
				</div>
	    	</div>
	  	  	<div class="row">
		  	  	<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Usa algun tipo de protesis:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar17" name="optradio17" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar17" name="optradio17" value="NO" checked>NO</label>
				</div>
				<div style="display:none;" id="target7" class="col-xs-12 col-sm-12 col-lg-12">
					<label>Que tipo:   </label style="display:none;">
	  				<input type="text" class="form-control" id="txtTipop" name="txtTipop" ><br /><br />
	  			</div>
	    	</div>
	  	  	<div class="row">
		  	  	<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>A parte del cepillo, utiliza otro aditamento para limpiar sus dientes:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar18" name="optradio18" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar18" name="optradio18" value="NO" checked>NO</label>
				</div>
				<div style="display:none;" id="target8" class="col-xs-12 col-sm-12 col-lg-12">
					<label>Cuales:   </label style="display:none;">
	    			<input type="text" class="form-control" id="txtCuala" name="txtCuala" ><br /><br />
	  			</div>
		    </div>
	  	  	<div class="row">
		  	  	<div class="col-xs-0 col-sm-2 col-lg-2"></div>
				<div class="col-xs-12 col-sm-6 col-lg-6" id="ajusto">
					<label>Le sangran las encias:   </label>
					<label class="radio-inline"><input type="radio" id="mostrar19" name="optradio19" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar19" name="optradio19" value="NO" checked>NO</label>
				</div>
				<div style="display:none;" id="target9" class="col-xs-12 col-sm-12 col-lg-12">
					<label>Fecha de ultima profilaxia:   </label style="display:none;">
					<input type="text" class="form-control" id="txtUltimap" name="txtUltimap" ><br /><br />
				</div><br /><br />
			</div><hr>
	  	  	<div class="row">
		  	  	<div class="col-xs-0 col-sm-1 col-lg-1"></div>
				<div class="col-xs-12 col-sm-10 col-lg-10">
					<label>Frecuencia con que va al dentista:   </label>
					<input type="text" class="form-control" id="txtFrecuenciad" name="txtFrecuenciad" ><br /><br />
				</div>
			</div>
	  	  	<div class="row">
		    	<div class="col-xs-0 col-sm-1 col-lg-1"></div>
				<div class="col-xs-12 col-sm-10 col-lg-10">
					<label>Experiencias dentales traumaticas:   </label>
					<input type="text" class="form-control" id="txtTraumas" name="txtTraumas" ><br /><br />
				</div>
			</div>
	</div>
</div>


</center>
<div class="row">
	<div class="col-xs-5 col-sm-5 col-lg-5"></div>
	<div class="col-xs-2 col-sm-2 col-lg-2" id="ajusto">
	<button type="submit" class="btn btn-info btn-lg" id="btnEnviar" name="btnEnviar"><em class="fa fa-user-plus"></em>Enviar</button><br /><br />
	</div>
</div>

</form>

</body>
</html>
