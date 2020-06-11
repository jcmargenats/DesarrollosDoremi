<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Personne</title>
</head>
<body>
    
  
    
    <form action = "./php/insertpersonne.php" method="POST" name="AltaUserForm">
      
      <div>
        <label for="prenom">Prénom       </label>  
        <input type="text"name="prenom" id="prenom" required maxlength="40"/>
      </div>

      <div>
        <label for="nomfam">Nom Famille</label>  
        <input type="text"name="nomfam" id="nomfam" required maxlength="40"/>
      </div>

      <div>
        <label for="entreprise">Entreprise</label>  
        <input type="text"name="entreprise" id="entreprise" maxlength="40"/>
      </div>

      <div> 
        <label for="init">Initiales</label>  
        <input type="text"name="init" id="init" maxlength="10"/>
      </div>

      <div>
        <label for="traitem">Traitement</label>  
        <input type="text"name="traitem" id="traitem" maxlength="5"/>
      </div>

      <div> 
        <label for="numciv">Numéro</label>  
        <input type="text"name="numciv" id="numciv" maxlength="7"/>
      </div>

      <div>
        <label for="rue">Rue</label>  
        <input type="text"name="rue" id="rue" maxlength="40"/>
      </div>

      <div>
        <label for="ville">Ville</label>  
        <input type="text"name="ville" id="ville" maxlength="40"/>
      </div>

      <div>
        <label for="codpos">Code Postal</label>  
        <input type="text"name="codpos" id="codppos" maxlength="10"/>
      </div>

      <div>
        <label for="prov">Province</label>  
        <input type="text"name="prov" id="prov" maxlength="30"/>
      </div>

      <div>
        <label for="pays">Pays</label>  
        <input type="text"name="pays" id="pays" maxlength="30"/>
      </div>

      <div>
        <label for="telephone">Téléphone</label>  
        <input type="text"name="telephone" id="telephone" maxlength="30"/>
      </div>
    
      <div>
        <label for="courriel">Courriel</label>  
        <input type="text"name="courriel" id="courriel"/>
      </div>

      <div>
        <label for="numdoc">Document</label>  
        <input type="text"name="numdoc" id="numdoc"/>
      </div>

      <div>
        <label for="langue">Langue</label>  
        <input type="text"name="langue" id="langue"/>
      </div>

      <div> 
        <label for="photo_logo">Photo/Logo</label>  
        <input type="text"name="photo_logo" id="photo_logo"/>
      </div>

      <!-- <div>
        <label for="nomuser">Nom Utilisateur</label>  
        <input type="text"name="nomuser" id="nomuser"/>
      </div>

      <div> 
        <label for="role">Rôle</label>  
        <input type="text"name="role" id="role"/>
      </div>

      <div>
        <label for="status">Status</label>  
        <input type="text"name="status" id="status"/>
      </div> -->

      <input type="submit" value="Enregistrer"/>
       <p>termino</p>
    </form>
</body>
</html>