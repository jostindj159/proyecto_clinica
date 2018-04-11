<?php
session_start();
require_once('../model/m_usuarios.php');
$objUser = new Usuarios();

echo json_encode($objUser->buscar($_GET['term']));
?>