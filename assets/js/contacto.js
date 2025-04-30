document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const alert = document.getElementById("formAlert");
  
    form.addEventListener("submit", function (event) {
      event.preventDefault(); // Evita que se envíe el formulario
  
      // Muestra la alerta
      alert.classList.remove("d-none");
  
      // Oculta la alerta luego de 4 segundos
      setTimeout(() => {
        alert.classList.add("d-none");
      }, 4000);
  
      // Limpia los campos del formulario
      form.reset();
    });
  });
  