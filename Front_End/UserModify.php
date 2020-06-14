
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Utilisateurs</title>
  </head>
  <body>
    <?php
       include_once "./PHP/Fonctions.php";
      // Recevoir 
      if(isset($_GET['user']))
      {
          $userid=$_GET['user'];
      }
      // Validation du formulaire
      if($_POST)
      {
        $iduser  = $_POST['iduser'];
        $nomuser = $_POST['nomuser'];
        $idstatus = $_POST['idstatus'];
        // Fair un json avec les rôles
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
        }else
        {
          echo "<script> window.history.back(); </script>";
          echo "paso por aca";
        }         
      }
      // Ouvrir la base de données
      $connexion = connexion(); 
      // ==========================================================
      // Chercher l'utilisateur
      // ==========================================================
      $sql1 = "select * from v_user where iduser = " . $userid;
      // Lecture de l'utilisateur
      $datos = $connexion->query($sql1); 
      // Validation de l'utilisateur
      if ($connexion->errno) 
      { 
        echo"error de lectura"; 
        die($connexion->error); 
      }else
      {
        // remplir champs du formulaire avec l'utilisateur
        $sqlres=$datos->fetch_assoc();
        $iduser  = $sqlres['iduser'];
        $nomuser = $sqlres['nomuser'];
        $prenom  = $sqlres['prenom'];
        $nomfam  = $sqlres['nomfam'];
        $role    = $sqlres['role'];
        $status  = $sqlres['status'];
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
      }else 
      //Ajouter les enregistrements dans les options.
      // Pour les rôles
      {
        $i = 1;
        while($sqlres=$datos->fetch_assoc()) 
        { 
          $optrol[$i][1] = $sqlres['idrol'];
          $optrol[$i][2] = $sqlres['nomrol'];
          $optrol[$i][3] = $sqlres['roldescrip'];
          $i = $i + 1 ;
        }; 
      }
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
      }else 
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
    <h1>Utilisateurs</h1>
    <form id = "form01" name = "form01" method="POST" >
      <!-- =================Id Utilisateur======================= -->
      <label for="iduser">Id Utilisateur: </label>
      <?php
        echo "<input type='text' readonly name='iduser' id='iduser' value=" . $iduser . "> <br>"; 
      ?>
      <!-- =================Nom Utilisateur======================= -->
      <label for="nomuser">Nom Utilisateur: </label>
      <?php
        echo "<input type='text' name='nomuser' id='nomuser' value=" . $nomuser . "> <br>"; 
      ?>
      <!-- =================Prénom================================ -->
      <label for="prenom">Prénom: </label>
      <p><?php echo $prenom; ?><p>
      <!-- =================Nom Famille=========================== -->
      <label for="nomfam">Nom Famille: </label>
      <P><?php echo $nomfam; ?></p>     
      <!-- =================Rôle================================== -->
      <label>Rôles</label><br>
      <?php
        $arreglo=json_decode($role,false);
        // Monttrer les rôles possibles et marquer les rôles actuels
        for($i = 1; $i <= count($optrol); $i++)
        {          
          echo "<input type='checkbox' value='".$optrol[$i][1]."' name='role".$optrol[$i][2]."'";
          for($j = 1; $j <= 4; $j++) 
          {
            foreach($arreglo as $elemen=>$valeur)
            {
              if($valeur == $optrol[$i][1])
              {
                echo " checked";
              }  
            }
          }
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
          
          if($status == $optstat[$i][1])
          {
            echo " checked";
          }  
        
          echo "><label>".$optstat[$i][2]."</label><br>";
        };
      ?>
      <!-- =================Bouton================================ -->
    <button id="bouton1" type="submit">Enviar</button>
    </form>
  </body>
</html>
