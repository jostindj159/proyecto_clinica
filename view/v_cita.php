<!doctype html>
<meta charset="utf-8">

	
	<html>
<head>


<title>Registrar cita</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="js/jquery.js"></script>

  <script src="bootstrap/js/bootstrap.js"></script>



<script src="bootstrap/js/bootstrap.js"></script>


  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/datetimepicker@<version>/dist/DateTimePicker.min.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/datetimepicker@<version>/dist/DateTimePicker.min.js"></script>

</head>

<body>

<div class="container">

 
 <div class="row">

<div class="col-sm-12" >
 <div class="panel panel-primary">
   <div class="panel-heading">
    <h3 class="panel-title">Registra la cita</h3>
  </div>
  <div class="panel-body">
		
<center>
<form role="form" class="form-horizontal" method="post" action="../controller/c_cita.php">

  <label>Fecha de Reserva:</label>

<input type="date" class="form-control" id="txtFecha" name="txtFecha">

	
<br /><br />	
 <label>Hora:</label>

<input type="time" class="form-control" id="txtHora" name="txtHora">

  
<br />  
<label style="border-radius:10px;">Paciente: </label>
<br />
	<label>DNI:   </label>
	<input type="number" class="form-control" id="txtDNI" name="txtDNI" min="111111111" max="999999999"><br /><br />
<label>Nombre:</label>
	<input type="text" class="form-control" id="txtNombre" name="txtNombre"><br /><br />
  
  

   <br /><br />
	<button type="submit" class="btn btn-info" id="btnGuardar" name="btnGuardar"><em class="fa fa-user-plus"></em>Guardar </button>

 </form>
 <center>
 </div>
 
</div>
	</div>
     
</div>
</div>