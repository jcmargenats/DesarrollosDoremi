<?php
  

  //==========================================================
  // Identification personne
  //==========================================================
  echo "<label for='idpers'>Identification de la Personne-----------------Id personne: ";
  if(isset($idpersonne))
  {
    echo $idpersonne;
  }
  echo "</label>"; 
  echo "<div name='idpers' style='border: 2px solid blue;'>";
     
    //=================Prénom=================================== 
    echo "<label for='prenom'>Prénom: </label>";
    echo "<input type='text' name='prenom' id='prenom' value=".$prenom."> <br>"; 
     
    //=================Nom famille============================== 
    echo "<label for='nomfam'>Nom Famille: </label>";
    echo "<input type='text' name='nomfam' id='nomfam' value=".$nomfam ."> <br>"; 
          
    //=================Entreprise=============================== 
    echo "<label for='entreprise'>Entreprise: </label>";
    echo "<input type='text' name='entreprise' id='entreprise' value=".$entreprise."> <br>"; 
        
    //=================Initiales================================= 
    echo "<label for='init'>Initiales: </label>";
    echo "<input type='text' name='init' id='init' value=".$init."> <br>"; 
          
    //=================Traitement================================= 
    echo "<label for='traitem'>Traitement: </label>";
    echo "<input type='text' name='traitem' id='traitem' value=".$traitem."> <br>"; 
      
    //=================Type/Document================================= 
    echo "<label for='typdoc'>Type/Document: </label>";
    echo "<div name='doctyp'>";
      // $optndoc[1] = "";
      // $optndoc[2] = "werwer";
      // if(isset($optndoc))
      // {
      //   echo "<select name='sel1' id='sel1' onchange='return adddoc()'>";
      //     echo "<option value=''></option>";
      //     echo "<option value='werwer'>werwer</option>";
      //   echo "</select>";
      // }  
      echo "<input type='text' name='numdoc' id='numdoc'>"; 
    //   echo "<button name='button1' onClick=adddoc()>+</button><br>"; 
      echo "<button id='myBtnnumdoc'>+</button>";
    echo "</div>";
    // modal
    echo "<div id='myModal' class='modal'>";
    // Modal content     
      echo "<div class='modal-content'>";
        echo "<span class='close'>&times;</span>";
        echo "se<p>Este es le PUTO Modal..</p>";
      echo "</div>";
    echo "</div>";

  echo "</div><br>";

  //============================================================
  // Adresse de la personne
  //============================================================
  echo "<label for='adper'>Adresse de la Personne</label>"; 
  echo "<div name='adper' style='border: 2px solid blue;'>";

  //=================Numéro Civique============================== 
    echo "<label for='numciv'>Numéro: </label>";
    echo "<input type='text' name='numciv' id='numciv' value=".$numciv."> <br>"; 
          
    //=================Rue========================================= 
    echo "<label for='rue'>Rue: </label>";
    echo "<input type='text' name='rue' id='rue' value=".$rue."> <br>"; 
         
    //=================Ville======================================= 
    echo "<label for='ville'>Ville: </label>";
    echo "<input type='text' name='ville' id='ville' value=".$ville."> <br>"; 
          
    //=================Code Postal================================= 
    echo "<label for='codpos'>Code Postal: </label>";
    echo "<input type='text' name='codpos' id='codpos' value=".$codpos."> <br>"; 
         
    //=================Province========================================= 
    echo "<label for='prov'>Province: </label>";
    echo "<input type='text' name='prov' id='prov' value=".$prov."> <br>"; 
          
    //=================Pays========================================== 
    echo "<label for='pays'>Pays: </label>";
    echo "<input type='text' name='pays' id='pays' value=".$pays."> <br>"; 
          
  echo "</div><br>";
  //============================================================
  // Coordonnées de la personne
  //============================================================
  echo "<label for='coorper'>Coordonnées de la Personne</label>"; 
  echo "<div name='coorper' style='border: 2px solid blue;'>";

    //=================Téléphones===================================== 
    echo "<label for='telephone'>Téléphone: </label>";
    echo "<input type='text' name='telephone' id='telephone' value=".$telephone."> <br>"; 
          
    //=================Courriels========================================== 
    echo "<label for='courriel'>Courriels: </label>";
    echo "<input type='text' name='courriel' id='courriel' value=".$courriel."> <br>"; 
          
  echo "</div><br>";

  //============================================================
  // Autres
  //============================================================
  echo "<label for='autres'>Autres . . .</label>"; 
  echo "<div name='autres' style='border: 2px solid blue;'>";

    //=================langue===================================== 
    echo "<label for='langue'>Langues: </label>";
    echo "<input type='text' name='langue' id='langue' value=".$langue."> <br>"; 
          
    //=================Photo ou Logo=============================== 
    echo "<label for='photo_logo'>Photo/Logo: </label>";
    echo "<input type='file' name='foto' id='foto'>";
  echo "</div><br>";

  echo "<button id='bouton1' type='submit'>Enviar</button>";
  ?>
  <!-- =========================================================================================== -->
  <!-- =                                      M O D A L                                          = -->
  <!-- =========================================================================================== -->
  <!-- Trigger/Open The Modal -->
  <!-- <button id="myBtn">Open Modal</button> -->
  
  <!-- The Modal -->

  
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
  



