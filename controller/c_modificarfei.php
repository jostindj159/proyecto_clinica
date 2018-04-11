<?php 
session_start();
require_once('../controller/c_funciones.php');
if (!valida_logueo()){
  die('acceso denegado');
} 
require_once('../model/conexion.php');
require_once('../model/m_fichaei.php');
require_once('../controller/c_seleccionarfei.php');

include("../view/v_modificar_fei.php");
?>