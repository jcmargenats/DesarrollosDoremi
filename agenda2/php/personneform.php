<script src="../agenda2/js/fonctions.js"></script>
<?php
  //==========================================================
  // Charger les options necessaires
  //==========================================================
  include_once "fonctions.php";
  // Lecture de la base de données Table TypeDoc
          
  $connexion = connexion();
  // SQL à la base de données table typedoc
  $sql1 = "select * from typedoc";
  // Lecture
  $datos = $connexion->query($sql1); 
  // Validation
  if ($connexion->errno) 
  { 
    echo"error de lectura"; 
    die($connexion->error); 
  }else 
  //Ajouter les enregistrements dans $typdoc.
  {
    $i = 1;
    while($sqlres=$datos->fetch_assoc()) 
    {
      $typdoc[$i][1] = $sqlres['typedoc'];
      $typdoc[$i][2] = $sqlres['typedocdesc'];
      $i = $i + 1;
    }
  }  
  //==========================================================
  // Avec IdPersonne (modify) ou sans IdPersonne (creation)
  //==========================================================
?>  
<label for="idpers">Identification de la Personne <span>Id personne: <?php echo $idpersonne; ?></span></label> 
<div name="idpers" class="div01">
  <?php     
      //=================Prénom=================================== 
  ?>    
  <label for="prenom">Prénom: </label>
  <input type="text" name="prenom" id="prenom" value=<?php echo $prenom; ?>><br>
     
  <?php
    //=================Nom famille============================== 
  ?>    
  <label for="nomfam">Nom Famille: </label>
  <input type="text" name="nomfam" id="nomfam" value=<?php echo $nomfam; ?>><br>
          
  <?php
    //=================Entreprise=============================== 
  ?>
  <label for="entreprise">Entreprise: </label>
  <input type="text" name="entreprise" id="entreprise" value=<?php echo $entreprise; ?>><br>
        
  <?php
    //=================Initiales================================= 
  ?>
  <label for="init">Initiales: </label>
  <input type="text" name="init" id="init" value=<?php echo $init; ?>><br>
          
  <?php
    //=================Traitement================================= 
  ?>
  <label for="traitem">Traitement: </label>
  <input type="text" name="traitem" id="traitem" value=<?php echo $traitem; ?>><br>
      
  <?php
    //=================Type/Document================================= 
  ?>
  <label for="typdoc">Type/Document: </label>
  <Select>
  <?php
    $i = 1;

    foreach($numdoc as $valeur=>$element)
    {
      $z_typedoc[$i][1] = $valeur;  
      $z_typedoc[$i][2] = $element;  
      echo "<option value=" . $valeur . ">" . $valeur . " - " . $element . "</option>";
      $i = $i + 1;
    }
  ?>  
  </select>
  <button id="myBtnnumdoc">Edit</button>
  <?php
    //=================Modal pour numéro de document==================
  ?>
  <div id="myModal" class="modal">
    <?php
    // Modal content     
    ?>
    <div class="modal-content">
      <span class="close">&times;</span>
      <?php
        //Head pour le table
      ?>
      <table id="tablanumdoc">
        <thead>
          <tr>
            <td>Type Document</td>
            <td>Numéro Document</td>
          </tr>
        </thead>
        <tbody name="tbodynumdoc">
          <script> 
          $typdoc=<?php echo json_encode($typdoc);?>;
          var $numdoc=<?php echo json_encode($numdoc);?>;
          adddoc() 
          </script>
        </tbody>
      </table>  
    </div>
  </div>


  







</div>
<?php
  //============================================================
  // Adresse de la personne
  //============================================================
?>
<label for="adper">Adresse de la Personne</label> 
<div name="adper" class="div01">

  <?php
  //=================Numéro Civique============================== 
  ?>
  <label for="numciv">Numéro: </label>
  <input type="text" name="numciv" id="numciv" value=<?php echo $numciv; ?>><br>
          
  <?php
    //=================Rue========================================= 
  ?>
  <label for="rue">Rue: </label>
  <input type="text" name="rue" id="rue" value=<?php echo $rue; ?>><br>
         
  <?php
    //=================Ville======================================= 
  ?>
  <label for="ville">Ville: </label>
  <input type="text" name="ville" id="ville" value=<?php echo $ville; ?>><br>
          
  <?php
    //=================Code Postal================================= 
  ?>
  <label for="codpos">Code Postal: </label>
  <input type="text" name="codpos" id="codpos" value=<?php echo $codpos; ?>><br>
         
  <?php
    //=================Province========================================= 
  ?>
  <label for="prov">Province: </label>
  <input type="text" name="prov" id="prov" value=<?php echo $prov; ?>><br>
          
  <?php
    //=================Pays========================================== 
  ?>
  <label for="pays">Pays: </label>
  <input type="text" name="pays" id="pays" value=<?php echo $pays; ?>><br>
          
</div><br>
<?php
  //============================================================
  // Coordonnées de la personne
  //============================================================
?>
<label for="coorper">Coordonnées de la Personne</label>
<div name="coorper" class="div01">

  <?php
    //=================Téléphones===================================== 
  ?>
  <label for="telephone">Téléphone: </label>
  <input type="text" name="telephone" id="telephone" value=<?php echo $telephone; ?>><br>
          
  <?php
    //=================Courriels========================================== 
  ?>
  <label for="courriel">Courriels: </label>
  <input type="text" name="courriel" id="courriel" value=<?php echo $courriel; ?>><br> 
          
</div><br>

<?php
  //============================================================
  // Autres
  //============================================================
?>
<label for="autres">Autres . . .</label> 
<div name="autres" class="div01">

  <?php
    //=================langue===================================== 
  ?>
  <label for="langue">Langues: </label>
  <input type="text" name="langue" id="langue" value=<?php echo $langue; ?>><br>
          
  <?php
    //=================Photo ou Logo=============================== 
  ?>
  <label for="photo_logo">Photo/Logo: </label>
  <input type="file" name="foto" id="foto">
</div><br>

<button id="bouton1" type="submit">Enviar</button>
<?php
  //=========================================================================================== 
  //=                                      M O D A L                                          = 
  //=========================================================================================== 

  // Trigger/Open The Modal 
  // <button id="myBtn">Open Modal</button> 
  
  // The Modal 
?>
  
  <script>
  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btnnumdoc = document.getElementById("myBtnnumdoc");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btnnumdoc.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
  



