<?php
try {
	//$dbh = new PDO('mysql:host=localhost;dbname=c0940392_invent1','c0940392_invent1','FE33vabemi'); 
    $dbh = new PDO('mysql:host=localhost;dbname=clinica', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

    //$base_url="http://fj4x.com/clinica/";	
    $base_url="http://192.168.108.1/clinica/";	
} catch (PDOException $e){
    die("Error: ".$e->getMessage());
}
?>