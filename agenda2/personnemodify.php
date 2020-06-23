<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification des personnes</title>
    <!-- Feuille de style pour cette application -->
    <link rel="stylesheet" href="./css/user.css?v=<?php echo date('c'); ?>" />
  </head>
  <body>
    <h1>Modification des personnes</h1>   
    <?php
      include_once "./php/fonctions.php";

      if(isset($_GET))
      {
        $idpers = $_GET['personne'];
      }
    
    // Lecture de la base de données Personne
         
      $connexion = connexion();
    // SQL à la base de données
      $sql1 = "select * from personne where idpersonne = " . $idpers;
    // Lecture
      $datos = $connexion->query($sql1); 
    // Validation
      if ($connexion->errno) 
      { 
        echo"error de lectura"; 
        die($connexion->error); 
      }
      else 
    //Remplir le formulaire avec la personne.
      {
        while($sqlres=$datos->fetch_assoc())  
        {
          $idpersonne = $sqlres['idpersonne'];
          $prenom = $sqlres['prenom'];
          $nomfam = $sqlres['nomfam'];
          $init = $sqlres['init'];
          $entreprise = $sqlres['entreprise'];
          $traitem = $sqlres['traitem'];
          $numdoc = json_decode($sqlres['numdoc']);
          $numciv = $sqlres['numciv'];
          $rue = $sqlres['rue'];
          $codpos = $sqlres['codpos'];
          $ville = $sqlres['ville'];
          $prov = $sqlres['prov'];
          $pays = $sqlres['pays'];
          $telephone = $sqlres['telephone'];
          $courriel = $sqlres['courriel'];
          $langue = $sqlres['langue'];
          $photo_logo = $sqlres['photo_logo'];
        }  
        include_once "./php/personneform.php"; 
      }
    ?>   
  </body>
</html>