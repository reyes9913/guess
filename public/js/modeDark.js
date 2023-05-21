var botonToggle = document.getElementById('toggle-modo-oscuro');
var cuerpo = document.body; // Puedes cambiar esto por el selector de tu contenedor principal

botonToggle.addEventListener('click', function() {
  cuerpo.classList.toggle('modo-oscuro');
});
