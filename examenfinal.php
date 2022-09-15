<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Examen de auxliatura</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="cabeza">
        <div class="imagen">
          <img src="" alt="Imagen USFX" />
        </div>
        <div class="submenu">
          <di class="submenu1">
            <ul>
              <li><a href="#">Inicio</a></li>
              <li><a href="#" id="lista">Lista</a></li>
              <li><a href="#">Horarios</a></li>
              <li><a href="#">Calificaciones</a></li>
              <li><a href="#">Informes</a></li>
            </ul>
          </di>
          <div id="titulo"><h1>Inicio</h1></div>
        </div>
      </div>
      <div class="cuerpo">
        <div id="menu">
            <div><h2>ASIGNATURAS</h2></div>
            <ul id="materias">
                <li>SIS256</li>
                <li>SIS258</li>
                <li>SIS406</li>
            </ul>
        </div>
        <div id="contenido">
            <div class="contenido-inicio">
                <h3>Examen Final de SIS256</h3>
                <p>Estudiante: Luis Fernando Salgado Miguez</p>
                <p>CU: 111-192</p>
                <?php
                    session_start();

                    if(isset($_SESSION['contador'])) {
                        $contador = $_SESSION['contador'] + 1;
                    } else {
                        $contador = 1;
                    }
                    $_SESSION['contador'] = $contador;
                ?>
                <p>Esta es la <?= $contador ?> que visita la pagina</p>
            </div>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
