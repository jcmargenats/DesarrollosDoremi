
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation Utilisateurs</title>
  </head>
  <body>
    <?php
      include_once "./php/fonctions.php";

      // Ouvrir la base de données
      $connexion = connexion(); 

      // =============================================================
      // Chercher les personnes pour le Drop down
      // =============================================================
      $sql1 = "select * from personne";
      // Lecture
      $datos = $connexion->query($sql1); 
      // Validation 
      if ($connexion->errno) 
      { 
        echo"erreur de lecture "; 
        die($connexion->error); 
      }
      else 
      //Ajouter les enregistrements dans les options.
      // Pour les personnes
      {
        // Initialiser des variables
        $i = 1;
        while($sqlres=$datos->fetch_assoc())
        {
          $optpers[$i][1] = $sqlres['idpersonne'];
          $optpers[$i][2] = $sqlres['nomfam'] . ', ' . $sqlres['prenom'];
          $i = $i + 1;
        } 
      }
      // =============================================================
      // Chercher les rôles dans la base de données roles
      // =============================================================
      $sql1 = "select * from roles where status = 1";
      // Lecture
      $datos = $connexion->query($sql1); 
      // Validation 
      if ($connexion->errno) 
      { 
        echo"erreur de lecture "; 
        die($connexion->error); 
      }
      else 
      //Ajouter les enregistrements dans les options.
      // Pour les rôles
      {
        // Initialiser des variables
        $prenom = "";
        $nomfam = "";
        $i = 1;
        while($sqlres=$datos->fetch_assoc()) 
        { 
          $optrol[$i][1] = $sqlres['idrol'];
          $optrol[$i][2] = $sqlres['nomrol'];
          $optrol[$i][3] = $sqlres['roldescrip'];
          $i = $i + 1 ;
        }; 
      };
      // =============================================================
      // Chercher les status dans la base de données status
      // =============================================================
      $sql1 = "select * from status";
      // Lecture
      $datos2 = $connexion->query($sql1); 
      // Validation 
      if ($connexion->errno) 
      { 
        echo"erreur de lecture "; 
        die($connexion->error); 
      }
      else 
      //Ajouter les enregistrements dans les options.
      // Pour les status
      {
        $i = 1;
        while($sqlres2=$datos2->fetch_assoc()) 
        { 
          $optstat[$i][1] = $sqlres2['idstatus'];
          $optstat[$i][2] = $sqlres2['status'];
          $optstat[$i][3] = $sqlres2['description'];
          $i = $i + 1;
        }; 
      };

      // ================================================================
    ?>  
    <h1>Creation Utilisateurs</h1>
    <form id="form01" name="form01" method="POST">
      <!-- =================Id Utilisateur======================= -->
      <label for="iduser">Id Utilisateur: </label>
      <?php
        echo "<input type='text' readonly name='iduser' id='iduser'> <br>"; 
      ?>
      <!-- =================Nom Utilisateur======================= -->
      <label for="nomuser">Nom Utilisateur: </label>
      <?php
        echo "<input type='text' name='nomuser' id='nomuser'> <br>"; 
      ?>
      <!-- =================Numéro Personne=========================== -->
      <label for="idpersonne">Id Personne: </label>
      <select name="idpersonne" id="idpersonne">
      <?php
        echo "<option value='' > Choisir une personne</option>";
        for( $i = 1; $i <= count($optpers); $i++)
        {
          echo "<option value='" . $optpers[$i][1] . "'>" . $optpers[$i][2] . "</oprion>";
        }
      ?>
      </select><br>
      <!-- =================Prénom================================ -->
      <label for="prenom">Prénom: </label>
      <p><?php echo $prenom; ?><p>
      <!-- =================Nom Famille=========================== -->
      <label for="nomfam">Nom Famille: </label>
      <P><?php echo $nomfam; ?></p>     
      <!-- =================Rôle================================== -->
      <label>Rôles</label><br>
      <?php
        // Monttrer les rôles possibles et marquer les rôles actuels
        for($i = 1; $i <= count($optrol); $i++)
        {          
          echo "<input type='checkbox' value='".$optrol[$i][1]."' name='role".$optrol[$i][2]."'";
          echo "><label>".$optrol[$i][2]."</label><br>";
        };        
      ?>
      <!-- =================Status================================ -->
      <label>Status</label><br>
      <?php
        
        // Monttrer les status possibles et marquer le status actuel
        for($i = 1; $i <= count($optstat); $i++)
        {          
          echo "<input type='radio' name='idstatus' value='" . $optstat[$i][1] . "'"; 
          echo "><label>".$optstat[$i][2]."</label><br>";
        };
      ?>
      <!-- =================Bouton================================ -->
      <button id="bouton1" type="submit">Enviar</button>
    </form>

    <?php
      // Validation du formulaire
      if($_POST)
      {
        $iduser  = $_POST['iduser'];
        $nomuser = $_POST['nomuser'];
        $idstatus = $_POST['idstatus'];
        // Fair un json avec les rôles
        echo "EStoy grabando en el pesos_POST!!!";
        $rol = array();
        // echo var_dump($_POST);
        foreach($_POST as $elemen=>$valeur)
        {
          $pont = substr($elemen, 0, 4);
          if($pont == 'role')
          {
            $rol[substr($elemen,4)] = $valeur;
          }
        }
        $role=json_encode($rol);
        // Enregistrer les modifications.
        $connexion = connexion();
        $sql1 = "update user set nomuser = '" . $nomuser . "', role = '" . $role . "', status = ";  
        $sql1 = $sql1 . $idstatus . " where iduser = '" . $iduser . "'";
        $datos = $connexion->query($sql1);
        if($connexion->errno) 
        {
          echo"error de escritura"; 
          die($connexion->error); 
        }
        else
        {
          $salir = true;
          
          // echo "paso por aca";
          // echo "<script> goBack(); function goBack() { window.history.back()}</script>";
          // echo "no lo hizo";
        }         
      }
         
    ?>


  </body>
</html>
