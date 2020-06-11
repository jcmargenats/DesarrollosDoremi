function genera_tabla(tablax, headx) {
  // Obtener la referencia del elemento body
  var body = document.getElementsByTagName("body")[0];

  // Crea un elemento <table>                                           y un elemento <tbody>
  var tabla = document.createElement("table");
  //   Elemantos para el encabezado (tblhead)
  var tblhead = document.createElement("thead");
  var hhilera = document.createElement("tr");

  //    columnas del Encabezado
  for (var i = 0; i < headx.length; i++) {
    var hcelda = document.createElement("td");
    var textohCelda = document.createTextNode(headx[i]);
    hcelda.appendChild(textohCelda);
    hhilera.appendChild(hcelda);
    //  hcelda = document.createElement("td");
  }
  //Agregar la fila al encabezado
  tblhead.appendChild(hhilera);

  //Agregar tblhead a la tabla
  tabla.appendChild(tblhead); //*
  //=====Aca va la tabla principal.
  var tblBody = document.createElement("tbody");
  // Crea las celdas
  console.log(`el largo de tablax ${tablax.length}`);
  for (var i = 0; i <= tablax[0].length; i++) {
    // Crea las hileras de la tabla
    var hilera = document.createElement("tr");

    for (var j = 0; j < tablax[0][0].length; j++) {
      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
      // texto sea el contenido de <td>, ubica el elemento <td> al final
      // de la hilera de la tabla
      var celda = document.createElement("td");
      var textoCelda = document.createTextNode(tablax[0][i][j]);
      console.log(textoCelda);
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    }

    // agrega la hilera al final de la tabla (al final del elemento tblbody)
    tblBody.appendChild(hilera);
  }

  // posiciona el <tbody> debajo del elemento <table>
  tabla.appendChild(tblBody);

  //appends < table > into < body >
  body.appendChild(tabla);
  // modifica el atributo "border" de la tabla y lo fija a "2";
  tabla.setAttribute("border", "2");
}
