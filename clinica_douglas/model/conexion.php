
<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=clinica', 'root', 'jakamoto');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
    $base_url="http://localhost/clinica/";	
} catch (PDOException $e){
    die("Error: ".$e->getMessage());
}
?>