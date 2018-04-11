<?php

    include('../model/conexion.php');   
    $rows=null;
    $stmt = $dbh->prepare("SELECT * from presupuestos");
    $stmt ->execute();
    while($result=$stmt->fetch()){
        $rows[]=$result;
    }
    echo json_encode($rows);
// por ejemplo esta pagina solo se puede usar para un metodo que es el select no la puedes usar para nada mas otra n mas
