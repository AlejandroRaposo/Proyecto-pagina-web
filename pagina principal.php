<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salud express - página principal</title>
  <link rel="shortcut icon" href="assets/img/caduceo16.png" type="image/x-icon" autor="Freepik">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/SCSS/sass.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  <div class="container-fluid">
    <?php
    
  include("assets/components/menu.php") ?>
</div>

  <div class="container-fluid" id="cuerpo">
    <div class="row justify-content-center align-items-center g-2">


<br>

      <h1>  ¿Quienes somos?  </h1>
      <div>
        <div class="reproductor">
          <audio id="player">
          <source src="assets/media/Audio proyecto.mp3" type="audio/mpeg" />
          <source src="assets/media/Audio proyecto.ogg" type="audio/ogg" />
          </audio>

          <button class="reproductor-button" onClick="document.getElementById('player').play()"><img class="reproductor-img" src="assets/img/jugar.png" alt="play" autor="nawicon">Play</img></button>
          <button class="reproductor-button" onClick="document.getElementById('player').pause()"><img class="reproductor-img" src="assets/img/pausa.png" alt="pausar" autor="nawicon">Pause</img></button>
          <button class="reproductor-button" onClick="document.getElementById('player').volume+=O.l"><img class="reproductor-img" src="assets/img/sube-el-volumen.png" alt="subir volumen" autor="paonkz">Vol +</img></button>
          <button class="reproductor-button" onClick="document.getElementById('player').volume-=O.l"><img class="reproductor-img" src="assets/img/volumen-bajo.png" alt="bajar volumen" autor="paonkz">Vol -</img></button>
        </div>
        <div class="transc">
        <button type="button" id="trans_audio">Transcripción del audio</button>
        </div>
      </div> 

      <script>
        let transcripcion = document.getElementById("trans_audio");
        transcripcion.addEventListener("click",()=>{alert("(Canon de pachenbel de fondo) Nuestra clinica fue creada para solucionar el problema de las esperas en las consultas de atención primaria porque, al final, tu salud no espera")});
      </script>

      <br><br>

      <div id="carousel0" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel0" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel0" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel0" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="contenido.php"><img src="assets/img/alimentacion.jpg" class="d-block w-100" alt="Frutas y verduras" autor="Brooke Lark"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>¿Quiénes somos?</h5>
              <p>Somos una empresa de consultas médicas online.</p>
              
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/medicamentos.jpg" class="d-block w-100" alt="Pastillas de diferentes colores" autor="Raimond Klavins"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>¿Por qué creamos Salud express?</h5>
              <p>Por la excesiva lista de espera de la salud pública.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/estetoscopio.jpg" class="d-block w-100" alt="Estetoscopio verde sobre mesa de plástico blanco" autor="Derek Finch"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>Nuestros objetivos</h5>
              <p>Disminuir la espera para acceder a consultas médicas de calidad.</p>
            </div>
          </div>
        </div>
        <div class="carousel-control">
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel0" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        </div>
        <div class="carousel-control">
        <button class="carousel-control-next" type="button" data-bs-target="#carousel0" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        </div>
      </div>


      <br><br>   


      <h1>Ofertas</h1>
      <div id="carousel1" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="contenido.php"><img src="assets/img/alimentacion.jpg" class="d-block w-100" alt="Frutas y verduras" autor="Brooke Lark"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>Oferta alimentación</h5>
              <p>Pregunta a nuestro experto para diseñar una dieta personalizada.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/medicamentos.jpg" class="d-block w-100" alt="Pastillas de diferentes colores" autor="Raimond Klavins"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>Nuevos medicamentos</h5>
              <p>Comprueba la nueva oferta en medicamentos.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/estetoscopio.jpg" class="d-block w-100" alt="Estetoscopio verde sobre mesa de plástico blanco" autor="Derek Finch"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>Consulta anual</h5>
              <p>Realiza tu consulta anual un 15% más barato.</p>
            </div>
          </div>
        </div>
        <div class="carousel-control">
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
      </div>
      <div class="carousel-control">
        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>

      <br><br>


      <h1>Novedades</h1>
      <div id="carousel2" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="contenido.php"><img src="assets/img/pastillas2.jpg" class="d-block w-100" alt="Bote de pastillas con las pastillas derramadas" autor="pina messina"></a>
            <div class="carousel-caption  d-sm-block bg-light">
              <h5>Nuevo tratamiento para la alergia primaveral</h5>
              <p>El nuevo medicamento promete un alivio mayor de los síntomas.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/medicamentos.jpg" class="d-block w-100" alt="Pastillas de diferentes colores" autor="Raimond Klavins"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>Avances en la investigación</h5>
              <p>La universidad de Harvard a realizado un nuevo estudio.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/estetoscopio.jpg" class="d-block w-100" alt="Estetoscopio verde sobre mesa de plástico blanco" autor="Derek Finch"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>Consulta anual</h5>
              <p>Realiza tu consulta anual un 15% más barato.</p>
            </div>
          </div>
        </div>
        <div class="carousel-control">
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        </div>
        <div class="carousel-control">
        <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>

      <br><br>


      <h1>Noticias</h1>
      <div id="carousel3" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="contenido.php"><img src="assets/img/vacunas.jpg" class="d-block w-100" alt="Mano sosteniendo una botella de vacuna con etiqueta blanca y azul" autor="Spencer Davis"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>Comienza la vacunación</h5>
              <p>Pide cita para vacunarte de la gripe.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/medicamentos.jpg" class="d-block w-100" alt="Pastillas de diferentes colores" autor="Raimond Klavins"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>Nuevos medicamentos</h5>
              <p>Comprueba la nueva oferta en medicamentos.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="contenido.php"><img src="assets/img/estetoscopio.jpg" class="d-block w-100" alt="Estetoscopio verde sobre mesa de plástico blanco" autor="Derek Finch"></a>
            <div class="carousel-caption d-sm-block bg-light">
              <h5>Consulta anual</h5>
              <p>Realiza tu consulta anual un 15% más barato.</p>
            </div>
          </div>
        </div>
        <div class="carousel-control">
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        </div>
        <div class="carousel-control">
        <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>


      <br />
      <br />
      <?php
  require_once("assets/components/footer.html") ?>

    </div>
  </div>
 
</body>

</html>