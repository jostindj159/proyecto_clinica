<?php
session_start();
if (isset($_REQUEST['accion'])) {

  $accion=$_REQUEST['accion'];
  
  if ($accion=='Salir'){
    //echo "destruye";
    session_destroy();//se destruye sesion
  }
  if ($accion=='Panel') {
    include('view/v_panel.php');
    exit();//termina
    
  }
  if ($accion=='Calendario') {
  include('view/v_index.php');
  exit();//termina
  
  }
  if ($accion=='CalendarioUsuario') {
  include('view/v_index1.php');
  exit();//termina
  }

  if ($accion=='cambiar_usuario') {
    //echo "cambio a "+$_REQUEST['doctor'];
    $_SESSION['usuario_vista']=$_REQUEST['doctor'];
    //$_SESSION['nombre_doctor_vista']=$_REQUEST['nombre_doctor'];
    include('view/v_index.php');
    exit();
  }

}

?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-sm-4" >
</div>
<div class="col-sm-4" >
<center>
<form name="form1" action="validar.php" method="POST">
    <p>
      <label>Username</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="username" value="" name="username" class="form-control" type="text" required="required" /><br>
      </div>
    </p>
    <p>
     <label>Password</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" name="password" class="form-control"  type="password" required="required" />
      </div><br/>
    </p>
      <p>
          <button type="submit" name="submit" class="btn btn-primary"><span>Ingresar</span></button> <button type="reset" class="btn btn-danger"span>Cancelar</span></button>
      </p>
</form>
</center>
</div>
<div class="col-sm-4" ></div>
</div>
</body>
</html>
