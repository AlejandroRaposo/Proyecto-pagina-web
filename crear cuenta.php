<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salud express - crear cuenta</title>
  <link rel="shortcut icon" href="assets/img/caduceo16.png" type="image/x-icon" autor="Freepik">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/SCSS/sass.css">
</head>

<body>
  <div class="container-fluid">
    <?php
    include("assets/components/menu.php") ?>
    <br /><br />
    <div class="text-center">
      <form action="cuenta creada.php" method="post">
        <div class="row g-3 align-content-center justify-content-center">
          <div class="col-auto">
            <label for="nombre" class="col-form-label">Nombre:</label>
          </div>
          <div class="col-auto">
            <input type="text" class="form-control" id="nombre" placeholder="Alberto" required>
          </div>
        </div>
        <br />

        <div class="row g-3 align-items-center justify-content-center">
          <div class="col-auto">
            <label for="usuario" class="col-form-label">Usuario:</label>
          </div>
          <div class="col-auto">
            <input type="text" class="form-control" id="usuario" placeholder="Alberto123" required>
          </div>
        </div>
        <br />

        <div class="row g-3 align-items-center justify-content-center">
          <div class="col-auto">
            <label for="dni" class="col-form-label">DNI:</label>
          </div>
          <div class="col-auto">
            <input type="dni" id="dni" class="form-control" aria-describedby="dni" required>
          </div>
        </div>
        <br />

        <div class="row g-3 align-items-center justify-content-center">
          <div class="col-auto">
            <label for="email" class="col-form-label">Email:</label>
          </div>
          <div class="col-auto">
            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
          </div>
        </div>
        <br />

        <div class="row g-3 align-items-center justify-content-center">
          <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Contraseña:</label>
          </div>
          <div class="col-auto">
            <input type="password" id="inputPassword6" class="form-control" aria-describedby="password" required>
          </div>



        </div>

        <br>
        <div class="form-check-center form-switch justify-content-center">

          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" required>
          <label class="form-check-label" for="flexSwitchCheckDefault">Acepto los términos y condiciones de uso.</label>

        </div>

        <br>

        <button type="submit" class="btn btn-primary">
          Crear cuenta
        </button>


      </form>

    </div>











    <?php
    include("assets/components/footer.html") ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>