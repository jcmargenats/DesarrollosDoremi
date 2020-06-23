<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation Personne</title>
  </head>
  <body>
  <script src="./js/fonctions.js"></script>
    <?php
      include_once "./php/fonctions.php";
      // Ouvrir la base de données
      $connexion = connexion(); 

    ?>
    <!-- ================================================================ -->
     
    <h1>Creation Personne</h1>
    <form id="form01" name="form01" method="POST" enctype='multipart/form-data'>
      <?php  
        include_once "./php/personneform.php";
        //================================================================//
        //                            $_POST                              //
        //================================================================//
        if($_POST)
        {
          if(valpersonnealta())
          {
            $prenom = $_POST['prenom'];
            $nomfam = $_POST['nomfam'];
            $entreprise = $_POST['entreprise'];
            $init = $_POST['init'];
            $traitem = $_POST['traitem'];
            $numciv = $_POST['numciv'];
            $rue = $_POST['rue'];
            $ville = $_POST['ville'];
            $codpos = $_POST['codpos'];
            $prov = $_POST['prov'];
            $pays = $_POST['pays'];
            $telephone = $_POST['telephone'];
            $courriel = $_POST['courriel'];
            $numdoc = $_POST['numdoc'];
            $langue = $_POST['langue'];
            $user = get_current_user();
            if($_FILES['foto']['error'] == 0)
            {
              // ============================================================================
              // forma anterior
              // $photo_logo = base64_encode(file_get_contents($_FILES['foto']['tmp_name']));
              // $typeimage = exif_imagetype($_FILES['foto']['tmp_name']);
              // ============================================================================
              $imagetype = $_FILES['foto']['type'];
              $imagename = $_FILES['foto']['name'];
              $imagesize = $_FILES['foto']['size'];
              $imagetelecharche = fopen($_FILES['foto']['tmp_name'],'rb');
              $imagebinary = fread($imagetelecharche, $imagesize);
              // Limpiar binarion
              $photo_logo = mysqli_escape_string($connexion, $imagebinary);
            }else
            {
              $photo_logo = null;
              $imagetype = null;
            }  
             // Ouvrir la base de données au besoin.
            if(!$connexion)
            {
              $connexion = connexion(); 
            }
            $sql  = "insert into personne (prenom, nomfam, entreprise, init, traitem, "; 
            $sql .= "numciv, rue, ville, codpos, prov, pays, telephone, courriel, numdoc, ";
            $sql .= "langue, photo_logo, imagetype, usercreate, usermodify) "; 
            $sql .= "values('" . $prenom . "', '" . $nomfam . "', '" . $entreprise . "', '" . $init;
            $sql .= "', '" . $traitem . "', '" . $numciv . "', '" . $rue . "', '" . $ville . "', '";
            $sql .= $codpos . "', '" . $prov . "', '" . $pays . "', '" . $telephone . "', '" . $courriel; 
            $sql .= "', '" . $numdoc . "', '" . $langue . "', '" . $photo_logo . "', '" . $imagetype;  
            $sql .= "', '" . $user . "', '" . $user . "')";
            $datos = $connexion->query($sql);
            if($connexion->errno) 
            {
              echo"Erreur d'écriture"; 
              die($connexion->error); 
            }
            else
            {
              $salir = true;
              $connexion->close();  
            }         

          };
        };
      ?>  
    </form>
  </body>
</html>
