<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personne</title>
  </head>
  <body>
    <h1>Personne</h1>
    <table>
      <thead>
        <tr>
          <td>Id Personne</td>
          <td>Prénom</td>
          <td>Nom Famille</td>
          <td>Prénom</td>
          <td>Status</td>
          <td>Rol</td>
          <td>Photo</td>
        </tr>
      </thead> 
      <tbody>
        <?php
          include_once "./PHP/connexion_mysqli.php";
          $sql1 = "select * from V_user";
          $datos = $connexion->query($sql1);
          if ($connexion->errno)
          {
            echo "error de lectura";
            die($connexion->error);
          }else
          { 
            while($sqlres=$datos->fetch_assoc())
            {  
              echo "<tr><td>";
              echo $sqlres['nomuser']    . "</td><td> ";
              echo $sqlres['nomfam']     . "</td><td> ";
              echo $sqlres['prenom']     . "</td><td> ";
              echo $sqlres['status']     . "</td><td> ";
              echo $sqlres['role']       . "</td><td> ";
              echo $sqlres['photo_logo'] . "</td></tr>";
            };
            $connexion->close();
          };
        ?>
      </tbody>
    </table>
  </body>
</html>