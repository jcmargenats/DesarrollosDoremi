//
function Personne(
  nom1,
  nom2,
  nomfam,
  init,
  traitem,
  nomemp,
  numciv,
  rue,
  ville,
  prov,
  codpos,
  telephone,
  courriel,
  docident,
  genre,
  photo
) {
  Nom.call(this, nom1, nom2, nomfam, init, traitem, nomemp);
  Coordonnees.call(this, numciv, rue, ville, prov, codpos, telephone, courriel);
  (this.docident = docident), (this.genre = genre), (this.photo = photo);
}
Personne.prototype = Object.create(Nom.prototype);
Personne.prototype = Object.create(Coordonnees.prototype);
Personne.prototype.constructor = Personne;
//  Functions pour l'objet Personne
// console.log("1 El valor de rue es " + u_rue);
u_nom1 = document.getElementById("nom1").value;
u_nom2 = document.getElementById("nom2").value;
u_nomfam = document.getElementById("nomfam").value;
u_init = document.getElementById("init").value;
u_traitem = document.getElementById("traitem").value;
u_nomemp = document.getElementById("nomemp").value;
u_numciv = document.getElementById("numciv").value;
u_rue = document.getElementById("rue").value;
u_ville = document.getElementById("ville").value;
u_prov = document.getElementById("prov").value;
u_codpos = document.getElementById("codpos").value;
u_telephone = document.getElementById("telephone").value;
u_courriel = document.getElementById("courriel").value;
u_docident = document.getElementById("docident").value;
u_nom1 = document.getElementById("genre").value;
console.log(`2 El valor de rue es, ${u_rue}`);
