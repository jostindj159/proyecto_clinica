<?php
session_start();
require_once('../controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
}
require_once('../model/conexion.php');
require_once('../model/m_fichaei.php');
require_once('../controller/c_fichaei.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Ficha de Examen de Ingreso</title>
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
		#ajusto { background-color: rgb(163, 223, 253); }
	</style>
</head>

<body class="">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php?accion=Panel">Panel Principal</a></li>
     <li class="active"><a href="v_ficha.php">Ficha de Datos</a></li>
	 <li class="active"><a href="#">Ficha de Examen De Ingreso</a></li>
	 <li class="active"><a href="v_tratPres.php">Ficha de Tratamientos y Presupuestos  Particular</a></li>
      <li class="active"><a href="v_recordTratamiento.php">Ficha de Record de Tratamiento</a></li>

  </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php?accion=Salir"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
    </ul>
  </div>
</nav>
<!--BOTON SUPERIOR-->
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
			cargarFicha_ei();
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
<!--FIN BOTON SUPERIOR-->

	<form action="../controller/c_fichaei_guardar.php" method="post" >
	  <center>
		<div class="panel panel-danger">
			<div class="panel-heading">FICHA DE EXAMEN DE INGRESO:</div>
				<div class="panel-body" align="center">
				<div class="col-xs-12"></div>
					<div class="col-xs-12 col-sm-6 col-lg-2">
						<label>Fecha:</label>
						<input type="date" class="form-control" id="txtFecha" name="txtFecha">
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-2">
						<label>Nro de historia clinica:</label>
						<select class="form-control" id="sel1" required="required" name="txtHistoria">
							<option value="">--Seleccione--</option>
								<?php Select();?>
						</select><br /><br />
					</div><br /><br />
				</div>
			<div class="col-xs-3"></div>
		</div>
			
	<div class="col-xs-12" >
	  <h3>Motivo de Consulta: </h3>
	  <textarea class="form-control" id="txtRecomendado" name="txtMotivo"  ></textarea><br /><br />
	</div>

	<div class="col-xs-12" >
	  <h3>Examen de Ingreso: </h3>
	  <textarea class="form-control" id="txtRecomendado" name="txtExamen" ></textarea><br /><br />
	</div>
	   
	<div class="col-xs-12" >
	  	<h3>Examenes Auxiliares: </h3>
		<div>

		 	<table border="0" class="table">
				<tr class='row'>
					<td class="col-xs-12 col-sm-8 col-lg-4" align="right" id="ajusto"><label>Radiografias:</label>
						<label class="radio-inline"><input type="radio" id="mostrar1" name="optradio1" value="SI">SI</label>
						<label class="radio-inline"><input type="radio" id="ocultar1" name="optradio1" value="NO" checked>NO</label>
					</td>
				</tr>      
				<tr class='row'>
					<td class="col-xs-12 col-sm-8 col-lg-4" align="right" id="ajusto"><label>Periodontograma:</label>
						<label class="radio-inline"><input type="radio" id="mostrar1" name="optradio2" value="SI">SI</label>
						<label class="radio-inline"><input type="radio" id="ocultar1" name="optradio2" value="NO" checked>NO</label>
					</td>
			    </tr>
			    <tr class="row">
					<td class="col-xs-12 col-sm-8 col-lg-4" align="right" id="ajusto"><label>Fotografia Clinica:</label>
						<label class="radio-inline"><input type="radio" id="mostrar1" name="optradio3" value="SI">SI</label>
						<label class="radio-inline"><input type="radio" id="ocultar1" name="optradio3" value="NO" checked>NO</label>
					</td>
			    </tr>   
				<tr class='row'>
					<td class="col-xs-12 col-sm-8 col-lg-4" align="right" id="ajusto"><label>Presion Arterial:</label>
						<label class="radio-inline"><input type="radio" id="mostrar1" name="optradio4" value="SI">SI</label>
						<label class="radio-inline"><input type="radio" id="ocultar1" name="optradio4" value="NO" checked>NO</label>
					</td>
				</tr>
				<tr class='row'>
					<td class="col-xs-12 col-sm-8 col-lg-4" align="right" id="ajusto"><label>Examenes de Laboratorio:</label>
						<label class="radio-inline"><input type="radio" id="mostrar1" name="optradio5" value="SI">SI</label>
						<label class="radio-inline"><input type="radio" id="ocultar1" name="optradio5" value="NO" checked>NO</label>
					</td>
				</tr>		
				<tr class='row'>
					<td class="col-xs-12 col-sm-8 col-lg-4" align="right" id="ajusto"><label>Modelos de Estudio:</label>
						<label class="radio-inline"><input type="radio" id="mostrar1" name="optradio6" value="SI">SI</label>
						<label class="radio-inline"><input type="radio" id="ocultar1" name="optradio6" value="NO" checked>NO</label>
					</td>
				</tr>
				<tr class='row'>
					<td class="col-xs-12 col-sm-8 col-lg-4" align="right" id="ajusto">
						<label>Tomografia:</label>
						<label class="radio-inline"><input type="radio" id="mostrar1" name="optradio7" value="SI">SI</label>
						<label class="radio-inline"><input type="radio" id="ocultar1" name="optradio7" value="NO" checked>NO</label>
					</td>
				</tr>	
				<tr class='row'>
					<td class="col-xs-12 col-sm-8 col-lg-4" align="right" id="ajusto"><label>Analisis de Sonrisa:</label>
					<label class="radio-inline"><input type="radio" id="mostrar1" name="optradio8" value="SI">SI</label>
					<label class="radio-inline"><input type="radio" id="ocultar1" name="optradio8" value="NO" checked>NO</label>
				</td>
			</table>
		</div>
	</div>

  	<div class="col-xs-12" >
	  <h1>Informe/Interconsulta: </h1>
	  <textarea class="form-control" id="txtRecomendado" name="txtInforme" ></textarea><br /><br />
	</div>

	<div class="col-xs-2">
	<button class="btn-success btn btn-block" type="button" id="btn-alumno-agregar" >Otro</button>
	</div>
<div class="col-xs-12">
<div id="alumnos" class="row">
	<div id="lo-que-vamos-a-copiar">
		<?php $x = 1; for($x; $x <= 1; $x++): ?>
		<div class="col-xs-12">
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
					         <option value="Vestibular">Vestibular</option>";
					         <option value="Lingual">Lingual</option>";
					         <option value="Palatina">Palatina</option>";
					         <option value="Incisal">Incisal</option>";
					         <option value="Oclusal">Oclusal</option>";
					         <option value="Mesial">Mesial</option>";
					         <option value="Distal">Distal</option>";
					         <option value="Interproximal">Interproximal</option>";
					         <option value="Proximal">Proximal</option>";
					         <option value="Cervical">Cervical</option>";
					         <option value="Apical">Apical</option>";
					         <option value="Coronal">Coronal</option>";
					         <option value="Antagonista">Antagonista</option>";
					         <option value="Oclusión">Oclusión</option>";
					         <option value="Arcada">Arcada</option>";
					         <option value="Hemiarcada">Hemiarcada</option>";
					         <option value="Sector posterior">Sector posterior</option>";
					         <option value="Sector anterior">Sector anterior</option>";
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
	        </div> 
	    <?php endfor; ?> 
	</div>
</div>
	
	<div>
	  <h1>Diagnosticos: </h1>
	  <div class="col-xs-12 col-sm-8 col-lg-9">

	 	<table border="0" class="table">
	 
		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Caries:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag1" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag1" value="NO" checked>NO</label></td>
	      
		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Pulpitis:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag2" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag2" value="NO" checked>NO</label></td>
	     
		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Necrosis Pulpar:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag3" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag3" value="NO" checked>NO</label></td>
	       
		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Gingivitis Aguda:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag4" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag4" value="NO" checked>NO</label></td>
		
		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Gingivitis Cronica:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag5" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag5" value="NO" checked>NO</label></td>
		
		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Periodontitis Aguda:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag6" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag6" value="NO" checked>NO</label></td>
			
		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Periodontitis Cronica:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag7" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag7" value="NO" checked>NO</label></td>
			
		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Dientes Incluidos:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag8" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag8" value="NO" checked>NO</label></td>
		
		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Dientes Impactados:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag9" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag9" value="NO" checked>NO</label></td>

		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Anomalias Dentofaciales y mal Oclusion:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag10" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag10" value="NO" checked>NO</label></td>

		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Anomalias de la Posicion Dentaria:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag11" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag11" value="NO" checked>NO</label></td>

		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Transtornos de la Articulacion Temporomandibular:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag12" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag12" value="NO" checked>NO</label></td>

		<tr class='row'>
			<td class="col-xs-12 col-sm-8 col-lg-6" align="right" id="ajusto"><label>Perdida de dientes por accidente, extraccion o enfermedad periodontal:</label>
				<label class="radio-inline"><input type="radio" id="mostrar1" name="diag13" value="SI">SI</label>
				<label class="radio-inline"><input type="radio" id="ocultar1" name="diag13" value="NO" checked>NO</label></td>
	</table>
	<br/>
	</div>
	 </div>

	 <div class="col-xs-12" >
	  <h1>Diagnostico 1: </h1>
	  <textarea class="form-control" id="txtRecomendado" name="txtDiag1" ></textarea><br /><br />
	</div>

	<div class="col-xs-12" >
	  <h1>Diagnostico 2: </h1>
	  <textarea class="form-control" id="txtRecomendado" name="txtDiag2" ></textarea><br /><br />
	</div>

	<div class="col-xs-12" >
	  <h1>Diagnostico 3: </h1>
	  <textarea class="form-control" id="txtRecomendado" name="txtDiag3" ></textarea><br /><br />
	</div>

	<div class="col-xs-12" >
	  <h1>Diagnostico 4:</h1>
	  <textarea class="form-control" id="txtRecomendado" name="txtDiag4" ></textarea><br /><br />
	</div>

  <button type="submit" class="btn btn-info btn-lg" id="btnGuardar" name="btnGuardar"><em class="fa fa-user-plus"></em>Guardar </button>
  <br /><br />
  <center>
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