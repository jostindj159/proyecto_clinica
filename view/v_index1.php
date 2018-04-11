<?php
require_once('controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
  echo "denegado";
}
require_once('model/conexion.php');
require_once('model/m_cita.php');
require_once('./controller/c_doctor.php');

$usuario_        = $_SESSION['usuario_'];//id de la tabla usuario
$nombre_doctor_  = $_SESSION['nombre_doctor_'];//nombre del usuario
//echo "usuario:::::::::::: $usuario_";
//echo "nombre doctor:::::::: $nombre_doctor_";

$sql = "SELECT agenda.id,doctores.nombre as doctor, agenda.nombre, agenda.dni,agenda.telefono,agenda.email,agenda.fechanac,agenda.start ,agenda.hora_i_h,agenda.hora_i_m,agenda.hora_i_t,agenda.hora_f_h,agenda.hora_f_m,agenda.hora_f_t 
FROM agenda  inner join usuario 
on agenda.id_usuario=usuario.id inner join doctores 
on usuario.id=doctores.id 
where id_usuario = ?";//id de la tabla usuario

$req = $dbh->prepare($sql);
$req->bindParam(1,$usuario_);
$req->execute();
$events = $req->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agenda</title>
    <!-- Hora -->
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href='css/fullcalendar.css' rel='stylesheet' /> 
        <!-- Custom CSS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(function(){
    $(document).on('change','#doctores',function(){ //detectamos el evento change
    var value = $(this).val();//sacamos el valor del select
    $('#id_usuario').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
    });

    </script>
</head>

<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?accion=Salir"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center"><h3>Doctor:<span class="label label-info"><?php echo $nombre_doctor_; ?></span>
            <img src="images/logo1.png" width="90px">
            </h3>
                <div class="pull-right form-inline"><br><br>
                    <button class="btn btn-info" data-toggle='modal' data-target='#ModalAdd'>Añadir Cita</button>
                </div><br>
                <script>
                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                var f=new Date();
                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
                <div id="calendar" class="col-centered"></div>
            </div>
        </div>   

        <!-- /.row -->
        <!-- Modal ========================================================-->

        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form class="form-horizontal" method="POST" action="controller/c_nuevaCita.php">
            
            <div class="modal-header" style="background-color:skyblue;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="color: white;">Registrar cita</h4>
            </div>
              <div class="modal-body">
                <!--cita-->
                <span class="label label-info" style="font-size: 18px;">Cita:</span>
                                
                  <div class="form-group" >
                    <label for="start" class="col-sm-2 control-label">Fecha de Cita </label>
                    <div class="col-sm-10 ui-front">
                      <input type="date" name="start" class="form-control" id="start" required="required" >
                    </div>
                  </div>
                <div class="form-group">
                    <label for="hora" class="col-sm-2 control-label">Hora Inicial</label>

                    <div class="col-sm-4">
                      <input type="number" class="form-control"  name="hora_i_h" id="hora_i_h" placeholder="Hora" required="required" min="0" max="24" value="12">
                    </div>

                    <div class="col-sm-4">
                      <input type="number" class="form-control"  name="hora_i_m" id="hora_i_m" placeholder="Minuto" required="required" min="0" max="59" value="00">
                    </div>

                    <div class="col-sm-2">
                      <select class="form-control" id="hora_i_t" required="required" name="hora_i_t" >
                        <option value=""></option>
                        <option value="am">AM</option>
                        <option value="pm">PM</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">Hora Final</label>

                    <div class="col-sm-4">
                      <input type="number" class="form-control"  name="hora_f_h" id="hora_f_h" placeholder="Hora" min="0" max="24" value="12">
                    </div>

                    <div class="col-sm-4">
                      <input type="number" class="form-control"  name="hora_f_m" id="hora_f_m" placeholder="Minuto" min="0" max="59" value="00">
                    </div>

                    <div class="col-sm-2">
                      <select class="form-control" id="hora_f_t"  name="hora_f_t">
                        <option value=""></option>
                        <option value="am">AM</option>
                        <option value="pm">PM</option>
                    </select>
                    </div>
                </div>

                <!--doctor-->
                <span class="label label-info" style="font-size: 18px;">Doctor:</span>
                  <div class="form-group">
                    <label for="doctor" class="col-sm-2 control-label">Doctor</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="doctores" required="required" name="doctor">
                      <option value="">   </option>
                      <?php 
                      //if ($usuario_==1) {
                        Select();
                      //}else{
                      //  echo "<option value='$nombre_doctor_'>$nombre_doctor_</option>";
                      //} 
                      ?>
                    </select>
                    </div>
                  </div>
                <!--paciente-->
                <span class="label label-info" style="font-size: 18px;">Paciente:</span><br><br>

                  <div class="form-group ">
                      <label for="Pacientes" class="col-sm-2 control-label"> <i class="glyphicon glyphicon-search"> </i> </label>
                      <div class="col-sm-10 ui-front">
                       <input id="buscador" name="buscador" class="form-control" type="text" placeholder="Nombre del paciente" />
                      </div> 
                  </div> 

                  <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" name="nombre" id="nombre" class="form-control" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">DNI</label>
                    <div class="col-sm-10">
                      <input type="text" name="dni" id="dni"  class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="telefono" class="col-sm-2 control-label">Telefono</label>
                    <div class="col-sm-10">
                      <input type="text" name="telefono" id="telefono"  class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" id="email"  class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fechanac" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                    <div class="col-sm-10">
                      <input type="date" name="fechanac" id="fechanac"  class="form-control" >
                    </div>
                  </div>
                  <div class="form-group">
                      <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $usuario_; ?>">
                  </div>



              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="btnGuardar" id="btnGuardar">Guardar</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        
        <!-- Modal =======================================-->

        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            
            <form class="form-horizontal" method="POST" action="controller/c_eliminarCita.php">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-nombre" id="myModalLabel">Detalle de Cita</h4>
              </div>
              <div class="modal-body">
                
                  <div class="form-group">
                  <label for="dni" class="col-sm-2 control-label">Hora Inicial</label>

                    <div class="col-sm-4">
                      <input type="number" class="form-control"  name="hora_i_h" id="hora_i_h" placeholder="Hora"   disabled="true">
                    </div>

                    <div class="col-sm-4">
                      <input type="number" class="form-control"  name="hora_i_m" id="hora_i_m" placeholder="Minuto" disabled="true">
                    </div>

                    <div class="col-sm-2">
                      <select class="form-control" id="hora_i_t"  name="hora_i_t" disabled="true">
                        <option value=""></option>
                        <option value="am">AM</option>
                        <option value="pm">PM</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">Hora Final</label>

                    <div class="col-sm-4">
                      <input type="number" class="form-control"  name="hora_f_h" id="hora_f_h" placeholder="Hora"   disabled="true">
                    </div>

                    <div class="col-sm-4">
                      <input type="number" class="form-control"  name="hora_f_m" id="hora_f_m" placeholder="Minuto" disabled="true">
                    </div>

                    <div class="col-sm-2">
                      <select class="form-control" id="hora_f_t"  name="hora_f_t" disabled="true">
                        <option value=""></option>
                        <option value="am">AM</option>
                        <option value="pm">PM</option>
                      </select>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="doctor" class="col-sm-2 control-label">Doctor</label>
                    <div class="col-sm-10">
                      <input type="text" name="doctor" class="form-control" id="doctor" disabled="true">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">DNI</label>
                    <div class="col-sm-10">
                      <input type="text" name="dni" id="dni" class="form-control" disabled="true">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="Paciente" class="col-sm-2 control-label">Paciente</label>
                    <div class="col-sm-10">
                      <input type="text" name="nombre" class="form-control" id="nombre" disabled="true">
                    </div>
                  </div>
                  <!--id oculto-->
                  <input type="hidden" name="id" class="form-control" id="id">
                  
              </div>
              <div class="modal-footer">
                <button type='submit' class='btn btn-default' id='btnEliminar' name='btnEliminar'>Eliminar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              </div>

            </form>
            

            </div>
          </div>
        </div>

    </div>
    <div id="dtBox"></div>
    
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- FullCalendar -->    
    <script src="js/jquery-ui.js"></script>

    <script src='js/moment.min.js'></script>
    <script src='js/fullcalendar/fullcalendar.min.js'></script>
    <script src='js/fullcalendar/fullcalendar.js'></script>
    <script src='js/fullcalendar/locale/es.js'></script>
    <!-- Hora -->  

    
    <script> 
    $(document).ready(function() {

       var date = new Date();
       var yyyy = date.getFullYear().toString();
       var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
       var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();
        
        $('#calendar').fullCalendar({
            header: {
                language: 'es',
                left: 'prev,next today',
                center: 'nombre',
                right: 'month,basicWeek,basicDay',

            },
            defaultDate: yyyy+"-"+mm+"-"+dd,
            eventLimit: true,
            selectable: true,
            selectHelper: true,
            //si selecciono
            select: function(start) {
                
                $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD'));
                $('#ModalAdd').modal('show');
            },
            eventRender: function(event, element) {
                element.bind('dblclick', function() {
                    $('#ModalEdit #id').val(event.id);
                    $('#ModalEdit #doctor').val(event.doctor);
                    $('#ModalEdit #nombre').val(event.title);
                    $('#ModalEdit #nombre').val(event.title2);
                    $('#ModalEdit #dni').val(event.dni);
                    $('#ModalEdit #telefono').val(event.telefono);
                    $('#ModalEdit #email').val(event.email);
                    $('#ModalEdit #fechanac').val(event.fechanac);
                    $('#ModalEdit #hora_i_h').val(event.hora_i_h);
                    $('#ModalEdit #hora_i_m').val(event.hora_i_m);
                    $('#ModalEdit #hora_i_t').val(event.hora_i_t);
                    $('#ModalEdit #hora_f_h').val(event.hora_f_h);
                    $('#ModalEdit #hora_f_m').val(event.hora_f_m);
                    $('#ModalEdit #hora_f_t').val(event.hora_f_t);
                    $('#ModalEdit #id_usuario').val(event.id_usuario);
                    $('#ModalEdit').modal('show');
                });
            },
            eventDrop: function(event, delta, revertFunc) { // si changement de position

                edit(event);

            },
            eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

                edit(event);

            },
            events: [
              <?php foreach($events as $event): 

              $start = explode(" ", $event['start']);
              if($start[1] == '00:00:00'){
              $start = $start[0];
              }else{
              $start = $event['start'];
              }

              ?>
              {
              id: '<?php echo $event['id']; ?>',
              doctor: '<?php echo $event['doctor']; ?>',
              title: '<?php echo $event['hora_i_h'];echo ":";echo $event['hora_i_m'];echo " ";echo $event['nombre']; ?>',
              title2: '<?php echo $event['nombre']; ?>',
              dni: '<?php echo $event['dni']; ?>',
              telefono: '<?php echo $event['telefono']; ?>',
              email: '<?php echo $event['email']; ?>',
              fechanac: '<?php echo $event['fechanac']; ?>',
              start: '<?php echo $start; ?>',
              hora_i_h: '<?php echo $event['hora_i_h']; ?>',
              hora_i_m: '<?php echo $event['hora_i_m']; ?>',
              hora_i_t: '<?php echo $event['hora_i_t']; ?>', 
              hora_f_h: '<?php echo $event['hora_f_h']; ?>',
              hora_f_m: '<?php echo $event['hora_f_m']; ?>',   
              hora_f_t: '<?php echo $event['hora_f_t']; ?>',  
              },
              <?php endforeach; ?>
            ]
        });
        
    });
</script>

<script>
      $(function(){
                    $("#buscador").autocomplete({
                        source: 'controller/c_buscador.php',
                        select: function(event, ui){
                            $("#resultado").html(

                            );
                             // Seteando los valores
                            $("#id").val(ui.item.id);
                            $("#nombre").val(ui.item.value);
                            $("#dni").val(ui.item.dni);
                            $("#telefono").val(ui.item.telefono);
                            $("#email").val(ui.item.email);
                            $("#fechanac").val(ui.item.fechanac);
                        }
                    });
                });
</script>

</body>

</html>