<?php 
require_once('../model/conexion.php');
require_once('../model/m_ficha.php');
require_once('../controller/c_ficha.php') ?>
<!doctype html>
<meta charset="utf-8">

	
	<html>
<head>


<title>Registros de fichas</title>
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

 
        <?php 
			cargar();
	?>

        </div>
    
      </div>
      
  



		

