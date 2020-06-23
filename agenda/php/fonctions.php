<?php
  //=========================================================================
  // Function connexion pour connecter à la base de données.
  //=========================================================================
  function connexion()
  {
    $develop1 = "DESKTOP-PSMNA30";
    $develop2 = "DESKTOP-PSMNA30";
    $develop3 = "DESKTOP-PSMNA30";
    $develop4 = "DESKTOP-PSMNA30";
    $develop5 = "DESKTOP-PSMNA30";
    $develop6 = "DESKTOP-PSMNA30";
    switch(gethostname())
    {
      case $develop1:
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "desarrollosdoremi";
        $charset = "utf8";
        break;
      case $develop2:
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "desarrollosdoremi";
        $charset = "utf8";
        break;
      case $develop3:
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "desarrollosdoremi";
        $charset = "utf8";
        break;
      case $develop4:
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "desarrollosdoremi";
        $charset = "utf8";
        break;
      case $develop5:
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "desarrollosdoremi";
        $charset = "utf8";
        break;
      case $develop6:
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "desarrollosdoremi";
        $charset = "utf8";
        break;
      default:   
        $host = "localhost";
        $user = "quewebca_juanca";
        $pass = "-Gj]b,BBO=&S";
        $db = "quewebca_juanca";
        $charset = "utf8";
      break;
    }
    // erreur si la transaction a échoué
    $con_erreur1 = false;
    // erreur si le changement de charset a échoué
    $con_erreur2 = false;
    // Connection
    $connexion = new mysqli($host, $user, $pass, $db);
    // Verification de la connection
    if($connexion->connect_errno)
    {
      $con_erreur1 = true;
    }else
    {
    // Verification de charset
      if($connexion->character_set_name() !== $charset)
      {
        $con_erreur2 = !$connexion->set_charset($charset);
      }  
    return $connexion;
    }
  }
?>
<?php
  //=========================================================================
  // Function opttel Function pour obtenir les téléphones du JSON
  //=========================================================================
  function opttel($telephone)
  {
    $arreglo=json_decode($telephone,false);
    // Monttrer les rôles possibles et marquer les rôles actuels
    $i = 1;
    foreach($arreglo as $elemen=>$valeur)
    {          
      $opttel[$i] = $elemen . "/" . $valeur;
      $i = $i + 1;
    };
    return $opttel;
  }
?>
<?php
  //=========================================================================
  // Function optcou Function pour obtenir les courriels du JSON
  //=========================================================================
  function optcou($courriel)
  {
    $arreglo=json_decode($courriel,false);
    // Monttrer les rôles possibles et marquer les rôles actuels
    $i = 1;
    foreach($arreglo as $elemen=>$valeur)
    {          
      $optcou[$i] = $elemen . "/" . $valeur;
      $i = $i + 1;
    };
    return $optcou;
  }
?>
<?php
  //=========================================================================
  // Function optndoc Function pour obtenir les documents du JSON
  //=========================================================================
  function optndoc($numdoc)
  {
    $arreglo=json_decode($numdoc,false);
    // Monttrer les rôles possibles et marquer les rôles actuels
    $i = 1;
    foreach($arreglo as $elemen=>$valeur)
    {          
      $optndoc[$i] = $elemen . "/" . $valeur;
      $i = $i + 1;
    };
    return $optndoc;
  }
?>
<?php
  
?>