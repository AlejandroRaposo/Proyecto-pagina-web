<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salud express</title>
  <link rel="shortcut icon" href="assets/img/caduceo16.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <div class="container-fluid" id="cuerpo">
    <div class="row justify-content-center align-items-center g-2">


<br>
    <?php
  include("assets/components/menu.php") ?>

      <h1>¿Quienes somos?</h1>
      <div id="carousel0" class="carousel slide carousel-fade " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel0" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel0" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel0" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="contenido.php"><img src="assets/img/alimentacion.jpg" class="d-block w-100" alt="Frutas y verduras"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>¿Quiénes somos?</h5>
              <p>Somos una empresa de consultas médicas online.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/medicamentos.jpg" class="d-block w-100" alt="Pastillas"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>¿Por qué creamos Salud express?</h5>
              <p>Por la excesiva lista de espera de la salud pública.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/estetoscopio.jpg" class="d-block w-100" alt="Estetoscopio verde"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>Nuestros objetivos</h5>
              <p>Disminuir la espera para acceder a consultas médicas de calidad.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel0" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel0" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>




      <h1>Ofertas</h1>
      <div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="contenido.php"><img src="assets/img/alimentacion.jpg" class="d-block w-100" alt="Frutas y verduras"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>Oferta alimentación</h5>
              <p>Pregunta a nuestro experto para diseñar una dieta personalizada.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/medicamentos.jpg" class="d-block w-100" alt="Pastillas"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>Nuevos medicamentos</h5>
              <p>Comprueba la nueva oferta en medicamentos.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/estetoscopio.jpg" class="d-block w-100" alt="Estetoscopio verde"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>Consulta anual</h5>
              <p>Realiza tu consulta anual un 15% más barato.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



      <h1>Novedades</h1>
      <div id="carousel2" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="contenido.php"><img src="assets/img/pastillas2.jpg" class="d-block w-100" alt="Frutas y verduras"></a>
            <div class="carousel-caption  d-sm-block bg-dark">
              <h5>Nuevo tratamiento para la alergia primaveral</h5>
              <p>El nuevo medicamento promete un alivio mayor de los síntomas.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/medicamentos.jpg" class="d-block w-100" alt="Pastillas"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>Avances en la investigación</h5>
              <p>La universidad de Harvard a realizado un nuevo estudio.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/estetoscopio.jpg" class="d-block w-100" alt="Estetoscopio verde"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>Consulta anual</h5>
              <p>Realiza tu consulta anual un 15% más barato.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <h1>Noticias</h1>
      <div id="carousel3" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="contenido.php"><img src="assets/img/vacunas.jpg" class="d-block w-100" alt="Frutas y verduras"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>Comienza la vacunación</h5>
              <p>Pide cita para vacunarte de la gripe.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/medicamentos.jpg" class="d-block w-100" alt="Pastillas"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>Nuevos medicamentos</h5>
              <p>Comprueba la nueva oferta en medicamentos.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/estetoscopio.jpg" class="d-block w-100" alt="Estetoscopio verde"></a>
            <div class="carousel-caption d-sm-block bg-dark">
              <h5>Consulta anual</h5>
              <p>Realiza tu consulta anual un 15% más barato.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <br />
      <br />
      <?php
  require_once("assets/components/footer.html") ?>

    </div>
  </div>
 
</body>

</html>