<header id="cabecera">
  
    <div class="inicioCabecera">
      <a href="pagina principal.php"><img src="assets/img/caduceo.png" alt="Logo Salud express" autor="Freepik"></a>

      <div>
        <h2>Salud express</h2>
        <h5>Porque tu salud no debería esperar</h5>
      </div>

      <div class="dropdown">
        <img class="login" src="assets/img/perfil.png" alt role="button" data-bs-toggle="dropdown" aria-expanded="false" autor="Freepik">
        <ul class="dropdown-menu">
          <div class="container">

            <form>
              <div class="mb-3 form-floating">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="usuario">
                <label for="nombre" class="form-label">Usuario:</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="password" class="form-control" id="clave" name="clave" placeholder="clave">
                <label for="clave" class="form-label">Clave:</label>
              </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Recuérdame
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
            <br />
          </div>
          <li><a class="dropdown-item" href="crear cuenta.php">Crear cuenta</a></li>
        </ul>
      </div>
    </div>

    <nav class="navbar navbar-expand-xl" aria-label="Offcanvas navbar large">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="false" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menú</h5>
            <button type="button" class="btn-close btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="navbar col nav-fill flex-column flex-xl-row">
              <div class="btn-group">
                <a class="link-light btn btn-success boton" role="button" href="especialidades.php">Especialidades</a>
                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="especialidad.php">Atención al cliente</a></li>
                  <li><a class="dropdown-item" href="especialidad.php">Consulta general</a></li>
                  <li><a class="dropdown-item" href="especialidad.php">Psicología</a></li>
                  <li><a class="dropdown-item" href="especialidad.php">Nutrición</a></li>
                  <li><a class="dropdown-item" href="especialidad.php">Traumatología</a></li>
                </ul>
              </div>

              <div class="btn-group">
                <a class="link-light btn btn-success boton" role="button" href="especialistas.php">Especialistas</a>
                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="especialista.php">Alberto Pérez</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Nick Riviera</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Rocio García</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Carla Díaz</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Pablo Lara</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Álvaro Rocinante</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Rosa Gómez</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Pedro García</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Lidia Nuñez</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Roberto Pérez</a></li>
                  <li><a class="dropdown-item" href="especialista.php">Carlos Martinez</a></li>

                </ul>
              </div>

              <div class="btn-group">
                <a class="btn btn-success boton" href="gestion de citas.php" role="button">Gestión de
                  citas</a>
              </div>
              <div class="btn-group">
                <a class="btn btn-success boton" href="sala.php" role="button">Salas de citas</a>
              </div>
              <div class="btn-group">

                <a class="btn btn-success boton" href="condiciones.php" role="button">Condiciones
                  generales</a>
              </div>

              <form class="d-flex buscador" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Buscar</button>
              </form>

            </div>
          </div>
        </div>
    </nav>
</header>