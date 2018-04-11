<?php
session_start();
require_once('../controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
}
require_once('../model/conexion.php');
require_once '../model/m_presupuesto.php';
require_once('../controller/c_presupuesto.php');

if(isset($_GET['opcion'])){
    
    $sth1 = $dbh->prepare('select f.numero_h,f.nombre,fei.pieza,fei.area,fei.diag 
    from ficha f inner join ficha_ei fei 
    on f.numero_h=fei.numero_h where fei.numero_h= :numero_h');
    $sth1->bindParam(':numero_h', $_GET['opcion']);
    $sth1->execute();
    
    $result1 = $sth1->fetchAll();
    
}

$sth = $dbh->prepare('SELECT id_ficha,numero_h,nombre FROM ficha');
$sth->execute();
$result = $sth->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Ficha de Aceptacion de Tratamientos y Presupuestos de Paciente Particular</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" type="text/css" href="../recursos/css/estilos.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/ocultar2.js"></script>
</head>

<body class="">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php?accion=Panel">Panel Principal</a></li>
      <li class="active"><a href="v_ficha.php">Ficha de Datos</a></li>
      <li class="active"><a href="v_fichaei.php">Ficha de Examen De Ingreso</a></li>
      <li class="active"><a href="#">Ficha de Tratamientos y Presupuestos  Particular</a></li>
      <li class="active"><a href="v_recordTratamiento.php">Ficha de Record de Tratamiento</a></li>
      <li class="active"><a href="v_visualizar.php">Reporte</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php?accion=Salir"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
    </ul>

  </div>
</nav>
<center>
<div class="row">
  <div class="col-xs-0 col-sm-2 col-lg-3"></div>
  <div class="col-xs-12 col-sm-5 col-lg-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Ver fichas de Tratamientos registradas
    </button>
  </div>
  <div class="col-xs-12 col-sm-3 col-lg-1">
    <a href="v_visualizar.php"><button type="submit" class="btn btn-primary" >Buscar</button> </a>
  </div>
</div>

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
      cargarPresupuestos();
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
<form   id="mi_formulario" name="mi_formulario" method="POST" action="../controller/c_new_presupuesto.php" >
  <center>

  <div class="panel panel-danger">
    <div class="panel-heading">Ficha de Aceptacion de Tratamientos y Presupuestos de Paciente Particular:</div>

    <div class="panel-body">
      <div class="row">
        <div class="col-xs-0 col-sm-2 col-lg-2"></div>
        <div class="col-xs-3 col-sm-3 col-lg-3">
          <label>Fecha:</label>
          <input type="date" class="form-control" id="txtFecha" name="txtFecha" required="required">
        </div>

        <div class="col-xs-9 col-sm-5 col-lg-5">
          <label>Nro de historia clinica:</label>
          <select class="form-control" name="txtHistoria" id="txtHistoria" onchange="return buscar();" required="required">
          <?php
          if(isset($result1)){?>
            <option value="<?php echo $result1[0]['numero_h'];?>"><?php echo $result1[0]['numero_h'];echo " - ";?><?php echo $result1[0]['nombre'];?></option>    
          <?php
          }?>
          <option value=""></option>
          <?php
          
          foreach ($result as $key => $value) {?>
          <option value="<?php echo $value['numero_h'];?>"><?php echo $value['nombre'];?></option>
          <?php
              
          }
          
          ?>
        </select>
        </div><br/><br/>
      </div>
    </div>

  </div>

    <div class="row">
      <div class="col-xs-0 col-sm-2 col-lg-2"></div>
      <div class="col-xs-4 col-sm-2 col-lg-2">
        <label>pieza</label>
        <?php
        if(isset($result1)){?>
          <input class="form-control" type="text" name="txtPieza" value="<?php echo $result1[0]['pieza']?>" />
        <?php
        }else{?>
        <input class="form-control" type="text" name="txtPieza" value="" />
        <?php
        }
        ?>
        <br>
      </div>

      <div class="col-xs-4 col-sm-2 col-lg-2">
        <label>area:</label>
        <?php
        if(isset($result1)){?>
        <input class="form-control" type="text" name="txtArea" value="<?php echo $result1[0]['area']?>" />
        <?php
        }else{?>
        <input class="form-control" type="text" name="txtArea" value="" />
        <?php
        }

        ?>
      </div>

      <div class="col-xs-4 col-sm-4 col-lg-4">
        <label>diag:</label>
        <?php
        if(isset($result1)){?>
            <input class="form-control"  type="text" name="txtDiag" value="<?php echo $result1[0]['diag']?>" />
        <?php 
        }else{?>
            <input class="form-control"  type="text" name="txtDiag" value="" />
        <?php  
        }
        ?>
      </div>
    </div>

    <br><hr><br>
  <div class="row"  id='suma'>
    <div class="row" >
      <div class="col-xs-0 col-sm-2 col-lg-2"></div>
      <div class="col-xs-6 col-sm-4 col-lg-4">
        <div style="background-color: 'pink';">
          <label>Categoria:</label><select class="form-control" id="continentes"  name="continentes"></select>
        </div>
      </div>

      <div class="col-xs-6 col-sm-4 col-lg-4">
        <div>
          <label>SubCategoria</label><select class="form-control" id="paises" name="paises"></select><br/>
        </div>
      </div>
    </div>

    <div class="row" >
      <div class="col-xs-0 col-sm-2 col-lg-2"></div>
      <div class="col-xs-0 col-sm-2 col-lg-2">
        <input type="text"  placeholder="Cantidad" class="form-control" name="valor1" id="valor1" />
      </div>

      <div class="col-xs-0 col-sm-2 col-lg-2">
        <input type="text"  placeholder="Precio Unitario" class="form-control" name="valor2" id="valor2" />
      </div>

      <div class="col-xs-0 col-sm-2 col-lg-2">
        <input type="text"  placeholder="S/." class="form-control" name='total' id='total' disabled='disabled'  />
      </div>

      <div class="col-xs-0 col-sm-2 col-lg-2">
        <input type="text"  placeholder="$" name='total2' id='total2' class="form-control" disabled='disabled' />
        <br><br>
      </div>
    </div>
      
    <div class="row" >
      <!--cel - tablet - pc-->
      <div class="col-xs-0 col-sm-4 col-lg-5"></div>
      <div class="col-xs-12 col-sm-4 col-lg-2" >
        <button type="submit" class="btn-success btn btn-block" id="btnGuardar"  onclick="limpiar()">Agregar + </button><br>
      </div>
    </div>
<hr>
    <div class="row" >
      <div class="col-xs-12 col-sm-12 col-lg-12" >
        <div class="panel panel-primary">
            <div class="panel-heading">Presupuestos</div>
            <div class="panel-body">
              <table id="tablagg" class="table table-striped table-bordered" >
                <thead>
                  <th>Descripcion 1</th>
                  <th>Descripcion 2</th>
                  <th>Precio en Soles</th>
                  <th>Precio en Dolar</th>
                </thead>
                <tbody id="datospres"></tbody>
              </table>
            </div>
        </div>
      </div>
    </div>

      <div class="col-xs-4" ><br>
        <label>Costo Total del Tratamientos: </label>
      </div>

      <div class="col-xs-4" >
        S/<input type="text"   class="form-control" name='total_soles' id='total_soles' />
      </div>

      <div class="col-xs-4" >
        $<input type="text"   name='total_dolar' id='total_dolar' class="form-control"  /><br>
      </div>

      <div class="col-xs-3" >
        <label>Compromiso de Pago:</label>
      </div>

      <div class="col-xs-3" >
        <input type="text"  placeholder="inicial" name='inicial' id='inicial' class="form-control"  />
      </div>

      <div class="col-xs-3" >
        <input type="text"  placeholder="saldo" name='saldo' id='saldo' class="form-control"  />
      </div>

      <div class="col-xs-3" >
        <input type="text"  placeholder="cuotas" name='cuotas' id='cuotas' class="form-control"  /><br>
      </div>

    </div>        
    <button type="submit" class="btn-success btn btn-block" name="btnagregar" >Guardar </button>
    </div>

  </div>
  </center>  
 
<div id="descripciones" class="row">
  <div id="lo-que-vamos-a-copiar">
    <?php $x = 1; for($x; $x <= 1; $x++): ?>
        <div class="col-xs-3">
        <input type="hidden" name="txtDesc1[]" id="txtDesc1">
        </div>
        <div class="col-xs-3">
        <input type="hidden" name="txtDesc2[]" id="txtDesc2">
        </div>
        <div class="col-xs-3">
        <input type="hidden" name="txtCosto[]" id="txtCosto">
        </div>
        <div class="col-xs-3">
        <input type="hidden" name="txtCant[]" id="txtCant">
        </div>
    <?php endfor; ?>
  </div>
</div>

  </form>



<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script  language="JavaScript" type="text/javascript"  src="../js/functions.js"></script>
<script  language="JavaScript" type="text/javascript"  src="../js/ocultar.js"></script>
</body>

  

</html>
<script type="text/javascript">
  var formulario_alumno = $("#lo-que-vamos-a-copiar").html();
</script>

<script type="text/javascript">         
    $(document).ready(function() {   
        $("#total_soles").val(0);
        $("#total_dolar").val(0);
    });
    //FUNCION BOTON AGREGAR A LA TABLA
    $("#btnGuardar").click(function(e){
      e.preventDefault();
        var ts = $("#total_soles").val();
        var td = $("#total_dolar").val();
        var costo = $("#valor1").val();
        var cant = $("#valor2").val();
        /////
        var tab = $("#tablagg").DataTable();
        tab.destroy();

        var desc1 = $("#continentes option:selected").text();
        var desc2 = $("#paises option:selected").text(); 
        var tsoles = $("#total").val();
        var tdolar = $("#total2").val();
        /*var inic = $("#inicial").val();
        var saldo = $("#saldo").val();
        var cuotas = $("#cuotas").val();*/

        if (desc1 == "Seleccione" || desc2 == "Seleccione" || tsoles == ""|| tdolar == "") {
          alert("Llene Categoria y Subcategoria con una cantidad! ");
        }else{
        $("#datospres").append("<tr>"+
                            "<td>"+desc1+"</td>"+
                            "<td>"+desc2+"</td>"+
                            "<td>"+tsoles+"</td>"+
                            "<td>"+tdolar+"</td>"+
                            "</tr>");
        $("#tablagg").dataTable({retrieve:true}); 
        
        var sum=parseFloat(td)+parseFloat(tdolar);
        var sum1=parseFloat(ts)+parseFloat(tsoles);
        $("#total_dolar").val(sum.toFixed(2)); //gg
        $("#total_soles").val(sum1.toFixed(2)); //gg

        document.getElementById("continentes").value = "";
        document.getElementById("paises").value = "";
        document.getElementById("valor1").value = "";
        document.getElementById("valor2").value = "";
        document.getElementById("txtDesc1").value = desc1; 
        document.getElementById("txtDesc2").value = desc2; 
        document.getElementById("txtCosto").value = costo; 
        document.getElementById("txtCant").value = cant; 
        // Agregamos el formulario
        $("#descripciones").prepend(formulario_alumno);
        // Hacemos focus en el primer input del formulario
        $("#descripciones .col-xs-12:first .well input:first").focus();
        //
        }
     });

/*var desc1 = $("#continentes").val();
        var desc2 = $("#paises").val();
        var tsoles = $("#total_soles").val();
        var tdolar = $("#total_dolar").val();
        var inic = $("#inicial").val();
        var saldo = $("#saldo").val();
        var cuotas = $("#cuotas").val();


         var datos="{continentes="+desc1+",paises="+desc2+",total_soles="+tsoles+",total_dolar="+tdolar+",inicial="+inic+",saldo="+saldo+",cuotas="+cuotas+"}"; 
         //pero nova guardar todo de frente?'' solo quiero q se vea en la tabla lo q vaya agregando y q sum(total?soles) eso n mas quiero guardar
        $.ajax({            
          type : 'POST',
          url  : '../controller/c_new_presupuesto.php',
          data :$("#mi_formulario").serialize(),
          contentType: "application/x-www-form-urlencoded",
          dataType: "json",
          success :  function(data) {  

            console.log("fefe");
            validarDatos(function(back){
                if(back==2){
                  $("#tablagg").dataTable(); 
                }
            });

          }
        });

    function validarDatos(callback){ //callback saber si se usa un ajax
      var resp;
      $.ajax({            
        type : 'POST',
        url  : '../model/select_presupuesto.php',
        contentType: "application/x-www-form-urlencoded",
        dataType: "json",
          success :  function(data){  
          resp=2;
          $("#datospres tr").remove(); //limpiamos
          //console.log(data);
            for (var i = 0; i < data.length; i++) {
            $("#datospres").append(
            "<tr><td>"+data[i].Descripcion+"</td>"+
            "<td>"+data[i].Descripcion2+"</td>"+
            "<td>"+data[i].costoDolar+"</td>"+
            "<td>"+data[i].costoSoles+"</td></tr>"
            );
            }
          callback(resp); 
          }
      });
      return resp; 
    }
    /*function limpiar(){
      //alert("hola");
      document.getElementById("continentes").value = "";
      document.getElementById("paises").value = "";
      document.getElementById("valor1").value = "";
      document.getElementById("valor2").value = "";
    }*/
</script>

<script type="text/javascript">
  /*$("#pruebita").click(function(e){
      e.preventDefault();

      var pruebita = $("#tablagg").DataTable();

      if (!pruebita.data().any()) {
        alert("la pruebita es vacia");
      }else{
        alert("la pruebita esta llena");
        $('#mi_formulario').attr('action' , '../controller/c_new_presupuesto.php');
      }
    });*/
</script>

<script type='text/javascript'>
  // Cada vez que se pulse una tecla, controlamos que sea numerica
  $("#suma input").keypress(function(event) {
  //obtenemos la tecla pulsada
  var valueKey=String.fromCharCode(event.which);
  //obtenemos el valor ascii de la tecla pulsada
  var keycode=event.which;

  // Si NO pulsamos un numero, un punto, la tecla suprimir
  // la tecla backspace o el simobolo "-" (45), cancelamos la pulsacion
    if(valueKey.search('[0-9|\.]')!=0 && keycode!=8 && keycode!=46 && keycode!=45){
    // anulamos la pulsacion de la tecla
    return false;
    }
  });

  // evento que se ejecuta cada vez que se suelte la tecla en cualquiera de
  // los tres inputs
  $("#suma input").keyup(function(event){
  calcular();
  });

  // Calculamos la suma de los dos valores
  function calcular(){
  var dolar=3.26;
  var valor1=validarNumero('#valor1');
  var valor2=validarNumero('#valor2');
  var valor3=validarNumero('#total');
  var valor4=validarNumero('#total2');
  $("#total").val(valor1*valor2);
  var resultado= ((valor1*valor2)/dolar);
  $("#total2").val(resultado.toFixed(2));
  //$("#total2").val((valor1*valor2)/dolar);
  }

  // Funcion para validar que el numero sea correcto, y para cambiar el color
  // del marco en caso de error
  function validarNumero(id){
  if($.isNumeric($(id).val())){
  $(id).css('border-color','#808080');
  return parseFloat($(id).val());
  }else if($(id).val()==""){
  $(id).css('border-color','#808080');
  return 0;
  }else{
  $(id).css('border-color','#f00');
  return 0;
  }
}
</script>
<script type="text/javascript">
    function buscar(){
      //alert("bien");
        var opcion = document.getElementById('txtHistoria').value;
        window.location.href = 'http://localhost/clinica/view/v_tratPres.php?opcion='+opcion;
    }
</script>
  <script type="text/javascript">
      // El encargado de agregar más formularios
    $("btnGuardar").click(function(){
        //alert("hola");
        // Agregamos el formulario
        $("#alumnos").prepend(formulario_alumno);

        // Agregamos un boton para retirar el formulario
        //$("#alumnos .col-xs-4:first .well").append('<button class="btn-danger btn btn-block btn-retirar-alumno" type="button">Retirar</button>');

        // Hacemos focus en el primer input del formulario
        $("#alumnos .col-xs-12:first .well input:first").focus();

    });
  </script>