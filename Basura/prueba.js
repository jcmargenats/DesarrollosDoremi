//var a=["Administrador", "User", "Alumno"]
// var a = new array(5);
// a[0] = new array(2);
// a[1] = new array(2);
// a[2] = new array(2);
// a[3] = new array(2);
// a[4] = new array(2);
// a[0][0] = "Casa";
// a[0][1] = 8196408498;
// a[1][0] = "Oficina";
// a[1][1] = 8198238498;
// a[2][0] = "Celular";
// a[2][1] = 8196408497;
// a[3][0] = "contacto";
// a[3][1] = 8196408499;
// a[4][0] = "Urgencias";
// a[4][1] = 8196408500;
a={
"casa":8196408499,
"oficina":8198238498,
"celular":8196408498,    
}

console.log(a.casa);
var popo = Object.getOwnPropertyNames(a);
pepe = JSON.stringify(a);





      // get the reference for the body
      var tabla=[0][0] = "juanc0a";
      var tabla=[0][1] = "juanc1a";
      var tabla=[0][2] = "juanc2a";
      var tabla=[0][3] = "juanc3a";
      var tabla=[1][0] = "juanc4a";
      var tabla=[1][1] = "juanc5a";
      var tabla=[1][2] = "juanc6a";
      var tabla=[1][3] = "juanc7a";



      var mybody = document.getElementsByTagName("body")[0];

      // creates <table> and <tbody> elements
      mytable = document.createElement("table");
      mytablebody = document.createElement("tbody");

      // creating all cells
      for (var j = 0; j < tabla.length; j++) {
        // creates a <tr> element
        mycurrent_row = document.createElement("tr");

        for (var i = 0; i < tabla[0].length; i++) {
          // creates a <td> element
          mycurrent_cell = document.createElement("td");
          // creates a Text Node
          currenttext = document.createTextNode(tabla[j][i]);
          // appends the Text Node we created into the cell <td>
          mycurrent_cell.appendChild(currenttext);
          // appends the cell <td> into the row <tr>
          mycurrent_row.appendChild(mycurrent_cell);
        }
        // appends the row <tr> into <tbody>
        mytablebody.appendChild(mycurrent_row);
      }

      // appends <tbody> into <table>
      mytable.appendChild(mytablebody);
      // appends <table> into <body>
      mybody.appendChild(mytable);
      // sets the border attribute of mytable to 2;
      mytable.setAttribute("border", "2");
    </script>