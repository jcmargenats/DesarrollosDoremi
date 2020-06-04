//  Functions pour l'objet nom
function Nom(nom1, nom2, nomfam, init, traitem, nomemp) {
  (this.nom1 = nom1),
    (this.nom2 = nom2),
    (this.nomfam = nomfam),
    (this.init = init),
    (this.traitem = traitem),
    (this.nomemp = nomemp);
}
// poop
function retourninitials(nombre) {
  nombre = nombre.replace("-", " ");
  var separa = nombre.split(" ");
  nombre = separa[0].charAt(0);
  for (j = 1; j < separa.length; j++) {
    nombre = nombre + "." + separa[j].charAt(0);
  }
  nombre = nombre.toUpperCase() + ".";
  return nombre;
}
