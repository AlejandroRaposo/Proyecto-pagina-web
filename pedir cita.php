<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salud express - pedir cita</title>
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
        <img src="assets/img/doctor1.jpg" class="img-thumbnail login" alt="Miniatura de doctor de frente, con mascarilla" author="Ashkan Forouzani">
        <div class="col text-center">
          <p><strong>Consulta general</strong></p>
          <p><strong>Álberto Pérez</strong></p>
        </div>
      </div>
    </div>

    <div>
      <form action="confirmar cita.php" method="post">

        <div class="container-fluid">
          <br><br>
          <div class="row g-3 align-content-center justify-content-center">
            <div class="col-auto"><label for="fecha" class="form-label">Dia:</label></div>
            <div class="col-auto"><input type="date" name="fecha" id="fecha" required></div>

          </div>
        </div>

        <br><br>

        <div class="container-fluid">
          <br><br>
          <div class="row g-3 align-content-center justify-content-center">
            <div class="col-auto"> <input type="radio" class="btn-check" value="07:30 - 08:00" name="btnradio" id="btnradio1" autocomplete="off" required>
              <label class="btn btn-outline-primary" for="btnradio1">07:30 - 08:00</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="08:00 - 08:30" name="btnradio" id="btnradio2" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio2">08:00 - 08:30</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="08:30 - 09:00" name="btnradio" id="btnradio3" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio3">08:30 - 09:00</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="09:00 - 09:30" name="btnradio" id="btnradio4" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio4">09:00 - 09:30</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="09:30 - 10:00" name="btnradio" id="btnradio5" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio5">09:30 - 10:00</label>
            </div>

          </div>

          <br><br>
          <div class="row g-3 align-content-center justify-content-center">
            <div class="col-auto"> <input type="radio" class="btn-check" value="10:00 - 10:30" name="btnradio" id="btnradio6" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio6">10:00 - 10:30</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="10:30 - 11:00" name="btnradio" id="btnradio7" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio7">10:30 - 11:00</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="11:00 - 11:30" name="btnradio" id="btnradio8" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio8">11:00 - 11:30</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="11:30 - 12:00" name="btnradio" id="btnradio9" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio9">11:30 - 12:00</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="12:00 - 12:30" name="btnradio" id="btnradio10" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio10">12:00 - 12:30</label>
            </div>

          </div>

          <br><br>
          <div class="row g-3 align-content-center justify-content-center">
            <div class="col-auto"> <input type="radio" class="btn-check" value="12:30 - 13:00" name="btnradio" id="btnradio11" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio11">12:30 - 13:00</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="13:00 - 13:30" name="btnradio" id="btnradio12" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio12">13:00 - 13:30</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="13:30 - 14:00" name="btnradio" id="btnradio13" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio13">13:30 - 14:00</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="14:00 - 14:30" name="btnradio" id="btnradio14" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio14">14:00 - 14:30</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="14:30 - 15:00" name="btnradio" id="btnradio15" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio15">14:30 - 15:00</label>
            </div>

          </div>

          <br><br>
          <div class="row g-3 align-content-center justify-content-center">
            <div class="col-auto"> <input type="radio" class="btn-check" value="16:30 - 17:00" name="btnradio" id="btnradio1" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio1">16:30 - 17:00</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="17:00 - 17:30" name="btnradio" id="btnradio1" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio1">17:00 - 17:30</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="17:30 - 18:00" name="btnradio" id="btnradio1" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio1">17:30 - 18:00</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="18:00 - 18:30" name="btnradio" id="btnradio1" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio1">18:00 - 18:30</label>
            </div>

            <div class="col-auto"> <input type="radio" class="btn-check" value="18:30 - 19:00" name="btnradio" id="btnradio1" autocomplete="off">
              <label class="btn btn-outline-primary" for="btnradio1">18:30 - 19:00</label>
            </div>

          </div>




        </div>

        <br><br>

        <div class="row g-3 align-content-center justify-content-center">
          <div class="col-auto"><button type="submit" class="btn btn-primary">
              Pedir cita
            </button>
          </div>
        </div>


      </form>
    </div>












    <?php
    include("assets/components/footer.html") ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>