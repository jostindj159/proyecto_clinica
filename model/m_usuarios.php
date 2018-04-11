<?php

require_once('conexionSeach.php');
//evitar instanciando a cada rato a la conexion ala base de datos
class Usuarios extends DataBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function buscar($usuario){
        $datos = array();
        $sth = $this->prepare('SELECT id,nombre,dni,telefono,email,fechanac FROM pacientes WHERE nombre LIKE "%'.$usuario.'%" ');
        $sth->execute();
        $result = $sth->fetchAll();
        
        foreach ($result as $key => $value) {
            $datos[] = array("value" => $value['nombre'],
                "id" => $value['id'],
                "dni" => $value['dni'],
                "telefono" => $value['telefono'],
                "email" => $value['email'],
                "fechanac" => $value['fechanac']
            );
        }
        
        return $datos;
    }
    
}
?>