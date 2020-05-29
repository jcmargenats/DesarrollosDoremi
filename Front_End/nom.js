//  Functions pour l'objet nom
function Nom(nom1, nom2, nomfam, init, traitem, nomemp) {
  (this.nom1 = nom1),
    (this.nom2 = nom2),
    (this.nomfam = nomfam),
    (this.init = init),
    (this.traitem = traitem),
    (this.nomemp = nomemp);
}

function retourninitials(nombre) {
  var separa = nombre.split("");
  console.log(`este es separa : ${separa}`);
  nombre = console.log(`este es el nombre : ${nombre}`);
  separa[0].charAt(0) +
    "." +
    "" +
    separa[0].charAt(0) +
    "." +
    "" +
    separa[0].charAt() +
    ".";
  return nombre;
}
