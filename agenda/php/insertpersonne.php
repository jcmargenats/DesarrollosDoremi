<?php 
  $prenom = $_POST["prenom"];
  $nomfam = $_POST["nomfam"];
  $init = $_POST["init"];
  $entreprise = $_POST["entreprise"];
  $traitem = $_POST["traitem"];
  $numciv = $_POST["numciv"];
  $rue = $_POST["rue"];
  $ville = $_POST["ville"];
  $codpos = $_POST["codpos"];
  $prov = $_POST["prov"];
  $pays = $_POST["pays"];
  $telephone = $_POST["telephone"];
  $courriel = $_POST["courriel"];
  $numdoc = $_POST["numdoc"];
  $langue = $_POST["langue"];
  $photo_logo = $_POST["photo_logo"];

  include_once "./connexion_mysqli.php";
  if(!$erreur)
  {
    $sql="insert into personne (prenom, nomfam, entreprise, init, traitem, numciv, 
          rue, ville, codpos, prov, pays, telephone, courriel, numdoc, langue, photo_logo)
          values('".$prenom."', '".$nomfam."', '".$entreprise."', '".$init."', '".$traitem."', '"
          .$numciv."', '".$rue."', '".$ville."', '".$codpos."', '".$prov."', '".$pays."', '"
          .$telephone."', '".$courriel."', '".$numdoc."', '".$langue."', '".$photo_logo."')";
    $execute=$connexion->query($sql);
    if(!$execute)
    {
      echo "Error en insert" . $execute . " *==* " . $sql; 
    }    
    $connexion->close();
  }
?>