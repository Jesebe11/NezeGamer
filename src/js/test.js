document.body.onload = addElement;
function addElement () {
    // crea un nuevo div
    // y añade contenido
    var newDiv = document.createElement("div");
    var newContent = document.createTextNode("Hola!¿Qué tal?");
    newDiv.appendChild(newContent); //añade texto al div creado.
  
    // añade el elemento creado y su contenido al DOM
    var currentDiv = document.getElementByClassName(".current-cat");
    document.body.insertBefore(newDiv, currentDiv);
}