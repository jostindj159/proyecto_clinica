<?php 
session_start();
require_once('../controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
} 
require_once('../model/conexion.php');
require_once '../model/m_recordTratamiento.php';
require_once('../controller/c_seleccionarRecord.php');

include("../view/v_modificar_record.php");
?>