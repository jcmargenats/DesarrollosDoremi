<?php
  // paramètres d'accès à la base de données
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "desarrollosdoremi";
  $charset = "utf8";
  // erreur si la transaction a échoué
  $con_erreur1 = false;
  // erreur si le changement de charset a échoué
  $con_erreur2 = false;
  // Connection
  $connexion = new mysqli($host, $user, $pass, $db);
  // Verification de la connection
  if($connexion->connect_errno)
  {
    echo "La connection a échoué! Erreur " . $connexion->connect_errno;
    $con_erreur1 = true;
  }else
  {
    // Verification de charset
    if($connexion->character_set_name() !== $charset)
    {
      $con_erreur2 = !$connexion->set_charset($charset);
    }
    
  }
?>  