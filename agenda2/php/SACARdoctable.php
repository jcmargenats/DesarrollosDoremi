<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table des documents</title>
  </head>
  <body>
    <?php
      include_once "../php/fonctions.php";
      $connexion = connexion();
      // SQL à la base de données
      $sql1 = "select * from typedoc";
      // Lecture
      $datos = $connexion->query($sql1); 
      // Validation
      if ($connexion->errno) 
      { 
        echo"error de lectura"; 
        die($connexion->error); 
      }
      else 
      //Ajouter les enregistrements dans tablab.
      {
          print_r($sqlres);
        $i = 1;  
        while($sqlres=$datos->fetch_assoc()) 
        {   
          $tdoc[$i] = $sqlres[1];
        }
      }
    ?>
    <table id="tabla">
      <thead>
        <tr>
          <td>Type de Document</td>
          <td>Numéro de document</td>
        </tr>
      </thead>
      <tbody>
      <!-- PHP pour produire une table dinamique -->
        <?php
          echo "<tr id='linea'></tr>";
            echo "<td>tipo</td>";
            echo "<td>numero</td>";
          echo "</tr>"; 
        ?>
      </tbody>
    </table>
    <?php      
      echo "<select name='sel2'>";
        for ($i = 1; $i <= count($tdoc); $i++)
        {
          echo "<option>" . $tdoc[$i] . "</option>";
        }  
      echo "</select>";   
    ?>
  </body>
</html>