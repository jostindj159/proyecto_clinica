<?php
session_start();
require_once('../controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php?accion=Panel">Panel Principal</a></li>
      <li class="active"><a href="v_ficha.php">Ficha de Datos</a></li>
      <li class="active"><a href="v_fichaei.php">Ficha de Examen De Ingreso</a></li>
      <li class="active"><a href="v_tratPres.php">Ficha de Tratamientos y Presupuestos  Particular</a></li>
      <li class="active"><a href="v_recordTratamiento.php">Ficha de Record de Tratamiento</a></li>
      <li class="active"><a href="#">Reporte</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php?accion=Salir"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
    </ul>

  </div>
</nav>
<div class="row">
    <div class="col-xs-0 col-sm-4 col-lg-4"></div>
    <div class="col-xs-4 col-sm-2 col-lg-2">
        <label>Fecha :</label>
    </div>
    <div class="col-xs-8 col-sm-2 col-lg-2">
        <form accept-charset="utf-8" method="POST">
            
            <input type="date" name="busqueda" id="busqueda" value=""  maxlength="30" autocomplete="off" class="form-control"/>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-xs-0 col-sm-2 col-lg-1"></div>
    <div class="col-xs-12 col-sm-10 col-lg-10">
        <div id="resultadoBusqueda"></div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</body>

<script>
$(document).ready(function() {
    $("#resultadoBusqueda").html('<center><h2>Ingrese una Fecha</h2></center>');
});
    $("#busqueda").on("change",function(){
        var textoBusqueda = $("#busqueda").val();
        //console.log(textoBusqueda);
        if (textoBusqueda != "") {
            $.post("../controller/c_buscarfecha.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
                $("#resultadoBusqueda").html(mensaje);
            }); 
        } else { 
            $("#resultadoBusqueda").html('<p>No hay Resultados</p>');
        }
    });
</script>
</html>