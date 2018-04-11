<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  
  <title>Ficha de Examen de Ingreso</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
      <link  rel="stylesheet" type="text/css" href="../recursos/css/estilos.css"/>
	  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    
</head>

	<body class="fondo1">
    <fhttp://localhost:8080/clinica/view/v_tratPres.phporm   id="mi_formulario" method="POST" action="../controller/c_new_presupuesto.php">
		<div  class="container" >
       <div class="col-xs-12" id='suma'>
		<center>
				<h1 style="font-family: 'Bowlby One SC', cursive; font-size:30px;">ACEPTACION DE TRATAMIENTOS Y PRESUPUESTOS DE PACIENTE</h1>
				</center>
				<div class="col-xs-6">
					<div>
					<select class="form-control" id="continentes" required="required" name="continentes">
		 <option value="">--Seleccione--</option>
               
                    </select>
					</div>
					</div>
					<div class="col-xs-6">
					<div>
					 <select class="form-control" id="paises"  required="required" name="paises">
		 <option value="">--Seleccione--</option>
                     
                    </select>
					<br/>
					</div>
					</div>
					
					 <div class="col-xs-3" >
					 <label>Cantidad:</label>
					  <input type="text"  placeholder="Cantidad" class="form-control" name="valor1" id="valor1" value="0" />
					  </div>
					   <div class="col-xs-3" >
					    <label>Precio Unitario:</label>
					  <input type="text"  placeholder="Precio Unitario" class="form-control" name="valor2" id="valor2"  value="0" />
					   </div>
					   
					    <div class="col-xs-3" >
						 <label>Soles:</label>
					   <input type="text"  placeholder="Soles" class="form-control" name='total' id='total' disabled='disabled' value="0" />
					    </div>
						<div class="col-xs-3" >
						 <label>Dolares:</label>
					  <input type="text"  placeholder="Dolares" name='total2' id='total2' class="form-control" disabled='disabled' />
					  <br><br><hr></div>

               <div class="col-xs-3" >
              <label>Costoto Total en Soles :</label>
            <input type="text"  placeholder="Precio Unitario" class="form-control" name="total_soles" id="total_soles"  value="0" />
             </div>
             
              <div class="col-xs-3" >
             <label>Costoto Total en Dolares :</label>
             <input type="text"  placeholder="Soles" class="form-control" name='total_dolar' id='total_dolar'  value="0" />
              </div>
            <div class="col-xs-3" >
             <label>Inicial:</label>
            <input type="text"  placeholder="Dolares" name='inicial' id='inicial' class="form-control"  />
            </div>
            <div class="col-xs-3" >
             <label>Saldo:</label>
            <input type="text"  placeholder="Dolares" name='saldo' id='saldo' class="form-control"  />
            </div>
            <div class="col-xs-3" >
             <label>Cuotas de:</label>
            <input type="text"  placeholder="Dolares" name='cuotas' id='cuotas' class="form-control"  />
            </div>
					</div>
					
					<div class="col-xs-12" >
					<br/>

					<button type="submit" class="btn btn-success btn-lg" id="btnagregar" name="btnagregar" >Agregar</button>
          <button type="submit" class="btn btn-success btn-lg">Finalizar presupuesto</button>

					<br/>
					</div>
					
					
					</div>


</form>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script  language="JavaScript" type="text/javascript"  src="../js/functions.js"></script>
<script  language="JavaScript" type="text/javascript"  src="../js/ocultar.js"></script>
</body>


<div class="result-formulario">
   </div> 
  <div class="panel panel-primary">
      <div class="panel-heading">Presupuestos</div>
      <div class="panel-body">
        <table id="tablagg" class="table table-striped table-bordered">
      <thead>
        <th>d1</th>
        <th>d2</th>
        <th>d3</th>
        <th>d4</th>
      </thead>
      <tbody id="datospres"></tbody>
    </table>
      </div>
    </div>


</html>
  <script type="text/javascript">         
        $(document).ready(function() {   
       
        });//End document creo l oq borraste


        $("#btnagregar").click(function(e){
          e.preventDefault();
            
            var tabla = $("#tablagg").dataTable(); 

            var desc1 = $("#continentes").val();
            var desc2 = $("#paises").val();
            var tsoles = $("#total_soles").val();
            var tdolar = $("#total_dolar").val();
            var inic = $("#inicial").val();
            var saldo = $("#saldo").val();
            var cuotas = $("#cuotas").val();

            tabla.row.add([
                desc1,
                desc2,
                tsoles,
                tdolar
            ]).draw( false );

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
            });*/


        function validarDatos(callback){ //la webada de ajax es que si quieres saber cuando se ejecutan debes usar un callback como esto
          //:v xd ves que si ponia el datatable antes no daba si pues ahora como haces tus insert donde estan tusm etodos
          var resp;
          $.ajax({            
              type : 'POST',
              url  : '../model/select_presupuesto.php',
              //data : data, esto es para pasarle parametros pero como solo es un select
              contentType: "application/x-www-form-urlencoded",
              dataType: "json",
              success :  function(data) {  

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
              }//inserta a tu tabla unas dos filas
          });
          return resp; 
        }
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
            if(valueKey.search('[0-9|\.]')!=0 && keycode!=8 && keycode!=46 && keycode!=45)
            {
                // anulamos la pulsacion de la tecla
                return false;
            }
        });
        
        // evento que se ejecuta cada vez que se suelte la tecla en cualquiera de
        // los tres inputs
        $("#suma input").keyup(function(event) {
            calcular();
        });
        
        // Calculamos la suma de los dos valores
        function calcular()
        {
            var dolar=3.26;
            var valor1=validarNumero('#valor1');
            var valor2=validarNumero('#valor2');
      			var valor3=validarNumero('#total');
      			var valor4=validarNumero('#total2');
            
              $("#total").val(valor1*valor2);
        			$("#total2").val(valor3/dolar);
        }
        
        // Funcion para validar que el numero sea correcto, y para cambiar el color
        // del marco en caso de error
        function validarNumero(id)
        {
            if($.isNumeric($(id).val()))
            {
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
