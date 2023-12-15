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
  <div class="container-fluid">
    <?php
    include("assets/components/menu.php") ?>

    <div>
      <h1><strong>Atención al cliente</strong></h1>
    </div>
    <br><br>


    <div>
      <div class="container border border-black rounded text-center">
        <br><br>
        <img class="img-fluid imagen2" src="assets/img/recepcion.jpg" alt="">
        <h1>Atención al cliente</h1>
        <p>Nuestro recepcionista estará siempre encantado de ayudarte si tienes algún problema o no sabes a que especialidad deberías acudir.</p>
        <br>
        <h1>Nuestros empleados en atención al cliente</h1>
        <div class="row cartas">
          <div class="card border-black" style="width: 18rem;">
            <img src="assets/img/doctor 11.jpg" class="card-img-top img-thumbnail" alt="enfermero sosteniendo una jeringuilla">
            <div class="card-body">
              <h5 class="card-title">Carlos Martinez</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Enfermero</h6>
              <p class="card-text">Descripción de los tipos de caso de los que se encarga.</p>
              <a href="especialista.php" class="btn btn-primary">Datos del empleado</a>
              <br><br>
              <a href="pedir cita.php" class="btn btn-primary">Contacta</a>
            </div>
          </div>
        </div>
        <br><br>
      </div>
    </div>
  </div>













  <?php
  include("assets/components/footer.html") ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>