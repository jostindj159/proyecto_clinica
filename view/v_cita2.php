<!doctype html>
<meta charset="utf-8">

	
	<html>
<head>


<title>Registrar cita</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="js/jquery.js"></script>

  <script src="bootstrap/js/bootstrap.js"></script>



<script src="bootstrap/js/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">




</head>

<body>

<div class="container">
 <div class="row">
<center>
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crear Cita</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:skyblue;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: white;">Registrar cita</h4>
        </div>
        <div class="modal-body">
         <form role="form" class="form-horizontal" method="post" action="../controller/c_cita.php">

  <label>Fecha de Reserva:</label>

<input type="date" class="form-control" id="txtFecha" name="txtFecha">

  
<br /><br />  
 <label>Hora:</label>

<input type="time" class="form-control" id="txtHora" name="txtHora">

  
<br />  
<span class="label label-info" style="font-size: 18px;">Paciente:</span>
<br /><br />
  <label>DNI:   </label>
  <input type="number" class="form-control" id="txtDNI" name="txtDNI" max="99999999"><br /><br />
<label>Nombre:</label>
  <input type="text" class="form-control" id="txtNombre" name="txtNombre"><br /><br />
  
  

 
  <button type="submit" class="btn btn-info btn-lg" id="btnGuardar" name="btnGuardar"><em class="fa fa-user-plus"></em>Guardar </button>

 </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>



		


 </center>
 </div>
 
</div>
	</div>
     
</div>
</div>