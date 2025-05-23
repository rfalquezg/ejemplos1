<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Proyectos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Opciones
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                <li><a class="dropdown-item" href="#">Configuración</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL CON SIDEBAR -->
    <div class="container-fluid">
      <div class="row">
        <!-- SIDEBAR -->
        <div class="col-3">
          <ul class="nav flex-column mt-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Panel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mis Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Crear Proyecto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Ayuda</a>
            </li>
          </ul>
        </div>

        <!-- FORMULARIO -->
        <div class="col-9">
          <div class="container mt-4">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <div class="card shadow">
                  <div class="card-body">
                    <h2 class="mb-4">Editar Proyecto</h2>

                    <form action="#" method="POST">
                      @csrf
                      @method('PUT')

                      <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Busca el titulo del proyecto" required>
                      </div>

                      <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" placeholder="Descripcion mostrada..." required></textarea>
                      </div>

                      <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- fin row -->
    </div> <!-- fin container-fluid -->

    <!-- FOOTER -->
    <footer class="py-5 bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md">
            <svg class="mb-2" width="40" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Bootstrap">
              <title>Bootstrap</title>
              <rect width="100%" height="100%" fill="#563d7c" />
              <text x="50%" y="50%" fill="#fff" dy=".3em" text-anchor="middle" font-size="18">A</text>
            </svg>
            <small class="d-block mb-3 text-muted">&copy; 2025</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-light text-decoration-none" href="#">Cool stuff</a></li>
              <li><a class="link-light text-decoration-none" href="#">Random feature</a></li>
              <li><a class="link-light text-decoration-none" href="#">Team feature</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-light text-decoration-none" href="#">Resource</a></li>
              <li><a class="link-light text-decoration-none" href="#">Resource name</a></li>
              <li><a class="link-light text-decoration-none" href="#">Another resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-light text-decoration-none" href="#">Team</a></li>
              <li><a class="link-light text-decoration-none" href="#">Locations</a></li>
              <li><a class="link-light text-decoration-none" href="#">Privacy</a></li>
              <li><a class="link-light text-decoration-none" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>