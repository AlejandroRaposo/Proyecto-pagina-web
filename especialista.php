<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salud express - especialista</title>
  <link rel="shortcut icon" href="assets/img/caduceo16.png" type="image/x-icon" autor="Freepik">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/SCSS/sass.css">
</head>

<body>
  <div class="container-fluid">
    <?php
    include("assets/components/menu.php") ?>


    <br><br>
    <div class="container text-center">
      <img src="assets/img/doctor 11.jpg" class="img-thumbnail retrato" alt="Enfermero sosteniendo una jeringuilla" author="Dim Hou">
    </div>
    <br><br>
    <div class="border border-2 rounded border-black text-center bg-success-subtle">
      <h1>Atención al cliente</h1>
      <h1>Carlos Martinez</h1>
      <br><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur vitae veritatis assumenda voluptatibus omnis, sed voluptates incidunt ratione esse facilis. Libero saepe quam unde eos quos reprehenderit, esse ipsa voluptate.</p>
    </div>

    <br><br>

    <div class="container text-center">
      <h1>Valoraciones</h1>
    </div>
    <br><br>
    <div>
      <div class="border border-2 rounded border-black text-center">
        <div class="d-flex p-2 flex-column bg-danger-subtle">
          <p>Nombre de usuario: Usuario 1</p>
          <p>Valoración del paciente: Puntuación</p>
        </div>
        <div class="border border-success bg-success-subtle">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium inventore, illo aut iste doloribus, molestiae rem repellat et eaque vel, temporibus cumque earum debitis dignissimos dicta. Molestias debitis obcaecati praesentium.</p>
          <video width="320px" height="320px" controls>
            <source src="assets/media/Resena3.mp4">
            <track src="assets/media/Resena3.vtt">
           
          </video>
        </div>
      </div>

    </div>

  </div>













  <?php
  include("assets/components/footer.html") ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>