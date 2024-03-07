<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salud express - sala</title>
  <link rel="shortcut icon" href="assets/img/caduceo16.png" type="image/x-icon" autor="Freepik">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container-fluid">
    <?php
    include("assets/components/menu.php") ?>


    <div class="flex-container border bg-success rounded">
      <br>
      <div class="row"><br>
        <img src="assets/img/doctor1.jpg" class="img-thumbnail login" alt="Miniatura de doctor de frente, con mascarilla" author="Ashkan Forouzani">>
        <div class="col text-center">
          <p><strong>Consulta general</strong></p>
          <p><strong>Álberto Pérez</strong></p>
        </div>
      </div>
    </div>

    <div class="flex-container text-center">
      <div class="row row-cols-2 cartas">
        <div class="col-8 border broder-2 bg-white rounded chat">Videoconferencia</div>
        <div class="col-3 border broder-2 bg-white rounded chat">Chat</div>

      </div>
    </div>
    <br><br>

    <div class="flex-container border bg-success rounded">
      <br>
      <div class="row"><br>

        <div class="col text-center">
          <p><strong>Nombre</strong></p>
        </div>
        <img src="assets/img/perfil.png" class="img-thumbnail login" alt=""><br>
      </div>
      <br>
    </div>

    <br><br>

    <div class="container-fluid border rounded">
      <div class="row">
        <div class="col-9">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-2 text-center">
          <br>
          <button class="btn btn-primary contacto">Enviar</button>
        </div>
      </div>
    </div>








    <?php
    include("assets/components/footer.html") ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>