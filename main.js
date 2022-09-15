$contenido = document.getElementById("contenido");
$titulo = document.getElementById("titulo");
materiaSeleccionada = "SIS256";

$materias = document.querySelectorAll("#materias li");

pintarMateria();

function pintarMateria() {
  $materias.forEach(($materia) => {
    if ($materia.textContent == materiaSeleccionada) {
      $materia.style.backgroundColor = "gray";
      $materia.style.color = "#fff";
    } else {
      $materia.style.backgroundColor = "#fff";
      $materia.style.color = "#000";
    }
  });
}

$materias.forEach(($materia) => {
  $materia.addEventListener("click", function (event) {
    materiaSeleccionada = event.currentTarget.textContent;
    pintarMateria();
  });
});

document.getElementById("lista").addEventListener("click", function () {
  $contenido.innerHTML = `<form id="obtener">
        <label for="nrocuadros">Nro de Cuadros</label><br>
        <input type="number" id="nrocuadros" name="nrocuadros"/><br>
        <button>Obtener</button>
    </form>`;
  $titulo.innerHTML = "<h1>Lista</h1>";
  document
    .getElementById("obtener")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      const $form = event.target;

      let nrocuadros = $form.nrocuadros.value;

      fetch("datos.php?nro=" + nrocuadros + "&materia=" + materiaSeleccionada)
        .then((response) => response.text())
        .then((data) => {
          $contenido.innerHTML = data;
        });
    });
});
