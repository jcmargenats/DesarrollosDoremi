<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "desarrollosdoremi";
  $charset = "utf8";
  $erreur = false;
  $connexion = new mysqli($host, $user, $pass, $db);
  if($connexion->connect_errno)
  {
    echo "La connection a échoué! Erreur " . $connexion->connect_errno;
    $erreur = true;
  }else
  {
    if($connexion->character_set_name() !== $charset)
    {
      $erreur = $connexion->set_charset($charset);
    }
  }




?>  
