<?php
$link = 'mysql:host = localhost; dbname = desarrollosdoremi';
$user = 'root';
$pass = '';

try{
$pdo = new pdo($link, $user, $pass);

echo 'conectado';
//  falla el catch . . .
}catch(PDOExeption $e){
    print "Error!: ".$e->getMessage()."<br/>";
    die();
 
}





