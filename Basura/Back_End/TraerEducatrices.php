<?php

$usuario = $_POST['user']; 
$pass = $_POST['pass'];
// 
include_once "connexion_mysqli.php";
$sql1 = "select * from educatrices";
$sql2 = "SELECT t1.id, t2.prenom, t2.nomfam, t2.init, t2.traitem,
         t3.numciv, t3.rue, t3.ville, t3.prov, t3.codpos, t4.typetelephone,
         t4.numtelephone, t5.typecourriel, t5.courriel, t6.typedoc, t6.numdoc,
         t1.datnac, t1.datinc, t7.langue, t7.niveau,
         t1.ocupation, t1.status, t1.groupes
         FROM educatrices       t1 
         INNER JOIN nom         t2 on t1.idnom       = t2.idnom
         inner join coordonnees t3 on t1.idcoord     = t3.idcoord
         inner join telephone   t4 on t3.idtelephone = t4.idtelephone
         inner join courriel    t5 on t3.idcourriel  = t5.idcourriel
         inner join numdoc      t6 on t1.idnumdoc    = t6.idnumdoc 
         inner join langue      t7 on t1.idlangue    = t7.langue";


$resultados = $connexion->query($sql2);
//var_dump($resultados);
//echo mysqli_num_rows($resultados);
foreach($resultados as $r)
{
   $tabla[mysqli_num_rows($resultados)][0]  = $r["id"];
   $tabla[mysqli_num_rows($resultados)][1]  = $r["prenom"];
   $tabla[mysqli_num_rows($resultados)][2]  = $r["nomfam"];
   $tabla[mysqli_num_rows($resultados)][3]  = $r["init"];
   $tabla[mysqli_num_rows($resultados)][4]  = $r["traitem"];
   $tabla[mysqli_num_rows($resultados)][5]  = $r["numciv"];
   $tabla[mysqli_num_rows($resultados)][6]  = $r["rue"];
   $tabla[mysqli_num_rows($resultados)][7]  = $r["ville"];
   $tabla[mysqli_num_rows($resultados)][8]  = $r["prov"];
   $tabla[mysqli_num_rows($resultados)][9]  = $r["codpos"]; 
   $tabla[mysqli_num_rows($resultados)][10] = $r["typetelephone"];
   $tabla[mysqli_num_rows($resultados)][11] = $r["numtelephone"];
   $tabla[mysqli_num_rows($resultados)][12] = $r["typecourriel"];
   $tabla[mysqli_num_rows($resultados)][13] = $r["courriel"];
   $tabla[mysqli_num_rows($resultados)][14] = $r["typedoc"];
   $tabla[mysqli_num_rows($resultados)][15] = $r["numdoc"];
   $tabla[mysqli_num_rows($resultados)][16] = $r["langue"];
   $tabla[mysqli_num_rows($resultados)][17] = $r["niveau"];
   $tabla[mysqli_num_rows($resultados)][18] = $r["datnac"];
   $tabla[mysqli_num_rows($resultados)][19] = $r["datinc"];
   $tabla[mysqli_num_rows($resultados)][20] = $r["ocupation"];
   $tabla[mysqli_num_rows($resultados)][21] = $r["status"];
   $tabla[mysqli_num_rows($resultados)][22] = $r["groupes"];
};
//$tabla = 'llego!# ' . $usuario . '* ' . $pass . '&';
echo json_encode($tabla);


?>
