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


    <div class="border border-2 rounded border-black">
      <br>
      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <p><b>Fecha:</b></p>
        </div>

        <div class="col-auto">
          <p><b>2023-12-20</b></p>
        </div>

        <br><br>
        <div class="col-auto">
          <p><b>Hora:</b></p>
        </div>

        <div class="col-auto">
          <p><b>13:00 - 13:30</b></p>
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
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cancelar cita
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">¿Seguro que quieres cancelar la cita?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Una vez cancelada es posible que no puedas pedir otra a la misma hora.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, no quiero cancelar la cita</button>
                  <button type="button" class="btn btn-danger">Si, quiero cancelarla</button>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-auto">
          <a class="btn btn-success" role="button" href="sala.php">Ir a sala</a>
        </div>

      </div>
      <br><br>


    </div>


    <br><br>


    <div class="border border-2 rounded border-black">
      <br>
      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <p><b>Fecha:</b></p>
        </div>

        <div class="col-auto">
          <p><b>2023-12-21</b></p>
        </div>

        <br><br>
        <div class="col-auto">
          <p><b>Hora:</b></p>
        </div>

        <div class="col-auto">
          <p><b>17:00 - 17:30</b></p>
        </div>
      </div>

      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <p><b>Especialidad:</b></p>
        </div>

        <div class="col-auto">
          <p><b>Psicología</b></p>
        </div>
      </div>


      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <p><b>Doctor:</b></p>
        </div>

        <div class="col-auto">
          <p><b>Nick Riviera</b></p>
        </div>
      </div>

      <br><br>

      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <p><b>Precio:</b></p>
        </div>

        <div class="col-auto">
          <p><b>32 €</b></p>
        </div>
      </div>

      <br><br>

      <div class="row g-3 align-content-center justify-content-center">
        <div class="col-auto">
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cancelar cita
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">¿Seguro que quieres cancelar la cita?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Una vez cancelada es posible que no puedas pedir otra a la misma hora.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, no quiero cancelar la cita</button>
                  <button type="button" class="btn btn-danger">Si, quiero cancelarla</button>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-auto">
          <a class="btn btn-success" role="button" href="sala.php">Ir a sala</a>
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