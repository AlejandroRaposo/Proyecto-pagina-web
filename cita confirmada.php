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

<body onLoad="redireccionar()">
  <div class="container-fluid">
    <?php
    include("assets/components/menu.php") ?>



    <div class="row g-3 align-content-center justify-content-center">
      <img class="imagen3" src="assets/img/marca-de-verificacion.png" alt="">
      <h1><b>Su cita ha sido confirmada, gracias por confiar en nosotros</b></h1>
    </div>

    <script>
      function redireccionar() {
        setTimeout("location.href='pagina principal.php'", 5000);
      }
    </script>









    <?php
    include("assets/components/footer.html") ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>