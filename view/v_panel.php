<?php 
require_once('./controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
  echo "denegado";
}
require_once('./model/conexion.php');
require_once('./model/m_doctor.php');
require_once('./model/m_cita.php');
require_once('./controller/c_doctor.php');
require_once('./controller/c_usuario.php');
require_once('./controller/c_paciente.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Panel del Administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript" src="./js/ocultar.js"></script>
<script>
  $(function(){//selecciono mi doctor
    $(document).on('change','#select_doctor',function(){ //detectamos el evento change
    var value = $(this).val();//sacamos el valor del select
    $('#doctor').val(value);//le agregamos el valor al input 
    });
  });
</script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="view/v_ficha.php">Ficha de Datos</a></li>
      <li class="active"><a href="view/v_fichaei.php">Ficha de Examen De Ingreso</a></li>
      <li class="active"><a href="view/v_tratPres.php">Ficha de Tratamientos y Presupuestos  Particular</a></li>
      <li class="active"><a href="view/v_recordTratamiento.php">Ficha de Record de Tratamiento</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./index.php?accion=Salir"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
 <div class="panel panel-info">
    <div class="panel-heading">
      <p><div class="col-sm-2"><h4>Panel de Control</h4></div>
        <div class="col-sm-10">  
        <select  id="select_doctor"  name="select_doctor" onchange="cambio_u();" class="form-control" required="required">
          <option value="">--Seleccione Doctor--</option>
        <?php Select();?>
        </select>
        </div><br>
      </p> 
    </div>  

  <center>
  <div class="panel-footer">
    <div class="row">
    <div class="col-sm-3"></div>

    <div class="col-sm-3">
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="padding: 25px;"><img  src="./iconos/doctor.png" width="50" height="30">Doctores</button>
    </div>
    
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:skyblue;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: white;">Doctores</h4>
        </div>
  
  <form role="form" id="target" class="form-horizontal" method="post" style="display:none;" action="./controller/c_nuevoDoctor.php">
    <center>
      <label>Nombre:</label>
      <input type="text" class="form-control"  id="nombre" name="nombre" required="required"><br /><br />

      <label>DNI:   </label>
      <input type="number" class="form-control" id="dni" name="dni"><br /><br />

      <label>Celular:   </label>
      <input type="number" class="form-control" id="fono" name="fono"><br /><br />

      <button type="submit" class="btn btn-info btn-lg" id="btnGuardar" name="btnGuardar"><em class="fa fa-user-plus"></em>Guardar </button>
      <button type="button" class="btn btn-warning btn-lg" id="ocultar" >Cancelar</button>
    </center>
  </form>

  <div class="modal-body">
   <?php 
     cargar();
   ?>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" id="mostrar" >Nuevo</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  </div>
</div>
      
</div>
</div>
<!--cierre modal-->

<div class="col-sm-3">
<form name="cambios" action="index.php?accion=cambiar_usuario" method="POST">

  <input type="hidden" name="doctor" id="doctor" >
  <input type="hidden" id="nombre_doctor" name="nombre_doctor" >

  <button  type="submit" class="btn btn-primary btn-lg"  style="padding: 25px;"><img  src="./iconos/agenda.png" width="50" height="30"> Agenda</button>
</form><br>
</div>

</div>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-3">
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2" style="padding: 25px;"><img  src="./iconos/usuario.png" width="50" height="30">Usuarios</button>
</div>

<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:skyblue;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: white;">Usuarios</h4>
        </div>
        <div class="modal-body">
        <?php 
         cargar2();
        ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
</div>
<!--cierre modal-->
<div class="col-sm-3">
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3" style="padding: 25px;"><img  src="./iconos/paciente.png" width="50" height="30">Pacientes</button>
</div>
</div>
<div class="modal fade" id="myModal3" role="dialog">
  <div class="modal-dialog">

  <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:skyblue;">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title" style="color: white;">Pacientes</h4>
      </div>

      <div class="modal-body">
      <?php 
      cargar3();
      ?>
      </div>

      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>
  </div>
</center>
   <div id="col-sm-3">
   </div>


</div>
</div>
</div>

</body>
<script type="text/javascript">
function cambio_u(){
  var combo = document.getElementById("select_doctor");
  var selected = combo.options[combo.selectedIndex].text;
  var almacenar = selected;
  //enviar resultado
  document.getElementById("nombre_doctor").value = almacenar;
  //alert("Doctor(a) "+" : "+" "+almacenar);
//document.getElementsByTagName("nombre_doctor").value = almacenar;
} 
</script>
</html>
