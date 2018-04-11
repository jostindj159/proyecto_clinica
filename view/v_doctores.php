<?php
require_once('../model/conexion.php');
require_once('../model/m_cita.php');

require_once('../controller/c_doctor.php');
require_once('../controller/c_usuario.php');
require_once('../controller/c_paciente.php');
?>
<html>
<head>
</head>
<body>
	<h1>Doctores</h1>
	<?php 
			cargar3();
	?>
	
	<div>
		<button type='submit' class='btn btn-info btn-lg' id='btnGuardar' name='btnGuardar'><a href='v_panel.php'>Volver al Panel</a></button>
	</div>
</body>
</html>