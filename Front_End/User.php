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
    <h1>Utilisateurs</h1>
    <!-- Head pour le table -->
    <table id="tablah">
      <thead>
        <tr>
          
          <td>Id de la Personne</td>
          <td>Nom Famille</td>
          <td>Prénom</td>
          <td>Status</td>
          <td>Rol</td>
          <td>Photo</td>
        </tr>
      </thead>
    </table>  
    <!-- Body de tbla -->
    <table id="tablab">
      <tbody>
        <!-- PHP ppour produire une table dinamique -->
        <?php
          // Lecture de la base de données
          include_once "./PHP/connexion_mysqli.php";
          // SQL à la base de données
          $sql1 = "select * from V_user";
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
              echo $sqlres['idpersonne'] . "</td><td>"; 
              echo $sqlres['nomuser']    . "</td><td>"; 
              echo $sqlres['nomfam']     . "</td><td>"; 
              echo $sqlres['prenom']     . "</td><td>"; 
              echo $sqlres['status']     . "</td><td>"; 
              echo $sqlres['role']       . "</td><td>"; 
              echo $sqlres['photo_logo'] . "</td></tr>"; 
            }; 
            // Fermeture de connection à la base de donnée.
            $connexion->close(); 
          }; 
        ?>
      </tbody>
    </table>
    <!-- Fonctions JavaScript -->
    <script>
      // Fonction pour click dans utilisateur
      function addRowHandlers() {
        var tabla = document.getElementById("tablab");
        var rows = tablab.getElementsByTagName("tr");               
        for (i = 0; i < rows.length; i++) {
          var currentRow = tablab.rows[i];
          var createClickHandler = function (row) {
            return function () 
            {
              var cell = row.getElementsByTagName("td")[0];
              var id = cell.innerHTML;
              // On va mettre le programme de modification ici
              <?php 
                $id = $_GET['id']; 
                echo "acatá" . $id;
              ?>

              //alert(`el usuario es ${id}`)
            };
          };
          currentRow.onclick = createClickHandler(currentRow);
        }
      }
      window.onload = addRowHandlers();
    </script>
    <?php

    ?>
  </body>
</html>
