<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personne</title>
    <!-- Feuille de style pour cette application -->
    <link rel="stylesheet" href="./css/user.css" />
  </head>
  <body>
    <?php
    include_once "./php/fonctions.php";
    ?>
    <h1>Personne</h1>
    <?php
      echo "<input type='button' value='Alta' onClick=window.location.href='personnealta.php'>";   
    ?>  
    <!-- Head pour le table -->
    <table id="tablah">
      <thead>
        <tr>
          <td>Nom Famille</td>
          <td>Prénom</td>
          <td>Entreprise</td>
          <td>Type/Téléphone</td>
          <td>Type/Courriel</td>
          <td>Type/Document</td>          
          <td>Photo</td>
        </tr>
      </thead>
      <tbody>
        <!-- PHP pour produire une table dinamique -->
        <?php
          // Lecture de la base de données Personne
          
          $connexion = connexion();
          // SQL à la base de données
          $sql1 = "select * from personne";
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
                echo $sqlres['nomfam']     . "</td><td>"; 
                echo $sqlres['prenom']    . "</td><td>"; 
                echo $sqlres['entreprise']     . "</td><td>"; 
                // chercher les téléphones pour la personne.
                if($sqlres['telephone'] !== null)
                {
                  $opttel = opttel($sqlres['telephone']);
                  echo "<select>";
                  for ($i = 1; $i <= count($opttel); $i++)
                  {
                    echo "<option>" . $opttel[$i] . "</option>";
                  }
                  echo "</select></td><td>";
                }
                else
                {
                  echo "" . "</td><td>"; 
                }
                // chercher les courriels pour la personne.
                if($sqlres['courriel'] !== null)
                {
                  $optcou = opttel($sqlres['courriel']);
                  echo "<select>";
                  for ($i = 1; $i <= count($optcou); $i++)
                  {
                    echo "<option>" . $optcou[$i] . "</option>";
                  }
                  echo "</select></td><td>";
                }
                else
                {
                  echo "" . "</td><td>"; 
                }
                // chercher les documents pour la personne.
                if($sqlres['numdoc'] !== null)
                {
                  $optndoc = optndoc($sqlres['numdoc']);
                  echo "<select>";
                  for ($i = 1; $i <= count($optndoc); $i++)
                  {
                    echo "<option>" . $optndoc[$i] . "</option>";
                  }
                  echo "</select></td><td>";
                }
                else
                {
                  echo "" . "</td><td>"; 
                }
                //--------------------------------------------------------------------------
                // Ajouter l'image
                if($sqlres['photo_logo'] !== null)
                {
                  $pont1 = $sqlres['imagetype'] . ";base64,";
                  $pont2 = base64_encode($sqlres['photo_logo']);
                  echo "<img width='50' " . "src=data:" . $pont1 . $pont2 . "></td><td>";
                
                }
                else
                {
                  echo "" . "</td><td>"; 
                }


                //--------------------------------------------------------------------------
                $pont  = "<input type='button' value='Edit' onClick=window.location.href='personnemodify.php?personne=";
                $pont .= $sqlres['idpersonne'] . "'></td>";
                echo $pont;
              echo "</tr>";
            }
            $connexion->close(); 
          }
        ?>
      </tbody>
    </table>
  </body>
</html>
