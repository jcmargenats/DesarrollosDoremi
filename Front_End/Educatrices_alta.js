var formulario = document.getElementById("form01");
formulario.addEventListener("submit", function (e) {
  e.preventDefault();

  var erreur = validation();
  if (!erreur) {
    var donnees = new FormData(formulario);
    fetch("/DesarrollosDoremi/Back_End/post.php", {
      method: "POST",
      body: donnees,
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data);
      });
  }
});

//  fonction Validation
function validation() {
  z_nomfam = document.getElementById("nomfam").value;
  erreur = false;
  if (z_nomfam !== null) {
    var z_init = document.getElementById("init").value;
    if (z_init == "") {
      var z_prenom = document.getElementById("prenom").value;
      var nomprenom = z_prenom + " " + z_nomfam;
      document.getElementById("init").value = retourninitials(nomprenom);
      erreur = true;
    }
  } else {
    erreur = true;
  }
  return erreur;
}
