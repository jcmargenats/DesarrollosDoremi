function adddoc()
{
  // Obtener la referencia del elemento div
  var z_tblbody = document.getElementsByName("tbodynumdoc")[0];
  //===============================================================
  // Crea primera linea de la tabla
  //===============================================================
  var z_fila = document.createElement("tr")
  // Celda pour le Select/option
  var z_celda = document.createElement("td")
  var z_select = document.createElement("select")
  for (i in $typdoc) 
  {
    var z_option = document.createElement("option")
    z_option.value = i;
    z_option.text = $typdoc[i][1]
    z_select.appendChild(z_option)
    z_celda.appendChild(z_select)
  }  
  z_fila.appendChild(z_celda)
  // Celda pour l'input    
  var z_celda = document.createElement("td")
  var z_input = document.createElement("input")  
  z_celda.appendChild(z_input)
  z_fila.appendChild(z_celda)
  // Celda pour le bouton add (+)
  var z_celda = document.createElement("td")
  var z_btn = document.createElement("button")
  z_btn.type = "button"
  z_btn.name = "btnadd"
  z_btn.innerText = "+"
  z_celda.appendChild(z_btn)
  z_fila.appendChild(z_celda)
  // Ajouter la ligne dans le table
  z_tblbody.appendChild(z_fila)

  //===========================================================================
  // Elements existants 
  //===========================================================================
  for(i in $numdoc)
  { 
    var z_fila = document.createElement("tr")
    // Celda pour le Select/option
    var z_celda = document.createElement("td")
    // Celda pour items existents (Type document)    
    var z_celda = document.createElement("td")
    var z_text = document.createTextNode(i)
    z_celda.appendChild(z_text)
    z_fila.appendChild(z_celda)
    // Celda pour items existents(Numéro de document)  
    var z_celda = document.createElement("td")
    var z_text = document.createTextNode($numdoc[i])
    z_celda.appendChild(z_text)
    z_fila.appendChild(z_celda)
    // Celda pour le bouton moins (-)
    var z_celda = document.createElement("td")
    var z_btn = document.createElement("button")
    z_btn.type = "button"
    z_btn.innerText = "-"
    z_celda.appendChild(z_btn)
    z_fila.appendChild(z_celda)
    // Ajouter la ligne dans le table
    z_tblbody.appendChild(z_fila) 
  }
}
function addligne()
{
  if(btnadd)
  {
      alert("funciona!")
  }    
}