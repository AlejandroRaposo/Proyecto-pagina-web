<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salud express - confirmar cita</title>
  <link rel="shortcut icon" href="assets/img/caduceo16.png" type="image/x-icon" autor="Freepik">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/SCSS/sass.css">
</head>

<body>
  <div class="container-fluid">
    <?php
    include("assets/components/menu.php") ?>

    <br><br>
    <div>
      <h1>Ya se casi ha reservado su cita, compruebe que todos los datos son correctos antes de confirmarla</h1>
    </div>


    <br><br>


    <div class="border border-2 rounded border-black">
      <br>
      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <p><b>Fecha:</b></p>
        </div>

        <div class="col-auto">
          <p><b><?php echo $_POST["fecha"] ?></b></p>
        </div>

        <br><br>
        <div class="col-auto">
          <p><b>Hora:</b></p>
        </div>

        <div class="col-auto">
          <p><b><?php echo $_POST["btnradio"] ?></b></p>
        </div>
      </div>

      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <p><b>Especialidad:</b></p>
        </div>

        <div class="col-auto">
          <p><b>Consulta general</b></p>
        </div>
      </div>


      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <p><b>Doctor:</b></p>
        </div>

        <div class="col-auto">
          <p><b>Alberto Pérez</b></p>
        </div>
      </div>

      <br><br>

      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <p><b>Precio:</b></p>
        </div>

        <div class="col-auto">
          <p><b>22 €</b></p>
        </div>
      </div>

      <br><br>

      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <a class="btn btn-danger" role="button" href="pagina principal.php">Cancelar cita</a>
        </div>

        <div class="col-auto">
          <a class="btn btn-success" role="button" href="cita confirmada.php">Confirmar cita</a>
        </div>

      </div>
      <br><br>


    </div>









    <?php
    include("assets/components/footer.html") ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>