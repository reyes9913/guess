// Obtén la ventana modal
var modal = document.getElementById("myModal");

// Obtén el botón que abre la ventana modal
var btn = document.getElementById("myBtn");

// Obtén el elemento span que cierra la ventana modal
var span = document.getElementsByClassName("close")[0];

// Cuando se hace clic en el botón, muestra la ventana modal
btn.onclick = function() {
  modal.style.display = "block";
}

// Cuando se hace clic en el elemento span (x), cierra la ventana modal
span.onclick = function() {
  modal.style.display = "none";
}

// Cuando se hace clic fuera de la ventana modal, cierra la ventana modal
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
