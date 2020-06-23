<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Users</title>
    <!-- Feuille de style pour cette application -->
    <link rel="stylesheet" href="./css/user.css" />
  </head>
  <body>
    <?php
    include_once "./php/fonctions.php";
    ?>
    <h1>Utilisateurs</h1>
    <?php
      echo "<input type='button' value='Alta' onClick=window.location.href='useralta.php'>";   
    ?>  
    <!-- Head pour le table -->
    <table id="tablah">
      <thead>
        <tr>
          
          <td>Id de l'utilisateur</td>
          <td>Nom Utilisateur</td>
          <td>Nom Famille</td>
          <td>Prénom</td>
          <td>Status</td>
          <td>Rol</td>
          <td>Photo</td>
        </tr>
      </thead>
      <tbody>
        <!-- PHP pour produire une table dinamique -->
        <?php
          // Lecture de la base de données
          
          $connexion = connexion();
          // SQL à la base de données
          $sql1 = "select * from v_user";
          // Lecture
          $datos = $connexion->query($sql1); 
          // Validation
          if ($connexion->errno) 
          { 
            echo"error de lectura"; 
            die($connexion->error); 
          }else 
          //Ajouter les enregistrements dans tablab.
          {
            while($sqlres=$datos->fetch_assoc()) 
            { 
              echo "<tr id='linea'>"; 
              echo "<td>"; 
              echo $sqlres['iduser']     . "</td><td>"; 
              echo $sqlres['nomuser']    . "</td><td>"; 
              echo $sqlres['nomfam']     . "</td><td>"; 
              echo $sqlres['prenom']     . "</td><td>"; 
              echo $sqlres['status']     . "</td><td>"; 
              echo $sqlres['role']       . "</td><td>"; 
              echo $sqlres['photo_logo'] . "</td><td>";      
              echo "<input type='button' value='Edit' onClick=window.location.href='usermodify.php?user=";
              echo $sqlres['iduser'] . "'>";   
              echo "</td></tr>"; 
            }; 
            // 
            // 
            // Fermeture de connection à la base de donnée.
            $connexion->close(); 
          }; 
        ?>
      </tbody>
    </table>
  </body>
</html>
