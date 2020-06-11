<?php
$link = 'mysql:host = localhost; dbname = doremi';
$user = 'root';
$pass = '';

try{
$errcon = true;
$pdo = new PDO($link, $user, $pass);
$errcon = false;

//  falla el catch . . .
}catch(PDOExeption $e){
    print "Error!: ".$e->getMessage()."<br/>";
    die();
 
}





