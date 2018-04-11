<?php 
require_once('../model/conexion.php');
require_once('../model/m_cita.php');
require_once('../controller/c_doctor.php') ?>
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
        <?php 
			cargar();
	?>
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